/*
SQLyog Ultimate v12.4.1 (64 bit)
MySQL - 10.4.6-MariaDB : Database - eduequals
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`eduequals` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `eduequals`;

/*Table structure for table `carreras` */

DROP TABLE IF EXISTS `carreras`;

CREATE TABLE `carreras` (
  `cod` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `titulo` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`cod`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*Data for the table `carreras` */

insert  into `carreras`(`cod`,`nombre`,`titulo`) values 
(1,'Ingenieria de sistemas','Ingeniero de sistemas'),
(2,'Ingenieria industrial','Ingeniero industrial'),
(3,'Ingenieria mecanica','Ingeniero mecanico'),
(4,'Ingenieria de mercado','Ingeniero de mercado'),
(5,'Ingenieria telematica','Ingeniero Telematico');

/*Table structure for table `detallecarreras` */

DROP TABLE IF EXISTS `detallecarreras`;

CREATE TABLE `detallecarreras` (
  `cod` int(11) NOT NULL AUTO_INCREMENT,
  `snies` varchar(45) DEFAULT NULL,
  `acreditacion` int(11) DEFAULT NULL COMMENT '0=noacreditada 1=acreditada',
  `duracion` varchar(100) DEFAULT NULL,
  `creditos` int(11) DEFAULT NULL,
  `perfilocupacional` text DEFAULT NULL,
  `valormatricula` int(11) DEFAULT NULL,
  `planestudio` blob DEFAULT NULL,
  `entidadeducativa_cod` int(11) NOT NULL,
  `modalidad_cod` int(11) NOT NULL,
  `formacion_cod` int(11) NOT NULL,
  `carreras_cod` int(11) NOT NULL,
  PRIMARY KEY (`cod`,`entidadeducativa_cod`,`modalidad_cod`,`formacion_cod`,`carreras_cod`),
  KEY `fk_detalleCarreras_entidadeducativa1` (`entidadeducativa_cod`),
  KEY `fk_detalleCarreras_modalidad1` (`modalidad_cod`),
  KEY `fk_detalleCarreras_formacion1` (`formacion_cod`),
  KEY `fk_detalleCarreras_carreras1` (`carreras_cod`),
  CONSTRAINT `fk_detalleCarreras_carreras1` FOREIGN KEY (`carreras_cod`) REFERENCES `carreras` (`cod`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_detalleCarreras_entidadeducativa1` FOREIGN KEY (`entidadeducativa_cod`) REFERENCES `entidadeducativa` (`cod`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_detalleCarreras_formacion1` FOREIGN KEY (`formacion_cod`) REFERENCES `formacion` (`cod`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_detalleCarreras_modalidad1` FOREIGN KEY (`modalidad_cod`) REFERENCES `modalidad` (`cod`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*Data for the table `detallecarreras` */

insert  into `detallecarreras`(`cod`,`snies`,`acreditacion`,`duracion`,`creditos`,`perfilocupacional`,`valormatricula`,`planestudio`,`entidadeducativa_cod`,`modalidad_cod`,`formacion_cod`,`carreras_cod`) values 
(1,'2801',0,'9 semestres',150,'El ingeniero de sistemas de la Universidad Au',4941130,NULL,2,1,3,1),
(3,'4827',1,'10 semestres',160,'El Egresado del programa de Ingeniería de Sistemas está capacitado para desempeñarse como:\r\n-Desarrollador de Software\r\n-Analista de Sistemas\r\n-Soporte y Mantenimiento de Sistemas\r\n-Administrador de Sistemas\r\n-Administrador de Redes y Comunicaciones\r\n-Líder de Proyectos.   ',3808500,NULL,1,1,3,1),
(4,'7511',1,'10 semestres',163,'-Gerenciar la adquisición de materias primas y  los insumos para las operaciones  del proceso productivo en empresa de bienes y servicios.\r\n-Coordinar los  procesos de   recepción,  manipulación y entrega de materias primas e insumos.\r\n-Gerenciar la producción de bienes y servicios.\r\n-Gerenciar la calidad en la etapa de producción de productos y servicios.\r\n-Gerenciar las operaciones  de distribución.\r\n-Coordinar las operaciones  de almacenamiento de productos terminados.\r\n-Asesorar en la planificación, diseño e implementación de los sistemas de gestión.\r\n-Coordinar, dirigir y auditar  los sistemas de gestión en empresas de bienes y servicios.\r\n-Gerenciar el Talento Humano en una organización de bienes y servicios.\r\n-Formular y evaluar  proyectos de inversión.\r\n-Gerenciar  los procesos administrativos en empresas de bienes y servicios.\r\n-Gerenciar proyectos de ingeniería en empresas de bienes y servicios.',4017200,NULL,1,1,3,2),
(5,'2850',1,'9 semestres',153,'El Ingeniero Industrial egresado de la Universidad Autónoma del Caribe posee competencias para el ejercicio profesional en empresas de producción de bienes y de servicios, en cargos como:\r\n- Gerente de Operaciones.\r\n- Director de Sistemas de Calidad.\r\n- Director de Logística.\r\n- Director de departamento de mercadeo.\r\n- Gerente de Planta.\r\n- Director del departamento de Talento Humano.\r\n- Jefe de Salud Ocupacional.\r\n- Director de Planeación.',5174450,NULL,2,1,3,2);

/*Table structure for table `detalleubicacion` */

DROP TABLE IF EXISTS `detalleubicacion`;

CREATE TABLE `detalleubicacion` (
  `cod` int(11) NOT NULL AUTO_INCREMENT,
  `ubicacion_cod` int(11) NOT NULL,
  `entidadeducativa_cod` int(11) NOT NULL,
  PRIMARY KEY (`cod`,`ubicacion_cod`,`entidadeducativa_cod`),
  KEY `fk_detalleubicacion_ubicacion1` (`ubicacion_cod`),
  KEY `fk_detalleubicacion_entidadeducativa1` (`entidadeducativa_cod`),
  CONSTRAINT `fk_detalleubicacion_entidadeducativa1` FOREIGN KEY (`entidadeducativa_cod`) REFERENCES `entidadeducativa` (`cod`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_detalleubicacion_ubicacion1` FOREIGN KEY (`ubicacion_cod`) REFERENCES `ubicacion` (`cod`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `detalleubicacion` */

insert  into `detalleubicacion`(`cod`,`ubicacion_cod`,`entidadeducativa_cod`) values 
(1,1,2);

/*Table structure for table `detallevaloracion` */

DROP TABLE IF EXISTS `detallevaloracion`;

CREATE TABLE `detallevaloracion` (
  `cod` int(11) NOT NULL AUTO_INCREMENT,
  `usuarios_cod` int(11) NOT NULL,
  `usuarios_tipousuarios_codtipo` int(11) NOT NULL,
  `valoracion_cod` int(11) NOT NULL,
  `entidadeducativa_cod` int(11) NOT NULL,
  PRIMARY KEY (`cod`,`usuarios_cod`,`usuarios_tipousuarios_codtipo`,`valoracion_cod`,`entidadeducativa_cod`),
  KEY `fk_detallevaloracion_usuarios1` (`usuarios_cod`,`usuarios_tipousuarios_codtipo`),
  KEY `fk_detallevaloracion_valoracion1` (`valoracion_cod`),
  KEY `fk_detallevaloracion_entidadeducativa1` (`entidadeducativa_cod`),
  CONSTRAINT `fk_detallevaloracion_entidadeducativa1` FOREIGN KEY (`entidadeducativa_cod`) REFERENCES `entidadeducativa` (`cod`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_detallevaloracion_usuarios1` FOREIGN KEY (`usuarios_cod`, `usuarios_tipousuarios_codtipo`) REFERENCES `usuarios` (`cod`, `tipousuarios_codtipo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_detallevaloracion_valoracion1` FOREIGN KEY (`valoracion_cod`) REFERENCES `valoracion` (`cod`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `detallevaloracion` */

/*Table structure for table `entidadeducativa` */

DROP TABLE IF EXISTS `entidadeducativa`;

CREATE TABLE `entidadeducativa` (
  `cod` int(11) NOT NULL AUTO_INCREMENT,
  `logo` varchar(100) DEFAULT NULL,
  `razonsocial` varchar(100) DEFAULT NULL,
  `nit` varchar(45) DEFAULT NULL,
  `snies` varchar(45) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `url` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`cod`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `entidadeducativa` */

insert  into `entidadeducativa`(`cod`,`logo`,`razonsocial`,`nit`,`snies`,`descripcion`,`url`) values 
(1,'unisimon','universidad simon bolivar','890.104.633-9','2805','Carácter académico de la institución: Universidad con Acreditación Institucional de Alta Calidad\r\nLugar de desarrollo de los programas académicos: Barranquilla, Atlántico - Cúcuta, Norte de Santander.\r\nCódigo SNIES: 2805','www.unisimon.edu.co'),
(2,'uniautonoma','universidad autonoma del caribe','890.102.572-9','1804','Un vistazo a una institución que ha crecido con la Región en busca de la formación integral de su juventud. Mas de Cinco décadas de cara a la investigación, a los procesos educativos, la tecnología, cultura, artes y el deporte.\r\nCon mas de cinco décadas de existencia, la Universidad Autónoma del Caribe ha sido la preferida por los estudiantes de la Región. Pensando en ellos, en su bienestar y en el fortalecimiento de las condiciones académicas, investigativas, técnicas, artísticas y deportivas, este centro de estudios superiores se ha dividido en diversas dependencias, todas ellas, al servicio de nuestros educandos, de la comunidad en general, de la región y del país.','www.uac.edu.co');

/*Table structure for table `formacion` */

DROP TABLE IF EXISTS `formacion`;

CREATE TABLE `formacion` (
  `cod` int(11) NOT NULL AUTO_INCREMENT,
  `tipoformacion` varchar(100) NOT NULL,
  PRIMARY KEY (`cod`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `formacion` */

insert  into `formacion`(`cod`,`tipoformacion`) values 
(1,'tecnica'),
(2,'tecnologa'),
(3,'profesional');

/*Table structure for table `interesados` */

DROP TABLE IF EXISTS `interesados`;

CREATE TABLE `interesados` (
  `cod` int(11) NOT NULL AUTO_INCREMENT,
  `codusuario` int(11) DEFAULT NULL,
  `codetallecarrera` int(11) DEFAULT NULL,
  PRIMARY KEY (`cod`),
  KEY `FK_codusuario_interesados` (`codusuario`),
  KEY `FK_usuario_detCarrera` (`codetallecarrera`),
  CONSTRAINT `FK_codusuario_interesados` FOREIGN KEY (`codusuario`) REFERENCES `usuarios` (`cod`),
  CONSTRAINT `FK_usuario_detCarrera` FOREIGN KEY (`codetallecarrera`) REFERENCES `detallecarreras` (`cod`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `interesados` */

/*Table structure for table `modalidad` */

DROP TABLE IF EXISTS `modalidad`;

CREATE TABLE `modalidad` (
  `cod` int(11) NOT NULL AUTO_INCREMENT,
  `tipomodalidad` varchar(100) NOT NULL,
  PRIMARY KEY (`cod`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `modalidad` */

insert  into `modalidad`(`cod`,`tipomodalidad`) values 
(1,'presencial'),
(2,'semi-presencial'),
(3,'virtual');

/*Table structure for table `tipousuarios` */

DROP TABLE IF EXISTS `tipousuarios`;

CREATE TABLE `tipousuarios` (
  `codtipo` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(100) NOT NULL,
  PRIMARY KEY (`codtipo`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `tipousuarios` */

insert  into `tipousuarios`(`codtipo`,`tipo`) values 
(1,'administrador'),
(2,'universidad'),
(3,'registrado');

/*Table structure for table `ubicacion` */

DROP TABLE IF EXISTS `ubicacion`;

CREATE TABLE `ubicacion` (
  `cod` int(11) NOT NULL AUTO_INCREMENT,
  `nombreubicacion` varchar(100) NOT NULL,
  `direccionubicacion` varchar(100) NOT NULL,
  PRIMARY KEY (`cod`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `ubicacion` */

insert  into `ubicacion`(`cod`,`nombreubicacion`,`direccionubicacion`) values 
(1,'barranquilla/colombia','Calle 90 # 46 - 112');

/*Table structure for table `usuarios` */

DROP TABLE IF EXISTS `usuarios`;

CREATE TABLE `usuarios` (
  `cod` int(11) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `genero` varchar(45) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `tipousuarios_codtipo` int(11) NOT NULL,
  PRIMARY KEY (`cod`,`tipousuarios_codtipo`),
  KEY `fk_usuarios_tipousuarios1` (`tipousuarios_codtipo`),
  CONSTRAINT `fk_usuarios_tipousuarios1` FOREIGN KEY (`tipousuarios_codtipo`) REFERENCES `tipousuarios` (`codtipo`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `usuarios` */

insert  into `usuarios`(`cod`,`nombres`,`apellidos`,`genero`,`email`,`password`,`tipousuarios_codtipo`) values 
(2,'kevin rafael','prada barrios','masculino','kprada398@gmail.com','123456789',3),
(3,'ricardo antonio','ferrer naranjo','masculino','rferrer@gmail.com','rafn123',1),
(4,'miguel angel','zambrano herrera','masculino','mzambrano@gmail.com','mzambra123',2);

/*Table structure for table `usuariouniversidad` */

DROP TABLE IF EXISTS `usuariouniversidad`;

CREATE TABLE `usuariouniversidad` (
  `cod` int(11) NOT NULL AUTO_INCREMENT,
  `codusuario` int(11) DEFAULT NULL,
  `codentidad` int(11) DEFAULT NULL,
  PRIMARY KEY (`cod`),
  KEY `FK_usuario_universidad` (`codusuario`),
  KEY `FK_usuario_entidad` (`codentidad`),
  CONSTRAINT `FK_usuario_entidad` FOREIGN KEY (`codentidad`) REFERENCES `entidadeducativa` (`cod`),
  CONSTRAINT `FK_usuario_universidad` FOREIGN KEY (`codusuario`) REFERENCES `usuarios` (`cod`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `usuariouniversidad` */

insert  into `usuariouniversidad`(`cod`,`codusuario`,`codentidad`) values 
(1,4,2);

/*Table structure for table `valoracion` */

DROP TABLE IF EXISTS `valoracion`;

CREATE TABLE `valoracion` (
  `cod` int(11) NOT NULL AUTO_INCREMENT,
  `valor` int(11) NOT NULL,
  PRIMARY KEY (`cod`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `valoracion` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
