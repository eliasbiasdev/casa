-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 20-Nov-2021 às 16:11
-- Versão do servidor: 8.0.21
-- versão do PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `celke`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `senha` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `created`, `modified`) VALUES
(1, 'Cesar', 'cesar@celke.com.br', '123456', '2021-11-23 12:20:07', NULL),
(2, 'Kelly', 'kelly@celke.com.br', '123456', '2021-11-23 12:20:07', '2021-11-27 12:32:02'),
(3, 'Jessica', 'jessica@celke.com.br', '123456', '2021-11-23 12:20:51', NULL),
(4, 'Marcos', 'marcos@celke.com.br', '123456', '2021-11-23 12:20:07', NULL),
(5, 'Cesar1', 'cesar1@celke.com.br', '123456', '2021-11-23 12:20:07', NULL),
(6, 'Jessica1', 'jessica1@celke.com.br', '123456', '2021-11-23 12:20:07', NULL),
(7, 'Marcos1', 'marcos1@celke.com.br', '123456', '2021-11-23 12:20:07', NULL),
(8, 'Cesar2', 'cesar2@celke.com.br', '123456', '2021-11-23 12:20:07', NULL),
(9, 'Jessica2', 'jessica2@celke.com.br', '123456', '2021-11-23 12:20:07', NULL),
(10, 'Marcos2', 'marcos2@celke.com.br', '123456', '2021-11-23 12:20:07', NULL),
(11, 'Cesar3', 'cesar3@celke.com.br', '123456', '2021-11-23 12:20:07', NULL),
(12, 'Jessica3', 'jessica3@celke.com.br', '123456', '2021-11-23 12:20:07', NULL),
(13, 'Marcos3', 'marcos3@celke.com.br', '123456', '2021-11-23 12:20:07', NULL),
(14, 'Cesar4', 'cesar4@celke.com.br', '123456', '2021-11-23 12:20:07', NULL),
(15, 'Jessica4', 'jessica4@celke.com.br', '123456', '2021-11-23 12:20:07', NULL),
(16, 'Marcos4', 'marcos4@celke.com.br', '123456', '2021-11-23 12:20:07', NULL),
(17, 'Cesar5', 'cesar5@celke.com.br', '123456', '2021-11-23 12:20:07', NULL),
(18, 'Jessica5', 'jessica5@celke.com.br', '123456', '2021-11-23 12:20:07', NULL),
(19, 'Marcos5', 'marcos5@celke.com.br', '123456', '2021-11-23 12:20:07', NULL),
(20, 'Cesar6', 'cesar6@celke.com.br', '123456', '2021-11-23 12:20:07', NULL),
(21, 'Jessica6', 'jessica6@celke.com.br', '123456', '2021-11-23 12:20:07', NULL),
(22, 'Marcos6', 'marcos6@celke.com.br', '123456', '2021-11-23 12:20:07', NULL),
(23, 'Cesar7', 'cesar7@celke.com.br', '123456', '2021-11-23 12:20:07', NULL),
(24, 'Jessica7', 'jessica7@celke.com.br', '123456', '2021-11-23 12:20:07', NULL),
(25, 'Marcos7', 'marcos7@celke.com.br', '123456', '2021-11-23 12:20:07', NULL),
(26, 'Cesar8', 'cesar8@celke.com.br', '123456', '2021-11-23 12:20:07', NULL),
(27, 'Jessica8', 'jessica8@celke.com.br', '123456', '2021-11-23 12:20:07', NULL),
(28, 'Marcos8', 'marcos8@celke.com.br', '123456', '2021-11-23 12:20:07', NULL),
(29, 'Cesar9', 'cesar9@celke.com.br', '123456', '2021-11-23 12:20:07', NULL),
(30, 'Jessica9', 'jessica9@celke.com.br', '123456', '2021-11-23 12:20:07', NULL),
(31, 'Marcos9', 'marcos9@celke.com.br', '123456', '2021-11-23 12:20:07', NULL),
(32, 'Cesar10', 'cesar10@celke.com.br', '123456', '2021-11-23 12:20:07', NULL),
(33, 'Jessica10', 'jessica10@celke.com.br', '123456', '2021-11-23 12:20:07', NULL),
(34, 'Marcos10', 'marcos10@celke.com.br', '123456', '2021-11-23 12:20:07', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
