-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05-Mar-2020 às 20:48
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
-- Estrutura da tabela `cursos`
--

CREATE TABLE `cursos` (
  `curso_id` bigint(20) NOT NULL,
  `curso_nome` varchar(255) NOT NULL,
  `curso_descricao` text NOT NULL,
  `curso_descricao_curta` varchar(255) NOT NULL,
  `curso_valor` varchar(255) NOT NULL,
  `curso_thumb` varchar(255) NOT NULL,
  `curso_duracao` varchar(255) NOT NULL,
  `curso_status` int(11) NOT NULL,
  `unidade_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cursos`
--

INSERT INTO `cursos` (`curso_id`, `curso_nome`, `curso_descricao`, `curso_descricao_curta`, `curso_valor`, `curso_thumb`, `curso_duracao`, `curso_status`, `unidade_id`) VALUES
(3, 'Open CG2', '<p>d2</p>', 'd1', '1.111,11', 'http://127.0.0.1:8000/assets/img/cursos/thumbs/conversando_1582129893.jpg', '1 ano', 1, 3),
(5, 'Cinema 4D', '<p>dsa</p>', 'asd', '10,00', 'http://127.0.0.1:8000/assets/img/cursos/thumbs/box_1582830167.png', '1 ano', 1, 5);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`curso_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cursos`
--
ALTER TABLE `cursos`
  MODIFY `curso_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
