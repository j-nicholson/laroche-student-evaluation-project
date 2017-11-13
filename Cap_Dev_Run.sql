-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 13, 2017 at 05:52 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

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
-- Table structure for table `MiscNotes`
--

CREATE TABLE `MiscNotes` (
  `StudentID` int(11) NOT NULL,
  `Misc_Notes` longtext NOT NULL,
  `User_Logged_In` varchar(20) NOT NULL,
  `Last_Time_Edited` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Student`
--

CREATE TABLE `Student` (
  `Student_ID` int(32) NOT NULL,
  `Student_Name` varchar(255) NOT NULL,
  `Student_Major` varchar(255) NOT NULL,
  `Student_Year` varchar(32) NOT NULL,
  `Student_Semester` varchar(32) NOT NULL,
  `Student_Photo` longblob,
  `Student_Date` datetime DEFAULT NULL,
  `Student_Math_Grade` varchar(2) NOT NULL,
  `Student_Athletics` varchar(4) NOT NULL,
  `Student_Housing_Status` varchar(9) NOT NULL,
  `Student_Honors` varchar(4) NOT NULL,
  `International_Student` varchar(4) NOT NULL,
  `Student_Notes` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Student`
--

INSERT INTO `Student` (`Student_ID`, `Student_Name`, `Student_Major`, `Student_Year`, `Student_Semester`, `Student_Photo`, `Student_Date`, `Student_Math_Grade`, `Student_Athletics`, `Student_Housing_Status`, `Student_Honors`, `International_Student`, `Student_Notes`) VALUES
(111111, 'Sam Smith', 'Mathematics', 'Sophomore', 'Summer', '', '2017-10-11 22:56:17', '', '', '', '', '', ''),
(121111, 'adfadfawe', 'Chemistry', '2014', 'Fall', '', '2017-11-13 01:10:09', 'A', 'no', 'commuter', 'No', 'No', ''),
(121267, 'FCAWDFCQW', 'Chemistry', '2014', 'Fall', '', '2017-11-13 01:32:22', 'A', 'LACR', 'commuter', 'No', 'No', ''),
(122122, 'johnisme', 'Chemistry', '2014', 'Fall', '', '2017-11-08 17:05:07', '', '', '', '', '', 'heuymdbhfnfhfhjf'),
(122321, 'sdh hwd', 'Chemistry', '2014', 'Fall', '', '2017-11-08 17:24:05', 'A', 'no', '', '', '', 'dbchdsbhcbdhcgd'),
(123232, 'agfdsfgarf', 'Chemistry', '2014', 'Fall', '', '2017-11-13 01:08:23', 'A-', 'no', 'commuter', 'No', 'No', ''),
(123322, 'hemang', 'Chemistry', '2014', 'Fall', '', '2017-11-08 17:04:37', '', '', '', '', '', 'hhhhhh'),
(123445, 'dFDASD', 'Chemistry', '2014', 'Fall', '', '2017-11-13 01:03:57', 'A', 'no', 'resident', 'Yes', 'No', ''),
(123456, 'John Nicholson', 'Biochemistry', 'Senior', 'Spring', '', '2017-10-10 19:04:19', '', '', '', '', '', ''),
(222222, 'Jon Snow', 'Biochemistry', 'Senior', 'Fall', '', '2017-10-11 00:00:00', '', '', '', '', '', ''),
(234233, 'efEFCW', 'Biochemistry', '2014', 'Fall', '', '2017-11-13 01:31:36', 'A', 'no', 'commuter', 'No', 'No', ''),
(323232, 'Joe Smith', 'Chemistry', 'Freshman', 'Fall', '', '2017-10-11 22:59:06', '', '', '', '', '', ''),
(373827, 'Matt Simons', 'Biochemistry', 'Freshman', 'Fall', '', '2017-10-11 22:53:46', '', '', '', '', '', ''),
(444444, 'henjfbe', 'Biochemistry', '2015', 'Spring', '', '2017-11-13 01:05:17', 'B+', 'no', 'resident', 'Yes', 'No', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Student`
--
ALTER TABLE `Student`
  ADD PRIMARY KEY (`Student_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
