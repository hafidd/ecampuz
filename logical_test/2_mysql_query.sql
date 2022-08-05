-- MySQL dump 10.13  Distrib 8.0.30, for Linux (x86_64)
--
-- Host: localhost    Database: ecampuz
-- ------------------------------------------------------
-- Server version	8.0.30-0ubuntu0.20.04.2

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `tb_mahasiswa`
--

DROP TABLE IF EXISTS `tb_mahasiswa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_mahasiswa` (
  `mhs_id` int NOT NULL AUTO_INCREMENT,
  `mhs_nim` char(8) DEFAULT NULL,
  `mhs_nama` varchar(100) DEFAULT NULL,
  `mhs_angkatan` smallint DEFAULT NULL,
  PRIMARY KEY (`mhs_id`),
  UNIQUE KEY `mhs_nim` (`mhs_nim`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_mahasiswa`
--

LOCK TABLES `tb_mahasiswa` WRITE;
/*!40000 ALTER TABLE `tb_mahasiswa` DISABLE KEYS */;
INSERT INTO `tb_mahasiswa` VALUES (1,'20180001','Jono',2018),(2,'20180002','Taufik',2018),(3,'20180003','Maria',2018),(4,'20190001','Sari',2019),(5,'20190002','Bambang',2019);
/*!40000 ALTER TABLE `tb_mahasiswa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_mahasiswa_nilai`
--

DROP TABLE IF EXISTS `tb_mahasiswa_nilai`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_mahasiswa_nilai` (
  `mhs_nilai_id` int NOT NULL AUTO_INCREMENT,
  `mhs_id` int NOT NULL,
  `mk_id` int NOT NULL,
  `nilai` double DEFAULT NULL,
  PRIMARY KEY (`mhs_nilai_id`),
  KEY `mhs_id` (`mhs_id`),
  CONSTRAINT `tb_mahasiswa_nilai_ibfk_1` FOREIGN KEY (`mhs_id`) REFERENCES `tb_mahasiswa` (`mhs_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_mahasiswa_nilai`
--

LOCK TABLES `tb_mahasiswa_nilai` WRITE;
/*!40000 ALTER TABLE `tb_mahasiswa_nilai` DISABLE KEYS */;
INSERT INTO `tb_mahasiswa_nilai` VALUES (1,1,1,70),(2,1,2,80),(3,2,1,82),(4,2,2,74),(5,4,1,76),(6,4,2,80),(7,5,1,60);
/*!40000 ALTER TABLE `tb_mahasiswa_nilai` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_matakuliah`
--

DROP TABLE IF EXISTS `tb_matakuliah`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_matakuliah` (
  `mk_id` int NOT NULL AUTO_INCREMENT,
  `mk_kode` char(5) NOT NULL,
  `mk_sks` smallint NOT NULL,
  `mk_nama` varchar(100) NOT NULL,
  PRIMARY KEY (`mk_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_matakuliah`
--

LOCK TABLES `tb_matakuliah` WRITE;
/*!40000 ALTER TABLE `tb_matakuliah` DISABLE KEYS */;
INSERT INTO `tb_matakuliah` VALUES (1,'MK202',3,'OOP'),(2,'MK303',2,'Basis Data');
/*!40000 ALTER TABLE `tb_matakuliah` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-08-05 10:19:15
