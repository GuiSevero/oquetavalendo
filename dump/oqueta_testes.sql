-- phpMyAdmin SQL Dump
-- version 3.4.11.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 27/11/2012 às 23:36:02
-- Versão do Servidor: 5.1.65
-- Versão do PHP: 5.2.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `oqueta_testes`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `COMMENT`
--

CREATE TABLE IF NOT EXISTS `COMMENT` (
  `id_comment` int(255) NOT NULL,
  `id_user` int(255) NOT NULL,
  `id_event` int(255) NOT NULL,
  `text` varchar(255) DEFAULT NULL,
  `rating` int(1) DEFAULT NULL,
  PRIMARY KEY (`id_comment`,`id_user`,`id_event`),
  KEY `id_user` (`id_user`),
  KEY `id_event` (`id_event`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `EVENT`
--

CREATE TABLE IF NOT EXISTS `EVENT` (
  `id_event` int(255) NOT NULL AUTO_INCREMENT,
  `numberGirls` int(20) DEFAULT NULL,
  `numberMen` int(20) DEFAULT NULL,
  `description` text,
  `id_place` int(255) NOT NULL,
  `date_time` datetime DEFAULT NULL,
  `priceMan` float(20,0) DEFAULT NULL,
  `priceGirl` float(20,0) DEFAULT NULL,
  `consumableMan` float(20,0) DEFAULT NULL,
  `consumableGirl` float(20,0) DEFAULT NULL,
  `priority` int(1) DEFAULT NULL,
  `type` int(20) NOT NULL,
  `title` varchar(45) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_event`),
  KEY `type` (`type`),
  KEY `id_place` (`id_place`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `EVENT`
--

INSERT INTO `EVENT` (`id_event`, `numberGirls`, `numberMen`, `description`, `id_place`, `date_time`, `priceMan`, `priceGirl`, `consumableMan`, `consumableGirl`, `priority`, `type`, `title`, `image`) VALUES
(1, 10, 200, 'O Rock Morreu? Não Aqui! Pra nós ele está mais vivo que nunca. Aqui o que não faltará são os clássicos, as músicas pra você fazer uma roda punk,aquelas pra fazer você cantar a plenos pulmões, e as pra dançar enlouquecidamente. Agora com edições na terça-feira.', 1, '2012-11-28 23:55:00', 20, 15, NULL, NULL, 1, 1, 'Rock Não Morreu', 'http://www.beco203.com.br/resources/conteudos/imagens/agenda/big/1353878386.jpg'),
(2, 10, 20, 'Quarta-feira (28/11), tem a FUCK REHAB - Especial FUN! Com OPEN BAR (Vodka, Uísque, Cerveja & Refri) durante toda a noite!', 1, '2012-11-28 23:55:00', 20, 10, NULL, NULL, 0, 1, 'Fuck Rehab', 'http://www.beco203.com.br/resources/conteudos/imagens/agenda/big/1353615252.jpg'),
(3, 10, 20, 'No dia 29/11, três bandas, que representam a Medicina da UFRGS, irão quebrar tudo no primeiro Red Bull My First Show de Porto Alegre. O palco escolhido para essa grande noite foi o Beco203.', 1, '2012-11-29 23:55:00', 20, 10, NULL, NULL, 0, 1, 'RedBull My First Show', 'http://www.beco203.com.br/resources/conteudos/imagens/agenda/big/1353702749.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `EVENT_TYPE`
--

CREATE TABLE IF NOT EXISTS `EVENT_TYPE` (
  `id_type` int(20) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id_type`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `EVENT_TYPE`
--

INSERT INTO `EVENT_TYPE` (`id_type`, `description`) VALUES
(1, 'Festa'),
(2, 'Rave'),
(3, 'Show'),
(4, 'Formatura');

-- --------------------------------------------------------

--
-- Estrutura da tabela `FUNCTIONS`
--

CREATE TABLE IF NOT EXISTS `FUNCTIONS` (
  `id_function` int(2) NOT NULL,
  `description` text,
  PRIMARY KEY (`id_function`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `FUNCTIONS`
--

INSERT INTO `FUNCTIONS` (`id_function`, `description`) VALUES
(1, 'Usuário não-logado'),
(2, 'Usuário logado'),
(3, 'Admin');

-- --------------------------------------------------------

--
-- Estrutura da tabela `PLACES`
--

CREATE TABLE IF NOT EXISTS `PLACES` (
  `id_place` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `cordX` float(5,0) DEFAULT NULL,
  `cordY` float(5,0) DEFAULT NULL,
  `address` text,
  `number` int(5) DEFAULT NULL,
  `secondNumber` int(5) DEFAULT NULL,
  `phone` int(10) DEFAULT NULL,
  `mail` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_place`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `PLACES`
--

INSERT INTO `PLACES` (`id_place`, `name`, `cordX`, `cordY`, `address`, `number`, `secondNumber`, `phone`, `mail`) VALUES
(1, 'Beco203', 10, 10, 'Av. Independência', 936, NULL, 2147483647, 'NULL'),
(2, 'teste', 1, 1, 'd', 2, 3, 2, 'sss@sss.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `USER`
--

CREATE TABLE IF NOT EXISTS `USER` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `password` varchar(8) NOT NULL,
  `age` int(2) DEFAULT NULL,
  `gender` varchar(1) DEFAULT NULL,
  `accessToken` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `USER`
--

INSERT INTO `USER` (`id`, `name`, `password`, `age`, `gender`, `accessToken`, `photo`, `email`) VALUES
(1, 'Diogo Costa', 'souzague', 20, 'M', NULL, NULL, 'diogocosta@bemdeboa.com.br'),
(2, 'Andre Show', 'ousadiaa', 22, 'M', NULL, NULL, 'angonluz@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `USER_EVENT`
--

CREATE TABLE IF NOT EXISTS `USER_EVENT` (
  `id_user` int(255) NOT NULL,
  `id_event` int(255) NOT NULL,
  PRIMARY KEY (`id_user`,`id_event`),
  KEY `id_event` (`id_event`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `USER_FUNCTION`
--

CREATE TABLE IF NOT EXISTS `USER_FUNCTION` (
  `id_userFunction` int(255) NOT NULL,
  `function` int(2) NOT NULL,
  PRIMARY KEY (`id_userFunction`),
  KEY `function` (`function`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Restrições para as tabelas dumpadas
--

--
-- Restrições para a tabela `COMMENT`
--
ALTER TABLE `COMMENT`
  ADD CONSTRAINT `COMMENT_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `USER` (`id`),
  ADD CONSTRAINT `COMMENT_ibfk_2` FOREIGN KEY (`id_event`) REFERENCES `EVENT` (`id_event`);

--
-- Restrições para a tabela `EVENT`
--
ALTER TABLE `EVENT`
  ADD CONSTRAINT `EVENT_ibfk_1` FOREIGN KEY (`type`) REFERENCES `EVENT_TYPE` (`id_type`),
  ADD CONSTRAINT `EVENT_ibfk_2` FOREIGN KEY (`id_place`) REFERENCES `PLACES` (`id_place`);

--
-- Restrições para a tabela `USER_EVENT`
--
ALTER TABLE `USER_EVENT`
  ADD CONSTRAINT `USER_EVENT_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `USER` (`id`),
  ADD CONSTRAINT `USER_EVENT_ibfk_2` FOREIGN KEY (`id_event`) REFERENCES `EVENT` (`id_event`);

--
-- Restrições para a tabela `USER_FUNCTION`
--
ALTER TABLE `USER_FUNCTION`
  ADD CONSTRAINT `USER_FUNCTION_ibfk_1` FOREIGN KEY (`function`) REFERENCES `FUNCTIONS` (`id_function`),
  ADD CONSTRAINT `USER_FUNCTION_ibfk_2` FOREIGN KEY (`id_userFunction`) REFERENCES `USER` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
