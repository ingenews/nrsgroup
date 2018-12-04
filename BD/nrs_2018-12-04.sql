# ************************************************************
# Sequel Pro SQL dump
# Versión 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.21)
# Base de datos: nrs
# Tiempo de Generación: 2018-12-04 07:48:20 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Volcado de tabla butacas
# ------------------------------------------------------------

DROP TABLE IF EXISTS `butacas`;

CREATE TABLE `butacas` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `usuarios_id` int(11) DEFAULT NULL,
  `fila` int(11) DEFAULT NULL,
  `columna` int(11) DEFAULT NULL,
  `estado` int(11) DEFAULT '0',
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `butacas` WRITE;
/*!40000 ALTER TABLE `butacas` DISABLE KEYS */;

INSERT INTO `butacas` (`id`, `usuarios_id`, `fila`, `columna`, `estado`, `updated_at`, `created_at`)
VALUES
	(58,2,1,1,1,'2018-12-04 07:32:56',NULL),
	(59,2,1,2,1,'2018-12-04 07:36:07',NULL),
	(60,2,1,3,1,'2018-12-04 07:32:56',NULL),
	(61,2,1,4,1,'2018-12-04 07:36:07',NULL),
	(62,2,1,5,1,'2018-12-04 07:32:56',NULL),
	(63,NULL,1,6,0,NULL,NULL),
	(64,NULL,1,7,0,NULL,NULL),
	(65,NULL,1,8,0,NULL,NULL),
	(66,NULL,1,9,0,NULL,NULL),
	(67,NULL,1,10,0,NULL,NULL),
	(68,NULL,2,1,0,NULL,NULL),
	(69,2,2,2,1,'2018-12-04 07:36:07',NULL),
	(70,NULL,2,3,0,NULL,NULL),
	(71,2,2,4,1,'2018-12-04 07:36:07',NULL),
	(72,NULL,2,5,0,NULL,NULL),
	(73,NULL,2,6,0,NULL,NULL),
	(74,NULL,2,7,0,NULL,NULL),
	(75,NULL,2,8,0,NULL,NULL),
	(76,NULL,2,9,0,NULL,NULL),
	(77,NULL,2,10,0,NULL,NULL),
	(78,NULL,3,1,0,NULL,NULL),
	(79,NULL,3,2,0,NULL,NULL),
	(80,NULL,3,3,0,NULL,NULL),
	(81,NULL,3,4,0,NULL,NULL),
	(82,NULL,3,5,0,NULL,NULL),
	(83,NULL,3,6,0,NULL,NULL),
	(84,NULL,3,7,0,NULL,NULL),
	(85,NULL,3,8,0,NULL,NULL),
	(86,NULL,3,9,0,NULL,NULL),
	(87,NULL,3,10,0,NULL,NULL),
	(88,NULL,4,1,0,NULL,NULL),
	(89,NULL,4,2,0,NULL,NULL),
	(90,NULL,4,3,0,NULL,NULL),
	(91,NULL,4,4,0,NULL,NULL),
	(92,NULL,4,5,0,NULL,NULL),
	(93,NULL,4,6,0,NULL,NULL),
	(94,NULL,4,7,0,NULL,NULL),
	(95,NULL,4,8,0,NULL,NULL),
	(96,NULL,4,9,0,NULL,NULL),
	(97,NULL,4,10,0,NULL,NULL),
	(98,NULL,5,1,0,NULL,NULL),
	(99,NULL,5,2,0,NULL,NULL),
	(100,NULL,5,3,0,NULL,NULL),
	(101,NULL,5,4,0,NULL,NULL),
	(102,NULL,5,5,0,NULL,NULL),
	(103,NULL,5,6,0,NULL,NULL),
	(104,NULL,5,7,0,NULL,NULL),
	(105,NULL,5,8,0,NULL,NULL),
	(106,NULL,5,9,0,NULL,NULL),
	(107,NULL,5,10,0,NULL,NULL);

/*!40000 ALTER TABLE `butacas` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla usuarios
# ------------------------------------------------------------

DROP TABLE IF EXISTS `usuarios`;

CREATE TABLE `usuarios` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nombres` text,
  `apellidos` text,
  `email` text,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;

INSERT INTO `usuarios` (`id`, `nombres`, `apellidos`, `email`, `updated_at`, `created_at`)
VALUES
	(2,'Miguel','Ruiz','miguel@busquecarro.com','2018-12-04 04:04:06','2018-12-04 04:04:06'),
	(3,'Ginna','Acosta','ginauta@hotmail.es','2018-12-04 04:48:15','2018-12-04 04:48:15');

/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
