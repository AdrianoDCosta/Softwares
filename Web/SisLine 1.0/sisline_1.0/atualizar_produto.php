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
		$codigo_produto = @$_GET['codigo_produto'];
		$nome = @$_GET['nome'];
		$categoria = @$_GET['categoria'];
		$quantidade = @$_GET['quantidade'];
		$fornecedor = @$_GET['fornecedor'];
		$preco_custo = @$_GET['preco_custo'];
		$preco_venda = @$_GET['preco_venda'];
		$observacao = @$_GET['observacao'];

		$query = "UPDATE produtos SET codigo_produto='$codigo_produto', nome='$nome', categoria='$categoria', quantidade='$quantidade', fornecedor='$fornecedor', preco_custo='$preco_custo', preco_venda='$preco_venda', observacao='$observacao' WHERE codigo='$codigo'";
		mysql_query($query);
	
		echo "<script type='text/javascript'>alert('Dados do produto alterados com sucesso!');window.location='exibir_produtos.php';</script>";
	}
	
	mysql_close($conexao);
?>