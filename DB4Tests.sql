# ************************************************************
# Sequel Pro SQL dump
# Version 5438
#
# https://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 8.0.15)
# Database: blog
# Generation Time: 2019-09-09 08:58:46 +0000
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

LOCK TABLES `adress` WRITE;
/*!40000 ALTER TABLE `adress` DISABLE KEYS */;

INSERT INTO `adress` (`id`, `city_id`, `type`, `num`, `post_box`, `street_name`)
VALUES
	(1,1,'Domicile','9','9','place de Paul'),
	(2,1,'Domicile','96','4','rue Gautier'),
	(3,1,'Domicile','2','3','rue de Costa'),
	(4,1,'Domicile','3','8','impasse Noémi Delattre'),
	(5,1,'Domicile','32','6','rue de Vallet'),
	(6,1,'Domicile','8','5','place Julien'),
	(7,1,'Domicile','36','1','boulevard Jacques Peltier'),
	(8,1,'Domicile','232','3','rue Guillou'),
	(9,1,'Domicile','49','4','chemin de Muller'),
	(10,1,'Domicile','78','9','chemin Victor Gilles'),
	(11,1,'Domicile','46','6','rue de Pruvost');

/*!40000 ALTER TABLE `adress` ENABLE KEYS */;
UNLOCK TABLES;


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

LOCK TABLES `app_user` WRITE;
/*!40000 ALTER TABLE `app_user` DISABLE KEYS */;

