-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 25-Set-2020 às 17:27
-- Versão do servidor: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sejuve86_sejuve`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `card_pagina`
--

CREATE TABLE `card_pagina` (
  `id_cp` int(11) NOT NULL,
  `titulo_cp` varchar(100) DEFAULT NULL,
  `desc_cp` varchar(500) DEFAULT NULL,
  `imagem_cp` varchar(100) DEFAULT NULL,
  `link_cp` varchar(200) DEFAULT NULL,
  `titulo_painel_cp` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `card_pagina`
--

INSERT INTO `card_pagina` (`id_cp`, `titulo_cp`, `desc_cp`, `imagem_cp`, `link_cp`, `titulo_painel_cp`) VALUES
(1, 'conheça o time da sejuve', '1', 'f658df01cfee3abc3d7834a26aae8d0c.jpg', 'http://localhost/sejuve/equipe.php', 'Time Sejuve1'),
(2, 'Deixe suas sugestões e ajude a construir um Pentecoste melhor.', '', 'falajovem.jpeg', 'https://forms.gle/XrPumZZDZYYDt4zG6', 'Fala Jovem.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `card_pagina`
--
ALTER TABLE `card_pagina`
  ADD PRIMARY KEY (`id_cp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `card_pagina`
--
ALTER TABLE `card_pagina`
  MODIFY `id_cp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
