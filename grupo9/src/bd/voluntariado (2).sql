-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 26-Ago-2018 às 12:07
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `voluntariado`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `atribuicoes`
--

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
  `diaDeSemana` varchar(21) NOT NULL,
  `descricao` varchar(400) NOT NULL,
  `categoria` varchar(300) NOT NULL,
  `objetivo` varchar(400) NOT NULL,
  `metodologia` varchar(400) NOT NULL,
  `capacitacao` varchar(300) DEFAULT NULL,
  `cronograma` varchar(300) DEFAULT NULL,
  `imagem` text,
  `relevancia` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=92880 ;

--
-- Extraindo dados da tabela `projetos`
--

INSERT INTO `projetos` (`id`, `nome`, `inicio`, `localidade`, `horario`, `fim`, `diaDeSemana`, `descricao`, `categoria`, `objetivo`, `metodologia`, `capacitacao`, `cronograma`, `imagem`, `relevancia`) VALUES
(0, 'Jovens Cidadãos', '2018-08-29', NULL, NULL, NULL, 'qui', 'Ensinamos jovens e crianças os seus direitos.', 'educacao', 'Aproximar a constituição brasieira à população mais jovem do nosso país', 'Visitamos escolas e promovemos dinâmicas, aulas e outras atividades sobre educação cívica.', NULL, NULL, 'https://tse3.mm.bing.net/th?id=OIP.haZoD081Gn1sI4oNtongrAHaFj&pid=Api', NULL),
(1, 'Patinação coletiva', '2018-08-01', 'Rio de Janeiro', '18-00', '2018-08-23', 'sab', 'Um evento voltado ao incentivo à patinação coletiva', 'saude', 'Incentivar uma vida mais saudável à população.', 'Ensinar a patinar e acompanhar, até que se desenvolvam grupos autonomos.', 'Nos primeiros dias,serão realizadas oficinas para treinamento dos menos experientes.', 'Duas primeiras semanas: Treinamento; Duas proximas semanas:praticas coletivas', 'http://www.patins.niteroi.org.br/uploads/2/4/6/4/24644227/9464819_orig.jpg', 9),
(2, 'Distribuição de comida para moradores de rua', '2018-09-01', 'Icaraí', '20h-0h', '2018-09-02', 'sab', 'Alimentação para os moradores de rua do centro do Rio', 'causasocial', 'Distribuir janta aos moradores de rua da região', 'Cozinhamos e distribuímos refeições de bicicleta para toda a região ', NULL, NULL, 'http://1.bp.blogspot.com/-ATaO2ch3TC0/TctWhg_z3yI/AAAAAAAAA-A/gkmYCHHDJmI/s1600/DSC02529+%2528Medium%2529.JPG', NULL),
(3, 'Canina Botafogo', '2018-09-07', 'Botafogo, RJ', NULL, NULL, 'ter', 'Resgate e cuidado de cães de rua no bairro de Botafogo', 'causaanimal', 'Proteger cães em situação de rua/abandono', 'Alimentamos, vacinamos e castramos cães de rua. Promovemos eventualmente campanhas de adoção.', NULL, NULL, 'https://webcachorros.com.br/wp-content/uploads/2016/11/c%C3%A3es-her%C3%B3is.jpg', NULL),
(4, 'Rio Limpo', '2018-08-29', 'Rio de Janeiro', NULL, NULL, 'qua', 'Grupo de limpeza de parques naturais e trilhas da cidade do Rio de Janeiro', 'conservacao', 'Ajudar na preservação da natureza da cidade maravilhosa', 'Procuramos lixo e outras irregularidades prejudiciais à natureza nas paisagens naturais mais marcantes do Rio', NULL, NULL, 'https://tse1.mm.bing.net/th?id=OIP.l9k1sJNdTI8og7fEKZibuwHaFj&pid=Api', NULL);

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
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `idade`, `descricao`, `email`, `telefone`, `senha`, `proativo`, `organizado`, `produtivo`, `simpatico`, `comunicativo`) VALUES
(1, '2', 2, '2', '2', '2', '2', NULL, NULL, NULL, NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
