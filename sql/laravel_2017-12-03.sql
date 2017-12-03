# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.6.31)
# Database: laravel
# Generation Time: 2017-12-03 06:41:51 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table indexInfo
# ------------------------------------------------------------

DROP TABLE IF EXISTS `indexInfo`;

CREATE TABLE `indexInfo` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '標題',
  `slogan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '簡述',
  `page_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '連結',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '圖片',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `indexInfo` WRITE;
/*!40000 ALTER TABLE `indexInfo` DISABLE KEYS */;

INSERT INTO `indexInfo` (`id`, `title`, `slogan`, `page_url`, `image`, `created_at`, `updated_at`)
VALUES
	(1,'員邦歷程','持續30年的優質演化','http://laravel.quanshi.com.tw/about','index_info1512236171.jpg','2017-12-02 23:05:50','2017-12-03 01:36:11'),
	(2,'專業團隊','「建設」結合「營造」之整合體系','http://laravel.quanshi.com.tw/about','index_info1512228590.jpg','2017-12-02 23:29:50','2017-12-02 23:29:50'),
	(3,'在建工程','最新建案相關一覽','http://laravel.quanshi.com.tw/workings','index_info1512228649.jpg','2017-12-02 23:30:49','2017-12-02 23:30:49'),
	(4,'都市更新','都市更新開發專業整合','http://laravel.quanshi.com.tw/','index_info1512228695.jpg','2017-12-02 23:31:35','2017-12-02 23:31:35');

/*!40000 ALTER TABLE `indexInfo` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;

INSERT INTO `migrations` (`id`, `migration`, `batch`)
VALUES
	(21,'2017_11_25_165708_add_subSiteAddress_to_CreateWorksTable',2),
	(34,'2014_10_12_000000_create_users_table',3),
	(35,'2014_10_12_100000_create_password_resets_table',3),
	(36,'2017_11_05_175106_laratrust_setup_tables',3),
	(37,'2017_11_09_184045_create_works_table',3),
	(38,'2017_11_26_004741_create_workings_table',4),
	(39,'2017_11_26_024843_add_builder_to_workings_table',5),
	(44,'2017_11_26_165207_create_workings_photo_table',6),
	(46,'2017_12_02_213905_create_index_info_table',7),
	(47,'2017_12_03_014127_create_news_table',8);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table news
# ------------------------------------------------------------

DROP TABLE IF EXISTS `news`;

CREATE TABLE `news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '新聞標題',
  `description` text COLLATE utf8mb4_unicode_ci COMMENT '新聞內容',
  `news_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'news_image.jpg' COMMENT '新聞圖片',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;

INSERT INTO `news` (`id`, `title`, `description`, `news_image`, `created_at`, `updated_at`)
VALUES
	(1,'fewfe這是標題','內容簡述內容內容內容簡述內容內容內容簡述內容內容內容簡述內容內容內容簡述內容內容內容簡述內容內容內容簡述內容內容內容簡述內容內容內容簡述內容內容內容簡述內容內容內容簡述內容內容內容簡述內容內容內容簡述內容內容內容簡述內容內容內容簡述內容內容內容簡述內容內容內容簡述內容內容內容簡述內容內容內容簡述內容內容','news-1512273391.jpg','2017-12-03 11:56:31','2017-12-03 11:58:27'),
	(2,'經相正人人酒後好成集','牛山沒們我包一示身家了分。黑術城力照重活拉。\r\n\r\n建同說全創去覺人總是度分。\r\n\r\n手家高登格平輕克者土公登子考一房立，定一報，病者想，同世朋他得年，飛不作能光是過老二：命身的我字一夠！\r\n\r\n因中蘭也會去告期心你具府關期八小連一興地驗廣用成即重？分起走年。的只麼王得曾長而？','news-1512278890.jpg','2017-12-03 13:28:10','2017-12-03 13:28:10'),
	(3,'界達大前直物笑','說系半的小加此理？後法素到上。家的財現一足片評……表年不的過年多色減石間食業力一業下，嚴動效……突時天小去沒與輪一資草得康作動。和味目出在嚴達創、實了離教器蘭必度速，我是大部毛象科中就參強的雖美。\r\n\r\n走我火心年，時的華，驚美方；來適自，自你我們年斷獨人完……證下來發外魚色代只問來出口發有民只一北影？','news-1512278937.jpg','2017-12-03 13:28:57','2017-12-03 13:28:57'),
	(4,'看出什們她裡差書易便實以南可','選內外顯過灣說我這，備不點本家不理呢結向了其子優學人……性同但書過然、不化證比知！起本戲成很外，間是個的了文房大流。生氣許自一，哥有作把不灣過立我外來作有過金倒說不共的是。無情此孩消待是答巴媽有清是我怎很師的清上又安了、的由力，使場色；好那他是活人又光失畫聞線民也字地總金得間力定論此海。喜樓可勢……出市由水不方著，化可不叫照。東又著。\r\n\r\n國此內科臺臺他於是教。天師著加它的有。回只生明步覺基記活裡變部。陸公易陽做家岸，方對頭無民水現出位古就知一專。腳業利作坐紀會約？到李我美經製加總票受成效？','news-1512278998.jpg','2017-12-03 13:29:58','2017-12-03 13:29:58');

/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table password_resets
# ------------------------------------------------------------

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table permission_role
# ------------------------------------------------------------

DROP TABLE IF EXISTS `permission_role`;

CREATE TABLE `permission_role` (
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `permission_role_role_id_foreign` (`role_id`),
  CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `permission_role` WRITE;
/*!40000 ALTER TABLE `permission_role` DISABLE KEYS */;

