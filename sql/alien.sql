-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 10 avr. 2020 à 08:58
-- Version du serveur :  8.0.18
-- Version de PHP :  7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `space`
--

-- --------------------------------------------------------

--
-- Structure de la table `alien`
--

DROP TABLE IF EXISTS `alien`;
CREATE TABLE IF NOT EXISTS `alien` (
  `id_alien` int(11) NOT NULL AUTO_INCREMENT,
  `nom_alien` varchar(30) NOT NULL,
  `race_alien` varchar(30) NOT NULL,
  `carac_alien` varchar(30) NOT NULL,
  PRIMARY KEY (`id_alien`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `alien`
--

INSERT INTO `alien` (`id_alien`, `nom_alien`, `race_alien`, `carac_alien`) VALUES
(1, 'Garindan', 'Kubaz', 'voleur et hostile'),
(2, 'Bear', 'Ewoks', 'gregaire'),
(3, 'Lycia ', 'Chimere', 'monstrueux');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
