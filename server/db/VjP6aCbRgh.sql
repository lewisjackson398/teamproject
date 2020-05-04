-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 04, 2020 at 11:50 AM
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
CREATE DATABASE IF NOT EXISTS `VjP6aCbRgh` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `VjP6aCbRgh`;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `category_id` tinyint(4) NOT NULL,
  `topic_id` int(11) NOT NULL,
  `post_creator` int(11) NOT NULL,
  `post_content` text COLLATE utf8_unicode_ci NOT NULL,
  `post_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `topic_id`, `post_creator`, `post_content`, `post_date`) VALUES
(5, 1, 5, 1, 'This is a test topic', '2020-05-02 10:43:46'),
(6, 1, 5, 1, 'This is a test topic', '2020-05-02 10:43:46'),
(7, 2, 6, 1, 'This is a test topic', '2020-05-02 10:49:06'),
(8, 2, 6, 1, 'This is a test topic', '2020-05-02 10:49:06'),
(9, 1, 7, 1, 'wfaw', '2020-05-02 11:28:19'),
(10, 1, 7, 1, 'wfaw', '2020-05-02 11:28:19'),
(11, 1, 8, 1, 'wafw', '2020-05-02 11:31:53'),
(12, 1, 8, 1, 'wafw', '2020-05-02 11:31:53'),
(13, 1, 9, 1, 'fwf', '2020-05-02 14:12:09'),
(14, 1, 9, 1, 'fwf', '2020-05-02 14:12:09'),
(15, 1, 10, 1, 'wfaf', '2020-05-02 14:12:38'),
(16, 1, 10, 1, 'wfaf', '2020-05-02 14:12:38'),
(17, 2, 11, 1, 'Stuff For Test', '2020-05-02 20:27:50'),
(18, 2, 11, 1, 'Stuff For Test', '2020-05-02 20:27:50'),
(19, 2, 12, 1, 'adsasdasd', '2020-05-03 15:27:52'),
(20, 2, 12, 1, 'adsasdasd', '2020-05-03 15:27:52'),
(21, 1, 13, 1, 'dsadas', '2020-05-03 17:37:14'),
(22, 1, 13, 1, 'dsadas', '2020-05-03 17:37:14'),
(25, 2, 14, 1, 'Reply 2\r\n', '2020-05-03 18:14:17'),
(26, 2, 14, 1, 'Reply 2\r\n', '2020-05-03 18:14:35'),
(27, 2, 14, 1, 'Reply 2\r\n', '2020-05-03 18:14:51'),
(28, 2, 11, 1, 'This is a reply\r\n', '2020-05-03 18:17:24'),
(29, 3, 15, 1, 'How is weight lifting good?', '2020-05-03 20:48:44'),
(30, 3, 15, 1, 'How is weight lifting good?', '2020-05-03 20:48:44'),
(31, 3, 16, 1, 'How is weight lifting good?', '2020-05-03 20:49:37'),
(32, 3, 17, 1, 'How is weight lifting good?', '2020-05-03 20:50:20'),
(33, 3, 17, 1, 'Weight lifting is good because... ', '2020-05-03 20:51:23'),
(34, 3, 18, 1, 'Is my bench bad?', '2020-05-04 11:45:34'),
(35, 3, 18, 1, 'Yes your bench press is bad because....', '2020-05-04 11:48:17');

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`id`, `username`, `password`) VALUES
(1, 'arlana', 'Archie01'),
(2, 'ArlanaK', '$2y$10$xSCY47yCu/AI1IIULaCiBOVBO1whHT/czl1JzbnNWdKkr16kXTg8e'),
(3, 'admin101', '$2y$10$R4DHHN6HqTzQF7FzQwZzreTcYOg53oipEGAfmk13j7Q8s1ATJskYO'),
(4, 'Arlana1997', '$2y$10$rsYFnfc7Ng28OJKe6hrFQOgPDLkJi5q7XXsN1EX2gisj8oiFQjhoy'),
(5, 'Marker', '$2y$10$7.JPcy8FW6PRQ25en2jE7ORd6nXu48nRrN1jjwQrDQZiERDMy9iLy');

-- --------------------------------------------------------

--
-- Table structure for table `tblcategories`
--

CREATE TABLE `tblcategories` (
  `id` tinyint(4) NOT NULL,
  `category_title` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `category_description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_post_date` datetime DEFAULT NULL,
  `last_user_posted` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tblcategories`
--

