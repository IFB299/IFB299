CREATE DATABASE  IF NOT EXISTS `IFB299` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `IFB299`;
-- MySQL dump 10.13  Distrib 5.6.24, for Win64 (x86_64)
--
-- Host: localhost    Database: IFB299
-- ------------------------------------------------------
-- Server version	5.5.44-0ubuntu0.14.04.1

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
-- Table structure for table `Contractors`
--

DROP TABLE IF EXISTS `Contractors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Contractors` (
  `contractorID` int(10) NOT NULL AUTO_INCREMENT,
  `businessName` varchar(45) NOT NULL,
  `street` varchar(45) NOT NULL,
  `suburb` varchar(45) NOT NULL,
  `state` char(3) NOT NULL,
  `postcode` varchar(4) NOT NULL,
  `contactName` varchar(45) NOT NULL,
  `phoneNumber` varchar(10) NOT NULL,
  `emailAddress` varchar(45) DEFAULT NULL,
  `notes` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`contractorID`),
  UNIQUE KEY `contractorID_UNIQUE` (`contractorID`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Contractors`
--

LOCK TABLES `Contractors` WRITE;
/*!40000 ALTER TABLE `Contractors` DISABLE KEYS */;
INSERT INTO `Contractors` VALUES (6,'Bobs Contractors','900 Wynnum Road','Cannon Hill ','QLD','4170','Bob Smith','0733333333','bob@bobscontractors.com.au','Open 7 days.'),(7,'adfdfdfdfdfd','dffdfdfdf','dfdfdfdddfdf','dfd','dfdd','dfdf','dfdfdffdfd','fdfddfdfdfd','fdfddfdfdfdfdfdfd'),(8,'Brisbane Electrical','55 William Street','Fortitude Valley','QLD','4173','John Jones','0736975555','john@brisbaneelectrical.com','High prices.'),(9,'asdfe33','lfjgkflgjl','dfdf','qld','6788','Bob Jones','8585758354','',''),(10,'a','s','d','dff','4444','as','0000000000','','');
/*!40000 ALTER TABLE `Contractors` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-09-04 22:10:36
