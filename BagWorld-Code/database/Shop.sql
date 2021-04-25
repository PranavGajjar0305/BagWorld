-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 25, 2021 at 03:22 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(2, 'admin', '0e7517141fb53f21ee439b355b5a1d0a');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(100) NOT NULL,
  `brand_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`) VALUES
(1, 'Charles & Krith'),
(2, 'Zara'),
(3, 'H&M'),
(4, 'Forever21'),
(5, 'Newlook'),
(6, 'Asos'),
(7, 'Miumiu'),
(8, 'ABCD');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `p_id` int(10) NOT NULL,
  `date_order` varchar(250) NOT NULL,
  `user_id` int(10) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_address` varchar(100) NOT NULL,
  `user_phone` varchar(10) NOT NULL,
  `user_email` varchar(300) NOT NULL,
  `product_title` varchar(200) NOT NULL,
  `product_image` varchar(200) NOT NULL,
  `qty` int(10) NOT NULL,
  `price` int(10) NOT NULL,
  `total_amt` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `p_id`, `date_order`, `user_id`, `user_name`, `user_address`, `user_phone`, `user_email`, `product_title`, `product_image`, `qty`, `price`, `total_amt`) VALUES
(10, 2, '25-04-2021 15:35:46', 5, 'Fname', 'dandaj ', '9876543210', 'email1@gmail.com', 'Child backpack', '7LpYCO_simg_569a19_570-570-56-92_cropf_simg_b5529c_250x250_maxb.jpg', 1, 25000, 25000),
(11, 3, '25-04-2021 15:35:47', 5, 'Fname', 'dandaj ', '9876543210', 'email1@gmail.com', 'Rabbit Bag', '57ab25e591164.png', 1, 30000, 30000),
(12, 1, '25-04-2021 15:35:48', 5, 'Fname', 'dandaj ', '9876543210', 'email1@gmail.com', 'Advance product', '3PGVwy_simg_b5529c_250x250_maxb.jpg', 1, 5000, 5000),
(13, 4, '25-04-2021 15:37:36', 5, 'Fname', 'dandaj ', '9876543210', 'email1@gmail.com', 'Cute Bag', '2016-Candy-Color-Mini-Backpack-For-Girls-Cute-Mouse-Ear-Bag-High-Quality-Women-Leather-Backpack.jpg_640x640.jpg', 1, 32000, 32000),
(14, 2, '25-04-2021 15:56:13', 6, 'Pranav', 'add1 adas', '9876543210', 'pranav@gmail.com', 'Child backpack', '7LpYCO_simg_569a19_570-570-56-92_cropf_simg_b5529c_250x250_maxb.jpg', 1, 25000, 25000),
(15, 3, '25-04-2021 15:56:19', 6, 'Pranav', 'add1 adas', '9876543210', 'pranav@gmail.com', 'Rabbit Bag', '57ab25e591164.png', 1, 30000, 30000),
(16, 5, '25-04-2021 15:56:21', 6, 'Pranav', 'add1 adas', '9876543210', 'pranav@gmail.com', 'Mini Bag', '3204470609249919193.jpg', 1, 10000, 10000);

-- --------------------------------------------------------

--
-- Table structure for table `cart_has_products`
--

CREATE TABLE `cart_has_products` (
  `cart_id` int(10) NOT NULL,
  `products_product_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(100) NOT NULL,
  `cat_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'Hand bag'),
(2, 'Backpacks'),
(3, 'Men\'s wallet'),
(4, 'Women\'s wallet'),
(5, 'Young Fashion'),
(7, 'Child Bag');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `title` varchar(45) DEFAULT NULL,
  `contents` text DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `title`, `contents`, `created`, `status`) VALUES
(1, 'ha', 'ha@gmail.com', 'Inquiries about the product\'s price', 'Inquiries about the product\'s price', '2016-07-21 15:43:45', 1),
(2, 'adad', 'a@gmail.com', 'Inquiries about the product\'s price', 'Inquiries about the product\'s price', '2016-07-21 15:44:03', 1);

-- --------------------------------------------------------

--
-- Table structure for table `Guest`
--

CREATE TABLE `Guest` (
  `ID` int(100) NOT NULL,
  `Pro_ID` int(100) DEFAULT NULL,
  `Pro_name` varchar(255) DEFAULT NULL,
  `Date_order` varchar(255) DEFAULT NULL,
  `Product_image` varchar(255) DEFAULT NULL,
  `Qty` int(100) DEFAULT NULL,
  `Price` int(100) DEFAULT NULL,
  `Total_amt` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `ID` int(100) NOT NULL,
  `User_name` varchar(255) DEFAULT NULL,
  `Total` int(100) DEFAULT NULL,
  `Status` varchar(255) DEFAULT NULL,
  `Time` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(100) NOT NULL,
  `product_cat` int(100) NOT NULL,
  `product_brand` int(100) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` text NOT NULL,
  `product_keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_cat`, `product_brand`, `product_title`, `product_price`, `product_desc`, `product_image`, `product_keywords`) VALUES
