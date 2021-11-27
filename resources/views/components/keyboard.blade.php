<div class="d-inline-flex p-2">
    @for ($i = 0; $i <= 9; $i++)
        <div class="p-2">
            <button class="btn btn-primary keyboard" type="button" 
            onclick="javascript:addNumber('{{$i}}')"
            value="{{$i}}">{{$i}}</button>                        
        </div>              
    @endfor
    <div class="p-2">
        <button class="btn btn-primary keyboard" type="button" onclick="javascript:clearAnswer()">BORRAR</button>                        
    </div>  
</div>
@section('scripts')
    <script type="text/javascript">
        function addNumber(number) {
            old_input = document.getElementById("number").value;
            new_input = old_input + number;
            document.getElementById('number').value = new_input;
        }
        function clearAnswer() {
            document.getElementById('number').value = '';
        }
    </script> 
@endsection