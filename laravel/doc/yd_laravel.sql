/*
Navicat MySQL Data Transfer

Source Server         : 59.110.168.230
Source Server Version : 50629
Source Host           : 59.110.168.230:3306
Source Database       : yd_laravel

Target Server Type    : MYSQL
Target Server Version : 50629
File Encoding         : 65001

Date: 2018-07-29 10:51:34
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `lar_actions_log`
-- ----------------------------
DROP TABLE IF EXISTS `lar_actions_log`;
CREATE TABLE `lar_actions_log` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `admin_id` int(8) DEFAULT '0' COMMENT '管理员ID',
  `ip` varchar(255) DEFAULT '',
  `type` tinyint(3) DEFAULT '1' COMMENT '操作类型（1:添加数据， 2:更新数据，3:删除数据，4:上传文件）',
  `content` varchar(255) DEFAULT '' COMMENT '操作详细信息',
  `created_at` datetime DEFAULT NULL COMMENT '操作时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1366 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPRESSED COMMENT='后台管理员操作日志记录表';

-- ----------------------------
-- Records of lar_actions_log
-- ----------------------------
INSERT INTO `lar_actions_log` VALUES ('1', '1', '', '2', '更新了【阿斯顿发】角色的权限信息', '2018-06-08 13:40:59');
INSERT INTO `lar_actions_log` VALUES ('2', '1', '', '6', '[系统用户]退出了后台', '2018-06-09 06:35:23');
INSERT INTO `lar_actions_log` VALUES ('3', '1', '', '5', '[系统用户]登录了后台', '2018-06-09 06:37:16');
INSERT INTO `lar_actions_log` VALUES ('4', '2', '', '5', '清除了视图缓存文件', '2018-06-11 06:43:45');
INSERT INTO `lar_actions_log` VALUES ('5', '1', '', '5', '[系统用户]登录了后台', '2018-06-11 06:44:30');
INSERT INTO `lar_actions_log` VALUES ('6', '2', '', '1', '更新了[ID:15]菜单信息', '2018-06-11 06:45:48');
INSERT INTO `lar_actions_log` VALUES ('7', '2', '', '5', '清除了视图缓存文件', '2018-06-11 06:46:22');
INSERT INTO `lar_actions_log` VALUES ('8', '2', '', '6', '下载了【laravel - 副本 (8).log】日志文件', '2018-06-11 06:47:01');
INSERT INTO `lar_actions_log` VALUES ('9', '2', '', '1', '更新了[ID:11]菜单信息', '2018-06-11 07:08:39');
INSERT INTO `lar_actions_log` VALUES ('10', '2', '', '1', '更新了[ID:11]菜单信息', '2018-06-11 07:09:10');
INSERT INTO `lar_actions_log` VALUES ('11', '2', '', '1', '更新了[ID:15]菜单信息', '2018-06-11 07:09:22');
INSERT INTO `lar_actions_log` VALUES ('12', '2', '', '1', '更新了[ID:11]菜单信息', '2018-06-11 07:12:00');
INSERT INTO `lar_actions_log` VALUES ('13', '2', '', '1', '更新了[ID:15]菜单信息', '2018-06-11 07:12:16');
INSERT INTO `lar_actions_log` VALUES ('14', '2', '', '1', '更新了[ID:11]菜单信息', '2018-06-11 07:12:20');
INSERT INTO `lar_actions_log` VALUES ('15', '2', '', '1', '更新了[ID:11]菜单信息', '2018-06-11 07:12:24');
INSERT INTO `lar_actions_log` VALUES ('16', '2', '', '1', '更新了[ID:11]菜单信息', '2018-06-11 07:12:30');
INSERT INTO `lar_actions_log` VALUES ('17', '2', '', '1', '更新了[ID:15]菜单信息', '2018-06-11 07:12:38');
INSERT INTO `lar_actions_log` VALUES ('18', '2', '', '1', '更新了[ID:11]菜单信息', '2018-06-11 07:12:42');
INSERT INTO `lar_actions_log` VALUES ('19', '2', '', '1', '更新了[ID:15]菜单信息', '2018-06-11 07:12:47');
INSERT INTO `lar_actions_log` VALUES ('20', '2', '', '5', '清除了视图缓存文件', '2018-06-11 07:43:30');
INSERT INTO `lar_actions_log` VALUES ('21', '2', '', '5', '清除了视图缓存文件', '2018-06-11 07:44:32');
INSERT INTO `lar_actions_log` VALUES ('22', '2', '', '5', '清除了视图缓存文件', '2018-06-11 07:46:25');
INSERT INTO `lar_actions_log` VALUES ('23', '2', '', '5', '清除了视图缓存文件', '2018-06-11 07:48:23');
INSERT INTO `lar_actions_log` VALUES ('24', '2', '', '5', '清除了视图缓存文件', '2018-06-11 07:51:55');
INSERT INTO `lar_actions_log` VALUES ('25', '2', '', '5', '清除了视图缓存文件', '2018-06-11 07:56:05');
INSERT INTO `lar_actions_log` VALUES ('26', '2', '', '5', '清除了视图缓存文件', '2018-06-11 08:03:57');
INSERT INTO `lar_actions_log` VALUES ('27', '2', '', '5', '清除了视图缓存文件', '2018-06-11 08:04:30');
INSERT INTO `lar_actions_log` VALUES ('28', '2', '', '5', '清除了视图缓存文件', '2018-06-11 08:04:52');
INSERT INTO `lar_actions_log` VALUES ('29', '2', '', '5', '清除了视图缓存文件', '2018-06-11 08:05:12');
INSERT INTO `lar_actions_log` VALUES ('30', '2', '', '5', '清除了视图缓存文件', '2018-06-11 08:05:51');
INSERT INTO `lar_actions_log` VALUES ('31', '2', '', '5', '清除了视图缓存文件', '2018-06-11 08:09:18');
INSERT INTO `lar_actions_log` VALUES ('32', '2', '', '5', '清除了视图缓存文件', '2018-06-11 08:13:03');
INSERT INTO `lar_actions_log` VALUES ('33', '2', '', '5', '清除了视图缓存文件', '2018-06-11 08:13:26');
INSERT INTO `lar_actions_log` VALUES ('34', '2', '', '5', '清除了视图缓存文件', '2018-06-11 08:16:39');
INSERT INTO `lar_actions_log` VALUES ('35', '2', '', '5', '清除了视图缓存文件', '2018-06-11 08:20:59');
INSERT INTO `lar_actions_log` VALUES ('36', '1', '', '5', '[系统用户]登录了后台', '2018-06-11 11:53:20');
INSERT INTO `lar_actions_log` VALUES ('37', '1', '', '6', '[系统用户]退出了后台', '2018-06-11 11:58:52');
INSERT INTO `lar_actions_log` VALUES ('38', '2', '', '1', '更新了[ID:11]菜单信息', '2018-06-12 05:18:43');
INSERT INTO `lar_actions_log` VALUES ('39', '2', '', '1', '更新了[ID:11]菜单信息', '2018-06-12 05:18:58');
INSERT INTO `lar_actions_log` VALUES ('40', '2', '', '1', '更新了[ID:15]菜单信息', '2018-06-12 05:19:17');
INSERT INTO `lar_actions_log` VALUES ('41', '2', '', '1', '更新了[ID:15]菜单信息', '2018-06-12 05:19:45');
INSERT INTO `lar_actions_log` VALUES ('42', '2', '', '5', '删除【laravel - 副本 (8).log】日志文件', '2018-06-12 05:25:54');
INSERT INTO `lar_actions_log` VALUES ('43', '2', '', '5', '删除【laravel - 副本 (7).log】日志文件', '2018-06-12 05:25:56');
INSERT INTO `lar_actions_log` VALUES ('44', '2', '', '5', '删除【laravel - 副本 (13).log】日志文件', '2018-06-12 05:25:59');
INSERT INTO `lar_actions_log` VALUES ('45', '2', '', '5', '删除【laravel - 副本 (2).log】日志文件', '2018-06-12 05:26:01');
INSERT INTO `lar_actions_log` VALUES ('46', '2', '', '5', '删除【laravel - 副本 (4).log】日志文件', '2018-06-12 05:26:04');
INSERT INTO `lar_actions_log` VALUES ('47', '2', '', '5', '删除【laravel - 副本 (15).log】日志文件', '2018-06-12 05:26:06');
INSERT INTO `lar_actions_log` VALUES ('48', '2', '', '5', '清除了视图缓存文件', '2018-06-12 05:28:46');
INSERT INTO `lar_actions_log` VALUES ('49', '2', '', '5', '清除了视图缓存文件', '2018-06-13 05:33:37');
INSERT INTO `lar_actions_log` VALUES ('50', '2', '', '5', '清除了视图缓存文件', '2018-06-13 05:37:04');
INSERT INTO `lar_actions_log` VALUES ('51', '2', '', '5', '清除了视图缓存文件', '2018-06-13 05:37:49');
INSERT INTO `lar_actions_log` VALUES ('52', '2', '', '5', '清除了视图缓存文件', '2018-06-13 05:52:30');
INSERT INTO `lar_actions_log` VALUES ('53', '1', '', '5', '[系统用户]登录了后台', '2018-06-13 06:05:28');
INSERT INTO `lar_actions_log` VALUES ('54', '2', '', '5', '[远东]登录了后台', '2018-06-13 09:16:12');
INSERT INTO `lar_actions_log` VALUES ('55', '2', '', '5', '清除了视图缓存文件', '2018-06-13 09:27:30');
INSERT INTO `lar_actions_log` VALUES ('56', '2', '', '6', '[远东]退出了后台', '2018-06-14 02:44:19');
INSERT INTO `lar_actions_log` VALUES ('57', '2', '', '5', '[远东]登录了后台', '2018-06-14 03:24:46');
INSERT INTO `lar_actions_log` VALUES ('58', '2', '', '5', '清除了视图缓存文件', '2018-06-14 03:25:26');
INSERT INTO `lar_actions_log` VALUES ('59', '2', '', '5', '清除了视图缓存文件', '2018-06-14 03:26:56');
INSERT INTO `lar_actions_log` VALUES ('60', '2', '', '5', '清除了视图缓存文件', '2018-06-14 03:27:31');
INSERT INTO `lar_actions_log` VALUES ('61', '2', '', '5', '清除了视图缓存文件', '2018-06-14 03:28:25');
INSERT INTO `lar_actions_log` VALUES ('62', '2', '', '5', '清除了视图缓存文件', '2018-06-14 03:29:00');
INSERT INTO `lar_actions_log` VALUES ('63', '2', '', '5', '清除了视图缓存文件', '2018-06-14 03:29:11');
INSERT INTO `lar_actions_log` VALUES ('64', '2', '', '5', '清除了视图缓存文件', '2018-06-14 03:30:24');
INSERT INTO `lar_actions_log` VALUES ('65', '2', '', '5', '清除了视图缓存文件', '2018-06-14 03:36:25');
INSERT INTO `lar_actions_log` VALUES ('66', '2', '', '5', '清除了视图缓存文件', '2018-06-14 03:36:46');
INSERT INTO `lar_actions_log` VALUES ('67', '2', '', '5', '清除了视图缓存文件', '2018-06-14 03:39:08');
INSERT INTO `lar_actions_log` VALUES ('68', '2', '', '5', '清除了视图缓存文件', '2018-06-14 03:39:36');
INSERT INTO `lar_actions_log` VALUES ('69', '2', '', '5', '清除了视图缓存文件', '2018-06-14 03:46:33');
INSERT INTO `lar_actions_log` VALUES ('70', '2', '', '5', '清除了视图缓存文件', '2018-06-14 03:49:18');
INSERT INTO `lar_actions_log` VALUES ('71', '2', '', '5', '清除了视图缓存文件', '2018-06-14 03:49:46');
INSERT INTO `lar_actions_log` VALUES ('72', '2', '', '5', '清除了视图缓存文件', '2018-06-14 03:52:19');
INSERT INTO `lar_actions_log` VALUES ('73', '2', '', '5', '清除了视图缓存文件', '2018-06-14 03:53:23');
INSERT INTO `lar_actions_log` VALUES ('74', '2', '', '5', '清除了视图缓存文件', '2018-06-14 03:54:44');
INSERT INTO `lar_actions_log` VALUES ('75', '2', '', '5', '清除了视图缓存文件', '2018-06-14 03:58:24');
INSERT INTO `lar_actions_log` VALUES ('76', '2', '', '5', '清除了视图缓存文件', '2018-06-14 05:17:57');
INSERT INTO `lar_actions_log` VALUES ('77', '2', '', '5', '清除了视图缓存文件', '2018-06-14 05:18:41');
INSERT INTO `lar_actions_log` VALUES ('78', '2', '', '5', '清除了视图缓存文件', '2018-06-14 05:24:22');
INSERT INTO `lar_actions_log` VALUES ('79', '2', '', '5', '清除了视图缓存文件', '2018-06-14 05:25:30');
INSERT INTO `lar_actions_log` VALUES ('80', '2', '', '5', '清除了视图缓存文件', '2018-06-14 05:25:49');
INSERT INTO `lar_actions_log` VALUES ('81', '2', '', '5', '清除了视图缓存文件', '2018-06-14 05:26:00');
INSERT INTO `lar_actions_log` VALUES ('82', '2', '', '5', '清除了视图缓存文件', '2018-06-14 05:26:23');
INSERT INTO `lar_actions_log` VALUES ('83', '2', '', '5', '清除了视图缓存文件', '2018-06-14 05:27:17');
INSERT INTO `lar_actions_log` VALUES ('84', '2', '', '5', '清除了视图缓存文件', '2018-06-14 05:27:52');
INSERT INTO `lar_actions_log` VALUES ('85', '2', '', '5', '清除了视图缓存文件', '2018-06-14 05:30:10');
INSERT INTO `lar_actions_log` VALUES ('86', '2', '', '5', '清除了视图缓存文件', '2018-06-14 05:30:25');
INSERT INTO `lar_actions_log` VALUES ('87', '2', '', '5', '清除了视图缓存文件', '2018-06-14 05:31:04');
INSERT INTO `lar_actions_log` VALUES ('88', '2', '', '5', '清除了视图缓存文件', '2018-06-14 05:31:49');
INSERT INTO `lar_actions_log` VALUES ('89', '2', '', '5', '清除了视图缓存文件', '2018-06-14 05:32:37');
INSERT INTO `lar_actions_log` VALUES ('90', '2', '', '5', '清除了视图缓存文件', '2018-06-14 05:33:36');
INSERT INTO `lar_actions_log` VALUES ('91', '2', '', '5', '清除了视图缓存文件', '2018-06-14 05:34:59');
INSERT INTO `lar_actions_log` VALUES ('92', '2', '', '5', '清除了视图缓存文件', '2018-06-14 05:37:07');
INSERT INTO `lar_actions_log` VALUES ('93', '2', '', '5', '清除了视图缓存文件', '2018-06-14 05:37:40');
INSERT INTO `lar_actions_log` VALUES ('94', '2', '', '5', '清除了视图缓存文件', '2018-06-14 05:38:19');
INSERT INTO `lar_actions_log` VALUES ('95', '2', '', '5', '清除了视图缓存文件', '2018-06-14 06:09:12');
INSERT INTO `lar_actions_log` VALUES ('96', '2', '', '5', '清除了视图缓存文件', '2018-06-14 06:10:45');
INSERT INTO `lar_actions_log` VALUES ('97', '2', '', '5', '清除了视图缓存文件', '2018-06-14 06:12:06');
INSERT INTO `lar_actions_log` VALUES ('98', '2', '', '5', '[远东]登录了后台', '2018-06-14 06:13:09');
INSERT INTO `lar_actions_log` VALUES ('99', '2', '', '6', '[远东]退出了后台', '2018-06-14 06:13:41');
INSERT INTO `lar_actions_log` VALUES ('100', '2', '', '5', '清除了视图缓存文件', '2018-06-14 06:21:20');
INSERT INTO `lar_actions_log` VALUES ('101', '2', '', '5', '清除了视图缓存文件', '2018-06-14 06:21:46');
INSERT INTO `lar_actions_log` VALUES ('102', '2', '', '5', '清除了视图缓存文件', '2018-06-14 06:23:22');
INSERT INTO `lar_actions_log` VALUES ('103', '2', '', '5', '[远东]登录了后台', '2018-06-14 06:23:56');
INSERT INTO `lar_actions_log` VALUES ('104', '2', '', '6', '[远东]退出了后台', '2018-06-14 06:26:17');
INSERT INTO `lar_actions_log` VALUES ('105', '2', '', '5', '[远东]登录了后台', '2018-06-14 06:33:17');
INSERT INTO `lar_actions_log` VALUES ('106', '2', '', '6', '[远东]退出了后台', '2018-06-14 06:46:21');
INSERT INTO `lar_actions_log` VALUES ('107', '2', '', '5', '清除了视图缓存文件', '2018-06-14 06:47:16');
INSERT INTO `lar_actions_log` VALUES ('108', '2', '', '5', '清除了视图缓存文件', '2018-06-14 06:48:34');
INSERT INTO `lar_actions_log` VALUES ('109', '2', '', '5', '清除了视图缓存文件', '2018-06-14 06:49:09');
INSERT INTO `lar_actions_log` VALUES ('110', '2', '', '5', '清除了视图缓存文件', '2018-06-14 06:52:30');
INSERT INTO `lar_actions_log` VALUES ('111', '2', '', '5', '[远东]登录了后台', '2018-06-14 07:06:35');
INSERT INTO `lar_actions_log` VALUES ('112', '2', '', '5', '清除了视图缓存文件', '2018-06-14 07:48:38');
INSERT INTO `lar_actions_log` VALUES ('113', '2', '', '5', '清除了视图缓存文件', '2018-06-14 07:48:57');
INSERT INTO `lar_actions_log` VALUES ('114', '2', '', '5', '清除了视图缓存文件', '2018-06-14 07:50:57');
INSERT INTO `lar_actions_log` VALUES ('115', '2', '', '5', '清除了视图缓存文件', '2018-06-14 07:53:59');
INSERT INTO `lar_actions_log` VALUES ('116', '2', '', '5', '清除了视图缓存文件', '2018-06-14 07:55:07');
INSERT INTO `lar_actions_log` VALUES ('117', '2', '', '5', '清除了视图缓存文件', '2018-06-14 08:16:40');
INSERT INTO `lar_actions_log` VALUES ('118', '2', '', '5', '清除了视图缓存文件', '2018-06-14 08:35:29');
INSERT INTO `lar_actions_log` VALUES ('119', '2', '', '5', '清除了视图缓存文件', '2018-06-14 08:36:00');
INSERT INTO `lar_actions_log` VALUES ('120', '2', '', '5', '清除了视图缓存文件', '2018-06-14 08:36:39');
INSERT INTO `lar_actions_log` VALUES ('121', '2', '', '5', '清除了视图缓存文件', '2018-06-14 08:37:15');
INSERT INTO `lar_actions_log` VALUES ('122', '2', '', '5', '清除了视图缓存文件', '2018-06-14 08:40:16');
INSERT INTO `lar_actions_log` VALUES ('123', '2', '', '1', '更新了[ID:25]菜单信息', '2018-06-14 08:42:28');
INSERT INTO `lar_actions_log` VALUES ('124', '2', '', '1', '更新了[ID:25]菜单信息', '2018-06-14 08:42:36');
INSERT INTO `lar_actions_log` VALUES ('125', '2', '', '1', '更新了[ID:18]菜单信息', '2018-06-14 08:44:19');
INSERT INTO `lar_actions_log` VALUES ('126', '2', '', '1', '更新了[ID:11]菜单信息', '2018-06-14 08:44:27');
INSERT INTO `lar_actions_log` VALUES ('127', '2', '', '1', '更新了[ID:25]菜单信息', '2018-06-14 08:56:27');
INSERT INTO `lar_actions_log` VALUES ('128', '2', '', '5', '清除了视图缓存文件', '2018-06-14 08:57:58');
INSERT INTO `lar_actions_log` VALUES ('129', '2', '', '1', '更新了[ID:25]菜单信息', '2018-06-14 08:58:13');
INSERT INTO `lar_actions_log` VALUES ('130', '2', '', '5', '清除了视图缓存文件', '2018-06-14 08:58:37');
INSERT INTO `lar_actions_log` VALUES ('131', '2', '', '1', '新增了[测试文件夹]的菜单信息', '2018-06-14 08:59:58');
INSERT INTO `lar_actions_log` VALUES ('132', '2', '', '1', '新增了[册册册]的菜单信息', '2018-06-14 09:01:02');
INSERT INTO `lar_actions_log` VALUES ('133', '2', '', '5', '清除了视图缓存文件', '2018-06-14 09:03:05');
INSERT INTO `lar_actions_log` VALUES ('134', '2', '', '1', '新增了[发生的]的菜单信息', '2018-06-14 09:03:23');
INSERT INTO `lar_actions_log` VALUES ('135', '2', '', '5', '清除了视图缓存文件', '2018-06-14 09:31:04');
INSERT INTO `lar_actions_log` VALUES ('136', '2', '', '1', '新增了[阿凡达]的菜单信息', '2018-06-14 09:31:31');
INSERT INTO `lar_actions_log` VALUES ('137', '2', '', '5', '清除了视图缓存文件', '2018-06-14 09:32:32');
INSERT INTO `lar_actions_log` VALUES ('138', '2', '', '5', '清除了视图缓存文件', '2018-06-14 09:33:30');
INSERT INTO `lar_actions_log` VALUES ('139', '2', '', '1', '新增了[阿斯顿发]的菜单信息', '2018-06-14 09:35:06');
INSERT INTO `lar_actions_log` VALUES ('140', '2', '', '1', '更新了[ID:26]菜单信息', '2018-06-20 06:09:26');
INSERT INTO `lar_actions_log` VALUES ('141', '2', '', '1', '更新了[ID:18]菜单信息', '2018-06-20 06:45:31');
INSERT INTO `lar_actions_log` VALUES ('142', '2', '', '5', '清除了视图缓存文件', '2018-06-20 06:48:50');
INSERT INTO `lar_actions_log` VALUES ('143', '2', '', '5', '清除了视图缓存文件', '2018-06-20 06:49:13');
INSERT INTO `lar_actions_log` VALUES ('144', '2', '', '5', '清除了视图缓存文件', '2018-06-20 06:49:52');
INSERT INTO `lar_actions_log` VALUES ('145', '2', '', '5', '清除了视图缓存文件', '2018-06-20 06:52:21');
INSERT INTO `lar_actions_log` VALUES ('146', '2', '', '5', '清除了视图缓存文件', '2018-06-20 06:54:54');
INSERT INTO `lar_actions_log` VALUES ('147', '2', '', '5', '清除了视图缓存文件', '2018-06-20 07:01:24');
INSERT INTO `lar_actions_log` VALUES ('148', '2', '', '5', '清除了视图缓存文件', '2018-06-20 07:04:21');
INSERT INTO `lar_actions_log` VALUES ('149', '2', '', '5', '清除了视图缓存文件', '2018-06-20 07:10:31');
INSERT INTO `lar_actions_log` VALUES ('150', '2', '', '5', '清除了视图缓存文件', '2018-06-20 07:11:25');
INSERT INTO `lar_actions_log` VALUES ('151', '2', '', '5', '清除了视图缓存文件', '2018-06-20 07:12:30');
INSERT INTO `lar_actions_log` VALUES ('152', '2', '', '5', '清除了视图缓存文件', '2018-06-20 08:02:41');
INSERT INTO `lar_actions_log` VALUES ('153', '2', '', '5', '清除了视图缓存文件', '2018-06-20 08:03:20');
INSERT INTO `lar_actions_log` VALUES ('154', '2', '', '5', '清除了视图缓存文件', '2018-06-20 08:03:57');
INSERT INTO `lar_actions_log` VALUES ('155', '2', '', '5', '清除了视图缓存文件', '2018-06-20 08:11:21');
INSERT INTO `lar_actions_log` VALUES ('156', '2', '', '5', '清除了视图缓存文件', '2018-06-20 08:12:21');
INSERT INTO `lar_actions_log` VALUES ('157', '2', '', '5', '清除了视图缓存文件', '2018-06-20 08:13:12');
INSERT INTO `lar_actions_log` VALUES ('158', '2', '', '5', '清除了视图缓存文件', '2018-06-20 08:14:05');
INSERT INTO `lar_actions_log` VALUES ('159', '2', '', '5', '清除了视图缓存文件', '2018-06-20 08:14:39');
INSERT INTO `lar_actions_log` VALUES ('160', '2', '', '5', '清除了视图缓存文件', '2018-06-20 08:15:09');
INSERT INTO `lar_actions_log` VALUES ('161', '2', '', '5', '清除了视图缓存文件', '2018-06-20 08:15:47');
INSERT INTO `lar_actions_log` VALUES ('162', '2', '', '5', '清除了视图缓存文件', '2018-06-20 08:16:51');
INSERT INTO `lar_actions_log` VALUES ('163', '2', '', '5', '清除了视图缓存文件', '2018-06-20 08:17:22');
INSERT INTO `lar_actions_log` VALUES ('164', '2', '', '5', '清除了视图缓存文件', '2018-06-20 08:18:52');
INSERT INTO `lar_actions_log` VALUES ('165', '2', '', '5', '清除了视图缓存文件', '2018-06-20 08:20:31');
INSERT INTO `lar_actions_log` VALUES ('166', '2', '', '5', '清除了视图缓存文件', '2018-06-20 08:21:43');
INSERT INTO `lar_actions_log` VALUES ('167', '2', '', '5', '清除了视图缓存文件', '2018-06-20 08:23:25');
INSERT INTO `lar_actions_log` VALUES ('168', '2', '', '5', '清除了视图缓存文件', '2018-06-20 08:26:31');
INSERT INTO `lar_actions_log` VALUES ('169', '2', '', '5', '清除了视图缓存文件', '2018-06-20 08:28:46');
INSERT INTO `lar_actions_log` VALUES ('170', '2', '', '5', '清除了视图缓存文件', '2018-06-20 08:29:33');
INSERT INTO `lar_actions_log` VALUES ('171', '2', '', '5', '清除了视图缓存文件', '2018-06-20 08:34:36');
INSERT INTO `lar_actions_log` VALUES ('172', '2', '', '5', '清除了视图缓存文件', '2018-06-20 08:42:09');
INSERT INTO `lar_actions_log` VALUES ('173', '2', '', '1', '新增了[管理员管理]的菜单信息', '2018-06-20 08:44:56');
INSERT INTO `lar_actions_log` VALUES ('174', '2', '', '1', '更新了[ID:31]菜单信息', '2018-06-20 08:46:04');
INSERT INTO `lar_actions_log` VALUES ('175', '2', '', '5', '清除了视图缓存文件', '2018-06-20 09:03:47');
INSERT INTO `lar_actions_log` VALUES ('176', '2', '', '5', '清除了视图缓存文件', '2018-06-20 09:04:43');
INSERT INTO `lar_actions_log` VALUES ('177', '2', '', '5', '清除了视图缓存文件', '2018-06-20 09:05:15');
INSERT INTO `lar_actions_log` VALUES ('178', '2', '', '5', '清除了视图缓存文件', '2018-06-20 09:10:30');
INSERT INTO `lar_actions_log` VALUES ('179', '2', '', '5', '清除了视图缓存文件', '2018-06-20 09:10:53');
INSERT INTO `lar_actions_log` VALUES ('180', '2', '', '5', '清除了视图缓存文件', '2018-06-20 09:11:31');
INSERT INTO `lar_actions_log` VALUES ('181', '2', '', '5', '清除了视图缓存文件', '2018-06-20 09:11:38');
INSERT INTO `lar_actions_log` VALUES ('182', '2', '', '5', '清除了视图缓存文件', '2018-06-21 02:34:58');
INSERT INTO `lar_actions_log` VALUES ('183', '2', '', '5', '清除了视图缓存文件', '2018-06-21 02:35:31');
INSERT INTO `lar_actions_log` VALUES ('184', '2', '', '5', '清除了视图缓存文件', '2018-06-21 02:35:49');
INSERT INTO `lar_actions_log` VALUES ('185', '2', '', '5', '清除了视图缓存文件', '2018-06-21 02:35:56');
INSERT INTO `lar_actions_log` VALUES ('186', '2', '', '5', '清除了视图缓存文件', '2018-06-21 02:36:04');
INSERT INTO `lar_actions_log` VALUES ('187', '2', '', '5', '清除了视图缓存文件', '2018-06-21 02:51:15');
INSERT INTO `lar_actions_log` VALUES ('188', '2', '', '5', '清除了视图缓存文件', '2018-06-21 03:54:34');
INSERT INTO `lar_actions_log` VALUES ('189', '2', '', '5', '清除了视图缓存文件', '2018-06-21 05:27:33');
INSERT INTO `lar_actions_log` VALUES ('190', '2', '', '5', '清除了视图缓存文件', '2018-06-21 05:29:42');
INSERT INTO `lar_actions_log` VALUES ('191', '2', '', '5', '清除了视图缓存文件', '2018-06-21 05:31:57');
INSERT INTO `lar_actions_log` VALUES ('192', '2', '', '5', '清除了视图缓存文件', '2018-06-21 06:57:32');
INSERT INTO `lar_actions_log` VALUES ('193', '2', '', '5', '清除了视图缓存文件', '2018-06-21 07:03:11');
INSERT INTO `lar_actions_log` VALUES ('194', '2', '', '5', '清除了视图缓存文件', '2018-06-21 07:04:49');
INSERT INTO `lar_actions_log` VALUES ('195', '2', '', '5', '清除了视图缓存文件', '2018-06-21 07:06:27');
INSERT INTO `lar_actions_log` VALUES ('196', '2', '', '5', '清除了视图缓存文件', '2018-06-21 07:06:51');
INSERT INTO `lar_actions_log` VALUES ('197', '2', '', '5', '清除了视图缓存文件', '2018-06-21 07:07:00');
INSERT INTO `lar_actions_log` VALUES ('198', '2', '', '5', '清除了视图缓存文件', '2018-06-21 07:07:20');
INSERT INTO `lar_actions_log` VALUES ('199', '2', '', '5', '清除了视图缓存文件', '2018-06-21 08:16:40');
INSERT INTO `lar_actions_log` VALUES ('200', '2', '', '5', '清除了视图缓存文件', '2018-06-21 08:29:33');
INSERT INTO `lar_actions_log` VALUES ('201', '2', '', '1', '新增了[公众号授权Token管理]的菜单信息', '2018-06-22 11:43:59');
INSERT INTO `lar_actions_log` VALUES ('202', '2', '', '1', '更新了[ID:32]菜单信息', '2018-06-22 11:51:13');
INSERT INTO `lar_actions_log` VALUES ('203', '2', '', '1', '更新了[ID:32]菜单信息', '2018-06-22 11:56:41');
INSERT INTO `lar_actions_log` VALUES ('204', '2', '', '5', '清除了视图缓存文件', '2018-06-22 12:03:06');
INSERT INTO `lar_actions_log` VALUES ('205', '2', '', '5', '清除了视图缓存文件', '2018-06-22 13:13:22');
INSERT INTO `lar_actions_log` VALUES ('206', '2', '', '5', '清除了视图缓存文件', '2018-06-22 13:30:56');
INSERT INTO `lar_actions_log` VALUES ('207', '2', '', '5', '清除了视图缓存文件', '2018-06-22 13:31:47');
INSERT INTO `lar_actions_log` VALUES ('208', '2', '', '1', '新增了[发布菜单管理]的菜单信息', '2018-06-22 13:36:54');
INSERT INTO `lar_actions_log` VALUES ('209', '2', '', '1', '更新了[ID:33]菜单信息', '2018-06-22 13:37:26');
INSERT INTO `lar_actions_log` VALUES ('210', '2', '', '5', '清除了视图缓存文件', '2018-06-22 13:58:19');
INSERT INTO `lar_actions_log` VALUES ('211', '2', '', '5', '清除了视图缓存文件', '2018-06-22 13:59:02');
INSERT INTO `lar_actions_log` VALUES ('212', '2', '', '5', '清除了视图缓存文件', '2018-06-22 14:11:13');
INSERT INTO `lar_actions_log` VALUES ('213', '2', '', '5', '清除了视图缓存文件', '2018-06-22 14:11:38');
INSERT INTO `lar_actions_log` VALUES ('214', '2', '', '5', '清除了视图缓存文件', '2018-06-22 14:12:41');
INSERT INTO `lar_actions_log` VALUES ('215', '2', '', '5', '清除了视图缓存文件', '2018-06-22 14:12:48');
INSERT INTO `lar_actions_log` VALUES ('216', '2', '', '5', '清除了视图缓存文件', '2018-06-22 14:21:05');
INSERT INTO `lar_actions_log` VALUES ('217', '2', '', '5', '清除了视图缓存文件', '2018-06-22 14:25:14');
INSERT INTO `lar_actions_log` VALUES ('218', '2', '', '5', '清除了视图缓存文件', '2018-06-22 14:25:41');
INSERT INTO `lar_actions_log` VALUES ('219', '2', '', '5', '清除了视图缓存文件', '2018-06-22 14:27:33');
INSERT INTO `lar_actions_log` VALUES ('220', '2', '', '5', '清除了视图缓存文件', '2018-06-22 14:27:53');
INSERT INTO `lar_actions_log` VALUES ('221', '2', '', '5', '清除了视图缓存文件', '2018-06-22 14:28:04');
INSERT INTO `lar_actions_log` VALUES ('222', '2', '', '5', '清除了视图缓存文件', '2018-06-22 14:28:27');
INSERT INTO `lar_actions_log` VALUES ('223', '2', '', '5', '清除了视图缓存文件', '2018-06-22 14:28:51');
INSERT INTO `lar_actions_log` VALUES ('224', '2', '', '5', '清除了视图缓存文件', '2018-06-22 14:49:19');
INSERT INTO `lar_actions_log` VALUES ('225', '2', '', '5', '清除了视图缓存文件', '2018-06-22 14:49:49');
INSERT INTO `lar_actions_log` VALUES ('226', '2', '', '5', '清除了视图缓存文件', '2018-06-22 14:50:29');
INSERT INTO `lar_actions_log` VALUES ('227', '2', '', '5', '清除了视图缓存文件', '2018-06-22 14:50:58');
INSERT INTO `lar_actions_log` VALUES ('228', '2', '', '5', '清除了视图缓存文件', '2018-06-22 14:55:36');
INSERT INTO `lar_actions_log` VALUES ('229', '2', '', '5', '清除了视图缓存文件', '2018-06-22 14:58:06');
INSERT INTO `lar_actions_log` VALUES ('230', '2', '', '5', '清除了视图缓存文件', '2018-06-22 14:58:27');
INSERT INTO `lar_actions_log` VALUES ('231', '2', '', '5', '清除了视图缓存文件', '2018-06-22 15:07:22');
INSERT INTO `lar_actions_log` VALUES ('232', '2', '', '5', '清除了视图缓存文件', '2018-06-22 15:11:51');
INSERT INTO `lar_actions_log` VALUES ('233', '2', '', '5', '清除了视图缓存文件', '2018-06-22 16:27:48');
INSERT INTO `lar_actions_log` VALUES ('234', '2', '', '5', '清除了视图缓存文件', '2018-06-22 16:34:53');
INSERT INTO `lar_actions_log` VALUES ('235', '2', '', '5', '清除了视图缓存文件', '2018-06-22 16:37:47');
INSERT INTO `lar_actions_log` VALUES ('236', '2', '', '5', '清除了视图缓存文件', '2018-06-22 16:39:03');
INSERT INTO `lar_actions_log` VALUES ('237', '2', '', '5', '清除了视图缓存文件', '2018-06-22 16:40:38');
INSERT INTO `lar_actions_log` VALUES ('238', '2', '', '5', '清除了视图缓存文件', '2018-06-22 16:46:48');
INSERT INTO `lar_actions_log` VALUES ('239', '2', '', '5', '清除了视图缓存文件', '2018-06-22 16:47:20');
INSERT INTO `lar_actions_log` VALUES ('240', '2', '', '5', '清除了视图缓存文件', '2018-06-22 17:34:17');
INSERT INTO `lar_actions_log` VALUES ('241', '2', '', '5', '清除了视图缓存文件', '2018-06-22 17:34:47');
INSERT INTO `lar_actions_log` VALUES ('242', '2', '', '5', '清除了视图缓存文件', '2018-06-22 17:40:13');
INSERT INTO `lar_actions_log` VALUES ('243', '2', '', '5', '清除了视图缓存文件', '2018-06-22 17:45:47');
INSERT INTO `lar_actions_log` VALUES ('244', '2', '', '5', '清除了视图缓存文件', '2018-06-22 17:46:50');
INSERT INTO `lar_actions_log` VALUES ('245', '2', '', '5', '清除了视图缓存文件', '2018-06-22 17:49:35');
INSERT INTO `lar_actions_log` VALUES ('246', '2', '', '5', '[远东]登录了后台', '2018-06-22 20:06:55');
INSERT INTO `lar_actions_log` VALUES ('247', '2', '', '6', '下载了【laravel.log】日志文件', '2018-06-22 20:10:43');
INSERT INTO `lar_actions_log` VALUES ('248', '2', '', '5', '[远东]登录了后台', '2018-06-22 21:27:29');
INSERT INTO `lar_actions_log` VALUES ('249', '2', '', '5', '[远东]登录了后台', '2018-06-22 21:28:58');
INSERT INTO `lar_actions_log` VALUES ('250', '2', '', '5', '[远东]登录了后台', '2018-06-22 21:51:11');
INSERT INTO `lar_actions_log` VALUES ('251', '2', '', '6', '[远东]退出了后台', '2018-06-22 21:52:05');
INSERT INTO `lar_actions_log` VALUES ('252', '2', '', '5', '[远东]登录了后台', '2018-06-22 22:56:53');
INSERT INTO `lar_actions_log` VALUES ('253', '2', '', '5', '删除【laravel.log】日志文件', '2018-06-22 23:10:57');
INSERT INTO `lar_actions_log` VALUES ('254', '2', '', '5', '[远东]登录了后台', '2018-06-22 23:41:48');
INSERT INTO `lar_actions_log` VALUES ('255', '2', '', '6', '[远东]退出了后台', '2018-06-22 23:46:03');
INSERT INTO `lar_actions_log` VALUES ('256', '2', '', '5', '[远东]登录了后台', '2018-06-23 09:17:26');
INSERT INTO `lar_actions_log` VALUES ('257', '2', '', '5', '[远东]登录了后台', '2018-06-23 09:51:26');
INSERT INTO `lar_actions_log` VALUES ('258', '2', '', '5', '删除【laravel.log】日志文件', '2018-06-23 09:55:10');
INSERT INTO `lar_actions_log` VALUES ('259', '2', '', '5', '删除【laravel.log】日志文件', '2018-06-23 11:05:54');
INSERT INTO `lar_actions_log` VALUES ('260', '2', '', '5', '删除【laravel.log】日志文件', '2018-06-23 11:34:36');
INSERT INTO `lar_actions_log` VALUES ('261', '2', '', '5', '删除【laravel.log】日志文件', '2018-06-23 11:39:21');
INSERT INTO `lar_actions_log` VALUES ('262', '2', '', '6', '下载了【laravel-2018-06-23.log】日志文件', '2018-06-23 11:40:20');
INSERT INTO `lar_actions_log` VALUES ('263', '2', '', '5', '删除【laravel-2018-06-23.log】日志文件', '2018-06-23 11:57:04');
INSERT INTO `lar_actions_log` VALUES ('264', '2', '', '5', '删除【laravel-2018-06-23.log】日志文件', '2018-06-23 12:09:41');
INSERT INTO `lar_actions_log` VALUES ('265', '2', '', '5', '删除【laravel-2018-06-23.log】日志文件', '2018-06-23 12:48:47');
INSERT INTO `lar_actions_log` VALUES ('266', '2', '', '5', '删除【laravel-2018-06-23.log】日志文件', '2018-06-23 12:51:21');
INSERT INTO `lar_actions_log` VALUES ('267', '2', '', '5', '删除【laravel-2018-06-23.log】日志文件', '2018-06-23 12:58:12');
INSERT INTO `lar_actions_log` VALUES ('268', '2', '', '5', '删除【laravel-2018-06-23.log】日志文件', '2018-06-23 12:59:38');
INSERT INTO `lar_actions_log` VALUES ('269', '2', '', '5', '删除【laravel-2018-06-23.log】日志文件', '2018-06-23 13:01:30');
INSERT INTO `lar_actions_log` VALUES ('270', '2', '', '5', '删除【laravel-2018-06-23.log】日志文件', '2018-06-23 13:13:21');
INSERT INTO `lar_actions_log` VALUES ('271', '2', '', '5', '删除【laravel-2018-06-23.log】日志文件', '2018-06-23 13:18:03');
INSERT INTO `lar_actions_log` VALUES ('272', '2', '', '5', '删除【laravel-2018-06-23.log】日志文件', '2018-06-23 13:21:50');
INSERT INTO `lar_actions_log` VALUES ('273', '2', '', '5', '清除了视图缓存文件', '2018-06-23 20:12:19');
INSERT INTO `lar_actions_log` VALUES ('274', '2', '', '5', '清除了视图缓存文件', '2018-06-23 20:15:23');
INSERT INTO `lar_actions_log` VALUES ('275', '2', '', '5', '清除了视图缓存文件', '2018-06-23 21:15:27');
INSERT INTO `lar_actions_log` VALUES ('276', '2', '', '5', '[远东]登录了后台', '2018-06-23 21:16:51');
INSERT INTO `lar_actions_log` VALUES ('277', '2', '', '5', '[远东]登录了后台', '2018-06-23 21:17:37');
INSERT INTO `lar_actions_log` VALUES ('278', '2', '', '1', '更新了[ID:33]菜单信息', '2018-06-23 21:39:53');
INSERT INTO `lar_actions_log` VALUES ('279', '2', '', '5', '删除【laravel-2018-06-23.log】日志文件', '2018-06-23 21:45:37');
INSERT INTO `lar_actions_log` VALUES ('280', '2', '', '6', '[远东]退出了后台', '2018-06-23 21:49:59');
INSERT INTO `lar_actions_log` VALUES ('281', '2', '', '5', '[远东]登录了后台', '2018-06-23 21:52:56');
INSERT INTO `lar_actions_log` VALUES ('282', '2', '', '5', '删除【laravel-2018-06-23.log】日志文件', '2018-06-23 22:07:39');
INSERT INTO `lar_actions_log` VALUES ('283', '2', '', '5', '删除【laravel-2018-06-23.log】日志文件', '2018-06-23 22:12:30');
INSERT INTO `lar_actions_log` VALUES ('284', '2', '', '5', '[远东]登录了后台', '2018-06-24 10:54:16');
INSERT INTO `lar_actions_log` VALUES ('285', '2', '', '6', '[远东]退出了后台', '2018-06-24 13:37:33');
INSERT INTO `lar_actions_log` VALUES ('286', '2', '', '5', '[远东]登录了后台', '2018-06-24 13:38:10');
INSERT INTO `lar_actions_log` VALUES ('287', '2', '', '6', '[远东]退出了后台', '2018-06-24 14:00:39');
INSERT INTO `lar_actions_log` VALUES ('288', '2', '', '5', '[远东]登录了后台', '2018-06-24 14:01:22');
INSERT INTO `lar_actions_log` VALUES ('289', '2', '', '6', '[远东]退出了后台', '2018-06-24 14:04:02');
INSERT INTO `lar_actions_log` VALUES ('290', '2', '', '5', '[远东]登录了后台', '2018-06-24 14:09:33');
INSERT INTO `lar_actions_log` VALUES ('291', '2', '', '8', '[远东]退出了后台', '2018-06-24 14:10:42');
INSERT INTO `lar_actions_log` VALUES ('292', '2', '', '7', '[远东]登录了后台', '2018-06-24 14:11:01');
INSERT INTO `lar_actions_log` VALUES ('293', '2', '', '8', '[远东]退出了后台', '2018-06-24 14:31:33');
INSERT INTO `lar_actions_log` VALUES ('294', '2', '', '7', '[远东]登录了后台，登录IP:211.161.248.109', '2018-06-24 14:31:47');
INSERT INTO `lar_actions_log` VALUES ('295', '2', '', '7', '[远东]登录了后台，登录IP:211.161.248.109', '2018-06-24 15:18:34');
INSERT INTO `lar_actions_log` VALUES ('296', '2', '', '8', '[远东]退出了后台', '2018-06-24 15:43:17');
INSERT INTO `lar_actions_log` VALUES ('297', '2', '', '7', '[远东]登录了后台，登录IP:211.161.248.109', '2018-06-24 15:43:40');
INSERT INTO `lar_actions_log` VALUES ('298', '2', '', '8', '[远东]退出了后台', '2018-06-24 16:07:09');
INSERT INTO `lar_actions_log` VALUES ('299', '2', '', '7', '[远东]登录了后台，登录IP:127.0.0.1', '2018-06-24 16:47:26');
INSERT INTO `lar_actions_log` VALUES ('300', '2', '', '8', '[远东]退出了后台', '2018-06-24 16:50:09');
INSERT INTO `lar_actions_log` VALUES ('301', '2', '', '7', '[远东]登录了后台，登录IP:127.0.0.1', '2018-06-24 16:50:33');
INSERT INTO `lar_actions_log` VALUES ('302', '2', '', '7', '[远东]登录了后台，登录IP:127.0.0.1', '2018-06-24 17:01:25');
INSERT INTO `lar_actions_log` VALUES ('303', '2', '', '7', '[远东]登录了后台，登录IP:127.0.0.1', '2018-06-24 17:15:20');
INSERT INTO `lar_actions_log` VALUES ('304', '2', '', '7', '[远东]登录了后台，登录IP:127.0.0.1', '2018-06-24 17:16:12');
INSERT INTO `lar_actions_log` VALUES ('305', '2', '', '7', '[远东]登录了后台，登录IP:127.0.0.1', '2018-06-24 19:19:38');
INSERT INTO `lar_actions_log` VALUES ('306', '2', '', '2', '管理员[远东]状态被修改为--禁止登录 状态', '2018-06-24 19:30:45');
INSERT INTO `lar_actions_log` VALUES ('307', '2', '', '2', '管理员[远东]状态被修改为【启用】 状态', '2018-06-24 19:31:19');
INSERT INTO `lar_actions_log` VALUES ('308', '2', '', '7', '登录后台，登录IP:211.161.248.109', '2018-06-24 19:37:16');
INSERT INTO `lar_actions_log` VALUES ('309', '2', '', '8', '退出后台', '2018-06-24 19:37:34');
INSERT INTO `lar_actions_log` VALUES ('310', '2', '', '7', '登录后台，登录IP:211.161.248.109', '2018-06-24 19:37:58');
INSERT INTO `lar_actions_log` VALUES ('311', '2', '', '2', '管理员[远东]状态被修改为【禁止登录】 状态', '2018-06-24 20:09:29');
INSERT INTO `lar_actions_log` VALUES ('312', '2', '', '2', '管理员[远东]状态被修改为【禁止登录】 状态', '2018-06-24 20:10:09');
INSERT INTO `lar_actions_log` VALUES ('313', '2', '127.0.0.1', '2', '管理员[远东]状态被修改为【启用】 状态', '2018-06-24 20:10:49');
INSERT INTO `lar_actions_log` VALUES ('314', '2', '211.161.248.109', '2', '管理员[远东]状态被修改为【禁止登录】 状态', '2018-06-24 20:18:53');
INSERT INTO `lar_actions_log` VALUES ('315', '2', '211.161.248.109', '2', '管理员[远东]状态被修改为【禁止登录】 状态', '2018-06-24 20:19:06');
INSERT INTO `lar_actions_log` VALUES ('316', '2', '112.64.119.166', '7', '登录后台，登录IP:112.64.119.166', '2018-06-24 20:20:32');
INSERT INTO `lar_actions_log` VALUES ('317', '2', '112.64.119.166', '2', '管理员[远东]状态被修改为【启用】 状态', '2018-06-24 20:20:54');
INSERT INTO `lar_actions_log` VALUES ('318', '2', '112.64.119.166', '2', '管理员[远东]状态被修改为【启用】 状态', '2018-06-24 20:21:00');
INSERT INTO `lar_actions_log` VALUES ('319', '2', '112.64.119.166', '2', '管理员[远东]状态被修改为【禁止登录】 状态', '2018-06-24 20:21:08');
INSERT INTO `lar_actions_log` VALUES ('320', '2', '112.64.119.166', '2', '管理员[远东]状态被修改为【启用】 状态', '2018-06-24 20:21:13');
INSERT INTO `lar_actions_log` VALUES ('321', '2', '112.64.119.166', '2', '管理员[远东]状态被修改为【启用】 状态', '2018-06-24 20:22:11');
INSERT INTO `lar_actions_log` VALUES ('322', '2', '211.161.248.109', '6', '下载了【laravel-2018-06-24.log】日志文件', '2018-06-24 20:45:45');
INSERT INTO `lar_actions_log` VALUES ('323', '2', '211.161.248.109', '6', '下载了【laravel-2018-06-24.log】日志文件', '2018-06-24 20:45:51');
INSERT INTO `lar_actions_log` VALUES ('324', '2', '211.161.248.109', '6', '下载了【laravel-2018-06-23.log】日志文件', '2018-06-24 20:45:57');
INSERT INTO `lar_actions_log` VALUES ('325', '2', '211.161.248.109', '6', '下载了【laravel-2018-06-23.log】日志文件', '2018-06-24 20:45:58');
INSERT INTO `lar_actions_log` VALUES ('326', '2', '211.161.248.109', '6', '下载了【laravel-2018-06-24.log】日志文件', '2018-06-24 20:46:06');
INSERT INTO `lar_actions_log` VALUES ('327', '2', '211.161.248.109', '6', '下载了【laravel-2018-06-24.log】日志文件', '2018-06-24 20:46:09');
INSERT INTO `lar_actions_log` VALUES ('328', '2', '211.161.248.109', '6', '下载了【laravel-2018-06-24.log】日志文件', '2018-06-24 20:46:09');
INSERT INTO `lar_actions_log` VALUES ('329', '2', '211.161.248.109', '6', '下载了【laravel-2018-06-24.log】日志文件', '2018-06-24 20:46:10');
INSERT INTO `lar_actions_log` VALUES ('330', '2', '211.161.248.109', '6', '下载了【laravel-2018-06-24.log】日志文件', '2018-06-24 20:46:10');
INSERT INTO `lar_actions_log` VALUES ('331', '2', '211.161.248.109', '6', '下载了【laravel-2018-06-24.log】日志文件', '2018-06-24 20:46:10');
INSERT INTO `lar_actions_log` VALUES ('332', '2', '211.161.248.109', '6', '下载了【laravel-2018-06-24.log】日志文件', '2018-06-24 20:46:10');
INSERT INTO `lar_actions_log` VALUES ('333', '2', '211.161.248.109', '6', '下载了【laravel-2018-06-23.log】日志文件', '2018-06-24 20:46:23');
INSERT INTO `lar_actions_log` VALUES ('334', '2', '211.161.248.109', '6', '下载了【laravel-2018-06-23.log】日志文件', '2018-06-24 20:46:23');
INSERT INTO `lar_actions_log` VALUES ('335', '2', '211.161.248.109', '6', '下载了【laravel-2018-06-24.log】日志文件', '2018-06-24 20:48:29');
INSERT INTO `lar_actions_log` VALUES ('336', '2', '211.161.248.109', '7', '登录后台，登录IP:211.161.248.109', '2018-06-24 20:50:08');
INSERT INTO `lar_actions_log` VALUES ('337', '2', '211.161.248.109', '6', '下载了【laravel-2018-06-24.log】日志文件', '2018-06-24 20:50:21');
INSERT INTO `lar_actions_log` VALUES ('338', '2', '211.161.248.109', '6', '下载了【laravel-2018-06-24.log】日志文件', '2018-06-24 20:50:25');
INSERT INTO `lar_actions_log` VALUES ('339', '2', '211.161.248.109', '6', '下载了【laravel-2018-06-23.log】日志文件', '2018-06-24 20:51:10');
INSERT INTO `lar_actions_log` VALUES ('340', '2', '58.247.46.18', '7', '登录后台，登录IP:58.247.46.18', '2018-06-25 09:47:49');
INSERT INTO `lar_actions_log` VALUES ('341', '2', '58.247.46.18', '7', '登录后台，登录IP:58.247.46.18', '2018-06-25 11:16:05');
INSERT INTO `lar_actions_log` VALUES ('342', '2', '58.247.46.18', '6', '下载了【wechat-log】日志文件', '2018-06-25 11:26:17');
INSERT INTO `lar_actions_log` VALUES ('343', '2', '58.247.46.18', '6', '下载了【wechat-log】日志文件', '2018-06-25 11:26:48');
INSERT INTO `lar_actions_log` VALUES ('344', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-25 13:26:01');
INSERT INTO `lar_actions_log` VALUES ('345', '2', '112.64.68.228', '7', '登录后台，登录IP:112.64.68.228', '2018-06-25 13:27:09');
INSERT INTO `lar_actions_log` VALUES ('346', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-25 13:34:41');
INSERT INTO `lar_actions_log` VALUES ('347', '2', '58.247.46.18', '6', '下载了【test.log】日志文件', '2018-06-25 13:41:20');
INSERT INTO `lar_actions_log` VALUES ('348', '2', '58.247.46.18', '6', '下载了【laravel.log】日志文件', '2018-06-25 13:41:53');
INSERT INTO `lar_actions_log` VALUES ('349', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-25 13:47:07');
INSERT INTO `lar_actions_log` VALUES ('350', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-25 13:47:27');
INSERT INTO `lar_actions_log` VALUES ('351', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-25 13:48:38');
INSERT INTO `lar_actions_log` VALUES ('352', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-25 13:48:57');
INSERT INTO `lar_actions_log` VALUES ('353', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-25 13:52:01');
INSERT INTO `lar_actions_log` VALUES ('354', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-25 13:53:15');
INSERT INTO `lar_actions_log` VALUES ('355', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-25 13:55:09');
INSERT INTO `lar_actions_log` VALUES ('356', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-25 13:56:18');
INSERT INTO `lar_actions_log` VALUES ('357', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-25 13:56:51');
INSERT INTO `lar_actions_log` VALUES ('358', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-25 13:57:08');
INSERT INTO `lar_actions_log` VALUES ('359', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-25 14:00:16');
INSERT INTO `lar_actions_log` VALUES ('360', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-25 14:01:59');
INSERT INTO `lar_actions_log` VALUES ('361', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-25 14:05:12');
INSERT INTO `lar_actions_log` VALUES ('362', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-25 14:14:09');
INSERT INTO `lar_actions_log` VALUES ('363', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-25 14:16:09');
INSERT INTO `lar_actions_log` VALUES ('364', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-25 14:19:17');
INSERT INTO `lar_actions_log` VALUES ('365', '2', '58.247.46.18', '6', '下载了【test2.log】日志文件', '2018-06-25 14:19:33');
INSERT INTO `lar_actions_log` VALUES ('366', '2', '58.247.46.18', '6', '下载了【test2.log】日志文件', '2018-06-25 14:19:41');
INSERT INTO `lar_actions_log` VALUES ('367', '2', '58.247.46.18', '6', '下载了【test.log】日志文件', '2018-06-25 14:19:43');
INSERT INTO `lar_actions_log` VALUES ('368', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-25 14:20:52');
INSERT INTO `lar_actions_log` VALUES ('369', '2', '58.247.46.18', '6', '下载了【test2.log】日志文件', '2018-06-25 14:24:28');
INSERT INTO `lar_actions_log` VALUES ('370', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-25 14:25:11');
INSERT INTO `lar_actions_log` VALUES ('371', '2', '58.247.46.18', '5', '删除【laravel.log】日志文件', '2018-06-25 14:25:24');
INSERT INTO `lar_actions_log` VALUES ('372', '2', '58.247.46.18', '5', '删除【test2.log】日志文件', '2018-06-25 14:31:22');
INSERT INTO `lar_actions_log` VALUES ('373', '2', '58.247.46.18', '5', '删除【test.log】日志文件', '2018-06-25 14:31:24');
INSERT INTO `lar_actions_log` VALUES ('374', '2', '58.247.46.18', '6', '下载了【Visit-2018-06-25.log】日志文件', '2018-06-25 14:34:26');
INSERT INTO `lar_actions_log` VALUES ('375', '2', '58.247.46.18', '5', '删除【Visit-2018-06-25.log】日志文件', '2018-06-25 14:38:16');
INSERT INTO `lar_actions_log` VALUES ('376', '2', '58.247.46.18', '5', '删除【laravel-2018-06-25.log】日志文件', '2018-06-25 14:53:33');
INSERT INTO `lar_actions_log` VALUES ('377', '2', '58.247.46.18', '5', '删除【laravel-2018-06-24.log】日志文件', '2018-06-25 14:53:36');
INSERT INTO `lar_actions_log` VALUES ('378', '2', '58.247.46.18', '5', '删除【laravel-2018-06-23.log】日志文件', '2018-06-25 14:53:38');
INSERT INTO `lar_actions_log` VALUES ('379', '2', '58.247.46.18', '5', '删除【Visit-2018-06-25.log】日志文件', '2018-06-25 14:55:08');
INSERT INTO `lar_actions_log` VALUES ('380', '2', '58.247.46.18', '5', '删除【laravel-2018-06-25.log】日志文件', '2018-06-25 14:55:52');
INSERT INTO `lar_actions_log` VALUES ('381', '2', '58.247.46.18', '5', '删除【laravel-2018-06-25.log】日志文件', '2018-06-25 14:59:49');
INSERT INTO `lar_actions_log` VALUES ('382', '2', '58.247.46.18', '5', '删除【Visit-2018-06-25.log】日志文件', '2018-06-25 14:59:59');
INSERT INTO `lar_actions_log` VALUES ('383', '2', '58.247.46.18', '6', '下载了【Visit-2018-06-25.log】日志文件', '2018-06-25 16:11:38');
INSERT INTO `lar_actions_log` VALUES ('384', '2', '58.247.46.18', '5', '删除【Visit-2018-06-25.log】日志文件', '2018-06-25 16:11:41');
INSERT INTO `lar_actions_log` VALUES ('385', '2', '58.247.46.18', '5', '删除【Visit-2018-06-25.log】日志文件', '2018-06-25 16:29:08');
INSERT INTO `lar_actions_log` VALUES ('386', '2', '58.247.46.18', '5', '删除【Visit-2018-06-25.log】日志文件', '2018-06-25 16:36:27');
INSERT INTO `lar_actions_log` VALUES ('387', '2', '58.247.46.18', '5', '删除【Visit-2018-06-25.log】日志文件', '2018-06-25 16:40:42');
INSERT INTO `lar_actions_log` VALUES ('388', '2', '58.247.46.18', '5', '删除【laravel-2018-06-25.log】日志文件', '2018-06-25 16:41:14');
INSERT INTO `lar_actions_log` VALUES ('389', '2', '58.247.46.18', '5', '删除【Visit-2018-06-25.log】日志文件', '2018-06-25 16:41:30');
INSERT INTO `lar_actions_log` VALUES ('390', '2', '58.247.46.18', '5', '删除【Visit-2018-06-25.log】日志文件', '2018-06-25 16:48:54');
INSERT INTO `lar_actions_log` VALUES ('391', '2', '58.247.46.18', '5', '删除【Visit-2018-06-25.log】日志文件', '2018-06-25 16:56:38');
INSERT INTO `lar_actions_log` VALUES ('392', '2', '58.247.46.18', '5', '删除【Visit-2018-06-25.log】日志文件', '2018-06-25 17:10:19');
INSERT INTO `lar_actions_log` VALUES ('393', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-25 17:31:19');
INSERT INTO `lar_actions_log` VALUES ('394', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-25 17:34:36');
INSERT INTO `lar_actions_log` VALUES ('395', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-25 17:38:05');
INSERT INTO `lar_actions_log` VALUES ('396', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-25 17:39:50');
INSERT INTO `lar_actions_log` VALUES ('397', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-25 17:41:24');
INSERT INTO `lar_actions_log` VALUES ('398', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-25 17:42:26');
INSERT INTO `lar_actions_log` VALUES ('399', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-25 17:43:22');
INSERT INTO `lar_actions_log` VALUES ('400', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-25 17:43:49');
INSERT INTO `lar_actions_log` VALUES ('401', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-25 17:43:54');
INSERT INTO `lar_actions_log` VALUES ('402', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-25 17:43:54');
INSERT INTO `lar_actions_log` VALUES ('403', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-25 17:43:55');
INSERT INTO `lar_actions_log` VALUES ('404', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-25 17:43:55');
INSERT INTO `lar_actions_log` VALUES ('405', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-25 17:43:56');
INSERT INTO `lar_actions_log` VALUES ('406', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-25 17:43:56');
INSERT INTO `lar_actions_log` VALUES ('407', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-25 17:43:56');
INSERT INTO `lar_actions_log` VALUES ('408', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-25 17:43:56');
INSERT INTO `lar_actions_log` VALUES ('409', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-25 17:43:56');
INSERT INTO `lar_actions_log` VALUES ('410', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-25 17:47:05');
INSERT INTO `lar_actions_log` VALUES ('411', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-25 17:48:26');
INSERT INTO `lar_actions_log` VALUES ('412', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-25 17:48:52');
INSERT INTO `lar_actions_log` VALUES ('413', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-25 17:49:12');
INSERT INTO `lar_actions_log` VALUES ('414', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-25 17:52:31');
INSERT INTO `lar_actions_log` VALUES ('415', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-25 17:54:31');
INSERT INTO `lar_actions_log` VALUES ('416', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-25 17:55:04');
INSERT INTO `lar_actions_log` VALUES ('417', '2', '211.161.245.120', '6', '下载了【Visit-2018-06-25.log】日志文件', '2018-06-25 19:44:49');
INSERT INTO `lar_actions_log` VALUES ('418', '2', '211.161.245.120', '5', '清除了视图缓存文件', '2018-06-25 19:47:08');
INSERT INTO `lar_actions_log` VALUES ('419', '2', '211.161.245.120', '2', '管理员[远东]状态被修改为【禁止登录】 状态', '2018-06-25 20:10:30');
INSERT INTO `lar_actions_log` VALUES ('420', '2', '211.161.245.120', '7', '登录后台，登录IP:211.161.245.120', '2018-06-25 20:35:54');
INSERT INTO `lar_actions_log` VALUES ('421', '2', '211.161.245.120', '5', '删除【Visit-2018-06-25.log】日志文件', '2018-06-25 20:43:38');
INSERT INTO `lar_actions_log` VALUES ('422', '2', '127.0.0.1', '7', '登录后台，登录IP:127.0.0.1', '2018-06-25 21:03:30');
INSERT INTO `lar_actions_log` VALUES ('423', '2', '127.0.0.1', '8', '退出后台', '2018-06-25 21:27:45');
INSERT INTO `lar_actions_log` VALUES ('424', '2', '127.0.0.1', '7', '登录后台，登录IP:127.0.0.1', '2018-06-25 21:30:19');
INSERT INTO `lar_actions_log` VALUES ('425', '2', '211.161.245.120', '7', '登录后台，登录IP:211.161.245.120', '2018-06-25 22:15:22');
INSERT INTO `lar_actions_log` VALUES ('426', '2', '211.161.245.120', '8', '退出后台', '2018-06-25 23:55:43');
INSERT INTO `lar_actions_log` VALUES ('427', '2', '58.247.46.18', '7', '登录后台，登录IP:58.247.46.18', '2018-06-26 09:08:44');
INSERT INTO `lar_actions_log` VALUES ('428', '2', '58.247.46.18', '7', '登录后台，登录IP:58.247.46.18', '2018-06-26 09:18:32');
INSERT INTO `lar_actions_log` VALUES ('429', '2', '112.65.48.115', '7', '登录后台，登录IP:112.65.48.115', '2018-06-26 09:24:29');
INSERT INTO `lar_actions_log` VALUES ('430', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 09:38:02');
INSERT INTO `lar_actions_log` VALUES ('431', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 09:39:35');
INSERT INTO `lar_actions_log` VALUES ('432', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 09:44:15');
INSERT INTO `lar_actions_log` VALUES ('433', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 09:46:40');
INSERT INTO `lar_actions_log` VALUES ('434', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 09:47:40');
INSERT INTO `lar_actions_log` VALUES ('435', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 09:48:25');
INSERT INTO `lar_actions_log` VALUES ('436', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 09:49:15');
INSERT INTO `lar_actions_log` VALUES ('437', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 09:50:10');
INSERT INTO `lar_actions_log` VALUES ('438', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 09:50:41');
INSERT INTO `lar_actions_log` VALUES ('439', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 09:54:00');
INSERT INTO `lar_actions_log` VALUES ('440', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 09:55:08');
INSERT INTO `lar_actions_log` VALUES ('441', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 09:55:49');
INSERT INTO `lar_actions_log` VALUES ('442', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 09:56:11');
INSERT INTO `lar_actions_log` VALUES ('443', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 09:56:37');
INSERT INTO `lar_actions_log` VALUES ('444', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 09:57:47');
INSERT INTO `lar_actions_log` VALUES ('445', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 10:06:15');
INSERT INTO `lar_actions_log` VALUES ('446', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 10:06:49');
INSERT INTO `lar_actions_log` VALUES ('447', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 10:10:23');
INSERT INTO `lar_actions_log` VALUES ('448', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 10:12:48');
INSERT INTO `lar_actions_log` VALUES ('449', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 10:13:08');
INSERT INTO `lar_actions_log` VALUES ('450', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 10:16:39');
INSERT INTO `lar_actions_log` VALUES ('451', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 10:17:45');
INSERT INTO `lar_actions_log` VALUES ('452', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 10:18:04');
INSERT INTO `lar_actions_log` VALUES ('453', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 10:19:14');
INSERT INTO `lar_actions_log` VALUES ('454', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 10:19:50');
INSERT INTO `lar_actions_log` VALUES ('455', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 10:20:40');
INSERT INTO `lar_actions_log` VALUES ('456', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 10:21:17');
INSERT INTO `lar_actions_log` VALUES ('457', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 10:22:36');
INSERT INTO `lar_actions_log` VALUES ('458', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 10:23:30');
INSERT INTO `lar_actions_log` VALUES ('459', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 10:24:00');
INSERT INTO `lar_actions_log` VALUES ('460', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 10:24:13');
INSERT INTO `lar_actions_log` VALUES ('461', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 10:25:38');
INSERT INTO `lar_actions_log` VALUES ('462', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 10:26:17');
INSERT INTO `lar_actions_log` VALUES ('463', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 10:26:35');
INSERT INTO `lar_actions_log` VALUES ('464', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 10:27:18');
INSERT INTO `lar_actions_log` VALUES ('465', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 10:29:16');
INSERT INTO `lar_actions_log` VALUES ('466', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 10:29:42');
INSERT INTO `lar_actions_log` VALUES ('467', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 10:31:56');
INSERT INTO `lar_actions_log` VALUES ('468', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 10:33:14');
INSERT INTO `lar_actions_log` VALUES ('469', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 10:37:04');
INSERT INTO `lar_actions_log` VALUES ('470', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 10:37:35');
INSERT INTO `lar_actions_log` VALUES ('471', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 10:38:03');
INSERT INTO `lar_actions_log` VALUES ('472', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 10:38:26');
INSERT INTO `lar_actions_log` VALUES ('473', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 10:40:14');
INSERT INTO `lar_actions_log` VALUES ('474', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 10:45:17');
INSERT INTO `lar_actions_log` VALUES ('475', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 10:47:20');
INSERT INTO `lar_actions_log` VALUES ('476', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 10:47:35');
INSERT INTO `lar_actions_log` VALUES ('477', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 10:48:08');
INSERT INTO `lar_actions_log` VALUES ('478', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 10:48:54');
INSERT INTO `lar_actions_log` VALUES ('479', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 10:57:13');
INSERT INTO `lar_actions_log` VALUES ('480', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 10:57:44');
INSERT INTO `lar_actions_log` VALUES ('481', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 10:58:15');
INSERT INTO `lar_actions_log` VALUES ('482', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 10:58:45');
INSERT INTO `lar_actions_log` VALUES ('483', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 10:59:36');
INSERT INTO `lar_actions_log` VALUES ('484', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 11:00:43');
INSERT INTO `lar_actions_log` VALUES ('485', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 11:01:18');
INSERT INTO `lar_actions_log` VALUES ('486', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 11:06:03');
INSERT INTO `lar_actions_log` VALUES ('487', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 11:08:01');
INSERT INTO `lar_actions_log` VALUES ('488', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 11:08:18');
INSERT INTO `lar_actions_log` VALUES ('489', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 11:09:04');
INSERT INTO `lar_actions_log` VALUES ('490', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 11:09:51');
INSERT INTO `lar_actions_log` VALUES ('491', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 11:10:34');
INSERT INTO `lar_actions_log` VALUES ('492', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 11:11:09');
INSERT INTO `lar_actions_log` VALUES ('493', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 11:11:34');
INSERT INTO `lar_actions_log` VALUES ('494', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 11:12:08');
INSERT INTO `lar_actions_log` VALUES ('495', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 11:15:04');
INSERT INTO `lar_actions_log` VALUES ('496', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 11:19:22');
INSERT INTO `lar_actions_log` VALUES ('497', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 11:20:03');
INSERT INTO `lar_actions_log` VALUES ('498', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 11:21:19');
INSERT INTO `lar_actions_log` VALUES ('499', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 11:23:09');
INSERT INTO `lar_actions_log` VALUES ('500', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 11:26:47');
INSERT INTO `lar_actions_log` VALUES ('501', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 11:30:06');
INSERT INTO `lar_actions_log` VALUES ('502', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 11:31:03');
INSERT INTO `lar_actions_log` VALUES ('503', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 11:33:25');
INSERT INTO `lar_actions_log` VALUES ('504', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 11:34:37');
INSERT INTO `lar_actions_log` VALUES ('505', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 11:36:38');
INSERT INTO `lar_actions_log` VALUES ('506', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 11:38:36');
INSERT INTO `lar_actions_log` VALUES ('507', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 11:40:12');
INSERT INTO `lar_actions_log` VALUES ('508', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 11:41:35');
INSERT INTO `lar_actions_log` VALUES ('509', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 11:46:30');
INSERT INTO `lar_actions_log` VALUES ('510', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 11:49:13');
INSERT INTO `lar_actions_log` VALUES ('511', '2', '112.65.48.115', '7', '登录后台，登录IP:112.65.48.115', '2018-06-26 12:06:52');
INSERT INTO `lar_actions_log` VALUES ('512', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 13:48:30');
INSERT INTO `lar_actions_log` VALUES ('513', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 13:50:19');
INSERT INTO `lar_actions_log` VALUES ('514', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 14:00:31');
INSERT INTO `lar_actions_log` VALUES ('515', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 14:03:38');
INSERT INTO `lar_actions_log` VALUES ('516', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 14:04:11');
INSERT INTO `lar_actions_log` VALUES ('517', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 14:04:50');
INSERT INTO `lar_actions_log` VALUES ('518', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 14:06:08');
INSERT INTO `lar_actions_log` VALUES ('519', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 14:06:23');
INSERT INTO `lar_actions_log` VALUES ('520', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 14:07:53');
INSERT INTO `lar_actions_log` VALUES ('521', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 14:08:57');
INSERT INTO `lar_actions_log` VALUES ('522', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 14:11:50');
INSERT INTO `lar_actions_log` VALUES ('523', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 14:12:37');
INSERT INTO `lar_actions_log` VALUES ('524', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 14:13:02');
INSERT INTO `lar_actions_log` VALUES ('525', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 14:13:14');
INSERT INTO `lar_actions_log` VALUES ('526', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 14:13:29');
INSERT INTO `lar_actions_log` VALUES ('527', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 14:15:30');
INSERT INTO `lar_actions_log` VALUES ('528', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 14:15:46');
INSERT INTO `lar_actions_log` VALUES ('529', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 14:16:04');
INSERT INTO `lar_actions_log` VALUES ('530', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 14:16:28');
INSERT INTO `lar_actions_log` VALUES ('531', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 14:16:44');
INSERT INTO `lar_actions_log` VALUES ('532', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 14:17:00');
INSERT INTO `lar_actions_log` VALUES ('533', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 14:17:49');
INSERT INTO `lar_actions_log` VALUES ('534', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 14:18:07');
INSERT INTO `lar_actions_log` VALUES ('535', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 14:26:51');
INSERT INTO `lar_actions_log` VALUES ('536', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 14:27:14');
INSERT INTO `lar_actions_log` VALUES ('537', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 14:30:18');
INSERT INTO `lar_actions_log` VALUES ('538', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 14:31:17');
INSERT INTO `lar_actions_log` VALUES ('539', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 14:32:39');
INSERT INTO `lar_actions_log` VALUES ('540', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 14:35:03');
INSERT INTO `lar_actions_log` VALUES ('541', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 14:35:37');
INSERT INTO `lar_actions_log` VALUES ('542', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 14:36:09');
INSERT INTO `lar_actions_log` VALUES ('543', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 14:38:47');
INSERT INTO `lar_actions_log` VALUES ('544', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 14:42:23');
INSERT INTO `lar_actions_log` VALUES ('545', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 14:42:57');
INSERT INTO `lar_actions_log` VALUES ('546', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 14:44:23');
INSERT INTO `lar_actions_log` VALUES ('547', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 14:45:19');
INSERT INTO `lar_actions_log` VALUES ('548', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 14:51:25');
INSERT INTO `lar_actions_log` VALUES ('549', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 14:52:57');
INSERT INTO `lar_actions_log` VALUES ('550', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 14:54:53');
INSERT INTO `lar_actions_log` VALUES ('551', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 14:56:00');
INSERT INTO `lar_actions_log` VALUES ('552', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 14:57:14');
INSERT INTO `lar_actions_log` VALUES ('553', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 14:59:15');
INSERT INTO `lar_actions_log` VALUES ('554', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 14:59:57');
INSERT INTO `lar_actions_log` VALUES ('555', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 15:01:50');
INSERT INTO `lar_actions_log` VALUES ('556', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 15:02:06');
INSERT INTO `lar_actions_log` VALUES ('557', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 15:02:17');
INSERT INTO `lar_actions_log` VALUES ('558', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 15:03:26');
INSERT INTO `lar_actions_log` VALUES ('559', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 15:07:11');
INSERT INTO `lar_actions_log` VALUES ('560', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 15:07:48');
INSERT INTO `lar_actions_log` VALUES ('561', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 15:08:39');
INSERT INTO `lar_actions_log` VALUES ('562', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 15:09:16');
INSERT INTO `lar_actions_log` VALUES ('563', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 15:09:48');
INSERT INTO `lar_actions_log` VALUES ('564', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 15:10:07');
INSERT INTO `lar_actions_log` VALUES ('565', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 15:10:49');
INSERT INTO `lar_actions_log` VALUES ('566', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 15:11:14');
INSERT INTO `lar_actions_log` VALUES ('567', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 15:14:20');
INSERT INTO `lar_actions_log` VALUES ('568', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 15:15:30');
INSERT INTO `lar_actions_log` VALUES ('569', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 15:16:01');
INSERT INTO `lar_actions_log` VALUES ('570', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 15:17:14');
INSERT INTO `lar_actions_log` VALUES ('571', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 15:18:34');
INSERT INTO `lar_actions_log` VALUES ('572', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 15:19:36');
INSERT INTO `lar_actions_log` VALUES ('573', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 15:20:30');
INSERT INTO `lar_actions_log` VALUES ('574', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 15:21:46');
INSERT INTO `lar_actions_log` VALUES ('575', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 15:22:05');
INSERT INTO `lar_actions_log` VALUES ('576', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 15:23:20');
INSERT INTO `lar_actions_log` VALUES ('577', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 15:23:48');
INSERT INTO `lar_actions_log` VALUES ('578', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 15:24:05');
INSERT INTO `lar_actions_log` VALUES ('579', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 15:24:33');
INSERT INTO `lar_actions_log` VALUES ('580', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 15:25:18');
INSERT INTO `lar_actions_log` VALUES ('581', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 15:26:10');
INSERT INTO `lar_actions_log` VALUES ('582', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 15:27:40');
INSERT INTO `lar_actions_log` VALUES ('583', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 15:28:14');
INSERT INTO `lar_actions_log` VALUES ('584', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 15:28:44');
INSERT INTO `lar_actions_log` VALUES ('585', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 15:30:13');
INSERT INTO `lar_actions_log` VALUES ('586', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 15:30:27');
INSERT INTO `lar_actions_log` VALUES ('587', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 15:31:04');
INSERT INTO `lar_actions_log` VALUES ('588', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 15:31:52');
INSERT INTO `lar_actions_log` VALUES ('589', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 15:32:37');
INSERT INTO `lar_actions_log` VALUES ('590', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 15:33:22');
INSERT INTO `lar_actions_log` VALUES ('591', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 15:33:42');
INSERT INTO `lar_actions_log` VALUES ('592', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 15:34:01');
INSERT INTO `lar_actions_log` VALUES ('593', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 15:34:24');
INSERT INTO `lar_actions_log` VALUES ('594', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 15:34:43');
INSERT INTO `lar_actions_log` VALUES ('595', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 15:35:00');
INSERT INTO `lar_actions_log` VALUES ('596', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 15:35:44');
INSERT INTO `lar_actions_log` VALUES ('597', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 15:36:25');
INSERT INTO `lar_actions_log` VALUES ('598', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 15:38:29');
INSERT INTO `lar_actions_log` VALUES ('599', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 15:39:14');
INSERT INTO `lar_actions_log` VALUES ('600', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 15:39:59');
INSERT INTO `lar_actions_log` VALUES ('601', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 15:40:40');
INSERT INTO `lar_actions_log` VALUES ('602', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 15:43:16');
INSERT INTO `lar_actions_log` VALUES ('603', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 15:44:11');
INSERT INTO `lar_actions_log` VALUES ('604', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 15:45:52');
INSERT INTO `lar_actions_log` VALUES ('605', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 15:49:35');
INSERT INTO `lar_actions_log` VALUES ('606', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 15:50:19');
INSERT INTO `lar_actions_log` VALUES ('607', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 15:53:01');
INSERT INTO `lar_actions_log` VALUES ('608', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 15:54:19');
INSERT INTO `lar_actions_log` VALUES ('609', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 15:54:39');
INSERT INTO `lar_actions_log` VALUES ('610', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 15:55:30');
INSERT INTO `lar_actions_log` VALUES ('611', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 15:57:34');
INSERT INTO `lar_actions_log` VALUES ('612', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 15:58:30');
INSERT INTO `lar_actions_log` VALUES ('613', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 16:03:11');
INSERT INTO `lar_actions_log` VALUES ('614', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 16:04:02');
INSERT INTO `lar_actions_log` VALUES ('615', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 16:04:21');
INSERT INTO `lar_actions_log` VALUES ('616', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 16:07:21');
INSERT INTO `lar_actions_log` VALUES ('617', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 16:08:41');
INSERT INTO `lar_actions_log` VALUES ('618', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 16:09:14');
INSERT INTO `lar_actions_log` VALUES ('619', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 16:09:57');
INSERT INTO `lar_actions_log` VALUES ('620', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 16:12:47');
INSERT INTO `lar_actions_log` VALUES ('621', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 16:13:42');
INSERT INTO `lar_actions_log` VALUES ('622', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 16:14:18');
INSERT INTO `lar_actions_log` VALUES ('623', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 16:14:55');
INSERT INTO `lar_actions_log` VALUES ('624', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 16:15:49');
INSERT INTO `lar_actions_log` VALUES ('625', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 16:16:14');
INSERT INTO `lar_actions_log` VALUES ('626', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 16:16:36');
INSERT INTO `lar_actions_log` VALUES ('627', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 16:17:27');
INSERT INTO `lar_actions_log` VALUES ('628', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 16:33:22');
INSERT INTO `lar_actions_log` VALUES ('629', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 16:34:53');
INSERT INTO `lar_actions_log` VALUES ('630', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 16:40:54');
INSERT INTO `lar_actions_log` VALUES ('631', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 16:59:40');
INSERT INTO `lar_actions_log` VALUES ('632', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-26 17:02:23');
INSERT INTO `lar_actions_log` VALUES ('633', '2', '112.65.61.114', '7', '登录后台，登录IP:112.65.61.114', '2018-06-26 18:20:15');
INSERT INTO `lar_actions_log` VALUES ('634', '2', '112.65.61.61', '5', '删除【Visit-2018-06-25.log】日志文件', '2018-06-27 08:04:35');
INSERT INTO `lar_actions_log` VALUES ('635', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-27 10:10:00');
INSERT INTO `lar_actions_log` VALUES ('636', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-27 10:10:45');
INSERT INTO `lar_actions_log` VALUES ('637', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-27 10:23:28');
INSERT INTO `lar_actions_log` VALUES ('638', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-27 10:24:05');
INSERT INTO `lar_actions_log` VALUES ('639', '2', '58.247.46.18', '2', '管理员[远东]状态被修改为【禁止登录】 状态', '2018-06-27 10:45:56');
INSERT INTO `lar_actions_log` VALUES ('640', '2', '58.247.46.18', '5', '删除【Visit-2018-06-27.log】日志文件', '2018-06-27 10:47:35');
INSERT INTO `lar_actions_log` VALUES ('641', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-27 10:49:38');
INSERT INTO `lar_actions_log` VALUES ('642', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-27 10:53:42');
INSERT INTO `lar_actions_log` VALUES ('643', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-27 10:54:21');
INSERT INTO `lar_actions_log` VALUES ('644', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-27 10:54:45');
INSERT INTO `lar_actions_log` VALUES ('645', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-27 10:55:09');
INSERT INTO `lar_actions_log` VALUES ('646', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-27 10:57:04');
INSERT INTO `lar_actions_log` VALUES ('647', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-27 11:00:07');
INSERT INTO `lar_actions_log` VALUES ('648', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-27 11:00:14');
INSERT INTO `lar_actions_log` VALUES ('649', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-27 11:00:55');
INSERT INTO `lar_actions_log` VALUES ('650', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-27 11:02:23');
INSERT INTO `lar_actions_log` VALUES ('651', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-27 11:03:32');
INSERT INTO `lar_actions_log` VALUES ('652', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-27 11:07:31');
INSERT INTO `lar_actions_log` VALUES ('653', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-27 11:09:08');
INSERT INTO `lar_actions_log` VALUES ('654', '2', '58.247.46.18', '5', '删除【Visit-2018-06-27.log】日志文件', '2018-06-27 16:23:50');
INSERT INTO `lar_actions_log` VALUES ('655', '2', '58.247.46.18', '5', '删除【Visit-2018-06-27.log】日志文件', '2018-06-27 16:33:48');
INSERT INTO `lar_actions_log` VALUES ('656', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-27 16:39:06');
INSERT INTO `lar_actions_log` VALUES ('657', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-27 16:40:10');
INSERT INTO `lar_actions_log` VALUES ('658', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-27 16:42:55');
INSERT INTO `lar_actions_log` VALUES ('659', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-27 16:44:14');
INSERT INTO `lar_actions_log` VALUES ('660', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-27 16:44:43');
INSERT INTO `lar_actions_log` VALUES ('661', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-27 16:45:10');
INSERT INTO `lar_actions_log` VALUES ('662', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-27 16:45:41');
INSERT INTO `lar_actions_log` VALUES ('663', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-27 16:52:53');
INSERT INTO `lar_actions_log` VALUES ('664', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-27 16:53:30');
INSERT INTO `lar_actions_log` VALUES ('665', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-27 16:54:32');
INSERT INTO `lar_actions_log` VALUES ('666', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-27 16:54:56');
INSERT INTO `lar_actions_log` VALUES ('667', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-27 16:55:45');
INSERT INTO `lar_actions_log` VALUES ('668', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-27 16:56:01');
INSERT INTO `lar_actions_log` VALUES ('669', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-27 16:56:16');
INSERT INTO `lar_actions_log` VALUES ('670', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-27 16:56:59');
INSERT INTO `lar_actions_log` VALUES ('671', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-27 16:57:51');
INSERT INTO `lar_actions_log` VALUES ('672', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-27 16:59:15');
INSERT INTO `lar_actions_log` VALUES ('673', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-27 17:00:23');
INSERT INTO `lar_actions_log` VALUES ('674', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-27 17:01:33');
INSERT INTO `lar_actions_log` VALUES ('675', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-27 17:07:27');
INSERT INTO `lar_actions_log` VALUES ('676', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-27 17:08:18');
INSERT INTO `lar_actions_log` VALUES ('677', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-27 17:08:40');
INSERT INTO `lar_actions_log` VALUES ('678', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-27 17:57:27');
INSERT INTO `lar_actions_log` VALUES ('679', '2', '211.161.248.56', '7', '登录后台，登录IP:211.161.248.56', '2018-06-27 20:11:44');
INSERT INTO `lar_actions_log` VALUES ('680', '2', '127.0.0.1', '7', '登录后台，登录IP:127.0.0.1', '2018-06-27 20:13:41');
INSERT INTO `lar_actions_log` VALUES ('681', '2', '211.161.248.56', '7', '登录后台，登录IP:211.161.248.56', '2018-06-27 21:23:52');
INSERT INTO `lar_actions_log` VALUES ('682', '2', '211.161.248.56', '5', '删除【laravel-2018-06-27.log】日志文件', '2018-06-27 21:33:10');
INSERT INTO `lar_actions_log` VALUES ('683', '2', '211.161.248.56', '5', '删除【laravel-2018-06-27.log】日志文件', '2018-06-27 21:38:25');
INSERT INTO `lar_actions_log` VALUES ('684', '2', '58.247.46.18', '7', '登录后台，登录IP:58.247.46.18', '2018-06-28 09:25:01');
INSERT INTO `lar_actions_log` VALUES ('685', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-28 09:25:37');
INSERT INTO `lar_actions_log` VALUES ('686', '2', '58.247.46.18', '7', '登录后台，登录IP:58.247.46.18', '2018-06-28 09:45:54');
INSERT INTO `lar_actions_log` VALUES ('687', '2', '58.247.46.18', '7', '登录后台，登录IP:58.247.46.18', '2018-06-28 09:46:57');
INSERT INTO `lar_actions_log` VALUES ('688', '2', '58.247.46.114', '7', '登录后台，登录IP:58.247.46.114', '2018-06-28 10:35:19');
INSERT INTO `lar_actions_log` VALUES ('689', '2', '58.247.46.114', '5', '清除了视图缓存文件', '2018-06-28 10:41:41');
INSERT INTO `lar_actions_log` VALUES ('690', '2', '58.247.46.114', '5', '清除了视图缓存文件', '2018-06-28 10:41:59');
INSERT INTO `lar_actions_log` VALUES ('691', '2', '58.247.46.114', '5', '清除了视图缓存文件', '2018-06-28 10:43:23');
INSERT INTO `lar_actions_log` VALUES ('692', '2', '58.247.46.114', '5', '清除了视图缓存文件', '2018-06-28 10:45:13');
INSERT INTO `lar_actions_log` VALUES ('693', '2', '58.247.46.114', '5', '清除了视图缓存文件', '2018-06-28 10:46:23');
INSERT INTO `lar_actions_log` VALUES ('694', '2', '58.247.46.114', '5', '清除了视图缓存文件', '2018-06-28 11:02:27');
INSERT INTO `lar_actions_log` VALUES ('695', '2', '58.247.46.114', '5', '清除了视图缓存文件', '2018-06-28 11:07:16');
INSERT INTO `lar_actions_log` VALUES ('696', '2', '58.247.46.114', '5', '清除了视图缓存文件', '2018-06-28 11:09:57');
INSERT INTO `lar_actions_log` VALUES ('697', '2', '58.247.46.114', '5', '清除了视图缓存文件', '2018-06-28 11:12:37');
INSERT INTO `lar_actions_log` VALUES ('698', '2', '58.247.46.114', '5', '清除了视图缓存文件', '2018-06-28 11:14:41');
INSERT INTO `lar_actions_log` VALUES ('699', '2', '58.247.46.114', '5', '清除了视图缓存文件', '2018-06-28 11:16:28');
INSERT INTO `lar_actions_log` VALUES ('700', '2', '58.247.46.114', '5', '清除了视图缓存文件', '2018-06-28 11:17:26');
INSERT INTO `lar_actions_log` VALUES ('701', '2', '58.247.46.114', '5', '清除了视图缓存文件', '2018-06-28 11:24:01');
INSERT INTO `lar_actions_log` VALUES ('702', '2', '58.247.46.114', '5', '清除了视图缓存文件', '2018-06-28 11:27:29');
INSERT INTO `lar_actions_log` VALUES ('703', '2', '58.247.46.114', '5', '清除了视图缓存文件', '2018-06-28 11:29:10');
INSERT INTO `lar_actions_log` VALUES ('704', '2', '58.247.46.114', '5', '清除了视图缓存文件', '2018-06-28 11:41:27');
INSERT INTO `lar_actions_log` VALUES ('705', '2', '58.247.46.114', '5', '清除了视图缓存文件', '2018-06-28 11:47:34');
INSERT INTO `lar_actions_log` VALUES ('706', '2', '58.247.46.114', '5', '清除了视图缓存文件', '2018-06-28 11:49:41');
INSERT INTO `lar_actions_log` VALUES ('707', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-28 13:34:09');
INSERT INTO `lar_actions_log` VALUES ('708', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-28 13:41:07');
INSERT INTO `lar_actions_log` VALUES ('709', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-28 13:42:20');
INSERT INTO `lar_actions_log` VALUES ('710', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-28 13:42:38');
INSERT INTO `lar_actions_log` VALUES ('711', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-28 13:42:51');
INSERT INTO `lar_actions_log` VALUES ('712', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-28 13:44:15');
INSERT INTO `lar_actions_log` VALUES ('713', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-28 13:44:48');
INSERT INTO `lar_actions_log` VALUES ('714', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-28 13:45:25');
INSERT INTO `lar_actions_log` VALUES ('715', '2', '58.247.46.18', '1', '添加了新的管理人员【夏燕】信息', '2018-06-28 13:48:10');
INSERT INTO `lar_actions_log` VALUES ('716', '2', '58.247.46.18', '8', '退出后台', '2018-06-28 13:48:37');
INSERT INTO `lar_actions_log` VALUES ('717', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-28 13:49:57');
INSERT INTO `lar_actions_log` VALUES ('718', '5', '58.247.46.18', '7', '登录后台，登录IP:58.247.46.18', '2018-06-28 13:53:51');
INSERT INTO `lar_actions_log` VALUES ('719', '2', '58.247.46.18', '2', '管理员[小饶]状态被修改为【禁止登录】 状态', '2018-06-28 13:55:37');
INSERT INTO `lar_actions_log` VALUES ('720', '5', '58.247.46.18', '8', '退出后台', '2018-06-28 13:56:11');
INSERT INTO `lar_actions_log` VALUES ('721', '5', '58.247.46.18', '7', '登录后台，登录IP:58.247.46.18', '2018-06-28 13:56:29');
INSERT INTO `lar_actions_log` VALUES ('722', '5', '58.247.46.18', '8', '退出后台', '2018-06-28 13:56:41');
INSERT INTO `lar_actions_log` VALUES ('723', '2', '58.247.46.18', '2', '管理员[小饶]状态被修改为【禁止登录】 状态', '2018-06-28 13:56:48');
INSERT INTO `lar_actions_log` VALUES ('724', '2', '58.247.46.18', '2', '管理员[小饶]状态被修改为【启用】 状态', '2018-06-28 13:57:37');
INSERT INTO `lar_actions_log` VALUES ('725', '5', '58.247.46.18', '7', '登录后台，登录IP:58.247.46.18', '2018-06-28 13:57:56');
INSERT INTO `lar_actions_log` VALUES ('726', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-28 13:58:11');
INSERT INTO `lar_actions_log` VALUES ('727', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-28 13:59:21');
INSERT INTO `lar_actions_log` VALUES ('728', '2', '58.247.46.18', '7', '登录后台，登录IP:58.247.46.18', '2018-06-28 14:13:24');
INSERT INTO `lar_actions_log` VALUES ('729', '2', '58.247.46.18', '7', '登录后台，登录IP:58.247.46.18', '2018-06-28 14:15:33');
INSERT INTO `lar_actions_log` VALUES ('730', '2', '211.161.248.203', '7', '登录后台，登录IP:211.161.248.203', '2018-06-28 20:26:05');
INSERT INTO `lar_actions_log` VALUES ('731', '2', '58.247.46.18', '7', '登录后台，登录IP:58.247.46.18', '2018-06-29 11:20:31');
INSERT INTO `lar_actions_log` VALUES ('732', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-29 11:23:11');
INSERT INTO `lar_actions_log` VALUES ('733', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-29 11:23:29');
INSERT INTO `lar_actions_log` VALUES ('734', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-29 11:30:50');
INSERT INTO `lar_actions_log` VALUES ('735', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-29 11:31:12');
INSERT INTO `lar_actions_log` VALUES ('736', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-29 11:31:34');
INSERT INTO `lar_actions_log` VALUES ('737', '2', '58.247.46.18', '1', '新增了[任务管理]的菜单信息', '2018-06-29 13:16:51');
INSERT INTO `lar_actions_log` VALUES ('738', '2', '58.247.46.18', '1', '新增了[消息通知管理]的菜单信息', '2018-06-29 13:21:55');
INSERT INTO `lar_actions_log` VALUES ('739', '2', '58.247.46.18', '1', '更新了[ID:34]菜单信息', '2018-06-29 13:22:22');
INSERT INTO `lar_actions_log` VALUES ('740', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-29 13:28:52');
INSERT INTO `lar_actions_log` VALUES ('741', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-29 13:29:38');
INSERT INTO `lar_actions_log` VALUES ('742', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-29 13:30:25');
INSERT INTO `lar_actions_log` VALUES ('743', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-29 13:30:49');
INSERT INTO `lar_actions_log` VALUES ('744', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-29 13:30:57');
INSERT INTO `lar_actions_log` VALUES ('745', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-29 13:32:20');
INSERT INTO `lar_actions_log` VALUES ('746', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-29 13:36:46');
INSERT INTO `lar_actions_log` VALUES ('747', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-29 13:38:10');
INSERT INTO `lar_actions_log` VALUES ('748', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-29 13:38:59');
INSERT INTO `lar_actions_log` VALUES ('749', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-29 13:39:22');
INSERT INTO `lar_actions_log` VALUES ('750', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-29 13:40:53');
INSERT INTO `lar_actions_log` VALUES ('751', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-29 13:42:56');
INSERT INTO `lar_actions_log` VALUES ('752', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-29 13:45:01');
INSERT INTO `lar_actions_log` VALUES ('753', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-29 13:45:53');
INSERT INTO `lar_actions_log` VALUES ('754', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-29 13:47:23');
INSERT INTO `lar_actions_log` VALUES ('755', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-29 13:48:01');
INSERT INTO `lar_actions_log` VALUES ('756', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-29 13:49:02');
INSERT INTO `lar_actions_log` VALUES ('757', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-29 13:49:26');
INSERT INTO `lar_actions_log` VALUES ('758', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-29 13:49:43');
INSERT INTO `lar_actions_log` VALUES ('759', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-29 13:50:24');
INSERT INTO `lar_actions_log` VALUES ('760', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-29 13:51:30');
INSERT INTO `lar_actions_log` VALUES ('761', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-29 13:52:45');
INSERT INTO `lar_actions_log` VALUES ('762', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-29 13:53:14');
INSERT INTO `lar_actions_log` VALUES ('763', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-29 13:54:02');
INSERT INTO `lar_actions_log` VALUES ('764', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-29 14:09:11');
INSERT INTO `lar_actions_log` VALUES ('765', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-29 14:09:33');
INSERT INTO `lar_actions_log` VALUES ('766', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-29 14:10:35');
INSERT INTO `lar_actions_log` VALUES ('767', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-29 14:12:18');
INSERT INTO `lar_actions_log` VALUES ('768', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-29 14:12:28');
INSERT INTO `lar_actions_log` VALUES ('769', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-29 14:13:12');
INSERT INTO `lar_actions_log` VALUES ('770', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-29 14:24:23');
INSERT INTO `lar_actions_log` VALUES ('771', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-29 14:24:50');
INSERT INTO `lar_actions_log` VALUES ('772', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-29 14:26:10');
INSERT INTO `lar_actions_log` VALUES ('773', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-29 14:26:57');
INSERT INTO `lar_actions_log` VALUES ('774', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-29 14:27:11');
INSERT INTO `lar_actions_log` VALUES ('775', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-29 14:28:31');
INSERT INTO `lar_actions_log` VALUES ('776', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-29 14:29:16');
INSERT INTO `lar_actions_log` VALUES ('777', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-29 14:30:49');
INSERT INTO `lar_actions_log` VALUES ('778', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-29 14:39:16');
INSERT INTO `lar_actions_log` VALUES ('779', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-29 14:40:30');
INSERT INTO `lar_actions_log` VALUES ('780', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-29 14:41:49');
INSERT INTO `lar_actions_log` VALUES ('781', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-29 14:43:13');
INSERT INTO `lar_actions_log` VALUES ('782', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-29 14:45:47');
INSERT INTO `lar_actions_log` VALUES ('783', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-29 14:46:23');
INSERT INTO `lar_actions_log` VALUES ('784', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-29 14:46:54');
INSERT INTO `lar_actions_log` VALUES ('785', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-29 14:47:39');
INSERT INTO `lar_actions_log` VALUES ('786', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-29 14:48:18');
INSERT INTO `lar_actions_log` VALUES ('787', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-29 14:48:52');
INSERT INTO `lar_actions_log` VALUES ('788', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-29 14:51:04');
INSERT INTO `lar_actions_log` VALUES ('789', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-29 14:51:14');
INSERT INTO `lar_actions_log` VALUES ('790', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-29 14:51:53');
INSERT INTO `lar_actions_log` VALUES ('791', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-29 14:52:13');
INSERT INTO `lar_actions_log` VALUES ('792', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-29 14:52:24');
INSERT INTO `lar_actions_log` VALUES ('793', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-29 14:52:42');
INSERT INTO `lar_actions_log` VALUES ('794', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-29 14:54:37');
INSERT INTO `lar_actions_log` VALUES ('795', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-29 15:03:18');
INSERT INTO `lar_actions_log` VALUES ('796', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-29 15:03:53');
INSERT INTO `lar_actions_log` VALUES ('797', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-29 15:04:10');
INSERT INTO `lar_actions_log` VALUES ('798', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-29 15:04:45');
INSERT INTO `lar_actions_log` VALUES ('799', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-29 15:05:09');
INSERT INTO `lar_actions_log` VALUES ('800', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-29 15:06:44');
INSERT INTO `lar_actions_log` VALUES ('801', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-29 15:11:44');
INSERT INTO `lar_actions_log` VALUES ('802', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-29 15:12:42');
INSERT INTO `lar_actions_log` VALUES ('803', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-29 15:14:00');
INSERT INTO `lar_actions_log` VALUES ('804', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-29 15:19:01');
INSERT INTO `lar_actions_log` VALUES ('805', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-29 15:20:02');
INSERT INTO `lar_actions_log` VALUES ('806', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-29 15:20:23');
INSERT INTO `lar_actions_log` VALUES ('807', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-29 15:20:57');
INSERT INTO `lar_actions_log` VALUES ('808', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-29 15:21:05');
INSERT INTO `lar_actions_log` VALUES ('809', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-29 15:21:40');
INSERT INTO `lar_actions_log` VALUES ('810', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-29 15:22:20');
INSERT INTO `lar_actions_log` VALUES ('811', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-29 15:24:23');
INSERT INTO `lar_actions_log` VALUES ('812', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-29 15:26:23');
INSERT INTO `lar_actions_log` VALUES ('813', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-29 15:28:32');
INSERT INTO `lar_actions_log` VALUES ('814', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-29 15:30:09');
INSERT INTO `lar_actions_log` VALUES ('815', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-29 15:31:36');
INSERT INTO `lar_actions_log` VALUES ('816', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-29 15:32:20');
INSERT INTO `lar_actions_log` VALUES ('817', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-29 15:34:50');
INSERT INTO `lar_actions_log` VALUES ('818', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-29 15:39:02');
INSERT INTO `lar_actions_log` VALUES ('819', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-29 15:39:27');
INSERT INTO `lar_actions_log` VALUES ('820', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-29 15:40:18');
INSERT INTO `lar_actions_log` VALUES ('821', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-29 15:44:01');
INSERT INTO `lar_actions_log` VALUES ('822', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-29 15:52:06');
INSERT INTO `lar_actions_log` VALUES ('823', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-29 15:54:37');
INSERT INTO `lar_actions_log` VALUES ('824', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-29 15:56:17');
INSERT INTO `lar_actions_log` VALUES ('825', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-29 15:57:18');
INSERT INTO `lar_actions_log` VALUES ('826', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-29 15:58:40');
INSERT INTO `lar_actions_log` VALUES ('827', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-29 15:59:21');
INSERT INTO `lar_actions_log` VALUES ('828', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-29 16:01:35');
INSERT INTO `lar_actions_log` VALUES ('829', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-29 16:03:42');
INSERT INTO `lar_actions_log` VALUES ('830', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-29 16:04:24');
INSERT INTO `lar_actions_log` VALUES ('831', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-29 16:07:32');
INSERT INTO `lar_actions_log` VALUES ('832', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-29 16:08:41');
INSERT INTO `lar_actions_log` VALUES ('833', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-29 16:18:57');
INSERT INTO `lar_actions_log` VALUES ('834', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-29 16:19:01');
INSERT INTO `lar_actions_log` VALUES ('835', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-29 16:19:26');
INSERT INTO `lar_actions_log` VALUES ('836', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-29 16:20:57');
INSERT INTO `lar_actions_log` VALUES ('837', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-29 16:22:02');
INSERT INTO `lar_actions_log` VALUES ('838', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-29 16:22:37');
INSERT INTO `lar_actions_log` VALUES ('839', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-06-29 16:22:42');
INSERT INTO `lar_actions_log` VALUES ('840', '2', '211.161.245.29', '7', '登录后台，登录IP:211.161.245.29', '2018-06-29 20:44:55');
INSERT INTO `lar_actions_log` VALUES ('841', '2', '211.161.245.29', '7', '登录后台，登录IP:211.161.245.29', '2018-06-29 20:55:06');
INSERT INTO `lar_actions_log` VALUES ('842', '2', '211.161.245.29', '1', '更新了[ID:18]菜单信息', '2018-06-29 20:59:35');
INSERT INTO `lar_actions_log` VALUES ('843', '2', '211.161.245.29', '5', '清除了视图缓存文件', '2018-06-29 21:01:58');
INSERT INTO `lar_actions_log` VALUES ('844', '2', '211.161.245.29', '5', '清除了视图缓存文件', '2018-06-29 21:02:01');
INSERT INTO `lar_actions_log` VALUES ('845', '2', '211.161.245.29', '5', '清除了视图缓存文件', '2018-06-29 21:02:02');
INSERT INTO `lar_actions_log` VALUES ('846', '2', '127.0.0.1', '7', '登录后台，登录IP:127.0.0.1', '2018-06-30 09:30:53');
INSERT INTO `lar_actions_log` VALUES ('847', '2', '127.0.0.1', '1', '更新了[ID:34]菜单信息', '2018-06-30 09:37:42');
INSERT INTO `lar_actions_log` VALUES ('848', '2', '58.247.46.18', '7', '登录后台，登录IP:58.247.46.18', '2018-07-02 17:09:44');
INSERT INTO `lar_actions_log` VALUES ('849', '2', '58.247.46.18', '8', '退出后台', '2018-07-02 17:36:58');
INSERT INTO `lar_actions_log` VALUES ('850', '2', '58.247.46.18', '7', '登录后台，登录IP:58.247.46.18', '2018-07-03 11:06:58');
INSERT INTO `lar_actions_log` VALUES ('851', '2', '58.247.46.18', '7', '登录后台，登录IP:58.247.46.18', '2018-07-03 11:11:46');
INSERT INTO `lar_actions_log` VALUES ('852', '2', '58.247.46.18', '2', '管理员[小饶]状态被修改为【启用】 状态', '2018-07-03 11:41:29');
INSERT INTO `lar_actions_log` VALUES ('853', '2', '58.247.46.18', '1', '更新了[ID:34]菜单信息', '2018-07-03 14:33:58');
INSERT INTO `lar_actions_log` VALUES ('854', '2', '58.247.46.18', '1', '更新了[ID:34]菜单信息', '2018-07-03 14:43:40');
INSERT INTO `lar_actions_log` VALUES ('855', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-03 16:15:24');
INSERT INTO `lar_actions_log` VALUES ('856', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-03 16:21:04');
INSERT INTO `lar_actions_log` VALUES ('857', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-03 16:22:37');
INSERT INTO `lar_actions_log` VALUES ('858', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-03 16:24:04');
INSERT INTO `lar_actions_log` VALUES ('859', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-03 16:26:16');
INSERT INTO `lar_actions_log` VALUES ('860', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-03 16:27:49');
INSERT INTO `lar_actions_log` VALUES ('861', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-03 16:29:07');
INSERT INTO `lar_actions_log` VALUES ('862', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-03 16:30:01');
INSERT INTO `lar_actions_log` VALUES ('863', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-03 16:41:33');
INSERT INTO `lar_actions_log` VALUES ('864', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-03 16:41:57');
INSERT INTO `lar_actions_log` VALUES ('865', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-03 16:42:41');
INSERT INTO `lar_actions_log` VALUES ('866', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-03 16:42:56');
INSERT INTO `lar_actions_log` VALUES ('867', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-03 16:43:09');
INSERT INTO `lar_actions_log` VALUES ('868', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-03 16:45:13');
INSERT INTO `lar_actions_log` VALUES ('869', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-03 16:54:03');
INSERT INTO `lar_actions_log` VALUES ('870', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-03 16:54:32');
INSERT INTO `lar_actions_log` VALUES ('871', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-03 17:06:42');
INSERT INTO `lar_actions_log` VALUES ('872', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-03 17:12:11');
INSERT INTO `lar_actions_log` VALUES ('873', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-03 17:14:19');
INSERT INTO `lar_actions_log` VALUES ('874', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-03 17:17:52');
INSERT INTO `lar_actions_log` VALUES ('875', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-03 17:18:20');
INSERT INTO `lar_actions_log` VALUES ('876', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-03 17:18:36');
INSERT INTO `lar_actions_log` VALUES ('877', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-03 17:19:19');
INSERT INTO `lar_actions_log` VALUES ('878', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-03 17:23:16');
INSERT INTO `lar_actions_log` VALUES ('879', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-03 17:23:36');
INSERT INTO `lar_actions_log` VALUES ('880', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-03 17:24:35');
INSERT INTO `lar_actions_log` VALUES ('881', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-03 17:26:18');
INSERT INTO `lar_actions_log` VALUES ('882', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-03 17:26:54');
INSERT INTO `lar_actions_log` VALUES ('883', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-03 17:27:36');
INSERT INTO `lar_actions_log` VALUES ('884', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-03 17:27:49');
INSERT INTO `lar_actions_log` VALUES ('885', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-03 17:40:44');
INSERT INTO `lar_actions_log` VALUES ('886', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-03 17:41:24');
INSERT INTO `lar_actions_log` VALUES ('887', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-03 17:41:44');
INSERT INTO `lar_actions_log` VALUES ('888', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-04 10:00:25');
INSERT INTO `lar_actions_log` VALUES ('889', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-04 10:00:41');
INSERT INTO `lar_actions_log` VALUES ('890', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-04 10:00:47');
INSERT INTO `lar_actions_log` VALUES ('891', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-04 10:12:23');
INSERT INTO `lar_actions_log` VALUES ('892', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-04 10:16:44');
INSERT INTO `lar_actions_log` VALUES ('893', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-04 10:18:36');
INSERT INTO `lar_actions_log` VALUES ('894', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-04 10:20:08');
INSERT INTO `lar_actions_log` VALUES ('895', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-04 10:23:32');
INSERT INTO `lar_actions_log` VALUES ('896', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-04 10:24:09');
INSERT INTO `lar_actions_log` VALUES ('897', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-04 10:25:26');
INSERT INTO `lar_actions_log` VALUES ('898', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-04 10:26:19');
INSERT INTO `lar_actions_log` VALUES ('899', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-04 10:27:24');
INSERT INTO `lar_actions_log` VALUES ('900', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-04 10:28:36');
INSERT INTO `lar_actions_log` VALUES ('901', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-04 10:30:13');
INSERT INTO `lar_actions_log` VALUES ('902', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-04 10:33:15');
INSERT INTO `lar_actions_log` VALUES ('903', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-04 10:40:13');
INSERT INTO `lar_actions_log` VALUES ('904', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-04 10:40:59');
INSERT INTO `lar_actions_log` VALUES ('905', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-04 10:45:08');
INSERT INTO `lar_actions_log` VALUES ('906', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-04 10:47:33');
INSERT INTO `lar_actions_log` VALUES ('907', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-04 10:48:15');
INSERT INTO `lar_actions_log` VALUES ('908', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-04 10:49:17');
INSERT INTO `lar_actions_log` VALUES ('909', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-04 10:53:38');
INSERT INTO `lar_actions_log` VALUES ('910', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-04 10:54:19');
INSERT INTO `lar_actions_log` VALUES ('911', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-04 10:55:02');
INSERT INTO `lar_actions_log` VALUES ('912', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-04 10:56:08');
INSERT INTO `lar_actions_log` VALUES ('913', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-04 10:57:13');
INSERT INTO `lar_actions_log` VALUES ('914', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-04 10:58:10');
INSERT INTO `lar_actions_log` VALUES ('915', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-04 10:59:25');
INSERT INTO `lar_actions_log` VALUES ('916', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-04 11:00:46');
INSERT INTO `lar_actions_log` VALUES ('917', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-04 11:03:14');
INSERT INTO `lar_actions_log` VALUES ('918', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-04 11:08:16');
INSERT INTO `lar_actions_log` VALUES ('919', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-04 11:08:45');
INSERT INTO `lar_actions_log` VALUES ('920', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-04 11:09:50');
INSERT INTO `lar_actions_log` VALUES ('921', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-04 11:11:09');
INSERT INTO `lar_actions_log` VALUES ('922', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-04 11:15:38');
INSERT INTO `lar_actions_log` VALUES ('923', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-04 11:20:06');
INSERT INTO `lar_actions_log` VALUES ('924', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-04 11:20:45');
INSERT INTO `lar_actions_log` VALUES ('925', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-04 11:22:54');
INSERT INTO `lar_actions_log` VALUES ('926', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-04 11:23:35');
INSERT INTO `lar_actions_log` VALUES ('927', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-04 11:26:47');
INSERT INTO `lar_actions_log` VALUES ('928', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-04 11:27:15');
INSERT INTO `lar_actions_log` VALUES ('929', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-04 11:29:23');
INSERT INTO `lar_actions_log` VALUES ('930', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-04 11:44:56');
INSERT INTO `lar_actions_log` VALUES ('931', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-04 15:53:58');
INSERT INTO `lar_actions_log` VALUES ('932', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-04 16:08:26');
INSERT INTO `lar_actions_log` VALUES ('933', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-04 16:12:44');
INSERT INTO `lar_actions_log` VALUES ('934', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-04 16:15:04');
INSERT INTO `lar_actions_log` VALUES ('935', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-04 16:16:56');
INSERT INTO `lar_actions_log` VALUES ('936', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-04 16:17:50');
INSERT INTO `lar_actions_log` VALUES ('937', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-04 16:49:20');
INSERT INTO `lar_actions_log` VALUES ('938', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-04 16:54:04');
INSERT INTO `lar_actions_log` VALUES ('939', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-04 16:55:24');
INSERT INTO `lar_actions_log` VALUES ('940', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-04 17:01:09');
INSERT INTO `lar_actions_log` VALUES ('941', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-04 17:02:04');
INSERT INTO `lar_actions_log` VALUES ('942', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-04 17:03:05');
INSERT INTO `lar_actions_log` VALUES ('943', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-04 17:08:18');
INSERT INTO `lar_actions_log` VALUES ('944', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-04 17:08:55');
INSERT INTO `lar_actions_log` VALUES ('945', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-04 17:13:44');
INSERT INTO `lar_actions_log` VALUES ('946', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-04 17:14:18');
INSERT INTO `lar_actions_log` VALUES ('947', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-04 17:18:21');
INSERT INTO `lar_actions_log` VALUES ('948', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-04 17:20:34');
INSERT INTO `lar_actions_log` VALUES ('949', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-04 17:22:21');
INSERT INTO `lar_actions_log` VALUES ('950', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-04 17:23:03');
INSERT INTO `lar_actions_log` VALUES ('951', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-04 17:23:31');
INSERT INTO `lar_actions_log` VALUES ('952', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-04 17:24:07');
INSERT INTO `lar_actions_log` VALUES ('953', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-04 17:25:19');
INSERT INTO `lar_actions_log` VALUES ('954', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-04 17:36:39');
INSERT INTO `lar_actions_log` VALUES ('955', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-04 17:37:01');
INSERT INTO `lar_actions_log` VALUES ('956', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-04 17:37:41');
INSERT INTO `lar_actions_log` VALUES ('957', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-04 17:38:12');
INSERT INTO `lar_actions_log` VALUES ('958', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-04 17:47:12');
INSERT INTO `lar_actions_log` VALUES ('959', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-04 17:57:42');
INSERT INTO `lar_actions_log` VALUES ('960', '2', '58.247.46.18', '8', '退出后台', '2018-07-04 18:00:31');
INSERT INTO `lar_actions_log` VALUES ('961', '1', '112.64.68.56', '8', '退出后台', '2018-07-04 18:14:05');
INSERT INTO `lar_actions_log` VALUES ('962', '2', '58.247.46.18', '7', '登录后台，登录IP:58.247.46.18', '2018-07-05 10:13:25');
INSERT INTO `lar_actions_log` VALUES ('963', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-05 10:16:36');
INSERT INTO `lar_actions_log` VALUES ('964', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-05 10:17:10');
INSERT INTO `lar_actions_log` VALUES ('965', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-05 10:19:27');
INSERT INTO `lar_actions_log` VALUES ('966', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-05 10:36:52');
INSERT INTO `lar_actions_log` VALUES ('967', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-05 11:00:29');
INSERT INTO `lar_actions_log` VALUES ('968', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-05 11:16:27');
INSERT INTO `lar_actions_log` VALUES ('969', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-05 11:17:15');
INSERT INTO `lar_actions_log` VALUES ('970', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-05 11:17:38');
INSERT INTO `lar_actions_log` VALUES ('971', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-05 11:18:32');
INSERT INTO `lar_actions_log` VALUES ('972', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-05 11:23:41');
INSERT INTO `lar_actions_log` VALUES ('973', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-05 11:25:57');
INSERT INTO `lar_actions_log` VALUES ('974', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-05 11:29:54');
INSERT INTO `lar_actions_log` VALUES ('975', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-05 13:37:21');
INSERT INTO `lar_actions_log` VALUES ('976', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-05 14:31:37');
INSERT INTO `lar_actions_log` VALUES ('977', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-05 14:32:23');
INSERT INTO `lar_actions_log` VALUES ('978', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-05 14:32:36');
INSERT INTO `lar_actions_log` VALUES ('979', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-05 14:33:41');
INSERT INTO `lar_actions_log` VALUES ('980', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-05 14:34:04');
INSERT INTO `lar_actions_log` VALUES ('981', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-05 14:34:33');
INSERT INTO `lar_actions_log` VALUES ('982', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-05 14:41:11');
INSERT INTO `lar_actions_log` VALUES ('983', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-05 14:42:32');
INSERT INTO `lar_actions_log` VALUES ('984', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-05 14:51:52');
INSERT INTO `lar_actions_log` VALUES ('985', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-05 14:52:19');
INSERT INTO `lar_actions_log` VALUES ('986', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-05 14:52:37');
INSERT INTO `lar_actions_log` VALUES ('987', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-05 14:53:16');
INSERT INTO `lar_actions_log` VALUES ('988', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-05 14:54:05');
INSERT INTO `lar_actions_log` VALUES ('989', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-05 14:54:44');
INSERT INTO `lar_actions_log` VALUES ('990', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-05 14:56:03');
INSERT INTO `lar_actions_log` VALUES ('991', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-05 14:56:25');
INSERT INTO `lar_actions_log` VALUES ('992', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-05 14:57:30');
INSERT INTO `lar_actions_log` VALUES ('993', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-05 14:58:02');
INSERT INTO `lar_actions_log` VALUES ('994', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-05 14:58:27');
INSERT INTO `lar_actions_log` VALUES ('995', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-05 14:58:47');
INSERT INTO `lar_actions_log` VALUES ('996', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-05 14:59:50');
INSERT INTO `lar_actions_log` VALUES ('997', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-05 15:00:14');
INSERT INTO `lar_actions_log` VALUES ('998', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-05 15:00:53');
INSERT INTO `lar_actions_log` VALUES ('999', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-05 15:01:43');
INSERT INTO `lar_actions_log` VALUES ('1000', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-05 15:02:08');
INSERT INTO `lar_actions_log` VALUES ('1001', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-05 15:03:34');
INSERT INTO `lar_actions_log` VALUES ('1002', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-05 15:04:41');
INSERT INTO `lar_actions_log` VALUES ('1003', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-05 15:05:19');
INSERT INTO `lar_actions_log` VALUES ('1004', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-05 15:05:48');
INSERT INTO `lar_actions_log` VALUES ('1005', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-05 15:07:14');
INSERT INTO `lar_actions_log` VALUES ('1006', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-05 15:07:58');
INSERT INTO `lar_actions_log` VALUES ('1007', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-05 15:09:11');
INSERT INTO `lar_actions_log` VALUES ('1008', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-05 15:16:21');
INSERT INTO `lar_actions_log` VALUES ('1009', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-05 15:17:06');
INSERT INTO `lar_actions_log` VALUES ('1010', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-05 15:17:32');
INSERT INTO `lar_actions_log` VALUES ('1011', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-05 15:20:49');
INSERT INTO `lar_actions_log` VALUES ('1012', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-05 15:23:00');
INSERT INTO `lar_actions_log` VALUES ('1013', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-05 15:49:01');
INSERT INTO `lar_actions_log` VALUES ('1014', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-05 16:18:38');
INSERT INTO `lar_actions_log` VALUES ('1015', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-05 16:19:16');
INSERT INTO `lar_actions_log` VALUES ('1016', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-05 16:31:22');
INSERT INTO `lar_actions_log` VALUES ('1017', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-05 16:32:44');
INSERT INTO `lar_actions_log` VALUES ('1018', '2', '58.247.46.18', '8', '退出后台', '2018-07-05 17:42:25');
INSERT INTO `lar_actions_log` VALUES ('1019', '2', '58.247.46.18', '7', '登录后台，登录IP:58.247.46.18', '2018-07-05 17:44:46');
INSERT INTO `lar_actions_log` VALUES ('1020', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-05 17:44:58');
INSERT INTO `lar_actions_log` VALUES ('1021', '2', '58.247.46.18', '8', '退出后台', '2018-07-05 17:45:08');
INSERT INTO `lar_actions_log` VALUES ('1022', '2', '58.247.46.18', '7', '登录后台，登录IP:58.247.46.18', '2018-07-05 17:45:35');
INSERT INTO `lar_actions_log` VALUES ('1023', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-05 17:55:32');
INSERT INTO `lar_actions_log` VALUES ('1024', '2', '58.247.46.18', '2', '管理员[小饶]状态被修改为【禁止登录】 状态', '2018-07-05 17:57:42');
INSERT INTO `lar_actions_log` VALUES ('1025', '2', '58.247.46.18', '7', '登录后台，登录IP:58.247.46.18', '2018-07-12 17:55:40');
INSERT INTO `lar_actions_log` VALUES ('1026', '2', '115.174.230.22', '7', '登录后台，登录IP:115.174.230.22', '2018-07-12 19:35:21');
INSERT INTO `lar_actions_log` VALUES ('1027', '2', '127.0.0.1', '7', '登录后台，登录IP:127.0.0.1', '2018-07-12 19:45:03');
INSERT INTO `lar_actions_log` VALUES ('1028', '2', '58.247.46.18', '1', '新增了[]的权限信息', '2018-07-17 14:09:18');
INSERT INTO `lar_actions_log` VALUES ('1029', '2', '58.247.46.18', '1', '新增了[查看页面]的权限信息', '2018-07-17 14:10:53');
INSERT INTO `lar_actions_log` VALUES ('1030', '2', '58.247.46.18', '1', '新增了[查询]的权限信息', '2018-07-17 14:12:01');
INSERT INTO `lar_actions_log` VALUES ('1031', '2', '58.247.46.18', '1', '新增了[]的权限信息', '2018-07-17 14:12:45');
INSERT INTO `lar_actions_log` VALUES ('1032', '2', '58.247.46.18', '1', '新增了[查看页面]的权限信息', '2018-07-17 14:13:34');
INSERT INTO `lar_actions_log` VALUES ('1033', '2', '58.247.46.18', '1', '新增了[创建菜单]的权限信息', '2018-07-17 14:14:52');
INSERT INTO `lar_actions_log` VALUES ('1034', '2', '58.247.46.18', '1', '新增了[更新菜单]的权限信息', '2018-07-17 14:15:35');
INSERT INTO `lar_actions_log` VALUES ('1035', '2', '58.247.46.18', '1', '新增了[查询列表数据]的权限信息', '2018-07-17 14:16:07');
INSERT INTO `lar_actions_log` VALUES ('1036', '2', '58.247.46.18', '2', '更新了【超级管理员】角色的权限信息', '2018-07-17 14:18:40');
INSERT INTO `lar_actions_log` VALUES ('1037', '2', '58.247.46.18', '1', '新增了[]的权限信息', '2018-07-17 14:20:07');
INSERT INTO `lar_actions_log` VALUES ('1038', '2', '58.247.46.18', '1', '新增了[查看日志页面]的权限信息', '2018-07-17 14:24:08');
INSERT INTO `lar_actions_log` VALUES ('1039', '2', '58.247.46.18', '1', '新增了[查询]的权限信息', '2018-07-17 14:25:07');
INSERT INTO `lar_actions_log` VALUES ('1040', '2', '58.247.46.18', '1', '新增了[查看日志详情]的权限信息', '2018-07-17 14:26:21');
INSERT INTO `lar_actions_log` VALUES ('1041', '2', '58.247.46.18', '1', '新增了[删除]的权限信息', '2018-07-17 14:26:51');
INSERT INTO `lar_actions_log` VALUES ('1042', '2', '58.247.46.18', '1', '新增了[下载]的权限信息', '2018-07-17 14:27:13');
INSERT INTO `lar_actions_log` VALUES ('1043', '2', '58.247.46.18', '2', '更新了[查看页面]的权限信息', '2018-07-17 14:28:21');
INSERT INTO `lar_actions_log` VALUES ('1044', '2', '58.247.46.18', '2', '更新了[数据查询]的权限信息', '2018-07-17 14:28:35');
INSERT INTO `lar_actions_log` VALUES ('1045', '2', '58.247.46.18', '2', '更新了[查看详情]的权限信息', '2018-07-17 14:28:47');
INSERT INTO `lar_actions_log` VALUES ('1046', '2', '58.247.46.18', '2', '更新了[删除日志]的权限信息', '2018-07-17 14:29:02');
INSERT INTO `lar_actions_log` VALUES ('1047', '2', '58.247.46.18', '2', '更新了[下载日志]的权限信息', '2018-07-17 14:29:13');
INSERT INTO `lar_actions_log` VALUES ('1048', '2', '58.247.46.18', '1', '新增了[]的权限信息', '2018-07-17 14:30:31');
INSERT INTO `lar_actions_log` VALUES ('1049', '2', '58.247.46.18', '2', '更新了[后台菜单管理]的权限信息', '2018-07-17 14:30:41');
INSERT INTO `lar_actions_log` VALUES ('1050', '2', '58.247.46.18', '1', '新增了[查看页面]的权限信息', '2018-07-17 14:31:47');
INSERT INTO `lar_actions_log` VALUES ('1051', '2', '58.247.46.18', '1', '新增了[数据查询]的权限信息', '2018-07-17 14:32:27');
INSERT INTO `lar_actions_log` VALUES ('1052', '2', '58.247.46.18', '1', '新增了[添加菜单]的权限信息', '2018-07-17 14:33:04');
INSERT INTO `lar_actions_log` VALUES ('1053', '2', '58.247.46.18', '1', '新增了[编辑菜单]的权限信息', '2018-07-17 14:33:30');
INSERT INTO `lar_actions_log` VALUES ('1054', '2', '58.247.46.18', '1', '新增了[]的权限信息', '2018-07-17 14:37:14');
INSERT INTO `lar_actions_log` VALUES ('1055', '2', '58.247.46.18', '1', '新增了[查看页面]的权限信息', '2018-07-17 14:37:40');
INSERT INTO `lar_actions_log` VALUES ('1056', '2', '58.247.46.18', '1', '新增了[查询数据]的权限信息', '2018-07-17 14:38:35');
INSERT INTO `lar_actions_log` VALUES ('1057', '2', '58.247.46.18', '1', '新增了[查看管理员角色信息]的权限信息', '2018-07-17 14:40:42');
INSERT INTO `lar_actions_log` VALUES ('1058', '2', '58.247.46.18', '1', '新增了[更新管理员角色]的权限信息', '2018-07-17 14:41:21');
INSERT INTO `lar_actions_log` VALUES ('1059', '2', '58.247.46.18', '1', '新增了[添加管理员]的权限信息', '2018-07-17 14:41:48');
INSERT INTO `lar_actions_log` VALUES ('1060', '2', '58.247.46.18', '1', '新增了[更新管理员状态]的权限信息', '2018-07-17 14:42:25');
INSERT INTO `lar_actions_log` VALUES ('1061', '2', '58.247.46.18', '1', '更新了[ID:22]菜单信息', '2018-07-17 14:44:35');
INSERT INTO `lar_actions_log` VALUES ('1062', '2', '58.247.46.18', '1', '新增了[]的权限信息', '2018-07-17 14:45:11');
INSERT INTO `lar_actions_log` VALUES ('1063', '2', '58.247.46.18', '1', '新增了[查看页面]的权限信息', '2018-07-17 14:46:47');
INSERT INTO `lar_actions_log` VALUES ('1064', '2', '58.247.46.18', '1', '新增了[数据查询]的权限信息', '2018-07-17 14:47:14');
INSERT INTO `lar_actions_log` VALUES ('1065', '2', '58.247.46.18', '1', '新增了[]的权限信息', '2018-07-17 14:48:25');
INSERT INTO `lar_actions_log` VALUES ('1066', '2', '58.247.46.18', '1', '新增了[清除视图缓存]的权限信息', '2018-07-17 14:49:49');
INSERT INTO `lar_actions_log` VALUES ('1067', '2', '58.247.46.18', '2', '更新了【超级管理员】角色的权限信息', '2018-07-17 14:50:43');
INSERT INTO `lar_actions_log` VALUES ('1068', '2', '58.247.46.18', '2', '管理员[小小饶]状态被修改为【启用】 状态', '2018-07-17 14:51:31');
INSERT INTO `lar_actions_log` VALUES ('1069', '2', '58.247.46.18', '8', '退出后台', '2018-07-17 14:54:33');
INSERT INTO `lar_actions_log` VALUES ('1070', '5', '58.247.46.18', '7', '登录后台，登录IP:58.247.46.18', '2018-07-17 15:07:50');
INSERT INTO `lar_actions_log` VALUES ('1071', '2', '58.247.46.18', '7', '登录后台，登录IP:58.247.46.18', '2018-07-17 15:08:15');
INSERT INTO `lar_actions_log` VALUES ('1072', '2', '58.247.46.18', '2', '更新了【管理员】角色的权限信息', '2018-07-17 15:11:47');
INSERT INTO `lar_actions_log` VALUES ('1073', '2', '58.247.46.18', '2', '更新了【管理员】角色的权限信息', '2018-07-17 15:11:59');
INSERT INTO `lar_actions_log` VALUES ('1074', '2', '58.247.46.18', '2', '更新了【管理员】角色的权限信息', '2018-07-17 15:12:11');
INSERT INTO `lar_actions_log` VALUES ('1075', '2', '58.247.46.18', '2', '更新了【管理员】角色的权限信息', '2018-07-17 15:12:22');
INSERT INTO `lar_actions_log` VALUES ('1076', '2', '58.247.46.18', '1', '新增了[查看页面]的权限信息', '2018-07-17 15:13:50');
INSERT INTO `lar_actions_log` VALUES ('1077', '2', '58.247.46.18', '2', '更新了【管理员】角色的权限信息', '2018-07-17 15:15:38');
INSERT INTO `lar_actions_log` VALUES ('1078', '2', '58.247.46.18', '2', '更新了【管理员】角色的权限信息', '2018-07-17 15:15:54');
INSERT INTO `lar_actions_log` VALUES ('1079', '5', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-17 15:15:57');
INSERT INTO `lar_actions_log` VALUES ('1080', '2', '58.247.46.18', '2', '更新了【管理员】角色的权限信息', '2018-07-17 15:16:42');
INSERT INTO `lar_actions_log` VALUES ('1081', '2', '58.247.46.18', '2', '更新了【管理员】角色的权限信息', '2018-07-17 15:16:58');
INSERT INTO `lar_actions_log` VALUES ('1082', '2', '58.247.46.18', '2', '更新了【管理员】角色的权限信息', '2018-07-17 15:19:08');
INSERT INTO `lar_actions_log` VALUES ('1083', '2', '58.247.46.18', '2', '更新了【管理员】角色的权限信息', '2018-07-17 15:19:24');
INSERT INTO `lar_actions_log` VALUES ('1084', '2', '58.247.46.18', '2', '更新了【管理员】角色的权限信息', '2018-07-17 15:20:47');
INSERT INTO `lar_actions_log` VALUES ('1085', '2', '58.247.46.18', '2', '更新了【管理员】角色的权限信息', '2018-07-17 15:20:56');
INSERT INTO `lar_actions_log` VALUES ('1086', '2', '58.247.46.18', '2', '更新了【管理员】角色的权限信息', '2018-07-17 15:21:16');
INSERT INTO `lar_actions_log` VALUES ('1087', '2', '58.247.46.18', '2', '更新了【管理员】角色的权限信息', '2018-07-17 15:22:43');
INSERT INTO `lar_actions_log` VALUES ('1088', '2', '58.247.46.18', '2', '更新了【管理员】角色的权限信息', '2018-07-17 15:22:49');
INSERT INTO `lar_actions_log` VALUES ('1089', '2', '58.247.46.18', '2', '更新了【管理员】角色的权限信息', '2018-07-17 15:23:54');
INSERT INTO `lar_actions_log` VALUES ('1090', '5', '58.247.46.18', '1', '添加了新的角色【sdfa】信息', '2018-07-17 15:24:24');
INSERT INTO `lar_actions_log` VALUES ('1091', '2', '58.247.46.18', '2', '更新了【管理员】角色的权限信息', '2018-07-17 15:25:04');
INSERT INTO `lar_actions_log` VALUES ('1092', '2', '58.247.46.18', '1', '新增了[删除]的权限信息', '2018-07-17 15:27:11');
INSERT INTO `lar_actions_log` VALUES ('1093', '2', '58.247.46.18', '3', '删除了【sdfa】角色相关信息', '2018-07-17 15:28:23');
INSERT INTO `lar_actions_log` VALUES ('1094', '2', '58.247.46.18', '2', '更新了角色名【体验者】的信息', '2018-07-17 15:29:33');
INSERT INTO `lar_actions_log` VALUES ('1095', '2', '58.247.46.18', '2', '更新了【超级管理员】角色的权限信息', '2018-07-17 15:32:06');
INSERT INTO `lar_actions_log` VALUES ('1096', '2', '58.247.46.18', '2', '更新了【超级管理员】角色的权限信息', '2018-07-17 15:32:14');
INSERT INTO `lar_actions_log` VALUES ('1097', '2', '58.247.46.18', '2', '更新了【超级管理员】角色的权限信息', '2018-07-17 15:32:22');
INSERT INTO `lar_actions_log` VALUES ('1098', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-17 15:32:28');
INSERT INTO `lar_actions_log` VALUES ('1099', '2', '58.247.46.18', '2', '更新了【超级管理员】角色的权限信息', '2018-07-17 15:32:33');
INSERT INTO `lar_actions_log` VALUES ('1100', '2', '58.247.46.18', '2', '更新了【超级管理员】角色的权限信息', '2018-07-17 15:32:43');
INSERT INTO `lar_actions_log` VALUES ('1101', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-17 15:37:07');
INSERT INTO `lar_actions_log` VALUES ('1102', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-17 15:40:13');
INSERT INTO `lar_actions_log` VALUES ('1103', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-17 15:42:12');
INSERT INTO `lar_actions_log` VALUES ('1104', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-17 15:43:44');
INSERT INTO `lar_actions_log` VALUES ('1105', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-17 15:44:33');
INSERT INTO `lar_actions_log` VALUES ('1106', '2', '58.247.46.18', '2', '更新了[查看页面]的权限信息', '2018-07-17 16:00:37');
INSERT INTO `lar_actions_log` VALUES ('1107', '2', '58.247.46.18', '2', '更新了[更新角色权限]的权限信息', '2018-07-17 16:00:54');
INSERT INTO `lar_actions_log` VALUES ('1108', '2', '58.247.46.18', '2', '更新了[数据查询]的权限信息', '2018-07-17 16:01:08');
INSERT INTO `lar_actions_log` VALUES ('1109', '2', '58.247.46.18', '2', '更新了[查看角色权限]的权限信息', '2018-07-17 16:01:22');
INSERT INTO `lar_actions_log` VALUES ('1110', '2', '58.247.46.18', '2', '更新了[更新角色信息]的权限信息', '2018-07-17 16:01:47');
INSERT INTO `lar_actions_log` VALUES ('1111', '2', '58.247.46.18', '2', '更新了[更新角色权限]的权限信息', '2018-07-17 16:01:55');
INSERT INTO `lar_actions_log` VALUES ('1112', '2', '58.247.46.18', '2', '更新了[删除角色]的权限信息', '2018-07-17 16:02:08');
INSERT INTO `lar_actions_log` VALUES ('1113', '2', '58.247.46.18', '2', '更新了[数据查询]的权限信息', '2018-07-17 16:05:49');
INSERT INTO `lar_actions_log` VALUES ('1114', '2', '58.247.46.18', '2', '更新了[数据查询]的权限信息', '2018-07-17 16:06:09');
INSERT INTO `lar_actions_log` VALUES ('1115', '2', '58.247.46.18', '2', '更新了[数据查询]的权限信息', '2018-07-17 16:06:17');
INSERT INTO `lar_actions_log` VALUES ('1116', '2', '58.247.46.18', '2', '更新了角色名【体验者】的信息', '2018-07-17 16:13:45');
INSERT INTO `lar_actions_log` VALUES ('1117', '2', '58.247.46.18', '2', '更新了角色名【体验者】的信息', '2018-07-17 16:14:31');
INSERT INTO `lar_actions_log` VALUES ('1118', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-17 17:23:31');
INSERT INTO `lar_actions_log` VALUES ('1119', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-17 17:24:20');
INSERT INTO `lar_actions_log` VALUES ('1120', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-17 17:25:14');
INSERT INTO `lar_actions_log` VALUES ('1121', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-17 17:25:52');
INSERT INTO `lar_actions_log` VALUES ('1122', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-17 17:26:16');
INSERT INTO `lar_actions_log` VALUES ('1123', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-17 17:37:30');
INSERT INTO `lar_actions_log` VALUES ('1124', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-17 17:52:00');
INSERT INTO `lar_actions_log` VALUES ('1125', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-17 17:56:03');
INSERT INTO `lar_actions_log` VALUES ('1126', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-18 11:07:47');
INSERT INTO `lar_actions_log` VALUES ('1127', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-18 11:28:03');
INSERT INTO `lar_actions_log` VALUES ('1128', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-18 11:29:10');
INSERT INTO `lar_actions_log` VALUES ('1129', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-18 11:30:48');
INSERT INTO `lar_actions_log` VALUES ('1130', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-18 11:31:47');
INSERT INTO `lar_actions_log` VALUES ('1131', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-18 11:33:48');
INSERT INTO `lar_actions_log` VALUES ('1132', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-18 11:40:39');
INSERT INTO `lar_actions_log` VALUES ('1133', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-18 13:22:48');
INSERT INTO `lar_actions_log` VALUES ('1134', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-18 13:29:10');
INSERT INTO `lar_actions_log` VALUES ('1135', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-18 13:31:59');
INSERT INTO `lar_actions_log` VALUES ('1136', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-18 16:56:06');
INSERT INTO `lar_actions_log` VALUES ('1137', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-18 17:01:40');
INSERT INTO `lar_actions_log` VALUES ('1138', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-18 17:03:39');
INSERT INTO `lar_actions_log` VALUES ('1139', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-18 17:04:13');
INSERT INTO `lar_actions_log` VALUES ('1140', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-19 13:29:30');
INSERT INTO `lar_actions_log` VALUES ('1141', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-19 15:18:37');
INSERT INTO `lar_actions_log` VALUES ('1142', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-19 15:51:41');
INSERT INTO `lar_actions_log` VALUES ('1143', '5', '58.247.46.18', '8', '退出后台', '2018-07-20 11:23:11');
INSERT INTO `lar_actions_log` VALUES ('1144', '5', '58.247.46.18', '7', '登录后台，登录IP:58.247.46.18', '2018-07-20 11:23:53');
INSERT INTO `lar_actions_log` VALUES ('1145', '5', '58.247.46.18', '8', '退出后台', '2018-07-20 11:26:29');
INSERT INTO `lar_actions_log` VALUES ('1146', '5', '58.247.46.18', '7', '登录后台，登录IP:58.247.46.18', '2018-07-20 11:27:16');
INSERT INTO `lar_actions_log` VALUES ('1147', '5', '58.247.46.18', '8', '退出后台', '2018-07-20 11:28:22');
INSERT INTO `lar_actions_log` VALUES ('1148', '5', '58.247.46.18', '7', '登录后台，登录IP:58.247.46.18', '2018-07-20 11:28:43');
INSERT INTO `lar_actions_log` VALUES ('1149', '5', '58.247.46.18', '8', '退出后台', '2018-07-20 11:30:22');
INSERT INTO `lar_actions_log` VALUES ('1150', '5', '58.247.46.18', '7', '登录后台，登录IP:58.247.46.18', '2018-07-20 11:38:07');
INSERT INTO `lar_actions_log` VALUES ('1151', '5', '58.247.46.18', '8', '退出后台', '2018-07-20 11:38:43');
INSERT INTO `lar_actions_log` VALUES ('1152', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 11:45:35');
INSERT INTO `lar_actions_log` VALUES ('1153', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 11:47:56');
INSERT INTO `lar_actions_log` VALUES ('1154', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 14:03:02');
INSERT INTO `lar_actions_log` VALUES ('1155', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 14:04:17');
INSERT INTO `lar_actions_log` VALUES ('1156', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 14:47:50');
INSERT INTO `lar_actions_log` VALUES ('1157', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 14:48:36');
INSERT INTO `lar_actions_log` VALUES ('1158', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 14:49:17');
INSERT INTO `lar_actions_log` VALUES ('1159', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 14:49:25');
INSERT INTO `lar_actions_log` VALUES ('1160', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 14:54:58');
INSERT INTO `lar_actions_log` VALUES ('1161', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 14:59:34');
INSERT INTO `lar_actions_log` VALUES ('1162', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 15:00:20');
INSERT INTO `lar_actions_log` VALUES ('1163', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 15:00:52');
INSERT INTO `lar_actions_log` VALUES ('1164', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 15:04:42');
INSERT INTO `lar_actions_log` VALUES ('1165', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 15:15:44');
INSERT INTO `lar_actions_log` VALUES ('1166', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 15:16:15');
INSERT INTO `lar_actions_log` VALUES ('1167', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 15:16:34');
INSERT INTO `lar_actions_log` VALUES ('1168', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 15:17:28');
INSERT INTO `lar_actions_log` VALUES ('1169', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 15:19:45');
INSERT INTO `lar_actions_log` VALUES ('1170', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 15:20:18');
INSERT INTO `lar_actions_log` VALUES ('1171', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 15:20:36');
INSERT INTO `lar_actions_log` VALUES ('1172', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 15:21:09');
INSERT INTO `lar_actions_log` VALUES ('1173', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 15:21:31');
INSERT INTO `lar_actions_log` VALUES ('1174', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 15:21:50');
INSERT INTO `lar_actions_log` VALUES ('1175', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 15:25:43');
INSERT INTO `lar_actions_log` VALUES ('1176', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 15:27:00');
INSERT INTO `lar_actions_log` VALUES ('1177', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 15:28:37');
INSERT INTO `lar_actions_log` VALUES ('1178', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 15:29:30');
INSERT INTO `lar_actions_log` VALUES ('1179', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 15:31:19');
INSERT INTO `lar_actions_log` VALUES ('1180', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 15:32:02');
INSERT INTO `lar_actions_log` VALUES ('1181', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 15:32:25');
INSERT INTO `lar_actions_log` VALUES ('1182', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 15:34:09');
INSERT INTO `lar_actions_log` VALUES ('1183', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 15:35:58');
INSERT INTO `lar_actions_log` VALUES ('1184', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 15:37:00');
INSERT INTO `lar_actions_log` VALUES ('1185', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 15:37:19');
INSERT INTO `lar_actions_log` VALUES ('1186', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 15:37:37');
INSERT INTO `lar_actions_log` VALUES ('1187', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 15:54:37');
INSERT INTO `lar_actions_log` VALUES ('1188', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 15:58:34');
INSERT INTO `lar_actions_log` VALUES ('1189', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 15:59:20');
INSERT INTO `lar_actions_log` VALUES ('1190', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 16:00:47');
INSERT INTO `lar_actions_log` VALUES ('1191', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 16:08:07');
INSERT INTO `lar_actions_log` VALUES ('1192', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 16:09:09');
INSERT INTO `lar_actions_log` VALUES ('1193', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 16:09:47');
INSERT INTO `lar_actions_log` VALUES ('1194', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 16:12:01');
INSERT INTO `lar_actions_log` VALUES ('1195', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 16:12:37');
INSERT INTO `lar_actions_log` VALUES ('1196', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 16:12:59');
INSERT INTO `lar_actions_log` VALUES ('1197', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 16:13:28');
INSERT INTO `lar_actions_log` VALUES ('1198', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 16:13:48');
INSERT INTO `lar_actions_log` VALUES ('1199', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 16:19:57');
INSERT INTO `lar_actions_log` VALUES ('1200', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 16:21:23');
INSERT INTO `lar_actions_log` VALUES ('1201', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 16:21:51');
INSERT INTO `lar_actions_log` VALUES ('1202', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 16:22:16');
INSERT INTO `lar_actions_log` VALUES ('1203', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 16:23:25');
INSERT INTO `lar_actions_log` VALUES ('1204', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 16:23:48');
INSERT INTO `lar_actions_log` VALUES ('1205', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 16:24:02');
INSERT INTO `lar_actions_log` VALUES ('1206', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 16:24:32');
INSERT INTO `lar_actions_log` VALUES ('1207', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 16:25:54');
INSERT INTO `lar_actions_log` VALUES ('1208', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 16:26:12');
INSERT INTO `lar_actions_log` VALUES ('1209', '2', '58.247.46.18', '7', '登录后台，登录IP:58.247.46.18', '2018-07-20 16:27:19');
INSERT INTO `lar_actions_log` VALUES ('1210', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 16:28:04');
INSERT INTO `lar_actions_log` VALUES ('1211', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 16:28:28');
INSERT INTO `lar_actions_log` VALUES ('1212', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 16:30:15');
INSERT INTO `lar_actions_log` VALUES ('1213', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 16:31:17');
INSERT INTO `lar_actions_log` VALUES ('1214', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 16:33:24');
INSERT INTO `lar_actions_log` VALUES ('1215', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 16:34:10');
INSERT INTO `lar_actions_log` VALUES ('1216', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 16:34:28');
INSERT INTO `lar_actions_log` VALUES ('1217', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 16:34:49');
INSERT INTO `lar_actions_log` VALUES ('1218', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 16:35:47');
INSERT INTO `lar_actions_log` VALUES ('1219', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 16:36:14');
INSERT INTO `lar_actions_log` VALUES ('1220', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 16:37:09');
INSERT INTO `lar_actions_log` VALUES ('1221', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 16:37:38');
INSERT INTO `lar_actions_log` VALUES ('1222', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 16:38:58');
INSERT INTO `lar_actions_log` VALUES ('1223', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 16:40:25');
INSERT INTO `lar_actions_log` VALUES ('1224', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 16:41:27');
INSERT INTO `lar_actions_log` VALUES ('1225', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 16:42:41');
INSERT INTO `lar_actions_log` VALUES ('1226', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 16:43:24');
INSERT INTO `lar_actions_log` VALUES ('1227', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 16:43:57');
INSERT INTO `lar_actions_log` VALUES ('1228', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 16:44:25');
INSERT INTO `lar_actions_log` VALUES ('1229', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 16:45:39');
INSERT INTO `lar_actions_log` VALUES ('1230', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 16:45:58');
INSERT INTO `lar_actions_log` VALUES ('1231', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 16:46:15');
INSERT INTO `lar_actions_log` VALUES ('1232', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 16:46:23');
INSERT INTO `lar_actions_log` VALUES ('1233', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 16:47:39');
INSERT INTO `lar_actions_log` VALUES ('1234', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 16:48:01');
INSERT INTO `lar_actions_log` VALUES ('1235', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 16:48:27');
INSERT INTO `lar_actions_log` VALUES ('1236', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 16:49:13');
INSERT INTO `lar_actions_log` VALUES ('1237', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 16:50:43');
INSERT INTO `lar_actions_log` VALUES ('1238', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 16:52:30');
INSERT INTO `lar_actions_log` VALUES ('1239', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 16:53:59');
INSERT INTO `lar_actions_log` VALUES ('1240', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 16:54:43');
INSERT INTO `lar_actions_log` VALUES ('1241', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 16:55:50');
INSERT INTO `lar_actions_log` VALUES ('1242', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 16:56:09');
INSERT INTO `lar_actions_log` VALUES ('1243', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 16:56:48');
INSERT INTO `lar_actions_log` VALUES ('1244', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 16:57:19');
INSERT INTO `lar_actions_log` VALUES ('1245', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 16:57:53');
INSERT INTO `lar_actions_log` VALUES ('1246', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 16:58:30');
INSERT INTO `lar_actions_log` VALUES ('1247', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 16:59:01');
INSERT INTO `lar_actions_log` VALUES ('1248', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 16:59:30');
INSERT INTO `lar_actions_log` VALUES ('1249', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 17:00:20');
INSERT INTO `lar_actions_log` VALUES ('1250', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 17:00:53');
INSERT INTO `lar_actions_log` VALUES ('1251', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 17:04:37');
INSERT INTO `lar_actions_log` VALUES ('1252', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 17:05:23');
INSERT INTO `lar_actions_log` VALUES ('1253', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 17:07:44');
INSERT INTO `lar_actions_log` VALUES ('1254', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 17:18:31');
INSERT INTO `lar_actions_log` VALUES ('1255', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 17:19:34');
INSERT INTO `lar_actions_log` VALUES ('1256', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 17:20:02');
INSERT INTO `lar_actions_log` VALUES ('1257', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 17:35:30');
INSERT INTO `lar_actions_log` VALUES ('1258', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 17:37:04');
INSERT INTO `lar_actions_log` VALUES ('1259', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 17:39:32');
INSERT INTO `lar_actions_log` VALUES ('1260', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 17:41:40');
INSERT INTO `lar_actions_log` VALUES ('1261', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 17:53:05');
INSERT INTO `lar_actions_log` VALUES ('1262', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 17:55:07');
INSERT INTO `lar_actions_log` VALUES ('1263', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 17:55:32');
INSERT INTO `lar_actions_log` VALUES ('1264', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 17:55:52');
INSERT INTO `lar_actions_log` VALUES ('1265', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-20 17:57:07');
INSERT INTO `lar_actions_log` VALUES ('1266', '2', '211.161.245.97', '7', '登录后台，登录IP:211.161.245.97', '2018-07-21 09:59:26');
INSERT INTO `lar_actions_log` VALUES ('1267', '2', '211.161.245.97', '7', '登录后台，登录IP:211.161.245.97', '2018-07-21 13:03:07');
INSERT INTO `lar_actions_log` VALUES ('1268', '2', '58.247.46.18', '7', '登录后台，登录IP:58.247.46.18', '2018-07-23 10:39:47');
INSERT INTO `lar_actions_log` VALUES ('1269', '2', '58.247.46.18', '7', '登录后台，登录IP:58.247.46.18', '2018-07-23 14:08:27');
INSERT INTO `lar_actions_log` VALUES ('1270', '2', '58.247.46.18', '7', '登录后台，登录IP:58.247.46.18', '2018-07-24 10:40:17');
INSERT INTO `lar_actions_log` VALUES ('1271', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-24 10:40:29');
INSERT INTO `lar_actions_log` VALUES ('1272', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-24 10:41:36');
INSERT INTO `lar_actions_log` VALUES ('1273', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-24 10:43:18');
INSERT INTO `lar_actions_log` VALUES ('1274', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-24 10:43:51');
INSERT INTO `lar_actions_log` VALUES ('1275', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-24 10:45:14');
INSERT INTO `lar_actions_log` VALUES ('1276', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-24 10:46:40');
INSERT INTO `lar_actions_log` VALUES ('1277', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-24 10:53:05');
INSERT INTO `lar_actions_log` VALUES ('1278', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-24 10:53:44');
INSERT INTO `lar_actions_log` VALUES ('1279', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-24 10:55:14');
INSERT INTO `lar_actions_log` VALUES ('1280', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-24 10:57:03');
INSERT INTO `lar_actions_log` VALUES ('1281', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-24 10:58:23');
INSERT INTO `lar_actions_log` VALUES ('1282', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-24 11:06:44');
INSERT INTO `lar_actions_log` VALUES ('1283', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-24 11:08:07');
INSERT INTO `lar_actions_log` VALUES ('1284', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-24 11:12:32');
INSERT INTO `lar_actions_log` VALUES ('1285', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-24 11:13:08');
INSERT INTO `lar_actions_log` VALUES ('1286', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-24 11:17:49');
INSERT INTO `lar_actions_log` VALUES ('1287', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-24 11:18:41');
INSERT INTO `lar_actions_log` VALUES ('1288', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-24 11:19:15');
INSERT INTO `lar_actions_log` VALUES ('1289', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-24 11:19:54');
INSERT INTO `lar_actions_log` VALUES ('1290', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-24 11:20:02');
INSERT INTO `lar_actions_log` VALUES ('1291', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-24 11:20:33');
INSERT INTO `lar_actions_log` VALUES ('1292', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-24 11:21:30');
INSERT INTO `lar_actions_log` VALUES ('1293', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-24 11:26:40');
INSERT INTO `lar_actions_log` VALUES ('1294', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-24 11:27:06');
INSERT INTO `lar_actions_log` VALUES ('1295', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-24 11:28:19');
INSERT INTO `lar_actions_log` VALUES ('1296', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-24 11:28:49');
INSERT INTO `lar_actions_log` VALUES ('1297', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-24 11:29:29');
INSERT INTO `lar_actions_log` VALUES ('1298', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-24 11:31:25');
INSERT INTO `lar_actions_log` VALUES ('1299', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-24 11:31:49');
INSERT INTO `lar_actions_log` VALUES ('1300', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-24 11:32:18');
INSERT INTO `lar_actions_log` VALUES ('1301', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-24 11:32:49');
INSERT INTO `lar_actions_log` VALUES ('1302', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-24 11:33:27');
INSERT INTO `lar_actions_log` VALUES ('1303', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-24 11:34:26');
INSERT INTO `lar_actions_log` VALUES ('1304', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-24 11:35:13');
INSERT INTO `lar_actions_log` VALUES ('1305', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-24 13:36:49');
INSERT INTO `lar_actions_log` VALUES ('1306', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-24 13:37:56');
INSERT INTO `lar_actions_log` VALUES ('1307', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-24 13:38:46');
INSERT INTO `lar_actions_log` VALUES ('1308', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-24 13:39:45');
INSERT INTO `lar_actions_log` VALUES ('1309', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-24 13:40:13');
INSERT INTO `lar_actions_log` VALUES ('1310', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-24 13:41:22');
INSERT INTO `lar_actions_log` VALUES ('1311', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-24 13:42:55');
INSERT INTO `lar_actions_log` VALUES ('1312', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-24 13:44:34');
INSERT INTO `lar_actions_log` VALUES ('1313', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-24 13:45:24');
INSERT INTO `lar_actions_log` VALUES ('1314', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-24 13:45:47');
INSERT INTO `lar_actions_log` VALUES ('1315', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-24 13:45:55');
INSERT INTO `lar_actions_log` VALUES ('1316', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-24 13:46:56');
INSERT INTO `lar_actions_log` VALUES ('1317', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-24 13:47:10');
INSERT INTO `lar_actions_log` VALUES ('1318', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-24 13:47:45');
INSERT INTO `lar_actions_log` VALUES ('1319', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-24 13:49:19');
INSERT INTO `lar_actions_log` VALUES ('1320', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-24 13:49:48');
INSERT INTO `lar_actions_log` VALUES ('1321', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-24 13:50:22');
INSERT INTO `lar_actions_log` VALUES ('1322', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-24 13:50:40');
INSERT INTO `lar_actions_log` VALUES ('1323', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-24 13:52:13');
INSERT INTO `lar_actions_log` VALUES ('1324', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-24 14:05:28');
INSERT INTO `lar_actions_log` VALUES ('1325', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-24 14:06:54');
INSERT INTO `lar_actions_log` VALUES ('1326', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-24 14:08:06');
INSERT INTO `lar_actions_log` VALUES ('1327', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-24 14:17:41');
INSERT INTO `lar_actions_log` VALUES ('1328', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-24 14:18:48');
INSERT INTO `lar_actions_log` VALUES ('1329', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-24 14:22:23');
INSERT INTO `lar_actions_log` VALUES ('1330', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-24 14:25:21');
INSERT INTO `lar_actions_log` VALUES ('1331', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-24 14:28:27');
INSERT INTO `lar_actions_log` VALUES ('1332', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-24 14:30:05');
INSERT INTO `lar_actions_log` VALUES ('1333', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-24 14:30:26');
INSERT INTO `lar_actions_log` VALUES ('1334', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-24 14:31:28');
INSERT INTO `lar_actions_log` VALUES ('1335', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-24 14:31:57');
INSERT INTO `lar_actions_log` VALUES ('1336', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-24 14:32:21');
INSERT INTO `lar_actions_log` VALUES ('1337', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-24 14:32:59');
INSERT INTO `lar_actions_log` VALUES ('1338', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-24 14:33:39');
INSERT INTO `lar_actions_log` VALUES ('1339', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-24 14:34:26');
INSERT INTO `lar_actions_log` VALUES ('1340', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-24 14:34:46');
INSERT INTO `lar_actions_log` VALUES ('1341', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-24 14:34:59');
INSERT INTO `lar_actions_log` VALUES ('1342', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-24 14:35:23');
INSERT INTO `lar_actions_log` VALUES ('1343', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-24 14:35:53');
INSERT INTO `lar_actions_log` VALUES ('1344', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-24 14:39:28');
INSERT INTO `lar_actions_log` VALUES ('1345', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-24 14:49:12');
INSERT INTO `lar_actions_log` VALUES ('1346', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-24 14:49:28');
INSERT INTO `lar_actions_log` VALUES ('1347', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-24 14:52:20');
INSERT INTO `lar_actions_log` VALUES ('1348', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-24 14:52:40');
INSERT INTO `lar_actions_log` VALUES ('1349', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-24 15:05:41');
INSERT INTO `lar_actions_log` VALUES ('1350', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-24 16:44:58');
INSERT INTO `lar_actions_log` VALUES ('1351', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-24 16:47:41');
INSERT INTO `lar_actions_log` VALUES ('1352', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-24 16:52:56');
INSERT INTO `lar_actions_log` VALUES ('1353', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-24 16:53:15');
INSERT INTO `lar_actions_log` VALUES ('1354', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-24 16:53:51');
INSERT INTO `lar_actions_log` VALUES ('1355', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-24 16:54:14');
INSERT INTO `lar_actions_log` VALUES ('1356', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-24 16:54:18');
INSERT INTO `lar_actions_log` VALUES ('1357', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-24 16:55:30');
INSERT INTO `lar_actions_log` VALUES ('1358', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-24 16:55:34');
INSERT INTO `lar_actions_log` VALUES ('1359', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-24 16:58:05');
INSERT INTO `lar_actions_log` VALUES ('1360', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-24 17:13:31');
INSERT INTO `lar_actions_log` VALUES ('1361', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-24 17:29:10');
INSERT INTO `lar_actions_log` VALUES ('1362', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-24 17:31:05');
INSERT INTO `lar_actions_log` VALUES ('1363', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-24 17:31:22');
INSERT INTO `lar_actions_log` VALUES ('1364', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-24 17:31:38');
INSERT INTO `lar_actions_log` VALUES ('1365', '2', '58.247.46.18', '5', '清除了视图缓存文件', '2018-07-24 17:32:18');

-- ----------------------------
-- Table structure for `lar_admin_roles`
-- ----------------------------
DROP TABLE IF EXISTS `lar_admin_roles`;
CREATE TABLE `lar_admin_roles` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `admin_id` int(11) NOT NULL DEFAULT '0' COMMENT '用户id',
  `role_id` int(11) NOT NULL DEFAULT '0' COMMENT '角色ID',
  `created_at` datetime DEFAULT NULL COMMENT '插入时间',
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_user_id` (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COMMENT='用户角色表';

-- ----------------------------
-- Records of lar_admin_roles
-- ----------------------------
INSERT INTO `lar_admin_roles` VALUES ('1', '1', '9', '2018-06-22 16:35:21', '2018-06-22 16:35:21');
INSERT INTO `lar_admin_roles` VALUES ('2', '2', '8', '2018-06-27 10:46:59', '2018-06-27 10:46:59');
INSERT INTO `lar_admin_roles` VALUES ('3', '3', '9', '2018-06-21 09:21:43', '2018-06-21 09:21:43');
INSERT INTO `lar_admin_roles` VALUES ('4', '4', '9', '2018-07-05 17:58:20', '2018-07-05 17:58:20');
INSERT INTO `lar_admin_roles` VALUES ('5', '5', '9', '2018-07-05 17:58:09', '2018-07-05 17:58:09');

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
  `password_reset_token` varchar(255) DEFAULT '' COMMENT '找回密码token',
  `sex` tinyint(3) DEFAULT '0' COMMENT '性别',
  `telephone` varchar(20) DEFAULT '' COMMENT '联系电话',
  `profile_pic` varchar(300) DEFAULT '' COMMENT '管理员头像',
  `status` tinyint(3) DEFAULT '10' COMMENT '管理员状态（0:已禁用，10:已启用）',
  `expiry_time` datetime DEFAULT NULL COMMENT '密码过期时间',
  `created_at` datetime DEFAULT NULL COMMENT '添加时间',
  `updated_at` datetime DEFAULT NULL COMMENT '修改时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of lar_admins
-- ----------------------------
INSERT INTO `lar_admins` VALUES ('1', '系统用户', '18798276809@163.com', '$2y$10$Rkgqi9MSDZB4aZ0y8wUCLOEiGq1V4Zb0cd0.fUQXqvP6Pe1Gb1qL6', 'ieazBuMyMwX2TlFCcRvwAj2IS0Vf0QLErX1wRKYvQTZMctOPnMgzL8s16v4F', null, '1', '', null, '10', '2018-06-25 21:22:50', '2018-05-20 07:00:22', '2018-07-17 14:51:31');
INSERT INTO `lar_admins` VALUES ('2', '小小饶', '837215079@qq.com', '$2y$10$OH1fQmK1LEj1tL9YlGJfKuRwvXZL0ZsekILcvLs7vHHlJfst.ExKe', 'L9i5AqNxcR6qD2rM2FnWYCC20Qw394xnWFtJI993if6C5GFXc1FswuDqMk2V', '0qKGIGSFXxcz/hCnxNzrItQq5HXjFoPn', '1', '18798276809', 'upload/head-portrait/ikX43LGf5b51742fe3596133335.png', '10', '2018-07-26 12:16:59', '2018-06-21 10:18:52', '2018-07-20 16:42:15');
INSERT INTO `lar_admins` VALUES ('3', '小饶', '1276816843@qq.com', '$2y$10$iGO9EJlNSdmxO6WCJUQBBuE6oGs5ufbOubqpf3ApCygT8PlvORyK2', '', '', '2', '', null, '0', '2018-06-25 21:22:52', '2018-06-21 06:18:41', '2018-06-27 10:45:56');
INSERT INTO `lar_admins` VALUES ('4', '金燕', '15885446370@qq.com', '$2y$10$vIHXKUw/eqfd4Aa4ejRRsONxs5OhSSenSOA4djLKxMkJ0v2KMxHOi', '', '0qKGIGSFXxcFXkNum05OvhWkdqDlBPx5', '2', '', null, '0', '2018-06-25 21:22:54', '2018-06-21 06:21:04', '2018-07-04 18:01:32');
INSERT INTO `lar_admins` VALUES ('5', '夏燕', '1427905139@qq.com', '$2y$10$5SqNNMdhEny4N51/5Zutfe/BnrOK0pTrN2K3Ccj4Xf6bpLaTrEuIK', '5NiDE9a6B8m6JCrzzrO5K1uXhwJ6t6LNKLqAOjH22DQKugI2CZJfIPe1Cead', '', '2', '15885446370', '', '10', '2018-08-16 15:07:01', '2018-06-28 13:48:10', '2018-07-17 15:30:58');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='后台数据库队列任务表';

-- ----------------------------
-- Records of lar_jobs
-- ----------------------------
INSERT INTO `lar_jobs` VALUES ('17', 'default', '{\"displayName\":\"App\\\\Events\\\\TestBroadcastingEvent\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"timeout\":null,\"data\":{\"commandName\":\"Illuminate\\\\Broadcasting\\\\BroadcastEvent\",\"command\":\"O:38:\\\"Illuminate\\\\Broadcasting\\\\BroadcastEvent\\\":4:{s:5:\\\"event\\\";O:32:\\\"App\\\\Events\\\\TestBroadcastingEvent\\\":2:{s:6:\\\"notice\\\";s:4:\\\"asdf\\\";s:6:\\\"socket\\\";N;}s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:5:\\\"delay\\\";N;}\"}}', '0', null, '1527913372', '1527913372');

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
  `sort` tinyint(3) DEFAULT '0',
  `created_at` datetime DEFAULT NULL COMMENT '创建时间',
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '修改时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8 COMMENT='菜单管理';

-- ----------------------------
-- Records of lar_menus
-- ----------------------------
INSERT INTO `lar_menus` VALUES ('1', '0', '系统管理', '', '0', 'fa fa-desktop', '1', '1', '2018-04-12 19:49:20', '2018-06-14 16:43:29');
INSERT INTO `lar_menus` VALUES ('3', '1', '菜单管理', '/backend/menus/menuview', '1', '', '1', '1', '2018-04-12 19:51:37', '2018-06-14 16:22:52');
INSERT INTO `lar_menus` VALUES ('4', '1', '角色管理', '/backend/roles/roleview', '1', '', '1', '2', '2018-04-12 19:52:14', '2018-06-14 16:25:13');
INSERT INTO `lar_menus` VALUES ('5', '1', '权限管理', '/backend/permissions/permissionsview', '1', '', '1', '3', '2018-04-12 19:52:49', '2018-06-14 16:25:15');
INSERT INTO `lar_menus` VALUES ('11', '0', '微信管理', '', '0', 'fa fa-comments', '1', '3', '2018-06-12 13:30:36', '2018-06-14 08:44:27');
INSERT INTO `lar_menus` VALUES ('18', '0', '表格模板', '', '0', 'fa fa-credit-card', '2', '5', '2018-05-24 19:51:44', '2018-06-29 20:59:35');
INSERT INTO `lar_menus` VALUES ('19', '18', 'EasyUi Table', '/backend/test/easyuitable', '1', '', '1', '0', '2018-06-12 13:30:40', '2018-06-12 13:33:16');
INSERT INTO `lar_menus` VALUES ('20', '18', 'DataTables', '/backend/test/datatables', '1', '', '1', '0', '2018-06-12 13:30:42', '2018-06-12 13:33:17');
INSERT INTO `lar_menus` VALUES ('21', '18', 'jqGrid Table', '/backend/test/jqgridtables', '1', '', '1', '0', '2018-06-12 13:30:43', '2018-06-12 13:33:19');
INSERT INTO `lar_menus` VALUES ('22', '1', '操作日志', '/backend/system/record', '1', '', '1', '4', '2018-05-27 17:15:01', '2018-07-17 14:44:34');
INSERT INTO `lar_menus` VALUES ('23', '0', '文件缓存管理', '', '0', 'fa fa-folder-open', '1', '4', '2018-06-08 15:01:51', '2018-06-14 16:43:33');
INSERT INTO `lar_menus` VALUES ('24', '23', '日志文件', '/backend/filemanage/index', '1', '', '1', '0', '2018-06-12 13:30:47', '2018-06-12 13:33:23');
INSERT INTO `lar_menus` VALUES ('25', '1', '系统设置', '/backend/system/index', '1', '', '1', '6', '2018-06-12 13:30:45', '2018-06-14 08:58:13');
INSERT INTO `lar_menus` VALUES ('26', '18', '测试文件夹', '', '0', null, '1', '5', '2018-06-14 08:59:58', '2018-06-23 21:41:15');
INSERT INTO `lar_menus` VALUES ('27', '26', '册册册', '', '0', null, '1', '0', '2018-06-14 09:01:02', '2018-06-14 09:01:02');
INSERT INTO `lar_menus` VALUES ('28', '27', '发生的', '', '0', null, '1', '0', '2018-06-14 09:03:23', '2018-06-14 09:03:23');
INSERT INTO `lar_menus` VALUES ('31', '1', '管理员管理', '/backend/admin/index', '1', null, '1', '1', '2018-06-20 08:44:56', '2018-06-20 08:46:04');
INSERT INTO `lar_menus` VALUES ('32', '11', '公众号授权Token管理', '/backend/wechat/wexitokenview', '1', null, '1', '0', '2018-06-22 11:43:59', '2018-06-22 11:56:41');
INSERT INTO `lar_menus` VALUES ('33', '11', '公众号菜单管理', '/backend/wechat/wechatmenu', '1', null, '1', '2', '2018-06-22 13:36:54', '2018-06-23 21:39:53');
INSERT INTO `lar_menus` VALUES ('34', '35', '任务管理', '/backend/admin/task', '1', null, '1', '0', '2018-06-29 13:16:51', '2018-07-03 14:43:40');
INSERT INTO `lar_menus` VALUES ('35', '0', '消息通知管理', '', '0', 'ace-icon fa fa-bell', '1', '0', '2018-06-29 13:21:55', '2018-06-29 13:21:55');

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

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
  `pid` int(11) DEFAULT '0' COMMENT '父类ID',
  `type` tinyint(3) NOT NULL DEFAULT '0' COMMENT '权限类型 ( 0: 权限模块，1:权限)',
  `title` varchar(50) NOT NULL DEFAULT '' COMMENT '权限名称',
  `url` varchar(200) NOT NULL DEFAULT '' COMMENT 'json 数组',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '状态 1：有效 0：无效',
  `created_at` datetime DEFAULT NULL COMMENT '插入时间',
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '最后一次更新时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=utf8 COMMENT='权限详情表';

-- ----------------------------
-- Records of lar_permissions
-- ----------------------------
INSERT INTO `lar_permissions` VALUES ('6', '0', '0', '权限管理模块', '', '1', '2018-05-26 06:45:23', '2018-05-27 02:38:29');
INSERT INTO `lar_permissions` VALUES ('8', '6', '1', '添加后台权限', '/backend/permissions/addpermissions', '1', '2018-05-26 07:03:41', '2018-05-26 07:13:35');
INSERT INTO `lar_permissions` VALUES ('9', '6', '1', '更新后台权限', '/backend/permissions/updatepermissions', '1', '2018-05-26 07:10:18', '2018-05-26 07:26:52');
INSERT INTO `lar_permissions` VALUES ('10', '6', '1', '删除后台权限', '/backend/permissions/deletepermissions', '1', '2018-05-26 07:27:38', '2018-05-26 07:27:38');
INSERT INTO `lar_permissions` VALUES ('11', '6', '1', '获取后台权限列表信息', '/backend/permissions/getpermissionslist', '1', '2018-05-26 07:29:22', '2018-05-26 07:29:22');
INSERT INTO `lar_permissions` VALUES ('12', '6', '1', '查看后台权限列表页面', '/backend/permissions/permissionsview', '1', '2018-05-26 07:30:14', '2018-05-26 07:30:14');
INSERT INTO `lar_permissions` VALUES ('13', '0', '0', '角色管理模块', '', '1', '2018-05-26 07:33:00', '2018-05-26 07:33:00');
INSERT INTO `lar_permissions` VALUES ('14', '13', '1', '查看页面', '/backend/roles/roleview', '1', '2018-05-26 07:33:51', '2018-07-17 16:00:37');
INSERT INTO `lar_permissions` VALUES ('15', '13', '1', '添加角色权限', '/backend/roles/addrole', '1', '2018-05-26 07:34:35', '2018-05-26 07:34:35');
INSERT INTO `lar_permissions` VALUES ('17', '13', '1', '更新角色信息', '/backend/roles/updaterole', '1', '2018-05-26 07:36:02', '2018-07-17 16:01:47');
INSERT INTO `lar_permissions` VALUES ('18', '13', '1', '数据查询', '/backend/roles/getroleslist', '1', '2018-05-26 07:37:14', '2018-07-17 16:01:08');
INSERT INTO `lar_permissions` VALUES ('19', '13', '1', '查看角色权限', '/backend/roles/rolepermissionsview', '1', '2018-05-26 07:40:50', '2018-07-17 16:01:22');
INSERT INTO `lar_permissions` VALUES ('20', '13', '1', '更新角色权限', '/backend/roles/updaterolepermissions', '1', '2018-05-26 07:42:05', '2018-07-17 16:01:55');
INSERT INTO `lar_permissions` VALUES ('21', '0', '0', '公众号授权Token管理', '', '1', '2018-07-17 14:09:18', '2018-07-17 14:09:18');
INSERT INTO `lar_permissions` VALUES ('22', '21', '1', '查看页面', '/backend/wechat/wexitokenview', '1', '2018-07-17 14:10:53', '2018-07-17 14:10:53');
INSERT INTO `lar_permissions` VALUES ('23', '21', '1', '数据查询', '/backend/wechat/wexitokendata', '1', '2018-07-17 14:12:01', '2018-07-17 16:05:49');
INSERT INTO `lar_permissions` VALUES ('24', '0', '0', '公众号菜单管理', '', '1', '2018-07-17 14:12:45', '2018-07-17 14:12:45');
INSERT INTO `lar_permissions` VALUES ('25', '24', '1', '查看页面', '/backend/wechat/wechatmenu', '1', '2018-07-17 14:13:33', '2018-07-17 14:13:33');
INSERT INTO `lar_permissions` VALUES ('26', '24', '1', '创建菜单', '/backend/wechat/createmenu', '1', '2018-07-17 14:14:52', '2018-07-17 14:14:52');
INSERT INTO `lar_permissions` VALUES ('27', '24', '1', '更新菜单', '/backend/wechat/updatemenu', '1', '2018-07-17 14:15:35', '2018-07-17 14:15:35');
INSERT INTO `lar_permissions` VALUES ('28', '24', '1', '数据查询', '/backend/wechat/wechatmenudata', '1', '2018-07-17 14:16:06', '2018-07-17 16:06:17');
INSERT INTO `lar_permissions` VALUES ('29', '0', '0', '日志文件管理', '', '1', '2018-07-17 14:20:07', '2018-07-17 14:20:07');
INSERT INTO `lar_permissions` VALUES ('30', '29', '1', '查看页面', '/backend/filemanage/index', '1', '2018-07-17 14:24:07', '2018-07-17 14:28:21');
INSERT INTO `lar_permissions` VALUES ('31', '29', '1', '数据查询', '/backend/filemanage/getlogfilelist', '1', '2018-07-17 14:25:06', '2018-07-17 14:28:35');
INSERT INTO `lar_permissions` VALUES ('32', '29', '1', '查看详情', '/backend/filemanage/readlogfile', '1', '2018-07-17 14:26:21', '2018-07-17 14:28:46');
INSERT INTO `lar_permissions` VALUES ('33', '29', '1', '删除日志', '/backend/filemanage/deletelogfile', '1', '2018-07-17 14:26:50', '2018-07-17 14:29:01');
INSERT INTO `lar_permissions` VALUES ('34', '29', '1', '下载日志', '/backend/filemanage/downloadlogfile', '1', '2018-07-17 14:27:13', '2018-07-17 14:29:12');
INSERT INTO `lar_permissions` VALUES ('35', '0', '0', '菜单管理', '', '1', '2018-07-17 14:30:31', '2018-07-17 14:30:41');
INSERT INTO `lar_permissions` VALUES ('36', '35', '1', '查看页面', '/backend/menus/menuview', '1', '2018-07-17 14:31:47', '2018-07-17 14:31:47');
INSERT INTO `lar_permissions` VALUES ('37', '35', '1', '数据查询', '/backend/menus/getmenulist', '1', '2018-07-17 14:32:27', '2018-07-17 14:32:27');
INSERT INTO `lar_permissions` VALUES ('38', '35', '1', '添加菜单', '/backend/menus/addmenu', '1', '2018-07-17 14:33:04', '2018-07-17 14:33:04');
INSERT INTO `lar_permissions` VALUES ('39', '35', '1', '编辑菜单', '/backend/menus/updatemenu', '1', '2018-07-17 14:33:30', '2018-07-17 14:33:30');
INSERT INTO `lar_permissions` VALUES ('40', '0', '0', '管理员管理', '', '1', '2018-07-17 14:37:14', '2018-07-17 14:37:14');
INSERT INTO `lar_permissions` VALUES ('41', '40', '1', '查看页面', '/backend/admin/index', '1', '2018-07-17 14:37:40', '2018-07-17 14:37:40');
INSERT INTO `lar_permissions` VALUES ('42', '40', '1', '数据查询', '/backend/admin/getadminListdata', '1', '2018-07-17 14:38:34', '2018-07-17 16:06:09');
INSERT INTO `lar_permissions` VALUES ('43', '40', '1', '查看管理员角色信息', '/backend/admin/adminpermissionsview', '1', '2018-07-17 14:40:42', '2018-07-17 14:40:42');
INSERT INTO `lar_permissions` VALUES ('44', '40', '1', '更新管理员角色', '/backend/admin/updateadminrole', '1', '2018-07-17 14:41:21', '2018-07-17 14:41:21');
INSERT INTO `lar_permissions` VALUES ('45', '40', '1', '添加管理员', '/backend/admin/createadmin', '1', '2018-07-17 14:41:48', '2018-07-17 14:41:48');
INSERT INTO `lar_permissions` VALUES ('46', '40', '1', '更新管理员状态', '/backend/admin/updateadminstatus', '1', '2018-07-17 14:42:25', '2018-07-17 14:42:25');
INSERT INTO `lar_permissions` VALUES ('47', '0', '0', '操作日志', '', '1', '2018-07-17 14:45:11', '2018-07-17 14:45:11');
INSERT INTO `lar_permissions` VALUES ('48', '47', '1', '查看页面', '/backend/system/record', '1', '2018-07-17 14:46:47', '2018-07-17 14:46:47');
INSERT INTO `lar_permissions` VALUES ('49', '47', '1', '数据查询', '/backend/system/getrecordlist', '1', '2018-07-17 14:47:14', '2018-07-17 14:47:14');
INSERT INTO `lar_permissions` VALUES ('50', '0', '0', '系统设置', '', '1', '2018-07-17 14:48:25', '2018-07-17 14:48:25');
INSERT INTO `lar_permissions` VALUES ('51', '50', '1', '清除视图缓存', '/backend/system/clearviewcache', '1', '2018-07-17 14:49:49', '2018-07-17 14:49:49');
INSERT INTO `lar_permissions` VALUES ('52', '50', '1', '查看页面', '/backend/system/index', '1', '2018-07-17 15:13:50', '2018-07-17 15:13:50');
INSERT INTO `lar_permissions` VALUES ('53', '13', '1', '删除角色', '/backend/roles/deleterole', '1', '2018-07-17 15:27:10', '2018-07-17 16:02:08');

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
) ENGINE=InnoDB AUTO_INCREMENT=113 DEFAULT CHARSET=utf8 COMMENT='角色权限表';

-- ----------------------------
-- Records of lar_role_permissions
-- ----------------------------
INSERT INTO `lar_role_permissions` VALUES ('11', '8', '11', '2018-05-26 10:07:41');
INSERT INTO `lar_role_permissions` VALUES ('12', '8', '12', '2018-05-26 10:07:41');
INSERT INTO `lar_role_permissions` VALUES ('13', '8', '20', '2018-05-26 10:20:19');
INSERT INTO `lar_role_permissions` VALUES ('18', '8', '18', '2018-05-26 10:20:37');
INSERT INTO `lar_role_permissions` VALUES ('19', '8', '19', '2018-05-26 10:20:37');
INSERT INTO `lar_role_permissions` VALUES ('20', '8', '8', '2018-05-26 10:22:41');
INSERT INTO `lar_role_permissions` VALUES ('22', '8', '17', '2018-05-26 10:33:15');
INSERT INTO `lar_role_permissions` VALUES ('25', '8', '14', '2018-05-26 11:19:58');
INSERT INTO `lar_role_permissions` VALUES ('39', '8', '15', '2018-05-27 09:08:22');
INSERT INTO `lar_role_permissions` VALUES ('41', '8', '9', '2018-06-02 03:09:44');
INSERT INTO `lar_role_permissions` VALUES ('42', '8', '10', '2018-06-02 03:09:44');
INSERT INTO `lar_role_permissions` VALUES ('43', '10', '8', '2018-06-08 13:40:59');
INSERT INTO `lar_role_permissions` VALUES ('44', '10', '9', '2018-06-08 13:40:59');
INSERT INTO `lar_role_permissions` VALUES ('45', '10', '10', '2018-06-08 13:40:59');
INSERT INTO `lar_role_permissions` VALUES ('46', '10', '11', '2018-06-08 13:40:59');
INSERT INTO `lar_role_permissions` VALUES ('47', '10', '12', '2018-06-08 13:40:59');
INSERT INTO `lar_role_permissions` VALUES ('48', '10', '14', '2018-06-08 13:40:59');
INSERT INTO `lar_role_permissions` VALUES ('49', '10', '15', '2018-06-08 13:40:59');
INSERT INTO `lar_role_permissions` VALUES ('51', '10', '17', '2018-06-08 13:40:59');
INSERT INTO `lar_role_permissions` VALUES ('52', '10', '18', '2018-06-08 13:40:59');
INSERT INTO `lar_role_permissions` VALUES ('53', '10', '19', '2018-06-08 13:40:59');
INSERT INTO `lar_role_permissions` VALUES ('54', '10', '20', '2018-06-08 13:40:59');
INSERT INTO `lar_role_permissions` VALUES ('55', '8', '22', '2018-07-17 14:18:39');
INSERT INTO `lar_role_permissions` VALUES ('56', '8', '23', '2018-07-17 14:18:39');
INSERT INTO `lar_role_permissions` VALUES ('57', '8', '25', '2018-07-17 14:18:39');
INSERT INTO `lar_role_permissions` VALUES ('58', '8', '26', '2018-07-17 14:18:39');
INSERT INTO `lar_role_permissions` VALUES ('59', '8', '27', '2018-07-17 14:18:39');
INSERT INTO `lar_role_permissions` VALUES ('60', '8', '28', '2018-07-17 14:18:39');
INSERT INTO `lar_role_permissions` VALUES ('61', '8', '30', '2018-07-17 14:50:43');
INSERT INTO `lar_role_permissions` VALUES ('62', '8', '31', '2018-07-17 14:50:43');
INSERT INTO `lar_role_permissions` VALUES ('63', '8', '32', '2018-07-17 14:50:43');
INSERT INTO `lar_role_permissions` VALUES ('64', '8', '33', '2018-07-17 14:50:43');
INSERT INTO `lar_role_permissions` VALUES ('65', '8', '34', '2018-07-17 14:50:43');
INSERT INTO `lar_role_permissions` VALUES ('66', '8', '36', '2018-07-17 14:50:43');
INSERT INTO `lar_role_permissions` VALUES ('67', '8', '37', '2018-07-17 14:50:43');
INSERT INTO `lar_role_permissions` VALUES ('68', '8', '38', '2018-07-17 14:50:43');
INSERT INTO `lar_role_permissions` VALUES ('69', '8', '39', '2018-07-17 14:50:43');
INSERT INTO `lar_role_permissions` VALUES ('70', '8', '41', '2018-07-17 14:50:43');
INSERT INTO `lar_role_permissions` VALUES ('71', '8', '42', '2018-07-17 14:50:43');
INSERT INTO `lar_role_permissions` VALUES ('72', '8', '43', '2018-07-17 14:50:43');
INSERT INTO `lar_role_permissions` VALUES ('73', '8', '44', '2018-07-17 14:50:43');
INSERT INTO `lar_role_permissions` VALUES ('74', '8', '45', '2018-07-17 14:50:43');
INSERT INTO `lar_role_permissions` VALUES ('75', '8', '46', '2018-07-17 14:50:43');
INSERT INTO `lar_role_permissions` VALUES ('76', '8', '48', '2018-07-17 14:50:43');
INSERT INTO `lar_role_permissions` VALUES ('77', '8', '49', '2018-07-17 14:50:43');
INSERT INTO `lar_role_permissions` VALUES ('81', '9', '48', '2018-07-17 15:12:11');
INSERT INTO `lar_role_permissions` VALUES ('82', '9', '49', '2018-07-17 15:12:22');
INSERT INTO `lar_role_permissions` VALUES ('83', '9', '52', '2018-07-17 15:15:38');
INSERT INTO `lar_role_permissions` VALUES ('85', '9', '41', '2018-07-17 15:16:41');
INSERT INTO `lar_role_permissions` VALUES ('87', '9', '42', '2018-07-17 15:19:23');
INSERT INTO `lar_role_permissions` VALUES ('88', '9', '43', '2018-07-17 15:20:46');
INSERT INTO `lar_role_permissions` VALUES ('92', '9', '14', '2018-07-17 15:20:55');
INSERT INTO `lar_role_permissions` VALUES ('93', '9', '18', '2018-07-17 15:21:16');
INSERT INTO `lar_role_permissions` VALUES ('99', '9', '22', '2018-07-17 15:22:42');
INSERT INTO `lar_role_permissions` VALUES ('100', '9', '23', '2018-07-17 15:22:42');
INSERT INTO `lar_role_permissions` VALUES ('101', '9', '25', '2018-07-17 15:22:42');
INSERT INTO `lar_role_permissions` VALUES ('102', '9', '28', '2018-07-17 15:22:42');
INSERT INTO `lar_role_permissions` VALUES ('103', '9', '30', '2018-07-17 15:22:42');
INSERT INTO `lar_role_permissions` VALUES ('104', '9', '31', '2018-07-17 15:22:42');
INSERT INTO `lar_role_permissions` VALUES ('105', '9', '36', '2018-07-17 15:22:42');
INSERT INTO `lar_role_permissions` VALUES ('106', '9', '37', '2018-07-17 15:22:42');
INSERT INTO `lar_role_permissions` VALUES ('107', '9', '32', '2018-07-17 15:23:53');
INSERT INTO `lar_role_permissions` VALUES ('108', '9', '33', '2018-07-17 15:23:53');
INSERT INTO `lar_role_permissions` VALUES ('109', '9', '34', '2018-07-17 15:23:53');
INSERT INTO `lar_role_permissions` VALUES ('111', '8', '52', '2018-07-17 15:32:22');
INSERT INTO `lar_role_permissions` VALUES ('112', '8', '51', '2018-07-17 15:32:42');

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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COMMENT='角色表';

-- ----------------------------
-- Records of lar_roles
-- ----------------------------
INSERT INTO `lar_roles` VALUES ('8', '超级管理员', '1', '2018-04-29 14:47:11', '2018-06-01 15:18:53');
INSERT INTO `lar_roles` VALUES ('9', '体验者', '1', '2018-04-29 17:35:31', '2018-07-17 16:14:31');
INSERT INTO `lar_roles` VALUES ('10', '阿斯顿发', '1', '2018-06-08 06:00:25', '2018-06-08 06:00:25');

-- ----------------------------
-- Table structure for `lar_task`
-- ----------------------------
DROP TABLE IF EXISTS `lar_task`;
CREATE TABLE `lar_task` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `admin_id` int(11) DEFAULT '0' COMMENT '任务添加人员',
  `delegate_id` int(11) DEFAULT '0' COMMENT '任务处理人员',
  `title` varchar(255) DEFAULT '' COMMENT '任务标题',
  `content` varchar(255) DEFAULT '' COMMENT '任务详情',
  `start_time` datetime DEFAULT NULL COMMENT '任务开始时间',
  `end_time` datetime DEFAULT NULL COMMENT '任务结束时间',
  `type` tinyint(3) DEFAULT '1' COMMENT '任务类型(1:我的任务，2:委派他人)',
  `status` tinyint(3) DEFAULT '1' COMMENT '任务进度(1:等待处理,2:处理中，3:延期处理，4:已完成，5:已丢弃)',
  `created_at` datetime DEFAULT NULL COMMENT '任务创建时间',
  `updated_at` datetime DEFAULT NULL COMMENT '任务修改时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of lar_task
-- ----------------------------
INSERT INTO `lar_task` VALUES ('1', '2', '2', '测试标题', '--------------', '2018-07-03 16:09:14', '2018-07-05 16:09:14', '1', '3', '2018-07-03 16:09:14', '2018-07-20 17:42:07');
INSERT INTO `lar_task` VALUES ('3', '2', '2', '发生的发生', '阿萨德发', '2018-07-19 00:00:00', '2018-08-01 00:00:00', '1', '5', '2018-07-04 16:13:04', '2018-07-04 16:13:04');
INSERT INTO `lar_task` VALUES ('4', '2', '2', 'ssssssssssssss', 'asdfa sdfasdf\n asdf\nas\ndf\n\nsd f\nas\nd f\nas\nd f\na\nsdf\n af', '2018-07-04 17:03:13', '2018-07-07 17:03:13', '1', '3', '2018-07-04 17:03:20', '2018-07-20 17:58:34');
INSERT INTO `lar_task` VALUES ('5', '2', '2', '153按时打算多', '阿萨德按数量\n发拉十多年\n是但\n按时电脑\n是的饭看', '2018-07-04 17:47:17', '2018-07-05 17:47:17', '1', '3', '2018-07-04 17:47:31', '2018-07-04 17:47:31');
INSERT INTO `lar_task` VALUES ('6', '2', '4', '阿斯顿发', '阿萨德', '2018-07-04 17:59:52', '2018-07-05 17:59:52', '2', '2', '2018-07-04 18:00:03', '2018-07-04 18:00:03');

-- ----------------------------
-- Table structure for `lar_users`
-- ----------------------------
DROP TABLE IF EXISTS `lar_users`;
CREATE TABLE `lar_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `mobile` varchar(11) COLLATE utf8_unicode_ci DEFAULT '',
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of lar_users
-- ----------------------------
INSERT INTO `lar_users` VALUES ('7', '$2y$10$Bf73X3D4CiP6BiDn6OF1T.XJHdFC/UCydJuLMk42YtALEi5L1BNki', '83awlUrEHrtpzHAYTEgWJKLT4t4edQRs4owhJXnaskpZVaDDv8CE1aSdYTHP', '2018-07-23 09:53:01', '2018-07-23 09:53:01', '15885446370', '837215079@qq.com');

-- ----------------------------
-- Table structure for `lar_users_chat_group`
-- ----------------------------
DROP TABLE IF EXISTS `lar_users_chat_group`;
CREATE TABLE `lar_users_chat_group` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT '聊天群ID',
  `groupname` varchar(100) DEFAULT '' COMMENT '聊天群名称',
  `groupurl` varchar(255) DEFAULT '' COMMENT '聊天群头像url',
  `introduce` varchar(255) DEFAULT '0' COMMENT '聊天群简介',
  `create_time` datetime NOT NULL COMMENT '聊天群创建时间',
  `users_id` int(10) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COMMENT='聊天群数据表';

-- ----------------------------
-- Records of lar_users_chat_group
-- ----------------------------
INSERT INTO `lar_users_chat_group` VALUES ('10', '小兄弟', '', '', '2018-07-16 14:26:46', '2');

-- ----------------------------
-- Table structure for `lar_users_chat_group_detail`
-- ----------------------------
DROP TABLE IF EXISTS `lar_users_chat_group_detail`;
CREATE TABLE `lar_users_chat_group_detail` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT '主键ID',
  `chat_group_id` bigint(20) NOT NULL COMMENT '聊天群ID',
  `users_id` bigint(20) NOT NULL COMMENT '用户ID',
  `create_time` datetime NOT NULL COMMENT '加入聊天群时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COMMENT='聊天群与用户关系数据表';

-- ----------------------------
-- Records of lar_users_chat_group_detail
-- ----------------------------
INSERT INTO `lar_users_chat_group_detail` VALUES ('3', '10', '2', '2018-07-16 14:26:47');

-- ----------------------------
-- Table structure for `lar_users_friends`
-- ----------------------------
DROP TABLE IF EXISTS `lar_users_friends`;
CREATE TABLE `lar_users_friends` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT '数据库主键',
  `users_id` bigint(20) NOT NULL COMMENT '用户ID',
  `friend_id` bigint(20) NOT NULL COMMENT '好友ID',
  `create_time` datetime NOT NULL COMMENT '添加好友时间',
  `group_id` bigint(20) DEFAULT '0' COMMENT '分组ID',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='用户好友数据表';

-- ----------------------------
-- Records of lar_users_friends
-- ----------------------------
INSERT INTO `lar_users_friends` VALUES ('2', '2', '3', '2018-07-13 13:40:37', '1');

-- ----------------------------
-- Table structure for `lar_users_group`
-- ----------------------------
DROP TABLE IF EXISTS `lar_users_group`;
CREATE TABLE `lar_users_group` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT '用户分组ID',
  `groupname` varchar(100) DEFAULT '' COMMENT '组名',
  `sort` int(8) DEFAULT '0' COMMENT '分组排序',
  `users_id` bigint(20) NOT NULL COMMENT '用户ID',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='用户分组信息';

-- ----------------------------
-- Records of lar_users_group
-- ----------------------------
INSERT INTO `lar_users_group` VALUES ('1', '大家一起嗨嗨嗨', '1', '2');

-- ----------------------------
-- Table structure for `lar_wx_menu`
-- ----------------------------
DROP TABLE IF EXISTS `lar_wx_menu`;
CREATE TABLE `lar_wx_menu` (
  `id` int(4) unsigned NOT NULL AUTO_INCREMENT,
  `admin_id` int(11) DEFAULT '0' COMMENT '操作管理员',
  `status` tinyint(3) DEFAULT '1' COMMENT '发布状态（1:立即发布，2:保存草稿）',
  `appid` varchar(255) DEFAULT '',
  `menu_json` text COMMENT '微信菜单的json数据',
  `created_at` datetime DEFAULT NULL COMMENT '微信菜单的添加时间',
  `updated_at` datetime DEFAULT NULL COMMENT '微信菜单更新及发布时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8 COMMENT='微信公众号菜单发布日志表';

-- ----------------------------
-- Records of lar_wx_menu
-- ----------------------------
INSERT INTO `lar_wx_menu` VALUES ('40', '2', '1', 'wxc8ea0012a334a359', '{\"button\":[{\"type\":\"click\",\"name\":\"\\u8d35\\u5dde2\",\"key\":\"V1001_TODAY_MUSIC\",\"sub_button\":[]},{\"name\":\"\\u6211\\u7684\\u540e\\u53f0\",\"sub_button\":[{\"type\":\"view\",\"name\":\"\\u540e\\u53f0\",\"url\":\"http:\\/\\/repair.sh-jinger.com\\/backend\",\"sub_button\":[]},{\"type\":\"view\",\"name\":\"\\u524d\\u53f0\",\"url\":\"http:\\/\\/repair.sh-jinger.com\\/front\",\"sub_button\":[]}]}]}', '2018-06-24 11:00:24', '2018-06-24 11:00:24');
INSERT INTO `lar_wx_menu` VALUES ('41', '2', '1', 'wxc8ea0012a334a359', '{\"button\":[{\"type\":\"click\",\"name\":\"\\u8d35\\u5dde\",\"key\":\"V1001_TODAY_MUSIC\",\"sub_button\":[]},{\"name\":\"\\u6211\\u7684\\u540e\\u53f0\",\"sub_button\":[{\"type\":\"view\",\"name\":\"\\u540e\\u53f0\",\"url\":\"http:\\/\\/repair.sh-jinger.com\\/backend\",\"sub_button\":[]},{\"type\":\"view\",\"name\":\"\\u524d\\u53f0\",\"url\":\"http:\\/\\/repair.sh-jinger.com\\/front\",\"sub_button\":[]}]}]}', '2018-06-24 19:51:19', '2018-06-24 19:51:19');
INSERT INTO `lar_wx_menu` VALUES ('42', '2', '1', 'wxc8ea0012a334a359', 'null', '2018-06-25 09:49:32', '2018-06-25 09:49:32');
INSERT INTO `lar_wx_menu` VALUES ('43', '2', '1', 'wxc8ea0012a334a359', '{\"button\":[{\"name\":\"\\u6211\\u7684\\u5bb6\\u4e61\",\"sub_button\":[{\"type\":\"view\",\"name\":\"\\u8d35\\u5dde\",\"url\":\"https:\\/\\/repair.sh-jinger.com\\/backend\",\"sub_button\":[]}]},{\"name\":\"\\u6211\\u7684\\u5bb6\\u4e612\",\"sub_button\":[{\"type\":\"view\",\"name\":\"\\u8d35\\u5dde\",\"url\":\"https:\\/\\/repair.sh-jinger.com\\/backend\",\"sub_button\":[]}]}]}', '2018-06-25 09:50:34', '2018-06-25 09:50:34');
INSERT INTO `lar_wx_menu` VALUES ('44', '2', '1', 'wxc8ea0012a334a359', '{\"button\":[{\"name\":\"\\u6211\\u7684\\u5bb6\\u4e61\",\"sub_button\":[{\"type\":\"view\",\"name\":\"\\u8d35\\u5dde\",\"url\":\"https:\\/\\/repair.sh-jinger.com\\/backend\",\"sub_button\":[]}]},{\"name\":\"\\u6211\\u7684\\u9879\\u76ee\",\"sub_button\":[{\"type\":\"view\",\"name\":\"\\u540e\\u53f0\",\"url\":\"http:\\/\\/repair.sh-jinger.com\\/backend\",\"sub_button\":[]},{\"type\":\"view\",\"name\":\"\\u524d\\u53f0\",\"url\":\"http:\\/\\/repair.sh-jinger.com\\/front\",\"sub_button\":[]}]}]}', '2018-06-25 09:56:22', '2018-06-25 09:56:22');
INSERT INTO `lar_wx_menu` VALUES ('45', '2', '1', 'wxc8ea0012a334a359', '{\"button\":[{\"name\":\"\\u6211\\u7684\\u5bb6\\u4e61\",\"sub_button\":[{\"type\":\"view\",\"name\":\"\\u8d35\\u5dde\",\"url\":\"https:\\/\\/repair.sh-jinger.com\\/backend\",\"sub_button\":[]}]},{\"name\":\"\\u6211\\u7684\\u9879\\u76ee\",\"sub_button\":[{\"type\":\"view\",\"name\":\"\\u540e\\u53f0\",\"url\":\"http:\\/\\/repair.sh-jinger.com\\/backend\",\"sub_button\":[]},{\"type\":\"view\",\"name\":\"\\u524d\\u53f0\",\"url\":\"http:\\/\\/59.110.168.230\\/front\",\"sub_button\":[]}]}]}', '2018-06-25 20:33:32', '2018-06-25 20:33:32');
INSERT INTO `lar_wx_menu` VALUES ('46', '2', '1', 'wxc8ea0012a334a359', '{\"button\":[{\"name\":\"\\u6211\\u7684\\u5bb6\\u4e61\",\"sub_button\":[{\"type\":\"view\",\"name\":\"\\u8d35\\u5dde\",\"url\":\"https:\\/\\/repair.sh-jinger.com\\/backend\",\"sub_button\":[]}]},{\"name\":\"\\u6211\\u7684\\u9879\\u76ee\",\"sub_button\":[{\"type\":\"view\",\"name\":\"\\u540e\\u53f0\",\"url\":\"http:\\/\\/repair.sh-jinger.com\\/backend\",\"sub_button\":[]},{\"type\":\"view\",\"name\":\"\\u524d\\u53f0\",\"url\":\"https:\\/\\/repair.sh-jinger.com\\/front\",\"sub_button\":[]}]}]}', '2018-06-25 20:43:09', '2018-06-25 20:43:09');
INSERT INTO `lar_wx_menu` VALUES ('47', '2', '1', 'wxc8ea0012a334a359', '{\"button\":[{\"name\":\"\\u6211\\u7684\\u5bb6\\u4e61\",\"sub_button\":[{\"type\":\"view\",\"name\":\"\\u56db\\u5b63\\u82b1\\u8c37\",\"url\":\"https:\\/\\/repair.sh-jinger.com\\/backend\",\"sub_button\":[]}]},{\"name\":\"\\u6211\\u7684\\u9879\\u76ee\",\"sub_button\":[{\"type\":\"view\",\"name\":\"\\u540e\\u53f0\",\"url\":\"http:\\/\\/repair.sh-jinger.com\\/backend\",\"sub_button\":[]},{\"type\":\"view\",\"name\":\"\\u524d\\u53f0\",\"url\":\"https:\\/\\/repair.sh-jinger.com\\/front\",\"sub_button\":[]}]}]}', '2018-06-27 16:22:42', '2018-06-27 16:22:42');
INSERT INTO `lar_wx_menu` VALUES ('48', '2', '1', 'wxc8ea0012a334a359', '{\"button\":[{\"name\":\"\\u6211\\u7684\\u5bb6\\u4e61\",\"sub_button\":[{\"type\":\"view\",\"name\":\"\\u56db\\u5b63\\u82b1\\u8c37\",\"url\":\"https:\\/\\/repair.sh-jinger.com\\/backend\",\"sub_button\":[]}]},{\"name\":\"\\u6211\\u7684\\u9879\\u76ee\",\"sub_button\":[{\"type\":\"view\",\"name\":\"\\u540e\\u53f0\",\"url\":\"http:\\/\\/repair.sh-jinger.com\\/backend\",\"sub_button\":[]},{\"type\":\"view\",\"name\":\"\\u524d\\u53f0\",\"url\":\"https:\\/\\/repair.sh-jinger.com\\/weixin\\/auth\\/login\",\"sub_button\":[]}]}]}', '2018-07-21 10:21:35', '2018-07-21 10:21:35');
INSERT INTO `lar_wx_menu` VALUES ('49', '2', '1', 'wxc8ea0012a334a359', '{\"button\":[{\"name\":\"\\u5c0f\\u5356\\u94fa\",\"sub_button\":[{\"type\":\"view\",\"name\":\"\\u56db\\u5b63\\u82b1\\u8c37\",\"url\":\"http:\\/\\/repair.sh-jinger.com\\/weixin\\/auth\\/login\",\"sub_button\":[]}]},{\"name\":\"\\u6211\\u7684\\u9879\\u76ee\",\"sub_button\":[{\"type\":\"view\",\"name\":\"\\u540e\\u53f0\",\"url\":\"http:\\/\\/repair.sh-jinger.com\\/backend\",\"sub_button\":[]},{\"type\":\"view\",\"name\":\"\\u524d\\u53f0\",\"url\":\"http:\\/\\/repair.sh-jinger.com\\/weixin\\/auth\\/login\",\"sub_button\":[]}]}]}', '2018-07-23 14:09:49', '2018-07-23 14:09:49');

-- ----------------------------
-- Table structure for `lar_wx_token`
-- ----------------------------
DROP TABLE IF EXISTS `lar_wx_token`;
CREATE TABLE `lar_wx_token` (
  `id` int(4) unsigned NOT NULL AUTO_INCREMENT,
  `app_id` varchar(255) DEFAULT '' COMMENT '公众号appid',
  `access_token` varchar(255) DEFAULT '' COMMENT '微信授权access_token',
  `refresh_token` varchar(255) DEFAULT '' COMMENT '刷新access_token是的token',
  `expiry_time` datetime DEFAULT NULL COMMENT 'access_token的过期时间',
  `created_at` datetime DEFAULT NULL COMMENT '获取微信token的时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8 COMMENT='微信授权 acces_token 数据表';

-- ----------------------------
-- Records of lar_wx_token
-- ----------------------------
INSERT INTO `lar_wx_token` VALUES ('18', 'wxc8ea0012a334a359', '11_dbtuae7sJ_9gFpf5Dq5ZoudqI7_M3qorMpeRZCbMKmdEB_P4A-MJTmRw9oM0lXe_q9U2iK6yei8bg273x4y10PL6PRuXilf2zZRhz5chAc5KMmNvY89lJHEykjyJ1FGyjX6_GSDwMwkB7sSCYZQhAFAFGX', '', '2018-06-23 22:03:33', '2018-06-23 20:05:13');
INSERT INTO `lar_wx_token` VALUES ('19', 'wx5aea46e7d5f0b5bc', '11_aKgQrKrns3bK-rgeU0dhlDx0gCKLUMKDGmrTEKt4KH3paFf8JByrJJWXTXPsuFy3dJN04mmDC2HOwkwF1AeHMdb1OTHXfxx40JSuCirRts_0HzAASGX7a_fB3o6XpAk60eIG2eATvkPeMCutMFYgACAQJC', '', '2018-06-24 12:14:24', '2018-06-24 10:16:04');
INSERT INTO `lar_wx_token` VALUES ('20', 'wxc8ea0012a334a359', '11_YPG27FoLUdTpkrdWcGCE9_vA50R9Y39yamh4CTU-yk2JKy8t3PDQ3DU82bUVnbSd84AH3EDiLHyu0tQ-N1YU-HXauePR8VldtF0PppRZQ6CcqWf1_kfHGW91r8qD3DLl1qqTKmLuZMayxaVLXTZdAIASOU', '', '2018-06-24 12:56:18', '2018-06-24 10:57:58');
INSERT INTO `lar_wx_token` VALUES ('21', 'wxc8ea0012a334a359', '11_DJjN9KQrXXMGtLBtC1ePB-awnlO9LGoB1POFbFTFDXlctUptV4XJf-bizy_gyDobMKLtD4Fi16bQYCNkc0T0BGL-_ccPR5rUQj2YPdV_wCH-uaO2NpOlXnZHj6Oz-PbIXzjHJLTXhbGnPBquIUScABAYKI', '', '2018-06-24 21:49:33', '2018-06-24 19:51:13');
INSERT INTO `lar_wx_token` VALUES ('22', 'wxc8ea0012a334a359', '11_9NixGccILKZ88iZmvthNPIHMNJmf_ytmY8q9KrwvyVsmAQ90Zm9qzKJsLrDPzP4BVueEHGeme1Fl4jN0bp1l6mdgribpf8_L4xxuwGwKkr1RREha54gzjAbJk_NK9UGjYsFXYBv5I981oPycOSZiAEAKOV', '', '2018-06-25 11:46:18', '2018-06-25 09:47:58');
INSERT INTO `lar_wx_token` VALUES ('23', 'wxc8ea0012a334a359', '11_j3uWIfDEH_7_7ZzFYLav86-2CsHoqrebyJJ4YsP8QqQvpqvzLikI-38Pf863jxlfOT-YeOMneZIoFSFIQEzxutD6TvqVRN30t4zjzONSr9_BMiaphwRu8oOxTpFEXK85y153mZumzqMl6ACVGMNhAFAAGH', '', '2018-06-25 21:51:25', '2018-06-25 19:53:05');
INSERT INTO `lar_wx_token` VALUES ('24', 'wxc8ea0012a334a359', '11_zzUVT9ZIdEHf2odtf5MDpWum-bMfgy84HoKsTY9rW2mDgFo4bbe7nKLGhCip-WLnZ-2C-k0HpZva1GYe05oB_fueSDdKfT3_vwRaTuHOgv-4DeAvAFGKHA7gs_Eo7S_QtTCkuDT4-V8neBcqIZJjAIASJT', '', '2018-06-27 18:20:31', '2018-06-27 16:22:11');
INSERT INTO `lar_wx_token` VALUES ('25', 'wxc8ea0012a334a359', '11_WiwFjePhUg4u0tmYHTPeWw-0zjvF7m3x_tGOCAvGreS5dEqA3sIUkC3R3cx70IbON8B2wRClQIWG542xEnOLp9gkDyddxUlUbxf3VY3duJS-OoD2yhssl2LTvo3e7rdCffxaw1lcSi5p9VMTTTObAJAWWR', '', '2018-06-29 18:19:40', '2018-06-29 16:21:20');
INSERT INTO `lar_wx_token` VALUES ('26', 'wxc8ea0012a334a359', '11_lmcJ7QrRguJ0d390f5MDpWum-bMfgy84HoKsTUeSSFZjyVuMu1fdE48OSdjTJ1AxE7Yhu9_cY5Xlzz8VEuluV-xmQmEZ-HBaJFMsHCl9HKCU4R4rDX0oCsg8Dd8HkBTsWRFYf3a4_XacADumGGXhAFAMMD', '', '2018-07-04 18:09:12', '2018-07-04 16:10:52');
INSERT INTO `lar_wx_token` VALUES ('27', 'wxc8ea0012a334a359', '11_JH9gYvNoVAtDjvhUzRNBluMMl_4y0W3P1t1RNBZaNBBKVARVsib5GG36vkxGVOGErZm5NGj6azq3E3lO12JKxguCGtmuReP5_bAuI9n9E00ZLOPoQr0i1cuiLLTS7qRRyhdE48BKzQXo4RobILThAAAUXF', '', '2018-07-17 17:21:18', '2018-07-17 15:22:58');
INSERT INTO `lar_wx_token` VALUES ('28', 'wxc8ea0012a334a359', '11_T2xWV6g-K-X35tDImGLO7sdFjx16xTRcRprYHA5r8A25wHYzvZtW4lyfaFL_0hQSGdoDeco1mp0qJmxfGBv6A_WWPViAcb-pbyZZWRupT0rTtnslop8HETpqeAYiZ1dAWIIqJpV42AI7MsaSRHEhAEAZPM', '', '2018-07-21 12:19:25', '2018-07-21 10:21:05');
INSERT INTO `lar_wx_token` VALUES ('29', 'wxc8ea0012a334a359', '11_7TFX6BMuvz29cLJ_XqgabY9_KxE5t9u53vOGlpYNFUN2SMf6g-_dG17SXwYcFJH-fwPNqqc-c6Gk1hthk_ANo5JwH0_igbtPfH8QtOIMPkEJKxjAe-PjeFtQRcWORdqJibSoEIR7HR8V0HfoRDMdADAUGP', '', '2018-07-23 16:07:02', '2018-07-23 14:08:42');
DROP TRIGGER IF EXISTS `permissions_del`;
DELIMITER ;;
CREATE TRIGGER `permissions_del` AFTER DELETE ON `lar_permissions` FOR EACH ROW BEGIN
      DELETE FROM lar_role_permissions WHERE permission_id= OLD.id;
END
;;
DELIMITER ;
