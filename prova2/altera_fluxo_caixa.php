<?php
    include('conexao.php');
    $id = $_GET ['id'];
    $sql = 'SELECT *FROM fluxo_caixa where id='.$id;
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
    body{
        background-color: paleturquoise;
    }
</style>
</head>
<body>
    <h1> Alteração</h1>
    <form action="altera_fluxo_caixa_exe.php" method="post">
        Data: <input name="data" value="<?php echo $row['data']?>" size= "50" type="date"><br>
        
        Tipo: <form method = “GET”>
            <div>
            <label for="tipo"> Entrada </label>
            <input name="tipo" type="radio" value="entrada "<?php if($row['tipo']=="entrada")echo "checked " ?>>
        
            <label for="tipo"> Saída </label>
            <input name="tipo" type="radio" value="saida" <?php if($row['tipo']=="saida")echo "checked " ?>>
            </div>

        
        Valor: <input name="valor" value="<?php echo $row['valor']?>" size= "50" type="text"><br>
        Historico: <input name="historico" value="<?php echo $row['historico']?>" size= "50" type="text"><br>
        Cheque:  
        <select name="cheque" id="" value="<?php echo $row['historico']?>">
            <option value="nao">Não</option>
            <option value="sim">Sim</option>
            
        </select><br>
        <input name="id" type="hidden" value="<?php echo $row['id']?>">
        <br><br><input id="btnEnviar" type="submit" value="Enviar">
    </form>
    <div>

    </div>
</body>
</html>