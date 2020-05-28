-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 18 mai 2020 à 00:59
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ecommerce`
--

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `cmdID` int(11) NOT NULL AUTO_INCREMENT,
  `cmdDate` datetime NOT NULL,
  `cmdPrice` float NOT NULL,
  `MethodePaiement` varchar(100) NOT NULL,
  `userID` int(11) NOT NULL,
  PRIMARY KEY (`cmdID`),
  KEY `userID` (`userID`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`cmdID`, `cmdDate`, `cmdPrice`, `MethodePaiement`, `userID`) VALUES
(18, '2020-05-18 00:32:47', 60, 'CarteBanquaire', 4),
(17, '2020-05-18 00:31:35', 60, 'CarteBanquaire', 4),
(16, '2020-05-18 00:31:14', 60, 'CarteBanquaire', 4),
(15, '2020-05-18 00:30:49', 60, 'CarteBanquaire', 4),
(12, '2020-05-18 00:20:52', 52, 'Especes', 2),
(14, '2020-05-18 00:30:03', 60, 'CarteBanquaire', 4),
(11, '2020-05-17 23:17:21', 52, 'CarteBanquaire', 2),
(19, '2020-05-18 00:33:27', 60, 'CarteBanquaire', 4),
(20, '2020-05-18 00:47:34', 53, 'CarteBanquaire', 4),
(21, '2020-05-18 00:47:56', 53, 'CarteBanquaire', 4),
(22, '2020-05-18 00:48:21', 5, 'CarteBanquaire', 4),
(23, '2020-05-18 00:48:35', 5, 'CarteBanquaire', 4),
(24, '2020-05-18 00:48:50', 57, 'CarteBanquaire', 4),
(25, '2020-05-18 00:49:46', 60, 'CarteBanquaire', 2),
(26, '2020-05-18 00:57:04', 53, 'CarteBanquaire', 2);

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `date`) VALUES
(1, 'Banane', 'Fruit', 2, '2020-05-15'),
(4, 'Pomme', 'Fruit', 3, '2020-05-15'),
(5, 'Yagourt', 'Danone', 2, '2020-05-15'),
(6, 'Pomme de terre', 'Legume', 2, '2020-05-15'),
(7, 'Nutella', 'Chocolat', 50, '2020-05-15'),
(8, 'maruja', 'Chocolat', 8, '2020-05-15');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `userID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `CIN` varchar(10) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `groupeID` int(11) NOT NULL DEFAULT '0',
  `regStatus` int(11) NOT NULL DEFAULT '0',
  `dateRegistre` datetime NOT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`userID`, `username`, `password`, `CIN`, `email`, `fullname`, `groupeID`, `regStatus`, `dateRegistre`) VALUES
(1, 'ADMIN', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '', 'Admin@gmail.com', 'Admin', 1, 0, '2020-05-15 00:00:00'),
(2, 'Client1', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'HH123', 'Sanaa@gmail.com', 'Sanaa Saadoune', 0, 0, '2020-05-03 00:00:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
