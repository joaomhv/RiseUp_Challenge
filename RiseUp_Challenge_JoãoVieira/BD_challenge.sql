-- --------------------------------------------------------
-- Anfitrião:                    127.0.0.1
-- Versão do servidor:           10.1.38-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Versão:              10.1.0.5464
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table riseup_challenge.users
CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `birthdate` datetime DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- Dumping data for table riseup_challenge.users: ~1 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
REPLACE INTO `users` (`id_user`, `name`, `email`, `phone`, `birthdate`, `address`, `created`, `updated`) VALUES
	(5, 'João Vieira', 'joaomhv@gmail.com', '933599704', '1994-08-25 00:00:00', 'Rua da Moeda, Évora', '2020-10-26 10:16:19', '2020-10-26 10:16:19'),
	(6, 'Kawhi Leonard', 'kawhi@gmail.com', '931234567', '1991-06-29 00:00:00', 'Los Angeles', '2020-10-26 10:19:12', '2020-10-26 10:19:12'),
	(7, 'Marie Curie', 'MarieCurie@gmail.com', '923344556', '1867-11-07 00:00:00', 'Varsovia', '2020-10-26 10:23:59', '2020-10-26 11:44:24'),
	(8, 'Jorge Mario Bergoglio', 'JorgeMarioBergoglio@gmail.com', '913254769', '1936-12-17 00:00:00', 'Vaticano', '2020-10-26 10:27:06', '2020-10-26 10:27:43'),
	(9, 'Eunice Muñoes', 'EuniceMunoes@gmail.com', '923334445', '1928-07-30 00:00:00', 'Lisboa', '2020-10-26 10:30:11', '2020-10-26 11:47:47');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
