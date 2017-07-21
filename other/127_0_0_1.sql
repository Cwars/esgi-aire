-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Ven 21 Juillet 2017 à 10:49
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `mvciw1`
--
CREATE DATABASE IF NOT EXISTS `mvciw1` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `mvciw1`;

-- --------------------------------------------------------

--
-- Structure de la table `calendar`
--

CREATE TABLE `calendar` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `content` tinyint(4) NOT NULL,
  `dateInserted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dateUpdate` timestamp NULL DEFAULT NULL,
  `idNews` int(11) NOT NULL,
  `idUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(45) NOT NULL,
  `description` tinyint(4) NOT NULL,
  `date` date NOT NULL,
  `dateInserted` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL,
  `isDeleted` binary(1) NOT NULL DEFAULT '\0',
  `author` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `dateInserted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dateUpdated` timestamp NULL DEFAULT NULL,
  `isDeleted` binary(1) NOT NULL DEFAULT '\0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `mediafile`
--

CREATE TABLE `mediafile` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `type` text NOT NULL,
  `path` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `isDeleted` tinyint(1) NOT NULL DEFAULT '0',
  `titleParent` tinytext NOT NULL,
  `typeParent` mediumtext NOT NULL,
  `dateInserted` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `mediafile`
--

INSERT INTO `mediafile` (`id`, `title`, `type`, `path`, `description`, `isDeleted`, `titleParent`, `typeParent`, `dateInserted`, `dateUpdated`) VALUES
(29, 'lilo & stich', 'musique', 'C:/MAMP/htdocs\\esgi-aire\\images\\upload\\596d41922cba8.mp3', 'Opening', 0, '', '', '2017-07-17 23:00:34', '2017-07-17 23:01:14'),
(31, 'image', 'image', 'C:/MAMP/htdocs\\esgi-aire\\images\\upload\\596d4aaf0f48f.jpg', 'lokk', 0, 'test', 'News', '2017-07-17 23:39:27', '2017-07-17 23:39:27'),
(32, 'aaaaaaaaaaaaaa', 'image', 'C:/wamp64/www/esgi-aire\\esgi-aire\\images\\upload\\59707ebd490c6.png', 'aaaaaaaaaaa', 0, 'aaaaaaaa', 'Blog', '2017-07-20 09:58:21', '2017-07-20 09:58:21'),
(33, 'aaaaaaaaaaa', 'image', 'C:/wamp64/www/esgi-aire\\esgi-aire\\images\\upload\\59707ecf4d864.png', 'aaaaaaaaaaaaaaaa', 0, '', '', '2017-07-20 09:58:39', '2017-07-20 09:58:39'),
(34, 'nooooooooo', 'image', 'C:/wamp64/www/esgi-aire\\esgi-aire\\images\\upload\\5971a957aa418.png', 'noooooooooo', 0, '', '', '2017-07-21 07:12:23', '2017-07-21 10:10:33'),
(35, 'rzerzer', 'image', 'C:/wamp64/www/esgi-aire\\esgi-aire\\images\\upload\\5971a96859d8e.png', 'zerzerzer', 1, 'ezrzerze', 'Blog', '2017-07-21 07:12:40', '2017-07-21 07:12:40'),
(36, 'aaaaaaaaaa', 'image', 'C:/wamp64/www/esgi-aire\\esgi-aire\\images\\upload\\5971bfcc6f481.png', 'aaaaaaaaaaaaaaaa', 0, '', '', '2017-07-21 10:48:12', '2017-07-21 10:48:12');

-- --------------------------------------------------------

--
-- Structure de la table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `dateInserted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dateUpdated` timestamp NULL DEFAULT NULL,
  `isDeleted` binary(1) NOT NULL DEFAULT '\0',
  `content` longtext NOT NULL,
  `author` text NOT NULL,
  `type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `news`
--

