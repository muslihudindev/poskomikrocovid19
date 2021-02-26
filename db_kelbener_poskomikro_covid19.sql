-- Adminer 4.7.8 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `last_signin` int(11) DEFAULT NULL,
  `created_date` int(11) NOT NULL,
  `ip` varchar(255) DEFAULT NULL,
  `verification_key` varchar(255) NOT NULL,
  `admin_group` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `address2` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `zip` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `admin` (`id`, `username`, `password`, `email`, `last_signin`, `created_date`, `ip`, `verification_key`, `admin_group`, `name`, `address`, `address2`, `city`, `state`, `zip`) VALUES
(1,	'admin',	'a1fa99a1724242d0931d4f9c62dd56a6',	'support@gmail.com',	2147483647,	123132121,	'::1',	'dfasdfa3a33a',	1,	'Kelurahan Bener',	'',	'',	'',	'',	0);

DROP TABLE IF EXISTS `admin_groups`;
CREATE TABLE `admin_groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `admin_groups` (`id`, `name`) VALUES
(1,	'Administrator');

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `datasebarancovid`;
CREATE TABLE `datasebarancovid` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `rw` varchar(10) DEFAULT NULL,
  `rw_romawi` varchar(5) DEFAULT NULL,
  `rt` varchar(10) DEFAULT NULL,
  `kasus` varchar(10) DEFAULT NULL,
  `warna` varchar(255) DEFAULT NULL,
  `coords` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `datasebarancovid` (`id`, `rw`, `rw_romawi`, `rt`, `kasus`, `warna`, `coords`) VALUES
(1,	'1',	'I',	'1',	'1',	'green',	'23,9,32,15,37,28,40,45,47,62,52,67,50,75,71,108,71,118,23,117,22,105,27,87,27,55,22,47,19,20'),
(2,	'1',	'I',	'2',	'11',	'green',	'24,119,71,119,73,143,72,155,80,162,81,175,103,194,98,207,100,220,110,242,84,236,48,235,34,233,42,214,42,190,34,168,24,140'),
(3,	'1',	'I',	'3',	'0',	'green',	'85,236,79,265,85,268,80,297,113,303,115,270,121,270,118,259,112,243'),
(4,	'1',	'I',	'4',	'3',	'green',	'42,236,83,237,79,267,83,274,79,299,59,295'),
(5,	'2',	'II',	'5',	'0',	'green',	'23,237,42,238,60,294,110,306,105,330,7,313,9,270'),
(6,	'2',	'II',	'6',	'0',	'green',	'7,314,105,329,103,345,97,364,38,347,2,339'),
(7,	'2',	'II',	'7',	'0',	'green',	'3,340,41,348,85,362,148,382,145,415,136,439,98,427,29,405,27,386,27,379,12,374,-1,370'),
(8,	'3',	'III',	'8',	'0',	'green',	'105,338,156,346,173,346,169,381,148,381,98,366'),
(9,	'3',	'III',	'9',	'0',	'green',	'116,272,122,273,128,283,142,294,158,301,173,307,181,306,173,346,155,345,138,343,106,338,105,329,112,310'),
(10,	'3',	'III',	'10',	'0',	'green',	'182,306,203,291,227,268,242,267,259,280,265,308,263,333,251,363,235,389,202,384,170,381,173,360,174,351'),
(11,	'3',	'III',	'11',	'0',	'green',	'149,382,185,384,204,384,227,390,234,392,229,401,228,422,218,438,200,436,179,426,146,417'),
(12,	'7',	'VII',	'12',	'0',	'green',	'200,439,214,440,228,427,239,444,249,447,282,453,319,474,313,488,299,488,282,479,276,477,266,517,269,521,280,526,268,563,222,550,179,742,124,739,176,544'),
(13,	'4',	'IV',	'13',	'0',	'green',	'344,401,369,397,384,401,381,454,355,454,343,446,345,412'),
(14,	'4',	'IV',	'14',	'0',	'green',	'343,400,369,397,388,403,420,402,443,407,442,399,438,391,424,386,404,372,393,362,385,359,367,359,356,366,343,386'),
(15,	'4',	'IV',	'15',	'0',	'green',	'389,403,418,402,414,457,385,457'),
(16,	'4',	'IV',	'16',	'0',	'green',	'420,402,446,409,448,427,449,460,418,458'),
(17,	'5',	'V',	'17',	'0',	'green',	'328,555,354,563,368,567,360,592,340,592,320,579'),
(18,	'5',	'V',	'18',	'0',	'green',	'319,474,301,530,309,540,300,573,313,578,325,550,374,565,362,595,389,600,390,594,424,556,444,538,446,514,441,498,355,482'),
(19,	'5',	'V',	'19',	'0',	'green',	'318,584,304,623,321,633,325,635,320,657,383,664,394,665,402,632,382,624,381,615,388,602,362,594,341,596,334,596'),
(20,	'6',	'VI',	'20',	'0',	'green',	'179,741,215,744,289,751,376,758,484,770,484,761,481,748,481,730,490,716,501,709,502,682,482,650,472,636,463,630,451,628,447,632,410,635,403,632,393,665,314,658,317,640,300,627,299,621,314,583,220,555,202,639,230,648,223,684,193,679'),
(21,	'6',	'VI',	'21',	'0',	'green',	'202,644,224,651,222,664,199,659'),
(22,	'6',	'VI',	'22',	'0',	'green',	'199,664,221,668,220,681,194,677'),
(23,	'7',	'VII',	'23',	'0',	'green',	'279,482,296,491,313,492,301,530,310,540,300,574,273,566,277,551,285,522,271,517'),
(24,	'7',	'VII',	'24',	'0',	'green',	'27,404,136,439,144,421,177,431,193,441,185,471,183,482,172,522,172,532,160,570,159,580,118,737,93,737,84,734,68,731,72,725,72,710,70,695,70,650,65,619,63,579,55,561,56,540,48,527,53,510,47,464,38,426'),
(25,	'4',	'IV',	'25',	'0',	'green',	'349,481,320,475,282,454,313,454,327,455,341,451,348,454,356,461'),
(27,	'4',	'IV',	'26',	'0',	'green',	'445,536,445,514,440,498,354,483,358,463,362,458,448,466,455,508,455,518');

DROP TABLE IF EXISTS `keterangan`;
CREATE TABLE `keterangan` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `ket` varchar(255) DEFAULT NULL,
  `jml` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `keterangan` (`id`, `ket`, `jml`) VALUES
(1,	'Kasus Positif',	'0'),
(2,	'Sembuh',	'0'),
(3,	'Meninggal',	'0'),
(4,	'Aktif',	'0');

DROP TABLE IF EXISTS `keterangan_detail`;
CREATE TABLE `keterangan_detail` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_keterangan` int(10) DEFAULT NULL,
  `ket` varchar(255) DEFAULT NULL,
  `jml` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_keterangan` (`id_keterangan`),
  CONSTRAINT `keterangan_detail_ibfk_1` FOREIGN KEY (`id_keterangan`) REFERENCES `keterangan` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `keterangan_detail` (`id`, `id_keterangan`, `ket`, `jml`) VALUES
(1,	4,	'Dirawat di RS',	'0'),
(2,	4,	'Isolasi Mandiri',	'0'),
(3,	4,	'Isolasi Shelter',	'0');

-- 2021-02-26 08:29:08
