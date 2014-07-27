-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2014 at 07:13 AM
-- Server version: 5.5.34
-- PHP Version: 5.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bharti`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(40) NOT NULL DEFAULT 'NOT NULL',
  `password` varchar(40) NOT NULL DEFAULT 'NOT NULL',
  `photo` varchar(40) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `username`, `password`, `photo`) VALUES
(1, 'kundan', 'kundan', '');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE IF NOT EXISTS `attendance` (
  `sid` int(11) NOT NULL,
  `tname` varchar(40) NOT NULL,
  `d1` int(11) NOT NULL,
  `d2` int(11) NOT NULL,
  `d3` int(11) NOT NULL,
  `d4` int(11) NOT NULL,
  `d5` int(11) NOT NULL,
  `d6` int(11) NOT NULL,
  `d7` int(11) NOT NULL,
  `d8` int(11) NOT NULL,
  `d9` int(11) NOT NULL,
  `d10` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`sid`, `tname`, `d1`, `d2`, `d3`, `d4`, `d5`, `d6`, `d7`, `d8`, `d9`, `d10`) VALUES
(1, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `cc`
--

CREATE TABLE IF NOT EXISTS `cc` (
  `ccid` int(11) NOT NULL,
  `username` varchar(11) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `schoolid` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `yoe` varchar(100) NOT NULL,
  `doj` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  PRIMARY KEY (`ccid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cc`
--

INSERT INTO `cc` (`ccid`, `username`, `password`, `name`, `schoolid`, `gender`, `yoe`, `doj`, `type`) VALUES
(0, 'aashita', 'aashita', 'aashita', '123', 'female', '5', '12/12/12', 'primary'),
(1, 'kundan', 'kundan', 'kundan', 'kundan', 'kundan', 'kundan', 'kundan', 'kundan');

-- --------------------------------------------------------

--
-- Table structure for table `ccfb`
--

CREATE TABLE IF NOT EXISTS `ccfb` (
  `teacher_id` int(11) NOT NULL,
  `date` varchar(200) NOT NULL,
  `feedback` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE IF NOT EXISTS `school` (
  `schoolid` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `location` int(11) NOT NULL,
  PRIMARY KEY (`schoolid`),
  KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE IF NOT EXISTS `session` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `session` varchar(40) NOT NULL,
  `teacher` varchar(40) NOT NULL,
  `status` varchar(40) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `session`
--

INSERT INTO `session` (`sid`, `session`, `teacher`, `status`) VALUES
(1, 'Session_kundan', '', 'start'),
(2, 'Session_kundan', '', 'start'),
(3, 'Session_kundan', '', 'start');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
  `teid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(40) NOT NULL DEFAULT 'admin',
  `password` varchar(40) NOT NULL DEFAULT 'admin',
  `name` varchar(40) NOT NULL DEFAULT 'NOT NULL',
  `school` varchar(11) NOT NULL,
  `gender` varchar(10) NOT NULL DEFAULT 'NOT NULL',
  `edu` varchar(100) NOT NULL DEFAULT 'NOT NULL',
  `yoe` int(11) NOT NULL,
  `doj` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `subjects` varchar(100) NOT NULL,
  `tskt` varchar(100) NOT NULL,
  `observation` varchar(100) NOT NULL,
  `training_attended` varchar(100) NOT NULL,
  `ccid` int(11) NOT NULL,
  `contact` int(11) NOT NULL,
  PRIMARY KEY (`teid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teid`, `username`, `password`, `name`, `school`, `gender`, `edu`, `yoe`, `doj`, `type`, `subjects`, `tskt`, `observation`, `training_attended`, `ccid`, `contact`) VALUES
(1, 'ashita', 'ashita', 'ashita', 'bit', 'female', 'computers', 5, '12/12/12', 'primary', 'computers', '10', '10', '2', 1, 2147483647),
(2, 'kundan', 'kundan', 'NOT NULL', '', 'NOT NULL', 'NOT NULL', 0, '', '', '', '', '', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `teacherfb`
--

CREATE TABLE IF NOT EXISTS `teacherfb` (
  `tfb` int(11) NOT NULL AUTO_INCREMENT,
  `teid` varchar(20) NOT NULL,
  `plan` varchar(20) NOT NULL,
  `closure` varchar(20) NOT NULL,
  `ques` varchar(20) NOT NULL,
  `skill` varchar(20) NOT NULL,
  `concep` varchar(20) NOT NULL,
  `class` varchar(20) NOT NULL,
  `blackboard` varchar(20) NOT NULL,
  `teach` varchar(20) NOT NULL,
  `concept` varchar(20) NOT NULL,
  `effective` varchar(20) NOT NULL,
  `improve` varchar(160) NOT NULL,
  PRIMARY KEY (`tfb`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `trainer`
--

CREATE TABLE IF NOT EXISTS `trainer` (
  `trid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `name` varchar(40) NOT NULL DEFAULT 'NOT NULL',
  `loc` varchar(40) NOT NULL DEFAULT 'NOT NULL',
  `no_of_training_done` int(11) NOT NULL,
  `no_of_schools_visited` int(11) NOT NULL,
  `no_of_teachers_visited` int(11) NOT NULL,
  PRIMARY KEY (`trid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `trainer`
--

INSERT INTO `trainer` (`trid`, `username`, `password`, `name`, `loc`, `no_of_training_done`, `no_of_schools_visited`, `no_of_teachers_visited`) VALUES
(1, 'kundan', 'kundan', 'kundan', 'jamshedpur', 5, 6, 11);

-- --------------------------------------------------------

--
-- Table structure for table `trainerfb`
--

CREATE TABLE IF NOT EXISTS `trainerfb` (
  `trfb` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(10) NOT NULL,
  `session` varchar(10) NOT NULL,
  `trainer` varchar(10) NOT NULL,
  `location` varchar(10) NOT NULL,
  `content` varchar(10) NOT NULL,
  `activity` varchar(10) NOT NULL,
  `support` varchar(10) NOT NULL,
  `question` varchar(10) NOT NULL,
  `present` varchar(10) NOT NULL,
  `pace` varchar(10) NOT NULL,
  `learn` varchar(10) NOT NULL,
  `keyy` varchar(200) NOT NULL,
  `suggest` varchar(200) NOT NULL,
  PRIMARY KEY (`trfb`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
