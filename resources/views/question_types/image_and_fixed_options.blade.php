<div class="form-group text-center" id="active_question">
    <h4><label>{{$question->text}}</label></h4>
    <div>
        <img src="{{asset('images/'.$question->img_path)}}" class="img" style="max-width: 300px" alt="Pregunta">
    </div>
    <div>
        <div class="mx-auto my-2" style="width: 200px;">
            @foreach ($question->possible_answers as $answer)
                <button class="btn btn-primary" type="submit" name="answer_value" value="{{$answer->min_value}}">{{$answer->min_value}}</button>
            @endforeach
        </div>
    </div>
</div>