INSERT INTO `tblcategories` (`id`, `category_title`, `category_description`, `last_post_date`, `last_user_posted`) VALUES
(3, 'Exercise/Wellness', 'For exercising, workouts, diet etc...', '2020-05-04 11:48:17', 1),
(4, 'Facilities', 'For discussion on the facilities etc...', NULL, NULL);

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
  `instructor_name` text COLLATE utf8_unicode_ci NOT NULL,
  `timetable_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tblclasses`
--

INSERT INTO `tblclasses` (`class_id`, `user_id`, `date`, `class`, `start`, `finish`, `instructor_name`, `timetable_id`) VALUES
(508, 4, 'Wednesday', 'Circuits', '15:00:00', '16:00:00', 'Lewis', 20),
(543, 4, 'Sunday ', 'Spinning', '11:00:00', '13:00:00', 'oliver', 12),
(6985, 10, 'Monday', 'Pilates', '11:00:00', '12:00:00', 'Brandon', 19),
(6990, 10, 'Tuesday', 'Spinning', '13:00:00', '15:00:00', 'Brandon', 10),
(7008, 3, 'Monday', 'Zumba', '07:00:00', '09:00:00', 'Lewis', 9),
(7009, 3, 'Monday', 'Pilates', '11:00:00', '12:00:00', 'Brandon', 19),
(7010, 12, 'Monday', 'Zumba', '07:00:00', '09:00:00', 'Lewis', 9),
(7011, 10, 'Monday', 'Zumba', '07:00:00', '09:00:00', 'Lewis', 9);

-- --------------------------------------------------------

--
-- Table structure for table `tblequipment`
--

