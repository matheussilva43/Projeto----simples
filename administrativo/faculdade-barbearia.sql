CREATE DATABASE  IF NOT EXISTS `barbearia` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `barbearia`;
-- MySQL dump 10.13  Distrib 5.7.9, for Win64 (x86_64)
--
-- Host: localhost    Database: barbearia
-- ------------------------------------------------------
-- Server version	5.7.14

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
-- Table structure for table `agendar`
--

DROP TABLE IF EXISTS `agendar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `agendar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `data` date DEFAULT NULL,
  `horario` time DEFAULT NULL,
  `servico` varchar(255) DEFAULT NULL,
  `corte` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `agendar`
--

LOCK TABLES `agendar` WRITE;
/*!40000 ALTER TABLE `agendar` DISABLE KEYS */;
INSERT INTO `agendar` VALUES (1,'2016-11-16','14:00:00','cabelo adulto c/ matheus','DREAD AFRO'),(2,'2016-11-18','15:30:00','cabelo adulto c/ lazaro','DREAD AFRO'),(3,'2016-11-17','08:30:00','cabelo e barba c/ josivan','DREAD AFRO'),(4,'2016-11-18','14:00:00','cabelo adulto c/ lazaro','DREAD AFRO'),(5,'2016-11-20','08:30:00','cabelo adulto c/ matheus','DREAD AFRO');
/*!40000 ALTER TABLE `agendar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nivel_acessos`
--

DROP TABLE IF EXISTS `nivel_acessos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nivel_acessos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome_nivel` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nivel_acessos`
--

LOCK TABLES `nivel_acessos` WRITE;
/*!40000 ALTER TABLE `nivel_acessos` DISABLE KEYS */;
INSERT INTO `nivel_acessos` VALUES (1,'administrador','2016-11-15 00:00:00','2016-11-15 00:00:00'),(2,'usuario','2016-11-15 00:00:00','2016-11-15 00:00:00');
/*!40000 ALTER TABLE `nivel_acessos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `sobrenome` varchar(255) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `telefone` varchar(11) DEFAULT NULL,
  `cpf` varchar(11) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `usuario` varchar(45) DEFAULT NULL,
  `senha` varchar(45) DEFAULT NULL,
  `nivel_acesso_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'MATHEUS DA SILVA','PEREIRA','1994-06-05','981503126','60620199326','msmatheuspereira@gmail.com','admin','123',1,'2016-11-15 00:00:00','0000-00-00 00:00:00'),(2,'LAZARO VIADO','PEIDAO','1986-01-09','984374753','07605949483','lazaro12@gmail.com','usuario','321',2,'2016-11-15 21:00:00','2016-11-15 00:00:00'),(3,'JOSIVAN','SOUSA','1982-08-01','9897377474','75754554534','josivansousa@gmail.com','jmp','423234',2,NULL,NULL),(4,'JANECA','SILVA','1993-02-09','98984747474','75754554534','janeca@gmail.com','janeca','12345fefwe',2,NULL,NULL),(5,'Gilmar','Filho','1982-08-01','98999053695','44444444474','gilmar@gmail.com','gilmar12','1234567',NULL,NULL,NULL),(7,'FERNANDO','LEAL','1990-11-23','9897377474','75754554534','fernando@gmail.com','fernando12','123',NULL,NULL,NULL);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-11-17 11:27:39
