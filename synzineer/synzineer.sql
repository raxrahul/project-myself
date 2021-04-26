-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2021 at 09:17 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `synzineer`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` bigint(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `text1` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `notes` varchar(200) NOT NULL,
  `text1` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `name`, `phone`, `email`, `notes`, `text1`) VALUES
(1, 'rahulsingh', '8127278468', 'rahulsingh@gmail.com', 'operating system', 'notes'),
(2, 'rahulsingh', '8127278468', 'rahulsingh.8468@gmail.com', 'os', 'ffinal');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `s_name` varchar(500) NOT NULL,
  `s_language` varchar(1000) NOT NULL,
  `degree` varchar(500) NOT NULL,
  `s_cost` int(10) NOT NULL,
  `text1` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `name`, `phone`, `email`, `s_name`, `s_language`, `degree`, `s_cost`, `text1`) VALUES
(1, 'rahulsingh', '8127278468', 'rahulsingh@gmail.com', 'synzineer', 'html,css', 'diploma', 2000, 'project'),
(2, 'rahulsingh', '8127278468', 'rahulsingh.8468@gmail.com', 'smi', 'java', 'diploma', 2000, 'offline');

-- --------------------------------------------------------

--
-- Table structure for table `resister`
--

CREATE TABLE `resister` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(500) NOT NULL,
  `nationality` varchar(100) NOT NULL,
  `qualification` varchar(500) NOT NULL,
  `branch` varchar(200) NOT NULL,
  `text1` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resister`
--

INSERT INTO `resister` (`id`, `name`, `phone`, `email`, `address`, `nationality`, `qualification`, `branch`, `text1`) VALUES
(1, 'rahulsingh', '8127278468', 'rahulsingh@gmail.com', 'mirzapur', 'indian', 'diploma', 'i am a software engineer', ''),
(2, 'rahulsingh', '8127278468', 'rahulsingh@gmail.com', 'mirzapur', 'indian', 'diploma', '', 'i am an engineer'),
(3, 'romisingh', '8127278468', 'rahulsingh@gmail.com', 'mirzapur', 'indian', 'diploma', 'cse', 'testing'),
(4, 'dheeraj gupta', '8953775595', 'dheeraj@gmail.com', 'parashidha ,chunar,mirzapur', 'indian', 'bsc', 'agriculture', 'i am  in the 3rd year'),
(5, 'rahulsingh', '8127278468', 'rahulsingh.8468@gmail.com', 'mzp', 'indian', 'diploma', 'cse', 'nothing offiline');

-- --------------------------------------------------------

--
-- Table structure for table `software`
--

CREATE TABLE `software` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `software` varchar(300) NOT NULL,
  `text1` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `software`
--

INSERT INTO `software` (`id`, `name`, `phone`, `email`, `software`, `text1`) VALUES
(1, 'rahulsingh', '8127278468', 'rahulsingh@gmail.com', 'rufus', 'software'),
(2, 'rahulsingh', '8127278468', 'rahulsingh.8468@gmail.com', 'rufus', 'offline final');

-- --------------------------------------------------------

--
-- Table structure for table `submit`
--

CREATE TABLE `submit` (
  `name` varchar(100) NOT NULL,
  `disc` varchar(5005) NOT NULL,
  `link` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'rahul', '$2y$10$6obSPEgvHRe7U.r.Kkisr.TDEE62UIaluJ5WEGc27O.KG9tB00w3K', '2019-10-14 13:16:03'),
(2, 'Sajan', '$2y$10$nJ5bORFVKeQIsgcibHHRTu4.VgwwCCsVleIMzRo6OYXtGde522lUS', '2019-10-18 12:48:29'),
(3, 'arvind', '$2y$10$5qHvPuypaJZgxJq0MczZwugX8KIK7lILc.0lKnfaVbp21GNlbG3Uy', '2021-03-22 01:30:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resister`
--
ALTER TABLE `resister`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `software`
--
ALTER TABLE `software`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `resister`
--
ALTER TABLE `resister`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `software`
--
ALTER TABLE `software`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
