-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 04-Nov-2016 às 13:13
-- Versão do servidor: 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistemamvc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tPessoa` int(11) NOT NULL,
  `nome` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `sexo` int(2) DEFAULT NULL,
  `cpf` varchar(250) NOT NULL,
  `rSocial` varchar(250) NOT NULL,
  `telFixo` varchar(250) NOT NULL,
  `telCel` varchar(250) NOT NULL,
  `conjugue` varchar(250) DEFAULT NULL,
  `sComprador` varchar(250) DEFAULT NULL,
  `status` varchar(250) DEFAULT NULL,
  `obs` varchar(250) DEFAULT NULL,
  `cep` varchar(250) NOT NULL,
  `largadouro` varchar(250) NOT NULL,
  `numero` varchar(250) NOT NULL,
  `cidade` varchar(250) NOT NULL,
  `bairro` varchar(250) NOT NULL,
  `estado` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `tPessoa`, `nome`, `email`, `sexo`, `cpf`, `rSocial`, `telFixo`, `telCel`, `conjugue`, `sComprador`, `status`, `obs`, `cep`, `largadouro`, `numero`, `cidade`, `bairro`, `estado`) VALUES
(1, 1, 'Daniel Conrado', 'danielc.landim@gmail.com', 1, '36581503436', '', '61 3046-6142', '61 9287-6142', 'conjugue aki', '2 comprador', 'campo status', 'obs esta qui', '72652-536', 'rua 56', '34', 'BrasÃ­lia', 'GuarÃ¡ II', 'DF'),
(3, 1, 'Jacobina', 'jacobina@jaco.net', 1, '859.365.227-05', '', '61 3265-3659', '61 9999-9999', 'Jacana', 'Teodoro 2Âº comprador', 'status do cliente', '   observaÃ§Ã£o sobre o cliente', '72.635-59', 'Rua josÃ© tavares nunes', '58', 'Itapopoca da serra', 'jubiracana', 'PI'),
(7, 2, 'Jonateia da silva', 'jona@teteia.com.br', NULL, '31.638.549/0001-30', 'Tia TetÃ©ia Ltda', '61 3333-3333', '(61) 9 9999-9999', NULL, NULL, NULL, NULL, '77.777-777', 'Rua antonio tavares', '1256', 'Itapopoca da serra', 'jubiracana', 'BA'),
(6, 2, 'JoÃ£o Marmota', 'joao@joao.com.br', NULL, '47.752.688/0001-20', 'Empresa da Silva -  ME', '(61) 3333-3333', '(61) 9 9999-9999', NULL, NULL, '', NULL, '77.777-777', 'Rua antonio tavares', '96', 'Pindagoiabada', 'Goiabeira do sul', 'GO');

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `login` varchar(250) NOT NULL,
  `senha` varchar(250) NOT NULL,
  `perfil` int(2) NOT NULL,
  `datacadastro` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`id`, `nome`, `email`, `login`, `senha`, `perfil`, `datacadastro`) VALUES
(1, 'Daniel Conrado', 'danielc.landim@gmail.com', 'daniellandim', 'e10adc3949ba59abbe56e057f20f883e', 1, '2016-09-19 14:45:34'),
(8, 'Laura das Neves Silva', 'lauradasneves@kd.com.br', 'laurinha.neves', 'd41d8cd98f00b204e9800998ecf8427e', 2, '2016-09-19 14:45:34'),
(9, 'Fabio EustÃ¡quio', 'fabio@yahoo.com.br', 'fabio', 'e10adc3949ba59abbe56e057f20f883e', 2, '2016-09-19 15:04:56'),
(10, 'Rogerio Rodrigo Rodolfo', 'rogerio.rodolfo@gmail.com', 'Rogerio.Rodolfo', '3044af756806e5b2cc13a7444509962f', 2, '2016-09-19 15:05:30'),
(11, 'Jonas Pereira', 'jonas@jonasbr.com.br', 'jonas', 'e10adc3949ba59abbe56e057f20f883e', 1, '2016-09-19 15:34:26'),
(12, 'Matheus ', 'matheus@matheus.com.br', 'matheus', 'e10adc3949ba59abbe56e057f20f883e', 1, '2016-09-19 15:35:00'),
(16, 'Marcos AntÃ´nio', 'marcos@antonio.inf.br', 'marcos', '202cb962ac59075b964b07152d234b70', 2, '2016-09-30 14:05:29'),
(14, 'Erick da silva', 'erikclapton@gmail.com', 'erick.silva', 'c33367701511b4f6020ec61ded352059', 2, '2016-09-21 09:56:02'),
(15, 'JoÃ£o da Mata', 'joazinho@30.com', 'joaozinho', 'd41d8cd98f00b204e9800998ecf8427e', 2, '2016-09-26 10:39:33'),
(19, 'UsÃºario do Sistema', 'usuario@usuario.com.br', 'usuario', 'e10adc3949ba59abbe56e057f20f883e', 2, '2016-10-29 14:29:51'),
(18, 'Helle', 'helle@berlin.com', 'helle', '733d7be2196ff70efaf6913fc8bdcabf', 2, '2016-10-29 12:54:22'),
(20, 'JosÃ© de maria', 'jm@demaria.inf.br', 'usuario', 'e10adc3949ba59abbe56e057f20f883e', 2, '2016-10-31 10:38:52');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
