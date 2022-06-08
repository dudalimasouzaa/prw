<?php
    include('conexao.php');
    $sql= 'SELECT * FROM fluxo_caixa';
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
    <title>Listagem do Fluxo</title>
</head>
<body>
    <h1>Listagem do Fluxo</h1>
    <table align= "center" border="1" width=700>
           <tr>
               <th>Código</th>
               <th>Data</th>
               <th>Tipo</th>
               <th>Valor</th>
               <th>Historico</th>
               <th>Cheque</th>
           </tr>
           <?php
                while($row= mysqli_fetch_array($result)){
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" .$row['data']. "</a></td>";
                    echo "<td>" .$row['tipo']. "</a></td>";
                    echo "<td>" .$row['valor']. "</a></td>";
                    echo "<td> <a href ='altera_fluxo_caixa.php?id=" . $row['id']."'>" .$row['historico']. "</a></td>";
                    echo "<td>" .$row['cheque']. "</a></td>";                   
                    echo "<td><a href='excluir_fluxo_caixa.php?id=".$row['id']."'>Excluir</a></td>";
                    echo "</tr>";
                }
           ?>
    </table>
</body>
</html>