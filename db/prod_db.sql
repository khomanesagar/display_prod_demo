-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2022 at 07:13 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prod_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `sku` varchar(64) NOT NULL,
  `quantity` int(4) NOT NULL DEFAULT 0,
  `image` varchar(255) DEFAULT NULL,
  `price` decimal(15,2) NOT NULL DEFAULT 0.00,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `date_added` datetime NOT NULL,
  `date_modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `name`, `sku`, `quantity`, `image`, `price`, `status`, `date_added`, `date_modified`) VALUES
(1, 'Shoes', 'P001', 10, 'ip-1.jpeg', '200.00', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Watch', 'P002', 100, 'ht-1.jpg', '210.99', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Headfone', 'P003', 7, 'ho-2.jpg', '120.00', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Mobile', 'P004', 1000, 'mi-1.jpg', '800.00', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'test', 'P005', 999, NULL, '108.00', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'test6', 'P006', 1000, NULL, '200.00', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'test7', 'P007', 1000, NULL, '104.00', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'test8', 'P008', 1000, '', '100.00', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'test9', 'P009', 994, NULL, '101.00', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'test11', 'P0010', 970, NULL, '102.00', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'test14', 'P0011', 977, NULL, '109.00', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'test15', 'P0012', 990, NULL, '150.00', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'test16', 'P0013', 929, NULL, '500.00', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'test17', 'P0014', 1000, NULL, '1000.00', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'test18', 'P0015', 998, NULL, '2000.00', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'test19', 'P0016', 1000, NULL, '1000.00', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
