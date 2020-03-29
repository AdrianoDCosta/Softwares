<?php

	include "conectar.inc";
	
	if($_POST['excluir'])
	{
		$excluir=$_POST['codigo'];
		$sql = mysql_query("SELECT * FROM usuarios WHERE codigo='$excluir'");
		$linhas = mysql_num_rows($sql);
		
		if(empty($excluir))
		{
			echo "Digite o <b><u>Código do usuário</u></b> que deseja excluir.";
			echo "<br><a href=\"excluir_usuario.html\">Voltar</a>";
		}
		elseif($linhas == 0)
		{
			echo "Nenhum usuário cadastrado com este código.";
			echo "<br><a href=\"excluir_usuario.html\">Voltar</a>";
		}
		else
		{
			$query = "DELETE FROM usuarios WHERE codigo='$excluir'";
			$resultado = mysql_query($query);
			
			echo "Usuário deletado com sucesso";
		}
	}
	mysql_close($conexao);
?>