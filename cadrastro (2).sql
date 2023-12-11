-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11-Dez-2023 às 14:33
-- Versão do servidor: 10.4.28-MariaDB
-- versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cadrastro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `adubos`
--

CREATE TABLE `adubos` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `marca` varchar(255) NOT NULL,
  `embalagem` varchar(255) NOT NULL,
  `descricao` text NOT NULL,
  `imagem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `inseticidas`
--

CREATE TABLE `inseticidas` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `marca` varchar(255) NOT NULL,
  `quantidade` varchar(255) NOT NULL,
  `descricao` text NOT NULL,
  `imagem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `maquinarios`
--

CREATE TABLE `maquinarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `marca` varchar(255) NOT NULL,
  `modelo` varchar(255) NOT NULL,
  `ano` int(11) NOT NULL,
  `potencia` int(11) NOT NULL,
  `descricao` text NOT NULL,
  `imagem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Extraindo dados da tabela `maquinarios`
--

INSERT INTO `maquinarios` (`id`, `nome`, `tipo`, `marca`, `modelo`, `ano`, `potencia`, `descricao`, `imagem`) VALUES
(15, 'VALMET', 'Colheita', 'josh', '613', 2015, 200, 'bom estado', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `outros`
--

CREATE TABLE `outros` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `marca` varchar(255) NOT NULL,
  `peso` decimal(10,2) NOT NULL,
  `descricao` text NOT NULL,
  `imagem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `safras`
--

CREATE TABLE `safras` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `qualidade` int(11) NOT NULL,
  `peso` decimal(10,2) NOT NULL,
  `plantio` date NOT NULL,
  `colheita` date NOT NULL,
  `descricao` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `sementes`
--

CREATE TABLE `sementes` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `marca` varchar(255) NOT NULL,
  `embalagem` varchar(255) NOT NULL,
  `descricao` text NOT NULL,
  `imagem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `adubos`
--
ALTER TABLE `adubos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `inseticidas`
--
ALTER TABLE `inseticidas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `maquinarios`
--
ALTER TABLE `maquinarios`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `outros`
--
ALTER TABLE `outros`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `safras`
--
ALTER TABLE `safras`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `sementes`
--
ALTER TABLE `sementes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `adubos`
--
ALTER TABLE `adubos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de tabela `inseticidas`
--
ALTER TABLE `inseticidas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `maquinarios`
--
ALTER TABLE `maquinarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `outros`
--
ALTER TABLE `outros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `safras`
--
ALTER TABLE `safras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `sementes`
--
ALTER TABLE `sementes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
