-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2024 at 04:45 PM
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
-- Database: `try`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(100) NOT NULL,
  `booking_id` varchar(255) NOT NULL,
  `customer_id` varchar(255) NOT NULL,
  `route_id` varchar(255) NOT NULL,
  `customer_route` varchar(200) NOT NULL,
  `booked_amount` int(100) NOT NULL,
  `booked_seat` varchar(100) NOT NULL,
  `booking_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `booking_id`, `customer_id`, `route_id`, `customer_route`, `booked_amount`, `booked_seat`, `booking_created`) VALUES
(163, 'SX2NX163', 'CUST-88064', 'RT-4874462', 'GHANDRUK &rarr; POKHARA', 5400, '1,2,3', '2024-04-29 06:46:04'),
(164, '4TEN3164', 'CUST-88064', 'RT-2302761', 'POKHARA &rarr;  KATHMANDU', 400, '1,2', '2024-04-29 07:16:25'),
(165, 'NQ4UG165', 'CUST-88064', 'RT-4048866', 'POKHARA &rarr; SYANGJA', 300, '1,2', '2024-04-29 07:25:47'),
(166, '0PPG3166', 'CUST-43029', 'RT-2302761', 'POKHARA &rarr;  KATHMANDU', 400, '3,4', '2024-04-29 07:33:00'),
(167, 'SXC8Q167', 'CUST-88064', 'RT-3986164', 'POKHARA &rarr; BAGLUNG', 400, '1,2', '2024-04-29 07:37:33'),
(168, '8M1OO168', 'CUST-49170', 'RT-4874462', 'GHANDRUK &rarr; POKHARA', 3600, '1,2', '2024-04-29 08:17:25'),
(171, 'G6R92171', 'CUST-10178', 'RT-3986164', 'POKHARA &rarr; BAGLUNG', 400, '3,4', '2024-04-29 09:51:52');

-- --------------------------------------------------------

--
-- Table structure for table `buses`
--

CREATE TABLE `buses` (
  `id` int(100) NOT NULL,
  `bus_no` varchar(255) NOT NULL,
  `bus_assigned` tinyint(1) NOT NULL DEFAULT 0,
  `bus_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buses`
--

INSERT INTO `buses` (`id`, `bus_no`, `bus_assigned`, `bus_created`) VALUES
(44, 'MVL1000', 0, '2021-10-16 22:05:16'),
(45, 'ABC0010', 0, '2021-10-17 22:32:46'),
(46, 'XYZ7890', 0, '2021-10-17 22:33:15'),
(47, 'BCC9999', 0, '2021-10-17 22:33:22'),
(48, 'RDH4255', 0, '2021-10-17 22:33:36'),
(49, 'TTH8888', 0, '2021-10-18 00:05:32'),
(50, 'MMM9969', 0, '2021-10-18 00:06:02'),
(51, 'LLL7699', 0, '2021-10-18 00:06:42'),
(52, 'SSX6633', 0, '2021-10-18 00:06:52'),
(53, 'NBS4455', 0, '2021-10-18 09:27:49'),
(54, 'CAS3300', 0, '2021-10-18 09:36:54'),
(55, '1234', 0, '2024-04-29 06:43:58'),
(56, 'DXF', 1, '2024-04-29 07:20:22'),
(57, 'GA21', 1, '2024-04-29 07:23:18'),
(58, '374', 0, '2024-04-29 07:30:32'),
(59, '2340', 0, '2024-04-29 07:30:43'),
(60, 'AB1', 1, '2024-04-29 08:18:11');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `customer_id` varchar(255) NOT NULL,
  `customer_name` varchar(30) NOT NULL,
  `customer_phone` varchar(10) NOT NULL,
  `customer_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `user_id`, `customer_id`, `customer_name`, `customer_phone`, `customer_created`) VALUES
(49, 0, 'CUST-23476', 'garima subedi', '9812345678', '2024-04-28 11:42:16'),
(50, 0, 'CUST-96027', 'Raleena', '9876543210', '2024-04-28 15:10:56'),
(51, 0, 'CUST-75778', 'Garima', '9876543210', '2024-04-28 20:18:01'),
(52, 17, 'CUST-27627', 'Tara Bahadur Thapa', '9876543210', '2024-04-29 06:39:08'),
(53, 18, 'CUST-88064', 'Raleena Shrestha', '1234567890', '2024-04-29 06:40:39'),
(54, 19, 'CUST-43029', 'aakriti', '9876543210', '2024-04-29 07:32:45'),
(55, 20, 'CUST-49170', 'garima subedi', '8725252521', '2024-04-29 08:14:19'),
(56, 21, 'CUST-10178', 'aakriti bhandari', '982513333', '2024-04-29 09:50:48');

