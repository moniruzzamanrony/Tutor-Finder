-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2020 at 04:59 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tutorfinder`
--

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `class` varchar(100) NOT NULL,
  `medium` varchar(100) NOT NULL,
  `srange` varchar(200) NOT NULL,
  `location` varchar(100) NOT NULL,
  `university` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `timedate` varchar(255) DEFAULT NULL,
  `isApprove` tinyint(1) DEFAULT NULL,
  `userId` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `name`, `class`, `medium`, `srange`, `location`, `university`, `type`, `subject`, `timedate`, `isApprove`, `userId`) VALUES
(40, 'AL Amin Ashik', 'five', 'Bangla', '1k-5k', 'Gazipur', 'DIU', 'student', 'English', '2020-03-19 18:21:26', 0, '5e61279cc2a2c'),
(41, 'Monirozzaman roni', 'five', 'Bangla', '1k-5k', 'Gazipur', 'DIU', 'student', 'Math', '2020-03-19 18:24:13', 1, '5e739a0226abb'),
(43, 'Dr X', 'five', 'Bangla', '1k-5k', 'Gazipur', 'DIU', 'student', 'English', '2020-03-29 00:25:07', 1, '5e7fdbdc7a667'),
(44, 'Dr X', 'five', 'Bangla', '1k-5k', 'Gazipur', 'DIU', 'student', 'English', '2020-03-29 04:27:24', 1, '5e7fdbdc7a667'),
(45, 'Dr X', 'five', 'Bangla', '1k-5k', 'Gazipur', 'DIU', 'student', 'Physics', '2020-04-08 12:15:45', 1, '5e7fdbdc7a667');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userId` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userId`, `name`, `email`, `password`) VALUES
('5e60f58231e7a', 'Monirozzaman roni', 'ui@d.com', '25d55ad283aa400af464c76d713c07ad'),
('5e60f7e21f95a', 'dfgdf', 'ui@d.com', '635783be38b6a971aa1e43cf91a92398'),
('5e61279cc2a2c', 'AL Amin Ashik', 'eproni29@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759'),
('5e739a0226abb', 'Monirozzaman roni', 'r@gmail.com', 'd3e8bd7353b39a0a971a4f028cb976ba'),
('5e7fdbdc7a667', 'Dr X', 'x@gmail.com', '0e15ace589f64e8855a28f91b62e461c');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
