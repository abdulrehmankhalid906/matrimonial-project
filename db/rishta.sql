-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2024 at 02:34 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rishta`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'admin', 'irene.info@gmail.com', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `registerinfo`
--

CREATE TABLE `registerinfo` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(11) DEFAULT NULL,
  `whatsapp` varchar(20) DEFAULT NULL,
  `user_image` varchar(255) DEFAULT NULL,
  `userid` varchar(20) DEFAULT NULL,
  `bio` text DEFAULT NULL,
  `self` text DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `martial` varchar(20) DEFAULT NULL,
  `religion` varchar(50) DEFAULT NULL,
  `caste` varchar(50) DEFAULT NULL,
  `sect` varchar(50) DEFAULT NULL,
  `color` varchar(50) DEFAULT NULL,
  `height` varchar(50) DEFAULT NULL,
  `study` varchar(255) DEFAULT NULL,
  `occup` varchar(255) DEFAULT NULL,
  `income` varchar(50) DEFAULT NULL,
  `nation` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registerinfo`
--

INSERT INTO `registerinfo` (`id`, `username`, `email`, `password`, `status`, `whatsapp`, `user_image`, `userid`, `bio`, `self`, `gender`, `age`, `martial`, `religion`, `caste`, `sect`, `color`, `height`, `study`, `occup`, `income`, `nation`, `city`, `created`) VALUES
(1, 'De01', 'abdulrehmankhalid906@gmail.com', '12345678', 1, '0322222', '', '4153', 'Placeat consectetur sed impedit incidunt rem nobis consequatur est omnis omnis cupidatat minima laborum Commodi ullam distinctio', 'Parents', 'Male', 12, 'single', 'Islam', 'Raja', 'Suni', 'very fair', '23', 'BSCS', 'Master', '45000', 'Pakistani', 'Rawalpindi', '2024-03-19 16:08:01'),
(2, 'Mani', 'abdulrehmankhalid907@gmail.com', '12345678', 0, '12121212', '', '8216', '1212', '1212', 'Male', 12, 'single', 'Islam', '12', '2', 'very fair', '12', '12', '12', '1', '12', 'Islamabad', '2024-03-19 16:08:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registerinfo`
--
ALTER TABLE `registerinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `registerinfo`
--
ALTER TABLE `registerinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
