/*
SQLyog Community v13.1.6 (64 bit)
MySQL - 10.4.10-MariaDB : Database - streamit
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`streamit` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `streamit`;

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2014_10_12_100000_create_password_resets_table',1),
(2,'2019_08_19_000000_create_failed_jobs_table',1),
(3,'2020_11_19_000000_create_video_category_table',1),
(4,'2020_11_19_000001_create_video_quality_table',1),
(5,'2020_11_19_000002_create_video_language_table',1),
(6,'2020_11_19_000003_create_membership_table',1),
(7,'2020_11_19_232742_create_movies_table',1),
(8,'2020_11_19_233755_create_shows_table',1),
(9,'2020_11_20_000000_create_users_table',1),
(10,'2020_11_20_000532_create_episodes_table',1),
(11,'2020_11_21_235254_create_comments_table',1),
(12,'2020_11_23_161620_create_roles_table',1),
(13,'2020_11_23_161827_create_users_roles_table',1),
(14,'2020_11_25_115249_create_users_memships_table',1),
(15,'2020_11_27_150136_create_country_table',1),
(16,'2020_11_27_150205_create_state_table',1),
(17,'2020_11_27_160000_create_users_profiles_table',1),
(18,'2020_11_28_144738_create_favorite_table',1),
(19,'2020_11_28_144749_create_upcoming_table',1),
(20,'2020_11_28_144802_create_topten_table',1),
(21,'2020_11_28_144843_create_suggest_table',1),
(22,'2020_11_28_144855_create_trending_table',1),
(23,'2020_11_28_144910_create_recent_add_table',1),
(24,'2020_11_28_144920_create_watch_again_table',1),
(25,'2020_11_28_144936_create_onyx_original_table',1),
(26,'2020_11_28_144945_create_main_carousel_table',1),
(27,'2020_11_28_144958_create_new_release_table',1),
(28,'2020_11_30_044806_create_show_carousel_table',1),
(29,'2020_11_30_044816_create_movie_carousel_table',1),
(30,'2020_11_30_053740_create_movie_section1_table',1),
(31,'2020_11_30_053745_create_movie_section2_table',1),
(32,'2020_11_30_053749_create_movie_section3_table',1),
(33,'2020_11_30_053800_create_show_section1_table',1),
(34,'2020_11_30_053806_create_show_section2_table',1),
(35,'2020_11_30_053809_create_show_section3_table',1),
(36,'2020_12_03_162719_create_like_log',1),
(37,'2020_12_06_005851_create_login_log',1),
(38,'2020_12_06_084023_create_contact_us_table',1),
(39,'2020_12_06_190848_create_download_log_table',1),
(40,'2020_12_06_191813_create_view_log_table',1),
(41,'2020_12_06_192433_create_visit_log_table',1),
(42,'2020_12_08_202228_create_notify_store_table',1),
(43,'2020_12_15_152124_create_recover_password_table',2);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `si_comments` */

DROP TABLE IF EXISTS `si_comments`;

CREATE TABLE `si_comments` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `author` bigint(20) unsigned NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_id` int(11) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `si_comments_author_foreign` (`author`),
  CONSTRAINT `si_comments_author_foreign` FOREIGN KEY (`author`) REFERENCES `si_users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `si_comments` */

insert  into `si_comments`(`id`,`author`,`description`,`content_type`,`content_id`,`date`,`created_at`,`updated_at`) values 
(1,2,'was awesome.\nI really wondered how action was so fantastic. I want to see once again if I have a chance.','movie',5,'2020-12-10 00:00:00','2020-12-10 08:29:10','2020-12-10 08:29:10');

/*Table structure for table `si_contact_us` */

DROP TABLE IF EXISTS `si_contact_us`;

CREATE TABLE `si_contact_us` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `si_contact_us` */

/*Table structure for table `si_country` */

DROP TABLE IF EXISTS `si_country`;

CREATE TABLE `si_country` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `si_country` */

insert  into `si_country`(`id`,`name`,`created_at`,`updated_at`) values 
(1,'Caneda',NULL,NULL),
(2,'Noida',NULL,NULL),
(3,'USA',NULL,NULL),
(4,'India',NULL,NULL),
(5,'Africa',NULL,NULL);

/*Table structure for table `si_download_log` */

DROP TABLE IF EXISTS `si_download_log`;

CREATE TABLE `si_download_log` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `content_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `si_download_log` */

insert  into `si_download_log`(`id`,`content_type`,`content_id`,`date`,`created_at`,`updated_at`) values 
(1,'movie',5,'2020-12-10 00:00:00','2020-12-10 06:27:19','2020-12-10 06:27:19'),
(2,'movie',5,'2020-12-10 00:00:00','2020-12-10 06:29:31','2020-12-10 06:29:31'),
(3,'movie',9,'2020-12-10 00:00:00','2020-12-10 06:30:07','2020-12-10 06:30:07'),
(4,'movie',3,'2020-12-10 00:00:00','2020-12-10 06:30:52','2020-12-10 06:30:52'),
(5,'movie',7,'2020-12-10 00:00:00','2020-12-10 06:31:45','2020-12-10 06:31:45'),
(6,'movie',5,'2020-12-10 00:00:00','2020-12-10 06:52:24','2020-12-10 06:52:24'),
(7,'movie',5,'2020-12-10 00:00:00','2020-12-10 06:52:27','2020-12-10 06:52:27'),
(8,'movie',5,'2020-12-10 00:00:00','2020-12-10 06:52:27','2020-12-10 06:52:27'),
(9,'movie',5,'2020-12-10 00:00:00','2020-12-10 06:52:27','2020-12-10 06:52:27'),
(10,'movie',5,'2020-12-10 00:00:00','2020-12-10 06:52:27','2020-12-10 06:52:27'),
(11,'movie',5,'2020-12-10 00:00:00','2020-12-10 06:52:28','2020-12-10 06:52:28'),
(12,'movie',5,'2020-12-10 00:00:00','2020-12-10 06:52:28','2020-12-10 06:52:28'),
(13,'movie',5,'2020-12-10 00:00:00','2020-12-10 06:52:29','2020-12-10 06:52:29'),
(14,'movie',5,'2020-12-10 00:00:00','2020-12-10 06:52:29','2020-12-10 06:52:29'),
(15,'movie',5,'2020-12-10 00:00:00','2020-12-10 06:52:29','2020-12-10 06:52:29'),
(16,'movie',5,'2020-12-10 00:00:00','2020-12-10 06:52:29','2020-12-10 06:52:29'),
(17,'movie',5,'2020-12-10 00:00:00','2020-12-10 06:52:33','2020-12-10 06:52:33'),
(18,'movie',5,'2020-12-10 00:00:00','2020-12-10 06:52:33','2020-12-10 06:52:33'),
(19,'movie',5,'2020-12-10 00:00:00','2020-12-10 06:52:33','2020-12-10 06:52:33'),
(20,'movie',5,'2020-12-10 00:00:00','2020-12-10 06:52:38','2020-12-10 06:52:38'),
(21,'movie',5,'2020-12-10 00:00:00','2020-12-10 06:52:38','2020-12-10 06:52:38'),
(22,'movie',5,'2020-12-10 00:00:00','2020-12-10 06:52:39','2020-12-10 06:52:39'),
(23,'movie',5,'2020-12-10 00:00:00','2020-12-10 06:52:39','2020-12-10 06:52:39'),
(24,'movie',5,'2020-12-10 00:00:00','2020-12-10 06:52:40','2020-12-10 06:52:40'),
(25,'movie',5,'2020-12-10 00:00:00','2020-12-10 06:52:40','2020-12-10 06:52:40'),
(26,'movie',5,'2020-12-10 00:00:00','2020-12-10 07:30:43','2020-12-10 07:30:43');

/*Table structure for table `si_episodes` */

DROP TABLE IF EXISTS `si_episodes`;

CREATE TABLE `si_episodes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `episode` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `show` bigint(20) unsigned NOT NULL,
  `season` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `si_episodes_show_foreign` (`show`),
  CONSTRAINT `si_episodes_show_foreign` FOREIGN KEY (`show`) REFERENCES `si_shows` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `si_episodes` */

