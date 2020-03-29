<?php

	include "conectar.inc";
	
	if ($_POST['adicionar'])
	{
		$empresa=$_POST['empresa'];
		$nome=$_POST['contato'];
		$cnpj=$_POST['cnpj_cpf'];
		$ie=$_POST['ie'];
		$endereco=$_POST['endereco'];
		$cidade=$_POST['cidade'];
		$estado=$_POST['estado'];
		$cep=$_POST['cep'];
		$telefone=$_POST['telefone'];
		$email=$_POST['email'];
		$observacao=$_POST['observacao'];
				
		$sql = mysql_query("SELECT * FROM fornecedores WHERE empresa='$empresa'");
		$linhas = mysql_num_rows($sql);
		
		if(empty($empresa))
		{
			echo "<script type='text/javascript'>alert('Por favor, preencher o campo Empresa!');window.location='adicionar_fornecedor.html';</script>";
		}
		else
		{
			$query = "INSERT INTO fornecedores VALUES ('', '$empresa', '$nome', '$cnpj', '$ie', '$endereco', '$cidade', '$estado', '$cep', '$telefone', '$email', '$observacao')";
			mysql_query($query);
			
			echo "<script type='text/javascript'>alert('Fornecedor cadastrado com sucesso!');window.location='exibir_fornecedores.php';</script>";
		}
	}
	
	mysql_close($conexao);
?>