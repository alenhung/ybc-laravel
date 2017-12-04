# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.6.31)
# Database: laravel
# Generation Time: 2017-11-15 16:52:51 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


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
	(9,'2014_10_12_000000_create_users_table',1),
	(10,'2014_10_12_100000_create_password_resets_table',1),
	(11,'2017_11_05_175106_laratrust_setup_tables',1),
	(12,'2017_11_09_184045_create_works_table',1);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
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
	(1,'create-users','Create Users','Create Users','2017-11-09 21:54:32','2017-11-09 21:54:32'),
	(2,'read-users','Read Users','Read Users','2017-11-09 21:54:32','2017-11-09 21:54:32'),
	(3,'update-users','Update Users','Update Users','2017-11-09 21:54:32','2017-11-09 21:54:32'),
	(4,'delete-users','Delete Users','Delete Users','2017-11-09 21:54:32','2017-11-09 21:54:32'),
	(5,'create-acl','Create Acl','Create Acl','2017-11-09 21:54:32','2017-11-09 21:54:32'),
	(6,'read-acl','Read Acl','Read Acl','2017-11-09 21:54:32','2017-11-09 21:54:32'),
	(7,'update-acl','Update Acl','Update Acl','2017-11-09 21:54:32','2017-11-09 21:54:32'),
	(8,'delete-acl','Delete Acl','Delete Acl','2017-11-09 21:54:32','2017-11-09 21:54:32'),
	(9,'read-profile','Read Profile','Read Profile','2017-11-09 21:54:32','2017-11-09 21:54:32'),
	(10,'update-profile','Update Profile','Update Profile','2017-11-09 21:54:32','2017-11-09 21:54:32');

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
	(1,'superadministrator','Superadministrator','Superadministrator','2017-11-09 21:54:32','2017-11-09 21:54:32'),
	(2,'administrator','Administrator','Administrator','2017-11-09 21:54:32','2017-11-09 21:54:32'),
	(3,'editor','Editor','Editor','2017-11-09 21:54:32','2017-11-09 21:54:32'),
	(4,'author','Author','Author','2017-11-09 21:54:32','2017-11-09 21:54:32'),
	(5,'contributor','Contributor','Contributor','2017-11-09 21:54:32','2017-11-09 21:54:32'),
	(6,'supporter','Supporter','Supporter','2017-11-09 21:54:33','2017-11-09 21:54:33'),
	(7,'subscriber','Subscriber','Subscriber','2017-11-09 21:54:33','2017-11-09 21:54:33');

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
	(1,'Alen Huang','superadministrator@app.com','$2y$10$N/EHmUmMKT7lnWCjVxpvBuyHZdLLsClzk9.Ea9qz.ip4t0KPWU.Gu','0lwGyKKCfOS8dPP6mLDJIbRvKQdNWTxsMQUJrm2jx6dyghBY5sc3zG8u0ge6','2017-11-09 21:54:32','2017-11-09 21:56:36'),
	(2,'Administrator','administrator@app.com','$2y$10$Vr.etJloa0ZPfaO5JJVnF.KOglyd0E77NKN699zq8/Z67AiWRrKZm',NULL,'2017-11-09 21:54:32','2017-11-09 21:54:32'),
	(3,'Editor','editor@app.com','$2y$10$czDETt1b8QyAWGTNPP7WrOsxOFkw/xl.ofT4XT4kt68DWgCVF7a7G',NULL,'2017-11-09 21:54:32','2017-11-09 21:54:32'),
	(4,'Author','author@app.com','$2y$10$vK9SKvNKrcTEf9K9fCxcJu6oPyTL0YSTrXJoq73rXGoK0F4wkJkTm',NULL,'2017-11-09 21:54:32','2017-11-09 21:54:32'),
	(5,'Contributor','contributor@app.com','$2y$10$8HjOnL4WZyoxdG6JyRYx9uJoG9rkJJIZTnpNMaT2f1lOtO8lQCR7.',NULL,'2017-11-09 21:54:33','2017-11-09 21:54:33'),
	(6,'Supporter','supporter@app.com','$2y$10$Xj0JoyKCWRuVn5CjEsdSjOwadW9aZOWBRDPWUIHtJb6qnf2bPZQC.',NULL,'2017-11-09 21:54:33','2017-11-09 21:54:33'),
	(7,'Alen Huang','subscriber@app.com','$2y$10$wbqXtt./aCpFZa9aodx.9e/YIh2ddqQqr1gv1y.IsnUJZ1GDpzoNy',NULL,'2017-11-09 21:54:33','2017-11-09 21:55:28');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table works
# ------------------------------------------------------------

DROP TABLE IF EXISTS `works`;

CREATE TABLE `works` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slogan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_location` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `land_plan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `land_size` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `households` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unit_area` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `public_ratio` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tall` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `completion_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `confirmed` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
