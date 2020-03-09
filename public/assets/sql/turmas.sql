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
-- Estrutura da tabela `turmas`
--

CREATE TABLE `turmas` (
  `turma_id` bigint(20) NOT NULL,
  `turma_nome` varchar(255) NOT NULL,
  `turma_descricao` text NOT NULL,
  `turma_foto` varchar(255) DEFAULT NULL,
  `turma_capa` varchar(255) DEFAULT NULL,
  `turma_vagas` int(11) NOT NULL DEFAULT 0,
  `turma_periodo` varchar(10) NOT NULL,
  `turma_data` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `turma_data_inicio` date DEFAULT NULL,
  `turma_data_fim` date DEFAULT NULL,
  `turma_status` int(10) NOT NULL,
  `curso_id` bigint(20) NOT NULL,
  `horario_id` bigint(20) NOT NULL,
  `professor_id` bigint(20) NOT NULL,
  `unidade_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `turmas`
--

INSERT INTO `turmas` (`turma_id`, `turma_nome`, `turma_descricao`, `turma_foto`, `turma_capa`, `turma_vagas`, `turma_periodo`, `turma_data`, `turma_data_inicio`, `turma_data_fim`, `turma_status`, `curso_id`, `horario_id`, `professor_id`, `unidade_id`) VALUES
(4, '4603g2', '<p>123</p>', 'http://127.0.0.1:8000/assets/img/turmas/perfis/box_1583262404.png', 'http://127.0.0.1:8000/assets/img/turmas/capas/box_1583262404.png', 3, 'Manhã', '2020-03-04 13:15:17', '2020-03-01', '2020-03-31', 1, 3, 1, 2, 5),
(5, '4602g2', '<p>a</p>', NULL, NULL, 0, 'Manhã', '2020-03-04 16:02:32', '2020-03-01', '2020-03-31', 1, 5, 1, 2, 5);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `turmas`
--
ALTER TABLE `turmas`
  ADD PRIMARY KEY (`turma_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `turmas`
--
ALTER TABLE `turmas`
  MODIFY `turma_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