INSERT INTO `permission_role` (`permission_id`, `role_id`)
VALUES
	(1,1),
	(2,1),
	(3,1),
	(4,1),
	(5,1),
	(6,1),
	(7,1),
	(8,1),
	(9,1),
	(10,1),
	(1,2),
	(2,2),
	(3,2),
	(4,2),
	(9,2),
	(10,2),
	(9,3),
	(10,3),
	(9,4),
	(10,4),
	(9,5),
	(10,5),
	(9,6),
	(10,6),
	(9,7),
	(10,7);

/*!40000 ALTER TABLE `permission_role` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table permission_user
# ------------------------------------------------------------

DROP TABLE IF EXISTS `permission_user`;

CREATE TABLE `permission_user` (
  `permission_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`user_id`,`permission_id`,`user_type`),
  KEY `permission_user_permission_id_foreign` (`permission_id`),
  CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table permissions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `permissions`;

CREATE TABLE `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_unique` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;

INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`)
VALUES
	(1,'create-users','Create Users','Create Users','2017-11-25 21:36:22','2017-11-25 21:36:22'),
	(2,'read-users','Read Users','Read Users','2017-11-25 21:36:22','2017-11-25 21:36:22'),
	(3,'update-users','Update Users','Update Users','2017-11-25 21:36:22','2017-11-25 21:36:22'),
	(4,'delete-users','Delete Users','Delete Users','2017-11-25 21:36:22','2017-11-25 21:36:22'),
	(5,'create-acl','Create Acl','Create Acl','2017-11-25 21:36:22','2017-11-25 21:36:22'),
	(6,'read-acl','Read Acl','Read Acl','2017-11-25 21:36:22','2017-11-25 21:36:22'),
	(7,'update-acl','Update Acl','Update Acl','2017-11-25 21:36:22','2017-11-25 21:36:22'),
	(8,'delete-acl','Delete Acl','Delete Acl','2017-11-25 21:36:22','2017-11-25 21:36:22'),
	(9,'read-profile','Read Profile','Read Profile','2017-11-25 21:36:22','2017-11-25 21:36:22'),
	(10,'update-profile','Update Profile','Update Profile','2017-11-25 21:36:22','2017-11-25 21:36:22');

/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table role_user
# ------------------------------------------------------------

DROP TABLE IF EXISTS `role_user`;

CREATE TABLE `role_user` (
  `role_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`,`user_type`),
  KEY `role_user_role_id_foreign` (`role_id`),
  CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `role_user` WRITE;
/*!40000 ALTER TABLE `role_user` DISABLE KEYS */;

INSERT INTO `role_user` (`role_id`, `user_id`, `user_type`)
VALUES
	(1,1,'App\\User'),
	(2,2,'App\\User'),
	(3,3,'App\\User'),
	(4,4,'App\\User'),
	(5,5,'App\\User'),
	(6,6,'App\\User'),
	(7,7,'App\\User');

