-- MySQL dump 10.13  Distrib 5.1.73, for Win64 (unknown)
--
-- Host: localhost    Database: dashboard
-- ------------------------------------------------------
-- Server version	5.1.73-community

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
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admins` (
  `id` int(10) DEFAULT NULL,
  `aname` varchar(100) DEFAULT NULL,
  `apassword` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admins`
--

LOCK TABLES `admins` WRITE;
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `attendence`
--

DROP TABLE IF EXISTS `attendence`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `attendence` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(10) DEFAULT NULL,
  `uname` varchar(100) DEFAULT NULL,
  `udate` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `attendence`
--

LOCK TABLES `attendence` WRITE;
/*!40000 ALTER TABLE `attendence` DISABLE KEYS */;
INSERT INTO `attendence` VALUES (1,12345,'Daksh','2017-06-05'),(2,12345,'Daksh','2017-11-26'),(3,1234,'Daksh','2017-11-26'),(4,1248,'Rajat','2017-11-26'),(5,1234,'Daksh','2017-11-27'),(6,1248,'Rajat','2017-11-27'),(7,4321,'Nitin','2017-11-27'),(8,1248,'Rajat','2017-12-17'),(9,1234,'Daksh','2017-12-17');
/*!40000 ALTER TABLE `attendence` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employee_details`
--

DROP TABLE IF EXISTS `employee_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `employee_details` (
  `id` int(10) DEFAULT NULL,
  `uid` int(10) DEFAULT NULL,
  `uname` varchar(100) DEFAULT NULL,
  `upassword` varchar(100) DEFAULT NULL,
  `uip` varchar(100) DEFAULT NULL,
  `uemail` varchar(100) DEFAULT NULL,
  `uphone` bigint(20) DEFAULT NULL,
  `ubirth` date DEFAULT NULL,
  `ujoin` date DEFAULT NULL,
  `ucv` blob,
  `uaddress` varchar(500) DEFAULT NULL,
  `role` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employee_details`
--

LOCK TABLES `employee_details` WRITE;
/*!40000 ALTER TABLE `employee_details` DISABLE KEYS */;
INSERT INTO `employee_details` VALUES (NULL,1234,'Daksh','daksh',NULL,'daksh@daksh.com',8005953454,NULL,NULL,NULL,'Jaipur','emp'),(NULL,1248,'Rajat','rajat',NULL,'rajat@rajat.com',NULL,NULL,NULL,NULL,NULL,'admin'),(NULL,4321,'Nitin','nitin',NULL,'nitin@nitin.com',9098890987,'2017-05-24','2017-11-28',NULL,'kolhapur','emp');
/*!40000 ALTER TABLE `employee_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employee_leaves`
--

DROP TABLE IF EXISTS `employee_leaves`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `employee_leaves` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(10) DEFAULT NULL,
  `uname` varchar(100) DEFAULT NULL,
  `sdate` date DEFAULT NULL,
  `edate` date DEFAULT NULL,
  `days` int(11) DEFAULT NULL,
  `reason` varchar(500) DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employee_leaves`
--

LOCK TABLES `employee_leaves` WRITE;
/*!40000 ALTER TABLE `employee_leaves` DISABLE KEYS */;
INSERT INTO `employee_leaves` VALUES (1,1234,'Daksh','2017-11-15','2017-11-16',NULL,'Sick','Dispproved'),(2,1234,'Daksh','2017-11-30','2017-12-02',NULL,'Own Marriage','Pending'),(3,4321,'Nitin','2017-11-29','2017-11-29',NULL,'Birthday Aniversary ','Pending');
/*!40000 ALTER TABLE `employee_leaves` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employee_salary`
--

DROP TABLE IF EXISTS `employee_salary`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `employee_salary` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(10) DEFAULT NULL,
  `uname` varchar(100) DEFAULT NULL,
  `usalary` int(11) DEFAULT NULL,
  `month` varchar(50) DEFAULT NULL,
  `utds` int(11) DEFAULT NULL,
  `usalhand` int(11) DEFAULT NULL,
  `uhra` int(11) DEFAULT NULL,
  `upf` int(11) DEFAULT NULL,
  `uesi` int(11) DEFAULT NULL,
  `yr` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employee_salary`
--

LOCK TABLES `employee_salary` WRITE;
/*!40000 ALTER TABLE `employee_salary` DISABLE KEYS */;
INSERT INTO `employee_salary` VALUES (1,122,NULL,234255,'june',4685,229570,NULL,NULL,NULL,NULL),(2,121,NULL,30000,'april',600,29400,NULL,NULL,NULL,NULL),(3,12345,NULL,20000,'january',400,22234,5334,2400,300,NULL),(4,1234,NULL,30000,'january',600,33501,8001,3600,300,2010),(5,1234,NULL,32000,'march',640,35754,8534,3840,300,2010);
/*!40000 ALTER TABLE `employee_salary` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `events` (
  `udate` date DEFAULT NULL,
  `event_name` varchar(200) DEFAULT NULL,
  `event_details` varchar(2000) DEFAULT NULL,
  `status` int(10) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `events`
--

LOCK TABLES `events` WRITE;
/*!40000 ALTER TABLE `events` DISABLE KEYS */;
INSERT INTO `events` VALUES ('2017-11-30','Dance Competition ','Contact For Info',1,1),('2017-11-28','Paint It Red','Show Your Sketching Skills',1,2),('2017-12-01','Plant Trees','Contact For Info',1,3);
/*!40000 ALTER TABLE `events` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `job_requests`
--

DROP TABLE IF EXISTS `job_requests`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `job_requests` (
  `id` int(10) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `ucv` blob,
  `phone` int(11) DEFAULT NULL,
  `job_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `job_requests`
--

LOCK TABLES `job_requests` WRITE;
/*!40000 ALTER TABLE `job_requests` DISABLE KEYS */;
/*!40000 ALTER TABLE `job_requests` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notice`
--

DROP TABLE IF EXISTS `notice`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `notice` (
  `id` int(10) DEFAULT NULL,
  `udate` date DEFAULT NULL,
  `unotice` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notice`
--

LOCK TABLES `notice` WRITE;
/*!40000 ALTER TABLE `notice` DISABLE KEYS */;
INSERT INTO `notice` VALUES (NULL,'2017-11-25','Participation in tree planting event is must.'),(NULL,'2017-11-17','Rules of company updated.Check Now');
/*!40000 ALTER TABLE `notice` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `policies`
--

DROP TABLE IF EXISTS `policies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `policies` (
  `policy` varchar(2000) DEFAULT NULL,
  `udate` date DEFAULT NULL,
  `uname` varchar(40) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `policies`
--

LOCK TABLES `policies` WRITE;
/*!40000 ALTER TABLE `policies` DISABLE KEYS */;
INSERT INTO `policies` VALUES ('Details are here','2017-10-31','New Policies',1),('Check your email for more info.','2017-11-22','Attendance and Time Off',4),('Check your email for more info.','2017-11-20','Substance Abuse',5);
/*!40000 ALTER TABLE `policies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `pLike` int(11) NOT NULL,
  `pDislike` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` VALUES (1,'This',21,15);
/*!40000 ALTER TABLE `product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `project_process`
--

DROP TABLE IF EXISTS `project_process`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `project_process` (
  `id` int(10) DEFAULT NULL,
  `p_name` varchar(100) DEFAULT NULL,
  `uid` int(10) DEFAULT NULL,
  `uname` varchar(100) DEFAULT NULL,
  `ufile` blob,
  `udate` date DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `ewhr` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `project_process`
--

LOCK TABLES `project_process` WRITE;
/*!40000 ALTER TABLE `project_process` DISABLE KEYS */;
INSERT INTO `project_process` VALUES (NULL,'Demo',1234,NULL,NULL,'2017-11-27',NULL,2),(NULL,'Demo',1234,NULL,NULL,'2017-11-27',NULL,3),(NULL,'E commerce Site ',1234,NULL,NULL,'2017-11-27',NULL,1),(NULL,'E commerce Site ',4321,NULL,NULL,'2017-11-27',NULL,5),(NULL,'Demo',4321,NULL,NULL,'2017-11-27',NULL,2);
/*!40000 ALTER TABLE `project_process` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `project_status`
--

DROP TABLE IF EXISTS `project_status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `project_status` (
  `p_name` varchar(100) DEFAULT NULL,
  `p_desc` varchar(1000) DEFAULT NULL,
  `last_date` date DEFAULT NULL,
  `project_process` int(11) DEFAULT NULL,
  `working_emp` varchar(1000) DEFAULT NULL,
  `added` date DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `whr` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `project_status`
--

LOCK TABLES `project_status` WRITE;
/*!40000 ALTER TABLE `project_status` DISABLE KEYS */;
INSERT INTO `project_status` VALUES ('Demo',NULL,'2017-11-30',23,'1234,4321',NULL,1,30,0),('E commerce Site ',NULL,'2017-12-15',94,'1234,4321',NULL,2,100,0);
/*!40000 ALTER TABLE `project_status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `resources`
--

DROP TABLE IF EXISTS `resources`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `resources` (
  `id` int(10) DEFAULT NULL,
  `job_post` varchar(100) DEFAULT NULL,
  `job_desc` varchar(1000) DEFAULT NULL,
  `job_salary` int(11) DEFAULT NULL,
  `job_count` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `resources`
--

LOCK TABLES `resources` WRITE;
/*!40000 ALTER TABLE `resources` DISABLE KEYS */;
/*!40000 ALTER TABLE `resources` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shared`
--

DROP TABLE IF EXISTS `shared`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shared` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(100) DEFAULT NULL,
  `uid` int(10) DEFAULT NULL,
  `ufile` blob,
  `ucontent` varchar(1000) DEFAULT NULL,
  `udate` date DEFAULT NULL,
  `ulike` int(11) DEFAULT NULL,
  `udislike` int(11) DEFAULT NULL,
  `time` varchar(30) DEFAULT NULL,
  `title` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shared`
--

LOCK TABLES `shared` WRITE;
/*!40000 ALTER TABLE `shared` DISABLE KEYS */;
INSERT INTO `shared` VALUES (1,'Daksh',1234,NULL,'Nowadays AI gone too far but our company lack behind in this field. So we should start working on it.','2017-11-27',1,0,'05:00:37am','AI using Python'),(2,'Nitin',4321,NULL,'Both billionaires share their opinion on future of AI.','2017-11-27',1,0,'05:23:23am','Fight between Mark and Elon');
/*!40000 ALTER TABLE `shared` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `suggestion`
--

DROP TABLE IF EXISTS `suggestion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `suggestion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(100) DEFAULT NULL,
  `uid` int(10) DEFAULT NULL,
  `usuggestion` varchar(1000) DEFAULT NULL,
  `ulike` int(11) DEFAULT NULL,
  `udislike` int(11) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `udate` date DEFAULT NULL,
  `time` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `suggestion`
--

LOCK TABLES `suggestion` WRITE;
/*!40000 ALTER TABLE `suggestion` DISABLE KEYS */;
INSERT INTO `suggestion` VALUES (1,'Daksh',1234,'I think because of increasing winter timing of company should be changed.',1,0,'Company Time Off','2017-11-27','05:04:26am');
/*!40000 ALTER TABLE `suggestion` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-12-20 20:37:23
