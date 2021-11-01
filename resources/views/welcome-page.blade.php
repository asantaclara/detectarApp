<div class="card">
    <form method="GET" action="{{ route('new-test') }}">
        <div class="card-header">
            Bienvenido a DetectAR
        </div>
        <div class="card-body">
            @csrf
            
            <h3>
                A continuación comenzará la evaluación!
                <br><br>
                Esta evalúa 3 habilidades importantes: visual, lectura y matemáticas.
                <br>
                Tené presente que el niño debe ser quien resuelva las preguntas.
                <br>
                En caso de ser necesario podés utilizar materiales para acompañarlo a la resolución, por ejemplo, de sumas o restas, como tapitas o lápices que pueda visualizar y contabilizar. 
                <br>
                Pero es importante que sea él quien llegue al resultado correcto!
                <br><br>
                Cuando estén listos pueden presionar el botón COMENZAR!
            </h3>
            <div class="">
                <button class="btn btn-primary " type="submit" name="answer_value" value="2">Comenzar</button>
            </div>
        </div>
    </form>
</div>