insert  into `si_episodes`(`id`,`episode`,`name`,`show`,`season`,`description`,`file`,`video_link`,`duration`,`date`,`remember_token`,`created_at`,`updated_at`) values 
(1,1,'Lorem ipsum dolor sit amet',1,1,'Lorem ipsum dolor sit amet','uploads/images//1607577712.jpg','uploads/videos//1607577296.m4','2h 57m','2020-10-01 00:00:00',NULL,NULL,'2020-12-10 05:21:52'),
(2,2,'Lorem ipsum dolor sit amet',1,1,'Lorem ipsum dolor sit amet','uploads/images//1607577726.jpg','uploads/videos//1607577296.m4','2h 57m','2020-10-02 00:00:00',NULL,NULL,'2020-12-10 05:22:06'),
(3,3,'Lorem ipsum dolor sit amet',1,1,'Lorem ipsum dolor sit amet','uploads/images//1607577739.jpg','uploads/videos//1607577296.m4','2h 57m','2020-10-03 00:00:00',NULL,NULL,'2020-12-10 05:22:19'),
(4,4,'Lorem ipsum dolor sit amet',1,1,'Lorem ipsum dolor sit amet','uploads/images//1607577752.jpg','uploads/videos//1607577296.m4','2h 57m','2020-10-04 00:00:00',NULL,NULL,'2020-12-10 05:22:32'),
(5,1,'Lorem ipsum dolor sit amet',1,2,'Lorem ipsum dolor sit amet','uploads/images//1607577766.jpg','uploads/videos//1607577296.m4','2h 57m','2020-10-01 00:00:00',NULL,NULL,'2020-12-10 05:35:43'),
(6,2,'Lorem ipsum dolor sit amet',1,2,'Lorem ipsum dolor sit amet','uploads/images//1607577780.jpg','uploads/videos//1607577296.m4','2h 57m','2020-10-02 00:00:00',NULL,NULL,'2020-12-10 05:35:53'),
(7,3,'Lorem ipsum dolor sit amet',1,2,'Lorem ipsum dolor sit amet','uploads/images//1607577796.jpg','uploads/videos//1607577296.m4','2h 57m','2020-10-03 00:00:00',NULL,NULL,'2020-12-10 05:36:03'),
(8,4,'Lorem ipsum dolor sit amet',1,2,'Lorem ipsum dolor sit amet','uploads/images//1607577811.jpg','uploads/videos//1607577296.m4','2h 57m','2020-10-04 00:00:00',NULL,NULL,'2020-12-10 05:36:12'),
(9,1,'Lorem ipsum dolor sit amet',2,1,'Lorem ipsum dolor sit amet','uploads/images//1607577828.jpg','uploads/videos//1607577296.m4','2h 57m','2020-10-01 00:00:00',NULL,NULL,'2020-12-10 05:29:55'),
(10,2,'Lorem ipsum dolor sit amet',2,1,'Lorem ipsum dolor sit amet','uploads/images//1607577843.jpg','uploads/videos//1607577296.m4','2h 57m','2020-10-02 00:00:00',NULL,NULL,'2020-12-10 05:30:06'),
(11,3,'Lorem ipsum dolor sit amet',2,1,'Lorem ipsum dolor sit amet','uploads/images//1607577860.jpg','uploads/videos//1607577296.m4','2h 57m','2020-10-03 00:00:00',NULL,NULL,'2020-12-10 05:30:18'),
(12,4,'Lorem ipsum dolor sit amet',2,1,'Lorem ipsum dolor sit amet','uploads/images//1607577860.jpg','uploads/videos//1607577296.m4','2h 57m','2020-10-04 00:00:00',NULL,NULL,'2020-12-10 05:30:30'),
(13,1,'Lorem ipsum dolor sit amet',2,2,'Lorem ipsum dolor sit amet','uploads/images//1607577860.jpg','uploads/videos//1607577296.m4','2h 57m','2020-10-01 00:00:00',NULL,NULL,NULL),
(14,2,'Lorem ipsum dolor sit amet',2,2,'Lorem ipsum dolor sit amet','uploads/images//1607577860.jpg','uploads/videos//1607577296.m4','2h 57m','2020-10-02 00:00:00',NULL,NULL,NULL),
(15,3,'Lorem ipsum dolor sit amet',2,2,'Lorem ipsum dolor sit amet','uploads/images//1607577860.jpg','uploads/videos//1607577296.m4','2h 57m','2020-10-03 00:00:00',NULL,NULL,NULL),
(16,4,'Lorem ipsum dolor sit amet',2,2,'Lorem ipsum dolor sit amet','uploads/images//1607577860.jpg','uploads/videos//1607577296.m4','2h 57m','2020-10-04 00:00:00',NULL,NULL,NULL),
(17,1,'Lorem ipsum dolor sit amet',3,1,'Lorem ipsum dolor sit amet','uploads/images//1607577902.jpg','uploads/videos//1607577296.m4','2h 57m','2020-10-01 00:00:00',NULL,NULL,'2020-12-10 05:30:43'),
(18,2,'Lorem ipsum dolor sit amet',3,1,'Lorem ipsum dolor sit amet','uploads/images//1607577902.jpg','uploads/videos//1607577296.m4','2h 57m','2020-10-02 00:00:00',NULL,NULL,NULL),
(19,3,'Lorem ipsum dolor sit amet',3,1,'Lorem ipsum dolor sit amet','uploads/images//1607577902.jpg','uploads/videos//1607577296.m4','2h 57m','2020-10-03 00:00:00',NULL,NULL,NULL),
(20,4,'Lorem ipsum dolor sit amet',3,1,'Lorem ipsum dolor sit amet','uploads/images//1607577902.jpg','uploads/videos//1607577296.m4','2h 57m','2020-10-04 00:00:00',NULL,NULL,NULL),
(21,5,'Lorem ipsum dolor sit amet',3,1,'Lorem ipsum dolor sit amet','uploads/images//1607577902.jpg','uploads/videos//1607577296.m4','2h 57m','2020-10-01 00:00:00',NULL,NULL,NULL),
(22,1,'Lorem ipsum dolor sit amet',3,2,'Lorem ipsum dolor sit amet','uploads/images//1607577902.jpg','uploads/videos//1607577296.m4','2h 57m','2020-10-02 00:00:00',NULL,NULL,NULL),
(23,2,'Lorem ipsum dolor sit amet',3,2,'Lorem ipsum dolor sit amet','uploads/images//1607577902.jpg','uploads/videos//1607577296.m4','2h 57m','2020-10-03 00:00:00',NULL,NULL,NULL),
(24,3,'Lorem ipsum dolor sit amet',3,2,'Lorem ipsum dolor sit amet','uploads/images//1607577902.jpg','uploads/videos//1607577296.m4','2h 57m','2020-10-04 00:00:00',NULL,NULL,NULL),
(25,4,'Lorem ipsum dolor sit amet',3,2,'Lorem ipsum dolor sit amet','uploads/images//1607577902.jpg','uploads/videos//1607577296.m4','2h 57m','2020-10-01 00:00:00',NULL,NULL,NULL),
(26,1,'Lorem ipsum dolor sit amet',3,3,'Lorem ipsum dolor sit amet','uploads/images//1607577902.jpg','uploads/videos//1607577296.m4','2h 57m','2020-10-02 00:00:00',NULL,NULL,NULL),
(27,2,'Lorem ipsum dolor sit amet',3,3,'Lorem ipsum dolor sit amet','uploads/images//1607577902.jpg','uploads/videos//1607577296.m4','2h 57m','2020-10-03 00:00:00',NULL,NULL,NULL),
(28,3,'Lorem ipsum dolor sit amet',3,3,'Lorem ipsum dolor sit amet','uploads/images//1607577902.jpg','uploads/videos//1607577296.m4','2h 57m','2020-10-04 00:00:00',NULL,NULL,NULL),
(29,4,'Lorem ipsum dolor sit amet',3,3,'Lorem ipsum dolor sit amet','uploads/images//1607577902.jpg','uploads/videos//1607577296.m4','2h 57m','2020-10-01 00:00:00',NULL,NULL,NULL),
(30,1,'Lorem ipsum dolor sit amet',4,1,'Lorem ipsum dolor sit amet','uploads/images//1607578268.jpg','uploads/videos//1607577296.m4','2h 57m','2020-10-11 00:00:00',NULL,NULL,'2020-12-10 05:31:08'),
(31,2,'Lorem ipsum dolor sit amet',4,1,'Lorem ipsum dolor sit amet','uploads/images//1607578268.jpg','uploads/videos//1607577296.m4','2h 57m','2020-10-01 00:00:00',NULL,NULL,NULL),
(32,3,'Lorem ipsum dolor sit amet',4,1,'Lorem ipsum dolor sit amet','uploads/images//1607578268.jpg','uploads/videos//1607577296.m4','2h 57m','2020-10-03 00:00:00',NULL,NULL,NULL),
(33,4,'Lorem ipsum dolor sit amet',4,1,'Lorem ipsum dolor sit amet','uploads/images//1607578268.jpg','uploads/videos//1607577296.m4','2h 57m','2020-10-01 00:00:00',NULL,NULL,NULL),
(34,1,'Lorem ipsum dolor sit amet',4,2,'Lorem ipsum dolor sit amet','uploads/images//1607578268.jpg','uploads/videos//1607577296.m4','2h 57m','2020-10-01 00:00:00',NULL,NULL,NULL),
(35,2,'Lorem ipsum dolor sit amet',4,2,'Lorem ipsum dolor sit amet','uploads/images//1607578268.jpg','uploads/videos//1607577296.m4','2h 57m','2020-10-01 00:00:00',NULL,NULL,NULL),
(36,3,'Lorem ipsum dolor sit amet',4,2,'Lorem ipsum dolor sit amet','uploads/images//1607578268.jpg','uploads/videos//1607577296.m4','2h 57m','2020-10-15 00:00:00',NULL,NULL,NULL),
(37,4,'Lorem ipsum dolor sit amet',4,2,'Lorem ipsum dolor sit amet','uploads/images//1607578268.jpg','uploads/videos//1607577296.m4','2h 57m','2020-10-01 00:00:00',NULL,NULL,NULL),
(38,1,'Lorem ipsum dolor sit amet',5,1,'Lorem ipsum dolor sit amet','uploads/images//1607578286.jpg','uploads/videos//1607577296.m4','2h 57m','2020-10-11 00:00:00',NULL,NULL,'2020-12-10 05:31:26'),
(39,2,'Lorem ipsum dolor sit amet',5,1,'Lorem ipsum dolor sit amet','uploads/images//1607578286.jpg','uploads/videos//1607577296.m4','2h 57m','2020-10-01 00:00:00',NULL,NULL,NULL),
(40,3,'Lorem ipsum dolor sit amet',5,1,'Lorem ipsum dolor sit amet','uploads/images//1607578286.jpg','uploads/videos//1607577296.m4','2h 57m','2020-10-01 00:00:00',NULL,NULL,NULL),
(41,4,'Lorem ipsum dolor sit amet',5,1,'Lorem ipsum dolor sit amet','uploads/images//1607578286.jpg','uploads/videos//1607577296.m4','2h 57m','2020-10-08 00:00:00',NULL,NULL,NULL),
(42,1,'Lorem ipsum dolor sit amet',5,2,'Lorem ipsum dolor sit amet','uploads/images//1607578286.jpg','uploads/videos//1607577296.m4','2h 57m','2020-10-01 00:00:00',NULL,NULL,NULL),
(43,2,'Lorem ipsum dolor sit amet',5,2,'Lorem ipsum dolor sit amet','uploads/images//1607578286.jpg','uploads/videos//1607577296.m4','2h 57m','2020-10-01 00:00:00',NULL,NULL,NULL),
(44,3,'Lorem ipsum dolor sit amet',5,2,'Lorem ipsum dolor sit amet','uploads/images//1607578286.jpg','uploads/videos//1607577296.m4','2h 57m','2020-10-01 00:00:00',NULL,NULL,NULL),
(45,4,'Lorem ipsum dolor sit amet',5,2,'Lorem ipsum dolor sit amet','uploads/images//1607578286.jpg','uploads/videos//1607577296.m4','2h 57m','2020-10-20 00:00:00',NULL,NULL,NULL);

