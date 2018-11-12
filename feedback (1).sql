-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2017 at 10:19 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `feedback`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_student`
--

CREATE TABLE `admin_student` (
  `name` text NOT NULL,
  `department` text NOT NULL,
  `id_no` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin_teacher`
--

CREATE TABLE `admin_teacher` (
  `name` text NOT NULL,
  `department` text NOT NULL,
  `id_no` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cse384`
--

CREATE TABLE `cse384` (
  `Lecture_No` text NOT NULL,
  `Punctuality` int(11) NOT NULL,
  `Teaching_the_subject_matter` int(11) NOT NULL,
  `Delivery_of_structured_lecture` int(11) NOT NULL,
  `Uses_of_innovative_teaching_method` int(11) NOT NULL,
  `Realising_strengths_and_developmental_needs` int(11) NOT NULL,
  `understand` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cse384`
--

INSERT INTO `cse384` (`Lecture_No`, `Punctuality`, `Teaching_the_subject_matter`, `Delivery_of_structured_lecture`, `Uses_of_innovative_teaching_method`, `Realising_strengths_and_developmental_needs`, `understand`) VALUES
('lecture01', 50, 65, 75, 90, 70, 70);

-- --------------------------------------------------------

--
-- Table structure for table `cse384_lecture01`
--

CREATE TABLE `cse384_lecture01` (
  `Serial_No` int(11) NOT NULL,
  `comment` text NOT NULL,
  `punctuality` int(11) NOT NULL,
  `Teaching_the_subject_matter` int(11) NOT NULL,
  `Delivery_of_structured_lecture` int(11) NOT NULL,
  `Uses_of_innovative_teaching_method` int(11) NOT NULL,
  `Realising_strengths_developmental_needs` int(11) NOT NULL,
  `understand` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cse384_lecture01`
--

INSERT INTO `cse384_lecture01` (`Serial_No`, `comment`, `punctuality`, `Teaching_the_subject_matter`, `Delivery_of_structured_lecture`, `Uses_of_innovative_teaching_method`, `Realising_strengths_developmental_needs`, `understand`) VALUES
(1, 'Not so good', 40, 60, 70, 80, 100, 70),
(2, 'Please Repeat', 60, 70, 80, 100, 40, 70);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `name` text NOT NULL,
  `department` text NOT NULL,
  `id_no` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`name`, `department`, `id_no`, `email`, `password`) VALUES
('Jayed', 'ete', '1408010', 'jayed@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `name` text NOT NULL,
  `department` text NOT NULL,
  `id_no` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`name`, `department`, `id_no`, `email`, `password`) VALUES
('mahim', 'cse', '0000001', 'mahimcse@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
('Md. Sabir Hossain', 'cse', '1020', 'sabirndc08cuet10@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_name`
--

CREATE TABLE `teacher_name` (
  `course_no` text NOT NULL,
  `teacher_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_name`
--

INSERT INTO `teacher_name` (`course_no`, `teacher_name`) VALUES
('cse384', 'Md. Sabir Hossain');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cse384_lecture01`
--
ALTER TABLE `cse384_lecture01`
  ADD PRIMARY KEY (`Serial_No`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cse384_lecture01`
--
ALTER TABLE `cse384_lecture01`
  MODIFY `Serial_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
