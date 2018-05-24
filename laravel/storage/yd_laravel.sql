/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : yd_laravel

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2018-05-24 22:05:56
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `lar_admins`
-- ----------------------------
DROP TABLE IF EXISTS `lar_admins`;
CREATE TABLE `lar_admins` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT '' COMMENT '管理员姓名',
  `email` varchar(255) DEFAULT '' COMMENT '管理员邮箱',
  `password` varchar(255) DEFAULT '' COMMENT '登录密码',
  `remember_token` varchar(100) DEFAULT '',
  `sex` tinyint(3) DEFAULT '0' COMMENT '性别',
  `birthday` date DEFAULT NULL COMMENT '生日',
  `telephone` varchar(20) DEFAULT '' COMMENT '联系电话',
  `facebook` varchar(20) DEFAULT '' COMMENT 'Facebook 账号',
  `twitter` varchar(20) DEFAULT '' COMMENT 'Twitter 账号',
  `google` varchar(30) DEFAULT '' COMMENT 'Google+ 账号',
  `profile_pic` varchar(30) DEFAULT NULL COMMENT '管理员头像',
  `created_at` datetime DEFAULT NULL COMMENT '添加时间',
  `updated_at` datetime DEFAULT NULL COMMENT '修改时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of lar_admins
-- ----------------------------
INSERT INTO `lar_admins` VALUES ('1', '小饶', '18798276809@163.com', '$2y$10$Rkgqi9MSDZB4aZ0y8wUCLOEiGq1V4Zb0cd0.fUQXqvP6Pe1Gb1qL6', 'wnL6fRjEpGgN03HafAKFztSE4hQVK2XFqvQNfPaPpE4cLlYAA6SBpFXC8Vrr', '0', null, '', '', '', '', null, '2018-05-20 07:00:22', '2018-05-23 13:17:56');
INSERT INTO `lar_admins` VALUES ('2', '小饶', '18798276809@163.com', '$2y$10$ypfIyd0tQ2Lk1fIeNf.t8OBovKhDD.1Wmcj.eLX7beNcXmoqh9Ehm', '', '0', null, '', '', '', '', null, '2018-05-20 07:13:31', '2018-05-20 07:13:31');

