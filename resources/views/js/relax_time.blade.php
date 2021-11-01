<script type="text/javascript">
        var idleTime = 0;
        $(document).ready(function () {
            hideRelax();
            showQuestion();
            var idleInterval = setInterval(timerIncrement, 1000);
            $(this).mousemove(function (e) {
                idleTime = 0;
            });
            $(this).keypress(function (e) {
                idleTime = 0;
            });
        });
        function timerIncrement() {
            idleTime++;
            if (idleTime > {{config('constants.idle_max_time_seconds')}}) { 
                showRelax();
                hideQuestion();
            }
        }
        function hideQuestion() {
            var y = document.getElementById("active_question");
            y.style.display = "none";
        }
        function showQuestion() {
            var y = document.getElementById("active_question");
            y.style.display = "block";
        }
        function hideRelax() {
            var y = document.getElementById("relax_time");
            y.style.display = "none";
        }
        function showRelax() {
            var y = document.getElementById("relax_time");
            y.style.display = "block";
        }
        function continuarTest() {
            hideRelax();
            showQuestion();
        }
</script> 
