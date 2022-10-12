-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2022 at 04:53 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `avega_tbl`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking_tbl`
--

CREATE TABLE `booking_tbl` (
  `id` int(11) NOT NULL,
  `requesting_employee` varchar(255) NOT NULL,
  `book_date_time` date NOT NULL,
  `destination_from` varchar(255) NOT NULL,
  `destination_to` varchar(255) NOT NULL,
  `vehicle_count` varchar(255) NOT NULL,
  `estimated_kilometers_and_hours` varchar(255) NOT NULL,
  `purpose_of_travel` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking_tbl`
--

INSERT INTO `booking_tbl` (`id`, `requesting_employee`, `book_date_time`, `destination_from`, `destination_to`, `vehicle_count`, `estimated_kilometers_and_hours`, `purpose_of_travel`, `status`) VALUES
(1, '1', '2022-10-11', 'tayud', 'naga', '5', '20', 'deliver sako', 'Approved'),
(2, '4', '2022-10-12', 'carcar', 'naga', '5', '23', 'deliver chicaron', 'Approved'),
(3, '1', '2022-10-10', 'disney', 'new zealand', '6', '40', 'wala lang', 'For Approval'),
(4, '4', '2022-10-04', 'earth', 'saturn', '4', '30', 'deliver allien', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `employees_tbl`
--

CREATE TABLE `employees_tbl` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `birthdate` date NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact_no` varchar(255) NOT NULL,
  `emergency_contact_person` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees_tbl`
--

INSERT INTO `employees_tbl` (`id`, `fullname`, `birthdate`, `address`, `contact_no`, `emergency_contact_person`, `position`) VALUES
(1, 'Chino Concepcion', '2022-09-07', 'Minglanilla, Cebu', '09453319369', '09453319368', 'Developer'),
(4, 'sample', '2022-10-01', 'tayud', '213124', '1234123', 'driver'),
(5, '', '0000-00-00', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `trip_tickets`
--

CREATE TABLE `trip_tickets` (
  `id` int(11) NOT NULL,
  `booking_id` varchar(255) NOT NULL,
  `assigned_vehicle` varchar(255) NOT NULL,
  `assigned_driver` varchar(255) NOT NULL,
  `actual_date_time` date NOT NULL,
  `oddometer_start_reading` bigint(255) NOT NULL,
  `odometer_end_reading` bigint(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trip_tickets`
--

INSERT INTO `trip_tickets` (`id`, `booking_id`, `assigned_vehicle`, `assigned_driver`, `actual_date_time`, `oddometer_start_reading`, `odometer_end_reading`, `status`) VALUES
(1, '2', '3', 'naruto', '0000-00-00', 0, 0, 'Pending'),
(2, '2', '3', 'lainnasad', '0000-00-00', 0, 0, 'Pending'),
(3, '1', '3', 'goku', '0000-00-00', 2031, 0, 'Arrived'),
(4, '4', '4', 'saitama', '2022-10-13', 2999, 2322, 'Arrived');

-- --------------------------------------------------------

--
-- Table structure for table `users_tbl`
--

CREATE TABLE `users_tbl` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `employee_id` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_tbl`
--

INSERT INTO `users_tbl` (`id`, `username`, `password`, `employee_id`, `role`) VALUES
(1, 'admin', 'admin', '4', 'Admin'),
(2, 'user', 'user', '1', 'User'),
(3, 'username13', 'admin113', '4', 'User');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_tbl`
--

CREATE TABLE `vehicle_tbl` (
  `id` int(11) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `plate_no` varchar(255) NOT NULL,
  `vin` varchar(255) NOT NULL,
  `engine_chassis_no` varchar(255) NOT NULL,
  `fuel_tank_capacity` float NOT NULL,
  `fuel_consumption_per_liter` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicle_tbl`
--

INSERT INTO `vehicle_tbl` (`id`, `brand`, `model`, `plate_no`, `vin`, `engine_chassis_no`, `fuel_tank_capacity`, `fuel_consumption_per_liter`) VALUES
(3, 'HOWO', 'DUPTRUCK', '3435', '2347623', '723463', 400, 3),
(4, 'branded', 'Prime Mover', '9283', '124123', '343233', 500, 20);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking_tbl`
--
ALTER TABLE `booking_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees_tbl`
--
ALTER TABLE `employees_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trip_tickets`
--
ALTER TABLE `trip_tickets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_tbl`
--
ALTER TABLE `users_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle_tbl`
--
ALTER TABLE `vehicle_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking_tbl`
--
ALTER TABLE `booking_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `employees_tbl`
--
ALTER TABLE `employees_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `trip_tickets`
--
ALTER TABLE `trip_tickets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users_tbl`
--
ALTER TABLE `users_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `vehicle_tbl`
--
ALTER TABLE `vehicle_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
