<?php
	include "conectar.inc";
	session_start();
	if(!isset($_SESSION["usuario"]) || !isset($_SESSION["senha"])) {
		header("Location: login.php");
		exit;
	}
	else {

	include "conectar.inc";

		$codigo = $_GET["codigo"];
		
		$sql = mysql_query("DELETE FROM funcionarios WHERE codigo='$codigo'");

		echo "<script type='text/javascript'>confirm('Funcionário excluído com sucesso!');window.location='exibir_funcionarios.php';</script>";
		
	mysql_close($conexao);
	
	}
?>