/*!40000 ALTER TABLE `role_user` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table roles
# ------------------------------------------------------------

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`)
VALUES
	(1,'superadministrator','Superadministrator','Superadministrator','2017-11-25 21:36:22','2017-11-25 21:36:22'),
	(2,'administrator','Administrator','Administrator','2017-11-25 21:36:22','2017-11-25 21:36:22'),
	(3,'editor','Editor','Editor','2017-11-25 21:36:22','2017-11-25 21:36:22'),
	(4,'author','Author','Author','2017-11-25 21:36:22','2017-11-25 21:36:22'),
	(5,'contributor','Contributor','Contributor','2017-11-25 21:36:22','2017-11-25 21:36:22'),
	(6,'supporter','Supporter','Supporter','2017-11-25 21:36:22','2017-11-25 21:36:22'),
	(7,'subscriber','Subscriber','Subscriber','2017-11-25 21:36:22','2017-11-25 21:36:22');

/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`)
VALUES
	(1,'Superadministrator','superadministrator@app.com','$2y$10$EuAYAGTXDBYdC7wneYIxyu0p1X1Rc5Brz3dD5IZybJIo.LEKoepdW','CoI84UVvXawnACKxvWLZHfr9X0FpjfiBfQRq3cGxoSvfatQL0kAOH0BZjOzA','2017-11-25 21:36:22','2017-11-25 21:36:22'),
	(2,'Administrator','administrator@app.com','$2y$10$WX8yTfbqb/yLJ7xeIucFhuFAdBgxNJUw6sQKKhCy4rU0IMNtOtphS',NULL,'2017-11-25 21:36:22','2017-11-25 21:36:22'),
	(3,'Editor','editor@app.com','$2y$10$gS1BbugYQXGSVI/KpuqfsOuWeqmnCxWEEzmlU8v2EumyhIAbZVU4m',NULL,'2017-11-25 21:36:22','2017-11-25 21:36:22'),
	(4,'Author','author@app.com','$2y$10$XRuIooVZG0F2b8d/EIbqueUf0sTQi6QSBuPxduo8nUpa34ReWyKEa',NULL,'2017-11-25 21:36:22','2017-11-25 21:36:22'),
	(5,'Contributor','contributor@app.com','$2y$10$UoqGCvFLAxKRBuuW37AYau5LI13O85P3zGslL2P3nuInIA8TtVDjm',NULL,'2017-11-25 21:36:22','2017-11-25 21:36:22'),
	(6,'Supporter','supporter@app.com','$2y$10$CIjvEjwNvV9wwdakxf2hNON6JR4thkLtq5kmF0G2xgFGs8H4wq5Ji',NULL,'2017-11-25 21:36:22','2017-11-25 21:36:22'),
	(7,'Subscriber','subscriber@app.com','$2y$10$pkfUpESWakUmhPBX1NLy1ull1/aKHDUGhnw9eAUdyffM17nT3gZUW',NULL,'2017-11-25 21:36:22','2017-11-25 21:36:22');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table WorkingPhotos
# ------------------------------------------------------------

DROP TABLE IF EXISTS `WorkingPhotos`;

CREATE TABLE `WorkingPhotos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `working_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '在建工程ID',
  `working_images` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '在建工程圖片',
  `working_image_description` text COLLATE utf8mb4_unicode_ci COMMENT '在建工程圖片說明文字',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table workings
# ------------------------------------------------------------

DROP TABLE IF EXISTS `workings`;

CREATE TABLE `workings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '案件標題',
  `slogan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '案件標語',
  `description` text COLLATE utf8mb4_unicode_ci COMMENT '案件描述',
  `location` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '基地位置',
  `service_location` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '接待中心',
  `land_plan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '建設規劃',
  `land_size` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '基地面積',
  `households` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '總戶數',
  `unit_area` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '坪數／格局',
  `public_ratio` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '公設比',
  `tall` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '樓高',
  `completion_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '完工日期',
  `project_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'project_image.jpg' COMMENT '專案圖片',
  `site_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '代銷網站',
  `workings_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '在建工程圖片',
  `workings_image_description` text COLLATE utf8mb4_unicode_ci COMMENT '在建工程圖片說明文字',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `builder` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '起造人',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `workings` WRITE;
/*!40000 ALTER TABLE `workings` DISABLE KEYS */;

INSERT INTO `workings` (`id`, `title`, `slogan`, `description`, `location`, `service_location`, `land_plan`, `land_size`, `households`, `unit_area`, `public_ratio`, `tall`, `completion_date`, `project_image`, `site_url`, `workings_image`, `workings_image_description`, `created_at`, `updated_at`, `builder`)
VALUES
	(1,'龍潭建案','龍潭建案','龍潭建案','桃園市龍潭區民有二街','桃園市龍潭區民有二街',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'workings-1512235976.jpg',NULL,NULL,NULL,'2017-11-26 15:22:43','2017-12-03 01:32:56','員旺建設股份有限公司');

