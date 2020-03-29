<html>
	<head>
		<link rel='stylesheet' type='text/css' href='css/style.css'>
	</head>
	<body>
	
	<?php
		include "conectar.inc";
		session_start();
		if(!isset($_SESSION["usuario"]) || !isset($_SESSION["senha"])) {
			header("Location: index.php");
			exit;
		}
		else {

			include "conectar.inc";
				
			$codigo=$_GET['codigo'];
						
			$query = mysql_query("SELECT * FROM produtos WHERE codigo LIKE '$codigo'");
			$mostrar = mysql_fetch_array($query);
			
	?>
			
		<form method="GET" action="atualizar_produto.php">
		<h2>.: Atualizar Produto</h2><br /><br />
		<hr><br />
				
		<table>
			<tr>
				<td colspan="3" class="tdopcoes"><a href="exibir_produtos.php" title="Cancelar"><img src="imagens/btn/cancelar.png" alt="Cancelar"></a>
				&nbsp
				<input type="image" src="imagens/btn/salvar.png" name="adicionar" value="Adicionar"></td>
			</tr>
				<input type="hidden" name="codigo" class="tdvazio" value="<?php echo $mostrar["codigo"]; ?>">
			<tr>
				<td>Código: </td><td class='tdvazio'><input type="text" name="codigo_produto" class="tdvazio" value="<?php echo $mostrar["codigo_produto"]; ?>"></td><td rowspan="1">Informações: </td>
			</tr>
			<tr>
				<td>Produto: </td><td class='tdvazio'><input type="text" name="nome" class="tdvazio" value="<?php echo $mostrar["nome"]; ?>"></td><td rowspan="6" class="tdvazio"><textarea name="observacao" rows="14" class="tdvazio"><?php echo $mostrar["observacao"]; ?></textarea></td>
			</tr>
			<tr>
				<td>Categoria: </td><td class='tdvazio'><input type="text" name="categoria" class="tdvazio" value="<?php echo $mostrar["categoria"]; ?>"></td>
			</tr>
			<tr>
				<td>Qtd Estoque: </td><td class='tdvazio'><input type="text" name="quantidade" class="tdvazio" value="<?php echo $mostrar["quantidade"]; ?>"></td>
			</tr>
			<tr>
				<td>Fornecedor: </td><td class='tdvazio'><input type="text" name="fornecedor" class="tdvazio" value="<?php echo $mostrar["fornecedor"]; ?>"></td>
			</tr>
			<tr>
				<td>Preço Custo: </td><td class='tdvazio'><input type="text" name="preco_custo" class="tdvazio" value="<?php echo $mostrar["preco_custo"]; ?>"></td>
			</tr>
			<tr>
				<td>Preço Venda: </td><td class='tdvazio'><input type="text" name="preco_venda" class="tdvazio" value="<?php echo $mostrar["preco_venda"]; ?>"></td>
			</tr>
		</table><br />
		
	</form>

	<?php 
		}
	?>
	</body>
</html>