-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2018 at 05:10 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `weproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `post_id` int(11) NOT NULL,
  `postTitle` varchar(100) NOT NULL,
  `postDescription` varchar(100) DEFAULT NULL,
  `postContent` varchar(10000) NOT NULL,
  `postType` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`post_id`, `postTitle`, `postDescription`, `postContent`, `postType`) VALUES
(1, 'kong', '', 'hello hello hey!!!', 'event');

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `donation_id` int(11) NOT NULL,
  `Donation_type` varchar(15) NOT NULL,
  `donation_name` varchar(20) NOT NULL,
  `amount` varchar(15) NOT NULL,
  `donation_date` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`donation_id`, `Donation_type`, `donation_name`, `amount`, `donation_date`) VALUES
(1, 'present', 'Edna', '44', '24/08/2017');

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `expenses_id` int(11) NOT NULL,
  `expenses_name` varchar(30) NOT NULL,
  `expenses_amount` varchar(20) NOT NULL,
  `date` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`expenses_id`, `expenses_name`, `expenses_amount`, `date`) VALUES
(1, '', '24', '06/08/2016');

-- --------------------------------------------------------

--
-- Table structure for table `financial`
--

CREATE TABLE `financial` (
  `financial_id` int(11) NOT NULL,
  `total` varchar(15) NOT NULL,
  `year` int(11) NOT NULL,
  `month` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `financial`
--

INSERT INTO `financial` (`financial_id`, `total`, `year`, `month`) VALUES
(3, '3200', 2018, 4),
(4, '1200', 2014, 12),
(7, 'sda', 0, 0),
(8, 'dasd', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `forum`
--

CREATE TABLE `forum` (
  `forum_id` int(11) NOT NULL,
  `forum_title` varchar(20) NOT NULL,
  `forum_description` varchar(1000) NOT NULL,
  `forum_content` varchar(1000) NOT NULL,
  `release_date` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forum`
--

INSERT INTO `forum` (`forum_id`, `forum_title`, `forum_description`, `forum_content`, `release_date`) VALUES
(1, 'Job', '', 'halo', '24/05/2018'),
(2, 'Job', '', 'Location', '06/08/2018'),
(3, 'gsdgs', 'sdd', 'dsad', 'add');

-- --------------------------------------------------------

--
-- Table structure for table `membershipfee`
--

CREATE TABLE `membershipfee` (
  `fee_id` int(11) NOT NULL,
  `payment_date` varchar(20) NOT NULL,
  `years` int(5) NOT NULL,
  `totalPayment` varchar(10) NOT NULL,
  `ProofPayment` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `membershipfee`
--

INSERT INTO `membershipfee` (`fee_id`, `payment_date`, `years`, `totalPayment`, `ProofPayment`) VALUES
(1, '07/08/2015', 3, '500', 'post laju'),
(2, 'asa', 0, 'asa', 'sas');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `userpwd` varchar(50) NOT NULL,
  `usertype` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `program` varchar(50) DEFAULT NULL,
  `batch` varchar(30) DEFAULT NULL,
  `gradyear` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `username`, `userpwd`, `usertype`, `name`, `program`, `batch`, `gradyear`) VALUES
(4, 'kong96', '960414065524', 'member', 'Kong Shin Yee', 'Software Engineering', '2016/2017', '2020'),
(6, 'wongmk', '20482048', 'member', 'wong mei kiew', 'Software Engineering', '2016/2017', '2018'),
(7, 'testadmin', 'testadmin', 'admin', 'I Am Admin', '', '', ''),
(8, 'testuser', 'testuser', 'member', 'I Am Test User', 'Graphic & Multimedia', '2017/2018', '2020');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`donation_id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`expenses_id`);

--
-- Indexes for table `financial`
--
ALTER TABLE `financial`
  ADD PRIMARY KEY (`financial_id`);

--
-- Indexes for table `forum`
--
ALTER TABLE `forum`
  ADD PRIMARY KEY (`forum_id`);

--
-- Indexes for table `membershipfee`
--
ALTER TABLE `membershipfee`
  ADD PRIMARY KEY (`fee_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `donation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `expenses_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `financial`
--
ALTER TABLE `financial`
  MODIFY `financial_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `forum`
--
ALTER TABLE `forum`
  MODIFY `forum_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `membershipfee`
--
ALTER TABLE `membershipfee`
  MODIFY `fee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