CREATE TABLE `tblequipment` (
  `equipment_type` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `quantity` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tblequipment`
--

INSERT INTO `tblequipment` (`equipment_type`, `quantity`) VALUES
('Skipping Rope', 10),
('Weights', 10),
('Weights for zumba ', 10),
('Yoga Mat', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tblfeedback`
--

CREATE TABLE `tblfeedback` (
  `feedback_id` int(3) NOT NULL,
  `description` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(3) NOT NULL,
  `priority` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tblfeedback`
--

INSERT INTO `tblfeedback` (`feedback_id`, `description`, `user_id`, `priority`) VALUES
(1, 'This feedback description should be inserted into the database under low priority as there are no key words', 4, 'low'),
(2, 'This feedback decription should be inserted into the database under high priority as it contains key words such as error and login', 4, 'high'),
(3, 'hello brandon', 3, 'low');

-- --------------------------------------------------------

--
-- Table structure for table `tblfusers`
--

CREATE TABLE `tblfusers` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tblfusers`
--

INSERT INTO `tblfusers` (`id`, `username`, `password`) VALUES
(1, 'billybigballs', '123');

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
(53, 61, 'PayPal', 200, '0:20:14', '2020-04-22'),
(54, 62, 'Visa', 200, '21:53:44', '2020-04-22');

-- --------------------------------------------------------

--
-- Table structure for table `tbltimetable`
--

CREATE TABLE `tbltimetable` (
  `timetable_id` int(11) NOT NULL,
  `date` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `class` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `instructor_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `start` time NOT NULL,
  `finish` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbltimetable`
--

INSERT INTO `tbltimetable` (`timetable_id`, `date`, `class`, `instructor_name`, `start`, `finish`) VALUES
(9, 'Monday', 'Zumba', 'Lewis', '07:00:00', '09:00:00'),
(10, 'Tuesday', 'Spinning', 'Brandon', '13:00:00', '15:00:00'),
(11, 'Wednesday', 'Dance', 'Lewis', '11:00:00', '12:00:00'),
(12, 'Thursday', 'Kettlebells', 'Arlana', '09:00:00', '11:00:00'),
(14, 'Friday', 'Running', 'Arlana', '09:00:00', '12:00:00'),
(15, 'Saturday', 'Boxing', 'Lewis', '14:00:00', '15:00:00'),
(16, 'Sunday', 'Seniors', 'Brandon', '07:00:00', '08:00:00'),
(17, 'Friday', 'Zumba', 'Lewis', '12:00:00', '13:00:00'),
(18, 'Thursday', 'Yoga', 'Arlana', '07:00:00', '08:00:00'),
(19, 'Monday', 'Pilates', 'Brandon', '11:00:00', '12:00:00'),
(20, 'Wednesday', 'Circuits', 'Lewis', '15:00:00', '16:00:00'),
(21, 'Sunday', 'Spinning', 'Oliver', '11:00:00', '13:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbltopics`
--

CREATE TABLE `tbltopics` (
  `id` int(11) NOT NULL,
  `category_id` tinyint(4) NOT NULL,
  `topic_title` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `topic_creator` int(11) NOT NULL,
  `topic_last_user` int(11) DEFAULT NULL,
  `topic_date` datetime NOT NULL,
  `topic_reply_date` datetime NOT NULL,
  `topic_views` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbltopics`
--

INSERT INTO `tbltopics` (`id`, `category_id`, `topic_title`, `topic_creator`, `topic_last_user`, `topic_date`, `topic_reply_date`, `topic_views`) VALUES
(1, 2, 'wafw', 1, NULL, '2020-05-02 10:37:55', '2020-05-02 10:37:55', 0),
(2, 2, 'wafw', 1, NULL, '2020-05-02 10:38:34', '2020-05-02 10:38:34', 0),
(11, 2, 'Test 5', 1, 1, '2020-05-02 20:27:50', '2020-05-03 18:17:24', 9),
(12, 2, 'dasasd', 1, NULL, '2020-05-03 15:27:52', '2020-05-03 15:27:52', 1),
(13, 1, 'ehlp', 1, NULL, '2020-05-03 17:37:14', '2020-05-03 17:37:14', 2),
(14, 2, 'penis123', 1, 1, '2020-05-03 17:38:28', '2020-05-03 18:14:51', 6),
(15, 3, 'Weight Lifting', 1, NULL, '2020-05-03 20:48:44', '2020-05-03 20:48:44', 2),
(16, 3, 'Weight Lifting', 1, NULL, '2020-05-03 20:49:37', '2020-05-03 20:49:37', 0),
(17, 3, 'Weight Lifting', 1, 1, '2020-05-03 20:50:20', '2020-05-03 20:51:23', 9),
(18, 3, 'Bench Press Too Hard?', 1, 1, '2020-05-04 11:45:34', '2020-05-04 11:48:17', 4);

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
(10, 'test', '1234567', 'test@gmail.com', 'test', '$2y$10$rh6w6oqqSFOlkZJWvhwsE.jMGm.e5aq2Hi3NykaDSBRPIU9d.qlbC'),
(11, 'Lewis Jackson two', '07474108011', 'lewis@gmail.com', 'lewis123', '$2y$10$bhT66WezICdqpLp0uMix.uEcHWw637AUumBXT1/E46aQDAgN5sw5y'),
(12, 'test69', '0123', 'test69@gmail.com', 'test69', '$2y$10$1SUNW91wR/uueeKuXGygeePlos/CvH/mdK/O80CTZ6aMdjWB/OpRy'),
(13, 'Arlana Keen', '077764536', 'keenarlana@gmail.com', 'Arlana', '$2y$10$ACOREQM.hu.axhYyW9a7lewbI3pKAocexNmF5YKALKKC60tjSXje6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `tblcategories`
--
ALTER TABLE `tblcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblclasses`
--
ALTER TABLE `tblclasses`
  ADD PRIMARY KEY (`class_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `timetable_id` (`timetable_id`);

--
-- Indexes for table `tblequipment`
--
ALTER TABLE `tblequipment`
  ADD PRIMARY KEY (`equipment_type`);

--
-- Indexes for table `tblfeedback`
--
ALTER TABLE `tblfeedback`
  ADD PRIMARY KEY (`feedback_id`),
  ADD KEY `user_id_fk` (`user_id`);

--
-- Indexes for table `tblfusers`
--
ALTER TABLE `tblfusers`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`timetable_id`);

--
-- Indexes for table `tbltopics`
--
ALTER TABLE `tbltopics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblcategories`
--
ALTER TABLE `tblcategories`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tblclasses`
--
ALTER TABLE `tblclasses`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7012;

--
-- AUTO_INCREMENT for table `tblfeedback`
--
ALTER TABLE `tblfeedback`
  MODIFY `feedback_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblfusers`
--
ALTER TABLE `tblfusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `timetable_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbltopics`
--
ALTER TABLE `tbltopics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblclasses`
--
ALTER TABLE `tblclasses`
  ADD CONSTRAINT `tblclasses_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbluser` (`user_id`) ON DELETE RESTRICT ON UPDATE CASCADE,
  ADD CONSTRAINT `test` FOREIGN KEY (`timetable_id`) REFERENCES `tbltimetable` (`timetable_id`) ON DELETE RESTRICT ON UPDATE CASCADE;

--
-- Constraints for table `tblfeedback`
--
ALTER TABLE `tblfeedback`
  ADD CONSTRAINT `user_id_fk` FOREIGN KEY (`user_id`) REFERENCES `tbluser` (`user_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

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
