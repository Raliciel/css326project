-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2022 at 11:51 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `css326project`
--
DROP DATABASE IF EXISTS css326project;
CREATE DATABASE IF NOT EXISTS css326project;
USE css326project;
-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2022 at 06:20 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

CREATE TABLE `account` (
  `user_id` int(10) NOT NULL,
  `f_name` varchar(30) DEFAULT NULL,
  `l_name` varchar(30) DEFAULT NULL,
  `username` varchar(30) NOT NULL,
  `passwd` varchar(30) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `user_picture` longblob DEFAULT NULL,
  `type` varchar(13) DEFAULT NULL,
  `admin_id` int(10) DEFAULT NULL,
  `regis_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`user_id`, `f_name`, `l_name`, `username`, `passwd`, `email`, `user_picture`, `type`, `admin_id`, `regis_date`) VALUES
(0, 'admin', 'admin', 'admin', 'asdfg', 'admin@gmail.com', NULL, 'Admin', 0, '2022-11-17'),
(38, 'พิมพิกา', 'หงษาวดี', 'th.pimpika@gmail.com', 'sss', 'th.pimpika@gmail.com', 0x31613732313131306630393931336131333062383036623161343439663762612e706e67, 'Admin', 0, '2022-10-24'),
(41, 'ssss', 'ssss', 'ssss', 'w%e1mHKdG(j', 'ssss', '', 'Admin', 38, '2022-11-14'),
(43, 'teacher', 'aa', 'teacher@gmail.com', 'bbb', 'teacher@gmail.com', 0x323630352d332e6a7067, 'Teacher', 0, '2022-11-16'),
(47, 'aaa', 'aaa', 'teacher@hotmail.com', '3C#67Qr3QMC', 'teacher@hotmail.com', '', 'Teacher', 38, '2022-11-17');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `course_id` varchar(10) NOT NULL,
  `section_id` int(4) NOT NULL,
  `room_id` int(4) NOT NULL,
  `teacher_id` int(10) NOT NULL,
  `book_date` date DEFAULT NULL,
  `book_strattime` time DEFAULT NULL,
  `book_endtime` time DEFAULT NULL,
  `create_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` varchar(6) NOT NULL,
  `course_name` varchar(30) DEFAULT NULL,
  `grade_to_learn` int(2) DEFAULT NULL,
  `teacher_id` int(10) DEFAULT NULL,
  `admin_id` int(10) DEFAULT NULL,
  `regis_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_name`, `grade_to_learn`, `teacher_id`, `admin_id`, `regis_date`) VALUES
('GTS231', 'Physic', 10, 47, 0, '2022-11-17'),
('GTS232', 'Biology', 10, 47, 0, '2022-11-17'),
('Pms233', 'Generic Science', 4, 43, 0, '2022-11-17'),
('Pms235', 'Generic Science', 2, 43, 0, '2022-11-17'),
('Pms236', '333', 3, 43, 0, '2022-11-17');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `room_id` int(4) NOT NULL,
  `building_name` varchar(25) DEFAULT NULL,
  `building_image` longblob DEFAULT NULL,
  `room_size` int(2) DEFAULT NULL,
  `admin_id` int(10) DEFAULT NULL,
  `regis_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_id`, `building_name`, `building_image`, `room_size`, `admin_id`, `regis_date`) VALUES
(306, 'Rangsit Campus', '', 22, 0, '2022-11-17'),
(333, '12th birthday', '', 120, 0, '2022-11-17');

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `section_id` int(4) NOT NULL,
  `grade` int(2) DEFAULT NULL,
  `section_size` int(2) DEFAULT NULL,
  `admin_id` int(10) DEFAULT NULL,
  `regis_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`section_id`, `grade`, `section_size`, `admin_id`, `regis_date`) VALUES
(2, 10, 12, 38, '2022-11-17'),
(3, 3, 12, 38, '2022-11-17'),
(4, 6, 123, 38, '2022-11-17'),
(5, 10, 26, 38, '2022-11-17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`course_id`,`section_id`,`room_id`,`teacher_id`),
  ADD UNIQUE KEY `course_id` (`course_id`),
  ADD UNIQUE KEY `section_id` (`section_id`),
  ADD UNIQUE KEY `room_id` (`room_id`),
  ADD UNIQUE KEY `teacher_id` (`teacher_id`),
  ADD UNIQUE KEY `course_id_2` (`course_id`),
  ADD UNIQUE KEY `section_id_2` (`section_id`),
  ADD UNIQUE KEY `room_id_2` (`room_id`),
  ADD UNIQUE KEY `teacher_id_2` (`teacher_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`),
  ADD KEY `fk_coursetoteacher_id` (`teacher_id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`section_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `section_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `fk_accounttobook` FOREIGN KEY (`teacher_id`) REFERENCES `account` (`user_id`),
  ADD CONSTRAINT `fk_accounttocourse` FOREIGN KEY (`course_id`) REFERENCES `course` (`course_id`),
  ADD CONSTRAINT `fk_accounttoroom` FOREIGN KEY (`room_id`) REFERENCES `room` (`room_id`),
  ADD CONSTRAINT `fk_accounttosection` FOREIGN KEY (`section_id`) REFERENCES `section` (`section_id`);

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `fk_coursetoteacher_id` FOREIGN KEY (`teacher_id`) REFERENCES `account` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
