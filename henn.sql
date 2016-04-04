-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 30, 2015 at 05:44 PM
-- Server version: 5.5.43-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `henn`
--

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE IF NOT EXISTS `faq` (
  `S.No.` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(500) NOT NULL,
  `answers` varchar(500) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`S.No.`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`S.No.`, `question`, `answers`, `date`) VALUES
(1, 'How are Volunteers managed in this E-Library Project', 'We are collaborating with the students from Kathmandu University, who work for us as the STUDENT VOLUNTEERS. All are undergraduate students from Department of Computer Science and Engineering, Kathmandu University.', '2015-05-01');

-- --------------------------------------------------------

--
-- Table structure for table `marquee`
--

CREATE TABLE IF NOT EXISTS `marquee` (
  `S.No` int(11) NOT NULL AUTO_INCREMENT,
  `Marquee_Text` varchar(200) NOT NULL,
  `Date` date NOT NULL,
  PRIMARY KEY (`S.No`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `marquee`
--

INSERT INTO `marquee` (`S.No`, `Marquee_Text`, `Date`) VALUES
(1, 'HeNN E-LIBRARY PROJECT CALLS PROPOSAL ON E-LIBRARY INITIATION OF TEN DISTRICTS(2015-2016).', '2015-05-20');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `S.No` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`S.No`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`S.No`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'root', 'root');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
