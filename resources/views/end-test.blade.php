@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-4">
            <img src="{{asset('images/view_images/rainbow.png')}}" class="d-inline-block align-center img-fluid" alt="">
        </div>
        <div class="col-8">
            <div>
                <h1 class="text-primary">
                    ¡FELICITACIONES!
                </h1> 
                 <h2 class="mt-2">
                    ¡La prueba ha finalizado!
                </h2>
                <h4 class="mt-4">
                    Los resultados de la prueba han sido enviados a su casilla de email asociada a su cuenta.
                    Si el mail no llega inmediatamente aguarde unos 15 minutos o revise la carpeta spam.
                    ¡Muchas gracias por utilizar DetectAR!
                </h4>    
                <h4 class="font-weight-bold mt-4">
                    Si queres realizar nuevamente la prueba podes volver a presiontar el botón COMENZAR
                </h4>
                <div class="font-weight-bold mt-4">
                    <a class="btn btn-warning btn-block" href="{{ URL::route('new-test') }}" title="COMENZAR">COMENZAR</a>
                    <a class="btn btn-warning btn-block" href="{{ URL::route('welcome') }}" title="Volver a la página principal">VOLVER A LA PÁGINA PRINCIPAL</a>
                </div>
            </div>
        </div>
      </div>
</div>
@endsection
