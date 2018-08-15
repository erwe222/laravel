/**产品分类数据表*/
CREATE TABLE `lar_product_category` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `pid` int(11) unsigned DEFAULT '0' COMMENT '父类ID',
  `name` int(11) unsigned DEFAULT '0' COMMENT '分类名',
  `created_at` datetime DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


/**产品详情表*/
CREATE TABLE `lar_product_detail` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(11) unsigned DEFAULT '0' COMMENT '产品分类id',
  `product_no` varchar(100) unsigned DEFAULT '' COMMENT '产品编号',
  `images` text DEFAULT '' COMMENT '产品图片(用","分割)',
  `stock` int(11) unsigned DEFAULT '0' COMMENT '当前库存数量',
  `sold` int(11) unsigned DEFAULT '0' COMMENT '已销售数量',
  `content` text DEFAULT '' COMMENT '产品详情描述',
  `created_at` datetime DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


/**产品评价表*/
CREATE TABLE `lar_product_evaluate` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `users_id` int(11) unsigned DEFAULT '0' COMMENT '评论用户',
  `product_no` int(11) unsigned DEFAULT '' COMMENT '产品编号',
  `order_no` int(11) unsigned DEFAULT '' COMMENT '交易订单号',
  `score` varchar(100) DEFAULT '' COMMENT '产品评分',
  `comment` varchar(255) DEFAULT '' COMMENT '产品评论',
  `images` text DEFAULT '' COMMENT '产品评论附加图片',
  `created_at` datetime DEFAULT NULL COMMENT '评论创建时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;