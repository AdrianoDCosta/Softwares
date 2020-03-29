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
		$empresa = @$_GET['empresa'];
		$contato = @$_GET['contato'];
		$cnpj_cpf = @$_GET['cnpj_cpf'];
		$ie = @$_GET['ie'];
		$telefone = @$_GET['telefone'];
		$email = @$_GET['email'];
		$endereco = @$_GET['endereco'];
		$cidade = @$_GET['cidade'];
		$estado = @$_GET['estado'];
		$cep = @$_GET['cep'];
		$observacao = @$_GET['observacao'];
		
		$query = "UPDATE fornecedores SET empresa='$empresa', contato='$contato', cnpj_cpf='$cnpj_cpf', ie='$ie', telefone='$telefone', email='$email', endereco='$endereco', cidade='$cidade', estado='$estado', cep='$cep', observacao='$observacao' WHERE codigo='$codigo'";
		mysql_query($query);
		
		echo "<script type='text/javascript'>alert('Dados do fornecedor alterados com sucesso!');window.location='exibir_fornecedores.php';</script>";
		}
	
	mysql_close($conexao);
?>