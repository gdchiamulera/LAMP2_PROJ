-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 15, 2021 at 12:09 PM
-- Server version: 8.0.23-0ubuntu0.20.04.1
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hr_db`
--
CREATE DATABASE IF NOT EXISTS `hr_db` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `hr_db`;

-- --------------------------------------------------------

--
-- Table structure for table `hr_employees`
--

DROP TABLE IF EXISTS `hr_employees`;
CREATE TABLE `hr_employees` (
  `hr_id` int NOT NULL,
  `surname` varchar(50) NOT NULL,
  `givenName` varchar(50) NOT NULL,
  `birthDate` date NOT NULL,
  `gender` varchar(20) NOT NULL,
  `hireDate` date NOT NULL,
  `initialLevel` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hr_employees`
--
ALTER TABLE `hr_employees`
  ADD PRIMARY KEY (`hr_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hr_employees`
--
ALTER TABLE `hr_employees`
  MODIFY `hr_id` int NOT NULL AUTO_INCREMENT;
COMMIT;

ALTER TABLE `hr_db`.`hr_employees` DROP INDEX `surname`, ADD UNIQUE `surname` (`surname`, `givenName`) USING BTREE; 
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;