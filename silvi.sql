/*
SQLyog Ultimate v12.4.3 (64 bit)
MySQL - 5.7.24 : Database - silvi
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`silvi` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `silvi`;

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `iduser` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`iduser`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`iduser`,`nama`,`password`) values 
(1,'admin','e10adc3949ba59abbe56e057f20f883e');

/*Table structure for table `vidcon` */

DROP TABLE IF EXISTS `vidcon`;

CREATE TABLE `vidcon` (
  `id_vidcon` int(11) NOT NULL AUTO_INCREMENT,
  `nomorsurat` varchar(45) NOT NULL,
  `namalembaga` varchar(255) NOT NULL,
  `perihal` varchar(255) NOT NULL,
  `tglvidcon` datetime NOT NULL,
  `tempat` varchar(255) NOT NULL,
  `jmlpeserta` int(11) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `kebutuhan` varchar(255) NOT NULL,
  `namacp` varchar(255) NOT NULL,
  `nomorcp` varchar(12) NOT NULL,
  `filesurat` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `status_vidcon` enum('new','approved','rejected','pending','deleted') NOT NULL,
  PRIMARY KEY (`id_vidcon`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

/*Data for the table `vidcon` */

insert  into `vidcon`(`id_vidcon`,`nomorsurat`,`namalembaga`,`perihal`,`tglvidcon`,`tempat`,`jmlpeserta`,`keterangan`,`kebutuhan`,`namacp`,`nomorcp`,`filesurat`,`created_at`,`updated_at`,`status_vidcon`) values 
(6,'800/213/418.25/2021','Dinas Kesehatan','Permohonan Bantuan Vidcon','2021-01-21 00:00:00','Aula Dinas Kesehatan',150,'Pelantikan kepala SKPD baru','1 kamera, 2 laptop','Andri','082203304566','1611029652_32009e5dcec49cf51e32.jpg','2021-01-19 11:14:12','2021-01-19 11:14:12','new'),
(7,'800/213/222','Kecamatan Semen','Vidcon Pemberdayaan Petani','2021-01-21 00:00:00','Aula kecamatan',150,'Vidcon Pemberdayaan Petani','2 kamera','Yosi','089904321989','1611031101_7b21cdeb92ea099aa2ac.jpg','2021-01-19 11:38:21','2021-01-19 11:38:21','new'),
(8,'800/214/418.25/2021','Dinas Perumahan dan Pemukiman','Vidcon Workshop Perencanaan RTH','2021-01-26 00:00:00','Aula Dinas Perkim',100,'Workshop perencanaan RTH dihadiri oleh Bupati Kediri','2 laptop','Yunus','082203304566','1611210117_f1a15680b47a7634429c.jpg','2021-01-21 13:21:57','2021-01-21 13:21:57','new'),
(9,'800/214/418.26/2021','Dinas Perikanan','Permohonan Bantuan Vidcon','2021-01-27 00:00:00','Dinas Perikanan',50,' Workshop Budidaya Ikan Air Tawar','2 laptop, 2 kamera, 1 HDD eksternal','Abdi','082203304566','1611210436_e280c7f9e15642283980.jpg','2021-01-21 13:27:16','2021-01-21 13:27:16','rejected'),
(10,'893/529/418.50/2021','BKD','Bantuan Fasilitasi Video Conference','2021-01-22 00:00:00','Ruang Rapat BKD',150,'Kegiatan Latsat Gol. III Gelombang II angkatan 203 dan 204 Pemkab Kediri','2 laptop','Dimas','082203304566','1611211333_2671f335195084564fb9.jpg','2021-01-21 13:42:13','2021-01-21 13:42:13','rejected'),
(11,'893/562/418.50/2021','BKD Kabupaten Kediri','Bantuan Fasilitasi Video Conference','2021-01-22 00:00:00','Ruang Rapat BKD',150,'Kegiatan Pelatihan Optimalisasi Website dan Sosial Media SKPD di lingkungan Pemkab Kediri','2 laptop','Bahrul','082203304566','1611211458_0940801591f831d24880.jpg','2021-01-21 13:44:18','2021-01-21 13:44:18','approved'),
(12,'005/380/418.62/2021','Bakesbangpol','Permohonan Fasilitasi','2021-01-22 00:00:00','Ruang Rapat Candra Kirana',150,'Rakor Forum Kewaspadaan Dini Masyarakat','2 laptop','Yusi','082203304566','1611211573_01bee043deed22a69559.jpg','2021-01-21 13:46:13','2021-01-21 13:46:13','approved'),
(13,'470/2547/418.23/2021','Dispendukcapil','Perrmohonan Dukungan Fasilitasi Jaringan Komunikasi Data berbasis VPN IP','2021-01-22 00:00:00','Ruang SKPD masing-masing',150,'Pemanfaatan data kependudukan oleh lembaga pengguna dan Organisasi Perangkat Daerah (OPD)','1 laptop, 1 kamera, 1 rol kabel LAN','Atreya','082203304566','1611211711_4d9cb15d5368b3ef1f2a.jpg','2021-01-21 13:48:31','2021-01-21 13:48:31','rejected'),
(14,'065/533/418.09/2021','Sekda Kabupaten Kediri','Permohonan Bantuan Fasilitas Video Conference','2021-01-22 00:00:00','Ruang Rapat Candra Kirana',100,'Pelaksanaan Evaluasi SAKIP dan Reformasi Birokrasi Tahun 2021','2 laptop, 2 kamera','Uki','082203304566','1611211807_6939f16280ff039a4f52.jpg','2021-01-21 13:50:07','2021-01-21 13:50:07','pending'),
(15,'065/631/418.09/2021','Sekda Kabupaten Kediri','Permohonan Bantuan Fasilitas Video Conference','2021-01-28 00:00:00','Ruang Rapat Grahadi',200,'Rapat Teknis Tahap III (Presentasi dan Wawancara) Kompetisi Budaya Kerja Tahun 2021 selama 2 hari','2 laptop','Mimi','082203304566','1611211974_ef183159ac9e34709e72.jpg','2021-01-21 13:52:54','2021-01-21 13:52:54','rejected'),
(16,'045.2/3226/418.61/2021','DP2KBP3A','Permintaan Fasilitasi Teleconference','2021-01-25 00:00:00','Balai Penyuluhan Kecamatan dan Dinas Kesehatan',300,'Evaluasi Program KB dan Pembinaan Klinik KB di Wilayah Kab. Kediri','5 laptop, 3 kamera','Tika','082203304566','1611212090_34feb4a21c08a32a6403.jpg','2021-01-21 13:54:50','2021-01-21 13:54:50','rejected'),
(17,'590/7804/418.32/2021','DPKP Kabupaten Kediri','Permohonan Bantuan Teknis','2021-01-25 00:00:00','Joglo Halaman Belakang Kantor Pemkab Kediri',30,'Sosialisasi dan penyerahan sertifikat hasil kegiatan Pendaftaran Tanah Sistematis Lengkap (PTSL) TA 2021','2 laptop','Gita','082203304566','1611212309_aa5f96f26e22b024486f.jpg','2021-01-21 13:58:29','2021-01-21 13:58:29','rejected'),
(18,'045.2/3533/418.61/2021','DP2KBP3A','Permintaan Fasilitasi Teleconference','2021-01-24 00:00:00','Di SKPD masing-masing',200,'Pelaksanaan lomba penulisan Karya Tulis Kependudukan bagi Sekolah Siaga Kependudukan (SSK)','3 PC, 4 kamera','Yulia','082203304566','1611213304_dfb7e30598f69cdc6b9a.jpg','2021-01-21 14:15:04','2021-01-21 14:15:04','new'),
(19,'B.23/Sekrt./DWP Kab.Kdr/X/2021','DWP Kabupaten Kediri','Permohonan Fasilitasi Zoom Meeting','2021-01-26 00:00:00','Ruang Rapat Candra Kirana',100,'Undangan Webinar Etika dan Kepribadian Era Adaptasi di Masa Pandemi','2 laptop','Ikma','082203304566','1611213454_950111903132ee8398ce.jpg','2021-01-21 14:17:34','2021-01-21 14:17:34','new'),
(20,'141/4100/418.24/2021','DPMPD Kabupaten Kediri','Permohonan Bantuan Penyiapan Fasilitasi Video Conference','2021-01-25 00:00:00','Kantor DPMPD',200,'Pembinaan BPD Desa-desa Wilayah Eks Korcam Ngadiluwih, Papar, Pare dan Kediri','3 laptop, 2 handycam, 1 DSLR','Tomin','082203304566','1611213861_ee3753898dbc73ebd49f.jpg','2021-01-21 14:24:21','2021-01-21 14:24:21','pending'),
(21,'893/1166/418.50/2021','BKD','Bantuan Fasilitasi Video Conference','2021-01-26 00:00:00','Universitas Pawyatan Dhaha',100,'Diklat Calon Kepala Sekolah di Lingkungan Pemkab Kediri','2 laptop, 3 kamera','Ammar Zoni','082203304566','1611214176_0d3e4decc5cd391498c4.jpg','2021-01-21 14:29:36','2021-01-21 14:29:36','approved'),
(22,'470/3982/418.23/2021','Dispendukcapil','Permohonan Dukungan Fasilitasi Akun Zoom Meeting','2021-01-23 00:00:00','Ruang Rapat Candra Kirana',150,'Penyelenggaraan inovasi pelayanan serta melakukan sosialisasi tentang Administrasi Kependudukan','2 laptop','Adis','082203304566','1611214298_20e74aa5eeb5e0b74dfa.jpg','2021-01-21 14:31:38','2021-01-21 14:31:38','approved'),
(23,'800/1570/418.11/2021','Inspektorat Kabupaten Kediri','Bantuan personil operator/host rapat melalui aplikasi Zoom','2021-01-25 00:00:00','Ruang Rapat Candra Kirana',70,'Ekspose Mandiri atas hasil penilaian kapabiltias APIP Inspektorat Kabupaten Kediri','2 laptop, 1 host','Sutrem','082203304566','1611214401_2bc8ff4f4a568e09b871.jpg','2021-01-21 14:33:21','2021-01-21 14:33:21','approved'),
(24,'476/3824/418.22/2021','DP2KBP3A','Permintaan Fasilitasi Teleconference','2021-01-29 00:00:00','Di SKPD masing-masing',60,'Pembentukan kepengurusan forum anak Kabupaten Kediri','2 laptop, 3 kamera','Imron','082203304566','1611214498_3927404eee1af2448f8d.jpg','2021-01-21 14:34:58','2021-01-21 14:34:58','rejected'),
(25,'893/1359/418.50/2021','BKD Kabupaten Kediri','Bantuan Fasilitasi Video Conference','2021-01-23 00:00:00','Convention Hall SLG Kabupaten Kediri',100,'Pelatihan pengembangan kompetensi pejabat struktural eselon IV tahun 2021','2 laptop, 2 kamera','Ine','082203304566','1611214585_a3cc3158e80ab1f90925.jpg','2021-01-21 14:36:25','2021-01-21 14:36:25','rejected'),
(26,'431/2517/418.21/2021','Dinas Pariwisata dan Kebudayaan','Permohonan Bantuan Virtual ','2021-01-28 00:00:00','Area Candi Tegowangi Kecamatan Plemahan',150,'Pagelaran Kesenian TMII','2 laptop, 3 kamera, 1 host','Oki','082203304566','1611214677_19942c039f7d9142f685.jpg','2021-01-21 14:37:57','2021-01-21 14:37:57','rejected'),
(27,'B.30/Sekrt./DWP Kab.Kdr./XII/2021','DWP Kabupaten Kediri','Permohonan Fasilitasi Zoom Meeting','2021-01-25 00:00:00','Ruang Rapat Grahadi',150,'Undangan HUT Seminar tentang Ketahanan Keluarga di Era Digital','2 laptop, 1 rol kabel LAN','Kadek','082203304566','1611214767_d0280f5bbdd784224685.jpg','2021-01-21 14:39:27','2021-01-21 14:39:27','rejected'),
(28,'421.9/6447/418.20/2021','Dinas Pendidikan Kabupaten Kediri','Fasilitasi Zoom','2021-01-26 00:00:00','Aula Kantor Dinas Pendidikan Burengan',100,'Penyaluran Bantuan Sosial Beasiswa Pendidikan kepada Mahasiswa oleh Ibu Bupati Kediri','3 laptop, 3 kamera, 1 host','Dara','082203304566','1611214888_2aadcd9081f458336799.jpg','2021-01-21 14:41:28','2021-01-21 14:41:28','pending'),
(29,'020/1725/418.11/2021','Inspektorat Kabupaten Kediri','Permintaan Host Zoom Meeting','2021-02-03 00:00:00','Ruang Rapat Candra Kirana',100,'Uji kesiapan sistem aplikasi e-Audit dalam menerapkan tanda tangan elektronik','3 laptop, 2 kamera, 1 host','Sansan','082203304566','1611214986_0e5d648447c871510a10.jpg','2021-01-21 14:43:06','2021-01-21 14:43:06','pending'),
(30,'893/1526/418.50/2021','BKD Kabupaten Kediri','Bantuan Fasilitasi Video Conference','2021-01-27 00:00:00','Universitas Pawyatan Dhaha',200,'Penutupan Diklat Calon Kepala Sekolah','2 laptop, 1 kamera','Nuria','082203304566','1611215149_75075feef82ec26a875f.jpg','2021-01-21 14:45:49','2021-01-21 14:45:49','pending'),
(31,'B.37/Sekrt./DWP Kab.Kdr./XII/2021','DWP Kabupaten Kediri','Permohonan Fasilitasi Zoom Meeting','2021-01-26 00:00:00','Ruang Rapat Grahadi',100,'Peringatan HUT ke-21 dan Pengukuhan Pengurus DWP Kabupaten Kediri masa bakti 2021-2024','2 laptop, 2 kamera','Banun','082203304566','1611215225_2367ffaba193ed845df8.jpg','2021-01-21 14:47:05','2021-01-21 14:47:05','pending'),
(32,'160/02.02/02.21/UM/XII/2021','PMI Kediri','Bantuan Fasilitasi Video Conference','2021-01-28 00:00:00','Ruang Kilisuci Pemkab Kediri',150,'Musyawarah Kerja PMI Kabupaten Kediri','2 laptop, 2 kamera','Marwan','082203304566','1611215359_110deb74248b33d01b3d.jpg','2021-01-21 14:49:19','2021-01-21 14:49:19','pending'),
(33,'800/225/418.25/2021','Dispendukcapil','Permintaan Fasilitasi Teleconference','2021-02-04 00:00:00','Ruang Rapat Grahadi',100,'Serah Terima Sekretaris Dispendukcapil baru dan lama','2 laptop, 1 kamera','Jenni','082203304566','1611221301_1ea0ec13a99f1d57e781.jpg','2021-01-21 16:28:21','2021-01-21 16:28:21','new');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
