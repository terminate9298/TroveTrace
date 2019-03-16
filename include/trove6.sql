-- MySQL dump 10.13  Distrib 5.1.47, for redhat-linux-gnu (i386)
--
-- Host: localhost    Database: trovetrace
-- ------------------------------------------------------
-- Server version	5.1.47

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
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `u_id` int(12) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) COLLATE ascii_bin NOT NULL,
  `password` varchar(50) COLLATE ascii_bin NOT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=ascii COLLATE=ascii_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'administrator','74c7d3ed5ea799a03570696b5d1035ca2d765f70'),(2,'uttam','f10eedfe8957ca0ec8d1c628bea8837320136542');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `question`
--

DROP TABLE IF EXISTS `question`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `question` (
  `q_id` int(20) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) COLLATE ascii_bin DEFAULT NULL,
  `answer` varchar(100) COLLATE ascii_bin NOT NULL,
  `image_name` varchar(100) COLLATE ascii_bin DEFAULT NULL,
  `hint` varchar(500) COLLATE ascii_bin DEFAULT NULL,
  `attend_count` int(20) NOT NULL DEFAULT '0',
  `content` longtext CHARACTER SET utf8,
  PRIMARY KEY (`q_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=ascii COLLATE=ascii_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `question`
--

LOCK TABLES `question` WRITE;
/*!40000 ALTER TABLE `question` DISABLE KEYS */;
INSERT INTO `question` VALUES (1,'Curtains Down','aa647ce76bd8440685083e6942501d92ed32743b','no.jpg','',0,'<p>You reach the railway station - the nearest to your place - a few minutes before 10:30. A heavy rain is falling and you are forced to submit. The station is deserted, and a nearby sign informs you that the old building is scheduled to be demolished in a few weeks time. There have not been any trains here for months. Just as you prepare to accept that you have made some error, and start leaving, you catch a flash of light. Turning around, you see shorter flash issue from behind the curtained windows of the traveller house building. \r\n<p>Flashes are in some pattern, there are long flashes and short flashes.\r\n<p>You start noting them; you noted big flashes as L and small flashes as S.\r\n<p>SSS  S  SL  SLS  LSLS  SSSS  SSLS  LLL  SLS  L  SSSS  S  SLS  S  LSS  SLLS  LLL  SLS  SSS  LSLS  SSSS  S  LSLS  SL  SLS  LS  S  SL  SLS  LSSS  LSLL\r\n\r\n<br>\r\n<p>\"search for the red Porsche car nearby\"\r\n<p>\r\nThen the flashes end.\r\n');
/*!40000 ALTER TABLE `question` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `registration`
--

DROP TABLE IF EXISTS `registration`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `registration` (
  `s_no` int(20) NOT NULL AUTO_INCREMENT,
  `player1` varchar(50) COLLATE ascii_bin NOT NULL,
  `sex` varchar(10) COLLATE ascii_bin NOT NULL,
  `username` varchar(20) COLLATE ascii_bin NOT NULL,
  `password` varchar(50) COLLATE ascii_bin NOT NULL,
  `contact` varchar(20) COLLATE ascii_bin NOT NULL,
  `email` varchar(100) COLLATE ascii_bin NOT NULL,
  `institute` varchar(150) COLLATE ascii_bin NOT NULL,
  `address` varchar(200) COLLATE ascii_bin DEFAULT NULL,
  `description` varchar(200) COLLATE ascii_bin DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `current_login` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`s_no`),
  UNIQUE KEY `username` (`username`,`email`)
) ENGINE=InnoDB AUTO_INCREMENT=240 DEFAULT CHARSET=ascii COLLATE=ascii_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `registration`
--

LOCK TABLES `registration` WRITE;
/*!40000 ALTER TABLE `registration` DISABLE KEYS */;
INSERT INTO `registration` VALUES (229,'Purushottam Kushwaha','male','purushottam','6a78848192879b82501373d066bef9442155c724','9407204628','purushottamkushwaha@gmail.com','ABV-Indian Institute of Information Technology & Management Gwalior','BH 3 Room no 233',NULL,0,1),(230,'udit','male','uditkr','bfff2dd4f1b310eb0dbf593bd83f94dd8d34077e','7828929899','yudi_strange@rediffmail.com','ABV-Indian Institute of Information Technology & Management Gwalior','room no 170\r\nbh1\r\nabv iiitm gwalior',NULL,0,1),(231,'sagar bhatia','male','saggy1','7c4a8d09ca3762af61e59520943dc26494f8941b','7489135984','saggy22108906@gmail.com','ABV-Indian Institute of Information Technology & Management Gwalior','',NULL,0,1),(232,'samarth manish','male','samarth','28601e9caac217f50123ba358f2921958750d716','9993652339','samarth37@gmail.com','ABV-IIITM Gwalior','',NULL,0,1),(233,'Ashutosh Gautam','male','ashutosh','222dbfa18b1b550a9e1ecc3199f6422dbcc54f0d','9691980336','ashutoshiiitm19@gmail.com','ABV-Indian Institute of Information Technology & Management Gwalior','boys hostel-3,\r\nmorena link road,\r\nABV-IIITM,Gwalior(M.P.)',NULL,0,1),(234,'Ati Goyal','female','atigoyal','f8e5c1e98faea40322fa7bf32a1510e957fb1096','9039107570','goyalati@gmail.com','ABV-IIITM Gwalior','',NULL,0,1),(235,'rahul','male','rahulgodha','06e0095ed19813ab1be6cbd29ec12fa1fbf10f07','9589393086','rahul5971@gmail.com','IIITM Gwalior','',NULL,0,0),(236,'Yogesh Kumar','male','yogi0767','768169a10b0cc5fa6b2f9898bf2dd842b1daccfb','9407227265','yogeshkumar0767@gmail.com','IIITM Gwalior','',NULL,0,1),(237,'Jakta Murmu','male','Sutraiiitm','258316ddc1de3a416226018c35a0d73a67416024','8109925760','jackiiitm2008@gmail.com','ABV-IIITM Gwalior','ABV-IIITM ,GWALIOR',NULL,0,1),(238,'prarabdha','female','defaults','a1c9c5c8b2f7f150679c1872c491c7704fe50bc2','9179543642','surprisepackagepn@gmail.com','IIITM Gwalior','',NULL,0,1),(239,'Deepesh','female','Deepesh','49c0860f94e8ffab24d8c192957821ff0e8dc5fa','7879341036','deepeshdagar@gmail.com','ABV-Indian Institute of Information Technology & Management Gwalior','khetri nagar, dist. jhunjhunu, rajasthan',NULL,0,0);
/*!40000 ALTER TABLE `registration` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `result`
--

DROP TABLE IF EXISTS `result`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `result` (
  `username` varchar(50) COLLATE ascii_bin NOT NULL,
  `institute` varchar(50) COLLATE ascii_bin DEFAULT NULL,
  `marks` int(50) DEFAULT NULL,
  `rank` int(20) DEFAULT NULL,
  `q_id` int(20) NOT NULL DEFAULT '1',
  `time_taken` int(30) DEFAULT NULL,
  PRIMARY KEY (`username`),
  CONSTRAINT `user_ibfk_1` FOREIGN KEY (`username`) REFERENCES `registration` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=ascii COLLATE=ascii_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `result`
--

LOCK TABLES `result` WRITE;
/*!40000 ALTER TABLE `result` DISABLE KEYS */;
INSERT INTO `result` VALUES ('Deepesh','ABV-Indian Institute of Information Technology & M',NULL,NULL,1,0),('Sutraiiitm','ABV-IIITM Gwalior',NULL,NULL,1,0),('ashutosh','ABV-Indian Institute of Information Technology & M',NULL,NULL,1,0),('atigoyal','ABV-IIITM Gwalior',NULL,NULL,1,0),('defaults','IIITM Gwalior',NULL,NULL,1,0),('purushottam','ABV-Indian Institute of Information Technology & M',NULL,NULL,1,0),('rahulgodha','IIITM Gwalior',NULL,NULL,1,0),('saggy1','ABV-Indian Institute of Information Technology & M',NULL,NULL,1,0),('samarth','ABV-IIITM Gwalior',NULL,NULL,1,0),('uditkr','ABV-Indian Institute of Information Technology & M',NULL,NULL,1,0),('yogi0767','IIITM Gwalior',NULL,NULL,1,0);
/*!40000 ALTER TABLE `result` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2010-10-22  1:18:46
