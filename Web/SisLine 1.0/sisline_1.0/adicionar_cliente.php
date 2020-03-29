<?php

	include "conectar.inc";
	
	if ($_POST['adicionar'])
	{
		$nome=$_POST['nome'];
		$documento=$_POST['documento'];
		$endereco=$_POST['endereco'];
		$cidade=$_POST['cidade'];
		$estado=$_POST['estado'];
		$cep=$_POST['cep'];
		$pais=$_POST['pais'];
		$telefone=$_POST['telefone'];
		$email=$_POST['email'];
		$observacao=$_POST['observacao'];
				
		$sql = mysql_query("SELECT * FROM clientes WHERE nome='$nome'");
		$linhas = mysql_num_rows($sql);
		

		if(empty($nome))
		{
			echo "<script type='text/javascript'>alert('Por favor, Preencher o campo Nome!');window.location='adicionar_cliente.html';</script>";
		}
		else
		{
			$query = "INSERT INTO clientes VALUES ('', '$nome', '$documento', '$endereco', '$cidade', '$estado', '$cep', '$pais', '$telefone', '$email', '$observacao')";
			mysql_query($query);
			
			echo "<script type='text/javascript'>alert('Cliente cadastrado com sucesso!');window.location='exibir_clientes.php';</script>";
		}
	}
	
	mysql_close($conexao);
?>