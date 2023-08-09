-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 09, 2023 at 10:09 AM
-- Server version: 8.0.33-0ubuntu0.20.04.4
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `drupal`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `email` varchar(256) DEFAULT NULL,
  `password` varchar(256) DEFAULT NULL,
  `fullname` varchar(256) DEFAULT NULL,
  `toi` varchar(100) DEFAULT NULL,
  `education` varchar(100) DEFAULT NULL,
  `profession` varchar(100) DEFAULT NULL,
  `hobbies` varchar(100) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `states` varchar(100) DEFAULT NULL,
  `cities` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`email`, `password`, `fullname`, `toi`, `education`, `profession`, `hobbies`, `country`, `states`, `cities`) VALUES
('kartik@gmail.com', 'admin123', 'Kartik', 'A lot', 'Graduation', 'SDT', 'Swimming', 'India', 'Madhya Pradesh', 'Bhopal');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
