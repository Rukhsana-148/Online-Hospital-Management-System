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
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `Name` varchar(40) NOT NULL,
  `Age` int(4) NOT NULL,
  `Disease` varchar(30) NOT NULL,
  `Conditions` varchar(40) NOT NULL,
  `Address` varchar(40) NOT NULL,
  `Phone Number` int(13) NOT NULL,
  `Password` varchar(40) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`Name`, `Age`, `Disease`, `Conditions`, `Address`, `Phone Number`, `Password`, `Date`) VALUES
('Sumitra Paul', 22, 'Allergies and Asthma', 'Normal', 'Sathkhira', 1689084312, 'mitra_87', '2022-07-28'),
('Mahbuba Islam Priya', 23, 'Fever', 'Normal', 'Khulna', 1767892190, 'priya_123', '2022-08-05'),
('Niashat Mahbub', 20, 'Allergies and Asthma', 'Normal', 'Jashore', 1789329021, 'nish_at', '2022-08-05');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
