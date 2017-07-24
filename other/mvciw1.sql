-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 24, 2017 at 09:50 AM
-- Server version: 5.6.34-log
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mvciw1`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(11) NOT NULL,
  `content` tinyint(4) NOT NULL,
  `dateInserted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dateUpdate` timestamp NULL DEFAULT NULL,
  `idNews` int(11) NOT NULL,
  `idUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `id` int(11) NOT NULL,
  `title` varchar(45) NOT NULL,
  `description` tinytext NOT NULL,
  `date` date NOT NULL,
  `dateInserted` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `isDeleted` tinyint(1) NOT NULL DEFAULT '0',
  `author` varchar(45) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `title`, `description`, `date`, `dateInserted`, `dateUpdated`, `isDeleted`, `author`) VALUES
(1, 'Grosse soir&eacute;e', '&lt;p&gt;&lt;strong&gt;ESGI Soir&amp;eacute;e de fin d&amp;#39;ann&amp;eacute;e !&lt;/strong&gt;&lt;/p&gt;', '2017-07-27', '0000-00-00 00:00:00', '2017-07-23 03:57:10', 0, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int(11) NOT NULL,
  `dateInserted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dateUpdated` timestamp NULL DEFAULT NULL,
  `isDeleted` binary(1) NOT NULL DEFAULT '\0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mediafile`
--

CREATE TABLE IF NOT EXISTS `mediafile` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `type` text NOT NULL,
  `path` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `isDeleted` tinyint(1) NOT NULL DEFAULT '0',
  `dateInserted` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mediafile`
--

INSERT INTO `mediafile` (`id`, `title`, `type`, `path`, `description`, `isDeleted`, `dateInserted`, `dateUpdated`) VALUES
(29, 'Tokyo ghoul', 'musique', 'C:/MAMP/htdocs\\esgi-aire\\images\\upload\\596d41922cba8.mp3', 'test', 0, '2017-07-17 23:00:34', '2017-07-23 02:51:06'),
(31, 'image', 'image', 'C:/MAMP/htdocs\\esgi-aire\\images\\upload\\596d4aaf0f48f.jpg', 'lokk', 0, '2017-07-17 23:39:27', '2017-07-17 23:39:27');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `dateInserted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dateUpdated` timestamp NULL DEFAULT NULL,
  `isDeleted` tinyint(1) NOT NULL DEFAULT '0',
  `content` longtext NOT NULL,
  `author` text NOT NULL,
  `type` text NOT NULL,
  `pathChild` varchar(255) NOT NULL,
  `typeChild` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `dateInserted`, `dateUpdated`, `isDeleted`, `content`, `author`, `type`, `pathChild`, `typeChild`) VALUES
(1, 'testtets', '2017-07-14 00:08:54', '2017-07-12 22:00:00', 1, '<p>test</p>', 'Admin', 'News', 'C:/MAMP/htdocs\\esgi-aire\\images\\upload\\596d4aaf0f48f.jpg', 'image'),
(2, 'Lorem Ipsum', '2017-07-15 04:02:23', '2017-07-21 22:00:00', 0, '<p><strong>Lorem ipsum</strong></p>\r\n\r\n<p><samp>dolor sit amet, consectetur adipiscing elit. Phasellus sed arcu dignissim, vehicula leo eget, dignissim libero. Maecenas rhoncus aliquam est, porttitor sodales metus porttitor at. Donec tincidunt porta maximus. Donec id ultrices augue. Praesent efficitur accumsan porttitor. In tempus elementum leo sed sodales. Nam rutrum maximus sem, non viverra mi pellentesque ac. Etiam ut felis velit. Sed cursus sagittis dui at porta. Vivamus eu nibh magna. Aliquam ac condimentum neque, non euismod dui. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse semper malesuada nibh, sed maximus erat porttitor ut. Nulla ultrices eu diam ut sollicitudin. Fusce sodales malesuada eros quis interdum.</samp></p>', 'admin', 'News', 'C:/MAMP/htdocs\\esgi-aire\\images\\upload\\596d4aaf0f48f.jpg', 'image'),
(4, 'test', '2017-07-17 23:39:27', '2017-07-04 22:00:00', 0, '<p>testset</p>', 'admin', 'News', 'C:/MAMP/htdocs\\esgi-aire\\images\\upload\\596d4aaf0f48f.jpg', 'image');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE IF NOT EXISTS `newsletter` (
  `id` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `isSubscribed` binary(1) NOT NULL DEFAULT '\0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE IF NOT EXISTS `page` (
  `id` int(11) NOT NULL,
  `titleNews` varchar(45) NOT NULL,
  `HasEvent` tinyint(1) NOT NULL,
  `imageGallery` varchar(45) NOT NULL,
  `title` varchar(45) NOT NULL,
  `content` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pwd` varchar(60) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `status` varchar(11) NOT NULL,
  `isDeleted` tinyint(1) NOT NULL DEFAULT '0',
  `dateInserted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dateUpdated` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `pwd`, `firstname`, `lastname`, `status`, `isDeleted`, `dateInserted`, `dateUpdated`) VALUES
(24, 'admin', 'admin@admin.fr', '$2y$10$SXG3dunPHI5OW6DkuvQaXu.vZGXbaghyBcxHwoqE08StUSsEL5Pq2', 'admin', 'admin', 'Admin', 0, '2017-07-15 02:42:49', '2017-07-15 02:42:49'),
(25, 'user', 'user@user.com', '$2y$10$Brx2.gGjmyMZTgVMpHriIuynQFg5WxX0t4WsH3RbksSKoQkE19ExW', 'user', 'user', 'User', 0, '2017-07-15 21:58:08', '2017-07-15 21:58:08'),
(26, 'test', 'test@test.com', '$2y$10$vpMhwj8kKhFaLNxIh2c3KOATAfsi7bupiebLOwcloy7p/g7LlNACm', 'test', 'test', 'User', 0, '2017-07-23 17:27:35', '2017-07-23 17:27:35'),
(27, 'user', 'user@user.com', '$2y$10$Brx2.gGjmyMZTgVMpHriIuynQFg5WxX0t4WsH3RbksSKoQkE19ExW', 'user', 'user', 'User', 0, '2017-07-15 21:58:08', '2017-07-15 21:58:08'),
(28, 'user', 'user@user.com', '$2y$10$Brx2.gGjmyMZTgVMpHriIuynQFg5WxX0t4WsH3RbksSKoQkE19ExW', 'user', 'user', 'User', 0, '2017-07-15 21:58:08', '2017-07-15 21:58:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mediafile`
--
ALTER TABLE `mediafile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mediafile`
--
ALTER TABLE `mediafile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
