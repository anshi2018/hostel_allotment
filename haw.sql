-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2015 at 08:36 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `haw`
--

-- --------------------------------------------------------

--
-- Table structure for table `register2`
--

CREATE TABLE IF NOT EXISTS `register2` (
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `emailid` varchar(100) NOT NULL,
  `passwd` varchar(100) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `year` varchar(10) NOT NULL,
  `regno` bigint(15) NOT NULL,
  `date` varchar(100) NOT NULL,
  `branch` varchar(200) NOT NULL,
  `wing` int(10) NOT NULL,
  `choice1` bigint(100) NOT NULL,
  `choice2` bigint(100) NOT NULL,
  `choice3` bigint(100) NOT NULL,
  `choice4` bigint(100) NOT NULL,
  `choice5` bigint(100) NOT NULL,
  `choice6` bigint(100) NOT NULL,
  `choice7` bigint(100) NOT NULL,
  `choice8` bigint(100) NOT NULL,
  PRIMARY KEY (`emailid`,`regno`),
  UNIQUE KEY `emailid` (`emailid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register2`
--

INSERT INTO `register2` (`fname`, `lname`, `emailid`, `passwd`, `gender`, `year`, `regno`, `date`, `branch`, `wing`, `choice1`, `choice2`, `choice3`, `choice4`, `choice5`, `choice6`, `choice7`, `choice8`) VALUES
('', '', '', '', '', '', 0, '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0),
('rudraraju', 'amulya', 'amulyainhyderabad@gmail.com', 'amulya', 'f', 'sec', 20135065, '1995-12-02', 'ece', 0, 0, 0, 0, 0, 0, 0, 0, 0),
('ananya', 'gupta', 'ananya@gmail.com', 'ananya', 'f', 'sec', 20131200, '2015-03-25', 'it', 0, 0, 0, 0, 0, 0, 0, 0, 0),
('anjali', 'singh', 'anjalisinghknp@gmail.com', 'anjali', 'f', 'third', 20125063, '1995-05-21', 'ece', 0, 0, 0, 0, 0, 0, 0, 0, 0),
('bhavya', 'singh', 'bhavyasingh1996@gmail.com', 'bhavya', 'f', 'fourth', 20118015, '1993-08-19', 'it', 0, 0, 0, 0, 0, 0, 0, 0, 0),
('anshi', 'agarwal', 'cool.anshi15@gmail.com', 'anshi', 'f', 'first', 20144131, '1996-01-18', 'cse', 0, 0, 0, 0, 0, 0, 0, 0, 0),
('nidhi', 'rai', 'nidhirai@gmail.com', 'nidhi', 'f', 'sec', 20132075, '1995-08-15', 'ece', 0, 0, 0, 0, 0, 0, 0, 0, 0),
('rachna', 'bharti', 'rachnabharti1995@gmail.com', 'rachna', 'f', 'sec', 20134129, '1995-01-19', 'cse', 11, 20135065, 20132075, 20134129, 20131234, 20134567, 20138765, 20138765, 20134356),
('sheetal', 'aria', 'sheetal@gmail.com', 'sheetal', 'f', 'first', 20144132, '2015-03-25', 'ce', 0, 0, 0, 0, 0, 0, 0, 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
