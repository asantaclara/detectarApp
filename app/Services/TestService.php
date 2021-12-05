<?php

namespace App\Services;

use App\Helpers\MailHelper;
use App\Models\HealthConditionType;
use App\Models\QuestionPossibleAnswer;
use App\Models\Test;
use App\Models\TestQuestion;
use App\Models\TestQuestionPossibleAnswer;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class TestService {

    public function __construct() {
        
    }

    public function storeAnswer($request)
    {
        $answer_value = $request->answer_value;
        
        $is_color_blindness_question = TestQuestion::join('question_possible_answers as qps', 'test_questions.id', 'qps.test_question_id')
            ->join('health_conditions as hc', 'hc.id', 'qps.health_condition_id')
            ->join('health_condition_types as hct', 'hct.id', 'hc.health_condition_type_id')
            ->where('test_questions.id',$request->question_id)
            ->where('hct.name', 'Daltonismo')
            ->count();
        if($is_color_blindness_question && $request->answer_value == null) {
            $answer_value = 9999;
        } else if($request->answer_value != null) {
            $question_possible_answer = QuestionPossibleAnswer::where('test_question_id', $request->question_id)
                ->where('min_value', '<=', $answer_value)
                ->where('max_value', '>=', $answer_value)
                ->first();        
            if($question_possible_answer) {
                TestQuestionPossibleAnswer::create([
                    'test_id' => $request->test_id,
                    'question_possible_answer_id' => $question_possible_answer->id,
                    'answer' => $answer_value
                ]);
            }
        }
    }

    public function getNextQuestion($test_id, $user_birthday)
    {
        $test = Test::where('id', $test_id)->first();
        if(count($test->answers) >= config('constants.max_questions')) { 
            info('finaliza la prubea por max preguntas');
            info(count($test->answers).' de '. config('constants.max_questions'));
            return null;
        }
        $user_age = Carbon::parse($user_birthday)->age;
        $done_questions = Test::join('test_question_possible_answers as tqps', 'tqps.test_id', 'tests.id')
            ->join('question_possible_answers as qps', 'qps.id', 'tqps.question_possible_answer_id')
            ->join('test_questions as tq', 'tq.id', 'qps.test_question_id')
            ->where('tests.id', $test_id)
            ->select('tq.id')
            ->distinct()
            ->get();
        $health_conditions = Test::join('test_question_possible_answers as tqps', 'tqps.test_id', 'tests.id')
            ->join('question_possible_answers as qps', 'qps.id', 'tqps.question_possible_answer_id')
            ->join('health_conditions as hc', 'hc.id', 'qps.health_condition_id')
            ->join('health_condition_types as hct', 'hct.id', 'hc.health_condition_type_id')
            ->groupBy('hct.id', 'hc.healthy', 'hc.name')
            ->where('tests.id', $test_id)
            ->selectRaw('hct.id as health_condition_type_id, hc.healthy, hc.name as hcName, count(*) as count')
            ->get();
        $health_condition_matrix = $this->createHealthConditionMatrix($health_conditions);
        $next_health_condition_types = $this->getNextHealtConditionTypes($health_condition_matrix);
        info('HealthMatrix');
        info($health_condition_matrix);
        info('NextType');
        info($next_health_condition_types);
        if(config('constants.activate_auto_finish') && !$next_health_condition_types) {
            info('Corte de prueba por validacion de todas las patologias');
            return null;
        }
        $question = TestQuestion::join('question_possible_answers as qps', 'qps.test_question_id', 'test_questions.id')
            ->join('health_conditions as hc', 'hc.id', 'qps.health_condition_id')
            ->join('health_condition_types as hct', 'hct.id', 'hc.health_condition_type_id')
            ->where('view_path', '!=', '')
            ->where('min_age', '<=', $user_age)
            ->where('max_age', '>=', $user_age)
            ->whereNotIn('test_questions.id', $done_questions)
            ->whereIn('hct.id', $next_health_condition_types)
            ->select('test_questions.*')
            ->inRandomOrder()->first();
        return $question;
    }

    private function createHealthConditionMatrix($health_conditions){
        $health_condition_types = HealthConditionType::whereExists(function ($query) {
            $query->select(DB::raw(1))
                ->from('question_possible_answers as qpa')
                ->join('health_conditions as hc', 'hc.id', 'qpa.health_condition_id')
                ->whereRaw('hc.health_condition_type_id = health_condition_types.id');
        })->get();
        foreach($health_condition_types as $hct) {
            $health_condition_matrix[$hct->id] = 0;
        }
        foreach($health_conditions as $hc) {
            $value = $hc->healthy ? config('constants.points_ok_condition') : config('constants.point_wrong_condition');
            $health_condition_matrix[$hc->health_condition_type_id] += ($hc->count * $value);
        }
        return $health_condition_matrix;
    }

    private function getNextHealtConditionTypes($health_condition_matrix) {
        $possible_health_conditions = array_filter($health_condition_matrix, function ($item) {
            // If value of health condition is out of range we know that the user is ok or has the health condition.
            return $item < config('constants.max_points_health_condition') && $item > (config('constants.min_points_health_condition')); 
        });
        if(count($possible_health_conditions) > 0) {
            return array_keys($possible_health_conditions);
        } else {
            return null;
        }
    }

    private function getTestAnswers($test_id) {
        return  Test::join('test_question_possible_answers as tqps', 'tqps.test_id', 'tests.id')
        ->join('question_possible_answers as qps', 'qps.id', 'tqps.question_possible_answer_id')
        ->join('health_conditions as hc', 'hc.id', 'qps.health_condition_id')
        ->join('health_condition_types as hct', 'hct.id', 'hc.health_condition_type_id')
        ->groupBy('hct.id', 'hc.healthy', 'hc.name')
        ->where('tests.id', $test_id)
        ->selectRaw('hct.id as health_condition_type_id, hc.healthy, hc.name as hcName, count(*) as count')
        ->get();
    }

    public function getHealtConditionMatrix($test_id){
        $health_conditions = $this->getTestAnswers($test_id);
        $matrix =  $this->createHealthConditionMatrix($health_conditions);
        $aux = [];
        $health_condition_types = HealthConditionType::all();
        foreach($matrix as $key => $m) {
            $aux[$health_condition_types->where('id',$key)->first()->name] = $m;
        }
        return $aux;
    }

    private function getAnswersPercentages($test_id)
    {
        $health_conditions = $this->getTestAnswers($test_id);
        $percentages = $this->createHealthConditionPercentages($health_conditions);
        $health_condition_types = HealthConditionType::all();
        foreach($percentages as $key => $m) {
            $aux[$health_condition_types->where('id',$key)->first()->name] = $m;
        }
        return $aux;
    }

    private function createHealthConditionPercentages($health_conditions){
        $health_condition_types = HealthConditionType::whereExists(function ($query) {
            $query->select(DB::raw(1))
                ->from('question_possible_answers as qpa')
                ->join('health_conditions as hc', 'hc.id', 'qpa.health_condition_id')
                ->whereRaw('hc.health_condition_type_id = health_condition_types.id');
        })->get();
        foreach($health_condition_types as $hct) {
            $health_condition_percentage[$hct->id] = 100;
        }
        foreach($health_conditions->groupBy('health_condition_type_id') as $hct) {
            foreach($hct as $key => $hc) {
                $question_qty = $hct->sum('count');
                $ok_answers = $hct->where('healthy',1)->sum('count');
                $health_condition_percentage[$hc->health_condition_type_id] = round(100 * (($question_qty == 0) ? 1 : $ok_answers/$question_qty),2);
            }
        }
        return $health_condition_percentage;
    }

    private function getRandomQuestionForUser($user)
    {
        $age = Carbon::parse($user->birthday)->age;
        return TestQuestion::where('view_path', '!=', '')
            ->where('min_age', '<=', $age)
            ->where('max_age', '>=', $age)
            ->inRandomOrder()
            ->first();
    }

    public function createNewTest($user) 
    {
        $test = Test::create([
            'user_id' => $user->id
        ]);
        $question = $this->getRandomQuestionForUser($user);
        return [
            'test' => $test,
            'question' => $question
        ];
    }

    public function processAnswer($request, $user)
    {
        $test = Test::find($request->test_id);
        if(!$request->filled('finalizarTest')) {
            $this->storeAnswer($request);
            $nextQuestion = $this->getNextQuestion($request->test_id, $user->birthday);
            if($nextQuestion) {
                return [
                    'action' => 'next-question',
                    'test' => $test,
                    'question_number' => count($test->answers)+1,
                    'question' => $nextQuestion,
                ];
            }
        }
        return [
            'action' => 'end-test',
            'test' => $test,
        ];
    }

    public function endTest($user, $test)
    {
        $healt_matrix = $this->getHealtConditionMatrix($test->id);
        $report_array = $this->getPossibleDifficulties($healt_matrix);
        $percentages_array = $this->getAnswersPercentages($test->id);
        if(config('constants.activate_mails')) {
            $this->sendMail($user, $report_array, $percentages_array);
        }
    }

    private function getPossibleDifficulties($healt_matrix) {
        return array_filter($healt_matrix, function($k) {
            return $k < 0;
        });
    }

    private function sendMail($user, $report_array, $percentages_array)
    {
        $recipient = $user->email;
        $subject = 'Hola '.$user->name.'! ¡El resultado de la prueba ya esta disponible! Equipo DetectAR!';
        $possible_health_conditions_string = MailHelper::natural_language_join(array_keys($report_array));
                    $data = [
                        'user_name' => $user->name,
                        'user_birthday' => Carbon::parse($user->birthday)->format('d/m/Y'),
                        'user_age' => Carbon::parse($user->birthday)->diff(Carbon::now())->format('%y años y %m meses'),
                        'today' => Carbon::now()->format('d/m/Y'),
                        'porcentaje_daltonismo' => $percentages_array['Daltonismo'],
                        'porcentaje_disortografia' => $percentages_array['Disortografia'],
                        'porcentaje_discalculia' => $percentages_array['Discalculia'],
                        'diagnostico' => $possible_health_conditions_string,
                        'all_ok' => count($report_array) == 0
                    ];
        MailHelper::sendMail($data, $recipient, $subject);
    }
}