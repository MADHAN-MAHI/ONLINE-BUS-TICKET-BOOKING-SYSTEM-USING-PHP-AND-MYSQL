-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2022 at 02:15 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Table structure for table `buses`
--

CREATE TABLE `buses` (
  `id` int(100) NOT NULL,
  `bus_name` varchar(100) NOT NULL,
  `boarding_station` varchar(100) NOT NULL,
  `destination_station` varchar(100) NOT NULL,
  `duration` int(100) NOT NULL,
  `fare` int(100) NOT NULL,
  `rating` int(100) NOT NULL,
  `seats_available` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buses`
--

INSERT INTO `buses` (`id`, `bus_name`, `boarding_station`, `destination_station`, `duration`, `fare`, `rating`, `seats_available`) VALUES
(1, 'MK TRAVELS', 'VIRUDHUNAGAR', 'CHENNAI', 9, 1000, 5, 20),
(2, 'MSD TRAVELS', 'VIRUDHUNAGAR', 'CHENNAI', 9, 1200, 4, 20),
(3, 'MASSANEIRO', 'VIRUDHUNAGAR', 'COVAI', 6, 700, 4, 20),
(4, 'PLAPALSE', 'VIRUDHUNAGAR', 'COVAI', 6, 800, 3, 20);

-- --------------------------------------------------------

--
-- Table structure for table `bus_seat`
--

CREATE TABLE `bus_seat` (
  `bus_name` varchar(100) NOT NULL,
  `seat_no` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `ticket_no` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bus_seat`
--

INSERT INTO `bus_seat` (`bus_name`, `seat_no`, `status`, `ticket_no`) VALUES
('MSD TRAVELS', 'L-1', 'not_booked', 0),
('MSD TRAVELS', 'L-2', 'not_booked', 0),
('MSD TRAVELS', 'L-3', 'not_booked', 0),
('MSD TRAVELS', 'L-4', 'not_booked', 0),
('MSD TRAVELS', 'L-5', 'not_booked', 0),
('MSD TRAVELS', 'L-6', 'not_booked', 0),
('MSD TRAVELS', 'L-7', 'not_booked', 0),
('MSD TRAVELS', 'L-8', 'not_booked', 0),
('MSD TRAVELS', 'L-9', 'not_booked', 0),
('MSD TRAVELS', 'L-10', 'not_booked', 0),
('MSD TRAVELS', 'R-1', 'not_booked', 0),
('MSD TRAVELS', 'R-2', 'not_booked', 0),
('MSD TRAVELS', 'R-3', 'not_booked', 0),
('MSD TRAVELS', 'R-4', 'not_booked', 0),
('MSD TRAVELS', 'R-5', 'not_booked', 0),
('MSD TRAVELS', 'R-6', 'not_booked', 0),
('MSD TRAVELS', 'R-7', 'not_booked', 0),
('MSD TRAVELS', 'R-8', 'not_booked', 0),
('MSD TRAVELS', 'R-9', 'not_booked', 0),
('MSD TRAVELS', 'R-10', 'not_booked', 0);

-- --------------------------------------------------------

--
-- Table structure for table `bus_seat1`
--

CREATE TABLE `bus_seat1` (
  `bus_name` varchar(100) NOT NULL,
  `seat_no` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `ticket_no` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bus_seat1`
--

INSERT INTO `bus_seat1` (`bus_name`, `seat_no`, `status`, `ticket_no`) VALUES
('MASSANEIRO', 'L-1', 'not_booked', 0),
('MASSANEIRO', 'L-2', 'not_booked', 0),
('MASSANEIRO', 'L-3', 'not_booked', 0),
('MASSANEIRO', 'L-4', 'not_booked', 0),
('MASSANEIRO', 'L-5', 'not_booked', 0),
('MASSANEIRO', 'L-6', 'not_booked', 0),
('MASSANEIRO', 'L-7', 'not_booked', 0),
('MASSANEIRO', 'L-8', 'not_booked', 0),
('MASSANEIRO', 'L-9', 'not_booked', 0),
('MASSANEIRO', 'L-10', 'not_booked', 0),
('MASSANEIRO', 'R-1', 'not_booked', 0),
('MASSANEIRO', 'R-2', 'not_booked', 0),
('MASSANEIRO', 'R-3', 'not_booked', 0),
('MASSANEIRO', 'R-4', 'not_booked', 0),
('MASSANEIRO', 'R-5', 'not_booked', 0),
('MASSANEIRO', 'R-6', 'not_booked', 0),
('MASSANEIRO', 'R-7', 'not_booked', 0),
('MASSANEIRO', 'R-8', 'not_booked', 0),
('MASSANEIRO', 'R-9', 'not_booked', 0),
('MASSANEIRO', 'R-10', 'not_booked', 0);

-- --------------------------------------------------------

--
-- Table structure for table `bus_seat2`
--

CREATE TABLE `bus_seat2` (
  `bus_name` varchar(100) NOT NULL,
  `seat_no` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `ticket_no` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bus_seat2`
--

INSERT INTO `bus_seat2` (`bus_name`, `seat_no`, `status`, `ticket_no`) VALUES
('PLAPALSE', 'L-1', 'not_booked', 0),
('PLAPALSE', 'L-2', 'not_booked', 0),
('PLAPALSE', 'L-3', 'not_booked', 0),
('PLAPALSE', 'L-4', 'not_booked', 0),
('PLAPALSE', 'L-5', 'not_booked', 0),
('PLAPALSE', 'L-6', 'not_booked', 0),
('PLAPALSE', 'L-7', 'not_booked', 0),
('PLAPALSE', 'L-8', 'not_booked', 0),
('PLAPALSE', 'L-9', 'not_booked', 0),
('PLAPALSE', 'L-10', 'not_booked', 0),
('PLAPALSE', 'R-1', 'not_booked', 0),
('PLAPALSE', 'R-2', 'not_booked', 0),
('PLAPALSE', 'R-3', 'not_booked', 0),
('PLAPALSE', 'R-4', 'not_booked', 0),
('PLAPALSE', 'R-5', 'not_booked', 0),
('PLAPALSE', 'R-6', 'not_booked', 0),
('PLAPALSE', 'R-7', 'not_booked', 0),
('PLAPALSE', 'R-8', 'not_booked', 0),
('PLAPALSE', 'R-9', 'not_booked', 0),
('PLAPALSE', 'R-10', 'not_booked', 0);

-- --------------------------------------------------------

--
-- Table structure for table `bus_seats`
--

CREATE TABLE `bus_seats` (
  `bus_name` varchar(100) NOT NULL,
  `seat_no` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `ticket_no` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bus_seats`
--

INSERT INTO `bus_seats` (`bus_name`, `seat_no`, `status`, `ticket_no`) VALUES
('MK TRAVELS', 'L-1', 'not_booked', 0),
('MK TRAVELS', 'L-2', 'not_booked', 0),
('MK TRAVELS', 'L-3', 'not_booked', 0),
('MK TRAVELS', 'L-4', 'not_booked', 0),
('MK TRAVELS', 'L-5', 'not_booked', 0),
('MK TRAVELS', 'L-6', 'not_booked', 0),
('MK TRAVELS', 'L-7', 'not_booked', 0),
('MK TRAVELS', 'L-8', 'not_booked', 0),
('MK TRAVELS', 'L-9', 'not_booked', 0),
('MK TRAVELS', 'L-10', 'not_booked', 0),
('MK TRAVELS', 'R-1', 'not_booked', 0),
('MK TRAVELS', 'R-2', 'not_booked', 0),
('MK TRAVELS', 'R-3', 'not_booked', 0),
('MK TRAVELS', 'R-4', 'not_booked', 0),
('MK TRAVELS', 'R-5', 'not_booked', 0),
('MK TRAVELS', 'R-6', 'not_booked', 0),
('MK TRAVELS', 'R-7', 'not_booked', 0),
('MK TRAVELS', 'R-8', 'not_booked', 0),
('MK TRAVELS', 'R-9', 'not_booked', 0),
('MK TRAVELS', 'R-10', 'not_booked', 0);

-- --------------------------------------------------------

--
-- Table structure for table `passanger_details`
--

CREATE TABLE `passanger_details` (
  `passanger_id` int(100) NOT NULL,
  `passanger_name` int(100) NOT NULL,
  `passanger_mobile` bigint(100) NOT NULL,
  `ticket_no` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ticket_details`
--

CREATE TABLE `ticket_details` (
  `admin_id` int(100) NOT NULL,
  `ticket_no` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ticket_details`
--

INSERT INTO `ticket_details` (`admin_id`, `ticket_no`) VALUES
(0, 2123439377),
(0, 1809792223),
(0, 1809792223),
(0, 903443261);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(10, 'madhan', 'madhan37@gmail.com', 'M12K');

--
-- Table structure for table `users`
--

CREATE TABLE `admins` (
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `users` (`username`, `email`, `password`) VALUES
('madhan', 'madhan123@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buses`
--
ALTER TABLE `buses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `passanger_details`
--
ALTER TABLE `passanger_details`
  ADD PRIMARY KEY (`passanger_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buses`
--
ALTER TABLE `buses`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `passanger_details`
--
ALTER TABLE `passanger_details`
  MODIFY `passanger_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
