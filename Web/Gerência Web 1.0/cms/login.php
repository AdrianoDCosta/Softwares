<?php
	include "conectar.inc";
	$usuario = $_POST['usuario'];
	$senha = $_POST['senha'];
	$sql = "SELECT * FROM usuarios WHERE login = '$usuario'";
	$resultado = mysql_query($sql);
	$linhas = mysql_num_rows($resultado);
	
	if(empty ($usuario) and empty ($senha))
	{
		echo "<html><body>Digite o seu <b>nome de usuário</b> e sua <b>senha</b> para entrar no sistema<br>";
		echo "<a href=\"login.html\">Voltar</a></body></html>";
	}
	elseif($linhas==0)
	{
		echo "<html><body>Usuário inexistente<br>";
		echo "<a href=\"login.html\">Voltar</a></body></html>";
	}
	else
	{
		if($senha != mysql_result($resultado,0,"senha"))
		{
			echo "<html><body>Senha inválida<br>";
			echo "<a href=\"login.html\">Voltar</a></body></html>";
		}
		else
		{
			setcookie("nome_usuario",$usuario);
			setcookie("senha",$senha);
			echo "Nome de usuário e senha confirmados <br><br>";
		?>
	<html>
		<body>

			<form method="POST" action="manutencao.php">
				<input type="hidden" name="usuario" value="<?php echo $usuario; ?>">
				<input type="hidden" name="senha" value="<?php echo $senha; ?>">

				<input type="submit" value="Clique aqui para entrar no Sistema">
			</form>
		</body>
	</html>
		<?php
		}
	}
	mysql_close($conexao);
?>
