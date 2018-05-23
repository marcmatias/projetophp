-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 23-Maio-2018 às 17:17
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
-- Database: `criacaotabelas`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

CREATE TABLE `contato` (
  `idcontato` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(64) DEFAULT NULL,
  `sexo` char(1) DEFAULT NULL,
  `nascimento` date DEFAULT NULL,
  `cep` int(11) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `logradouro` varchar(100) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `cidade` varchar(40) NOT NULL,
  `numero` varchar(6) NOT NULL,
  `complemento` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `contato`
--

INSERT INTO `contato` (`idcontato`, `nome`, `email`, `sexo`, `nascimento`, `cep`, `bairro`, `logradouro`, `estado`, `cidade`, `numero`, `complemento`) VALUES
(2, 'Marcel Marques', 'xl@me.com', 'M', '1900-01-01', 58070820, 'Torre', 'Etelvina Macedo', 'PB', 'João Pessoa', '630', 'Apto 101 A					');

-- --------------------------------------------------------

--
-- Estrutura da tabela `telefone`
--

CREATE TABLE `telefone` (
  `idcontato` int(11) NOT NULL,
  `idtelefone` bigint(20) UNSIGNED NOT NULL,
  `telefone` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `telefone`
--

INSERT INTO `telefone` (`idcontato`, `idtelefone`, `telefone`) VALUES
(2, 1, '121212121');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`idcontato`);

--
-- Indexes for table `telefone`
--
ALTER TABLE `telefone`
  ADD PRIMARY KEY (`idcontato`,`idtelefone`),
  ADD UNIQUE KEY `idtelefone` (`idtelefone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contato`
--
ALTER TABLE `contato`
  MODIFY `idcontato` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `telefone`
--
ALTER TABLE `telefone`
  MODIFY `idtelefone` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `telefone`
--
ALTER TABLE `telefone`
  ADD CONSTRAINT `telefone_ibfk_1` FOREIGN KEY (`idcontato`) REFERENCES `contato` (`idcontato`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
