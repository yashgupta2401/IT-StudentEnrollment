-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2020 at 02:22 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `id` int(5) NOT NULL,
  `name` varchar(20) NOT NULL,
  `roll` int(6) NOT NULL,
  `class` varchar(3) NOT NULL,
  `city` varchar(15) NOT NULL,
  `pcontact` varchar(11) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`id`, `name`, `roll`, `class`, `city`, `pcontact`, `photo`, `datetime`) VALUES
(1, 'Ravi Srivastava', 444430, '1st', 'Lucknow , India', '01912345678', '4444302020-12-05-12-36.jfif', '2020-12-04 16:17:58'),
(2, 'Rekha Kumari', 444431, '2nd', 'Kanpur, UP', '01812888858', '4444312020-12-05-12-23.jpg', '2020-12-04 16:18:53'),
(3, 'Shivam Bhisen', 444350, '5th', 'Lucknow, UP', '01797159600', '4443502020-12-05-12-11.jpg', '2020-12-04 16:19:28'),
(4, 'Abdul Azim', 444432, '2nd', 'Bhopal, MP ', '01797159600', '4444322020-12-05-12-59.jpg', '2020-12-04 16:19:51'),
(5, 'Madhu Singh', 443353, '3rd', 'Bareilly, UP', '01814270541', '4433532020-12-05-12-25.jpg', '2020-12-04 16:21:32'),
(6, 'Priyanka Singh', 444420, '1st', 'Lucknow, UP', '01814270541', '4444202020-12-05-12-43.jfif', '2020-12-04 16:21:32'),
(7, 'Vasu Gupta', 445699, '3rd', 'Lucknow, India', '01999997765', '4456992020-12-05-12-35.jpg', '2020-12-05 16:13:35'),
(8, 'Devika Chaste', 444434, '4th', 'Hyderabad,India', '01999999453', '4444342020-12-05-12-18.jpg', '2020-12-05 16:15:18'),
(9, 'Puneet Kumar', 444445, '3rd', 'Lucknow, India', '01999999460', '4444452020-12-05-12-17.jpg', '2020-12-05 16:16:17'),
(10, 'Ankita Thakur', 444438, '5th', 'Delhi , India', '01999999948', '4444382020-12-05-12-09.jpg', '2020-12-05 16:17:09'),
(11, 'Riya Kumari', 444491, '4th', 'Agra, Lucknow', '01999999977', '4444912020-12-06-12-24.jpg', '2020-12-06 11:40:24');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `status` varchar(12) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `password`, `photo`, `status`, `datetime`) VALUES
(1, 'Yash Gupta', 'gupta.yash2410@gmail.com', 'yash1234', '5b07967c1746831fe66b04b26fd2a7b2c92c5188', 'yash1234.jpg', 'active', '2020-12-05 16:09:53'),
(3, 'Yogesh Kumar', 'yogesh@gmail.com', 'yogesh1234', 'f0a4d501559789a00695452c68f26dbe553575db', 'yogesh1234.jpg', 'inactive', '2020-12-05 16:21:36'),
(4, 'Saurabh ', 'sarbh@gmail.com', 'saurabh1234', 'c84f6c83c489f422055ff7c5d83880a72db1280e', 'saurabh1234.jfif', 'inactive', '2020-12-05 16:23:24');

--
-- 
--

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roll` (`roll`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_info`
--
ALTER TABLE `student_info`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
