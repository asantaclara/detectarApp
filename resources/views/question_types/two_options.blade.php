<div class="form-group text-center" id="active_question">
    <label>{{$question->text}}</label>
    <div>
        <img src="{{asset('images/'.$question->img_path)}}" class="img" alt="Pregunta">
    </div>
    <div>
        @foreach ($question->possible_answers as $answer)
            <button class="btn btn-primary" type="submit" name="answer_value" value="{{$answer->min_value}}">{{$answer->min_value}}</button>
        @endforeach
    </div>
</div>
