-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.11-MariaDB - Source distribution
-- Server OS:                    Linux
-- HeidiSQL Version:             9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table db_perpus.anggota
CREATE TABLE IF NOT EXISTS `anggota` (
  `anggota_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `anggota_nama` varchar(50) NOT NULL,
  `anggota_alamat` text NOT NULL,
  `anggota_jk` enum('L','P') NOT NULL,
  `anggota_telp` varchar(14) NOT NULL,
  PRIMARY KEY (`anggota_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table db_perpus.anggota: ~0 rows (approximately)
/*!40000 ALTER TABLE `anggota` DISABLE KEYS */;
/*!40000 ALTER TABLE `anggota` ENABLE KEYS */;


-- Dumping structure for table db_perpus.buku
CREATE TABLE IF NOT EXISTS `buku` (
  `buku_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `buku_judul` varchar(50) NOT NULL,
  `kategori_id` int(11) unsigned NOT NULL,
  `buku_deskripsi` text,
  `buku_jumlah` int(11) unsigned NOT NULL,
  `buku_cover` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`buku_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table db_perpus.buku: ~0 rows (approximately)
/*!40000 ALTER TABLE `buku` DISABLE KEYS */;
INSERT INTO `buku` (`buku_id`, `buku_judul`, `kategori_id`, `buku_deskripsi`, `buku_jumlah`, `buku_cover`) VALUES
	(1, 'fdgfhfdfhd', 2, 'dsfsujjyugfbfhfthfbnhgnh', 56, NULL);
/*!40000 ALTER TABLE `buku` ENABLE KEYS */;


-- Dumping structure for table db_perpus.kategori
CREATE TABLE IF NOT EXISTS `kategori` (
  `kategori_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `kategori_nama` varchar(50) NOT NULL,
  PRIMARY KEY (`kategori_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Dumping data for table db_perpus.kategori: ~4 rows (approximately)
/*!40000 ALTER TABLE `kategori` DISABLE KEYS */;
INSERT INTO `kategori` (`kategori_id`, `kategori_nama`) VALUES
	(1, 'Naovelaaas'),
	(2, 'Sci & Fic'),
	(4, 'Komikaaa'),
	(8, 'dfgdf');
/*!40000 ALTER TABLE `kategori` ENABLE KEYS */;


-- Dumping structure for table db_perpus.kembali
CREATE TABLE IF NOT EXISTS `kembali` (
  `kembali_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `pinjam_id` int(11) unsigned NOT NULL,
  `tgl_kembali` date NOT NULL,
  `denda` double unsigned NOT NULL,
  PRIMARY KEY (`kembali_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table db_perpus.kembali: ~0 rows (approximately)
/*!40000 ALTER TABLE `kembali` DISABLE KEYS */;
/*!40000 ALTER TABLE `kembali` ENABLE KEYS */;


-- Dumping structure for table db_perpus.petugas
CREATE TABLE IF NOT EXISTS `petugas` (
  `petugas_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `petugas_nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`petugas_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table db_perpus.petugas: ~0 rows (approximately)
/*!40000 ALTER TABLE `petugas` DISABLE KEYS */;
INSERT INTO `petugas` (`petugas_id`, `petugas_nama`, `username`, `password`) VALUES
	(1, 'Admin', 'admin', '21232f297a57a5a743894a0e4a801fc3');
/*!40000 ALTER TABLE `petugas` ENABLE KEYS */;


-- Dumping structure for table db_perpus.pinjam
CREATE TABLE IF NOT EXISTS `pinjam` (
  `pinjam_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `buku_id` int(11) unsigned NOT NULL,
  `anggota_id` int(11) unsigned NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_jatuh_tempo` date NOT NULL,
  PRIMARY KEY (`pinjam_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table db_perpus.pinjam: ~0 rows (approximately)
/*!40000 ALTER TABLE `pinjam` DISABLE KEYS */;
/*!40000 ALTER TABLE `pinjam` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
