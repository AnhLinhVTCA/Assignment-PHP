-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:5556
-- Generation Time: Oct 14, 2019 at 04:03 PM
-- Server version: 5.7.24-log
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlineshopdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `linhna_products`
--

CREATE TABLE `linhna_products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(200) DEFAULT NULL,
  `product_image` blob,
  `price` decimal(10,2) DEFAULT NULL,
  `product_discount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `linhna_products`
--

INSERT INTO `linhna_products` (`product_id`, `product_name`, `product_image`, `price`, `product_discount`) VALUES
(6, 'Ổ Cứng SSD Kingston A400 (240GB) - Hàng Chính Hãng', 0x496d6167652f50726f647563742f5b74696b692e766e5d5b3239355d312e75323430392e6432303137303432312e743134313833382e3435363232392e6a7067, '1200000.00', 41),
(7, 'Ổ Cứng SSD Kingston A400 (120GB) - Hàng Chính Hãng', 0x496d6167652f50726f647563742f5b74696b692e766e5d5b3239355d312e75323430392e6432303137303432312e743134313833382e3435363232392e6a7067, '1400000.00', 61);

-- --------------------------------------------------------

--
-- Table structure for table `linhna_users`
--

CREATE TABLE `linhna_users` (
  `id` int(6) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(40) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` char(60) NOT NULL,
  `registration_date` datetime NOT NULL,
  `user_level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `linhna_users`
--

INSERT INTO `linhna_users` (`id`, `first_name`, `last_name`, `email`, `password`, `registration_date`, `user_level`) VALUES
(1, 'Linh', 'Nguyen', 'admin@gmail.com', '$2y$10$CBrubZUEqH1MEeppv.GnFurCVdxh0uFeX7/iceoDtBSr2JBv/KNwC', '2019-09-16 22:02:10', 1),
(2, 'Nguyen', 'Linh', 'linh@gmail.com', '$2y$10$kWzQjoUnU1zn3jaKVVp2LObti2VAKYAQxSJI0iY0Mzv1RNOhCbILi', '2019-09-17 00:02:27', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `linhna_products`
--
ALTER TABLE `linhna_products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `linhna_users`
--
ALTER TABLE `linhna_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `linhna_products`
--
ALTER TABLE `linhna_products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `linhna_users`
--
ALTER TABLE `linhna_users`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
