-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mar 28 Mars 2017 à 16:31
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
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pwd` char(60) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `permission` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '0',
  `date_inserted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `email`, `pwd`, `firstname`, `lastname`, `permission`, `status`, `date_inserted`, `date_updated`) VALUES
(1, 'guillaumepn@free.fr', '$2y$10$vYVxbGtvw75PLlrnAOYUBuh9dFSOHySW5Q41gwnQ/fyyYtPqrhc6G', 'Bob', 'Pham ngoc', 4, 1, '2017-02-01 09:53:22', NULL),
(2, 'guillaumepn@free.fr', '$2y$10$3sdMIfPGV6pmTJGnxwynHOskT3Zk.E9/RO1Lt20y6Ap0Yt//P1lBq', 'Guillaume', 'Pham ngoc', 3, 1, '2017-02-01 09:58:28', NULL),
(3, 'guillaumepn@free.fr', '$2y$10$3sdMIfPGV6pmTJGnxwynHOskT3Zk.E9/RO1Lt20y6Ap0Yt//P1lBq', 'Guillaume', 'Pham ngoc', 3, 1, '2017-02-01 09:58:30', NULL),
(4, 'guillaumepn@free.fr', '$2y$10$3sdMIfPGV6pmTJGnxwynHOskT3Zk.E9/RO1Lt20y6Ap0Yt//P1lBq', 'Guillaume', 'Pham ngoc', 3, 1, '2017-02-01 10:01:54', NULL),
(5, 'guillaumepn@free.fr', '$2y$10$3sdMIfPGV6pmTJGnxwynHOskT3Zk.E9/RO1Lt20y6Ap0Yt//P1lBq', 'Guillaume', 'Pham ngoc', 3, 1, '2017-02-01 10:05:10', NULL),
(6, 'guillaumepn@free.fr', '$2y$10$3sdMIfPGV6pmTJGnxwynHOskT3Zk.E9/RO1Lt20y6Ap0Yt//P1lBq', 'Guillaume', 'Pham ngoc', 3, 1, '2017-02-01 10:07:07', NULL),
(7, 'guillaumepn@free.fr', '$2y$10$3sdMIfPGV6pmTJGnxwynHOskT3Zk.E9/RO1Lt20y6Ap0Yt//P1lBq', 'Guillaume', 'Pham ngoc', 3, 1, '2017-02-01 10:09:15', NULL),
(8, 'henrypn@free.fr', '$2y$10$3sdMIfPGV6pmTJGnxwynHOskT3Zk.E9/RO1Lt20y6Ap0Yt//P1lBq', 'Henry', 'Pham ngoc', 3, 1, '2017-02-01 10:09:53', NULL),
(9, 'guillaumepn@free.fr', '$2y$10$0X/cTEUv3AHzXPS8AL0uROKZeCyCy.LMrQCR4wdE74M8kty5snEey', 'Guillaume', 'Pham ngoc', 2, 1, '2017-02-01 10:10:22', NULL),
(10, 'guillaumepn@free.fr', '$2y$10$brpG19madk54XlD0g9zqAupUksjHown0RDjFqq5iOhmIOguzcWeRG', 'Guillaume', 'Pham ngoc', 2, 1, '2017-02-01 10:10:40', NULL),
(11, 'guillaumepn@free.fr', '$2y$10$nKtNeIMHuwkz/QBnjHActe2EuO5unFfG.8Rt0NAFVEMhLYB3kNegO', 'Guillaume', 'Pham ngoc', 2, 1, '2017-02-01 10:12:07', NULL);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
