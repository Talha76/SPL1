-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 28, 2022 at 04:53 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smtp_credentials`
--

-- --------------------------------------------------------

--
-- Table structure for table `otp_info`
--

create database smtp_credentials;
use smtp_credentials;

CREATE TABLE `otp_info` (
  `id` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(10) NOT NULL,
  `otp` int(11) NOT NULL,
  `creation_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `otp_info`
--

INSERT INTO `otp_info` (`id`, `email`, `password`, `user_type`, `otp`, `creation_time`) VALUES
('talha', 'mushfiqurrahman845@gmail.com', '846c9fa0d0488a4caa493b36a6d31a87', 'employer', 29885262, '2022-12-28 21:32:06');

-- --------------------------------------------------------

--
-- Table structure for table `reset_password_info`
--

CREATE TABLE `reset_password_info` (
  `id` varchar(100) NOT NULL,
  `token` int(11) NOT NULL,
  `creation_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `smtp_credentials`
--

CREATE TABLE `smtp_credentials` (
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `smtp_credentials`
--

INSERT INTO `smtp_credentials` (`email`, `password`) VALUES
('mushfiqurtalha@iut-dhaka.edu', 'dkOqEIRFv84TJLYK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `otp_info`
--
ALTER TABLE `otp_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `reset_password_info`
--
ALTER TABLE `reset_password_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `smtp_credentials`
--
ALTER TABLE `smtp_credentials`
  ADD PRIMARY KEY (`email`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reset_password_info`
--
ALTER TABLE `reset_password_info`
  ADD CONSTRAINT `fk_reset_pass_id` FOREIGN KEY (`id`) REFERENCES `user_db`.`userID` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
