-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  ven. 10 avr. 2020 à 09:17
-- Version du serveur :  5.7.26
-- Version de PHP :  7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `JNLCspace`
--

-- --------------------------------------------------------

--
-- Structure de la table `outil`
--

CREATE TABLE `outil` (
  `id_outil` int(11) NOT NULL,
  `nom_outil` varchar(30) NOT NULL,
  `role_outil` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `outil`
--

INSERT INTO `outil` (`id_outil`, `nom_outil`, `role_outil`) VALUES
(1, 'gatlinoru', 'retourne le sol pour semer'),
(2, 'defrigerateur', 'coupe les branches'),
(3, 'pelletolaser', 'creuse de façon automatique le sol');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `outil`
--
ALTER TABLE `outil`
  ADD PRIMARY KEY (`id_outil`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `outil`
--
ALTER TABLE `outil`
  MODIFY `id_outil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;