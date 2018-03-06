/*
Navicat MySQL Data Transfer

Source Server         : 本地连接
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : logsystem

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2018-03-06 16:54:34
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `log`
-- ----------------------------
DROP TABLE IF EXISTS `log`;
CREATE TABLE `log` (
  `id` int(16) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `server_name` varchar(32) CHARACTER SET utf8 DEFAULT NULL COMMENT '服务器名称',
  `server_account` varchar(32) CHARACTER SET utf8 DEFAULT '' COMMENT '服务器账号',
  `server_url` varchar(128) COLLATE utf8_unicode_ci DEFAULT '' COMMENT '服务器地址',
  `server_pass` varchar(255) COLLATE utf8_unicode_ci DEFAULT '' COMMENT '服务器密码',
  `log_path` varchar(255) COLLATE utf8_unicode_ci DEFAULT '/' COMMENT '日志路径',
  `pid` tinyint(4) unsigned DEFAULT NULL COMMENT '父类id',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of log
-- ----------------------------
INSERT INTO `log` VALUES ('3', 'PROD', 'root', '59.110.218.166', 'dfagfdsgh', '/', '0');
INSERT INTO `log` VALUES ('5', 'heshang', 'root', '59.110.218.166', 'dagdagfa', '/opt/lampp/htdocs', '1');
INSERT INTO `log` VALUES ('6', 'xiaozhang', 'admin', '12.123.123.255', 'gsdfg', '/', '2');
INSERT INTO `log` VALUES ('7', 'zhaosi', 'root', '59.112.136.120', 'kfdl\'ajdfgfd', '/', '2');
INSERT INTO `log` VALUES ('8', 'lisi', 'root', '59.110.218.166', 'fsdgfdsgds', '/', '3');
INSERT INTO `log` VALUES ('9', 'wangwu', 'root', '59.110.218.166', 'jkflktgr;asd', '/', '3');
INSERT INTO `log` VALUES ('10', 'qianliu', 'root', '59.110.218.166', 'fjgklfds;gfds', '/', '3');
INSERT INTO `log` VALUES ('15', 'red pig', 'root', '110.110.110.110', '123456', '/opt/lampp/htdocs', '1');
