-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  ven. 10 avr. 2020 à 09:13
-- Version du serveur :  5.7.26
-- Version de PHP :  7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `JNLCspace`
--

-- --------------------------------------------------------

--
-- Structure de la table `mineraux`
--

CREATE TABLE `mineraux` (
  `id_min` int(11) NOT NULL,
  `nom_min` varchar(30) NOT NULL,
  `class_min` varchar(30) NOT NULL,
  `fk_lieu` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `mineraux`
--

INSERT INTO `mineraux` (`id_min`, `nom_min`, `class_min`, `fk_lieu`) VALUES
(1, 'critiruim', 'quartz  sulfate', NULL),
(2, 'doritos', 'carbone zing', NULL),
(3, 'politus', 'platine bronze', NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `mineraux`
--
ALTER TABLE `mineraux`
  ADD PRIMARY KEY (`id_min`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `mineraux`
--
ALTER TABLE `mineraux`
  MODIFY `id_min` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
