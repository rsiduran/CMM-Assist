-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2023 at 08:05 AM
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
(1, 'admin', 'pogi');

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

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`appointment_id`, `firstName`, `lastName`, `middleName`, `email`, `dob`, `contactNumber`, `gender`, `id`, `services`, `datetime`) VALUES
(1, ' Juan', 'Dela Cruz', 'Diaz', 'Juan@email.com', ' 2023-10-18', ' 08123456789', 'Male', 'Screenshot 2023-08-03 181318.png', 'Nephrology', '2023-10-25 06:00:00'),
(2, ' Juan', 'Dela Cruz', 'Diaz', 'Juan@email.com', ' 2023-10-18', ' 08123456789', 'Male', 'Screenshot 2023-08-03 181318.png', 'Cardiology', '2023-10-25 06:00:00'),
(3, ' Juan', 'Dela Cruz', 'Diaz', 'Juan@email.com', ' 2023-10-18', ' 08123456789', 'Male', 'Screenshot 2023-08-03 181318.png', 'Nephrology', '2023-10-25 06:00:00'),
(4, ' Juan', 'Dela Cruz', 'Diaz', 'Juan@email.com', ' 2023-10-18', ' 08123456789', 'Male', 'Screenshot 2023-08-03 181318.png', 'Cardiology', '2023-10-25 06:00:00'),
(5, ' Juan', 'Dela Cruz', 'Diaz', 'Juan@email.com', ' 2023-10-18', ' 08123456789', 'Male', 'Screenshot 2023-08-03 181318.png', 'Nephrology', '2023-10-25 06:00:00'),
(6, ' Juan', 'Dela Cruz', 'Diaz', 'Juan@email.com', ' 2023-10-18', ' 08123456789', 'Male', 'Screenshot 2023-08-03 181318.png', 'Cardiology', '2023-10-25 06:00:00'),
(7, ' ', '', '', '', ' ', ' ', '', '', '', '0000-00-00 00:00:00'),
(8, ' ', '', '', '', ' ', ' ', '', '', '', '0000-00-00 00:00:00'),
(9, ' ', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(10, ' ', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(11, '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(12, '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(13, ' asd', 'asd', 'asd', 'asd@gmail.com', ' 2023-10-17', ' 09152345679', 'Male', '', 'Array', '2023-10-16 06:00:00'),
(14, ' asd', 'asd', 'asd', 'asd@gmail.com', ' 2023-10-17', ' 09152345679', 'Male', '', 'Nephrology', '2023-10-16 06:00:00'),
(15, ' asd', 'asd', 'asd', 'asd@gmail.com', ' 2023-10-17', ' 09152345679', 'Male', '', 'Nephrology', '2023-10-16 06:00:00'),
(16, ' asd', 'asd', 'asd', 'asd@gmail.com', ' 2023-10-17', ' 09152345679', 'Male', '', 'Nephrology', '2023-10-16 06:00:00'),
(17, ' asd', 'asd', 'asd', 'asd@gmail.com', ' 2023-10-17', ' 09152345679', 'Male', '', 'Nephrology', '2023-10-16 06:00:00'),
(18, ' asd', 'asd', 'asd', 'asd@gmail.com', ' 2023-10-17', ' 09152345679', 'Male', '', 'Nephrology', '2023-10-16 06:00:00'),
(19, ' asd', 'asd', 'asdqwe', 'asd@gmail.com', ' 2023-10-11', ' 09812345675', 'Male', 'Screenshot 2023-08-03 181318.png', 'Nephrology', '2023-10-25 20:00:00'),
(20, ' asd', 'asd', 'asdqwe', 'asd@gmail.com', ' 2023-10-11', ' 09812345675', 'Male', 'Screenshot 2023-08-03 181318.png', 'Cardiology', '2023-10-25 20:00:00'),
(21, ' asd', 'asd', 'asdqwe', 'asd@gmail.com', ' 2023-10-11', ' 09812345675', 'Male', 'Screenshot 2023-08-03 181318.png', 'Nephrology', '2023-10-25 20:00:00'),
(22, ' asd', 'asd', 'asdqwe', 'asd@gmail.com', ' 2023-10-11', ' 09812345675', 'Male', 'Screenshot 2023-08-03 181318.png', 'Cardiology', '2023-10-25 20:00:00'),
(23, ' juan', 'Delacruz', 'diaz', 'Juan@email.com', ' 2023-10-18', ' 09123456789', 'Female', '<br /><b>Warning</b>:  Undefined variable $id in <b>C:\\xampp\\htdocs\\CMM-Assist\\pages\\checkAppoint.php</b> on line <b>320</b><br />', 'Nephrology', '2023-10-23 06:00:00'),
(24, ' juan', 'Delacruz', 'diaz', 'Juan@email.com', ' 2023-10-18', ' 09123456789', 'Female', '<br /><b>Warning</b>:  Undefined variable $id in <b>C:\\xampp\\htdocs\\CMM-Assist\\pages\\checkAppoint.php</b> on line <b>320</b><br />', 'Cardiology', '2023-10-23 06:00:00'),
(25, ' asd', 'asd', 'asd', 'asd@gmail.com', ' 2023-10-12', ' 09123456789', 'Male', 'Screenshot 2023-08-03 181318.png', 'Nephrology', '2023-10-25 06:00:00'),
(26, ' asd', 'asd', 'asd', 'asd@gmail.com', ' 2023-10-12', ' 09123456789', 'Male', 'Screenshot 2023-08-03 181318.png', 'Cardiology', '2023-10-25 06:00:00'),
(27, ' asd', 'qwe', 'asd', 'asd@gmail.com', ' 2023-10-24', ' 09123456789', 'Male', 'IMG-65387f87cdf7a4.74477331.jpg', 'Nephrology', '2023-10-24 06:00:00'),
(28, ' asd', 'qwe', 'asd', 'asd@gmail.com', ' 2023-10-24', ' 09123456789', 'Male', 'IMG-65387f87cdf7a4.74477331.jpg', 'Cardiology', '2023-10-24 06:00:00'),
(29, ' asd', 'qwe', 'asd', 'asd@gmail.com', ' 2023-10-24', ' 09123456789', 'Male', 'IMG-65387f87cdf7a4.74477331.jpg', 'Blood Test', '2023-10-24 06:00:00'),
(30, ' asd', 'qwe', 'asd', 'asd@gmail.com', ' 2023-10-24', ' 09123456789', 'Male', 'IMG-65387f87cdf7a4.74477331.jpg', 'Antigen/Antibody Test', '2023-10-24 06:00:00'),
(31, ' asd', 'qwe', 'asd', 'asd@gmail.com', ' 2023-10-24', ' 09123456789', 'Male', 'IMG-65387f87cdf7a4.74477331.jpg', 'X-Ray', '2023-10-24 06:00:00'),
(32, ' asd', 'qwe', 'asd', 'asd@gmail.com', ' 2023-10-24', ' 09123456789', 'Male', 'IMG-65387f87cdf7a4.74477331.jpg', 'General Ultrasound', '2023-10-24 06:00:00'),
(33, ' asd', 'asd', 'asd', 'asd@gmail.com', ' 2023-10-26', ' 09123456789', 'Male', 'IMG-6538837701a630.37329087.jpg', 'Nephrology', '2023-10-24 06:00:00'),
(34, ' asd', 'asd', 'asd', 'asd@gmail.com', ' 2023-10-26', ' 09123456789', 'Male', 'IMG-6538837701a630.37329087.jpg', 'Cardiology', '2023-10-24 06:00:00'),
(35, ' asd', 'qwe', 'zxc', 'qweasd@gmail.com', ' 2023-10-17', ' 09123456789', 'Male', 'IMG-653883ea1dec98.91588262.jpg', 'Nephrology', '2023-10-23 06:00:00'),
(36, ' asd', 'qwe', 'zxc', 'qweasd@gmail.com', ' 2023-10-17', ' 09123456789', 'Male', 'IMG-653883ea1dec98.91588262.jpg', 'Cardiology', '2023-10-23 06:00:00'),
(37, ' asd', 'qwe', 'zxc', 'qweasd@gmail.com', ' 2023-10-17', ' 09123456789', 'Male', 'IMG-653883ea1dec98.91588262.jpg', 'Blood Test', '2023-10-23 06:00:00'),
(38, ' asd', 'qwe', 'zxc', 'qweasd@gmail.com', ' 2023-10-17', ' 09123456789', 'Male', 'IMG-653883ea1dec98.91588262.jpg', 'Antigen/Antibody Test', '2023-10-23 06:00:00'),
(39, ' asd', 'qwe', 'zxc', 'qweasd@gmail.com', ' 2023-10-17', ' 09123456789', 'Male', 'IMG-653883ea1dec98.91588262.jpg', 'X-Ray', '2023-10-23 06:00:00'),
(40, ' asd', 'qwe', 'zxc', 'qweasd@gmail.com', ' 2023-10-17', ' 09123456789', 'Male', 'IMG-653883ea1dec98.91588262.jpg', 'General Ultrasound', '2023-10-23 06:00:00'),
(41, ' nasave ba', 'oo', 'hinde', 'qweasd@gmail.com', ' 2023-10-19', ' 09153465465', 'Male', 'IMG-65388521723c76.99894548.jpg', 'Nephrology', '2023-10-24 06:00:00'),
(42, ' nasave ba', 'oo', 'hinde', 'qweasd@gmail.com', ' 2023-10-19', ' 09153465465', 'Male', 'IMG-65388521723c76.99894548.jpg', 'Cardiology', '2023-10-24 06:00:00'),
(43, ' nasave ba', 'oo', 'hinde', 'qweasd@gmail.com', ' 2023-10-19', ' 09153465465', 'Male', 'IMG-65388521723c76.99894548.jpg', 'Pulmonology', '2023-10-24 06:00:00'),
(44, ' nasave ba', 'oo', 'hinde', 'qweasd@gmail.com', ' 2023-10-19', ' 09153465465', 'Male', 'IMG-65388521723c76.99894548.jpg', 'Urology', '2023-10-24 06:00:00'),
(45, ' nasave ba', 'oo', 'hinde', 'qweasd@gmail.com', ' 2023-10-19', ' 09153465465', 'Male', 'IMG-65388521723c76.99894548.jpg', 'Orthopedics', '2023-10-24 06:00:00'),
(46, ' nasave ba', 'oo', 'hinde', 'qweasd@gmail.com', ' 2023-10-19', ' 09153465465', 'Male', 'IMG-65388521723c76.99894548.jpg', 'Endocrinology', '2023-10-24 06:00:00'),
(47, ' nasave ba', 'oo', 'hinde', 'qweasd@gmail.com', ' 2023-10-19', ' 09153465465', 'Male', 'IMG-65388521723c76.99894548.jpg', 'Neurology', '2023-10-24 06:00:00'),
(48, ' nasave ba', 'oo', 'hinde', 'qweasd@gmail.com', ' 2023-10-19', ' 09153465465', 'Male', 'IMG-65388521723c76.99894548.jpg', 'Pediatrics', '2023-10-24 06:00:00'),
(49, ' asd', 'qwe', 'asd', 'asd@gmail.com', ' 2023-10-17', ' 09123456789', 'Male', 'IMG-65388840d2c963.52027035.jpg', 'Nephrology', '2023-10-17 06:00:00'),
(50, ' asd', 'qwe', 'asd', 'asd@gmail.com', ' 2023-10-17', ' 09123456789', 'Male', 'IMG-65388840d2c963.52027035.jpg', 'Cardiology', '2023-10-17 06:00:00'),
(51, ' asd', 'qwe', 'asd', 'asd@gmail.com', ' 2023-10-17', ' 09123456789', 'Male', 'IMG-65388840d2c963.52027035.jpg', 'Pulmonology', '2023-10-17 06:00:00');

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
(1, 'Rsidy', 'Duran', 'rsiduran', '$2y$10$m0L4EbwWOft2GwRhMpwK5e8D66qwVZwX.Ggz/8rOVaWyGAruR3Fiu', 'rsi@gmail.com', 'doctor', '2023-10-24 13:57:41');

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
  MODIFY `appointment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `doctor_acc`
--
ALTER TABLE `doctor_acc`
  MODIFY `doctor_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `inquiry`
--
ALTER TABLE `inquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
