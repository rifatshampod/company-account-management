-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2022 at 11:04 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `account`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` text NOT NULL,
  `incharge` text NOT NULL,
  `details` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `user_id`, `name`, `incharge`, `details`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Company Account', 'Rifat Bin Monsur', 'Left over profits of the company', '2022-03-23 01:27:08', '2022-03-23 01:27:08'),
(2, NULL, 'Rifat Personal Account', 'Rifat Bin Monsur', 'Personal project transactions stored here', '2022-03-23 01:31:39', '2022-03-23 01:31:39');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `client_id` varchar(7) NOT NULL,
  `name` text NOT NULL,
  `address` text NOT NULL,
  `company` text NOT NULL,
  `country` text NOT NULL,
  `phone` text NOT NULL,
  `whatsapp` text NOT NULL,
  `email` text NOT NULL,
  `category` text NOT NULL,
  `status` text NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `client_id`, `name`, `address`, `company`, `country`, `phone`, `whatsapp`, `email`, `category`, `status`, `updated_at`, `created_at`) VALUES
(1, '1221', 'Bin Monsur', '12 residential college, Universiti Malaya', 'Rifat Bin Monsur', 'Malaysia', '01139918440', '111', 'shampodrifat@gmail.com', 'partner', 'active', '2022-03-21 23:35:57', '2022-03-21 23:35:57'),
(2, '12', 'Rifat Bin Monsur', '245, ROAD-8, BLOCK-C, BASHUNDHARA R/A\r\nVatara, Badda', 'Evocation IT', 'Bangladesh', '1212', '1212', 'shampodrifat@gmail.com', 'client', 'active', '2022-03-21 23:37:17', '2022-03-21 23:37:17'),
(3, '12', 'Arif Bipu', '245, ROAD-8, BLOCK-C, BASHUNDHARA R/A\r\nVatara, Badda', 'Evocation IT', 'Bangladesh', '123', '1212', 'shampodrifat@gmail.com', 'client', 'active', '2022-03-22 02:59:17', '2022-03-22 02:59:17'),
(4, '123', 'Shakib hasan', '433/1, Bornomala Road, North Ibrahimpur, Kafrul, Dhaka 1206\r\nunit-5B', 'livetech', 'Malaysia', '1234', '01212', 'sakib@gmail.com', 'client', 'active', '2022-03-22 03:14:11', '2022-03-22 03:14:11');

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` text NOT NULL,
  `category_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `date` date NOT NULL,
  `paid_from` text NOT NULL,
  `invoice` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`id`, `user_id`, `name`, `category_id`, `project_id`, `client_id`, `amount`, `date`, `paid_from`, `invoice`, `created_at`, `updated_at`) VALUES
(1, NULL, 'domain registration', 6, 2, 2, 1200, '2022-03-24', '2', NULL, '2022-03-23 05:01:51', '2022-03-23 05:01:51'),
(2, NULL, 'Host registration', 3, 1, 2, 7500, '2022-03-25', '1', NULL, '2022-03-23 06:21:52', '2022-03-23 06:21:52');

-- --------------------------------------------------------

--
-- Table structure for table `incomes`
--

CREATE TABLE `incomes` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `project_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `expense` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `incomes`
--

INSERT INTO `incomes` (`id`, `user_id`, `project_id`, `amount`, `category_id`, `account_id`, `date`, `expense`, `created_at`, `updated_at`) VALUES
(1, NULL, 1, 40000, 3, 2, '2022-03-05', 15000, '2022-03-23 05:30:41', '2022-03-23 05:30:41');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` text NOT NULL,
  `client_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `budget` int(11) NOT NULL,
  `advance` int(11) DEFAULT NULL,
  `status` text NOT NULL,
  `start_date` date NOT NULL,
  `due_date` date NOT NULL,
  `renewal` text NOT NULL,
  `renewal_charge` int(11) NOT NULL,
  `next_renewal_date` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `user_id`, `name`, `client_id`, `category_id`, `budget`, `advance`, `status`, `start_date`, `due_date`, `renewal`, `renewal_charge`, `next_renewal_date`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Invicta Solutions', 1, 2, 1200, NULL, 'Advance Paid', '2022-03-18', '2022-03-18', 'Yearly', 100, '2022-03-26', '2022-03-22 23:05:21', '2022-03-22 23:05:21'),
(2, NULL, 'notuneaara', 4, 5, 25000, 12000, 'Advance Paid', '2022-03-03', '2022-03-31', 'yearly', 5400, '2022-03-18', '2022-03-22 23:09:36', '2022-03-22 23:09:36');

-- --------------------------------------------------------

--
-- Table structure for table `project_categories`
--

CREATE TABLE `project_categories` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project_categories`
--

INSERT INTO `project_categories` (`id`, `name`, `updated_at`, `created_at`) VALUES
(2, 'Website Design', '2022-03-22 03:33:06', '2022-03-22 03:33:06'),
(3, 'Website Development', '2022-03-22 03:33:19', '2022-03-22 03:33:19'),
(4, 'Mobile Application Design', '2022-03-22 03:33:27', '2022-03-22 03:33:27'),
(5, 'UI Design', '2022-03-22 03:43:11', '2022-03-22 03:43:11'),
(6, 'Domain', '2022-03-23 04:52:03', '2022-03-23 04:52:03');

-- --------------------------------------------------------

--
-- Table structure for table `transfers`
--

CREATE TABLE `transfers` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `account_from_id` int(11) NOT NULL,
  `account_to_name` text NOT NULL,
  `amount` int(11) NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transfers`
--

INSERT INTO `transfers` (`id`, `user_id`, `account_from_id`, `account_to_name`, `amount`, `date`, `created_at`, `updated_at`) VALUES
(1, NULL, 2, 'Company Account', 2500, '2022-03-23', '2022-03-23 02:04:52', '2022-03-23 02:04:52'),
(2, NULL, 1, 'Rifat Personal Account', 1000, '2022-03-26', '2022-03-23 02:15:22', '2022-03-23 02:15:22'),
(3, NULL, 2, 'Company Account', 570, '2022-03-18', '2022-03-23 02:16:16', '2022-03-23 02:16:16');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `incomes`
--
ALTER TABLE `incomes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_categories`
--
ALTER TABLE `project_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transfers`
--
ALTER TABLE `transfers`
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
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `incomes`
--
ALTER TABLE `incomes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `project_categories`
--
ALTER TABLE `project_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `transfers`
--
ALTER TABLE `transfers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
