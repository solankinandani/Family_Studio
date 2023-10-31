-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2023 at 07:29 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `parlour`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookapp`
--

CREATE TABLE `bookapp` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `mobile` varchar(200) NOT NULL,
  `category` varchar(300) NOT NULL,
  `date` varchar(200) NOT NULL,
  `time` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookapp`
--

INSERT INTO `bookapp` (`id`, `name`, `email`, `mobile`, `category`, `date`, `time`) VALUES
(1, '1', '1', '1', '1', '1', '1'),
(2, '2', '2', '2', '2', '2023-01-13', '04:13'),
(3, 'nandani', 'fhsdjhskj', '1234567896', '2', '2023-01-12', '08:41'),
(6, 'axuu', 'axu@g.m', '54545445', 'bride', '5', '3'),
(9, 'rinki', 'r@g.m', '45454', 'spa', '5', '6'),
(11, 'Vyoma', 'vyomathakar169@gmail.com', '9824382574', 'Makeup', '2023-09-16', '09:58'),
(12, 'Vyoma', 'vyomathakar169@gmail.com', '9824382574', 'Makeup', '2023-09-16', '10:22'),
(13, 'Vyoma', 'vyomathakar169@gmail.com', '9824382574', 'Makeup', '2023-09-16', '10:24'),
(14, 'Vyoma', 'vyomathakar169@gmail.com', '9824382574', 'Hair', '2023-09-16', '10:25');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `photo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `photo`) VALUES
(18, 'Hair', 'f3.png'),
(21, 'Skin', 'f2.png'),
(22, 'Makeup', 'f4.png');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `mobile` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `city` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `mobile`, `email`, `city`) VALUES
(1, 'axita', '9427803978', 'axita@gmail.com', 'Junagadh'),
(2, 'Nanu', '8906543278', 'nanu@gmail.com', 'Rajkot'),
(3, 'axita', '9427803978', 'axita@gmail.com', 'Junagadh'),
(4, 'Sejal', '9106597015', 'sejal@gmail.com', 'Junagadh');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `mobile` varchar(150) NOT NULL,
  `question` varchar(6001) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `name`, `mobile`, `question`) VALUES
(1, '1', '1', '1'),
(4, 'nandani', '6354484757', 'how many times we do hairwash?'),
(5, 'rinkal', '7894561230', 'howmany rupees for straighting?'),
(6, 'axita', '1234567890', 'how we can reduce hairfall?');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `mobile` varchar(200) NOT NULL,
  `email` varchar(300) NOT NULL,
  `comment` varchar(800) NOT NULL,
  `redio` varchar(200) NOT NULL,
  `advice` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `mobile`, `email`, `comment`, `redio`, `advice`) VALUES
(1, '1', '1', '1', '1', '1', '1'),
(2, '2', '2', '2', '2', '2', '2'),
(4, 'a', 'a', 'a@n.k', 'hj', 'hj', 'hj'),
(6, 'nandani', '7894125637', 'nanu@gmail.com', 'its good', 'nice ', 'all ok'),
(7, 'rinkal', '2165478932', 'rinkal@2gmail.com', 'facaility is so good', 'excellent', 'nothing'),
(8, 'vyoma', '1478523697', 'vyomu@6gami.com', 'perfect parlour', 'very good', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `mobile` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `city` varchar(300) NOT NULL,
  `type` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `mobile`, `email`, `password`, `city`, `type`) VALUES
(1, '1', '1', '1', '1', '1', 'admin'),
(5, 'aaa', 'aaa', 'aaa@a.a', 'abc', 'aaaa', 'user'),
(7, 'nanu', '890765431', 'nanu@gmail.com', 'nanu', 'rajkot', 'user'),
(9, '2', '2', 'nanu@gmail.com', '2', 'mumbai', 'user'),
(10, 'nandani', '3', 'nanu@gmail.com', '3', 'jnd', 'user'),
(11, 'Vyoma', '9824382574', 'vyomathakar169@gmail.com', 'vt', 'junagadh', 'user'),
(12, 'jill', '5', 'jil@8gmail.com', '5', 'junagadh', 'user'),
(13, 'priyal', '6', 'priyal@8gmail.com', '6', 'junagadh', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `photo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`id`, `name`, `photo`) VALUES
(20, 'Haircolor', 'P6.jpeg'),
(21, 'Straight Hair', 'straight.png'),
(22, 'Wash Hair', 'wash.png'),
(23, 'Facial', 'P8.jpeg'),
(24, 'Acne', 'P11.jpeg'),
(25, 'Bride', 'P1.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookapp`
--
ALTER TABLE `bookapp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookapp`
--
ALTER TABLE `bookapp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
