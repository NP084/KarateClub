# ************************************************************
# Sequel Pro SQL dump
# Version 5438
#
# https://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 8.0.15)
# Database: BlogMEP
# Generation Time: 2019-09-09 08:58:24 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table adress
# ------------------------------------------------------------

DROP TABLE IF EXISTS `adress`;

CREATE TABLE `adress` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `city_id` int(11) NOT NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `num` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_box` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `street_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_5CECC7BE8BAC62AF` (`city_id`),
  CONSTRAINT `FK_5CECC7BE8BAC62AF` FOREIGN KEY (`city_id`) REFERENCES `city` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table app_user
# ------------------------------------------------------------

DROP TABLE IF EXISTS `app_user`;

CREATE TABLE `app_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_connected_id` int(11) DEFAULT NULL,
  `belt` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `receipt_date` date DEFAULT NULL,
  `sex` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_image` datetime DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_us` datetime NOT NULL,
  `first_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthdate` date DEFAULT NULL,
  `fed_num` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_trial` tinyint(1) DEFAULT NULL,
  `bars` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_88BDF3E9F2063BA5` (`user_connected_id`),
  CONSTRAINT `FK_88BDF3E9F2063BA5` FOREIGN KEY (`user_connected_id`) REFERENCES `userconnected` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table article
# ------------------------------------------------------------

DROP TABLE IF EXISTS `article`;

CREATE TABLE `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `image_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_image` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_23A0E6612469DE2` (`category_id`),
  CONSTRAINT `FK_23A0E6612469DE2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table attached_file
# ------------------------------------------------------------

DROP TABLE IF EXISTS `attached_file`;

CREATE TABLE `attached_file` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `member_id` int(11) DEFAULT NULL,
  `registration_id` int(11) DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `datecreat` datetime DEFAULT NULL,
  `docname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_B010289A7597D3FE` (`member_id`),
  KEY `IDX_B010289A833D8F43` (`registration_id`),
  CONSTRAINT `FK_B010289A7597D3FE` FOREIGN KEY (`member_id`) REFERENCES `app_user` (`id`),
  CONSTRAINT `FK_B010289A833D8F43` FOREIGN KEY (`registration_id`) REFERENCES `registration` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `attached_file` WRITE;
/*!40000 ALTER TABLE `attached_file` DISABLE KEYS */;

INSERT INTO `attached_file` (`id`, `member_id`, `registration_id`, `title`, `description`, `datecreat`, `docname`)
VALUES
	(1,NULL,NULL,'Fiche renseignements VIKA admin',NULL,NULL,'5cd6af940290c395357562.pdf'),
	(2,NULL,NULL,'CG',NULL,NULL,'5cd6af940290c395357561.pdf');

/*!40000 ALTER TABLE `attached_file` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table category
# ------------------------------------------------------------

DROP TABLE IF EXISTS `category`;

CREATE TABLE `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;

INSERT INTO `category` (`id`, `title`, `description`)
VALUES
	(4,'Passage de grade','Historique'),
	(5,'Participation à un stage','Historique'),
	(6,'Participation à une compétition','Historique'),
	(7,'Autre','Historique'),
	(8,'Stage','Event'),
	(9,'Compétition','Event'),
	(10,'Cours','Event'),
	(11,'Interclub','Event'),
	(12,'Autre','Event'),
	(13,'Information générale','Articles'),
	(14,'Annonce','Articles'),
	(15,'Passage de grade','Articles'),
	(16,'Autre','Articles'),
	(17,'Liquide','Paiement'),
	(18,'Carte bancaire','Paiement'),
	(19,'Chèque','Paiement'),
	(20,'Carte de crédit','Paiement');

/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table city
# ------------------------------------------------------------

DROP TABLE IF EXISTS `city`;

CREATE TABLE `city` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `country_id` int(11) DEFAULT NULL,
  `zip` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `city_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_2D5B0234F92F3E70` (`country_id`),
  CONSTRAINT `FK_2D5B0234F92F3E70` FOREIGN KEY (`country_id`) REFERENCES `country` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table contact_club
# ------------------------------------------------------------

DROP TABLE IF EXISTS `contact_club`;

CREATE TABLE `contact_club` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `num` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table contact_list
# ------------------------------------------------------------

DROP TABLE IF EXISTS `contact_list`;

CREATE TABLE `contact_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `person_of_contact_id` int(11) NOT NULL,
  `relation` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `info` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `IDX_6C377AE7A76ED395` (`user_id`),
  KEY `IDX_6C377AE767BD712` (`person_of_contact_id`),
  CONSTRAINT `FK_6C377AE767BD712` FOREIGN KEY (`person_of_contact_id`) REFERENCES `person_of_contact` (`id`),
  CONSTRAINT `FK_6C377AE7A76ED395` FOREIGN KEY (`user_id`) REFERENCES `app_user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table content_page
# ------------------------------------------------------------

DROP TABLE IF EXISTS `content_page`;

CREATE TABLE `content_page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `content_page` WRITE;
/*!40000 ALTER TABLE `content_page` DISABLE KEYS */;

