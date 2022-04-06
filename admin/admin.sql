-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
<<<<<<< HEAD
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2022 at 07:05 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2
=======
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 06, 2022 at 01:30 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26
>>>>>>> 9538951b10e93d5ad4014d705b3d8ed1bdbf7ddc

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

DROP TABLE IF EXISTS `branch`;
CREATE TABLE IF NOT EXISTS `branch` (
  `br_id` int(11) NOT NULL AUTO_INCREMENT,
  `branch_id` varchar(30) NOT NULL,
  `branch_name` varchar(300) NOT NULL,
  `branch_address` varchar(300) NOT NULL,
  `branch_image` varchar(300) DEFAULT NULL,
  `no_of_halls` int(11) NOT NULL,
  `hall_id` int(11) NOT NULL,
  `screening_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`br_id`),
  KEY `Hall Foreign Key` (`hall_id`),
  KEY `Screening Foreign Key` (`screening_id`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`br_id`, `branch_id`, `branch_name`, `branch_address`, `branch_image`, `no_of_halls`, `hall_id`, `screening_id`) VALUES
(39, 'B001', 'CFTv KLCC', 'KLCC, Kuala Lumpur', 'branch.png', 5, 1, NULL),
(40, 'B001', 'CFTv KLCC', 'KLCC, Kuala Lumpur', 'branch.png', 5, 2, NULL),
(41, 'B001', 'CFTv KLCC', 'KLCC, Kuala Lumpur', 'branch.png', 5, 3, NULL),
(42, 'B001', 'CFTv KLCC', 'KLCC, Kuala Lumpur', 'branch.png', 5, 4, NULL),
(43, 'B001', 'CFTv KLCC', 'KLCC, Kuala Lumpur', 'branch.png', 5, 5, NULL),
(44, 'B002', 'CFTv Butterworth', 'Butterworth Penang', 'branch2.png', 5, 32, NULL),
(45, 'B002', 'CFTv Butterworth', 'Butterworth Penang', 'branch2.png', 5, 33, NULL),
(46, 'B002', 'CFTv Butterworth', 'Butterworth Penang', 'branch2.png', 5, 34, NULL),
(47, 'B002', 'CFTv Butterworth', 'Butterworth Penang', 'branch2.png', 5, 35, NULL),
(48, 'B002', 'CFTv Butterworth', 'Butterworth Penang', 'branch2.png', 5, 36, NULL),
(49, 'B003', 'CFTv Kuching', 'Kuching, Sarawak', 'branch3.png', 5, 37, NULL),
(50, 'B003', 'CFTv Kuching', 'Kuching, Sarawak', 'branch3.png', 5, 38, NULL),
(51, 'B003', 'CFTv Kuching', 'Kuching, Sarawak', 'branch3.png', 5, 39, NULL),
(52, 'B003', 'CFTv Kuching', 'Kuching, Sarawak', 'branch3.png', 5, 40, NULL),
(53, 'B003', 'CFTv Kuching', 'Kuching, Sarawak', 'branch3.png', 5, 41, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hall`
--

DROP TABLE IF EXISTS `hall`;
CREATE TABLE IF NOT EXISTS `hall` (
  `h_id` int(11) NOT NULL AUTO_INCREMENT,
  `hall_id` varchar(30) NOT NULL,
  `seat_id` int(11) DEFAULT NULL,
  `hall_no` int(11) NOT NULL,
  `hall_type` varchar(30) NOT NULL,
  `hall_capacity` int(11) NOT NULL,
  PRIMARY KEY (`h_id`),
  KEY `Foreign Key` (`seat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hall`
--

INSERT INTO `hall` (`h_id`, `hall_id`, `seat_id`, `hall_no`, `hall_type`, `hall_capacity`) VALUES
(27, '1', NULL, 1, 'Standard', 69),
(28, '2', NULL, 2, 'Standard', 69),
(29, '3', NULL, 3, 'Standard', 69),
(30, '4', NULL, 4, 'Standard', 69),
(31, '5', NULL, 5, 'Standard', 69),
(32, '32', NULL, 1, 'Standard', 69),
(33, '33', NULL, 2, 'Standard', 69),
(34, '34', NULL, 3, 'Standard', 69),
(35, '35', NULL, 4, 'Standard', 69),
(36, '36', NULL, 5, 'Standard', 69),
(37, '37', NULL, 1, 'Standard', 69),
(38, '38', NULL, 2, 'Standard', 69),
(39, '39', NULL, 3, 'Standard', 69),
(40, '40', NULL, 4, 'Standard', 69),
(41, '41', NULL, 5, 'Standard', 69);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

DROP TABLE IF EXISTS `member`;
CREATE TABLE IF NOT EXISTS `member` (
  `member_id` int(11) NOT NULL AUTO_INCREMENT,
  `m_card` varchar(35) DEFAULT NULL,
  `m_rewards` varchar(35) DEFAULT NULL,
  `m_name` varchar(35) NOT NULL,
  `m_email` varchar(35) NOT NULL,
  `m_password` varchar(35) NOT NULL,
  `m_dob` varchar(35) NOT NULL,
  `m_gender` varchar(35) NOT NULL,
  `m_number` varchar(35) NOT NULL,
  `m_address` varchar(300) NOT NULL,
  `m_picture` varchar(300) DEFAULT NULL,
  `m_points` varchar(35) NOT NULL,
  PRIMARY KEY (`member_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member_id`, `m_card`, `m_rewards`, `m_name`, `m_email`, `m_password`, `m_dob`, `m_gender`, `m_number`, `m_address`, `m_picture`, `m_points`) VALUES
(6, 'M001', NULL, 'Claire Chong', 'Clairechong998@gmail.com', '1233', '2000-10-07', 'Female', '018-2017978', 'Seremban', NULL, '2000'),
(7, 'M002', NULL, 'Neesha A/P Jothi', 'neesha@utar.edu.my', '1234', '1988-01-01', 'Female', '012-3456789', 'Penang', NULL, '5000'),
(8, 'M003', NULL, 'Khor Kok Chin', 'kckhor@utar.edu.my', '1234', '1983-01-01', 'Male', '010-4545455', 'Selangor', NULL, '4000');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

DROP TABLE IF EXISTS `movie`;
CREATE TABLE IF NOT EXISTS `movie` (
  `movie_id` int(11) NOT NULL AUTO_INCREMENT,
  `movie_poster` varchar(300) NOT NULL,
  `movie_name` varchar(300) NOT NULL,
  `movie_duration` varchar(20) NOT NULL,
  `movie_date` date NOT NULL,
  `movie_rating` int(11) NOT NULL,
  `movie_trailer` varchar(300) NOT NULL,
  `movie_desc` varchar(3000) NOT NULL,
  `movie_case` varchar(30) NOT NULL,
  PRIMARY KEY (`movie_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`movie_id`, `movie_poster`, `movie_name`, `movie_duration`, `movie_date`, `movie_rating`, `movie_trailer`, `movie_desc`, `movie_case`) VALUES
(7, 'drStrange.jpg', 'Doctor Strange in the Multiverse of Madness', '126', '2022-05-04', 9, 'https://www.youtube.com/embed/aWzlQ2N6qqg', '																																																Dr Stephen Strange casts a forbidden spell that opens a portal to the multiverse. However, a threat emerges that may be too big for his team to handle.																																										', 'coming soon'),
(8, 'jujutsuKaisen.jpg', 'Jujutsu Kaisen 0', '105', '2021-12-24', 8, 'https://www.youtube.com/embed/UPRqnFnnrr8', '																Yuta Okkotsu gains control of an extremely powerful, cursed spirit and gets enrolled in the Tokyo Prefectural Jujutsu High School by sorcerers to help him control his power and keep an eye on him.														', 'now showing'),
(9, 'Batman.jpg', 'The Batman', '176', '2022-03-04', 8, 'https://www.youtube.com/embed/mqqft2x_Aa4', 'Batman ventures into Gotham City\'s underworld when a sadistic killer leaves behind a trail of cryptic clues. As the evidence begins to lead closer to home and the scale of the perpetrator\'s plans become clear, he must forge new relationships, unmask the culprit and bring justice to the abuse of power and corruption that has long plagued the metropolis.							', 'now showing');

-- --------------------------------------------------------

--
-- Table structure for table `screening`
--

DROP TABLE IF EXISTS `screening`;
CREATE TABLE IF NOT EXISTS `screening` (
  `screening_id` int(11) NOT NULL AUTO_INCREMENT,
  `screen_id` varchar(11) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `hall_id` int(11) NOT NULL,
  `screening_date` date NOT NULL,
  `screening_time` varchar(6) NOT NULL,
  PRIMARY KEY (`screening_id`),
  KEY `Movie Foreign Key` (`movie_id`),
  KEY `Branch Foreign Key` (`branch_id`),
  KEY `Halll Foreign Key` (`hall_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `screening`
--

INSERT INTO `screening` (`screening_id`, `screen_id`, `movie_id`, `branch_id`, `hall_id`, `screening_date`, `screening_time`) VALUES
(12, '1', 8, 39, 1, '2022-04-10', '2pm'),
(13, '2', 9, 49, 37, '2022-04-10', '9pm');

-- --------------------------------------------------------

--
-- Table structure for table `seat`
--

DROP TABLE IF EXISTS `seat`;
CREATE TABLE IF NOT EXISTS `seat` (
  `seat_id` int(11) NOT NULL AUTO_INCREMENT,
  `screening_id` int(11) NOT NULL,
  `seat_code` varchar(4) NOT NULL,
  `seat_status` tinyint(1) NOT NULL DEFAULT '0',
  `memberID` int(11) DEFAULT NULL,
  PRIMARY KEY (`seat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=123457 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seat`
--

INSERT INTO `seat` (`seat_id`, `screening_id`, `seat_code`, `seat_status`, `memberID`) VALUES
(1, 12, 'F2', 1, 123456),
(2, 12, 'F5', 1, 123456),
(3, 12, 'E3', 1, 123456);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

DROP TABLE IF EXISTS `transaction`;
CREATE TABLE IF NOT EXISTS `transaction` (
  `transaction_id` int(11) NOT NULL AUTO_INCREMENT,
  `screening_id` int(11) DEFAULT NULL,
  `member_id` int(11) NOT NULL,
  `transactionDateTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `total_price` varchar(35) NOT NULL,
  `payment_type` varchar(35) NOT NULL,
  `status` varchar(30) NOT NULL DEFAULT 'Successful',
  PRIMARY KEY (`transaction_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`transaction_id`, `screening_id`, `member_id`, `transactionDateTime`, `total_price`, `payment_type`, `status`) VALUES
(5, NULL, 0, '2022-04-06 03:45:05', '16', 'Mastercard', 'Successful'),
(6, NULL, 0, '2022-04-06 03:45:05', '48', 'Bank Transfer', 'Successful'),
(7, NULL, 0, '2022-04-06 03:45:05', '25', 'Bank Transfer', 'Successful'),
(8, 12, 123456, '2022-04-06 03:46:22', '20', 'tng', 'Successful'),
(9, 12, 123456, '2022-04-06 03:47:13', '20', 'visa', 'Successful'),
(10, 12, 123456, '2022-04-06 03:47:29', '20', 'Bank Transfer', 'Successful'),
(11, 12, 123456, '2022-04-06 03:48:52', '20', 'Touch n Go eWallet', 'Successful'),
(12, 12, 123456, '2022-04-06 04:26:55', '20', '', 'Successful'),
(13, 12, 123456, '2022-04-06 04:27:28', '20', 'Touch n Go eWallet', 'Successful'),
(14, 12, 123456, '2022-04-06 04:34:33', '20', 'VISA Card', 'Successful'),
(15, 12, 123456, '2022-04-06 04:35:14', '20', 'Mastercard', 'Successful'),
(16, 12, 123456, '2022-04-06 21:13:20', '33', 'Mastercard', 'Successful'),
(17, 12, 123456, '2022-04-06 21:16:31', '20', 'VISA Card', 'Successful');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `user_name`, `email`, `password`, `gender`, `dob`) VALUES
(1, 'Assignment', 'Assignment', 'test', 'test@test.com', '1234', 'male', '1997-05-06'),
(2, 'claire', 'C', 'Claire', 'clair@gmail.com', '123', 'female', '2000-03-11');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hall`
--
ALTER TABLE `hall`
  ADD CONSTRAINT `Foreign Key` FOREIGN KEY (`seat_id`) REFERENCES `seat` (`seat_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
