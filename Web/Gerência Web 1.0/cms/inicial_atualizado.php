<?php

	include "conectar.inc";
		
		$codigo=$_POST['codigo'];
		$texto=$_POST['atualizar_artigo_home'];
		
		$sql = mysql_query("UPDATE home SET texto='$texto' WHERE codigo='$codigo'");

		echo "Artigo atualizado com sucesso";

	mysql_close($conexao);
?>