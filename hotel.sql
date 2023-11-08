-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 08/11/2023 às 15:36
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `hotel`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `hospede`
--

CREATE TABLE `hospede` (
  `cod_hospede` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `sobrenome` varchar(30) DEFAULT NULL,
  `CPF` varchar(11) NOT NULL,
  `dt_nasc` date NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `cidade` varchar(30) NOT NULL,
  `estado` varchar(2) NOT NULL,
  `CEP` varchar(8) NOT NULL,
  `email` varchar(25) NOT NULL,
  `senha` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `reserva`
--

CREATE TABLE `reserva` (
  `cod_hospede_fk` int(11) NOT NULL,
  `cod_reserva_pk` int(11) NOT NULL,
  `dt_entrada` date NOT NULL,
  `dt_saida` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `hospede`
--
ALTER TABLE `hospede`
  ADD PRIMARY KEY (`cod_hospede`),
  ADD UNIQUE KEY `rg_uk` (`CPF`);

--
-- Índices de tabela `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`cod_reserva_pk`),
  ADD KEY `cod_hospede_fk` (`cod_hospede_fk`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `hospede`
--
ALTER TABLE `hospede`
  MODIFY `cod_hospede` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `reserva`
--
ALTER TABLE `reserva`
  MODIFY `cod_reserva_pk` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `reserva`
--
ALTER TABLE `reserva`
  ADD CONSTRAINT `cod_hospede_fk` FOREIGN KEY (`cod_hospede_fk`) REFERENCES `hospede` (`cod_hospede`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
