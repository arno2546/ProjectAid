-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2020 at 06:58 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectaid`
--

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `title` varchar(200) NOT NULL,
  `des` varchar(250) NOT NULL,
  `dlink` varchar(2000) NOT NULL,
  `glink` varchar(2000) NOT NULL,
  `pid` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`title`, `des`, `dlink`, `glink`, `pid`) VALUES
('asdasd', 'a', 'google.com', 'github.com', 1),
('Alib vai Legend', 'Lol', 'google.com', 'github.com', 2),
('Test Project ', 'first value applies to top-left corner, second value applies to top-right corner, third value applies to bottom-right corner, and fourth value applies to bottom-left corner', 'test.com', 'github@test.com', 3),
('Test Project 2', 'first value ', 'test.com', 'github@test.com', 4),
('test3', 'Description is the pattern of narrative development that aims to make vivid a place, object, character, or group. Description is one of four rhetorical modes, along with exposition, argumentation, and narration. ', '', '', 5),
('Test4', 'Description is the pattern of narrative development that aims to make vivid a place, object, character, or group. Description is one of four rhetorical modes, along with exposition, argumentation, and narration. In practice it would be difficult to w', 'merriam-webster.com/dictionary/description', 'github.com/scikit-image/scikit-image', 6),
('Name of the project ', 'Description here ', 'drive.google.com', 'github.com', 10);

-- --------------------------------------------------------

--
-- Table structure for table `projects1`
--

CREATE TABLE `projects1` (
  `pid` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `des` varchar(1000) NOT NULL,
  `dlink` varchar(1000) NOT NULL,
  `glink` varchar(1000) NOT NULL,
  `con` varchar(1000) NOT NULL,
  `aid_type` varchar(1000) NOT NULL,
  `uid` varchar(1000) NOT NULL,
  `verf` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projects1`
--

INSERT INTO `projects1` (`pid`, `title`, `des`, `dlink`, `glink`, `con`, `aid_type`, `uid`, `verf`) VALUES
(8, 'test10', 'something here', 'drive.google.com', 'github', '', '', '', 'no'),
(15, 'NetworkX', 'NetworkX is a Python package for the creation, manipulation, and study of the structure, dynamics, and functions of complex networks.', 'pypi.python.org/pypi/networkx', 'networkx.github.io', 'mumin@legend.com', 'Financial', '2', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `password`, `email`) VALUES
(1, 'al', '123', 'asd@gmail.com'),
(15, 'alib', '', ''),
(16, 'alib', '123', ''),
(19, 'alib', '123', ''),
(20, 'alibvailegend', '1233', ''),
(21, 'alibaba', '1233', ''),
(22, 'alibaba', '1233', ''),
(23, 'legendAlib', '123123', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `uname` varchar(200) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `address` varchar(500) NOT NULL,
  `occupation` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL,
  `user_type` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `uname`, `fname`, `lname`, `email`, `password`, `phone`, `address`, `occupation`, `status`, `user_type`) VALUES
(2, 'MuminLegend', 'Mumin', 'Vai', 'mumin@legend.com', '123123', '01910000002', 'Baganbari, Cantonment, Mirpur, Dhaka', 'Academic', 'active', 'gen_user'),
(3, 'RahmanVaiLegend', 'Rahman', 'Vai', 'rahman@legend.com', '123123', '01900000000', 'Mars', 'Academic', 'banned', 'gen_user'),
(6, 'LegendAlib', '', '', 'alibvai@legend.com', '123123', '0191452523422', '', '', 'active', 'admin'),
(9, 'LegendRafat', '', '', 'rafat@gmail.com', '123123', '01732334521', '', '', 'active', 'admin'),
(11, 'RafatLegend', '', '', 'rafat@legend.com', '123123', '01912304102', '', '', 'active', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `projects1`
--
ALTER TABLE `projects1`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `pid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `projects1`
--
ALTER TABLE `projects1`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
