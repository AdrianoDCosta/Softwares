<!-- Chamando CKEditor --->
		<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
		
		<script type="text/javascript">
			window.onload = function() {
				CKEDITOR.replace ( 'atualizando_cliente',
				{enterMode: Number (2) },
				{extraPlugins: 'imageuploader'}
			)};
		</script>
<?php
	include "conectar.inc";
	session_start();
	if(!isset($_SESSION["usuario"]) || !isset($_SESSION["senha"])) {
		header("Location: login.php");
		exit;
	}
	else {
		
	include "conectar.inc";
	
		$codigo = $_GET["codigo"];
		
		$query = "SELECT * FROM clientes WHERE codigo LIKE '$codigo'";
		$resultado = mysql_query($query);
		$mostrar = mysql_fetch_array($resultado);

		echo "<p style='font:normal 15px Roboto;'>Este artigo pertence a página <b>Clientes</b>.<br />";
		
		echo "<form method='GET' action='editado_cliente.php'>
			<input type='hidden' name='codigo' value=". $codigo ." >
			<textarea id='editando_cliente' name='editar_cliente'>". $mostrar['texto'] ."</textarea>
			<input type='submit' value='Atualizar'>
		</form>";
	
	}
?>