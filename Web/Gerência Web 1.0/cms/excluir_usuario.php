<?php

	include "conectar.inc";
	
	if($_POST['excluir'])
	{
		$excluir=$_POST['codigo'];
		$sql = mysql_query("SELECT * FROM usuarios WHERE codigo='$excluir'");
		$linhas = mysql_num_rows($sql);
		
		if(empty($excluir))
		{
			echo "Digite o <b><u>C�digo do usu�rio</u></b> que deseja excluir.";
			echo "<br><a href=\"excluir_usuario.html\">Voltar</a>";
		}
		elseif($linhas == 0)
		{
			echo "Nenhum usu�rio cadastrado com este c�digo.";
			echo "<br><a href=\"excluir_usuario.html\">Voltar</a>";
		}
		else
		{
			$query = "DELETE FROM usuarios WHERE codigo='$excluir'";
			$resultado = mysql_query($query);
			
			echo "Usu�rio deletado com sucesso";
		}
	}
	mysql_close($conexao);
?>