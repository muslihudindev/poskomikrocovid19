/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 80018
Source Host           : localhost:3306
Source Database       : dbposkomikrocovid

Target Server Type    : MYSQL
Target Server Version : 80018
File Encoding         : 65001

Date: 2021-02-25 15:22:02
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('1', 'admin', 'a1fa99a1724242d0931d4f9c62dd56a6', 'support@gmail.com', '2147483647', '123132121', '::1', 'dfasdfa3a33a', '1', 'Kelurahan Bener', '', '', '', '', '0');

-- ----------------------------
-- Table structure for admin_groups
-- ----------------------------
DROP TABLE IF EXISTS `admin_groups`;
CREATE TABLE `admin_groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of admin_groups
-- ----------------------------
INSERT INTO `admin_groups` VALUES ('1', 'Administrator');

-- ----------------------------
-- Table structure for datasebarancovid
-- ----------------------------
DROP TABLE IF EXISTS `datasebarancovid`;
CREATE TABLE `datasebarancovid` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `rw` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `rt` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `kasus` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `warna` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of datasebarancovid
-- ----------------------------
INSERT INTO `datasebarancovid` VALUES ('1', '1', '1', '0', 'green');
INSERT INTO `datasebarancovid` VALUES ('2', '1', '2', '0', 'green');
INSERT INTO `datasebarancovid` VALUES ('3', '1', '3', '0', 'green');
INSERT INTO `datasebarancovid` VALUES ('4', '1', '4', '0', 'green');
INSERT INTO `datasebarancovid` VALUES ('5', '2', '5', '0', 'green');
INSERT INTO `datasebarancovid` VALUES ('6', '2', '6', '0', 'green');
INSERT INTO `datasebarancovid` VALUES ('7', '2', '7', '0', 'green');
INSERT INTO `datasebarancovid` VALUES ('8', '3', '8', '0', 'green');
INSERT INTO `datasebarancovid` VALUES ('9', '3', '9', '0', 'green');
INSERT INTO `datasebarancovid` VALUES ('10', '3', '10', '0', 'green');
INSERT INTO `datasebarancovid` VALUES ('11', '3', '11', '0', 'green');
INSERT INTO `datasebarancovid` VALUES ('12', '7', '12', '0', 'green');
INSERT INTO `datasebarancovid` VALUES ('13', '4', '13', '0', 'green');
INSERT INTO `datasebarancovid` VALUES ('14', '4', '14', '0', 'green');
INSERT INTO `datasebarancovid` VALUES ('15', '4', '15', '0', 'green');
INSERT INTO `datasebarancovid` VALUES ('16', '4', '16', '0', 'green');
INSERT INTO `datasebarancovid` VALUES ('17', '5', '17', '0', 'green');
INSERT INTO `datasebarancovid` VALUES ('18', '5', '18', '0', 'green');
INSERT INTO `datasebarancovid` VALUES ('19', '5', '19', '0', 'green');
INSERT INTO `datasebarancovid` VALUES ('20', '6', '20', '0', 'green');
INSERT INTO `datasebarancovid` VALUES ('21', '6', '21', '0', 'green');
INSERT INTO `datasebarancovid` VALUES ('22', '6', '22', '0', 'green');
INSERT INTO `datasebarancovid` VALUES ('23', '7', '23', '0', 'green');
INSERT INTO `datasebarancovid` VALUES ('24', '7', '24', '0', 'green');
INSERT INTO `datasebarancovid` VALUES ('25', '4', '25', '0', 'green');

-- ----------------------------
-- Table structure for keterangan
-- ----------------------------
DROP TABLE IF EXISTS `keterangan`;
CREATE TABLE `keterangan` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `ket` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `jml` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of keterangan
-- ----------------------------
INSERT INTO `keterangan` VALUES ('1', 'Kasus Positif', '0');
INSERT INTO `keterangan` VALUES ('2', 'Sembuh', '0');
INSERT INTO `keterangan` VALUES ('3', 'Meninggal', '0');
INSERT INTO `keterangan` VALUES ('4', 'Aktif', '0');

-- ----------------------------
-- Table structure for keterangan_detail
-- ----------------------------
DROP TABLE IF EXISTS `keterangan_detail`;
CREATE TABLE `keterangan_detail` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_keterangan` int(10) DEFAULT NULL,
  `ket` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `jml` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_keterangan` (`id_keterangan`),
  CONSTRAINT `keterangan_detail_ibfk_1` FOREIGN KEY (`id_keterangan`) REFERENCES `keterangan` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of keterangan_detail
-- ----------------------------
INSERT INTO `keterangan_detail` VALUES ('1', '4', 'Dirawat di RS', '0');
INSERT INTO `keterangan_detail` VALUES ('2', '4', 'Isolasi Mandiri', '0');
INSERT INTO `keterangan_detail` VALUES ('3', '4', 'Isolasi Shelter', '0');
SET FOREIGN_KEY_CHECKS=1;
