/*
Navicat MySQL Data Transfer

Source Server         : PHP
Source Server Version : 50634
Source Host           : localhost:3307
Source Database       : PHP_Project

Target Server Type    : MYSQL
Target Server Version : 50634
File Encoding         : 65001

Date: 2017-06-26 18:26:11
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for Groups
-- ----------------------------
DROP TABLE IF EXISTS `Groups`;
CREATE TABLE `Groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `date_start` datetime DEFAULT NULL,
  `date_finish` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of Groups
-- ----------------------------
INSERT INTO `Groups` VALUES ('1', 'php1', '2017-06-05 18:30:00', '2017-09-01 18:00:02');

-- ----------------------------
-- Table structure for Lessons
-- ----------------------------
DROP TABLE IF EXISTS `Lessons`;
CREATE TABLE `Lessons` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `desription` varchar(255) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of Lessons
-- ----------------------------
INSERT INTO `Lessons` VALUES ('1', '1 lesson', 'start', '2017-06-05 18:30:30');

-- ----------------------------
-- Table structure for Results
-- ----------------------------
DROP TABLE IF EXISTS `Results`;
CREATE TABLE `Results` (
  `id` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `task_id` int(11) NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`user_id`,`task_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of Results
-- ----------------------------

-- ----------------------------
-- Table structure for Tasks
-- ----------------------------
DROP TABLE IF EXISTS `Tasks`;
CREATE TABLE `Tasks` (
  `id` int(11) DEFAULT NULL,
  `lesson_id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`lesson_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of Tasks
-- ----------------------------

-- ----------------------------
-- Table structure for Users
-- ----------------------------
DROP TABLE IF EXISTS `Users`;
CREATE TABLE `Users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `FIO` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `birth` date DEFAULT NULL,
  PRIMARY KEY (`id`,`group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of Users
-- ----------------------------
