-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2022 at 06:27 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctor_ad`
--

CREATE TABLE `doctor_ad` (
  `Name` varchar(50) NOT NULL,
  `Contact` int(20) NOT NULL,
  `Password` varchar(60) NOT NULL,
  `Degree` varchar(80) NOT NULL,
  `Specialist` text NOT NULL,
  `Location` text NOT NULL,
  `Time` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor_ad`
--

INSERT INTO `doctor_ad` (`Name`, `Contact`, `Password`, `Degree`, `Specialist`, `Location`, `Time`) VALUES
('Mr YZ', 1834901387, 'x%%6', 'MBBS', 'Medicine', 'Jashore Sadar Hospital', '5.00PM'),
('Mr ABCD', 1723218930, '783421', 'MBBS', 'Medicine', 'Khulna Sadar Hospita;', '4.00PM'),
('Miss Asma begum', 1790568921, '#asma%', 'MBBS', 'Gynecologist', 'Jashore Sadar Hospital', '4.00PM');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
