-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2017 at 04:35 AM
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
(5, 'OSHIT SD', 'o@g.com', 'e10adc3949ba59abbe56e057f20f883e', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

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
  `name` varchar(255) NOT NULL,
  `credit` int(30) NOT NULL,
  `is_delete` tinyint(11) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assign_teachers`
--

INSERT INTO `assign_teachers` (`id`, `department`, `teacher`, `credit_taken`, `remain_credit`, `course_code`, `name`, `credit`, `is_delete`, `created_at`, `updated_at`, `deleted_at`) VALUES
(9, 'CSE', 'Karim Ahmed', 20, 17, 'CR-101', 'Web Design', 3, 0, '2017-04-30 11:04:06', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'ARCH', '', 0, 199, 'CR-102', 'Autocad', 1, 1, '2017-04-30 11:04:18', '2017-05-04 06:05:20', '0000-00-00 00:00:00'),
(11, '24', '', 0, 3, '1', 'Web Design', 3, 1, '2017-05-04 06:05:54', '2017-05-04 06:05:05', '0000-00-00 00:00:00'),
(12, '24', '', 0, 0, '21', 'Networking', 2, 1, '2017-05-04 06:05:01', '2017-05-04 06:05:01', '0000-00-00 00:00:00');

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
  `start_ap` varchar(255) NOT NULL,
  `end_time` varchar(255) NOT NULL,
  `end_ap` varchar(255) NOT NULL,
  `is_delete` tinyint(11) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `classrooms_allocate`
--

INSERT INTO `classrooms_allocate` (`id`, `department`, `course`, `room`, `days`, `start_time`, `start_ap`, `end_time`, `end_ap`, `is_delete`, `created_at`, `updated_at`, `deleted_at`) VALUES
(14, 'CSE', 'Web Design', 'RM-101', 'Saturday', '09:00:00', ' -AM', '11:30:00', ' -AM', 0, '2017-05-03 10:05:46', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'CSE', 'Web Design', 'RM-101', 'Saturday', '01:05:53', ' -AM', '01:05:53', ' -AM', 0, '2017-05-03 01:05:56', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'CSE', 'Web Design', 'RM-101', 'Saturday', '03:05:07', ' -AM', '03:05:07', ' -AM', 0, '2017-05-03 03:05:13', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 'CSE', 'Web Design', 'RM-101', 'Saturday', '03:05:13', ' -AM', '03:05:13', ' -AM', 0, '2017-05-03 03:05:19', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 'CSE', 'Web Design', 'RM-101', 'Saturday', '04:05:35', ' -AM', '04:05:35', ' -AM', 0, '2017-05-03 04:05:55', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, '24', '18', 'RM-102', 'Saturday', '02:05:23', ' -AM', '02:05:23', ' -AM', 0, '2017-05-04 02:05:39', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, '24', '18', 'RM-102', 'Saturday', '02:05:39', ' -AM', '02:05:39', ' -AM', 0, '2017-05-04 02:05:03', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
`id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `credit` int(20) NOT NULL,
  `description` varchar(350) NOT NULL,
  `department` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `is_delete` int(11) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `code`, `name`, `credit`, `description`, `department`, `semester`, `is_delete`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'CR-101', 'Web Design', 3, 'I love Web Design                                                                        ', '24', '3rd', 0, '2017-04-30 11:04:38', '2017-05-04 09:05:11', '0000-00-00 00:00:00'),
