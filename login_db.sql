-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2025 at 12:35 PM
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
-- Database: `login_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `distributors`
--

CREATE TABLE `distributors` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  `contact` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `distributors`
--

INSERT INTO `distributors` (`id`, `name`, `location`, `contact`) VALUES
(1, 'harsh', 'India', '5698329865'),
(2, 'AgriDepot A', 'Delhi', '9999988888'),
(3, 'FarmCare', 'Punjab', '8888877777'),
(4, 'Apex Solution Group', 'India', '9876543242');

-- --------------------------------------------------------

--
-- Table structure for table `soil_details`
--

CREATE TABLE `soil_details` (
  `id` int(11) NOT NULL,
  `location` varchar(100) DEFAULT NULL,
  `ph_level` decimal(3,1) DEFAULT NULL,
  `moisture_level` decimal(5,2) DEFAULT NULL,
  `crop_suggestion` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `soil_details`
--

INSERT INTO `soil_details` (`id`, `location`, `ph_level`, `moisture_level`, `crop_suggestion`) VALUES
(1, 'kal', 0.7, 0.06, 'black'),
(2, 'Haryana', 6.5, 30.00, 'Wheat, Mustard'),
(3, 'UP', 7.0, 28.00, 'Sugarcane, Rice'),
(4, 'India', 2.0, 70.00, 'Cotton'),
(5, NULL, NULL, NULL, NULL),
(6, NULL, NULL, NULL, NULL),
(7, NULL, NULL, NULL, NULL),
(8, 'Bhagalpur', 6.0, 55.00, 'Tomatoes,Peppers');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', '0192023a7bbd73250516f069df18b500'),
(4, 'vivek', 'vivek123'),
(16, 'kal', '$2y$10$xwuGkRJU79TkwO5.Sm8hTep/cFrmKlPONzqFQTIjrNtv4EbRkjJcC'),
(19, 'hash', '$2y$10$RjG8fXDAzQO1c21gAXJOtOGJa.iCbGwJVnVzF01BGQ0jy.rt0oQay');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `distributors`
--
ALTER TABLE `distributors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `soil_details`
--
ALTER TABLE `soil_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `distributors`
--
ALTER TABLE `distributors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `soil_details`
--
ALTER TABLE `soil_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
