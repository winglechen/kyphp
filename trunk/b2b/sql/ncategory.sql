use b2b;
set names utf8;

drop table if exists ncategory;
create table ncategory(
    id mediumint(6) unsigned not null auto_increment primary key,
    name char(30) not null default '分类名称',
    `position` int(10) unsigned NOT NULL default '0',
     `pid` mediumint(8) unsigned NOT NULL default '0' COMMENT 'parent',
     `slave` binary(1) NOT NULL default '0',
     `path` varchar(100) not null default '0'
)engine=myisam default charset=utf8 collate=utf8_general_ci;

insert into ncategory(name) values('经贸动态'),('产业经济'),('宏观经济'),
('企业报道'),('化工工业'),('机械工业'),
('服装服饰'),('五金工具'),('家电资讯'),
('汽车汽配'),('商人工具'),('成功故事'),
('商海感悟'),('行业展会'),('财经政策'),
('机械行情'),('五金行情'),('汽配行情')
,('家电行情'),('贸易常识'),('商务礼仪'),('创业宝典')
,('营销方略'),('贸易故事');



