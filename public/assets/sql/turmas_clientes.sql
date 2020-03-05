-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05-Mar-2020 às 20:49
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `unifp`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `turmas_clientes`
--

CREATE TABLE `turmas_clientes` (
  `turma_cliente_id` bigint(20) NOT NULL,
  `turma_cliente_data` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `turma_id` bigint(20) NOT NULL,
  `cliente_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `turmas_clientes`
--

INSERT INTO `turmas_clientes` (`turma_cliente_id`, `turma_cliente_data`, `turma_id`, `cliente_id`) VALUES
(50, '2020-03-04 16:15:17', 4, 18715),
(51, '2020-03-04 16:15:17', 4, 19451),
(52, '2020-03-04 16:15:17', 4, 19642);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `turmas_clientes`
--
ALTER TABLE `turmas_clientes`
  ADD PRIMARY KEY (`turma_cliente_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `turmas_clientes`
--
ALTER TABLE `turmas_clientes`
  MODIFY `turma_cliente_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
