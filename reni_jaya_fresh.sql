/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.5-10.1.31-MariaDB : Database - reni_jaya_fresh
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`reni_jaya_fresh` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `reni_jaya_fresh`;

/*Table structure for table `tb_cms_alamat` */

DROP TABLE IF EXISTS `tb_cms_alamat`;

CREATE TABLE `tb_cms_alamat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kantor` text NOT NULL,
  `telepon` text NOT NULL,
  `hp` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tb_cms_alamat` */

insert  into `tb_cms_alamat`(`id`,`nama_kantor`,`telepon`,`hp`) values (1,'Jalan Johar No.14 Surabaya','(031) 70120731','082 143463188');

/*Table structure for table `tb_cms_pembayaran` */

DROP TABLE IF EXISTS `tb_cms_pembayaran`;

CREATE TABLE `tb_cms_pembayaran` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_bank` varchar(50) NOT NULL,
  `no_rekening` text NOT NULL,
  `atas_nama` text NOT NULL,
  `img_bank` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tb_cms_pembayaran` */

insert  into `tb_cms_pembayaran`(`id`,`nama_bank`,`no_rekening`,`atas_nama`,`img_bank`) values (1,'BRI','7867565234','Reni','star.png'),(2,'BCA','78374834','reni','dejavu.png');

/*Table structure for table `tb_cms_pengaturan` */

DROP TABLE IF EXISTS `tb_cms_pengaturan`;

CREATE TABLE `tb_cms_pengaturan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_users_pengaturan` int(11) NOT NULL,
  `nama_admin` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tb_cms_pengaturan` */

insert  into `tb_cms_pengaturan`(`id`,`id_users_pengaturan`,`nama_admin`) values (1,7,'admin reni');

/*Table structure for table `tb_kapal` */

DROP TABLE IF EXISTS `tb_kapal`;

CREATE TABLE `tb_kapal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kapal` varchar(40) NOT NULL,
  `kode_kapal` varchar(25) NOT NULL,
  `pelabuhan_asal` varchar(40) NOT NULL,
  `pelabuhan_tujuan` varchar(40) NOT NULL,
  `jam_keberangkatan` time NOT NULL,
  `jam_tiba` time NOT NULL,
  `harga` float NOT NULL,
  `tersedia` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

/*Data for the table `tb_kapal` */

insert  into `tb_kapal`(`id`,`nama_kapal`,`kode_kapal`,`pelabuhan_asal`,`pelabuhan_tujuan`,`jam_keberangkatan`,`jam_tiba`,`harga`,`tersedia`) values (1,'Sinabung','SB01','Semarang','Surabaya','08:00:00','11:00:00',400000,1),(3,'Dobonsolo','D01','Surabaya','Sorong','19:00:00','04:00:00',600000,1),(4,'KM Ngapulu','KMN01','Jayapura','Makasar','15:00:00','02:00:00',700000,1),(5,'KM Ciremai','KMC01','Jayapura','Sorong','08:00:00','02:00:00',550000,1),(6,'KM Ngapulu','KMN01','Biak','Makasar','05:00:00','12:00:00',680000,1),(7,'KM Ngapulu','KMN01','Jayapura','Surabaya','14:00:00','22:00:00',1000000,1),(8,'Dobonsolo','D01','Jayapura','Surabaya','17:00:00','01:00:00',1200000,1),(9,'KM Ciremai','KMC02','Jayapura','Surabaya','11:00:00','03:30:00',1150000,1),(10,'KM Ngapulu','KMN01','Biak','Makasar','15:00:00','00:00:13',670000,1),(11,'Dobonsolo','D01','Biak','Makasar','12:30:00','02:00:00',700000,1),(12,'KM Ciremai','KMC03','Biak','Makasar','08:00:00','17:00:00',800000,1),(14,'Ngapulu','NG01','Surabaya','Semarang','07:00:00','09:00:00',200000,1),(15,'Dobonsolo','D02','Makasar','Surabaya','09:00:00','13:00:00',400000,1),(16,'Binaiya ','B01','Surabaya','Sorong','08:00:00','02:00:00',620000,1),(17,'Gunung Dempo','GD01','Surabaya','Sorong','00:00:12','17:00:00',900000,1),(18,'Dobonsolo','D03','Semarang','Surabaya','09:00:00','11:00:00',200000,1),(19,'KM Ciremai','KMC04','Semarang','Surabaya','07:00:00','09:00:00',200000,1);

/*Table structure for table `tb_pesawat` */

DROP TABLE IF EXISTS `tb_pesawat`;

