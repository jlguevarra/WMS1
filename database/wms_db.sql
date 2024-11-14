-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2024 at 04:15 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wms_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `contact` varchar(100) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `contact`, `address`, `created_at`, `updated_at`) VALUES
(2, 'John Doe', '123-456-7890', '123 Elm Street, Springfield', '2024-11-11 01:51:13', '2024-11-11 01:51:13'),
(3, 'Jane Smith', '987-654-3210', '456 Oak Avenue, Shelbyville', '2024-11-11 01:51:13', '2024-11-11 01:51:13'),
(4, 'Robert Brown', '555-123-4567', '789 Maple Lane, Capital City', '2024-11-11 01:51:13', '2024-11-11 01:51:13'),
(5, 'Emily Johnson', '444-567-8901', '101 Pine Road, Springfield', '2024-11-11 01:51:13', '2024-11-11 01:51:13'),
(6, 'Michael Davis', '222-345-6789', '202 Cedar Street, Shelbyville', '2024-11-11 01:51:13', '2024-11-11 01:51:13'),
(7, 'Laura Wilson', '333-678-1234', '303 Birch Lane, Capital City', '2024-11-11 01:51:13', '2024-11-11 01:51:13'),
(8, 'Daniel Martinez', '777-890-1234', '404 Willow Avenue, Springfield', '2024-11-11 01:51:13', '2024-11-11 01:51:13'),
(9, 'Linda Anderson', '888-901-2345', '505 Poplar Road, Shelbyville', '2024-11-11 01:51:13', '2024-11-11 01:51:13'),
(10, 'David Lee', '999-234-5678', '606 Walnut Lane, Capital City', '2024-11-11 01:51:13', '2024-11-11 01:51:13');

-- --------------------------------------------------------

--
-- Table structure for table `incoming_goods`
--

CREATE TABLE `incoming_goods` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `supplier_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `incoming_goods`
--

INSERT INTO `incoming_goods` (`id`, `date`, `item_name`, `quantity`, `supplier_id`, `created_at`, `updated_at`) VALUES
(2, '2024-11-01', 'Product A', 100, NULL, '2024-11-13 07:37:59', '2024-11-13 07:37:59'),
(3, '2024-11-02', 'Product B', 150, NULL, '2024-11-13 07:37:59', '2024-11-13 07:37:59'),
(4, '2024-11-03', 'Product C', 200, NULL, '2024-11-13 07:37:59', '2024-11-13 07:37:59'),
(5, '2024-11-04', 'Product D', 250, NULL, '2024-11-13 07:37:59', '2024-11-13 07:37:59'),
(6, '2024-11-05', 'Product E', 300, NULL, '2024-11-13 07:37:59', '2024-11-13 07:37:59');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `sku` varchar(50) NOT NULL,
  `description` text DEFAULT NULL,
  `quantity` int(10) UNSIGNED DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`id`, `name`, `sku`, `description`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 'Laptop', 'LPT-001', '15-inch screen, Intel i5, 8GB RAM', 50, '2024-11-06 10:12:51', '2024-11-06 10:12:51'),
(2, 'Mouse', 'MSE-002', 'Wireless mouse, black color', 150, '2024-11-06 10:12:51', '2024-11-06 10:12:51'),
(3, 'Keyboard', 'KBD-003', 'Mechanical keyboard, backlit', 80, '2024-11-06 10:12:51', '2024-11-06 10:12:51'),
(4, 'Monitor', 'MON-004', '24-inch, Full HD, LED', 40, '2024-11-06 10:12:51', '2024-11-06 10:12:51'),
(5, 'Printer', 'PRT-005', 'All-in-one printer, color', 20, '2024-11-06 10:12:51', '2024-11-06 10:12:51');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2024-11-02-032927', 'App\\Database\\Migrations\\AddUser', 'default', 'App', 1730518355, 1);

-- --------------------------------------------------------

--
-- Table structure for table `outgoing_goods`
--

CREATE TABLE `outgoing_goods` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `outgoing_goods`
--

INSERT INTO `outgoing_goods` (`id`, `date`, `item_name`, `quantity`, `customer_id`) VALUES
(1, '2024-11-01', 'Item A', 20, NULL),
(2, '2024-11-02', 'Item B', 15, NULL),
(3, '2024-11-03', 'Item C', 30, NULL),
(4, '2024-11-04', 'Item D', 25, NULL),
(5, '2024-11-05', 'Item E', 10, NULL),
(6, '2024-11-06', 'Item F', 40, NULL),
(7, '2024-11-07', 'Item G', 35, NULL),
(8, '2024-11-08', 'Item H', 50, NULL),
(9, '2024-11-09', 'Item I', 45, NULL),
(10, '2024-11-10', 'Item J', 20, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `name`, `contact`, `address`, `created_at`, `updated_at`) VALUES
(1, 'ABC Supply Co.', '123-456-7890', '123 Main St, Springfield', '2024-11-09 09:29:49', '2024-11-09 09:29:49'),
(2, 'Global Supplies Ltd.', '987-654-3210', '456 Elm St, Rivertown', '2024-11-09 09:29:49', '2024-11-09 09:29:49'),
(3, 'Quick Sources', '555-123-4567', '789 Oak St, Lakeview', '2024-11-09 09:29:49', '2024-11-09 01:57:55'),
(4, 'Best Supply Chain', '222-333-4444', '321 Pine St, Hilltop', '2024-11-09 09:29:49', '2024-11-09 09:29:49'),
(5, 'Allied Suppliers', '444-555-6666', '654 Cedar St, Mountainview', '2024-11-09 09:29:49', '2024-11-09 09:29:49');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(255) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin@gmail.com', '$2y$10$H1eRrLUOvGwjijFl0aW70.pDs4i5YqFBQ8l6zuQVzCTKcTlBTcSau', '2024-11-01 21:45:02', '2024-11-01 21:45:02'),
(2, 'jl@gmail.com', '$2y$10$DEQXBph1mal89iSACcaQp.a3O1.S.TTwv9JifFE/ptMf1C17NCFcS', '2024-11-01 21:55:18', '2024-11-01 21:55:18'),
(3, 'jldg@gmail.com', '$2y$10$E3Wu68k9PrwJI6bcImmbmuTvPKeWlzj85lW/pUL0qI8DPHJ.YmZCe', '2024-11-08 05:25:03', '2024-11-08 05:25:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `incoming_goods`
--
ALTER TABLE `incoming_goods`
  ADD PRIMARY KEY (`id`),
  ADD KEY `supplier_id` (`supplier_id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sku` (`sku`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `outgoing_goods`
--
ALTER TABLE `outgoing_goods`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `incoming_goods`
--
ALTER TABLE `incoming_goods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `outgoing_goods`
--
ALTER TABLE `outgoing_goods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `incoming_goods`
--
ALTER TABLE `incoming_goods`
  ADD CONSTRAINT `incoming_goods_ibfk_1` FOREIGN KEY (`supplier_id`) REFERENCES `suppliers` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `outgoing_goods`
--
ALTER TABLE `outgoing_goods`
  ADD CONSTRAINT `outgoing_goods_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
