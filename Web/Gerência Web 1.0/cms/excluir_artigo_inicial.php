<?php

	include "conectar.inc";
	
	if($_POST['excluir'])
	{
		$excluir=$_POST['titulo'];
		$sql = mysql_query("SELECT * FROM home WHERE titulo='$excluir'");
		$linhas = mysql_num_rows($sql);
		
		if(empty($excluir))
		{
			echo "Digite o <b><u>Título do artigo</u></b> que deseja excluir.";
			echo "<br><a href=\"excluir_artigo_inicial.html\">Voltar</a>";
		}
		elseif($linhas == 0)
		{
			echo "Nenhum artigo encontrado com este título.";
			echo "<br><a href=\"excluir_artigo_inicial.html\">Voltar</a>";
		}
		else
		{
			$query = "DELETE FROM home WHERE titulo='$excluir'";
			$resultado = mysql_query($query);
			
			echo "Artigo excluído com sucesso";
		}
	}
	mysql_close($conexao);
?>