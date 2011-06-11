use b2b;
set names utf8;

drop table if exists qiugou;
create table qiugou(
    id mediumint(8) unsigned not null auto_increment primary key comment '序号',
    corpid mediumint(8) unsigned not null default 0 comment '公司id',
    corpname varchar(100) not null default '' comment '公司名称',
    productName varchar(100) not null default '' comment '产品名称',
    detail text comment '详细说明',
    expire int(11) not null default 0 comment '信息有效期',
    pic varchar(100) not null default '' comment '上传图片',
    measureUnit  tinyint(4) not null default 0 comment '计量单位',
    productPrice  varchar(100) not null default '' comment '产品单价',
    brief  varchar(100) not null default '' comment '简介',
    keyword varchar(100) not null default '' comment '关键词',
    title varchar(100) not null default '' comment '信息标题',
    checked tinyint(4) unsigned not null default 0 comment '审核状态',
    
    category1 mediumint(8) unsigned not null default 0 comment '产品行业',
    category2 mediumint(8) unsigned not null default 0 comment '产品行业',
    category3 mediumint(8) unsigned not null default 0 comment '产品行业',
    `province` varchar(20) NOT NULL default '' COMMENT '省份',
    `city` varchar(20) NOT NULL DEFAULT '' COMMENT '城市',
    `ts` int(11) NOT NULL DEFAULT '0',
    
    key(corpid),
    key(expire),
    key(category1),
    key(category2),
    key(category3)
)engine=myisam default charset=utf8 collate=utf8_general_ci;


