-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 27, 2022 at 05:15 PM
-- Server version: 8.0.28-0ubuntu0.20.04.3
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `currency_converter`
--

-- --------------------------------------------------------

--
-- Table structure for table `Currency`
--

CREATE TABLE `Currency` (
  `id` bigint NOT NULL,
  `Name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `Symbol` varchar(255) DEFAULT NULL,
  `Rate` double DEFAULT NULL,
  `ShortName` varchar(255) DEFAULT NULL,
  `Country` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Currency`
--

INSERT INTO `Currency` (`id`, `Name`, `Symbol`, `Rate`, `ShortName`, `Country`) VALUES
(1, 'Taka', '৳', 86, 'BDT', 'Bangladesh'),
(2, 'US DOllar', '$', 1, 'USD', 'USA'),
(3, 'British Pounds', '£', 0.74, 'GBP', 'United Kingdom'),
(4, 'Euros', '€', 0.89, 'EUR', ' European Union.'),
(5, 'Turkish Lire', '₺', 14.23, 'TRY', 'Turkey'),
(6, 'Canadian Dollars', 'C$', 1.28, 'CAD', 'Canada'),
(7, 'Australian Dollars', 'A$', 1.39, 'AUD', 'Australia'),
(8, 'Japanese Yen', ' ¥, 円, 圓', 114, 'JPY', 'Japan'),
(9, 'Indian Rupees', '₹', 75.67, 'INR', 'India'),
(10, 'Zealand Dollars', 'N$', 1.48, 'NZD', 'New Zealand');

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `id` bigint NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `password` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`id`, `name`, `email`, `phone`, `password`) VALUES
(1, 'enamul', 'enamul@gmail.com', '0107', '123'),
(2, 'ferdawus', 'ferda@gmail.com', '017', '123'),
(3, '', '', '', ''),
(4, 'talha', 'talha@gmail.com', '014', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Currency`
--
ALTER TABLE `Currency`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Currency`
--
ALTER TABLE `Currency`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
