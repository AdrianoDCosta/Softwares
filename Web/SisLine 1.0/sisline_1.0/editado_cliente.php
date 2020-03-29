<?php
	include "conectar.inc";
	session_start();
	if(!isset($_SESSION["usuario"]) || !isset($_SESSION["senha"])) {
		header("Location: login.php");
		exit;
	}
	else {

	include "conectar.inc";
		
		$codigo = @$_GET['codigo'];
		$texto = @$_GET['editar_cliente'];
		
		$sql = mysql_query("UPDATE clientes SET texto='$texto' WHERE codigo='$codigo'");

		echo "<p style='font:bold 14px Roboto;text-align:center;'>Informações do cliente editadas com sucesso</p>";

	mysql_close($conexao);
	
	}
?>