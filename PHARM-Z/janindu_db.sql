-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:8111
-- Generation Time: Jul 15, 2023 at 12:39 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `janindu_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `product_id`) VALUES
(2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `produts`
--

CREATE TABLE `produts` (
  `id` int(10) NOT NULL,
  `product_name` varchar(40) NOT NULL,
  `image` varchar(100) NOT NULL,
  `text1` varchar(100) NOT NULL,
  `text2` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produts`
--

INSERT INTO `produts` (`id`, `product_name`, `image`, `text1`, `text2`, `description`) VALUES
(1, 'BIO OIL DRY SKIN', '../PHARM-Z/Images/medicine/bio_gel100_2.jpg', 'GEL 100ML', 'LKR 1,832.00', '../PHARM-Z/biona.html'),
(2, '21ST CENTURY', '../PHARM-Z/Images/medicine/1023568_1.jpg', 'ARTHRIFLEX TAB', 'LKR 4,800.00', '../PHARM-Z/medic.html'),
(3, 'APPETON WEIGHT', '../PHARM-Z/Images/medicine/be97aab5b99196d5d718f97eb1a4b96b.png', 'GAIN JUNIOR VANILA', 'LKR 10,876.00', '../PHARM-Z/medic.html'),
(4, 'BIONA CAPSULES', '../PHARM-Z/Images/medicine/325.jpg', '30s', 'LKR 5,284.00', '../PHARM-Z/biona.html');

-- --------------------------------------------------------

--
-- Table structure for table `sellers`
--

CREATE TABLE `sellers` (
  `id` int(10) NOT NULL,
  `seller_name` varchar(100) NOT NULL,
  `shop_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `address` varchar(200) NOT NULL,
  `sellname` varchar(50) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `password2` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sellers`
--

INSERT INTO `sellers` (`id`, `seller_name`, `shop_name`, `email`, `phone`, `address`, `sellname`, `username`, `password`, `password2`) VALUES
(1, 'kapila undukapuchcha', 'kapila flowers', 'kapila@gmail.com', '0773232143', 'kapila mal,peradeniya,sri lanka', 'kapila', 'kapilamala', '111111', '111111');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(200) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `password2` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `email`, `phone`, `address`, `username`, `password`, `password2`) VALUES
(1, 'Janindu Himansa', 'jana@gmail.com', '0771212123', 'no 12,sliit,malabe', 'janindu1', '111111', '111111');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produts`
--
ALTER TABLE `produts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sellers`
--
ALTER TABLE `sellers`
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
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `produts`
--
ALTER TABLE `produts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sellers`
--
ALTER TABLE `sellers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
