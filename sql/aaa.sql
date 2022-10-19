-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2021 at 05:35 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aaa`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(8) NOT NULL,
  `name` varchar(1111) NOT NULL,
  `email` varchar(33) NOT NULL,
  `password` varchar(33) NOT NULL,
  `logindatetime` varchar(45) NOT NULL,
  `logoutdatetime` varchar(50) NOT NULL,
  `status` varchar(44) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `Roll_Id` varchar(123) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `email`, `password`, `logindatetime`, `logoutdatetime`, `status`, `mobile`, `Roll_Id`) VALUES
(39, '', 'admin@gmail.com', '123456', '07/08/21:::08:59:53am', '', 'true', '7309264751', '1'),
(43, '', 'ashok@gmail.com', '123', '07/08/21:::08:54:26am', '', 'true', '', '2');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Id` int(12) NOT NULL,
  `Name` varchar(123) NOT NULL,
  `Price` varchar(123) NOT NULL,
  `Image` varchar(122) NOT NULL,
  `Description` varchar(11) NOT NULL,
  `Active` int(22) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Id`, `Name`, `Price`, `Image`, `Description`, `Active`) VALUES
(11, 'murti', '222', 'bamboo-kitchenware.jpg', '		dfgfdgdf	', 1);

-- --------------------------------------------------------

--
-- Table structure for table `productorder`
--

CREATE TABLE `productorder` (
  `Id` int(12) NOT NULL,
  `product_id` varchar(222) NOT NULL,
  `userid` varchar(1222) NOT NULL,
  `name` varchar(1111) NOT NULL,
  `email` varchar(323) NOT NULL,
  `mobile` varchar(322) NOT NULL,
  `address` varchar(1231) NOT NULL,
  `Status` varchar(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productorder`
--

INSERT INTO `productorder` (`Id`, `product_id`, `userid`, `name`, `email`, `mobile`, `address`, `Status`) VALUES
(5, '11', 'ashok@gmail.com', 'ashok', 'ashok@gmail.com', '12346', 'varansi', 'Delivered Order');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `productorder`
--
ALTER TABLE `productorder`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `Id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `productorder`
--
ALTER TABLE `productorder`
  MODIFY `Id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
