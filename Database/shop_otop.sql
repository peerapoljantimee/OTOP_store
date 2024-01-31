-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2023 at 05:59 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop_otop`
--

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `member_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member_id`, `username`, `password`, `name`, `email`, `address`) VALUES
(9, 'admin', '1234', 'admin', 'admin@gmail.com', 'home admin in backend');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `member_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `address` text NOT NULL,
  `total_ship` int(11) NOT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'กำลังจัดเตรียมสินค้า'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_product`
--

CREATE TABLE `order_product` (
  `order_id` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `sumPeritem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shop_prod`
--

CREATE TABLE `shop_prod` (
  `prod_id` int(11) NOT NULL,
  `prod_name` varchar(200) NOT NULL,
  `prod_detail` text DEFAULT NULL,
  `prod_price` float NOT NULL,
  `prod_img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `shop_prod`
--

INSERT INTO `shop_prod` (`prod_id`, `prod_name`, `prod_detail`, `prod_price`, `prod_img`) VALUES
(1, 'กระเป๋าสานจากกก ใบใหญ่', 'กระเป๋าสานจากกก(อ.นาหว้า)', 500, '../p_img/1.jpg'),
(2, 'กระเป๋าสาน ใบใหญ่', 'กระเป๋าสานใบใหญ่ลายลูกแก้ว ย้อมสีครามน้ำเงิน', 1500, '../p_img/2.jpg'),
(3, 'กระเป๋าสานจากต้นกก ใบใหญ่', 'งานเป็นการสานลายหมี่เส้นกกย้อมสีครามน้ำเงินผสมสีกฏธรรมชาติ', 250, '../p_img/3.jpg'),
(4, 'กระเป๋าสานจากกก ใบใหญ่', 'กระเป๋าจักสานจากต้นกก', 580, '../p_img/4.jpg'),
(5, 'กระเป๋าจักสานจากต้นกก ใบเล็ก', 'กระเป๋าจักสานจากต้นกก ใบเล็ก ลายสีเขียว', 380, '../p_img/5.jpg'),
(6, 'กระเป๋าจักสานจากต้นกก ใบเล็ก', 'กระเป๋าจักสานจากต้นกก ใบเล็ก ลายดั้งเดิมสีครีม', 200, '../p_img/6.jpg'),
(7, 'กระเป๋าจักสานจากต้นกก ใบใหญ่', 'กระเป๋าจักสานจากต้นกก ใบใหญ่ ลายสีรุ้ง', 250, '../p_img/7.jpg'),
(8, 'กระเป๋าจักสานจากต้นกก ใบใหญ่', 'กระเป๋าจักสานจากต้นกก', 1280, '../p_img/8.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `shop_prod`
--
ALTER TABLE `shop_prod`
  ADD PRIMARY KEY (`prod_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=232;

--
-- AUTO_INCREMENT for table `shop_prod`
--
ALTER TABLE `shop_prod`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
