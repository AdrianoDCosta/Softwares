<?php

	include "conectar.inc";
	
	if($_POST['excluir'])
	{
		$excluir=$_POST['titulo'];
		$sql = mysql_query("SELECT * FROM prodserv WHERE titulo='$excluir'");
		$linhas = mysql_num_rows($sql);
		
		if(empty($excluir))
		{
			echo "Digite o <b><u>T�tulo do artigo</u></b> que deseja excluir.";
			echo "<br><a href=\"excluir_artigo_prodserv.html\">Voltar</a>";
		}
		elseif($linhas == 0)
		{
			echo "Nenhum artigo encontrado com este t�tulo.";
			echo "<br><a href=\"excluir_artigo_prodserv.html\">Voltar</a>";
		}
		else
		{
			$query = "DELETE FROM prodserv WHERE titulo='$excluir'";
			$resultado = mysql_query($query);
			
			echo "Artigo exclu�do com sucesso";
		}
	}
	mysql_close($conexao);
?>