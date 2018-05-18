-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 18-Maio-2018 às 05:03
-- Versão do servidor: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `catalogo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `contatos`
--

CREATE TABLE `contatos` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `sexo` char(1) NOT NULL,
  `nascimento` date DEFAULT NULL,
  `telefone` varchar(13) DEFAULT NULL,
  `logradouro` varchar(50) DEFAULT NULL,
  `log_numero` varchar(7) DEFAULT NULL,
  `bairro` varchar(30) DEFAULT NULL,
  `cidade` varchar(30) DEFAULT NULL,
  `estado` char(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `contatos`
--

INSERT INTO `contatos` (`id`, `email`, `nome`, `sexo`, `nascimento`, `telefone`, `logradouro`, `log_numero`, `bairro`, `cidade`, `estado`) VALUES
(4, 'marc@gmail.com', 'Marcel Marques', 'M', '1999-01-01', '(83)3231-6262', 'Rua Exemplo', '83', 'Geisel', 'Joao Pessoa', 'PB'),
(5, 'anibal@gmail.com', 'Aníbal Medeiros', 'M', '1998-03-02', '(83)3243-7171', 'Rua Exemplo 2', '23', 'Torre', 'João Pessoa', 'PB');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contatos`
--
ALTER TABLE `contatos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contatos`
--
ALTER TABLE `contatos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