CREATE TABLE `tb_pesawat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pesawat` varchar(40) NOT NULL,
  `kode_pesawat` varchar(40) NOT NULL,
  `keberangkatan` varchar(40) NOT NULL,
  `tujuan` varchar(40) NOT NULL,
  `jam_keberangkatan` time NOT NULL,
  `jam_tiba` time NOT NULL,
  `kelas_penerbangan` varchar(20) NOT NULL,
  `harga` float NOT NULL,
  `tersedia` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

/*Data for the table `tb_pesawat` */

insert  into `tb_pesawat`(`id`,`nama_pesawat`,`kode_pesawat`,`keberangkatan`,`tujuan`,`jam_keberangkatan`,`jam_tiba`,`kelas_penerbangan`,`harga`,`tersedia`) values (18,'Lion Air','LN01','Jakarta','Bandung','07:00:00','07:30:00','Ekonomi',800000,1),(20,'Sriwijaya Air','SWJ01','Surabaya','Jakarta','07:00:00','08:00:00','Ekonomi',600000,1),(21,'Garuda','GD01','Jakarta','Bali','16:00:00','17:30:00','Ekonomi',600000,1),(22,'Garuda','GD02','Bali','Jakarta','12:30:00','14:00:00','Ekonomi',700000,1),(23,'Citilink','CT01','Jakarta','Surabaya','09:00:00','08:00:00','Ekonomi',600000,1),(24,'Citilink','CT02','Surabaya','Lampung','00:00:12','13:45:00','Ekonomi',800000,1),(25,'Lion Air','LN03','Surabaya','Jakarta','08:00:00','09:30:00','Ekonomi',900000,1),(26,'Nam Air','NMA21','JogjaJakarta','Lombok','15:00:00','17:10:00','Bisnis',864000,1),(27,'Lion Air','LN02','Jakarta','Bandung','19:15:00','19:50:00','Bisnis',400000,1),(28,'Lion Air','LN03','Surabaya','Jakarta','12:30:00','13:45:00','FIRST CLASS',450000,1),(29,'Citilink','CT03','Surabaya','Makasar','21:25:00','23:10:00','Ekonomi',680000,1),(30,'Citilink','CT04','Surabaya','Makasar','17:30:00','19:00:00','FIRST CLASS',900000,1),(31,'Citilink','CT05','Surabaya','Makasar','19:25:00','20:10:00','Bisnis',870000,1),(32,'Lion Air','LN01','Surabaya','Makasar','14:10:00','16:00:00','Ekonomi',600000,1),(33,'Garuda','GD03','Surabaya','Makasar','05:00:00','07:00:00','FIRST CLASS',900000,1);

/*Table structure for table `tb_tiket_kapal` */

DROP TABLE IF EXISTS `tb_tiket_kapal`;

CREATE TABLE `tb_tiket_kapal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_kapal` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tgl_keberangkatan` date NOT NULL,
  `kode_booking` varchar(25) NOT NULL,
  `jumlah_tiket` int(11) NOT NULL,
  `harga_total` float NOT NULL,
  `no_ktp` varchar(40) NOT NULL,
  `bayar` tinyint(1) NOT NULL,
  `tgl_pemesanan` date NOT NULL,
  `kode_transaksi` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tb_tiket_kapal` */

/*Table structure for table `tb_tiket_pesawat` */

DROP TABLE IF EXISTS `tb_tiket_pesawat`;

CREATE TABLE `tb_tiket_pesawat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_pesawat` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tgl_keberangkatan` date NOT NULL,
  `kode_booking` varchar(25) NOT NULL,
  `jumlah_tiket` int(11) NOT NULL,
  `harga_total` float NOT NULL,
  `bayar` tinyint(1) NOT NULL,
  `tgl_pemesanan` date NOT NULL,
  `kode_transaksi` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

/*Data for the table `tb_tiket_pesawat` */

/*Table structure for table `tb_users` */

DROP TABLE IF EXISTS `tb_users`;

CREATE TABLE `tb_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(40) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nama_lengkap` varchar(50) DEFAULT NULL,
  `no_telp` varchar(20) DEFAULT NULL,
  `alamat` text,
  `password` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  `hak_akses` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

/*Data for the table `tb_users` */

insert  into `tb_users`(`id`,`email`,`username`,`nama_lengkap`,`no_telp`,`alamat`,`password`,`status`,`hak_akses`) values (7,'adminreni@gmail.com','admin',NULL,NULL,NULL,'21232f297a57a5a743894a0e4a801fc3',1,'admin'),(11,'alex@gmail.com','alex','alex alex','0867565656','mojokerto','534b44a19bf18d20b71ecc4eb77c572f',1,'user'),(14,'anangnov99@gmail.com','anang','anang novriadi','08572367','mojokerto','e9e3dfd549e73163b4c4e2b3f1f9f897',1,'user');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
