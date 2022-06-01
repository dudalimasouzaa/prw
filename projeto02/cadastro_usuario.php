<?php
include('conexao.php'); 
$fotoNome = $_FILES['foto']['name'];
$target_dir = "upload/";
$target_file = $target_dir . basename($_FILES["foto"]["name"]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$extensions_arr = array("jpg","jpeg","png","gif");


if( in_array($imageFileType,$extensions_arr) ){        
    if(move_uploaded_file($_FILES['foto']['tmp_name'],$target_dir.$fotoNome)){
        $fotoBlob = addslashes(file_get_contents($target_dir.$fotoNome));
    }
}

$nome_usuario = $_POST['nome'];
$email_usuario = $_POST['email'];
$fone_usuario = $_POST['tel'];

echo "<P> Nome do usuário: ".$nome_usuario."<br>";
echo "<P> E-mail: ".$email_usuario."<br>";
echo "<P> Telefone: ".$fone_usuario."<br>";

$sql = "INSERT INTO usuario (nome_usuario, email_usuario, telefone_usuario, foto_blob, foto_nome)
        VALUES ('".$nome_usuario."','".$email_usuario."','".$fone_usuario."','".$fotoBlob."','".$fotoNome."')";

$result = mysqli_query($con, $sql);
if($result)
    echo "Dados inseridos com sucesso";
else
    echo "Erro ao inserir no banco de dados: ".mysqli_error($con);
?>