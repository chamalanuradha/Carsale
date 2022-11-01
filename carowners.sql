-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2021 at 08:39 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carsale`
--

-- --------------------------------------------------------

--
-- Table structure for table `carowners`
--

CREATE TABLE `carowners` (
  `Id` int(50) NOT NULL,
  `Firstname` varchar(30) NOT NULL,
  `Lastname` varchar(30) NOT NULL,
  `NIC` varchar(15) NOT NULL,
  `Hometown` varchar(15) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `carowners`
--

INSERT INTO `carowners` (`Id`, `Firstname`, `Lastname`, `NIC`, `Hometown`, `Email`, `Password`) VALUES
(8, 'chamal', 'anuradha', '982303095v', 'baddegama', 'chamal@gmail.com', 'chamal'),
(9, 'kulathilaka ', 'gamage', '645872006V', 'Kandy', 'gamage@gmail.com', '40452'),
(10, 'shanthi', 'samanthika', '602584302V', 'Ambalangoda', 'smanmali8@gmail.com', 'shan22'),
(11, 'anupama', 'silva', '976432045V', 'matara', 'anupama91@gmail.com', 'anu975'),
(12, 'nisal', 'nadeeka', '782546301V', 'anuradhapura', 'nisal@gmail.com', '199705'),
(13, 'nisal', 'nadeeka', '782546301V', 'anuradhapura', 'nisal25@gmail.com', '123548'),
(14, 'poornima', 'asali', '892547135V', 'mathala', 'asali78@gmail.com', 'asa475'),
(15, 'nadun', 'shalika', '985874100V', 'hambanthota', 'shalika@gmail.com', 'shak78'),
(16, 'nuwan', 'anushka', '852451632V', 'rathnapura', 'nuwan78@gmail.com', '587461');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carowners`
--
ALTER TABLE `carowners`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carowners`
--
ALTER TABLE `carowners`
  MODIFY `Id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
