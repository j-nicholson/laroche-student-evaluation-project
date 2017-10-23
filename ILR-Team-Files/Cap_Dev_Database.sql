-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 23, 2017 at 11:57 PM
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
-- Database: `Cap_Dev_Run`
--
CREATE DATABASE IF NOT EXISTS `Cap_Dev_Run` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `Cap_Dev_Run`;

-- --------------------------------------------------------

--
-- Table structure for table `Class`
--

CREATE TABLE IF NOT EXISTS `Class` (
  `ClassID` varchar(2) NOT NULL,
  `CourseID` varchar(8) NOT NULL,
  `Syllabus` blob NOT NULL,
  `Semester` varchar(10) NOT NULL,
  PRIMARY KEY (`ClassID`),
  UNIQUE KEY `ClassID` (`ClassID`)
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

CREATE TABLE IF NOT EXISTS `Course` (
  `CourseID` varchar(8) NOT NULL,
  `CourseTitle` varchar(50) NOT NULL,
  `InstructorID` int(6) NOT NULL,
  `CourseDescription` varchar(200) NOT NULL,
  PRIMARY KEY (`CourseID`),
  UNIQUE KEY `CourseID` (`CourseID`)
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

CREATE TABLE IF NOT EXISTS `Course_SLOs` (
  `CourseSLOID` int(6) NOT NULL,
  `CourseID` varchar(10) NOT NULL,
  `SLOID` int(2) NOT NULL,
  PRIMARY KEY (`CourseSLOID`)
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
(546732, '', 4),
(567801, '', 4),
(603905, '', 4),
(630053, '', 4),
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

CREATE TABLE IF NOT EXISTS `Instructor` (
  `InstructorID` int(6) NOT NULL,
  `InstructorName` varchar(40) NOT NULL,
  `InstructorTitle` varchar(40) NOT NULL,
  PRIMARY KEY (`InstructorID`),
  UNIQUE KEY `InstructorID` (`InstructorID`)
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

CREATE TABLE IF NOT EXISTS `SLOs` (
  `SLOID` int(2) NOT NULL,
  `SLOName` varchar(20) NOT NULL,
  PRIMARY KEY (`SLOID`),
  UNIQUE KEY `SLOID` (`SLOID`)
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

-- --------------------------------------------------------

--
-- Table structure for table `Student`
--

CREATE TABLE IF NOT EXISTS `Student` (
  `Student_ID` int(32) NOT NULL,
  `Student_Name` varchar(255) NOT NULL,
  `Student_Major` varchar(255) NOT NULL,
  `Student_Year` varchar(32) NOT NULL,
  `Student_Semester` varchar(32) NOT NULL,
  `Student_Date` datetime DEFAULT NULL,
  `Student_Photo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Student_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Student`
--

INSERT INTO `Student` (`Student_ID`, `Student_Name`, `Student_Major`, `Student_Year`, `Student_Semester`, `Student_Date`, `Student_Photo`) VALUES
(10101, 'Jason Man', 'Chemistry', '', 'Fall', '2017-10-23 05:32:52', NULL),
(20202, 'yummy 2', 'Chemistry', '2014', 'Fall', '2017-10-23 21:52:33', 'studentPhotos/download.jpeg'),
(101010, 'Sun Man', 'Chemistry', 'Freshman', 'Summer', '2017-10-23 05:19:31', NULL),
(111111, 'Sam Smith', 'Mathematics', 'Sophomore', 'Summer', '2017-10-11 22:56:17', NULL),
(112233, 'George Lucas', 'Chemistry', 'Freshman', 'Fall', '2017-10-20 18:08:07', NULL),
(121212, 'hey there', 'Chemistry', 'Freshman', 'Fall', '2017-10-20 20:36:27', NULL),
(123456, 'John Nicholson', 'Biochemistry', 'Senior', 'Spring', '2017-10-10 19:04:19', NULL),
(212121, 'Blah', 'Chemistry', '2014', 'Fall', '2017-10-23 21:43:19', 'studentPhotos/download.jpeg'),
(222222, 'Jon Snow', 'Biochemistry', 'Senior', 'Fall', '2017-10-11 00:00:00', NULL),
(223344, 'Sunglass Sam', 'Chemistry', 'Senior', 'Fall', '2017-10-21 20:29:06', NULL),
(232323, 'hey hey', 'Chemistry', '2014', 'Fall', '2017-10-23 21:23:16', NULL),
(323232, 'Joe Smith', 'Chemistry', 'Freshman', 'Fall', '2017-10-11 22:59:06', NULL),
(332211, 'Harvey Daniels', 'Chemistry', 'Junior', 'Fall', '2017-10-20 20:34:15', NULL),
(333333, 'yummy', 'Chemistry', '2014', 'Fall', '2017-10-23 21:48:13', 'studentPhotos/download.jpeg'),
(373827, 'Matt Simons', 'Biochemistry', 'Freshman', 'Fall', '2017-10-11 22:53:46', NULL),
(443322, 'Sam Sunglasses', 'Biochemistry', 'Junior', 'Spring', '2017-10-21 20:31:31', NULL),
(525252, 'Nick Jonson', 'Chemistry', '2016', 'Fall', '2017-10-23 21:31:24', NULL),
(555555, 'Nick Jonson', 'Chemistry', '2016', 'Fall', '2017-10-23 05:39:36', NULL),
(626262, 'Gary Jones', 'Chemistry', '2014', 'Fall', '2017-10-23 21:37:31', ''),
(666666, 'Nathan Man', 'Biochemistry', 'Senior', 'Spring', '2017-10-21 20:33:46', NULL),
(747474, 'yummy3', 'Chemistry', '2014', 'Fall', '2017-10-23 21:59:44', 'studentPhotos/download.jpeg'),
(767676, 'hey there', 'Chemistry', '2014', 'Fall', '2017-10-23 21:25:23', NULL),
(787878, 'hey hey', 'Chemistry', '2014', 'Fall', '2017-10-23 21:29:15', NULL),
(878787, 'hey hey', 'Chemistry', '2014', 'Fall', '2017-10-23 21:30:22', NULL),
(888888, 'jan jan', 'Chemistry', '2014', 'Fall', '2017-10-23 18:34:25', NULL),
(999999, 'Huckle Finn', 'Chemistry', '2017', 'Fall', '2017-10-23 05:43:19', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(1, 'johnfnicholson123@gmail.com', '921f1def9069b154fe0fd0a5424585ba');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
