<html>
<head>
    <title>Formulario</title>
</head>
<body>
    <h2>Escolha a opção desejada</h2>
<form method = “GET”>
    <div>
    <label for="operacao"> Somar </label>
    <input name="operacao" type="radio" value="soma">

    <label for="operacao"> Subtrair </label>
    <input name="operacao" type="radio" value="sub">

    <label for="operacao"> Dividir </label>
    <input name="operacao" type="radio" value="dividir">

    <label for="operacao"> Multiplicar </label>
    <input name="operacao" type="radio" value="mult">
    </div>

    <div>
            <label for="num1">Número 1:</label>
            <input name="num1" type="text">
    </div>

    <div>
            <label for="num2">Número 2:</label>
            <input name="num2" type="text">
    </div>
<input type=submit value=“Enviar”>
</form>
<?php
    $op=$_GET["operacao"];
    $num1=$_GET["num1"];
    $num2=$_GET["num2"];

    if($op=="soma"){
        echo ($num1+$num2);
    }
    else if($op=="sub"){
        echo ($num1-$num2);
    }
    else if($op=="dividir"){
        echo($num1/$num2);
    }
    else if($op=="mult"){
        echo($num1/$num2);
    }
    
?>
</body>
</html>