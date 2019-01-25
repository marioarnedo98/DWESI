-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 25-01-2019 a las 10:29:06
-- Versión del servidor: 5.7.19
-- Versión de PHP: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cake_music`
--
CREATE DATABASE IF NOT EXISTS `cake_music` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `cake_music`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `authors`
--

DROP TABLE IF EXISTS `authors`;
CREATE TABLE IF NOT EXISTS `authors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `description` varchar(5000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `authors`
--

INSERT INTO `authors` (`id`, `Name`, `created`, `modified`, `description`) VALUES
(1, 'David Guetta', '2018-12-28 11:46:04', '2019-01-25 09:32:00', 'David Guetta es un DJ de EDM Frances, nacido en 1967 en París, Francia.'),
(2, 'Mario', '2019-01-04 17:39:10', '2019-01-25 09:32:48', 'Mario Arnedo es un estudiante de DAW, no tiene nada que ver con la música, pero la escucha'),
(3, 'Detective Conan', '2019-01-04 17:52:09', '2019-01-25 09:36:25', 'Detective Conan es una serie de dibujos animados, en el cual Sinichi Kudo, detective de secundaria, le hacen tomar un veneno en uno de sus casos y se convierte en un niño de 7 años.'),
(4, 'Dragon Ball', '2019-01-04 17:53:47', '2019-01-25 09:37:03', 'Dragon Ball es la serie más famosa de dibujos, en el cual varios humanos con superpoderes luchan contra el mal.'),
(5, 'Da Tweekaz', '2019-01-25 09:15:14', '2019-01-25 09:37:44', 'Es un duo de DJ Noruegos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `lft` int(10) NOT NULL,
  `rght` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `lft`, `rght`, `name`, `description`, `created`, `modified`) VALUES
(1, NULL, 1, 6, 'Electrónica', 'Música electrónica, disfruta de lo mejor de la electrónica de estos 10 últimos años', '2019-01-25 07:59:09', '2019-01-25 07:59:09'),
(2, 1, 2, 3, 'Boomwhackers', 'Música electrónica con tubos, al hacerlos pulsar, pum! producirás un sonido', '2019-01-25 08:00:33', '2019-01-25 08:00:33'),
(3, NULL, 7, 10, 'Rock', '!Rock para todo el mundo!', '2019-01-25 08:01:05', '2019-01-25 08:01:05'),
(4, 3, 8, 9, 'WWE', '¡Musica rock de la WWE!', '2019-01-25 08:01:26', '2019-01-25 08:09:53'),
(5, 1, 4, 5, 'Anime', 'Las mejores canciones electrónicas en dibujos', '2019-01-25 08:29:02', '2019-01-25 08:29:02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `phinxlog`
--

DROP TABLE IF EXISTS `phinxlog`;
CREATE TABLE IF NOT EXISTS `phinxlog` (
  `version` bigint(20) NOT NULL,
  `migration_name` varchar(100) DEFAULT NULL,
  `start_time` timestamp NULL DEFAULT NULL,
  `end_time` timestamp NULL DEFAULT NULL,
  `breakpoint` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `phinxlog`
--

INSERT INTO `phinxlog` (`version`, `migration_name`, `start_time`, `end_time`, `breakpoint`) VALUES
(20181224101534, 'Initial', '2018-12-24 09:15:35', '2018-12-24 09:15:35', 0),
(20190124074820, 'AddCategoryToMusic', '2019-01-24 08:22:25', '2019-01-24 08:22:25', 0),
(20190124075028, 'CreateCategories', '2019-01-24 08:22:25', '2019-01-24 08:22:26', 0),
(20190124075253, 'AddDescriptionToAuthors', '2019-01-24 08:22:26', '2019-01-24 08:22:26', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publishers`
--

DROP TABLE IF EXISTS `publishers`;
CREATE TABLE IF NOT EXISTS `publishers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `publishers`
--

INSERT INTO `publishers` (`id`, `name`, `created`, `modified`) VALUES
(1, 'Mario', '2018-12-28 11:46:29', '2018-12-28 11:46:29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `songs`
--

DROP TABLE IF EXISTS `songs`;
CREATE TABLE IF NOT EXISTS `songs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `author_id` int(11) NOT NULL,
  `publisher_id` int(11) NOT NULL,
  `photo` varchar(300) NOT NULL,
  `song` varchar(300) NOT NULL,
  `dir_photo` varchar(300) NOT NULL,
  `dir_song` varchar(300) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `category_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `songs`
--

INSERT INTO `songs` (`id`, `title`, `author_id`, `publisher_id`, `photo`, `song`, `dir_photo`, `dir_song`, `created`, `modified`, `category_id`) VALUES
(1, 'Hello There!', 2, 1, '5c2f9b80df4bc_20766482_507086866295933_4902512118193979392_n.jpg', '5c2f9b813079a_hellothere.mp3', 'webroot\\files\\Songs\\photo\\', 'webroot\\files\\Songs\\song\\', '2019-01-03 13:41:05', '2019-01-04 17:44:32', 2),
(2, 'Say my Name', 1, 1, '5c2f9c9c39a88_Say-My-Name-Single.jpg', '5c2f9c9c3fd84_David_Guetta,_Bebe_Rexha_&_J_Balvin_-_Say_My_Name.mp3', 'webroot\\files\\Songs\\photo\\', 'webroot\\files\\Songs\\song\\', '2019-01-04 17:49:16', '2019-01-04 17:49:16', 1),
(4, 'Dragon Ball Intro', 4, 1, '5c2f9fbbb7006_dragonball.jpg', '5c2f9fbbbc577_Dragon_Ball_Super_Soundtrack_Full__Ultimate_Battle_-_Akira_Kushida_(Lyrics).mp3', 'webroot\\files\\Songs\\photo\\', 'webroot\\files\\Songs\\song\\', '2019-01-04 18:02:35', '2019-01-04 18:02:35', 5),
(5, 'She Wolf', 1, 1, '5c2fa0d899541_david_guetta_she_wolf.jpg', '5c2fa0d89f63a_David_Guetta_-_She_Wolf_(Falling_To_Pieces)_ft._Sia_(Official_Video).mp3', 'webroot\\files\\Songs\\photo\\', 'webroot\\files\\Songs\\song\\', '2019-01-04 18:07:20', '2019-01-04 18:07:20', 1),
(6, 'Root Of All Evil', 2, 1, '5c2fa1abe8ea8_110000.jpg', '5c2fa1abee15c_Root_of_All_Evil_feat._Incendiary_(Official_Theme).mp3', 'webroot\\files\\Songs\\photo\\', 'webroot\\files\\Songs\\song\\', '2019-01-04 18:10:51', '2019-01-04 18:10:51', 4),
(14, 'Da Tweekaz - Jägermeister', 5, 1, '5c4ad27614902_Da_Tweekaz_-_Jägermeister.jpg', '5c4ad27618785_Da_Tweekaz_-_Jägermeister_(Official_Video).mp3', 'webroot\\files\\Songs\\photo\\', 'webroot\\files\\Songs\\song\\', '2019-01-25 09:10:14', '2019-01-25 09:10:14', 0),
(13, 'Arcade vs Bad - David Guetta [Brayan Ü Remake]', 1, 1, '5c4ad161c9257_arcade.jpg', '5c4ad161cceac_Arcade_vs_Bad_-_David_Guetta_[Brayan_Ü_Remake].mp3', 'webroot\\files\\Songs\\photo\\', 'webroot\\files\\Songs\\song\\', '2019-01-25 09:05:37', '2019-01-25 09:05:37', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `username`, `created`, `modified`) VALUES
(4, 'marioarnedo1@gmail.com', '$2y$10$uXQX0tiXEVnQNnh.nCvUeOG/2ccZ0jp.zeffgfXj0VQYHs1o2gp3u', 'mario', '2019-01-14 11:47:47', '2019-01-14 11:47:47'),
(5, 'marioarnedo98@gmail.com', '$2y$10$/VXJeQXmFtUbqvl/7/7efehG2N8LlEPqZhTRUBbDxR37m7xQtL/3e', 'marioarnedo98', '2019-01-14 11:56:04', '2019-01-14 11:56:04');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
