# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.6.35)
# Database: wastedpainter
# Generation Time: 2017-10-25 23:42:42 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table blog_entries
# ------------------------------------------------------------

CREATE TABLE `blog_entries` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` text,
  `date` datetime DEFAULT NULL,
  `content` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `blog_entries` WRITE;
/*!40000 ALTER TABLE `blog_entries` DISABLE KEYS */;

INSERT INTO `blog_entries` (`id`, `name`, `date`, `content`)
VALUES
	(1,'Potrait 1\n',NULL,'<div class=\"blog-post\">\n	<p>Potrait 1</p>\n	\n\n	<p>Here is some information about portrait one and how I did it and who it is.</p>\n</div>'),
	(2,'Portrait 2',NULL,'<div class=\"blog-post\">\n	<p>Potrait 2</p>\n\n\n	<p>Here is some information about portrait two and how I did it and who it is.</p>\n</div>'),
	(3,'Portrait 3\n',NULL,'<div class=\"blog-post\">\n	<p>Potrait 3</p>\n\n\n	<p>Here is some information about portrait three and how I did it and who it is.</p>\n</div>'),
	(4,'Portrait 4',NULL,'<div class=\"blog-post\">\n	<p>Potrait 4</p>\n\n\n	<p>Here is some information about portrait four and how I did it and who it is.</p>\n</div>'),
	(5,'Portrait 5',NULL,'<div class=\"blog-post\">\n	<p>Potrait 5</p>\n\n\n	<p>Here is some information about portrait five and how I did it and who it is.</p>\n</div>');

/*!40000 ALTER TABLE `blog_entries` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
