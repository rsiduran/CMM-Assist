-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2023 at 11:02 AM
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
  `appointmentDate` varchar(100) NOT NULL,
  `appointmentTime` varchar(100) NOT NULL,
  `accountpw` varchar(255) NOT NULL,
  `appointmentStatus` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`appointment_id`, `firstName`, `lastName`, `middleName`, `email`, `dob`, `contactNumber`, `gender`, `id`, `services`, `appointmentDate`, `appointmentTime`, `accountpw`, `appointmentStatus`) VALUES
(108, ' Juan', 'Delacruz', 'Midie', 'juan@gmail.com', ' 2022-08-16', ' 09123456789', 'Male', 'IMG-653df697d16685.37509465.jpg', 'X-Ray', '2023-10-31', '07:00 AM', '$2y$10$ppFSNBK7MlhfcoZES2aIlOiwDFOHyfG.8pl/26q0JsXp87zny1IIK', 'ON'),
(109, ' qwe', 'qweqwe', 'qweqwe', 'qweasd@gmail.com', ' 2023-10-04', ' 09123465897', 'Male', 'IMG-653e293d8af0b1.61782368.jpg', 'Nephrology', '2023-11-01', '08:00 AM', '$2y$10$K6deyHIoOFkWvbmEGigw3.c0fdEeamsh.2CY4bwhvyYHz8tce5r7e', 'ON'),
(110, ' Santa', 'Claus', 'Merry', 'Santa@gmail.com', ' 2023-10-25', ' 09123456789', 'Female', 'IMG-653e2966b29195.71729915.png', 'Nephrology', '2023-11-01', '09:00 AM', '$2y$10$OC.wde0aizq.c0flMuBSuez.wdu7s6wd2gmwy6ths70hzjWhXmzO2', 'ON'),
(111, ' Santa', 'Claus', 'Merry', 'Santa@gmail.com', ' 2023-10-25', ' 09123456789', 'Female', 'IMG-653e2966b29195.71729915.png', 'Cardiology', '2023-11-01', '09:00 AM', '$2y$10$V6R9tcRj8uWT8rLn1a1IY..EpSrXViswcRCbSJQSICGD5kEzZxDWW', 'ON'),
(112, ' Santa', 'Claus', 'Merry', 'Santa@gmail.com', ' 2023-10-25', ' 09123456789', 'Female', 'IMG-653e2966b29195.71729915.png', 'Mircrobial Test', '2023-11-01', '09:00 AM', '', ''),
(113, ' Santa', 'Claus', 'Merry', 'Santa@gmail.com', ' 2023-10-25', ' 09123456789', 'Female', 'IMG-653e2966b29195.71729915.png', 'Semen Test', '2023-11-01', '09:00 AM', '', ''),
(114, ' Santa', 'Claus', 'Merry', 'Santa@gmail.com', ' 2023-10-25', ' 09123456789', 'Female', 'IMG-653e2966b29195.71729915.png', 'General Ultrasound', '2023-11-01', '09:00 AM', '', '');

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
(1, 'rsidy', 'duran', 'rsiduran', '$2y$10$BgJe9g4u6SD.E2n0Nj5UT.0dT5pQTBBEWeNgZvGXJCuhl/sZeivMq', 'rsiduran@gmail.com', 'doctor', '2023-10-29 06:15:37'),
(2, 'ezilvin', 'labastida', 'ezil', '$2y$10$WGBVNHhF0tfYw9zjkEWs6uycyJRFpswHn82InIxpOS9QqrrLid8ou', 'ezil@gmail.com', 'nurse', '2023-10-29 08:58:16'),
(3, 'Angeline', 'Mercado', 'angee', '$2y$10$yfLE4gyydw5WjzXWXIPL3OU4DFAI1fGdSYMHEf/0JOrmtH97wCoZu', 'ange@gmail.com', 'medical_staff', '2023-10-29 09:00:35'),
(4, 'zared', 'mallillin', 'zared', '$2y$10$iLQa2RyVimgkhFA/LklQzux2KkVqku.IdS.jTTn4WpKOilhE1UhKG', 'zared@gmail.com', 'nurse', '2023-10-29 09:01:00'),
(5, 'Perseus', 'Daracan', 'percyy', '$2y$10$v35xsA.ezjy9id8FZzX5N.EyS0M4Bme8m1X57iUYfxZdzZTWHId7K', 'percy@gmail.com', 'medical_staff', '2023-10-29 09:01:16');

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
(1, 'Rsiduran', 'rsiduran@gmail.com', 'How this system work?', '2023-10-29 06:17:02');

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
(1, 'Juan Delacruz', 'Male', 'example@gmail.com', 23, 172, 80, '09123456789', '#123 Street Valenzuela City', 'Strawberry', 'Biogesic, Paracetamol', 'Covid-19', 'Guardian', '09123456789', '1 day ago', 'SARS VIRUS');

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
  MODIFY `appointment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT for table `doctor_acc`
--
ALTER TABLE `doctor_acc`
  MODIFY `doctor_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
