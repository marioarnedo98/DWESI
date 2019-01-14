-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 14-01-2019 a las 13:48:44
-- Versión del servidor: 5.7.21
-- Versión de PHP: 7.2.4

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
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `authors`
--

INSERT INTO `authors` (`id`, `Name`, `created`, `modified`) VALUES
(1, 'David Guetta', '2018-12-28 11:46:04', '2018-12-28 11:46:04'),
(2, 'Mario', '2019-01-04 17:39:10', '2019-01-04 17:39:10'),
(3, 'Detective Conan', '2019-01-04 17:52:09', '2019-01-04 17:52:09'),
(4, 'Dragon Ball', '2019-01-04 17:53:47', '2019-01-04 17:53:47');

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
(20181224101534, 'Initial', '2018-12-24 09:15:35', '2018-12-24 09:15:35', 0);

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
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `songs`
--

INSERT INTO `songs` (`id`, `title`, `author_id`, `publisher_id`, `photo`, `song`, `dir_photo`, `dir_song`, `created`, `modified`) VALUES
(1, 'Hello There!', 2, 1, '5c2f9b80df4bc_20766482_507086866295933_4902512118193979392_n.jpg', '5c2f9b813079a_hellothere.mp3', 'webroot\\files\\Songs\\photo\\', 'webroot\\files\\Songs\\song\\', '2019-01-03 13:41:05', '2019-01-04 17:44:32'),
(2, 'Say my Name', 1, 1, '5c2f9c9c39a88_Say-My-Name-Single.jpg', '5c2f9c9c3fd84_David_Guetta,_Bebe_Rexha_&_J_Balvin_-_Say_My_Name.mp3', 'webroot\\files\\Songs\\photo\\', 'webroot\\files\\Songs\\song\\', '2019-01-04 17:49:16', '2019-01-04 17:49:16'),
(3, 'Detective Conan Intro', 3, 1, '5c2f9f52bc491_476255.png', '5c2f9f52c115a_Detective_Conan_Theme_Song.mp3', 'webroot\\files\\Songs\\photo\\', 'webroot\\files\\Songs\\song\\', '2019-01-04 17:58:30', '2019-01-04 18:00:50'),
(4, 'Dragon Ball Intro', 4, 1, '5c2f9fbbb7006_dragonball.jpg', '5c2f9fbbbc577_Dragon_Ball_Super_Soundtrack_Full__Ultimate_Battle_-_Akira_Kushida_(Lyrics).mp3', 'webroot\\files\\Songs\\photo\\', 'webroot\\files\\Songs\\song\\', '2019-01-04 18:02:35', '2019-01-04 18:02:35'),
(5, 'She Wolf', 1, 1, '5c2fa0d899541_david_guetta_she_wolf.jpg', '5c2fa0d89f63a_David_Guetta_-_She_Wolf_(Falling_To_Pieces)_ft._Sia_(Official_Video).mp3', 'webroot\\files\\Songs\\photo\\', 'webroot\\files\\Songs\\song\\', '2019-01-04 18:07:20', '2019-01-04 18:07:20'),
(6, 'Root Of All Evil', 2, 1, '5c2fa1abe8ea8_110000.jpg', '5c2fa1abee15c_Root_of_All_Evil_feat._Incendiary_(Official_Theme).mp3', 'webroot\\files\\Songs\\photo\\', 'webroot\\files\\Songs\\song\\', '2019-01-04 18:10:51', '2019-01-04 18:10:51');

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
