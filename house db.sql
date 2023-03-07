-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 02, 2014 at 03:30 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `house`
--

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE IF NOT EXISTS `ads` (
  `sino` int(11) NOT NULL AUTO_INCREMENT,
  `purpose` varchar(20) NOT NULL,
  `area` varchar(100) NOT NULL,
  `addr` varchar(500) NOT NULL,
  `htype` varchar(50) DEFAULT NULL,
  `amount` varchar(20) NOT NULL,
  `descri` text NOT NULL,
  `uname` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`sino`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `owners`
--

CREATE TABLE IF NOT EXISTS `owners` (
  `sino` int(11) DEFAULT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `contno` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `addr` varchar(500) DEFAULT NULL,
  `cdate` date NOT NULL,
  `uname` varchar(20) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  `pdate` date DEFAULT NULL,
  `expdate` date DEFAULT NULL,
  PRIMARY KEY (`uname`),
  UNIQUE KEY `sino` (`sino`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `snaps`
--

CREATE TABLE IF NOT EXISTS `snaps` (
  `sino` int(11) NOT NULL,
  `refno` int(11) DEFAULT NULL,
  `uname` varchar(20) DEFAULT NULL,
  `caption` varchar(500) NOT NULL,
  `imgname` varchar(500) NOT NULL,
  `descri` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
