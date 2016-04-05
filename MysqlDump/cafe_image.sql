CREATE DATABASE  IF NOT EXISTS `cafe` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `cafe`;
-- MySQL dump 10.13  Distrib 5.6.17, for Win32 (x86)
--
-- Host: 127.0.0.1    Database: cafe
-- ------------------------------------------------------
-- Server version	5.7.9

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
-- Table structure for table `image`
--

DROP TABLE IF EXISTS `image`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `image` (
  `img_id` varchar(3) CHARACTER SET utf8 NOT NULL,
  `cust_id` varchar(3) CHARACTER SET utf8 DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `sub_title` varchar(100) DEFAULT NULL,
  `description` varchar(5000) CHARACTER SET utf8 NOT NULL DEFAULT 's',
  `upload_date` datetime NOT NULL,
  `img_name` varchar(25) NOT NULL DEFAULT 'img',
  `img_type` varchar(25) NOT NULL DEFAULT '.jpg',
  `img_dimension` varchar(25) NOT NULL DEFAULT '0',
  `img_category` char(10) DEFAULT 'items',
  PRIMARY KEY (`img_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `image`
--

LOCK TABLES `image` WRITE;
/*!40000 ALTER TABLE `image` DISABLE KEYS */;
INSERT INTO `image` VALUES ('IM1','CLT','Crispy bagels','Buy 1 get 1 free!!!','<p style=\"text-align: center;\"><span style=\"color:#EE82EE\"><span style=\"font-family:comic sans ms,cursive\"><u><em>this is </em></u></span></span></p><br />\r\n<br />\r\n<p style=\"text-align: center;\"><span style=\"color:#EE82EE\"><span style=\"font-family:comic sans ms,cursive\"><u><em>a </em></u></span></span></p><br />\r\n<br />\r\n<p style=\"text-align: center;\"><span style=\"color:#EE82EE\"><span style=\"font-family:comic sans ms,cursive\"><u><em>multiline para </em></u></span></span></p><br />\r\n<br />\r\n<p style=\"text-align: center;\"><span style=\"color:#EE82EE\"><span style=\"font-family:comic sans ms,cursive\"><u><em>and </em></u></span></span></p><br />\r\n<br />\r\n<p style=\"text-align: center;\"><span style=\"color:#EE82EE\"><span style=\"font-family:comic sans ms,cursive\"><u><em>now is </em></u></span></span></p><br />\r\n<br />\r\n<p style=\"text-align: center;\"><span style=\"color:#EE82EE\"><span style=\"font-family:comic sans ms,cursive\"><u><em>the moment</em></u></span></span></p><br />\r\n<br />\r\n<p style=\"text-align: center;\"><span style=\"color:#EE82EE\"><span style=\"font-family:comic sans ms,cursive\"><u><em>of test.</em></u></span></span></p><br />\r\n','2016-04-05 19:34:32','payment.jpg','image/jpeg','width=\"1116\" height=\"477\"','daily'),('IM2','CLT','Crispy bagels','Buy 1 get 1 free!!!','<p style=\"text-align: center;\"><span style=\"color:#EE82EE\"><span style=\"font-family:comic sans ms,cursive\"><u><em>this is </em></u></span></span></p><br />\r\n<br />\r\n<p style=\"text-align: center;\"><span style=\"color:#EE82EE\"><span style=\"font-family:comic sans ms,cursive\"><u><em>a </em></u></span></span></p><br />\r\n<br />\r\n<p style=\"text-align: center;\"><span style=\"color:#EE82EE\"><span style=\"font-family:comic sans ms,cursive\"><u><em>multiline para </em></u></span></span></p><br />\r\n<br />\r\n<p style=\"text-align: center;\"><span style=\"color:#EE82EE\"><span style=\"font-family:comic sans ms,cursive\"><u><em>and </em></u></span></span></p><br />\r\n<br />\r\n<p style=\"text-align: center;\"><span style=\"color:#EE82EE\"><span style=\"font-family:comic sans ms,cursive\"><u><em>now is </em></u></span></span></p><br />\r\n<br />\r\n<p style=\"text-align: center;\"><span style=\"color:#EE82EE\"><span style=\"font-family:comic sans ms,cursive\"><u><em>the moment</em></u></span></span></p><br />\r\n<br />\r\n<p style=\"text-align: center;\"><span style=\"color:#EE82EE\"><span style=\"font-family:comic sans ms,cursive\"><u><em>of test.</em></u></span></span></p><br />\r\n','2016-04-05 19:34:32','Capture.JPG','image/jpeg','width=\"434\" height=\"147\"','daily');
/*!40000 ALTER TABLE `image` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-04-05 19:46:54