(1, 4, 2, 'Advance product', 5000, 'Durable materials break down quickly', '3PGVwy_simg_b5529c_250x250_maxb.jpg', 'for women'),
(2, 2, 3, 'Child backpack', 25000, 'backpacks for children', '7LpYCO_simg_569a19_570-570-56-92_cropf_simg_b5529c_250x250_maxb.jpg', 'backpacks for children'),
(3, 2, 3, 'Rabbit Bag', 30000, 'Rabbit bag', '57ab25e591164.png', 'bag rabbit'),
(4, 2, 3, 'Cute Bag', 32000, 'cute bag 2017', '2016-Candy-Color-Mini-Backpack-For-Girls-Cute-Mouse-Ear-Bag-High-Quality-Women-Leather-Backpack.jpg_640x640.jpg', 'cute bag'),
(5, 1, 2, 'Mini Bag', 10000, 'Mini Bag', '3204470609249919193.jpg', 'mini bag'),
(6, 2, 1, 'Style Bag', 35000, 'Style Bag', 'AMK3Xf_simg_b5529c_250x250_maxb.jpg', 'style bag'),
(7, 2, 1, 'Beautiful backpack for baby', 50000, 'Beautiful backpack for baby', 'ba-lo-250x250.jpg', 'Beautiful backpack for baby'),
(8, 3, 4, 'Leather wallet ', 40000, 'Leather wallet ', 'cd8af4c0-56fd-11e7-8335-5b8ad15777b5.jpg', 'Leather wallet '),
(9, 1, 3, 'Handbag ', 12000, 'Handbag', 'charles&krith1.jpg', 'Handbag'),
(10, 1, 6, 'Charles & Krith Red Bag', 1000, 'Charles Krith Bag', 'charles&krith2.jpg', 'charles & krith red bag '),
(11, 1, 6, 'Charles & Krith Mini Bag', 1200, 'Charles Krith Bag', 'charles&krith3.jpg', 'charles & krith mini bag'),
(12, 1, 6, 'Charles & Krith Mini Bag', 1500, 'Charles Krith Bag', 'charles&krith4.jpg', 'charles & krith mini bag'),
(13, 1, 6, 'Pink Bag', 1200, 'Pink bag', 'charles&krith5.png', 'pink bag '),
(14, 1, 6, 'Charles & Krith C6', 1400, 'Charles Krith Bag', 'charles&krith6.jpg', 'charles & krith c6'),
(15, 1, 6, 'Charles & Krith C7', 1500, 'Charles Krith Bag', 'charles&krith7.jpg', 'charles & krith c7'),
(16, 1, 6, 'Charles & Krith C8', 600, 'Charles Krith Bag', 'charles&krith8.jpg', 'charles & krith c8'),
(17, 4, 6, 'V3 handbag', 1000, 'V3 handbag', 'dd4933_simg_b5529c_250x250_maxb.jpg', 'charles & krith v3'),
(19, 1, 6, 'Hand bag V4', 3000, 'Hand bag V4', 'ec7AZd_simg_b5529c_250x250_maxb.jpg', 'charles & krith v4'),
(20, 4, 6, 'Ví da Pro', 1600, 'Vi da Pro', 'gf9bpo_simg_b5529c_250x250_maxb.png', 'vi da pro'),
(21, 4, 6, 'Hand wallet', 800, 'Hand wallet', 'gLxnqZ_simg_b5529c_250x250_maxb.jpg', 'Hand wallet'),
(22, 4, 6, 'Meo Meo Wallet', 1300, 'Cute wallet', 'gsbk76_simg_b5529c_250x250_maxb.jpg', 'meo meo wallet'),
(23, 1, 6, 'Handbag', 1900, 'Handbag', 'H&M1.jpg', 'Handbag'),
(24, 4, 6, 'Ví Ki Ki', 700, 'Vi ki ki beautyful', 'hikh.jpg', 'vi ki ki'),
(25, 4, 6, 'Leather purse', 750, 'Leather purse', 'hRfIFq_simg_f3eed6_539-539-77-0_cropf_simg_b5529c_250x250_maxb.png', 'Leather purse'),
(26, 4, 6, 'Sim max', 650, 'Sim max bag beau', 'HryJTc_simg_b5529c_250x250_maxb.jpg', 'sim max'),
(27, 1, 6, 'Túi da M4', 690, 'Tui da M4', 'iXdkou_simg_b5529c_250x250_maxb.jpg', 'tui da m4'),
(32, 4, 0, 'Túi da B5', 2500, 'Tui da B5', 'Krlp4i_simg_92c814_522-522-0-0_cropf_simg_b5529c_250x250_maxb.jpg', 'tui da b5'),
(33, 5, 2, 'Ví cho bé', 35000, 'Vi cho be', 'kXyd11_simg_b5529c_250x250_maxb.jpg', 'vi cho be'),
(34, 2, 4, 'Túi cá tính', 1000, 'Tui cho baby', 'OJ8VQ2_simg_b5529c_250x250_maxb.jpg', 'tui ca tinh'),
(35, 2, 0, 'Balo pink', 6000, 'Balo pink', 'OrS62W_simg_b5529c_250x250_maxb (1).jpg', 'balo pink mau hong'),
(36, 2, 5, 'Pink Backpack', 1500, 'Pink Backppack', 'OrS62W_simg_b5529c_250x250_maxb.JPG', 'pink back pack backpack mau hong'),
(37, 4, 5, 'Wallet for woman', 20000, 'Wallet for woman', 'P8Xu6h_simg_b5529c_250x250_maxb.jpg', 'wallet for man'),
(38, 4, 4, 'Wallet pink girl', 3500, 'Wallet pink girl', 'pPWB77_simg_b5529c_250x250_maxb.jpg', 'wallet for girl mau hong'),
(39, 4, 5, 'Yellow', 2500, 'Yellow', 'preview_vi-nu-hermes-mot-dai-fullbox-.jpg', 'yellow'),
(40, 2, 6, 'Lovely Bag', 3000, 'Lovely Bag', 'product-image-204291675_1024x1024.jpg', 'love lovely bag'),
(45, 4, 2, 'Pink Wallet', 10000, 'Pink wallet', 'no.jpg', 'pink wallet mau hong'),
(46, 3, 2, 'Wallet for man', 10000, 'Wallet for man', 'no1.jpg', 'wallet for man'),
(47, 4, 7, 'Ví da - Màu tím', 10000, 'Vi da mau tim', 'no2.jpg', 'vi da mau tim purple'),
(48, 5, 7, 'Style Bag', 10000, 'Style Bag', 'zara1.jpg', 'style bag'),
(49, 5, 2, 'Zara apple B1', 10000, 'Zara apple B1', 'zara2.jpg', 'zara apple b1'),
(50, 5, 2, 'MiuMiu Gold', 10000, 'Miumiu Cold', 'zara3.jpg', 'miumiu gold'),
(51, 5, 2, 'Asos - Túi xách', 10000, 'Asos - tui xach beau', 'zara4.jpg', 'asos - tui xach'),
(52, 5, 2, 'H&M (Black)', 10000, 'HM H&M Black Bag', 'zara5.jpg', 'h m h&m balck'),
(53, 5, 2, 'Forever21 (Green)', 10000, 'Forever21 Bag beau', 'zara6.jpg', 'forever21'),
(54, 5, 2, 'Village - Newlook', 10000, 'Old bag beau', 'zara7.jpg', 'village newlook'),
(57, 1, 1, 'nsnfj', 20000, 'dbadbah', 'product2.jpg', 'daa');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `Slider_ID` int(100) NOT NULL,
  `URL` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`Slider_ID`, `URL`) VALUES
