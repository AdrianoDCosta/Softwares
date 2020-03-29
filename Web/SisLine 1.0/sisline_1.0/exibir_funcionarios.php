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
	else
	{

		include "conectar.inc";

		
?>
		
	<h2>.: Funcionários</h2>
	<form name="frmBuscaFuncionarios" method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>?a=buscar">
		<input type="text" name="nome_funcionario" placeholder="Digite o nome do funcionário..." class="pesquisar"><input type="image" src="imagens/btn/buscar.png" value="Buscar" class="img_pesquisar">
	</form>
	<hr><br />
	
	<?php
	
		$a = @$_GET['a']; // Recuperamos a ação enviada pelo formulário
			
			if ($a != "buscar")
			{
				echo "<table><tr><td colspan='3' class='tdopcoes'>";
				echo "<a href='adicionar_funcionario.html' title='Adicionar'><img src='imagens/btn/adicionar.png' alt='Adicionar'></a></td></tr>";
				echo "<tr><td>Nome:</td><td class='tdvazio'> </td><td rowspan='1'>Observação: </td></tr>";
				echo "<tr><td>Documento: </td><td class='tdvazio'></td><td rowspan='8' class='tdvazio'></td></tr>";
				echo "<tr><td>Telefone: </td><td class='tdvazio'></td>";
				echo "<tr><td>Email: </td><td class='tdvazio'></td></tr>";
				echo "<tr><td>Endereço: </td><td class='tdvazio'></td>";
				echo "<tr><td>Cidade: </td><td class='tdvazio'></td>";
				echo "<tr><td>Estado: </td><td class='tdvazio'></td>";
				echo "<tr><td>Cep: </td><td class='tdvazio'></td>";
				echo "<tr><td>País: </td><td class='tdvazio'></td></tr></table><br />";
			
			} elseif ($a == "buscar")// Verificamos se a ação é de busca
				{
					$nome_funcionario = trim($_POST['nome_funcionario']);// Pegamos o nome digitado
					
					$sql = mysql_query("SELECT * FROM funcionarios WHERE nome LIKE '".$nome_funcionario."%' ");// Verificamos no banco de dados funcionários equivalente ao nome digitado
					
					$numRegistros = mysql_num_rows($sql);// Descobrimos o total de registros encontrados
					
					if ($numRegistros != 0)// Se houver pelo menos um registro, exibe-o
					{
						while ($mostrar = mysql_fetch_array($sql))// Exibe os funcionários e suas demais informações
						{
							echo "<table><tr><td colspan='3' class='tdopcoes'><a href='excluir_funcionario.php?codigo=" . $mostrar['codigo'] . "' title='Excluir'><img src='imagens/btn/excluir.png' alt='Excluir'></a>&nbsp;&nbsp;&nbsp";
							echo "<a href='atualizando_funcionario.php?codigo=" . $mostrar['codigo'] . "' title='Atualizar'><img src='imagens/btn/editar.png' alt='Atualizar'></a>&nbsp;&nbsp;&nbsp";
							echo "<a href='adicionar_funcionario.html' title='Adicionar'><img src='imagens/btn/adicionar.png' alt='Adicionar'></a></td></tr>";
							echo "<tr><td>Nome:</td><td class='tdvazio'>" . $mostrar["nome"] . "</td><td rowspan='1'>Observação: </td></tr>";
							echo "<tr><td>Documento: </td><td class='tdvazio'>" . $mostrar["documento"] . "</td><td rowspan='8' class='tdvazio'>" . $mostrar["observacao"] . "</td></tr>";
							echo "<tr><td>Telefone: </td><td class='tdvazio'>" . $mostrar["telefone"] . "</td>";
							echo "<tr><td>Email: </td><td class='tdvazio'>" . $mostrar["email"] . "</td></tr>";
							echo "<tr><td>Endereço: </td><td class='tdvazio'>" . $mostrar["endereco"] . "</td>";
							echo "<tr><td>Cidade: </td><td class='tdvazio'>" . $mostrar["cidade"] . "</td>";
							echo "<tr><td>Estado: </td><td class='tdvazio'>" . $mostrar["estado"] . "</td>";
							echo "<tr><td>Cep: </td><td class='tdvazio'>" . $mostrar["cep"] . "</td>";
							echo "<tr><td>País: </td><td class='tdvazio'>" . $mostrar["pais"] . "</td></tr></table><br />"; 
						}
					} else
					{ 
						echo "<script type='text/javascript'>alert('Nenhum funcionário encontrado com a informação digitada.');window.location='exibir_funcionarios.php';</script>";
					}
				}
			}
		?>
	</body>
</html>