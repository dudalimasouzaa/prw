<!DOCTYPE html>
	<head>
	    <meta charset="UTF-8">
	</head>
	<body>
	    <h1>Informáticos</h1>
	    <hr>
	    <form method="get">
	        <input type="text" name="txtPesquisa" placeholder="Pesquisar...">
	        <br>
	        <input type="submit" value="Enviar">
	    </form>
	</body>
	</html>
	

	<?php
	    $produtos = array('mouse', 'teclado', 'microfone');
	    $search = $_GET['txtPesquisa'];
	    $search = strtolower($search);
	

	    $i = array_search($search, $produtos);
	    $i++;
	    if($i) {
	        echo "HÁ ESSE PRODUTO NO ESTOQUE <br>Código do produto: ".($i-1);
	    } else {
	        echo "TAL PRODUTO NÃO FOI ENCONTRADO";
	    }
	?>

