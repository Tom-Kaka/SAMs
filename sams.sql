-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2020 at 01:19 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sams`
--

-- --------------------------------------------------------

--
-- Table structure for table `class_1_attendanceclass_attendance`
--

CREATE TABLE `class_1_attendanceclass_attendance` (
  `user_id` int(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `subject` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `comment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class_1_attendanceclass_attendance`
--

INSERT INTO `class_1_attendanceclass_attendance` (`user_id`, `date`, `first_name`, `last_name`, `subject`, `status`, `comment`) VALUES
(1, '', 'JONI', 'LEMA', '', '', ''),
(109, '', 'THOMAS', 'AKAKA', '', '', ''),
(888, '', 'robert', 'jose', '', '', ''),
(1234, '', 'jozee', 'onkoko', '', '', ''),
(5555, '', 'zuchu', 'mondi', '', '', ''),
(6767, '', 'ribbon', 'gold', '', '', ''),
(9090, '', 'holly', 'lama', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `class_2_attendance`
--

CREATE TABLE `class_2_attendance` (
  `user_id` int(100) NOT NULL,
  `date` text NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `comment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `class_3_attendance`
--

CREATE TABLE `class_3_attendance` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `date` text NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `comment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class_3_attendance`
--

INSERT INTO `class_3_attendance` (`id`, `user_id`, `date`, `first_name`, `last_name`, `subject`, `status`, `comment`) VALUES
(1, 5656, '', 'nancy', 'limo', 'Chemistry', 'Present', 'Amefika'),
(2, 5656, '2020-08-04', 'nancy', 'limo', 'English', 'Absent', 'Ndiyooooo');

-- --------------------------------------------------------

--
-- Table structure for table `class_4_attendance`
--

CREATE TABLE `class_4_attendance` (
  `user_id` int(100) NOT NULL,
  `date` date NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `comment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class_4_attendance`
--

INSERT INTO `class_4_attendance` (`user_id`, `date`, `first_name`, `last_name`, `subject`, `status`, `comment`) VALUES
(3333, '0000-00-00', 'juma', 'rama', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `class_5_attendance`
--

CREATE TABLE `class_5_attendance` (
  `user_id` int(100) NOT NULL,
  `date` text NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `comment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class_5_attendance`
--

INSERT INTO `class_5_attendance` (`user_id`, `date`, `first_name`, `last_name`, `subject`, `status`, `comment`) VALUES
(3, '2020-08-04', 'mam', 'ali', 'kiswahili', 'Absent', 'Sick'),
(9098, '2020-08-04', 'jane', 'lamek', 'Math', 'Present', 'Fyn');

-- --------------------------------------------------------

--
-- Table structure for table `class_6_attendance`
--

CREATE TABLE `class_6_attendance` (
  `user_id` int(100) NOT NULL,
  `date` text NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class_6_attendance`
--

INSERT INTO `class_6_attendance` (`user_id`, `date`, `first_name`, `last_name`, `subject`, `status`, `comment`) VALUES
(8880, '', 'baraka', 'obama', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `class_7_attendance`
--

CREATE TABLE `class_7_attendance` (
  `user_id` int(100) NOT NULL,
  `date` text NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `comment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class_7_attendance`
--

INSERT INTO `class_7_attendance` (`user_id`, `date`, `first_name`, `last_name`, `subject`, `status`, `comment`) VALUES
(2323, '', 'ben', 'luke', '', '', ''),
(101010, '', 'nova', 'temba', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `role`, `email`, `password`) VALUES
(1, 'JONI', 'LEMA', 'STUDENT', 'JONI@GMAIL.COM', '2323'),
(3, 'mam', 'ali', 'STUDENT', 'chimamymniachi@gmail.com', '1111'),
(109, 'THOMAS', 'AKAKA', 'STUDENT', 'byser99@gmail.com', '123'),
(666, 'prof', 'prince', 'TEACHER', 'prof@gmail.com', '777'),
(777, 'ALEX', 'JOEL', 'TEACHER', 'jose@gmail.com', '12345'),
(888, 'robert', 'jose', 'STUDENT', 'robert@gmail.com', '09'),
(999, 'LULU', 'MAIKO', 'TEACHER', 'LULU@GMAIL.COM', '999'),
(2323, 'ben', 'luke', 'STUDENT', 'bem@gmail.com', '8989'),
(3333, 'juma', 'rama', 'STUDENT', 'juma@gmail.com', '6767777'),
(3434, 'NANA', 'DOLL', 'TEACHER', 'NANA@GMAIL.COM', '000'),
(5555, 'zuchu', 'mondi', 'STUDENT', 'zuchu@gmail.com', '34'),
(5656, 'nancy', 'limo', 'STUDENT', 'nancy@gmail.com', '90909'),
(6767, 'ribbon', 'gold', 'STUDENT', 'ribbon@gmail.com', '1212'),
(8880, 'baraka', 'obama', 'STUDENT', 'doreen@gmail.com', '4545'),
(9098, 'jane', 'lamek', 'STUDENT', 'jane@GMAIL.COM', '77777777'),
(101010, 'nova', 'temba', 'STUDENT', 'nova@gmail.com', '999999'),
(909090, 'zulfa', 'uiio', 'TEACHER', 'doreenJames@gmail.com', '676767');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class_1_attendanceclass_attendance`
--
ALTER TABLE `class_1_attendanceclass_attendance`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `class_2_attendance`
--
ALTER TABLE `class_2_attendance`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `class_3_attendance`
--
ALTER TABLE `class_3_attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class_4_attendance`
--
ALTER TABLE `class_4_attendance`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `class_5_attendance`
--
ALTER TABLE `class_5_attendance`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `class_6_attendance`
--
ALTER TABLE `class_6_attendance`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `class_7_attendance`
--
ALTER TABLE `class_7_attendance`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `class_1_attendanceclass_attendance`
--
ALTER TABLE `class_1_attendanceclass_attendance`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9091;

--
-- AUTO_INCREMENT for table `class_2_attendance`
--
ALTER TABLE `class_2_attendance`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `class_3_attendance`
--
ALTER TABLE `class_3_attendance`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `class_4_attendance`
--
ALTER TABLE `class_4_attendance`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3334;

--
-- AUTO_INCREMENT for table `class_5_attendance`
--
ALTER TABLE `class_5_attendance`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9099;

--
-- AUTO_INCREMENT for table `class_6_attendance`
--
ALTER TABLE `class_6_attendance`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8881;

--
-- AUTO_INCREMENT for table `class_7_attendance`
--
ALTER TABLE `class_7_attendance`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101011;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=909091;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