INSERT INTO `content_page` (`id`, `title`, `content`, `path`, `subtitle`)
VALUES
	(1,'Philosophie','<h2>La pratique du karaté do</h2>\n<p>Le karaté do est un art martial d’origine japonaise. Cet art, de plus en plus populaire, se pratique mains nues et s’adresse à tous, petits et grands. La pratique régulière du karaté permet, entre autres :</p>\n<ul>\n<li>d’exercer une activité physique complète;</li>\n<li>de maîtriser les différentes techniques de self-défense;</li>\n<li>de connaître un épanouissement philosophique à travers son code moral : respect, sincérité, courage, contrôle de soi, droiture, etc.</li>\n\n</ul>\n\n<p>Notre approche du karaté est globale : </p>\n<ul>\n<li>Karaté traditionnel : kihon, kumité, kata, kata-bunkaï;</li>\n<li>Self-défense : femmes et hommes de tous gabarits peuvent apprendre des techniques de défense (poings, pieds, clefs, projections, etc.);</li>\n<li>Karaté sportif : pour ceux qui désirent participer aux compétitions;</li>\n<li>Baby Karaté : initiation ludique du karaté et de ses valeurs pour les 4 et 5 ans;</li>\n<li>Karaté Energétique : approche globale du karaté enrichi par des techniques énergétiques</li>\n</ul>\n\n<h3> Les familles et enfants </h3>\n\n<p> VIKA accorde un intérêt particulier aux enfants. L\'approche développée par l\'encadrement est à la fois ludique et éducative. En effet, nous proposons aux enfants : </p>\n\n<ul>\n<li>de développer leurs qualités physiques : coordination, endurance, souplesse, etc. ;</li>\n<li>d\'apprendre le respect de leurs camarades;</li>\n<li>d\'améliorer la concentration;</li>\n<li>de renforcer la maîtrise de soi;</li>\n<li>de travailler en équipe;</li>\n<li>etc.</li>\n</ul>\n\n\n<p>Un aménagement des entraînements est spécialement prévu pour la découverte du Karaté do par les enfants ( rubrique Inscription et Cours ).</p>','Philosophie',NULL),
	(2,'Bureau','<h2>Les membres du bureau</h2>\n<p>VIKA est le nouveau club de Karaté de Villeneuve d\'Ascq. Il vous propose au DOJO de Valmy :</p>\n<ul>\n<li>un encadrement de qualité et expérimenté : le professeur, Aziz MAANINOU 5éme DAN, diplômé d\'Etat (BEES1) assisté par Thierry VANDAMME 5éme DAN, diplômé fédéral;</li>\n<li>un enseignement diversifié et adapté : karaté traditionnel, karaté de compétition, self-défense, etc.;</li>\n<li>une structure dynamique : stages, échanges avec d\'autres clubs, compétitions, etc.;</li>\n<li>un comité de Direction dévoué et bénévole;</li>\n<li>des tarifs à la portée de tous.</li>\n</ul>\n<p>VIKA vous offre ainsi toutes les garanties de compétences techniques et pédagogiques par son encadrement et vous permet d\'évoluer dans un environnement sécurisé.</p>','Bureau',NULL),
	(3,'Accueil','<h2>accueil</h2>\n<p>VIKA est le nouveau club de Karaté de Villeneuve d\'Ascq. Il vous propose au DOJO de Valmy :</p>','accueil',NULL),
	(4,'Encadrement','<h2>Encadrement</h2>\n<p>VIKA est le nouveau club de Karaté de Villeneuve d\'Ascq. Il vous propose au DOJO de Valmy :</p>','encadrement',NULL),
	(5,'Information','<p>VIKA est une association loi 1901, déclarée en préfecture sous le N° W595007200, affiliée à la Fédération Française de Karaté et Disciplines Associées sous le N° 0590711, et agréée <em>Jeunesse et Sports</em> sous le N°59 S 8062</p>','information',NULL),
	(6,'Suivi','<p>Page de suivi</p>','Suivi',NULL),
	(7,'Contact','<p>Page de contact</p>','Contact',NULL);

