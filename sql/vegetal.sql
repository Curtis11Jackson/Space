-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Ven 10 Avril 2020 à 10:58
-- Version du serveur :  5.7.28-0ubuntu0.18.04.4
-- Version de PHP :  7.2.24-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Structure de la table `vegetal`
--

CREATE TABLE `vegetal` (
  `id_veg` int(11) NOT NULL,
  `nom_veg` varchar(30) NOT NULL,
  `class_veg` varchar(50) NOT NULL,
  `taille_veg` varchar(30) NOT NULL,
  `fk_lieu` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `vegetal`
--

INSERT INTO `vegetal` (`id_veg`, `nom_veg`, `class_veg`, `taille_veg`, `fk_lieu`) VALUES
(1, 'fougère géante', 'plante verte', '2 mètres', NULL),
(3, 'mange-tout', 'plante carnivore', '5 mètres', NULL),
(4, 'baobab', 'arbre', '56 mètres', NULL);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `vegetal`
--
ALTER TABLE `vegetal`
  ADD PRIMARY KEY (`id_veg`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `vegetal`
--
ALTER TABLE `vegetal`
  MODIFY `id_veg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
