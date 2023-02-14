-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2020 at 01:24 AM
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
-- Table structure for table `votes`
--

CREATE TABLE `votes` (
  `id` int(11) NOT NULL,
  `stud_id` varchar(200) NOT NULL,
  `president` varchar(200) NOT NULL,
  `vice_president` varchar(200) NOT NULL,
  `secretary` varchar(200) NOT NULL,
  `treasurer` varchar(200) NOT NULL,
  `auditor` varchar(200) NOT NULL,
  `student_voting_status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `votes`
--

INSERT INTO `votes` (`id`, `stud_id`, `president`, `vice_president`, `secretary`, `treasurer`, `auditor`, `student_voting_status`) VALUES
(3, '201910148', 'Englaterra, Josie - TAYO', 'Sales, Daylyn - MEGA', 'Cajes, Reynaldo - MEGA', 'Bustamante, Jenneline - ACT', 'Sarcon, Jade Vincent - MEGA', 'finish voting'),
(4, '201910222', 'Bernalte, Gabriel - ACT', 'Saligumba, Ryle Avrian - ACT', 'Cajes, Reynaldo - MEGA', 'Bustamante, Jenneline - ACT', 'Estrera, Cristine - TAYO', 'finish voting');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `votes`
--
ALTER TABLE `votes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `votes`
--
ALTER TABLE `votes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