-- --------------------------------------------------------

--
-- Table structure for table `routes`
--

CREATE TABLE `routes` (
  `id` int(100) NOT NULL,
  `route_id` varchar(255) NOT NULL,
  `bus_no` varchar(155) NOT NULL,
  `route_cities` varchar(255) NOT NULL,
  `route_dep_date` date NOT NULL,
  `route_dep_time` time NOT NULL,
  `route_step_cost` int(100) NOT NULL,
  `route_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `routes`
--

INSERT INTO `routes` (`id`, `route_id`, `bus_no`, `route_cities`, `route_dep_date`, `route_dep_time`, `route_step_cost`, `route_created`) VALUES
(53, 'RT-1908653', 'MVL1000', 'CITY1,CITY2', '2021-10-17', '22:05:00', 100, '2021-10-16 22:05:42'),
(61, 'RT-2302761', 'BCC9999', 'POKHARA, KATHMANDU', '2024-04-29', '12:30:00', 200, '2024-04-28 11:28:39'),
(62, 'RT-4874462', '12345', 'GHANDRUK,POKHARA', '2024-04-30', '08:45:00', 1800, '2024-04-29 06:43:43'),
(63, 'RT-3825463', '374', 'POKHARA,BUTWAL', '2024-05-03', '09:50:00', 2000, '2024-04-29 06:50:24'),
(64, 'RT-3986164', '2340', 'POKHARA,BAGLUNG', '2024-04-30', '11:50:00', 200, '2024-04-29 06:50:53'),
(66, 'RT-4048866', 'GA21', 'POKHARA,SYANGJA', '2024-05-02', '08:23:00', 200, '2024-04-29 07:23:53'),
(67, 'RT-1949367', 'AB1', 'POKHARA,KUSMA', '2024-04-30', '21:19:00', 100, '2024-04-29 08:18:55');

-- --------------------------------------------------------

--
-- Table structure for table `seats`
--

CREATE TABLE `seats` (
  `bus_no` varchar(155) NOT NULL,
  `seat_booked` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seats`
--

INSERT INTO `seats` (`bus_no`, `seat_booked`) VALUES
('1234', '1,2,3'),
('12345', '1,2'),
('2340', '1,2,3,4'),
('374', '2'),
('AB1', NULL),
('BCC9999', '1,2,3,4'),
('CAS3300', ''),
('DXF', NULL),
('GA21', '1,2'),
('LLL7699', NULL),
('MMM9969', ''),
('MVL1000', '2,3,4,5,6,7'),
('NBS4455', NULL),
('RDH4255', NULL),
('SSX6633', NULL),
('TTH8888', NULL),
('XYZ7890', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_fullname` varchar(100) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `user_type` int(11) NOT NULL DEFAULT 0,
  `phone_no` int(11) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_created` datetime NOT NULL DEFAULT current_timestamp(),
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_fullname`, `user_name`, `user_type`, `phone_no`, `user_password`, `user_created`, `address`) VALUES
(17, 'Tara Bahadur Thapa', 'tarabahadur', 1, 2147483647, '766d8894c7576f9cfc55758a9f6e082c', '2024-04-29 06:39:08', 'Pokhara'),
(18, 'Raleena Shrestha', 'raleena', 0, 1234567890, '5f4dcc3b5aa765d61d8327deb882cf99', '2024-04-29 06:40:39', 'Syangja'),
(19, 'aakriti', 'aakritibhandari', 0, 2147483647, '15b92ac077e8758af98848378f24cf53', '2024-04-29 07:32:45', 'Pokhara'),
(20, 'garima subedi', 'garima', 0, 2147483647, '2b882400855082a1b1a97cedf64cb413', '2024-04-29 08:14:19', 'pkr'),
(21, 'aakriti bhandari', 'aakriti', 0, 982513333, 'd152e623f22a979cd11035828c70e8b0', '2024-04-29 09:50:48', 'pokhara');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buses`
--
ALTER TABLE `buses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `routes`
--
ALTER TABLE `routes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seats`
--
ALTER TABLE `seats`
  ADD PRIMARY KEY (`bus_no`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=172;

--
-- AUTO_INCREMENT for table `buses`
--
ALTER TABLE `buses`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `routes`
--
ALTER TABLE `routes`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
