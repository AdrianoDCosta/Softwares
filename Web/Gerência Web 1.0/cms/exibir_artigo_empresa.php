<?php
	
	include "conectar.inc";
	
	$query = "SELECT * FROM empresa";
	$resultado = mysql_query($query,$conexao);
	
	while ($mostrar = mysql_fetch_array($resultado))
	{
		echo $mostrar['texto']."<br>".
			$mostrar['imagem']."<br>";
	}
	mysql_close($conexao);
?>