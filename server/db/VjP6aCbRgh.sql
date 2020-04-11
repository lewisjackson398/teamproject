-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 09, 2020 at 11:42 PM
-- Server version: 8.0.13-4
-- PHP Version: 7.2.24-0ubuntu0.18.04.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `VjP6aCbRgh`
--
CREATE DATABASE IF NOT EXISTS `VjP6aCbRgh` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `VjP6aCbRgh`;

-- --------------------------------------------------------

--
-- Table structure for table `tblinstructor`
--
-- Creation: Apr 08, 2020 at 09:16 PM
--

DROP TABLE IF EXISTS `tblinstructor`;
CREATE TABLE IF NOT EXISTS `tblinstructor` (
  `instructor_id` int(11) NOT NULL AUTO_INCREMENT,
  `instructor_name` varchar(30) NOT NULL,
  `contact` varchar(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`instructor_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblmember`
--
-- Creation: Apr 08, 2020 at 09:16 PM
--

DROP TABLE IF EXISTS `tblmember`;
CREATE TABLE IF NOT EXISTS `tblmember` (
  `member_id` int(11) NOT NULL AUTO_INCREMENT,
  `age` int(3) NOT NULL,
  `gender` int(1) NOT NULL,
  `joining_date` date NOT NULL,
  `end_of_membership_date` date NOT NULL,
  `membership_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`member_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblpayment`
--
-- Creation: Apr 08, 2020 at 09:16 PM
--

DROP TABLE IF EXISTS `tblpayment`;
CREATE TABLE IF NOT EXISTS `tblpayment` (
  `payment_id` int(11) NOT NULL AUTO_INCREMENT,
  `member_id` int(11) NOT NULL,
  `amount` float NOT NULL,
  `payment_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `payment_date` date NOT NULL,
  PRIMARY KEY (`payment_id`),
  KEY `member_id` (`member_id`),
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblpromotionalmaterial`
--
-- Creation: Apr 08, 2020 at 09:16 PM
--

DROP TABLE IF EXISTS `tblpromotionalmaterial`;
CREATE TABLE IF NOT EXISTS `tblpromotionalmaterial` (
  `promotion_id` int(11) NOT NULL AUTO_INCREMENT,
  `promotion_name` varchar(30) NOT NULL,
  `file_upload` blob NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`promotion_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--
-- Creation: Apr 09, 2020 at 03:12 PM
-- Last update: Apr 09, 2020 at 04:36 PM
--

DROP TABLE IF EXISTS `tbluser`;
CREATE TABLE IF NOT EXISTS `tbluser` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `complete_name` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `contact` varchar(11) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`user_id`, `complete_name`, `contact`, `address`, `username`, `password`) VALUES
(3, 'Lewis Jackson', '07474108011', 'lewisjackson@gmail.com', 'lewis398', '$2y$10$kRNgG6P3NJ41XMDFgr6CIecThOIFFoSNF4709pLEafTKEnEJSTrFS'),
(4, 'Brandon', '01917777777', 'brandon@gmail.com', 'Brandonusername', '$2y$10$Of2vW9s/TY80X8xNO7Jak.AulPB3/uZMO1BbC9MaLCfWR7.QHt5yy');

-- --------------------------------------------------------

--
-- Table structure for table `tblworkout`
--
-- Creation: Apr 08, 2020 at 09:15 PM
--

DROP TABLE IF EXISTS `tblworkout`;
CREATE TABLE IF NOT EXISTS `tblworkout` (
  `workout_id` int(11) NOT NULL AUTO_INCREMENT,
  `workout_name` varchar(25) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`workout_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblworkoutplan`
--
-- Creation: Apr 08, 2020 at 09:17 PM
--

DROP TABLE IF EXISTS `tblworkoutplan`;
CREATE TABLE IF NOT EXISTS `tblworkoutplan` (
  `plan_id` int(11) NOT NULL AUTO_INCREMENT,
  `member_id` int(11) NOT NULL,
  `workout_id` int(11) NOT NULL,
  `work_out_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `work_out_date` date NOT NULL,
  `instructor_id` int(11) NOT NULL,
  PRIMARY KEY (`plan_id`),
  KEY `member_id` (`member_id`,`workout_id`,`instructor_id`),
  KEY `instructor_id` (`instructor_id`),
  KEY `workout_id` (`workout_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblinstructor`
--
ALTER TABLE `tblinstructor`
  ADD CONSTRAINT `tblinstructor_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbluser` (`user_id`) ON UPDATE CASCADE;

--
-- Constraints for table `tblmember`
--
ALTER TABLE `tblmember`
  ADD CONSTRAINT `tblmember_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbluser` (`user_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tblmember_ibfk_2` FOREIGN KEY (`membership_id`) REFERENCES `tblmembershiptype` (`type_id`) ON UPDATE CASCADE;

--
-- Constraints for table `tblmembershiptype`
--
ALTER TABLE `tblmembershiptype`
  ADD CONSTRAINT `tblmembershiptype_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbluser` (`user_id`) ON UPDATE CASCADE;

--
-- Constraints for table `tblpayment`
--
ALTER TABLE `tblpayment`
  ADD CONSTRAINT `tblpayment_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbluser` (`user_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tblpayment_ibfk_2` FOREIGN KEY (`member_id`) REFERENCES `tblmember` (`member_id`) ON UPDATE CASCADE;

--
-- Constraints for table `tblpromotionalmaterial`
--
ALTER TABLE `tblpromotionalmaterial`
  ADD CONSTRAINT `tblpromotionalmaterial_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbluser` (`user_id`) ON UPDATE CASCADE;

--
-- Constraints for table `tblworkoutplan`
--
ALTER TABLE `tblworkoutplan`
  ADD CONSTRAINT `tblworkoutplan_ibfk_1` FOREIGN KEY (`member_id`) REFERENCES `tblmember` (`member_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tblworkoutplan_ibfk_2` FOREIGN KEY (`instructor_id`) REFERENCES `tblinstructor` (`instructor_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tblworkoutplan_ibfk_3` FOREIGN KEY (`workout_id`) REFERENCES `tblworkout` (`workout_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
