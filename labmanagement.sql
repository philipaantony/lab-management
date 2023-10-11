-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 27, 2021 at 07:06 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `labmanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `allocation`
--

CREATE TABLE IF NOT EXISTS `allocation` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `stmid` varchar(40) NOT NULL,
  `sid` varchar(50) NOT NULL,
  `allocation_date` varchar(50) NOT NULL,
  `allocation_time` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `logintime` varchar(60) NOT NULL,
  `logouttime` varchar(60) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `allocation`
--

INSERT INTO `allocation` (`aid`, `stmid`, `sid`, `allocation_date`, `allocation_time`, `status`, `logintime`, `logouttime`) VALUES
(6, 'L2', '170021096789', '2021/09/22', '02:50:10pm', 'approved', '02:50:41pm', '02:55:04pm'),
(7, '10', '1234', '2021/11/26', '09:35:29pm', 'approved', '', ''),
(8, '9', '123456', '2021/11/26', '09:43:41pm', 'approved', '10:47:42pm', '0'),
(9, '9', '123456', '2021/11/26', '09:44:41pm', 'approved', '', ''),
(12, '10', '123456', '2021/11/27', '09:13:45am', 'approved', '09:14:06am', '0');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `usertype` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `usertype`, `status`) VALUES
('170021096789', '2021-09-22', 'student', 'approved'),
('170021096789', '2021-09-22', 'student', 'approved'),
('admin@gmail.com', 'admin', 'admin', 'admin'),
('123123', '2021-11-27', 'student', 'approved'),
('123123', '2021-11-27', 'student', 'approved'),
('123456', '2021-11-27', 'student', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE IF NOT EXISTS `request` (
  `rid` int(11) NOT NULL AUTO_INCREMENT,
  `rollno` varchar(40) NOT NULL,
  `allocate` varchar(60) NOT NULL,
  `sid` int(11) NOT NULL,
  `rdate` varchar(60) NOT NULL,
  PRIMARY KEY (`rid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`rid`, `rollno`, `allocate`, `sid`, `rdate`) VALUES
(1, '', '', 0, ''),
(2, '170021096789', '', 1, ''),
(3, '170021096789', 'requested', 1, ''),
(4, '170021096789', 'allocated', 1, '2021/09/22'),
(5, '', 'allocated', 0, '2021/11/26'),
(6, '', 'allocated', 0, '2021/11/26'),
(7, '123456', 'allocated', 4, '2021/11/26'),
(8, '123456', 'requested', 4, '2021/11/26');

-- --------------------------------------------------------

--
-- Table structure for table `specification`
--

CREATE TABLE IF NOT EXISTS `specification` (
  `spid` int(11) NOT NULL AUTO_INCREMENT,
  `stmid` int(11) NOT NULL,
  `specification` varchar(100) NOT NULL,
  PRIMARY KEY (`spid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `specification`
--

INSERT INTO `specification` (`spid`, `stmid`, `specification`) VALUES
(1, 1, 'android studio'),
(2, 1, 'visual studio code'),
(3, 1, 'php myadmin'),
(4, 1, 'wamp'),
(7, 1, 'python 3.9.7'),
(9, 3, 'keyboard');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `rollno` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phoneno` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  `batch` varchar(50) NOT NULL,
  `semid` int(11) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sid`, `name`, `address`, `rollno`, `dob`, `gender`, `email`, `phoneno`, `course`, `batch`, `semid`) VALUES
(1, 'amal', 'as', 't2', '2021-09-22', 'male', 'amal@gmail.com', '998877665456', 'computer science', 'BCA', 1),
(3, 'arjun', 'arjun ', 't2', '2021-11-27', 'male', 'arjun@gmail.com', '99999', 'bsc', 'Third year', 0),
(4, 'nimisha', 'address', '123456', '2021-11-27', 'Female', 'nimmi@gmail.com', '8888888888', 'Bsc', 'Second year', 0);

-- --------------------------------------------------------

--
-- Table structure for table `system`
--

CREATE TABLE IF NOT EXISTS `system` (
  `stmid` int(11) NOT NULL AUTO_INCREMENT,
  `system` varchar(50) NOT NULL,
  `os` varchar(50) NOT NULL,
  PRIMARY KEY (`stmid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `system`
--

INSERT INTO `system` (`stmid`, `system`, `os`) VALUES
(1, 'L1', 'Windows'),
(3, 'L2', 'windows'),
(5, '10', 'linux');
