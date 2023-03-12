/*
 Navicat Premium Data Transfer

 Source Server         : lokal
 Source Server Type    : MariaDB
 Source Server Version : 100313
 Source Host           : localhost:3306
 Source Schema         : fikcup_2021

 Target Server Type    : MariaDB
 Target Server Version : 100313
 File Encoding         : 65001

 Date: 02/02/2022 21:20:29
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for t_anggota
-- ----------------------------
DROP TABLE IF EXISTS `t_anggota`;
CREATE TABLE `t_anggota`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_team` int(11) NOT NULL,
  `nama_lengkap` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nickname` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `id_pubg` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `role` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `no_wa` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `dir_ktp` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `created_at` datetime(0) NOT NULL,
  `modified_at` datetime(0) NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `team`(`id_team`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 32 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of t_anggota
-- ----------------------------
INSERT INTO `t_anggota` VALUES (28, 2147483647, 'kjasksakjn', 'kjnaskjnas', '12329943', 'ketua', '62123432333212', 'qswqsdsdsd@assa.sa', 'ktp_7903020210512115634.jpeg', '2021-05-12 11:56:00', '2021-05-12 11:56:00');
INSERT INTO `t_anggota` VALUES (29, 2147483647, 'wqedfbfewdfw', 'sddcdwedscds', '1223112321', 'agt1', '62923989832232', 'wsdccdwds@assas.sa', 'ktp_3284220210512115702.jpg', '2021-05-12 11:57:00', '2021-05-12 11:57:00');
INSERT INTO `t_anggota` VALUES (30, 2147483647, 'asdfgewdffwdsx', 'hsndjicmk ddwls', '612739809321', 'agt2', '621234221232112', 'ascdsaxax@assaas.as', 'ktp_3956220210512115725.png', '2021-05-12 11:57:00', '2021-05-12 11:57:00');
INSERT INTO `t_anggota` VALUES (31, 2147483647, 'wsdfvffdewedsvcfdscvds', 'assdfvfdfcvdsxxcsd', '91820280821', 'agt3', '621876128', 'asxbjs nsaxz@asddsa.assa', 'ktp_4705820210512115749.jpeg', '2021-05-12 11:57:00', '2021-05-12 11:57:00');

-- ----------------------------
-- Table structure for t_pembayaran
-- ----------------------------
DROP TABLE IF EXISTS `t_pembayaran`;
CREATE TABLE `t_pembayaran`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pembayaran` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `status` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kewajiban` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `payment` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `created_at` datetime(0) NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `dir_pembayaran` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `modified_at` datetime(0) NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `modified_by` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of t_pembayaran
-- ----------------------------
INSERT INTO `t_pembayaran` VALUES (9, 'webinar', 'adityakurnia.p@gmail.com', '1', '10000', '10000', '2021-05-12 23:29:14', '94ef380020545060a13de86942adda3e.jpeg', '2021-05-12 23:29:14', '102001');

-- ----------------------------
-- Table structure for t_team
-- ----------------------------
DROP TABLE IF EXISTS `t_team`;
CREATE TABLE `t_team`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nama_tim` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `domisili` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nomor_contact_wa` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `status` int(3) NOT NULL,
  `created_at` datetime(0) NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_at` datetime(0) NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`, `email`) USING BTREE,
  INDEX `id`(`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2147483648 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of t_team
-- ----------------------------
INSERT INTO `t_team` VALUES (2147483647, 'dinus@gmail.com', 'Dinus Team', 'Semarang', '6282277832588', 2, '2021-05-12 11:56:00', '2021-05-12 21:56:49');

-- ----------------------------
-- Table structure for t_user
-- ----------------------------
DROP TABLE IF EXISTS `t_user`;
CREATE TABLE `t_user`  (
  `id` int(11) NOT NULL,
  `username` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `role` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `modified_at` datetime(0) NULL DEFAULT NULL,
  `modified_by` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`, `username`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of t_user
-- ----------------------------
INSERT INTO `t_user` VALUES (102001, 'superadmin', 'hokiguys102001', '1', '2021-04-07 08:55:00', '2021-04-07 08:55:03', '102001');
INSERT INTO `t_user` VALUES (102002, 'admin', 'rakitkarya01', '2', '2021-05-11 00:13:51', '2021-05-11 00:13:54', '102001');
INSERT INTO `t_user` VALUES (102003, 'sella_kyut', 'sella_kyut01', '3', '2021-05-11 00:15:59', '2021-05-11 00:16:02', '102001');
INSERT INTO `t_user` VALUES (102004, 'alya_kyut', 'alya_kyut01', '3', '2021-05-11 00:16:29', '2021-05-11 00:16:33', '102001');

-- ----------------------------
-- Table structure for t_webinar
-- ----------------------------
DROP TABLE IF EXISTS `t_webinar`;
CREATE TABLE `t_webinar`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `no_wa` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `domisili` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `dir_ktp` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `is_fixcup` int(1) NOT NULL,
  `created_at` datetime(0) NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_at` datetime(0) NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 19 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of t_webinar
-- ----------------------------
INSERT INTO `t_webinar` VALUES (14, 'Aditya Kurnia Webinar', 'adityakurnia.p@gmail.com', '6282277832588', 'Semarang', 'ktp_8349120210512115544.jpeg', 0, '2021-05-12 11:55:00', '2021-05-12 11:55:00');
INSERT INTO `t_webinar` VALUES (15, 'kjasksakjn', 'duplicate_qswqsdsdsd@assa.sa', '62123432333212', 'Semarang', 'ktp_7903020210512115634.jpeg', 1, '2021-05-12 11:57:00', '2021-05-12 21:58:53');
INSERT INTO `t_webinar` VALUES (16, 'wqedfbfewdfw', 'duplicate_wsdccdwds@assas.sa', '62923989832232', 'Semarang', 'ktp_3284220210512115702.jpg', 1, '2021-05-12 11:57:00', '2021-05-12 21:58:54');
INSERT INTO `t_webinar` VALUES (17, 'asdfgewdffwdsx', 'duplicate_ascdsaxax@assaas.as', '621234221232112', 'Semarang', 'ktp_3956220210512115725.png', 1, '2021-05-12 11:57:00', '2021-05-12 21:58:55');
INSERT INTO `t_webinar` VALUES (18, 'wsdfvffdewedsvcfdscvds', 'duplicate_asxbjs nsaxz@asddsa.assa', '621876128', 'Semarang', 'ktp_4705820210512115749.jpeg', 1, '2021-05-12 11:57:00', '2021-05-12 21:58:57');

SET FOREIGN_KEY_CHECKS = 1;
