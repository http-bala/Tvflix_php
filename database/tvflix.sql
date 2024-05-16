-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2024 at 09:46 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tvflix`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(111) DEFAULT NULL,
  `adminuser` varchar(111) NOT NULL,
  `password` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `adminuser`, `password`) VALUES
(NULL, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `genres`
--

CREATE TABLE `genres` (
  `id` int(111) NOT NULL,
  `genres_name` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `genres`
--

INSERT INTO `genres` (`id`, `genres_name`) VALUES
(2, 'adventure'),
(3, 'animation'),
(4, 'comdey'),
(5, 'crime'),
(6, 'documentary'),
(7, 'drama'),
(8, 'family'),
(9, 'fantasy'),
(10, 'history'),
(11, 'horror'),
(12, 'music'),
(13, 'mystrys'),
(14, 'romance'),
(15, 'science ficition'),
(16, 'Tv movie'),
(17, 'Thriller'),
(18, 'western'),
(24, 'war'),
(25, 'action');

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE `language` (
  `id` int(111) NOT NULL,
  `language` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`id`, `language`) VALUES
(1, 'hindi'),
(2, 'gujarati'),
(3, 'english'),
(4, 'telegu');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(111) NOT NULL,
  `adult` varchar(111) NOT NULL,
  `backdrop_path` varchar(111) NOT NULL,
  `generes` varchar(111) NOT NULL,
  `oringal_title` varchar(111) NOT NULL,
  `overview` varchar(111) NOT NULL,
  `poster_path` varchar(111) NOT NULL,
  `release_date` varchar(111) NOT NULL,
  `title` varchar(111) NOT NULL,
  `video_path` varchar(111) NOT NULL,
  `vote_count` varchar(111) NOT NULL,
  `language` varchar(111) NOT NULL,
  `views` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `adult`, `backdrop_path`, `generes`, `oringal_title`, `overview`, `poster_path`, `release_date`, `title`, `video_path`, `vote_count`, `language`, `views`) VALUES
(3, 'true', '527260874.jpg', 'action', 'Wednesday', 'Thriller, Drama Movies', '831181792.jpg', 'date', ' Wednesday', '224579768.jpg', '0', 'english ', '3'),
(4, 'true', '754752728.jpg', 'drama', 'RamSetu', 'thriller , Drama Movies', '1968051560.jpg', 'date', ' RamSetu', '706172918.jpg', '0', 'hindi ', '6'),
(5, 'true', '939801962.jpg', 'family', 'crack', 'hfhfhfh', '522453092.jpg', 'date', ' crack', '1575242967.jpg', '0', 'hindi ', '3'),
(7, 'true', '1008241802.jpeg', 'animation', 'sdcdc', 'cdscsdc', '1618371743.jpeg', 'date', ' sdcdc', '1953026668.mp4', '0', 'gujarati ', '4'),
(8, 'true', '672533591.jpg', 'animation', 'testing movies upload', 'testing movies upload', '855160317.jpg', 'date', ' testing movies upload', '668095920.mp4', '0', 'hindi ', '35');

-- --------------------------------------------------------

--
-- Table structure for table `user-details`
--

CREATE TABLE `user-details` (
  `id` int(111) NOT NULL,
  `phonenumber` varchar(111) NOT NULL,
  `email` varchar(111) NOT NULL,
  `username` varchar(111) NOT NULL,
  `password` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user-details`
--

INSERT INTO `user-details` (`id`, `phonenumber`, `email`, `username`, `password`) VALUES
(1, '7600298709', 'balakolla0014@gmail.com', 'balakrishna', '12345678');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user-details`
--
ALTER TABLE `user-details`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `genres`
--
ALTER TABLE `genres`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `language`
--
ALTER TABLE `language`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user-details`
--
ALTER TABLE `user-details`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
