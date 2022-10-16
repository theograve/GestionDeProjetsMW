-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 08 oct. 2022 à 13:28
-- Version du serveur : 5.7.33
-- Version de PHP : 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestionprojetmw`
--

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `host_id` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `host_id` (`host_id`),
  KEY `customer_id` (`customer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `email`, `phone_number`, `role`, `host_id`, `customer_id`) VALUES
(1, 'FRANCOISE@gmail.fr', '0635068473', 'H', 1, 1),
(2, 'LEMARCHAND@gmail.fr', '0635064536', 'C', 2, 2),
(3, 'ROCANCOURT@gmail.fr', '0635262473', 'C', 3, 3),
(4, 'BUISARD@gmail.fr', '0789068473', 'C', 4, 4),
(5, 'LAROSE@gmail.fr', '0635784933', 'H', 5, 5),
(6, 'HOLLEY@gmail.fr', '0836789473', 'C', 6, 6),
(7, 'RIVIERE@gmail.fr', '0695068473', 'C', 7, 7),
(8, 'LEGRAND@gmail.fr', '0653805389', 'C', 8, 8),
(9, 'DUDOUET-MALASSIS@gmail.fr', '0635748473', 'H', 9, 9),
(10, 'MORIN@gmail.fr', '0456768479', 'C', 10, 10);

-- --------------------------------------------------------

--
-- Structure de la table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `notes` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `customer`
--

INSERT INTO `customer` (`id`, `code`, `name`, `notes`) VALUES
(1, '8520', 'Fleming', 'Complexenoteuno'),
(2, '6324', 'Crane', 'Complexenotedos'),
(3, '7979', 'Harris', 'Complexenotetres'),
(4, '1111', 'Mcguire', 'Complexenotequatro'),
(5, '8552', 'Daugherty', 'Complexenotequince'),
(6, '0000', 'Jackson', 'Complexenoteseis'),
(7, '1111', 'Robbins', 'Complexenotesiete'),
(8, '5996', 'Singh', 'Complexenoteocho'),
(9, '4475', 'Frye', 'Complexenotenueve'),
(10, '3333', 'Meyer', 'Complexenotediece');

-- --------------------------------------------------------

--
-- Structure de la table `environment`
--

DROP TABLE IF EXISTS `environment`;
CREATE TABLE IF NOT EXISTS `environment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `ip_adresse` varchar(255) NOT NULL,
  `ssh_port` int(6) NOT NULL,
  `ssh_username` varchar(255) NOT NULL,
  `phpmyadmin_link` varchar(255) NOT NULL,
  `ip_restriction` tinyint(1) NOT NULL,
  `project_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `project_id` (`project_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `environment`
--

INSERT INTO `environment` (`id`, `name`, `code`, `ip_adresse`, `ssh_port`, `ssh_username`, `phpmyadmin_link`, `ip_restriction`, `project_id`) VALUES
(5, 'Kadyn', '1111', '195.18.109.190', 22, 'SSHu1', 'https://www.phpmyadmin.net/', 1, 1),
(6, 'Gaige', '2222', '135.100.211.12', 22, 'SSHu2', 'https://www.phpmyadmin.net/', 1, 2),
(7, 'Aryanna', '3333', '21.226.193.139', 22, 'SSHu3', 'https://www.phpmyadmin.net/', 1, 3),
(8, 'Lamont', '4444', '185.100.211.12', 22, 'SSHu4', 'https://www.phpmyadmin.net/', 1, 4),
(9, 'Darwin', '5555', '185.119.169.95', 22, 'SSHu5', 'https://www.phpmyadmin.net/', 1, 5),
(10, 'Shaun', '6666', '72.155.169.255', 22, 'SSHu6', 'https://www.phpmyadmin.net/', 1, 6),
(11, 'Octavio', '7777', '107.7.62.233', 22, 'SSHu7', 'https://www.phpmyadmin.net/', 1, 7),
(12, 'Karla', '8888', '81.163.197.19', 22, 'SSHu8', 'https://www.phpmyadmin.net/', 1, 8),
(13, 'Lizbeth', '9999', '63.10.248.63', 22, 'SSHu9', 'https://www.phpmyadmin.net/', 1, 9);

-- --------------------------------------------------------

--
-- Structure de la table `host`
--

DROP TABLE IF EXISTS `host`;
CREATE TABLE IF NOT EXISTS `host` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `notes` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `host`
--

INSERT INTO `host` (`id`, `code`, `name`, `notes`) VALUES
(1, '1859', 'Kamila', 'Simplenoteuno'),
(2, '8652', 'Isabel', 'Simplenotedos'),
(3, '4669', 'Nathalia', 'Simplenotetres'),
(4, '7695', 'Presley', 'Simplenotequatro'),
(5, '8629', 'Samara', 'Simplenotequince'),
(6, '9685', 'Jake', 'Simplenoteseis'),
(7, '3524', 'Sherlyn', 'Simplenotesiete'),
(8, '5663', 'Jameson', 'Simplenoteocho'),
(9, '7748', 'Gilberto', 'Simplenotenueve'),
(10, '6660', 'Thaddeus', 'Simplenotediece');

-- --------------------------------------------------------

--
-- Structure de la table `project`
--

DROP TABLE IF EXISTS `project`;
CREATE TABLE IF NOT EXISTS `project` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `lastpass_folder` varchar(255) NOT NULL,
  `link_mock_ups` varchar(255) NOT NULL,
  `managed_server` tinyint(1) NOT NULL,
  `notes` text NOT NULL,
  `host_id` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `customer_id` (`customer_id`),
  KEY `host_id` (`host_id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `project`
--

INSERT INTO `project` (`id`, `name`, `code`, `lastpass_folder`, `link_mock_ups`, `managed_server`, `notes`, `host_id`, `customer_id`) VALUES
(1, 'York', '0000', 'C:\racin_foldermainfolder1', 'idkALink', 1, 'noteUno', 1, 1),
(2, 'Wolfe', '1111', 'C:\racin_foldermainfolder2', 'idkALink', 2, 'noteDos', 2, 2),
(3, 'Jones', '2222', 'C:\racin_foldermainfolder3', 'idkALink', 3, 'noteTrece', 3, 3),
(4, 'Gallagher', '3344', 'C:\racin_foldermainfolder4', 'idkALink', 4, 'noteQuatro', 4, 4),
(5, 'Campbell', '4455', 'C:\racin_foldermainfolder5', 'idkALink', 5, 'noteCinqo', 5, 5),
(6, 'Weaver', '5566', 'C:\racin_foldermainfolder6', 'idkALink', 6, 'noteSeis', 6, 6),
(7, 'Khan', '6677', 'C:\racin_foldermainfolder7', 'idkALink', 7, 'noteSiete', 7, 7),
(8, 'Molina', '7788', 'C:\racin_foldermainfolder8', 'idkALink', 8, 'noteOcho', 8, 8),
(9, 'Carpenter', '8899', 'C:\racin_foldermainfolder9', 'idkALink', 9, 'noteNueve', 9, 9);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `contact`
--
ALTER TABLE `contact`
  ADD CONSTRAINT `contact_ibfk_1` FOREIGN KEY (`host_id`) REFERENCES `host` (`id`),
  ADD CONSTRAINT `contact_ibfk_2` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`);

--
-- Contraintes pour la table `environment`
--
ALTER TABLE `environment`
  ADD CONSTRAINT `environment_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `project` (`id`);

--
-- Contraintes pour la table `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `project_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`),
  ADD CONSTRAINT `project_ibfk_2` FOREIGN KEY (`host_id`) REFERENCES `host` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
