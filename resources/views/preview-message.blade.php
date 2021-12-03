@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-4">
            <img src="{{asset('images/view_images/rainbow.png')}}" class="d-inline-block align-center img-fluid" alt="">
        </div>
        <div class="col-8">
            <div>
                {{-- <h3>Bienvenidos a DetectAR</h3> --}}
                <h3>
                    A continuación comenzará la evaluación!
                </h3>
                <h3 class="mt-4">
                    Esta consta de evaluar 3 habilidades importantes: 
                    percepción de los colores, lectura - ortografia y matemáticas.
                </h3>
                <h3 class="mt-4">
                    Tené presente que el niño deberá ser quién resuelva las preguntas.
                    En caso de ser necesario podés utilizar materiales para acompañarlo en la resolución, por ejemplo, de sumas o restas, como tapitas o lápices que pueda visualizar y contabilizar. 
                    Pero es importante que sea él quien llegue al resultado correcto!
                </h3>
                <h3 class="mt-4">
                    Encontrarás también el botón "Terminar", presiónalo únicamente en caso de no querer concluir la evaluación, así podremos analizar los 
                    resultados obtenidos hasta el momento.
                </h3>
                <div class="mt-4">
                    <h2>Cuando estén listos pueden presionar el botón COMENZAR!</h2>
                </div>
                <a class="btn btn-warning btn-block mt-4" href="{{ URL::route('new-test') }}" title="COMENZAR">COMENZAR</a>
            </div>
        </div>
      </div>
</div>
@endsection
