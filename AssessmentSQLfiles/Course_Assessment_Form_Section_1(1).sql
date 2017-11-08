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
-- Table structure for table `Course_Assessment_Form_Section_1`
--

CREATE TABLE `Course_Assessment_Form_Section_1` (
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
('CHEM2016-SPR2017', 0x37363538373635383736, 0x3736383736383937363839, 0x3738363938373639383736, 0x37363938373639383736, 0x38373039383736303837363837);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
