-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Sam 11 Octobre 2014 à 17:41
-- Version du serveur :  5.6.20
-- Version de PHP :  5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `cnrs_lemon_test`
--

-- --------------------------------------------------------

--
-- Structure de la table `atelier`
--

CREATE TABLE IF NOT EXISTS `atelier` (
`atelier_id` smallint(5) unsigned NOT NULL,
  `atelier_nom` varchar(150) NOT NULL,
  `atelier_theme` varchar(100) NOT NULL,
  `atelier_type` varchar(100) NOT NULL,
  `atelier_discipline` varchar(100) NOT NULL,
  `atelier_resume` text,
  `atelier_duree` time NOT NULL,
  `atelier_capacite` smallint(6) unsigned NOT NULL,
  `atelier_inscription` varchar(50) NOT NULL,
  `atelier_laboratoire` varchar(150) NOT NULL,
  `atelier_adresse` varchar(200) NOT NULL,
  `atelier_zone` tinytext NOT NULL,
  `atelier_remarque` varchar(200) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=79 ;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `atelier`
--
ALTER TABLE `atelier`
 ADD PRIMARY KEY (`atelier_id`), ADD UNIQUE KEY `atelier_nom` (`atelier_nom`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `atelier`
--
ALTER TABLE `atelier`
MODIFY `atelier_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=79;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
