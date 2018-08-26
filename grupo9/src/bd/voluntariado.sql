
-- drop database if exists voluntariado;

-- create database voluntariado;
use voluntariado;

DROP TABLE IF EXISTS `atribuicoes`;
CREATE TABLE IF NOT EXISTS `atribuicoes` (
  `funcao` int(11) NOT NULL DEFAULT '0',
  `projeto` int(11) NOT NULL DEFAULT '0',
  `usuario` int(11) NOT NULL DEFAULT '0',
  `presencaConsecutiva` int(11) NOT NULL,
  `presencaTotal` int(11) NOT NULL,
  `gerente` tinyint(1) DEFAULT NULL,
  `entrada` date DEFAULT NULL,
  PRIMARY KEY (`funcao`,`usuario`),
  KEY `funcao` (`funcao`),
  KEY `usuario` (`usuario`),
  KEY `projeto` (`projeto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcoes`
--

DROP TABLE IF EXISTS `funcoes`;
CREATE TABLE IF NOT EXISTS `funcoes` (
  `projeto` int(11) NOT NULL DEFAULT '0',
  `funcao` varchar(60) NOT NULL DEFAULT '',
  PRIMARY KEY (`funcao`,`projeto`),
  KEY `projeto` (`projeto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `projetos`
--

DROP TABLE IF EXISTS `projetos`;
CREATE TABLE IF NOT EXISTS `projetos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` tinytext NOT NULL,
  `inicio` date NOT NULL,
  `localidade` varchar(100) DEFAULT NULL,
  `horario` varchar(200) DEFAULT NULL,
  `fim` date DEFAULT NULL,
  `diaDeSemana` varchar(21) NOT NULL,
  `descricao` varchar(400) NOT NULL,
  `categoria` varchar(300) NOT NULL,
  `objetivo` varchar(400) NOT NULL,
  `metodologia` varchar(400) NOT NULL,
  `capacitacao` varchar(300) DEFAULT NULL,
  `cronograma` varchar(300) DEFAULT NULL,
  `relevancia` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) AUTO_INCREMENT,
  `nome` tinytext NOT NULL,
  `idade` tinyint(4) DEFAULT NULL,
  `descricao` text,
  `email` varchar(100) NOT NULL UNIQUE,
  `telefone` tinytext,
  `senha` tinytext NOT NULL,
  `proativo` int(11) DEFAULT NULL,
  `organizado` int(11) DEFAULT NULL,
  `produtivo` int(11) DEFAULT NULL,
  `simpatico` int(11) DEFAULT NULL,
  `comunicativo` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
INSERT INTO `projetos` (`id`, `nome`, `inicio`, `localidade`, `horario`, `fim`, `diaDeSemana`, `descricao`, `categoria`, `objetivo`, `metodologia`, `capacitacao`, `cronograma`, `relevancia`) VALUES (0, 'Projeto', '2018-08-01', 'fgawyugeya', 'hajkhbuygas', '2018-08-23', 'daa', 'dsdfdvfvewe', 'fvsdvdsvdsdv', 'dsvdsvdssvsdvd', 'vdssddvsd', 'vsdvsdvsdvds', 'dsvsddvssd', '9');

INSERT INTO `usuarios` (`id`, `nome`, `idade`, `descricao`, `email`, `telefone`, `senha`, `proativo`, `organizado`, `produtivo`, `simpatico`, `comunicativo`) VALUES (0, 'Usuario', '88', 'usigiuagas', 'kgkgjyg', '879', 'kjug', '9', '9', '9', '9', '9');

INSERT INTO `funcoes` (`projeto`, `funcao`) VALUES ('0', 'Funcao');

INSERT INTO `atribuicoes` (`funcao`, `projeto`, `usuario`, `presencaConsecutiva`, `presencaTotal`, `gerente`, `entrada`) VALUES ('0', '0', '0', '9', '9', '9', '2018-08-06');
