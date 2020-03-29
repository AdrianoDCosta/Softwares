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

?>
		
	<h2>.: Vendas</h2>
	<form name="frmBuscaVendas" method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>?a=buscar">
		<input type="text" name="nome_doc_data" placeholder="Nome, documento ou data (aaaa-mm-dd)" class="pesquisar"><input type="image" src="imagens/btn/buscar.png" value="Buscar" class="img_pesquisar">
	</form>
	<hr><br />
	
	<?php
	
		$a = @$_GET['a']; // Recuperamos a ação enviada pelo formulário
			
			if ($a != "buscar")
			{
				echo "<table><tr><td colspan='3' class='tdopcoes'>";
				echo "<a href='preenchendo_venda.php' title='Adicionar'><img src='imagens/btn/adicionar.png' alt='Adicionar'></a></td></tr>";
				echo "<tr><td>Data:</td><td class='tdvazio'> </td><td rowspan='1'>Observação: </td></tr>";
				echo "<tr><td>Produto: </td><td class='tdvazio'></td><td rowspan='9' class='tdvazio'></td></tr>";
				echo "<tr><td>Quantidade: </td><td class='tdvazio'></td>";
				echo "<tr><td>Preço: </td><td class='tdvazio'></td></tr>";
				echo "<tr><td>Total: </td><td class='tdvazio'></td>";
				echo "<tr><td>Cliente: </td><td class='tdvazio'></td>";
				echo "<tr><td>Documento: </td><td class='tdvazio'></td>";
				echo "<tr><td>Telefone: </td><td class='tdvazio'></td>";
				echo "<tr><td>Pagamento: </td><td class='tdvazio'></td>";
				echo "<tr><td>Funcionário: </td><td class='tdvazio'></td></tr></table><br />"; 

			} elseif ($a == "buscar")// Verificamos se a ação é de busca
				{
					$nome_cliente = trim($_POST['nome_doc_data']);// Pegamos o nome digitado
					$documento = trim($_POST['nome_doc_data']);// Pegamos o documento digitado
					$data = trim($_POST['nome_doc_data']);// Pegamos a data inserida					
					
					$sql = mysql_query("SELECT * FROM vendas WHERE cliente LIKE '".$nome_cliente."%' OR documento LIKE '".$documento."%' OR data LIKE '".$data."'");// Verificamos no banco de dados vendas equivalente ao nome ou documento digitado						
					
					$numRegistros = mysql_num_rows($sql);// Descobrimos o total de registros encontrados
					
					if ($numRegistros != 0)// Se houver pelo menos um registro, exibe-o
					{
						while ($mostrar = mysql_fetch_array($sql))// Exibe as vendas e suas demais informações
						{
							echo "<table><tr><td colspan='3' class='tdopcoes'><a href='excluir_venda.php?codigo=" . $mostrar['codigo'] . "' title='Excluir'><img src='imagens/btn/excluir.png' alt='Excluir'></a>&nbsp;&nbsp;&nbsp";
							echo "<a href='preenchendo_venda.php' title='Adicionar'><img src='imagens/btn/adicionar.png' alt='Adicionar'></a></td></tr>";
							echo "<tr><td>Data:</td><td class='tdvazio'>" . $mostrar["data"] . "</td><td rowspan='1'>Observação: </td></tr>";
							echo "<tr><td>Produto: </td><td class='tdvazio'>" . $mostrar["produto"] . "</td><td rowspan='11' class='tdvazio'>" . $mostrar["observacao"] . "</td></tr>";
							echo "<tr><td>Quantidade: </td><td class='tdvazio'>" . $mostrar["quantidade"] . "</td>";
							echo "<tr><td>Preço: </td><td class='tdvazio'>R$ " . $mostrar["preco"] . "</td></tr>";
							echo "<tr><td>Total: </td><td class='tdvazio'>R$ " . $mostrar["total"] . "</td>";
							echo "<tr><td>Cliente: </td><td class='tdvazio'>" . $mostrar["cliente"] . "</td>";
							echo "<tr><td>Documento: </td><td class='tdvazio'>" . $mostrar["documento"] . "</td>";
							echo "<tr><td>Telefone: </td><td class='tdvazio'>" . $mostrar["telefone"] . "</td>";
							echo "<tr><td>Pagamento: </td><td class='tdvazio'>" . $mostrar["pagamento"] . "</td>";
							echo "<tr><td>Funcionário: </td><td class='tdvazio'>" . $mostrar["funcionario"] . "</td></tr></table><br />";
						}
					} else
					{
						echo "<script type='text/javascript'>alert('Nenhuma venda encontrada com os dados informados.');window.location='exibir_vendas.php';</script>";
					}
				}
		}
		?>
	</body>
</html>