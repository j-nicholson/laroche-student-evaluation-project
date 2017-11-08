-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 07, 2017 at 10:03 PM
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

-- --------------------------------------------------------

--
-- Table structure for table `Course_Assessment_Form_Section_3`
--

CREATE TABLE `Course_Assessment_Form_Section_3` (
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
(0x343336353334353633343536, 0x34353634353633343536, 0x34353336343536333435, 0x343536333435363435, 0x333435363435363435, 0x343335363435363334, 0x343536333435363334);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
