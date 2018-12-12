-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2017 at 04:19 AM
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
(7, 'gnrgn', '- -- -- -- -- -- -- -- -- -- -- -- -- -- -', 897, 76, 'gfh', 'bh', 67, '2017-04-26 07:04:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'gnrgn', '- -- -- -- -- -- -- -- -- -- -- -- -- -- -', 100, 100, 'gfh', 'nnnnnnnnn1', 900, '2017-04-26 07:04:10', '2017-04-26 07:04:30', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `classrooms_allocate`
--

CREATE TABLE `classrooms_allocate` (
  `id` int(11) NOT NULL,
  `department` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `room` varchar(255) NOT NULL,
  `day` varchar(255) NOT NULL,
  `to` varchar(255) NOT NULL,
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
(2, 'gfh', 'fghgf', 0, 'hfghf', 'gnrng', '1111', '2017-04-26 11:04:26', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'vnskjdb', 'bu', 10, 'u        ebfbrefbrge                                                   ', 'gnrng', '1111', '2017-04-27 04:04:56', '2017-04-27 04:04:54', '0000-00-00 00:00:00'),
(7, '123', 'Aleya', 5, 'dfdf', 'bv', '1111', '2017-04-30 03:04:28', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

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
(3, 'dd', '2017-04-26 11:04:39', '2017-04-27 04:04:55', '0000-00-00 00:00:00'),
(4, 'ami update', '2017-04-26 10:04:20', '2017-04-26 10:04:36', '0000-00-00 00:00:00'),
(9, 'd', '2017-04-27 04:04:48', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `code`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(11, 'fvn', 'bv', '2017-04-26 08:04:43', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, '74', 'ami', '2017-04-26 08:04:45', '2017-04-26 08:04:13', '0000-00-00 00:00:00'),
(13, '09', 'uhuy', '2017-04-27 08:04:40', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, '123', 'Aleya', '2017-04-29 02:04:31', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, '222', 'Aleya', '2017-04-29 03:04:32', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, '111', 'Aleya', '2017-04-29 03:04:58', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, '999', 'aaaaa', '2017-04-29 03:04:19', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

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
(5, 'Asistant tea', '2017-04-26 12:04:57', '2017-04-27 04:04:21', '0000-00-00 00:00:00'),
(6, 'Principle', '2017-04-26 12:04:09', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'dd', '2017-04-27 04:04:09', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'Vaic Principles', '2017-04-26 09:04:39', '2017-04-26 09:04:48', '0000-00-00 00:00:00');

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
(9, 'A+', '2017-04-27 04:04:28', '2017-04-27 04:04:37', '0000-00-00 00:00:00');

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
(2, '012', '2017-04-26 10:04:13', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

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
(12, '1111', '2017-04-26 10:04:29', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, '222', '2017-04-26 11:04:38', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, '333', '2017-04-26 11:04:40', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, '444', '2017-04-26 11:04:42', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, '555', '2017-04-26 11:04:43', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

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
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `address`, `email`, `contact`, `designation`, `department`, `credittaken`, `created_at`, `updated_at`, `deleted_at`) VALUES
(4, '10', 'ami teacher hobo', 'ami@tumi', '0186254183', 'Principle', 'iluil', 100, '2017-04-27 05:04:07', '2017-04-27 06:04:24', '0000-00-00 00:00:00');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `classrooms_allocate`
--
ALTER TABLE `classrooms_allocate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `days`
--
ALTER TABLE `days`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `designations`
--
ALTER TABLE `designations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `enroll_courses`
--
ALTER TABLE `enroll_courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `grades`
--
ALTER TABLE `grades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `register_stds`
--
ALTER TABLE `register_stds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `semesters`
--
ALTER TABLE `semesters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
