-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2023 at 12:33 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant-db`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `admin_id` int(2) NOT NULL,
  `admin_name` varchar(20) NOT NULL,
  `admin_email` varchar(35) NOT NULL,
  `admin_phone` varchar(13) NOT NULL,
  `admin_username` varchar(11) NOT NULL,
  `admin_password` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`admin_id`, `admin_name`, `admin_email`, `admin_phone`, `admin_username`, `admin_password`) VALUES
(1, 'Jane', 'janesmith@gmail.com', '1234567890', 'jsmith', '4604');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cust_id` int(11) NOT NULL,
  `cust_name` varchar(20) NOT NULL,
  `cust_email` varchar(35) NOT NULL,
  `cust_phone` varchar(13) NOT NULL,
  `cust_username` varchar(11) NOT NULL,
  `cust_password` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `cust_name`, `cust_email`, `cust_phone`, `cust_username`, `cust_password`) VALUES
(22, 'John Doe', 'johndoe@gmail.com', '1234567890', 'jdoe', '456'),
(23, 'Jane Smith', 'janesmith@gmail.com', '3458543326', 'jsmith', '123'),
(24, 'Robert Johnson', 'robertjohnson@gmail.com', '2457539976', 'rjohnson', '123'),
(25, 'Emily Brown', 'emilybrown@gmail.com', '2463473365', 'ebrown', '123'),
(26, 'Olivia Jones', 'oliviajones@gmail.com', '2865568874', 'ojones', '123'),
(27, 'Kayla Greene', 'kaylagreene@gmail.com', '7036657489', 'kgreene', '456'),
(28, 'James Jay', 'jamesjay@gmail.com', '5715674456', 'jjay', '456'),
(29, 'Tina Porter', 'tinaporter@gmail.com', '2759996564', 'tporter', '456'),
(30, 'Allie Le', 'alliele@gmail.com', '2760086564', 'ale', '456'),
(31, 'Chris Williams', 'chriswilliams@gmail.com', '0385823225', 'cwilliams', '789'),
(32, 'Bobby Joe', 'bobbyjoe@gmail.com', '7573567322', 'bjoe', '789'),
(33, 'Mary Smith', 'marysmith@gmail.com', '8014939405', 'msmith', '246'),
(34, 'Abby Kim', 'abbykim@gmail.com', '4829993252', 'akim', '246'),
(35, 'Michael Hanes', 'michaelhanes@gmail.com', '7239121154', 'mhanes', '246'),
(36, 'Tiffany Yoon', 'tiffanyyoon@gmail.com', '9684438293', 'tyoon', 'jw3jf'),
(37, 'Tyler Pine', 'tylerpine@gmail.com', '6584449392', 'tpine', 'jdi493'),
(38, 'Karen Summer', 'karensummer@gmail.com', '4019493306', 'ksummer', 'kID03'),
(39, 'Annie Springs', 'anniesprings@gmail.com', '7033372917', 'asprings', 'LdoY324'),
(41, 'Noah Charles', 'noahcharles@gmail.com', '0693395411', 'ncharles', 'AOIdse');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_id` int(11) NOT NULL,
  `emp_name` varchar(20) NOT NULL,
  `emp_email` varchar(35) NOT NULL,
  `emp_type` enum('Full-Time','Part-Time') NOT NULL,
  `emp_phone` varchar(13) NOT NULL,
  `hours_worked` float NOT NULL DEFAULT 0,
  `emp_username` varchar(11) NOT NULL,
  `emp_password` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `emp_name`, `emp_email`, `emp_type`, `emp_phone`, `hours_worked`, `emp_username`, `emp_password`) VALUES
(1, 'Shreya', 'shreya@vt.edu', 'Full-Time', '1234567890', 7, 'shreya', '4604'),
(2, 'Jenny', 'jenny@gmail.com', 'Full-Time', '5029385534', 13, 'jenny', '4604'),
(3, 'Nathan', 'nathan@vt.edu', 'Full-Time', '1234567890', 0, 'nathan', '4604'),
(4, 'Justin', 'justin@vt.edu', 'Full-Time', '1234567890', 0, 'justin', '4604');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `book_id` int(11) NOT NULL,
  `num_guest` int(2) NOT NULL,
  `comment` varchar(200) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `time` time NOT NULL,
  `date` date NOT NULL,
  `cust_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`book_id`, `num_guest`, `comment`, `name`, `phone`, `email`, `time`, `date`, `cust_id`) VALUES
