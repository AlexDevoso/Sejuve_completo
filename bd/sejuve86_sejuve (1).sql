-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 30-Set-2020 às 12:30
-- Versão do servidor: 5.7.23-23
-- versão do PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sejuve86_sejuve`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE `aluno` (
  `alunoid` int(11) NOT NULL,
  `nome` varchar(60) DEFAULT NULL,
  `rg` varchar(50) DEFAULT NULL,
  `modalidade_individualid_fk` int(11) DEFAULT NULL,
  `modalidade_coletivaid_fk` int(11) DEFAULT NULL,
  `escola_id_fk` int(11) DEFAULT NULL,
  `data_nascimento_aluno` varchar(50) DEFAULT NULL,
  `imagem_aluno` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`alunoid`, `nome`, `rg`, `modalidade_individualid_fk`, `modalidade_coletivaid_fk`, `escola_id_fk`, `data_nascimento_aluno`, `imagem_aluno`) VALUES
(16, 'PAULO EDUARDO ROCHA DA SILVA', '20151664573', NULL, 16, 22, '2004-02-13', NULL),
(17, 'FRANCISCO EMANUEL GOMES DE ABREU', '20086284813', NULL, 16, 22, '2003-09-23', NULL),
(18, 'LUIZ GUILHERME FIRMIANO DA SILVA', '20180444144', NULL, 16, 22, '2003-05-20', NULL),
(19, 'FRANCISCO GEOVAN VIANA FREITAS', '28688', NULL, 16, 22, '2003-04-18', NULL),
(23, 'JUAN RODRIGUES GOMESDE SOUSA', '24976', NULL, 16, 22, '2004-04-05', NULL),
(24, 'KAIO CÉSAR ALMEIDA DA SILVA', '20088920172', NULL, 16, 22, '2004-03-17', NULL),
(25, 'ANTONIO EDSON VIANA FERREIRA', '20072642526', NULL, 16, 22, '2004-02-14', NULL),
(26, 'FRANCISCO DENILSON DE SOUSA ALVES', '24882', NULL, 16, 22, '2004-02-07', NULL),
(27, 'ANTONIO VITORIO FREITAS DA CRUZ', '20151663712', NULL, 16, 22, '2004-07-02', NULL),
(28, 'JOSÉ JARDEL PEREIRA LIMA DOMINGOS', '20161417854', NULL, 16, 22, '2003-11-18', NULL),
(29, 'ANTONIO HENRIQUE ALMEIDA DE SOUSA', '24853', NULL, 16, 22, '2003-12-12', NULL),
(30, 'SAMUEL ALVES DA SILVA', '30359', NULL, 16, 22, '2004-10-13', NULL),
(32, 'JERBESON LIMA DA SILVA', '29714', NULL, 16, 22, '2004-12-16', NULL),
(33, 'ANTONIO VLADSON DO NASCIMENTO MOTA', '20161417781', NULL, 16, 22, '2003-05-23', NULL),
(34, 'MARCIO LEVY VIEIRA VIANA', '20072642577', NULL, 16, 22, '2004-04-26', NULL),
(35, 'INARA HELLEN SANTOS DE OLIVEIRA', '2007702455', NULL, 4, 16, '2007-06-25', NULL),
(36, 'MARIA AUXILIADORA DE SOUSA SANTOS', '30894', NULL, 4, 16, '2007-06-01', NULL),
(37, 'VITORIA LOHANNA OLIVEIRA DE SOUSA', '30956', NULL, 4, 16, '2007-08-27', NULL),
(38, 'ANTONIA MIKAELE ALMEIDA DE SOUSA', '28625', NULL, 17, 22, '2003-02-04', NULL),
(39, 'LILIAN DA SILVA SANTOS', '20171557780', NULL, 17, 22, '2003-02-10', NULL),
(40, 'MARIA JOELMA SOARES RODRIGUES ', '20088854633', NULL, 17, 22, '2003-01-28', NULL),
(41, 'EMILY NUNES SOARES', '20088854900', NULL, 17, 22, '2003-09-14', NULL),
(42, 'FRANCISCA LUANA ALVES DE CASTRO', '20080144602', NULL, 17, 22, '2003-05-04', NULL),
(43, 'REBECA LIMA PEREIRA', '11999', NULL, 4, 16, '2007-07-03', NULL),
(45, 'ANTONIA CAUANNE BESSA BRAGA', '25683', NULL, 4, 16, '2006-07-13', NULL),
(46, 'KARLA SUELLEN OLIVEIRA MOREIRA', '20086298520', NULL, 17, 22, '2004-11-16', NULL),
(47, 'FABRICIA FERNANDES MARTINS', '7635', NULL, 4, 16, '2006-11-23', NULL),
(48, 'MARIA EDUARDA MAGALHÃES PINTO', '20172737928', NULL, 17, 22, '2004-05-03', NULL),
(49, 'PAMELA DE SOUSA ALMEIDA', '25696', NULL, 4, 16, '2006-06-29', NULL),
(50, 'MARIA TAINARA FERREIRA BATISTA', '28687', NULL, 17, 22, '2003-03-04', NULL),
(51, 'THAYNÁ SANTOS DA SILVA', '20086383544', NULL, 17, 22, '2005-04-25', NULL),
(52, 'MARIA JENNIFER SILVA DO AMARAL', '31383', NULL, 4, 16, '2008-10-18', NULL),
(53, 'André Messias Santos Castro', '2008744749-0', NULL, 3, 25, '2004-04-12', 'c848790472d109d43260e02ddd756ab8.jpg'),
(54, 'Antonio Gustavo dos Santos Sales', '2017127260-3', NULL, 3, 25, '2004-05-17', '9b2660acb02e4eda589fc418713b4eee.jpg'),
(55, 'Eric Pinho de Almeida', '2017155781-0', NULL, 3, 25, '2004-10-02', '0a76e9968792728e2b10220084a84310.jpg'),
(56, 'Francisco Rai Oliveira Silva', '2017042005-6', NULL, 3, 25, '2004-06-16', 'f847b78e0b32b70623b8993489b144c7.jpg'),
(58, 'José Jerfeson Rufino da Silva', '2017155783-7', NULL, 3, 25, '2004-08-29', 'a804ff69c056d333311c4cd9294bc2a2.jpg'),
(61, 'Francisco Erinaldo de Sousa Silva', '25488596', NULL, 3, 25, '2003-09-01', NULL),
(65, 'Francisco Kaua Pessoa Marinho', '2007722838-8', NULL, 3, 25, '2003-10-02', '9f6a8e44a2b830eca5e899d5a55f1d3d.jpg'),
(66, 'Kelve Kenderson Sousa Marinho', '201704673-0', NULL, 3, 25, '2005-01-28', '135c9aea4c76f432d9bdbe91dec291d2.jpg'),
(67, 'Mizael Santos de Moura', '2017236338-6', NULL, 3, 25, '2004-05-31', '1a9cf21f4ead6bf6ca1053de24d77d0d.jpg'),
(68, 'Iure Keven Ribeiro Silva', '2016141758-7', NULL, 3, 25, '2004-01-18', '5c4f4484dc0f801f3a6be01f88ed66cb.jpg'),
(69, 'Jean de Sousa Moura', '201614178-1', NULL, 3, 25, '2003-05-06', '500be7a003a8e58984cad3311f2d0899.jpg'),
(70, 'Allan Moreira de Sousa', '2007627641-9', NULL, 3, 25, '2003-11-03', '5893f629d6ee4e3a67b847e4aed02e66.jpg'),
(71, 'KAUAN DE SOUSA LIMA', '30754', NULL, 15, 16, '2007-01-28', NULL),
(72, 'IZAIAS LIMA CUNHA', '20181825575', NULL, 15, 16, '2006-05-25', NULL),
(73, 'FRANCISCO VICTOR DE SOUSA MOURA', '25860', NULL, 15, 16, '2006-12-27', NULL),
(74, 'ARMANDO DUARTE DE SOUSA', '088539', NULL, 15, 16, '2007-01-23', NULL),
(75, 'KAIO SANTOS MENDES', '30687', NULL, 15, 16, '2006-12-16', NULL),
(76, 'FRANCISCO JOELSON RODRIGUES SANTOS', '25984', NULL, 15, 16, '2007-05-27', NULL),
(77, 'ANDERSON BRUNO DE SOUSA CASTRO', '30810', NULL, 15, 16, '2007-04-19', NULL),
(78, 'JOÃO EMANUEL CUSTODIO DE SOUSA', '02035401552007100029343002611612', NULL, 15, 16, '2007-10-17', NULL),
(79, 'FRANCISCO ARIEL SANTOS DE SOUSA', '01557801552010100120178009903378', NULL, 15, 16, '2008-06-30', NULL),
(80, 'PEDRO VICTOR CUNHA RIBEIRO', '296902', NULL, 15, 16, '2008-05-23', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `atleta`
--

CREATE TABLE `atleta` (
  `atletaid` int(11) NOT NULL,
  `nome_atleta` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `data_nascimento_atleta` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rg_atleta` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `naturalidade_atleta` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `equipeid_fk` int(11) DEFAULT NULL,
  `imagem_rg` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `atleta`
