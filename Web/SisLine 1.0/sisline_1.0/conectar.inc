<?php
	$msg1 = "Nome de usu�rio ou Senha incorreto";
	$msg2 = "N�o foi possivel realizar a conex�o com o Banco de Dados";
	
	$conexao = mysql_connect("localhost","root","") or die ($msg1);
	mysql_selectdb("sisline",$conexao) or die ($msg2);
?>