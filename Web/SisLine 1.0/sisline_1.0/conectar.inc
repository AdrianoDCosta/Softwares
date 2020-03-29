<?php
	$msg1 = "Nome de usuário ou Senha incorreto";
	$msg2 = "Não foi possivel realizar a conexão com o Banco de Dados";
	
	$conexao = mysql_connect("localhost","root","") or die ($msg1);
	mysql_selectdb("sisline",$conexao) or die ($msg2);
?>