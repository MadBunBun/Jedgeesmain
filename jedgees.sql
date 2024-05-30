-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2024 at 07:30 AM
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
-- Table structure for table `print_customization`
--

CREATE TABLE `print_customization` (
  `billing_id` int(11) NOT NULL,
  `type_paper` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `num_pages` int(11) NOT NULL,
  `docu` varchar(255) NOT NULL,
  `docu_filepath` varchar(255) NOT NULL,
  `bind` varchar(255) NOT NULL,
  `instructions` varchar(255) NOT NULL,
  `pages_price` float NOT NULL,
  `bind_price` float NOT NULL,
  `total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `print_customization`
--

INSERT INTO `print_customization` (`billing_id`, `type_paper`, `color`, `size`, `num_pages`, `docu`, `docu_filepath`, `bind`, `instructions`, `pages_price`, `bind_price`, `total`) VALUES
(1, 'Bond Paper', 'Colored', 'A4', 5, 'ARMOJALLAS_Plastic_Bottles-_Donation.pdf', '../uploads/ARMOJALLAS_Plastic_Bottles-_Donation.pdf', 'Book Bind', '', 25, 6.25, 31.25);

-- --------------------------------------------------------

--
-- Table structure for table `user_credentials`
--

CREATE TABLE `user_credentials` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phonenumber` varchar(20) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_credentials`
--

INSERT INTO `user_credentials` (`id`, `username`, `password`, `name`, `phonenumber`, `address`) VALUES
(1, 'caleb@gmail.com', '1a52ed76f4df2f621e235c36a97deed3', 'Armojallas, Caleb Joshua', '09602825151', '165 MLQ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `print_customization`
--
ALTER TABLE `print_customization`
  ADD PRIMARY KEY (`billing_id`);

--
-- Indexes for table `user_credentials`
--
ALTER TABLE `user_credentials`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `print_customization`
--
ALTER TABLE `print_customization`
  MODIFY `billing_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_credentials`
--
ALTER TABLE `user_credentials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
