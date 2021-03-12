-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 12, 2021 at 11:20 AM
-- Server version: 8.0.23-0ubuntu0.20.04.1
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exam`
--

-- --------------------------------------------------------

--
-- Table structure for table `Products`
--

CREATE TABLE `Products` (
  `ProductId` int NOT NULL,
  `ProductName` varchar(255) DEFAULT NULL,
  `Category` varchar(50) DEFAULT NULL,
  `Price` float DEFAULT NULL,
  `Quantity` int DEFAULT NULL,
  `CreatedDate` varchar(20) DEFAULT NULL,
  `ProductInfo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Products`
--

INSERT INTO `Products` (`ProductId`, `ProductName`, `Category`, `Price`, `Quantity`, `CreatedDate`, `ProductInfo`) VALUES
(4, 'Iphone 12', 'Smart Phone', 27000000, 20, '2021-03-01', 'This is a flag-ship of Apple'),
(5, 'Iphone 12', 'Smart Phone', 27000000, 20, '2021-03-01', 'This is a flag-ship of Apple'),
(6, 'Iphone 12', 'Smart Phone', 27000000, 20, '2021-03-08', 'This is a flag-ship of Apple'),
(7, 'Iphone 12', 'Smart Phone', 27000000, 20, '2021-03-08', 'This is a flag-ship of Apple'),
(8, 'Iphone 12', 'Smart Phone', 27000000, 20, '2021-03-08', 'This is a flag-ship of Apple'),
(9, 'Iphone 12', 'Smart Phone', 27000000, 20, '2021-03-08', 'This is a flag-ship of Apple'),
(10, 'Iphone 12', 'Smart Phone', 27000000, 20, '2021-03-01', 'This is a flag-ship of Apple'),
(11, 'Iphone 12', 'Smart Phone', 27000000, 20, '2021-03-01', 'This is a flag-ship of Apple'),
(12, 'Iphone 13', 'Smart Phone', 12000000, 10, '2021-03-11', 'This is a flag-ship of Apple'),
(13, 'Iphone 13', 'Smart Phone', 12000000, 10, '2021-03-11', 'This is a flag-ship of Apple');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Products`
--
ALTER TABLE `Products`
  ADD PRIMARY KEY (`ProductId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Products`
--
ALTER TABLE `Products`
  MODIFY `ProductId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
