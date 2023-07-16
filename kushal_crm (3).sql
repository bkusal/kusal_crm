-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2023 at 05:37 AM
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
-- Database: `kushal_crm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` int(11) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `phone`, `email`, `password`, `created_at`) VALUES
(1, 'Kushal', 2147483647, 'Kushal@1gmail.com', '111111', '2023-07-07 03:37:19'),
(2, 'Nirmala', 2147483647, 'bnirmala44@gmail.com', '$2y$10$GqT4TGtrkjZEjVhDA97K2e6rp3yk3vEyPuhq0KQbtMBuYggdywbO6', '2023-07-07 04:34:21'),
(4, '', 0, 'Luffy', '$2y$10$kt92ad5axGPVPsToYsy8Hu5/y8powToiLGDmqIL9gNlo6VqJFqLh.', '2023-07-07 09:00:40'),
(5, '', 0, '', '$2y$10$a9Q9ob0X0X/MlYl.4Cqt5eBTjqHzqHmI8hoyxXk5c72cYxXFhVmhK', '2023-07-11 01:57:09'),
(6, 'name', 2147483647, 'nam11@gmail.com', '$2y$10$bqdZ7zk7UrpVji8QUi8dvOfMC569kXPqeihlbEIwrMztDMmLnGS/S', '2023-07-11 09:18:11'),
(7, 'bind', 2147483647, 'bin@gmail.com', '$2y$10$a78NyjBffTYabd7HYi8azus0QsFhfoYuPdMPegMuzE5jLh7Vx.9wq', '2023-07-11 09:23:28'),
(8, 'dupendra', 2147483647, 'dup@gmail.com', '$2y$10$YuTqvHEmRm6T5h5rCsjfY.YSq9CmQAEN8A9DtRPENdaz1ZaEaC472', '2023-07-13 00:57:40');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` text DEFAULT NULL,
  `email` varchar(200) NOT NULL,
  `phone` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `description`, `email`, `phone`, `created_at`) VALUES
(2, 'Ram', 'sdfsdfsadf', 'ram1@gmail.com', 2147483647, '2023-07-06 08:13:50'),
(5, 'Rukesh', 'Dari', 'rukesh1@gmail.com', 2147483647, '2023-07-13 02:02:17');

-- --------------------------------------------------------

--
-- Table structure for table `customer_queries`
--

CREATE TABLE `customer_queries` (
  `id` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `product_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_queries`
--

INSERT INTO `customer_queries` (`id`, `subject`, `product_id`, `customer_id`, `image`) VALUES
(37, 'report', 1, 2, 'PXL_20230521_030704587.jpg'),
(38, 'report', 1, 2, 'PXL_20230521_030704587.jpg'),
(39, 'report', 1, 2, 'PXL_20230521_030704587.jpg'),
(40, 'report', 1, 2, '356431740_1736873020058907_2312819053713647156_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `description`, `created_at`) VALUES
(1, 'Computer', 'Electronic device', '2023-07-06 11:08:23'),
(2, 'Mouse', 'Hardware device', '2023-07-06 11:49:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_queries`
--
ALTER TABLE `customer_queries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_queries_customer_id` (`customer_id`),
  ADD KEY `customer_queries_product_id` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customer_queries`
--
ALTER TABLE `customer_queries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer_queries`
--
ALTER TABLE `customer_queries`
  ADD CONSTRAINT `customer_queries_customer_id` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `customer_queries_product_id` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
