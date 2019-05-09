-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 09 mai 2019 à 10:31
-- Version du serveur :  5.7.24
-- Version de PHP :  7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `espaceadmin`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `titre`, `description`, `image`) VALUES
(1, 'Petit chat mignon', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum id ut provident mollitia, consequatur, quam ducimus quaerat explicabo dolor exercitationem officiis ad sapiente? Quo, nisi rerum blanditiis nesciunt natus autem.\r\nEnim nihil, dicta neque magni sunt soluta sed repudiandae nam a laudantium? Facere, vero officia impedit doloremque quasi nemo dolore tempore molestias odio? Accusamus placeat rem in dolor deleniti quia.\r\nNon natus nihil nulla molestias accusantium obcaecati quod magni, ex quaerat? Cum voluptas, sapiente cumque culpa minima autem iusto fugit velit vero sed natus asperiores a dignissimos impedit ipsa similique!\r\nIpsum voluptatem non reiciendis autem sunt distinctio porro illum magnam maxime provident neque, vero officia pariatur libero doloribus magni voluptate est! Maiores aperiam facilis consequatur ipsa voluptate reiciendis nobis quaerat.\r\nDicta quisquam adipisci cupiditate eaque. Omnis impedit quae repudiandae maiores repellendus distinctio ipsa eligendi eos culpa voluptate nostrum dolorum id harum, nisi aperiam tempore doloremque! Repellendus dicta ipsa aspernatur consectetur.\r\nMinima quidem impedit nobis dignissimos! Velit odio accusamus recusandae omnis maxime, dignissimos at! Voluptatem sit quasi eligendi esse non quia placeat nobis quisquam autem unde possimus recusandae, blanditiis ipsam ipsa.\r\nAt deserunt explicabo ut pariatur veritatis beatae officiis, asperiores praesentium esse alias quaerat odio, ad nam amet dolorem. Sunt ut aperiam quaerat voluptates, reprehenderit cupiditate eius dolores ex nobis necessitatibus!\r\nNecessitatibus voluptatum dolorem dolor ratione tempore adipisci consequuntur tenetur nemo molestias magni vel, eius quo nam maxime sunt. Aperiam suscipit repellendus amet distinctio at asperiores tenetur ducimus praesentium a nulla.', 'img/chat.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

DROP TABLE IF EXISTS `role`;
CREATE TABLE IF NOT EXISTS `role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `role`
--

INSERT INTO `role` (`id`, `role`) VALUES
(1, 'Admin'),
(2, 'Abonné');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pseudo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idrole` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `email`, `pseudo`, `password`, `idrole`) VALUES
(7, 'dylanbourbotte6@gmail.com', 'dbrbt62', '$2y$10$JliI1oShBe2GGpIk5MvGMuPbqaI6hpvJjSxE1LwKQu99dEzDGoKV2', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
