-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2023 at 07:14 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sebuu`
--

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `id` int(11) NOT NULL,
  `student_id` int(25) NOT NULL,
  `name` varchar(25) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `mname` varchar(15) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `dob` date NOT NULL,
  `present` varchar(30) NOT NULL,
  `religion` varchar(8) NOT NULL,
  `nationality` varchar(6) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `blood` varchar(5) NOT NULL,
  `standard` varchar(15) NOT NULL,
  `fees` int(10) NOT NULL,
  `tfees` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`id`, `student_id`, `name`, `fname`, `mname`, `gender`, `dob`, `present`, `religion`, `nationality`, `phone`, `email`, `blood`, `standard`, `fees`, `tfees`) VALUES
(3, 100, 'SEBU', 'lakalakalaka', 'Nisa', 'male', '2023-08-19', 'Uchila', 'Muslim', 'Indian', 8792424869, 'msuhaib730@gmail.com', 'AB+ve', 'SSLC', 10000, 20000),
(4, 101, 'laka', 'lakalakalaka', 'hinjinj', 'male', '2023-08-19', 'fggg', 'Muslim', 'Indian', 9982667387, 'msuhaib786313@gmail.com', 'o+', 'SSLC', 12000, 20000),
(5, 102, 'Mohammed Ali', 'sasdfg', 'fghh', 'male', '2023-08-19', 'vfddd', 'Muslim', 'Indian', 2242767887, 'sdfg@gmail.com', 'AB+ve', 'Ninth', 8000, 17000),
(6, 103, 'azmon', 'kn', 'Nisa', 'male', '2023-08-26', 'bngh', 'Muslim', 'Indian', 9375293741, 'az@gmail.com', 'o+', 'Eighth', 6000, 15000),
(7, 104, 'ham', 'lakalakalaka', 'fghh', 'male', '2023-08-26', 'gggh', 'Muslim', 'Indian', 9982667387, 'ham@gmail.com', 'AB+ve', 'Ninth', 5000, 17000),
(8, 105, 'leks', 'sasdfg', 'hinjinj', 'female', '2023-08-19', 'dfghh', 'Muslim', 'Indian', 9375293741, 'leks@gmail.com', 'b+ve', 'Ninth', 14000, 17000),
(9, 106, 'chethan', 'sasdfg', 'hinjinj', 'male', '2019-02-28', 'ggghj', 'Muslim', 'Indian', 9375293741, 'nandanakundapur@gmail.com', 'o+', 'SSLC', 2000, 20000),
(10, 107, 'tarak', 'lakalakalaka', 'fghh', 'male', '2024-03-07', 'ghgjtre', 'Hindu', 'Indian', 9375293741, 'ACHARYA987@GMAIL.COM', 'o+', 'Seventh', 3000, 12000),
(11, 108, 'joshna', 'sasdfg', 'Nisa', 'female', '2023-08-31', 'gbhndjf', 'Hindu', 'Indian', 2242767887, 'sdfg@gmail.com', 'b+ve', 'Sixth', 10000, 1000),
(12, 109, 'madan', 'kn', 'hinjinj', 'male', '2023-08-26', 'dfghj', 'Hindu', 'usa', 9375293741, 'sdfg@gmail.com', 'AB+ve', 'Eighth', 3000, 15000),
(13, 110, 'kara', 'sasdfg', 'hinjinj', 'male', '2023-08-26', 'fgghfj', 'Hindu', 'Indian', 9982667387, 'ACHARYA987@GMAIL.COM', 'b+ve', 'Seventh', 6000, 12000),
(14, 201, 'azmal', 'monu', 'nisa', 'male', '2023-08-03', 'shjddgfvjagvadvfuad', 'hbdhf', 'hdbhsd', 7894561230, 'ajmal@gmail.com', 'b+ve', 'sjvfhs', 0, 0),
(15, 202, 'azmal', 'monu', 'azm', 'female', '2023-08-04', 'hbdjhsjhakchabka', 'jsjs', 'hdfd', 54894549, 'ajadja@bchs.com', 'nz', 'jjsb', 0, 0),
(16, 304, 'ghhhbh', 'gghghbh', '  hbhb', 'female', '2023-08-12', 'hbbgvjjjhh', 'ret', 'jhg', 456787654, 'msuha@gmail.com', 'a', '9', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reg`
--
ALTER TABLE `reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
