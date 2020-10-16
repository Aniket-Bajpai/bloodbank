-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql310.epizy.com
-- Generation Time: Oct 14, 2020 at 10:54 AM
-- Server version: 5.6.48-88.0
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_26960477_blood_bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `blood_smaple`
--

CREATE TABLE `blood_smaple` (
  `id` int(10) NOT NULL,
  `hosp_id` int(10) NOT NULL,
  `blood` varchar(10) NOT NULL,
  `unit` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blood_smaple`
--

INSERT INTO `blood_smaple` (`id`, `hosp_id`, `blood`, `unit`) VALUES
(1, 3, 'B+', 10),
(2, 3, 'O-', 5),
(10, 3, 'AB+', 2),
(12, 3, 'B-', 11),
(13, 8, 'B-', 2),
(21, 9, 'O+', 2),
(22, 9, 'O-', 3),
(24, 9, 'A-', 2),
(25, 9, 'B+', 3),
(26, 9, 'B-', 4),
(27, 9, 'AB+', 8),
(28, 9, 'AB-', 3),
(29, 10, 'A-', 1),
(30, 8, 'O-', 8),
(31, 10, 'AB+', 2),
(32, 10, 'AB-', 3);

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `id` int(11) NOT NULL,
  `hospname` varchar(100) NOT NULL,
  `hospemail` varchar(40) NOT NULL,
  `blood` varchar(4) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`id`, `hospname`, `hospemail`, `blood`, `pass`) VALUES
(2, 'bil', 'bil@gmail.com', 'O-', 'Aniket'),
(3, 'Aniket', 'aniket@gmail.com', 'B+', 'Aniket'),
(5, 'srk', 'srk@gmail.com', 'B+', 'Aniket'),
(6, 'avi', 'avi@gmail.com', 'O-', 'Aniket'),
(8, 'Patil hospital', 'patil@gmail.com', 'B-', '123456'),
(9, 'Apolo', 'apolo@gmail.com', '', 'Apolo'),
(10, 'fortis', 'fortis@gmail.com', '', 'fortis');

-- --------------------------------------------------------

--
-- Table structure for table `reciever`
--

CREATE TABLE `reciever` (
  `id` int(10) NOT NULL,
  `username` varchar(40) NOT NULL,
  `blood` varchar(10) NOT NULL,
  `pass` varchar(16) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reciever`
--

INSERT INTO `reciever` (`id`, `username`, `blood`, `pass`) VALUES
(1, 'Aniket@yahoo.com', 'O+', 'Aniket'),
(3, 'aniketbajpai20@gmail.com', 'B+', 'pass'),
(4, 'aniketbajpai@gmail.com', 'B+', 'Aniket'),
(6, 'omclinic@gmail.com', 'O+', 'om@1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blood_smaple`
--
ALTER TABLE `blood_smaple`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reciever`
--
ALTER TABLE `reciever`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blood_smaple`
--
ALTER TABLE `blood_smaple`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `reciever`
--
ALTER TABLE `reciever`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
