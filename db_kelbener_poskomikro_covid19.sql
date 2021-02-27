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
(1,	'1',	'I',	'1',	'1',	'green',	'69,18,78,25,85,39,86,51,91,63,99,75,98,86,106,97,118,116,118,127,70,128,69,114,73,92,73,62,68,55,70,44,65,29'),
(2,	'1',	'I',	'2',	'11',	'green',	'71,131,120,132,120,151,121,166,129,173,129,184,151,202,145,216,146,227,156,249,131,243,96,244,81,242,88,224,89,198,84,180,70,148'),
(3,	'1',	'I',	'3',	'0',	'green',	'129,247,149,247,156,248,160,258,165,267,167,279,158,278,154,283,155,310,127,305,133,277,126,273,128,257'),
(4,	'1',	'I',	'4',	'3',	'green',	'93,246,123,248,124,262,121,273,126,278,123,304,107,303,112,272,101,269'),
(5,	'2',	'II',	'5',	'0',	'green',	'68,246,90,248,95,272,107,274,106,305,156,314,155,324,150,338,120,334,107,332,52,321,56,276,63,262'),
(6,	'2',	'II',	'6',	'0',	'green',	'107,335,149,343,148,355,143,371,83,354,48,345,52,322,106,332,107,335'),
(7,	'2',	'II',	'7',	'0',	'green',	'49,344,84,355,84,362,89,360,127,371,132,373,137,371,194,391,191,424,180,450,117,432,78,421,72,411,72,388,57,383,47,376'),
(8,	'3',	'III',	'8',	'0',	'green',	'152,349,198,354,203,358,217,358,213,387,197,388,146,371'),
(9,	'3',	'III',	'9',	'0',	'green',	'166,280,159,279,159,317,160,323,154,340,152,346,178,350,184,352,199,352,204,354,216,355,227,314,217,315,205,311,192,305,174,291'),
(10,	'3',	'III',	'10',	'0',	'green',	'229,314,249,301,261,288,273,278,288,277,303,289,308,315,310,340,290,379,282,397,274,396,258,393,248,392,241,390,218,390,219,364,221,352,226,331'),
(11,	'3',	'III',	'11',	'0',	'green',	'198,391,227,392,245,393,273,398,280,399,276,408,272,430,276,435,263,446,244,444,227,435,220,433,194,426'),
(12,	'7',	'VII',	'12',	'0',	'green',	'170,747,187,686,224,690,223,684,188,680,220,554,245,449,260,450,275,436,281,448,290,457,306,456,358,487,354,497,342,495,322,486,310,526,314,531,326,534,314,573,267,560,245,668,228,751'),
(13,	'4',	'IV',	'13',	'0',	'green',	'388,407,416,405,432,408,427,464,411,464,401,464,388,456,393,419'),
(14,	'4',	'IV',	'14',	'0',	'green',	'389,407,413,405,432,409,464,409,490,415,487,407,483,398,470,393,452,380,435,367,430,366,415,366,402,373,388,396'),
(15,	'4',	'IV',	'15',	'0',	'green',	'435,409,463,409,460,466,430,466'),
(16,	'4',	'IV',	'16',	'0',	'green',	'464,466,493,469,493,434,489,416,466,411'),
(17,	'5',	'V',	'17',	'0',	'green',	'395,571,400,570,414,575,405,601,386,602,364,588,374,564'),
(18,	'5',	'V',	'18',	'0',	'green',	'357,486,394,490,485,506,492,520,491,545,452,585,436,601,434,610,408,602,420,573,377,559,371,557,361,588,346,580,355,548,345,533'),
(19,	'5',	'V',	'19',	'0',	'green',	'365,593,382,607,387,606,409,604,433,610,426,624,427,632,452,642,440,676,433,675,434,654,428,654,428,672,366,666,368,653,395,655,396,651,368,651,369,643,351,635'),
(20,	'6',	'VI',	'20',	'0',	'green',	'245,672,266,675,265,689,241,686'),
(21,	'6',	'VI',	'21',	'0',	'green',	'270,659,268,671,245,668,250,653'),
(22,	'6',	'VI',	'22',	'0',	'green',	'340,760,423,768,532,779,531,770,528,757,528,740,535,728,548,718,550,691,525,651,517,644,508,639,498,637,493,642,457,644,452,643,440,677,361,667,366,649,348,639,346,632,361,593,267,564,249,652,277,654,269,694,241,688,228,750'),
(23,	'7',	'VII',	'23',	'0',	'green',	'327,492,340,499,353,501,345,532,355,549,346,582,320,576,319,569,330,532,318,526,316,521'),
(24,	'7',	'VII',	'24',	'0',	'green',	'79,422,180,451,190,429,219,439,238,447,232,479,225,479,162,465,164,469,170,469,198,479,229,486,228,492,218,531,205,529,179,519,178,525,217,537,205,579,131,569,131,575,204,585,164,745,139,746,130,740,122,742,113,741,117,733,116,718,115,705,115,660,109,623,109,587,100,568,103,548,96,537,98,515,91,469'),
(25,	'4',	'IV',	'25',	'0',	'green',	'311,458,360,464,379,464,386,461,393,462,401,469,394,489,358,486'),
(27,	'4',	'IV',	'26',	'0',	'green',	'403,471,408,467,495,473,501,525,492,545,492,520,486,506,398,490');

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

-- 2021-02-27 10:44:46
