/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : instadb

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2021-07-22 23:51:21
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `posts`
-- ----------------------------
DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `user_id` int(3) DEFAULT NULL,
  `caption` varchar(1000) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `updated_at` varchar(255) DEFAULT NULL,
  `flag` int(1) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of posts
-- ----------------------------
INSERT INTO `posts` VALUES ('1', '1', 'tes', 'Certificate.jpg', '2021-07-22 21:34:01', '2021-07-22 14:34:00', '7', null);
INSERT INTO `posts` VALUES ('2', '1', 'tes2', 'Certificate.jpg', '2021-07-22 20:48:52', '2021-07-22 13:11:59', '0', null);

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `status` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'Janu', 'janu@gmail.com', '$2y$10$BlFFTBGwHPYmnlPD3Z2aJuR1XhryFBcsuV0H3QW5dX8csF2eHy8tK', null, '2021-07-22 08:23:30', '2021-07-22 08:23:30', null);
INSERT INTO `users` VALUES ('2', 'Reja', 'reja@mail.com', '$2y$10$8ziUBgbTujAIcAlAFhVra.xfFBIFVSy/uTkNobCrKqItaurPEJRCO', null, '2021-07-22 13:24:31', '2021-07-22 13:24:31', null);

-- ----------------------------
-- Table structure for `user_like`
-- ----------------------------
DROP TABLE IF EXISTS `user_like`;
CREATE TABLE `user_like` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `user_id` int(3) DEFAULT NULL,
  `post_id` int(3) DEFAULT NULL,
  `likes` int(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `user_id_like` (`user_id`),
  KEY `post_id_like` (`post_id`),
  CONSTRAINT `post_id_like` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `user_id_like` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of user_like
-- ----------------------------
INSERT INTO `user_like` VALUES ('1', '2', null, '1', '2021-07-22 13:55:07', '2021-07-22 13:55:07');
INSERT INTO `user_like` VALUES ('2', '2', '1', '1', '2021-07-22 13:56:09', '2021-07-22 13:56:09');
INSERT INTO `user_like` VALUES ('3', '1', '1', '1', '2021-07-22 14:30:15', '2021-07-22 14:30:15');
INSERT INTO `user_like` VALUES ('4', '1', '1', '1', '2021-07-22 14:34:00', '2021-07-22 14:34:00');
