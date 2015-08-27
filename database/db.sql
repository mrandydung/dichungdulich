/*
SQLyog Community v12.09 (64 bit)
MySQL - 5.6.24 : Database - dichungdulich
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `config` */

CREATE TABLE `config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(200) CHARACTER SET latin1 DEFAULT NULL,
  `val` varchar(2000) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `config` */

insert  into `config`(`id`,`code`,`val`) values (1,'USD_EXCHANGE_RATE','21200');
insert  into `config`(`id`,`code`,`val`) values (2,'GASOLINE_SURCHARGE_PERCENTAGE','18');
insert  into `config`(`id`,`code`,`val`) values (3,'HOTLINE','+8493 456 7890');
insert  into `config`(`id`,`code`,`val`) values (4,'PAYPAL_EMAIL','namnt@dichung.vn');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