--

INSERT INTO `atleta` (`atletaid`, `nome_atleta`, `data_nascimento_atleta`, `rg_atleta`, `naturalidade_atleta`, `equipeid_fk`, `imagem_rg`) VALUES
(25, 'Alek', '2020-01-01', '1234567890', 'Brasil', 208, 'Alek.png'),
(26, 'andre castro', '2005-02-05', '952.473.145-4', 'pentecoste', 189, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `card_pagina`
--

CREATE TABLE `card_pagina` (
  `id_cp` int(11) NOT NULL,
  `titulo_cp` varchar(100) DEFAULT NULL,
  `desc_cp` varchar(500) DEFAULT NULL,
  `imagem_cp` varchar(100) DEFAULT NULL,
  `link_cp` varchar(200) DEFAULT NULL,
  `titulo_painel_cp` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `card_pagina`
--

INSERT INTO `card_pagina` (`id_cp`, `titulo_cp`, `desc_cp`, `imagem_cp`, `link_cp`, `titulo_painel_cp`) VALUES
(1, 'conheça o time da sejuve', '', 'sejuve.jpg', 'http://sejuvecompeticoes.com/equipe.php', 'Time Sejuve'),
(2, 'Deixe suas sugestões e ajude a construir um Pentecoste melhor.', '', 'falajovem.jpeg', 'https://forms.gle/XrPumZZDZYYDt4zG6', 'Fala Jovem.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `comissao_tecnica`
--

CREATE TABLE `comissao_tecnica` (
  `comissao_tecnicaid` int(11) NOT NULL,
  `nome` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `funcao` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `equipeid_fk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `comissao_tecnica`
--

INSERT INTO `comissao_tecnica` (`comissao_tecnicaid`, `nome`, `funcao`, `equipeid_fk`) VALUES
(1, 'JOSE DENILSON ALVES SALDANHA', 'Técnico', 204),
(2, 'alex', 'Massagista', 204),
(3, 'joao', 'Auxíliar', 204),
(35, 'Jonas', 'Técnico', 189),
(37, 'José', 'Técnico', 207),
(38, 'João', 'Massagista', 207),
(39, 'Jonas', 'Auxíliar', 207),
(41, 'Valdemar', 'Massagista', 208),
(42, 'Bruno', 'Auxíliar', 208),
(43, 'Mário', 'Técnico', 208);

-- --------------------------------------------------------

--
-- Estrutura da tabela `comissao_tecnica_escolares`
--

CREATE TABLE `comissao_tecnica_escolares` (
  `id_tecnico` int(11) NOT NULL,
  `nome_tecnico` varchar(100) DEFAULT NULL,
  `rg_tecnico` varchar(50) DEFAULT NULL,
  `cref_tecnico` varchar(50) DEFAULT NULL,
  `escola_id_fk` int(11) DEFAULT NULL,
  `modalidade_coletivaid_fk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `comissao_tecnica_escolares`
--

INSERT INTO `comissao_tecnica_escolares` (`id_tecnico`, `nome_tecnico`, `rg_tecnico`, `cref_tecnico`, `escola_id_fk`, `modalidade_coletivaid_fk`) VALUES
(11, 'FRANCISCO FELIPE BERNARDO GOMES', '20075691331', '012442-G/CE', 22, 16),
(12, 'FRANCISCO FELIPE BERNARDO GOMES', '20075691331', '012442-G/CE', 22, 17),
(13, 'André Luiz da Costa', '92025015240', '003511', 25, 3),
(14, 'FRANCISCO FABIO FERREIRA SALES', '2005015020926', '009116-G/CE', 16, 15),
(15, 'FRANCISCO FABIO FERREIRA SALES', '2005015020926', '009116-G/CE', 16, 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `equipe`
--

CREATE TABLE `equipe` (
  `equipeid` int(11) NOT NULL,
  `nomeequipe` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nomeresponsavel` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rgresponsavel` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `naturalidade` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telefone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `endereco` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `atletaid_fk` int(11) DEFAULT NULL,
  `logoequipe` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `equipe`
--

INSERT INTO `equipe` (`equipeid`, `nomeequipe`, `nomeresponsavel`, `rgresponsavel`, `naturalidade`, `email`, `telefone`, `endereco`, `atletaid_fk`, `logoequipe`) VALUES
(188, 'Barça', 'Messi', '111.111.111-1', 'Nigeris', 'qw@qw', '(11) 11111-1111', 'qwe', NULL, 'Barça.png'),
(189, 'demo', 'demo', '222.222.222-2', 'demod', 'sas@dd', '(33) 33333-3333', 'ed', NULL, 'demo.png'),
(191, 'Nubamk', 'www', '22222', 'df', 'qw2@DSD', 'dddddd', 'df', NULL, 'Nubamk.png'),
(195, 'teste2', 'qqq', '2222', 'www', 'aaa@dddd', 'gvfvf', 'wwww', NULL, NULL),
(204, 'JOSE DENILSON', 'JOSE DENILSON ALVES SALDANHA', '2.133.333-3', 'Pentecoste', 'denilsonsaldanha1904@gmail.com', '(85) 99144-4250', 'Rua Joaquim Soares da Silva, 45', NULL, 'JOSE DENILSON.gif'),
(205, 'Jose Denilson', 'Jose Denilson Alves Saldanha', '234.234.234-3', 'Pentecoste', 'denilsonsaldanha1904@gmail.com', '(85) 33522-614', 'Rua Joaquim Soares da Silva 45', NULL, NULL),
(207, 'Demostração', 'José Alves de Sousa', '000.000.000-0', 'Pentecoste', 'exemplo@gmail.com', '(85)00000-0000', 'R.Exemplo', NULL, '92865f82e7e9d0da53c1a5aa88ba89ab.png'),
(208, 'Flamengo', 'Marcos Prado de Souza', '123.345.678.9-0', 'Brasil', 'flamengo@gmail.com', '085992929292', 'R.Bango Turusbago', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `equipe_evento`
--

CREATE TABLE `equipe_evento` (
  `equipe_evento_id` int(11) NOT NULL,
  `idevento_fk` int(11) DEFAULT NULL,
  `equipeid_fk` int(11) DEFAULT NULL,
  `login` varchar(50) DEFAULT NULL,
  `senha` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `equipe_evento`
--

INSERT INTO `equipe_evento` (`equipe_evento_id`, `idevento_fk`, `equipeid_fk`, `login`, `senha`) VALUES
(12, 19, 188, 'barca', 'qwe123'),
(13, 19, 189, 'demo', 'demo'),
(15, 19, 191, 'nub', 'nub'),
(19, 18, 195, '123123', '123123'),
(22, 18, 208, 'flamengo', 'qwe123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `escola`
--

CREATE TABLE `escola` (
  `escola_id` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `inep` varchar(50) DEFAULT NULL,
  `login` varchar(50) DEFAULT NULL,
  `senha` varchar(50) DEFAULT NULL,
  `imagem` varchar(50) DEFAULT NULL,
  `endereco_escola` varchar(50) DEFAULT NULL,
  `nome_responsavel_escola` varchar(50) DEFAULT NULL,
  `diretor_escola` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `telefone_escola` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `escola`
--

INSERT INTO `escola` (`escola_id`, `nome`, `inep`, `login`, `senha`, `imagem`, `endereco_escola`, `nome_responsavel_escola`, `diretor_escola`, `email`, `telefone_escola`) VALUES
(16, 'EEF Governador Waldemar Alcântara', '23045779', '23045779', '23045779', '27a9c0c6e04e19dfe2b7c5a4f68cd799.jpg', 'Rua Pedro Horácio, 297', 'Denilson Saldanha ', 'Lucia Helena Bezerra de Almeida', 'eefwaldemaralcantara@outlook.com', '992502158'),
(17, 'EEF Francisco Edson Tabosa', '23564083', '23564083', '23564083', NULL, 'Av XV de Novembro ', 'Denilson Saldanha ', 'Selma Ferreira Soares', 'fcoedsontabosa@hotmail.com', '33522600'),
(18, 'EEIF PROF MARIA GLAUCINEIDE FIRMIANO DA SILVA', '23045442', '23045442', '23045442', 'a6dce0c70173e86bc0fc14dc4d5de95e.jpg', 'Av. Pres. Juscelino ', 'André costa', 'Augusto César Matos Júnior', 'eeifglaucineide@hotmail.com', '33522605'),
(19, 'Colégio João XXIII', '23244038', '23244038', '23244038', 'c3d879adee966c757521f91470cce75f.jpg', 'Rua Prefeito João Gomes da Silva, 344, Centro', 'Denilson Saldanha ', 'Lucia Eliane Costa Braga', '', '991593296'),
(20, 'EEIF SÃO JOSÉ ', '23046104', '23046104', '23046104', '3706b5270b50bb30169279472f81777d.jpg', 'COMUNIDADE DE MACACOS', 'DENILSON SALDANHA', 'MARIA ROSANGELA DE SOUSA LEITE MOREIRA', 'saojosemacacos@yahoo.com.br', '997296237'),
(21, 'EEIF PREFEITO ANTONIO CARNEIRO', '23045957', '23045957', '23045957', NULL, 'COMUNIDADE DE PROVIDÊNCIA', 'DENILSON SALDANHA', 'JOAQUIM HOLANDA TEIXEIRA', '', '85988287642'),
(22, 'EEM ETELVINA GOMES BEZERRA', '23045230', '23045230', '23045230', '223f1d5a8ca8018fa640158e7086f147.jpg', 'RUA DEPUTADO JOSE GOMES DA SILVA', 'DENILSON SALDANHA', 'JOSE ROBERTO LIMA DE SOUSA', '', '85992501053'),
(23, 'EEF EDSON MARTINS CAMPELO', '23045590', '23045590', '23045590', 'e1dd63c601d2fa9b5c0fead6754dd0d9.jpg', 'RUA ANTONIO NATALIA ', 'DENILSON SALDANHA', 'SORAYA DE AZEVEDO ALVES', 'eefedson@yahoo.com.br', ''),
(24, 'CEIF MARIA FLOR', '23272112', '23272112', '23272112', '4d0abac8cac8b4611dc0ea53e3cb549f.jpg', 'RUA ANTONIO MARTINS BANDEIRA', 'DENILSON SALDANHA', 'ANTONIO FURTADO CASTRO', 'ceimariaflor@yahoo.com.br', '991926847'),
(25, 'EEMTI TABELIÃO JOSE RIBEIRO GUIMARÃES', '23045493', '23045493', '23045493', '59df8647f6244651fd6305944f6733bc.jpg', 'AV TABELIÃO JOSE RIBEIRO GUIMARÃES', 'DENILSON SALDANHA', 'François Martinz Acácio', 'tabeliao.guimaraes@escola.ce.gov.br', '33522192'),
(26, 'EEEP ALAN PINHO TABOSA', '23545380', '23545380', '23545380', '34f81880f7ad24bced7492424e392e7b.png', 'RUA MARIA MENEZES FURTADO', 'DENILSON SALDANHA', 'ELTON LUZ LOPES', 'eeepalanptabosa@escola.ce.gov.br', '33521341'),
(27, 'EEIF João Gomes da Silva', '230461155', '23046155', '23046155', '5e7d1f0e508c3ddbac92637b79aa5d33.jpg', 'Av: Leopoldo Ramos, SN', 'André Costa', 'Jânio de Araujo Santos', 'escolaraimundanonatadasilva@yahoo.com.br', '85992706366');

-- --------------------------------------------------------

--
-- Estrutura da tabela `evento`
--

CREATE TABLE `evento` (
  `idevento` int(11) NOT NULL,
  `nomeevento` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `logoevento` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contadorinput` int(10) DEFAULT NULL,
  `dataevento` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `modalidade` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `evento`
--

INSERT INTO `evento` (`idevento`, `nomeevento`, `logoevento`, `contadorinput`, `dataevento`, `modalidade`) VALUES
(18, 'Brasileirão 2020', 'd6d32f52a60dbf48cd3620e7b806083d.png', NULL, '2020-02-03', 'futebol'),
(19, 'CAMPEONATO DE FUTEBOL 2020', NULL, NULL, '2020-02-05', 'futebol'),
(20, 'CAMPEONATO DE FUTSAL', NULL, NULL, '2020-05-01', 'futsal'),
(21, 'Futebol', NULL, NULL, '2003-02-05', 'futebol');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `id_fun` int(11) NOT NULL,
  `nome_fun` varchar(50) DEFAULT NULL,
  `datanascimento_fun` varchar(11) DEFAULT NULL,
  `funcao_fun` varchar(50) DEFAULT NULL,
  `descricao_fun` varchar(500) DEFAULT NULL,
  `imagem_fun` varchar(50) DEFAULT NULL,
  `face_fun` varchar(500) DEFAULT NULL,
  `insta_fun` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`id_fun`, `nome_fun`, `datanascimento_fun`, `funcao_fun`, `descricao_fun`, `imagem_fun`, `face_fun`, `insta_fun`) VALUES
(1, 'André Costa', '28/02/1990', '', 'Licenciado em educação física, monitor de esportes da Sejuve, técnico de handebol a 7 anos do município e da LPHB,\r\nresponsável pela escolinha de handebol que acontece no bairro da Pedreira. Detentor de diversos títulos individuais. \r\nComo atleta: Bi campeão brasileiro adulto de handebol.\r\nComo árbitro nacional: Apitou a final do campeonato brasileiro adulto da primeira divisão.\r\n', 'andre.jpg', 'https://www.facebook.com/alcosta.oficial', 'https://www.instagram.com/andre.costaoficial/'),
(2, 'Abimaelson Jones', '25/06/1995', '', 'Abimaleson, enfermeiro, professor de muaythai e servidor público.\r\nPratica artes marciais desde os cinco anos de idade. Passou pelo karatê, capoeira e jiu-jitsu. Conheceu o muaythai em 2010, estreou como atleta em 2015,\r\ndevido a jornada de trabalho, faculdade e a conciliação entre ministra aulas e treinar para competições,\r\nteve que se afastar dos ringues.', 'abimaelson.jpg', NULL, NULL),
(3, 'Danilo Roney', NULL, NULL, '\r\nNascido em Pentecoste, funcionário público concursado na pmp, formado em educação física,\r\natua como professor de educação física da escola maria flor, treinador de futsal masculino e\r\nfeminino da EEEP Alan Pinho Tabosa, desde 2018.', 'danilo.jpg', NULL, 'https://www.instagram.com/doniloroney0604/'),
(4, 'Fabricio Sales', NULL, NULL, '\r\nNascido em Fortaleza, formado em biologia e educação física, pós graduado em educação física,\r\ntrabalhou como monitor de futsal no projeto mais educação, professor e treinador das equipes masculina\r\ne feminina da escola etelvina de 2015 a 2017. Treinador das seleções de base masculina, seleção feminina\r\nadulta de Pentecoste', 'fabricio.jpg', 'https://www.facebook.com/fabricio.sales.7161', 'https://www.instagram.com/fabricio_sales10_05/');

-- --------------------------------------------------------

--
-- Estrutura da tabela `logo`
--

CREATE TABLE `logo` (
  `id` int(11) NOT NULL,
  `foto_logo` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `modalidade_coletiva`
--

CREATE TABLE `modalidade_coletiva` (
  `modalidade_coletivaid` int(11) NOT NULL,
  `nome_mc` varchar(50) DEFAULT NULL,
  `categoria_mc` varchar(50) DEFAULT NULL,
  `naipe_mc` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `modalidade_coletiva`
--

INSERT INTO `modalidade_coletiva` (`modalidade_coletivaid`, `nome_mc`, `categoria_mc`, `naipe_mc`) VALUES
(2, 'handebol', 'masculino', '12a14'),
(3, 'handebol', 'masculino', '15a17'),
(4, 'handebol', 'feminino', '12a14'),
(5, 'handebol', 'feminino', '15a17'),
(6, 'basquete', 'masculino', '12a14'),
(7, 'basquete', 'masculino', '15a17'),
(8, 'basquete', 'feminino', '15a17'),
(9, 'basquete', 'feminino', '12a14'),
(10, 'volei', 'masculino', '12a14'),
(11, 'volei', 'masculino', '15a17'),
(12, 'volei', 'feminino', '12a14'),
(13, 'volei', 'feminino', '15a17'),
(14, 'futsal', 'feminino', '12a14'),
(15, 'futsal', 'masculino', '12a14'),
(16, 'futsal', 'masculino', '15a17'),
(17, 'futsal', 'feminino', '15a17');

-- --------------------------------------------------------

--
-- Estrutura da tabela `modalidade_individual`
--

CREATE TABLE `modalidade_individual` (
  `modalidade_individualid` int(11) NOT NULL,
  `nome_mi` varchar(50) DEFAULT NULL,
  `categoria_mi` varchar(50) DEFAULT NULL,
  `naipe_mi` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `modalidade_individual`
--

INSERT INTO `modalidade_individual` (`modalidade_individualid`, `nome_mi`, `categoria_mi`, `naipe_mi`) VALUES
(1, 'Atletismo', 'masculino', '15a17'),
(2, 'Atletismo', 'masculino', '12a14'),
(3, 'Atletismo', 'feminino', '12a14'),
(4, 'Atletismo', 'feminino', '15a17'),
(5, 'pingpong', 'feminino', '15a17'),
(6, 'pingpong', 'masculino', '12a14'),
(7, 'pingpong', 'masculino', '15a17'),
(8, 'pingpong', 'feminino', '12a14');

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticia`
--

CREATE TABLE `noticia` (
  `id_no` int(11) NOT NULL,
  `titulo_no` varchar(100) DEFAULT NULL,
  `descricao_no` varchar(1000) DEFAULT NULL,
  `link_no` varchar(200) DEFAULT NULL,
  `imagem_no` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `noticia`
--

INSERT INTO `noticia` (`id_no`, `titulo_no`, `descricao_no`, `link_no`, `imagem_no`) VALUES
(1, 'Vida Consciente', 'Orientação educativa de utilização da máscara e protocolos sanitários dos órgãos de saúde na praça do CSU, para os praticantes de atividades individuais visando a possível retomada dos esportes coletivos e atividades esportivas em geral no município, de forma consciente, sempre seguindo o parecer da comissão da #Covid-19 em Pentecote o decreto estadual e municipal.', 'https://www.facebook.com/roberth.alves.50/posts/3091776247567020', 'Covid19.jpg'),
(2, 'Desafio da Caminhada', 'Em meio aos acontecimentos causados pela pandemia do Covid-19 somos desafiados a novas mudanças e sempre nos adaptando para que venhamos a nos possibilitar em uma vida saudável.A Secretaria de Esporte e Juventude lhe desafia a participar do Desafio da Caminhada.Se inscreva no link abaixo, instale o aplicativo, faça sua caminhada durante todo o período da competição, envie para um dos contatos disponíveis um print com os dados da sua caminhada e uma foto pessoal constando data. ', 'https://www.facebook.com/sejuve.pentecoste.33/posts/305054044043210', 'caminhada.jpg'),
(7, 'Fiscalizações nos locais públicos', 'A @sejuvepentas em parceria com a @guardamunicipaldepentecoste tiveram um encontro para alinhar a fiscalização nos espaços públicos afim de garantir o cumprimento dos protocolos das atividades liberadas.', 'https://www.instagram.com/p/CDjZlXfBsX4/', 'sejuvepentas.jpg'),
(8, 'Esclarecimentos sobre o possível retorno da prática esportiva.', 'Na noite desta quarta-feira (12/08) o secretário Claiton Pinho participou de uma entrevista no programa Toque de Bola respondendo algumas dúvidas sobre a possível data para retorno das atividades físicas e liberações dos espaços esportivos.', 'https://www.facebook.com/sejuve.pentecoste.33/posts/308188960396385', 'esclarecimento.PNG'),
(9, 'Blitz educativa.', 'Dessa vez a Blitz educativa sobre o enfrentamento a Covid-19, foi realizada na XV de Novembro. Trabalho que certamente trará resultados positivos para os esportes de forma geral em nosso município.', 'https://www.facebook.com/photo/?fbid=3097581686986476&set=a.386966818047990', 'blitz.jpg'),
(10, 'Dia mundial da juventude!', 'Um dia para exclamar o que precisamos lembrar todos os dias: a juventude precisa viver!', 'https://www.facebook.com/sejuve.pentecoste.33/posts/307568810458400', 'juventude.jpg'),
(13, 'Comunicado', 'Em virtude da legislação eleitoral,\r\nas publicações em nossas páginas oficiais\r\nnas redes sociais serão suspensas a partir de\r\n15 de agosto de 2020 até o fim do período eleitoral', 'https://www.instagram.com/p/CD4wmnHB6Vu/', 'comunicado.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticia_painel`
--

CREATE TABLE `noticia_painel` (
  `id_np` int(11) NOT NULL,
  `fk_noticia` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `noticia_painel`
--

INSERT INTO `noticia_painel` (`id_np`, `fk_noticia`) VALUES
(2, 2),
(3, 7),
(4, 8),
(5, 9),
(6, 10),
(1, 13);

-- --------------------------------------------------------

--
-- Estrutura da tabela `patrocinadores`
--

CREATE TABLE `patrocinadores` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `foto` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `patrocinadores`
--

INSERT INTO `patrocinadores` (`id`, `nome`, `foto`) VALUES
(1, 'JOSE DENILSON ALVES SALDANHA', '5dd2bf746045999284e2ddb54bed7dd1.gif'),
(2, '', '692f5745acceb89ab767898b2f76a4ea.gif');

-- --------------------------------------------------------

--
-- Estrutura da tabela `selecoes_municipais`
--

CREATE TABLE `selecoes_municipais` (
  `id_sm` int(11) NOT NULL,
  `categoria_sm` varchar(100) DEFAULT NULL,
  `modalidade_sm` varchar(50) DEFAULT NULL,
  `naipe_sm` varchar(50) DEFAULT NULL,
  `imagem1_sm` varchar(100) DEFAULT NULL,
  `imagem2_sm` varchar(100) DEFAULT NULL,
  `imagem3_sm` varchar(100) DEFAULT NULL,
  `imagem4_sm` varchar(100) DEFAULT NULL,
  `desc1_sm` varchar(500) DEFAULT NULL,
  `desc2_sm` varchar(500) DEFAULT NULL,
  `desc3_sm` varchar(500) DEFAULT NULL,
  `desc4_sm` varchar(500) DEFAULT NULL,
  `titul_sm1` varchar(100) DEFAULT NULL,
  `titul_sm2` varchar(100) DEFAULT NULL,
  `titul_sm3` varchar(100) DEFAULT NULL,
  `titul_sm4` varchar(100) DEFAULT NULL,
  `insta_sele` varchar(200) DEFAULT NULL,
  `face_sele` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `selecoes_municipais`
--

INSERT INTO `selecoes_municipais` (`id_sm`, `categoria_sm`, `modalidade_sm`, `naipe_sm`, `imagem1_sm`, `imagem2_sm`, `imagem3_sm`, `imagem4_sm`, `desc1_sm`, `desc2_sm`, `desc3_sm`, `desc4_sm`, `titul_sm1`, `titul_sm2`, `titul_sm3`, `titul_sm4`, `insta_sele`, `face_sele`) VALUES
(1, 'adulto', 'Futsal', 'masculino', 'futsal_pent.jpg', 'tecnico_futsal.jpg', 'pentecostefutsal.jpg', 'futsal_pent.jpg', '\"Seleção de Futsal de Pentecoste é Campeão da #Copa @redecucaoficial de Futsal.\r\n#tudonoseutempo\r\n#tudonotempodedeus\"', 'Atribuições do nosso técnico de futsal masculino: Danilo Roney', 'Segue abaixo os horários de treino.', 'Futsal Masculino representante de Pentecoste.', 'futsal masculino', 'Ténico do futsal masculino', 'Treinos', 'futsal', 'https://www.instagram.com/pentecostefutsal/', NULL),
(2, 'adulto', 'handebol', 'masculino', 'handebol_pent.jpg', 'handebol_insta.PNG', 'pentecostehandebol.jpg', 'handebol_pent.jpg', '\"Seleção de Handebol de Pentecoste, participou da supercopa cuca, tendo vários atletas eleitos como melhores de diversas partidas.\"', 'Acompanhe o handebol masculino de Pentecoste pelo o instagram.', 'Segue abaixo os horários de treino.', 'Handebol Masculino representante de Pentecoste.', 'handebol', 'handebol', 'Treinos', 'handebol', 'https://www.instagram.com/lphb.oficial/', NULL),
(3, 'adulto', 'futsal', 'feminino', 'futsal_fem_pent.jpg', 'futsal_insta.PNG', 'pentecostefutsalfeminino.jpg', 'futsal_fem_pent.jpg', '\"Seleção de pentecoste participou de um torneio na serrota, ganhamos o título campeão. Parabéns à todos envolvidos e principalmente ao nosso treinador @fabricio_sales10_05 pelo compromisso e dedicação a equipe \r\nVitoria 7x0.\r\nObrigada pelo apoio\r\n@sejuvepentas\r\n@prefeituradepentecoste .\"', 'Acompanhe o futsal feminino de Pentecoste pelo o instagram.', 'Segue abaixo os horários de treino.', 'Futsal representando de Pentecoste.', 'futsal', 'futsal', 'Treinos', 'futsal', 'https://www.instagram.com/pentecostefutsalfeminino/', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `usuario_id` int(11) NOT NULL,
  `usuario` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `senha` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`usuario_id`, `usuario`, `senha`) VALUES
(1, 'andré', '200820e3227815ed1756a6b531e7e0d2'),
(3, 'Denilson', '200820e3227815ed1756a6b531e7e0d2');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`alunoid`),
  ADD KEY `modalidade_individualid_fk` (`modalidade_individualid_fk`),
  ADD KEY `modalidade_coletivaid_fk` (`modalidade_coletivaid_fk`),
  ADD KEY `escola_id_fk` (`escola_id_fk`);

--
-- Índices para tabela `atleta`
--
ALTER TABLE `atleta`
  ADD PRIMARY KEY (`atletaid`),
  ADD KEY `equipeid_fk` (`equipeid_fk`);

--
-- Índices para tabela `card_pagina`
--
ALTER TABLE `card_pagina`
  ADD PRIMARY KEY (`id_cp`);

--
-- Índices para tabela `comissao_tecnica`
--
ALTER TABLE `comissao_tecnica`
  ADD PRIMARY KEY (`comissao_tecnicaid`),
  ADD KEY `equipeid_fk` (`equipeid_fk`);

--
-- Índices para tabela `comissao_tecnica_escolares`
--
ALTER TABLE `comissao_tecnica_escolares`
  ADD PRIMARY KEY (`id_tecnico`),
  ADD KEY `escola_id_fk` (`escola_id_fk`),
  ADD KEY `modalidade_coletivaid_fk` (`modalidade_coletivaid_fk`);

--
-- Índices para tabela `equipe`
--
ALTER TABLE `equipe`
  ADD PRIMARY KEY (`equipeid`),
  ADD KEY `atletaid_fk` (`atletaid_fk`);

--
-- Índices para tabela `equipe_evento`
--
ALTER TABLE `equipe_evento`
  ADD PRIMARY KEY (`equipe_evento_id`),
  ADD KEY `idevento_fk` (`idevento_fk`),
  ADD KEY `equipeid_fk` (`equipeid_fk`);

--
-- Índices para tabela `escola`
--
ALTER TABLE `escola`
  ADD PRIMARY KEY (`escola_id`);

--
-- Índices para tabela `evento`
--
ALTER TABLE `evento`
  ADD PRIMARY KEY (`idevento`);

--
-- Índices para tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`id_fun`);

--
-- Índices para tabela `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `modalidade_coletiva`
--
ALTER TABLE `modalidade_coletiva`
  ADD PRIMARY KEY (`modalidade_coletivaid`);

--
-- Índices para tabela `modalidade_individual`
--
ALTER TABLE `modalidade_individual`
  ADD PRIMARY KEY (`modalidade_individualid`);

--
-- Índices para tabela `noticia`
--
ALTER TABLE `noticia`
  ADD PRIMARY KEY (`id_no`);

--
-- Índices para tabela `noticia_painel`
--
ALTER TABLE `noticia_painel`
  ADD PRIMARY KEY (`id_np`),
  ADD KEY `fk_noiticia` (`fk_noticia`);

--
-- Índices para tabela `patrocinadores`
--
ALTER TABLE `patrocinadores`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `selecoes_municipais`
--
ALTER TABLE `selecoes_municipais`
  ADD PRIMARY KEY (`id_sm`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usuario_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `aluno`
--
ALTER TABLE `aluno`
  MODIFY `alunoid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT de tabela `atleta`
--
ALTER TABLE `atleta`
  MODIFY `atletaid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de tabela `card_pagina`
--
ALTER TABLE `card_pagina`
  MODIFY `id_cp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `comissao_tecnica`
--
ALTER TABLE `comissao_tecnica`
  MODIFY `comissao_tecnicaid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT de tabela `comissao_tecnica_escolares`
--
ALTER TABLE `comissao_tecnica_escolares`
  MODIFY `id_tecnico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `equipe`
--
ALTER TABLE `equipe`
  MODIFY `equipeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=209;

--
-- AUTO_INCREMENT de tabela `equipe_evento`
--
ALTER TABLE `equipe_evento`
  MODIFY `equipe_evento_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de tabela `escola`
--
ALTER TABLE `escola`
  MODIFY `escola_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de tabela `evento`
--
ALTER TABLE `evento`
  MODIFY `idevento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de tabela `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `id_fun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `logo`
--
ALTER TABLE `logo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `modalidade_coletiva`
--
ALTER TABLE `modalidade_coletiva`
  MODIFY `modalidade_coletivaid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `modalidade_individual`
--
ALTER TABLE `modalidade_individual`
  MODIFY `modalidade_individualid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `noticia`
--
ALTER TABLE `noticia`
  MODIFY `id_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `noticia_painel`
--
ALTER TABLE `noticia_painel`
  MODIFY `id_np` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `patrocinadores`
--
ALTER TABLE `patrocinadores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `selecoes_municipais`
--
ALTER TABLE `selecoes_municipais`
  MODIFY `id_sm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `aluno`
--
ALTER TABLE `aluno`
  ADD CONSTRAINT `aluno_ibfk_1` FOREIGN KEY (`modalidade_individualid_fk`) REFERENCES `modalidade_individual` (`modalidade_individualid`) ON DELETE CASCADE,
  ADD CONSTRAINT `aluno_ibfk_2` FOREIGN KEY (`modalidade_coletivaid_fk`) REFERENCES `modalidade_coletiva` (`modalidade_coletivaid`) ON DELETE CASCADE,
  ADD CONSTRAINT `aluno_ibfk_3` FOREIGN KEY (`escola_id_fk`) REFERENCES `escola` (`escola_id`);

--
-- Limitadores para a tabela `atleta`
--
ALTER TABLE `atleta`
  ADD CONSTRAINT `atleta_ibfk_1` FOREIGN KEY (`equipeid_fk`) REFERENCES `equipe` (`equipeid`);

--
-- Limitadores para a tabela `comissao_tecnica`
--
ALTER TABLE `comissao_tecnica`
  ADD CONSTRAINT `comissao_tecnica_ibfk_1` FOREIGN KEY (`equipeid_fk`) REFERENCES `equipe` (`equipeid`),
  ADD CONSTRAINT `comissao_tecnica_ibfk_2` FOREIGN KEY (`equipeid_fk`) REFERENCES `equipe` (`equipeid`);

--
-- Limitadores para a tabela `comissao_tecnica_escolares`
--
ALTER TABLE `comissao_tecnica_escolares`
  ADD CONSTRAINT `comissao_tecnica_escolares_ibfk_1` FOREIGN KEY (`escola_id_fk`) REFERENCES `escola` (`escola_id`),
  ADD CONSTRAINT `comissao_tecnica_escolares_ibfk_2` FOREIGN KEY (`modalidade_coletivaid_fk`) REFERENCES `modalidade_coletiva` (`modalidade_coletivaid`);

--
-- Limitadores para a tabela `equipe`
--
ALTER TABLE `equipe`
  ADD CONSTRAINT `equipe_ibfk_1` FOREIGN KEY (`atletaid_fk`) REFERENCES `atleta` (`atletaid`);

--
-- Limitadores para a tabela `equipe_evento`
--
ALTER TABLE `equipe_evento`
  ADD CONSTRAINT `equipe_evento_ibfk_1` FOREIGN KEY (`idevento_fk`) REFERENCES `evento` (`idevento`),
  ADD CONSTRAINT `equipe_evento_ibfk_2` FOREIGN KEY (`equipeid_fk`) REFERENCES `equipe` (`equipeid`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `noticia_painel`
--
ALTER TABLE `noticia_painel`
  ADD CONSTRAINT `noticia_painel_ibfk_1` FOREIGN KEY (`fk_noticia`) REFERENCES `noticia` (`id_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
