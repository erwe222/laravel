/*
Navicat MySQL Data Transfer

Source Server         : 59.110.168.230
Source Server Version : 50629
Source Host           : 59.110.168.230:3306
Source Database       : yd_site

Target Server Type    : MYSQL
Target Server Version : 50629
File Encoding         : 65001

Date: 2018-07-29 10:52:01
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `yd_action_log`
-- ----------------------------
DROP TABLE IF EXISTS `yd_action_log`;
CREATE TABLE `yd_action_log` (
  `id` int(4) NOT NULL AUTO_INCREMENT COMMENT '日志ID号',
  `manager_id` int(4) DEFAULT '0' COMMENT '后台人员ID号',
  `action` varchar(20) DEFAULT 'add' COMMENT '操作动作标识',
  `summary` varchar(100) DEFAULT '' COMMENT '操作摘要内容',
  `created_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '操作时间',
  PRIMARY KEY (`id`),
  KEY `manager_id` (`manager_id`) USING BTREE COMMENT '链接管理人员ID'
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yd_action_log
-- ----------------------------
INSERT INTO `yd_action_log` VALUES ('1', '1', 'login', '于[2016-11-03 15:19:34]登录后台...', '2016-11-03 15:19:34');
INSERT INTO `yd_action_log` VALUES ('2', '1', 'add', '于[2016-11-03 15:20:58]添加了新加工厂商[深圳市奔强电路有限公司]信息...', '2016-11-03 15:20:58');
INSERT INTO `yd_action_log` VALUES ('3', '1', 'modi', '于[2016-11-03 15:21:34]更新了用户[丁一]个人信息...', '2016-11-03 15:21:34');
INSERT INTO `yd_action_log` VALUES ('4', '1', 'modi', '于[2016-11-03 15:21:46]更新了用户[王文凤]个人信息...', '2016-11-03 15:21:46');
INSERT INTO `yd_action_log` VALUES ('5', '1', 'modi', '于[2016-11-03 15:22:09]更新了用户[陈广超]个人信息...', '2016-11-03 15:22:09');
INSERT INTO `yd_action_log` VALUES ('6', '1', 'modi', '于[2016-11-03 15:23:09]更新了用户[王艳]个人信息...', '2016-11-03 15:23:09');
INSERT INTO `yd_action_log` VALUES ('7', '2', 'login', '于[2016-11-03 15:30:43]登录后台...', '2016-11-03 15:30:43');
INSERT INTO `yd_action_log` VALUES ('8', '2', 'upload', '于[2016-11-03 15:37:00]上传产品[S4I6]加工说明文档[16882原稿.rar]', '2016-11-03 15:37:00');
INSERT INTO `yd_action_log` VALUES ('9', '2', 'upload', '于[2016-11-03 15:38:46]上传产品[S4I6]加工说明文档[16882原稿.rar]', '2016-11-03 15:38:46');
INSERT INTO `yd_action_log` VALUES ('10', '2', 'upload', '于[2016-11-03 15:45:17]上传产品[S2I7]加工说明文档[16668原稿.rar]', '2016-11-03 15:45:17');
INSERT INTO `yd_action_log` VALUES ('11', '2', 'upload', '于[2016-11-03 15:46:57]上传产品[S2I1]加工说明文档[16832 工艺要求 .zip]', '2016-11-03 15:46:57');
INSERT INTO `yd_action_log` VALUES ('12', '2', 'modi', '于[2016-11-03 15:47:11]添加或编辑了产品[S2I7]审核状态[正常]问题描述内容[]', '2016-11-03 15:47:11');
INSERT INTO `yd_action_log` VALUES ('13', '2', 'modi', '于[2016-11-03 15:47:14]添加或编辑了产品[S4I6]审核状态[正常]问题描述内容[]', '2016-11-03 15:47:14');
INSERT INTO `yd_action_log` VALUES ('14', '2', 'modi', '于[2016-11-03 15:47:21]添加或编辑了产品[S2I1]审核状态[正常]问题描述内容[]', '2016-11-03 15:47:21');
INSERT INTO `yd_action_log` VALUES ('15', '4', 'login', '于[2016-11-03 15:48:29]登录后台...', '2016-11-03 15:48:29');
INSERT INTO `yd_action_log` VALUES ('16', '4', 'modi', '于[2016-11-03 15:50:06]审核产品[S2I7]结果为[1]', '2016-11-03 15:50:06');
INSERT INTO `yd_action_log` VALUES ('17', '4', 'modi', '于[2016-11-03 15:50:13]审核产品[S4I6]结果为[1]', '2016-11-03 15:50:13');
INSERT INTO `yd_action_log` VALUES ('18', '4', 'modi', '于[2016-11-03 15:50:19]审核产品[S2I1]结果为[1]', '2016-11-03 15:50:19');
INSERT INTO `yd_action_log` VALUES ('19', '4', 'upload', '于[2016-11-03 15:53:36]上传下单资料文档[16882原稿.rar]信息...', '2016-11-03 15:53:36');
INSERT INTO `yd_action_log` VALUES ('20', '4', 'modi', '于[2016-11-03 15:55:35]将购物车产品[2]分配给了厂商[1]', '2016-11-03 15:55:35');
INSERT INTO `yd_action_log` VALUES ('21', '4', 'upload', '于[2016-11-03 15:59:59]上传下单资料文档[16832 工艺要求 .zip]信息...', '2016-11-03 15:59:59');
INSERT INTO `yd_action_log` VALUES ('22', '4', 'modi', '于[2016-11-03 16:00:37]将购物车产品[1]分配给了厂商[1]', '2016-11-03 16:00:37');
INSERT INTO `yd_action_log` VALUES ('23', '4', 'upload', '于[2016-11-03 16:06:40]上传下单资料文档[16668原稿.rar]信息...', '2016-11-03 16:06:40');
INSERT INTO `yd_action_log` VALUES ('24', '4', 'modi', '于[2016-11-03 16:07:55]将购物车产品[3]分配给了厂商[1]', '2016-11-03 16:07:55');
INSERT INTO `yd_action_log` VALUES ('25', '1', 'modi', '于[2016-11-03 16:14:30]更新了用户[JackLau]个人信息...', '2016-11-03 16:14:30');
INSERT INTO `yd_action_log` VALUES ('26', '9', 'login', '于[2016-11-03 16:14:48]登录后台...', '2016-11-03 16:14:48');
INSERT INTO `yd_action_log` VALUES ('27', '1', 'modi', '于[2016-11-03 16:24:26]更新了用户[陈广超]个人信息...', '2016-11-03 16:24:26');
INSERT INTO `yd_action_log` VALUES ('28', '7', 'login', '于[2016-11-03 16:45:54]登录后台...', '2016-11-03 16:45:54');
INSERT INTO `yd_action_log` VALUES ('29', '7', 'add', '于[2016-11-03 17:03:58]执行了添加网站Blog信息', '2016-11-03 17:03:58');
INSERT INTO `yd_action_log` VALUES ('30', '7', 'add', '于[2016-11-03 17:05:36]执行了添加网站Blog信息', '2016-11-03 17:05:36');
INSERT INTO `yd_action_log` VALUES ('31', '7', 'add', '于[2016-11-03 17:09:05]执行了添加网站Blog信息', '2016-11-03 17:09:05');
INSERT INTO `yd_action_log` VALUES ('32', '7', 'modi', '于[2016-11-03 17:10:27]执行了修改网站Blog信息', '2016-11-03 17:10:27');
INSERT INTO `yd_action_log` VALUES ('33', '6', 'login', '于[2016-11-03 17:17:57]登录后台...', '2016-11-03 17:17:57');
INSERT INTO `yd_action_log` VALUES ('34', '6', 'add', '于[2016-11-03 17:18:23]执行了添加博客分享信息', '2016-11-03 17:18:23');
INSERT INTO `yd_action_log` VALUES ('35', '6', 'add', '于[2016-11-03 17:18:36]执行了添加博客分享信息', '2016-11-03 17:18:36');
INSERT INTO `yd_action_log` VALUES ('36', '6', 'add', '于[2016-11-03 17:18:48]执行了添加博客分享信息', '2016-11-03 17:18:48');
INSERT INTO `yd_action_log` VALUES ('37', '6', 'modi', '于[2016-11-03 17:19:17]执行了编辑博客分享信息[72]', '2016-11-03 17:19:17');
INSERT INTO `yd_action_log` VALUES ('38', '6', 'modi', '于[2016-11-03 17:19:24]执行了编辑博客分享信息[73]', '2016-11-03 17:19:24');
INSERT INTO `yd_action_log` VALUES ('39', '6', 'modi', '于[2016-11-03 17:19:34]执行了编辑博客分享信息[74]', '2016-11-03 17:19:34');
INSERT INTO `yd_action_log` VALUES ('40', '6', 'modi', '于[2016-11-03 17:19:35]执行了编辑博客分享信息[74]', '2016-11-03 17:19:35');
INSERT INTO `yd_action_log` VALUES ('41', '1', 'exit', '于[2016-11-03 17:48:02]退出后台...', '2016-11-03 17:48:02');
INSERT INTO `yd_action_log` VALUES ('42', '4', 'add', '于[2016-11-04 09:39:41]添加了购物车[2]产品跟踪信息[镀锡]', '2016-11-04 09:39:41');
INSERT INTO `yd_action_log` VALUES ('43', '1', 'login', '于[2016-11-04 15:12:29]登录后台...', '2016-11-04 15:12:29');
INSERT INTO `yd_action_log` VALUES ('44', '7', 'login', '于[2016-11-04 16:16:10]登录后台...', '2016-11-04 16:16:10');
INSERT INTO `yd_action_log` VALUES ('45', '7', 'login', '于[2016-11-04 16:16:13]登录后台...', '2016-11-04 16:16:13');
INSERT INTO `yd_action_log` VALUES ('46', '7', 'add', '于[2016-11-04 16:26:07]执行了添加网站Blog信息', '2016-11-04 16:26:07');

-- ----------------------------
-- Table structure for `yd_admin`
-- ----------------------------
DROP TABLE IF EXISTS `yd_admin`;
CREATE TABLE `yd_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `user_telephone` varchar(11) COLLATE utf8_unicode_ci DEFAULT '' COMMENT '手机号',
  `user_wechat` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_qq` int(11) DEFAULT '0' COMMENT 'QQ号',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of yd_admin
-- ----------------------------
INSERT INTO `yd_admin` VALUES ('1', 'admin', 'WPRwZyoJUz9TbuTo_yDL9LQwskuU0mYR', '$2y$13$uf./9MPbVl6IXH6wTtZhx.xj3MkbGbxjjM1Ml3jDJ39YL.CWRy/26', null, '837215079@qq.com', '10', '18798276809', '阿什顿发送到asd', '837215079', '1501722915', '1516286325');
INSERT INTO `yd_admin` VALUES ('3', 'yuandong', 'WPRwZyoJUz9TbuTo_yDL9LQwskuU0mYR', '$2y$13$uf./9MPbVl6IXH6wTtZhx.xj3MkbGbxjjM1Ml3jDJ39YL.CWRy/26', null, 'dongge@qq.com', '10', '', null, null, '1503281783', '1516363792');

-- ----------------------------
-- Table structure for `yd_auth_assignment`
-- ----------------------------
DROP TABLE IF EXISTS `yd_auth_assignment`;
CREATE TABLE `yd_auth_assignment` (
  `item_name` varchar(64) NOT NULL,
  `user_id` varchar(64) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`item_name`,`user_id`),
  CONSTRAINT `yd_auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `yd_auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yd_auth_assignment
-- ----------------------------
INSERT INTO `yd_auth_assignment` VALUES ('文案编辑', '3', '1503298493');
INSERT INTO `yd_auth_assignment` VALUES ('超级管理员', '1', '1503993646');

-- ----------------------------
-- Table structure for `yd_auth_item`
-- ----------------------------
DROP TABLE IF EXISTS `yd_auth_item`;
CREATE TABLE `yd_auth_item` (
  `name` varchar(64) NOT NULL,
  `type` smallint(6) NOT NULL,
  `description` text,
  `rule_name` varchar(64) DEFAULT NULL,
  `data` blob,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`),
  KEY `rule_name` (`rule_name`),
  KEY `type` (`type`),
  CONSTRAINT `yd_auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `yd_auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yd_auth_item
-- ----------------------------
INSERT INTO `yd_auth_item` VALUES ('/auth/menu-page', '2', 'asdfasdfsasdfasdf', null, null, '1523704844', '1524921093');
INSERT INTO `yd_auth_item` VALUES ('auth/manager-page', '2', '管理员人员管理', null, null, '1516434369', '1524921079');
INSERT INTO `yd_auth_item` VALUES ('auth/menu-data-list', '2', '获取菜单管理列表数据信息', null, null, '1516434639', '1516434639');
INSERT INTO `yd_auth_item` VALUES ('auth/menu-page', '2', '菜单管理', null, null, '1516434318', '1516434318');
INSERT INTO `yd_auth_item` VALUES ('auth/role-page', '2', '角色管理', null, null, '1516434348', '1516434348');
INSERT INTO `yd_auth_item` VALUES ('auth/route-page', '2', '权限管理', null, null, '1516434332', '1516434332');
INSERT INTO `yd_auth_item` VALUES ('auth/user-page', '2', '会员列表', null, null, '1516434384', '1516434384');
INSERT INTO `yd_auth_item` VALUES ('console/system-info', '2', '系统信息', null, null, '1516434419', '1516434419');
INSERT INTO `yd_auth_item` VALUES ('文案编辑', '1', '编辑文章角色', null, null, '1516435002', '1516435002');
INSERT INTO `yd_auth_item` VALUES ('超级管理员', '1', '超级管理员拥有所有权限', null, null, '1501745378', '1516374209');

-- ----------------------------
-- Table structure for `yd_auth_item_child`
-- ----------------------------
DROP TABLE IF EXISTS `yd_auth_item_child`;
CREATE TABLE `yd_auth_item_child` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`),
  CONSTRAINT `yd_auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `yd_auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `yd_auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `yd_auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yd_auth_item_child
-- ----------------------------
INSERT INTO `yd_auth_item_child` VALUES ('超级管理员', '/auth/menu-page');
INSERT INTO `yd_auth_item_child` VALUES ('文案编辑', 'auth/manager-page');
INSERT INTO `yd_auth_item_child` VALUES ('超级管理员', 'auth/manager-page');
INSERT INTO `yd_auth_item_child` VALUES ('文案编辑', 'auth/menu-data-list');
INSERT INTO `yd_auth_item_child` VALUES ('超级管理员', 'auth/menu-data-list');
INSERT INTO `yd_auth_item_child` VALUES ('文案编辑', 'auth/menu-page');
INSERT INTO `yd_auth_item_child` VALUES ('超级管理员', 'auth/menu-page');
INSERT INTO `yd_auth_item_child` VALUES ('文案编辑', 'auth/role-page');
INSERT INTO `yd_auth_item_child` VALUES ('超级管理员', 'auth/role-page');
INSERT INTO `yd_auth_item_child` VALUES ('文案编辑', 'auth/route-page');
INSERT INTO `yd_auth_item_child` VALUES ('超级管理员', 'auth/route-page');
INSERT INTO `yd_auth_item_child` VALUES ('文案编辑', 'auth/user-page');
INSERT INTO `yd_auth_item_child` VALUES ('超级管理员', 'auth/user-page');
INSERT INTO `yd_auth_item_child` VALUES ('文案编辑', 'console/system-info');
INSERT INTO `yd_auth_item_child` VALUES ('超级管理员', 'console/system-info');

-- ----------------------------
-- Table structure for `yd_auth_rule`
-- ----------------------------
DROP TABLE IF EXISTS `yd_auth_rule`;
CREATE TABLE `yd_auth_rule` (
  `name` varchar(64) NOT NULL,
  `data` blob,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yd_auth_rule
-- ----------------------------

-- ----------------------------
-- Table structure for `yd_head_portrait`
-- ----------------------------
DROP TABLE IF EXISTS `yd_head_portrait`;
CREATE TABLE `yd_head_portrait` (
  `id` int(4) unsigned NOT NULL AUTO_INCREMENT,
  `type` int(2) DEFAULT '1' COMMENT '头像类型(1:前台会员用户，2:后台商家用户，3:后台管理人员)',
  `user_id` int(8) DEFAULT '0' COMMENT '前台用户id',
  `seller_id` int(4) DEFAULT '0' COMMENT '商家id',
  `admin_id` int(4) DEFAULT '0' COMMENT '后台管理人员id',
  `img_url` varchar(30) DEFAULT '' COMMENT '图片路径',
  `img_width` int(4) DEFAULT '0' COMMENT '图片宽度',
  `img_height` int(4) DEFAULT '0' COMMENT '图片高度',
  `is_use` int(1) DEFAULT '0' COMMENT '是否正在使用',
  `created_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yd_head_portrait
-- ----------------------------

-- ----------------------------
-- Table structure for `yd_menu`
-- ----------------------------
DROP TABLE IF EXISTS `yd_menu`;
CREATE TABLE `yd_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '栏目ID',
  `edit_user_id` int(11) NOT NULL DEFAULT '0' COMMENT '修改用户',
  `pid` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '父类ID(只支持两级分类)',
  `menu_name` varchar(50) NOT NULL COMMENT '栏目名称',
  `icons` varchar(50) NOT NULL DEFAULT 'icon-desktop' COMMENT '使用的icons',
  `url` varchar(50) DEFAULT 'site/index' COMMENT '访问的地址',
  `status` tinyint(2) NOT NULL DEFAULT '1' COMMENT '状态（1启用 0 停用）',
  `sort` int(4) NOT NULL DEFAULT '100' COMMENT '排序字段',
  `created_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '创建时间',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '修改时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8 COMMENT='导航栏信息表';

-- ----------------------------
-- Records of yd_menu
-- ----------------------------
INSERT INTO `yd_menu` VALUES ('41', '0', '0', '管理员权限管理', 'icon-desktop', '', '2', '1', '2018-01-20 08:30:46', '2018-07-11 01:48:24');
INSERT INTO `yd_menu` VALUES ('42', '0', '41', '菜单管理', 'icon-desktop', 'auth/menu-page', '2', '1', '2018-01-20 08:32:40', '2018-07-11 01:48:24');
INSERT INTO `yd_menu` VALUES ('43', '0', '41', '权限管理', 'icon-desktop', 'auth/route-page', '2', '2', '2018-01-20 08:33:32', '2018-07-11 01:48:23');
INSERT INTO `yd_menu` VALUES ('44', '0', '41', '角色管理', 'icon-desktop', 'auth/role-page', '2', '3', '2018-01-20 08:34:31', '2018-07-11 01:48:23');
INSERT INTO `yd_menu` VALUES ('45', '0', '0', '用户管理', 'icon-desktop', '', '2', '2', '2018-01-20 08:35:00', '2018-04-28 13:14:19');
INSERT INTO `yd_menu` VALUES ('46', '0', '45', '管理员人员管理', 'icon-desktop', 'auth/manager-page', '2', '3', '2018-01-20 08:36:14', '2018-04-28 13:14:20');
INSERT INTO `yd_menu` VALUES ('47', '0', '45', '会员管理', 'icon-desktop', 'auth/user-page', '2', '5', '2018-01-20 08:37:00', '2018-07-11 01:48:22');
INSERT INTO `yd_menu` VALUES ('48', '0', '0', '控制台管理', 'icon-desktop', '', '2', '999999', '2018-01-20 08:39:02', '2018-07-11 01:48:21');
INSERT INTO `yd_menu` VALUES ('50', '0', '48', '系统信息', 'icon-desktop', 'console/system-info', '2', '2147483647', '2018-01-20 08:40:54', '2018-07-11 01:48:20');

-- ----------------------------
-- Table structure for `yd_menu_yd`
-- ----------------------------
DROP TABLE IF EXISTS `yd_menu_yd`;
CREATE TABLE `yd_menu_yd` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '栏目ID',
  `edit_user_id` int(11) NOT NULL DEFAULT '0' COMMENT '修改用户',
  `pid` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '父类ID(只支持两级分类)',
  `menu_name` varchar(50) NOT NULL COMMENT '栏目名称',
  `icons` varchar(50) NOT NULL DEFAULT 'icon-desktop' COMMENT '使用的icons',
  `url` varchar(50) DEFAULT 'site/index' COMMENT '访问的地址',
  `status` tinyint(2) NOT NULL DEFAULT '1' COMMENT '状态（1启用 0 停用）',
  `sort` int(4) NOT NULL DEFAULT '100' COMMENT '排序字段',
  `created_at` int(11) NOT NULL DEFAULT '0' COMMENT '创建时间',
  `created_id` int(11) NOT NULL DEFAULT '0' COMMENT '创建用户',
  `updated_at` int(11) NOT NULL DEFAULT '0' COMMENT '修改时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COMMENT='导航栏信息表';

-- ----------------------------
-- Records of yd_menu_yd
-- ----------------------------
INSERT INTO `yd_menu_yd` VALUES ('7', '1', '0', '管理员管理', '&#xe62e;', '/menu/index', '1', '1', '0', '0', '0');
INSERT INTO `yd_menu_yd` VALUES ('8', '1', '7', '菜单管理', '', '/menu/index', '1', '1', '0', '0', '0');
INSERT INTO `yd_menu_yd` VALUES ('9', '1', '7', '角色管理', '', '/role/index', '1', '2', '0', '0', '0');
INSERT INTO `yd_menu_yd` VALUES ('10', '1', '7', '路由管理', '', '/route/index', '1', '3', '0', '0', '0');
INSERT INTO `yd_menu_yd` VALUES ('12', '0', '0', '用户管理', '', '/inasd/asdfasd', '1', '2', '0', '0', '0');
INSERT INTO `yd_menu_yd` VALUES ('13', '0', '12', '后台用户管理', '', '/user/manager', '1', '1', '0', '0', '0');
INSERT INTO `yd_menu_yd` VALUES ('14', '0', '12', '前台用户管理', '', '/inasd/asdfasd', '1', '2', '0', '0', '0');
INSERT INTO `yd_menu_yd` VALUES ('15', '0', '0', '个人信息管理', '', '', '1', '5', '0', '0', '0');
INSERT INTO `yd_menu_yd` VALUES ('16', '0', '15', '修改密码', '', '/user/manager-pwd', '1', '6', '0', '0', '0');

-- ----------------------------
-- Table structure for `yd_migration`
-- ----------------------------
DROP TABLE IF EXISTS `yd_migration`;
CREATE TABLE `yd_migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yd_migration
-- ----------------------------
INSERT INTO `yd_migration` VALUES ('m000000_000000_base', '1501585036');
INSERT INTO `yd_migration` VALUES ('m130524_201442_init', '1501585087');
INSERT INTO `yd_migration` VALUES ('m140506_102106_rbac_init', '1501667561');
INSERT INTO `yd_migration` VALUES ('m140602_111327_create_menu_table', '1501747338');

-- ----------------------------
-- Table structure for `yd_seller`
-- ----------------------------
DROP TABLE IF EXISTS `yd_seller`;
CREATE TABLE `yd_seller` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(14) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '用户登录名',
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `seller_mobile` varchar(11) COLLATE utf8_unicode_ci DEFAULT '' COMMENT '手机号',
  `seller_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT '' COMMENT '商家店名',
  `user_wechat` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_qq` int(11) DEFAULT '0' COMMENT 'QQ号',
  `seller_addr` varchar(100) CHARACTER SET utf8 DEFAULT '' COMMENT '商家联系住址',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of yd_seller
-- ----------------------------
INSERT INTO `yd_seller` VALUES ('11', 'ygwadmin', 'C8MyIm6zhl-oVnFfUSiqwYFOJATZdGSe', '$2y$13$FkbX2uO6JS25SfFgpg21/uAbjXK9pG/HxVxu2TLunFFTdnrRy9EYu', null, '', '10', '18798276809', '', null, '0', '', '1515834412', '1515835756');
INSERT INTO `yd_seller` VALUES ('12', 'asd', 'fasdf', 'fasd', 'a sdfasd', 'fa efasd', '0', '', '', null, '0', '', '1515836666', '0');

-- ----------------------------
-- Table structure for `yd_sms_log`
-- ----------------------------
DROP TABLE IF EXISTS `yd_sms_log`;
CREATE TABLE `yd_sms_log` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(8) DEFAULT '0' COMMENT '前台用户id',
  `send_type` int(2) DEFAULT '1' COMMENT '验证码发送方式\r\n1:手机发送\r\n2:邮箱发送',
  `type` int(2) DEFAULT '1' COMMENT '发送类型：1:前台注册 2:找回密码3:修改交易密码 4:前台商家注册 5商家密码重置\r\n',
  `mobile` varchar(11) DEFAULT '' COMMENT '手机号',
  `email` varchar(50) DEFAULT '' COMMENT '邮箱账号',
  `code` int(6) DEFAULT '0' COMMENT '验证码',
  `message` varchar(200) DEFAULT '',
  `expiry_time` datetime NOT NULL COMMENT '过期时间',
  `is_check` int(1) DEFAULT '1' COMMENT '验证码是否已校验\r\n1:未校验\r\n2:已校验',
  `created_time` datetime DEFAULT NULL COMMENT '添加时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yd_sms_log
-- ----------------------------
INSERT INTO `yd_sms_log` VALUES ('2', '1', '2', '1', '', '1276816843@qq.com', '967183', '【远购网】您的注册验证码为967183。请在页面中提交验证码完成验证。', '2017-12-28 14:20:10', '1', '2017-12-28 14:10:10');
INSERT INTO `yd_sms_log` VALUES ('3', '1', '2', '1', '', '1276816843@qq.com', '461582', '【远购网】您的注册验证码为461582。请在页面中提交验证码完成验证。', '2017-12-28 14:21:57', '1', '2017-12-28 14:11:57');
INSERT INTO `yd_sms_log` VALUES ('4', '1', '1', '1', '18798276809', '18798276809@139.com', '612458', '【远购网】您的注册验证码为612458。请在页面中提交验证码完成验证。', '2017-12-28 14:22:35', '1', '2017-12-28 14:12:35');
INSERT INTO `yd_sms_log` VALUES ('5', '1', '1', '1', '18798276809', '18798276809@139.com', '865347', '【远购网】您的注册验证码为865347。请在页面中提交验证码完成验证。', '2017-12-29 13:14:39', '1', '2017-12-29 13:04:39');
INSERT INTO `yd_sms_log` VALUES ('6', '1', '1', '1', '18798276809', '18798276809@139.com', '159386', '【远购网】您的注册验证码为159386。请在页面中提交验证码完成验证。', '2017-12-29 13:17:02', '1', '2017-12-29 13:07:02');
INSERT INTO `yd_sms_log` VALUES ('7', '1', '1', '1', '18798276809', '18798276809@139.com', '317482', '【远购网】您的注册验证码为317482。请在页面中提交验证码完成验证。', '2017-12-29 13:18:28', '1', '2017-12-29 13:08:28');
INSERT INTO `yd_sms_log` VALUES ('8', '1', '1', '1', '18798276809', '18798276809@139.com', '432871', '【远购网】您的注册验证码为432871。请在页面中提交验证码完成验证。', '2017-12-29 13:18:29', '1', '2017-12-29 13:08:29');
INSERT INTO `yd_sms_log` VALUES ('9', '1', '1', '1', '18798276809', '18798276809@139.com', '687432', '【远购网】您的注册验证码为687432。请在页面中提交验证码完成验证。', '2017-12-29 13:18:29', '1', '2017-12-29 13:08:29');
INSERT INTO `yd_sms_log` VALUES ('10', '1', '1', '1', '18798276809', '18798276809@139.com', '629374', '【远购网】您的注册验证码为629374。请在页面中提交验证码完成验证。', '2017-12-29 13:18:41', '1', '2017-12-29 13:08:41');
INSERT INTO `yd_sms_log` VALUES ('11', '1', '1', '1', '18798276809', '18798276809@139.com', '762483', '【远购网】您的注册验证码为762483。请在页面中提交验证码完成验证。', '2017-12-29 13:18:41', '1', '2017-12-29 13:08:41');
INSERT INTO `yd_sms_log` VALUES ('12', '1', '1', '1', '18798276809', '18798276809@139.com', '627358', '【远购网】您的注册验证码为627358。请在页面中提交验证码完成验证。', '2017-12-29 13:19:30', '1', '2017-12-29 13:09:30');
INSERT INTO `yd_sms_log` VALUES ('13', '1', '1', '1', '18798276809', '18798276809@139.com', '871234', '【远购网】您的注册验证码为871234。请在页面中提交验证码完成验证。', '2017-12-29 13:19:31', '1', '2017-12-29 13:09:31');
INSERT INTO `yd_sms_log` VALUES ('14', '1', '1', '1', '18798276809', '18798276809@139.com', '935728', '【远购网】您的注册验证码为935728。请在页面中提交验证码完成验证。', '2017-12-29 13:19:32', '1', '2017-12-29 13:09:32');
INSERT INTO `yd_sms_log` VALUES ('15', '1', '1', '1', '18798276809', '18798276809@139.com', '571364', '【远购网】您的注册验证码为571364。请在页面中提交验证码完成验证。', '2017-12-29 13:20:53', '1', '2017-12-29 13:10:53');
INSERT INTO `yd_sms_log` VALUES ('16', '1', '1', '1', '18798276809', '18798276809@139.com', '169245', '【远购网】您的注册验证码为169245。请在页面中提交验证码完成验证。', '2017-12-29 13:21:15', '1', '2017-12-29 13:11:15');
INSERT INTO `yd_sms_log` VALUES ('17', '1', '1', '1', '18798276809', '18798276809@139.com', '516987', '【远购网】您的注册验证码为516987。请在页面中提交验证码完成验证。', '2017-12-29 13:21:38', '1', '2017-12-29 13:11:38');
INSERT INTO `yd_sms_log` VALUES ('18', '1', '1', '1', '18798276809', '18798276809@139.com', '235486', '【远购网】您的注册验证码为235486。请在页面中提交验证码完成验证。', '2017-12-29 13:26:18', '1', '2017-12-29 13:16:18');
INSERT INTO `yd_sms_log` VALUES ('19', '1', '1', '1', '18798276809', '18798276809@139.com', '436798', '【远购网】您的注册验证码为436798。请在页面中提交验证码完成验证。', '2017-12-29 13:26:46', '1', '2017-12-29 13:16:46');
INSERT INTO `yd_sms_log` VALUES ('20', '1', '2', '1', '18798276809', '1276816843@qq.com', '548169', '【远购网】您的注册验证码为548169。请在页面中提交验证码完成验证。', '2017-12-29 13:32:51', '1', '2017-12-29 13:22:51');
INSERT INTO `yd_sms_log` VALUES ('21', '1', '2', '1', '18798276809', '1276816843@qq.com', '319524', '【远购网】您的注册验证码为319524。请在页面中提交验证码完成验证。', '2017-12-29 13:34:06', '1', '2017-12-29 13:24:06');
INSERT INTO `yd_sms_log` VALUES ('22', '1', '2', '1', '18798276809', '1276816843@qq.com', '293145', '【远购网】您的注册验证码为293145。请在页面中提交验证码完成验证。', '2017-12-29 13:35:12', '1', '2017-12-29 13:25:12');
INSERT INTO `yd_sms_log` VALUES ('23', '1', '2', '1', '18798276809', '1276816843@qq.com', '647891', '【远购网】您的注册验证码为647891。请在页面中提交验证码完成验证。', '2017-12-29 13:36:40', '1', '2017-12-29 13:26:40');
INSERT INTO `yd_sms_log` VALUES ('24', '1', '2', '1', '18798276809', '1276816843@qq.com', '597246', '【远购网】您的注册验证码为597246。请在页面中提交验证码完成验证。', '2017-12-29 13:36:41', '1', '2017-12-29 13:26:41');
INSERT INTO `yd_sms_log` VALUES ('25', '1', '2', '1', '18798276809', '1276816843@qq.com', '526784', '【远购网】您的注册验证码为526784。请在页面中提交验证码完成验证。', '2017-12-29 13:36:42', '1', '2017-12-29 13:26:42');
INSERT INTO `yd_sms_log` VALUES ('26', '1', '2', '1', '18798276809', '1276816843@qq.com', '296451', '【远购网】您的注册验证码为296451。请在页面中提交验证码完成验证。', '2017-12-29 13:38:18', '1', '2017-12-29 13:28:18');
INSERT INTO `yd_sms_log` VALUES ('27', '1', '2', '1', '18798276809', '1276816843@qq.com', '617385', '【远购网】您的注册验证码为617385。请在页面中提交验证码完成验证。', '2017-12-29 13:38:48', '1', '2017-12-29 13:28:48');
INSERT INTO `yd_sms_log` VALUES ('28', '1', '2', '1', '', '1276816843@qq.com', '146397', '【远购网】您的注册验证码为146397。请在页面中提交验证码完成验证。', '2017-12-29 13:39:35', '1', '2017-12-29 13:29:35');
INSERT INTO `yd_sms_log` VALUES ('29', '1', '2', '1', '', '1276816843@qq.com', '938124', '【远购网】您的注册验证码为938124。请在页面中提交验证码完成验证。', '2017-12-29 13:40:45', '1', '2017-12-29 13:30:45');
INSERT INTO `yd_sms_log` VALUES ('30', '1', '2', '1', '', '1276816843@qq.com', '472195', '【远购网】您的注册验证码为472195。请在页面中提交验证码完成验证。', '2017-12-29 13:42:35', '1', '2017-12-29 13:32:35');
INSERT INTO `yd_sms_log` VALUES ('31', '1', '2', '1', '', '1276816843@qq.com', '475921', '【远购网】您的注册验证码为475921。请在页面中提交验证码完成验证。', '2017-12-29 13:43:03', '1', '2017-12-29 13:33:03');
INSERT INTO `yd_sms_log` VALUES ('32', '0', '2', '1', '18170682798', '', '528169', '【远购网】您的注册验证码为528169。请在页面中提交验证码完成验证。', '2018-01-06 14:12:33', '1', '2018-01-06 14:02:33');
INSERT INTO `yd_sms_log` VALUES ('33', '0', '1', '1', '18170682798', '18170682798@139.com', '214536', '【远购网】感谢您的注册，本次注册验证码为214536，请于3分钟内正确输入，切勿泄露他人。（仅供参考）', '2018-01-06 14:13:22', '1', '2018-01-06 14:03:22');
INSERT INTO `yd_sms_log` VALUES ('34', '0', '1', '1', '18170682798', '18170682798@139.com', '798315', '【远购网】感谢您的注册，本次注册验证码为798315，请于3分钟内正确输入，切勿泄露他人。（仅供参考）', '2018-01-06 14:14:00', '1', '2018-01-06 14:04:00');
INSERT INTO `yd_sms_log` VALUES ('35', '0', '1', '1', '18170682798', '18170682798@139.com', '231467', '【远购网】感谢您的注册，本次注册验证码为231467，请于3分钟内正确输入，切勿泄露他人。（仅供参考）', '2018-01-06 14:19:28', '1', '2018-01-06 14:09:28');
INSERT INTO `yd_sms_log` VALUES ('36', '0', '1', '1', '18170682798', '18170682798@139.com', '839425', '【远购网】感谢您的注册，本次注册验证码为839425，请于3分钟内正确输入，切勿泄露他人。（仅供参考）', '2018-01-06 14:19:54', '1', '2018-01-06 14:09:54');
INSERT INTO `yd_sms_log` VALUES ('37', '0', '1', '4', '18798276809', '18170682798@139.com', '541932', '【远购网】感谢您的注册，本次注册验证码为541932，请于3分钟内正确输入，切勿泄露他人。（仅供参考）', '2018-01-14 14:21:13', '1', '2018-01-06 14:11:13');
INSERT INTO `yd_sms_log` VALUES ('38', '0', '1', '4', '13885487347', '13885487347@139.com', '142375', '【远购网】您的注册验证码为142375。请在页面中提交验证码完成验证。', '2018-01-13 12:57:58', '1', '2018-01-13 12:47:58');
INSERT INTO `yd_sms_log` VALUES ('39', '0', '1', '4', '13885487347', '13885487347@139.com', '518273', '【远购网】您的注册验证码为518273。请在页面中提交验证码完成验证。', '2018-01-13 12:58:26', '1', '2018-01-13 12:48:26');
INSERT INTO `yd_sms_log` VALUES ('40', '0', '1', '4', '13885487347', '13885487347@139.com', '837546', '【远购网】您的注册验证码为837546。请在页面中提交验证码完成验证。', '2018-01-13 13:00:16', '1', '2018-01-13 12:50:16');
INSERT INTO `yd_sms_log` VALUES ('41', '0', '2', '4', '13885487347', '', '793451', '【远购网】您的注册验证码为793451。请在页面中提交验证码完成验证。', '2018-01-13 13:01:51', '1', '2018-01-13 12:51:51');
INSERT INTO `yd_sms_log` VALUES ('42', '0', '2', '4', '13885487347', '', '952468', '【远购网】您的注册验证码为952468。请在页面中提交验证码完成验证。', '2018-01-13 13:02:28', '1', '2018-01-13 12:52:28');
INSERT INTO `yd_sms_log` VALUES ('43', '0', '2', '4', '13885487347', '13885487347@139.com', '795138', '【远购网】您的注册验证码为795138。请在页面中提交验证码完成验证。', '2018-01-13 13:09:40', '1', '2018-01-13 12:59:40');
INSERT INTO `yd_sms_log` VALUES ('44', '0', '2', '4', '18798276809', '18798276809@139.com', '167589', '【远购网】您的注册验证码为167589。请在页面中提交验证码完成验证。', '2018-01-13 13:10:06', '1', '2018-01-13 13:00:06');
INSERT INTO `yd_sms_log` VALUES ('45', '0', '2', '4', '18798276809', '18798276809@139.com', '429561', '【远购网】您的注册验证码为429561。请在页面中提交验证码完成验证。', '2018-01-13 13:11:36', '1', '2018-01-13 13:01:36');
INSERT INTO `yd_sms_log` VALUES ('46', '0', '2', '4', '18798276809', '18798276809@139.com', '524381', '【远购网】您的注册验证码为524381。请在页面中提交验证码完成验证。', '2018-01-13 13:12:23', '1', '2018-01-13 13:02:23');
INSERT INTO `yd_sms_log` VALUES ('47', '0', '2', '4', '18798276809', '18798276809@139.com', '892463', '【远购网】您的注册验证码为892463。请在页面中提交验证码完成验证。', '2018-01-13 13:14:35', '1', '2018-01-13 13:04:35');
INSERT INTO `yd_sms_log` VALUES ('48', '0', '2', '4', '18798276809', '18798276809@139.com', '976423', '【远购网】您的注册验证码为976423。请在页面中提交验证码完成验证。', '2018-01-13 13:15:11', '1', '2018-01-13 13:05:11');
INSERT INTO `yd_sms_log` VALUES ('49', '0', '2', '4', '18798276809', '18798276809@139.com', '385467', '【远购网】您的注册验证码为385467。请在页面中提交验证码完成验证。', '2018-01-13 13:17:10', '1', '2018-01-13 13:07:10');
INSERT INTO `yd_sms_log` VALUES ('50', '0', '2', '4', '18798276809', '18798276809@139.com', '472598', '【远购网】您的注册验证码为472598。请在页面中提交验证码完成验证。', '2018-01-13 13:20:37', '1', '2018-01-13 13:10:37');
INSERT INTO `yd_sms_log` VALUES ('51', '0', '2', '4', '18798276809', '18798276809@139.com', '723814', '【远购网】您的注册验证码为723814。请在页面中提交验证码完成验证。', '2018-01-13 13:22:44', '1', '2018-01-13 13:12:44');
INSERT INTO `yd_sms_log` VALUES ('52', '0', '1', '4', '18798276809', '18798276809@139.com', '175348', '【远购网】您的注册验证码为175348。请在页面中提交验证码完成验证。', '2018-01-13 13:23:37', '1', '2018-01-13 13:13:37');
INSERT INTO `yd_sms_log` VALUES ('53', '0', '1', '4', '18798276809', '18798276809@139.com', '831964', '【远购网】您的注册验证码为831964。请在页面中提交验证码完成验证。', '2018-01-13 13:23:53', '1', '2018-01-13 13:13:53');
INSERT INTO `yd_sms_log` VALUES ('54', '0', '1', '4', '18798276338', '1879827633809@139.com', '125674', '【远购网】您的注册验证码为125674。请在页面中提交验证码完成验证。', '2018-01-13 13:55:09', '1', '2018-01-13 13:45:09');
INSERT INTO `yd_sms_log` VALUES ('55', '0', '1', '4', '18798276809', '18798276809@139.com', '936421', '【远购网】您的注册验证码为936421。请在页面中提交验证码完成验证。', '2018-01-13 13:55:38', '1', '2018-01-13 13:45:38');
INSERT INTO `yd_sms_log` VALUES ('56', '0', '1', '4', '13765470934', '13765470934@139.com', '793568', '【远购网】您的注册验证码为793568。请在页面中提交验证码完成验证。', '2018-01-13 14:10:40', '1', '2018-01-13 14:00:40');

-- ----------------------------
-- Table structure for `yd_station_message`
-- ----------------------------
DROP TABLE IF EXISTS `yd_station_message`;
CREATE TABLE `yd_station_message` (
  `id` int(11) NOT NULL,
  `type` int(2) NOT NULL DEFAULT '1' COMMENT '消息类型(1:前台网站公告消息，2:后台公告消息，3:前台用户消息，4:后台用户消息)',
  `user_id` int(8) DEFAULT '0' COMMENT '前台用户id',
  `admin_id` int(4) DEFAULT '0' COMMENT '后台管理员id',
  `title` varchar(300) DEFAULT '' COMMENT '消息标题',
  `message` text COMMENT '消息详细内容',
  `is_read` int(1) DEFAULT '1' COMMENT '消息是否已读1:未读，2：已读)',
  `is_show` int(1) DEFAULT '1' COMMENT '是否显示消息(1:默认显示，2:不显示)',
  `create_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT '发布时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yd_station_message
-- ----------------------------
INSERT INTO `yd_station_message` VALUES ('1', '1', '1', '0', '1111111', '3333333333', '2', '1', '2017-12-26 20:33:35');
INSERT INTO `yd_station_message` VALUES ('2', '1', '2', '0', '', '好发过火电饭锅', '1', '1', '2017-12-26 21:03:19');
INSERT INTO `yd_station_message` VALUES ('3', '1', '3', '0', '', '阿萨德', '1', '1', '2017-12-26 21:03:24');
INSERT INTO `yd_station_message` VALUES ('4', '1', '4', '5', '', 'fghd', '1', '1', '2017-12-26 21:03:57');
INSERT INTO `yd_station_message` VALUES ('5', '1', '1', '0', '', 'hdfgh', '1', '1', '2017-12-26 21:04:01');
INSERT INTO `yd_station_message` VALUES ('6', '3', '1', '0', '测试标题1', '正文内容1', '2', '1', '2017-12-26 21:04:04');
INSERT INTO `yd_station_message` VALUES ('7', '3', '1', '0', '测试标题2', '正文内容2', '2', '1', '2017-12-26 21:04:08');
INSERT INTO `yd_station_message` VALUES ('8', '3', '1', '0', '测试标题3', '正文内容3', '2', '1', '2017-12-26 21:04:12');
INSERT INTO `yd_station_message` VALUES ('9', '3', '1', '0', '测试标题标题测试标题测试标题', '正文内容4', '2', '2', '2017-12-30 21:04:15');
INSERT INTO `yd_station_message` VALUES ('10', '3', '1', '0', '测试标题5', '正文内容5', '2', '1', '2017-12-26 21:04:20');
INSERT INTO `yd_station_message` VALUES ('11', '3', '1', '0', '测试标题5', '正文内容6', '2', '1', '2017-12-26 21:04:24');

-- ----------------------------
-- Table structure for `yd_user`
-- ----------------------------
DROP TABLE IF EXISTS `yd_user`;
CREATE TABLE `yd_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci DEFAULT '',
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `sex` int(1) DEFAULT '1' COMMENT '用户性别',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of yd_user
-- ----------------------------
INSERT INTO `yd_user` VALUES ('1', '18798276809', '1111111@qq.com', 'xX7CErooctF8MpykIkPOSZByxTQQ75mp', '$2y$13$uf./9MPbVl6IXH6wTtZhx.xj3MkbGbxjjM1Ml3jDJ39YL.CWRy/26', null, '10', '1', '1501597855', '1514298728');
INSERT INTO `yd_user` VALUES ('14', '18798279999', null, 'epvPr37txnKp_gY05JqBCrdBxhoXcpJ9', '$2y$13$m4zbf8.XmkWH9oYe97nkkeif7lzcoZbE0FHVY0JUqE1o0MKWqUx5u', null, '0', '1', '1513408532', '1516462967');
INSERT INTO `yd_user` VALUES ('15', '18797665433', null, '5-LbPBdbO82jHjH7-Nqyju4nCzLqiJmm', '$2y$13$ePXeXbsKMh6k1QynobUm/u3Gg0m33OqADwYmkkFqxTqyEXu57aQtK', null, '0', '2', '1513408631', '1516462968');
INSERT INTO `yd_user` VALUES ('16', '18798273456', null, 'iJJw9eChT8FTouD62bxgQRFu1zlb6VeC', '$2y$13$NyGPy6LvwJDir3Vtw8YdaeOLCGsbzZP37UJk6XsEQk6C2aGQFpNL.', null, '0', '1', '1513408714', '1516462969');
INSERT INTO `yd_user` VALUES ('17', '13435678904', '', 'sH4ruFfx4sGWmvMB1gkuaW3a0x0Mw4Xx', '$2y$13$xiL4IfCVxhE6Sj8hDRoHh.vgrvZMPta8AXQG3/Dj7rnZ3Kr3vbTA.', null, '0', '1', '1513408860', '1516462970');

-- ----------------------------
-- Table structure for `yd_user_address`
-- ----------------------------
DROP TABLE IF EXISTS `yd_user_address`;
CREATE TABLE `yd_user_address` (
  `id` int(4) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(8) NOT NULL,
  `consignee` varchar(50) NOT NULL DEFAULT '' COMMENT '收件人名',
  `mobile` varchar(11) DEFAULT '' COMMENT '手机号',
  `city` varchar(255) DEFAULT '',
  `address` varchar(255) DEFAULT NULL,
  `is_default` char(1) DEFAULT 'n' COMMENT '是否是默认地址',
  `created_time` datetime DEFAULT NULL COMMENT '添加时间',
  `updated_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '修改时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yd_user_address
-- ----------------------------
INSERT INTO `yd_user_address` VALUES ('2', '1', '饶远东', '18798276809', '上海  闸北区 城区', '哪里看啊 马莱克斯顿 阿里没啥看的', 'n', null, '2018-07-24 13:31:15');
INSERT INTO `yd_user_address` VALUES ('3', '1', 'asd', '18799123812', '北京 昌平区 城区', 'asdfasdfsdf a fsdfa sdf asdf', 'n', null, '2018-07-24 13:31:17');
INSERT INTO `yd_user_address` VALUES ('4', '1', 'sd', '18798276809', '河北 衡水市 枣强县', 'asdaasdfasdf', 'y', null, '2018-07-24 13:31:17');
