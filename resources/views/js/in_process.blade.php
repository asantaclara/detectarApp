<script type="text/javascript">
        function terminarTest(e) {
            hideQuestion();
            hideRelax();
            if(!confirm('¿Seguro querés finalizar la prueba?')) {
                e.preventDefault();
                showQuestion();
            } else {
                var y = document.getElementById("in_process");
                y.style.display = "block";
                var y = document.getElementById("end_button");
                y.style.display = "none";
            }
        }

</script> 
