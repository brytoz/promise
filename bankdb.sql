-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2023 at 09:56 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `emailpass` varchar(60) NOT NULL,
  `websitename` varchar(60) NOT NULL,
  `websitelink` varchar(60) NOT NULL,
  `date` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `username`, `password`, `email`, `emailpass`, `websitename`, `websitelink`, `date`) VALUES
(1, 'admin', 'iamtheadmin', 'admin@websitelink', 'email password', 'Website name', 'websitelink', '0000-00-00 00:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `approved`
--

CREATE TABLE `approved` (
  `id` int(11) NOT NULL,
  `acct_num` varchar(60) NOT NULL,
  `username` varchar(60) NOT NULL,
  `amount` int(60) NOT NULL,
  `earnings` varchar(60) NOT NULL,
  `totalearnings` varchar(60) NOT NULL,
  `sender` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `profitdate` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bannedips`
--

CREATE TABLE `bannedips` (
  `id` bigint(255) NOT NULL,
  `username` varchar(60) NOT NULL,
  `ip` varchar(60) NOT NULL,
  `date` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pendingdeposit`
--

CREATE TABLE `pendingdeposit` (
  `id` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `acct_num` varchar(60) NOT NULL,
  `amount` varchar(60) NOT NULL,
  `date` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `refer`
--

CREATE TABLE `refer` (
  `id` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `earnings` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `acct_num` varchar(60) NOT NULL,
  `verify` varchar(30) NOT NULL,
  `username` varchar(60) NOT NULL,
  `firstname` varchar(60) NOT NULL,
  `lastname` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(60) NOT NULL,
  `marital` varchar(60) NOT NULL,
  `pin` varchar(60) NOT NULL,
  `refer` varchar(60) NOT NULL,
  `ip` varchar(60) NOT NULL,
  `country` varchar(60) NOT NULL,
  `occupation` varchar(60) NOT NULL,
  `phone` varchar(40) NOT NULL,
  `doctype` varchar(40) NOT NULL,
  `img` varchar(60) NOT NULL,
  `acct_type` varchar(60) NOT NULL,
  `address` varchar(200) NOT NULL,
  `amount` varchar(60) NOT NULL,
  `dp` varchar(60) NOT NULL,
  `q1` varchar(200) NOT NULL,
  `a1` varchar(200) NOT NULL,
  `q2` varchar(200) NOT NULL,
  `a2` varchar(200) NOT NULL,
  `img_gov` varchar(100) NOT NULL,
  `vdate` datetime(6) DEFAULT NULL,
  `date` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `suspended`
--

CREATE TABLE `suspended` (
  `id` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `pin` varchar(30) NOT NULL,
  `unsuspend` datetime(6) NOT NULL,
  `date` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `withdraw`
--

CREATE TABLE `withdraw` (
  `id` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `amount` varchar(60) NOT NULL,
  `bankname` varchar(60) NOT NULL,
  `acct_num` varchar(60) NOT NULL,
  `date` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `withdrawdone`
--

CREATE TABLE `withdrawdone` (
  `id` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `amount` varchar(60) NOT NULL,
  `with_acct` varchar(60) NOT NULL,
  `bankname` varchar(60) NOT NULL,
  `acct_name` varchar(60) NOT NULL,
  `acct_num` varchar(60) NOT NULL,
  `iban` varchar(60) NOT NULL,
  `country` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `swiftcode` varchar(60) NOT NULL,
  `address` varchar(60) NOT NULL,
  `purpose` varchar(200) NOT NULL,
  `date` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `approved`
--
ALTER TABLE `approved`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bannedips`
--
ALTER TABLE `bannedips`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `pendingdeposit`
--
ALTER TABLE `pendingdeposit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `refer`
--
ALTER TABLE `refer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suspended`
--
ALTER TABLE `suspended`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `withdraw`
--
ALTER TABLE `withdraw`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `withdrawdone`
--
ALTER TABLE `withdrawdone`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `approved`
--
ALTER TABLE `approved`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bannedips`
--
ALTER TABLE `bannedips`
  MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pendingdeposit`
--
ALTER TABLE `pendingdeposit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `refer`
--
ALTER TABLE `refer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `suspended`
--
ALTER TABLE `suspended`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `withdraw`
--
ALTER TABLE `withdraw`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `withdrawdone`
--
ALTER TABLE `withdrawdone`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
