<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<form action="">
    <p id="radio"></p>
    <p id="checkbox"></p>
    <p>Checkbox1</p>
    <input type="radio" name="duskRadio" value="radio1" id="duskRadio" dusk="dRadio">Radio1
    <input type="radio" name="duskRadio" value="radio2">Radio2<br>
    <input type="checkbox" name="checkbox1" value="checkbox1" id="check" dusk="dCheck">Checkbox 1
    <input type="checkbox" name="checkbox2" value="checkbox2">Checkbox 2
    <input type="checkbox" name="checkbox3" value="checkbox3">Checkbox 3
</form>
</body>
<script>

    var radio1 = document.getElementById('duskRadio');
    radio1.addEventListener('click', function () {
        alert('hello');
        document.getElementById('radio').innerHTML=radio1.value;

    });
    var checkbox1 = document.getElementById('check');
    checkbox1.addEventListener('click', function () {
        document.getElementById('checkbox').innerText = checkbox1.value;

    });
</script>
</html>
