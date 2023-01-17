/*
 Navicat Premium Data Transfer

 Source Server         : weixin
 Source Server Type    : MySQL
 Source Server Version : 50726
 Source Host           : localhost:3306
 Source Schema         : weixin

 Target Server Type    : MySQL
 Target Server Version : 50726
 File Encoding         : 65001

 Date: 16/01/2023 14:43:36
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for helps
-- ----------------------------
DROP TABLE IF EXISTS `helps`;
CREATE TABLE `helps`  (
  `openid` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `problem` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `reply` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  PRIMARY KEY (`openid`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of helps
-- ----------------------------

SET FOREIGN_KEY_CHECKS = 1;