INSERT INTO `news` (`id`, `title`, `dateInserted`, `dateUpdated`, `isDeleted`, `content`, `author`, `type`) VALUES
(1, '0', '2017-07-14 00:08:54', NULL, 0x31, '<p>test</p>', 'Admin', 'News'),
(2, 'Lorem Ipsum', '2017-07-15 04:02:23', NULL, 0x30, '<p><strong>Lorem ipsum</strong></p>\r\n\r\n<p><samp>dolor sit amet, consectetur adipiscing elit. Phasellus sed arcu dignissim, vehicula leo eget, dignissim libero. Maecenas rhoncus aliquam est, porttitor sodales metus porttitor at. Donec tincidunt porta maximus. Donec id ultrices augue. Praesent efficitur accumsan porttitor. In tempus elementum leo sed sodales. Nam rutrum maximus sem, non viverra mi pellentesque ac. Etiam ut felis velit. Sed cursus sagittis dui at porta. Vivamus eu nibh magna. Aliquam ac condimentum neque, non euismod dui. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse semper malesuada nibh, sed maximus erat porttitor ut. Nulla ultrices eu diam ut sollicitudin. Fusce sodales malesuada eros quis interdum.</samp></p>', 'admin', 'News'),
(4, 'test', '2017-07-17 23:39:27', NULL, 0x30, '<p>testset</p>', 'admin', 'News'),
(5, 'aaaaaaaa', '2017-07-20 07:58:21', '2017-07-20 07:58:21', 0x30, '<p>aaaaaaaaaaaa</p>', 'admin', 'Blog'),
(6, 'aaaaaa', '2017-07-21 05:12:23', '2017-07-21 05:12:23', 0x30, '<p>aaaaaaaaaaaaaaaa</p>', 'admin', 'Blog'),
(7, 'ezrzerze', '2017-07-21 05:12:40', '2017-07-21 05:12:40', 0x30, '<p>rzerzer</p>', 'admin', 'Blog');

-- --------------------------------------------------------

--
-- Structure de la table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `isSubscribed` binary(1) NOT NULL DEFAULT '\0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pwd` varchar(60) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `status` varchar(11) NOT NULL,
  `isDeleted` tinyint(1) NOT NULL DEFAULT '0',
  `dateInserted` datetime NOT NULL,
  `dateUpdated` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `pwd`, `firstname`, `lastname`, `status`, `isDeleted`, `dateInserted`, `dateUpdated`) VALUES
(24, 'admin', 'admin@admin.fr', '$2y$10$SXG3dunPHI5OW6DkuvQaXu.vZGXbaghyBcxHwoqE08StUSsEL5Pq2', 'admin', 'admin', 'Admin', 0, '2017-07-15 04:42:49', '2017-07-15 04:42:49'),
(25, 'user', 'user@user.com', '$2y$10$Brx2.gGjmyMZTgVMpHriIuynQFg5WxX0t4WsH3RbksSKoQkE19ExW', 'user', 'user', 'User', 1, '2017-07-15 23:58:08', '2017-07-15 23:58:08'),
(26, 'aaaaaaaa', 'aaaa@free.fr', '$2y$10$AoMup8jcvIziSgSMBOIsQOQvohzXgfcpbFV0juFANsBbFxCtP4JdW', 'aaaaaaaa', 'aaaaa', 'Admin', 0, '2017-07-21 07:52:42', '2017-07-21 07:52:42'),
(27, '11111111111', 'aaaaaaaaaaa@free.fr', '$2y$10$DRzhyEHJrHKmiS4D2aEGFOr71GZS3PgVzpJkVU/wjcklVVz1vCQva', 'aaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaa', 'Admin', 0, '2017-07-21 10:00:03', '2017-07-21 10:00:03'),
(28, 'aaaaaaaaaaa', 'aaaaaaaaaa@free.fr', '$2y$10$8W3Su98DLtc8uD0/qLP4K.gH1XtlG3tB1NuAL9vKe3Pwj/BSWT6li', 'aaaaaaaaaaa', 'aaaaaaaaaaaa', '', 1, '2017-07-21 10:42:34', '2017-07-21 10:42:34'),
(29, 'fffffffffff', 'fffffffffffff@free.fr', '$2y$10$70EFKu8zvFtjMfdXXel3seMbfTDqHvQrAmutSXBhQyAiWhR6bCASa', 'ffffffffffffff', 'ffffffffffffffff', '', 1, '2017-07-21 10:43:12', '2017-07-21 10:43:12'),
(30, 'ezezezez', 'ezezezez@free.fr', '$2y$10$07nCWaARtEsTpt12MzMgcOuEbDngjNDMkwGY9XjOycvfVrc4n2VqO', 'ezezezz', 'ezezez', 'Admin', 0, '2017-07-21 10:46:50', '2017-07-21 10:46:50');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `calendar`
--
ALTER TABLE `calendar`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `mediafile`
--
ALTER TABLE `mediafile`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `calendar`
--
ALTER TABLE `calendar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `mediafile`
--
ALTER TABLE `mediafile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT pour la table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