/*Table structure for table `si_failed_jobs` */

DROP TABLE IF EXISTS `si_failed_jobs`;

CREATE TABLE `si_failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `si_failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `si_failed_jobs` */

/*Table structure for table `si_favorite_content` */

DROP TABLE IF EXISTS `si_favorite_content`;

CREATE TABLE `si_favorite_content` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `content_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `si_favorite_content` */

insert  into `si_favorite_content`(`id`,`content_type`,`content_id`,`created_at`,`updated_at`) values 
(1,'movie',2,NULL,NULL),
(2,'movie',1,NULL,NULL),
(3,'movie',5,NULL,NULL),
(4,'movie',4,NULL,NULL),
(5,'movie',8,NULL,NULL);

/*Table structure for table `si_like_log` */

DROP TABLE IF EXISTS `si_like_log`;

CREATE TABLE `si_like_log` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `content_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `si_like_log_user_id_foreign` (`user_id`),
  CONSTRAINT `si_like_log_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `si_users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `si_like_log` */

insert  into `si_like_log`(`id`,`user_id`,`content_type`,`content_id`,`date`,`created_at`,`updated_at`) values 
(1,2,'movie',5,'2020-12-10 00:00:00','2020-12-10 08:30:57','2020-12-10 08:30:57'),
(2,2,'movie',9,'2020-12-10 00:00:00','2020-12-10 08:44:18','2020-12-10 08:44:18');

