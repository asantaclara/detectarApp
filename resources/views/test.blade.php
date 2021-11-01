@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" style="min-width: 800px">
                        <form method="POST" action="{{ route('next-question') }}">
                        <div class="card-header">
                            <div class="column">
                                {{'Prueba Nº '.($test->id ?? 0).' - Pregunta Nº '.$question->id }}
                            </div>
                        </div>
                        <div class="card-body">
                            @csrf
                            <input type="hidden" class="form-control timepicker-hasta" name="question_id" value="{{ $question->id }}">
                            <input type="hidden" class="form-control timepicker-hasta" name="test_id" value="{{ $test->id }}">
                            @include("question_types." . $question->view_path)
                            @include("pause")
                        </div>
                        <div class="justify-content-right">
                            <button class="btn btn-link" type="submit" name="finalizarTest" value="true">Terminar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('js.relax_time')
@endsection
@section('scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/momentjs/2.14.1/moment.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
@endsection