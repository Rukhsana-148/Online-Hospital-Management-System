-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2022 at 06:26 PM
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
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `Name` text NOT NULL,
  `Contact` int(12) NOT NULL,
  `Age` int(7) NOT NULL,
  `Disease` text NOT NULL,
  `D_Name` text NOT NULL,
  `D_Contact` int(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`Name`, `Contact`, `Age`, `Disease`, `D_Name`, `D_Contact`) VALUES
('Abdullah Al Galib', 1345321835, 23, 'Fever', 'Mr YZ', 1834901387),
('Joy Mondal', 1367892145, 20, 'Malaria', 'Mr ABCD', 1723218930),
('Nayan Malakar', 1843568921, 24, 'Diabates', 'Mr ABCD', 1723218930),
('Niloy Das', 1678903251, 24, 'Allergies and Asthma', 'Mr YZ', 1834901387),
('salma sultana', 1789321904, 20, 'Allergies and Asthma', 'Miss Asma begum', 1790568921);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
