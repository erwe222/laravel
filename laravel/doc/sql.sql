/**商家信息详情表*/
CREATE TABLE `lar_sellers` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `seller_id` int(11) unsigned DEFAULT '0' COMMENT '商家id',
  `seller_name` varchar(100) DEFAULT '' COMMENT '商家名称',
  `telephone` varchar(50) DEFAULT '' COMMENT '商家座机号码',
  `mobile` varchar(20) DEFAULT '' COMMENT '手机号',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

