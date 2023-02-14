-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2020 at 01:23 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `election`
--

-- --------------------------------------------------------

--
-- Table structure for table `senator`
--

CREATE TABLE `senator` (
  `id` int(11) NOT NULL,
  `stud_ayd` varchar(500) NOT NULL,
  `senatorr` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `senator`
--

INSERT INTO `senator` (`id`, `stud_ayd`, `senatorr`) VALUES
(15, '201910148', 'Lignig, James Kenneth - ACT'),
(16, '201910148', 'Repala, Daena Suzane - MEGA'),
(17, '201910148', 'Lusterio, Erica - TAYO'),
(19, '201910222', 'Lusterio, Erica - TAYO'),
(20, '201910222', 'Lignig, James Kenneth - ACT'),
(21, '201910222', 'Gomez, Mary Grace - ACT');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `senator`
--
ALTER TABLE `senator`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `senator`
--
ALTER TABLE `senator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
