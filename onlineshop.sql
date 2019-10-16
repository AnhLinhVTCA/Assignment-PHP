-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:5556
-- Generation Time: Oct 16, 2019 at 07:00 AM
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
(7, 'Ổ Cứng SSD Kingston A400 (120GB) - Hàng Chính Hãng', 0x496d6167652f50726f647563742f5b74696b692e766e5d5b3239355d312e75323430392e6432303137303432312e743134313833382e3435363232392e6a7067, '1400000.00', 61),
(8, 'Thiết Bị Phát Wifi Di Động 4G LTE-Advanced TP-Link M7350 V5 150Mbps - Hàng Chính Hãng', 0x496d6167652f50726f647563742f5b74696b692e766e5d5b3233375d32303939323439363333666338316635316133396333616666363434313762302e6a7067, '1890000.00', 38),
(9, 'Bộ Kích Sóng Wifi Repeater 300Mbps TP-Link TL-WA850RE - Hàng Chính Hãng', 0x496d6167652f50726f647563742f5b74696b692e766e5d5b3338335d746c2d776138353072652d65752d76312d30312e6a7067, '429000.00', 32),
(10, 'Hộp Đựng Ổ Cứng Di Động HDD Box 2.5 ORICO 2139U3 USB3.0/2.5 Nhựa Trong Suốt - Hàng Chính Hãng', 0x496d6167652f50726f647563742f5b74696b692e766e5d5b3536345d647363333434332e75323437302e6432303137303330332e743136353934322e3333393837312e6a7067, '149000.00', 24),
(11, 'TP-Link  TL-WR841N - Router Wifi Chuẩn N Tốc Độ 300Mbps - Hàng Chính Hãng', 0x496d6167652f50726f647563742f5b74696b692e766e5d5b3335305d34633533636462613062316361386362636133343836336536643037376239662e6a7067, '359000.00', 26),
(12, 'Phần Mềm Diệt Virus BKAV Profressional 1 PC 12 Tháng - Hàng Chính Hãng', 0x496d6167652f50726f647563742f5b74696b692e766e5d5b3534345d39613262346234383363633064613964333165343833643466623737323633352e6a7067, '299000.00', 37),
(13, 'Dây Sạc ANKER A7101621 Được Chứng Nhận MFi Cho Iphone5 / 6s / 7P / SE / Ipad Air Mini', 0x496d6167652f50726f647563742f5b74696b692e766e5d5b3838325d61353166613264343136663131336665633230313963613364333863643263302e6a7067, '250000.00', 52),
(14, 'TotoLink N200RE-V3 - Bộ Phát Wifi Chuẩn N Tốc Độ 300Mbps - Hàng Chính Hãng', 0x496d6167652f50726f647563742f5b74696b692e766e5d5b3937345d6e32303072652d76332d312e753432352e6432303137303330392e743136333233382e3330303232362e6a7067, '247000.00', 32),
(15, 'Máy Hút Bụi Mini Cầm Tay DEERMA DX128C - Xanh Mint', 0x496d6167652f50726f647563742f5b74696b692e766e5d5b3538315d34383861656634343836346538656339636531373661343766383334643930332e6a7067, '1366000.00', 64),
(16, 'Máy Xay Sinh Tố Philips HR2118 - Hàng Chính Hãng', 0x496d6167652f50726f647563742f5b74696b692e766e5d5b3739345d30643933396237613939333535383937343436626364643237343038633434662e6a7067, '2199000.00', 43),
(17, 'USB Kingston DT100G3 32GB USB 3.0 - Hàng Chính Hãng', 0x496d6167652f50726f647563742f5b74696b692e766e5d5b3437355d323636352e6a7067, '365000.00', 72),
(18, 'Tã Quần Huggies Dry Gói Cực Đại L68 (68 Miếng) - Bao Bì Mới', 0x496d6167652f50726f647563742f5b74696b692e766e5d5b3633335d39643435393365393537383534346131313032663832323365306564653165392e6a7067, '390000.00', 22);

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
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `linhna_users`
--
ALTER TABLE `linhna_users`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
