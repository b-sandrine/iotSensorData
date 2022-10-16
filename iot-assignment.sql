-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: iot
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `data`
--

DROP TABLE IF EXISTS `data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `timestamps` datetime NOT NULL,
  `temperature` double(8,4) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data`
--

LOCK TABLES `data` WRITE;
/*!40000 ALTER TABLE `data` DISABLE KEYS */;
INSERT INTO `data` VALUES (1,'2022-10-10 18:44:58',34.0000),(2,'2022-10-10 18:47:09',25.0000);
/*!40000 ALTER TABLE `data` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sensor_records`
--

DROP TABLE IF EXISTS `sensor_records`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sensor_records` (
  `ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `Temperature` float NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `device` varchar(25) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sensor_records`
--

LOCK TABLES `sensor_records` WRITE;
/*!40000 ALTER TABLE `sensor_records` DISABLE KEYS */;
INSERT INTO `sensor_records` VALUES (10,15,'2022-10-15 06:51:22','DEVICE_004'),(11,35,'2022-10-15 06:51:22','DEVICE_005'),(12,8,'2022-10-15 06:52:27','DEVICE_006'),(13,45,'2022-10-15 06:52:27','DEVICE_007'),(14,27,'2022-10-15 06:52:27','DEVICE_008'),(15,5,'2022-10-15 07:20:39','DEVICE_009'),(16,39,'2022-10-15 07:21:11','DEVICE_010'),(17,24,'2022-10-15 07:45:08','DEVICE_011'),(18,54,'2022-10-15 07:45:31','DEVICE_012'),(19,5,'2022-10-15 08:41:57','DEVICE_013'),(20,60,'2022-10-15 08:45:42','DEVICE_014'),(21,55,'2022-10-15 08:52:38','DEVICE_015'),(22,47,'2022-10-15 08:53:46','DEVICE_016'),(23,40,'2022-10-15 08:54:57','DEVICE_017'),(24,37.8,'2022-10-15 09:05:25','postman');
/*!40000 ALTER TABLE `sensor_records` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-10-15 11:08:14
