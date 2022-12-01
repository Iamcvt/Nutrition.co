-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01-Dez-2022 às 06:15
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `nutrition.co`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `nome` varchar(220) NOT NULL,
  `email` varchar(220) NOT NULL,
  `celular` varchar(50) NOT NULL,
  `feedback` varchar(6000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `feedback`
--

INSERT INTO `feedback` (`id`, `nome`, `email`, `celular`, `feedback`) VALUES
(23, 'Felipe Lopes Reis', 'felipe.reis@etec.sp.gov.br', '(11) 96512-2053', 'Amei o site muito intuitivo!'),
(24, 'Erika Heloisa Eloi', 'erika.eloi@etec.sp.gov.br', '(11) 96324-0236', 'Gostei muito da calculadora, muito boa mesmo!'),
(25, 'Adna Araujo Santos', 'adna.santos@etec.sp.gov.br', '(11) 98564-3265', 'Gostei muito das cores dos site. Todas as informações estão completas e estou totalmente satisfeita com o desempenho das páginas.'),
(26, 'Carlos Alberto ', 'carlos.alberto@etec.sp.gov.br', '(11) 95164-8016', 'Ótimo conteudo e calculadora.'),
(27, 'Camile Vitória lima Bessa', 'camile.bessa@etec.sp.gov.br', '(11) 98319-2404', 'Site incrivelmente lindo, funcional e objetivo. Excelente trabalho dos desenvolvedores!'),
(28, 'Julia Martins Sanches ', 'juliamartinssanches321@gmail.com', '(11) 96321-2485', 'ótimo site!');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