/*Table structure for table `si_login_log` */

DROP TABLE IF EXISTS `si_login_log`;

CREATE TABLE `si_login_log` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `token` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `si_login_log_user_id_foreign` (`user_id`),
  CONSTRAINT `si_login_log_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `si_users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `si_login_log` */

insert  into `si_login_log`(`id`,`user_id`,`token`,`date`,`created_at`,`updated_at`) values 
(11,2,'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMVwvYXBpXC9hdXRoXC9zaWduaW4iLCJpYXQiOjE2MDc1ODg3MDgsImV4cCI6MTYwNzU5MjMwOCwibmJmIjoxNjA3NTg4NzA4LCJqdGkiOiIxTzVldWFjSGE0bE9WejluIiwic3ViIjoyLCJwcnYiOiIyM2JkNWM4OTQ5ZjYwMGFkYjM5ZTcwMWM0MDA4NzJkYjdhNTk3NmY3In0.uT26lp5RsmnUjAfMHscfF9cevcqZYsi6wwznY0unxfU','2020-12-10 00:00:00','2020-12-10 08:25:08','2020-12-10 08:25:08');

/*Table structure for table `si_main_carousel_content` */

DROP TABLE IF EXISTS `si_main_carousel_content`;

CREATE TABLE `si_main_carousel_content` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `content_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `si_main_carousel_content` */

insert  into `si_main_carousel_content`(`id`,`content_type`,`content_id`,`created_at`,`updated_at`) values 
(1,'movie',2,NULL,NULL),
(2,'show',1,NULL,NULL),
(3,'movie',3,NULL,NULL),
(4,'movie',12,'2020-12-15 13:48:34','2020-12-15 13:48:34');

/*Table structure for table `si_membership` */

DROP TABLE IF EXISTS `si_membership`;

CREATE TABLE `si_membership` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `feePerMonth` double(8,2) NOT NULL,
  `multiLoginCount` int(11) NOT NULL,
  `unLimitContent` int(11) NOT NULL,
  `enbAllDevice` int(11) NOT NULL,
  `enbHDQuality` int(11) NOT NULL,
  `enbUHDQuality` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `si_membership` */

insert  into `si_membership`(`id`,`name`,`feePerMonth`,`multiLoginCount`,`unLimitContent`,`enbAllDevice`,`enbHDQuality`,`enbUHDQuality`,`created_at`,`updated_at`) values 
(1,'Basic',8.99,1,1,1,0,0,NULL,NULL),
(2,'Standard',13.99,2,1,1,1,0,NULL,NULL),
(3,'Premium',17.99,4,1,1,1,1,NULL,NULL),
(4,'Free Trial',0.00,1,1,0,0,0,NULL,NULL);

/*Table structure for table `si_movie_carousel_content` */

DROP TABLE IF EXISTS `si_movie_carousel_content`;

CREATE TABLE `si_movie_carousel_content` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `content_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `si_movie_carousel_content` */

insert  into `si_movie_carousel_content`(`id`,`content_type`,`content_id`,`created_at`,`updated_at`) values 
(1,'movie',4,NULL,NULL),
(2,'movie',3,NULL,NULL),
(3,'movie',2,NULL,NULL);

/*Table structure for table `si_movie_section1_content` */

DROP TABLE IF EXISTS `si_movie_section1_content`;

CREATE TABLE `si_movie_section1_content` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `content_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `si_movie_section1_content` */

insert  into `si_movie_section1_content`(`id`,`content_type`,`content_id`,`created_at`,`updated_at`) values 
(1,'movie',2,NULL,NULL),
(2,'movie',1,NULL,NULL),
(3,'movie',4,NULL,NULL),
(4,'movie',5,NULL,NULL);

/*Table structure for table `si_movie_section2_content` */

DROP TABLE IF EXISTS `si_movie_section2_content`;

CREATE TABLE `si_movie_section2_content` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `content_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `si_movie_section2_content` */

insert  into `si_movie_section2_content`(`id`,`content_type`,`content_id`,`created_at`,`updated_at`) values 
(1,'movie',6,NULL,NULL),
(2,'movie',7,NULL,NULL),
(3,'movie',2,NULL,NULL),
(4,'movie',9,NULL,NULL),
(5,'movie',3,NULL,NULL);

/*Table structure for table `si_movie_section3_content` */

DROP TABLE IF EXISTS `si_movie_section3_content`;

CREATE TABLE `si_movie_section3_content` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `content_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `si_movie_section3_content` */

insert  into `si_movie_section3_content`(`id`,`content_type`,`content_id`,`created_at`,`updated_at`) values 
(1,'movie',2,NULL,NULL),
(2,'movie',5,NULL,NULL),
(3,'movie',7,NULL,NULL),
(4,'movie',1,NULL,NULL);

/*Table structure for table `si_movies` */

DROP TABLE IF EXISTS `si_movies`;

CREATE TABLE `si_movies` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` bigint(20) unsigned NOT NULL,
  `lang` bigint(20) unsigned NOT NULL,
  `quality` bigint(20) unsigned NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trailer_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `releseDate` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `si_movies_category_foreign` (`category`),
  KEY `si_movies_lang_foreign` (`lang`),
  KEY `si_movies_quality_foreign` (`quality`),
  CONSTRAINT `si_movies_category_foreign` FOREIGN KEY (`category`) REFERENCES `si_video_category` (`id`),
  CONSTRAINT `si_movies_lang_foreign` FOREIGN KEY (`lang`) REFERENCES `si_video_language` (`id`),
  CONSTRAINT `si_movies_quality_foreign` FOREIGN KEY (`quality`) REFERENCES `si_video_quality` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `si_movies` */

