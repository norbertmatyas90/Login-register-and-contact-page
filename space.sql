-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Szerver verzió:               10.4.18-MariaDB - mariadb.org binary distribution
-- Szerver OS:                   Win64
-- HeidiSQL Verzió:              11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Adatbázis struktúra mentése a space_component.
CREATE DATABASE IF NOT EXISTS `space_component` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `space_component`;

-- Struktúra mentése tábla space_component. contact
CREATE TABLE IF NOT EXISTS `contact` (
  `contact_id` int(11) NOT NULL AUTO_INCREMENT,
  `contact_firstname` varchar(250) NOT NULL DEFAULT '0',
  `contact_lastname` varchar(250) NOT NULL DEFAULT '0',
  `contact_email` varchar(250) NOT NULL DEFAULT '0',
  `contact_text` text NOT NULL,
  `contact_topic` text NOT NULL,
  `contact_file` varchar(500) NOT NULL DEFAULT '0',
  `contact_user_id` int(11) NOT NULL DEFAULT 0,
  `uploaded_at` datetime DEFAULT NULL,
  PRIMARY KEY (`contact_id`),
  KEY `FK_contact_users` (`contact_user_id`),
  CONSTRAINT `FK_contact_users` FOREIGN KEY (`contact_user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

-- Tábla adatainak mentése space_component.contact: ~3 rows (hozzávetőleg)
/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
INSERT INTO `contact` (`contact_id`, `contact_firstname`, `contact_lastname`, `contact_email`, `contact_text`, `contact_topic`, `contact_file`, `contact_user_id`, `uploaded_at`) VALUES
	(2, 'Kovács', 'Attila', 'kovi@gmail.com', 'vama textasasa', 'Huble', 'github-icon-38971 (1).jpg', 3, '2021-05-20 02:05:48'),
	(3, 'Kovács', 'Attila', 'kovi@gmail.com', 'asadsdwdwdw', 'Stratosphere', 'github-icon-38971 (1).jpg', 3, '2021-05-20 02:05:19'),
	(4, 'Lajos', 'Nagy', 'simon@gmail.com', 'wdwdwdw', 'Huble', 'album_1f395g03l.gif', 4, '2021-05-20 08:05:50');
/*!40000 ALTER TABLE `contact` ENABLE KEYS */;

-- Struktúra mentése tábla space_component. hubble
CREATE TABLE IF NOT EXISTS `hubble` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img_name` varchar(250) DEFAULT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- Tábla adatainak mentése space_component.hubble: ~2 rows (hozzávetőleg)
/*!40000 ALTER TABLE `hubble` DISABLE KEYS */;
INSERT INTO `hubble` (`id`, `img_name`, `text`) VALUES
	(1, 'hubble1', '\r\nThe Hubble Space Telescope is a large telescope in space. It was launched into orbit by space shuttle Discovery on April 24, 1990. Hubble orbits about 547 kilometers (340 miles) above Earth. It is the length of a large school bus and weighs as much as two adult elephants. Hubble travels about 5 miles per second: That is like traveling from the eastern coast of the United States to the western coast in 10 minutes. Hubble is solar-powered.\r\n\r\nHubble takes sharp pictures of objects in the sky such as planets, stars and galaxies. Hubble has made more than one million observations. These include detailed pictures of the birth and death of stars, galaxies billions of light years away, and comet pieces crashing into Jupiter\'s atmosphere.\r\n\r\nScientists have learned a lot about the universe from these pictures. Many of them are beautiful to look at.\r\n\r\n'),
	(2, 'hubble2', 'As Hubble orbits Earth, the Fine Guidance Sensors lock onto stars. The Fine Guidance Sensors are part of the Pointing Control System and aim Hubble in the right direction. The telescope can lock onto a target that is one mile away without moving more than the width of a human hair. \r\n\r\nOnce the target is acquired, Hubble\'s primary mirror collects light. The mirror can collect about 40,000 times more light than the human eye. The light bounces off the primary mirror to the secondary mirror. The secondary mirror focuses the light back through a hole in the primary mirror.  From there, the light shines to Hubble\'s scientific instruments. Each instrument has a different way of interpreting the light.\r\n\r\nHubble has five scientific instruments which include cameras and spectrographs. A spectrograph is an instrument that splits light into its individual wavelengths.\r\n\r\nThe Wide Field Camera 3 is Hubble’s main camera. It studies everything from the formation of distant galaxies to the planets in the solar system. The camera can see three different kinds of light: near-ultraviolet, visible and near-infrared. But Hubble can only see each kind of light one at a time. Human eyes can see visible light. Near-ultraviolet and near-infrared are just beyond what our eyes can see.\r\n\r\nThe Advanced Camera for Surveys captures images of large areas of space. These images have helped scientists study some of the earliest activity in the universe');
/*!40000 ALTER TABLE `hubble` ENABLE KEYS */;

-- Struktúra mentése tábla space_component. iss
CREATE TABLE IF NOT EXISTS `iss` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img_name` varchar(50) NOT NULL DEFAULT '0',
  `text` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

-- Tábla adatainak mentése space_component.iss: ~2 rows (hozzávetőleg)
/*!40000 ALTER TABLE `iss` DISABLE KEYS */;
INSERT INTO `iss` (`id`, `img_name`, `text`) VALUES
	(2, 'iss2', 'Over in the Tranquility module, NASA Flight Engineer Shane Kimbrough, with assistance from Vande Hei and Pesquet, continued more maintenance work on the Water Processing Assembly (WPA) due to a suspected leak. The WPA, which recycles water into drinkable water, has been powered down for several days during the troubleshooting work. The crew is fine and has several months of water supply on the station if necessary.'),
	(4, 'iss1', 'As of January 2018, 230 individuals from 18 countries have visited the International Space Station. Top participating countries include the United States (145 people) and Russia (46 people). Astronaut time and research time on the space station is allocated to space agencies according to how much money or resources (such as modules or robotics) that they contribute. The ISS includes contributions from 15 nations. NASA (United States), Roscosmos (Russia) and the European Space Agency are the major partners of the space station who contribute most of the funding; the other partners are the Japanese Aerospace Exploration Agency and the Canadian Space Agency.');
/*!40000 ALTER TABLE `iss` ENABLE KEYS */;

-- Struktúra mentése tábla space_component. stratosphere
CREATE TABLE IF NOT EXISTS `stratosphere` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img_name` varchar(50) NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- Tábla adatainak mentése space_component.stratosphere: ~2 rows (hozzávetőleg)
/*!40000 ALTER TABLE `stratosphere` DISABLE KEYS */;
INSERT INTO `stratosphere` (`id`, `img_name`, `text`) VALUES
	(1, 'stratosphere1', 'The bottom of the stratosphere is around 10 km (6.2 miles or about 33,000 feet) above the ground at middle latitudes. The top of the stratosphere occurs at an altitude of 50 km (31 miles). The height of the bottom of the stratosphere varies with latitude and with the seasons. The lower boundary of the stratosphere can be as high as 20 km (12 miles or 65,000 feet) near the equator and as low as 7 km (4 miles or 23,000 feet) at the poles in winter. The lower boundary of the stratosphere is called the tropopause; the upper boundary is called the stratopause.'),
	(2, 'stratosphere2', 'The stratosphere is very dry; air there contains little water vapor. Because of this, few clouds are found in this layer; almost all clouds occur in the lower, more humid troposphere. Polar stratospheric clouds (PSCs) are the exception. PSCs appear in the lower stratosphere near the poles in winter. They are found at altitudes of 15 to 25 km (9.3 to 15.5 miles) and form only when temperatures at those heights dip below -78° C. They appear to help cause the formation of the infamous holes in the ozone layer by "encouraging" certain chemical reactions that destroy ozone. PSCs are also called nacreous clouds.');
/*!40000 ALTER TABLE `stratosphere` ENABLE KEYS */;

-- Struktúra mentése tábla space_component. users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(250) NOT NULL DEFAULT '0',
  `lastname` varchar(250) NOT NULL DEFAULT '0',
  `username` varchar(250) NOT NULL DEFAULT '0',
  `email` varchar(250) NOT NULL DEFAULT '0',
  `password` varchar(500) NOT NULL DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;

-- Tábla adatainak mentése space_component.users: ~6 rows (hozzávetőleg)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `email`, `password`, `created_at`) VALUES
	(3, 'Kovács', 'Attila', 'kovi', 'kovi@gmail.com', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2 ', '2021-05-19 11:05:54'),
	(4, 'Horváth', 'Simon', 'simonka', 'simon@gmail.com', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db ', '2021-05-20 08:05:16'),
	(5, 'Teréz', 'Varga', 'varga19', 'varga@gmail.com', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2 ', '2021-05-21 08:05:53'),
	(6, '0', '0', 'lali28', 'lali28@gmail.com', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2 ', '2021-05-21 08:05:40'),
	(10, 'Nagy', 'Pál', 'pali', 'pali@valami.hu', '123', '2020-04-12 00:00:00'),
	(17, 'adsad', 'adsad', 'asdar', 'asdsa@gmail.com', 'ba3253876aed6bc22d4a6ff53d8406c6ad864195ed144ab5c87621b6c233b548baeae6956df346ec8c17f5ea10f35ee3cbc514797ed7ddd3145464e2a0bab413 ', '2021-05-21 09:05:10');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
