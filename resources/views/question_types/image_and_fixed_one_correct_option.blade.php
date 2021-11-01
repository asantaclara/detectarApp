<div class="form-group text-center" id="active_question">
    <h4><label>{{$question->text}}</label></h4>
    <div>
        <img src="{{asset('images/'.$question->img_path)}}" class="img" style="max-width: 300px" alt="Pregunta">
    </div>
    <div class="d-inline-flex p-2">
            @php
                $possible_answers = $question->possible_answers->shuffle();
            @endphp
            @foreach ($possible_answers as $i => $answer)
                @php
                    if($answer->healthyAnswer()) {
                        $ok_value = $answer->min_value;
                    } else {
                        $wrong_value = $answer->min_value;
                    }
                @endphp
                <div class="p-2" style="margin-left:15px; margin-right:15px;">
                    <img src="{{asset('images/'.$answer->img_path)}}" class="img possibleAnswer" style="max-height: 30px" 
                        alt="Pregunta" id={{'answer-'.$i}} seleccionado=false healthyAnswer={{$answer->healthyAnswer()}}
                        onclick="javascript:addAnswer('{{$answer->healthyAnswer()}}', '{{'answer-'.$i}}')">                            
                </div>                
            @endforeach
    </div>
    <input type="hidden" class="form-control" id="number" name="answer_value">
    <div class="mx-auto" style="width: 200px;">
        <button class="btn btn-primary" type="submit" name="submit" onclick="return formatAnswer();">ACEPTAR</button>
    </div>
</div>
@section('scripts')
    @include('js.format_answer')
@endsection