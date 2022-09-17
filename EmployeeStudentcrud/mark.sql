-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2022 at 04:58 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `mark`
--

CREATE TABLE `mark` (
  `rollno` int(20) NOT NULL,
  `sname` varchar(20) NOT NULL,
  `sub1` int(20) NOT NULL,
  `sub2` int(20) NOT NULL,
  `sub3` int(20) NOT NULL,
  `sub4` int(20) NOT NULL,
  `sub5` int(20) NOT NULL,
  `total` int(30) NOT NULL,
  `avg` int(30) NOT NULL,
  `class` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mark`
--

INSERT INTO `mark` (`rollno`, `sname`, `sub1`, `sub2`, `sub3`, `sub4`, `sub5`, `total`, `avg`, `class`) VALUES
(101, 'Vishnu', 10, 10, 10, 10, 10, 50, 10, 'FAIL'),
(102, 'kushi', 30, 90, 93, 85, 10, 308, 62, 'FIRST CLASS'),
(110, 'Sunil', 40, 20, 30, 10, 50, 150, 30, 'FAIL'),
(116, 'Kumar', 55, 65, 73, 84, 73, 350, 70, 'FIRST CLASS'),
(120, 'Manjula', 87, 79, 92, 95, 97, 450, 90, 'DISTINCTION'),
(121, 'Nikhil', 90, 78, 89, 45, 10, 312, 62, 'FIRST CLASS'),
(130, 'Diya', 30, 90, 20, 85, 30, 255, 51, 'SECOND CLASS'),
(142, 'Bhooms', 90, 30, 20, 30, 100, 270, 54, 'SECOND CLASS'),
(145, 'sai', 100, 80, 30, 70, 99, 379, 76, 'FIRST CLASS'),
(148, 'nd', 39, 49, 20, 39, 54, 201, 40, 'FAIL'),
(189, 'di', 39, 20, 54, 20, 57, 190, 38, 'FAIL');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mark`
--
ALTER TABLE `mark`
  ADD PRIMARY KEY (`rollno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
