-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2024 at 11:15 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `betharbel`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_betharbel`
--

CREATE TABLE `contact_betharbel` (
  `id` int(11) NOT NULL,
  `cont_name` text NOT NULL,
  `email_address` varchar(200) NOT NULL,
  `phone_number` varchar(100) NOT NULL,
  `comment` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_betharbel`
--

INSERT INTO `contact_betharbel` (`id`, `cont_name`, `email_address`, `phone_number`, `comment`) VALUES
(1, 'India Sargent', 'covumeqo@mailinator.com', '+1 (639) 587-6942', 'Dicta eu laboriosam');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `project_title` varchar(300) NOT NULL,
  `project_description` varchar(300) NOT NULL,
  `project_amount` int(100) NOT NULL,
  `project_image` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `project_title`, `project_description`, `project_amount`, `project_image`) VALUES
(1, 'Pariatur Quod dolor', 'Amet eos sunt pari', 7300, 'Array'),
(2, 'Accusamus expedita v', 'Molestias voluptates', 43, '1722633010.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_betharbel`
--
ALTER TABLE `contact_betharbel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_betharbel`
--
ALTER TABLE `contact_betharbel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
