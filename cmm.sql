-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2023 at 07:49 AM
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
(114, ' Santa', 'Claus', 'Merry', 'Santa@gmail.com', ' 2023-10-25', ' 09123456789', 'Female', 'IMG-653e2966b29195.71729915.png', 'General Ultrasound', '2023-11-01', '09:00 AM', '', ''),
(115, ' Michael', 'Sanchez', 'Wilson', 'mich.sanchez@gmail.com', ' 1992-07-20', ' 09745797544', 'Male', 'IMG-65409dc1865c62.66383648.png', 'Urology, Blood Test, Urine Test', '2023-11-02', '08:00 AM', '', ''),
(116, ' Daniel', 'Wright', 'Allen', 'allen.daniel@gmail.com', ' 2000-11-25', ' 09876237802', 'Male', 'IMG-65409e351866a5.95774008.png', 'Orthopedics, Stool Test, X-Ray, CT Scan', '2023-11-02', '12:00 AM', '', ''),
(117, ' Andrew', 'Wilson', 'Ramirez', 'wilsonandre03@gmail.com', ' 2003-05-10', ' 09812765328', 'Male', 'IMG-65409eaa35f3b7.72753395.png', 'Nephrology, Antigen/Antibody Test, OB Ultrasound', '2023-11-03', '07:00 AM', '', ''),
(118, ' Barbara', 'Young', 'Torres', 'barbara.young03@gmail.com', ' 1989-12-14', ' 09361743764', 'Female', 'IMG-65409f1f274959.24115283.png', 'Nephrology, Pulmonology, Blood Test, General Ultrasound', '2023-11-03', '12:00 AM', '', ''),
(119, ' Karen', 'Scott', 'King', 'K.scott@gmail.com', ' 1983-03-02', ' 09451276390', 'Female', 'IMG-65409f92c110b9.00464826.png', 'Pulmonology, Urine Test, ECG, MRI Option', '2023-11-04', '08:00 AM', '', ''),
(120, ' Anthony', 'Baker', 'Hall', 'hall.Anthony08@gmail.com', ' 2002-09-08', ' 09344660909', 'Male', 'IMG-65409ffb155ce9.47167733.png', 'Urology, Semen Test, Urine Test', '2023-11-04', '01:00 PM', '', ''),
(121, ' Sandra', 'Nelson', 'Baker', 'Sandranelson0067@yahoo.com', ' 1989-06-17', ' 09435550977', 'Female', 'IMG-6540a04dc6c857.45704043.png', 'Urology, Neurology, Antigen/Antibody Test, X-Ray', '2023-11-05', '08:00 AM', '', ''),
(122, ' Kenneth', 'Adams', 'Clark', 'adams.k@yahoo.com', ' 2001-10-29', ' 09433678211', 'Male', 'IMG-6540a0abc31820.92033885.png', 'Pediatrics, Antigen/Antibody Test, Urine Test, X-Ray', '2023-11-05', '01:00 PM', '', ''),
(123, ' Michelle', 'Green', 'Flores', 'mgreenflores@yahoo.com', ' 1992-08-17', ' 09996544700', 'Female', 'IMG-6540a114c458b7.27432311.png', 'Pulmonology, X-Ray', '2023-11-06', '09:00 AM', '', ''),
(124, ' Timothy', 'Evans', 'Campbell', 'timothyevans@yahoo.com', ' 2000-02-14', ' 09455355789', 'Male', 'IMG-6540a187cf69f1.89638983.png', 'Urology, Semen Test, Urine Test', '2023-11-06', '12:00 AM', '', ''),
(125, ' Tina', 'Turner', 'Williams', 'turner.tina@gmail.com', ' 1986-12-12', ' 09888675099', 'Female', 'IMG-6540a1e4b71083.45814447.png', 'Pulmonology, Antigen/Antibody Test, X-Ray, General Ultrasound', '2023-11-07', '07:00 AM', '', ''),
(126, ' Dorothy', 'Cruz', 'Evans', 'Cruz.evans@gmail.com', ' 1996-07-15', ' 09533356570', 'Female', 'IMG-6540a2302dd578.80442301.png', 'Blood Test, Antigen/Antibody Test', '2023-11-07', '01:00 PM', '', '');

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
(5, 'Perseus', 'Daracan', 'percyy', '$2y$10$v35xsA.ezjy9id8FZzX5N.EyS0M4Bme8m1X57iUYfxZdzZTWHId7K', 'percy@gmail.com', 'medical_staff', '2023-10-29 09:01:16'),
(6, 'Stephen', 'Smith', 'smith', '$2y$10$.snrNkKXoXVoZiuH.vHrMObYyGGMQqaB/0/7Il9.qcMI.a7FOAy0u', 'stephensmith01@gmail.com', 'doctor', '2023-10-31 05:58:18'),
(7, 'Jeffrey', 'Davis', 'jeffdavis', '$2y$10$21UBJQAAap4N1n1QB7frZeFtprfZzpdRYw31h3aaaRAxha5ivLuQe', 'jeffdavis@yahoo.com', 'doctor', '2023-10-31 05:59:12'),
(8, 'Charles', 'Harris', 'harrischarles', '$2y$10$sYqQfjMKJoFRBSGpdFpCKOY.kcM713YoHCaKeGFp.NDZuS4Rg08AG', 'charles03@gmail.com', 'doctor', '2023-10-31 06:00:06'),
(9, 'Daniel', 'Wilson', 'dannywil', '$2y$10$nik4PNHnpirZ1pHwyw.ReOZDhEXWUaFFiFynqPaK/Vo5SqOG3BzDe', 'dannywilson@gmail.com', 'doctor', '2023-10-31 06:00:34'),
(10, 'Steven', 'Lee', 'stevelee', '$2y$10$9nFY9DzgWb/uTCk9qQgZi.AZ6ujTuQTEOEhF0UMzH2FwFYEXdKoOW', 'lee.steve04@gmail.com', 'doctor', '2023-10-31 06:02:39'),
(11, 'Paul', 'Walker', 'walkerson', '$2y$10$xTYukJhMD1X/Ylmyrhhpoug5zwwxgwXxpEXjDgI15zrHbV7ANfl6S', 'walkerpaul05@yahoo.com', 'doctor', '2023-10-31 06:02:33'),
(12, 'Elizabeth', 'Campbell', 'belleli07', '$2y$10$4cONf86DDvBFnOlVDYGk.u5pM9dgbvilkd7aVVfefEajqQNtlM8S2', 'campbelleli07@yahoo.com', 'doctor', '2023-10-31 06:03:46'),
(13, 'Mary Ann', 'Carter', 'cartermary', '$2y$10$e4ecQj.6EiekMZTdiLKjwOiIwrLG9RAG2tDpO7xiA2csvlpMXzKMi', 'annmarycarter08@gmail.com', 'doctor', '2023-10-31 06:04:49'),
(14, 'Susan', 'Miller', 'millersus', '$2y$10$Z4fKdNmOvpufGkv.wBPlpO1dEs284iVhZaqK.DA/YV7jEdOnodM7G', 'millersan10@yahoo.com', 'doctor', '2023-10-31 06:05:26'),
(15, 'Joseph', 'Cooper', 'josephcooper', '$2y$10$gHBeu3aFxbwqvK6jlxnPVO6oWpzBkGOes8YHBG5g/kXnC0rdHevHG', 'cooper.josh11@gmail.com', 'doctor', '2023-10-31 06:06:35'),
(16, 'Florence', 'Nightingale', 'galeflor', '$2y$10$En/hRVfgOanqvJiwusztiOJNi/1izbzlnjUDqbtSp8ieQxVLFr45S', 'night.florence1@gmail.com', 'nurse', '2023-10-31 06:07:59'),
(17, 'Linda', 'Richards', 'richardslin', '$2y$10$oLa9MiGtOhaMI01w42gO9.St/utuDW/bdYAtMSNtX2NM5074tfQZ2', 'Lindarichard02@yahoo.com', 'nurse', '2023-10-31 06:08:35'),
(18, 'Clara', 'Barton', 'bartonclaire', '$2y$10$fEOgMdZ.N9qzmuPlqTQ6Hut3CpmyVDLLnyAcT44pGS8.LcJxrCpMK', 'claire.bart@gmail.com', 'nurse', '2023-10-31 06:09:24'),
(19, 'Mary', 'Beckinbridge', 'bridgettin', '$2y$10$ZjhCtrb/CbAOkEiC3PyBQufdFzpTvJ43V4bZJHZQtV.7SxOvgv2NC', 'marybeck04@gmail.com', 'nurse', '2023-10-31 06:10:25'),
(20, 'Virginia Avenel', 'Henderson', 'hendersonvirgie', '$2y$10$K9QwSciYZ1Dgncrs/kaBu.78ZtuMJJe9wEhRliiIt1ETaV32c2tge', 'Virgie.avy06@gmail.com', 'nurse', '2023-10-31 06:11:34'),
(21, 'Hildegard', 'Piplau', 'plauhilde', '$2y$10$k7ulBGQasfLdqnJbYIGu4ucRIRpfJoI.F4OtrJ5fP0BS/CCa.FQBi', 'hiller.plau072@yahoo.com', 'nurse', '2023-10-31 06:12:32'),
(22, 'Jean', 'Watson', 'jeanwatson', '$2y$10$seVerr2FEUmClQ8cSLaJZuT9EJAic1drlhBOlYuQBF9ep4zXVDDqi', 'jeanwatson08@gmail.com', 'nurse', '2023-10-31 06:13:03'),
(23, 'Emma', 'Washington', 'washingtonemm', '$2y$10$y6BlFfezvy9YEEnhDNdpqeO26NWl.lfQP696692nUisiAHUjr11r2', 'Emma.washton@gmail.com', 'nurse', '2023-10-31 06:13:40'),
(24, 'Adam', 'Lopez', 'adamsonlop', '$2y$10$cVvSjJGxMaeBlFuVpSE.i.Czi8gxYgSIBgpx2ZaCRKUn1aw9HlKWW', 'adamsonL01@yahoo.com', 'medical_staff', '2023-10-31 06:14:35'),
(25, 'Robert', 'Anderson', 'andyrobert', '$2y$10$r8dw1M8yqW7UbwUCAzseLOAyCY8Bj1C8gGMiGEKPjOa6aZzXdHMOC', 'Robertson02@gmail.com', 'medical_staff', '2023-10-31 06:15:15'),
(26, 'Olivia', 'Taylor', 'taylorolive', '$2y$10$GfVB0KfG/HrpkLiRwIcjNOyrs5hcUicGx0SzXyd8iDIHvUKGjMdB.', 'taylor.liv04@gmail.com', 'medical_staff', '2023-10-31 06:16:06'),
(27, 'Taylor', 'Rodriguez', 'rodritaylor', '$2y$10$ZN.dJAmv8KZguzRQdJ4XCue7NPEd5/UV26EY79603aJLIj7Lbhup.', 'r.taylor04@gmail.com', 'medical_staff', '2023-10-31 06:16:58'),
(28, 'Sarah', 'Moore', 'Smoore', '$2y$10$A/uv0j0BW4laZG1BdQdrgOjGrabc/fRU8JUAvc6GKC7HqfMrxGyTm', 'M.sarah05@gmail.com', 'medical_staff', '2023-10-31 06:17:54'),
(29, 'Alexander', 'Thompson', 'thomsonalex', '$2y$10$KiIocrfN3DngQkw5e5T9Y.i04GE0WfsG7wXIZEf6sOikLAne96jpu', 'Alex.son07@yahoo.com', 'medical_staff', '2023-10-31 06:19:00'),
(30, 'Louise', 'Lane', 'lanelouie', '$2y$10$wo2s6y9qxmAxFWFsU/zlHOhSjkgGO7mnkcbRsPY.lX5D6YvORxINC', 'lanelouise@yahoo.com', 'medical_staff', '2023-10-31 06:20:00'),
(31, 'Peter', 'Clarkson', 'clarkpete', '$2y$10$yqBcMY1/emFMnMPGt9k1fe63haBhd5sD8CnwicGt/ydVqYOK4W7yG', 'peterSon010@gmail.com', 'medical_staff', '2023-10-31 06:20:50');

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
(1, 'Rsiduran', 'rsiduran@gmail.com', 'How this system work?', '2023-10-29 06:17:02'),
(2, 'Lucy Fullbuster', 'lucyf012@gmail.com', 'Can I have an appointment thru walk-ins?', '2023-10-31 05:52:45'),
(3, 'Julia Roberts', 'robertsjulia05@gmail.com', 'Do you take appointments during weekends?\r\n', '2023-10-31 05:54:39'),
(4, 'Dorothy Evans', 'evandorothy@gmail.com', 'How can I make an appointment?', '2023-10-31 06:46:41'),
(5, 'Maria Navia Sylvia', 'sylviamaria@yahoo.com', 'Can I have an assistance in making appointments thru walk-ins?', '2023-10-31 06:48:10'),
(6, 'Christopher Rosetta', 'rosett.chris@gmail.com', 'Is there a certain list of test that I can choose? ', '2023-10-31 06:49:36');

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
  MODIFY `appointment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT for table `doctor_acc`
--
ALTER TABLE `doctor_acc`
  MODIFY `doctor_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `inquiry`
--
ALTER TABLE `inquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `records`
--
ALTER TABLE `records`
  MODIFY `record_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
