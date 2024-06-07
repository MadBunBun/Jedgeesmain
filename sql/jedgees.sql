-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2024 at 05:31 PM
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
  `unique_id` int(11) NOT NULL,
  `billing_id` varchar(11) NOT NULL,
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
  `total` float NOT NULL,
  `down_payment` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `print_customization`
--

INSERT INTO `print_customization` (`unique_id`, `billing_id`, `type_paper`, `color`, `size`, `num_pages`, `docu`, `docu_filepath`, `bind`, `instructions`, `pages_price`, `bind_price`, `total`, `down_payment`) VALUES
(1, 'FgfiMbBzrh', 'Bond Paper', 'Colored', 'A4', 10, 'JAVATECH_W3-Activity.pdf', '../uploads/JAVATECH_W3-Activity.pdf', 'Book Bind', 'Hello World!', 50, 12.5, 62.5, 31.25),
(2, 'GYkPhdGO1u', 'Bond Paper', 'Colored', 'A4', 20, 'Screenshot 2023-09-04 161530.png', '../uploads/Screenshot 2023-09-04 161530.png', 'Book Bind', '', 100, 25, 125, 62.5);

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `id` int(11) NOT NULL,
  `billing_id` varchar(11) NOT NULL,
  `paid_amount` float NOT NULL,
  `total` float NOT NULL,
  `referral` varchar(255) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `pdfpath` varchar(255) NOT NULL,
  `from_where` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`id`, `billing_id`, `paid_amount`, `total`, `referral`, `image_name`, `image_path`, `pdfpath`, `from_where`) VALUES
(1, 'kqPQFWU1DN', 962.5, 1925, '100', 'JAVATECH_W3-Activity.pdf', '../uploads/screenshot/JAVATECH_W3-Activity.pdf', '../uploads/receipt/receipt_taurp_kqPQFWU1DN.pdf', 'taurp_customization'),
(2, 'FgfiMbBzrh', 31, 62, '1231231', 'IMG_20230929_005924_308.jpg', '../uploads/screenshot/IMG_20230929_005924_308.jpg', '../uploads/receipt/receipt_print_FgfiMbBzrh.pdf', 'print_customization'),
(3, 'GYkPhdGO1u', 100, 200, '121314', 'ACTIVITY KOMFIL.docx', '../uploads/screenshot/ACTIVITY KOMFIL.docx', '../uploads/receipt/receipt_print_GYkPhdGO1u.pdf', 'print_customization');

-- --------------------------------------------------------

--
-- Table structure for table `taurp_customization`
--

CREATE TABLE `taurp_customization` (
  `unique_id` int(11) NOT NULL,
  `billing_id` varchar(11) NOT NULL,
  `feet_1` int(11) NOT NULL,
  `feet_2` int(11) NOT NULL,
  `copies` int(11) NOT NULL,
  `with_layout` varchar(3) NOT NULL,
  `instructions` varchar(255) NOT NULL,
  `taurp_price` float NOT NULL,
  `copies_price` float NOT NULL,
  `layout_price` float NOT NULL,
  `total_price` float NOT NULL,
  `down_payment` float NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `file_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `taurp_customization`
--

INSERT INTO `taurp_customization` (`unique_id`, `billing_id`, `feet_1`, `feet_2`, `copies`, `with_layout`, `instructions`, `taurp_price`, `copies_price`, `layout_price`, `total_price`, `down_payment`, `file_name`, `file_path`) VALUES
(1, 'kqPQFWU1DN', 2, 5, 10, 'Yes', 'HMMM', 180, 1800, 125, 1925, 962.5, 'borrowed.sql', '../uploads/borrowed.sql');

-- --------------------------------------------------------

--
-- Table structure for table `user_credentials`
--

CREATE TABLE `user_credentials` (
  `id` int(11) NOT NULL,
  `role` varchar(255) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) NOT NULL,
  `contactnum` varchar(20) DEFAULT NULL,
  `streetNumber` varchar(255) NOT NULL,
  `streetName` varchar(255) NOT NULL,
  `barangay` varchar(255) DEFAULT NULL,
  `city` varchar(255) NOT NULL,
  `postal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_credentials`
--

INSERT INTO `user_credentials` (`id`, `role`, `username`, `password`, `fname`, `lname`, `contactnum`, `streetNumber`, `streetName`, `barangay`, `city`, `postal`) VALUES
(1, 'admin', 'calebjoshuaarmojallas@gmail.com', '1a52ed76f4df2f621e235c36a97deed3', 'Caleb Joshua', 'Armojallas', '09602825151', '165', 'M.L.Q.', 'New Lower Bicutan', 'Taguig', '1632'),
(2, 'student', 'samolivarez123@gmail.com', '50136a48dd4fd6415b48344646accdbc', 'Meinard', 'Santos', '', '165', 'MLQ', 'Poblacion', 'Makati', '1207');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `print_customization`
--
ALTER TABLE `print_customization`
  ADD PRIMARY KEY (`unique_id`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `taurp_customization`
--
ALTER TABLE `taurp_customization`
  ADD PRIMARY KEY (`unique_id`);

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
  MODIFY `unique_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `taurp_customization`
--
ALTER TABLE `taurp_customization`
  MODIFY `unique_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_credentials`
--
ALTER TABLE `user_credentials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
