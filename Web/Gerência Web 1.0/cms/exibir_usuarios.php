<?php
	
	include "conectar.inc";
	
	$query = "SELECT * FROM usuarios";
	$resultado = mysql_query($query,$conexao);
	
	while ($mostrar = mysql_fetch_array($resultado))
	{
		echo "<table border=0><tr><td>
			<b>Código: </b>".$mostrar['codigo']."<br>
			<b>Nome completo: </b>".$mostrar['nome']."<br>
			<b>Usuário: </b>".$mostrar['login']."<hr>";
	}	
	mysql_close($conexao);
?>