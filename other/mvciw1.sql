-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 27, 2017 at 02:08 PM
-- Server version: 5.6.34-log
-- PHP Version: 5.6.28

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
-- Table structure for table `calendar`
--

CREATE TABLE IF NOT EXISTS `calendar` (
  `id` int(11) NOT NULL,
  `description` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `description` tinyint(4) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `dateInserted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dateUpdated` timestamp NULL DEFAULT NULL,
  `isDeleted` binary(1) NOT NULL DEFAULT '\0',
  `idUser` int(11) NOT NULL,
  `idCalendar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int(11) NOT NULL,
  `dateInserted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dateUpdated` timestamp NULL DEFAULT NULL,
  `isDeleted` binary(1) NOT NULL DEFAULT '\0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mediafile`
--

CREATE TABLE IF NOT EXISTS `mediafile` (
  `id` int(11) NOT NULL,
  `path` varchar(45) NOT NULL,
  `description` tinytext NOT NULL,
  `isDeleted` binary(1) NOT NULL DEFAULT '\0',
  `idUser` int(11) NOT NULL,
  `idNews` int(11) NOT NULL,
  `typeFile` varchar(15) NOT NULL,
  `idGallery` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `dateInserted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dateUpdated` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `isDeleted` tinyint(1) NOT NULL DEFAULT '0',
  `content` longtext CHARACTER SET utf8 NOT NULL,
  `author` varchar(50) CHARACTER SET utf8 NOT NULL,
  `type` varchar(11) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `dateInserted`, `dateUpdated`, `isDeleted`, `content`, `author`, `type`) VALUES
(1, 'aaaaaa', '2017-06-27 13:12:28', '2017-06-27 14:06:37', 1, 'aaaaaa', 'aaaaaaaaaaaaa', 'Blog'),
(2, 'aaaaaaa', '2017-06-27 13:50:02', '2017-06-27 14:06:37', 1, 'aaaaaaaaadddd', 'aaaaaa', 'Blog'),
(3, 'Rith', '2017-06-27 13:56:02', '2017-06-27 14:06:37', 1, 'lol', 'david', 'Blog'),
(4, 'fdfdfd', '2017-06-27 13:59:09', '2017-06-27 14:06:37', 1, 'hijhhhbe', 'fdfd', 'Blog'),
(5, 'fffffffffffffffffff', '2017-06-27 13:27:35', '2017-06-27 14:06:37', 0, 'fffffff', 'ffffffffffffffffff', 'Blog'),
(6, 'aaaaaaaa', '2017-06-27 13:50:23', '2017-06-27 14:06:37', 0, '123', 'aaaaaaaaaaaaaaaaa', 'Blog'),
(7, 'dddddddddd', '2017-06-27 13:47:03', '2017-06-27 14:06:37', 1, 'ddddddddddddddddddddd', 'dddddddddddddddd', 'Blog'),
(8, '2706', '2017-06-27 13:59:20', '2017-06-27 14:06:37', 0, '2112', '2542', 'Blog'),
(9, 'zzzzzz', '2017-06-27 14:07:30', '2017-06-27 14:07:30', 0, 'aaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaa', 'Blog');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE IF NOT EXISTS `newsletter` (
  `id` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `isSubscribed` binary(1) NOT NULL DEFAULT '\0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) CHARACTER SET utf8 NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 NOT NULL,
  `pwd` varchar(60) CHARACTER SET utf8 NOT NULL,
  `firstname` varchar(50) CHARACTER SET utf8 NOT NULL,
  `lastname` varchar(50) CHARACTER SET utf8 NOT NULL,
  `status` varchar(11) CHARACTER SET utf8 NOT NULL,
  `isDeleted` tinyint(1) NOT NULL DEFAULT '0',
  `dateInserted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dateUpdated` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM AUTO_INCREMENT=53 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `pwd`, `firstname`, `lastname`, `status`, `isDeleted`, `dateInserted`, `dateUpdated`) VALUES
(1, '', 'alexandre.ting@ymail.com', 'haha', 'Alex', 'Ting', '0', 1, '2017-05-01 22:09:36', '2017-05-21 15:22:03'),
(49, 'aaaaa', 'aaaaaaa@free.fr', '$2y$10$IFCIsDiT4B1WsMpIbat8EOQ/sY6e5ZQttmtK4Ynurcb4YOCflPbVm', 'aaaaaaaa', 'aaaaaaaaaa', 'Admin', 0, '2017-06-27 09:49:27', '2017-06-27 09:49:27'),
(50, 'Cwars', 'cwars@hotmail.fr', '$2y$10$RMqDAmVxRtWBzb1NlRiVMexlw.7e5IZsW6Mgw3EmyJN71iEq7EJre', 'cwars', 'cwars', 'Admin', 1, '2017-06-27 10:04:17', '2017-06-27 10:04:17'),
(51, 'aaaaaaaa', 'aaaaaaa@free.fr', '$2y$10$hOc7Cm7F1FpTaUJgH7O8P.mm1htFcO85ZZ/OjwFmJ54Gb8m/XrJ1u', 'aaaaaaaaaaaaaa', 'aaaaaaaaaaaa', 'Admin', 0, '2017-06-27 10:10:53', '2017-06-27 10:10:53'),
(52, 'aaaaaaa', 'aaaaaaa@free.fr', '$2y$10$3Jf9kTxdMjqPeT25HUQGn.DwwRVPY/vdCwZSZZFFiSGvxB.u8i6cS', 'aaaaaa', 'aaaaaaaaaaa', 'User', 0, '2017-06-27 10:22:29', '2017-06-27 10:22:29'),
(48, 'aaaaaaaaaaaaa', 'aaa@free.fr', '$2y$10$hlElWOCyMiIywlAX.isL5uQAtUkeoqHXh5pf5DMuq7kr4gylv6rSG', 'aaaaaaaaaaaa', 'aaaa', 'Admin', 0, '2017-06-26 12:51:03', '2017-06-26 12:51:03'),
(46, 'aaaa', 'aaa@free.fr', '$2y$10$9CBJIWt.lKk1Ow7I2e03Z.l5htq7kPyS6m023g3sKBECZOpWn1K2e', 'aaa', 'aaa', 'Admin', 0, '2017-06-14 12:39:45', '2017-06-14 12:39:45'),
(47, 'aaaaaaaaa', 'aaa@free.fr', '$2y$10$IL0Q4C.c1S1fzwdhspNrFOijUSKpKXHpNRoRF5GHpSbs8khGojNqW', 'aaaaaaaaaaaa', 'aaaaaaaaaaaaa', 'Admin', 0, '2017-06-14 14:11:40', '2017-06-14 14:11:40'),
(45, 'aaaa', 'aaa@free.fr', '$2y$10$P0VRdDJojxXLMBM1UEx9hOc2I4q/5MBCfRWhIjqf7ZBYzD/1Z6IoS', 'aaa', 'aaa', 'Admin', 1, '2017-06-14 12:25:12', '2017-06-14 12:25:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calendar`
--
ALTER TABLE `calendar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
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
-- AUTO_INCREMENT for table `calendar`
--
ALTER TABLE `calendar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mediafile`
--
ALTER TABLE `mediafile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=53;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
