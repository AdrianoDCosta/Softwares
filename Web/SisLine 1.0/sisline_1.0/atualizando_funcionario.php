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
						
			$query = mysql_query("SELECT * FROM funcionarios WHERE codigo LIKE '$codigo'");
			$mostrar = mysql_fetch_array($query);
			
	?>
			
		<form method="GET" action="atualizar_funcionario.php">
		<h2>.: Atualizar Funcionário</h2><br /><br />
		<hr><br />
				
		<table>
			<tr>
				<td colspan="3" class="tdopcoes"><a href="exibir_funcionarios.php" title="Cancelar"><img src="imagens/btn/cancelar.png" alt="Cancelar"></a>
				&nbsp
				<input type="image" src="imagens/btn/salvar.png" name="adicionar" value="Adicionar"></td>
			</tr>
				<input type="hidden" name="codigo" class="tdvazio" value="<?php echo $mostrar["codigo"]; ?>">
			<tr>
				<td>Nome: </td><td class='tdvazio'><input type="text" name="nome" class="tdvazio" value="<?php echo $mostrar["nome"]; ?>"></td><td rowspan="1">Observação: </td>
			</tr>
			<tr>
				<td>Documento: </td><td class='tdvazio'><input type="text" name="documento" class="tdvazio" value="<?php echo $mostrar["documento"]; ?>"></td><td rowspan="8" class="tdvazio"><textarea name="observacao" rows="14" class="tdvazio"><?php echo $mostrar["observacao"]; ?></textarea></td>
			</tr>
			<tr>
				<td>Telefone: </td><td class='tdvazio'><input type="text" name="telefone" class="tdvazio" value="<?php echo $mostrar["telefone"]; ?>"></td>
			</tr>
			<tr>
				<td>Email: </td><td class='tdvazio'><input type="text" name="email" class="tdvazio" value="<?php echo $mostrar["email"]; ?>"></td>
			</tr>
			<tr>
				<td>Endereço: </td><td class='tdvazio'><input type="text" name="endereco" class="tdvazio" value="<?php echo $mostrar["endereco"]; ?>"></td>
			</tr>
			<tr>
				<td>Cidade: </td><td class='tdvazio'><input type="text" name="cidade" class="tdvazio" value="<?php echo $mostrar["cidade"]; ?>"></td>
			</tr>
			<tr>
				<td>Estado: </td><td class='tdvazio'><input type="text" name="estado" class="tdvazio" value="<?php echo $mostrar["estado"]; ?>"></td>
			</tr>
			<tr>
				<td>Cep: </td><td class='tdvazio'><input type="text" name="cep" class="tdvazio" value="<?php echo $mostrar["cep"]; ?>"></td>
			</tr>
			<tr>
				<td>País: </td><td class='tdvazio'><input type="text" name="pais" class="tdvazio" value="<?php echo $mostrar["pais"]; ?>"></td>
			</tr>
		</table><br />
		
	</form>

	<?php 
		}
	?>
	</body>
</html>