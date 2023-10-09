-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2023 at 01:46 PM
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
-- Database: `zoo`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `msg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `msg`) VALUES
(1, 'juhi soni', 'juhisoni41230@gmail.com', 'i want to travell', 'i want to see more animal'),
(3, 'Pavan Shah', 'shahpavan46@gmail.com', 'i want to travell', 'th'),
(4, 'Raghav', 'raghav46@gmail.com', 'animal', 'I want some other picture'),
(5, 'Sanjay', 'sanjau41230@gmail.com', 'Birds regarding', 'OWW...Nice..');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `pimage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `pname`, `pimage`) VALUES
(6, 'Monkey', '4.jpg'),
(7, 'Zebra', '5.jpg'),
(8, 'Bear', '1.5.jpg'),
(9, 'Camel', '6.jpg'),
(10, 'Elephant', '1.1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(2, 'juhi', '$2y$10$MRcxpVKCtdVkURbhv0fMnuP/TY3XPmMQbjB/P5zZU9KqqB2XmGNtW'),
(3, 'admin', '$2y$10$cVAFWL5L2s5u1vVjk9fNCOq2Jtwg3hIrHP3GGeV3cB.08LFjL/eXq'),
(4, 'Pavan', '$2y$10$9sv9jH5seZGRgkuEph6E6uu.ZJ5SrfIsjhARmbN.HavCPGA9zRXs.'),
(5, 'raghav', '$2y$10$IBwWIqncV8IG/BbiCOzdy.hEFuP0JPWh23hfuEUGM54EJvOk/pot2'),
(6, 'Juhii', '$2y$10$Z4rCe5EJRnKUJSZANBjKG.Fggw/tnV12ZqNgAMjDKmYvP0sFN9D3e'),
(7, 'pvn', '$2y$10$sPtxt5TSLEcdgHPfh13Qcu0Z3HkyRjb0n.XjqwegC5AltkWyygpaW');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