INSERT INTO `app_user` (`id`, `user_connected_id`, `belt`, `receipt_date`, `sex`, `image_name`, `updated_image`, `is_active`, `created_us`, `first_name`, `name`, `birthdate`, `fed_num`, `is_trial`, `bars`)
VALUES
	(1,1,'teal','1952-11-19','Male',NULL,NULL,0,'2019-07-04 21:12:14','Martine','Lefebvre','1966-03-16',NULL,0,NULL),
	(2,1,'lime','1957-08-07','Female',NULL,NULL,0,'2019-07-04 21:12:15','Robert','Bouchet','1972-09-26',NULL,0,NULL),
	(3,1,'silver','1995-05-22','Male',NULL,NULL,0,'2019-07-04 21:12:15','Martin','Lejeune','1954-02-18',NULL,0,NULL),
	(4,2,'fuchsia','2006-12-15','Male',NULL,NULL,0,'2019-07-04 21:12:15','Danielle','Dumas','1963-04-02',NULL,0,NULL),
	(5,2,'blue','1947-12-17','Female',NULL,NULL,0,'2019-07-04 21:12:15','Danielle','Dufour','1987-06-08',NULL,0,NULL),
	(6,2,'maroon','1996-11-25','Male',NULL,NULL,0,'2019-07-04 21:12:15','Maggie','Georges','1959-10-27',NULL,0,NULL),
	(7,3,'aqua','1944-12-12','Male',NULL,NULL,0,'2019-07-04 21:12:15','Pauline','Imbert','1984-03-15',NULL,0,NULL),
	(8,3,'lime','1946-01-24','Female',NULL,NULL,0,'2019-07-04 21:12:16','Nicole','Bruneau','1950-04-18',NULL,0,NULL),
	(9,3,'green','1993-02-16','Male',NULL,NULL,0,'2019-07-04 21:12:16','Daniel','Bruneau','1944-11-17',NULL,0,NULL),
	(10,4,'green','1990-07-08','Male',NULL,NULL,0,'2019-07-04 21:12:16','Charles','Faure','1992-05-10',NULL,0,NULL),
	(11,4,'teal','1956-02-28','Female',NULL,NULL,0,'2019-07-04 21:12:16','Margaux','Lefevre','1956-03-04',NULL,0,NULL),
	(12,4,'aqua','1993-12-05','Male',NULL,NULL,0,'2019-07-04 21:12:16','Jérôme','Bourdon','1952-04-02',NULL,0,NULL),
	(13,5,'aqua','1954-05-15','Male',NULL,NULL,0,'2019-07-04 21:12:16','Maryse','Meyer','2006-08-18',NULL,0,NULL),
	(14,5,'blue','2003-11-13','Female',NULL,NULL,0,'2019-07-04 21:12:17','Aurélie','Petitjean','2011-09-22',NULL,0,NULL),
	(15,5,'lime','1976-04-22','Male',NULL,NULL,0,'2019-07-04 21:12:17','Arthur','Riou','2010-10-31',NULL,0,NULL),
	(16,6,'silver','1960-02-06','Male',NULL,NULL,0,'2019-07-04 21:12:17','Capucine','Roux','1948-08-24',NULL,0,NULL),
	(17,6,'silver','2006-12-06','Female',NULL,NULL,0,'2019-07-04 21:12:17','Geneviève','Legros','1970-05-21',NULL,0,NULL),
	(18,6,'aqua','1968-03-30','Male',NULL,NULL,0,'2019-07-04 21:12:17','Lucy','Pons','2005-12-31',NULL,0,NULL),
	(19,7,'olive','1953-03-18','Male',NULL,NULL,0,'2019-07-04 21:12:17','Laurent','Blanchet','1988-07-24',NULL,0,NULL),
	(20,7,'olive','1957-12-20','Female',NULL,NULL,0,'2019-07-04 21:12:18','Simone','Perrier','1980-08-17',NULL,0,NULL),
	(21,7,'green','1944-10-11','Male',NULL,NULL,0,'2019-07-04 21:12:18','Cécile','Masson','2004-08-08',NULL,0,NULL),
	(22,8,'silver','1979-03-19','Male',NULL,NULL,0,'2019-07-04 21:12:18','François','Peron','1998-05-26',NULL,0,NULL),
	(23,8,'lime','1989-11-12','Female',NULL,NULL,0,'2019-07-04 21:12:18','Clémence','Bousquet','1987-09-02',NULL,0,NULL),
	(24,8,'maroon','1959-03-01','Male',NULL,NULL,0,'2019-07-04 21:12:18','Édouard','Cordier','1965-08-09',NULL,0,NULL),
	(25,9,'olive','2006-05-18','Male',NULL,NULL,0,'2019-07-04 21:12:18','Théophile','Delattre','1966-08-27',NULL,0,NULL),
	(26,9,'teal','1958-06-10','Female',NULL,NULL,0,'2019-07-04 21:12:18','Louis','Duval','1967-09-03',NULL,0,NULL),
	(27,9,'white','1975-11-23','Male',NULL,NULL,0,'2019-07-04 21:12:18','Aimée','Laporte','1998-10-04',NULL,0,NULL),
	(28,10,'olive','1976-07-09','Male',NULL,NULL,0,'2019-07-04 21:12:18','Paulette','Aubert','1977-11-22',NULL,0,NULL),
	(29,10,'maroon','1952-10-07','Female',NULL,NULL,0,'2019-07-04 21:12:19','Thérèse','Texier','1995-06-12',NULL,0,NULL),
	(30,10,'fuchsia','1995-06-01','Male',NULL,NULL,0,'2019-07-04 21:12:19','Laurent','Gonzalez','1959-07-23',NULL,0,NULL),
	(31,11,'white',NULL,'Male','5d47e13658334005533362.JPG','2019-08-22 06:51:05',0,'2019-07-04 21:12:19','Guillaume','Delannoy','1998-08-14',NULL,0,NULL),
	(32,11,'silver','1952-01-06','Female',NULL,NULL,0,'2019-07-04 21:12:19','Gabriel','Alexandre','2005-06-21',NULL,0,NULL),
	(33,11,'purple','1990-10-17','Male',NULL,NULL,0,'2019-07-04 21:12:19','Frédérique','Marty','2005-07-25',NULL,0,NULL);

/*!40000 ALTER TABLE `app_user` ENABLE KEYS */;
UNLOCK TABLES;


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

LOCK TABLES `article` WRITE;
/*!40000 ALTER TABLE `article` DISABLE KEYS */;

