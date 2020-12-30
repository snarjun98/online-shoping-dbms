-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2020 at 10:56 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `a`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `admin_id` int(10) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `admin_email` varchar(300) NOT NULL,
  `admin_password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`admin_id`, `admin_name`, `admin_email`, `admin_password`) VALUES
(1, 'admin', 'admin@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `component`
--

CREATE TABLE `component` (
  `productid` int(10) NOT NULL,
  `productname` varchar(50) NOT NULL,
  `productpprice` int(20) NOT NULL,
  `productprice` int(20) NOT NULL,
  `productimg` varchar(50) NOT NULL,
  `descption` varchar(50) NOT NULL,
  `cat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `component`
--

INSERT INTO `component` (`productid`, `productname`, `productpprice`, `productprice`, `productimg`, `descption`, `cat`) VALUES
(1, 'Samsung S7', 55000, 35000, './img/product4.png', '4gb Ram 64gb Rom 3000mah  ', 'EM'),
(2, 'Apple MacBook Air Core', 84000, 61000, './img/product01.png', '8 GB/128GB SSD OS Sierra', 'EL'),
(3, 'Sony Tablet-1122', 22000, 18000, './img/product3.png', '4gb Ram 64gb Rom 6000mah  ', 'EM'),
(4, 'Blaze-Headphone', 2200, 999, './img/product2.png', 'Wireless Headphone', 'EM'),
(5, 'Top', 2200, 1000, './img/g1.jpg', '100%Coton', 'CG'),
(6, 'SweatShirt', 2000, 1300, './img/m1.png', 'Nylon ', 'CM'),
(7, 'Shirt and shots', 2000, 1500, './img/m2.jpg', 'Size L ', 'CM'),
(8, 'Shirt and Pant', 2500, 1100, './img/g2.jpeg', 'Size M ', 'CG'),
(9, 'Sofa', 13000, 8000, './img/f1.png', 'Teak wook sofa', 'F'),
(10, 'Wooden Wall', 30000, 18000, './img/f2.jpg', 'Teak wook ', 'F'),
(11, 'Study table', 20000, 14000, './img/f3.jpg', 'Teak wook ', 'F'),
(12, 'Tv Stand', 12000, 8999, './img/f4.jpg', 'Teak wook ', 'F'),
(13, 'Bat', 1000, 800, './img/s1.jpeg', 'MRF Bat', 'S'),
(14, 'Ball', 500, 300, './img/s2.jpeg', 'Good For Tennis', 'S'),
(15, 'FootBall', 3000, 2000, './img/s3.jpeg', 'Football size:10', 'S'),
(16, 'Football', 6000, 5000, './img/s4.jpeg', 'CR7 Football w Pump', 'S'),
(17, 'Bass_Headphone', 3000, 1999, './img/product05.png', 'Wired HEadphone', 'EM'),
(18, 'Sony Mobile', 8999, 7999, './img/sony mobile.jpg', '4-inch tochscreen', 'EM'),
(19, 'Iphone-5', 30000, 23999, './img/white iphone.png', 'White Iphone', 'EM'),
(20, 'Sumsung Note 3', 8999, 7999, './img/samsung_galaxy_note3_note3neo.jpg', '4-inch tochscreen', 'EM'),
(21, 'sony_xperia_z', 20000, 17999, './img/530201353846AM_635_sony_xperia_z.png', 'Dust and Water proof', 'EM'),
(22, 'MI Tv', 18999, 15999, './img/t1.jpeg', '32 inch LED', 'ET'),
(23, 'Lg All In one', 18999, 13999, './img/tv2.jpeg', '32 inch LED', 'ET'),
(24, 'Vu Tv', 15999, 10999, './img/tv3.jpeg', '32 inch Smart tv', 'ET'),
(25, 'Vu Tv', 28999, 23999, './img/tv4.jpeg', '42 inch LED', 'ET'),
(26, 'Samsung Tv', 33999, 29999, './img/tv5.jpeg', '30 inch  tv', 'ET'),
(27, 'BPL', 18999, 12999, './img/tv6.jpeg', '32 inch LED', 'ET'),
(28, 'Thomson ', 33999, 30999, './img/tv7.jpeg', '50 inch  tv', 'ET'),
(29, 'Vu Priemum', 28999, 22999, './img/tv8.jpeg', '42 inch LED', 'ET'),
(30, 'MSI', 55999, 50999, './img/l1.jpeg', '8 GB/512 GB SSD', 'EL'),
(31, 'Acer Predector', 60999, 55999, './img/l2.jpeg', '8 GB/1 TB HDD/128 GB SSD', 'EL'),
(32, 'Acer Nitro', 45999, 40999, './img/l3.jpeg', '8 GB/512 GB SSD', 'EL'),
(33, 'Dell G3', 60999, 58999, './img/l4.jpeg', '8 GB/1 TB HDD/128 GB SSD', 'EL'),
(34, 'Asus Rog', 55999, 50999, './img/l5.jpeg', '8 GB/512 GB SSD', 'EL'),
(35, 'Lenovo Ideapad', 60999, 55999, './img/l6.jpeg', '8 GB/1 TB HDD/128 GB SSD', 'EL'),
(37, 'Alienware', 360999, 355999, './img/l8.jpeg', '32 GB/1 TB HDD/1 TB SSD', 'EL'),
(38, 'Top', 1299, 1099, './img/g3.jpg', 'Size M ', 'CG'),
(39, 'Top', 2333, 2000, './img/g4.jpg', 'Size L', 'CG'),
(40, 'Top', 3299, 2099, './img/g5.jpg', 'Size M ', 'CG'),
(41, 'Top', 2333, 2000, './img/g6.jpg', 'Size L', 'CG'),
(42, 'Top', 4299, 3199, './img/g7.jpg', 'Size L ', 'CG'),
(43, 'Top', 2333, 2000, './img/g8.jpg', 'Size L', 'CG'),
(44, 'Shirt', 1599, 1099, './img/m4.jpg', 'Size L ', 'CM'),
(45, 'Suit Set', 20000, 17999, './img/m5.jpg', 'Size L', 'CM'),
(46, 'Pant', 2599, 2099, './img/m7.jpg', 'Size L ', 'CM'),
(47, 'Jacket', 2000, 1799, './img/m8.jpg', 'Size L', 'CM'),
(48, 'Jacket', 3599, 3099, './img/m9.jpg', 'Size L ', 'CM'),
(49, 'Suit ', 12000, 10999, './img/m12.jpg', 'Size L', 'CM');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `product_id` int(20) NOT NULL,
  `total price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `cid`, `product_id`, `total price`) VALUES
(4, 20, 2, 61000);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `f_name` varchar(20) NOT NULL,
  `l_name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phno` bigint(10) NOT NULL,
  `gender` enum('m','f','o') NOT NULL,
  `pass` int(20) NOT NULL,
  `cpass` int(20) NOT NULL,
  `ad1` varchar(100) NOT NULL,
  `ad2` varchar(100) NOT NULL,
  `vkey` varchar(500) NOT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `f_name`, `l_name`, `email`, `phno`, `gender`, `pass`, `cpass`, `ad1`, `ad2`, `vkey`, `verified`) VALUES
(20, 'Arjun', 'SN', 'snarjun98@gmail.com', 9739660062, 'm', 123, 123, '819 Strathcona', '1212', '49c85d7b665cd1b01d51732b4b88ed3d', 1),
(28, 'arjun', 'sn', 'snarjun29101@gmail.com', 9899898998, 'm', 123, 123, 'w', 'oui', 'f66b317034a45703a89cdd23a34f7cff', 1),
(29, 'arjun', 'sn', 'snarjun333@gmail.com', 9899898998, 'm', 123, 123, 'asas', 'adad', 'b0c3e560c29a6049c164eae62092c788', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `component`
--
ALTER TABLE `component`
  ADD PRIMARY KEY (`productid`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `cid` (`cid`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `component`
--
ALTER TABLE `component`
  MODIFY `productid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `component` (`productid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`cid`) REFERENCES `register` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