insert  into `si_movies`(`id`,`title`,`description`,`category`,`lang`,`quality`,`file`,`video_link`,`trailer_link`,`duration`,`releseDate`,`remember_token`,`created_at`,`updated_at`) values 
(1,'Boop Bitty','Lorem ipsum dolor sit amet',1,1,2,'uploads/images//1607577296.jpg','uploads/videos//1607577296.mp4',NULL,'2h 57m',2020,NULL,NULL,'2020-12-10 05:14:56'),
(2,'Burning','Lorem ipsum dolor sit amet',2,1,2,'uploads/images//1607577319.jpg','uploads/videos//1607577296.mp4','uploads/videos//1608041266.mp4','2h 57m',2020,NULL,NULL,'2020-12-15 14:07:46'),
(3,'Champions','Lorem ipsum dolor sit amet',1,3,1,'uploads/images//1607577480.jpg','uploads/videos//1607577296.mp4',NULL,'2h 57m',2020,NULL,NULL,'2020-12-10 05:18:00'),
(4,'Dino Land','Lorem ipsum dolor sit amet',4,2,3,'uploads/images//1607580984.jpg','uploads/videos//1607577296.mp4',NULL,'2h 57m',2020,NULL,NULL,'2020-12-10 06:16:24'),
(5,'Last Night','Lorem ipsum dolor sit amet',2,3,1,'uploads/images//1607577530.jpg','uploads/videos//1607577296.mp4',NULL,'2h 57m',2020,NULL,NULL,'2020-12-10 05:18:50'),
(6,'Last Race','Lorem ipsum dolor sit amet',3,3,2,'uploads/images//1607577548.jpg','uploads/videos//1607577296.mp4',NULL,'2h 57m',2020,NULL,NULL,'2020-12-10 05:19:08'),
(7,'Last Breath','Lorem ipsum dolor sit amet',2,1,1,'uploads/images//1607577515.jpg','uploads/videos//1607577296.mp4',NULL,'2h 57m',2020,NULL,NULL,'2020-12-10 05:18:35'),
(8,'Beyond War','Lorem ipsum dolor sit amet',2,1,4,'uploads/images//1607577280.jpg','uploads/videos//1607577296.mp4',NULL,'2h 57m',2020,NULL,NULL,'2020-12-10 05:14:40'),
(9,'Open Dead Shot','Lorem ipsum dolor sit amet',4,1,1,'uploads/images//1607577578.jpg','uploads/videos//1607577296.mp4',NULL,'2h 57m',2020,NULL,NULL,'2020-12-10 05:19:38'),
(10,'Arrival 1999','Lorem ipsum dolor sit amet',4,2,4,'uploads/images//1607577233.jpg','uploads/videos//1607577296.mp4',NULL,'2h 57m',2020,NULL,NULL,'2020-12-10 05:13:53'),
(11,'My True Freinds','Lorem ipsum dolor sit amet',2,1,2,'uploads/images//1607580902.jpg','uploads/videos//1607577296.mp4',NULL,'2h 57m',2020,NULL,NULL,'2020-12-10 06:15:02'),
(12,'Test Movie','Wow. Awesome!!!',2,2,2,'uploads/images//1608040082.jpg','uploads/videos//1608040082.mp4','uploads/videos//1608040082.mp4','2h 14m',2020,NULL,'2020-12-15 13:48:02','2020-12-15 13:48:02');

/*Table structure for table `si_new_release_content` */

DROP TABLE IF EXISTS `si_new_release_content`;

CREATE TABLE `si_new_release_content` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `content_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `si_new_release_content` */

/*Table structure for table `si_notify_store` */

DROP TABLE IF EXISTS `si_notify_store`;

CREATE TABLE `si_notify_store` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pushed_at` datetime NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `si_notify_store_user_id_foreign` (`user_id`),
  CONSTRAINT `si_notify_store_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `si_users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `si_notify_store` */

/*Table structure for table `si_onyx_original_content` */

DROP TABLE IF EXISTS `si_onyx_original_content`;

CREATE TABLE `si_onyx_original_content` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `content_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `si_onyx_original_content` */

insert  into `si_onyx_original_content`(`id`,`content_type`,`content_id`,`created_at`,`updated_at`) values 
(1,'movie',4,NULL,NULL),
(2,'movie',2,NULL,NULL),
(3,'movie',1,NULL,NULL),
(4,'movie',6,NULL,NULL),
(5,'movie',8,NULL,NULL);

/*Table structure for table `si_recent_add_content` */

DROP TABLE IF EXISTS `si_recent_add_content`;

CREATE TABLE `si_recent_add_content` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `content_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `si_recent_add_content` */

/*Table structure for table `si_recover_password` */

DROP TABLE IF EXISTS `si_recover_password`;

CREATE TABLE `si_recover_password` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `si_recover_password` */

/*Table structure for table `si_roles` */

DROP TABLE IF EXISTS `si_roles`;

CREATE TABLE `si_roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `si_roles` */

insert  into `si_roles`(`id`,`name`,`slug`,`created_at`,`updated_at`) values 
(1,'Front-end customer','customer',NULL,NULL),
(2,'Back-end administrator','admin',NULL,NULL);

/*Table structure for table `si_show_carousel_content` */

DROP TABLE IF EXISTS `si_show_carousel_content`;

CREATE TABLE `si_show_carousel_content` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `content_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `si_show_carousel_content` */

insert  into `si_show_carousel_content`(`id`,`content_type`,`content_id`,`created_at`,`updated_at`) values 
(1,'show',3,NULL,NULL),
(2,'show',2,NULL,NULL),
(3,'show',4,NULL,NULL);

/*Table structure for table `si_show_section1_content` */

DROP TABLE IF EXISTS `si_show_section1_content`;

CREATE TABLE `si_show_section1_content` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `content_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `si_show_section1_content` */

insert  into `si_show_section1_content`(`id`,`content_type`,`content_id`,`created_at`,`updated_at`) values 
(1,'show',4,NULL,NULL),
(2,'show',2,NULL,NULL),
(3,'show',5,NULL,NULL),
(4,'show',3,NULL,NULL);

/*Table structure for table `si_show_section2_content` */

DROP TABLE IF EXISTS `si_show_section2_content`;

CREATE TABLE `si_show_section2_content` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `content_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `si_show_section2_content` */

insert  into `si_show_section2_content`(`id`,`content_type`,`content_id`,`created_at`,`updated_at`) values 
(1,'show',1,NULL,NULL),
(2,'show',3,NULL,NULL),
(3,'show',2,NULL,NULL),
(4,'show',4,NULL,NULL);

