-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2021 at 03:50 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `directions`
--

-- --------------------------------------------------------

--
-- Table structure for table `dir`
--

CREATE TABLE `dir` (
  `ID` int(11) NOT NULL DEFAULT 0,
  `forward_dir` int(11) NOT NULL,
  `backward_dir` int(11) NOT NULL,
  `right_dir` int(11) NOT NULL,
  `left_dir` int(11) NOT NULL,
  `stop_dir` int(11) NOT NULL,
  `LIST` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dir`
--

INSERT INTO `dir` (`ID`, `forward_dir`, `backward_dir`, `right_dir`, `left_dir`, `stop_dir`, `LIST`) VALUES
(0, 0, 0, 0, 0, 0, 2),
(0, 0, 0, 0, 0, 0, 3),
(0, 0, 0, 0, 0, 0, 4),
(0, 0, 0, 0, 0, 0, 5),
(0, 0, 0, 0, 0, 0, 6),
(0, 0, 0, 0, 0, 0, 7),
(0, 0, 0, 0, 0, 1, 8),
(0, 0, 0, 0, 0, 0, 9),
(0, 0, 0, 0, 0, 0, 10),
(0, 0, 0, 0, 0, 1, 11),
(0, 0, 0, 0, 0, 1, 12),
(0, 0, 0, 0, 0, 0, 13),
(0, 0, 0, 0, 0, 0, 14),
(0, 0, 0, 1, 0, 0, 15),
(0, 0, 0, 0, 0, 1, 16),
(0, 1, 0, 0, 0, 0, 17),
(0, 0, 1, 0, 0, 0, 18),
(0, 0, 0, 1, 0, 0, 19),
(0, 0, 0, 0, 1, 0, 20),
(0, 0, 0, 0, 0, 1, 21),
(0, 1, 0, 0, 0, 0, 22),
(0, 0, 0, 0, 0, 1, 23),
(0, 0, 0, 0, 1, 0, 24),
(0, 0, 0, 0, 0, 1, 25);

-- --------------------------------------------------------

--
-- Table structure for table `motors`
--

CREATE TABLE `motors` (
  `ID` int(11) NOT NULL DEFAULT 0,
  `LIST` int(11) NOT NULL,
  `Motor1` int(11) NOT NULL,
  `Motor2` int(11) NOT NULL,
  `Motor3` int(11) NOT NULL,
  `Motor4` int(11) NOT NULL,
  `Motor5` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `motors`
--

INSERT INTO `motors` (`ID`, `LIST`, `Motor1`, `Motor2`, `Motor3`, `Motor4`, `Motor5`) VALUES
(0, 1, 79, 121, 56, 119, 63),
(0, 2, 19, 19, 17, 25, 24),
(0, 3, 19, 130, 17, 25, 24);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dir`
--
ALTER TABLE `dir`
  ADD PRIMARY KEY (`LIST`);

--
-- Indexes for table `motors`
--
ALTER TABLE `motors`
  ADD PRIMARY KEY (`LIST`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dir`
--
ALTER TABLE `dir`
  MODIFY `LIST` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `motors`
--
ALTER TABLE `motors`
  MODIFY `LIST` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
