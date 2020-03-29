<?php

	include "conectar.inc";
	
	if ($_POST['adicionar'])
	{
		$texto=$_POST['add_home'];
		
		$sql = mysql_query("SELECT * FROM home WHERE texto='$texto'");
		$linhas = mysql_num_rows($sql);
		
		if(empty($texto))
		{
			echo "Digite um <b>texto</b> para o artigo.";
			echo "<br><a href=\"adicionar_artigo_inicial.html\">Voltar</a>";
		}
		else
		{
			$query = "INSERT INTO home VALUES ('', '$texto', '$imagem')";
			mysql_query($query);
			
			echo "Artigo adicionado com sucesso.";	
		}
	}
	
	mysql_close($conexao);
?>