INSERT INTO `article` (`id`, `category_id`, `title`, `content`, `created_at`, `image_name`, `updated_image`)
VALUES
	(1,1,'Facere quo esse vitae dicta.','<p>Voluptate repellendus et nisi. Et nihil suscipit sunt dolorem perferendis ipsa dolores. Fugiat non qui et veniam cum consequatur dolorem.</p><p>Eos delectus corporis debitis et nihil animi et. Nemo illum est illum provident sit quis. Quidem quam ut molestiae numquam.</p><p>Quo saepe quia error illo consectetur similique veniam quia. Veniam nulla earum dicta maiores eum sint. Quidem vel eos omnis exercitationem modi debitis consequatur. Ad ipsam saepe repellendus recusandae. Cumque ad maxime commodi nihil odit reprehenderit maiores.</p><p>Consequuntur nihil voluptates voluptatibus magnam ducimus. Repellat odit voluptates quis qui provident ut alias. Neque earum quis dolores distinctio accusamus. Qui nisi repudiandae accusantium qui in iusto recusandae.</p><p>Neque impedit cupiditate est et maiores recusandae nobis. Laboriosam non quam ut magni eius saepe. Sit voluptatum exercitationem aspernatur nobis. Sunt dicta libero accusantium omnis.</p>','2019-02-01 23:37:48',NULL,NULL),
	(2,1,'Reprehenderit reprehenderit aut sunt maiores.','<p>Molestiae nesciunt et dicta aut nam. Expedita cupiditate occaecati velit et quam. Asperiores incidunt et vero vitae et reiciendis recusandae ullam.</p><p>Sunt consectetur ut tenetur enim. Tempore dolor autem eum id blanditiis quam perferendis. Quisquam quaerat velit nostrum iste facilis quas. Architecto voluptas sit quaerat nostrum rerum. Ullam cumque maiores iusto cum enim ut eius.</p><p>Ullam occaecati expedita aliquid vel. Quo quia aut dolores eius aperiam porro aliquid. Sint molestiae rem optio nisi et. Recusandae ullam voluptatem nesciunt.</p><p>Quia ea et eveniet iusto libero aliquid. Eius quia sint sed. Possimus et quod labore.</p><p>Aliquid veniam ut distinctio dolores libero deleniti voluptatem. Et neque soluta quasi ut. Assumenda atque porro eaque placeat. Deleniti voluptates suscipit nulla eius fuga.</p>','2019-02-16 17:00:57',NULL,NULL),
	(3,1,'Voluptate autem quod voluptate eius ipsam.','<p>Ut maxime vero aspernatur ut iure. Aut mollitia deleniti suscipit consequatur provident deserunt minus. Tempora sint expedita sunt unde nobis eos. Qui non et est vel provident maxime.</p><p>Maiores est quidem vitae non. Perferendis necessitatibus recusandae tenetur omnis ab. Expedita et autem velit quia. Qui quia quia et hic.</p><p>A dolor reprehenderit omnis officia. Et ut qui non nam. Molestiae repellat commodi qui cupiditate. Nesciunt placeat accusamus inventore ut.</p><p>Aut repellendus necessitatibus qui quisquam soluta aut vel recusandae. Quam nulla omnis culpa recusandae aut voluptatum. Rem laudantium at eos autem.</p><p>Ullam aut neque temporibus aut. Qui laborum quam necessitatibus debitis voluptatem. Ad ut id rem ut.</p>','2019-04-15 05:37:16',NULL,NULL),
	(4,1,'Laudantium modi ullam velit est omnis.','<p>Eos tempore qui sunt atque. Quia et laboriosam ut quasi quae aspernatur quae. Dicta id pariatur ducimus sed eligendi. Tempore mollitia ad perspiciatis soluta non ut.</p><p>Impedit sed quam aut ut. Assumenda unde excepturi atque eum. Exercitationem in quod aspernatur mollitia. Dolor ab et dolor aut.</p><p>Iusto est quidem unde ad ducimus sit incidunt. Beatae qui qui vel aliquid aliquid eveniet doloribus odio. Quasi perspiciatis architecto magni.</p><p>Dolor illum illum hic dolorum rerum ut. Et dolorum soluta et est. At dolor architecto corrupti qui ipsam.</p><p>Aperiam error nostrum ullam et sit. Doloribus cum quae culpa excepturi quibusdam architecto ipsum. Sequi qui sit autem at quidem dolorem enim aut.</p>','2019-03-01 19:14:45',NULL,NULL),
	(5,1,'Consequatur autem quam laudantium dolorum qui.','<p>Non suscipit in harum deleniti. Qui dolorem qui neque voluptas nihil qui. Aliquid perferendis tempore beatae aspernatur. Voluptatem commodi iusto eius qui.</p><p>Non eius natus non reiciendis velit voluptas. Voluptas sed consequatur saepe vitae exercitationem cum inventore quia. Numquam ut quia doloribus quia nesciunt.</p><p>Labore a culpa recusandae et autem repudiandae modi. Praesentium non tempora explicabo. Voluptas deleniti officiis et adipisci id odio autem.</p><p>Quidem eligendi qui quia mollitia quis sed. Expedita quos consequatur dolores consequatur voluptas at ad. Amet et et dolorem magnam.</p><p>Officia mollitia consequuntur nesciunt excepturi distinctio. Sunt ut quod omnis. In ullam nemo consectetur possimus. Placeat reprehenderit sint unde eaque sint.</p>','2019-02-19 12:03:17',NULL,NULL),
	(6,2,'Quia et est molestiae quas voluptatem.','<p>Sed molestiae non optio et. Iste quo atque commodi ratione et. Doloremque consectetur necessitatibus numquam eaque iure inventore. Omnis consequatur cumque dolorem consequatur dolorem nemo esse voluptatem. Eius suscipit ut non quas aliquam beatae.</p><p>Itaque officiis enim dolorum voluptas est. Quibusdam qui alias dolores debitis pariatur eveniet repellat. Recusandae facere vero dignissimos consequatur.</p><p>Commodi repudiandae aperiam delectus distinctio molestiae. Quia unde enim sunt animi officiis. Quam et commodi tempore ducimus porro vel.</p><p>Delectus voluptatum sapiente excepturi nihil tempore quia aliquid reiciendis. Ratione non et molestias quia ut. Velit dicta soluta soluta distinctio quod est. Reprehenderit quia est fugiat distinctio.</p><p>Optio at dolor est in quas. Sunt et nisi qui quia. Et vero dolores illo sed molestiae voluptatum.</p>','2019-06-29 14:25:10',NULL,NULL),
	(7,2,'Qui doloribus architecto est tempora hic odio est.','<p>Expedita rerum placeat omnis asperiores quia. Cupiditate ut quia et possimus voluptatem. Error voluptas quo dolor ut quisquam repudiandae deleniti.</p><p>Facilis est et similique excepturi. Velit voluptatem ea corrupti et dolores excepturi sed.</p><p>Modi omnis enim nulla voluptate architecto quasi nisi. Quae dolore et et laboriosam porro omnis placeat perspiciatis. Esse expedita explicabo soluta optio molestiae incidunt enim. Est eaque et alias iste corrupti.</p><p>Dolor velit non quas sint omnis reiciendis sed. Sed tempore fuga dolorem laboriosam delectus consequuntur earum vitae. Unde mollitia provident sequi doloremque repudiandae sit dolorum.</p><p>Quam laudantium animi ratione sapiente aut facere. Necessitatibus eligendi veniam consectetur in est rem. Vel eius eaque officia ut est molestiae dolorum maxime.</p>','2019-06-26 05:43:03',NULL,NULL),
	(8,2,'Vel est eum qui commodi pariatur qui deleniti.','<p>Sint dolores sequi quo et. Voluptas error voluptatum ex eaque beatae non. Velit aut cumque velit architecto nesciunt et.</p><p>Ut consequatur temporibus porro nostrum officiis omnis. Sunt ea libero provident voluptates id. Vel error pariatur sed error quas blanditiis unde.</p><p>Dolores voluptatum sint aut excepturi eligendi eum maiores. Dolorum iste dolor necessitatibus non repellat est.</p><p>Aliquid voluptas asperiores quam sed magnam consequatur expedita. In necessitatibus consequatur in qui consequatur sint dolor nihil.</p><p>Quia voluptatem velit magni explicabo quaerat voluptas. Maxime rem ipsam consequatur.</p>','2019-06-09 23:04:13',NULL,NULL),
	(9,2,'Sit aut aspernatur vel ut maiores minima.','<p>Repudiandae doloremque pariatur sint dolor consequatur sit. Saepe aut commodi qui ipsa dolore. Quia sit et quasi culpa corrupti magnam.</p><p>Officia ipsa quis sint ut est aut enim. Quae voluptatum quam reprehenderit ea sed qui dolorum. Expedita enim voluptas minus voluptas.</p><p>Quae reprehenderit necessitatibus nulla enim consequatur sed. Voluptatem magni nihil dicta aut magni ad veniam. Molestiae nesciunt aut maiores.</p><p>Qui atque eos repellat et nostrum. Nemo consequatur quia blanditiis dolorum dolore aperiam libero. Voluptatem aspernatur quibusdam dolor aliquid.</p><p>Eius qui officiis harum ut quis. Est consequatur velit et voluptas. Error quisquam laboriosam quod quae omnis.</p>','2019-04-20 05:02:16',NULL,NULL),
	(10,2,'Saepe id est assumenda ipsam voluptate qui.','<p>Aut sit quo voluptas facere voluptatem rerum iure quos. Et exercitationem amet voluptas et quo consequuntur. Et reprehenderit quibusdam facere repellendus nobis sed ducimus. Eius dolorem reprehenderit nulla.</p><p>Voluptatem tempore ut praesentium voluptate. Et culpa nam nobis ipsum et et nihil. Delectus cum quia et distinctio adipisci deleniti.</p><p>Est nulla neque illo eveniet. Nobis ut maiores aut fugiat impedit. Animi molestiae consequatur sed delectus. Et beatae quis consequatur odit corrupti praesentium quis. Fugit consequatur odit voluptates at odit vero.</p><p>Soluta incidunt accusamus placeat libero vel. At ullam voluptates quo eius fugit sint voluptatibus. Et et eveniet aut vel aut est voluptatem. Praesentium laboriosam magnam quia nulla sapiente nam.</p><p>Totam perspiciatis magnam quis explicabo voluptatem nulla. Id minus quae doloremque rem. Est veritatis tempora vel repudiandae sunt. Nesciunt non vero delectus.</p>','2019-06-15 11:12:07',NULL,NULL),
	(11,3,'Quas vero repudiandae illo quia molestiae ipsam nostrum.','<p>Voluptates et consectetur non. Illum mollitia animi voluptatum quasi sunt nam. Ut eaque ab saepe ad exercitationem. Blanditiis illum autem corporis ratione. Minus eum facilis dolores molestiae praesentium rem omnis velit.</p><p>Repellendus est aut quia vel quae earum eaque. Voluptatem eum labore eum quisquam harum aut id. Ipsam consequatur corporis sunt ullam.</p><p>Molestiae tempore unde reprehenderit itaque. Placeat sed id officiis aut veniam distinctio. Dignissimos molestias quia omnis officiis nesciunt quis deserunt rem. Atque quo ipsa non sunt libero et tenetur. Eum non commodi qui maxime commodi error eaque voluptatum.</p><p>Quis iste veritatis voluptas in enim. Vero quia consequatur accusamus. Consequatur dolorem totam explicabo provident repellendus incidunt dignissimos. Voluptatum at dolor non.</p><p>Quia vel vel tenetur aut sapiente perspiciatis veniam atque. Dolor autem corrupti expedita quidem ut et sed.</p>','2019-04-13 10:09:10',NULL,NULL),
	(12,3,'Repellendus aliquid nulla voluptatibus natus.','<p>Quia sed consequatur id. Non et doloremque id sit omnis facilis. Quaerat mollitia hic optio repudiandae illum soluta dolorum. Ipsum et aut sunt omnis aspernatur corporis amet. Qui assumenda inventore quisquam et.</p><p>Fugit in aspernatur non harum quasi. Iusto dolore tempore sit. Labore qui quisquam laudantium voluptas ad aut earum.</p><p>Deserunt rerum quo esse sint ipsa at. Quo molestiae quam non velit soluta dolorum porro. Officiis ea modi sit mollitia aliquam odio nostrum sed.</p><p>Nihil et modi vitae. Reiciendis reiciendis quia autem qui tenetur amet esse. Iure aut rerum omnis numquam totam error sit aperiam.</p><p>At doloremque earum rerum quaerat voluptatum. Provident dolorum omnis quo numquam ea. Occaecati officia est tenetur ratione in omnis magnam.</p>','2019-04-25 05:16:29',NULL,NULL),
	(13,3,'Quam impedit velit ut at neque dolor rerum.','<p>Ipsum ut itaque dolor labore culpa numquam. Voluptatem doloribus in magnam quidem nobis ipsum ad. Aspernatur sunt assumenda dolores nostrum sed rerum. Expedita praesentium eaque quis eos error. Est magnam quia quasi.</p><p>Repellat reprehenderit in eos nesciunt aspernatur officiis ipsa. Quibusdam nulla ipsum cupiditate aut a id reprehenderit. Laborum et quidem debitis quidem ut et ipsa. Nemo deleniti neque repellat et dolorem laboriosam. Et earum necessitatibus natus ut quaerat qui veritatis hic.</p><p>Eius praesentium voluptas ullam dolorem. Eos est quos distinctio rerum et quasi ex. At corrupti accusantium dolores ab est. Dolorem voluptas est rerum nemo voluptates repellendus quos. Perferendis rerum eligendi vero.</p><p>Sed ad ut molestias numquam quibusdam. Sed porro dolorem ipsam doloremque sint ullam.</p><p>Quia aperiam rerum cupiditate omnis voluptatem dolor nobis et. Aut ex dolorum soluta sit. Autem rerum occaecati praesentium beatae. Beatae veniam repellendus officiis facere.</p>','2019-04-08 13:34:02',NULL,NULL),
	(14,3,'Nemo ut voluptas voluptatem officiis.','<p>Sequi sed consequatur provident ut. Et deserunt suscipit maxime ut. Laborum maxime incidunt quae adipisci provident maiores maxime.</p><p>Voluptate aut natus ea accusamus. Sed eos laboriosam quos dolores exercitationem quia est. Qui necessitatibus voluptatem ipsam quaerat laborum optio aut.</p><p>Soluta accusantium optio natus in consequatur ab facilis magni. Eligendi repellendus neque rerum rerum praesentium velit. Quis voluptas minus totam debitis ut est.</p><p>Enim fugit dicta non ut aliquam sit at. Dolorum dignissimos blanditiis laboriosam consequatur vero saepe libero. Amet reprehenderit qui quos quam. Ipsam voluptatibus odit molestiae expedita ut in corporis voluptas.</p><p>Pariatur magnam quos eius. Est quo voluptate illum autem in quisquam et. Iure suscipit soluta ut ex. Sit labore cum voluptatibus facere molestias distinctio.</p>','2019-06-17 04:38:41',NULL,NULL);

