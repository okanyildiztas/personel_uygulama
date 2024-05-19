-- --------------------------------------------------------
-- Sunucu:                       127.0.0.1
-- Sunucu sürümü:                10.4.14-MariaDB - mariadb.org binary distribution
-- Sunucu İşletim Sistemi:       Win64
-- HeidiSQL Sürüm:               11.1.0.6116
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- personel için veritabanı yapısı dökülüyor
CREATE DATABASE IF NOT EXISTS `personel` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_turkish_ci */;
USE `personel`;

-- tablo yapısı dökülüyor personel.kullanici
CREATE TABLE IF NOT EXISTS `kullanici` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kullaniciadi` varchar(50) COLLATE utf8_turkish_ci NOT NULL DEFAULT '0',
  `sifre` varchar(50) COLLATE utf8_turkish_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- personel.kullanici: ~1 rows (yaklaşık) tablosu için veriler indiriliyor
/*!40000 ALTER TABLE `kullanici` DISABLE KEYS */;
INSERT INTO `kullanici` (`id`, `kullaniciadi`, `sifre`) VALUES
	(1, 'test', '1234');
/*!40000 ALTER TABLE `kullanici` ENABLE KEYS */;

-- tablo yapısı dökülüyor personel.log
CREATE TABLE IF NOT EXISTS `log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kullanici` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `is` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `date` date DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- personel.log: ~5 rows (yaklaşık) tablosu için veriler indiriliyor
/*!40000 ALTER TABLE `log` DISABLE KEYS */;
INSERT INTO `log` (`id`, `kullanici`, `is`, `date`) VALUES
	(59, 'test', 'giriş', '2021-05-26'),
	(60, 'test', 'cikis', '2021-05-26'),
	(61, '', 'cikis', '2021-06-24'),
	(62, 'test', 'giriş', '2021-06-24'),
	(63, 'test', 'cikis', '2021-06-24');
/*!40000 ALTER TABLE `log` ENABLE KEYS */;

-- tablo yapısı dökülüyor personel.personeller
CREATE TABLE IF NOT EXISTS `personeller` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Tc` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `Ad` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `Soyad` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `Meslek` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `Mail` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `Tel` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `Cinsiyet` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `Dogumtarih` date DEFAULT NULL,
  `Kayittarih` date DEFAULT curdate(),
  `Adres` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `Bilgi` text COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- personel.personeller: ~2 rows (yaklaşık) tablosu için veriler indiriliyor
/*!40000 ALTER TABLE `personeller` DISABLE KEYS */;
INSERT INTO `personeller` (`id`, `Tc`, `Ad`, `Soyad`, `Meslek`, `Mail`, `Tel`, `Cinsiyet`, `Dogumtarih`, `Kayittarih`, `Adres`, `Bilgi`) VALUES
	(38, '616519816', 'test', 'testsoyad', 'testmeslek', 'test@mail.com', '531681656', 'Erkek', '2021-05-30', '2021-05-26', 'testadres', 'testbilgi'),
	(39, '65818116', 'muhammet', 'köse', 'öğrenci', 'mami@mai.com', '1616151561', 'Kadın', '2021-05-29', '2021-05-26', 'adres', 'bilgi');
/*!40000 ALTER TABLE `personeller` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
