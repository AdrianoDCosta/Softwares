<?php
	include "conectar.inc";
	session_start();
	if(!isset($_SESSION["usuario"]) || !isset($_SESSION["senha"])) {
		header("Location: index.php");
		exit;
	}
	else {
?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		
		<title>:: SisLine ::</title>
	</head>
	
	<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">	
	
	<div id="centralizar">
	
		<div id="header">
		
			
				<img src="imagens/logotipo.png">

			<!-- MENU -->

				<div id="menu">
					<a href="exibir_funcionarios.php" target="principal" class="menu"><img src="imagens/menubar/funcionarios.png">Funcionários</a>
				</div>
				<div id="menu">
					<a href="exibir_vendas.php" target="principal" class="menu"><img src="imagens/menubar/vendas.png">Vendas</a>
				</div>
				<div id="menu">
					<a href="exibir_fornecedores.php" target="principal" class="menu"><img src="imagens/menubar/fornecedores.png">Fornecedores</a>
				</div>
				<div id="menu">
					<a href="exibir_produtos.php" target="principal" class="menu"><img src="imagens/menubar/produtos.png">Produtos</a>
				</div>
				<div id="menu">
					<a href="exibir_clientes.php" target="principal" class="menu"><img src="imagens/menubar/clientes.png">Clientes</a>
				</div>
				
			<p class="faixa"><?php include "data.php";?>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				Usuário: <b><?php echo $_SESSION['usuario'];?></b>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="logout.php" class="sair">Sair do sistema</a>
			</p>
		</div>
		
		<div id="content">
			
			<iframe name="principal" src="pag_inicial.html" scrolling="auto">
			</iframe>
		
		</div>
		
		<div id="footer">

			<hr class="footer-linha">
			<p class="footer-texto">
				© 2017 Code Soluções em TI
			</p>
			<a href="http://www.codesolucoesti.com.br" target="_blank">
				<img class="desenvolvedor" src="imagens/code.png">
			</a>

		</div>

	</div>
	</body>
</html>
<?php	
	}
?>