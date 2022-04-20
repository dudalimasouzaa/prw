<?php
include('conexao.php');
$nome_usuario = $_POST['nome'];
$email_usuario = $_POST['email'];
$fone_usuario = $_POST['tel'];
echo "<P> Nome do usuário: ".$nome_usuario."<br>";
echo "<P> E-mail: ".$email_usuario."<br>";
echo "<P> Telefone: ".$fone_usuario."<br>";
$sql = "INSERT INTO usuario (nome_usuario, email_usuario, telefone_usuario)
        VALUES ('".$nome_usuario."','".$email_usuario."','".$fone_usuario."')";

$result = mysqli_query($con, $sql);
if($result)
    echo "Dados inseridos com sucesso";
else
    echo "Erro ao inserir no banco de dados: ".mysqli_error($con);
?>