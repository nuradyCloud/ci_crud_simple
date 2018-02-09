/*
SQLyog Ultimate v11.33 (64 bit)
MySQL - 5.7.21-0ubuntu0.16.04.1 : Database - toko_buku
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
USE `toko_buku`;

/*Table structure for table `tm_buku` */

DROP TABLE IF EXISTS `tm_buku`;

CREATE TABLE `tm_buku` (
  `id_book` varchar(6) NOT NULL,
  `book_title` varchar(30) DEFAULT NULL,
  `desc` text,
  PRIMARY KEY (`id_book`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tm_buku` */

insert  into `tm_buku`(`id_book`,`book_title`,`desc`) values ('ABU001','ICHA TACTIC','BUKU HOHO HIHEK'),('ABU002','GOLDEN BOY','DIPLEKOTO ENTAK-ENTAK'),('ABU003','PLAYBOY','IKE IKE KIMOCHI'),('ABU004','hahah','hehehe');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
