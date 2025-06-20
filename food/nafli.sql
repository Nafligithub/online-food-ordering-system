-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 02, 2023 at 12:27 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nafli`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

DROP TABLE IF EXISTS `contact_us`;
CREATE TABLE IF NOT EXISTS `contact_us` (
  `id` int NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `message` text NOT NULL,
  `datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `first_name`, `last_name`, `email`, `phone`, `message`, `datetime`, `status`) VALUES
(1, 'dummy', 'Kumar', 'test@email.com', '98585458', 'test', '2018-02-04 15:37:07', 1),
(13, 'saheer', 'nafly', 'nafly@gmail.com', '0781941464', 'aasdfgh', '2023-11-17 07:07:11', 1),
(14, 'Aashiq', 'Ahamed', 'aashiq12@gmail.com', '0755807905', 'hi hugusasd', '2023-11-27 12:25:17', 1),
(15, 'mushaf', 'mushafa', 'asb12@gmail.com', '0789191826', 'cdsdfda', '2023-11-27 12:28:18', 1);

-- --------------------------------------------------------

--
-- Table structure for table `receivers`
--

DROP TABLE IF EXISTS `receivers`;
CREATE TABLE IF NOT EXISTS `receivers` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rname` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `rmobile` int NOT NULL,
  `remail` varchar(40) COLLATE utf8mb4_general_ci NOT NULL,
  `rusername` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `rpassword` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `rcopassword` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`,`rusername`,`remail`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `receivers`
--

INSERT INTO `receivers` (`id`, `rname`, `rmobile`, `remail`, `rusername`, `rpassword`, `rcopassword`) VALUES
(12, 'nafly', 781941464, 'nafly787@gmail.com', 'nafly', '12345', '12345'),
(13, 'mohamed', 781941464, 'mohamed@gmail.com', 'mohamed', '12345', '12345'),
(14, 'Randika', 701366713, 'randikalakshan800@gmail.com', 'randika', '1234', '1234'),
(15, 'saheer', 2147483647, 'saheer@gmail.com', 'saheer', '12345', '12345'),
(18, 'Aashiq', 755807906, 'aashiq@gmail.com', 'azq', 'Abcd', 'Abcd');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