(2, 'CR-102', 'Autocad', 1, 'No Idea', '25', '1st', 0, '2017-04-30 11:04:19', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'CR-103', 'Office Management', 1, 'I know Something                                                                        ', '26', '1st', 0, '2017-04-30 11:04:32', '2017-04-30 11:04:08', '0000-00-00 00:00:00'),
(21, 'CR-104', 'Networking', 2, 'Anything', '24', '3rd', 0, '2017-05-04 04:05:52', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 'CR-203', 'Office', 2, 'SOmething', '25', '4th', 0, '2017-05-04 05:05:20', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

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
(15, 'Thursday', '2017-04-30 10:04:58', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'Friday', '2017-04-30 10:04:02', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

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
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `code`, `name`, `is_delete`, `created_at`, `updated_at`, `deleted_at`) VALUES
(24, '101', 'CSE', 0, '2017-05-03 07:05:24', '2017-05-04 07:05:13', '0000-00-00 00:00:00'),
(25, '102', 'EEE', 0, '2017-05-03 07:05:30', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, '103', 'BBA', 0, '2017-05-03 07:05:42', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, '104', 'ARCH', 0, '2017-05-03 07:05:51', '2017-05-04 07:05:19', '0000-00-00 00:00:00'),
(28, '105', 'CIVIL', 0, '2017-05-03 07:05:01', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, 'rgkekn', 'huigi', 1, '2017-05-03 07:05:33', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, 'ehf', 'fguye', 1, '2017-05-04 07:05:54', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, 'ekfn', 'uhfiu', 1, '2017-05-04 07:05:43', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, 'vnjk', 'jn', 1, '2017-05-04 07:05:11', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, '001', 'jgnf', 1, '2017-05-04 12:05:43', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `designations`
--

INSERT INTO `designations` (`id`, `designation`, `created_at`, `updated_at`, `deleted_at`) VALUES
(6, 'Principle', '2017-04-26 12:04:09', '2017-05-04 04:05:14', '0000-00-00 00:00:00'),
(8, 'Vice Principles', '2017-04-26 09:04:39', '2017-04-30 10:04:34', '0000-00-00 00:00:00'),
(9, 'Asst. Teacher', '2017-04-30 10:04:47', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'Lecturer', '2017-04-30 10:04:57', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'rjhug', '2017-05-04 06:05:37', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enroll_courses`
--

INSERT INTO `enroll_courses` (`id`, `std_reg`, `name`, `email`, `department`, `course`, `date`, `is_delete`, `created_at`, `updated_at`, `deleted_at`) VALUES
(5, '12', 'Oshit Sutra Dhar', 'oshit@gmail.com', 'CSE', 'Web Design', ' 04-05-2017', 0, '2017-05-04 06:05:25', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, '14', 'Ismaile Hossain', 'ismaile@gmail.com', 'CSE', 'Autocad', ' 04-05-2017', 0, '2017-05-04 06:05:34', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, '18', 'Mitu', 'arinaafrin05@gmail.com', 'CSE', 'Networking', ' 04-05-2017', 0, '2017-05-04 06:05:42', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, '19', 'Aleya Nur Mohol Siddika', 'aleya@gmail.com', 'CSE', 'Office Management', ' 04-05-2017', 0, '2017-05-04 07:05:51', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

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
(18, 'D+', '2017-04-30 10:04:09', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
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
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register_stds`
--

INSERT INTO `register_stds` (`id`, `name`, `email`, `contact`, `date`, `address`, `department`, `regnum`, `is_delete`, `created_at`, `updated_at`, `deleted_at`) VALUES
(12, 'Oshit Sutra Dhar', 'oshit@gmail.com', '01852123456', '30-04-2017', 'Dhaka-1500', 'CSE', 'CSE-2017-001', 0, '2017-04-30 11:04:25', '2017-05-04 02:05:48', '0000-00-00 00:00:00'),
(14, 'Ismaile Hossain', 'ismaile@gmail.com', '0147852359', '30-04-2017', 'sdsdsd', 'CSE', 'CSE-2017-002', 0, '2017-04-30 12:04:11', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 'Mitu', 'arinaafrin05@gmail.com', '0175445646', '30-04-2017', 'mirpur', 'CSE', 'CSE-2017-003', 0, '2017-04-30 01:04:41', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 'Aleya Nur Mohol Siddika', 'aleya@gmail.com', '01750111222', '30-04-2017', 'Mirpur 1', 'CSE', 'CSE-2017-004', 0, '2017-04-30 01:04:16', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 'rbgfbr', 'bgb@efjnfjk', '53453', '04-05-2017', 'nrjgvn', 'CSE', 'CSE-2017-005', 0, '2017-05-04 02:05:14', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 'efyug', 'geyf@ygf', '76567', '04-05-2017', 'fbhj', 'CSE', 'CSE-2017-006', 0, '2017-05-04 02:05:48', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 'hgiuh', 'uhriu@nfnjug', '7564', '04-05-2017', 'ngur', 'CSE', 'CSE-2017-007', 0, '2017-05-04 06:05:22', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

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
(7, 'RM-105', '2017-04-30 10:04:34', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'RM-106', '2017-04-30 10:04:40', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'RM-107', '2017-04-30 10:04:44', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'RM-108', '2017-04-30 10:04:47', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'RM-109', '2017-04-30 10:04:58', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

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
-- Table structure for table `stds`
--

CREATE TABLE IF NOT EXISTS `stds` (
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `std_results`
--

INSERT INTO `std_results` (`id`, `std_reg`, `name`, `email`, `department`, `course`, `grade_letter`, `is_delete`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '', 'Oshit Sutra Dhar', 'oshit@gmail.com', 'CSE', 'Web Design', 'A+', 0, '2017-05-04 07:05:07', '2017-05-04 07:05:57', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE IF NOT EXISTS `teachers` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `address`, `email`, `contact`, `designation`, `department`, `credittaken`, `remain`, `is_delete`, `created_at`, `updated_at`, `deleted_at`) VALUES
(5, 'Karim Ahmed', 'Dhaka-1025', 'karim@gmail.com', '01750123456', 'Lecturer', '24', 20, 0, 0, '2017-04-30 11:04:46', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Ismaile Hossain', 'Gajipur, Dhaka-1700', 'ismaile@gmail.com', '01883123456', 'Principle', '24', 200, 0, 0, '2017-04-30 11:04:18', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'Nasirul Haque Ridoy', 'Mirpur, Dhaka-1216', 'ridoy@gmail.com', '01552123456', 'Vice Principles', '26', 100, 0, 0, '2017-04-30 11:04:18', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'Oshit Sutra Dhar', 'Dhaka-1500', 'oshit@gmail.com', '01750123456', 'Lecturer', '25', 60, 0, 0, '2017-04-30 11:04:45', '2017-05-04 01:05:19', '0000-00-00 00:00:00'),
(9, 'dnfb', 'ygfuygwu', 'gfuy@hfy', '87686', 'Principle', 'CSE', 9, 9, 1, '2017-05-04 12:05:16', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'heuifh', 'fywguy', 'oshit@mail.com', '2', 'Principle', 'CSE', 3, 3, 1, '2017-05-04 01:05:44', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'egfygwu', 'uefg', 'egwuy@ygeyf', '767', 'Principle', 'CSE', 7, 7, 1, '2017-05-04 04:05:21', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

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
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `assign_teachers`
--
ALTER TABLE `assign_teachers`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `classrooms_allocate`
--
ALTER TABLE `classrooms_allocate`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `days`
--
ALTER TABLE `days`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `designations`
--
ALTER TABLE `designations`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `enroll_courses`
--
ALTER TABLE `enroll_courses`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `grades`
--
ALTER TABLE `grades`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `register_stds`
--
ALTER TABLE `register_stds`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
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
-- AUTO_INCREMENT for table `stds`
--
ALTER TABLE `stds`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `std_results`
--
ALTER TABLE `std_results`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
