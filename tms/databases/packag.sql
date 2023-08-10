-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2023 at 02:48 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `packages`
--

-- --------------------------------------------------------

--
-- Table structure for table `packag`
--

CREATE TABLE `packag` (
  `id` int(15) NOT NULL,
  `Package_Name` varchar(255) NOT NULL,
  `Package_Price` varchar(100) NOT NULL,
  `Package_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `packag`
--

INSERT INTO `packag` (`id`, `Package_Name`, `Package_Price`, `Package_img`) VALUES
(1, 'mumbai', '300000', 'image/mumbai1.jpg'),
(7, 'UttarPradesh', '300000', 'image/agra.jpg'),
(8, 'kerala', '300000', 'image/kerala.jpg'),
(9, 'kerala', '300000', 'image/kerala.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `packag`
--
ALTER TABLE `packag`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `packag`
--
ALTER TABLE `packag`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
