-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2024 at 11:51 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jedgees`
--

-- --------------------------------------------------------

--
-- Table structure for table `shirt_customization`
--

CREATE TABLE `shirt_customization` (
  `id` int(11) NOT NULL,
  `num_shirt` int(11) NOT NULL,
  `printshirt_size` varchar(50) NOT NULL,
  `shirt_size` varchar(50) NOT NULL,
  `shirt_material` varchar(50) NOT NULL,
  `instructions` text DEFAULT NULL,
  `shirt_price` decimal(10,2) NOT NULL,
  `vinyl_price` decimal(10,2) NOT NULL,
  `print_sizeprice` decimal(10,2) NOT NULL,
  `total_price` decimal(10,2) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `file_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `shirt_customization`
--
ALTER TABLE `shirt_customization`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `shirt_customization`
--
ALTER TABLE `shirt_customization`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
