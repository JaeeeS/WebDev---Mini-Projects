-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql206.byetcluster.com
-- Generation Time: Jun 20, 2022 at 04:41 AM
-- Server version: 10.3.27-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_31961702_orderformdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cust_id` int(11) NOT NULL,
  `cust_name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contact_name` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `mobile` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `cust_name`, `address`, `contact_name`, `phone`, `mobile`, `email`, `date`) VALUES
(1, 'Maria', 'DB', 'Apache', 123, 123, 'sql@gmail.com', '2022-06-19'),
(2, 'Sequel', 'Apache', 'Maria', 123, 123, 'xampp@yahoo.com', '2022-06-19'),
(3, 'Maria', 'DB', 'Apache', 123, 123, 'sequel@gmail.com', '2022-06-19'),
(4, 'Apache', 'Maria', 'Db', 123, 123, 'am@gmail.com', '2022-06-19'),
(5, 'Loriel Alo', '854-E sta. Margarita st. Tondo manila', 'Loriel Alo', 2147483647, 2147483647, 'leonelpogiitoo@gmail.com', '2022-06-10');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `item_id` int(11) NOT NULL,
  `unit` varchar(10) NOT NULL,
  `product_code` varchar(10) NOT NULL,
  `description` varchar(20) NOT NULL,
  `unit_price` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`item_id`, `unit`, `product_code`, `description`, `unit_price`) VALUES
(1, 'box', 'ND1', 'Noodles', 300),
(2, 'piece', 'CL2', 'Chocolate', 30),
(3, 'kilo', 'RC3', 'Rice', 50),
(4, 'grams', 'SG4', 'Sugar', 5),
(5, 'piece', 'PC5', 'Potato Chips', 20),
(6, 'kilo', 'MG6', 'Mango', 120),
(7, 'piece', 'BG7', 'Bubble Gum', 5),
(8, 'grams', 'ST8', 'Salt', 3),
(9, 'box', 'MK9', 'Milk', 100);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orders_id` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `sub_total` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orders_id`, `cust_id`, `item_id`, `quantity`, `sub_total`) VALUES
(1, 1, 2, 2, 60),
(2, 2, 1, 1, 300),
(3, 2, 4, 1, 5),
(4, 2, 3, 1, 50),
(5, 2, 4, 1, 5),
(6, 2, 5, 1, 20),
(7, 3, 3, 1, 50),
(8, 3, 2, 1, 30),
(9, 3, 5, 1, 20),
(10, 3, 4, 1, 5),
(11, 3, 1, 1, 300),
(12, 4, 2, 1, 30),
(13, 4, 1, 2, 600),
(14, 4, 4, 1, 5),
(15, 4, 5, 1, 20),
(16, 4, 3, 1, 50),
(17, 5, 1, 2, 600),
(18, 5, 2, 1, 30),
(19, 5, 3, 1, 50),
(20, 5, 4, 1, 5),
(21, 5, 5, 1, 20);

-- --------------------------------------------------------

--
-- Table structure for table `summary`
--

CREATE TABLE `summary` (
  `summary_id` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `summary`
--

INSERT INTO `summary` (`summary_id`, `cust_id`, `total`) VALUES
(1, 1, 60),
(2, 2, 380),
(3, 3, 405),
(4, 4, 705),
(5, 5, 705);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orders_id`),
  ADD KEY `cust_id` (`cust_id`),
  ADD KEY `item_id` (`item_id`);

--
-- Indexes for table `summary`
--
ALTER TABLE `summary`
  ADD PRIMARY KEY (`summary_id`),
  ADD KEY `cust_id` (`cust_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orders_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `summary`
--
ALTER TABLE `summary`
  MODIFY `summary_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
