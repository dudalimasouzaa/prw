<!DOCTYPE html>
	<head>
	    <meta charset="UTF-8">
	</head>
	<body>
	    <h1>Login</h1>
	    <hr>
	    <form method="post">
	        <input type="text" name="txtNome" placeholder="Usuário">
	        <br><input type="password" name="txtSenha" placeholder="Senha">
	        <br>
	        <input type="submit" value="Enviar">
	    </form>
	</body>
	</html>
	

	<?php
	    $users = array('duda', 'otavio', 'julia');
	    $senhas = array('duda123', '12345', 'AaBb');
	    $user = $_POST['txtNome'];
	    $senha = $_POST['txtSenha'];
	    $user = strtolower($user);
	

	    $i = array_search($user, $users);
	    $i++;
	    if($i==true) {
	        $i--;
	        if($senhas[$i] == $senha){
	            echo "<br>ACESSO PERMITIDO";
	        } else {
	            echo "<br>ACESSO NEGADO";
	        }
	    } else {
	        echo "<br>ESTE USUÁRIO NÃO HÁ CADASTRO";
	    }
	?>