(36, 1, 'Food Allergy: Peanuts', 'John ', '7853467352', 'johndoe@gmail.com', '13:00:00', '2023-12-04', 22),
(37, 3, 'Food Allergy: Peanuts', 'John', '7853467352', 'johndoe@gmail.com', '18:30:00', '2023-12-08', 22),
(38, 6, 'Dietary Restrictions: Vegan', 'Tina', '2759996564', 'tinaporter@gmail.com', '19:00:00', '2023-12-08', 29),
(39, 2, 'Lunch Date', 'Emily', '2463473365', 'emilybrown@gmail.com', '14:30:00', '2023-12-07', 25),
(40, 2, 'Anniversary Dinner', 'Olivia', '2865568874', 'oliviajones@gmail.com', '20:00:00', '2023-12-08', 26),
(41, 8, 'Birthday', 'James', '5715674456', 'jamesjay@gmail.com', '19:00:00', '2023-12-06', 28),
(42, 5, 'Dietary Restrictions: Vegetarian', 'Allie', '2760086564', 'alliele@gmail.com', '12:30:00', '2023-12-05', 30),
(43, 3, 'Requesting booth table', 'Karen', '4019493306', 'karensummer@gmail.com', '18:30:00', '2023-12-07', 38),
(45, 4, 'Food Allergy: Peanuts', 'John', '1234567890', 'johndoe@gmail.com', '19:30:00', '2023-12-09', 22),
(46, 10, 'Friend\'s Birthday', 'Tyler', '6584449392', 'tylerpine@gmail.com', '19:00:00', '2023-12-09', 37),
(47, 10, 'Family Reunion', 'Mary', '8014939405', 'marysmith@gmail.com', '19:30:00', '2023-12-09', 33),
(49, 1, 'test', 'test', '1234567890', 'test@gmail.com', '15:00:00', '2023-12-04', 22),
(50, 1, 'test', 'test', '1234567890', 'test@gmail.com', '19:00:00', '2023-12-04', 22),
(51, 1, 'test', 'test', '1234567890', 'test@gmail.com', '18:00:00', '2023-12-04', 22),
(52, 1, 'test', 'test', '1234567890', 'test@gmail.com', '20:30:00', '2023-12-04', 22),
(53, 1, 'test1', 'test1', '1234567890', 'test@gmail.com', '19:00:00', '2023-12-04', 22),
(54, 5, 'test', 'test3', '1234567890', 'test@gmail.com', '20:00:00', '2023-12-04', 22),
(55, 1, 'test', 'test4', '1234567890', 'test@gmail.com', '19:00:00', '2023-12-04', 22),
(56, 1, 'test', 'test5', '1234567890', 'test@gmail.com', '19:00:00', '2023-12-04', 22),
(57, 1, 'test', 'test6', '1234567890', 'test@gmail.com', '12:00:00', '2023-12-04', 22),
(58, 5, 'no comment', 'test7', '1234567890', 'test@gmail.com', '16:30:00', '2023-12-07', 22),
(63, 1, 'test', 'John', '1234567890', 'johndoe@gmail.com', '18:30:00', '2023-12-06', 22);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `customer` (`cust_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrator`
--
ALTER TABLE `administrator`
  MODIFY `admin_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `customer` FOREIGN KEY (`cust_id`) REFERENCES `customer` (`cust_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
