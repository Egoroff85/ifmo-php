-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 04, 2018 at 12:48 AM
-- Server version: 5.6.38
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `BestShop`
--

-- --------------------------------------------------------

--
-- Table structure for table `catalog`
--

CREATE TABLE `catalog` (
  `id` int(20) NOT NULL,
  `category` set('laptops','tablets','smartphones','allinones') NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` int(20) NOT NULL,
  `quantity` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `catalog`
--

INSERT INTO `catalog` (`id`, `category`, `title`, `image`, `description`, `price`, `quantity`) VALUES
(1, 'laptops', 'Apple MacBook Pro 13 Mid 2017 MPXT2', 'mbp13sg.jpg', 'Intel Core i5 2300 MHz/13.3\"/2560x1600/8Gb/256Gb SSD/DVD нет/Intel Iris Plus Graphics 640/Wi-Fi/Bluetooth/MacOS X, Space Gray', 99999, 5),
(2, 'laptops', 'Apple MacBook Pro 15 Mid 2017 MPTV2', 'mbp15s.jpg', 'Intel Core i7 2900 MHz/15.4\"/2880x1800/16Gb/512Gb SSD/DVD нет/AMD Radeon Pro 560/Wi-Fi/Bluetooth/MacOS X, Silver', 165000, 6),
(3, 'laptops', 'Microsoft Surface Book 2017', 'surface.jpg', 'Intel Core i7 6600U 2600 MHz/13.5\"/3000x2000/8Gb/256Gb SSD/DVD нет/NVIDIA GeForce GTX 965M/Wi-Fi/Bluetooth/Win 10 Pro', 135000, 3),
(4, 'laptops', 'Dell 13.3\" XPS 13 9360', 'dellxps13.jpg', '2.5 GHz Intel Core i5-7200U Dual-Core/8GB LPDDR3 RAM/256GB M.2 SSD/13.3\" 3200 x 1800 InfinityEdge Display/Integrated Intel HD Graphics 620/Win 10 Pro', 110000, 6),
(5, 'smartphones', 'Apple iPhone X 64Gb Space Grey', 'iphonex64s.jpg', 'Apple iPhone X 64Gb Space Grey', 85000, 10),
(6, 'smartphones', 'Apple Iphone X 256Gb Silver', 'iphonex256.jpg', 'Apple Iphone X 256Gb Silver', 95000, 8),
(7, 'smartphones', 'Apple Iphone 8 64Gb', 'iphone8.jpg', 'Apple Iphone 8 64Gb', 50000, 4),
(8, 'smartphones', 'Samsung Galaxy S8', 'galaxys8.jpg', 'Samsung Galaxy S8', 45000, 3),
(9, 'tablets', 'Apple iPad 32Gb (2017)', 'ipad32.jpg', 'Apple iPad 32Gb Wi-Fi   Cellular Silver (2017)', 30000, 4),
(10, 'tablets', 'Apple iPad Pro 12.9 (2017)', 'ipadpro129.jpg', 'Apple iPad Pro 12.9 512Gb Wi-Fi   Cellular Space Gray (2017)', 50000, 4),
(11, 'tablets', 'Microsoft Surface Pro 5', 'surfacepro.jpg', 'Microsoft Surface Pro 5 i5 8Gb 256Gb', 85000, 3),
(12, 'allinones', 'Apple 27\" iMac 2017', 'imac.jpg', 'Apple 27\" iMac 2017, Retina 5K Display, 3.5GHz Intel Core i5 Quad Core, 8GB RAM, 1TB Fusion Drive, Silver', 130000, 2),
(13, 'allinones', 'Microsoft Surface Studio 2017', 'surfacestudio.jpg', 'Microsoft Surface Studio I7 1TB 16GB RAM 2GB GPU', 199000, 1),
(14, 'allinones', 'Apple iMac Pro 27\"', 'imacpro.jpg', '27\" Retina 5K глянцевый (5120x2880) c LED-подсветкой / восьмиядерный Intel Xeon W (3.2 - 4.2 ГГц) / 32 ГБ (DDR4-2666 ECC) / SSD 1 Тб / AMD Radeon Pro Vega 56, 8 Гб', 40000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `birthdate` date NOT NULL,
  `sex` varchar(255) NOT NULL,
  `status` varchar(20) NOT NULL,
  `avatar` varchar(20) NOT NULL DEFAULT 'avatar.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `login`, `name`, `email`, `pwd`, `birthdate`, `sex`, `status`, `avatar`) VALUES
(1, 'admin', 'admin', 'admin', '$2y$10$uTks.A79ifdDP8jNjL8M5erex0j/ouZg5w9DWb5LjQv3oeK1QPbUG', '1985-05-05', 'Мужской', 'admin', 'avatar.jpg'),
(2, 'user', 'user', 'user', '$2y$10$Gjh9RYNa6gDpsrzpOLy3DesGhL9Lp0Hka010W2Ah3jafclLZ8ZZgq', '1980-01-01', 'Мужской', 'user', 'avatar.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catalog`
--
ALTER TABLE `catalog`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
