<input type="number" id="num1"><br><br>
<input type="number" id="num2"><br><br>
<button onclick="random()">Random</button>
<p id="demo"></p>
<script>
    function random() {
        var x = document.getElementById("demo");
        var x1 = document.getElementById("num1").value;
        var x2 = document.getElementById("num2").value;
        var total = parseInt(Math.floor((Math.random() * parseInt(x2 - x1)) + parseInt(x1)));
        x.innerHTML = total;
    }
</script>