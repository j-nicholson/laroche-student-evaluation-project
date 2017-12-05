-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 01, 2017 at 09:39 PM
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
CREATE DATABASE IF NOT EXISTS `Cap_Dev_Run` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `Cap_Dev_Run`;

-- --------------------------------------------------------

--
-- Table structure for table `Class`
--

DROP TABLE IF EXISTS `Class`;
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

DROP TABLE IF EXISTS `Course`;
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

DROP TABLE IF EXISTS `Course_Assessment_Form_Section_1`;
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
('CSCI4098-SPR2017', 0x6666647361, 0x66647361, 0x66647361, 0x66647361, 0x66647361),
('CSCI4098-SPR2017', '', '', '', '', ''),
('MATH2050-SPR2017', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `Course_Assessment_Form_Section_2`
--

DROP TABLE IF EXISTS `Course_Assessment_Form_Section_2`;
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
(0x6664, 0x6664666461, 0x66647361, '1', '2', '', '2', ''),
('', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `Course_Assessment_Form_Section_3`
--

DROP TABLE IF EXISTS `Course_Assessment_Form_Section_3`;
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
(0x66646173, 0x66647361, 0x66647361, 0x66647361, '', 0x66646173, 0x66647361),
('', '', '', '', '', '', ''),
('', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `Course_Assessment_Form_Section_4`
--

DROP TABLE IF EXISTS `Course_Assessment_Form_Section_4`;
CREATE TABLE IF NOT EXISTS `Course_Assessment_Form_Section_4` (
  `Sec4Num` int(20) NOT NULL,
  `IDNum` int(20) NOT NULL,
  `LearningIssue` varchar(255) NOT NULL,
  `ExtentInstructor` longblob NOT NULL,
  `InstructorRecommendations` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Course_Assessment_Form_Section_5`
--

DROP TABLE IF EXISTS `Course_Assessment_Form_Section_5`;
CREATE TABLE IF NOT EXISTS `Course_Assessment_Form_Section_5` (
  `Sec5Num` int(20) NOT NULL,
  `IDNum` int(20) NOT NULL,
  `Grade` varchar(1) NOT NULL,
  `LearningIssue` varchar(255) NOT NULL,
  `ExtentInstructorInt` longblob NOT NULL,
  `InstructorEvalRecommendations` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Course_SLOs`
--

DROP TABLE IF EXISTS `Course_SLOs`;
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
(649302, 'CSCI4098', 'false', 'true', 'true', 'false', 'false'),
(705848, 'MATH2050', 'false', 'true', 'true', 'false', 'false'),
(772739, 'MATH2050', 'true', 'true', 'false', 'false', 'false'),
(835938, 'CSCI4098', 'false', 'true', 'true', 'false', 'false'),
(837367, '', 'true', 'true', 'false', 'false', 'false'),
(928525, 'CSCI4098', 'false', 'true', 'true', 'false', 'false');

-- --------------------------------------------------------

--
-- Table structure for table `Instructor`
--

DROP TABLE IF EXISTS `Instructor`;
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
-- Table structure for table `Misc_Notes`
--

DROP TABLE IF EXISTS `Misc_Notes`;
CREATE TABLE IF NOT EXISTS `Misc_Notes` (
  `Misc_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Misc_Text` text NOT NULL,
  `Misc_Date` datetime NOT NULL,
  `Misc_Student_ID` int(11) DEFAULT NULL,
  `Misc_Author_Name` varchar(255) NOT NULL,
  PRIMARY KEY (`Misc_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Misc_Notes`
--

INSERT INTO `Misc_Notes` (`Misc_ID`, `Misc_Text`, `Misc_Date`, `Misc_Student_ID`, `Misc_Author_Name`) VALUES
(1, 'fsafdsafasdf', '2017-11-14 23:22:45', 123456, ''),
(2, 'fdsafasdf', '2017-11-15 15:36:31', 123456, ''),
(3, 'Some notes about this student ID', '2017-11-17 15:47:56', 654321, ''),
(4, 'hey there', '2017-11-17 16:15:06', 131313, ''),
(5, 'fsa', '2017-11-19 18:48:55', 123456, ''),
(6, 'A new note has been added', '2017-11-19 22:11:23', 123456, ''),
(7, 'New note', '2017-11-19 22:15:58', 654321, ''),
(8, 'latest note', '2017-11-19 22:16:26', 654321, ''),
(9, 'New entry', '2017-11-20 21:36:49', 123456, ''),
(10, 'Another new entry', '2017-11-20 21:37:12', 123456, ''),
(11, 'New stuff', '2017-11-20 21:38:32', 123456, ''),
(12, 'This note was added with the most recent post at the top of the list.', '2017-11-26 02:04:39', 123456, ''),
(13, 'This is a new post', '2017-11-27 21:38:35', 654321, ''),
(14, 'The student has improved on test scores.', '2017-11-29 15:58:31', 123456, ''),
(15, 'This student got an A on his final.', '2017-11-29 22:20:48', 121212, ''),
(16, 'This student is awesome.', '2017-11-29 22:21:51', 545454, ''),
(17, 'This student is now less awesome.', '2017-11-29 22:22:40', 545454, ''),
(18, 'This student received an A on their paper.', '2017-12-01 20:54:49', 123456, ''),
(19, 'This student got a B.', '2017-12-01 20:58:47', 123456, 'johnfnicholson123@gmail.com'),
(20, 'This student is awesome.', '2017-12-01 21:29:21', 123456, 'johnfnicholson123@gmail.com'),
(21, 'New account', '2017-12-01 21:32:25', 123456, 'newaccount@new.com'),
(22, 'new stuff from new account', '2017-12-01 21:32:49', 654321, 'newaccount@new.com');

-- --------------------------------------------------------

--
-- Table structure for table `SLOs`
--

DROP TABLE IF EXISTS `SLOs`;
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

DROP TABLE IF EXISTS `Student`;
CREATE TABLE IF NOT EXISTS `Student` (
  `Student_ID` int(32) NOT NULL,
  `Student_Name` varchar(255) NOT NULL,
  `Student_Major` varchar(255) NOT NULL,
  `Student_Year` varchar(32) NOT NULL,
  `Student_Semester` varchar(32) NOT NULL,
  `Student_Date` datetime DEFAULT NULL,
  `Student_Photo` varchar(255) DEFAULT NULL,
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

INSERT INTO `Student` (`Student_ID`, `Student_Name`, `Student_Major`, `Student_Year`, `Student_Semester`, `Student_Date`, `Student_Photo`, `Student_Math_Grade`, `Student_Athletics`, `Student_Housing_Status`, `Student_Honors`, `International_Student`) VALUES
(121212, 'New Guy', 'Chemistry', '2014', 'Fall', '2017-11-29 22:20:29', '', 'A', 'no', 'commuter', 'No', 'No'),
(123456, 'Johnny Nicholson', 'Computer_Science', '2017', 'Spring', '2017-11-15 15:35:14', '', 'A', 'no', 'resident', 'No', 'No'),
(323232, 'New Tester', 'Chemistry', '2014', 'Fall', '2017-11-14 22:49:48', '', 'A', 'fdsf', 'commuter', 'No', 'No'),
(545454, 'Steven Foster', 'Chemistry', '2014', 'Fall', '2017-11-29 22:21:32', '', 'A', 'no', 'commuter', 'No', 'Cross Country'),
(555555, 'New Guy', 'Chemistry', '2014', 'Fall', '2017-11-14 20:27:00', '', 'A', 'no', 'commuter', 'No', 'No'),
(654321, 'Andrew Leach', 'Computer_Science', '2017', 'Summer', '2017-11-17 16:08:49', '', 'B-', 'Cross Country', 'resident', 'No', 'Japan'),
(666666, 'New Guy', 'Chemistry', '2014', 'Fall', '2017-11-14 20:28:36', '', 'A', 'no', 'commuter', 'No', 'No'),
(777777, 'TEST', 'Chemistry', '2014', 'Fall', '2017-11-14 20:46:10', '', 'A', 'Football', 'commuter', 'No', 'Tiwan'),
(989898, 'John Nich', 'Chemistry', '2014', 'Fall', '2017-11-15 17:20:29', '', 'B-', 'no', 'resident', 'No', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(3, 'Abdullah@test.com', '6afd8707350fc31ca57a204757757a71'),
(4, 'test@test.com', 'f5183be9aa9e17875c6994340f0c738c'),
(5, 'johnfnicholson123@gmail.com', '0210d7b9161eabe72bc4e5789c6243f8'),
(6, 'anotherdude@test.com', '220f06a64abb879538c7a805e3f0d116'),
(7, 'newaccount@new.com', '909d9ac85cd90b022644c495a6d7d181');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
