-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 03, 2024 at 09:06 PM
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
-- Database: `Pizza`
--

-- --------------------------------------------------------

--
-- Table structure for table `PizzaInfo`
--

CREATE TABLE `PizzaInfo` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `ingredients` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `PizzaInfo`
--

INSERT INTO `PizzaInfo` (`id`, `title`, `ingredients`, `email`, `created_at`) VALUES
(6, 'Normal  Pizza', 'Tomito, Onion', 'Ahmed@ali.com', '2024-02-03 13:03:27'),
(9, 'Normal Pizza', 'Cheese, Potato, Onione ', 'ali@gmail.com', '2024-02-03 19:50:56'),
(10, 'Pizza', 'Cheese, Potato, Onione', 'Ahmed@ali.com', '2024-02-03 19:52:30'),
(11, 'asdf', 'asa', 'Ahmed@ali.com', '2024-02-03 19:52:42'),
(14, 'Hot Pizza', 'Cheese, Salt, Olives', 'almkhlafi2021@gmail.com', '2024-02-03 19:54:10'),
(15, 'hot pizza', 'Tomito, Onion, Sauce', 'asdfasd@gmail.com', '2024-02-03 19:54:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `PizzaInfo`
--
ALTER TABLE `PizzaInfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `PizzaInfo`
--
ALTER TABLE `PizzaInfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