-- ----------------------------
-- Table structure for `lar_admin_roles`
-- ----------------------------
DROP TABLE IF EXISTS `lar_admin_roles`;
CREATE TABLE `lar_admin_roles` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `admin_id` int(11) NOT NULL DEFAULT '0' COMMENT '用户id',
  `role_id` int(11) NOT NULL DEFAULT '0' COMMENT '角色ID',
  `created_at` datetime DEFAULT NULL COMMENT '插入时间',
  PRIMARY KEY (`id`),
  KEY `idx_user_id` (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='用户角色表';

-- ----------------------------
-- Records of lar_admin_roles
-- ----------------------------
INSERT INTO `lar_admin_roles` VALUES ('1', '3', '8', '2018-04-29 12:57:52');
INSERT INTO `lar_admin_roles` VALUES ('2', '3', '9', '2018-04-29 17:35:47');

-- ----------------------------
-- Table structure for `lar_failed_jobs`
-- ----------------------------
DROP TABLE IF EXISTS `lar_failed_jobs`;
CREATE TABLE `lar_failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8_unicode_ci NOT NULL,
  `queue` text COLLATE utf8_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of lar_failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for `lar_jobs`
-- ----------------------------
DROP TABLE IF EXISTS `lar_jobs`;
CREATE TABLE `lar_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8_unicode_ci NOT NULL,
  `attempts` tinyint(3) unsigned NOT NULL,
  `reserved_at` int(10) unsigned DEFAULT NULL,
  `available_at` int(10) unsigned NOT NULL,
  `created_at` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_reserved_at_index` (`queue`,`reserved_at`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of lar_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for `lar_menus`
-- ----------------------------
DROP TABLE IF EXISTS `lar_menus`;
CREATE TABLE `lar_menus` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` bigint(20) DEFAULT '0' COMMENT '父菜单ID，一级菜单为0',
  `name` varchar(50) DEFAULT '' COMMENT '菜单名称',
  `url` varchar(200) DEFAULT '' COMMENT '菜单URL',
  `type` int(11) DEFAULT NULL COMMENT '类型   0：目录   1：菜单   2：按钮',
  `icon` varchar(50) DEFAULT NULL COMMENT '菜单图标',
  `status` int(2) DEFAULT '1' COMMENT '菜单状态（1:启用，2:禁用）',
  `created_at` datetime DEFAULT NULL COMMENT '创建时间',
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '修改时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COMMENT='菜单管理';

-- ----------------------------
-- Records of lar_menus
-- ----------------------------
INSERT INTO `lar_menus` VALUES ('1', '0', '系统管理', 'http://www.baidu.com', '0', 'fa fa-tachometer', '1', '2018-04-12 19:49:20', '2018-04-14 17:54:57');
INSERT INTO `lar_menus` VALUES ('2', '0', '控制台', 'http://www.baidu.com', '1', 'fa fa-cogs', '1', '2018-04-12 19:50:24', '2018-04-14 17:55:00');
INSERT INTO `lar_menus` VALUES ('3', '1', '菜单管理', '/backend/menus/menuview', '1', 'glyphicon glyphicon-list', '1', '2018-04-12 19:51:37', '2018-05-21 20:45:44');
INSERT INTO `lar_menus` VALUES ('4', '1', '角色管理', '/backend/roles/roleview', '1', null, '1', '2018-04-12 19:52:14', '2018-05-24 20:29:07');
INSERT INTO `lar_menus` VALUES ('5', '1', '权限管理', '/test/test', '1', null, '1', '2018-04-12 19:52:49', '2018-05-07 19:40:24');
INSERT INTO `lar_menus` VALUES ('6', '1', '二级菜单', 'http://www.baidu.com', '0', null, '1', '2018-04-12 19:54:17', '2018-04-12 19:54:20');
INSERT INTO `lar_menus` VALUES ('7', '6', '二级子菜单', 'http://www.baidu.com', '0', null, '1', '2018-04-12 19:57:28', '2018-04-13 20:19:37');
INSERT INTO `lar_menus` VALUES ('8', '7', '三级菜单', 'http://www.baidu.com', '0', null, '1', '2018-04-12 19:57:26', '2018-04-12 19:58:39');
INSERT INTO `lar_menus` VALUES ('9', '8', '四级菜单', 'http://www.baidu.com', '0', null, '1', '2018-04-12 20:00:13', '2018-04-12 20:00:28');
INSERT INTO `lar_menus` VALUES ('10', '9', '阿什顿发', 'http://www.lar.test.com/index/test', '1', null, '1', null, '2018-04-14 17:33:53');
INSERT INTO `lar_menus` VALUES ('11', '0', '微信管理', '', '0', 'fa fa-comments', '1', null, '2018-04-14 17:55:41');
INSERT INTO `lar_menus` VALUES ('12', '1', 'jqGrid内联编辑', '/backend/menus/menuviewtest2', '1', 'glyphicon glyphicon-list', '1', null, '2018-05-21 20:46:43');
INSERT INTO `lar_menus` VALUES ('13', '0', '个人信息', '', '0', 'glyphicon glyphicon-user', '1', '2018-04-21 16:15:39', '2018-04-21 16:23:21');
INSERT INTO `lar_menus` VALUES ('14', '13', '个人简介', '/admin/profile', '1', '', '1', null, '2018-04-21 16:23:20');
INSERT INTO `lar_menus` VALUES ('15', '11', '微信菜单管理', '/wachat/menu', '1', '', '1', null, '2018-05-07 22:08:30');
INSERT INTO `lar_menus` VALUES ('16', '2', 'wwwwww', '', '0', null, '1', '2018-04-29 08:27:50', '2018-04-29 08:27:50');
INSERT INTO `lar_menus` VALUES ('17', '2', 'testname', 'admin/asdfas-------1111111111-', '1', null, '1', '2018-04-29 08:29:08', '2018-04-29 08:37:05');
INSERT INTO `lar_menus` VALUES ('18', '0', '表格模板', '', '0', 'fa fa-tachometer', '1', '2018-05-24 19:51:44', '2018-05-24 19:51:48');
INSERT INTO `lar_menus` VALUES ('19', '18', 'EasyUi Table', '/backend/test/easyuitable', '1', 'fa fa-tachometer', '1', null, '2018-05-24 19:56:42');
INSERT INTO `lar_menus` VALUES ('20', '18', 'DataTables', '/backend/test/datatables', '1', 'fa fa-tachometer', '1', null, '2018-05-24 19:55:02');
INSERT INTO `lar_menus` VALUES ('21', '18', 'jqGrid Table', '/backend/test/jqgridtables', '1', 'fa fa-tachometer', '1', null, '2018-05-24 19:55:03');

-- ----------------------------
-- Table structure for `lar_message`
-- ----------------------------
DROP TABLE IF EXISTS `lar_message`;
CREATE TABLE `lar_message` (
  `id` int(8) unsigned NOT NULL AUTO_INCREMENT,
  `type` tinyint(4) DEFAULT '1',
  `user_id` int(8) DEFAULT '0',
  `title` varchar(50) DEFAULT '',
  `content` text COMMENT '消息内容',
  `is_read` tinyint(3) DEFAULT '1' COMMENT '是否查看',
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of lar_message
-- ----------------------------
INSERT INTO `lar_message` VALUES ('1', '1', '1', '修改密码', '那就看你接口 可没空理你了困难', null, '2018-05-07 21:52:29');

-- ----------------------------
-- Table structure for `lar_migrations`
-- ----------------------------
DROP TABLE IF EXISTS `lar_migrations`;
CREATE TABLE `lar_migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of lar_migrations
-- ----------------------------
INSERT INTO `lar_migrations` VALUES ('1', '2014_10_12_000000_create_users_table', '1');
INSERT INTO `lar_migrations` VALUES ('2', '2014_10_12_100000_create_password_resets_table', '1');
INSERT INTO `lar_migrations` VALUES ('3', '2018_05_10_143447_create_jobs_table', '2');
INSERT INTO `lar_migrations` VALUES ('4', '2018_05_10_143518_create_failed_jobs_table', '2');

-- ----------------------------
-- Table structure for `lar_permissions`
-- ----------------------------
DROP TABLE IF EXISTS `lar_permissions`;
CREATE TABLE `lar_permissions` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL DEFAULT '' COMMENT '权限名称',
  `url` varchar(200) NOT NULL DEFAULT '' COMMENT 'json 数组',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '状态 1：有效 0：无效',
  `updated_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '最后一次更新时间',
  `created_time` datetime DEFAULT NULL COMMENT '插入时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='权限详情表';

-- ----------------------------
-- Records of lar_permissions
-- ----------------------------
INSERT INTO `lar_permissions` VALUES ('1', 'asdfa', '/admin/asdfa', '1', '2018-04-29 17:55:51', null);

-- ----------------------------
-- Table structure for `lar_roles`
-- ----------------------------
DROP TABLE IF EXISTS `lar_roles`;
CREATE TABLE `lar_roles` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '' COMMENT '角色名称',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '状态 1：有效 0：无效',
  `created_at` datetime DEFAULT NULL COMMENT '角色创建时间',
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '角色更新时间',
  PRIMARY KEY (`id`),
  UNIQUE KEY `idx_name` (`name`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COMMENT='角色表';

-- ----------------------------
-- Records of lar_roles
-- ----------------------------
INSERT INTO `lar_roles` VALUES ('8', '超级管理员2', '1', '2018-04-29 14:47:11', '2018-04-29 17:33:47');
INSERT INTO `lar_roles` VALUES ('9', '管理员', '1', '2018-04-29 17:35:31', '2018-04-29 17:35:34');

-- ----------------------------
-- Table structure for `lar_role_permissions`
-- ----------------------------
DROP TABLE IF EXISTS `lar_role_permissions`;
CREATE TABLE `lar_role_permissions` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NOT NULL DEFAULT '0' COMMENT '角色id',
  `permission_id` int(11) NOT NULL DEFAULT '0' COMMENT '权限id',
  `created_time` datetime DEFAULT NULL COMMENT '添加权限时间',
  PRIMARY KEY (`id`),
  KEY `idx_role_id` (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COMMENT='角色权限表';

-- ----------------------------
-- Records of lar_role_permissions
-- ----------------------------
INSERT INTO `lar_role_permissions` VALUES ('9', '8', '1', null);
INSERT INTO `lar_role_permissions` VALUES ('10', '9', '1', null);

-- ----------------------------
-- Table structure for `lar_users`
-- ----------------------------
DROP TABLE IF EXISTS `lar_users`;
CREATE TABLE `lar_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of lar_users
-- ----------------------------
INSERT INTO `lar_users` VALUES ('2', '嘿！boy', '1276816843@qq.com', '$2y$10$4WntIaR7285Nck7SmyptL.h27UAyCTM9R5OYvmr9zMn.kOU3QcmHC', '0eatY8e8zUIdtCUlGONL6In5k2zlFL1Im867JKravbqsieDNW8gfJTjux12X', '2018-03-26 07:07:11', '2018-03-26 07:07:11');
INSERT INTO `lar_users` VALUES ('3', 'dongge', '837215079@qq.com', '$2y$10$yjdIZg870a6GC1D9j3Ht6uGnfO5DfMLWKYoS40Es9vuN2fpNT1062', 'DKI2D4dRmGZSn6nDu3CAkyE63PADp30NohuKa0Sbzze4afG9kMae82EWnzJm', '2018-04-29 07:49:54', '2018-04-29 07:49:54');
DROP TRIGGER IF EXISTS `permissions_del`;
DELIMITER ;;
CREATE TRIGGER `permissions_del` AFTER DELETE ON `lar_permissions` FOR EACH ROW BEGIN
      DELETE FROM lar_role_permissions WHERE permission_id= OLD.id;
END
;;
DELIMITER ;
