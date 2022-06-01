<?php
    include('conexao.php');
    $id_agenda = $_GET ['id_agenda'];
    $sql = 'SELECT *FROM agenda where id_agenda='.$id_agenda;
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
        background-color: orangered;
    }
</style>
</head>
<body>
    <h1> Alteração da agenda</h1>
    <?php echo "<img class='center' src='data:image/jpeg;base64,"
    .base64_encode ($row["foto_blob"])."'width='150' height='150'/>";?>
    <form action="altera_agenda_exe.php" method="post" enctype="multipart/form-data">
        Nome: <input name="nome" value="<?php echo $row['nome']?>" size= "50" type="text"><br>
        Apelido: <input name="apelido" value="<?php echo $row['apelido']?>" size= "50" type="text"><br>
        Endereço: <input name="endereco" value="<?php echo $row['endereco']?>" size= "50" type="text"><br>
        Bairro: <input name="bairro" value="<?php echo $row['bairro']?>" size= "50" type="text"><br>
        Cidade: <input name="cidade" value="<?php echo $row['cidade']?>" size= "50" type="text"><br>
        Estado: 
        <select name="estado" id="">
            <option value="MT">MT</option>
            <option value="MG">MG</option>
            <option value="CE">CE</option>
            <option value="BA">BA</option>
            <option value="PR">PR</option>
            <option value="GO">GO</option>
            <option value="RS">RS</option>
            <option value="SP">SP</option>
            <option value="SC">SC</option>
            <option value="PA">PA</option>
            <option value="RJ">RJ</option>
            <option value="PE">PE</option>
            <option value="ES">ES</option>
            <option value="MA">MA</option>
            <option value="AM">AM</option>
            <option value="SE">SE</option>
            <option value="MS">MS</option>
            <option value="RN">RN</option>
            <option value="RO">RO</option>
            <option value="PB">PB</option>
            <option value="AL">AL</option>
            <option value="PI">PI</option>
            <option value="AC">AC</option>
            <option value="RR">RR</option>
            <option value="TO">TO</option>
        </select><br>
        Telefone: <input name="telefone" value="<?php echo $row['telefone']?>" size= "30" type="text"><br>
        Celular: <input name="celular" value="<?php echo $row['celular']?>" size= "30" type="text"><br>
        E-mail: <input name="email" value="<?php echo $row['email']?>" size= "50" type="text"><br>
        <input name="id_agenda" type="hidden" value="<?php echo $row['id_agenda']?>">
        <input type="file" id="foto" name="foto" accept="image/*"/>
        <br><br><input id="btnEnviar" type="submit" value="Enviar">
    </form>
    <div>

    </div>
</body>
</html>