/*Table structure for table `si_show_section3_content` */

DROP TABLE IF EXISTS `si_show_section3_content`;

CREATE TABLE `si_show_section3_content` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `content_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `si_show_section3_content` */

insert  into `si_show_section3_content`(`id`,`content_type`,`content_id`,`created_at`,`updated_at`) values 
(1,'show',6,NULL,NULL),
(2,'show',2,NULL,NULL),
(3,'show',3,NULL,NULL),
(4,'show',5,NULL,NULL);

/*Table structure for table `si_shows` */

DROP TABLE IF EXISTS `si_shows`;

CREATE TABLE `si_shows` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` bigint(20) unsigned NOT NULL,
  `lang` bigint(20) unsigned NOT NULL,
  `quality` bigint(20) unsigned NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trailer_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `si_shows_category_foreign` (`category`),
  KEY `si_shows_lang_foreign` (`lang`),
  KEY `si_shows_quality_foreign` (`quality`),
  CONSTRAINT `si_shows_category_foreign` FOREIGN KEY (`category`) REFERENCES `si_video_category` (`id`),
  CONSTRAINT `si_shows_lang_foreign` FOREIGN KEY (`lang`) REFERENCES `si_video_language` (`id`),
  CONSTRAINT `si_shows_quality_foreign` FOREIGN KEY (`quality`) REFERENCES `si_video_quality` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `si_shows` */

insert  into `si_shows`(`id`,`title`,`description`,`category`,`lang`,`quality`,`file`,`banner`,`trailer_link`,`remember_token`,`created_at`,`updated_at`) values 
(1,'OPPOSITE ATTRACT','Lorem ipsum dolor sit amet',1,1,2,'uploads/images//1607577630.jpg','uploads/images//1607577630.jpg','uploads/videos//1608041390.mp4',NULL,NULL,'2020-12-15 14:09:50'),
(2,'THE MARSHAL KING','Lorem ipsum dolor sit amet',1,1,3,'uploads/images//1607577679.jpg','uploads/images//1607577679.jpg',NULL,NULL,NULL,'2020-12-10 05:21:19'),
(3,'DARK ZONE','Lorem ipsum dolor sit amet',1,2,2,'uploads/images//1607577599.jpg','uploads/images//1607577599.jpg',NULL,NULL,NULL,'2020-12-10 05:19:59'),
(4,'FIRE STORM','Lorem ipsum dolor sit amet',2,2,1,'uploads/images//1607577612.jpg','uploads/images//1607577612.jpg',NULL,NULL,NULL,'2020-12-10 05:20:12'),
(5,'THE HERO CHAMP','Lorem ipsum dolor sit amet',2,2,4,'uploads/images//1607577662.jpg','uploads/images//1607577662.jpg',NULL,NULL,NULL,'2020-12-10 05:21:02'),
(6,'THE APARTMENT','Lorem ipsum dolor sit amet',2,3,3,'uploads/images//1607577647.jpg','uploads/images//1607577647.jpg',NULL,NULL,NULL,'2020-12-10 05:20:47');

/*Table structure for table `si_state` */

DROP TABLE IF EXISTS `si_state`;

CREATE TABLE `si_state` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `si_state` */

insert  into `si_state`(`id`,`name`,`created_at`,`updated_at`) values 
(1,'California',NULL,NULL),
(2,'Florida',NULL,NULL),
(3,'Georgia',NULL,NULL),
(4,'Connecticut',NULL,NULL),
(5,'Louisiana',NULL,NULL);

/*Table structure for table `si_suggest_content` */

DROP TABLE IF EXISTS `si_suggest_content`;

CREATE TABLE `si_suggest_content` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `content_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `si_suggest_content` */

insert  into `si_suggest_content`(`id`,`content_type`,`content_id`,`created_at`,`updated_at`) values 
(1,'movie',4,NULL,NULL),
(2,'movie',5,NULL,NULL),
(3,'movie',2,NULL,NULL),
(4,'movie',7,NULL,NULL);

/*Table structure for table `si_topten_content` */

DROP TABLE IF EXISTS `si_topten_content`;

CREATE TABLE `si_topten_content` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `content_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `si_topten_content` */

insert  into `si_topten_content`(`id`,`content_type`,`content_id`,`created_at`,`updated_at`) values 
(1,'movie',1,NULL,NULL),
(2,'movie',2,NULL,NULL),
(3,'movie',3,NULL,NULL),
(4,'movie',4,NULL,NULL),
(5,'movie',5,NULL,NULL),
(6,'movie',6,NULL,NULL),
(7,'movie',7,NULL,NULL),
(8,'movie',8,NULL,NULL),
(9,'movie',9,NULL,NULL);

/*Table structure for table `si_trending_content` */

DROP TABLE IF EXISTS `si_trending_content`;

CREATE TABLE `si_trending_content` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `content_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `si_trending_content` */

insert  into `si_trending_content`(`id`,`content_type`,`content_id`,`created_at`,`updated_at`) values 
(1,'show',1,NULL,NULL),
(2,'show',3,NULL,NULL),
(3,'show',5,NULL,NULL),
(4,'show',2,NULL,NULL),
(5,'show',6,NULL,NULL),
(6,'show',4,NULL,NULL);

/*Table structure for table `si_upcoming_content` */

DROP TABLE IF EXISTS `si_upcoming_content`;

CREATE TABLE `si_upcoming_content` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `content_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `si_upcoming_content` */

insert  into `si_upcoming_content`(`id`,`content_type`,`content_id`,`created_at`,`updated_at`) values 
(1,'movie',3,NULL,NULL),
(2,'movie',2,NULL,NULL),
(3,'movie',5,NULL,NULL),
(4,'movie',6,NULL,NULL),
(5,'movie',1,NULL,NULL);

/*Table structure for table `si_users` */

DROP TABLE IF EXISTS `si_users`;

