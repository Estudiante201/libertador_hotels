-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: reserva
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

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
-- Table structure for table `cliente`
--

DROP TABLE IF EXISTS `cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cliente` (
  `idCliente` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `dni` varchar(8) NOT NULL,
  `celular` int(11) NOT NULL,
  `correo` varchar(100) NOT NULL,
  PRIMARY KEY (`idCliente`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cliente`
--

LOCK TABLES `cliente` WRITE;
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
INSERT INTO `cliente` VALUES (1,'Naomi','Fashion Mo','45756834',934764346,'naomifashionmo@gmail.com'),(2,'Jessica','Flores Azul','45734587',934765348,'jessicafloresazul@gmail.com'),(3,'Karen','Pasarela Genial','46823447',953864567,'karenpasarelagenial@gmail.com'),(4,'Luis','Perez Gonzales','56787644',954346875,'luisperezgonzales@gmail.com'),(5,'Pamela','Molina Blanca','23423222',954345678,'pamelamolinablanca@gmail.com'),(6,'Roxana','Moda Primavera','23400224',954345672,'roxanamodaprimavera@gmail.com'),(7,'Anali','Cielo Azul','23400222',954345672,'analicieloazul@gmail.com'),(8,'Luna','Zamorano Guillén','23400205',946456554,'lunazamoranoguillen@gmail.com'),(9,'Daniela','Gomez Blázquez','23420002',946456550,'danielagomezblazquez@gmail.com'),(10,'Rosa','Almeida Guitart','3475436',975345876,'rosalmeidaguitart@gmail.com'),(11,'Ruth','Farmer S.','38777814',949303164,'ruthfarmers@gmail.com'),(12,'Pia','Slusher M.','23867068',913175280,'piaslusherm@gmail.com'),(13,'Wendy','Frye J.','64271608',903821800,'wendyfryej@gmail.com'),(14,'Rosalie','Kimbell J.','67935082',984735322,'rosaliekimbellj@gmail.com'),(15,'Laura','Boston J.','46817383',995424416,'laurabostonj@gmail.com'),(16,'Claudia','Fondren E.','57485340',991871414,'claudafondrene@gmail.com'),(17,'Karen','Moore J.','20023077',966950237,'karenmoorej@gmail.com'),(18,'Gloria','Howell T.','54962712',927914081,'gloriahowellt@gmail.com'),(19,'Megan','Caldwell L.','24022473',986426421,'megancaldwelll@gmail.com'),(20,'Anissa','Lundberg S.','23483109',918544512,'anissalundbergs@gmail.com'),(21,'Patti','Tompson L.','84744781',971389129,'patitompsonl@gmail.com'),(22,'Oscar','Gonzales D.','77596430',922385552,'oscargonzalesd@gmail.com'),(23,'Steve','Johnson J.','58617711',991639486,'stevejohnsonj@gmail.com'),(24,'Daniel','Spencer F.','17840784',956965478,'danielspencerf@gmail.com'),(25,'Michael','Glass H.','25114689',974226896,'michaelglassh@gmail.com'),(26,'Elisa','Rous A.','34242342',965456345,'elisarousa@gmail.com'),(27,'Constanza','Cantero Vélez','34654896',956456456,'constanzacanteroleez@gmail.com'),(28,'Aurelia','Brown J.','53445345',954564564,'aureliabrownj@gmail.com'),(29,'Natalia','Nguyen J.','43466530',935345345,'natalianguyenj@gmail.com'),(30,'Naomi','Gon S.','54645646',965465467,'naomigons@gmail.com'),(31,'Selena','Ribera Marquez','45646456',935674565,'selenariberamarquez@gmail.com'),(32,'Stephanie','Rodgers T.','45209753',951361936,'stephanierodgerst@gmail.com'),(33,'Elizabeth','Rouleau  S.','27117632',985386228,'elizabethrouleaus@gmail.com'),(34,'Nayeli','Paitan','56465465',965464645,'nayelinpaintan@gmail.com');
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `habitacion`
--

DROP TABLE IF EXISTS `habitacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `habitacion` (
  `idHabitacion` int(11) NOT NULL AUTO_INCREMENT,
  `idTipoHabitacion` int(11) NOT NULL,
  `piso` int(3) NOT NULL,
  `numero` int(4) NOT NULL,
  PRIMARY KEY (`idHabitacion`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `habitacion`
--

LOCK TABLES `habitacion` WRITE;
/*!40000 ALTER TABLE `habitacion` DISABLE KEYS */;
INSERT INTO `habitacion` VALUES (1,1,1,101),(2,2,1,102),(3,3,1,103),(4,4,1,104),(5,5,1,105),(6,6,1,106),(7,1,2,201),(8,2,2,202),(9,3,2,203),(10,4,2,204),(11,5,2,205),(12,6,2,206),(13,1,3,301),(14,2,3,302),(15,3,3,303),(16,4,3,304),(17,5,3,305),(18,6,3,306),(19,1,4,401),(20,2,4,402),(21,3,4,403),(22,4,4,404),(23,5,4,405),(24,6,4,406),(25,1,5,501),(26,2,5,502),(27,3,5,503),(28,4,5,504),(29,5,5,505),(30,6,5,506),(31,1,6,601),(32,2,6,602),(33,3,6,603),(34,4,6,604),(35,5,6,605),(36,6,6,606),(37,1,7,701),(38,2,7,702),(39,3,7,703),(40,4,7,704),(41,5,7,705),(42,6,7,706);
/*!40000 ALTER TABLE `habitacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reserva`
--

DROP TABLE IF EXISTS `reserva`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reserva` (
  `idReserva` int(11) NOT NULL AUTO_INCREMENT,
  `fechaEntrada` date NOT NULL,
  `fechaSalida` date NOT NULL,
  `cantidadDias` int(3) NOT NULL,
  `montoTotal` decimal(4,0) NOT NULL,
  `fechaRegistro` date NOT NULL,
  `TipoTarjetaPago` varchar(20) NOT NULL,
  `idCliente` int(11) NOT NULL,
  `idHabitacion` int(11) NOT NULL,
  PRIMARY KEY (`idReserva`)
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reserva`
--

LOCK TABLES `reserva` WRITE;
/*!40000 ALTER TABLE `reserva` DISABLE KEYS */;
INSERT INTO `reserva` VALUES (1,'2022-01-08','2022-01-24',16,800,'2022-01-02','VISA',1,1),(3,'2022-01-09','2022-01-17',8,800,'2022-01-05','VISA',2,4),(4,'2022-01-09','2022-01-24',15,750,'2022-01-08','MASTERCARD',3,7),(5,'2022-01-17','2022-01-23',6,360,'2022-01-08','VISA',4,2),(6,'2022-01-08','2022-01-17',9,630,'2022-01-08','VISA',5,3),(7,'2022-01-04','2022-01-24',20,1200,'2022-01-01','MASTERCARD',6,8),(8,'2022-01-17','2022-01-30',13,780,'2022-01-08','VISA',2,8),(9,'2022-01-17','2022-01-24',7,490,'2022-01-08','VISA',7,9),(10,'2022-01-24','2022-01-30',6,600,'2022-01-08','MASTERCARD',7,10),(11,'2022-01-08','2022-01-10',2,280,'2022-01-08','MASTERCARD',8,6),(12,'2022-01-16','2022-01-30',14,1680,'2022-01-08','VISA',8,5),(13,'2022-01-09','2022-01-30',14,1680,'2022-01-08','MASTERCARD',9,5),(14,'2022-01-09','2022-01-18',9,1260,'2022-01-08','MASTERCARD',10,12),(15,'2022-01-08','2022-01-10',2,240,'2022-01-08','VISA',10,11),(16,'2022-01-09','2022-01-18',9,450,'2022-01-09','VISA',11,13),(17,'2022-02-01','2022-02-20',19,2280,'2022-01-09','MASTERCARD',11,41),(18,'2022-02-27','2022-02-09',3,420,'2022-01-09','MASTERCARD',11,18),(19,'2022-03-01','2022-03-12',11,550,'2022-01-09','MASTERCARD',11,25),(20,'2022-01-09','2022-01-24',15,750,'2022-01-09','VISA',12,19),(21,'2022-01-25','2022-01-31',6,720,'2022-01-09','VISA',12,17),(22,'2022-02-01','2022-02-08',7,980,'2022-01-09','MASTERCARD',12,42),(23,'2022-01-09','2022-01-11',2,140,'2022-01-09','VISA',13,15),(24,'2022-01-12','2022-01-18',6,360,'2022-01-09','MASTERCARD',13,20),(25,'2022-01-09','2022-01-18',9,630,'2022-01-09','VISA',14,33),(26,'2022-01-19','2022-01-30',11,660,'2022-01-09','VISA',14,14),(27,'2022-01-09','2022-01-18',9,900,'2022-01-09','VISA',15,28),(28,'2022-01-19','2022-01-24',5,0,'2022-01-09','VISA',15,0),(29,'2022-01-10','2022-01-20',10,1000,'2022-01-09','VISA',16,40),(30,'2022-01-29','2022-02-02',4,400,'2022-01-09','VISA',16,40),(31,'2022-01-18','2022-01-25',7,490,'2022-01-09','VISA',17,21),(32,'2022-01-26','2022-01-30',4,240,'2022-01-09','VISA',17,26),(33,'2022-01-10','2022-01-12',2,120,'2022-01-09','VISA',18,32),(34,'2022-01-13','2022-01-18',5,300,'2022-01-09','VISA',18,38),(35,'2022-01-09','2022-01-12',3,300,'2022-01-09','VISA',19,34),(36,'2022-01-13','2022-01-20',7,840,'2022-01-09','VISA',19,23),(37,'2022-01-21','2022-01-25',4,560,'2022-01-09','VISA',19,24),(38,'2022-01-09','2022-01-20',11,550,'2022-01-09','VISA',20,31),(39,'2022-01-21','2022-01-30',9,1080,'2022-01-09','VISA',20,29),(40,'2022-01-18','2022-01-24',6,300,'2022-01-09','VISA',21,37),(41,'2022-01-25','2022-01-30',5,600,'2022-01-09','VISA',21,35),(42,'2022-01-31','2022-02-08',8,1120,'2022-01-09','VISA',21,30),(43,'2022-01-04','2022-01-12',8,560,'2022-01-02','VISA',22,27),(44,'2022-01-12','2022-01-18',6,420,'2022-01-09','VISA',23,39),(45,'2022-01-02','2022-01-25',23,2300,'2022-01-01','VISA',24,16),(46,'2022-01-26','2022-01-30',4,560,'2022-01-09','VISA',24,36),(47,'2022-01-12','2022-01-20',8,800,'2022-01-09','MASTERCARD',25,22),(48,'2022-05-10','2022-05-11',1,50,'2022-05-10','VISA',27,13),(49,'2022-05-10','2022-05-12',2,100,'2022-05-10','VISA',28,31),(50,'2022-05-10','2022-05-13',3,360,'2022-05-10','MASTERCARD',29,29),(51,'2022-05-10','2022-05-25',15,900,'2022-05-10','VISA',30,8),(52,'2022-05-13','2022-05-16',3,360,'2022-05-12','MASTERCARD',31,11),(53,'2022-05-07','2022-05-11',4,480,'2022-05-02','MASTERCARD',3,11),(54,'2022-05-12','2022-05-16',4,480,'2022-05-12','VISA',3,5),(55,'2022-05-12','2022-05-13',1,140,'2022-05-12','VISA',3,12),(56,'2022-05-14','2022-05-15',1,50,'2022-05-12','VISA',3,25),(57,'2022-05-15','2022-05-16',1,50,'2022-05-12','VISA',3,13),(58,'2022-05-12','2022-05-14',2,140,'2022-05-12','MASTERCARD',32,9),(59,'2022-05-15','2022-05-17',2,120,'2022-05-15','VISA',32,26),(60,'2022-05-18','2022-05-19',1,140,'2022-05-12','VISA',32,30),(61,'2022-05-12','2022-05-16',4,200,'2022-05-12','MASTERCARD',33,1),(62,'2022-05-12','2022-05-27',15,750,'2022-05-12','VISA',34,13);
/*!40000 ALTER TABLE `reserva` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo_habitacion`
--

DROP TABLE IF EXISTS `tipo_habitacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipo_habitacion` (
  `idTipoHabitacion` int(11) NOT NULL AUTO_INCREMENT,
  `nombreTipo` varchar(50) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `precio` decimal(4,0) NOT NULL,
  PRIMARY KEY (`idTipoHabitacion`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_habitacion`
--

LOCK TABLES `tipo_habitacion` WRITE;
/*!40000 ALTER TABLE `tipo_habitacion` DISABLE KEYS */;
INSERT INTO `tipo_habitacion` VALUES (1,'Habitacion individual','Las habitaciones individuales, con 18 m2, tienen cama individual, baño en mármol con bañera y tiene una vista de la ciudad. Además, le reciben con una bebida de bienvenida.',50),(2,'Habitacion Doble','Todas las habitaciones dobles están equipadas con aire acondicionado, hervidor eléctrico , wifi gratis.',60),(3,'Habitación Triple','Dispone de tres camas 1.5 plazas cada una, TV de pantalla plana con canales por cable, baño privado, wifi gratis y desayuno incluido.',70),(4,'Habitación Matrimonial','Te ofrecemos una habitación amplias y confortables para que disfrutes una estadía en la ciudad de Lima junto a tu pareja. Después de un día de paseo o de trabajo, el relax se vuelve algo necesario.',100),(5,'Habitaciones de Lujo','Muebles de alta calidad con toques opulentos y caros, atención a los detalles estéticos, una habitación tranquila con aire fresco, arte original en las paredes y ventanas que se abren.',120),(6,'Junior Suite','Decorada al estilo colonial, muy acogedora y única en su estilo. Esta habitación cuenta con una confortable cama de  dos plazas y baño privado completo.',140);
/*!40000 ALTER TABLE `tipo_habitacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `correo` varchar(100) NOT NULL,
  `nombreUsuario` varchar(50) NOT NULL,
  `clave` varchar(50) NOT NULL,
  PRIMARY KEY (`correo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES ('karenpasarelagenial@gmail.com','karen','1234'),('naomifashionmo@gmail.com','Naomi Fashion','12345678'),('nayelinpaitan@gmail.com','Nayelin','1234'),('stephanierodgerst@gmail.com','stephanie','1234');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-05-13  0:31:02
