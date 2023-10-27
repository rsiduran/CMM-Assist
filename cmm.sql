-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2023 at 12:22 PM
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
-- Database: `cmm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(50) NOT NULL,
  `admin_username` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_username`, `admin_password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `appointment_id` int(11) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `middleName` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `contactNumber` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `id` varchar(255) NOT NULL,
  `services` varchar(255) NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `doctor_acc`
--

CREATE TABLE `doctor_acc` (
  `doctor_id` int(10) NOT NULL,
  `doctor_firstname` tinytext NOT NULL,
  `doctor_lastname` tinytext NOT NULL,
  `doctor_username` varchar(255) NOT NULL,
  `doctor_password` varchar(255) NOT NULL,
  `doctor_email` varchar(255) NOT NULL,
  `doctor_occupation` tinytext NOT NULL,
  `account_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctor_acc`
--

INSERT INTO `doctor_acc` (`doctor_id`, `doctor_firstname`, `doctor_lastname`, `doctor_username`, `doctor_password`, `doctor_email`, `doctor_occupation`, `account_created`) VALUES
(1, 'Rsidy', 'Duran', 'rsiduran', '$2y$10$m0L4EbwWOft2GwRhMpwK5e8D66qwVZwX.Ggz/8rOVaWyGAruR3Fiu', 'rsi@gmail.com', 'doctor', '2023-10-24 13:57:41'),
(2, 'Angeline', 'Duran', 'Angee', '$2y$10$Jm65ZxihAhpdtadVkAODtO1pH.5tJ13sU.ZmJtER5sndGZZ6NeRTm', 'angee@gmail.com', 'nurse', '2023-10-25 09:00:25'),
(3, 'Perseus', 'Madelo', 'PerseusLoveMadelo', '$2y$10$3i96zQo6SzIHMOARDbiM3.6Y22YIoen8Pe6EmiwJXqZZvHrlrN87G', 'perseus@gmail.com', 'medical_staff', '2023-10-25 09:01:12'),
(4, 'Ezilvin', 'Baguio', 'Ezilbaguio', '$2y$10$nhITEs2OcczS9rk8ELd88eVqqY/dGNicOLtjlkPP6WDteoti1dyAS', 'ezil@gmail.com', 'doctor', '2023-10-25 12:21:50');

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE `inquiry` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `datestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inquiry`
--

INSERT INTO `inquiry` (`id`, `name`, `email`, `message`, `datestamp`) VALUES
(1, 'Rsidy', 'rsiduran@gmail.com', 'ako ba ay pogi?', '2023-10-26 04:05:29');

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE `records` (
  `record_id` int(255) NOT NULL,
  `names` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `contactEmail` text NOT NULL,
  `edad` int(255) NOT NULL,
  `height` int(255) NOT NULL,
  `weightlbs` int(255) NOT NULL,
  `phoneNumber` varchar(255) NOT NULL,
  `addresss` varchar(255) NOT NULL,
  `allergies` text NOT NULL,
  `medication` text NOT NULL,
  `pastConditions` text NOT NULL,
  `contactPerson` text NOT NULL,
  `contactPersonNumber` varchar(255) NOT NULL,
  `alak` varchar(255) NOT NULL,
  `presentConditions` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `records`
--

INSERT INTO `records` (`record_id`, `names`, `gender`, `contactEmail`, `edad`, `height`, `weightlbs`, `phoneNumber`, `addresss`, `allergies`, `medication`, `pastConditions`, `contactPerson`, `contactPersonNumber`, `alak`, `presentConditions`) VALUES
(1, 'Juan Delacruz', 'female', 'example@gmail.com', 23, 172, 80, '09123456789', '#123 Street Valenzuela City', 'Strawberry', 'Biogesic, Paracetamol', 'Covid-19', 'Guardian', '09123456789', '3 days ago', 'SARS VIRUS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`appointment_id`);

--
-- Indexes for table `doctor_acc`
--
ALTER TABLE `doctor_acc`
  ADD PRIMARY KEY (`doctor_id`);

--
-- Indexes for table `inquiry`
--
ALTER TABLE `inquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`record_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `appointment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `doctor_acc`
--
ALTER TABLE `doctor_acc`
  MODIFY `doctor_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `inquiry`
--
ALTER TABLE `inquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `records`
--
ALTER TABLE `records`
  MODIFY `record_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
