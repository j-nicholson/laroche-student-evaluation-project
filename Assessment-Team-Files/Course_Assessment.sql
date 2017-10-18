-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 19, 2017 at 01:02 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Course_Assessment`
--

-- --------------------------------------------------------

--
-- Table structure for table `Class`
--

CREATE TABLE `Class` (
  `ClassID` varchar(2) NOT NULL,
  `CourseID` varchar(8) NOT NULL,
  `Syllabus` blob NOT NULL,
  `Semester` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Class`
--

INSERT INTO `Class` (`ClassID`, `CourseID`, `Syllabus`, `Semester`) VALUES
('01', 'CHEM2016', '', 'SPR 2017'),
('02', 'CHEM2016', '', 'FALL 2016'),
('03', 'MATH2050', '', 'SPR 2017'),
('04', 'CSCI4098', '', 'SPR 2017'),
('06', 'MATH1040', '', 'SPR 2017');

-- --------------------------------------------------------

--
-- Table structure for table `Course`
--

CREATE TABLE `Course` (
  `CourseID` varchar(8) NOT NULL,
  `CourseTitle` varchar(50) NOT NULL,
  `InstructorID` int(6) NOT NULL,
  `CourseDescription` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Course`
--

INSERT INTO `Course` (`CourseID`, `CourseTitle`, `InstructorID`, `CourseDescription`) VALUES
('CHEM2016', 'Organic_Chemistry_II_Lecture', 111111, 'This course is fun.'),
('CSCI4098', 'CS_Capstone_Experience_I', 123456, 'This course is setup like a group project. '),
('ENGL1002', 'College_Writing', 101010, 'Course everyone takes.'),
('MATH1040', 'College_Algebra', 111111, 'This is Algebra'),
('MATH2050', 'Discrete_Mathematics', 101010, 'This is the most challenging math course at La Roche.');

-- --------------------------------------------------------

--
-- Table structure for table `Course_SLOs`
--

CREATE TABLE `Course_SLOs` (
  `CourseSLOID` int(6) NOT NULL,
  `CourseID` varchar(10) NOT NULL,
  `SLOID` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Course_SLOs`
--

INSERT INTO `Course_SLOs` (`CourseSLOID`, `CourseID`, `SLOID`) VALUES
(0, 'CSCI4098', 4),
(19, 'CSCI4098', 4),
(40, 'CSCI4098', 4),
(60, 'CSCI4098', 4),
(13943, 'CSCI4098', 4),
(120593, 'CSCI4098', 4),
(315579, '', 4),
(370463, 'course', 4),
(370484, '', 4),
(567801, '', 4),
(603905, '', 4),
(651932, '', 4),
(652652, 'CSCI4098', 4),
(662537, '', 4),
(700113, 'course', 4),
(708057, '', 4),
(726532, '', 4),
(750386, '', 4),
(776045, 'MATH2050', 4),
(781681, 'course', 4),
(823494, '', 4),
(931205, '', 4);

-- --------------------------------------------------------

--
-- Table structure for table `Instructor`
--

CREATE TABLE `Instructor` (
  `InstructorID` int(6) NOT NULL,
  `InstructorName` varchar(40) NOT NULL,
  `InstructorTitle` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Instructor`
--

INSERT INTO `Instructor` (`InstructorID`, `InstructorName`, `InstructorTitle`) VALUES
(101010, 'Brian_Smith', 'Professor of Mathematics'),
(111111, 'Dr._D._T._Fujito', 'Professor / Chair of Chemistry'),
(123456, 'Gregory_Lang', 'Prince of Azkaban');

-- --------------------------------------------------------

--
-- Table structure for table `SLOs`
--

CREATE TABLE `SLOs` (
  `SLOID` int(2) NOT NULL,
  `SLOName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `SLOs`
--

INSERT INTO `SLOs` (`SLOID`, `SLOName`) VALUES
(1, 'Knowledge Base'),
(2, 'Lab Skills'),
(3, 'Practice'),
(4, 'Societal Connects'),
(5, 'Capstone');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Class`
--
ALTER TABLE `Class`
  ADD PRIMARY KEY (`ClassID`),
  ADD UNIQUE KEY `ClassID` (`ClassID`);

--
-- Indexes for table `Course`
--
ALTER TABLE `Course`
  ADD PRIMARY KEY (`CourseID`),
  ADD UNIQUE KEY `CourseID` (`CourseID`);

--
-- Indexes for table `Course_SLOs`
--
ALTER TABLE `Course_SLOs`
  ADD PRIMARY KEY (`CourseSLOID`);

--
-- Indexes for table `Instructor`
--
ALTER TABLE `Instructor`
  ADD PRIMARY KEY (`InstructorID`),
  ADD UNIQUE KEY `InstructorID` (`InstructorID`);

--
-- Indexes for table `SLOs`
--
ALTER TABLE `SLOs`
  ADD PRIMARY KEY (`SLOID`),
  ADD UNIQUE KEY `SLOID` (`SLOID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
