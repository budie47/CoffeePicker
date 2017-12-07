-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 08, 2017 at 06:39 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coffeepicker`
--

-- --------------------------------------------------------

--
-- Table structure for table `pc_admin`
--

CREATE TABLE `pc_admin` (
  `id` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_no` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pc_menu_detail`
--

CREATE TABLE `pc_menu_detail` (
  `menu_id` varchar(30) NOT NULL,
  `item_id` varchar(30) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `size` varchar(30) NOT NULL,
  `status` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pc_menu_master`
--

CREATE TABLE `pc_menu_master` (
  `menu_id` varchar(30) NOT NULL,
  `store_id` varchar(30) NOT NULL,
  `menu_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pc_order_detail`
--

CREATE TABLE `pc_order_detail` (
  `detail_id` int(11) NOT NULL,
  `order_id` varchar(30) NOT NULL,
  `order_item_name` varchar(50) NOT NULL,
  `quantity` int(10) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pc_order_master`
--

CREATE TABLE `pc_order_master` (
  `order_id` varchar(30) NOT NULL,
  `user_id` varchar(30) NOT NULL,
  `store_id` varchar(30) NOT NULL,
  `order_datetime` datetime NOT NULL,
  `status` int(3) NOT NULL,
  `total_price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pc_staff`
--

CREATE TABLE `pc_staff` (
  `id` varchar(30) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone_no` varchar(15) NOT NULL,
  `type` varchar(30) NOT NULL,
  `status` int(3) NOT NULL,
  `store_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pc_staff_log`
--

CREATE TABLE `pc_staff_log` (
  `id` varchar(30) NOT NULL,
  `log_in_datetime` datetime NOT NULL,
  `log_out_datetime` datetime NOT NULL,
  `staff_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pc_stock`
--

CREATE TABLE `pc_stock` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `number` varchar(30) NOT NULL,
  `quantity` int(10) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `expired_date` datetime NOT NULL,
  `status` int(2) NOT NULL,
  `store_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pc_store`
--

CREATE TABLE `pc_store` (
  `id` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(30) NOT NULL,
  `district` varchar(30) NOT NULL,
  `town` varchar(30) NOT NULL,
  `postcode` int(6) NOT NULL,
  `state` varchar(15) NOT NULL,
  `country` varchar(15) NOT NULL,
  `store_no` varchar(15) NOT NULL,
  `admin_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pc_user`
--

CREATE TABLE `pc_user` (
  `user_id` varchar(30) NOT NULL,
  `username` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_no` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pc_admin`
--
ALTER TABLE `pc_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pc_menu_detail`
--
ALTER TABLE `pc_menu_detail`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `menu_id` (`menu_id`);

--
-- Indexes for table `pc_menu_master`
--
ALTER TABLE `pc_menu_master`
  ADD PRIMARY KEY (`menu_id`),
  ADD KEY `store_id` (`store_id`);

--
-- Indexes for table `pc_order_detail`
--
ALTER TABLE `pc_order_detail`
  ADD PRIMARY KEY (`detail_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `pc_order_master`
--
ALTER TABLE `pc_order_master`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `store_id` (`store_id`);

--
-- Indexes for table `pc_staff`
--
ALTER TABLE `pc_staff`
  ADD PRIMARY KEY (`id`),
  ADD KEY `store_id` (`store_id`);

--
-- Indexes for table `pc_staff_log`
--
ALTER TABLE `pc_staff_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `staff_id` (`staff_id`);

--
-- Indexes for table `pc_stock`
--
ALTER TABLE `pc_stock`
  ADD PRIMARY KEY (`id`),
  ADD KEY `store_id` (`store_id`);

--
-- Indexes for table `pc_store`
--
ALTER TABLE `pc_store`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `pc_user`
--
ALTER TABLE `pc_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pc_order_detail`
--
ALTER TABLE `pc_order_detail`
  MODIFY `detail_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pc_menu_detail`
--
ALTER TABLE `pc_menu_detail`
  ADD CONSTRAINT `pc_menu_detail_ibfk_1` FOREIGN KEY (`menu_id`) REFERENCES `pc_menu_master` (`menu_id`);

--
-- Constraints for table `pc_menu_master`
--
ALTER TABLE `pc_menu_master`
  ADD CONSTRAINT `pc_menu_master_ibfk_1` FOREIGN KEY (`store_id`) REFERENCES `pc_store` (`id`);

--
-- Constraints for table `pc_order_detail`
--
ALTER TABLE `pc_order_detail`
  ADD CONSTRAINT `pc_order_detail_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `pc_order_master` (`order_id`);

--
-- Constraints for table `pc_order_master`
--
ALTER TABLE `pc_order_master`
  ADD CONSTRAINT `pc_order_master_ibfk_1` FOREIGN KEY (`store_id`) REFERENCES `pc_store` (`id`),
  ADD CONSTRAINT `pc_order_master_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `pc_user` (`user_id`);

--
-- Constraints for table `pc_staff`
--
ALTER TABLE `pc_staff`
  ADD CONSTRAINT `pc_staff_ibfk_1` FOREIGN KEY (`store_id`) REFERENCES `pc_store` (`id`);

--
-- Constraints for table `pc_staff_log`
--
ALTER TABLE `pc_staff_log`
  ADD CONSTRAINT `pc_staff_log_ibfk_1` FOREIGN KEY (`staff_id`) REFERENCES `pc_staff` (`id`);

--
-- Constraints for table `pc_stock`
--
ALTER TABLE `pc_stock`
  ADD CONSTRAINT `pc_stock_ibfk_1` FOREIGN KEY (`store_id`) REFERENCES `pc_store` (`id`);

--
-- Constraints for table `pc_store`
--
ALTER TABLE `pc_store`
  ADD CONSTRAINT `pc_store_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `pc_admin` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
