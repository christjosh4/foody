-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2018 at 04:09 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_food`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(55) NOT NULL,
  `admin_email` varchar(55) NOT NULL,
  `admin_pass` varchar(55) NOT NULL,
  `admin_role` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_email`, `admin_pass`, `admin_role`) VALUES
(1, 'Soni', 'soni@gmail.com', 'soni', 'Admin'),
(2, 'Vivek', 'vivek@gmail.com', 'vivek', 'Co_Admin');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `cart_id` int(55) NOT NULL,
  `item_id` int(55) NOT NULL,
  `cid` int(55) NOT NULL,
  `cart_status` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`cart_id`, `item_id`, `cid`, `cart_status`) VALUES
(28, 4, 1, 'NA'),
(29, 5, 1, 'NA'),
(38, 4, 1, 'NA'),
(41, 6, 3, 'NA'),
(42, 15, 1, 'NA'),
(43, 11, 1, 'NA');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
(1, 'bhelpuri'),
(3, 'samosa'),
(4, 'sandwich'),
(5, 'pizza'),
(6, 'dosa'),
(7, 'uttappa'),
(9, 'pavbhaji');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `con_id` int(11) NOT NULL,
  `con_name` varchar(55) NOT NULL,
  `con_phone` varchar(10) NOT NULL,
  `con_email` varchar(55) NOT NULL,
  `con_query` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`con_id`, `con_name`, `con_phone`, `con_email`, `con_query`) VALUES
(1, 'Rajesh Raj', '8655237761', 'soni@gmail.com', 'i hate you');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cid` int(11) NOT NULL,
  `cname` varchar(55) NOT NULL,
  `cmob` varchar(10) NOT NULL,
  `cemail` varchar(55) NOT NULL,
  `cpass` varchar(55) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cid`, `cname`, `cmob`, `cemail`, `cpass`, `address`) VALUES
(1, 'Rajesh', '8655237761', 'rajesh@gmail.com', 'rajesh', 'Near Oberoi,Goregaon'),
(3, 'Soni', '9876543210', 'soni@gmail.com', 'soni', 'Pushpa Park, Malad'),
(4, 'Tutela', '8655237761', 'tutela@gmail.com', 'tutela', 'Tutela Park, Tutiya'),
(5, 'jyoti', '54552', 'sxh@gmail.com', 'jyoti', 'dcgygy'),
(6, 'sweta', '5547986', 'swra@gmail.com', 'sweta', 'djfjxf'),
(7, 'angad', '1234556', 'angad@gmail.com', 'angad', 'assdjffddg'),
(8, 'reshama maam', '1223333', 'r@gmail.com', 'reshma', 'djdgndfv');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `item_id` int(11) NOT NULL,
  `item_name` varchar(55) NOT NULL,
  `item_img` varchar(22) NOT NULL,
  `item_category` varchar(55) NOT NULL,
  `item_price` decimal(7,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`item_id`, `item_name`, `item_img`, `item_category`, `item_price`) VALUES
(4, 'bhelpuri', 'flowers.jpg', 'BHELPURI', '30.00'),
(5, 'sevpuri', 'tiger.jpg', 'BHELPURI', '30.00'),
(6, 'panjabi bhel', 'jjj.jpg', 'BHELPURI', '35.00'),
(7, 'cheese bhel', '', 'BHELPURI', '50.00'),
(8, 'cheese sevpuri', '', 'BHELPURI', '50.00'),
(9, 'ragda samosa', 'pass.png', 'SAMOSA', '30.00'),
(10, 'dahi samosa', '', 'SAMOSA', '35.00'),
(11, 'cheese sandwich', 'sandwich.jpg', 'SANDWICH', '50.00'),
(12, 'cheese toast sandwich', 'sandwich.jpg', 'SANDWICH', '55.00'),
(13, 'cheese chilli  toast sandwich', 'sandwich.jpg', 'SANDWICH', '55.00'),
(14, 'veg. grilled sandwich', 'gr_sandwich.jpg', 'SANDWICH', '65.00'),
(15, 'veg. cheese grilled sandwich', 'gr_sandwich.jpg', 'SANDWICH', '75.00'),
(16, 'cheese masala grilled sandwich', 'gr_sandwich.jpg', 'SANDWICH', '80.00'),
(17, 'cheese chilly grilled sandwich', 'gr_sandwich.jpg', 'SANDWICH', '85.00'),
(18, 'cheese pizza', '', 'PIZZA', '75.00'),
(19, 'cheese butter sada dosa', '', 'DOSA', '50.00'),
(20, 'cheese butter onion dosa', '', 'DOSA', '50.00'),
(21, 'masala dosa', '', 'DOSA', '40.00'),
(22, 'cheese masala dosa', '', 'DOSA', '55.00'),
(23, 'mysore masala dosa', '', 'DOSA', '50.00'),
(24, 'cheese mysore masala dosa', '', 'DOSA', '65.00'),
(25, 'cheese sada uttappa', '', 'UTTAPPA', '60.00'),
(26, 'cheese  onion uttappa', '', 'UTTAPPA', '65.00'),
(27, 'masala uttappa', '', 'UTTAPPA', '50.00'),
(28, 'cheese  masala uttappa', '', 'UTTAPPA', '65.00'),
(29, 'pav bhaji', '', 'PAVBHAJI', '60.00'),
(30, 'cheese pav bhaji', '', 'PAVBHAJI', '75.00'),
(31, 'bhaji plate', '', 'PAVBHAJI', '50.00'),
(32, 'cheese masala pavbhaji', '', 'PAVBHAJI', '75.00');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `order_qty` int(11) NOT NULL,
  `order_price` decimal(9,2) NOT NULL,
  `order_date` date NOT NULL,
  `order_time` time NOT NULL,
  `order_status` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `item_id`, `cid`, `order_qty`, `order_price`, `order_date`, `order_time`, `order_status`) VALUES
(83, 4, 1, 5, '150.00', '2018-02-07', '20:50:20', 'Placed'),
(84, 5, 1, 5, '150.00', '2018-02-07', '20:50:20', 'Placed'),
(85, 6, 3, 6, '210.00', '2018-02-07', '21:28:45', 'Placed'),
(86, 4, 1, 100, '3000.00', '2018-02-08', '20:33:41', 'Placed'),
(87, 15, 1, 100, '7500.00', '2018-02-08', '20:37:14', 'Placed'),
(88, 11, 1, 100, '5000.00', '2018-02-08', '20:37:14', 'Placed');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `rev_id` int(11) NOT NULL,
  `rev_title` varchar(55) NOT NULL,
  `rev_mess` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`rev_id`, `rev_title`, `rev_mess`) VALUES
(1, 'love it', 'awosome '),
(2, 'ganda', 'shudglfv'),
(3, 'Rajesh', 'You Are.....');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`con_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`rev_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `cart_id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `con_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;
--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `rev_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
