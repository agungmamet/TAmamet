-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.38-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for spk_tpa
CREATE DATABASE IF NOT EXISTS `spk_tpa` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `spk_tpa`;

-- Dumping structure for table spk_tpa.administrator
CREATE TABLE IF NOT EXISTS `administrator` (
  `id_admin` int(10) NOT NULL AUTO_INCREMENT,
  `nama_admin` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `ttl` varchar(30) NOT NULL,
  `jeniskelamin` int(3) NOT NULL,
  `email` varchar(30) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `instansi` varchar(30) NOT NULL,
  `username` varchar(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `hak_akses` int(10) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table spk_tpa.administrator: ~4 rows (approximately)
/*!40000 ALTER TABLE `administrator` DISABLE KEYS */;
REPLACE INTO `administrator` (`id_admin`, `nama_admin`, `alamat`, `ttl`, `jeniskelamin`, `email`, `telp`, `instansi`, `username`, `password`, `hak_akses`) VALUES
	(1, 'Agung Iya', 'jalan raya maos-kesugihan', 'cilacap, 29 februari 1997', 0, 'agung@gmail.com', '085764456678', 'undip', 'agung', '$2y$10$9.TwmKX5K9KVA3HH0hVxsOyJeom7eb9zNVp4oMBtXmZI/teKL8bBm', 1),
	(2, 'Ruli Sakti', 'jalan tembalang selatan', 'tembalang, 23 juli 1997', 0, 'ruli@gmail.com', '089789765786', 'undip', 'ruli', '$2y$10$Mc/RN40egCrbIke4jNf0G.U6u6F/vmZHIf6jrs4cgZFi93RCXmlIK', 2),
	(3, 'Naim Masa', 'jalan sambikerep', 'magelang, 30 desember 1999', 1, 'adi@gmail.com', '087895532567', 'undip', 'naim', '$2y$10$Hh0DQCa/dO5z0Pugph/B3.3W4KBLkQu0C28BTnWFL.qwDA8zRviHS', 3),
	(4, 'Raka Jaya', 'Banyumanik Semarang', 'Salatiga, 30 Januari 1998', 0, 'raka@gmail.com', '087786545678', 'undip', 'rakajaya', '$2y$10$CeKdxeNW239DIoOi8Ml4ZOlul6ZTZkH.96yth621/2sPZXDBxqld2', 1);
/*!40000 ALTER TABLE `administrator` ENABLE KEYS */;

-- Dumping structure for view spk_tpa.a_max
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `a_max` (
	`kelerengan` DOUBLE NULL,
	`lahan` DOUBLE NULL,
	`longsor` DOUBLE NULL,
	`hujan` DOUBLE NULL,
	`hidrogeologi` DOUBLE NULL,
	`tanah` DOUBLE NULL,
	`banjir` DOUBLE NULL
) ENGINE=MyISAM;

-- Dumping structure for view spk_tpa.a_min
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `a_min` (
	`kelerengan` DOUBLE NULL,
	`lahan` DOUBLE NULL,
	`longsor` DOUBLE NULL,
	`hujan` DOUBLE NULL,
	`hidrogeologi` DOUBLE NULL,
	`tanah` DOUBLE NULL,
	`banjir` DOUBLE NULL
) ENGINE=MyISAM;

-- Dumping structure for table spk_tpa.bobot
CREATE TABLE IF NOT EXISTS `bobot` (
  `id_bobot` int(10) NOT NULL AUTO_INCREMENT,
  `kelerengan` int(10) NOT NULL,
  `penggunaan_lahan` int(10) NOT NULL,
  `rawan_longsor` int(10) NOT NULL,
  `curah_hujan` int(10) NOT NULL,
  `hidrogeologi` int(10) NOT NULL,
  `jenis_tanah` int(10) NOT NULL,
  `rawan_banjir` int(10) NOT NULL,
  `editby` int(10) NOT NULL,
  PRIMARY KEY (`id_bobot`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table spk_tpa.bobot: ~1 rows (approximately)
/*!40000 ALTER TABLE `bobot` DISABLE KEYS */;
REPLACE INTO `bobot` (`id_bobot`, `kelerengan`, `penggunaan_lahan`, `rawan_longsor`, `curah_hujan`, `hidrogeologi`, `jenis_tanah`, `rawan_banjir`, `editby`) VALUES
	(1, 10, 20, 15, 15, 20, 10, 10, 1);
/*!40000 ALTER TABLE `bobot` ENABLE KEYS */;

-- Dumping structure for view spk_tpa.d
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `d` (
	`iddaerah` INT(10) NOT NULL,
	`dmax` DOUBLE NULL,
	`dmin` DOUBLE NULL
) ENGINE=MyISAM;

-- Dumping structure for table spk_tpa.daerah
CREATE TABLE IF NOT EXISTS `daerah` (
  `id_daerah` int(10) NOT NULL AUTO_INCREMENT,
  `nama_daerah` varchar(30) NOT NULL,
  `editby` int(10) NOT NULL,
  PRIMARY KEY (`id_daerah`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- Dumping data for table spk_tpa.daerah: ~14 rows (approximately)
/*!40000 ALTER TABLE `daerah` DISABLE KEYS */;
REPLACE INTO `daerah` (`id_daerah`, `nama_daerah`, `editby`) VALUES
	(1, 'Bodeh', 1),
	(2, 'Ulujami', 1),
	(3, 'Comal', 1),
	(4, 'Ampelgading', 1),
	(5, 'Petarukan', 1),
	(6, 'Taman', 1),
	(7, 'Pemalang', 1),
	(8, 'Bantarbolang', 1),
	(9, 'Randudongkal', 1),
	(10, 'Warungpring', 1),
	(11, 'Moga', 1),
	(12, 'Pulosari', 1),
	(13, 'Watukumpul', 1),
	(14, 'Belik', 1),
	(15, 'Maos', 1);
/*!40000 ALTER TABLE `daerah` ENABLE KEYS */;

-- Dumping structure for table spk_tpa.nilai_klasifikasi
CREATE TABLE IF NOT EXISTS `nilai_klasifikasi` (
  `id_klasifikasi` int(10) NOT NULL AUTO_INCREMENT,
  `id_daerah` int(10) NOT NULL,
  `kelerengan` int(10) NOT NULL,
  `penggunaan_lahan` int(10) NOT NULL,
  `rawan_longsor` int(10) NOT NULL,
  `curah_hujan` int(10) NOT NULL,
  `hidrogeologi` int(10) NOT NULL,
  `jenis_tanah` int(10) NOT NULL,
  `rawan_banjir` int(10) NOT NULL,
  `editby` int(10) NOT NULL,
  PRIMARY KEY (`id_klasifikasi`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- Dumping data for table spk_tpa.nilai_klasifikasi: ~14 rows (approximately)
/*!40000 ALTER TABLE `nilai_klasifikasi` DISABLE KEYS */;
REPLACE INTO `nilai_klasifikasi` (`id_klasifikasi`, `id_daerah`, `kelerengan`, `penggunaan_lahan`, `rawan_longsor`, `curah_hujan`, `hidrogeologi`, `jenis_tanah`, `rawan_banjir`, `editby`) VALUES
	(1, 1, 3, 4, 0, 2, 2, 0, 0, 1),
	(2, 2, 4, 2, 2, 2, 0, 3, 0, 1),
	(3, 3, 4, 3, 2, 2, 0, 3, 0, 1),
	(4, 4, 4, 4, 2, 2, 0, 3, 0, 1),
	(5, 5, 4, 3, 2, 2, 0, 3, 1, 1),
	(6, 6, 4, 4, 2, 2, 2, 3, 1, 1),
	(7, 7, 4, 1, 2, 2, 0, 3, 0, 1),
	(8, 8, 3, 0, 1, 1, 2, 1, 1, 1),
	(9, 9, 2, 0, 0, 1, 0, 1, 1, 1),
	(10, 10, 3, 1, 2, 1, 2, 2, 1, 1),
	(11, 11, 3, 1, 0, 0, 0, 2, 1, 1),
	(12, 12, 1, 3, 0, 1, 0, 0, 1, 1),
	(13, 13, 0, 0, 0, 0, 2, 2, 1, 1),
	(14, 14, 3, 0, 0, 1, 2, 2, 1, 1);
/*!40000 ALTER TABLE `nilai_klasifikasi` ENABLE KEYS */;

-- Dumping structure for view spk_tpa.normalisasi
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `normalisasi` (
	`id_daerah` INT(10) NOT NULL,
	`kelerengan` DOUBLE NULL,
	`lahan` DOUBLE NULL,
	`longsor` DOUBLE NULL,
	`hujan` DOUBLE NULL,
	`hidrogeologi` DOUBLE NULL,
	`tanah` DOUBLE NULL,
	`banjir` DOUBLE NULL
) ENGINE=MyISAM;

-- Dumping structure for view spk_tpa.pembagi
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `pembagi` (
	`pemkel` DOUBLE NULL,
	`pemlah` DOUBLE NULL,
	`pemlong` DOUBLE NULL,
	`pemcur` DOUBLE NULL,
	`pemhid` DOUBLE NULL,
	`pemjen` DOUBLE NULL,
	`pemban` DOUBLE NULL
) ENGINE=MyISAM;

-- Dumping structure for view spk_tpa.terbobot
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `terbobot` (
	`iddaerah` INT(10) NOT NULL,
	`kelerengan` DOUBLE NULL,
	`lahan` DOUBLE NULL,
	`longsor` DOUBLE NULL,
	`hujan` DOUBLE NULL,
	`hidrogeologi` DOUBLE NULL,
	`tanah` DOUBLE NULL,
	`banjir` DOUBLE NULL
) ENGINE=MyISAM;

-- Dumping structure for view spk_tpa.v
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `v` (
	`iddaerah` INT(10) NOT NULL,
	`v` DOUBLE NULL
) ENGINE=MyISAM;

-- Dumping structure for view spk_tpa.a_max
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `a_max`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `a_max` AS select max(terbobot.kelerengan) as kelerengan, min(terbobot.lahan) as lahan, max(terbobot.longsor) as longsor, max(terbobot.hujan) as hujan, max(terbobot.hidrogeologi) as hidrogeologi, max(terbobot.tanah) as tanah, max(terbobot.banjir) as banjir from terbobot ;

-- Dumping structure for view spk_tpa.a_min
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `a_min`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `a_min` AS select min(terbobot.kelerengan) as kelerengan, max(terbobot.lahan) as lahan, min(terbobot.longsor) as longsor, min(terbobot.hujan) as hujan, min(terbobot.hidrogeologi) as hidrogeologi, min(terbobot.tanah) as tanah, min(terbobot.banjir) as banjir from terbobot ;

-- Dumping structure for view spk_tpa.d
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `d`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `d` AS select terbobot.iddaerah, sqrt(pow(a_max.kelerengan - terbobot.kelerengan,2) + pow(a_max.lahan - terbobot.lahan,2) + pow(a_max.longsor - terbobot.longsor,2) + pow(a_max.hujan - terbobot.hujan,2) + pow(a_max.hidrogeologi - terbobot.hidrogeologi,2) + pow(a_max.tanah - terbobot.tanah,2) + pow(a_max.banjir - terbobot.banjir,2)) as dmax, sqrt(pow(terbobot.kelerengan - a_min.kelerengan,2) + pow(terbobot.lahan - a_min.lahan,2) + pow(terbobot.longsor - a_min.longsor,2) + pow(terbobot.hujan - a_min.hujan,2) + pow(terbobot.hidrogeologi - a_min.hidrogeologi,2) + pow(terbobot.tanah - a_min.tanah,2) + pow(terbobot.banjir - a_min.banjir,2)) as dmin from terbobot, a_max, a_min ;

-- Dumping structure for view spk_tpa.normalisasi
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `normalisasi`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `normalisasi` AS select nilai_klasifikasi.id_daerah, (nilai_klasifikasi.kelerengan / pembagi.pemkel) AS kelerengan, (nilai_klasifikasi.penggunaan_lahan / pembagi.pemlah) AS lahan, (nilai_klasifikasi.rawan_longsor / pembagi.pemlong) AS longsor, (nilai_klasifikasi.curah_hujan / pembagi.pemcur) AS hujan, (nilai_klasifikasi.hidrogeologi / pembagi.pemhid) AS hidrogeologi, (nilai_klasifikasi.jenis_tanah / pembagi.pemjen) AS tanah, (nilai_klasifikasi.rawan_banjir / pembagi.pemban) AS banjir from (nilai_klasifikasi join pembagi) ;

-- Dumping structure for view spk_tpa.pembagi
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `pembagi`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `pembagi` AS SELECT sqrt(sum(pow(nilai_klasifikasi.kelerengan,2))) AS pemkel, sqrt(sum(pow(nilai_klasifikasi.penggunaan_lahan,2))) AS pemlah, sqrt(sum(pow(nilai_klasifikasi.rawan_longsor,2))) AS pemlong, sqrt(sum(pow(nilai_klasifikasi.curah_hujan,2))) AS pemcur, sqrt(sum(pow(nilai_klasifikasi.hidrogeologi,2))) AS pemhid, sqrt(sum(pow(nilai_klasifikasi.jenis_tanah,2))) AS pemjen, sqrt(sum(pow(nilai_klasifikasi.rawan_banjir,2))) AS pemban from nilai_klasifikasi ;

-- Dumping structure for view spk_tpa.terbobot
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `terbobot`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `terbobot` AS select normalisasi.id_daerah as iddaerah, (normalisasi.kelerengan * bobot.kelerengan) as kelerengan, (normalisasi.lahan * bobot.penggunaan_lahan) as lahan, (normalisasi.longsor * bobot.rawan_longsor) as longsor, (normalisasi.hujan * bobot.curah_hujan) as hujan, (normalisasi.hidrogeologi * bobot.hidrogeologi) as hidrogeologi, (normalisasi.tanah * bobot.jenis_tanah) as tanah, (normalisasi.banjir * bobot.rawan_banjir) as banjir from (normalisasi join bobot) where (bobot.id_bobot = '1') ;

-- Dumping structure for view spk_tpa.v
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `v`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v` AS select d.iddaerah as iddaerah, d.dmin / (d.dmin + d.dmax) as v from d ;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
