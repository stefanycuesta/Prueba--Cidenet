-- MariaDB dump 10.19  Distrib 10.4.18-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: Necesidad
-- ------------------------------------------------------
-- Server version	10.4.18-MariaDB

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
-- Table structure for table `necesidad`
--

DROP TABLE IF EXISTS `necesidad`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `necesidad` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `PrimerApellido` varchar(20) NOT NULL,
  `SegundoApellido` varchar(20) NOT NULL,
  `PrimerNombre` varchar(20) NOT NULL,
  `OtroNombre` varchar(20) NOT NULL,
  `PaisDeEmpleo` varchar(20) NOT NULL,
  `TipoIdentificacion` varchar(20) NOT NULL,
  `NumeroIdentificacion` varchar(20) NOT NULL,
  `CorreoElectronico` varchar(300) NOT NULL,
  `FechaIngreso` date NOT NULL,
  `Area` varchar(20) NOT NULL,
  `Estado` varchar(20) NOT NULL,
  `FechaYHoraRegistro` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `necesidad`
--

LOCK TABLES `necesidad` WRITE;
/*!40000 ALTER TABLE `necesidad` DISABLE KEYS */;
INSERT INTO `necesidad` VALUES (11,'JSUSNL','KSLDLJI','KJMSLKSAA','KNNDJDL','','Cedula Ciudadania','17278','','2021-10-27','Administración','Activo','2021-10-27 23:42:25'),(12,'JSUSNL','KSLDLJI','KJMSLKSAA','KNNDJDL','','Cedula Ciudadania','17278','','2021-10-27','Administración','Activo','2021-10-27 23:43:03'),(13,'JSUSNL','KSLDLJI','KJMSLKSAA','KNNDJDL','','Cedula Ciudadania','17278','','2021-10-27','Administración','Activo','2021-10-27 23:43:44'),(14,'JSUSNL','KSLDLJI','KJMSLKSAA','KNNDJDL','','Cedula Ciudadania','17278','','2021-10-27','Administración','Activo','2021-10-27 23:45:54'),(15,'JSUSNL','KSLDLJI','KJMSLKSAA','KNNDJDL','','Cedula Ciudadania','17278','','2021-10-27','Administración','Activo','2021-10-27 23:48:40'),(16,'JSUSNL','KSLDLJI','KJMSLKSAA','KNNDJDL','','Cedula Ciudadania','17278','','2021-10-27','Administración','Activo','2021-10-27 23:49:54'),(17,'JSUSNL','KSLDLJI','KJMSLKSAA','KNNDJDL','','Cedula Ciudadania','17278','','2021-10-27','Administración','Activo','2021-10-27 23:50:14'),(18,'JSUSNL','KSLDLJI','KJMSLKSAA','KNNDJDL','','Cedula Ciudadania','17278','','2021-10-27','Administración','Activo','2021-10-27 23:50:56'),(19,'VALENCIA','SHSUD','KDSJDO','KSJDJO','','Cedula Ciudadania','17329298','','2021-10-27','Financiera','Activo','2021-10-27 23:55:34'),(20,'VALENCIA','SHSUD','KDSJDO','KSJDJO','','Cedula Ciudadania','17329298','','2021-10-27','Financiera','Activo','2021-10-27 23:56:33'),(21,'VALENCIA','SHSUD','KDSJDO','KSJDJO','','Cedula Ciudadania','17329298','','2021-10-27','Financiera','Activo','2021-10-27 23:57:02'),(22,'VALENCIA','SHSUD','KDSJDO','KSJDJO','','Cedula Ciudadania','17329298','','2021-10-27','Financiera','Activo','2021-10-27 23:57:22'),(23,'VELEZ','ERES','KDSJDO','KSJDJO','','Cedula Ciudadania','3423432423','','2021-10-27','Compras','Activo','2021-10-28 00:06:19'),(24,'VELEZ','SHSUD','SDFFJOIDJDIJ','LIJDIOSJODIJ','','','232','','0000-00-00','','Activo','2021-10-28 00:06:57'),(25,'VALENCIA','CUESTA','JULIAN','STEFANY','','','','','0000-00-00','Otra area','Activo','2021-10-28 00:07:34'),(26,'VALENCIA','CUESTA','JULIAN','STEFANY','','','','','0000-00-00','Otra area','Activo','2021-10-28 00:07:44'),(27,'VALENCIA','CUESTA','JULIAN','STEFANY','','','','','0000-00-00','Otra area','Activo','2021-10-28 00:08:24'),(28,'VALENCIA','CUESTA','JULIAN','STEFANY','','','1772839','','0000-00-00','Infraestructura','Activo','2021-10-28 00:08:48'),(29,'VALENCIA','CUESTA','JULIAN','STEFANY','','','1772839','','0000-00-00','Infraestructura','Activo','2021-10-28 00:09:23'),(30,'VALENCIA','CUESTA','JULIAN','STEFANY','','','1772839','','0000-00-00','Infraestructura','Activo','2021-10-28 00:09:44'),(31,'VALENCIA','CUESTA','JULIAN','STEFANY','','','1772839','','0000-00-00','Infraestructura','Activo','2021-10-28 00:09:51'),(32,'VALENCIA','CUESTA','JULIAN','STEFANY','','','1772839','','0000-00-00','Infraestructura','Activo','2021-10-28 00:12:47'),(33,'VALENCIA','CUESTA','JULIAN','STEFANY','','','1772839','','0000-00-00','Infraestructura','Activo','2021-10-28 00:16:25'),(34,'VALENCIA','CUESTA','JULIAN','STEFANY','','','1772839','','0000-00-00','Infraestructura','Activo','2021-10-28 00:17:14'),(35,'VALENCIA','CUESTA','JULIAN','STEFANY','','','1772839','','0000-00-00','Infraestructura','Activo','2021-10-28 00:18:13'),(36,'VALENCIA','CUESTA','JULIAN','STEFANY','','','','','0000-00-00','Otra area','Activo','2021-10-28 00:20:35'),(37,'VALENCIA','CUESTA','JULIAN','STEFANY','','','','','0000-00-00','Otra area','Activo','2021-10-28 00:22:13'),(38,'VALENCIA','CUESTA','JULIAN','STEFANY','','','','','0000-00-00','Otra area','Activo','2021-10-28 00:23:05'),(39,'VALENCIA','CUESTA','JULIAN','STEFANY','','','','','0000-00-00','Otra area','Activo','2021-10-28 00:26:16'),(40,'VALENCIA','CUESTA','JULIAN','STEFANY','','','','','0000-00-00','Otra area','Activo','2021-10-28 00:27:36'),(41,'VALENCIA','CUESTA','JULIAN','STEFANY','','','','','0000-00-00','Otra area','Activo','2021-10-28 00:29:15'),(42,'VALENCIA','CUESTA','JULIAN','STEFANY','','','','','0000-00-00','Otra area','Activo','2021-10-28 00:31:03'),(43,'VALENCIA','CUESTA','JULIAN','STEFANY','','','','','0000-00-00','Otra area','Activo','2021-10-28 00:32:11'),(44,'VALENCIA','CUESTA','JULIAN','STEFANY','','','','','0000-00-00','Otra area','Activo','2021-10-28 00:33:19'),(45,'VALENCIA','CUESTA','JULIAN','STEFANY','','','','','0000-00-00','Otra area','Activo','2021-10-28 00:35:22');
/*!40000 ALTER TABLE `necesidad` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-10-27 20:10:23
