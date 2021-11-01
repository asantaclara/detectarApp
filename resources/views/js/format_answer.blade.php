<script type="text/javascript">
    function addAnswer(healthy, item_id) {
        var item = document.getElementById(item_id);
        if (item.getAttribute('seleccionado') === 'true') {
            item.setAttribute("seleccionado", false);
            item.style.border = "";
        } else {
            item.setAttribute("seleccionado", true);
            item.style.border = "1px solid black";
        }
    }

    function formatAnswer() {
        answers = document.getElementsByClassName('possibleAnswer');
        var arrayAnswers = Array.from(answers);
        document.getElementById("number").setAttribute("value", {{$ok_value}});
        arrayAnswers.forEach(element => {
            if(
                (element.getAttribute('seleccionado') === 'true' && element.getAttribute('healthyAnswer') === '0')
                || 
                (element.getAttribute('seleccionado') === 'false' && element.getAttribute('healthyAnswer') === '1')
             ) {
                    document.getElementById("number").setAttribute("value", {{$wrong_value}});
                }
        });
        return true;
    }
</script> 