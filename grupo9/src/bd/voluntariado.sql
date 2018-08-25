drop database if exists voluntariado;

create database voluntariado;
use voluntariado;

CREATE TABLE IF NOT EXISTS `atribuicoes` (
  `funcao` int(11) NOT NULL DEFAULT '0',
  `usuario` int(11) NOT NULL DEFAULT '0',
  `presencaConsecutiva` int(11) NOT NULL,
  `presencaTotal` int(11) NOT NULL,
  `gerente` tinyint(1) DEFAULT NULL,
  `entrada` date DEFAULT NULL,
  PRIMARY KEY (`funcao`,`usuario`),
  KEY `funcao` (`funcao`),
  KEY `usuario` (`usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcoes`
--

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

CREATE TABLE IF NOT EXISTS `projetos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` tinytext NOT NULL,
  `inicio` date NOT NULL,
  `localidade` varchar(100) DEFAULT NULL,
  `horario` varchar(200) DEFAULT NULL,
  `fim` date DEFAULT NULL,
  `diaDeSemana` varchar(3) NOT NULL,
  `descricao` varchar(400) NOT NULL,
  `categoria` varchar(300) NOT NULL,
  `objetivo` varchar(400) NOT NULL,
  `metodologia` varchar(400) NOT NULL,
  `capacitacao` varchar(300) DEFAULT NULL,
  `cronograma` varchar(300) DEFAULT NULL,
  `imagem` text(1000),
  `relevancia` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` tinytext NOT NULL,
  `idade` tinyint(4) DEFAULT NULL,
  `descricao` text,
  `email` varchar(100) NOT NULL,
  `telefone` tinytext,
  `senha` tinytext NOT NULL,
  `proativo` int(11) DEFAULT NULL,
  `organizado` int(11) DEFAULT NULL,
  `produtivo` int(11) DEFAULT NULL,
  `simpatico` int(11) DEFAULT NULL,
  `comunicativo` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

INSERT INTO `voluntariado`.`projetos` (`id`, `nome`, `inicio`, `localidade`, `horario`, `fim`, `diaDeSemana`, `descricao`, `categoria`, `objetivo`, `metodologia`, `capacitacao`, `cronograma`, `relevancia`,`imagem`) VALUES (NULL, 'Patinação coletiva', '2018-08-01', 'Rio de Janeiro', '18-00', '2018-08-23', 'sab', 'Um evento voltado ao incentivo à patinação coletiva', 'Patinação;Entregador de garrafinhas', 'Incentivar uma vida mais saudável à população.', 'Ensinar a patinar e acompanhar, até que se desenvolvam grupos autonomos.', 'Nos primeiros dias,serão realizadas oficinas para treinamento dos menos experientes.', 'Duas primeiras semanas: Treinamento; Duas proximas semanas:praticas coletivas', '9', 'http://www.patins.niteroi.org.br/uploads/2/4/6/4/24644227/9464819_orig.jpg');
