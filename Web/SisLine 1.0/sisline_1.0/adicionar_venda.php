<?php

	include "conectar.inc";
	
	if ($_POST['adicionar'])
	{
		$data=$_POST['data'];
		$produto=$_POST['produto'];
		$quantidade=$_POST['quantidade'];
		$preco=$_POST['preco'];
		$total=$_POST['total'];
		$cliente=$_POST['cliente'];
		$telefone=$_POST['telefone'];
		$documento=$_POST['documento'];
		$pagamento=$_POST['pagamento'];
		$funcionario=$_POST['funcionario'];
		$observacao=$_POST['observacao'];
				
		$sql = mysql_query("SELECT * FROM produtos");
		$linhas = mysql_fetch_array($sql);
		
		if(empty($quantidade))
		{
			echo "<script type='text/javascript'>alert('Por favor, preencher o campo Quantidade!');window.location='preenchendo_venda.php';</script>";
		}
		/*elseif($linhas[quantidade] < $quantidade)
		{
			echo "<script type='text/javascript'>alert('Estoque insulficiente');window.location='preenchendo_venda.php';</script>";
		}*/
		elseif(empty($preco))
		{
			echo "<script type='text/javascript'>alert('Por favor, preencher o campo Preço!');window.location='preenchendo_venda.php';</script>";
		}
		else
		{
			$query = "INSERT INTO vendas VALUES ('', '$data', '$produto', '$quantidade', '$preco', '$total', '$cliente', '$telefone', '$documento', '$pagamento', '$funcionario', '$observacao')";
			mysql_query($query);
			
			$query = "UPDATE produtos SET quantidade=quantidade-'$quantidade' WHERE nome='$produto'";
			mysql_query($query);
			
			echo "<script type='text/javascript'>alert('Venda realizada com sucesso!');window.location='exibir_vendas.php';</script>";
		}
	}
	
	mysql_close($conexao);
?>