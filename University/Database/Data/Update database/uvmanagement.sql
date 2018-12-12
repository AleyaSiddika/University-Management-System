-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2017 at 02:38 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uvmanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `pass`, `created_at`, `updated_at`, `deleted_at`) VALUES
(5, 'OSHIT SD', 'o@g.com', 'e10adc3949ba59abbe56e057f20f883e', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `assign_teachers`
--

CREATE TABLE `assign_teachers` (
  `id` int(11) NOT NULL,
  `department` varchar(255) NOT NULL,
  `teacher` varchar(300) NOT NULL,
  `credit_taken` int(30) NOT NULL,
  `remain_credit` int(30) NOT NULL,
  `course_code` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `credit` int(30) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assign_teachers`
--

INSERT INTO `assign_teachers` (`id`, `department`, `teacher`, `credit_taken`, `remain_credit`, `course_code`, `name`, `credit`, `created_at`, `updated_at`, `deleted_at`) VALUES
(9, 'CSE', 'Karim Ahmed', 20, 17, 'CR-101', 'Web Design', 3, '2017-04-30 11:04:06', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'ARCH', 'Ismaile Hossain', 200, 199, 'CR-102', 'Autocad', 1, '2017-04-30 11:04:18', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `classrooms_allocate`
--

CREATE TABLE `classrooms_allocate` (
  `id` int(11) NOT NULL,
  `department` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `room` varchar(255) NOT NULL,
  `days` varchar(255) NOT NULL,
  `start_time` varchar(255) NOT NULL,
  `end_time` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `credit` int(20) NOT NULL,
  `description` varchar(350) NOT NULL,
  `department` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `code`, `name`, `credit`, `description`, `department`, `semester`, `created_at`, `updated_at`, `deleted_at`) VALUES
(8, 'CR-101', 'Web Design', 3, 'I love Web Design', 'CSE', '3rd', '2017-04-30 11:04:38', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'CR-102', 'Autocad', 1, 'No Idea', 'ARCH', '1st', '2017-04-30 11:04:19', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'CR-103', 'Office Management', 1, 'I know Something                                                                        ', 'BBA', '1st', '2017-04-30 11:04:32', '2017-04-30 11:04:08', '0000-00-00 00:00:00'),
(11, '55555', 'Another ', 3, 'aaaaa', 'CSE', '1st', '2017-04-30 12:04:04', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `days`
--

CREATE TABLE `days` (
  `id` int(11) NOT NULL,
  `day` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `days`
--

INSERT INTO `days` (`id`, `day`, `created_at`, `updated_at`, `deleted_at`) VALUES
(10, 'Saturday', '2017-04-30 10:04:22', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'Sunday', '2017-04-30 10:04:27', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'Monday', '2017-04-30 10:04:32', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'Tuesday', '2017-04-30 10:04:39', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'Wednesday', '2017-04-30 10:04:51', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'Thursday', '2017-04-30 10:04:58', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'Friday', '2017-04-30 10:04:02', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `is_delete` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `code`, `name`, `is_delete`, `created_at`, `updated_at`, `deleted_at`) VALUES
(18, '101', 'CSE', 0, '2017-04-30 10:04:31', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, '102', 'EEE', 0, '2017-04-30 10:04:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, '103', 'BBA', 0, '2017-04-30 10:04:11', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, '104', 'ARCH', 0, '2017-04-30 10:04:09', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, '105', 'CIVIL', 0, '2017-04-30 10:04:20', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `designations`
--

CREATE TABLE `designations` (
  `id` int(11) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `designations`
--

INSERT INTO `designations` (`id`, `designation`, `created_at`, `updated_at`, `deleted_at`) VALUES
(6, 'Principle', '2017-04-26 12:04:09', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'Vice Principles', '2017-04-26 09:04:39', '2017-04-30 10:04:34', '0000-00-00 00:00:00'),
(9, 'Asst. Teacher', '2017-04-30 10:04:47', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'Lecturer', '2017-04-30 10:04:57', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `enroll_courses`
--

CREATE TABLE `enroll_courses` (
  `id` int(11) NOT NULL,
  `std_reg` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `department` varchar(300) NOT NULL,
  `select_course` varchar(300) NOT NULL,
  `date` date NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

CREATE TABLE `grades` (
  `id` int(11) NOT NULL,
  `grade` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grades`
--

INSERT INTO `grades` (`id`, `grade`, `created_at`, `updated_at`, `deleted_at`) VALUES
(9, 'A+', '2017-04-27 04:04:28', '2017-04-27 04:04:37', '0000-00-00 00:00:00'),
(10, 'A', '2017-04-30 10:04:48', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'A-', '2017-04-30 10:04:55', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'B+', '2017-04-30 10:04:05', '2017-04-30 10:04:30', '0000-00-00 00:00:00'),
(13, 'B', '2017-04-30 10:04:08', '2017-04-30 10:04:36', '0000-00-00 00:00:00'),
(14, 'B-', '2017-04-30 10:04:42', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'C+', '2017-04-30 10:04:45', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'C', '2017-04-30 10:04:47', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 'C-', '2017-04-30 10:04:50', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 'D+', '2017-04-30 10:04:09', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 'D', '2017-04-30 10:04:16', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 'F', '2017-04-30 10:04:20', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `register_stds`
--

CREATE TABLE `register_stds` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `date` text NOT NULL,
  `address` text NOT NULL,
  `department` varchar(300) NOT NULL,
  `regnum` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register_stds`
--

INSERT INTO `register_stds` (`id`, `name`, `email`, `contact`, `date`, `address`, `department`, `regnum`, `created_at`, `updated_at`, `deleted_at`) VALUES
(12, 'Oshit Sutra Dhar', 'oshit@gmail.com', '01852123456', '30-04-2017', 'Dhaka-1500', 'CSE', 'CSE-2017-001', '2017-04-30 11:04:25', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'Ismaile Hossain', 'ismaile@gmail.com', '0147852359', '30-04-2017', 'sdsdsd', 'CSE', 'CSE-2017-002', '2017-04-30 12:04:11', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 'Mitu', 'arinaafrin05@gmail.com', '0175445646', '30-04-2017', 'mirpur', 'CSE', 'CSE-2017-003', '2017-04-30 01:04:41', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 'Aleya Nur Mohol Siddika', 'aleya@gmail.com', '01750111222', '30-04-2017', 'Mirpur 1', 'CSE', 'CSE-2017-004', '2017-04-30 01:04:16', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `rooms` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `rooms`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 'RM-101', '2017-04-30 10:04:47', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'RM-102', '2017-04-30 10:04:02', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'RM-103', '2017-04-30 10:04:07', '2017-04-30 10:04:16', '0000-00-00 00:00:00'),
(6, 'RM-104', '2017-04-30 10:04:28', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'RM-105', '2017-04-30 10:04:34', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'RM-106', '2017-04-30 10:04:40', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'RM-107', '2017-04-30 10:04:44', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'RM-108', '2017-04-30 10:04:47', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'RM-109', '2017-04-30 10:04:58', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `semesters`
--

CREATE TABLE `semesters` (
  `id` int(11) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semesters`
--

INSERT INTO `semesters` (`id`, `semester`, `created_at`, `updated_at`, `deleted_at`) VALUES
(19, '1st', '2017-04-30 10:04:11', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, '2nd', '2017-04-30 10:04:14', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, '3rd', '2017-04-30 10:04:20', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, '4th', '2017-04-30 10:04:24', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, '5th', '2017-04-30 10:04:27', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, '6th', '2017-04-30 10:04:32', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, '7th', '2017-04-30 10:04:38', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, '8th', '2017-04-30 10:04:43', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `stds`
--

CREATE TABLE `stds` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(300) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `department` varchar(300) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `std_results`
--

CREATE TABLE `std_results` (
  `id` int(11) NOT NULL,
  `std_reg` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `department` varchar(300) NOT NULL,
  `select_course` varchar(300) NOT NULL,
  `select_grade_letter` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(300) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `credittaken` int(11) NOT NULL,
  `remain` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `address`, `email`, `contact`, `designation`, `department`, `credittaken`, `remain`, `created_at`, `updated_at`, `deleted_at`) VALUES
(5, 'Karim Ahmed', 'Dhaka-1025', 'karim@gmail.com', '01750123456', 'Lecturer', 'CSE', 20, 0, '2017-04-30 11:04:46', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Ismaile Hossain', 'Gajipur, Dhaka-1700', 'ismaile@gmail.com', '01883123456', 'Principle', 'CSE', 200, 0, '2017-04-30 11:04:18', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'Nasirul Haque Ridoy', 'Mirpur, Dhaka-1216', 'ridoy@gmail.com', '01552123456', 'Vice Principles', 'CSE', 100, 0, '2017-04-30 11:04:18', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'Oshit Sutra Dhar', 'Dhaka-1500', 'oshit@gmail.com', '01750123456', 'Lecturer', 'CSE', 60, 0, '2017-04-30 11:04:45', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'Another ', 'snkdnskj', 'sdf@sdfsf', '0000000', 'Vice Principles', 'CSE', 5, 5, '2017-04-30 11:04:28', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assign_teachers`
--
ALTER TABLE `assign_teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `classrooms_allocate`
--
ALTER TABLE `classrooms_allocate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `days`
--
ALTER TABLE `days`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designations`
--
ALTER TABLE `designations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enroll_courses`
--
ALTER TABLE `enroll_courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grades`
--
ALTER TABLE `grades`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register_stds`
--
ALTER TABLE `register_stds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `semesters`
--
ALTER TABLE `semesters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stds`
--
ALTER TABLE `stds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `std_results`
--
ALTER TABLE `std_results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `assign_teachers`
--
ALTER TABLE `assign_teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `classrooms_allocate`
--
ALTER TABLE `classrooms_allocate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `days`
--
ALTER TABLE `days`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `designations`
--
ALTER TABLE `designations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `enroll_courses`
--
ALTER TABLE `enroll_courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `grades`
--
ALTER TABLE `grades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `register_stds`
--
ALTER TABLE `register_stds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `semesters`
--
ALTER TABLE `semesters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `stds`
--
ALTER TABLE `stds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `std_results`
--
ALTER TABLE `std_results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
