-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2022 at 09:21 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

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

CREATE TABLE `branch` (
  `br_id` int(11) NOT NULL,
  `branch_id` varchar(30) NOT NULL,
  `branch_name` varchar(300) NOT NULL,
  `branch_address` varchar(300) NOT NULL,
  `branch_image` varchar(300) DEFAULT NULL,
  `no_of_halls` int(11) NOT NULL,
  `hall_id` int(11) NOT NULL,
  `screening_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

CREATE TABLE `hall` (
  `h_id` int(11) NOT NULL,
  `hall_id` varchar(30) NOT NULL,
  `seat_id` int(11) DEFAULT NULL,
  `hall_no` int(11) NOT NULL,
  `hall_type` varchar(30) NOT NULL,
  `hall_capacity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

CREATE TABLE `member` (
  `member_id` int(11) NOT NULL,
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
  `m_points` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member_id`, `m_card`, `m_rewards`, `m_name`, `m_email`, `m_password`, `m_dob`, `m_gender`, `m_number`, `m_address`, `m_picture`, `m_points`) VALUES
(6, 'M001', NULL, 'Claire Chong', 'Clairechong998@gmail.com', '1233', '2000-10-07', 'Female', '018-2017978', 'Seremban', NULL, '100'),
(7, 'M002', NULL, 'Neesha A/P Jothi', 'neesha@utar.edu.my', '1234', '1988-01-01', 'Female', '012-3456789', 'Penang', NULL, '0'),
(8, 'M003', NULL, 'Khor Kok Chin', 'kckhor@utar.edu.my', '1234', '1983-03-01', 'Female', '010-454545500', 'Selangor', NULL, '1786'),
(11, 'M004', NULL, 'Test Member', 'aa@test.com', '0000', '2022-04-07', 'Male', '09876557', 'ppp address', NULL, '0'),
(12, 'M005', NULL, 'clairpp', 'dfh@test.com', '0000', '2022-04-07', 'Female', '0987655', 'jsdfsdjh', NULL, '0');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `movie_id` int(11) NOT NULL,
  `movie_poster` varchar(300) NOT NULL,
  `movie_name` varchar(300) NOT NULL,
  `movie_duration` varchar(20) NOT NULL,
  `movie_date` date NOT NULL,
  `movie_rating` int(11) NOT NULL,
  `movie_trailer` varchar(300) NOT NULL,
  `movie_desc` varchar(3000) NOT NULL,
  `movie_case` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`movie_id`, `movie_poster`, `movie_name`, `movie_duration`, `movie_date`, `movie_rating`, `movie_trailer`, `movie_desc`, `movie_case`) VALUES
(7, 'drStrange.jpg', 'Doctor Strange in the Multiverse of Madness', '126', '2022-05-04', 9, 'https://www.youtube.com/embed/aWzlQ2N6qqg', '																																																Dr Stephen Strange casts a forbidden spell that opens a portal to the multiverse. However, a threat emerges that may be too big for his team to handle.																																										', 'coming soon'),
(8, 'jujutsuKaisen.jpg', 'Jujutsu Kaisen 0', '105', '2021-12-24', 8, 'https://www.youtube.com/embed/UPRqnFnnrr8', '																Yuta Okkotsu gains control of an extremely powerful, cursed spirit and gets enrolled in the Tokyo Prefectural Jujutsu High School by sorcerers to help him control his power and keep an eye on him.														', 'now showing'),
(9, 'Batman.jpg', 'The Batman', '176', '2022-03-04', 8, 'https://www.youtube.com/embed/mqqft2x_Aa4', 'Batman ventures into Gotham City\'s underworld when a sadistic killer leaves behind a trail of cryptic clues. As the evidence begins to lead closer to home and the scale of the perpetrator\'s plans become clear, he must forge new relationships, unmask the culprit and bring justice to the abuse of power and corruption that has long plagued the metropolis.							', 'now showing'),
(10, 'minions.jpg', 'Minions: The Rise of Gru', '90', '2022-06-01', 8, 'https://www.youtube.com/embed/pN1HNkoL2QA', 'In the 1970s, young Gru tries to join a group of supervillains called the Vicious 6 after they oust their leader -- the legendary fighter Wild Knuckles. When the interview turns disastrous, Gru and his Minions go on the run with the Vicious 6 hot on their tails. Luckily, he finds an unlikely source for guidance -- Wild Knuckles himself -- and soon discovers that even bad guys need a little help from their friends.', 'coming soon'),
(11, 'case_study_c4ads_2.png', 'Infidelity In Suburbia - Full Movie', '90', '2022-04-07', 2, 'https://www.youtube.com/embed/o0rjJK7AGlA', 'Starring: Sarah Butler & Marcus Rosner\r\nWith her husband away at work, and her son at school, Laura dreams of a home-renovation project to supplant her restless days. Vince, her irresistibly hot private contractor, soon fulfills her more forbidden dreams. Wracked with guilt she ends their affair, but Vince’s cravings run deeper and darker than Laura imagines. In the basement of Laura’s suburban home, Vince is building a special room just for her. It’s a secret place to hide the object of his desire... and his rage.', 'now showing');

-- --------------------------------------------------------

--
-- Table structure for table `screening`
--

CREATE TABLE `screening` (
  `screening_id` int(11) NOT NULL,
  `screen_id` varchar(11) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `hall_id` int(11) NOT NULL,
  `screening_date` date NOT NULL,
  `screening_time` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `screening`
--

INSERT INTO `screening` (`screening_id`, `screen_id`, `movie_id`, `branch_id`, `hall_id`, `screening_date`, `screening_time`) VALUES
(12, '1', 8, 39, 1, '2022-04-10', '2pm'),
(13, '2', 9, 49, 37, '2022-04-10', '9pm'),
(14, '3', 11, 49, 39, '2022-04-09', '1:30pm');

-- --------------------------------------------------------

--
-- Table structure for table `seat`
--

CREATE TABLE `seat` (
  `seat_id` int(11) NOT NULL,
  `screening_id` int(11) NOT NULL,
  `seat_code` varchar(4) NOT NULL,
  `member_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seat`
--

INSERT INTO `seat` (`seat_id`, `screening_id`, `seat_code`, `member_id`) VALUES
(123488, 12, 'E5', 6),
(123489, 12, 'E6', 6),
(123490, 12, 'E7', 6),
(123491, 12, 'A1', 8),
(123492, 12, 'A2', 8),
(123493, 12, 'C4', 8),
(123494, 12, 'C5', 8),
(123495, 12, 'C6', 8),
(123496, 12, 'D8', 8),
(123497, 12, 'D9', 8),
(123498, 13, 'B4', 8),
(123499, 13, 'A1', 8),
(123500, 13, 'A2', 8),
(123501, 13, 'A3', 8),
(123502, 13, 'A4', 8),
(123503, 13, 'A5', 8),
(123504, 13, 'A6', 8),
(123505, 13, 'A7', 8),
(123506, 13, 'A8', 8),
(123507, 13, 'A9', 8),
(123508, 13, 'B1', 8),
(123509, 13, 'B6', 8),
(123510, 13, 'E5', 8),
(123511, 13, 'E6', 8),
(123512, 13, 'E7', 8),
(123513, 13, 'F3', 8),
(123514, 13, 'G7', 8),
(123515, 13, 'E2', 6),
(123516, 13, 'E3', 6),
(123517, 13, 'F5', 6),
(123518, 13, 'F9', 6),
(123519, 13, 'F10', 6),
(123520, 12, 'A8', 6);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `transaction_id` int(11) NOT NULL,
  `screening_id` int(11) DEFAULT NULL,
  `member_id` int(11) NOT NULL,
  `transactionDateTime` datetime NOT NULL DEFAULT current_timestamp(),
  `total_price` varchar(35) NOT NULL,
  `payment_type` varchar(35) NOT NULL,
  `status` varchar(30) NOT NULL DEFAULT 'Successful',
  `points_earned` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`transaction_id`, `screening_id`, `member_id`, `transactionDateTime`, `total_price`, `payment_type`, `status`, `points_earned`) VALUES
(39, 12, 6, '2022-04-07 09:51:41', '80', 'Mastercard', 'Successful', 315),
(40, 12, 8, '2022-04-07 16:38:44', '30', 'Touch n Go eWallet', 'Successful', 332),
(41, 12, 8, '2022-04-07 16:51:17', '50', 'VISA Card', 'Successful', 401),
(42, 12, 8, '2022-04-07 19:39:37', '30', 'Touch n Go eWallet', 'Successful', 166),
(43, 13, 8, '2022-04-07 19:54:32', '20', 'Touch n Go eWallet', 'Successful', 497),
(44, 13, 8, '2022-04-07 22:57:21', '150', 'Touch n Go eWallet', 'Successful', 190),
(45, 13, 8, '2022-04-07 23:00:55', '20', 'Mastercard', 'Successful', 100),
(46, 13, 8, '2022-04-07 23:01:51', '100', 'VISA Card', 'Successful', 100),
(47, NULL, 11, '2022-04-08 00:00:00', '100', 'VISA Card', 'Successful', 0),
(48, NULL, 12, '2022-04-07 00:00:00', '90', 'VISA Card', 'Successful', 0),
(49, 13, 6, '2022-04-07 23:58:09', '100', 'Mastercard', 'Successful', 0),
(50, 12, 6, '2022-04-08 00:07:44', '20', 'Mastercard', 'Successful', 100);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `user_name`, `email`, `password`, `gender`, `dob`) VALUES
(1, 'Assignment', 'Assignment', 'test', 'test@test.com', '1234', 'male', '1997-05-06'),
(2, 'claire', 'C', 'Claire', 'clair@gmail.com', '123', 'female', '2000-03-11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`br_id`),
  ADD KEY `Hall Foreign Key` (`hall_id`),
  ADD KEY `Screening Foreign Key` (`screening_id`);

--
-- Indexes for table `hall`
--
ALTER TABLE `hall`
  ADD PRIMARY KEY (`h_id`),
  ADD KEY `Foreign Key` (`seat_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`movie_id`);

--
-- Indexes for table `screening`
--
ALTER TABLE `screening`
  ADD PRIMARY KEY (`screening_id`),
  ADD KEY `Movie Foreign Key` (`movie_id`),
  ADD KEY `Branch Foreign Key` (`branch_id`),
  ADD KEY `Halll Foreign Key` (`hall_id`);

--
-- Indexes for table `seat`
--
ALTER TABLE `seat`
  ADD PRIMARY KEY (`seat_id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `br_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `hall`
--
ALTER TABLE `hall`
  MODIFY `h_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `movie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `screening`
--
ALTER TABLE `screening`
  MODIFY `screening_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `seat`
--
ALTER TABLE `seat`
  MODIFY `seat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123521;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
