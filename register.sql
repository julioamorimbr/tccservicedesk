-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 07/03/2023 às 00:13
-- Versão do servidor: 10.4.21-MariaDB
-- Versão do PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `register`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `trn_date` datetime NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `sobrenome` varchar(50) DEFAULT NULL,
  `empresa` varchar(50) DEFAULT NULL,
  `setor` varchar(50) DEFAULT NULL,
  `dtnasc` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `trn_date`, `nome`, `sobrenome`, `empresa`, `setor`, `dtnasc`) VALUES
(1, 'teste', 'jcamorim00@hotmail.com', '202cb962ac59075b964b07152d234b70', '2023-02-21 02:44:24', NULL, NULL, NULL, NULL, NULL),
(2, 'test2', 'teste@teste.com', '202cb962ac59075b964b07152d234b70', '2023-02-22 03:51:16', NULL, NULL, NULL, NULL, NULL),
(3, 'juamorim', 'jcamorim00@gmail.com', '202cb962ac59075b964b07152d234b70', '2023-03-06 23:56:48', 'Júlio César', 'de Amorim', 'Santinvest', 'TI', '2000-10-31'),
(4, 'juamorim', 'jcamorim00@gmail.com', '202cb962ac59075b964b07152d234b70', '2023-03-06 23:58:44', 'Júlio César', 'de Amorim', 'Santinvest', 'TI', '2000-10-31'),
(5, 'juamorim', 'jcamorim00@gmail.com', '202cb962ac59075b964b07152d234b70', '2023-03-06 23:59:16', 'Júlio César', 'de Amorim', 'Santinvest', 'TI', '2000-10-31'),
(6, 'juamorim', 'jcamorim00@gmail.com', '202cb962ac59075b964b07152d234b70', '2023-03-06 23:59:36', 'Júlio César', 'de Amorim', 'Santinvest', 'TI', '2000-10-31'),
(7, 'juamorim', 'jcamorim00@gmail.com', '202cb962ac59075b964b07152d234b70', '2023-03-07 00:00:12', 'Júlio César', 'de Amorim', 'Santinvest', 'TI', '2000-10-31'),
(8, 'juamorim', 'jcamorim00@gmail.com', '202cb962ac59075b964b07152d234b70', '2023-03-07 00:00:43', 'Júlio César', 'de Amorim', 'Santinvest', 'TI', '2000-10-31'),
(9, 'juamorim', 'jcamorim00@gmail.com', '202cb962ac59075b964b07152d234b70', '2023-03-07 00:00:53', 'Júlio César', 'de Amorim', 'Santinvest', 'TI', '2000-10-31'),
(10, 'juamorim', 'jcamorim00@gmail.com', '202cb962ac59075b964b07152d234b70', '2023-03-07 00:01:00', 'Júlio César', 'de Amorim', 'Santinvest', 'TI', '2000-10-31'),
(11, 'juamorim', 'jcamorim00@gmail.com', '202cb962ac59075b964b07152d234b70', '2023-03-07 00:01:07', 'Júlio César', 'de Amorim', 'Santinvest', 'TI', '2000-10-31'),
(12, 'juamorim', 'jcamorim00@gmail.com', '202cb962ac59075b964b07152d234b70', '2023-03-07 00:01:17', 'Júlio César', 'de Amorim', 'Santinvest', 'TI', '2000-10-31'),
(13, 'juamorim', 'jcamorim00@gmail.com', '202cb962ac59075b964b07152d234b70', '2023-03-07 00:01:25', 'Júlio César', 'de Amorim', 'Santinvest', 'TI', '2000-10-31'),
(14, 'juamorim', 'jcamorim00@gmail.com', '202cb962ac59075b964b07152d234b70', '2023-03-07 00:01:32', 'Júlio César', 'de Amorim', 'Santinvest', 'TI', '2000-10-31'),
(15, 'juamorim', 'jcamorim00@gmail.com', '202cb962ac59075b964b07152d234b70', '2023-03-07 00:01:49', 'Júlio César', 'de Amorim', 'Santinvest', 'TI', '2000-10-31'),
(16, 'juamorimffc', 'onstars2018@gmail.com', '202cb962ac59075b964b07152d234b70', '2023-03-07 00:05:08', 'Júlio César', 'de Amorim', 'Santinvest', 'TI', '2000-10-31');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
