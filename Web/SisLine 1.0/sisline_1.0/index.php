<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/style_login.css">
		<title> Login SisLine </title>
	</head>
	<body>
	
	<div id="centralizar">
		<div id="principal">
		
			<div id="img">
				<img src="imagens/logotipo.png">
				
			</div>

			<fieldset>
				<p class="bem-vindo">Efetue o login</p>
				<p class="identifique">Digite o seu usuário e senha para acessar o sistema</p>
			
				<form class="formulario" method="POST" enctype="multipart/form-data">
				
					<img class="img_cadeado" src="imagens/cadeado.png">
					<label class="label">Usuário: </label><input class="input_login" type="text" name="usuario"><br />
					<label class="label">Senha: </label><input class="input_senha" type="password" name="senha"><br />

					<button class="btn_entrar" type="submit" name="entrar" value="Entrar">Entrar</button>
				</form>
				
			</fieldset>
		
		</div>
	</div>
	</body>
</html>
<?php
	include "conectar.inc";

	$usuario = @$_POST['usuario'];
	$senha = @$_POST['senha'];
	$sql = "SELECT * FROM funcionarios WHERE usuario = '$usuario' and senha = '$senha'";
	$resultado = mysql_query($sql);
	$linhas = mysql_num_rows($resultado);
	
	if(empty($usuario)) {
	echo "";
	}
	elseif($linhas > 0) {
		session_start();
		$_SESSION['usuario'] = $usuario;
		$_SESSION['senha'] = $senha;
		echo "<h3 class='validar_ok'>Usuário e senha confirmados...<br />Aguarde, o sistema esta sendo carregado</h3>";
		header("Location: painel.php");
	} else {
		unset ($_SESSION['usuario']);
		unset ($_SESSION['senha']);
		
		echo "<h3 class='validar_erro'>Nome de usuário ou senha inválido</h3>";
	}
?>