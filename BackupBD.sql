-- phpMyAdmin SQL Dump
-- version 3.5.6
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 26-Set-2013 às 12:01
-- Versão do servidor: 5.5.29-MariaDB-log
-- versão do PHP: 5.3.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `silpa`
--
CREATE DATABASE `silpa` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `silpa`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE IF NOT EXISTS `categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` text,
  `categoria_manuais` text,
  `pasta` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=57 ;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`id`, `titulo`, `categoria_manuais`, `pasta`) VALUES
(1, 'Concessionárias', 'manuais', 'Concessionarias'),
(2, 'Desenhos para Concessionárias', NULL, 'Desenhos para Concessionarias'),
(3, 'Feixes de Molas', NULL, 'Feixes de Molas'),
(4, 'Agrale - Chassi 13000', NULL, 'Agrale - Chassi 13000'),
(5, 'Agrale - Chassi 13000 Capa U', NULL, 'Agrale - Chassi 13000 Capa U'),
(6, 'Agrale - Chassi 9200', NULL, 'Agrale - Chassi 9200'),
(7, 'Agrale - Suspensões', NULL, 'Agrale - Suspensoes'),
(8, 'Ford/vw - Chassi L 16', NULL, 'Ford-vw - Chassi L 16'),
(9, 'Ford/vw - Chassi VW 18.130', NULL, 'Ford-vw - Chassi VW 18.130'),
(10, 'Ford/vw - Suspensões', NULL, 'Ford-vw - Suspensoes'),
(11, 'Ford/vw 3/4 - Chassi VW 8.150', NULL, 'Ford-vw 3-4 - Chassi VW 8.150'),
(12, 'Ford/vw 3/4 - Suspensões', NULL, 'Ford-vw 3-4 - Suspensoes'),
(13, 'Iveco - Chassi "Z" Eurotech', NULL, 'Iveco - Chassi Z Eurotech'),
(14, 'Iveco - Chassi "Z" Strails', NULL, 'Iveco - Chassi Z Strails'),
(15, 'Iveco - Chassi "Z" Strails Susp.2000', NULL, 'Iveco - Chassi Z Strails Susp.2000'),
(16, 'Iveco - Chassi Conico Eurotracker', NULL, 'Iveco - Chassi Conico Eurotracker'),
(17, 'Iveco - Chassi Eurotech', NULL, 'Iveco - Chassi Eurotech'),
(18, 'Iveco - Chassi Eurotracker', NULL, 'Iveco - Chassi Eurotracker'),
(19, 'Iveco - Suspensões', NULL, 'Iveco - Suspensoes'),
(20, 'MB - Chassi 1113', NULL, 'Mb - Chassi 1113'),
(21, 'MB - Chassi 1214', NULL, 'Mb - Chassi 1214'),
(22, 'MB - Chassi 14/16', NULL, 'Mb - Chassi 14-16'),
(23, 'MB - Chassi 1620', NULL, 'Mb - Chassi 1620'),
(24, 'MB - Chassi 1725 Atego', NULL, 'Mb - Chassi 1725 Atego'),
(25, 'MB - Suspensões', NULL, 'Mb - Suspensoes'),
(26, 'MB 3/4 - Chassi 915c - Ee3700', NULL, 'Mb 3-4 - Chassi 915c - Ee3700'),
(27, 'MB 3/4 - Chassi 915c - Ee4400', NULL, 'Mb 3-4 - Chassi 915c - Ee4400'),
(28, 'MB 3/4 - Suspensões', NULL, 'Mb 3-4 - Suspensoes'),
(29, 'MB Cv - Chassi 1935/38', NULL, 'Mb Cv - Chassi 1935-38'),
(30, 'MB Cv - Chassi 1935/38 Capa Z', NULL, 'Mb Cv - Chassi 1935-38 Capa Z'),
(31, 'MB Cv - Chassi 1935/38 Susp.2000', NULL, 'Mb Cv - Chassi 1935-38 Susp.2000'),
(32, 'MB Cv - Chassi Axor', NULL, 'Mb Cv - Chassi Axor'),
(33, 'MB Cv - Chassi Axor 2035 Susp.2000', NULL, 'Mb Cv - Chassi Axor 2035 Susp.2000'),
(34, 'MB Cv - Chassi LS 1634', NULL, 'Mb Cv - Chassi LS 1634'),
(35, 'MB Cv - Suspensões', NULL, 'Mb Cv - Chassi Suspensoes'),
(36, 'Scania - Chassi 2000', NULL, 'Scania - Chassi 2000'),
(37, 'Scania - Chassi LS', NULL, 'Scania - Chassi LS'),
(38, 'Scania - Suspensões', NULL, 'Scania - Suspensoes'),
(39, 'Volvo - Chassi 2000 - Fh 380', NULL, 'Volvo - Chassi 2000 - Fh 380'),
(40, 'Volvo - Chassi LS - Fh 380', NULL, 'Volvo - Chassi LS - Fh 380'),
(41, 'Volvo - Chassi LS - N10/12', NULL, 'Volvo - Chassi LS - N10/12'),
(42, 'Volvo - Chassi Vm', NULL, 'Volvo - Chassi Vm'),
(43, 'Volvo - Suspensões', NULL, 'Volvo - Suspensoes'),
(44, 'Manual e Procedimentos', NULL, 'Manual e Procedimentos'),
(45, 'Matrizes para Cópias', NULL, 'Matrizes para Copias'),
(50, 'Circular - Caminhões com Carroceria Basculante', NULL, 'Circular para Caminhoes e Cavalos Mecanicos'),
(53, 'Video Treinamento', NULL, 'Video Treinamento'),
(55, 'MB Cv - Chassi Axor Susp. 2000 Capa Z', NULL, 'Mb Cv - Chassi Axor Susp. 2000 Capa Z'),
(56, 'MB Cv - Chassi Axor 1933', NULL, 'MB Cv - Chassi Axor 1933');

-- --------------------------------------------------------

--
-- Estrutura da tabela `concessionaria`
--

CREATE TABLE IF NOT EXISTS `concessionaria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `arquivo` text,
  `data` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Extraindo dados da tabela `concessionaria`
--

INSERT INTO `concessionaria` (`id`, `arquivo`, `data`) VALUES
(19, 'ConcessionariasAEVA.pdf', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `concessionaria_caixa`
--

CREATE TABLE IF NOT EXISTS `concessionaria_caixa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `arquivo` text,
  `data` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Extraindo dados da tabela `concessionaria_caixa`
--

