-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2020 at 06:55 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hams_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `appliance`
--

CREATE TABLE `appliance` (
  `appliance_id` varchar(20) NOT NULL,
  `data` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appliance`
--

INSERT INTO `appliance` (`appliance_id`, `data`) VALUES
('ap1', 'AC, Computer Table'),
('ap2', 'AC, IRON'),
('ap3', 'AC,IRON,LED'),
('ap4', 'AC, REF'),
('ap5', 'Computer Table'),
('ap6', 'Computer Table, IRON'),
('ap7', 'Computer Table, Small Washing Machine'),
('ap8', 'AC,Small Washing Machine, LED');

-- --------------------------------------------------------

--
-- Table structure for table `fee`
--

CREATE TABLE `fee` (
  `student_id` varchar(20) NOT NULL,
  `monthly_rent` int(10) NOT NULL,
  `concession` int(10) NOT NULL DEFAULT 0,
  `payment_method` varchar(30) NOT NULL DEFAULT 'Credit & debit card'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fee`
--

INSERT INTO `fee` (`student_id`, `monthly_rent`, `concession`, `payment_method`) VALUES
('ahsanDanish', 30000, 0, 'eWallets'),
('bhatti', 32000, 0, 'Credit & debit card'),
('konain_abbas', 37000, 5000, 'Credit & debit card'),
('SajalAly', 27000, 0, 'Bank transfers'),
('sam_5652', 37000, 12000, 'Bank transfers');

-- --------------------------------------------------------

--
-- Table structure for table `hostel`
--

CREATE TABLE `hostel` (
  `hostel_id` varchar(20) NOT NULL,
  `h_name` varchar(20) NOT NULL,
  `h_address` varchar(50) NOT NULL,
  `contact_no` varchar(20) NOT NULL,
  `rooms` int(10) NOT NULL,
  `students` int(10) NOT NULL,
  `manager_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hostel`
--

INSERT INTO `hostel` (`hostel_id`, `h_name`, `h_address`, `contact_no`, `rooms`, `students`, `manager_id`) VALUES
('HAMS', 'White SANDS HOSTEL', 'Main Street TOWN-SHIP LAHORE S34 4HE', '+92 3305 1122334', 100, 50, 'ADMIN');

-- --------------------------------------------------------

--
-- Table structure for table `laundary`
--

CREATE TABLE `laundary` (
  `student_id` varchar(20) NOT NULL,
  `monthly_rate` int(10) NOT NULL DEFAULT 5000,
  `days` varchar(20) NOT NULL DEFAULT 'Monday & Thursday'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laundary`
--

INSERT INTO `laundary` (`student_id`, `monthly_rate`, `days`) VALUES
('ahsanDanish', 5000, 'Monday & Thursday'),
('bhatti', 0, 'Not awail this offer'),
('konain_abbas', 5000, 'Monday & Thursday'),
('SajalAly', 5000, 'wednesday & Saturday'),
('sam_5652', 5000, 'wednesday & Saturday');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `manager_id` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `phone` varchar(20) DEFAULT 'Not provided',
  `email` varchar(30) NOT NULL,
  `address` varchar(50) DEFAULT 'Not provided',
  `cnic` varchar(30) DEFAULT 'Not provided',
  `hostel_id` varchar(20) NOT NULL,
  `pass` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`manager_id`, `name`, `phone`, `email`, `address`, `cnic`, `hostel_id`, `pass`) VALUES
('ADMIN', 'Sibtain', '03416010353', 'sam@gmail.com', 'Johr Town, Lahore', '3320211351427', 'HAMS', 'ADMIN');

-- --------------------------------------------------------

--
-- Table structure for table `mess`
--

CREATE TABLE `mess` (
  `student_id` varchar(20) NOT NULL,
  `monthly_rate` int(10) NOT NULL DEFAULT 10000,
  `mess_type` varchar(30) NOT NULL DEFAULT 'Pakistani Traditional',
  `mess_timing` varchar(20) NOT NULL DEFAULT 'Breakfast & Dinner'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mess`
--

INSERT INTO `mess` (`student_id`, `monthly_rate`, `mess_type`, `mess_timing`) VALUES
('ahsanDanish', 10000, 'Russian', 'Breakfast & Lunch'),
('bhatti', 10000, 'Russian', 'Breakfast & Lunch'),
('konain_abbas', 10000, 'Chines', 'Breakfast & Lunch'),
('SajalAly', 10000, 'Russian', 'Breakfast & Dinner'),
('sam_5652', 10000, 'Pakistani Traditional', 'Breakfast & Dinner');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `room_id` varchar(20) NOT NULL,
  `room_type` varchar(20) DEFAULT NULL,
  `charges` int(10) NOT NULL,
  `roommates` int(10) NOT NULL,
  `hostel_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_id`, `room_type`, `charges`, `roommates`, `hostel_id`) VALUES
('r1', 'CLASSIC Single ROOM', 10000, 3, 'HAMS'),
('r10', 'STUDIO SUITE ROOM', 22000, 2, 'HAMS'),
('r11', 'MASTER SUITE', 25000, 2, 'HAMS'),
('r12', 'MASTER SUITE 2', 10000, 4, 'HAMS'),
('r13', 'MASTER SUITE 3', 10000, 2, 'HAMS'),
('r14', 'MASTER SUITE 4', 20000, 2, 'HAMS'),
('r2', 'SPECIAL SINGLE ROOM', 20000, 1, 'HAMS'),
('r3', 'CLASSIC DOUBLE ROOM', 10000, 2, 'HAMS'),
('r4', 'CLASSIC TWIN ROOM', 7000, 2, 'HAMS'),
('r5', 'SUPERIOR KING ROOM', 8000, 2, 'HAMS'),
('r6', 'SUPERIOR TWIN ROOM', 12000, 5, 'HAMS'),
('r7', 'SPECIAL TWIN ROOM', 9000, 2, 'HAMS'),
('r8', 'DELUXE KING ROOM', 6000, 5, 'HAMS'),
('r9', 'DELUXE TWIN ROOM', 15000, 2, 'HAMS');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `sno` int(11) NOT NULL,
  `student_id` varchar(20) NOT NULL,
  `l_name` varchar(20) NOT NULL,
  `r_name` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `cnic` varchar(20) NOT NULL,
  `blood` varchar(5) NOT NULL,
  `institute` varchar(30) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `street` varchar(20) NOT NULL,
  `code` varchar(20) DEFAULT NULL,
  `state` varchar(20) NOT NULL,
  `district` varchar(20) NOT NULL,
  `rollNo` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pass` varchar(10) NOT NULL,
  `room_id` varchar(20) NOT NULL,
  `appliance_id` varchar(20) DEFAULT NULL,
  `hostel_id` varchar(20) NOT NULL,
  `admissionDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sno`, `student_id`, `l_name`, `r_name`, `phone`, `cnic`, `blood`, `institute`, `dob`, `gender`, `street`, `code`, `state`, `district`, `rollNo`, `email`, `pass`, `room_id`, `appliance_id`, `hostel_id`, `admissionDate`) VALUES
(9, 'ahsanDanish', 'Ahsan', 'Danish', '03006501644', '3320211345437', 'AB+', 'fjisdvk', '2020-12-17', 'male', 'sdf', '232', ' lahore', 'lahore', 'klfdmv', 'ahsaanDanish@gmail.com', '123', 'r9', 'ap6', 'HAMS', '2020-12-23'),
(11, 'bhatti', 'Raey Tamoor', 'Bhatti', '03212223245', '3320267548903', 'B-', 'PU', '2020-12-22', 'male', 'Lallian', '463', 'Ratta Shekhan', 'Jhang', 'BSF16M604', 'Bhatti@pu.edu.pk', 'bhatti', 'r10', 'ap4', 'HAMS', '2020-12-23'),
(1, 'konain_abbas', 'Konain', 'malik', '03416010353', '3223342342234234', 'AB+', 'PUCIT', '2020-12-23', 'male', 'jammia masjid', '123', 'Jhang', 'jhang', 'BCSF18M001', 'konain@gamil.com', '123', 'r10', 'ap1', 'HAMS', '2020-12-20'),
(10, 'SajalAly', 'Sajjal ', 'Aly', '03007501633', '3320343444222', 'AB+', 'LUMS', '2020-12-16', 'female', 'Bahiria Town', '123', 'Lahore', 'Lahore', 'LMM343', 'sajal@lums.edu.pk', 'sajjal', 'r6', 'ap5', 'HAMS', '2020-12-23'),
(8, 'sam_5652', 'SIBTAIN', 'ASAD', '03001234567', '3320262123456', 'O+', 'PUCIT', '2001-10-31', 'male', 'Gohar shah', '123', 'Jhang', 'Jhang City', 'BITF19M008', 'bitf19m008@pucit.edu.pk', '12345', 'r10', 'ap5', 'HAMS', '2020-12-20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appliance`
--
ALTER TABLE `appliance`
  ADD PRIMARY KEY (`appliance_id`);

--
-- Indexes for table `fee`
--
ALTER TABLE `fee`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `hostel`
--
ALTER TABLE `hostel`
  ADD PRIMARY KEY (`hostel_id`);

--
-- Indexes for table `laundary`
--
ALTER TABLE `laundary`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`manager_id`);

--
-- Indexes for table `mess`
--
ALTER TABLE `mess`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`room_id`),
  ADD KEY `room_hostel_id_fk` (`hostel_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`),
  ADD KEY `sno` (`sno`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `room`
--
ALTER TABLE `room`
  ADD CONSTRAINT `room_hostel_id_fk` FOREIGN KEY (`hostel_id`) REFERENCES `hostel` (`hostel_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
