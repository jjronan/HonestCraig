-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2018 at 07:30 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `honestcraig_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `listings`
--

CREATE TABLE `listings` (
  `id` int(11) NOT NULL,
  `product_category` text NOT NULL,
  `product` text NOT NULL,
  `product_desc` text NOT NULL,
  `product_price` double NOT NULL,
  `username` text NOT NULL,
  `img` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `listings`
--

INSERT INTO `listings` (`id`, `product_category`, `product`, `product_desc`, `product_price`, `username`, `img`) VALUES
(1, 'Aquatics', 'Boat', 'Test', 100, 'admin2', ''),
(2, 'Aquatics', 'Boat2', 'Test2', 100, 'admin2', ''),
(3, 'Auto', 'Auto1', 'Test1', 100, 'admin2', ''),
(4, 'Auto', 'Auto1', 'Test1', 100, 'admin2', ''),
(5, 'Aquatics', 'Fast Boat', 'Selling my used fast boat', 10000, 'testuser1', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$mn9D8nCZ.Sf1fW3ptgsF8OgQ1ZO8RAngIL9UTXqXFUv5PYbhlSZbG'),
(2, 'admin2', '$2y$10$06qu3a.EU8nvXorTO/wxKuFN7Xsd1m3KvibymoozOvwMwYKIDji2i'),
(3, 'testuser1', '$2y$10$jpe81cs33/uScQ7a1W6QgeKrihET4DfDGu0DTp6idCIV0Bs5T/VGe');

-- --------------------------------------------------------

--
-- Table structure for table `users_purchases`
--

CREATE TABLE `users_purchases` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `purchase_date` date NOT NULL,
  `username` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users_ratings`
--

CREATE TABLE `users_ratings` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `rating` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_ratings`
--

INSERT INTO `users_ratings` (`id`, `username`, `rating`) VALUES
(2, 'admin2', 5),
(3, 'testuser1', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `listings`
--
ALTER TABLE `listings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_purchases`
--
ALTER TABLE `users_purchases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_ratings`
--
ALTER TABLE `users_ratings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `listings`
--
ALTER TABLE `listings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users_purchases`
--
ALTER TABLE `users_purchases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users_ratings`
--
ALTER TABLE `users_ratings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
