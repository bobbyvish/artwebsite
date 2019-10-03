-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2019 at 09:25 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arthub`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(11) NOT NULL,
  `brand_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`) VALUES
(1, 'Canson'),
(2, 'Strathmare'),
(3, 'Panpatel\r\n'),
(4, 'Winson & Newton\r\n'),
(5, 'Dervent\r\n'),
(6, 'Conte a Paris\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `p_id` int(10) NOT NULL,
  `c_id` int(11) NOT NULL,
  `ip_add` int(10) NOT NULL,
  `qty` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`p_id`, `c_id`, `ip_add`, `qty`) VALUES
(7, 0, 0, 1),
(8, 0, 0, 1),
(9, 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(10) NOT NULL,
  `cat_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'Paints'),
(2, 'Brushes'),
(3, 'Canvas'),
(4, 'Papers'),
(5, 'Drawing Medium'),
(6, 'Easels');

-- --------------------------------------------------------

--
-- Table structure for table `customer_orders`
--

CREATE TABLE `customer_orders` (
  `order_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `due_amount` int(100) NOT NULL,
  `invoice_no` int(100) NOT NULL,
  `total_products` int(100) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `order_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_orders`
--

INSERT INTO `customer_orders` (`order_id`, `customer_id`, `due_amount`, `invoice_no`, `total_products`, `order_date`, `order_status`) VALUES
(23, 1, 1200, 424416225, 2, '2019-03-31 16:51:06', 'Complete'),
(24, 1, 1000, 99476752, 1, '2019-03-31 15:00:44', 'pending'),
(25, 7, 1000, 1342803206, 1, '2019-04-02 16:15:04', 'Complete'),
(26, 8, 1500, 463848461, 2, '2019-04-08 15:04:22', 'pending'),
(27, 8, 1100, 1355460018, 2, '2019-04-08 15:06:01', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(11) NOT NULL,
  `invoice` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `payment_mode` text NOT NULL,
  `ref_no` int(11) NOT NULL,
  `payment_date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`payment_id`, `invoice`, `amount`, `payment_mode`, `ref_no`, `payment_date`) VALUES
(1, 424416225, 1200, 'Bank Transfer', 46465, '2'),
(2, 1342803206, 100, 'Paytm', 46465, '2');

-- --------------------------------------------------------

--
-- Table structure for table `pending_orders`
--

CREATE TABLE `pending_orders` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `invoice_no` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `qty` int(10) NOT NULL,
  `order_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pending_orders`
--

INSERT INTO `pending_orders` (`order_id`, `customer_id`, `invoice_no`, `product_id`, `qty`, `order_status`) VALUES
(23, 1, 424416225, 9, 1, 'Complete'),
(24, 1, 99476752, 6, 1, 'pending'),
(25, 7, 1342803206, 6, 1, 'Complete'),
(26, 8, 463848461, 7, 1, 'pending'),
(27, 8, 1355460018, 8, 1, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `p_id` int(10) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `brand_id` int(10) NOT NULL,
  `p_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `p_title` text NOT NULL,
  `p_image1` text NOT NULL,
  `p_image2` text NOT NULL,
  `p_image3` text NOT NULL,
  `p_price` int(10) NOT NULL,
  `p_disc` text NOT NULL,
  `p_keyword` text NOT NULL,
  `p_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`p_id`, `cat_id`, `brand_id`, `p_date`, `p_title`, `p_image1`, `p_image2`, `p_image3`, `p_price`, `p_disc`, `p_keyword`, `p_status`) VALUES
(6, 1, 5, '2019-03-08 17:51:08', 'oil paints', 'paints.jpg', 'paints.jpg', 'paints.jpg', 1000, '<p>100ml of oil paints&nbsp;</p>', 'oilpaints,paint,paintset', 'on'),
(7, 2, 3, '2019-03-08 17:51:47', 'brush', 'brush.jpg', 'brush.jpg', 'brush.jpg', 500, '<p>all brush set panpatel</p>', 'brushes,brush set,', 'on'),
(8, 1, 5, '2019-03-08 17:52:09', 'paint', 'paint.JPG', 'paint.JPG', 'paint.JPG', 600, '<p>water colour</p>', 'water colour', 'on'),
(9, 5, 2, '2019-03-08 17:52:40', 'colour pencils', 'pencil.jpg', 'pencil.jpg', 'pencil.jpg', 200, '<p>steadler pencil set</p>', 'pencil,steadler,colour pencil', 'on'),
(10, 5, 5, '2019-03-08 17:53:03', 'Graphite Pencils', 'graphite.jpg', 'graphite.jpg', 'graphite.jpg', 300, '<p>6 pencil set of graphite</p>', 'graphite pencils,pencils', 'on'),
(11, 5, 6, '2019-03-08 17:53:27', 'faber castel colour set', 'colourpencils.jpg', 'colourpencils.jpg', 'colourpencils.jpg', 700, '<p>24 shades of colour pencil of faber castel</p>', 'colour shade,colour pencils', 'on');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `c_id` int(11) NOT NULL,
  `c_fname` varchar(20) NOT NULL,
  `c_lname` varchar(20) NOT NULL,
  `c_email` varchar(255) NOT NULL,
  `c_phone` bigint(20) NOT NULL,
  `c_gender` char(1) NOT NULL,
  `c_birth` int(11) NOT NULL,
  `c_pass` varchar(30) NOT NULL,
  `c_address` varchar(255) NOT NULL,
  `c_city` varchar(30) NOT NULL,
  `c_pcode` varchar(10) NOT NULL,
  `c_ip` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`c_id`, `c_fname`, `c_lname`, `c_email`, `c_phone`, `c_gender`, `c_birth`, `c_pass`, `c_address`, `c_city`, `c_pcode`, `c_ip`) VALUES
(2, 'bobby', 'vishwakarma', 'bobbyvishwakar114@gmail.com', 9930865619, 'm', 0, 'bobby', 'kurla(w)', 'mumbai', '400072', 0),
(7, 'bobby', 'vishwakarma', 'bobby@gmail.com', 9930865619, 'm', 0, 'bobby123', 'kurla(w)', 'mumbai', '400072', 0),
(8, 'rocky', 'vishwakarma', 'rocky@gmail.com', 9930865646, 'm', 0, 'rocky', 'kurla', 'mumbai', '400072', 0);

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
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customer_orders`
--
ALTER TABLE `customer_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `pending_orders`
--
ALTER TABLE `pending_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`c_id`),
  ADD UNIQUE KEY `c_email` (`c_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customer_orders`
--
ALTER TABLE `customer_orders`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pending_orders`
--
ALTER TABLE `pending_orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `p_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
