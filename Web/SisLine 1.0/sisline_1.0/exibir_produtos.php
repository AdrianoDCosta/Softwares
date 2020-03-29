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
	} else {

		include "conectar.inc";

?>
		
	<h2>.: Produtos</h2>
	<form name="frmBuscaProduto" method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>?a=buscar">
		<input type="text" name="nome_produto" placeholder="Digite o nome do produto..." class="pesquisar"><input type="image" src="imagens/btn/buscar.png" value="Buscar" class="img_pesquisar">
	</form>
	<hr><br />
	
	<?php
	
		$a = @$_GET['a']; // Recuperamos a ação enviada pelo formulário
			
			if ($a != "buscar")
			{
				echo "<table><tr><td colspan='3' class='tdopcoes'>";
				echo "<a href='adicionar_produto.html' title='Adicionar'><img src='imagens/btn/adicionar.png' alt='Adicionar'></a></td></tr>";
				echo "<tr><td>Código:</td><td class='tdvazio'></td><td rowspan='1'>Descrição: </td></tr>";
				echo "<tr><td>Produto: </td><td class='tdvazio'></td><td rowspan='6' class='tdvazio'></td></tr>";
				echo "<tr><td>Categoria: </td><td class='tdvazio'></td>";
				echo "<tr><td>Qtd  Estoque: </td><td class='tdvazio'></td></tr>";
				echo "<tr><td>Fornecedor: </td><td class='tdvazio'></td>";
				echo "<tr><td>Preço Custo: </td><td class='tdvazio'></td>";
				echo "<tr><td>Preço Venda: </td><td class='tdvazio'></td></tr></table><br />";
			
			} elseif ($a == "buscar")// Verificamos se a ação é de busca
				{
					$nome_produto = trim($_POST['nome_produto']);// Pegamos o nome digitado
					
					$sql = mysql_query("SELECT * FROM produtos WHERE nome LIKE '".$nome_produto."%' ");// Verificamos no banco de dados produtos equivalente ao nome digitado
					
					$numRegistros = mysql_num_rows($sql);// Descobrimos o total de registros encontrados
					
					if ($numRegistros != 0)// Se houver pelo menos um registro, exibe-o
					{
						while ($mostrar = mysql_fetch_array($sql))// Exibe os produtos e suas demais informações
						{
							echo "<table><tr><td colspan='3' class='tdopcoes'><a href='excluir_produto.php?codigo=" . $mostrar['codigo'] . "' title='Excluir'><img src='imagens/btn/excluir.png' alt='Excluir'></a>&nbsp;&nbsp;&nbsp";
							echo "<a href='atualizando_produto.php?codigo=" . $mostrar['codigo'] . "' title='Atualizar'><img src='imagens/btn/editar.png' alt='Atualizar'></a>&nbsp;&nbsp;&nbsp";
							echo "<a href='adicionar_produto.html' title='Adicionar'><img src='imagens/btn/adicionar.png' alt='Adicionar'></a></td></tr>";
							echo "<tr><td>Código:</td><td class='tdvazio'>" . $mostrar["codigo_produto"] . "</td><td rowspan='1'>Descrição: </td></tr>";
							echo "<tr><td>Produto: </td><td class='tdvazio'>" . $mostrar["nome"] . "</td><td rowspan='6' class='tdvazio'>" . $mostrar["observacao"] . "</td></tr>";
							echo "<tr><td>Categoria: </td><td class='tdvazio'>" . $mostrar["categoria"] . "</td>";
							echo "<tr><td>Qtd  Estoque: </td><td class='tdvazio'>" . $mostrar["quantidade"] . "</td></tr>";
							echo "<tr><td>Fornecedor: </td><td class='tdvazio'>" . $mostrar["fornecedor"] . "</td>";
							echo "<tr><td>Preço Custo: </td><td class='tdvazio'>R$ " . $mostrar["preco_custo"] . "</td>";
							echo "<tr><td>Preço Venda: </td><td class='tdvazio'>R$ " . $mostrar["preco_venda"] . "</td></tr></table><br />";
						}
					} else
					{
						echo "<script type='text/javascript'>alert('Nenhum produto encontrado com a informação digitada.');window.location='exibir_produtos.php';</script>";
					}
				}
			}
		?>
	</body>
</html>