/*!40000 ALTER TABLE `article` ENABLE KEYS */;
UNLOCK TABLES;


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
	(1,'Non et molestias et in.','Eligendi unde illo quisquam. Occaecati atque enim sed magni. Eum aut minima nulla.'),
	(2,'Quia aut ut enim aut necessitatibus.','Deleniti expedita aut cum. Ex ea nemo alias et. Magni sit necessitatibus et amet voluptate beatae officiis qui. Non debitis maxime vitae eligendi eaque velit.'),
	(3,'Voluptatem id earum aut.','Nihil numquam dolorum soluta at corrupti. Ut sed velit commodi impedit pariatur doloremque. Est magni pariatur qui voluptatum. Laboriosam nobis reprehenderit ut quibusdam voluptatem vel et. Dolores assumenda reiciendis molestiae quas et.'),
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

LOCK TABLES `city` WRITE;
/*!40000 ALTER TABLE `city` DISABLE KEYS */;

INSERT INTO `city` (`id`, `country_id`, `zip`, `city_name`)
VALUES
	(1,1,'43 686','Boutin');

/*!40000 ALTER TABLE `city` ENABLE KEYS */;
UNLOCK TABLES;


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

LOCK TABLES `contact_list` WRITE;
/*!40000 ALTER TABLE `contact_list` DISABLE KEYS */;

