<?php
	include "conectar.inc";
	session_start();
	if(!isset($_SESSION["usuario"]) || !isset($_SESSION["senha"])) {
		header("Location: index.php");
		exit;
	}
	else {

	include "conectar.inc";

		$codigo = $_GET["codigo"];
		
		$sql = mysql_query("DELETE FROM clientes WHERE codigo='$codigo'");
		
		echo "<script type='text/javascript'>confirm('Cliente excluído com sucesso!');window.location='exibir_clientes.php';</script>";
		
	mysql_close($conexao);
	
	}
?>