-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2024 at 08:14 PM
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
-- Table structure for table `taurp_customization`
--

CREATE TABLE `taurp_customization` (
  `id` int(11) NOT NULL,
  `feet_1` int(11) NOT NULL,
  `feet_2` int(11) NOT NULL,
  `copies` int(11) NOT NULL,
  `with_layout` varchar(3) NOT NULL,
  `instructions` varchar(255) NOT NULL,
  `taurp_price` float NOT NULL,
  `copies_price` float NOT NULL,
  `layout_price` float NOT NULL,
  `total_price` float NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `file_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `taurp_customization`
--

INSERT INTO `taurp_customization` (`id`, `feet_1`, `feet_2`, `copies`, `with_layout`, `instructions`, `taurp_price`, `copies_price`, `layout_price`, `total_price`, `file_name`, `file_path`) VALUES
(1, 2, 5, 6, 'Yes', 'IDK', 180, 1080, 0, 1205, 'Doc1.docx', '../uploads/Doc1.docx'),
(2, 5, 6, 5, 'Yes', 'Write down your special instructions', 0, 0, 0, 0, 'log.txt', '../uploads/log.txt'),
(3, 2, 3, 5, 'Yes', 'Write down your special instructions', 108, 540, 0, 665, 'Lessons.docx', '../uploads/Lessons.docx'),
(4, 2, 3, 5, 'Yes', 'Write down your special instructions', 108, 540, 0, 665, 'PROGRESS REPORT.pdf', '../uploads/PROGRESS REPORT.pdf'),
(5, 5, 5, 5, 'Yes', 'Write down your special instructions', 450, 2250, 125, 2375, 'Purposive.docx', '../uploads/Purposive.docx'),
(6, 2, 5, 5, 'No', 'Write down your special instructions', 180, 900, 0, 900, 'ARMOJALLAS- REFLECTION-PAPER (APRIL).pdf', '../uploads/ARMOJALLAS- REFLECTION-PAPER (APRIL).pdf');

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
-- Indexes for table `taurp_customization`
--
ALTER TABLE `taurp_customization`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `taurp_customization`
--
ALTER TABLE `taurp_customization`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_credentials`
--
ALTER TABLE `user_credentials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
