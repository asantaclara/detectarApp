<div class="form-group text-center" id="active_question">
    <h4><label>{{$question->text}}</label></h4>
    <div>
        <div class="mx-auto" style="width: 200px;">
            @foreach ($question->possible_answers as $answer)
                <button class="btn btn-primary" type="submit" name="answer_value" value="{{$answer->min_value}}">{{$answer->min_value}}</button>
            @endforeach
        </div>
    </div>
</div>
