<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		
		<!-- O Internet Explorer suporta somente a pseudo-classe :hover aplicada a um link.
		Dessa forma, li:hover, que faz os sub-menus aparecerem, não funcionará nesse navegador.
		Utilizando o código JavaScript mostrado abaixo o Internet Explorer ira funcionar como Queremos -->
		
		<script language="JavaScript" type="text/JavaScript">
			startList = function()
			{
				if (document.all&&document.getElementById)
				{
					navRoot = document.getElementById("nav");
					for (i=0; i<navRoot.childNodes.length; i++)
					{
						node = navRoot.childNodes[i];
						if (node.nodeName=="LI")
						{
							node.onmouseover=function()
							{
								this.className+=" over";
							}
							node.onmouseout=function()
							{
								this.className=this.className.replace
								(" over", "");
							}
						}
					}
				}
			}
			window.onload=startList;
			
			<!-- Daqui para baixo so se for menu -> submenu -> outro submenu -->
			
			over = function()
			{
				var sfEls = document.getElementById("nav").getElementsByTagName("LI");
				for (var i=0; i<sfEls.length; i++)
				{
					sfEls[i].onmouseover=function()
					{
						this.className+=" over";
					}
					sfEls[i].onmouseout=function()
					{
						this.className=this.className.replace(new RegExp(" over\\b"), "");
					}
				}
			}
			if (window.attachEvent) window.attachEvent("onload", over);
			//-->
		</script>
		
		<title>:: GERÊNCIA WEB 1.0 ::</title>
	</head>
	
	<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">	
	
	<div id="centralizar">
	
		<div id="header">
			
			<div id="logotipo">
				<img src="imagens/logotipo.png">
			</div>
			
			<p class="bemvindo"><b>Bem vindo: </b>
				<?php 
					include "conectar.inc";

					$usuario=$_POST['usuario'];
					$senha=$_POST['senha'];
					$query = "SELECT nome FROM usuarios WHERE login = '$usuario'";
					$resultado = mysql_query($query,$conexao);

					while ($mostrar = mysql_fetch_array($resultado))
					{
						echo $mostrar['nome'];
					}
					mysql_close($conexao);
				?>
				<b>||</b> <a href="http://localhost/oficinadasplacas/gerenciaweb/administrar.html" class="sair">Sair do sistema</a>
				
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<?php include "data.php";?>
			</p>
		</div>
		
		<!-- MENU -->
		<div id="menu">
			<h4 class="texto_ger_site">Gerênciar Site</h4>
			<ul>
				<li>
					<a href="#">Página Inícial <p class="setas">></p></a>
					<ul>
						<li>
							<a href="adicionar_artigo_inicial.html" target="principal">Adicionar Artigo</a>
						</li>
						<li>
							<a href="atualizar_artigo_inicial.html" target="principal">Atualizar Artigo</a>
						</li>
						<li>
							<a href="excluir_artigo_inicial.html" target="principal">Excluir Artigo</a>
						</li>
						<li>
							<a href="exibir_artigo_inicial.php" target="principal">Mostrar Artigos</a>
						</li>
					</ul>
				</li>
				
				<li>
					<a href="#">Página Empresa <p class="setas">></p></a>
					<ul>
						<li>
							<a href="adicionar_artigo_empresa.html" target="principal">Adicionar Artigo</a>
						</li>
						<li>
							<a href="excluir_artigo_empresa.html" target="principal">Excluir Artigo</a>
						</li>
						<li>
							<a href="exibir_artigo_empresa.php" target="principal">Mostrar Artigos</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#">Página Prod. Serv. <p class="setas">></p></a>
					<ul>
						<li>
							<a href="adicionar_artigo_prodserv.html" target="principal">Adicionar Artigo</a>
						</li>
						<li>
							<a href="excluir_artigo_prodserv.html" target="principal">Excluir Artigo</a>
						</li>
						<li>
							<a href="exibir_artigo_prodserv.php" target="principal">Mostrar Artigos</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#">Página Galeria <p class="setas">></p></a>
					<ul>
						<li>
							<a href="adicionar_artigo_galeria.html" target="principal">Adicionar Artigo</a>
						</li>
						<li>
							<a href="excluir_artigo_galeria.html" target="principal">Excluir Artigo</a>
						</li>
						<li>
							<a href="exibir_artigo_galeria.php" target="principal">Mostrar Artigos</a>
						</li>
					</ul>
				</li>
			</ul>
			
			<h4 class="texto_ger_sistema">Gerênciar Sistema</h4>
			<ul>
				<li>
					<a href="cadastrar_usuario.html" target="principal">Cadastrar Usuário</a>
				</li>
				<li>
					<a href="excluir_usuario.html" target="principal">Excluir Usuário</a>
				</li>
				<li>
					<a href="exibir_usuarios.php" target="principal">Exibir Usuários</a>
				</li>
			</ul>
		</div>
		
		<div id="content">
			
			<iframe name="principal" src="pag_inicial.html" scrolling="auto">
			</iframe>
		
		</div>
		
		<div id="footer">

			<hr class="footer-linha">
			<p class="footer-texto">
				© 2015-2016 Code Soluções em TI
			</p>
			<a href="http://www.codesolucoesti.com.br" target="_blank">
				<img class="desenvolvedor" src="imagens/code.png">
			</a>

		</div>

	</div>
	</body>
</html>