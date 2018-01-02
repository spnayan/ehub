-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2017 at 09:02 AM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ehub`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `firstName` varchar(100) DEFAULT NULL,
  `middleName` varchar(100) DEFAULT NULL,
  `lastName` varchar(100) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `emailId` varchar(70) DEFAULT NULL,
  `password` varchar(225) DEFAULT NULL,
  `school` varchar(225) NOT NULL,
  `college` varchar(225) NOT NULL,
  `university` varchar(225) NOT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(7) DEFAULT NULL,
  `currentSubject` varchar(100) DEFAULT NULL,
  `level` varchar(50) DEFAULT NULL,
  `mobileNumber` int(50) NOT NULL,
  `profilePic` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `firstName`, `middleName`, `lastName`, `username`, `emailId`, `password`, `school`, `college`, `university`, `dob`, `gender`, `currentSubject`, `level`, `mobileNumber`, `profilePic`) VALUES
(3, 'Gaurab', 'Prasad', 'Panthee', 'sushuoit11', 'sushuoit1@gmail.com', '$2y$10$fcSpxcYUxIKOhF5/XIE1JuwJq0GLMF736Huq1bn.WDTOClMrPbd8C', 'Tri_jyoti Higher Secondary School', 'Golden-Gate International College', 'Tribhuwan University', '1997-06-10', 'Male', 'Computer Engineering', 'Bachelors', 2147483647, ''),
(19, 'saurav', 'Prasad', 'Panthee', 'sushuoit12', 'sushuoit12@gmail.com', '$2y$10$/GdG7o5vkz907B1CQcnB9eYrWl.d8HAOPb0nPfrULrL/NLVB0l82O', 'Tri_jyoti Higher Secondary School', 'Golden-Gate International College', 'Tribhuwan University', '1997-06-10', 'Male', 'Computer Engineering', 'Bachelors', 2147483647, ''),
(21, 'sudeep', 'Kumar', 'Puri', 'spnayan', 'ispnayan@gmail,com', '$2y$10$Bk5KzbQJh0wlh.BwpX4OWekGfVhunnx3AqlyIt2Q/ECwyk/xaUpDW', 'Tri_jyoti Higher Secondary School', 'KMC', 'Tribhuwan University', '1996-09-08', 'Male', 'Computer Engineering', 'Bachelors', 2147483647, ''),
(22, 'sudeep', 'Prasad', 'Panthee', 'varuas', 'gaurab.panthee@gmail.com', '$2y$10$bEjiahcohy.EPd76bKomNunpFhrmhgWcMnJoW1xoTV4TDzLJfPtsu', 'Tri_jyoti Higher Secondary School', 'Golden-Gate International College', 'Tribhuwan University', '1990-09-09', 'Male', 'Computer Engineering', 'Bachelors', 2147483647, ''),
(28, 'sudeep', 'Prasad', 'Panthee', 'varuas19', 'gaurab.panthee1@gmail.com', '$2y$10$amoSeAKVl7.lQo.q3z0VsOLTL7IBUW47XgQldW42Xxhpnkj.fP9K2', 'Tri_jyoti Higher Secondary School', 'Golden-Gate International College', 'Tribhuwan University', '1990-09-09', 'Male', 'Computer Engineering', 'Bachelors', 2147483647, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `emailId` (`emailId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
