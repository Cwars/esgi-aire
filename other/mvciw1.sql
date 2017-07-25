-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 25, 2017 at 09:40 PM
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
  `hasNews` tinyint(1) NOT NULL,
  `hasEvent` tinyint(1) NOT NULL,
  `title` varchar(45) NOT NULL,
  `content` mediumtext NOT NULL,
  `isDeleted` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`id`, `hasNews`, `hasEvent`, `title`, `content`, `isDeleted`) VALUES
(1, 0, 0, 'Home', '&lt;h2&gt;Qu&amp;#39;est-ce que le Lorem Ipsum?&lt;/h2&gt;\r\n\r\n&lt;p&gt;Le &lt;strong&gt;Lorem Ipsum&lt;/strong&gt; est simplement du faux texte employ&amp;eacute; dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l&amp;#39;imprimerie depuis les ann&amp;eacute;es 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour r&amp;eacute;aliser un livre sp&amp;eacute;cimen de polices de texte. Il n&amp;#39;a pas fait que survivre cinq si&amp;egrave;cles, mais s&amp;#39;est aussi adapt&amp;eacute; &amp;agrave; la bureautique informatique, sans que son contenu n&amp;#39;en soit modifi&amp;eacute;. Il a &amp;eacute;t&amp;eacute; popularis&amp;eacute; dans les ann&amp;eacute;es 1960 gr&amp;acirc;ce &amp;agrave; la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus r&amp;eacute;cemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker. 2017&lt;/p&gt;', 0),
(2, 1, 1, 'Presentation', '&lt;p&gt;Le concept Donner aux nouveaux artistes la possibilitï¿½ de se faire connaitre plus facilement, en leur donnant un nouveau souffle de communication. Ils auront la possibilitï¿½ de tenir aux courants leurs lecteurs, en affichant leurs travaux et ï¿½galement leurs ï¿½vï¿½nements. test&lt;/p&gt;', 0),
(3, 1, 1, 'Contact', 'L''artiste que vous êtes, souhaitez vous vous faire connaître davantage ?\r\nVeuillez remplir le formulaire pour avoir plus informations. Nous sommes à votre écoute.', 0),
(4, 1, 1, 'CGU', '&lt;p&gt;1.El&amp;eacute;ments juridiques&lt;/p&gt;\r\n\r\n&lt;p&gt;Le logo AIRE a &amp;eacute;t&amp;eacute; cr&amp;eacute;er de toute pi&amp;egrave;ce, et les images et logo que nous utiliserons seront&lt;/p&gt;\r\n\r\n&lt;p&gt;tous libre de droit.&lt;/p&gt;\r\n\r\n&lt;p&gt;2. Mentions l&amp;eacute;gales&lt;/p&gt;\r\n\r\n&lt;p&gt;Concept, design et int&amp;eacute;gration&lt;/p&gt;\r\n\r\n&lt;p&gt;Le site sera r&amp;eacute;alis&amp;eacute; par les acteurs du projet&lt;/p&gt;\r\n\r\n&lt;p&gt;Conditions d&amp;rsquo;utilisation du site&lt;/p&gt;\r\n\r\n&lt;p&gt;L&amp;rsquo;utilisation du site est soumise au respect des conditions g&amp;eacute;n&amp;eacute;rales d&amp;eacute;crites ci-apr&amp;egrave;s.&lt;/p&gt;\r\n\r\n&lt;p&gt;En acc&amp;eacute;dant &amp;agrave; ce site, vous d&amp;eacute;clarez avoir pris connaissance et avoir accept&amp;eacute;, ces&lt;/p&gt;\r\n\r\n&lt;p&gt;conditions g&amp;eacute;n&amp;eacute;rales d&amp;rsquo;utilisation.&lt;/p&gt;\r\n\r\n&lt;p&gt;Droits de propri&amp;eacute;t&amp;eacute; intellectuelle&lt;/p&gt;\r\n\r\n&lt;p&gt;Les textes, mises en page, illustrations et autres &amp;eacute;l&amp;eacute;ments constitutifs du site sont prot&amp;eacute;g&amp;eacute;s&lt;/p&gt;\r\n\r\n&lt;p&gt;par le droit d&amp;rsquo;auteur. Tous ces &amp;eacute;l&amp;eacute;ments constituent la propri&amp;eacute;t&amp;eacute; de l&amp;rsquo;auteur dont, le cas&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;eacute;ch&amp;eacute;ant, d&amp;rsquo;un tiers aupr&amp;egrave;s duquel l&amp;rsquo;auteur du site a obtenu les autorisations n&amp;eacute;cessaires.&lt;/p&gt;\r\n\r\n&lt;p&gt;Sauf stipulation contraire, l&amp;rsquo;information textuelle ou chiffr&amp;eacute;e figurant sur le site peut &amp;ecirc;tre&lt;/p&gt;\r\n\r\n&lt;p&gt;utilis&amp;eacute;e gratuitement mais moyennant mention de la source et uniquement pour un usage qui&lt;/p&gt;\r\n\r\n&lt;p&gt;ne soit ni commercial, ni publicitaire.&lt;/p&gt;\r\n\r\n&lt;p&gt;Toute demande en ce sens doit &amp;ecirc;tre adress&amp;eacute;e &amp;agrave; la direction de l&amp;rsquo;auteur du site.&lt;/p&gt;\r\n\r\n&lt;p&gt;L&amp;rsquo;auteur autorise la cr&amp;eacute;ation sans demande pr&amp;eacute;alable de liens en surface qui renvoient &amp;agrave; la&lt;/p&gt;\r\n\r\n&lt;p&gt;page d&amp;rsquo;accueil du site ou &amp;agrave; toute autre page dans sa globalit&amp;eacute;.&lt;/p&gt;\r\n\r\n&lt;p&gt;Aucun des produits ou services pr&amp;eacute;sent&amp;eacute;s ici ne sera fourni par l&amp;rsquo;auteur &amp;agrave; une personne si la&lt;/p&gt;\r\n\r\n&lt;p&gt;loi de son pays d&amp;rsquo;origine, ou de tout autre pays qui la concernerait, l&amp;rsquo;interdit.&lt;/p&gt;\r\n\r\n&lt;p&gt;3. Gestion des risques&lt;/p&gt;\r\n\r\n&lt;p&gt;Le principal risque que peut rencontrer ce projet est les d&amp;eacute;lais, pour rem&amp;eacute;dier &amp;agrave; ceci la&lt;/p&gt;\r\n\r\n&lt;p&gt;planification du projet a &amp;eacute;t&amp;eacute; fait, le projet est pr&amp;eacute;vu pour durer du 15 Janvier au 18 Juin, avec&lt;/p&gt;\r\n\r\n&lt;p&gt;une marge possible de 4 semaines, pouvant r&amp;eacute;sulter de difficult&amp;eacute; sur le d&amp;eacute;veloppement de&lt;/p&gt;\r\n\r\n&lt;p&gt;certaine fonctionnalit&amp;eacute; ou absence des acteurs du projet.&lt;/p&gt;\r\n\r\n&lt;p&gt;4. Risques techniques&lt;/p&gt;\r\n\r\n&lt;p&gt;Les risques techniques seront les mises &amp;agrave; jour du site face aux prochaines mont&amp;eacute;s de&lt;/p&gt;\r\n\r\n&lt;p&gt;version des diff&amp;eacute;rents langages utilis&amp;eacute;s durant la conception du site, des nouvelles failles de&lt;/p&gt;\r\n\r\n&lt;p&gt;s&amp;eacute;curit&amp;eacute;s peuvent voir le jour.&lt;/p&gt;\r\n\r\n&lt;p&gt;Le serveur VPS qui h&amp;eacute;berge le site risque de pas &amp;ecirc;tre fonctionnel pour une dur&amp;eacute;e&lt;/p&gt;\r\n\r\n&lt;p&gt;ind&amp;eacute;termin&amp;eacute;e.&lt;/p&gt;\r\n\r\n&lt;p&gt;14&lt;/p&gt;\r\n\r\n&lt;p&gt;5. Risques juridiques&lt;/p&gt;\r\n\r\n&lt;p&gt;L&amp;rsquo;utilisation d&amp;rsquo;&amp;eacute;l&amp;eacute;ments avec des droits d&amp;rsquo;auteurs.&lt;/p&gt;\r\n\r\n&lt;p&gt;Nos utilisateurs seront amen&amp;eacute;s &amp;agrave; exposer des travaux sur leurs sites, il est ainsi tr&amp;egrave;s&lt;/p&gt;\r\n\r\n&lt;p&gt;important de prot&amp;eacute;ger ces travaux en mettant des mention &amp;laquo; copyright &amp;raquo; par exemple.&lt;/p&gt;\r\n\r\n&lt;p&gt;Le risque de d&amp;eacute;passer le temps imparti pour la livraison du risque.&lt;/p&gt;\r\n\r\n&lt;p&gt;6. Risques humains&lt;/p&gt;\r\n\r\n&lt;p&gt;Les risques humains peuvent &amp;ecirc;tre des utilisateurs qui voudront nuire aux objectifs du site&lt;/p&gt;\r\n\r\n&lt;p&gt;ESGI-AIRE.&lt;/p&gt;\r\n\r\n&lt;p&gt;Promouvoir un artiste signifie aussi prot&amp;eacute;ger cette artiste des personnes qui voudront lui&lt;/p&gt;\r\n\r\n&lt;p&gt;nuire, il est donc important de mettre en place un syst&amp;egrave;me de mod&amp;eacute;ration.&lt;/p&gt;', 0);

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
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

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
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