(1, 'slide1.png'),
(2, 'slide2.png'),
(3, 'slide3.png'),
(4, 'slide1.png');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `user_id` int(10) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `address1` varchar(300) NOT NULL,
  `address2` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `first_name`, `last_name`, `email`, `password`, `mobile`, `address1`, `address2`) VALUES
(1, 'fname', 'lname', 'abcd@gmail.com', '1ca06f61118c43a5a02b3979813ae11d', '0904765341', 'ahdbh', 'asda'),
(3, 'Pranav', 'Pahsbh', 'adhabh@gmail.com', 'd00f5d5217896fb7fd601412cb890830\r\n', '9876543210', 'djanjd', 'njndnjs'),
(4, 'test1', 'test1', 'test1@gmail.com', 'd00f5d5217896fb7fd601412cb890830\r\n', '9876543210', 'jsdajj', 'jbdjabd'),
(5, 'Fname', 'Lname', 'email1@gmail.com', 'd00f5d5217896fb7fd601412cb890830', '9876543210', 'dandaj ', 'sbhdbhs'),
(6, 'Pranav', 'Gajjar', 'pranav@gmail.com', '1d12eea25ff07136ef66fd7ae5cf051f', '9876543210', 'add1 adas', 'adsad adad');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `cart_has_products`
--
ALTER TABLE `cart_has_products`
  ADD PRIMARY KEY (`cart_id`,`products_product_id`),
  ADD KEY `products_product_id` (`products_product_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `Guest`
--
ALTER TABLE `Guest`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `product_cat` (`product_cat`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`Slider_ID`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `Guest`
--
ALTER TABLE `Guest`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `Slider_ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_info` (`user_id`);

--
-- Constraints for table `cart_has_products`
--
ALTER TABLE `cart_has_products`
  ADD CONSTRAINT `cart_has_products_ibfk_1` FOREIGN KEY (`cart_id`) REFERENCES `cart` (`id`),
  ADD CONSTRAINT `cart_has_products_ibfk_2` FOREIGN KEY (`products_product_id`) REFERENCES `products` (`product_id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`product_cat`) REFERENCES `categories` (`cat_id`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`product_cat`) REFERENCES `brands` (`brand_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
