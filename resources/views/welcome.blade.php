@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-4 mt-5">
            <div>
                <h3>Bienvenidos a DetectAR</h3>
                <div>Este sitio permite realizar una evaluación para poder orientar como señal de alerta sobre distintas dificultades de aprendizaje</div>
                <a class="btn btn-info mt-2" href="{{ URL::route('about-tests') }}" title="Acerca de las pruebas">Acerca de las pruebas</a>
            </div>
            <div class="mt-5">
                <h2>¡REALIZAR LA PRUEBA!</h1>
                    @guest
                        <a class="btn btn-warning btn-block" href="{{ URL::route('login') }}" title="COMENZAR">COMENZAR</a>
                    @else
                        <a class="btn btn-warning btn-block" href="{{ URL::route('preview-message') }}" title="COMENZAR">COMENZAR</a>
                    @endguest
            </div>
        </div>
        <div class="col-8">
            <img src="{{asset('images/view_images/foto_nenes.jpeg')}}" class="d-inline-block align-center img-fluid" alt="">
        </div>
    </div>
</div>
@endsection
