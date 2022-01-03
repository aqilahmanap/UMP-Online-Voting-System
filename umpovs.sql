-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2022 at 07:33 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `umpovs`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE `candidates` (
  `cID` varchar(20) NOT NULL,
  `cName` text NOT NULL,
  `cUsername` varchar(20) NOT NULL,
  `cPassword` varchar(20) NOT NULL,
  `cImage` text NOT NULL,
  `Position` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`cID`, `cName`, `cUsername`, `cPassword`, `cImage`, `Position`) VALUES
('CB18067', 'Ahmad AfizFaiz bin Roslan', 'CB18067', 'candidate123', '1617111420_apiz.jpg', 'President'),
('CB18103', 'Azrul Hiezylan bin Abd Rahman', 'CB18103', 'candidate123', '1617111420_hiezylan.jpg', 'Vice President'),
('CB18110', 'Wan Maizah Farhana binti Wan Mazlan', 'CB18110', 'candidate123', '1616998080_mai.jpg', 'Vice President'),
('CB18116', 'Nur Aqilah binti Abdul Manap', 'CB18116', 'candidate123', '1616993460_IMG_9505-copy.jpg', 'President');

-- --------------------------------------------------------

--
-- Table structure for table `category_list`
--

CREATE TABLE `category_list` (
  `id` int(30) NOT NULL,
  `category` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category_list`
--

INSERT INTO `category_list` (`id`, `category`) VALUES
(1, 'President'),
(3, 'Vice President');

-- --------------------------------------------------------

--
-- Table structure for table `manifesto`
--

CREATE TABLE `manifesto` (
  `cID` varchar(20) NOT NULL,
  `cName` text NOT NULL,
  `cManifesto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manifesto`
--

INSERT INTO `manifesto` (`cID`, `cName`, `cManifesto`) VALUES
('abc', '', 'abc'),
('CB18067', 'Ahmad AfizFaiz bin Roslan', 'Hi, my name is AfizFaiz and I\'m the candidate for President of MPP.'),
('CB18110', 'Wan Maizah Farhana', 'Hello, Hi, my name is Wan Maizah Farhana and I\'m the candidate for President of MPP.'),
('CB18116', 'Nur Aqilah binti Abdul Manap', 'Hi, my name is Nur Aqilah and I\'m the candidate for President of MPP. This is my manifesto :)'),
('CB18117', 'Azrul Hiezylan', 'Hello, Hi, my name is Azrul Hiezylan and I\'m the candidate for President of MPP.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(30) NOT NULL,
  `name` varchar(200) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT 2 COMMENT '1+admin , 2 = users, 3=candidates'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `type`) VALUES
(1, 'Administrator', 'admin', 'admin123', 1),
(2, 'Nur Aqilah', 'CB18116', 'admin123', 1),
(3, 'Nur Aqilah binti Abdul Manap', 'CB18116', 'cb18116', 2),
(4, 'Wan Maizah Farhana binti Wan Mazlan', 'CB18110', 'cb18110', 2),
(6, 'Nur Aqilah binti Abdul Manap', 'CB18116', 'candidate123', 3),
(7, 'Nur Aqilah', 'CB18116', 'voter123', 2);

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE `votes` (
  `id` int(30) NOT NULL,
  `voting_id` int(30) NOT NULL,
  `category_id` int(30) NOT NULL,
  `voting_opt_id` int(30) NOT NULL,
  `user_id` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `votes`
--

INSERT INTO `votes` (`id`, `voting_id`, `category_id`, `voting_opt_id`, `user_id`) VALUES
(16, 1, 1, 1, 11),
(17, 1, 3, 12, 11),
(18, 1, 6, 14, 14),
(19, 1, 1, 3, 15),
(20, 1, 3, 12, 15),
(21, 1, 6, 13, 15),
(22, 1, 1, 3, 5),
(23, 1, 3, 5, 5),
(24, 1, 6, 14, 5),
(36, 1, 1, 1, 3),
(37, 1, 3, 12, 3);

-- --------------------------------------------------------

--
-- Table structure for table `voting_cat_settings`
--

CREATE TABLE `voting_cat_settings` (
  `id` int(30) NOT NULL,
  `voting_id` int(30) NOT NULL,
  `category_id` int(30) NOT NULL,
  `max_selection` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `voting_cat_settings`
--

INSERT INTO `voting_cat_settings` (`id`, `voting_id`, `category_id`, `max_selection`) VALUES
(1, 1, 1, 1),
(2, 1, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `voting_list`
--

CREATE TABLE `voting_list` (
  `id` int(30) NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `is_default` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `voting_list`
--

INSERT INTO `voting_list` (`id`, `title`, `description`, `is_default`) VALUES
(1, 'STUDENT REPRESENTATIVE COUNCIL', 'Cabinet Members of the Student Representative Council (MPP) UMP Session 2021/2022', 1),
(6, 'Testing Title', 'Testing Description\r\n', 0);

-- --------------------------------------------------------

--
-- Table structure for table `voting_opt`
--

CREATE TABLE `voting_opt` (
  `id` int(30) NOT NULL,
  `voting_id` int(30) NOT NULL,
  `category_id` int(30) NOT NULL,
  `image_path` text NOT NULL,
  `opt_txt` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `voting_opt`
--

INSERT INTO `voting_opt` (`id`, `voting_id`, `category_id`, `image_path`, `opt_txt`) VALUES
(1, 1, 1, '1616993460_IMG_9505-copy.jpg', 'Nur Aqilah'),
(3, 1, 1, '1617111420_apiz.jpg', 'Ahmad AfizFaiz'),
(5, 1, 3, '1616998080_mai.jpg', 'Wan Maizah Farhana'),
(12, 1, 3, '1617111420_hiezylan.jpg', 'Azrul Hiezylan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidates`
--
ALTER TABLE `candidates`
  ADD PRIMARY KEY (`cID`);

--
-- Indexes for table `category_list`
--
ALTER TABLE `category_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manifesto`
--
ALTER TABLE `manifesto`
  ADD PRIMARY KEY (`cID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `votes`
--
ALTER TABLE `votes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `voting_cat_settings`
--
ALTER TABLE `voting_cat_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `voting_list`
--
ALTER TABLE `voting_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `voting_opt`
--
ALTER TABLE `voting_opt`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category_list`
--
ALTER TABLE `category_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `votes`
--
ALTER TABLE `votes`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `voting_cat_settings`
--
ALTER TABLE `voting_cat_settings`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `voting_list`
--
ALTER TABLE `voting_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `voting_opt`
--
ALTER TABLE `voting_opt`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
