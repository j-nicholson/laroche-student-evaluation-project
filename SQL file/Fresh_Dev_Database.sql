-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 08, 2017 at 10:54 PM
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
-- Table structure for table `Course_Assessment_Form_Section_1`
--

CREATE TABLE IF NOT EXISTS `Course_Assessment_Form_Section_1` (
  `CAFS1ID` varchar(255) NOT NULL,
  `NewSLOs` longblob NOT NULL,
  `Upgrades` longblob NOT NULL,
  `Enhancements` longblob NOT NULL,
  `Modifications` longblob NOT NULL,
  `Other` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Course_Assessment_Form_Section_1`
--

INSERT INTO `Course_Assessment_Form_Section_1` (`CAFS1ID`, `NewSLOs`, `Upgrades`, `Enhancements`, `Modifications`, `Other`) VALUES
('CHEM2016-SPR2017', 0x37363538373635383736, 0x3736383736383937363839, 0x3738363938373639383736, 0x37363938373639383736, 0x38373039383736303837363837),
('CSCI4098-SPR2017', 0x6666647361, 0x66647361, 0x66647361, 0x66647361, 0x66647361);

-- --------------------------------------------------------

--
-- Table structure for table `Course_Assessment_Form_Section_2`
--

CREATE TABLE IF NOT EXISTS `Course_Assessment_Form_Section_2` (
  `ChemConcept` longblob NOT NULL,
  `ObjectivesContent` longblob NOT NULL,
  `GeneralComments` longblob NOT NULL,
  `percentA` varchar(25) NOT NULL,
  `percentB` varchar(25) NOT NULL,
  `percentC` varchar(25) NOT NULL,
  `percentD` varchar(25) NOT NULL,
  `percentF` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Course_Assessment_Form_Section_2`
--

INSERT INTO `Course_Assessment_Form_Section_2` (`ChemConcept`, `ObjectivesContent`, `GeneralComments`, `percentA`, `percentB`, `percentC`, `percentD`, `percentF`) VALUES
(0x383039373630393837363938, 0x303938373637363738363839, 0x383739303736383736393837, '1', '1', '1', '1', '1'),
(0x6664, 0x7666647361, 0x66647361, '1', '1', '1', '1', '1'),
(0x6664, 0x6664666461, 0x66647361, '1', '2', '', '2', '');

-- --------------------------------------------------------

--
-- Table structure for table `Course_Assessment_Form_Section_3`
--

CREATE TABLE IF NOT EXISTS `Course_Assessment_Form_Section_3` (
  `CoursePreReq` longblob NOT NULL,
  `Textbooks` longblob NOT NULL,
  `StudentAsse` longblob NOT NULL,
  `Pedagogy` longblob NOT NULL,
  `Faculty` longblob NOT NULL,
  `MinorCapitalEq` longblob NOT NULL,
  `Other` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Course_Assessment_Form_Section_3`
--

INSERT INTO `Course_Assessment_Form_Section_3` (`CoursePreReq`, `Textbooks`, `StudentAsse`, `Pedagogy`, `Faculty`, `MinorCapitalEq`, `Other`) VALUES
(0x343336353334353633343536, 0x34353634353633343536, 0x34353336343536333435, 0x343536333435363435, 0x333435363435363435, 0x343335363435363334, 0x343536333435363334),
(0x66646173, 0x66646173, 0x66646173, 0x66647361, 0x66646173, '', ''),
(0x66646173, 0x66647361, 0x66647361, 0x66647361, '', 0x66646173, 0x66647361);

-- --------------------------------------------------------

--
-- Table structure for table `Course_SLOs`
--

CREATE TABLE IF NOT EXISTS `Course_SLOs` (
  `CourseSLOID` int(6) NOT NULL,
  `CourseID` varchar(10) NOT NULL,
  `SLO1` varchar(255) DEFAULT NULL,
  `SLO2` varchar(255) DEFAULT NULL,
  `SLO3` varchar(255) DEFAULT NULL,
  `SLO4` varchar(255) DEFAULT NULL,
  `SLO5` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`CourseSLOID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Course_SLOs`
--

INSERT INTO `Course_SLOs` (`CourseSLOID`, `CourseID`, `SLO1`, `SLO2`, `SLO3`, `SLO4`, `SLO5`) VALUES
(213574, 'CHEM2016', 'false', 'true', 'true', 'true', 'false'),
(225564, '04', 'false', 'true', 'true', 'false', 'false'),
(247549, 'MATH2050', 'false', 'true', 'true', 'false', 'false'),
(387684, '', 'false', 'true', 'true', 'false', 'false'),
(401212, 'CHEM2016', 'false', 'true', 'true', 'false', 'false'),
(498443, 'MATH2050', 'true', 'true', 'false', 'false', 'false'),
(601959, 'MATH2050', 'false', 'false', 'true', 'true', 'false'),
(608109, 'CSCI4098', 'false', 'true', 'true', 'false', 'false'),
(621863, 'CSCI4098', 'false', 'true', 'true', 'false', 'false'),
(772739, 'MATH2050', 'true', 'true', 'false', 'false', 'false'),
(835938, 'CSCI4098', 'false', 'true', 'true', 'false', 'false'),
(837367, '', 'true', 'true', 'false', 'false', 'false'),
(928525, 'CSCI4098', 'false', 'true', 'true', 'false', 'false');

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
  `Student_Notes` longtext NOT NULL,
  `Student_Math_Grade` varchar(10) DEFAULT NULL,
  `Student_Athletics` varchar(255) DEFAULT NULL,
  `Student_Housing_Status` varchar(255) DEFAULT NULL,
  `Student_Honors` varchar(255) DEFAULT NULL,
  `International_Student` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Student_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Student`
--

INSERT INTO `Student` (`Student_ID`, `Student_Name`, `Student_Major`, `Student_Year`, `Student_Semester`, `Student_Date`, `Student_Photo`, `Student_Notes`, `Student_Math_Grade`, `Student_Athletics`, `Student_Housing_Status`, `Student_Honors`, `International_Student`) VALUES
(111111, 'Abdullah Almusallam', 'CS', '2016', 'Summer', '2017-11-06 18:00:51', '', 'This is Abdullah and johnny', NULL, NULL, NULL, NULL, NULL),
(112211, 'test100', 'CS', '2016', 'Summer', '2017-11-06 18:39:56', '', '', NULL, NULL, NULL, NULL, NULL),
(123456, 'test2', 'CS', '2015', 'Spring', '2017-11-08 18:33:36', '', 'fsdafsdfsa', 'A', 'no', 'resident', 'No', 'No'),
(131213, 'test3', 'Biochemistry', '2016', 'Summer', '2017-11-06 03:16:59', 'Controller/Independent-Learning-Record-Controllers/Student-Photos/test3/chemistry_logo.png', 'New notes', NULL, NULL, NULL, NULL, NULL),
(131221, 'test100', 'Biochemistry', '2014', 'Fall', '2017-11-06 02:20:07', '', 'kgldfgdfgdf', NULL, NULL, NULL, NULL, NULL),
(787878, 'Hey THERE', 'Math_stuff', '2014', 'Fall', '2017-11-08 16:58:06', '', 'hey there', NULL, NULL, NULL, NULL, NULL),
(888888, 'Johnny Nicholson', 'Chemistry', '2014', 'Fall', '2017-11-06 19:20:53', '', '', NULL, NULL, NULL, NULL, NULL),
(898989, 'Mr Smith', 'Mathematics', '2017', 'Summer', '2017-11-08 22:12:59', '', 'Loves to run', 'C', 'Cross Country', 'resident', 'No', 'Sweden'),
(989898, 'Some guy', 'Computer_Science', '2016', 'Summer', '2017-11-08 22:01:13', '', 'hi there', 'B', 'no', 'resident', 'Yes', 'Pakistan'),
(999999, 'Hey there', 'Chemistry', '2014', 'Fall', '2017-11-06 19:23:57', '', '', NULL, NULL, NULL, NULL, NULL);

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
(3, 'Abdullah@test.com', '6afd8707350fc31ca57a204757757a71'),
(4, 'test@test.com', 'f5183be9aa9e17875c6994340f0c738c'),
(5, 'johnfnicholson123@gmail.com', '0210d7b9161eabe72bc4e5789c6243f8');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
