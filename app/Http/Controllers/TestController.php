<?php

namespace App\Http\Controllers;

use App\Models\QuestionPossibleAnswer;
use App\Models\Test;
use App\Models\TestQuestion;
use App\Models\TestQuestionPossibleAnswer;
use App\Models\User;
use App\Services\TestService;
use Carbon\Carbon;
use Database\Seeders\UserSeeder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;

class TestController extends Controller
{

    protected $testService;

    
    public function __construct(TestService $testService)
    {
        $this->testService = $testService;
    }

    public function home()
    {
        return view('welcome');
    }

    public function newTest()
    {
        $user = Auth::user();
        $data = $this->testService->createNewTest($user);
        return view('test',[
            'test' => $data['test'],
            'question_number' => count($data['test']->answers)+1,
            'question' => $data['question'],
        ]);
    }

    public function nextQuestion(Request $request)
    {
        $this->validate($request, [
            'test_id' => ['required', 'exists:tests,id'],
            'question_id' => ['required', 'exists:test_questions,id'],
        ]);
        $user = Auth::user();
        $data = $this->testService->processAnswer($request, $user);
        if($data['action'] == 'next-question') {
            return view('test',$data);
        } else {
            return $this->endTest($user, $data['test']);
        }
    }

    public function endTest($user, $test)
    {
        $this->testService->endTest($user, $test);
        return view('end-test');
    }
}
