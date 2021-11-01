@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-md-center">
        <h3>¿Qué se evalua en esta prueba?</h3>
    </div>
    <div class="row justify-content-md-center">
        <div>Esta prueba actualmente evalua los siguientes items:</div>
    </div>
    <div class="mt-5">
        <div class="row">
            <div class="col-4 text-center">
                <div>Percepción de los colores</div>
                <img src="{{asset('images/view_images/colorblindness_logo.png')}}" class="d-inline-block align-center img-fluid" alt="">
                <div>Percepción de los colores</div>
            </div>
            <div class="col-4 text-center">
                <div>Prácticas del Lenguaje</div>
                <img src="{{asset('images/view_images/disortografia_logo.png')}}" class="d-inline-block align-center img-fluid" alt="">
                <div>Lectura y Ortografía</div>
            </div>
            <div class="col-4 text-center">
                <div>Matemáticas</div>
                <img src="{{asset('images/view_images/discalculia_logo.png')}}" class="d-inline-block align-center img-fluid" alt="">
                <div>Matemáticas, Cálculo y Razonamiento Lógico</div>
            </div>
        </div>
    </div>
</div>
@endsection