-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Client :  localhost:3306
-- Généré le :  Lun 06 Juin 2016 à 16:13
-- Version du serveur :  5.5.42
-- Version de PHP :  7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `kandt`
--

-- --------------------------------------------------------

--
-- Structure de la table `page`
--

CREATE TABLE `page` (
  `id` int(11) NOT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `h1` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `span_text` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `span_class` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `page`
--

INSERT INTO `page` (`id`, `slug`, `h1`, `body`, `title`, `img`, `span_text`, `span_class`) VALUES
(1, 'teletubbies', 'Teletubbies', '<div class="jumbotron">\r\n            <h1>Les Teletubbies</h1>\r\n            <p>C''est flippant.</p>\r\n            <span class="label label-danger">Danger</span>\r\n        </div>\r\n        <img class="img-thumbnail" alt="Teletubbies" src="img/teletubbies.jpg" data-holder-rendered="true">', 'Teletubbies', '', '', ''),
(2, 'kittens', 'Kittens', '<div class="jumbotron">\n            <h1>Les Chatons!</h1>\n            <p>C''est mignon.</p>\n            <span class="label label-success">Kawaiiii!</span>\n        </div>\n        <img class="img-thumbnail" alt="Teletubbies" src="img/three_kittens.jpg" data-holder-rendered="true">', 'Kittens', '', '', ''),
(3, 'moomins', 'Les moomins', '<div class="jumbotron">\n            <h1>Les moomins</h1>\n            <p>C''est trop ouf.</p>\n            <span class="label label-success">Old schooooool!</span>\n        </div>\n        <img class="img-thumbnail" alt="Moomins" src="img/moomin.jpg" data-holder-rendered="true">', 'Les moomins', '', '', '');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `page`
--
ALTER TABLE `page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
