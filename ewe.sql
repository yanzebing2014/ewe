/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50528
Source Host           : localhost:3306
Source Database       : ewe

Target Server Type    : MYSQL
Target Server Version : 50528
File Encoding         : 65001

Date: 2014-10-29 16:37:42
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `ewe_admin`
-- ----------------------------
DROP TABLE IF EXISTS `ewe_admin`;
CREATE TABLE `ewe_admin` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '用户ID',
  `username` char(16) NOT NULL COMMENT '用户名',
  `password` char(32) NOT NULL COMMENT '密码',
  `realname` char(32) NOT NULL COMMENT '用户姓名',
  `reg_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '注册时间',
  `reg_ip` bigint(20) NOT NULL DEFAULT '0' COMMENT '注册IP',
  `last_login_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '最后登录时间',
  `last_login_ip` bigint(20) NOT NULL DEFAULT '0' COMMENT '最后登录IP',
  `level` int(10) unsigned NOT NULL COMMENT '用户角色等级',
  `status` tinyint(4) DEFAULT '0' COMMENT '用户状态',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `realname` (`realname`),
  KEY `status` (`status`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='用户表';

-- ----------------------------
-- Records of ewe_admin
-- ----------------------------

-- ----------------------------
-- Table structure for `ewe_article`
-- ----------------------------
DROP TABLE IF EXISTS `ewe_article`;
CREATE TABLE `ewe_article` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '文章ID',
  `title` char(255) NOT NULL COMMENT '标题',
  `admin_id` int(10) unsigned NOT NULL COMMENT '编辑的ID',
  `author` char(255) NOT NULL COMMENT '作者或版权信息',
  `describe` varchar(255) NOT NULL COMMENT '描述',
  `img` char(255) NOT NULL COMMENT '缩略图',
  `content` mediumtext NOT NULL COMMENT '文章内容',
  `catid` int(10) unsigned NOT NULL COMMENT '所属栏目id',
  `add_time` char(255) NOT NULL COMMENT '添加时间',
  `update_time` char(255) NOT NULL COMMENT '修改更新时间',
  `status` tinyint(4) unsigned NOT NULL COMMENT '文章状态1或0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ewe_article
-- ----------------------------

-- ----------------------------
-- Table structure for `ewe_category`
-- ----------------------------
DROP TABLE IF EXISTS `ewe_category`;
CREATE TABLE `ewe_category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '栏目ID',
  `cat_name` char(255) NOT NULL COMMENT '栏目名称',
  `parent_catid` int(10) unsigned NOT NULL COMMENT '父级栏目ID',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ewe_category
-- ----------------------------

-- ----------------------------
-- Table structure for `ewe_links`
-- ----------------------------
DROP TABLE IF EXISTS `ewe_links`;
CREATE TABLE `ewe_links` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `web_name` char(255) NOT NULL COMMENT '网站名',
  `web_url` char(255) NOT NULL COMMENT '网站地址',
  `status` tinyint(4) NOT NULL COMMENT '状态1或0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ewe_links
-- ----------------------------
