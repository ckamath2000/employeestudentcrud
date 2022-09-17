-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2022 at 04:59 PM
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
-- Database: `employee`
--

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

CREATE TABLE `emp` (
  `empno` int(30) NOT NULL,
  `ename` varchar(30) NOT NULL,
  `bsalary` int(30) NOT NULL,
  `da` int(30) NOT NULL,
  `hra` int(30) NOT NULL,
  `ma` int(30) NOT NULL,
  `insurance` int(20) NOT NULL,
  `netsalary` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emp`
--

INSERT INTO `emp` (`empno`, `ename`, `bsalary`, `da`, `hra`, `ma`, `insurance`, `netsalary`) VALUES
(101, 'Nikhi', 28000, 22400, 4200, 3360, 2800, 32760),
(103, 'Sunil', 40000, 32000, 6000, 4800, 4000, 46800),
(108, 'Shreyas', 55000, 44000, 8250, 6600, 5500, 52650),
(111, 'Sandhu', 32000, 25600, 4800, 3840, 3200, 37440),
(112, 'krushi', 25000, 20000, 3750, 3000, 2500, 29250),
(201, 'Shobha', 28000, 22400, 4200, 3360, 2800, 32760);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emp`
--
ALTER TABLE `emp`
  ADD PRIMARY KEY (`empno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
