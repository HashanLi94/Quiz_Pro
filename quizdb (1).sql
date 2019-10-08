-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2019 at 02:47 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quizdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `aid` int(11) NOT NULL,
  `answer` varchar(100) NOT NULL,
  `ans_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`aid`, `answer`, `ans_id`) VALUES
(1, '6', 1),
(2, '7', 1),
(3, '8', 1),
(4, '9', 1),
(5, 'Lynux', 2),
(6, 'MS DOS', 2),
(7, 'Windows XP', 2),
(8, 'Process Control', 2),
(9, 'FTP', 3),
(10, 'SMTP', 3),
(11, 'TELENT', 3),
(12, 'SNMP', 3),
(13, 'Web browser', 4),
(14, 'Web server', 4),
(15, 'Web matrix', 4),
(16, 'None of the mentioned', 4),
(17, '_examveda', 5),
(18, '1examveda', 5),
(19, 'exam_veda', 5),
(20, 'examveda1', 5);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `qid` int(11) NOT NULL,
  `question` varchar(100) NOT NULL,
  `ans_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`qid`, `question`, `ans_id`) VALUES
(1, 'How many primitive data types are there in java?', 3),
(2, 'Which of the following is an example of a real time operating system?', 8),
(3, 'Which protocol provides e-mail facility among different hosts?', 10),
(4, 'Which of the following is used to read a HTML page and render it?', 13),
(5, 'Which one of the following is not a valid identifier in C program?', 18);

-- --------------------------------------------------------

--
-- Table structure for table `quiztb`
--

CREATE TABLE `quiztb` (
  `ID` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `u_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact_no` varchar(50) NOT NULL,
  `new_password` varchar(50) NOT NULL,
  `retype_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiztb`
--

INSERT INTO `quiztb` (`ID`, `first_name`, `last_name`, `u_name`, `email`, `contact_no`, `new_password`, `retype_password`) VALUES
(4, 'nadeesha', 'buddhini', 'buu', 'hknadeesha1995buddhi@gmail.com', '0705159937', 'buu1995', 'buu1995'),
(6, 'lathika', 'ehaliyagoda', 'kumari', 'kumari@gmail.com', '0715673900', '5678', '5678'),
(7, 'achini', 'upeksha', 'achii', 'achini2005@gmail.com', '0715673900', '2345', '2345'),
(8, 'dimini', 'disara', 'dimii', 'dimini76@gmail.com', '0713456789', 'dimini', 'dimini');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `quiztb`
--
ALTER TABLE `quiztb`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `qid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `quiztb`
--
ALTER TABLE `quiztb`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
