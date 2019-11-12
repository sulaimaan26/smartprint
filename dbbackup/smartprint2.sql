-- MySQL dump 10.13  Distrib 5.7.27, for Linux (x86_64)
--
-- Host: localhost    Database: smartprint
-- ------------------------------------------------------
-- Server version	5.7.27-0ubuntu0.18.04.1

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
-- Current Database: `id9176029_wp_67338d2c5f085409c702167e75f84a70`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `id9176029_wp_67338d2c5f085409c702167e75f84a70` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `id9176029_wp_67338d2c5f085409c702167e75f84a70`;

--
-- Table structure for table `store_detail`
--

DROP TABLE IF EXISTS `store_detail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `store_detail` (
  `storeid` int(11) NOT NULL AUTO_INCREMENT,
  `storename` varchar(255) DEFAULT NULL,
  `storelocation` varchar(255) DEFAULT NULL,
  `storeemail` varchar(255) DEFAULT NULL,
  `storenumber` bigint(20) DEFAULT NULL,
  `store_id` varchar(255) DEFAULT NULL,
  `qrcode_path` varchar(255) NOT NULL,
  `qrscan_count` int(11) DEFAULT NULL,
  PRIMARY KEY (`storeid`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `store_detail`
--

LOCK TABLES `store_detail` WRITE;
/*!40000 ALTER TABLE `store_detail` DISABLE KEYS */;
INSERT INTO `store_detail` VALUES (36,'kavitha dental care','chennai','kavitha@gmail.com',7299508683,'stA4jxTn4jhXc','./assets/storefiles/stA4jxTn4jhXc/qrcodes/stA4jxTn4jhXc.png',2),(37,'nikshay infotech','chennai','niksahy@gmail.com',9940306996,'stZikq3.D6guw','./assets/storefiles/stZikq3.D6guw/qrcodes/stZikq3.D6guw.png',0),(38,'shanthi xerox','kancheepuram','shanthi542@gmail.com',9788958227,'stgZVvPf4iLQo','./assets/storefiles/stgZVvPf4iLQo/qrcodes/stgZVvPf4iLQo.png',1);
/*!40000 ALTER TABLE `store_detail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `userdata`
--

DROP TABLE IF EXISTS `userdata`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `userdata` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `filename` varchar(255) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `userdata`
--

LOCK TABLES `userdata` WRITE;
/*!40000 ALTER TABLE `userdata` DISABLE KEYS */;
INSERT INTO `userdata` VALUES (1,'sulaimaan','ss/ss'),(2,'sulaimaan','sss'),(3,'sulaimaan',''),(4,'sulaimaan',''),(5,'sulaimaan',''),(6,'sulaimaan',''),(7,'sulaimaan','name'),(8,'sulaimaan','1572526427.jpg'),(9,'sulaimaan','1572526513741.jpg'),(10,'sulaimaan','15725265137411.jpg'),(11,'sulaimaan','15725265137412.jpg');
/*!40000 ALTER TABLE `userdata` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-11-12 16:26:18