/*!40000 ALTER TABLE `workings` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table workings_photos
# ------------------------------------------------------------

DROP TABLE IF EXISTS `workings_photos`;

CREATE TABLE `workings_photos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `workings_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '在建工程ID',
  `workings_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '在建工程圖片',
  `workings_image_description` text COLLATE utf8mb4_unicode_ci COMMENT '在建工程圖片說明文字',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table works
# ------------------------------------------------------------

DROP TABLE IF EXISTS `works`;

CREATE TABLE `works` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '案件標題',
  `slogan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '案件標語',
  `description` text COLLATE utf8mb4_unicode_ci COMMENT '案件描述',
  `location` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '基地位置',
  `service_location` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '接待中心',
  `land_plan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '建設規劃',
  `land_size` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '基地面積',
  `households` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '總戶數',
  `unit_area` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '坪數／格局',
  `public_ratio` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '公設比',
  `tall` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '樓高',
  `completion_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '完工日期',
  `project_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'project_image.jpg' COMMENT '專案圖片',
  `site_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '代銷網站',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `works` WRITE;
/*!40000 ALTER TABLE `works` DISABLE KEYS */;

INSERT INTO `works` (`id`, `title`, `slogan`, `description`, `location`, `service_location`, `land_plan`, `land_size`, `households`, `unit_area`, `public_ratio`, `tall`, `completion_date`, `project_image`, `site_url`, `created_at`, `updated_at`)
VALUES
	(1,'士林新天地','經典之宅．豪氣萬千','士林新天地\r\n士林新天地\r\n士林新天地\r\n士林新天地','台北市士林區大南路325號','台北市士林區大南路325號','地上14樓，地下3樓','約3,291坪','493戶',NULL,NULL,NULL,'2008年','works-1512236102.jpg',NULL,'2017-11-25 21:46:28','2017-12-03 01:35:02'),
	(2,'桂林苑','中華香榭大道 百年經典建築','中華香榭大道 百年經典建築中華香榭大道 百年經典建築中華香榭大道 百年經典建築','台北市萬華區桂林路6號','台北市萬華區桂林路6號','地上15層，地下四層','479坪','119戶',NULL,NULL,NULL,'2010年4月','works-1512236090.jpg',NULL,'2017-11-25 21:48:17','2017-12-03 01:34:50'),
	(3,'員邦夢想家-圓夢區','美夢成真','圓夢區圓夢區圓夢區圓夢區','台北市內湖區新明路498巷','台北市內湖區新明路498巷','地上8層，地下3層','約245坪','43戶',NULL,NULL,NULL,'2011年12月','works-1512236077.jpg',NULL,'2017-11-25 21:49:20','2017-12-03 01:34:37'),
	(4,'員邦夢想家-美夢區','美夢成真','員邦夢想家-美夢區員邦夢想家-美夢區員邦夢想家-美夢區員邦夢想家-美夢區','台北市內湖區新明路498巷','台北市內湖區新明路498巷','地上7層，地下3層','約286坪','27戶',NULL,NULL,NULL,'2011年12月','works-1512236064.jpg',NULL,'2017-11-25 21:50:19','2017-12-03 01:34:24'),
	(5,'楊明峰匯','台北門牌　山海城市','楊明峰匯楊明峰匯楊明峰匯楊明峰匯','台北市北投區立功街79巷','台北市北投區立功街79巷','地上14層，地下3層','約2300坪','273戶',NULL,NULL,NULL,'2015年3月','works-1512236050.jpg',NULL,'2017-11-25 21:51:57','2017-12-03 01:34:10'),
	(6,'員邦華宴','中華大道旁　最精采的生活饗宴','中華大道旁　最精采的生活饗宴中華大道旁　最精采的生活饗宴','台北市萬華區桂林路28號','台北市萬華區桂林路28號','地上19層，地下3層','約312坪','住宅72戶/店面5戶',NULL,'32%',NULL,'2015年5月','works-1512236038.jpg',NULL,'2017-11-25 21:54:52','2017-12-03 01:33:58'),
	(7,'台北甜心','4米2新甜品宅','台北甜心台北甜心台北甜心台北甜心','新北市泰山區工專路50號','新北市泰山區工專路50號','地上9~11樓，地下2樓',NULL,'74戶',NULL,'32%','4米2','預計2017年10月','works-1512236025.jpg',NULL,'2017-11-25 21:56:02','2017-12-03 01:33:45'),
	(8,'都美艷','BEAUTY ALL IN ONE','都美艷都美艷都美艷都美艷都美艷都美艷都美艷都美艷都美艷都美艷都美艷都美艷都美艷都美艷都美艷','台北市萬華區桂林西昌路口','臺北市萬華區西昌街134號','A棟，地上23樓，地下5樓 B棟，地上15樓','418坪','188戶','16〜43坪／1〜3房','33%','一樓大廳4米2、住家3米3','預定2019年','works-1512236006.jpg',NULL,'2017-11-25 21:57:23','2017-12-03 01:33:26');

/*!40000 ALTER TABLE `works` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
