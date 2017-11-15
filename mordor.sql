-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.14 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for mordor
CREATE DATABASE IF NOT EXISTS `mordor` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_bin */;
USE `mordor`;

-- Dumping structure for table mordor.banners
CREATE TABLE IF NOT EXISTS `banners` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8_bin,
  `link` text COLLATE utf8_bin,
  `image` text COLLATE utf8_bin,
  `rand` text COLLATE utf8_bin,
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Dumping data for table mordor.banners: 4 rows
/*!40000 ALTER TABLE `banners` DISABLE KEYS */;
INSERT INTO `banners` (`id`, `name`, `link`, `image`, `rand`) VALUES
	(1, 'tvistas', 'tvistas.lt', NULL, NULL),
	(2, 'Microsoft', 'Microsoft.com', NULL, NULL),
	(3, 'facebook', 'facebook.com', NULL, NULL),
	(4, 'delfi', 'delfi.lt', NULL, NULL);
/*!40000 ALTER TABLE `banners` ENABLE KEYS */;

-- Dumping structure for table mordor.pages
CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `body` text COLLATE utf8_bin,
  `isRealPage` int(1) DEFAULT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Dumping data for table mordor.pages: 3 rows
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
INSERT INTO `pages` (`id`, `title`, `body`, `isRealPage`) VALUES
	(1, 'Home', 'Welcome to our webpage', 1),
	(2, 'Contacts', 'Call me: 112', 1),
	(3, 'Blog', '/Blog/index', 0);
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;

-- Dumping structure for table mordor.posts
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `body` text COLLATE utf8_bin,
  `date` datetime DEFAULT CURRENT_TIMESTAMP,
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Dumping data for table mordor.posts: 3 rows
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` (`id`, `title`, `body`, `date`) VALUES
	(1, 'New blog', 'wwwaaaaaaaaaa', '2017-11-14 14:45:22'),
	(2, 'New post', 'very good post', '2017-11-14 14:45:47'),
	(3, 'Post post post', 'Šių metų viduryje valdantieji džiaugsmingai pranešė: pirmąkart suskaičiuota, kiek valstybė turi nekilnojamojo turto, kiek kainuoja jo išlaikymas ir kiek pajamų būtų galima gauti jį naudojant efektyviau. „Vien tie pakeitimai, kuriuos siūlome, perėjimas prie centralizuoto valdymo, nereikalingų funkcijų atsisakymas, realizuoti nereikalingus objektus ir galiausiai peržiūrėti nuomos sutartis, ar jos atitinka rinkos kainas, atsisakyti neatlygintino panaudos davimo. Iki metų pabaigos padarius tuos pakeitimus, vien per metus leistų taupyti 20 mln. Eur“, – birželį kalbėjo Vyriausybės vadovas.Šių metų viduryje valdantieji džiaugsmingai pranešė: pirmąkart suskaičiuota, kiek valstybė turi nekilnojamojo turto, kiek kainuoja jo išlaikymas ir kiek pajamų būtų galima gauti jį naudojant efektyviau. „Vien tie pakeitimai, kuriuos siūlome, perėjimas prie centralizuoto valdymo, nereikalingų funkcijų atsisakymas, realizuoti nereikalingus objektus ir galiausiai peržiūrėti nuomos sutartis, ar jos atitinka rinkos kainas, atsisakyti neatlygintino panaudos davimo. Iki metų pabaigos padarius tuos pakeitimus, vien per metus leistų taupyti 20 mln. Eur“, – birželį kalbėjo Vyriausybės vadovas.Šių metų viduryje valdantieji džiaugsmingai pranešė: pirmąkart suskaičiuota, kiek valstybė turi nekilnojamojo turto, kiek kainuoja jo išlaikymas ir kiek pajamų būtų galima gauti jį naudojant efektyviau. „Vien tie pakeitimai, kuriuos siūlome, perėjimas prie centralizuoto valdymo, nereikalingų funkcijų atsisakymas, realizuoti nereikalingus objektus ir galiausiai peržiūrėti nuomos sutartis, ar jos atitinka rinkos kainas, atsisakyti neatlygintino panaudos davimo. Iki metų pabaigos padarius tuos pakeitimus, vien per metus leistų taupyti 20 mln. Eur“, – birželį kalbėjo Vyriausybės vadovas.', '2017-11-14 14:46:29');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
