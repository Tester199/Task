-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2019 at 06:23 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(250) NOT NULL,
  `lname` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `dob` date NOT NULL,
  `location` text NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `mobile`, `dob`, `location`, `created_at`, `updated_at`, `status`) VALUES
(1, 'Tester', 'One', 'tester1@gmail.com', 9639639630, '1994-10-12', 'Andhra Pradesh, India', '2019-03-02', '0000-00-00 00:00:00', 1),
(2, 'Tester', 'Two', 'tester2@gmail.com', 9519519510, '1995-11-09', 'Andhra Pradesh, India', '2019-03-02', '0000-00-00 00:00:00', 1),
(3, 'dfdf', 'dsf', 'dasfd@gmail.com', 9639633963, '1992-03-12', 'Andhra Pradesh, India', '2019-03-03', '2019-03-03 09:42:43', 1),
(4, 'dfdf', 'dsf', 'dasfd@gmail.com', 9639633963, '1992-03-12', 'Andhra Pradesh, India', '2019-03-03', '2019-03-03 09:43:51', 1),
(5, 'dfdf', 'dfssdf', 'asd@asd.com', 9874561230, '1993-03-12', 'Andhra Pradesh, India', '2019-03-03', '2019-03-03 09:49:58', 1),
(6, 'dsfsdgfg', 'dfgdfg', 'tester4@test.com', 9548625301, '1993-02-12', 'Andhra Pradesh, India', '2019-03-03', '2019-03-03 10:04:39', 1),
(7, 'Naga', 'Anusha', 'nagaanusha099@gmail.com', 8500168005, '1992-11-21', 'Ahmedabad, Gujarat, India', '2019-03-03', '2019-03-03 10:18:02', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
