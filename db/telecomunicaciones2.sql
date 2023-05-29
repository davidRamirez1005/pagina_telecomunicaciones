-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2023 at 07:08 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `formularioteleco2`
--

-- --------------------------------------------------------

--
-- Table structure for table `telecomunicaciones2`
--

CREATE TABLE `telecomunicaciones2` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `telefono` varchar(100) NOT NULL,
  `comentarios` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `telecomunicaciones2`
--

INSERT INTO `telecomunicaciones2` (`id`, `nombre`, `apellido`, `correo`, `telefono`, `comentarios`) VALUES
(1, 'ffffffffffffffffffffffffffff', 'fffffffffffffffffff', 'jdramirez1005@gmail.com', '31232', '444444'),
(2, 'dasd', '|jhfvgh', 'ghgjhg@fjdkshji', 'hugiuyt78uy', 'hniohui'),
(3, 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx', 'sssssssssssssssssssssssssss', 'sdffsdfds@dfs', 'ff333333333331|', 'dddddddd'),
(4, 'jose david', 'ramirez', 'jdramirez1005@gmail.com', '3177289785', 'funciona'),
(5, 'pruebas', 'excelente', 'jdramirez1005@gmail.com', '222', 'dsfnkjsda adfnakdesjf sdafnsda n dslfnsdjfncds dsflsdkjfr righerlkgd sd sdfsd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `telecomunicaciones2`
--
ALTER TABLE `telecomunicaciones2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `telecomunicaciones2`
--
ALTER TABLE `telecomunicaciones2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