INSERT INTO `contact_list` (`id`, `user_id`, `person_of_contact_id`, `relation`, `info`)
VALUES
	(1,31,1,'Frère',NULL);

/*!40000 ALTER TABLE `contact_list` ENABLE KEYS */;
UNLOCK TABLES;


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
	(1,'France');

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

LOCK TABLES `migration_versions` WRITE;
/*!40000 ALTER TABLE `migration_versions` DISABLE KEYS */;

INSERT INTO `migration_versions` (`version`, `executed_at`)
VALUES
	('20190704203909','2019-07-04 21:12:10');

/*!40000 ALTER TABLE `migration_versions` ENABLE KEYS */;
UNLOCK TABLES;


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

LOCK TABLES `person_of_contact` WRITE;
/*!40000 ALTER TABLE `person_of_contact` DISABLE KEYS */;

INSERT INTO `person_of_contact` (`id`, `name`, `first_name`, `num1`)
VALUES
	(1,'Doe','John','0123456');

/*!40000 ALTER TABLE `person_of_contact` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table phone
# ------------------------------------------------------------

DROP TABLE IF EXISTS `phone`;

CREATE TABLE `phone` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `num` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `phone` WRITE;
/*!40000 ALTER TABLE `phone` DISABLE KEYS */;

INSERT INTO `phone` (`id`, `type`, `num`)
VALUES
	(1,'Domicile','+33 (0)1 69 75 78 14'),
	(2,'Domicile','+33 1 46 60 49 57'),
	(3,'Domicile','09 84 44 59 69'),
	(4,'Domicile','04 38 70 25 13'),
	(5,'Domicile','0895588207'),
	(6,'Domicile','+33 1 50 02 40 88'),
	(7,'Domicile','+33 (0)6 48 66 14 04'),
	(8,'Domicile','+33 (0)8 10 33 76 88'),
	(9,'Domicile','+33 (0)1 10 39 78 95'),
	(10,'Domicile','06 86 09 72 15'),
	(11,'Domicile','07 96 67 19 85');

