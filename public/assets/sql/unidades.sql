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
-- Estrutura da tabela `unidades`
--

CREATE TABLE `unidades` (
  `unidade_id` bigint(20) NOT NULL,
  `unidade_nome` varchar(255) NOT NULL,
  `unidade_codigo` int(10) NOT NULL,
  `unidade_estado` varchar(255) NOT NULL,
  `unidade_data` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `unidade_franquia` int(10) NOT NULL,
  `unidade_status` int(10) NOT NULL,
  `empresa_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `unidades`
--

INSERT INTO `unidades` (`unidade_id`, `unidade_nome`, `unidade_codigo`, `unidade_estado`, `unidade_data`, `unidade_franquia`, `unidade_status`, `empresa_id`) VALUES
(1, 'Belém', 14, 'PA', '2020-02-28 14:21:28', 2, 1, 1),
(2, 'Brasília', 17, 'DF', '2020-02-28 14:21:32', 2, 1, 1),
(3, 'Cuiaba', 26, 'MT', '2020-02-28 16:41:24', 2, 1, 1),
(4, 'Feira de Santana', 9, 'BA', '2020-02-28 14:21:35', 2, 1, 1),
(5, 'Fortaleza Centro', 5, 'CE', '2020-02-28 14:21:38', 2, 1, 1),
(6, 'Goiânia', 15, 'GO', '2020-02-28 16:43:52', 2, 1, 1),
(7, 'Imugi Fortaleza', 36, 'CE', '2020-02-28 16:44:27', 2, 1, 2),
(8, 'Imugi Maceió', 41, 'AL', '2020-02-28 16:44:59', 2, 1, 2),
(9, 'Rio de Janeiro', 10, 'RJ', '2020-02-28 16:46:41', 2, 1, 1),
(10, 'Joinville', 24, 'SC', '2020-02-28 16:47:12', 2, 1, 1),
(11, 'Juazeiro', 13, 'CE', '2020-02-28 16:47:31', 2, 1, 1),
(12, 'Maceió', 18, 'AL', '2020-02-28 16:47:58', 2, 1, 1),
(13, 'Manaus', 6, 'AM', '2020-02-28 16:48:31', 2, 1, 1),
(14, 'Manaus Leste', 12, 'AM', '2020-02-28 16:48:52', 2, 1, 1),
(15, 'Natal', 8, 'RN', '2020-02-28 16:49:24', 2, 1, 1),
(16, 'Porto Alegre', 23, 'RS', '2020-02-28 16:49:46', 2, 1, 1),
(17, 'Jaboatão', 1, 'PE', '2020-02-28 16:50:23', 2, 1, 1),
(18, 'Salvador', 31, 'BA', '2020-02-28 16:50:40', 2, 1, 1),
(19, 'São Francisco', 11, 'MA', '2020-02-28 16:53:12', 2, 1, 1),
(20, 'São Luiz', 4, 'MA', '2020-02-28 17:22:24', 2, 1, 1),
(21, 'Teresina', 2, 'PI', '2020-02-28 17:22:39', 2, 1, 1),
(22, 'Uberlândia', 35, 'MG', '2020-02-28 17:23:07', 2, 1, 1),
(23, 'Fortaleza Sul', 3, 'CE', '2020-02-28 17:23:46', 2, 1, 1),
(24, 'Master', 0, 'SP', '2020-02-28 17:24:06', 2, 1, 1),
(25, 'Ituiutaba', 0, 'MG', '2020-02-28 17:25:04', 1, 1, 1),
(26, 'Campinas', 0, 'SP', '2020-02-28 17:25:35', 2, 1, 1),
(27, 'Salvador Iguatemi', 0, 'BA', '2020-02-28 17:26:19', 2, 1, 1),
(28, 'Salvador Centro', 0, 'BA', '2020-02-28 17:26:44', 2, 1, 1),
(29, 'Macaé', 0, 'RJ', '2020-02-28 17:27:06', 1, 1, 1),
(30, 'Boa Vista', 0, 'RR', '2020-02-28 17:28:03', 1, 1, 1),
(31, 'Florianópolis', 0, 'SC', '2020-02-28 17:28:48', 2, 1, 1),
(32, 'Rio de janeiro 2', 0, 'RJ', '2020-02-28 17:30:32', 2, 1, 1),
(33, 'Batista Campos', 0, 'PA', '2020-02-28 17:31:13', 2, 1, 1),
(34, 'Cascavel', 0, 'PA', '2020-02-28 17:33:10', 2, 1, 1),
(35, 'João Pessoa', 0, 'PE', '2020-02-28 17:33:42', 2, 1, 1),
(36, 'Nova Serrana', 0, 'MG', '2020-02-28 17:34:08', 1, 1, 1),
(37, 'C. A Jaboatão dos Guararapes', 0, 'PE', '2020-02-28 17:34:41', 1, 1, 1),
(38, 'FP Macapá', 0, 'AP', '2020-02-28 17:36:23', 1, 1, 13),
(39, 'Curitiba', 0, 'PR', '2020-02-28 17:36:48', 2, 1, 1),
(40, 'Sem unidade', 999, 'AC', '2020-02-28 19:56:26', 2, 1, 1),
(41, 'Unidade 60', 60, 'AC', '2020-02-28 21:37:36', 2, 1, 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `unidades`
--
ALTER TABLE `unidades`
  ADD PRIMARY KEY (`unidade_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `unidades`
--
ALTER TABLE `unidades`
  MODIFY `unidade_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
