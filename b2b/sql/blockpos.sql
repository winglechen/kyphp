use b2b;
set names utf8;

drop table if exists blockpos;
create table blockpos(
    id mediumint(8) unsigned not null auto_increment primary key,
    pageId mediumint(8) unsigned not null default 0,
    pageName varchar(30) not null default '',
    name varchar(30) not null default '内容块',
    blockType varchar(20) not null default 'product',
    detail varchar(1000) not null default '',
    key(pageId)
)engine=myisam default charset=utf8 collate=utf8_general_ci;

drop table if exists adpos;
create table adpos(
    id mediumint(8) unsigned not null auto_increment primary key,
    pageId mediumint(8) unsigned not null default 0,
    pageName varchar(30) not null default '',
    name varchar(30) not null default '广告位',
    detail varchar(1000) not null default '',
    key(pageId)
)engine=myisam default charset=utf8 collate=utf8_general_ci;

drop table if exists pages;
create table pages(
    id smallint(6) unsigned not null auto_increment primary key,
    name char(20) not null default '页面',
    detail char(50) not null default ''
)engine=myisam default charset=utf8 collate=utf8_general_ci;

insert into pages(id,name) values
(1,'首页'),
(2,'找求购'),
(3,'找公司'),
(4,'商业资讯'),
(5,'产品列表'),
(6,'产品详细'),
(7,'资讯列表'),
(8,'资讯详细'),
(9,'会员注册'),
(10,'会员登录');

insert into blockpos(pageId,pageName,name,blockType) values
(1,'首页','热门活动','news'),
(1,'首页','国际产品','news'),
(1,'首页','热门商机','product'),
(1,'首页','商机资讯','news'),
(1,'首页','成功故事','news'),
(1,'首页','外贸专区','news'),
(1,'首页','企业top10-信用指数','company'),
(1,'首页','企业top10-活跃指数','company'),
(1,'首页','企业top10-最新名企','company'),
(1,'首页','行业市场-特别推荐','product'),
(2,'找求购','求购信息推荐','qiugou'),
(2,'找求购','政府采购','qiugou'),
(2,'找求购','成功案例','news'),
(2,'找求购','销售技巧','news'),
(2,'找求购','市场展销','product');





insert into adpos(pageId,pageName,name) values
(1,'首页','导航下通栏广告'),
(1,'首页','登录栏左边广告'),
(1,'首页','热门活动下面广告'),
(1,'首页','热门商机下面广告'),
(1,'首页','商机资讯下面广告'),
(1,'首页','成功故事下面广告'),
(1,'首页','外贸专区下面广告'),
(2,'找求购','求购信息推荐下面广告'),
(2,'找求购','政府采购下面广告'),
(2,'找求购','成功案例下面广告'),
(2,'找求购','市场展销下面广告');




























