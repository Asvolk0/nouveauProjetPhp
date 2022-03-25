-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 24 mars 2022 à 19:29
-- Version du serveur : 5.7.36
-- Version de PHP : 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `sitedeshopping`
--

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prenom` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `motDePasse` varchar(255) NOT NULL,
  `admin` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `prenom`, `nom`, `mail`, `motDePasse`, `admin`) VALUES
(39, 'Carl', 'Pennequin', 'carl@gmail.com', '$2y$10$KwhXOb25n9I/lTxl5IzTK.fB6z5RwIXm2oVFNxiwYQ0GsUX24Yn1i', 1),
(40, 'Adam', 'Comte', 'adam@gmail.com', '$2y$10$BQOvMrv.JHb2VbrnTYUYRuubrMqpAttzshVth4cwN1JQGaJ2.0y32', 1),
(41, 'Valentin', 'Robert', 'val@gmail.com', '$2y$10$EHnmgAGNlZvelT8Dq3rmluL/3NrHZRpZ.9vEtlQfC2N9KjcIDY436', 1),
(42, 'Anton', 'Lukusa', 'anton@gmail.com', '$2y$10$6YXIk0IoLSHotg18NK5c9.hNrd/j.mPVa0P7ZFfgxOFozvppfcfZa', 1),
(43, 'Tudor', 'Coman', 'tudor@gmail.com', '$2y$10$.Uqu1QojROVxc8QOWCCxAeAzlzoXIBHCvWpMcUvN0WTbQVmfHGP5G', 1),
(44, 'Cassandre', 'Pennequin', 'cass@gmail.com', '$2y$10$Sx53u5AbVJddgPC0rsQ2pOgtOUqci/e8P6L2jrerVK1sOWQl3ozo6', 1),
(45, 'Melwyne', 'Mouroux', 'melwyne@gmail.com', '$2y$10$rS0O.LNLAPAJbLyO1HIHfeWeNKj2h4pN8JpfpQ/fsRReBWiKkDmoq', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
