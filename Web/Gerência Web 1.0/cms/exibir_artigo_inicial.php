<?php
	
	include "conectar.inc";
	
	$query = "SELECT * FROM home";
	$resultado = mysql_query($query,$conexao);
	
	while ($mostrar = mysql_fetch_array($resultado))
	{
		echo $mostrar['texto']."<br>";
	}
	mysql_close($conexao);
?>