/*!40000 ALTER TABLE `content_page` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table country
# ------------------------------------------------------------

DROP TABLE IF EXISTS `country`;

CREATE TABLE `country` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `country_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `country` WRITE;
/*!40000 ALTER TABLE `country` DISABLE KEYS */;

INSERT INTO `country` (`id`, `country_name`)
VALUES
	(1,'France'),
	(2,'Belgique'),
	(3,'Luxembourg');

/*!40000 ALTER TABLE `country` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table encadrement
# ------------------------------------------------------------

DROP TABLE IF EXISTS `encadrement`;

CREATE TABLE `encadrement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `datecreat` datetime DEFAULT NULL,
  `imagename` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table gallery
# ------------------------------------------------------------

DROP TABLE IF EXISTS `gallery`;

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_creat` datetime DEFAULT NULL,
  `created_gal` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `gallery` WRITE;
/*!40000 ALTER TABLE `gallery` DISABLE KEYS */;

INSERT INTO `gallery` (`id`, `name`, `description`, `avatar_name`, `date_creat`, `created_gal`)
VALUES
	(17,'Rencontre 2014 Aikido, Tai Jitsu','','c1.jpg',NULL,'2019-07-04 21:56:35'),
	(18,'Stage 2014 de Christian Claus organisé par Vika','','b1.jpg',NULL,'2019-07-04 21:56:35'),
	(19,'Assemblée générale du 25 novembre 2015 et remise de ceintures','','d1.jpg',NULL,'2019-07-04 21:56:35'),
	(20,'Coupe d\'honneur de la ligue (22/02)','','e1.jpg',NULL,'2019-07-04 21:56:35'),
	(21,'Stage Pierre Blot 04/04/2015','','_photo 1.jpg',NULL,'2019-07-04 21:56:35'),
	(22,'Passage des Ceintures Noires de Juin 2016','','photos 1.jpg',NULL,'2019-07-04 21:56:35'),
	(23,'Stage H.Delage 2017','','photo 1.jpg',NULL,'2019-07-04 21:56:35'),
	(24,'Rentrée Baby 2017/2018','','1.png',NULL,'2019-07-04 21:56:35');

/*!40000 ALTER TABLE `gallery` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table history
# ------------------------------------------------------------

DROP TABLE IF EXISTS `history`;

CREATE TABLE `history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `ref_date` datetime DEFAULT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_27BA704BA76ED395` (`user_id`),
  KEY `IDX_27BA704B12469DE2` (`category_id`),
  CONSTRAINT `FK_27BA704B12469DE2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`),
  CONSTRAINT `FK_27BA704BA76ED395` FOREIGN KEY (`user_id`) REFERENCES `app_user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table media
# ------------------------------------------------------------

DROP TABLE IF EXISTS `media`;

CREATE TABLE `media` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gallery_id` int(11) DEFAULT NULL,
  `image_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_image` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_6A2CA10C4E7AF8F` (`gallery_id`),
  CONSTRAINT `FK_6A2CA10C4E7AF8F` FOREIGN KEY (`gallery_id`) REFERENCES `gallery` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `media` WRITE;
/*!40000 ALTER TABLE `media` DISABLE KEYS */;

