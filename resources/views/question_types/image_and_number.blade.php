<div class="form-group text-center" id="active_question">
    <h4><label>{{$question->text}}</label></h4>
    <div>
        <img src="{{asset('images/'.$question->img_path)}}" class="img" style="max-width: 300px" alt="Responsive image">
    </div>
    <div>
        <div class="mx-auto my-2" style="width: 200px;">
            <input type="number" min="0" max="99" class="form-control" id="number" name="answer_value">
        </div>
        @include("components.keyboard")
        <div class="mx-auto" style="width: 200px;">
            <button class="btn btn-primary" type="submit" name="submit">ACEPTAR</button>
        </div>
    </div>
</div>
