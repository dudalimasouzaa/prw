<html>
<head>
    <title>Formulario</title>
</head>
<body>
    <h2>CALCULE SEU IMC</h2>
<form method = “GET”>
    <div>
            <label for="peso">Peso: </label>
            <input name="peso" type="text">
    </div>

    <div>
            <label for="altura">Altura: </label>
            <input name="altura" type="text">
    </div>
<input type=submit value=“CALCULAR”>
</form>
<?php
    $peso=$_GET["peso"];
    $altura=$_GET["altura"];
    $imc=$peso/($altura*$altura);
    echo "SEU IMC É: .$imc";
    if($imc<17){
        echo " MUITO ABAIXO DO PESO";
    }
    else if($imc>=17 && $imc<18.49){
        echo " ABAIXO DO PESO";
    }
    else if($imc>=18.49 && $imc<=24.99){
        echo " PESO NORMAL";
    }
    else if($imc>=25 && $imc<=29.99){
        echo " ACIMA DO PESO";
    }
    else if($imc>=30 && $imc<=34.99){
        echo " OBESIDADE I";
    }
    else if($imc>=35 && $imc<=39.99){
        echo " OBESIDADE II (severa)";
    }
    else{
        echo " OBESIDADE III (mórbida)";
    }
?>
</body>
</html>