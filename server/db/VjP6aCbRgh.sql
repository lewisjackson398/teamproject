-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 26, 2020 at 09:41 PM
-- Server version: 8.0.13-4
-- PHP Version: 7.2.24-0ubuntu0.18.04.4

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

-- --------------------------------------------------------

--
-- Table structure for table `tblclasses`
--

CREATE TABLE `tblclasses` (
  `class_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `class` varchar(22) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `start` time NOT NULL,
  `finish` time NOT NULL,
  `instructor_name` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tblclasses`
--

INSERT INTO `tblclasses` (`class_id`, `user_id`, `date`, `class`, `start`, `finish`, `instructor_name`) VALUES
(61, 3, 'Wednesday', 'Cycling', '10:00:00', '11:00:00', 'Brandon'),
(62, 3, 'Wednesday', 'Cycling', '10:00:00', '11:00:00', 'Brandon'),
(63, 3, 'Monday', 'Zumba', '07:00:00', '08:00:00', 'Lewis'),
(93, 12, 'Tuesday', 'Cycling', '13:00:00', '15:00:00', 'Brandon'),
(94, 12, 'Wednesday', 'Dance', '11:00:00', '12:00:00', 'Lewis'),
(95, 12, 'Thursday', 'StrengthTraining', '09:00:00', '11:00:00', 'Arlana'),
(96, 12, 'Monday', 'WaterExercise', '10:00:00', '12:00:00', 'Oliver'),
(98, 12, 'Saturday', 'Boxing', '14:00:00', '15:00:00', 'Lewis'),
(99, 3, 'Friday', 'Running', '09:00:00', '12:00:00', 'Arlana'),
(129, 3, 'Friday', 'Running', '09:00:00', '12:00:00', 'Arlana');

-- --------------------------------------------------------

--
-- Table structure for table `tblinstructor`
--

CREATE TABLE `tblinstructor` (
  `instructor_id` int(11) NOT NULL,
  `instructor_name` varchar(30) NOT NULL,
  `contact` varchar(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblmember`
--

CREATE TABLE `tblmember` (
  `member_id` int(11) NOT NULL,
  `age` int(3) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `membership_type` varchar(8) NOT NULL,
  `joining_date` date NOT NULL,
  `end_of_membership_date` date NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblmember`
--

INSERT INTO `tblmember` (`member_id`, `age`, `gender`, `membership_type`, `joining_date`, `end_of_membership_date`, `user_id`) VALUES
(58, 22, 'M', 'silver', '2020-04-18', '2020-05-18', 4),
(61, 19, 'F', 'silver', '2020-04-22', '2020-05-22', 11),
(62, 33, 'M', 'silver', '2020-04-22', '2020-05-22', 12);

-- --------------------------------------------------------

--
-- Table structure for table `tblpayment`
--

CREATE TABLE `tblpayment` (
  `payment_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `type` varchar(10) NOT NULL,
  `amount` float NOT NULL,
  `payment_time` varchar(10) NOT NULL,
  `payment_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpayment`
--

INSERT INTO `tblpayment` (`payment_id`, `member_id`, `type`, `amount`, `payment_time`, `payment_date`) VALUES
(49, 58, 'Visa', 200, '20:8:52', '2020-04-18'),
(53, 61, 'PayPal', 200, '0:20:14', '2020-04-22'),
(54, 62, 'Visa', 200, '21:53:44', '2020-04-22');

-- --------------------------------------------------------

--
-- Table structure for table `tbltimetable`
--

CREATE TABLE `tbltimetable` (
  `class_id` int(11) NOT NULL,
  `date` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `class` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `instructor_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `start` time NOT NULL,
  `finish` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbltimetable`
--

INSERT INTO `tbltimetable` (`class_id`, `date`, `class`, `instructor_name`, `description`, `start`, `finish`) VALUES
(9, 'Monday', 'Zumba', 'Lewis', 'Dancing', '07:00:00', '09:00:00'),
(10, 'Tuesday', 'Cycling', 'Brandon', 'long distance', '13:00:00', '15:00:00'),
(11, 'Wednesday', 'Dance', 'Lewis', 'Dance classes use music and Latin-American dance moves for a full-body workout. These classes include Zumba, Hip Hop and Pop Fitness.', '11:00:00', '12:00:00'),
(12, 'Thursday', 'StrengthTraining', 'Arlana', 'Strength training classes target specific muscle groups or provide an overall workout. These classes include Toning (Total Body Strength) and Abs.', '09:00:00', '11:00:00'),
(13, 'Monday', 'WaterExercise', 'Oliver', 'Any group fitness class that takes place in the pool is a water exercise class. These classes include Deep Water Aerobics, Water Aerobics and Water Walking. ', '10:00:00', '12:00:00'),
(14, 'Friday', 'Running', 'Arlana', 'long distance', '09:00:00', '12:00:00'),
(15, 'Saturday', 'Boxing', 'Lewis', 'Learn to spar', '14:00:00', '15:00:00'),
(16, 'Sunday', 'Active Older Adults', 'Brandon', 'These classes are geared to our senior members (ages 65 and older) and include low-impact, chair Yoga and water exercise.', '07:00:00', '08:00:00'),
(17, 'Friday', 'Zumba', 'Lewis', 'Dancing', '12:00:00', '13:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `user_id` int(11) NOT NULL,
  `complete_name` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `contact` varchar(11) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`user_id`, `complete_name`, `contact`, `address`, `username`, `password`) VALUES
(3, 'Lewis Jackson', '07474108011', 'lewisjackson@gmail.com', 'lewis398', '$2y$10$kRNgG6P3NJ41XMDFgr6CIecThOIFFoSNF4709pLEafTKEnEJSTrFS'),
(4, 'Brandon', '01917777777', 'brandon@gmail.com', 'Brandonusername', '$2y$10$Of2vW9s/TY80X8xNO7Jak.AulPB3/uZMO1BbC9MaLCfWR7.QHt5yy'),
(9, 'hello', '1234', 'hello@gmail.com', 'aaaaa', '$2y$10$w8xVohSKZn4vT2f3ndKMK.S6lCJLIcxyPED/WQzWuVAAy1BmNl/Am'),
(10, 'test', '1234567', 'test@gmail.com', 'test', '$2y$10$rh6w6oqqSFOlkZJWvhwsE.jMGm.e5aq2Hi3NykaDSBRPIU9d.qlbC'),
(11, 'Lewis Jackson two', '07474108011', 'lewis@gmail.com', 'lewis123', '$2y$10$bhT66WezICdqpLp0uMix.uEcHWw637AUumBXT1/E46aQDAgN5sw5y'),
(12, 'test69', '0123', 'test69@gmail.com', 'test69', '$2y$10$1SUNW91wR/uueeKuXGygeePlos/CvH/mdK/O80CTZ6aMdjWB/OpRy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblclasses`
--
ALTER TABLE `tblclasses`
  ADD PRIMARY KEY (`class_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tblinstructor`
--
ALTER TABLE `tblinstructor`
  ADD PRIMARY KEY (`instructor_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tblmember`
--
ALTER TABLE `tblmember`
  ADD PRIMARY KEY (`member_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tblpayment`
--
ALTER TABLE `tblpayment`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `member_id` (`member_id`);

--
-- Indexes for table `tbltimetable`
--
ALTER TABLE `tbltimetable`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblclasses`
--
ALTER TABLE `tblclasses`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

--
-- AUTO_INCREMENT for table `tblinstructor`
--
ALTER TABLE `tblinstructor`
  MODIFY `instructor_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblmember`
--
ALTER TABLE `tblmember`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `tblpayment`
--
ALTER TABLE `tblpayment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `tbltimetable`
--
ALTER TABLE `tbltimetable`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
  ADD CONSTRAINT `tblmember_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbluser` (`user_id`) ON UPDATE CASCADE;

--
-- Constraints for table `tblpayment`
--
ALTER TABLE `tblpayment`
  ADD CONSTRAINT `tblpayment_ibfk_1` FOREIGN KEY (`member_id`) REFERENCES `tblmember` (`member_id`) ON DELETE RESTRICT ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
