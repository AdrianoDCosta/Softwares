<?php
	include "conectar.inc";
	session_start();
	if(!isset($_SESSION["usuario"]) || !isset($_SESSION["senha"])) {
		header("Location: index.php");
		exit;
	}
	else
	{
	
		include "conectar.inc";
	
		$codigo = @$_GET['codigo'];
		$nome = @$_GET['nome'];
		$documento = @$_GET['documento'];
		$telefone = @$_GET['telefone'];
		$email = @$_GET['email'];
		$endereco = @$_GET['endereco'];
		$cidade = @$_GET['cidade'];
		$estado = @$_GET['estado'];
		$cep = @$_GET['cep'];
		$pais = @$_GET['pais'];
		$observacao = @$_GET['observacao'];
		
		$query = "UPDATE funcionarios SET nome='$nome', documento='$documento', telefone='$telefone', email='$email', endereco='$endereco', cidade='$cidade', estado='$estado', cep='$cep', pais='$pais', observacao='$observacao' WHERE codigo='$codigo'";
		mysql_query($query);
		
		echo "<script type='text/javascript'>alert('Dados do funcionário alterados com sucesso!');window.location='exibir_funcionarios.php';</script>";
		}
	
	mysql_close($conexao);
?>