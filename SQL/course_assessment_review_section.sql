-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2017 at 05:03 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cap_dev_run`
--

-- --------------------------------------------------------

--
-- Table structure for table `course_assessment_review_section`
--

CREATE TABLE `course_assessment_review_section` (
  `ReviewID` int(11) NOT NULL,
  `DepReview` longblob NOT NULL,
  `DepReviewer` longblob NOT NULL,
  `NewActPlan` longblob NOT NULL,
  `NewBudgItem` longblob NOT NULL,
  `DivChairReview` longblob NOT NULL,
  `DivChairSig` longblob NOT NULL,
  `DivChairRevDate` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course_assessment_review_section`
--
ALTER TABLE `course_assessment_review_section`
  ADD PRIMARY KEY (`ReviewID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
