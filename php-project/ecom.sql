-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2026 at 09:06 AM
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
-- Database: `ecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `role_id` int(11) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role_id`, `password`) VALUES
(1, 'Asia', 'asia@mail.com', 1, '$2y$10$GXWFTR92zpRnyente0gAVOTZJi6V49M3vGyKzkiVKj2FwvCy7NsqW'),
(2, 'Mian', 'mina@mail.com', 2, '111'),
(3, 'Raju', 'raju@mail.com', 3, '$2y$10$eu/juu.IlbpdsfWo6ZiRsO5Lxdza9JfKD.I7qVcit/eqfG55m8HwK'),
(4, 'Asia', 'asia@mail.com', 3, '$2y$10$MLmA6132J5jsWNX63Ot/GuyVrQsVt2krkYinoDu/s9E0uz7p7gfB6'),
(5, 'Raju', 'raju@mail.com', 2, '$2y$10$aQKhMcv82RzZe2ra9zkeDeK6UaTL/T2PDf3.bg0Jm20YeeSqV8OEa'),
(6, 'Asia', 'asia@mail.com', 2, '$2y$10$4FwwpuE1Q.KugQsxbI1Xn.ZcGfti.DH6WkG4tum54aTNAlH6myA5C'),
(7, 'Asia', 'asia@mail.com', 1, '$2y$10$YOz3HOGRDtnYVTb5myXAtewfoNmWhwEC31J69.RZFjniK9IED8xLu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
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
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
