<?php

	include "conectar.inc";
	session_start();
	if(!isset($_SESSION["usuario"]) || !isset($_SESSION["senha"])) {
		header("Location: index.php");
		exit;
	}
	else {

		include "conectar.inc";

?>
<html>
	<head>
		<link rel='stylesheet' type='text/css' href='css/style.css'>
		<title>:: Adicionar Venda ::</title>
	</head>
	<body>
		<form method="POST" action="adicionar_venda.php">
			<h2>.: Adicionar Venda</h2><br /><br />
			<hr><br />
			
			<table>
				<tr>
					<td colspan="3" class="tdopcoes"><a href="exibir_vendas.php" title="Cancelar"><img src="imagens/btn/cancelar.png" alt="Cancelar"></a>
					&nbsp
					<input type="image" src="imagens/btn/salvar.png" name="adicionar" value="Adicionar"></td>
				</tr>
				<tr>
					<td>Data: </td><td class='tdvazio'><input type="date" name="data" class="tdvazio"></td><td rowspan="1">Observação: </td>
				</tr>
				<tr>
					<td>Produto: </td>
					<td class='tdvazio'>
					
						<?php
							include "conectar.inc";
							
							$query = "SELECT * FROM produtos";
							$resultado = mysql_query($query);
						
							echo "<select name='produto' class='tdvazio'>";
								
								while ($mostrar = mysql_fetch_array($resultado))
								{
									echo "<option>";	
									echo $mostrar['nome'];
								}
									echo "</option></select>";
						?>

					</td><td rowspan="10" class="tdvazio"><textarea name="observacao" rows="16" class="tdvazio"></textarea></td>
				</tr>
				<tr>
					<td>Quantidade: </td><td class='tdvazio'><input type="text" name="quantidade" class="tdvazio"></td>
				</tr>
				<tr>
					<td>Preço: </td><td class='tdvazio'><input type="text" name="preco" class="tdvazio"></td>
				</tr>
				<tr>
					<td>Total: </td><td class='tdvazio'><input type="text" name="total" class="tdvazio"></td>
				</tr>
				<tr>
					<td>Cliente: </td><td class='tdvazio'><input type="text" name="cliente" class="tdvazio"></td>
				</tr>
				<tr>
					<td>Telefone: </td><td class='tdvazio'><input type="text" name="telefone" class="tdvazio"></td>
				</tr>
				<tr>
					<td>Documento: </td><td class='tdvazio'><input type="text" name="documento" class="tdvazio"></td>
				</tr>
				<tr>
					<td>F. Pagamento: </td><td class='tdvazio'><input type="text" name="pagamento" class="tdvazio"></td>
				</tr>
				<tr>
					<td>Funcionário: </td><td class='tdvazio'><input type="text" name="funcionario" class="tdvazio" readonly="true" value="<?php echo $_SESSION['usuario']; }?>"></td>
				</tr>
			</table><br />
			
		</form>
		
	</body>
</html>