CREATE TABLE `si_users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebookLink` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitterLink` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `googleLink` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagramLink` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtubeLink` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `joinDate` datetime NOT NULL,
  `status` int(11) NOT NULL,
  `device_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `si_users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `si_users` */

insert  into `si_users`(`id`,`name`,`email`,`email_verified_at`,`password`,`lang`,`facebookLink`,`twitterLink`,`googleLink`,`instagramLink`,`youtubeLink`,`joinDate`,`status`,`device_token`,`remember_token`,`created_at`,`updated_at`) values 
(1,'Aristo','aristo@gmail.com',NULL,'$2y$10$UHt3nHih1bTC5pMk7IfKVeHo3NlZBXVQzl6sxayPJyGzL1QZx8Njm','English','facebook@gmail.com','twitter@gmail.com',NULL,NULL,NULL,'2020-11-15 00:00:00',1,NULL,NULL,NULL,'2020-12-10 05:42:16'),
(2,'Antony Thomas','antony@gmail.com',NULL,'$2y$10$iyYs.m3g/e3.OntBXJe.mO.eDdtxySKu/mAqvKjowJUI6gCtWpDXq',NULL,NULL,NULL,NULL,NULL,NULL,'2020-12-10 00:00:00',0,'eN0UpmIXLQqEhNFJ_3NHGa:APA91bGlMd1Q-CRD-y7j2n6MuDU3vWcOgl5WjV47R1xvNwEfZLq_tzVl_98LpzfQ8jL5Q-LsTJw7gKTnXLzQ4LiuUUKh-cpquZV6lOstN3scosDfeCxnq_vuKyA_m0bZO_mzO7zmn4Hf',NULL,'2020-12-10 06:25:16','2020-12-10 08:11:54'),
(3,'Walter','walter@gmail.com',NULL,'$2y$10$JV8CmRsx1V7uHzVUx362kuEAfwAASTbrkU.Vct2anq8dwAl6qNsm6',NULL,NULL,NULL,NULL,NULL,NULL,'2020-12-10 00:00:00',0,'f4_sBXVza7IQGO326D8wFr:APA91bGoGaOoZ0ggS-fvC7cEycAP5H0OTWSd3UC0IYT28wY-XgCh4VUkYHAjm4hUTjDvwN6ChN4SwTgQrbUaNaJ9mFLwducYLhDlyHa10KIHUEr5cB7hm9Q-pSR8CzLn5EVsoWSvnmNj',NULL,'2020-12-10 06:41:38','2020-12-15 16:06:38'),
(4,'James Rodrigues','james12@gmail.com',NULL,'$2y$10$rzOHPiwml0XUIyWqYbkFZusyvW5K871F3ltlGYONuGRtKeKjP3rjC',NULL,NULL,NULL,NULL,NULL,NULL,'2020-12-12 00:00:00',0,'fWvhBhxgD5qM_Y2srVOhYI:APA91bG78RbdwDXJ-88xSMDNFvzyy7sFdJCHqiCrWXnlb3McGQlecS46OkwVKRpwv2qd5ZBiC3frsGHqgX4YiptLLrmoD1mvoVTTf23zBuhQsf4yAK1lVr-T37i07sF8_-ouXYBeMitF',NULL,'2020-12-12 20:59:13','2020-12-12 20:59:23'),
(5,'lina','lina@gmail.com',NULL,'$2y$10$6Q3SAEoRSODo02gST7MAhOeTl9FKYUhJjav3p7eV3auva6hMWGvIG',NULL,NULL,NULL,NULL,NULL,NULL,'2020-12-12 00:00:00',0,'ecdWpAPK7m3cB2lUbDe2JM:APA91bHPGh_ofv9R6Iap02hMP9X_C1htz9RBTso717-3PPClHpaAaUdZEy17uvVl_ZIww5_Jpw27NbzOWn_-fXIfnM-u_RvB8qWxOc2PGHsMJoY1SHXE_oakTJ0VNKZ_S2X2UfK4jbcZ',NULL,'2020-12-12 23:06:29','2020-12-12 23:06:38');

/*Table structure for table `si_users_memships` */

DROP TABLE IF EXISTS `si_users_memships`;

CREATE TABLE `si_users_memships` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `memship_id` bigint(20) unsigned NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `si_users_memships_user_id_foreign` (`user_id`),
  KEY `si_users_memships_memship_id_foreign` (`memship_id`),
  CONSTRAINT `si_users_memships_memship_id_foreign` FOREIGN KEY (`memship_id`) REFERENCES `si_membership` (`id`) ON DELETE CASCADE,
  CONSTRAINT `si_users_memships_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `si_users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `si_users_memships` */

insert  into `si_users_memships`(`id`,`user_id`,`memship_id`,`updated_at`) values 
(1,1,1,'2020-12-10 00:00:00'),
(2,2,1,'2020-12-10 00:00:00'),
(3,3,1,'2020-12-10 00:00:00'),
(4,4,4,'2020-12-12 00:00:00'),
(5,5,4,'2020-12-12 00:00:00');

/*Table structure for table `si_users_profiles` */

DROP TABLE IF EXISTS `si_users_profiles`;

CREATE TABLE `si_users_profiles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `firstName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthDate` datetime DEFAULT NULL,
  `marital` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` bigint(20) unsigned DEFAULT NULL,
  `state` bigint(20) unsigned DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobileNo` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `si_users_profiles_user_id_foreign` (`user_id`),
  KEY `si_users_profiles_country_foreign` (`country`),
  KEY `si_users_profiles_state_foreign` (`state`),
  CONSTRAINT `si_users_profiles_country_foreign` FOREIGN KEY (`country`) REFERENCES `si_country` (`id`),
  CONSTRAINT `si_users_profiles_state_foreign` FOREIGN KEY (`state`) REFERENCES `si_state` (`id`),
  CONSTRAINT `si_users_profiles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `si_users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `si_users_profiles` */