INSERT INTO `media` (`id`, `gallery_id`, `image_name`, `updated_image`)
VALUES
	(135,17,'c1.jpg','2019-07-04 21:56:35'),
	(136,17,'c2.jpg','2019-07-04 21:56:35'),
	(137,17,'c3.jpg','2019-07-04 21:56:35'),
	(138,17,'c4.jpg','2019-07-04 21:56:35'),
	(139,17,'c5.jpg','2019-07-04 21:56:35'),
	(140,18,'b1.jpg','2019-07-04 21:56:35'),
	(141,18,'b2.jpg','2019-07-04 21:56:35'),
	(142,18,'b3.jpg','2019-07-04 21:56:35'),
	(143,18,'b4.jpg','2019-07-04 21:56:35'),
	(144,18,'b5.jpg','2019-07-04 21:56:35'),
	(145,18,'b6.jpg','2019-07-04 21:56:35'),
	(146,18,'b7.jpg','2019-07-04 21:56:35'),
	(147,19,'d1.jpg','2019-07-04 21:56:35'),
	(148,19,'d2.jpg','2019-07-04 21:56:35'),
	(149,19,'d3.jpg','2019-07-04 21:56:35'),
	(150,20,'e1.jpg','2019-07-04 21:56:35'),
	(151,20,'e2.jpg','2019-07-04 21:56:35'),
	(152,21,'_photo 1.jpg','2019-07-04 21:56:35'),
	(153,21,'_photo 2.jpg','2019-07-04 21:56:35'),
	(154,21,'_photo 3.jpg','2019-07-04 21:56:35'),
	(155,21,'_photo 4.jpg','2019-07-04 21:56:35'),
	(156,21,'_photo 5.jpg','2019-07-04 21:56:35'),
	(157,21,'_photo 6.jpg','2019-07-04 21:56:35'),
	(158,21,'_photo 7.jpg','2019-07-04 21:56:35'),
	(159,21,'_photo 8.jpg','2019-07-04 21:56:35'),
	(160,21,'_photo 9.jpg','2019-07-04 21:56:35'),
	(161,22,'photos 1.jpg','2019-07-04 21:56:35'),
	(162,22,'photos 2.jpg','2019-07-04 21:56:35'),
	(163,22,'photos 3.jpg','2019-07-04 21:56:35'),
	(164,22,'photos 4.jpg','2019-07-04 21:56:35'),
	(165,23,'photo 1.jpg','2019-07-04 21:56:35'),
	(166,23,'photo 2.jpg','2019-07-04 21:56:35'),
	(167,23,'photo 3.jpg','2019-07-04 21:56:35'),
	(168,23,'photo 4.jpg','2019-07-04 21:56:35'),
	(169,23,'photo 5.jpg','2019-07-04 21:56:35'),
	(170,23,'photo 6.jpg','2019-07-04 21:56:35'),
	(171,23,'photo 7.jpg','2019-07-04 21:56:35'),
	(172,23,'photo 8.jpg','2019-07-04 21:56:35'),
	(173,23,'photo 9.jpg','2019-07-04 21:56:35'),
	(174,23,'photo 10.jpg','2019-07-04 21:56:35'),
	(175,23,'photo 11.jpg','2019-07-04 21:56:35'),
	(176,23,'photo 12.jpg','2019-07-04 21:56:35'),
	(177,23,'photo 13.jpg','2019-07-04 21:56:35'),
	(178,23,'photo 14.jpg','2019-07-04 21:56:35'),
	(179,23,'photo 15.jpg','2019-07-04 21:56:35'),
	(180,23,'photo 16.jpg','2019-07-04 21:56:35'),
	(181,23,'photo 17.jpg','2019-07-04 21:56:35'),
	(182,23,'photo 18.jpg','2019-07-04 21:56:35'),
	(183,23,'photo 19.jpg','2019-07-04 21:56:35'),
	(184,23,'photo 20.jpg','2019-07-04 21:56:35'),
	(185,23,'photo 21.jpg','2019-07-04 21:56:35'),
	(186,23,'photo 22.jpg','2019-07-04 21:56:35'),
	(187,23,'photo 23.jpg','2019-07-04 21:56:35'),
	(188,23,'photo 24.jpg','2019-07-04 21:56:35'),
	(189,23,'photo 25.jpg','2019-07-04 21:56:35'),
	(190,23,'photo 26.jpg','2019-07-04 21:56:35'),
	(191,23,'photo 28.jpg','2019-07-04 21:56:35'),
	(192,23,'photo 29.jpg','2019-07-04 21:56:35'),
	(193,23,'photo 30.jpg','2019-07-04 21:56:35'),
	(194,23,'photo 31.jpg','2019-07-04 21:56:35'),
	(195,23,'photo 32.jpg','2019-07-04 21:56:35'),
	(196,24,'1.png','2019-07-04 21:56:35'),
	(197,24,'2.png','2019-07-04 21:56:35'),
	(198,24,'3.png','2019-07-04 21:56:35'),
	(199,24,'4.png','2019-07-04 21:56:35'),
	(200,24,'5.png','2019-07-04 21:56:35'),
	(201,24,'6.png','2019-07-04 21:56:35');

