-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 05 sep. 2024 à 12:46
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `e-commerce_examen`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `motdepasse` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=79 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `pseudo`, `email`, `motdepasse`) VALUES
(77, 'booba', 'boubacar.bah.zola@gmail.com', 'Blakos68.');

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id`, `nom`) VALUES
(1, 'Dragon Ball'),
(2, 'Naruto'),
(3, 'Attaque des Titans'),
(4, 'Full Metal');

-- --------------------------------------------------------

--
-- Structure de la table `formateur`
--

DROP TABLE IF EXISTS `formateur`;
CREATE TABLE IF NOT EXISTS `formateur` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `prix` int NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `formateur`
--

INSERT INTO `formateur` (`id`, `nom`, `image`, `prix`, `description`) VALUES
(1, 'San-\r\nGoku', 'https://c4.wallpaperflare.com/wallpaper/933/220/1004/dragon-ball-z-wallpaper-preview.jpg', 20, 'Formateur en développement informatique spécialiser dans front-end  '),
(2, 'Itachi Uchiwa', 'https://www.hdwallpapers.in/download/itachi_uchiha_mangekyo_sharingan_sharingan_hd_naruto-2560x1440.jpg', 20, 'Formateur en développement informatique spécialiser dans l\'IA'),
(3, 'Eren Yeager', 'https://images5.alphacoders.com/121/thumb-1920-1217703.png', 20, 'Formateur en développement informatique spécialiser dans le back-end'),
(5, 'Edward Elric ', 'https://images6.alphacoders.com/629/thumb-1920-629549.jpg', 55, 'Jeune formateur spécialiser  en Cybersécurité/Technicien systèmes et réseaux');

-- --------------------------------------------------------

--
-- Structure de la table `formateur1`
--

DROP TABLE IF EXISTS `formateur1`;
CREATE TABLE IF NOT EXISTS `formateur1` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `prix` int DEFAULT NULL,
  `description` text,
  `categorie_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `categorie_id` (`categorie_id`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `formateur1`
--

INSERT INTO `formateur1` (`id`, `nom`, `image`, `prix`, `description`, `categorie_id`) VALUES
(1, 'Goku', 'https://pa1.narvii.com/6735/c7137d0a4a413f991e3205732a0ca5c20053c1a7_hq.gif', 100, 'Cours pour apprendre les bases de HTML CSS', 1),
(2, 'Naruto', 'https://www.mkgifs.com/wp-content/uploads/2022/06/GIF-Wallpaper-Angry-Naruto.gif', 100, 'Cours pour apprendre les bases de HTML/ CSS', 2),
(3, 'Eren', 'https://i.pinimg.com/originals/1a/3c/c3/1a3cc3a66a6e49161b6e87d68304c17d.gif', 200, 'Cours pour apprendre les bases de HTML/ CSS', 3),
(4, 'Edward', 'https://66.media.tumblr.com/tumblr_lxnva8h2YU1qj0krzo1_500.gif', 10, 'Cours pour apprendre les bases de HTML/ CSS', 4),
(5, 'Gohan', 'https://steamuserimages-a.akamaihd.net/ugc/868489617104985026/14A307FB4D3C6D55B23BF1E283CED36B519AF6AF/?imw=5000&imh=5000&ima=fit&impolicy=Letterbox&imcolor=%23000000&letterbox=false', 100, 'cours pour apprendre les bases de JavaScript ', 1),
(6, 'Bulma', 'https://media0.giphy.com/media/DGOwpxMq9mtCU/200w.gif?cid=6c09b9522y0awcm9stvybt9x2n1kwebvfk2jao46ik6zq2se&ep=v1_gifs_search&rid=200w.gif&ct=g', 50, 'Cours pour apprendre les bases de PHP      ', 1),
(7, 'Vegeta', 'https://i.gifer.com/ch.gif', 50, 'cours pour apprendre la cybersécurité ', 1),
(8, 'Piccolo', 'https://37.media.tumblr.com/tumblr_mbuaxjMBhE1r72ht7o1_500.gif?w=240', 50, 'cours pour apprendre SQL', 1),
(9, 'Trunks', 'https://media.tenor.com/UkacYko83rMAAAAM/trunks-future.gif', 50, 'Cours pour apprendre WordPress', 1),
(10, 'Itachi', 'https://www.serieously.com/app/uploads/2021/09/itachi-gif.gif', 100, 'Cours pour apprendre les bases de JavaScript', 2),
(11, 'Kakashi', 'https://i.pinimg.com/originals/96/08/82/960882d6c47696cabc98d53797b1d575.gif', 100, 'Cours pour apprendre les bases de PHP', 2),
(13, 'Minato', 'https://www.icegif.com/wp-content/uploads/2022/10/icegif-1656.gif', 100, 'Cours pour apprendre SQL', 2),
(15, 'Sasuke', 'https://i.gifer.com/PAo7.gif', 100, 'Cours pour apprendre wordpress', 2),
(17, 'Mikasa', 'https://www.icegif.com/wp-content/uploads/2022/07/icegif-365.gif', 100, 'Cours pour apprendre les bases de JavaScript', 3),
(12, 'Tsunade', 'https://i.pinimg.com/originals/9c/31/7d/9c317d80aeeaeab2660c34e980ecdfd7.gif', 100, 'Cours pour apprendre la Cybersécurité ', 2),
(18, 'Armin', 'https://64.media.tumblr.com/4fbf7ddd0b007ce652390144a5fce259/db433348f8b6c121-d7/s540x810/59d05024a4f84904393b424463dd972e1f2170e9.gifv', 100, 'Cours pour apprendre les bases de PHP', 3),
(19, 'Livai', 'https://giffiles.alphacoders.com/221/221266.gif', 100, 'Cours pour apprendre la Cybersécurité ', 3),
(20, 'Erwin', 'https://i.pinimg.com/originals/a2/64/5b/a2645bfa0b94866f74594416646c695a.gif', 100, 'Cours pour apprendre le SQL', 3),
(21, 'Sasha', 'https://i.imgur.com/hcR5OR3.gif', 100, 'Cours pour apprendre WordPress', 3),
(22, 'Alphonse ', 'https://media.tenor.com/f-7RWadEmTUAAAAC/alphonse-elric.gif', 100, 'Cours pour apprendre les bases de JavaScript', 4),
(26, 'Winry8', 'https://66.media.tumblr.com/tumblr_lya2iiSY9v1rn95k2o1_500.gif', 101, 'Cours pour apprendre les bases de PHP', 4),
(23, 'Mustang', 'https://giffiles.alphacoders.com/113/113460.gif', 100, 'Cours pour apprendre la cybersécurité', 4),
(24, 'Scar', 'https://64.media.tumblr.com/76dafc911645f149a49b13656f3779cd/91327a746078282a-7b/s1280x1920/0245f40ebb9ac94fb750c8ee82a5fc9c23e1ded0.gif', 100, 'Cours pour apprendre le SQL', 4),
(25, 'Riza', 'https://i.pinimg.com/originals/1b/48/86/1b4886690e0421e39e7ed63bd4566c8f.gif', 100, 'Cour pour apprendre WordPress', 4),
(35, 'krilin12', 'https://static.wikia.nocookie.net/dragonball/images/1/1f/Kuririn_-_DBZ_Saiyajin_Saga.png/revision/latest/scale-to-width/360?cb=20170811004956&amp;path-prefix=fr', 1, '11111111111111111111111', 1);

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

DROP TABLE IF EXISTS `produits`;
CREATE TABLE IF NOT EXISTS `produits` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(150) NOT NULL,
  `image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `prix` int NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`id`, `nom`, `image`, `prix`, `description`) VALUES
(20, 'Dragon ball Academy', 'https://boubabah.github.io/SitePerso/download-2%20(1).jpeg', 50, 'Rejoignez la Dragon Ball Academy!, où la puissance de la programmation rencontre l\'esprit des guerriers! Devenez un maître du code et libérez votre potentiel technologique!'),
(26, 'Full Metal Alchemist Academy', 'https://boubabah.github.io/SitePerso/download-5.jpeg', 75, 'Transformez votre passion en compétence à la Full Metal Alchemist Academy, où l\'art de la programmation se forge avec la précision de l\'alchimie !'),
(22, 'l\'Attaque des Titans Academy\r\nProtecting and Humanity', 'https://boubabah.github.io/SitePerso/download-3%20(1).jpeg', 70, 'Défendez l\'avenir numérique à l\'Attaque des Titans Academy, où la programmation devient votre arme ultime contre les défis technologiques !'),
(21, 'Naruto Academy\r\nNinja \r\n', 'https://boubabah.github.io/SitePerso/download-6.jpeg', 50, 'Maîtrisez l\'art du code à la Ninja Academy, où la programmation rencontre l\'esprit de Naruto et ses amies pour former les ninjas technologiques de demain !');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
