-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2019 at 02:58 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phoneNumber` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `last_login` datetime NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `name`, `username`, `password`, `email`, `address`, `phoneNumber`, `status`, `last_login`, `image`) VALUES
(1, ' Siddharth Malhotra', 'sid', '97cbc5f9423905429600954f50e31f5e', 'sid123@gmail.com', 'ktm', 987456243, 1, '0000-00-00 00:00:00', 'admin.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phoneNumber` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(11) NOT NULL,
  `orderDate` datetime NOT NULL,
  `orderStatus` tinyint(1) NOT NULL DEFAULT '0',
  `description` text NOT NULL,
  `customerID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `id` int(11) NOT NULL,
  `paymentDate` datetime NOT NULL,
  `amount` bigint(20) NOT NULL,
  `paymentMode` varchar(50) NOT NULL,
  `customerID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `description` text,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `rank` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` varchar(30) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `updated_by` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `name`, `price`, `description`, `status`, `rank`, `created_at`, `updated_at`, `created_by`, `image`, `updated_by`) VALUES
(1, 'Carissa Mayo', 851, 'Dolor cupidatat veli', 1, 36, '2019-08-29 09:30:56', NULL, NULL, NULL, NULL),
(2, 'Black forest', 800, '1 pound cake ', 0, 1, '2019-08-29 20:21:39', NULL, NULL, NULL, NULL),
(3, 'Fruit cake', 1000, 'with lots of pineapple, strawberries, kiwis', 0, 2, '2019-08-29 20:22:39', NULL, NULL, NULL, NULL),
(4, 'white forest', 800, 'hfjgfghfgj', 0, 3, '2019-08-30 08:48:17', NULL, NULL, NULL, NULL),
(8, 'pastry', 120, 'cream filled', 1, 8, '0000-00-00 00:00:00', NULL, NULL, NULL, NULL),
(11, 'Red velvet', 1000, 'with wipped cream', 1, 9, '0000-00-00 00:00:00', NULL, NULL, NULL, NULL),
(15, 'Acton Sweeney', 258, 'Corrupti pariatur ', 0, 62, '2019-09-06 21:16:20', NULL, NULL, NULL, NULL),
(16, 'Britanni Richardson', 197, 'hsdgygyia', 1, 43, '0000-00-00 00:00:00', NULL, NULL, NULL, '1'),
(18, 'Francis Davenport', 57, 'Quam nihil vero ipsa', 0, 61, '2019-09-07 07:24:40', NULL, NULL, NULL, NULL),
(19, 'Castor Mooney', 681, 'Magna iure est ipsu', 1, 86, '2019-09-07 07:28:00', NULL, NULL, NULL, NULL),
(20, 'Blake Payne', 286, 'Ex voluptatibus moll', 1, 91, '0000-00-00 00:00:00', NULL, NULL, '', '1'),
(21, 'Walter Gibson', 828, 'Nihil vero consequat', 1, 14, '2019-09-07 07:52:15', NULL, NULL, NULL, NULL),
(23, 'Cheyenne Mcmillan', 37, 'Architecto at magni ', 1, 60, '0000-00-00 00:00:00', NULL, NULL, '', '1'),
(24, 'Neil Day', 808, 'Incididunt cupidatat', 1, 19, '0000-00-00 00:00:00', NULL, NULL, '', '1'),
(29, 'Natalie Saunders', 424, 'Incidunt sed id min', 1, 22, '0000-00-00 00:00:00', NULL, NULL, '', '1'),
(30, 'crossaint', 800, 'jasjks', 1, 16, '0000-00-00 00:00:00', NULL, NULL, '', '1'),
(31, 'Ian Reyes', 160, 'Sed et sint in aut o', 1, 39, '2019-12-15 05:44:06', NULL, NULL, '40436.jpg', NULL),
(32, 'Winter Figueroa', 204, 'Est magnam et error ', 1, 50, '2019-12-15 05:45:43', NULL, NULL, '40436.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_quantity`
--

CREATE TABLE `tbl_quantity` (
  `id` int(11) NOT NULL,
  `orderID` int(11) NOT NULL,
  `productID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phoneNumber` (`phoneNumber`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customerID` (`customerID`);

--
-- Indexes for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customerID` (`customerID`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `tbl_quantity`
--
ALTER TABLE `tbl_quantity`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tbl_quantity_ibfk_1` (`orderID`),
  ADD KEY `tbl_quantity_ibfk_2` (`productID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tbl_quantity`
--
ALTER TABLE `tbl_quantity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD CONSTRAINT `tbl_order_ibfk_1` FOREIGN KEY (`customerID`) REFERENCES `tbl_customer` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD CONSTRAINT `tbl_payment_ibfk_1` FOREIGN KEY (`customerID`) REFERENCES `tbl_customer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_quantity`
--
ALTER TABLE `tbl_quantity`
  ADD CONSTRAINT `tbl_quantity_ibfk_1` FOREIGN KEY (`orderID`) REFERENCES `tbl_order` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_quantity_ibfk_2` FOREIGN KEY (`productID`) REFERENCES `tbl_payment` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
