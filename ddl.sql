-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 01, 2022 at 02:06 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_db`
--
CREATE DATABASE IF NOT EXISTS `smtp_credentials` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `smtp_credentials`;

CREATE TABLE `otp_info` (
  id varchar(255) not null,
  otp number not null,
  creation_date date not null
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE otp_info
  ADD PRIMARY KEY (id);

COMMIT;
