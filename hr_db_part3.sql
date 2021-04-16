-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 23, 2021 at 01:01 PM
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
  `initialLevel` int NOT NULL,
  `isFullTime` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

DROP TABLE IF EXISTS `salary`;
CREATE TABLE `salary` (
  `sal_id` int NOT NULL,
  `level` int NOT NULL,
  `date_begin` date NOT NULL,
  `date_end` date NOT NULL,
  `salary` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`sal_id`, `level`, `date_begin`, `date_end`, `salary`) VALUES
(1, 1, '1900-01-01', '2017-12-31', '60000.00'),
(2, 1, '2018-01-01', '2020-03-13', '61200.00'),
(3, 1, '2020-03-14', '2020-12-31', '62730.00'),
(4, 1, '2021-01-01', '2021-12-31', '63357.30'),
(5, 2, '1900-01-01', '2017-12-31', '62000.00'),
(6, 2, '2018-01-01', '2020-03-13', '63240.00'),
(7, 2, '2020-03-14', '2020-12-31', '64821.00'),
(8, 2, '2021-01-01', '2021-12-31', '65469.21'),
(9, 3, '1900-01-01', '2017-12-31', '64000.00'),
(10, 3, '2018-01-01', '2020-03-13', '65280.00'),
(11, 3, '2020-03-14', '2020-12-31', '66912.00'),
(12, 3, '2021-01-01', '2021-12-31', '67581.12'),
(13, 4, '1900-01-01', '2017-12-31', '66000.00'),
(14, 4, '2018-01-01', '2020-03-13', '67320.00'),
(15, 4, '2020-03-14', '2020-12-31', '69003.00'),
(16, 4, '2021-01-01', '2021-12-31', '69693.03'),
(17, 5, '1900-01-01', '2017-12-31', '68000.00'),
(18, 5, '2018-01-01', '2020-03-13', '69360.00'),
(19, 5, '2020-03-14', '2020-12-31', '71094.00'),
(20, 5, '2021-01-01', '2021-12-31', '71804.94'),
(21, 6, '1900-01-01', '2017-12-31', '70000.00'),
(22, 6, '2018-01-01', '2020-03-13', '71400.00'),
(23, 6, '2020-03-14', '2020-12-31', '73185.00'),
(24, 6, '2021-01-01', '2021-12-31', '73916.85'),
(25, 7, '1900-01-01', '2017-12-31', '72000.00'),
(26, 7, '2018-01-01', '2020-03-13', '73440.00'),
(27, 7, '2020-03-14', '2020-12-31', '75276.00'),
(28, 7, '2021-01-01', '2021-12-31', '76028.76'),
(29, 8, '1900-01-01', '2017-12-31', '74000.00'),
(30, 8, '2018-01-01', '2020-03-13', '75480.00'),
(31, 8, '2020-03-14', '2020-12-31', '77367.00'),
(32, 8, '2021-01-01', '2021-12-31', '78140.67'),
(33, 9, '1900-01-01', '2017-12-31', '76000.00'),
(34, 9, '2018-01-01', '2020-03-13', '77520.00'),
(35, 9, '2020-03-14', '2020-12-31', '79458.00'),
(36, 9, '2021-01-01', '2021-12-31', '80252.58');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `userid` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `password`) VALUES
('daniele', '123'),
('admin', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hr_employees`
--
ALTER TABLE `hr_employees`
  ADD PRIMARY KEY (`hr_id`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`level`,`date_begin`,`date_end`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hr_employees`
--
ALTER TABLE `hr_employees`
  MODIFY `hr_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=804;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;