-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 21 avr. 2019 à 18:44
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projetweb`
--

-- --------------------------------------------------------

--
-- Structure de la table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
CREATE TABLE IF NOT EXISTS `blogs` (
  `numBlog` int(11) NOT NULL AUTO_INCREMENT,
  `titreBlog` varchar(256) NOT NULL,
  `description` text NOT NULL,
  `imageBlog` varchar(256) NOT NULL,
  `nb` int(11) NOT NULL,
  `marque` varchar(256) NOT NULL,
  PRIMARY KEY (`numBlog`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `blogs`
--

INSERT INTO `blogs` (`numBlog`, `titreBlog`, `description`, `imageBlog`, `nb`, `marque`) VALUES
(13, 'hou', 'hiiiiiiiiiiiii', 'hob.jpg', 7, 'carrera'),
(14, 'hou', 'llllllllllllllllllll', 'hob.jpg', 1, 'carrera'),
(15, 'imen', 'llllllllllllllllllllll', 'hob.jpg', 2, 'retro eyewear'),
(16, 'wifek', 'dkkd', 'hob.jpg', 0, 'ray ban');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
