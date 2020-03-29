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
		
		$sql = mysql_query("DELETE FROM vendas WHERE codigo='$codigo'");

		echo "<script type='text/javascript'>alert('Venda excluída com sucesso! ATENÇÃO: A exclusão desta venda não retornará a quantidade vendida para o estoque.');window.location='exibir_vendas.php';</script>";
		
	mysql_close($conexao);
	
	}
?>