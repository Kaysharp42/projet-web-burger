-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 12 déc. 2019 à 17:23
-- Version du serveur :  5.7.21
-- Version de PHP :  5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `webb`
--

-- --------------------------------------------------------

--
-- Structure de la table `avis`
--

DROP TABLE IF EXISTS `avis`;
CREATE TABLE IF NOT EXISTS `avis` (
  `id_avis` int(20) NOT NULL AUTO_INCREMENT,
  `id_client` int(20) NOT NULL,
  `description` varchar(255) NOT NULL,
  `avis` varchar(255) NOT NULL,
  PRIMARY KEY (`id_avis`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `best_categorie`
--

DROP TABLE IF EXISTS `best_categorie`;
CREATE TABLE IF NOT EXISTS `best_categorie` (
  `id_categorie` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `total_sold` int(11) NOT NULL,
  UNIQUE KEY `unique` (`id_categorie`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `best_customer`
--

DROP TABLE IF EXISTS `best_customer`;
CREATE TABLE IF NOT EXISTS `best_customer` (
  `id_customer` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `money_spent` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `best_customer`
--

INSERT INTO `best_customer` (`id_customer`, `first_name`, `last_name`, `email`, `money_spent`) VALUES
(3, 'eya', 'said', 'bahaeddine.said@esprit.tn', 24500),
(3, 'eya', 'said', 'bahaeddine.said@esprit.tn', 24500),
(4, 'wajih', 'jebeli', 'Mohamedwajih.jebali@esprit.tn', 17650),
(3, 'eya', 'said', 'bahaeddine.said@esprit.tn', 24500),
(4, 'wajih', 'jebeli', 'Mohamedwajih.jebali@esprit.tn', 17650),
(3, 'eya', 'said', 'bahaeddine.said@esprit.tn', 24500),
(4, 'wajih', 'jebeli', 'Mohamedwajih.jebali@esprit.tn', 17650),
(3, 'eya', 'said', 'bahaeddine.said@esprit.tn', 24500),
(4, 'wajih', 'jebeli', 'Mohamedwajih.jebali@esprit.tn', 17650),
(3, 'eya', 'said', 'bahaeddine.said@esprit.tn', 24500),
(4, 'wajih', 'jebeli', 'Mohamedwajih.jebali@esprit.tn', 17650),
(1, 'bahaeddine', 'said', 'bahaeddine.said@esprit.tn', 9000),
(3, 'eya', 'said', 'bahaeddine.said@esprit.tn', 24500),
(4, 'wajih', 'jebeli', 'Mohamedwajih.jebali@esprit.tn', 17650),
(1, 'bahaeddine', 'said', 'bahaeddine.said@esprit.tn', 9000),
(3, 'eya', 'said', 'bahaeddine.said@esprit.tn', 24500),
(4, 'wajih', 'jebeli', 'Mohamedwajih.jebali@esprit.tn', 17650);

-- --------------------------------------------------------

--
-- Structure de la table `best_product`
--

DROP TABLE IF EXISTS `best_product`;
CREATE TABLE IF NOT EXISTS `best_product` (
  `id_product` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `quantity_sold` int(11) NOT NULL,
  `price_sold` int(11) NOT NULL,
  `sales` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `best_product`
--

INSERT INTO `best_product` (`id_product`, `name`, `quantity_sold`, `price_sold`, `sales`) VALUES
(4, 'iphoneX', 1, 8500, 8500),
(3, 's5', 1, 10000, 8000),
(2, 'pc2', 1, 8000, 8000),
(4, 'iphoneX', 1, 8500, 8500),
(3, 's5', 1, 10000, 8000),
(2, 'pc2', 1, 8000, 8000),
(4, 'iphoneX', 1, 8500, 8500),
(3, 's5', 1, 10000, 8000),
(2, 'pc2', 1, 8000, 8000),
(4, 'iphoneX', 1, 8500, 8500),
(3, 's5', 1, 10000, 8000),
(2, 'pc2', 1, 8000, 8000),
(4, 'iphoneX', 2, 8500, 17000),
(3, 's5', 2, 10000, 17000),
(2, 'pc2', 1, 8000, 8000),
(6, 'ezez', 1, 150, 150),
(4, 'iphoneX', 2, 8500, 17000),
(3, 's5', 2, 10000, 17000),
(2, 'pc2', 1, 8000, 8000),
(6, 'ezez', 1, 150, 150),
(4, 'iphoneX', 2, 8500, 17000),
(3, 's5', 2, 10000, 17000),
(2, 'pc2', 1, 8000, 8000),
(6, 'ezez', 1, 150, 150),
(4, 'iphoneX', 2, 8500, 17000),
(3, 's5', 2, 10000, 17000),
(2, 'pc2', 1, 8000, 8000),
(6, 'ezez', 1, 150, 150),
(4, 'iphoneX', 2, 8500, 17000),
(3, 's5', 2, 10000, 17000),
(2, 'pc2', 1, 8000, 8000),
(6, 'ezez', 1, 150, 150),
(4, 'iphoneX', 2, 8500, 17000),
(3, 's5', 3, 10000, 26000),
(2, 'pc2', 1, 8000, 8000),
(4, 'iphoneX', 2, 8500, 17000),
(3, 's5', 3, 10000, 26000),
(2, 'pc2', 1, 8000, 8000);

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `id` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id`, `nom`) VALUES
(0, 'smartphones'),
(3, 'accessoires');

-- --------------------------------------------------------

--
-- Structure de la table `commandes`
--

DROP TABLE IF EXISTS `commandes`;
CREATE TABLE IF NOT EXISTS `commandes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cid` int(11) NOT NULL,
  `quantity` tinyint(4) NOT NULL,
  `amount` float(10,2) NOT NULL,
  `orderStatus` tinyint(4) NOT NULL,
  `createdOn` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `cid` (`cid`)
) ENGINE=InnoDB AUTO_INCREMENT=223 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commandes`
--

INSERT INTO `commandes` (`id`, `cid`, `quantity`, `amount`, `orderStatus`, `createdOn`) VALUES
(130, 3, 2, 28030.00, 1, '2019-12-03 17:53:47'),
(161, 3, 2, 10170.00, 0, '2019-12-05 12:31:16'),
(164, 2, 2, 9155.00, 1, '2019-12-05 14:49:31'),
(177, 1, 1, 160.00, 0, '2019-12-11 00:58:33'),
(178, 1, 1, 8010.00, 0, '2019-12-11 01:02:40'),
(183, 1, 1, 10010.00, 0, '2019-12-11 01:06:04'),
(184, 1, 1, 8010.00, 0, '2019-12-11 01:07:27'),
(185, 1, 1, 60050.00, 0, '2019-12-11 01:11:31'),
(186, 1, 1, 60050.00, 0, '2019-12-11 01:12:26'),
(187, 1, 1, 60050.00, 0, '2019-12-11 01:12:34'),
(188, 1, 1, 60050.00, 0, '2019-12-11 01:13:15'),
(190, 1, 1, 60050.00, 0, '2019-12-11 01:16:23'),
(192, 1, 1, 60050.00, 0, '2019-12-11 01:17:57'),
(195, 1, 1, 60050.00, 0, '2019-12-11 01:20:28'),
(196, 1, 1, 60050.00, 0, '2019-12-11 01:21:13'),
(198, 1, 2, 320.00, 0, '2019-12-11 01:23:20'),
(199, 1, 2, 320.00, 0, '2019-12-11 01:25:10'),
(200, 1, 2, 10170.00, 0, '2019-12-11 01:26:03'),
(201, 1, 2, 10170.00, 0, '2019-12-11 01:26:21'),
(202, 1, 2, 10170.00, 1, '2019-12-11 01:27:54'),
(204, 1, 2, 16020.00, 0, '2019-12-11 08:35:07'),
(206, 5, 5, 28740.00, 0, '2019-12-11 22:03:57'),
(207, 5, 0, 0.00, 0, '2019-12-11 22:04:00'),
(208, 5, 2, 16520.00, 0, '2019-12-11 22:04:45'),
(209, 1, 3, 36040.00, 0, '2019-12-11 22:45:33'),
(210, 1, 1, 9010.00, 0, '2019-12-12 09:21:29'),
(211, 1, 0, 0.00, 0, '2019-12-12 09:22:56'),
(212, 1, 0, 0.00, 0, '2019-12-12 09:23:29'),
(213, 1, 0, 0.00, 0, '2019-12-12 09:23:50'),
(214, 1, 1, 9010.00, 0, '2019-12-12 09:24:26'),
(215, 1, 1, 9010.00, 0, '2019-12-12 09:26:07'),
(216, 1, 1, 9010.00, 0, '2019-12-12 09:27:32'),
(218, 1, 2, 26030.00, 0, '2019-12-12 09:35:52'),
(219, 1, 2, 26030.00, 0, '2019-12-12 09:37:02'),
(220, 1, 2, 26030.00, 0, '2019-12-12 09:42:04'),
(221, 1, 4, 20440.00, 0, '2019-12-12 11:47:44'),
(222, 1, 2, 17020.00, 0, '2019-12-12 13:43:03');

-- --------------------------------------------------------

--
-- Structure de la table `commandes_p`
--

DROP TABLE IF EXISTS `commandes_p`;
CREATE TABLE IF NOT EXISTS `commandes_p` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tid` int(11) NOT NULL,
  `wid` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `createdOn` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `tid` (`tid`)
) ENGINE=InnoDB AUTO_INCREMENT=268 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commandes_p`
--

INSERT INTO `commandes_p` (`id`, `tid`, `wid`, `quantity`, `createdOn`) VALUES
(149, 130, 3, 2, '2019-12-03 17:53:47'),
(150, 130, 2, 1, '2019-12-03 17:53:47'),
(186, 161, 3, 1, '2019-12-05 12:31:16'),
(187, 161, 5, 1, '2019-12-05 12:31:16'),
(192, 164, 3, 1, '2019-12-05 14:49:31'),
(193, 164, 5, 1, '2019-12-05 14:49:31'),
(217, 177, 7, 10, '2019-12-11 00:58:33'),
(220, 183, 8, 1, '2019-12-11 01:06:04'),
(221, 184, 2, 1, '2019-12-11 01:07:27'),
(222, 196, 1, 5, '2019-12-11 01:21:13'),
(224, 198, 7, 1, '2019-12-11 01:23:20'),
(225, 199, 7, 1, '2019-12-11 01:25:10'),
(226, 200, 8, 1, '2019-12-11 01:26:03'),
(227, 201, 8, 1, '2019-12-11 01:26:21'),
(228, 202, 8, 1, '2019-12-11 01:27:54'),
(229, 202, 7, 1, '2019-12-11 01:27:54'),
(236, 204, 3, 1, '2019-12-11 08:35:07'),
(237, 204, 2, 1, '2019-12-11 08:35:07'),
(240, 206, 8, 1, '2019-12-11 22:03:57'),
(241, 206, 3, 2, '2019-12-11 22:03:57'),
(242, 206, 5, 3, '2019-12-11 22:03:57'),
(243, 206, 6, 1, '2019-12-11 22:03:57'),
(244, 206, 7, 1, '2019-12-11 22:03:57'),
(245, 208, 4, 1, '2019-12-11 22:04:45'),
(246, 208, 2, 1, '2019-12-11 22:04:45'),
(247, 209, 8, 1, '2019-12-11 22:45:33'),
(248, 209, 2, 1, '2019-12-11 22:45:33'),
(249, 209, 3, 2, '2019-12-11 22:45:33'),
(250, 210, 3, 1, '2019-12-12 09:21:29'),
(251, 214, 3, 1, '2019-12-12 09:24:26'),
(252, 215, 3, 1, '2019-12-12 09:26:07'),
(253, 216, 3, 1, '2019-12-12 09:27:32'),
(256, 218, 3, 2, '2019-12-12 09:35:52'),
(257, 218, 2, 1, '2019-12-12 09:35:52'),
(258, 219, 3, 2, '2019-12-12 09:37:02'),
(259, 219, 2, 1, '2019-12-12 09:37:02'),
(260, 220, 3, 2, '2019-12-12 09:42:04'),
(261, 220, 2, 1, '2019-12-12 09:42:04'),
(262, 221, 5, 2, '2019-12-12 11:47:44'),
(263, 221, 2, 1, '2019-12-12 11:47:44'),
(264, 221, 7, 1, '2019-12-12 11:47:44'),
(265, 221, 1, 1, '2019-12-12 11:47:44'),
(266, 222, 3, 1, '2019-12-12 13:43:03'),
(267, 222, 2, 1, '2019-12-12 13:43:03');

-- --------------------------------------------------------

--
-- Structure de la table `fidelite`
--

DROP TABLE IF EXISTS `fidelite`;
CREATE TABLE IF NOT EXISTS `fidelite` (
  `ref` int(11) NOT NULL AUTO_INCREMENT,
  `id_client` int(11) NOT NULL,
  `point` int(11) NOT NULL,
  PRIMARY KEY (`ref`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `fidelite`
--

INSERT INTO `fidelite` (`ref`, `id_client`, `point`) VALUES
(1, 2, 1507);

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

DROP TABLE IF EXISTS `panier`;
CREATE TABLE IF NOT EXISTS `panier` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `quantity` tinyint(4) NOT NULL,
  `totalAmount` float NOT NULL,
  PRIMARY KEY (`id`),
  KEY `cid` (`cid`)
) ENGINE=InnoDB AUTO_INCREMENT=88 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `panier`
--

INSERT INTO `panier` (`id`, `cid`, `pid`, `title`, `quantity`, `totalAmount`) VALUES
(82, 3, 4, 'iphoneX', 1, 8500),
(83, 3, 3, 's5', 1, 8000),
(84, 3, 2, 'pc2', 1, 8000),
(85, 4, 3, 's5', 1, 9000),
(86, 4, 6, 'ezez', 1, 150),
(87, 4, 4, 'iphoneX', 1, 8500);

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `id` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prix` int(11) NOT NULL,
  `quantite` int(11) NOT NULL,
  `image` varchar(50) NOT NULL,
  `id_cat` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_cat` (`id_cat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id`, `nom`, `prix`, `quantite`, `image`, `id_cat`) VALUES
(1, 'pc', 12000, 0, 'uploads/unt.jpg', 0),
(2, 'pc2', 8000, 30, 'uploads/ph.jpg', 0),
(3, 's5', 10000, 21, 'uploads/iphone1.jpg', 0),
(4, 'iphoneX', 8500, 39, 'uploads/iphone1.jpg', 0),
(8, 's5', 10000, 38, 'uploads/unt.jpg', 0),
(9, 'iphoneX', 8500, 40, 'uploads/iphone1.jpg', 0),
(10, 'galaxy cover', 15, 40, 'uploads/6.jpg', 3);

-- --------------------------------------------------------

--
-- Structure de la table `promotion`
--

DROP TABLE IF EXISTS `promotion`;
CREATE TABLE IF NOT EXISTS `promotion` (
  `idpromotion` int(11) NOT NULL,
  `idproduit` int(11) NOT NULL,
  `datedebut` date NOT NULL,
  `datefin` date NOT NULL,
  `pourcentage` int(11) NOT NULL,
  PRIMARY KEY (`idpromotion`),
  KEY `id produit` (`idproduit`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `promotion`
--

INSERT INTO `promotion` (`idpromotion`, `idproduit`, `datedebut`, `datefin`, `pourcentage`) VALUES
(1, 1, '2019-12-03', '2019-12-19', 70),
(12, 3, '2019-12-07', '2019-12-11', 10);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `tel` bigint(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `date_crea` date NOT NULL,
  `role` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `nom`, `prenom`, `email`, `username`, `adresse`, `tel`, `password`, `date_crea`, `role`) VALUES
(1, 'said', 'bahaeddine', 'bahaeddine.said@esprit.tn', 'baha', '21 rue el kharrouba  wardia', 21656041146, '123', '2019-11-29', 'admin'),
(2, 'belhajhassine', 'sami', 'bahaeddine.said@esprit.tn', 'sami', 'kram', 21656041146, 'bbb', '2019-11-30', 'client'),
(3, 'said', 'eya', 'bahaeddine.said@esprit.tn', 'eya', 'wardia', 21656041146, 'nnn', '2019-11-30', 'client'),
(4, 'jebeli', 'wajih', 'Mohamedwajih.jebali@esprit.tn', 'wajih', 'ghazela', 25478963, '123', '2019-12-19', 'admin'),
(5, 'gazehi', 'wale', 'wale.gazehi@esprit.tn', 'wale', 'mourouj', 45789633, '123', '2019-12-10', 'admin'),
(6, 'tfifha', 'sami', 'sami.tfifha@dssdsd.tn', 'sami', '21 rue esprit', 45789632, '8521', '2019-12-07', 'admin'),
(9, 'ng', 'wilfried', 'wilfried@esprit.tn', 'wilfried', 'ghazela', 26458796, '123', '2019-12-10', 'admin');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commandes`
--
ALTER TABLE `commandes`
  ADD CONSTRAINT `commandes_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `commandes_p`
--
ALTER TABLE `commandes_p`
  ADD CONSTRAINT `commandes_p_ibfk_1` FOREIGN KEY (`tid`) REFERENCES `commandes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `panier`
--
ALTER TABLE `panier`
  ADD CONSTRAINT `panier_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `produit_ibfk_1` FOREIGN KEY (`id_cat`) REFERENCES `categorie` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `promotion`
--
ALTER TABLE `promotion`
  ADD CONSTRAINT `promotion_ibfk_1` FOREIGN KEY (`idproduit`) REFERENCES `produit` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
