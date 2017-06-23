-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Ven 23 Juin 2017 à 15:28
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

-- --------------------------------------------------------

--
-- Structure de la table `calendar`
--

CREATE TABLE `calendar` (
  `id` int(11) NOT NULL,
  `description` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `events`
--

CREATE TABLE `events` (
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
-- Structure de la table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `dateInserted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dateUpdated` timestamp NULL DEFAULT NULL,
  `isDeleted` binary(1) NOT NULL DEFAULT '\0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `mediafile`
--

CREATE TABLE `mediafile` (
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
-- Structure de la table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(50) CHARACTER SET utf8 NOT NULL,
  `dateInserted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dateUpdated` timestamp NULL DEFAULT NULL,
  `isDeleted` binary(1) NOT NULL DEFAULT '\0',
  `content` longtext CHARACTER SET utf8 NOT NULL,
  `author` int(25) NOT NULL,
  `typeNews` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `isSubscribed` binary(1) NOT NULL DEFAULT '\0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `param`
--

CREATE TABLE `param` (
  `id` int(11) NOT NULL,
  `author` tinytext NOT NULL,
  `content` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pwd` char(60) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `birthday` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `isDeleted` binary(1) NOT NULL DEFAULT '\0',
  `date_inserted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `email`, `pwd`, `firstname`, `lastname`, `birthday`, `status`, `isDeleted`, `date_inserted`, `date_updated`) VALUES
(1, 'alexandre.ting@ymail.com', 'haha', 'Alex', 'Ting', 21, 0, 0x00, '2017-05-01 22:09:36', NULL),
(12, '', '', '', '', 0, 0, 0x00, '2017-05-01 22:33:02', NULL),
(13, '', '', '', '', 0, 0, 0x00, '2017-05-01 22:38:07', NULL);

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
-- Index pour la table `param`
--
ALTER TABLE `param`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `param`
--
ALTER TABLE `param`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