/*!40000 ALTER TABLE `media` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table migration_versions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migration_versions`;

CREATE TABLE `migration_versions` (
  `version` varchar(14) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `executed_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table notification
# ------------------------------------------------------------

DROP TABLE IF EXISTS `notification`;

CREATE TABLE `notification` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `notif_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table notification_user
# ------------------------------------------------------------

DROP TABLE IF EXISTS `notification_user`;

CREATE TABLE `notification_user` (
  `notification_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`notification_id`,`user_id`),
  KEY `IDX_35AF9D73EF1A9D84` (`notification_id`),
  KEY `IDX_35AF9D73A76ED395` (`user_id`),
  CONSTRAINT `FK_35AF9D73A76ED395` FOREIGN KEY (`user_id`) REFERENCES `app_user` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_35AF9D73EF1A9D84` FOREIGN KEY (`notification_id`) REFERENCES `notification` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table paiement
# ------------------------------------------------------------

DROP TABLE IF EXISTS `paiement`;

CREATE TABLE `paiement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `registration_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `amount` double NOT NULL,
  `is_paid` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_B1DC7A1E833D8F43` (`registration_id`),
  KEY `IDX_B1DC7A1E12469DE2` (`category_id`),
  CONSTRAINT `FK_B1DC7A1E12469DE2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`),
  CONSTRAINT `FK_B1DC7A1E833D8F43` FOREIGN KEY (`registration_id`) REFERENCES `registration` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table person_of_contact
# ------------------------------------------------------------

DROP TABLE IF EXISTS `person_of_contact`;

CREATE TABLE `person_of_contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `num1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table phone
# ------------------------------------------------------------

DROP TABLE IF EXISTS `phone`;

CREATE TABLE `phone` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `num` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table phone_user
# ------------------------------------------------------------

DROP TABLE IF EXISTS `phone_user`;

CREATE TABLE `phone_user` (
  `phone_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`phone_id`,`user_id`),
  KEY `IDX_6E97845B3B7323CB` (`phone_id`),
  KEY `IDX_6E97845BA76ED395` (`user_id`),
  CONSTRAINT `FK_6E97845B3B7323CB` FOREIGN KEY (`phone_id`) REFERENCES `phone` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_6E97845BA76ED395` FOREIGN KEY (`user_id`) REFERENCES `app_user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table price_grid
# ------------------------------------------------------------

DROP TABLE IF EXISTS `price_grid`;

CREATE TABLE `price_grid` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vika_event_id` int(11) DEFAULT NULL,
  `price` double NOT NULL,
  `public` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `info` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `label` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_53722B8D54707435` (`vika_event_id`),
  CONSTRAINT `FK_53722B8D54707435` FOREIGN KEY (`vika_event_id`) REFERENCES `vika_event` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table registration
# ------------------------------------------------------------

DROP TABLE IF EXISTS `registration`;

CREATE TABLE `registration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `vika_event_id` int(11) NOT NULL,
  `registration_date` datetime NOT NULL,
  `remark` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `minor` tinyint(1) DEFAULT NULL,
  `medical_care` tinyint(1) DEFAULT NULL,
  `image_diffusion` tinyint(1) DEFAULT NULL,
  `condition_registration` tinyint(1) DEFAULT NULL,
  `total_amount` double DEFAULT NULL,
  `validate_registration_date` datetime DEFAULT NULL,
  `is_validated` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_62A8A7A7A76ED395` (`user_id`),
  KEY `IDX_62A8A7A754707435` (`vika_event_id`),
  CONSTRAINT `FK_62A8A7A754707435` FOREIGN KEY (`vika_event_id`) REFERENCES `vika_event` (`id`),
  CONSTRAINT `FK_62A8A7A7A76ED395` FOREIGN KEY (`user_id`) REFERENCES `app_user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table sponsor
# ------------------------------------------------------------

DROP TABLE IF EXISTS `sponsor`;

CREATE TABLE `sponsor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `logo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datecreat` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table user_adress
# ------------------------------------------------------------

DROP TABLE IF EXISTS `user_adress`;

CREATE TABLE `user_adress` (
  `user_id` int(11) NOT NULL,
  `adress_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`adress_id`),
  KEY `IDX_39BEDC83A76ED395` (`user_id`),
  KEY `IDX_39BEDC838486F9AC` (`adress_id`),
  CONSTRAINT `FK_39BEDC838486F9AC` FOREIGN KEY (`adress_id`) REFERENCES `adress` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_39BEDC83A76ED395` FOREIGN KEY (`user_id`) REFERENCES `app_user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table userConnected
# ------------------------------------------------------------

DROP TABLE IF EXISTS `userConnected`;

CREATE TABLE `userConnected` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `reset_token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gdpr` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_560B3B76A76ED395` (`user_id`),
  CONSTRAINT `FK_560B3B76A76ED395` FOREIGN KEY (`user_id`) REFERENCES `app_user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table vika_event
# ------------------------------------------------------------

DROP TABLE IF EXISTS `vika_event`;

CREATE TABLE `vika_event` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `owner` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `capacity` int(11) DEFAULT NULL,
  `created_ev` datetime NOT NULL,
  `image_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_image` datetime DEFAULT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `info` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `published` tinyint(1) DEFAULT NULL,
  `inscription` tinyint(1) DEFAULT NULL,
  `easy_inscription` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_4809167212469DE2` (`category_id`),
  CONSTRAINT `FK_4809167212469DE2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
