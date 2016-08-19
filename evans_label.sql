/*
SQLyog Ultimate - MySQL GUI v8.2 
MySQL - 5.5.34 : Database - evans_label
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `panel_label` */

DROP TABLE IF EXISTS `panel_label`;

CREATE TABLE `panel_label` (
  `labelid` int(11) NOT NULL AUTO_INCREMENT,
  `labelname` varchar(100) DEFAULT NULL,
  `labeldescription` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`labelid`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `panel_label` */

insert  into `panel_label`(`labelid`,`labelname`,`labeldescription`) values (1,'A','Rear Baseboard'),(2,'B','Back Panel'),(3,'C','Top Panel'),(4,'D','Worksurface'),(5,'E','Front Panel'),(6,'F','Front Baseboard'),(7,'G','Equipment Front');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
