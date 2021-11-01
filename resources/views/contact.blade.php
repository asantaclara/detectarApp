@extends('layouts.app')
@section('head')
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-4 d-flex align-items-center">
            <h1>Contactanos</h1>
        </div>
        <div class="col-8">
            <div class="card">
                <div class="card-header">{{ __('Dejanos tu mensaje aquí') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('contact') }}">
                        @csrf

                        <div class="form-group row">
                              
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                              
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Apellido') }}</label>

                            <div class="col-md-6">
                                <input id="lastName" type="text" class="form-control @error('lastName') is-invalid @enderror" name="lastName" value="{{ old('lastName') }}" required autocomplete="lastName">

                                @error('lastName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="message" class="col-md-4 col-form-label text-md-right">{{ __('Mensaje') }}</label>

                            <div class="col-md-6">
                                <textarea id="message" type="message" class="form-control @error('message') is-invalid @enderror" name="message" value="{{ old('message') }}" required autocomplete="message"></textarea>

                                @error('message')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Enviar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/momentjs/2.14.1/moment.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript">
  $(function () {
    $('#birthday').datetimepicker({
        format: 'DD/MM/YYYY',
    });
 });
</script> 
@endsection