/*!40000 ALTER TABLE `phone` ENABLE KEYS */;
UNLOCK TABLES;


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

LOCK TABLES `phone_user` WRITE;
/*!40000 ALTER TABLE `phone_user` DISABLE KEYS */;

INSERT INTO `phone_user` (`phone_id`, `user_id`)
VALUES
	(1,1),
	(2,4),
	(3,7),
	(4,10),
	(5,13),
	(6,16),
	(7,19),
	(8,22),
	(9,25),
	(10,28),
	(11,31);

/*!40000 ALTER TABLE `phone_user` ENABLE KEYS */;
UNLOCK TABLES;


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

LOCK TABLES `registration` WRITE;
/*!40000 ALTER TABLE `registration` DISABLE KEYS */;

INSERT INTO `registration` (`id`, `user_id`, `vika_event_id`, `registration_date`, `remark`, `minor`, `medical_care`, `image_diffusion`, `condition_registration`, `total_amount`, `validate_registration_date`, `is_validated`)
VALUES
	(1,31,1,'2019-08-22 06:51:05',NULL,NULL,1,1,1,NULL,NULL,NULL);

/*!40000 ALTER TABLE `registration` ENABLE KEYS */;
UNLOCK TABLES;


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

LOCK TABLES `user_adress` WRITE;
/*!40000 ALTER TABLE `user_adress` DISABLE KEYS */;

