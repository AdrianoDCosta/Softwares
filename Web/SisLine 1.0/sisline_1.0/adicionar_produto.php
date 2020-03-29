<?php

	include "conectar.inc";
	
	if ($_POST['adicionar'])
	{
		$codigo_produto=$_POST['codigo_produto'];
		$nome=$_POST['nome'];
		$categoria=$_POST['categoria'];
		$quantidade=$_POST['quantidade'];
		$fornecedor=$_POST['fornecedor'];
		$preco_custo=$_POST['preco_custo'];
		$preco_venda=$_POST['preco_venda'];
		$observacao=$_POST['observacao'];
				
		$sql = mysql_query("SELECT * FROM produtos WHERE nome='$nome'");
		$linhas = mysql_num_rows($sql);
		
		if(empty($nome))
		{
			echo "<script type='text/javascript'>alert('Por favor, preencher o campo Produto!');window.location='adicionar_produto.html';</script>";
		}
		elseif(empty($quantidade))
		{
			echo "<script type='text/javascript'>alert('Por favor, preencher o campo Qtd Estoque!');window.location='adicionar_produto.html';</script>";
		}
		elseif(empty($preco_venda))
		{
			echo "<script type='text/javascript'>alert('Por favor, preencher o campo Preço Venda!');window.location='adicionar_produto.html';</script>";
		}
		else
		{
			$query = "INSERT INTO produtos VALUES ('', '$codigo_produto', '$nome', '$categoria', '$quantidade', '$fornecedor', '$preco_custo', '$preco_venda', '$observacao')";
			mysql_query($query);
			
			echo "<script type='text/javascript'>alert('Produto cadastrado com sucesso!');window.location='exibir_produtos.php';</script>";
		}
	}
	
	mysql_close($conexao);
?>