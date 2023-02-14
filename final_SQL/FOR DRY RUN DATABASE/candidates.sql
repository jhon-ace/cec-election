-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2020 at 07:28 AM
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
-- Table structure for table `candidates`
--

CREATE TABLE `candidates` (
  `can_id` int(15) NOT NULL,
  `can_lastname` varchar(200) NOT NULL,
  `can_firstname` varchar(200) NOT NULL,
  `can_position` varchar(200) NOT NULL,
  `can_department` varchar(255) NOT NULL,
  `can_partylist` varchar(200) NOT NULL,
  `can_status` varchar(200) NOT NULL,
  `votes` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`can_id`, `can_lastname`, `can_firstname`, `can_position`, `can_department`, `can_partylist`, `can_status`, `votes`) VALUES
(1, 'Bernalte', 'Gabriel', 'President', '', 'ACT', '0', ''),
(2, 'Englaterra', 'Josie', 'President', '', 'TAYO', '0', ''),
(3, 'Sales', 'Ivan', 'President', '', 'MEGA', '0', ''),
(4, 'Clenista', 'Rolland Jay', 'Vice-President', '', 'TAYO', '0', ''),
(5, 'Sales', 'Daylyn', 'Vice-President', '', 'MEGA', '0', ''),
(6, 'Saligumba', 'Ryle Avrian', 'Vice-President', '', 'ACT', '0', ''),
(7, 'Bongo', 'Steve', 'Secretary', '', 'ACT', '0', ''),
(8, 'Cajes', 'Reynaldo', 'Secretary', '', 'MEGA', '0', ''),
(9, 'Boltron', 'Kimberly', 'Treasurer', '', 'MEGA', '0', ''),
(10, 'Bustamante', 'Jenneline', 'Treasurer', '', 'ACT', '0', ''),
(11, 'Guioguio', 'Diane', 'Treasurer', '', 'TAYO', '0', ''),
(12, 'Arcay', 'Kent', 'Auditor', '', 'ACT', '0', ''),
(13, 'Estrera', 'Cristine', 'Auditor', '', 'TAYO', '0', ''),
(14, 'Sarcon', 'Jade Vincent', 'Auditor', '', 'MEGA', '0', ''),
(15, 'Balagulan', 'Jerome Cedric', 'Senator', '', 'ACT', '0', ''),
(16, 'Bandoja', 'Shamaine', 'Senator', '', 'MEGA', '0', ''),
(17, 'Bonao', 'Christian Jay', 'Senator', '', 'ACT', '0', ''),
(18, 'Bondal', 'Vigie', 'Senator', '', 'ACT', '0', ''),
(19, 'Casquejo', 'Aivie Kaye', 'Senator', '', 'MEGA', '0', ''),
(20, 'Dabalos', 'Reno Jr.', 'Senator', '', 'TAYO', '0', ''),
(21, 'Daling', 'Maynard', 'Senator', '', 'MEGA', '0', ''),
(22, 'Elnas', 'Redden', 'Senator', '', 'MEGA', '0', ''),
(23, 'Gomez', 'Mary Grace', 'Senator', '', 'ACT', '0', ''),
(24, 'Horcasitas', 'Gerold', 'Senator', '', 'TAYO', '0', ''),
(25, 'Lignig', 'James Kenneth', 'Senator', '', 'ACT', '0', ''),
(26, 'Lood', 'Christian Jay', 'Senator', '', 'ACT', '0', ''),
(27, 'Lusterio', 'Erica', 'Senator', '', 'TAYO', '0', ''),
(28, 'Manliguez', 'Fatima', 'Senator', '', 'MEGA', '0', ''),
(29, 'Moscosa', 'Jerald', 'Senator', '', 'TAYO', '0', ''),
(30, 'Paquibot', 'Lloyd Zelwyn', 'Senator', '', 'MEGA', '0', ''),
(31, 'Polinar', 'Mar Lemuel', 'Senator', '', 'ACT', '0', ''),
(32, 'Repala', 'Daena Suzane', 'Senator', '', 'MEGA', '0', ''),
(33, 'Rañeses', 'Ophelia Famela', 'Senator', '', 'MEGA', '0', ''),
(34, 'Balani', 'Cyrus Jay', 'Governor - 12', '', 'MEGA', '0', ''),
(35, 'Esto', 'Wendy Mae', 'Governor - 12', '', 'TAYO', '0', ''),
(36, 'Soco', 'Mark Lester', 'Governor - 12', '', 'ACT', '0', ''),
(37, 'Guiang', 'Princess Mikaela', 'Vice-Governor - 12', '', 'MEGA', '0', ''),
(38, 'Lapure', 'Rucel', 'Vice-Governor - 12', '', 'TAYO', '0', ''),
(39, 'Tadle', 'Jeanne', 'Vice-Governor - 12', '', 'ACT', '0', ''),
(40, 'Esterado', 'Mark Gerard', 'Governor', 'Computer Studies', 'TAYO', '0', ''),
(41, 'Dalagon', 'Rona Rose', 'Vice - Governor', 'Computer Studies', 'TAYO', '0', ''),
(42, 'Bantillo', 'Richard Jay', 'Governor', 'Education and Liberal Arts', 'MEGA', '0', ''),
(43, 'Clemen', 'Aila Marie', 'Governor', 'Education and Liberal Arts', 'ACT', '0', ''),
(44, 'Añana', 'Jacquiline', 'Vice - Governor', 'Education and Liberal Arts', 'MEGA', '0', ''),
(45, 'Leuterio', 'Eugene Kenneth', 'Governor', 'Marine Transportation', 'ACT', '0', ''),
(46, 'Sarong', 'Noel Jr.', 'Governor', 'Marine Transportation', 'TAYO', '0', ''),
(47, 'Curaza', 'Rodnel', 'Vice - Governor', 'Marine Transportation', 'ACT', '0', ''),
(48, 'Idul', 'Kurt Russel', 'Vice - Governor', 'Marine Transportation', 'TAYO', '0', ''),
(49, 'Selomen', 'Wiljun', 'Vice - Governor', 'Marine Transportation', 'MEGA', '0', ''),
(50, 'Ayop', 'Allan Paul', 'Governor', 'Marine Engineering', 'MEGA', '0', ''),
(51, 'Tampos', 'Victor', 'Vice - Governor', 'Marine Engineering', 'MEGA', '0', ''),
(52, 'Bentulan', 'Adrian Patrick', 'Governor', 'Hospitality and Tourism', 'ACT', '0', ''),
(53, 'Clenista', 'Christian Jake', 'Governor', 'Hospitality and Tourism', 'TAYO', '0', ''),
(54, 'Galin', 'Wilma Grace', 'Vice - Governor', 'Hospitality and Tourism', 'TAYO', '0', ''),
(55, 'Lopez', 'Britney Jade', 'Vice - Governor', 'Hospitality and Tourism', 'ACT', '0', ''),
(56, 'Doblas', 'Elbert John', 'Vice - Governor', 'Business Administration', 'TAYO', '0', ''),
(57, 'Manuel', 'Rose Ann', 'Vice - Governor', 'Business Administration', 'MEGA', '0', ''),
(58, 'Caturan', 'Daryl Ann Eleonor', 'Governor', 'Criminology', 'TAYO', '0', ''),
(59, 'Jumigop', 'Joel', 'Governor', 'Criminology', 'ACT', '0', ''),
(60, 'Milay', 'Angelou', 'Governor', 'Criminology', 'MEGA', '0', ''),
(61, 'Albores', 'Rapheka Mae', 'Vice - Governor', 'Criminology', 'TAYO', '0', ''),
(62, 'Bongcac', 'Jessa', 'Vice - Governor', 'Criminology', 'MEGA', '0', ''),
(63, 'Guioguio', 'Charisse Anne', 'Vice - Governor', 'Criminology', 'ACT', '0', ''),
(64, '------', '-------', '----', '------------', '-------', '------', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidates`
--
ALTER TABLE `candidates`
  ADD PRIMARY KEY (`can_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidates`
--
ALTER TABLE `candidates`
  MODIFY `can_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
