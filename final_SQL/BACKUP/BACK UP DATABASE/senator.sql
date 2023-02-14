-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2020 at 04:18 PM
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
(1, '201910148', 'Casquejo, Aivie Kaye - MEGA'),
(2, '201910148', 'Daling, Maynard - MEGA'),
(3, '201910148', 'Paquibot, Lloyd Zelwyn - MEGA'),
(4, '201910148', 'Elnas, Redden - MEGA'),
(5, '201910148', 'Balagulan, Jerome Cedric - ACT'),
(6, '201910148', 'Bandoja, Shamaine - MEGA'),
(7, '201910148', 'Moscosa, Jerald - TAYO'),
(8, '201910148', 'Raï¿½eses, Ophelia Famela - MEGA'),
(9, '201810164', 'Casquejo, Aivie Kaye - MEGA'),
(10, '201810164', 'Daling, Maynard - MEGA'),
(11, '201810164', 'Bonao, Christian Jay - ACT'),
(12, '201810164', 'Paquibot, Lloyd Zelwyn - MEGA'),
(13, '201810164', 'Bandoja, Shamaine - MEGA'),
(14, '201810164', 'Raï¿½eses, Ophelia Famela - MEGA'),
(15, '201810164', 'Horcasitas, Gerold - TAYO'),
(16, '201810164', 'Lusterio, Erica - TAYO'),
(18, '201910222', 'Dabalos, Reno Jr. - TAYO'),
(19, '201910222', 'Bondal, Vigie - ACT'),
(20, '201910222', 'Bonao, Christian Jay - ACT'),
(21, '201910222', 'Gomez, Mary Grace - ACT'),
(22, '201910222', 'Lood, Christian Jay - ACT'),
(25, '201910222', 'Elnas, Redden - MEGA'),
(26, '201910222', 'Moscosa, Jerald - TAYO'),
(27, '201910222', 'Lusterio, Erica - TAYO'),
(28, '201910963', 'Gomez, Mary Grace - ACT'),
(29, '201910122', 'Paquibot, Lloyd Zelwyn - MEGA'),
(30, '201910122', 'Dabalos, Reno Jr. - TAYO'),
(31, '201910122', 'Manliguez, Fatima - MEGA'),
(34, '201810442', 'Manliguez, Fatima - MEGA'),
(35, '201810442', 'Select Senator');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
