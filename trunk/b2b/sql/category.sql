use b2b;
set names utf8;
CREATE TABLE  `b2b_tree` (
 `id` mediumint(8) unsigned NOT NULL auto_increment,
 `name` varchar(45) NOT NULL,
 `position` int(10) unsigned NOT NULL default '0',
 `pid` mediumint(10) unsigned NOT NULL default '0' COMMENT 'parent',
 `slave` binary(1) NOT NULL default '0',
 `path` varchar(100) not null default '0',
 PRIMARY KEY  (`id`)
 ) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;
 
 CREATE TABLE  `news_tree` (
 `id` mediumint(8) unsigned NOT NULL auto_increment,
 `name` varchar(45) NOT NULL,
 `position` int(10) unsigned NOT NULL default '0',
 `pid` mediumint(8) unsigned NOT NULL default '0' COMMENT 'parent',
 `slave` binary(1) NOT NULL default '0',
 `path` varchar(100) not null default '0',
 PRIMARY KEY  (`id`)
 ) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;
 
 CREATE TABLE `news` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL DEFAULT '',
  `pic` varchar(100) NOT NULL DEFAULT '',
  `ts` int(11) unsigned NOT NULL DEFAULT '0',
  `content` text,
  `cid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;


insert into new_tree(name) values('经贸动态'),('产业经济'),('宏观经济'),
('企业报道'),('化工工业'),('机械工业'),
('服装服饰'),('五金工具'),('家电资讯'),
('汽车汽配'),('商人工具'),('成功故事'),
('商海感悟'),('行业展会'),('财经政策'),
('机械行情'),('五金行情'),('汽配行情')
,('家电行情'),('贸易常识'),('商务礼仪'),('创业宝典')
,('营销方略'),('贸易故事');


