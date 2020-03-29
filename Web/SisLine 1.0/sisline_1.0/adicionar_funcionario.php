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
		$usuario=$_POST['usuario'];
		$senha=$_POST['senha'];
				
		$sql = mysql_query("SELECT * FROM funcionarios WHERE nome='$nome'");
		$linhas = mysql_num_rows($sql);
		
		if(empty($nome))
		{
			echo "<script type='text/javascript'>alert('Por favor, preencher o campo Nome!');window.location='adicionar_funcionario.html';</script>";
		}
		else
		{
			$query = "INSERT INTO funcionarios VALUES ('', '$nome', '$documento', '$endereco', '$cidade', '$estado', '$cep', '$pais', '$telefone', '$email', '$observacao', '$usuario', '$senha')";
			mysql_query($query);
			
			echo "<script type='text/javascript'>alert('Funcionário cadastrado com sucesso!');window.location='exibir_funcionarios.php';</script>";
		}
	}
	
	mysql_close($conexao);
?>