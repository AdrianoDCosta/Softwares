<?php
	
	if(!(empty($nome_usuario) OR empty($senha)))
	{
		include "conectar.inc";
		$sql = "SELECT * FROM usuarios WHERE nome = '$nome_usuario'";
		$resultado = mysql_query($sql);
		$linhas = mysql_num_rows($resultado);
		
		if($linhas==1)
		{
			if($senha != mysql_result($resultado,0,"senha"))
			{
				setcookie("nome_usuario");
				setcookie("senha");
				echo "Voc� n�o efetuou o login";
				exit;
			}
		}
		else
		{
			setcookie("nome_usuario");
			setcookie("senha");
			echo "Voc� n�o efetuou o login";
			exit;
		}
	}
	else
	{
		echo "Voc� n�o efetuou o login";
		exit;
	}
	mysql_close($conexao);
?>