-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2017 at 08:17 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `uvmanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `pass`, `created_at`, `updated_at`, `deleted_at`) VALUES
(5, 'OSHIT SUTRA DAR', 'oshit@gmail.com', '01aab92252fac79e3ffa76301e9ac51a', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `assign_teachers`
--

CREATE TABLE IF NOT EXISTS `assign_teachers` (
`id` int(11) NOT NULL,
  `department` varchar(255) NOT NULL,
  `teacher` varchar(300) NOT NULL,
  `credit_taken` int(30) NOT NULL,
  `remain_credit` int(30) NOT NULL,
  `course_code` varchar(255) NOT NULL,
  `crs_name` varchar(255) NOT NULL,
  `credit` int(30) NOT NULL,
  `is_delete` tinyint(11) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assign_teachers`
--

INSERT INTO `assign_teachers` (`id`, `department`, `teacher`, `credit_taken`, `remain_credit`, `course_code`, `crs_name`, `credit`, `is_delete`, `created_at`, `updated_at`, `deleted_at`) VALUES
(42, '35', '22', 100, 42, '29', 'Office Management System', 2, 0, '2017-05-11 07:05:02', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(43, '35', '24', 12, 6, '30', 'Web Design and', 2, 0, '2017-05-11 07:05:54', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(44, '35', '25', 12, 9, '31', 'Networking', 3, 0, '2017-05-11 07:05:05', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `classrooms_allocate`
--

CREATE TABLE IF NOT EXISTS `classrooms_allocate` (
`id` int(11) NOT NULL,
  `department` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `room` varchar(255) NOT NULL,
  `days` varchar(255) NOT NULL,
  `start_time` varchar(255) NOT NULL,
  `end_time` varchar(255) NOT NULL,
  `is_delete` tinyint(11) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `classrooms_allocate`
--

INSERT INTO `classrooms_allocate` (`id`, `department`, `course`, `room`, `days`, `start_time`, `end_time`, `is_delete`, `created_at`, `updated_at`, `deleted_at`) VALUES
(38, '36', '28', 'RM-101', 'Saturday', '07:05', '07:05', 0, '2017-05-11 07:05:40', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(39, '35', '29', 'RM-103', 'Saturday', '08:05', '08:05', 0, '2017-05-11 08:05:25', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(40, '35', '31', 'RM-105', 'Wednesday', '09:05', '08:05', 0, '2017-05-11 08:05:56', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(41, '35', '30', 'RM-104', 'Tuesday', '10:05', '08:05', 0, '2017-05-11 08:05:44', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
`id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `c_name` varchar(255) NOT NULL,
  `credit` int(20) NOT NULL,
  `description` varchar(350) NOT NULL,
  `department` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `is_delete` int(11) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `code`, `c_name`, `credit`, `description`, `department`, `semester`, `is_delete`, `created_at`, `updated_at`, `deleted_at`) VALUES
(28, 'CR-101', 'Web Design and --', 3, 'I know something      over                                                                                                      ', '36', '8th', 0, '2017-05-11 05:05:12', '2017-05-11 05:05:26', '0000-00-00 00:00:00'),
(29, 'CR-102', 'Office Management System', 2, 'Know Something else                                                                                               ', '35', '1st', 0, '2017-05-11 05:05:45', '2017-05-11 05:05:21', '0000-00-00 00:00:00'),
(30, 'CR-1001', 'Web Design and', 2, 'Aaa', '35', '6th', 0, '2017-05-11 07:05:20', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, 'CE-0292', 'Networking', 3, 'fhu', '35', '5th', 0, '2017-05-11 07:05:43', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `days`
--

CREATE TABLE IF NOT EXISTS `days` (
`id` int(11) NOT NULL,
  `day` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `days`
--

INSERT INTO `days` (`id`, `day`, `created_at`, `updated_at`, `deleted_at`) VALUES
(10, 'Saturday', '2017-04-30 10:04:22', '2017-05-04 04:05:54', '0000-00-00 00:00:00'),
(11, 'Sunday', '2017-04-30 10:04:27', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'Monday', '2017-04-30 10:04:32', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'Tuesday', '2017-04-30 10:04:39', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'Wednesday', '2017-04-30 10:04:51', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'Thursday', '2017-04-30 10:04:58', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE IF NOT EXISTS `departments` (
`id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `is_delete` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `code`, `name`, `is_delete`, `created_at`, `updated_at`, `deleted_at`) VALUES
(35, 'CSE-101', 'CSE', 0, '2017-05-11 05:05:12', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(36, 'EEE-102', 'EEE', 0, '2017-05-11 05:05:10', '2017-05-11 05:05:31', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `designations`
--

CREATE TABLE IF NOT EXISTS `designations` (
`id` int(11) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `designations`
--

INSERT INTO `designations` (`id`, `designation`, `created_at`, `updated_at`, `deleted_at`) VALUES
(6, 'Principle', '2017-04-26 12:04:09', '2017-05-04 04:05:14', '0000-00-00 00:00:00'),
(8, 'Vice Principles', '2017-04-26 09:04:39', '2017-04-30 10:04:34', '0000-00-00 00:00:00'),
(9, 'Asst. Teacher', '2017-04-30 10:04:47', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'Lecturer', '2017-04-30 10:04:57', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `enroll_courses`
--

CREATE TABLE IF NOT EXISTS `enroll_courses` (
`id` int(11) NOT NULL,
  `std_reg` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `department` varchar(300) NOT NULL,
  `course` varchar(300) NOT NULL,
  `date` varchar(11) NOT NULL,
  `is_delete` tinyint(11) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enroll_courses`
--

INSERT INTO `enroll_courses` (`id`, `std_reg`, `name`, `email`, `department`, `course`, `date`, `is_delete`, `created_at`, `updated_at`, `deleted_at`) VALUES
(40, '28', 'Ismaile Hossain', 'ismaile@gmail.com', 'CSE', 'Web Design and --', ' 11-05-2017', 0, '2017-05-11 06:05:58', '2017-05-11 06:05:34', '0000-00-00 00:00:00'),
(41, '27', 'Oshit Sutra Dar', 'oshit@gmail.com', 'EEE', 'Office Management System', ' 11-05-2017', 0, '2017-05-11 06:05:09', '2017-05-11 06:05:30', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

CREATE TABLE IF NOT EXISTS `grades` (
`id` int(11) NOT NULL,
  `grade` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grades`
--

INSERT INTO `grades` (`id`, `grade`, `created_at`, `updated_at`, `deleted_at`) VALUES
(9, 'A+', '2017-04-27 04:04:28', '2017-05-04 04:05:53', '0000-00-00 00:00:00'),
(10, 'A', '2017-04-30 10:04:48', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'A-', '2017-04-30 10:04:55', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'B+', '2017-04-30 10:04:05', '2017-04-30 10:04:30', '0000-00-00 00:00:00'),
(13, 'B', '2017-04-30 10:04:08', '2017-04-30 10:04:36', '0000-00-00 00:00:00'),
(14, 'B-', '2017-04-30 10:04:42', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'C+', '2017-04-30 10:04:45', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'C', '2017-04-30 10:04:47', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 'C-', '2017-04-30 10:04:50', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 'D+', '2017-04-30 10:04:09', '2017-05-05 05:05:38', '0000-00-00 00:00:00'),
(19, 'D', '2017-04-30 10:04:16', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 'F', '2017-04-30 10:04:20', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `register_stds`
--

CREATE TABLE IF NOT EXISTS `register_stds` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `date` text NOT NULL,
  `address` text NOT NULL,
  `department` varchar(300) NOT NULL,
  `regnum` varchar(255) NOT NULL,
  `is_delete` tinyint(11) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register_stds`
--

INSERT INTO `register_stds` (`id`, `name`, `email`, `contact`, `date`, `address`, `department`, `regnum`, `is_delete`, `created_at`, `updated_at`, `deleted_at`) VALUES
(27, 'Oshit Sutra Dar', 'oshit@gmail.com', '0186254183', '11-05-2017', 'Dhaka,Dhaka-1205', 'EEE', 'EEE-2017-001', 0, '2017-05-11 06:05:11', '2017-05-11 06:05:29', '0000-00-00 00:00:00'),
(28, 'Ismaile Hossain', 'ismaile@gmail.com', '01750123458', '11-05-2017', 'Gazipur, Dhaka', 'CSE', 'CSE-2017-001', 0, '2017-05-11 06:05:45', '2017-05-11 06:05:51', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE IF NOT EXISTS `rooms` (
`id` int(11) NOT NULL,
  `rooms` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `rooms`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 'RM-101', '2017-04-30 10:04:47', '2017-05-04 04:05:02', '0000-00-00 00:00:00'),
(4, 'RM-102', '2017-04-30 10:04:02', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'RM-103', '2017-04-30 10:04:07', '2017-04-30 10:04:16', '0000-00-00 00:00:00'),
(6, 'RM-104', '2017-04-30 10:04:28', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'RM-105', '2017-04-30 10:04:34', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `semesters`
--

CREATE TABLE IF NOT EXISTS `semesters` (
`id` int(11) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semesters`
--

INSERT INTO `semesters` (`id`, `semester`, `created_at`, `updated_at`, `deleted_at`) VALUES
(19, '1st', '2017-04-30 10:04:11', '2017-05-04 04:05:45', '0000-00-00 00:00:00'),
(20, '2nd', '2017-04-30 10:04:14', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, '3rd', '2017-04-30 10:04:20', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, '4th', '2017-04-30 10:04:24', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, '5th', '2017-04-30 10:04:27', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, '6th', '2017-04-30 10:04:32', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, '7th', '2017-04-30 10:04:38', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, '8th', '2017-04-30 10:04:43', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `std_results`
--

CREATE TABLE IF NOT EXISTS `std_results` (
`id` int(11) NOT NULL,
  `std_reg` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `department` varchar(300) NOT NULL,
  `course` varchar(300) NOT NULL,
  `grade_letter` varchar(255) NOT NULL,
  `is_delete` int(11) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `std_results`
--

INSERT INTO `std_results` (`id`, `std_reg`, `name`, `email`, `department`, `course`, `grade_letter`, `is_delete`, `created_at`, `updated_at`, `deleted_at`) VALUES
(20, '27', 'Oshit Sutra Dar', 'oshit@gmail.com', 'EEE', 'Office Management System', 'A+', 0, '2017-05-11 06:05:42', '2017-05-11 06:05:09', '0000-00-00 00:00:00'),
(21, '28', 'Ismaile Hossain', 'ismaile@gmail.com', 'CSE', 'Web Design and --', 'C-', 0, '2017-05-11 06:05:53', '2017-05-11 06:05:40', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE IF NOT EXISTS `teachers` (
`id` int(11) NOT NULL,
  `t_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(300) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `credittaken` int(11) NOT NULL,
  `remain` int(11) NOT NULL,
  `is_delete` int(11) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `t_name`, `address`, `email`, `contact`, `designation`, `department`, `credittaken`, `remain`, `is_delete`, `created_at`, `updated_at`, `deleted_at`) VALUES
(22, 'Ismaile Hossain', 'Gazipur,Dhaka', 'ismailehossain@gmail.com', '01856435', 'Lecturer', ' 35', 100, 42, 0, '2017-05-11 05:05:46', '2017-05-11 07:05:02', '0000-00-00 00:00:00'),
(23, 'Oshit Sutra Dar', 'Dhaka,Dhaka-1205', 'oshit@gmail.com', '0186254183', 'Principle', '36', 120, 99, 0, '2017-05-11 05:05:07', '2017-05-11 06:05:29', '0000-00-00 00:00:00'),
(24, 'Web Design', 'Dhaka', 'osd@gmail.com', '111111222222', 'Lecturer', '35', 12, 6, 0, '2017-05-11 07:05:02', '2017-05-11 07:05:53', '0000-00-00 00:00:00'),
(25, 'Web Design korbo', 'hahh', 'hh@gg', '45263', 'Vice Principles', '35', 12, 9, 0, '2017-05-11 07:05:39', '2017-05-11 07:05:04', '0000-00-00 00:00:00');

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
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `assign_teachers`
--
ALTER TABLE `assign_teachers`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `classrooms_allocate`
--
ALTER TABLE `classrooms_allocate`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `days`
--
ALTER TABLE `days`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `designations`
--
ALTER TABLE `designations`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `enroll_courses`
--
ALTER TABLE `enroll_courses`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `grades`
--
ALTER TABLE `grades`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `register_stds`
--
ALTER TABLE `register_stds`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `semesters`
--
ALTER TABLE `semesters`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `std_results`
--
ALTER TABLE `std_results`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