insert  into `si_users_profiles`(`id`,`user_id`,`firstName`,`lastName`,`image`,`city`,`gender`,`birthDate`,`marital`,`country`,`state`,`address`,`mobileNo`,`created_at`,`updated_at`) values 
(1,1,'Aristo','Telles','uploads/images/users/01.jpg','atlanta','male','2020-12-10 00:00:00','divorced',1,2,'Linden Street No3',1234455678,NULL,'2020-12-10 05:41:45'),
(2,2,'Antony','Thomas','uploads/images//1607588982.jpg',NULL,'female','2020-12-09 00:00:00',NULL,NULL,NULL,NULL,NULL,'2020-12-10 06:25:17','2020-12-10 08:29:42'),
(3,3,'Walter','Jason',NULL,NULL,'male','2020-12-09 00:00:00',NULL,NULL,NULL,NULL,NULL,'2020-12-10 06:41:38','2020-12-12 19:41:54'),
(4,4,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2020-12-12 20:59:14','2020-12-12 20:59:14'),
(5,5,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2020-12-12 23:06:29','2020-12-12 23:06:29');

/*Table structure for table `si_users_roles` */

DROP TABLE IF EXISTS `si_users_roles`;

CREATE TABLE `si_users_roles` (
  `user_id` bigint(20) unsigned NOT NULL,
  `role_id` bigint(20) unsigned NOT NULL,
  KEY `si_users_roles_user_id_foreign` (`user_id`),
  KEY `si_users_roles_role_id_foreign` (`role_id`),
  CONSTRAINT `si_users_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `si_roles` (`id`) ON DELETE CASCADE,
  CONSTRAINT `si_users_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `si_users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `si_users_roles` */

insert  into `si_users_roles`(`user_id`,`role_id`) values 
(1,2),
(2,1),
(3,1),
(4,1),
(5,1);

/*Table structure for table `si_video_category` */

DROP TABLE IF EXISTS `si_video_category`;

CREATE TABLE `si_video_category` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `si_video_category` */

insert  into `si_video_category`(`id`,`name`,`description`,`status`,`remember_token`,`created_at`,`updated_at`) values 
(1,'Drama','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rhoncus non elit a scelerisque. Etiam feugiat luctus est, vel commodo odio rhoncus sit amet',0,NULL,NULL,NULL),
(2,'Action','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rhoncus non elit a scelerisque. Etiam feugiat luctus est, vel commodo odio rhoncus sit amet',0,NULL,NULL,NULL),
(3,'Horror','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rhoncus non elit a scelerisque. Etiam feugiat luctus est, vel commodo odio rhoncus sit amet',0,NULL,NULL,NULL),
(4,'Thriller','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rhoncus non elit a scelerisque. Etiam feugiat luctus est, vel commodo odio rhoncus sit amet',0,NULL,NULL,NULL);

/*Table structure for table `si_video_language` */

DROP TABLE IF EXISTS `si_video_language`;

CREATE TABLE `si_video_language` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `si_video_language` */

insert  into `si_video_language`(`id`,`name`) values 
(1,'English'),
(2,'Hindi'),
(3,'Tamil'),
(4,'Gujarati');

/*Table structure for table `si_video_quality` */

DROP TABLE IF EXISTS `si_video_quality`;

CREATE TABLE `si_video_quality` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `si_video_quality` */

insert  into `si_video_quality`(`id`,`name`) values 
(1,'SD(480p)'),
(2,'HD(720p)'),
(3,'FHD(1080p)'),
(4,'UHD(4K +)');

/*Table structure for table `si_view_log` */

DROP TABLE IF EXISTS `si_view_log`;

CREATE TABLE `si_view_log` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `content_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `si_view_log` */

insert  into `si_view_log`(`id`,`content_type`,`content_id`,`date`,`created_at`,`updated_at`) values 
(1,'movie',5,'2020-12-10 00:00:00','2020-12-10 06:25:36','2020-12-10 06:25:36'),
(2,'movie',5,'2020-12-10 00:00:00','2020-12-10 06:26:11','2020-12-10 06:26:11'),
(3,'movie',5,'2020-12-10 00:00:00','2020-12-10 06:27:14','2020-12-10 06:27:14'),
(4,'movie',5,'2020-12-10 00:00:00','2020-12-10 06:29:48','2020-12-10 06:29:48'),
(5,'movie',9,'2020-12-10 00:00:00','2020-12-10 06:30:02','2020-12-10 06:30:02'),
(6,'movie',3,'2020-12-10 00:00:00','2020-12-10 06:30:48','2020-12-10 06:30:48'),
(7,'movie',5,'2020-12-10 00:00:00','2020-12-10 06:31:34','2020-12-10 06:31:34'),
(8,'movie',7,'2020-12-10 00:00:00','2020-12-10 06:31:42','2020-12-10 06:31:42'),
(9,'movie',5,'2020-12-10 00:00:00','2020-12-10 06:48:26','2020-12-10 06:48:26'),
(10,'movie',5,'2020-12-10 00:00:00','2020-12-10 07:00:10','2020-12-10 07:00:10'),
(11,'movie',5,'2020-12-10 00:00:00','2020-12-10 07:00:48','2020-12-10 07:00:48'),
(12,'movie',5,'2020-12-10 00:00:00','2020-12-10 07:01:11','2020-12-10 07:01:11'),
(13,'movie',5,'2020-12-10 00:00:00','2020-12-10 07:01:21','2020-12-10 07:01:21'),
(14,'movie',5,'2020-12-10 00:00:00','2020-12-10 07:01:59','2020-12-10 07:01:59'),
(15,'movie',5,'2020-12-10 00:00:00','2020-12-10 07:04:38','2020-12-10 07:04:38'),
(16,'movie',5,'2020-12-10 00:00:00','2020-12-10 07:26:30','2020-12-10 07:26:30'),
(17,'movie',5,'2020-12-10 00:00:00','2020-12-10 07:29:06','2020-12-10 07:29:06'),
(18,'movie',9,'2020-12-10 00:00:00','2020-12-10 08:44:07','2020-12-10 08:44:07'),
(19,'movie',5,'2020-12-12 00:00:00','2020-12-12 19:24:09','2020-12-12 19:24:09'),
(20,'movie',5,'2020-12-12 00:00:00','2020-12-12 19:24:41','2020-12-12 19:24:41'),
(21,'movie',5,'2020-12-15 00:00:00','2020-12-15 13:52:57','2020-12-15 13:52:57');

/*Table structure for table `si_visit_log` */

DROP TABLE IF EXISTS `si_visit_log`;

CREATE TABLE `si_visit_log` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `si_visit_log` */

insert  into `si_visit_log`(`id`,`ip`,`date`,`created_at`,`updated_at`) values 
(1,'127.0.0.1','2020-12-10 00:00:00','2020-12-10 06:03:37','2020-12-10 06:03:37'),
(2,'127.0.0.1','2020-12-10 00:00:00','2020-12-10 06:39:03','2020-12-10 06:39:03'),
(3,'127.0.0.1','2020-12-10 00:00:00','2020-12-10 06:56:19','2020-12-10 06:56:19'),
(4,'127.0.0.1','2020-12-10 00:00:00','2020-12-10 07:09:06','2020-12-10 07:09:06'),
(5,'127.0.0.1','2020-12-10 00:00:00','2020-12-10 07:18:11','2020-12-10 07:18:11'),
(6,'127.0.0.1','2020-12-10 00:00:00','2020-12-10 07:19:23','2020-12-10 07:19:23'),
(7,'127.0.0.1','2020-12-10 00:00:00','2020-12-10 07:52:35','2020-12-10 07:52:35'),
(8,'127.0.0.1','2020-12-10 00:00:00','2020-12-10 08:02:23','2020-12-10 08:02:23'),
(9,'127.0.0.1','2020-12-10 00:00:00','2020-12-10 08:11:23','2020-12-10 08:11:23'),
(10,'127.0.0.1','2020-12-12 00:00:00','2020-12-12 19:18:46','2020-12-12 19:18:46'),
(11,'127.0.0.1','2020-12-12 00:00:00','2020-12-12 20:58:16','2020-12-12 20:58:16'),
(12,'127.0.0.1','2020-12-12 00:00:00','2020-12-12 23:05:55','2020-12-12 23:05:55'),
(13,'127.0.0.1','2020-12-15 00:00:00','2020-12-15 00:15:49','2020-12-15 00:15:49'),
(14,'127.0.0.1','2020-12-15 00:00:00','2020-12-15 16:06:21','2020-12-15 16:06:21');

/*Table structure for table `si_watch_again_content` */

DROP TABLE IF EXISTS `si_watch_again_content`;

CREATE TABLE `si_watch_again_content` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `content_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `si_watch_again_content` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