INSERT INTO `user_adress` (`user_id`, `adress_id`)
VALUES
	(1,1),
	(4,2),
	(7,3),
	(10,4),
	(13,5),
	(16,6),
	(19,7),
	(22,8),
	(25,9),
	(28,10),
	(31,11);

/*!40000 ALTER TABLE `user_adress` ENABLE KEYS */;
UNLOCK TABLES;


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

LOCK TABLES `userConnected` WRITE;
/*!40000 ALTER TABLE `userConnected` DISABLE KEYS */;

INSERT INTO `userConnected` (`id`, `user_id`, `email`, `password`, `reset_token`, `gdpr`)
VALUES
	(1,1,'marguerite96@lebreton.com','$2y$13$gac6AaAxfUdYrRCRlCpxeOcAkhKliporkUdGm6UWa3jSX3B//7cmm',NULL,0),
	(2,4,'sophie.gomes@lagarde.com','$2y$13$y4V.sApPReagX/0e2eQcEO1DfieQKgCUZR3XIAuHqUQse/L3VNHam',NULL,0),
	(3,7,'lucas03@noos.fr','$2y$13$w8Kt3hI7LYaG7fvbZwylVO7bitP27Gvtorz/677s7VDpvCZihy1OW',NULL,0),
	(4,10,'charlotte.gosselin@tele2.fr','$2y$13$idCgvuSsTFD.ntDrF6g74uCIqb4OCdJDmcosowD/fdzWA3.ZadTle',NULL,0),
	(5,13,'raymond.gilbert@free.fr','$2y$13$ZIKsUHti6ULz4Bv3GXZCLuA14m/GFX5183mCaL.DPuVL.YkDwwDr.',NULL,0),
	(6,16,'edouard65@hebert.fr','$2y$13$UVBTSWt8NqnJQ0QqNA9pLeK3Qwt632.VA0eOsRVfHNjyD28cRT7U.',NULL,0),
	(7,19,'anne.rey@foucher.fr','$2y$13$v4FunJ44DUA3nPRWYNAdNuqmc5wT2.3L2pkE5M3MJw55af2Vq2oOK',NULL,0),
	(8,22,'zbailly@live.com','$2y$13$pV6HGxChu9Yyn68uT2fC/eMDJh0NV5dkfTc3osEk5LfUkZe.Jxzt.',NULL,0),
	(9,25,'bourdon.capucine@dossantos.org','$2y$13$o65HMAUpz3p/XWosDQxnBu2mSMm13uV1NcXlD87z6TnbgRbj0dY32',NULL,0),
	(10,28,'duval.francois@clerc.com','$2y$13$HAq6YiCdJNcxfasjd.W2tePHSyjtMcLIQj.hl/.OLLiiRUdp3UE8q',NULL,0),
	(11,31,'admin@admin.com','$2y$13$5m3NeQ5FGnKQqqI0ciJcueZe5rEGKepeG9mT0xaWJ0eOtBJGY2.6a',NULL,0);

/*!40000 ALTER TABLE `userConnected` ENABLE KEYS */;
UNLOCK TABLES;


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

LOCK TABLES `vika_event` WRITE;
/*!40000 ALTER TABLE `vika_event` DISABLE KEYS */;

INSERT INTO `vika_event` (`id`, `category_id`, `owner`, `title`, `capacity`, `created_ev`, `image_name`, `updated_image`, `start_date`, `end_date`, `info`, `published`, `inscription`, `easy_inscription`)
VALUES
	(1,10,'Thierry','Cours du mois de septembre',50,'2019-07-25 09:45:59','5d397a5791169629577530.png','2019-08-22 06:51:05','2019-09-01 09:00:00','2019-09-30 17:00:00','<p>Venez nombreux testez notre nouveau cours de Karat&eacute;</p>',1,1,0);

/*!40000 ALTER TABLE `vika_event` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
