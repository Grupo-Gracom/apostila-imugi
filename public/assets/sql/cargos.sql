-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05-Mar-2020 às 20:47
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
-- Estrutura da tabela `cargos`
--

CREATE TABLE `cargos` (
  `cargo_id` bigint(20) NOT NULL,
  `cargo_nome` varchar(255) NOT NULL,
  `cargo_menus` varchar(255) NOT NULL,
  `cargo_status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cargos`
--

INSERT INTO `cargos` (`cargo_id`, `cargo_nome`, `cargo_menus`, `cargo_status`) VALUES
(1, 'Web designer', '[\"1\",\"2\",\"2-1\",\"3\",\"3-1\"]', 1),
(2, 'Administrador', '[\"1\",\"2\",\"2-1\",\"2-2\",\"2-3\",\"3\",\"3-1\",\"3-2\",\"3-3\",\"3-4\",\"3-5\",\"3-6\"]', 1),
(15, 'Professor', '[\"1\",\"2\",\"2-1\",\"2-2\",\"2-3\"]', 1),
(17, 'Coordenador', '[\"1\",\"2\",\"2-1\",\"2-2\",\"2-3\",\"3\",\"3-2\",\"3-6\"]', 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cargos`
--
ALTER TABLE `cargos`
  ADD PRIMARY KEY (`cargo_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cargos`
--
ALTER TABLE `cargos`
  MODIFY `cargo_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
