<?php
    include('conexao.php');
    $sql= 'SELECT * FROM agenda';
    //retorna todos os dados da consulta
    $result = mysqli_query($con, $sql);
    //retorna a primeira linha
    //$row= mysqli_fetch_array($result);
    //print_r($row)

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Listagem da Agenda</title>
</head>
<body>
    <h1>Listagem da Agenda</h1>
    <table align= "center" border="1" width=700>
           <tr>
               <th>Código</th>
               <th>Nome</th>
               <th>Apelido</th>
               <th>Endereço</th>
               <th>Bairro</th>
               <th>Cidade</th>
               <th>Estado</th>
               <th>Telefone</th>
               <th>Celular</th>
               <th>Email</th>
               <th>Excluir</th>
           </tr>
           <?php
                while($row= mysqli_fetch_array($result)){
                    echo "<tr>";
                    echo "<td>" . $row['id_agenda'] . "</td>";
                    echo "<td> <a href ='altera_agenda.php?id_agenda=" . $row['id_agenda']."'>" .$row['nome']. "</a></td>";
                    echo "<td>" .$row['apelido']. "</a></td>";
                    echo "<td>" .$row['endereco']. "</a></td>";                   
                    echo "<td>" .$row['bairro']. "</a></td>";                  
                    echo "<td>" .$row['cidade']. "</a></td>";                 
                    echo "<td>" .$row['estado']. "</a></td>";                   
                    echo "<td>" .$row['telefone']. "</a></td>";                   
                    echo "<td>" .$row['celular']. "</a></td>";
                    echo "<td>" .$row['email']. "</a></td>";
                    echo "<td><a href='excluir_agenda.php?id_agenda=".$row['id_agenda']."'>Excluir</a></td>";
                    echo "</tr>";
                }
           ?>
    </table>
</body>
</html>