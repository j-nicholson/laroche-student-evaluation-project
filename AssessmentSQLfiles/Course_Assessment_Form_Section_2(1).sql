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
-- Table structure for table `Course_Assessment_Form_Section_2`
--

CREATE TABLE `Course_Assessment_Form_Section_2` (
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
(0x383039373630393837363938, 0x303938373637363738363839, 0x383739303736383736393837, '1', '1', '1', '1', '1');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
