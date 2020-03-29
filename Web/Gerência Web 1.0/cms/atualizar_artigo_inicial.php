<!-- Chamando CKEditor --->
		<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
		
		<script type="text/javascript">
			window.onload = function() {
				CKEDITOR.replace ( 'atualiza_home',
				{enterMode: Number (2) },
				{extraPlugins: 'imageuploader'}
			)};
		</script>
<?php

	include "conectar.inc";

		$codigo=$_POST['codigo'];
		
		$sql = mysql_query("SELECT * FROM home WHERE codigo='$codigo'");
		$linhas = mysql_num_rows($sql);
		
		if(empty($codigo))
		{
			echo "Digite um <b>código</b> para atualizar.";
			echo "<br><a href=\"atualizar_artigo_inicial.html\">Voltar</a>";
		}
		elseif($linhas == 0)
		{
		echo "Artigo não encontrado. <br>Verifique o <b><u>código</u></b> digitado.";
		echo "<br><a href=\"atualizar_artigo_inicial.html\">Voltar</a>";
		}
		else
		{	
			$sql = "SELECT * FROM home WHERE codigo='$codigo'";
			$linhas = mysql_query($sql);
			while ($mostrar = mysql_fetch_array($linhas))
			{
				echo "<form method='POST' action='inicial_atualizado.php'>
						<input type='hidden' name='codigo' value='$codigo;'>
						<textarea id='atualiza_home' name='atualizar_artigo_home'>
							$mostrar[texto]
						</textarea>
						<input type='submit' value='Atualizar'>
					</form>";
			}
		}
	mysql_close($conexao);
?>