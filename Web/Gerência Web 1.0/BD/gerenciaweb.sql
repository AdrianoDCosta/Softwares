-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 01-Fev-2016 às 22:56
-- Versão do servidor: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gerenciaweb`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresa`
--

CREATE TABLE IF NOT EXISTS `empresa` (
  `Codigo` int(50) NOT NULL AUTO_INCREMENT,
  `texto` varchar(10000) NOT NULL,
  `imagem` blob NOT NULL,
  PRIMARY KEY (`Codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Extraindo dados da tabela `empresa`
--

INSERT INTO `empresa` (`Codigo`, `texto`, `imagem`) VALUES
(6, '<strong>Miss&atilde;o</strong><br />\r\n<br />\r\nAssegurar ao mercado o fornecimento de servi&ccedil;os e produtos personalizados em Comunica&ccedil;&atilde;o Visual com qualidade, agilidade e garantia de satisfa&ccedil;&atilde;o.', ''),
(9, '<strong>Valores</strong><br />\r\n&nbsp;\r\n<ul>\r\n	<li>Respeito, integridade e transpar&ecirc;ncia no relacionamento com os colaboradores, fornecedores e clientes.</li>\r\n	<li>Valoriza&ccedil;&atilde;o e colabora&ccedil;&atilde;o no ambiente de trabalho.</li>\r\n	<li>&Eacute;tica, clareza e objetividade nas negocia&ccedil;&otilde;es com clientes internos e externos.</li>\r\n	<li>Agilidade e qualidade no atendimento ao cliente.</li>\r\n</ul>\r\n', ''),
(10, '<strong>Principais Clientes</strong><br />\r\n&nbsp;\r\n<ul>\r\n	<li>ANIMALE SHOPPING PET</li>\r\n	<li>ATEEN ROUPAS E ACESS&Oacute;RIOS</li>\r\n	<li>BIBE ROUPAS INFANTIS</li>\r\n	<li>CANAAN ENGENHARIA</li>\r\n	<li>CONSTRUTORA SCARPELLI VENTURA</li>\r\n	<li>CONSTRUTORA UNI</li>\r\n	<li>CONVIV ENGENHARIA</li>\r\n	<li>DUTFRY BRASIL</li>\r\n	<li>EDENGE ENGENHARIA</li>\r\n	<li>EHNOVA ENGENHARIA</li>\r\n	<li>CONSTRUTORA ETECCO</li>\r\n	<li>F&Aacute;BULA INFANTIL</li>\r\n	<li>LOJAS FARM</li>\r\n	<li>GRANVIA EVENTOS</li>\r\n	<li>LAN&Ccedil;A PERFUME</li>\r\n	<li>MAIO 18 ROUPAS</li>\r\n	<li>NATURA</li>\r\n	<li>OBRA PRIMA ENGENHARIA</li>\r\n	<li>OBRA PRONTA</li>\r\n	<li>REDE MATER DEI DE SA&Uacute;DE</li>\r\n	<li>SERGIO&#39;S CAL&Ccedil;ADOS</li>\r\n	<li>SPATIFILUS&nbsp;</li>\r\n	<li>TIME CENTER REL&Oacute;GIOS</li>\r\n	<li>TOOL BOX</li>\r\n	<li>ZAK</li>\r\n</ul>\r\n', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `home`
--

CREATE TABLE IF NOT EXISTS `home` (
  `Codigo` int(50) NOT NULL AUTO_INCREMENT,
  `texto` varchar(10000) NOT NULL,
  `imagem` blob NOT NULL,
  PRIMARY KEY (`Codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Extraindo dados da tabela `home`
--

INSERT INTO `home` (`Codigo`, `texto`, `imagem`) VALUES
(7, '<strong>OFICINA DAS PLACAS</strong><br />\r\n<br />\r\nSediada em Belo Horizonte-MG, a OFICINA DAS PLACAS conta com uma equipe de colaboradores que acumula experi&ecirc;ncia superior a 35 anos na execu&ccedil;&atilde;o de placas de sinaliza&ccedil;&atilde;o para as mais diversas finalidades.&nbsp; Nesse per&iacute;odo executamos principalmente projetos personalizados, visando atender &agrave;s demandas espec&iacute;ficas e particulares de cada cliente.<br />\r\n<br />\r\nEstamos sempre pesquisando novos materiais que atendam &agrave;s expectativas de nossos clientes, e sempre atentos &agrave; otimiza&ccedil;&atilde;o de recursos visando a minimiza&ccedil;&atilde;o dos custos.<br />\r\n<br />\r\nAl&eacute;m do aspecto tecnol&oacute;gico, focamos nossa aten&ccedil;&atilde;o no toque humano, o que constitui o grande diferencial na solu&ccedil;&atilde;o de quest&otilde;es complexas.&nbsp; Adotando essa postura, a OFICINA DAS PLACAS estreita o relacionamento com os clientes e consegue destaque nacional na obten&ccedil;&atilde;o de solu&ccedil;&otilde;es pr&aacute;ticas, inteligentes, inovadoras e confi&aacute;veis para tudo que se relaciona a sinaliza&ccedil;&atilde;o visual.', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `prodserv`
--

CREATE TABLE IF NOT EXISTS `prodserv` (
  `Codigo` int(50) NOT NULL AUTO_INCREMENT,
  `texto` varchar(10000) NOT NULL,
  `imagem` blob NOT NULL,
  PRIMARY KEY (`Codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Extraindo dados da tabela `prodserv`
--

INSERT INTO `prodserv` (`Codigo`, `texto`, `imagem`) VALUES
(5, '<strong>CRIA&Ccedil;&Atilde;O E DESENVOLVIMENTO DE PROJETOS</strong><br />\r\n<br />\r\nAdotando a premissa de que todo bom projeto de sinaliza&ccedil;&atilde;o precisa ser bem localizado, leg&iacute;vel e contendo informa&ccedil;&otilde;es bem organizadas em um trabalho conjunto entre textos e imagens, a OFICINA DAS PLACAS cria projetos conceituais para atendimento &agrave;s necessidades espec&iacute;ficas de cada cliente e, ap&oacute;s sua aprova&ccedil;&atilde;o, desenvolve os projetos b&aacute;sicos e executivos de comunica&ccedil;&atilde;o visual, sempre garantindo altos n&iacute;veis de qualidade e apresenta&ccedil;&atilde;o.', ''),
(7, '<strong>PRODU&Ccedil;&Atilde;O, MONTAGEM E INSTALA&Ccedil;&Atilde;O</strong><br />\r\n<br />\r\nA linha de produ&ccedil;&atilde;o da OFICINA DAS PLACAS inclui a fabrica&ccedil;&atilde;o de:<br />\r\n&nbsp;\r\n<ul>\r\n	<li>Letreiros back e front light;</li>\r\n	<li>Placas nas mais diversas op&ccedil;&otilde;es;</li>\r\n	<li>Letras em caixa para fachadas;</li>\r\n	<li>Sinaliza&ccedil;&atilde;o indicativa para ambientes fechados;</li>\r\n	<li>e outras aplica&ccedil;&otilde;es diversas.</li>\r\n</ul>\r\n<br />\r\nOs produtos s&atilde;o fabricados nos mais diversos materiais, tais como, mas n&atilde;o limitados a:<br />\r\n&nbsp;\r\n<ul>\r\n	<li>Chapas galvanizadas;</li>\r\n	<li>Acr&iacute;lico;</li>\r\n	<li>A&ccedil;o inox;</li>\r\n	<li>A&ccedil;o escovado;</li>\r\n	<li>ACM;</li>\r\n	<li>PVC;</li>\r\n	<li>Lona,</li>\r\n	<li>MDF e quaisquer outros tipos de madeira;</li>\r\n	<li>Outros materiais que apresentem viabilidade de aplica&ccedil;&atilde;o.</li>\r\n</ul>\r\n<br />\r\nTodos os itens produzidos pela OFICINA DAS PLACAS s&atilde;o confeccionados com materiais de alta qualidade, resist&ecirc;ncia e durabilidade, al&eacute;m de f&aacute;cil limpeza e manuten&ccedil;&atilde;o.&nbsp; Al&eacute;m disso, a utiliza&ccedil;&atilde;o de tecnologia de ponta, aliada &agrave; habilidade de profissionais com vasta experi&ecirc;ncia na execu&ccedil;&atilde;o, possibilita a obten&ccedil;&atilde;o de um acabamento impec&aacute;vel para as pe&ccedil;as.<br />\r\n<br />\r\nA instala&ccedil;&atilde;o das pe&ccedil;as tamb&eacute;m &eacute; executada por profissionais da OFICINA DAS PLACAS, o que garante que os servi&ccedil;os sejam entregues de forma impec&aacute;vel e com rigoroso cumprimento dos prazos contratados.', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `codigo` int(3) NOT NULL AUTO_INCREMENT,
  `nome` varchar(80) NOT NULL,
  `login` varchar(20) NOT NULL,
  `senha` varchar(20) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`codigo`, `nome`, `login`, `senha`) VALUES
(1, 'Adriano Dornelas da Costa', 'adriano', 'adriano');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
