-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2022 at 05:21 PM
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
-- Database: `to_assignment`
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
  `branch_image` varchar(30) DEFAULT NULL,
  `no_of_halls` int(11) NOT NULL,
  `hall_id` int(11) NOT NULL,
  `screening_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`br_id`, `branch_id`, `branch_name`, `branch_address`, `branch_image`, `no_of_halls`, `hall_id`, `screening_id`) VALUES
(15, 'test branchh', 'branch name testt', 'addresss', '20180917_173240.jpg', 0, 33, NULL),
(17, 'branch testingoo', 'branch name testingoo', 'address testingoo', 'IMG_20220227_191518.jpg', 3, 11, NULL),
(18, 'abc', 'xyz', 'lkjhh', 'IMG_20220227_191215.jpg', 2, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hall`
--

CREATE TABLE `hall` (
  `h_id` int(11) NOT NULL,
  `hall_id` int(11) NOT NULL,
  `seat_id` int(11) DEFAULT NULL,
  `hall_no` int(11) NOT NULL,
  `hall_type` varchar(30) NOT NULL,
  `hall_capacity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hall`
--

INSERT INTO `hall` (`h_id`, `hall_id`, `seat_id`, `hall_no`, `hall_type`, `hall_capacity`) VALUES
(3, 33, NULL, 1, 'abc type', 120),
(4, 90, NULL, 90, 'uy', 45),
(5, 1, NULL, 1, 'open', 20),
(6, 0, NULL, 1, 'open', 300);

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
(4, 'IMG_20220227_191518.jpg', 'houseyttt', '600', '2022-03-03', 51, 'https://www.youtube.com/embed/jYJS235KmpY', 'eutruertyuer', 'okii');

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
(6, 's2', 3, 15, 33, '2022-03-25', '1:30pm'),
(7, 'pk', 4, 18, 90, '2022-03-17', '1:30pm');

-- --------------------------------------------------------

--
-- Table structure for table `seat`
--

CREATE TABLE `seat` (
  `seat_id` int(11) NOT NULL,
  `seat_num` int(11) NOT NULL,
  `seat_status` varchar(30) NOT NULL,
  `seat_type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(2, 'clair', 'teacherOn', 'clairTO', 'clair@gmail.com', 'clairTO000', 'female', '2026-03-11');

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
  MODIFY `br_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `hall`
--
ALTER TABLE `hall`
  MODIFY `h_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `movie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `screening`
--
ALTER TABLE `screening`
  MODIFY `screening_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `seat`
--
ALTER TABLE `seat`
  MODIFY `seat_id` int(11) NOT NULL AUTO_INCREMENT;

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
