-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 07, 2022 at 05:03 PM
-- Server version: 8.0.29-0ubuntu0.20.04.3
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
-- Database: `patients`
--

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `pid` int NOT NULL,
  `name` varchar(50) NOT NULL,
  `visits` int NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`pid`, `name`, `visits`, `date`) VALUES
(1, 'faisal', 1, '2022-07-02 18:19:38'),
(3, 'muzammil', 1, '2022-07-07 10:31:33'),
(4, 'musharraf', 1, '2022-07-07 10:31:33'),
(5, 'danish', 1, '2022-07-07 10:31:33'),
(6, 'danial', 1, '2022-07-07 10:31:33');

-- --------------------------------------------------------

--
-- Table structure for table `visits`
--

CREATE TABLE `visits` (
  `pid` int NOT NULL,
  `visit_count` int NOT NULL,
  `blood` varchar(15) NOT NULL,
  `temp` int NOT NULL,
  `pressure` varchar(10) NOT NULL,
  `sugar` int NOT NULL,
  `symptoms` varchar(60) NOT NULL,
  `presc` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `visits`
--

INSERT INTO `visits` (`pid`, `visit_count`, `blood`, `temp`, `pressure`, `sugar`, `symptoms`, `presc`, `date`) VALUES
(1, 1, 'B positive', 110, '147/90', 101, 'fiver', 'koibhi dawa kha', '2022-07-02 18:23:14'),
(1, 2, 'B +ve', 101, '147/84', 125, 'fiverr', 'take paracitamol', '2022-07-06 18:56:34'),
(1, 3, 'b +ve', 123, '132/85', 123, 'Enter Symptoms', 'Enter prescription', '2022-07-06 19:01:26'),
(1, 2, 'bloody blood', 158, '145/98', 110, 'Bht tez programming ari', 'take some rest', '2022-07-07 11:05:58'),
(1, 2, 'bloody blood', 158, '145/98', 110, 'Bht tez programming ari', 'take some rest', '2022-07-07 11:06:40'),
(1, 2, 'AB +ve', 110, '123/90', 125, 'Garam demag', 'Thoda thanda pani pilao', '2022-07-07 11:07:42'),
(6, 2, 'bloody blood', 123, '123/90', 110, 'Enter Symptoms', 'Enter prescription', '2022-07-07 11:31:08'),
(6, 2, 'AB +ve', 110, '123/90', 125, 'asdaswd', 'awdawd', '2022-07-07 11:31:42'),
(6, 2, 'AB +ve', 158, '145/98', 125, 'Enter Symptoms', 'Enter prescription', '2022-07-07 11:32:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `visits`
--
ALTER TABLE `visits`
  ADD PRIMARY KEY (`date`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `pid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
