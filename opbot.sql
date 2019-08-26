-- MySQL dump 10.13  Distrib 5.7.19, for Linux (x86_64)
--
-- Host: localhost    Database: operationbot
-- ------------------------------------------------------
-- Server version	5.7.19-0ubuntu0.17.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `destinations`
--

DROP TABLE IF EXISTS `destinations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `destinations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `destinations`
--

LOCK TABLES `destinations` WRITE;
/*!40000 ALTER TABLE `destinations` DISABLE KEYS */;
INSERT INTO `destinations` VALUES (1,'RR',NULL,NULL),(2,'Counselor',NULL,NULL),(3,'Front',NULL,NULL),(4,'Nurse',NULL,NULL),(5,'Discipline',NULL,NULL);
/*!40000 ALTER TABLE `destinations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=78 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (72,'2014_10_12_000000_create_users_table',1),(73,'2014_10_12_100000_create_password_resets_table',1),(74,'2017_08_18_203903_create_students_table',1),(75,'2017_08_18_203946_create_passes_table',1),(76,'2017_08_24_132903_create_tardies_table',1),(77,'2017_08_29_234405_create_destinations_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `passes`
--

DROP TABLE IF EXISTS `passes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `passes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `student_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `destination_id` int(11) NOT NULL,
  `out_time` datetime NOT NULL,
  `in_time` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `passes_student_id_foreign` (`student_id`),
  KEY `passes_user_id_foreign` (`user_id`),
  CONSTRAINT `passes_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`),
  CONSTRAINT `passes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `passes`
--

LOCK TABLES `passes` WRITE;
/*!40000 ALTER TABLE `passes` DISABLE KEYS */;
INSERT INTO `passes` VALUES (1,5,4,1,'2017-08-07 04:52:10','2017-08-07 05:00:07','2017-08-30 02:20:39','2017-08-30 02:20:39'),(2,11,6,1,'2017-08-26 10:17:26','2017-08-26 10:22:21','2017-08-30 02:20:39','2017-08-30 02:20:39'),(3,3,5,3,'2017-08-24 10:27:05','2017-08-24 10:28:25','2017-08-30 02:20:39','2017-08-30 02:20:39'),(4,8,6,1,'2017-08-01 01:24:36','2017-08-01 01:28:36','2017-08-30 02:20:39','2017-08-30 02:20:39'),(5,11,3,2,'2017-08-15 21:57:58','2017-08-15 22:04:17','2017-08-30 02:20:39','2017-08-30 02:20:39'),(6,7,1,2,'2017-08-05 05:12:55','2017-08-05 05:17:14','2017-08-30 02:20:39','2017-08-30 02:20:39'),(7,5,1,1,'2017-08-20 04:02:05','2017-08-20 04:09:50','2017-08-30 02:20:39','2017-08-30 02:20:39'),(8,4,5,4,'2017-08-12 21:53:59','2017-08-12 22:01:51','2017-08-30 02:20:39','2017-08-30 02:20:39'),(9,4,3,4,'2017-08-13 07:57:53','2017-08-13 07:58:34','2017-08-30 02:20:39','2017-08-30 02:20:39'),(10,4,5,5,'2017-08-24 08:15:27','2017-08-24 08:20:30','2017-08-30 02:20:39','2017-08-30 02:20:39'),(11,10,2,5,'2017-08-05 23:27:20','2017-08-05 23:34:52','2017-08-30 02:20:39','2017-08-30 02:20:39'),(12,11,4,1,'2017-08-02 17:10:23','2017-08-02 17:14:26','2017-08-30 02:20:39','2017-08-30 02:20:39'),(13,3,1,1,'2017-08-13 02:02:41','2017-08-13 02:07:18','2017-08-30 02:20:39','2017-08-30 02:20:39'),(14,5,6,3,'2017-08-09 10:51:21','2017-08-09 11:01:12','2017-08-30 02:20:40','2017-08-30 02:20:40'),(15,4,5,3,'2017-08-18 03:20:15','2017-08-18 03:22:59','2017-08-30 02:20:40','2017-08-30 02:20:40'),(16,1,2,4,'2017-07-30 23:57:59','2017-07-31 00:02:01','2017-08-30 02:20:40','2017-08-30 02:20:40'),(17,10,4,1,'2017-08-02 11:39:34','2017-08-02 11:41:37','2017-08-30 02:20:40','2017-08-30 02:20:40'),(18,4,2,2,'2017-08-17 11:32:54','2017-08-17 11:38:02','2017-08-30 02:20:40','2017-08-30 02:20:40'),(19,2,2,5,'2017-08-13 13:39:51','2017-08-13 13:48:15','2017-08-30 02:20:40','2017-08-30 02:20:40'),(20,11,1,5,'2017-08-11 22:19:45','2017-08-11 22:28:59','2017-08-30 02:20:40','2017-08-30 02:20:40');
/*!40000 ALTER TABLE `passes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `students` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `school_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grade` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `students`
--

LOCK TABLES `students` WRITE;
/*!40000 ALTER TABLE `students` DISABLE KEYS */;
INSERT INTO `students` VALUES (1,'1234','Demo','Student',9,NULL,NULL),(2,'31814','Marcus','Renner',11,'2017-08-30 02:20:39','2017-08-30 02:20:39'),(3,'35990','Brisa','Paucek',10,'2017-08-30 02:20:39','2017-08-30 02:20:39'),(4,'68326','Bernardo','Raynor',12,'2017-08-30 02:20:39','2017-08-30 02:20:39'),(5,'82375','Kelly','Nienow',9,'2017-08-30 02:20:39','2017-08-30 02:20:39'),(6,'92874','Janis','Swift',12,'2017-08-30 02:20:39','2017-08-30 02:20:39'),(7,'49679','Laurence','Ledner',10,'2017-08-30 02:20:39','2017-08-30 02:20:39'),(8,'13100','Desiree','Feest',9,'2017-08-30 02:20:39','2017-08-30 02:20:39'),(9,'24847','Marion','Gislason',11,'2017-08-30 02:20:39','2017-08-30 02:20:39'),(10,'13585','Annabell','Spencer',11,'2017-08-30 02:20:39','2017-08-30 02:20:39'),(11,'63216','Rhea','Homenick',11,'2017-08-30 02:20:39','2017-08-30 02:20:39');
/*!40000 ALTER TABLE `students` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tardies`
--

DROP TABLE IF EXISTS `tardies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tardies` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `student_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `time` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tardies_student_id_foreign` (`student_id`),
  KEY `tardies_user_id_foreign` (`user_id`),
  CONSTRAINT `tardies_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`),
  CONSTRAINT `tardies_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tardies`
--

LOCK TABLES `tardies` WRITE;
/*!40000 ALTER TABLE `tardies` DISABLE KEYS */;
INSERT INTO `tardies` VALUES (1,9,2,'2017-08-23 11:23:46','2017-08-30 02:20:40','2017-08-30 02:20:40'),(2,4,6,'2017-08-14 23:03:13','2017-08-30 02:20:40','2017-08-30 02:20:40'),(3,5,5,'2017-08-17 07:16:08','2017-08-30 02:20:40','2017-08-30 02:20:40'),(4,1,1,'2017-08-14 12:36:48','2017-08-30 02:20:40','2017-08-30 02:20:40'),(5,2,1,'2017-08-17 03:41:56','2017-08-30 02:20:40','2017-08-30 02:20:40'),(6,8,6,'2017-08-15 22:15:16','2017-08-30 02:20:40','2017-08-30 02:20:40'),(7,5,1,'2017-08-06 08:53:39','2017-08-30 02:20:40','2017-08-30 02:20:40'),(8,2,1,'2017-08-14 06:45:29','2017-08-30 02:20:40','2017-08-30 02:20:40'),(9,4,6,'2017-08-04 10:16:17','2017-08-30 02:20:40','2017-08-30 02:20:40'),(10,8,4,'2017-08-27 12:47:11','2017-08-30 02:20:40','2017-08-30 02:20:40'),(11,11,5,'2017-08-15 16:55:35','2017-08-30 02:20:40','2017-08-30 02:20:40'),(12,2,6,'2017-08-24 19:00:36','2017-08-30 02:20:40','2017-08-30 02:20:40'),(13,8,3,'2017-08-04 05:18:06','2017-08-30 02:20:40','2017-08-30 02:20:40'),(14,7,3,'2017-08-18 01:57:31','2017-08-30 02:20:40','2017-08-30 02:20:40'),(15,11,4,'2017-07-31 23:47:06','2017-08-30 02:20:40','2017-08-30 02:20:40'),(16,10,4,'2017-08-11 02:42:18','2017-08-30 02:20:40','2017-08-30 02:20:40'),(17,10,2,'2017-08-07 11:57:10','2017-08-30 02:20:40','2017-08-30 02:20:40'),(18,1,1,'2017-08-06 15:20:42','2017-08-30 02:20:40','2017-08-30 02:20:40'),(19,2,5,'2017-08-18 00:13:13','2017-08-30 02:20:40','2017-08-30 02:20:40'),(20,10,3,'2017-08-10 19:37:28','2017-08-30 02:20:40','2017-08-30 02:20:40');
/*!40000 ALTER TABLE `tardies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Raul','Mercado Jr','raulmercadojr@gmail.com','$2y$10$w2DkdJiEGIN8Iky4afAxT.7BwNX/9phq8XLlwRbfP4ChY5eAZvl2G',NULL,NULL,NULL),(2,'Ila','Goodwin','felix.champlin@example.net','$2y$10$Z//fKO46YgZmc5IUIMA.legX9g9GGPP7zL/lDcNBkOfztR7z6B/DC','RJJFFjpskn','2017-08-30 02:20:38','2017-08-30 02:20:38'),(3,'Karley','Schumm','dorothea93@example.org','$2y$10$Z//fKO46YgZmc5IUIMA.legX9g9GGPP7zL/lDcNBkOfztR7z6B/DC','VedcbVY8lN','2017-08-30 02:20:38','2017-08-30 02:20:38'),(4,'Janick','Altenwerth','camren.ernser@example.com','$2y$10$Z//fKO46YgZmc5IUIMA.legX9g9GGPP7zL/lDcNBkOfztR7z6B/DC','BdCrngox2Z','2017-08-30 02:20:38','2017-08-30 02:20:38'),(5,'Torrance','Mante','kieran49@example.org','$2y$10$Z//fKO46YgZmc5IUIMA.legX9g9GGPP7zL/lDcNBkOfztR7z6B/DC','N3XceE7Mo8','2017-08-30 02:20:39','2017-08-30 02:20:39'),(6,'Hilma','Donnelly','cathryn.berge@example.com','$2y$10$Z//fKO46YgZmc5IUIMA.legX9g9GGPP7zL/lDcNBkOfztR7z6B/DC','yjwDSABcGf','2017-08-30 02:20:39','2017-08-30 02:20:39');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-08-29 21:33:51
