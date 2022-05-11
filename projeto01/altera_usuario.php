<?php
    include('conexao.php');
    $id_usuario = $_GET ['id_usuario'];
    $sql = 'SELECT *FROM usuario where id_usuario='.$id_usuario;
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
        background-color: plum;
    }
</style>
</head>
<body>
    <h1> Alteração de ususário</h1>
    <form action="altera_usuario_exe.php" method="post">
        Nome: <input name="nome" value="<?php echo $row['nome_usuario']?>" size= "50" type="text"><br>
        E-mail: <input name="email" value="<?php echo $row['email_usuario']?>" size= "50" type="text"><br>
        Telefone: <input name="tel" value="<?php echo $row['telefone_usuario']?>" size= "30" type="text"><br>
        <input name="id_usuario" type="hidden" value="<?php echo $row['id_usuario']?>">
        <br><br><input id="btnEnviar" type="submit" value="Enviar">
    </form>
    <div>

    </div>
</body>
</html>