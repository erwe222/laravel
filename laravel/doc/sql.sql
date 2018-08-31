
/**货品类目数据表*/
CREATE TABLE `lar_goods_category` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `pid` int(11) unsigned DEFAULT '0' COMMENT '父类ID',
  `name` varchar(50) DEFAULT '' COMMENT '类目名',
  `description` varchar(200) DEFAULT '' COMMENT '类目描述',
  `created_at` datetime DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='货品类目数据表';


/**品牌管理数据表*/
CREATE TABLE `lar_brand` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50)  DEFAULT '0' COMMENT '品牌中文名',
  `english_name` varchar(50) DEFAULT '' COMMENT '品牌英文名',
  `logo_url` varchar(1000) DEFAULT '' COMMENT '品牌Logo',
  `description` varchar(200) DEFAULT '' COMMENT '品牌描述',
  `created_at` datetime DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='品牌管理数据表';




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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;