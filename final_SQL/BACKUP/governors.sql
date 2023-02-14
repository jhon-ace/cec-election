-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2020 at 04:17 PM
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
-- Table structure for table `governors`
--

CREATE TABLE `governors` (
  `gov_vice_id` int(11) NOT NULL,
  `stud_eyeD` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `governor` varchar(255) NOT NULL,
  `vice_governor` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `governors`
--

INSERT INTO `governors` (`gov_vice_id`, `stud_eyeD`, `department`, `governor`, `vice_governor`, `year`) VALUES
(1, '201910148', 'G - 12', 'Balani, Cyrus Jay - MEGA', 'Tadle, Jeanne - ACT', 'G - 12'),
(2, '201810164', 'G - 12', 'Esto, Wendy Mae - TAYO', 'Tadle, Jeanne - ACT', 'G - 12'),
(3, '201910222', 'G - 12', 'Esto, Wendy Mae - TAYO', 'Lapure, Rucel - TAYO', 'G - 12'),
(4, '201910963', 'G - 12', 'Select Grade - 12 | Governor', 'Select Grade - 12 | Vice - Governor', 'G - 12'),
(5, '201910122', 'G - 12', 'Esto, Wendy Mae - TAYO', 'Tadle, Jeanne - ACT', 'G - 12'),
(6, '201810442', 'G - 12', 'Esto, Wendy Mae - TAYO', 'Tadle, Jeanne - ACT', 'G - 12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `governors`
--
ALTER TABLE `governors`
  ADD PRIMARY KEY (`gov_vice_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `governors`
--
ALTER TABLE `governors`
  MODIFY `gov_vice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
