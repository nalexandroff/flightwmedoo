-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2025 at 03:00 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `framework`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admins_id` int(11) NOT NULL,
  `admins_name` varchar(255) NOT NULL,
  `admins_email` varchar(255) NOT NULL,
  `admins_password` varchar(255) NOT NULL,
  `admins_username` varchar(255) DEFAULT NULL,
  `admins_role` tinyint(4) DEFAULT 2 COMMENT '1 - Супер админ, 2 - Админ, 3 - Сътрудник',
  `admins_is_active` tinyint(4) DEFAULT 1,
  `admins_last_login` timestamp NULL DEFAULT NULL,
  `admins_auto_login` tinyint(1) DEFAULT 0,
  `admins_created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `admins_updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admins_id`),
  ADD UNIQUE KEY `admins_email` (`admins_email`),
  ADD UNIQUE KEY `admins_username` (`admins_username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admins_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;