INSERT INTO `concessionaria_caixa` (`id`, `arquivo`, `data`) VALUES
(17, 'ConcessionariasADIF.pdf', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `estados`
--

CREATE TABLE IF NOT EXISTS `estados` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `sigla` varchar(2) NOT NULL,
  `descricao` varchar(30) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Extraindo dados da tabela `estados`
--

INSERT INTO `estados` (`codigo`, `sigla`, `descricao`) VALUES
(1, 'AC', 'Acre'),
(2, 'AL', 'Alagoas'),
(3, 'AP', 'Amapá'),
(4, 'AM', 'Amazonas'),
(5, 'BA', 'Bahia'),
(6, 'CE', 'Ceará'),
(7, 'DF', 'Distrito Federal'),
(8, 'ES', 'Espírito Santo'),
(9, 'GO', 'Goiás'),
(10, 'MA', 'Maranhão'),
(11, 'MT', 'Mato Grosso'),
(12, 'MS', 'Mato Grosso do Sul'),
(13, 'MG', 'Minas Gerais'),
(14, 'PA', 'Pará'),
(15, 'PB', 'Paraíba'),
(16, 'PR', 'Paraná'),
(17, 'PE', 'Pernambuco'),
(18, 'PI', 'Piauí'),
(19, 'RJ', 'Rio de Janeiro'),
(20, 'RN', 'Rio Grande do Norte'),
(21, 'RS', 'Rio Grande do Sul'),
(22, 'RO', 'Rondônia'),
(23, 'RR', 'Roraima'),
(24, 'SC', 'Santa Catarina'),
(25, 'SP', 'São Paulo'),
(26, 'SE', 'Sergipe'),
(27, 'TO', 'Tocantins');

-- --------------------------------------------------------

--
-- Estrutura da tabela `manuais`
--

CREATE TABLE IF NOT EXISTS `manuais` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` text CHARACTER SET utf8 COLLATE utf8_bin,
  `arquivo` text CHARACTER SET utf8 COLLATE utf8_bin,
  `pasta` text,
  `level` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=357 ;

--
-- Extraindo dados da tabela `manuais`
--

INSERT INTO `manuais` (`id`, `descricao`, `arquivo`, `pasta`, `level`) VALUES
(7, 'Relação de pesos Rev 02', 'Relação de pesos Rev 02.pdf', 'Concessionarias', 'eva'),
(8, 'Modelo I', 'Modelo I.doc', 'Desenhos para Concessionarias', 'eva'),
(9, 'FEIXE DE MOLAS PARA CAVALO MECANICO(SUSPENSAO GR)', 'FEIXE DE MOLAS PARA CAVALO MECANICO(SUSPENSAO GR).pdf', 'Feixes de Molas', 'eva'),
(10, '1030152135', '1030152135.pdf', 'Agrale - Chassi 13000', 'eva'),
(11, '1030152135', '1030152135.pdf', 'Agrale - Chassi 13000 Capa U', 'eva'),
(12, '1030151949', '1030151949.pdf', 'Agrale - Chassi 9200', 'eva'),
(14, '1030150047', '1030150047.pdf', 'Ford-vw - Chassi L 16', 'eva'),
(15, '1030150047', '1030150047.pdf', 'Ford-vw - Chassi VW 18.130', 'eva'),
(16, '1030000323', '1030000323.pdf', 'Ford-vw - Suspensoes', 'eva'),
(17, '1030151162', '1030151162.pdf', 'Ford-vw 3-4 - Chassi VW 8.150', 'eva'),
(19, '1030151459', '1030151459.pdf', 'Iveco - Chassi Z Eurotech', 'eva'),
(20, '1030151896', '1030151896.pdf', 'Iveco - Chassi Z Strails', 'eva'),
(21, '1030152023', '1030152023.pdf', 'Iveco - Chassi Z Strails Susp.2000', 'eva'),
(22, '1030150948', '1030150948.pdf', 'Iveco - Chassi Conico Eurotracker', 'eva'),
(23, '1030150973', '1030150973.pdf', 'Iveco - Chassi Eurotech', 'eva'),
(24, '1030150936', '1030150936.pdf', 'Iveco - Chassi Eurotracker', 'eva'),
(25, '1030000190', '1030000190.pdf', 'Iveco - Suspensoes', 'eva'),
(26, '1030150836', '1030150836.pdf', 'Mb - Chassi 1113', 'eva'),
(27, '1030150836', '1030150836.pdf', 'Mb - Chassi 1214', 'eva'),
(28, '1030150035', '1030150035.pdf', 'Mb - Chassi 14-16', 'eva'),
(29, '1030150011', '1030150011.pdf', 'Mb - Chassi 1620', 'eva'),
(30, '1030150047', '1030150047.pdf', 'Mb - Chassi 1725 Atego', 'eva'),
(31, '1030000050', '1030000050.pdf', 'Mb - Suspensoes', 'eva'),
(32, '1030151186', '1030151186.pdf', 'Mb 3-4 - Chassi 915c - Ee3700', 'eva'),
(33, '1030151186', '1030151186.pdf', 'Mb 3-4 - Chassi 915c - Ee4400', 'eva'),
(35, '1030150484', '1030150484.pdf', 'Mb Cv - Chassi 1935-38', 'eva'),
(36, '1030151711', '1030151711.pdf', 'Mb Cv - Chassi 1935-38 Capa Z', 'eva'),
(37, '1030150484', '1030150484.pdf', 'Mb Cv - Chassi 1935-38 Susp.2000', 'eva'),
(38, '1030151047', '1030151047.pdf', 'Mb Cv - Chassi Axor', 'eva'),
(39, '1030151047', '1030151047.pdf', 'Mb Cv - Chassi Axor 2035 Susp.2000', 'eva'),
(40, '1030150047', '1030150047.pdf', 'Mb Cv - Chassi LS 1634', 'eva'),
(41, '1030000298', '1030000298.pdf', 'Mb Cv - Chassi Suspensoes', 'eva'),
(42, '1030151035', '1030151035.pdf', 'Scania - Chassi 2000', 'eva'),
(43, '1030151047', '1030151047.pdf', 'Scania - Chassi LS', 'eva'),
(44, '1030000236', '1030000236.pdf', 'Scania - Suspensoes', 'eva'),
(45, '1030151023', '1030151023.pdf', 'Volvo - Chassi 2000 - Fh 380', 'eva'),
(46, '1030150559', '1030150559.pdf', 'Volvo - Chassi LS - Fh 380', 'eva'),
(47, '1030150595', '1030150595.pdf', 'Volvo - Chassi LS - N10/12', 'eva'),
(48, '1030152285', '1030152285.pdf', 'Volvo - Chassi Vm', 'eva'),
(49, '1030000224', '1030000224.pdf', 'Volvo - Suspensoes', 'eva'),
(50, 'Manual rev.04', 'Manual rev.04.pdf', 'Manual e Procedimentos', 'eva'),
(51, 'Matriz Check-Lib', 'Matriz Check-Lib.doc', 'Matrizes para Copias', 'eva'),
(55, 'FEIXE DE MOLAS PARA VEICULOS LEVES', 'FEIXE DE MOLAS PARA VEICULOS LEVES.pdf', 'Feixes de Molas', 'eva'),
(56, '1030152147', '1030152147.pdf', 'Agrale - Chassi 13000', 'eva'),
(57, '1030152159', '1030152159.pdf', 'Agrale - Chassi 13000 Capa U', 'eva'),
(58, '1030151950', '1030151950.pdf', 'Agrale - Chassi 9200', 'eva'),
(59, '1113250432', '1113250432.pdf', 'Agrale - Suspensoes', 'eva'),
(60, '1030150147', '1030150147.pdf', 'Ford-vw - Chassi L 16', 'eva'),
(61, '1030150147', '1030150147.pdf', 'Ford-vw - Chassi VW 18.130', 'eva'),
(62, '1040000111', '1040000111.pdf', 'Ford-vw - Suspensoes', 'eva'),
(63, '1030151174', '1030151174.pdf', 'Ford-vw 3-4 - Chassi VW 8.150', 'eva'),
(65, '1030151535', '1030151535.pdf', 'Iveco - Chassi Z Eurotech', 'eva'),
(66, '1030152023', '1030152023.pdf', 'Iveco - Chassi Z Strails', 'eva'),
(67, '1030152035', '1030152035.pdf', 'Iveco - Chassi Z Strails Susp.2000', 'eva'),
(68, '1030150950', '1030150950.pdf', 'Iveco - Chassi Conico Eurotracker', 'eva'),
(69, '1030151459', '1030151459.pdf', 'Iveco - Chassi Eurotech', 'eva'),
(70, '1030150948', '1030150948.pdf', 'Iveco - Chassi Eurotracker', 'eva'),
(71, '1030000323', '1030000323.pdf', 'Iveco - Suspensoes', 'eva'),
(72, '1030150848', '1030150848.pdf', 'Mb - Chassi 1113', 'eva'),
(73, '1030150848', '1030150848.pdf', 'Mb - Chassi 1214', 'eva'),
(74, '1030150172', '1030150172.pdf', 'Mb - Chassi 14-16', 'eva'),
(75, '1030150047', '1030150047.pdf', 'Mb - Chassi 1620', 'eva'),
(76, '1030150059', '1030150059.pdf', 'Mb - Chassi 1725 Atego', 'eva'),
(77, '1030000323', '1030000323.pdf', 'Mb - Suspensoes', 'eva'),
(78, '1030151198', '1030151198.pdf', 'Mb 3-4 - Chassi 915c - Ee3700', 'eva'),
(79, '1030151198', '1030151198.pdf', 'Mb 3-4 - Chassi 915c - Ee4400', 'eva'),
(81, '1030150496', '1030150496.pdf', 'Mb Cv - Chassi 1935-38', 'eva'),
(82, '1030151735', '1030151735.pdf', 'Mb Cv - Chassi 1935-38 Capa Z', 'eva'),
(83, '1030150500', '1030150500.pdf', 'Mb Cv - Chassi 1935-38 Susp.2000', 'eva'),
(84, '1030151060', '1030151060.pdf', 'Mb Cv - Chassi Axor', 'eva'),
(85, '1030151386', '1030151386.pdf', 'Mb Cv - Chassi Axor 2035 Susp.2000', 'eva'),
(86, '1030150059', '1030150059.pdf', 'Mb Cv - Chassi LS 1634', 'eva'),
(87, '1030000550', '1030000550.pdf', 'Mb Cv - Chassi Suspensoes', 'eva'),
(88, '1030151047', '1030151047.pdf', 'Scania - Chassi 2000', 'eva'),
(89, '1030151059', '1030151059.pdf', 'Scania - Chassi LS', 'eva'),
(91, '1030151247', '1030151247.pdf', 'Volvo - Chassi 2000 - Fh 380', 'eva'),
(92, '1030150583', '1030150583.pdf', 'Volvo - Chassi LS - Fh 380', 'eva'),
(93, '1030151023', '1030151023.pdf', 'Volvo - Chassi LS - N10/12', 'eva'),
(94, '1030152297', '1030152297.pdf', 'Volvo - Chassi Vm', 'eva'),
(95, '1030000274', '1030000274.pdf', 'Volvo - Suspensoes', 'eva'),
(96, 'Proc. MSL GERAL01 Rev 17-02-10', 'Proc. MSL GERAL01 Rev 17-02-10.pdf', 'Manual e Procedimentos', 'eva'),
(97, 'Matriz Cont. de Rec', 'Matriz Cont. de Rec.doc', 'Matrizes para Copias', 'eva'),
(101, 'FEIXE DE MOLAS PARA VEICULOS MEDIOS E CAVALO MECANICO(SUSPENSAO 2000)', 'FEIXE DE MOLAS PARA VEICULOS MEDIOS E CAVALO MECANICO(SUSPENSAO 2000).pdf', 'Feixes de Molas', 'eva'),
(102, '1030152159', '1030152159.pdf', 'Agrale - Chassi 13000', 'eva'),
(103, '1030152160', '1030152160.pdf', 'Agrale - Chassi 13000 Capa U', 'eva'),
(104, '1030151962', '1030151962.pdf', 'Agrale - Chassi 9200', 'eva'),
(105, '9030000181', '9030000181.pdf', 'Agrale - Suspensoes', 'eva'),
(106, '1030150335', '1030150335.pdf', 'Ford-vw - Chassi L 16', 'eva'),
(107, '1030151784', '1030151784.pdf', 'Ford-vw - Chassi VW 18.130', 'eva'),
(108, '1040000208', '1040000208.pdf', 'Ford-vw - Suspensoes', 'eva'),
(109, '1030151186', '1030151186.pdf', 'Ford-vw 3-4 - Chassi VW 8.150', 'eva'),
(111, '1030151896', '1030151896.pdf', 'Iveco - Chassi Z Eurotech', 'eva'),
(112, '1030152035', '1030152035.pdf', 'Iveco - Chassi Z Strails', 'eva'),
(113, '9030150247', '9030150247.pdf', 'Iveco - Chassi Z Strails Susp.2000', 'eva'),
(114, '1030150973', '1030150973.pdf', 'Iveco - Chassi Conico Eurotracker', 'eva'),
(115, '1030151484', '1030151484.pdf', 'Iveco - Chassi Eurotech', 'eva'),
(116, '1030150950', '1030150950.pdf', 'Iveco - Chassi Eurotracker', 'eva'),
(117, '1030000384', '1030000384.pdf', 'Iveco - Suspensoes', 'eva'),
(118, '1030150850', '1030150850.pdf', 'Mb - Chassi 1113', 'eva'),
(119, '1030151174', '1030151174.pdf', 'Mb - Chassi 1214', 'eva'),
(120, '1030150200', '1030150200.pdf', 'Mb - Chassi 14-16', 'eva'),
(121, '1030150059', '1030150059.pdf', 'Mb - Chassi 1620', 'eva'),
(122, '1030152108', '1030152108.pdf', 'Mb - Chassi 1725 Atego', 'eva'),
(123, '1040000095', '1040000095.pdf', 'Mb - Suspensoes', 'eva'),
(124, '1030152184', '1030152184.pdf', 'Mb 3-4 - Chassi 915c - Ee3700', 'eva'),
(125, '1030152184', '1030152184.pdf', 'Mb 3-4 - Chassi 915c - Ee4400', 'eva'),
(127, '1030150500', '1030150500.pdf', 'Mb Cv - Chassi 1935-38', 'eva'),
(128, '1030151747', '1030151747.pdf', 'Mb Cv - Chassi 1935-38 Capa Z', 'eva'),
(129, '1030150523', '1030150523.pdf', 'Mb Cv - Chassi 1935-38 Susp.2000', 'eva'),
(130, '1030151386', '1030151386.pdf', 'Mb Cv - Chassi Axor', 'eva'),
(131, '1030152250', '1030152250.pdf', 'Mb Cv - Chassi Axor 2035 Susp.2000', 'eva'),
(132, '1030152047', '1030152047.pdf', 'Mb Cv - Chassi LS 1634', 'eva'),
(133, '1030000562', '1030000562.pdf', 'Mb Cv - Chassi Suspensoes', 'eva'),
(134, '1030151059', '1030151059.pdf', 'Scania - Chassi 2000', 'eva'),
(135, '1030151060', '1030151060.pdf', 'Scania - Chassi LS', 'eva'),
(137, '1030151760', '1030151760.pdf', 'Volvo - Chassi 2000 - Fh 380', 'eva'),
(138, '1030150648', '1030150648.pdf', 'Volvo - Chassi LS - Fh 380', 'eva'),
(139, '1030151047', '1030151047.pdf', 'Volvo - Chassi LS - N10/12', 'eva'),
(140, '1030152309', '1030152309.pdf', 'Volvo - Chassi Vm', 'eva'),
(141, '1030000372', '1030000372.pdf', 'Volvo - Suspensoes', 'eva'),
(143, 'Rastreabilidade dos Materiais adiquiridos', 'Rastreabilidade dos Materiais adiquiridos.doc', 'Matrizes para Copias', 'eva'),
(147, 'FEIXE DE MOLAS PARA VEICULOS MEDIOS(SUSPENSAO GR)', 'FEIXE DE MOLAS PARA VEICULOS MEDIOS(SUSPENSAO GR).pdf', 'Feixes de Molas', 'eva'),
(148, '1030152160', '1030152160.pdf', 'Agrale - Chassi 13000', 'eva'),
(149, '1030152371', '1030152371.pdf', 'Agrale - Chassi 13000 Capa U', 'eva'),
(150, '1030151974', '1030151974.pdf', 'Agrale - Chassi 9200', 'eva'),
(152, '1030150360', '1030150360.pdf', 'Ford-vw - Chassi L 16', 'eva'),
(153, '1030151796', '1030151796.pdf', 'Ford-vw - Chassi VW 18.130', 'eva'),
(154, '1112180347', '1112180347.pdf', 'Ford-vw - Suspensoes', 'eva'),
(155, '1030151198', '1030151198.pdf', 'Ford-vw 3-4 - Chassi VW 8.150', 'eva'),
(160, '1030151435', '1030151435.pdf', 'Iveco - Chassi Conico Eurotracker', 'eva'),
(161, '1030151496', '1030151496.pdf', 'Iveco - Chassi Eurotech', 'eva'),
(162, '1030150973', '1030150973.pdf', 'Iveco - Chassi Eurotracker', 'eva'),
(163, '1112200039', '1112200039.pdf', 'Iveco - Suspensoes', 'eva'),
(164, '1030150861', '1030150861.pdf', 'Mb - Chassi 1113', 'eva'),
(165, '1030151301', '1030151301.pdf', 'Mb - Chassi 1214', 'eva'),
(166, '1030150211', '1030150211.pdf', 'Mb - Chassi 14-16', 'eva'),
(167, '1030150612', '1030150612.pdf', 'Mb - Chassi 1620', 'eva'),
(168, '1030152111', '1030152111.pdf', 'Mb - Chassi 1725 Atego', 'eva'),
(169, '1040000184', '1040000184.pdf', 'Mb - Suspensoes', 'eva'),
(170, '1030152196', '1030152196.pdf', 'Mb 3-4 - Chassi 915c - Ee3700', 'eva'),
(171, '1030152224', '1030152224.pdf', 'Mb 3-4 - Chassi 915c - Ee4400', 'eva'),
(173, '1030150511', '1030150511.pdf', 'Mb Cv - Chassi 1935-38', 'eva'),
(175, '9030150064', '9030150064.pdf', 'Mb Cv - Chassi 1935-38 Susp.2000', 'eva'),
(177, '9030150088', '9030150088.pdf', 'Mb Cv - Chassi Axor 2035 Susp.2000', 'eva'),
(178, '1030152059', '1030152059.pdf', 'Mb Cv - Chassi LS 1634', 'eva'),
(180, '9030150101', '9030150101.pdf', 'Scania - Chassi 2000', 'eva'),
(181, '1030151072', '1030151072.pdf', 'Scania - Chassi LS', 'eva'),
(183, '9030150113', '9030150113.pdf', 'Volvo - Chassi 2000 - Fh 380', 'eva'),
(184, '1030151023', '1030151023.pdf', 'Volvo - Chassi LS - Fh 380', 'eva'),
(185, '1030151060', '1030151060.pdf', 'Volvo - Chassi LS - N10/12', 'eva'),
(186, '1030152310', '1030152310.pdf', 'Volvo - Chassi Vm', 'eva'),
(187, '1030000615', '1030000615.pdf', 'Volvo - Suspensoes', 'eva'),
(200, '1113250432', '1113250432.pdf', 'Ford-vw - Suspensoes', 'eva'),
(206, '1030151460', '1030151460.pdf', 'Iveco - Chassi Conico Eurotracker', 'eva'),
(207, '1030151535', '1030151535.pdf', 'Iveco - Chassi Eurotech', 'eva'),
(209, '1113250432', '1113250432.pdf', 'Iveco - Suspensoes', 'eva'),
(210, '1030150873', '1030150873.pdf', 'Mb - Chassi 1113', 'eva'),
(211, '1030151313', '1030151313.pdf', 'Mb - Chassi 1214', 'eva'),
(212, '1030150384', '1030150384.pdf', 'Mb - Chassi 14-16', 'eva'),
(215, '1040000196', '1040000196.pdf', 'Mb - Suspensoes', 'eva'),
(219, '1030150523', '1030150523.pdf', 'Mb Cv - Chassi 1935-38', 'eva'),
(221, '9030150076', '9030150076.pdf', 'Mb Cv - Chassi 1935-38 Susp.2000', 'eva'),
(222, '1030152250', '1030152250.pdf', 'Mb Cv - Chassi Axor', 'eva'),
(223, '9030150090', '9030150090.pdf', 'Mb Cv - Chassi Axor 2035 Susp.2000', 'eva'),
(224, '1030152060', '1030152060.pdf', 'Mb Cv - Chassi LS 1634', 'eva'),
(225, '1113250358', '1113250358.pdf', 'Mb Cv - Chassi Suspensoes', 'eva'),
(226, '9030150150', '9030150150.pdf', 'Scania - Chassi 2000', 'eva'),
(227, '1030151386', '1030151386.pdf', 'Scania - Chassi LS', 'eva'),
(229, '9030150137', '9030150137.pdf', 'Volvo - Chassi 2000 - Fh 380', 'eva'),
(230, '1030151247', '1030151247.pdf', 'Volvo - Chassi LS - Fh 380', 'eva'),
(231, '1030151096', '1030151096.pdf', 'Volvo - Chassi LS - N10/12', 'eva'),
(252, '1030151547', '1030151547.pdf', 'Iveco - Chassi Conico Eurotracker', 'eva'),
(256, '1030150885', '1030150885.pdf', 'Mb - Chassi 1113', 'eva'),
(257, '1030151337', '1030151337.pdf', 'Mb - Chassi 1214', 'eva'),
(261, '1040000243', '1040000243.pdf', 'Mb - Suspensoes', 'eva'),
(265, '1030150535', '1030150535.pdf', 'Mb Cv - Chassi 1935-38', 'eva'),
(267, '9030150162', '9030150162.pdf', 'Mb Cv - Chassi 1935-38 Susp.2000', 'eva'),
(268, '1030152261', '1030152261.pdf', 'Mb Cv - Chassi Axor', 'eva'),
(269, '9030150162', '9030150162.pdf', 'Mb Cv - Chassi Axor 2035 Susp.2000', 'eva'),
(270, '1030152072', '1030152072.pdf', 'Mb Cv - Chassi LS 1634', 'eva'),
(272, '9030150162', '9030150162.pdf', 'Scania - Chassi 2000', 'eva'),
(273, '1030151860', '1030151860.pdf', 'Scania - Chassi LS', 'eva'),
(275, '9030150162', '9030150162.pdf', 'Volvo - Chassi 2000 - Fh 380', 'eva'),
(276, '1030151760', '1030151760.pdf', 'Volvo - Chassi LS - Fh 380', 'eva'),
(277, '1030151362', '1030151362.pdf', 'Volvo - Chassi LS - N10/12', 'eva'),
(302, '1030150897', '1030150897.pdf', 'Mb - Chassi 1113', 'eva'),
(313, '9030150223', '9030150223.pdf', 'Mb Cv - Chassi 1935-38 Susp.2000', 'eva'),
(316, '1030152084', '1030152084.pdf', 'Mb Cv - Chassi LS 1634', 'eva'),
(320, 'Solicitação de Certificado.doc', 'Solicitação de Certificado.doc', 'Matrizes para Copias', 'dif'),
(321, 'Solicitação de Certificado.doc', 'Solicitação de Certificado.doc', 'Matrizes para Copias', 'eva'),
(322, 'Reclamações de Clientes.doc', 'Reclamações de Clientes.doc', 'Matrizes para Copias', 'dif'),
(323, 'Check list Final.docx', 'Check list Final.docx', 'Matrizes para Copias', 'dif'),
(324, 'Controle de Recebimento.docx', 'Controle de Recebimento.docx', 'Matrizes para Copias', 'dif'),
(327, 'Manual rev. 0.pdf', 'Manual rev. 0.pdf', 'Manual e Procedimentos', 'dif'),
(328, 'Proc. SL 002 - ADIF.pdf', 'Proc. SL 002 - ADIF.pdf', 'Manual e Procedimentos', 'dif'),
(330, 'Rastreabilidade de Materiais Adquiridos Para Adaptacao.docx', 'Rastreabilidade de Materiais Adquiridos Para Adaptacao.docx', 'Matrizes para Copias', 'dif'),
(331, 'Avaliacao Inicial.doc', 'Avaliacao Inicial.doc', 'Matrizes para Copias', 'dif'),
(335, 'Circular.pdf', 'Circular.pdf', 'Circular para Caminhoes e Cavalos Mecanicos', 'eva'),
(336, '1030000549.pdf', '1030000549.pdf', 'Ford-vw 3-4 - Suspensoes', 'eva'),
(337, '9030000230.pdf', '9030000230.pdf', 'Ford-vw 3-4 - Suspensoes', 'eva'),
(338, '1030000347.pdf', '1030000347.pdf', 'Ford-vw 3-4 - Suspensoes', 'eva'),
(339, '1030250000.pdf', '1030250000.pdf', 'Mb 3-4 - Suspensoes', 'eva'),
(340, '1030000639.pdf', '1030000639.pdf', 'Mb 3-4 - Suspensoes', 'eva'),
(341, '1113250371.pdf', '1113250371.pdf', 'Volvo - Suspensoes', 'eva'),
(342, '1113250420.pdf', '1113250420.pdf', 'Volvo - Suspensoes', 'eva'),
(343, '1113250322.pdf', '1113250322.pdf', 'Scania - Suspensoes', 'eva'),
(344, '1113250360.pdf', '1113250360.pdf', 'Mb Cv - Chassi Suspensoes', 'eva'),
(345, 'Video Treinamento', 'SILPA.mpg', 'Video Treinamento', 'eva'),
(347, '9030150162.pdf', '9030150162.pdf', 'Mb Cv - Chassi Axor Susp. 2000 Capa Z', 'eva'),
(348, '9030150088.pdf', '9030150088.pdf', 'Mb Cv - Chassi Axor Susp. 2000 Capa Z', 'eva'),
(349, '9030150272.pdf', '9030150272.pdf', 'Mb Cv - Chassi Axor Susp. 2000 Capa Z', 'eva'),
(350, '1030151047.pdf', '1030151047.pdf', 'MB Cv - Chassi Axor 1933', 'eva'),
(351, '1030151060.pdf', '1030151060.pdf', 'MB Cv - Chassi Axor 1933', 'eva'),
(352, '1030151386.pdf', '1030151386.pdf', 'MB Cv - Chassi Axor 1933', 'eva'),
(353, '1030152250.pdf', '1030152250.pdf', 'MB Cv - Chassi Axor 1933', 'eva'),
(354, '1030152261.pdf', '1030152261.pdf', 'MB Cv - Chassi Axor 1933', 'eva'),
(355, '9030150300.pdf', '9030150300.pdf', 'MB Cv - Chassi Axor 1933', 'eva'),
(356, '1030152236.pdf', '1030152236.pdf', 'Mb Cv - Chassi Axor', 'eva');

-- --------------------------------------------------------

--
-- Estrutura da tabela `silpa_page`
--

CREATE TABLE IF NOT EXISTS `silpa_page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pagina` text CHARACTER SET utf8,
  `content` text,
  `produtos` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Extraindo dados da tabela `silpa_page`
--

INSERT INTO `silpa_page` (`id`, `pagina`, `content`, `produtos`) VALUES
(1, 'Eixos', 'testando eixos', 'sim'),
(2, 'Freios', 'testando Freios', 'sim'),
(3, 'Suspensões', 'testando Suspensões', 'sim'),
(4, 'Componentes', 'testando Componentes', 'sim'),
(5, 'Representantes', 'Testando Representantes', 'representante'),
(6, 'Concessionárias', 'Testando Concessionárias', 'concessionaria'),
(7, 'Download', 'Exemplos Download<br/>Exemplos Download<br/>Exemplos Download<br/>Exemplos Download<br/>Exemplos Download<br/>Exemplos Download<br/>Exemplos Download<br/>', 'download');

-- --------------------------------------------------------

--
-- Estrutura da tabela `silpa_posts`
--

CREATE TABLE IF NOT EXISTS `silpa_posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `thumb` text CHARACTER SET latin1,
  `codigo` text CHARACTER SET latin1,
  `titulo` text CHARACTER SET utf8 COLLATE utf8_bin,
  `texto_titulo` text CHARACTER SET latin1,
  `especificacao` text CHARACTER SET latin1,
  `texto_especificacao` text CHARACTER SET latin1,
  `categoria` text CHARACTER SET latin1,
  `tipo` text CHARACTER SET latin1,
  `data` datetime DEFAULT NULL,
  `visitas` varchar(11) CHARACTER SET latin1 DEFAULT NULL,
  `catalogo` text CHARACTER SET latin1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=80 ;

--
-- Extraindo dados da tabela `silpa_posts`
--

INSERT INTO `silpa_posts` (`id`, `thumb`, `codigo`, `titulo`, `texto_titulo`, `especificacao`, `texto_especificacao`, `categoria`, `tipo`, `data`, `visitas`, `catalogo`) VALUES
(6, 'silpaimagem.jpg', '', 'Silpa', '<p style="text-align: justify;"><span style="color: #000000;">Com mais de quatro d&eacute;cadas de experi&ecirc;ncia na fabrica&ccedil;&atilde;o de Pe&ccedil;as e Componentes para Implementos Rodovi&aacute;rios, a Silpa conquistou todo o mercado brasileiro. Atualmente, &eacute; a principal fornecedora da grande maioria dos fabricantes de Implementos Rodovi&aacute;rios do Brasil e tamb&eacute;m da Am&eacute;rica Latina.</span></p>\r\n<p style="text-align: justify;"><span style="color: #000000;">Resultado da Qualidade desenvolvida e da capacidade de sua gente, conquistou a certifica&ccedil;&atilde;o ISO 9001/2008 atrav&eacute;s da Det Norske Veritas, certificadora DNV, em uma demonstra&ccedil;&atilde;o de seus produtos e da qualifica&ccedil;&atilde;o de seus colaboradores.</span></p>\r\n<p style="text-align: justify;"><span style="color: #000000;">A Silpa est&aacute; sempre inovando e lan&ccedil;ando novos produtos. Hoje, possui a linha mais completa do pa&iacute;s, comparada &agrave; empresas do g&ecirc;nero.</span></p>\r\n<p style="text-align: justify;"><span style="color: #000000;">Isso prova a busca constante e cada vez maior de tecnologias, o que aumenta a confiabilidade do mercado em sua marca.</span></p>', '', '', 'company', '', '2013-05-08 16:12:01', '23', NULL),
(7, 'certificado2013.jpg', '', 'Certificação', '<p>Silpa adiquiriu no ano de 2012 a renova&ccedil;&atilde;o do certificado da ISO 9001:2008 com muito esfor&ccedil;o e dedica&ccedil;&atilde;o alcan&ccedil;amos mais esta certifica&ccedil;&atilde;o. Agradecimento aos nossos colaboradores pela colabora&ccedil;&atilde;o.</p>\r\n<p><object id="d9986a7a-8a1b-8589-b8ca-ea9e389db1b4" width="0" height="0" type="application/gas-events-abn"></object></p>', '', '<p>&nbsp;</p>\r\n<p><object id="0b6818d9-6919-a1bc-a86b-a8bc19b19986" width="0" height="0" type="application/gas-events-abn"></object></p>', 'noticias', '', '2013-08-21 11:34:17', '130', NULL),
(17, 'susp.mecaninca.jpg', '', 'Suspensão Mecânica', '<p><span>Constru&iacute;da com chapa de a&ccedil;o estrutural, cortada e conformada por matrizes, dotada de bra&ccedil;os tensores, proporcionando grande durabilidade. Esses componentes s&atilde;o os que permitem o alinhamento dos eixos no semirreboque. Os suportes centrais s&atilde;o dotados de balancim para absorver as oscila&ccedil;&otilde;es ocorridas nos eixos pelas varia&ccedil;&otilde;es que existem nas pistas de rodagem.</span></p>\r\n<p><span>Obs.: Os bra&ccedil;os tensores poder&atilde;o ser com terminal molecular ou pino e bucha; conforme o tipo de suspens&atilde;o.</span></p>\r\n<p><span>&nbsp;</span></p>\r\n<p><strong>Aplica&ccedil;&otilde;es:</strong></p>\r\n<p><span>- Reboques, semirreboques(1, 2, 3 e 4 eixos) e suspens&otilde;es para 3&ordm; eixo.</span></p>', '', '', 'produtos', 'suspensoes', '2013-06-26 17:48:58', '330', NULL),
(20, 'Pino Rei.JPG', '', 'Pino Rei', '<p><strong>Pino Rei 2&rdquo; e &nbsp;3.1/2&rdquo; Flangeado</strong></p>\r\n<p><strong>Pino Rei de 50,8mm:</strong>&nbsp;Produzido com dimensional funcional conforme NBR NM-ISO 337:200 e com resist&ecirc;ncia avaliada (ensaio de fadiga) conforme NBR NM-ISO 8716:2000</p>\r\n<p><strong>Pino Rei de 89mm:</strong>&nbsp;Produzido com dimensional funcional conforme NBR NM-ISO 4086:2001 e com resist&ecirc;ncia avaliada (ensaio de fadiga) conforme NBR NM-ISO 8716:2000</p>\r\n<p>Produto Certificado conforme &ldquo;Autoriza&ccedil;&atilde;o &ndash; Uso do selo de identifica&ccedil;&atilde;o da conformidade N&deg; PUC-FPR-001&rdquo;</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Caracter&iacute;sticas:</strong></p>\r\n<p>- Material: A&ccedil;o SAE 4140 &ndash; Forjado</p>\r\n<p>- Tratamento T&eacute;rmico: Temperado</p>', '', '', 'produtos', 'componentes', '2013-06-27 11:40:18', '158', NULL),
(25, 'EIXOS.zip', NULL, 'CATALOGO EIXOS', NULL, NULL, NULL, 'download', NULL, '2013-01-22 11:20:46', '14', NULL),
(26, 'QUADROq.jpg', '', 'Quadro Eixo Direcional', '<p><span>Auxilia reduzir desgaste nos pneus e arraste sobre a suspens&atilde;o. O quadro direcional possibilita o giro da suspens&atilde;o e eixo para auxiliar em curvas e manobras.</span></p>\r\n<p><span>&nbsp;</span></p>\r\n<p><strong>Caracter&iacute;sticas:</strong></p>\r\n<p><span>- Suspens&atilde;o pneum&aacute;tica;</span></p>\r\n<p><span>- Mesa girat&oacute;ria de duas carreiras de esferas e fixa&ccedil;&atilde;o externa;</span></p>\r\n<p><span>- Giro m&aacute;ximo permitido: 10&deg; para cada lado</span></p>\r\n<p><span>- Sistema de retorno e absor&ccedil;&atilde;o de impactos por molas pneum&aacute;ticas e amortecedores.</span></p>\r\n<p><span>- Quadro e travessas em a&ccedil;o estrutural.</span></p>\r\n<p><span>- Eixo tubular forjado (di&acirc;metro 127) e parede 19mm.</span></p>\r\n<p><span>&nbsp;</span></p>\r\n<p><strong>Aplica&ccedil;&atilde;o:</strong></p>\r\n<p><span>- Suspens&atilde;o pneum&aacute;tica para eixos distanciados.</span></p>', '', '', 'produtos', 'suspensoes', '2013-06-26 17:51:56', '152', NULL),
(27, 'susp.pneumatica.jpg', '', 'Suspensão Pneumática 2012', '<p><strong>Caracter&iacute;sticas:</strong></p>\r\n<p>&nbsp;</p>\r\n<p>- A suspens&atilde;o pneum&aacute;tica forma m&oacute;dulos iguais para suspens&otilde;es de 01, 02, 03 eixos.</p>\r\n<p>- Permite a utiliza&ccedil;&atilde;o de eixos redondos, com rodados duplos ou <em>Super Single&nbsp;</em>(disco ou raiado, aro 20" ou 22", e freios <em>Tubeless</em>).</p>\r\n<p>- Bra&ccedil;o para articula&ccedil;&atilde;o e interliga&ccedil;&atilde;o da bolsa pneum&aacute;tica ao eixo, em chapa de a&ccedil;o estrutural, tornando o modelo mais leve que a de molas.</p>\r\n<p>- Sistema de articula&ccedil;&atilde;o com uma <strong>Bucha Trifuncional</strong>, de alta absor&ccedil;&atilde;o de tor&ccedil;&otilde;es e impactos, evitando ainda mais a transfer&ecirc;ncia de trepida&ccedil;&otilde;es ao chass&iacute; e consequentemente maior prote&ccedil;&atilde;o &agrave; carga e ao ve&iacute;culo.</p>\r\n<p>- Ancoragem atrav&eacute;z de parafuso tratado com porca torque e arruelas de desgaste.</p>\r\n<p>- Suportes em chapa de a&ccedil;o estampados e elementos de fixa&ccedil;&atilde;o com qualidade comprovada.</p>\r\n<p>- Baixo custo de manuten&ccedil;&atilde;o, isenta de lubrifica&ccedil;&atilde;o.</p>\r\n<p>- Maior absor&ccedil;&atilde;o de irregularidades.</p>\r\n<p>- Maior vida &uacute;til na estrutura do ve&iacute;culo.</p>\r\n<p>- Maior quilometragem por jogos de pneus.</p>\r\n<p>- Molas pneum&aacute;ticas de f&aacute;cil substitui&ccedil;&atilde;o.</p>\r\n<p>- Fixa&ccedil;&atilde;o do bra&ccedil;o que permite a substitui&ccedil;&atilde;o da viga do eixo.</p>\r\n<p>- Elementos de desgaste de f&aacute;cil reposi&ccedil;&atilde;o.</p>\r\n<p>- Facilidade de acesso para manuten&ccedil;&atilde;o.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Aplica&ccedil;&atilde;o:</strong></p>\r\n<p>- Reboques e Semireboque</p>', '', '<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p><strong><span style="color: #0000ff;">Especifica&ccedil;&otilde;es T&eacute;cnicas:</span></strong></p>\r\n<p>&nbsp;</p>\r\n<p>-&nbsp;<a href="../uploads/produtos/suspensoes/1150190000%20-%20CLIENTES.jpg" target="_blank">Suspens&atilde;o Pneum&aacute;tica 2012</a></p>\r\n<p>-&nbsp;<a href="../uploads/produtos/suspensoes/1150190012%20-%20CLIENTES.jpg" target="_blank">Suspens&atilde;o Pneum&aacute;tica 2012 C/ Suspensor Indireto</a></p>\r\n<p>-&nbsp;<a href="../uploads/produtos/suspensoes/1150190012%20-%20Alinhamento.jpg" target="_blank">Alinhamento e Solda do Guia Sextavado</a></p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>', 'produtos', 'suspensoes', '2013-06-26 19:39:28', '176', NULL),
(29, 'SUSPENSOES.zip', NULL, 'CATALOGO SUSPENSOES', NULL, NULL, NULL, 'download', NULL, '2013-01-22 11:21:03', '13', NULL),
(30, 'FREIOS.zip', NULL, 'CATALOGO FREIOS', NULL, NULL, NULL, 'download', NULL, '2013-01-22 11:22:41', '13', NULL),
(31, 'PECAS E COMPONENTES.zip', '', 'CATALOGO PECAS E COMPONENTES', '<p>&nbsp;</p>\r\n<p><object id="a84ada2b-29ab-94bf-8ab9-e98408a2b0a4" width="0" height="0" type="application/gas-events-abn"></object></p>', '', '<p>&nbsp;</p>\r\n<p><object id="1959eabb-5aea-bc86-1beb-28ba99bba695" width="0" height="0" type="application/gas-events-abn"></object></p>', 'download', NULL, '2013-07-31 19:36:28', '13', NULL),
(38, 'luto.jpg', '', 'Nota de Pesar', '<p><em>A Silpa se solidariza com os familiares e amigos das v&iacute;timas da trag&eacute;dia ocorrida na boate Kiss em Santa Maria, Rio Grande do Sul, na madrugada do dia 27/01/2013.</em></p>\r\n<p><em>O Rio Grande do Sul e o pa&iacute;s perdem parte significativa de seus jovens, em sua maioria estudantes da Universidade Federal de Santa Maria (UFSM), mas vindos de diferentes cidades do pa&iacute;s, e que tiveram suas vidas e carreiras promissoras interrompidas.</em></p>\r\n<p><em>Expressamos nossos sinceros votos de pesar e desejamos que os familiares e amigos das v&iacute;timas re&uacute;nam for&ccedil;as para ultrapassar este momento t&atilde;o dif&iacute;cil em suas vidas.</em></p>', '', '', 'noticias', '-1', '2013-02-04 11:10:23', '22', NULL),
(42, 'LOGO PRINCIPAL.jpg', '', 'Logo Comemorativo', '<p>Silpa lan&ccedil;a Logo Comemorativo para os seus 40 Anos, tendo em vista tamb&eacute;m uma das maiores feiras de Implementos Rodovi&aacute;rios do Brasil a FENATRAN.</p>\r\n<p><object id="38c83a9a-8919-b08d-e8b9-899b59949eb9" width="0" height="0" type="application/gas-events-abn"></object></p>', '', '<p>&nbsp;</p>\r\n<p><object id="99a8dbc9-5868-be8d-39e9-2ab61a8ea18e" width="0" height="0" type="application/gas-events-abn"></object></p>', 'noticias', '-1', '2013-07-05 19:10:13', '113', NULL),
(43, '01.jpg', '', 'Eixos e Vigas', '<p>A Silpa possui uma completa linha de eixos para reboques, semirreboques, 3&ordm; eixo e &ocirc;nibus.<br /> <br />As vigas s&atilde;o fabricadas em a&ccedil;o estrutural com ponteiras em a&ccedil;o forjado (para perfil retangular), em tubo forjado (para perfil redondo) ou em perfil de a&ccedil;o maci&ccedil;o.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Modelos de eixos:</strong></p>\r\n<p>-Eixo Raiado 15&rdquo;, 20&rdquo;, 22&rdquo;<br />-Eixo Disco 15&rdquo;, 17,5&rdquo;, 20"</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Caracter&iacute;sticas:</strong></p>\r\n<p>&nbsp;</p>\r\n<p>- Capacidade t&eacute;cnica: 3,5 a 16 toneladas.<br />- Se&ccedil;&atilde;o: retangular ou redondo.<br />- Ampla diversidade de bitolas.<br />- Vigas com flanges parafusadas.<br />- Cubo: Raiado e Roda a disco.<br />- Com catracas manuais ou autom&aacute;ticas<br />- Com e sem c&acirc;maras de freio (c&acirc;mara simples ou spring brake).<br />- Preparado para ABS. <br />- Rolamentos com rolos c&ocirc;nicos</p>', '', '', 'produtos', 'eixos', '2013-06-26 16:30:35', '1057', NULL),
(44, 'Fenatran-Silpa.jpg', '', 'Silpa na FENATRAN', '<p>Projeto de Stand pronto, agora &eacute; s&oacute; ficar no aguardo para o come&ccedil;o da feira e descobrir as novidades e os produtos Silpa.</p>\r\n<p>Esperamos voc&ecirc; em nosso Stand.</p>\r\n<p>&nbsp;</p>\r\n<p><a title="Silpa na Fenatran" href="../uploads/noticias/Fenatran-Silpa.pdf">Clique para saber o endere&ccedil;o da Silpa na FENATRAN</a></p>\r\n<p>&nbsp;</p>\r\n<p>Para mais informa&ccedil;&atilde;o sobre a feira acesse o site pelo link abaixo:</p>\r\n<p><a href="http://www.fenatran.com.br/Home/" target="_blank">Fenatran</a></p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p><object id="0b8bba5a-aaf8-bbb4-6a5b-2ba45baabab1" width="0" height="0" type="application/gas-events-abn"></object></p>', '', '<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p><object id="7afaa839-aab8-999d-4979-4b9619a08496" width="0" height="0" type="application/gas-events-abn"></object></p>', 'noticias', '-1', '2013-09-11 17:49:29', '188', NULL),
(46, 'Eixo-Aro-15-Nextrans.jpg', '', 'Eixos Expeciais para Linha de Eixos', '<p><strong>Caracteristicas:</strong></p>\r\n<p>- Fazem parte do mix de produtos da Silpa os eixos especias que s&atilde;o aplicados em equipamentos com linhas de eixo ou eixos passantes, para transportes pesados e superpesados, em carretas prancha rebaixada, carretas prancha reta, carretas lagartixa, etc...</p>\r\n<p>- A capacidade t&eacute;cnica de carga dos eixos depender&aacute; das caracteristicas dos componentes utilizados, como tipo de material da viga, de cubo de roda, de rolamentos, de freio, bem como da velocidade desenvolvida pelo equipamento.</p>\r\n<p>-A Silpa produz eixos conforme a necessidade do cliente, seja com cubo de roda liso ou raiado, nos aros 15", 20" e 22".</p>\r\n<p>&nbsp;</p>\r\n<p><span style="color: #ff0000;">Obs.: Projetos especiais sob consulta t&eacute;cnica.</span></p>', '', '', 'destaques', '-1', '2013-06-26 18:36:58', '203', NULL),
(54, '1150190012q.jpg', '1150190012', 'Suspensão Pneumática 2012', '<p><strong>Caracter&iacute;sticas:</strong></p>\r\n<p>&nbsp;</p>\r\n<p>- A suspens&atilde;o pneum&aacute;tica forma m&oacute;dulos iguais para suspens&otilde;es de 01, 02, 03 eixos.</p>\r\n<p>- Permite a utiliza&ccedil;&atilde;o de eixos redondos, com rodados duplos ou&nbsp;<em>Super Single&nbsp;</em>(disco ou raiado, aro 20" ou 22", e freios&nbsp;<em>Tubeless</em>).</p>\r\n<p>- Bra&ccedil;o para articula&ccedil;&atilde;o e interliga&ccedil;&atilde;o da bolsa pneum&aacute;tica ao eixo, em chapa de a&ccedil;o estrutural, tornando o modelo mais leve que a de molas.</p>\r\n<p>- Sistema de articula&ccedil;&atilde;o com uma&nbsp;<strong>Bucha Trifuncional</strong>, de alta absor&ccedil;&atilde;o de tor&ccedil;&otilde;es e impactos, evitando ainda mais a transfer&ecirc;ncia de trepida&ccedil;&otilde;es ao chass&iacute; e consequentemente maior prote&ccedil;&atilde;o &agrave; carga e ao ve&iacute;culo.</p>\r\n<p>- Ancoragem atrav&eacute;z de parafuso tratado com porca torque e arruelas de desgaste.</p>\r\n<p>- Suportes em chapa de a&ccedil;o estampados e elementos de fixa&ccedil;&atilde;o com qualidade comprovada.</p>\r\n<p>- Baixo custo de manuten&ccedil;&atilde;o, isenta de lubrifica&ccedil;&atilde;o.</p>\r\n<p>- Maior absor&ccedil;&atilde;o de irregularidades.</p>\r\n<p>- Maior vida &uacute;til na estrutura do ve&iacute;culo.</p>\r\n<p>- Maior quilometragem por jogos de pneus.</p>\r\n<p>- Molas pneum&aacute;ticas de f&aacute;cil substitui&ccedil;&atilde;o.</p>\r\n<p>- Fixa&ccedil;&atilde;o do bra&ccedil;o que permite a substitui&ccedil;&atilde;o da viga do eixo.</p>\r\n<p>- Elementos de desgaste de f&aacute;cil reposi&ccedil;&atilde;o.</p>\r\n<p>- Facilidade de acesso para manuten&ccedil;&atilde;o.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Aplica&ccedil;&atilde;o:</strong></p>\r\n<p>- Reboques e Semireboque</p>', '', '<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p><strong><span style="color: #0000ff;">Especifica&ccedil;&otilde;es T&eacute;cnicas:</span></strong></p>\r\n<p>&nbsp;</p>\r\n<p>-&nbsp;<a href="../uploads/produtos/suspensoes/1150190000%20-%20CLIENTES.jpg" target="_blank">Suspens&atilde;o Pneum&aacute;tica 2012</a></p>\r\n<p>- <a href="../uploads/produtos/suspensoes/1150190012%20-%20CLIENTES.jpg" target="_blank">Suspens&atilde;o Pneum&aacute;tica 2012 C/ Suspensor Indireto</a></p>\r\n<p>- <a href="../uploads/produtos/suspensoes/1150190012%20-%20Alinhamento.jpg" target="_blank">Alinhamento e Solda do Guia Sextavado</a></p>', 'lancamentos', '-1', '2013-06-26 19:20:04', '253', NULL),
(55, 'Freio vw 9 150 - Tubeq.jpg', '', 'Freio VW 9150 - Tube', '<p><strong>DIMENS&Otilde;ES:</strong></p>\r\n<p>DI&Acirc;METRO: 325mm LARGURA: 120mm</p>\r\n<p>&nbsp;</p>\r\n<p><strong>APLICA&Ccedil;&Otilde;ES:</strong></p>\r\n<p>- 3&deg; EIXO E TRA&Ccedil;&Atilde;O:</p>\r\n<p>&nbsp;CAMNH&Otilde;ES &frac34; VW, FORD CARGO, AGRALE</p>\r\n<p>- REBOQUES E SEMIRREBOQUES COM ARO 17,5</p>\r\n<p>&nbsp;</p>\r\n<p><strong>DISPONIVEL NOS MODELOS TUBE E TUBELESS</strong></p>', '', '', 'lancamentos', '-1', '2013-06-26 18:21:00', '170', NULL),
(58, '9270123323.JPG', '9270123323', 'FREIO A AR 16,5”X8” - Q PLUS', '<p><strong>DIMENS&Otilde;ES:</strong></p>\r\n<p>DI&Acirc;METRO: 16,5&rdquo; LARGURA: 8&rdquo;</p>\r\n<p>&nbsp;</p>\r\n<p><strong>APLICA&Ccedil;&Otilde;ES:</strong></p>\r\n<p>- REBOQUES SEMIRREBOQUES</p>\r\n<p>&nbsp;</p>\r\n<p><strong>DISPONIVEL NOS MODELOS TUBELESS</strong></p>', '', '', 'destaques', '-1', '2013-06-26 17:24:57', '139', NULL),
(59, 'Suspe-DistReb01.JPG', '9113220493', 'Suspensão Distanciada Rebaixada', '<p><strong>Especifica&ccedil;&otilde;es:</strong></p>\r\n<p>- Esfrega m&oacute;vel&nbsp; nos suportes dianteiros e traseiros.</p>\r\n<p>- Pino da balan&ccedil;a com di&acirc;metro de 50mm</p>\r\n<p>- Balan&ccedil;a constru&iacute;da em a&ccedil;o estrutural de 8mm</p>\r\n<p>- Bra&ccedil;os tensores modelo 2000 (rd)</p>\r\n<p>- Molas assim&eacute;tricas</p>\r\n<p>- Grampo de molas 335mm (p/ mola indicada a baixo)</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Aplica&ccedil;&otilde;es:</strong></p>\r\n<p>- Pranchas e carrega tudo</p>', '', '', 'destaques', '-1', '2013-06-27 10:58:06', '243', NULL),
(60, 'QUADROq.jpg', '', 'Quadro Eixo Direcional', '<p>Auxilia reduzir desgaste nos pneus e arraste sobre a suspens&atilde;o. O quadro direcional possibilita o giro da suspens&atilde;o e eixo para auxiliar em curvas e manobras.</p>\r\n<p>&nbsp;</p>\r\n<p>Caracter&iacute;sticas:</p>\r\n<p>- Suspens&atilde;o pneum&aacute;tica;</p>\r\n<p>- Mesa girat&oacute;ria de duas carreiras de esferas e fixa&ccedil;&atilde;o externa;</p>\r\n<p>- Giro m&aacute;ximo permitido: 10&deg; para cada lado</p>\r\n<p>- Sistema de retorno e absor&ccedil;&atilde;o de impactos por molas pneum&aacute;ticas e amortecedores.</p>\r\n<p>- Quadro e travessas em a&ccedil;o estrutural.</p>\r\n<p>- Eixo tubular forjado (di&acirc;metro 127) e parede 19mm.</p>\r\n<p>&nbsp;</p>\r\n<p>Aplica&ccedil;&atilde;o:</p>\r\n<p>- Suspens&atilde;o pneum&aacute;tica para eixos distanciados.</p>', '', '', 'destaques', '-1', '2013-06-26 18:17:59', '157', NULL),
(61, 'Eixo-Forjado-Discoq.jpg', '', 'Eixo Forjado a Disco', '<p>A Silpa possui uma completa linha de eixos para reboques, semirreboques, 3&ordm; eixo e &ocirc;nibus.<br /><br />As vigas s&atilde;o fabricadas em a&ccedil;o estrutural com ponteiras em a&ccedil;o forjado (para perfil retangular), em tubo forjado (para perfil redondo) ou em perfil de a&ccedil;o maci&ccedil;o.</p>\r\n<p>&nbsp;</p>\r\n<p>Modelos de eixos:</p>\r\n<p>-Eixo Raiado 15&rdquo;, 20&rdquo;, 22&rdquo;<br />-Eixo Disco 15&rdquo;, 17,5&rdquo;, 20"</p>\r\n<p>&nbsp;</p>\r\n<p>Caracter&iacute;sticas:</p>\r\n<p>&nbsp;</p>\r\n<p>- Capacidade t&eacute;cnica: 3,5 a 16 toneladas.<br />- Se&ccedil;&atilde;o: retangular ou redondo.<br />- Ampla diversidade de bitolas.<br />- Vigas com flanges parafusadas.<br />- Cubo: Raiado e Roda a disco.<br />- Com catracas manuais ou autom&aacute;ticas<br />- Com e sem c&acirc;maras de freio (c&acirc;mara simples ou spring brake).<br />- Preparado para ABS.&nbsp;<br />- Rolamentos com rolos c&ocirc;nicos</p>', '', '', 'destaques', '-1', '2013-06-26 18:19:09', '197', NULL),
(63, 'SUSPESTNKSIMeT.JPG', '', 'Suspensão Estampada NK - Simétrica', '<div>\r\n<p><strong>Especifica&ccedil;&otilde;es:</strong></p>\r\n<p>&nbsp;</p>\r\n<p>-Suporte dianteiro estampado com perfil alongado.</p>\r\n<p>&nbsp;</p>\r\n<p>-Esfrega m&oacute;vel nos suportes dianteiro e traseiro.</p>\r\n<p>&nbsp;</p>\r\n<p>-Bra&ccedil;os tensores dianteiros e traseiros com o mesmo comprimento.</p>\r\n<p>&nbsp;</p>\r\n<p>-Grampos de mola m22 x 92 x 295 com perfil achatado (modelo suspens&atilde;o</p>\r\n<p>2000) temperados.</p>\r\n<p>&nbsp;</p>\r\n<p>-Balan&ccedil;a com lateral inteiri&ccedil;a em chapa 6,35mm e esfregas com bordas</p>\r\n<p>Estampadas na regi&atilde;o da solda.</p>\r\n<p>&nbsp;</p>\r\n<p>-Pino da balan&ccedil;a com di&acirc;metro de 50mm.</p>\r\n<p>&nbsp;</p>\r\n<p>-Apoios em a&ccedil;o fundido, sem necessidade de apoios inferiores.</p>\r\n<p>&nbsp;</p>\r\n</div>', '', '', 'lancamentos', '-1', '2013-06-27 11:13:26', '208', NULL),
(64, 'Suspeno-Distanciada-NK-2011q.jpg', '', 'Suspensão Distanciada NK 2011', '<p><strong>Especifica&ccedil;&otilde;es:</strong></p>\r\n<p>&nbsp;</p>\r\n<p>- esfrega m&oacute;vel nos suportes dianteiros e traseiros.</p>\r\n<p>- pino da balan&ccedil;a com di&acirc;metro de 50mm.</p>\r\n<p>- balan&ccedil;a construida em a&ccedil;o estutural de 8mm.</p>\r\n<p>- bra&ccedil;os tensores modelo nk.</p>\r\n<p>- apoios de mola modelo nk construidos em a&ccedil;o fundido.</p>\r\n<p>- molas assim&eacute;tricas.</p>\r\n<p>- utiliza os mesmos grampos de molas do modelo 2000.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Aplica&ccedil;&otilde;es:</strong></p>\r\n<p>&nbsp;</p>\r\n<p>- semi-reboques.</p>', '', '', 'lancamentos', '-1', '2013-06-27 12:51:38', '196', NULL),
(65, 'FREIOS SILPA-page-001novo.jpg', '', 'FREIO A AR 15”x7” 15”x8” 15”x8.5/8”', '<p><strong>DIMENS&Otilde;ES:</strong></p>\r\n<p>DI&Acirc;METRO: 15&rdquo; LARGURA: 7&rdquo; / 8&rdquo; / 8.5/8&rdquo;</p>\r\n<p>&nbsp;</p>\r\n<p><strong>APLICA&Ccedil;&Otilde;ES: </strong></p>\r\n<p>- EIXO DIANTEIRO, TRA&Ccedil;&Atilde;O E 3&deg; EIXO:</p>\r\n<p>&nbsp;CAMNH&Otilde;ES VW, FORD CARGO</p>\r\n<p>- REBOQUES SEMIRREBOQUES</p>\r\n<p>&nbsp;</p>\r\n<p><strong>DISPONIVEL NO MODELO TUBE</strong></p>', '', '', 'produtos', 'freios', '2013-06-26 17:11:49', '208', NULL),
(66, 'FREIOS SILPA-page-002novo.jpg', '', 'FREIO A AR 16,5”x8” - Q PLUS', '<p><strong>DIMENS&Otilde;ES:</strong></p>\r\n<p>DI&Acirc;METRO: 16,5&rdquo; LARGURA: 8&rdquo;</p>\r\n<p>&nbsp;</p>\r\n<p><strong>APLICA&Ccedil;&Otilde;ES: </strong></p>\r\n<p>- REBOQUES SEMIRREBOQUES</p>\r\n<p>&nbsp;</p>\r\n<p><strong>DISPONIVEL NOS MODELOS TUBELESS</strong></p>', '', '', 'produtos', 'freios', '2013-06-26 17:15:44', '162', NULL),
(67, 'FREIOS SILPA-page-003novo.jpg', '', 'Freio a Ar 300x120 / 303x100', '<p><strong>DIMENS&Otilde;ES:</strong></p>\r\n<p>DI&Acirc;METRO: 300mm/303mm&nbsp; &nbsp;LARGURA: 120mm/100mm</p>\r\n<p>&nbsp;</p>\r\n<p><strong>APLICA&Ccedil;&Otilde;ES: </strong></p>\r\n<p>- 3&deg; EIXO E TRA&Ccedil;&Atilde;O:</p>\r\n<p>&nbsp;CAMNH&Otilde;ES &frac34;&rdquo; MB</p>\r\n<p>- ADAPTA&Ccedil;&Atilde;O FREIO DA TRA&Ccedil;&Atilde;O DE A DISCO P/ TAMBOR</p>\r\n<p>&nbsp;</p>\r\n<p><strong>DISPONIVEL NO MODELO TUBELESS</strong></p>', '', '', 'produtos', 'freios', '2013-06-26 17:17:21', '122', NULL),
(68, 'FREIOS SILPA-page-004novo.jpg', '', 'Freio a Ar 325x120', '<p><strong>DIMENS&Otilde;ES:</strong></p>\r\n<p>DI&Acirc;METRO: 325mm LARGURA: 120mm</p>\r\n<p>&nbsp;</p>\r\n<p><strong>APLICA&Ccedil;&Otilde;ES: </strong></p>\r\n<p>- 3&deg; EIXO E TRA&Ccedil;&Atilde;O:</p>\r\n<p>&nbsp;CAMNH&Otilde;ES &frac34; VW, FORD CARGO, AGRALE</p>\r\n<p>- REBOQUES E SEMIRREBOQUES COM ARO 17,5</p>\r\n<p>&nbsp;</p>\r\n<p><strong>DISPONIVEL NOS MODELOS TUBE E TUBELESS</strong></p>', '', '', 'produtos', 'freios', '2013-06-26 17:20:01', '126', NULL),
(69, 'FREIOS SILPA-page-006novo.jpg', '', 'FREIO A AR 16,5”x8” 16,5”x7” 16,5”x6” (MA/BX)', '<p><strong>DIMENS&Otilde;ES:</strong></p>\r\n<p>DI&Acirc;METRO: 16,5&rdquo; LARGURA: 8&rdquo;, 7&rdquo;, 6&rdquo;</p>\r\n<p>&nbsp;</p>\r\n<p><strong>APLICA&Ccedil;&Otilde;ES: </strong></p>\r\n<p>- REBOQUES SEMIRREBOQUES</p>\r\n<p>- 3&deg; EIXOS EM GERAL</p>\r\n<p>- TRA&Ccedil;&Atilde;O:</p>\r\n<p>MB 1113/1313/1513/1519/1938/2013 (APENAS NO MODELO TUBE)</p>\r\n<p>&nbsp;</p>\r\n<p><strong>DISPONIVEL NOS MODELOS TUBE E TUBELESS</strong></p>', '', '', 'produtos', 'freios', '2013-06-26 17:22:23', '149', NULL),
(70, 'FREIOS SILPA-page-005novo.jpg', '', 'Freio a Ar 307x150', '<p><strong>DIMENS&Otilde;ES:</strong></p>\r\n<p>DI&Acirc;METRO: 307mm LARGURA: 150mm</p>\r\n<p>&nbsp;</p>\r\n<p><strong>APLICA&Ccedil;&Otilde;ES: </strong></p>\r\n<p>- REBOQUES E SEMIRREBOQUES ESPECIAIS</p>\r\n<p>&nbsp;</p>\r\n<p><strong>DISPONIVEL NO MODELO TUBELESS</strong></p>', '', '', 'produtos', 'freios', '2013-06-26 17:20:55', '121', NULL),
(73, 'DIF.JPG', '', 'Caixa de Container', '<p><span>Produto com certificado conforme &ldquo;Autoriza&ccedil;&atilde;o Uso do Selo de Identifica&ccedil;&atilde;o da Conformidade N&deg; PUC-DIF &ndash; 002&rdquo;, atendendo a norma NBR 7476 &ndash; Equipamento de transporte terrestre de cont&ecirc;iner &ndash; Determina&ccedil;&atilde;o da resit&ecirc;ncia.</span></p>', '', '', 'produtos', 'componentes', '2013-06-27 13:16:54', '151', NULL),
(74, 'pemecanico 2000.jpg', '', 'Pé Mecânico', '<p>Os conjuntos P&eacute; Mec&acirc;nico SILPA possuem diversos modelos de alturas, sapatas e placa de fixa&ccedil;&atilde;o, com tamanhos da manivela e tubo de uni&atilde;o variados s&atilde;o de ampla aplica&ccedil;&atilde;o.</p>', '', '', 'produtos', 'componentes', '2013-06-27 13:46:22', '183', NULL),
(75, '1870130481 (1).JPG', '', 'Rala', '<p>Fabricada dentro de r&iacute;gidas normas de seguran&ccedil;a e qualidade, a Mesa Girat&oacute;ria (Rala) Silpa &eacute; ideal para reboques (Julieta) e Semi-Reboques com Eixos Direcionais.</p>\r\n<p>&nbsp;</p>\r\n<p>&Eacute; constru&iacute;da em a&ccedil;o laminado com dias carreiras de esferas de a&ccedil;o cromo, sendo uma carreira de esferas para apoio, de di&acirc;metro 5/8", e outra, com esferas para a guia, de di&acirc;metro 1/2", conferindo ao produto &oacute;tima funcionalidade e grande durabilidade.</p>\r\n<p>A qualidade e efici&ecirc;ncia dos produtos Silpa &eacute; fator de destaque, resultando em maior seguran&ccedil;a e produtividade ao usu&aacute;rio.</p>', '', '<p>&nbsp;</p>\r\n<p><strong>Arquivos para Download:</strong></p>\r\n<p>&nbsp;</p>\r\n<p>- <a href="../uploads/produtos/componentes/Rala%203%20Carreiras%20de%20Esferas.JPG" target="_blank">Rala 3 carreiras</a></p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>', 'produtos', 'componentes', '2013-06-27 14:36:23', '176', NULL),
(76, '1870120000.JPG', '', 'Engate Automático', '<p>Engate Autom&aacute;tico SILPA para aplica&ccedil;&otilde;es em reboques, semirreboques e combina&ccedil;&otilde;es. Uso rodovi&aacute;rio ou canavieiro e florestal.</p>', '', '', 'produtos', 'componentes', '2013-06-27 16:15:56', '288', NULL),
(77, 'Ponteira Giratoria.JPG', '', 'Ponteira Giratória', '<p>Sistema desenvolvido para maior absor&ccedil;&atilde;o de impactos e consequentemente maior vida &uacute;til do equipamento e seus componentes.</p>', '', '', 'produtos', 'componentes', '2013-06-27 16:40:12', '130', NULL),
(78, 'Suspensores.jpg', '', 'Suspensores', '<p>O suspensor pneum&aacute;tico tem como sua principal fun&ccedil;&atilde;o suspender o eixo<br />quando o veiculo estiver sem carga, aumentando a vida &uacute;til dos pneus,&nbsp;rolamentos e suspens&atilde;o.</p>\r\n<p><object id="3be8caf8-d8db-a683-7948-cba0f9ad93bc" width="0" height="0" type="application/gas-events-abn"></object></p>', '', '<p><span style="text-decoration: underline;"><span style="font-size: large;"><a title="Suspensores Silpa" onclick="showCarga();" href="../uploads/produtos/componentes/suspensores.pdf" target="_blank">Clique aqui para saber tudo sobre os suspensores Silpa</a></span></span></p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p><object id="288b7b1b-09e8-a185-1a98-2ab1ea98b882" width="0" height="0" type="application/gas-events-abn"></object></p>', 'produtos', 'componentes', '2013-07-05 18:04:13', '157', NULL),
(79, 'calcodemola.jpg', '', 'Caminhoneiros adulteram a suspensão dos veículos', '<p><iframe src="http://player.r7.com/video/i/521410bc0cf25a7d43ff8cf0?layout=wide252p" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" width="448" height="315"></iframe></p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p></p>\r\n<p><object id="498af84a-998a-a286-6b9a-ea819b93858d" width="0" height="0" type="application/gas-events-abn"></object></p>', '', '<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p></p>\r\n<p><object id="79ea08a8-28d9-8da5-5a7b-0b85ba96b680" width="0" height="0" type="application/gas-events-abn"></object></p>', 'noticias', '-1', '2013-09-10 00:00:00', '103', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `silpa_repre`
--

CREATE TABLE IF NOT EXISTS `silpa_repre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `representada` text,
  `contato` text,
  `email` text,
  `telefone` text,
  `estado` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Extraindo dados da tabela `silpa_repre`
--

INSERT INTO `silpa_repre` (`id`, `representada`, `contato`, `email`, `telefone`, `estado`) VALUES
(1, 'ROSSATTO REPRESENTAÇÕES', 'Itamar', 'rossatto1@bol.com.br', '49-3344.0668', 'pr'),
(2, 'SUPREMA REPRESENTAÇÕES', 'IRIS', 'supremavendas@ig.com.br', '62-3295.1001', 'to'),
(4, 'CLAYTON PERES REPRESENTAÇÕES', 'CARLOS TRIVELI', 'clayrep@terra.com.br', '92-3673.7640', 'am'),
(5, 'SILPA PEÇAS E EQUIPAMENTOS LTDA', 'DEPTO VENDAS', 'silpa@silpa.com.br', '54-2101.1333', 'rr'),
(7, 'SILPA PEÇAS E EQUIPAMENTOS LTDA', 'DEPTO VENDAS', 'silpa@silpa.com.br', '54-2101.1333', 'ap'),
(8, 'CLAYTON PERES REPRESENTAÇÕES', 'CLAYTON', 'clayrep@terra.com.br', '67-3363.1937', 'ms'),
(9, 'SUPREMA REPRESENTAÇÕES', 'IRIS', 'supremavendas@ig.com.br', '62-3295.1001', 'go'),
(10, 'SUPREMA REPRESENTAÇÕES', 'IRIS', 'supremavendas@ig.com.br', '62-3295.1001', 'df'),
(11, 'DINAURO REPRESENTAÇÕES', 'NAURO', 'dinauro@terra.com.br', '65-3054.0496', 'mt'),
(12, 'NORDESUL REPRESENTAÇÕES', 'JAIR', 'nordesul@terra.com.br', '82-3325.8322', 'al'),
(13, 'LUBIAN REPRESENTAÇÕES', 'FRANCISCO', 'lubianrepresentacoes@veloxmail.com.br', '75-3623.2261', 'ba'),
(16, 'SILPA PEÇAS E EQUIPAMENTOS LTDA', 'DEPTO VENDAS', 'silpa@silpa.com.br', '54-2101.1333', 'pb'),
(20, 'LUBIAN REPRESENTAÇÕES', 'FRANCISCO', 'lubianrepresentacoes@veloxmail.com.br', '75-3623.2261', 'se'),
(21, 'NEWTON BRAZ REPRESENTAÇÕES - REGIÃO ACIMA DO TIETÊ', 'NETO/DANIEL', 'nbraz@linkway.com.br', '19-3571.3418', 'sp'),
(22, 'RESOL REPRESENTAÇÕES - REGIÃO ABAIXO DO TIETÊ', 'SERGIO', 'resolrepre@uol.com.br', '14-3326.3666', 'sp'),
(23, 'BECAR REPRESENTAÇÕES - GRANDE SÃO PAULO', 'PEDRO', 'rbecar@terra.com.br', '11-2954.8311', 'sp'),
(24, 'PGA REPRESENTAÇÕES', 'PEDRO GURGEL', 'pgario@terra.com.br', '21-2442.6955', 'rj'),
(25, 'MONJARDIM REPRESENTAÇÕES', 'MONJA', 'jmonjardim@uol.com.br', '27-3314.1896', 'es'),
(26, 'ANCAP COMERCIO E REPRES. - BELO HORIZONTE', 'ANTONIO', 'ancaprep@superig.com.br', '31-3595.7426', 'mg'),
(27, 'MH REPRESENTAÇÕES - UBERLÂNDIA', 'MOACIR', 'mh@mhrepres.com.br', '34-3215.2633', 'mg'),
(28, 'DANCAR REPRESENTAÇÕES - RIO BAHIA', 'DANILO', 'dancar@veloxmail.com.br', '32-3216.2633', 'mg'),
(29, 'APA AFONSO REPRESENTAÇÕES - INTERIOR DO ESTADO', 'RONALDO', 'afonsorep@brturbo.com.br', '54-3228.2044', 'rs'),
(30, 'DEBIASI REPRESENTAÇÕES - CAPITAL E REGIÃO LITORÂNEA', 'FERNANDO', 'fernandode.biasi@uol.com.br', '54-3221.0691 E 54-9113.3194', 'rs'),
(31, 'JOTER REPRESENTAÇÕES', 'JOÃO', 'joter@terra.com.br', '(54)35384394 ou (54)35384396', 'sc'),
(32, 'LEMAY REPRESENTAÇÕES - CAPITAL DO ESTADO', 'ADILSON', 'lemay@lemay.com.br', '41-36680511', 'pr'),
(34, 'LIBERATO COM E REPRES. - NORTE DO ESTADO', 'LIBERATO', 'liberatocom@gmail.com.br', '43-3336.5636', 'pr'),
(35, 'ADRYERE COMERCIO E REPRESENTAÇÕES - REGIÃO SANTOS', 'ERENILDO E ADRIANA', 'adryere@hotmail.com', '13-2202.8409 ou 13-9738-0331', 'sp'),
(37, 'SILPA PEÇAS E EQUIPAMENTOS', 'SETOR DE VENDAS', 'silpa@silpa.com.br', '54-2101.1333', 'pa'),
(39, 'SILPA PEÇAS E EQUIPAMENTOS LTDA', 'DEPTO VENDAS', 'silpa@silpa.com.br', '54-2101.1333', 'pi'),
(41, 'SILPA PEÇAS E EQUIPAMENTOS LTDA', 'DEPTO VENDAS', 'silpa@silpa.com.br', '54-2101.1333', 'ro'),
(42, 'SILPA PEÇAS E EQUIPAMENTOS LTDA', 'DEPTO VENDAS', 'silpa@silpa.com.br', '54-2101.1333', 'pe'),
(43, 'SILPA PEÇAS E EQUIPAMENTOS LTDA', 'DEPTO VENDAS', 'silpa@silpa.com.br', '54-2101.1333', 'ac'),
(45, 'SILPA PEÇAS E EQUIPAMENTOS LTDA', 'DEPTO VENDAS', 'silpa@silpa.com.br', '54-2101.1333', 'rn'),
(46, 'SILPA PEÇAS E EQUIPAMENTOS LTDA', 'DEPTO VENDAS', 'silpa@silpa.com.br', '54-2101.1333', 'ce'),
(47, 'SILPA PEÇAS E EQUIPAMENTOS LTDA', 'DEPTO VENDAS', 'silpa@silpa.com.br', '54-2101.1333', 'ma');

-- --------------------------------------------------------

--
-- Estrutura da tabela `silpa_users`
--

CREATE TABLE IF NOT EXISTS `silpa_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` text,
  `senha` text,
  `setor` text,
  `email` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Extraindo dados da tabela `silpa_users`
--

INSERT INTO `silpa_users` (`id`, `usuario`, `senha`, `setor`, `email`) VALUES
(7, 'luan', '27ed2164624098f0f21fb8dd9ccb993b', NULL, NULL),
(8, 'cemin', 'cce088a6bb088844d8338060b4d1006e', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `silpa_usersmanuais`
--

CREATE TABLE IF NOT EXISTS `silpa_usersmanuais` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` text,
  `senha` text,
  `data` datetime DEFAULT NULL,
  `level` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=84 ;

--
-- Extraindo dados da tabela `silpa_usersmanuais`
--

INSERT INTO `silpa_usersmanuais` (`id`, `user`, `senha`, `data`, `level`) VALUES
(2, 'alves', '58637', '2013-01-30 16:20:24', 'eva'),
(3, 'trevo', '79656', '2013-01-30 16:20:24', 'eva'),
(4, 'automolas', '23123', '2013-01-30 16:20:24', 'eva'),
(5, 'coradassi', '00308', '2013-01-30 16:20:25', 'eva'),
(6, 'adonir', '05734', '2013-01-30 16:20:25', 'eva'),
(7, 'bmb', '04532', '2013-01-30 16:20:25', 'eva'),
(9, 'truck', '05881', '2013-01-30 16:20:25', 'eva'),
(10, 'piriquito', '83493', '2013-01-30 16:20:26', 'eva'),
(11, 'manos', '81856', '2013-01-30 16:20:26', 'eva'),
(12, 'dalla', '09185', '2013-01-30 16:20:26', 'eva'),
(13, 'canali', '03707', '2013-01-30 16:20:26', 'eva'),
(14, 'fapeva', '85159', '2013-01-30 16:20:27', 'eva'),
(15, 'carropel', '11584', '2013-01-30 16:20:27', 'eva'),
(16, 'florestal', '05102', '2013-01-30 16:20:27', 'eva'),
(17, 'frandal', '07994', '2013-01-30 16:20:27', 'eva'),
(18, 'freiosul', '03176', '2013-01-30 16:20:27', 'eva'),
(19, 'froncek', '94546', '2013-01-30 16:20:28', 'eva'),
(20, 'cascavel', '75962', '2013-01-30 16:20:28', 'eva'),
(21, 'hass', '13176', '2013-01-30 16:20:28', 'eva'),
(22, 'incchol', '63869', '2013-01-30 16:20:28', 'eva'),
(23, 'campo', '78385', '2013-01-30 16:20:29', 'eva'),
(24, 'paulo', '06292', '2013-01-30 16:20:29', 'eva'),
(25, 'jardinox', '02286', '2013-01-30 16:20:29', 'eva'),
(26, 'fabris', '83662', '2013-01-30 16:20:29', 'eva'),
(27, 'conquista', '05653', '2013-01-30 16:20:30', 'eva'),
(28, 'juscelino', '04644', '2013-01-30 16:20:30', 'eva'),
(29, 'kronorte', '12599', '2013-01-30 16:20:31', 'eva'),
(30, 'kroville', '00863', '2013-01-30 16:20:48', 'eva'),
(31, 'librelato', '75274', '2013-01-30 16:20:48', 'eva'),
(33, 'santos', '11490', '2013-01-30 16:20:49', 'eva'),
(34, 'martins', '07049', '2013-01-30 16:20:49', 'eva'),
(35, 'mambrini', '29792', '2013-01-30 16:20:49', 'eva'),
(36, 'carrocerias', '00357', '2013-01-30 16:20:45', 'eva'),
(37, 'implementos', '10850', '2013-01-30 16:20:45', 'eva'),
(38, 'mecasol', '05880', '2013-01-30 16:20:45', 'eva'),
(39, 'mecanicasg', '02894', '2013-01-30 16:20:44', 'eva'),
(40, 'modessa', '73282', '2013-01-30 16:20:44', 'eva'),
(41, 'newtrucks', '67737', '2013-01-30 16:20:44', 'eva'),
(42, 'pavcomercio', '01698', '2013-01-30 16:20:44', 'eva'),
(43, 'zanella', '81623', '2013-01-30 16:20:44', 'eva'),
(44, 'perim', '51195', '2013-01-30 16:20:43', 'eva'),
(45, 'picetti', '02886', '2013-01-30 16:20:43', 'eva'),
(46, 'santacruz', '04133', '2013-01-30 16:20:43', 'eva'),
(47, 'real', '07116', '2013-01-30 16:20:43', 'eva'),
(48, 'rodima', '79522', '2013-01-30 16:20:42', 'eva'),
(49, 'rodofort', '07393', '2013-01-30 16:20:42', 'eva'),
(50, 'rodotruck', '81101', '2013-01-30 16:20:42', 'eva'),
(51, 'rossetti', '59884', '2013-01-30 16:20:42', 'eva'),
(52, 'sbabo', '00727', '2013-01-30 16:20:42', 'eva'),
(53, 'revesul', '13392', '2013-01-30 16:20:41', 'eva'),
(54, 'bussolo', '08884', '2013-01-30 16:20:41', 'eva'),
(55, 'truckfer', '81619', '2013-01-30 16:20:41', 'eva'),
(56, 'vermoehlen', '84983', '2013-01-30 16:20:41', 'eva'),
(57, 'zambon', '02839', '2013-01-30 16:20:41', 'eva'),
(58, 'implementos', '04149', '2013-01-30 16:20:40', 'eva'),
(60, 'librevel', '14598', NULL, 'eva'),
(62, 'bertolinieva', '84498', NULL, 'eva'),
(63, 'bertolinidif', '84498', NULL, 'dif'),
(64, 'jltruck', '04644', NULL, 'eva'),
(65, 'luan', 'trunks', NULL, 'dif'),
(66, 'rodotruckdif', '81101', NULL, 'dif'),
(67, 'martinsdif', '07049', NULL, 'dif'),
(68, 'carretruck', '10544', NULL, 'dif'),
(69, 'bussolodif', '08884', NULL, 'dif'),
(71, 'krovilledif', '00863', NULL, 'dif'),
(72, 'centraldif', '06004', NULL, 'dif'),
(73, 'mjdif', '00357', NULL, 'dif'),
(74, 'rodovaledif', '90341', NULL, 'dif'),
(75, 'froncekdif', '94546', NULL, 'dif'),
(76, 'dalladif', '09185', NULL, 'dif'),
(78, 'supertruckeva', '08920', NULL, 'eva'),
(79, 'lfcentraleva', '12510', NULL, 'eva'),
(80, 'interno', 'interno', NULL, 'eva'),
(81, 'lfcentraldif', '12510', NULL, 'dif'),
(82, 'rodocardif', '01614', NULL, 'dif'),
(83, 'rodocareva', '01614', NULL, 'eva');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
