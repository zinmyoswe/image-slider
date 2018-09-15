-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2018 at 03:12 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `image-slider`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `image`) VALUES
(1, 'MEN KAWS X PEANUTS SHORT-SLEEVE GRAPHIC T-SHIRT', 14.22, 'tshirt (6).PNG'),
(2, 'KARAKAMI KARACHO SHORT-SLEEVE GRAPHIC T-SHIRT', 14.22, 'tshirt (1).PNG'),
(3, 'SPRZ NY EAMES SHORT-SLEEVE GRAPHIC T-SHIRT', 14.22, 'tshirt (4).PNG'),
(4, 'WASHED STRIPED LONG-SLEEVE T-SHIRT', 28.22, 'tshirt (5).PNG'),
(5, '3-STRIPES POWER BACKPACK MEDIUM', 35.22, 'bag (1).PNG'),
(6, 'JOJE PACk BACKPACK', 34.22, 'bag (2).PNG'),
(7, 'OXFORD SLIM-FIT LONG-SLEEVE SHIRT', 23.22, 'shirt (1).PNG'),
(8, 'EXTRA FINE COTTON BROADCLOTH LONG SLEEVE SHIRT', 25.22, 'shirt (2).PNG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
