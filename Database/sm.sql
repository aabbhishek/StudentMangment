-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2019 at 03:17 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sm`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`name`, `email`, `password`, `id`) VALUES
('1', '1@gmail.com', '1', 2);

-- --------------------------------------------------------

--
-- Table structure for table `student_record`
--

CREATE TABLE `student_record` (
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `addemail` varchar(60) NOT NULL,
  `faname` varchar(50) NOT NULL,
  `maname` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `spno` varchar(11) NOT NULL,
  `fpno` varchar(11) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `sgrade` int(11) NOT NULL,
  `sid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_record`
--

INSERT INTO `student_record` (`fname`, `lname`, `addemail`, `faname`, `maname`, `address`, `spno`, `fpno`, `dob`, `sgrade`, `sid`) VALUES
('Josi', 'Kumar', 'Josi@gmail.com', 'Subhadeep kumar', 'Soupani Kumar ', 'ABC street, XYZ destric,Banglore,India.', '987-45-6321', '988-76-6543', '11/02/2004', 5, 2);

-- --------------------------------------------------------

--
-- Table structure for table `toppers-awd`
--

CREATE TABLE `toppers-awd` (
  `grade` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `section` varchar(2) NOT NULL,
  `GPA` float(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `toppers-awd`
--

INSERT INTO `toppers-awd` (`grade`, `name`, `section`, `GPA`) VALUES
(5, 'Raj Kumar', 'B', 9),
(4, 'Poorthi ', 'B', 8),
(1, 'Mohan lal', 'A', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_record`
--
ALTER TABLE `student_record`
  ADD PRIMARY KEY (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_info`
--
ALTER TABLE `student_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student_record`
--
ALTER TABLE `student_record`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
