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
(1, 'Russel Mención', 444430, '1st', 'Sta. Mesa', '09912345678', '1.png', '2020-12-04 16:17:58'),
(2, 'Kole Mallari', 444431, '2nd', 'Quezon City', '091812888858', '2.png', '2020-12-04 16:18:53'),
(3, 'Abu Balagtas', 444350, '5th', 'Lucban', '091797159600', '3.png', '2020-12-04 16:19:28'),
(4, 'Muraoka Isip', 444432, '2nd', 'Subic', '091797159600', '4.png', '2020-12-04 16:19:51'),
(5, 'Irvin Gil Amparo', 443353, '3rd', 'Cubao', '091814270541', '5.png', '2020-12-04 16:21:32'),
(6, 'Phillips Dagohoy', 444420, '1st', 'Binondo', '091814270541', '6.png', '2020-12-04 16:21:32'),
(7, 'Humberto Pancho', 445699, '3rd', 'Baler', '091999997765', '7.png', '2020-12-05 16:13:35'),
(8, 'Cojuangco Alonzo', 444434, '4th', 'Olongapo', '091999999453', '8.png', '2020-12-05 16:15:18'),
(9, 'Orlando Kumulitog Soler', 444445, '3rd', 'Pasig', '091999999460', '9.png', '2020-12-05 16:16:17'),
(10, 'Tristen Drew Gahol', 444438, '5th', 'Taiwan', '091999999948', '10.png', '2020-12-05 16:17:09'),
(11, 'Edgardo Cueva', 444491, '4th', 'Mexico', '091999999977', '11.png', '2020-12-06 11:40:24');

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
(1, 'Asher Manangan', 'ashermanangan@gmail.com', 'asher-admin', 'asher-admin', 'asher1.jpg', 'active', '2020-12-05 16:09:53'),
(2, 'Andrew Ferrer', 'andrewferrer@gmail.com', 'andrew-admin', 'andrew-admin', 'andrew1.jpg', 'active', '2020-12-05 16:09:53'),
(3, 'Kenneth Cayas', 'kennethcayas@gmail.com', 'kenneth-admin ', 'kenneth-admin', 'kenneth1.jpg', 'active', '2020-12-05 16:09:53'),
(4, 'Jari Parial', 'jariparial0@gmail.com', 'jari-admin', 'jari-admin', 'jari1.jpg', 'active', '2020-12-05 16:09:53'),
(5, 'Philip Lababo', 'philipcarlo@gmail.com', 'philip-admin', 'philip-admin', 'philip1.jpg', 'active', '2020-12-05 16:09:53');
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
