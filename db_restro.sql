-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2024 at 04:08 PM
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
-- Database: `db_restro`
--

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `branch_id` int(10) NOT NULL,
  `branch_name` text NOT NULL,
  `branch_address` text NOT NULL,
  `branch_contact` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`branch_id`, `branch_name`, `branch_address`, `branch_contact`) VALUES
(2, 'Karachi Branch', 'Clifton Dehli Colony', '051111446699'),
(5, 'Dehli Colony branch', 'Karachi', '5222555225'),
(6, 'Islamabad Branch #2', '24 number bus stop RWP', '03335300'),
(9, 'Behria Town Branch', '24 number bus stop RWP', '789'),
(10, 'Karachi Branch Gulshan', 'Gulshan block 12 ', '555555');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(10) NOT NULL,
  `menu_name` varchar(100) NOT NULL,
  `menu_desc` text NOT NULL,
  `menu_catg` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(10) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_contact` varchar(11) NOT NULL,
  `user_address` varchar(200) NOT NULL,
  `user_role` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_email`, `user_password`, `user_contact`, `user_address`, `user_role`) VALUES
(1, 'abdullah', 'abdullah@gmail.com', '$2y$10$ZdgzCVB9b8PkYqbKf2W0G.0QiG.dG.h766y6y1OQfgR.msFjnGPZK', '', '', 1),
(2, 'mani', 'manibahi@gmail.com', '$2y$10$Yh7ECMzqcRh4OBGcEE/iPOFtFeE7lUvHQhPgLizNOFEZVMtCNYRWm', '', '', 1),
(3, 'fatima', 'fatima@gmail.com', '$2y$10$9MWgYwgyAn6fO5ckJyVO1u3KhU9TThPixldAultl5/S82SIi/kVdi', '', '', 1),
(4, 'abdullah', 'abdullah123@gmail.com', '$2y$10$AyjDLs0xC8zcgPAg1iAAleV4HB0M91CwZ98Uu3KRf2KiLwqkwL2JS', '', '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`branch_id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `branch_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
