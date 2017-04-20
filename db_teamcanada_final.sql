-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2017 at 08:03 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_teamcanada`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogposts`
--

CREATE TABLE `blogposts` (
  `id` int(11) NOT NULL,
  `p_title` varchar(200) NOT NULL,
  `p_date` date NOT NULL,
  `p_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `p_content` text NOT NULL,
  `p_img_src` text,
  `p_tags` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogposts`
--

INSERT INTO `blogposts` (`id`, `p_title`, `p_date`, `p_time`, `p_content`, `p_img_src`, `p_tags`) VALUES
(2, 'NEW WEBSITE LAUNCH', '2017-04-07', '2017-04-07 14:59:28', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n', NULL, 'info'),
(3, '"CURSE OF CLARA"', '2017-03-22', '2017-04-07 15:17:56', '"The Curse of Clara" has been named the Best Animated Programme at the 2017 Canadian Screen Awards.\r\n\r\nAs reported previously on this website, "Clara" stars the voice and image of TeamCanada 1972\'s own Phil Esposito.\r\n\r\nCongratulations to Vickie Fagan and everyone else who made "Clara" such a success.', NULL, 'news');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_images`
--

CREATE TABLE `gallery_images` (
  `id` int(11) NOT NULL,
  `i_tags` text NOT NULL,
  `i_src` text NOT NULL,
  `i_title` text NOT NULL,
  `i_desc` text NOT NULL,
  `hide` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery_images`
--

INSERT INTO `gallery_images` (`id`, `i_tags`, `i_src`, `i_title`, `i_desc`, `hide`) VALUES
(26, 'Gala', 'img/uploads/gallery/gala26.jpg', 'Gala', 'Gala', 0),
(24, 'gala', 'img/uploads/gallery/gala20.jpg', 'Gala', 'Gala', 0),
(25, 'gala', 'img/uploads/gallery/gala21.jpg', 'Gala', 'Gala', 0),
(23, 'player', 'img/uploads/gallery/stapleton_head.jpg', 'Pat Stapleton', 'Pat Stapleton', 0),
(27, 'gala', 'img/uploads/gallery/gala32.jpg', 'Gala', 'Gala', 0),
(28, 'conference', 'img/uploads/gallery/CONFERENCE-8.jpg', 'Press Conference', 'press conference', 0),
(29, 'action', 'img/uploads/gallery/ACTION-12.jpg', 'Game Action', 'action', 0),
(30, 'gala', 'img/uploads/gallery/gala26.jpg', 'Gala', 'Gala', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `f_name` varchar(20) NOT NULL,
  `l_name` varchar(20) NOT NULL,
  `p_phrase` char(60) NOT NULL,
  `u_email` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `f_name`, `l_name`, `p_phrase`, `u_email`) VALUES
(1, 'nick', 'ireland', '$2y$10$RIFd57UcSkMHV/ZZFVbzme4M22BOcjLAF4w9EI4gtCkXA5BUlHLwu', 'test@test.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogposts`
--
ALTER TABLE `blogposts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_images`
--
ALTER TABLE `gallery_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogposts`
--
ALTER TABLE `blogposts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `gallery_images`
--
ALTER TABLE `gallery_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
