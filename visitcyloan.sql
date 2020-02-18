-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2020 at 09:33 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `visitcyloan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminId` int(10) NOT NULL,
  `adminName` varchar(255) DEFAULT NULL,
  `adminEmail` tinytext NOT NULL,
  `PASSWORD` longtext NOT NULL,
  `type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminId`, `adminName`, `adminEmail`, `PASSWORD`, `type`) VALUES
(11, 'rumesh', 'tharindurumesh20@gmail.com', '$2y$10$kCjwuKacJrJB3cSHUDSci.Wfet9UKniXV3tWYkfk36y4qJ6OfeCLG', 'author');

-- --------------------------------------------------------

--
-- Table structure for table `guide`
--

CREATE TABLE `guide` (
  `id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `pword` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pnumber` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guide`
--

INSERT INTO `guide` (`id`, `username`, `email`, `pword`, `address`, `pnumber`, `experience`, `gender`, `image`) VALUES
(67, 'rumesh amarsinghe', 'tharindurumesh20@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'gampha', '0763706017', 'bestmanc kjkjwef kjfkjfek3j kjfk3k34j', 'fmale', '5e4b82a4205091.91752421.jpg'),
(68, 'kamal', 'jwhjwqkj', 'a75a1d1fd126e52ad802b955457a93b0', 'wlklwkqf', 'lcklekflkefkk lklekf', 'e,qvvew ejfwjfkfklefqlefkl lkelkflwkflkqlkeq efflklkleqfklkfkleqlfklekf lekflqkflkelk ,eflkflkqfk', 'male', '5e4b83356819a1.89333830.jpg'),
(69, 'nimal', 'dkwqke', 'ef204599513202aefe09ea4058a3952e', 'e,elqf', 'e,lef', ',mef', 'fmale', '5e4b85742cea12.52098905.jpg'),
(70, 'saman', 'qlwdwd', '6a8ffcf5c633d2174d87cb1c5a0bc0d0', 'wlk', 'wc,lqw', ',ceq', 'fmale', '5e4b868f0f2827.77249477.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` longtext,
  `address` varchar(255) DEFAULT NULL,
  `pnumber` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `address`, `pnumber`, `gender`) VALUES
(17, 'test', 'test', '$2y$10$RD/eVZzGk/yrQZAE4ORsmuMeZQaE/GhhJEMjiXE0VZfeDNNuG3xra', 'test', 'test', 'male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminId`);

--
-- Indexes for table `guide`
--
ALTER TABLE `guide`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `guide`
--
ALTER TABLE `guide`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
