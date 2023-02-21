-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 14, 2023 at 10:51 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `auth_php`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobile`, `password`) VALUES
(1, 'kardl', 'kardl@kardl.com', '01275870379', '$2y$10$H9MNU2L18M89D81L20aale6xsT4xIl4ZuZ4.oufF7PzUCnco7oAUi'),
(2, 'kardal', 'kardl@kardl.com', '0111111111', '$2y$10$H9MNU2L18M89D81L20aale6xsT4xIl4ZuZ4.oufF7PzUCnco7oAUi'),
(3, 'ibrahim ', 'ibrahim@luca.com', '0111111111', '$2y$10$Yspw3AdnKHHeMo7XwUpSDunjSHr5w1ktlCrAtR0KjLV82e0GE3ok.'),
(4, 'kardal', 'asda@gmil.com', 'sas', '$2y$10$rp0hPFAc.Om0YBvOnAF9V.wJTeY1VPkAqdMq372kfypoBdqbHoKGW'),
(5, 'kardal', 'kardl@kardl.com', '01275870379', '$2y$10$H9MNU2L18M89D81L20aale6xsT4xIl4ZuZ4.oufF7PzUCnco7oAUi'),
(6, 'kardal', 'kardl@kardl.com', '01275870379', '$2y$10$H9MNU2L18M89D81L20aale6xsT4xIl4ZuZ4.oufF7PzUCnco7oAUi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
