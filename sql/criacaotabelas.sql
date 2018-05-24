-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 25-Maio-2018 às 01:37
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
(44, 'Marcel Marques', 'marcmatias@me.com', 'M', '1999-12-23', 58075820, 'Torre', 'Etelvina Macedo', 'PB', 'João Pessoa', '83', 'Apto 16'),
(45, 'Aníbal Medeiros', 'anibal@gmail.com', 'M', '1988-12-23', 58075820, 'Bancários', 'Rua Teste', 'PB', 'João Pessoa', '33', 'Test'),
(46, 'José Victor', 'jvictor@gmail.com', 'M', '1999-02-22', 58070987, 'Geisel', 'Rua Testando Rua', 'PB', 'João Pessoa', '33', 'Test'),
(47, 'Bruna Araújo', 'brunaa@gmail.com', 'F', '1999-12-21', 990088, 'Valentina', 'Rua Testando Rua Test', 'PB', 'João Pessoa', '88', 'Testando');

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
(44, 40, '8332316261'),
(44, 41, '83994441500'),
(44, 42, '8332437029'),
(45, 43, '8332375667'),
(45, 44, '83995551465'),
(46, 45, '8435565253'),
(47, 46, '8332798878'),
(47, 47, '83995461223');

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
  MODIFY `idcontato` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `telefone`
--
ALTER TABLE `telefone`
  MODIFY `idtelefone` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `telefone`
--
ALTER TABLE `telefone`
  ADD CONSTRAINT `telefone_ibfk_1` FOREIGN KEY (`idcontato`) REFERENCES `contato` (`idcontato`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
