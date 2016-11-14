-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 24, 2016 at 03:20 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vamedited`
--
CREATE DATABASE IF NOT EXISTS `vamedited` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `vamedited`;

-- --------------------------------------------------------

--
-- Table structure for table `architect`
--

CREATE TABLE IF NOT EXISTS `architect` (
  `A_ID` int(10) NOT NULL AUTO_INCREMENT,
  `UserID` int(10) DEFAULT NULL,
  `Birthplace` varchar(50) DEFAULT NULL,
  `College` varchar(50) DEFAULT NULL,
  `University` varchar(50) DEFAULT NULL,
  `Academic_Qalification1` varchar(50) DEFAULT NULL,
  `Academic_Qalification2` varchar(50) DEFAULT NULL,
  `Academic_Qalification3` varchar(50) DEFAULT NULL,
  `Academic_Qalification4` varchar(50) DEFAULT NULL,
  `Awards` varchar(50) DEFAULT NULL,
  `Membership_year` varchar(4) DEFAULT NULL,
  `Philosophy` varchar(400) DEFAULT NULL,
  `Other_info` varchar(400) DEFAULT NULL,
  PRIMARY KEY (`A_ID`),
  KEY `fk_architect` (`UserID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `architect`
--

INSERT INTO `architect` (`A_ID`, `UserID`, `Birthplace`, `College`, `University`, `Academic_Qalification1`, `Academic_Qalification2`, `Academic_Qalification3`, `Academic_Qalification4`, `Awards`, `Membership_year`, `Philosophy`, `Other_info`) VALUES
(6, 9, 'Colombo', 'Taxila Central College', 'UOM', NULL, NULL, NULL, NULL, NULL, '2016', 'oooo', 'pppp');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `C_ID` int(10) NOT NULL AUTO_INCREMENT,
  `UserID` int(10) DEFAULT NULL,
  PRIMARY KEY (`C_ID`),
  KEY `fk_customer` (`UserID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`C_ID`, `UserID`) VALUES
(1, 8),
(8, 8);

-- --------------------------------------------------------

--
-- Table structure for table `skill`
--

CREATE TABLE IF NOT EXISTS `skill` (
  `SkillID` int(10) NOT NULL AUTO_INCREMENT,
  `A_ID` int(10) NOT NULL,
  `Skill` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`SkillID`),
  KEY `fk_skill` (`A_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `UserID` int(11) NOT NULL AUTO_INCREMENT,
  `Firstname` varchar(30) DEFAULT NULL,
  `Lastname` varchar(20) DEFAULT NULL,
  `Email` varchar(320) DEFAULT NULL,
  `DoB` varchar(10) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `Gender` varchar(6) DEFAULT NULL,
  `Role` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`UserID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserID`, `Firstname`, `Lastname`, `Email`, `DoB`, `Password`, `Gender`, `Role`) VALUES
(8, 'Ashirwada', 'Dayarathne', 'ashi#daya', '1992.01.25', '134567', 'Female', 'Customer'),
(9, 'Malith', 'Rathnasena', 'malithofficial@gmail.com', '1992.01.25', '134567', 'Male', 'Architect');

-- --------------------------------------------------------

--
-- Table structure for table `work`
--

CREATE TABLE IF NOT EXISTS `work` (
  `Work_ID` int(10) NOT NULL AUTO_INCREMENT,
  `C_ID` int(10) DEFAULT NULL,
  `Title` varchar(100) DEFAULT NULL,
  `Type` varchar(10) DEFAULT NULL,
  `Area` varchar(20) DEFAULT NULL,
  `Oinfo` varchar(3000) DEFAULT NULL,
  PRIMARY KEY (`Work_ID`),
  KEY `fk_works1` (`C_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `work`
--

INSERT INTO `work` (`Work_ID`, `C_ID`, `Title`, `Type`, `Area`, `Oinfo`) VALUES
(1, 1, 'wttt', 'tttt', 'ttt', 'y43y43y34'),
(7, 8, 'fbsfbbs', 'house', 'sbdsbsdbs', 'sbsdbsdb'),
(8, 8, 'test1', 'building', '4*4', '2 stories');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `architect`
--
ALTER TABLE `architect`
  ADD CONSTRAINT `fk_architect` FOREIGN KEY (`UserID`) REFERENCES `user` (`UserID`);

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `fk_customer` FOREIGN KEY (`UserID`) REFERENCES `user` (`UserID`);

--
-- Constraints for table `skill`
--
ALTER TABLE `skill`
  ADD CONSTRAINT `fk_skill` FOREIGN KEY (`A_ID`) REFERENCES `architect` (`A_ID`);

--
-- Constraints for table `work`
--
ALTER TABLE `work`
  ADD CONSTRAINT `fk_works1` FOREIGN KEY (`C_ID`) REFERENCES `customer` (`C_ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
