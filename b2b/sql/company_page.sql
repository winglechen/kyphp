use b2b;
set names utf8;

drop table if exists company_page;
create table company_page(
    id mediumint(8) unsigned not null auto_increment primary key,
    corpid mediumint(8) unsigned not null default 0 comment '公司id',
    pic varchar(100) not null default '' comment '上传图片',
    name varchar(100) not null default '',
    brief varchar(200) not null default '',
    keyword varchar(100) not null default '' comment '关键词',
    title varchar(100) not null default '' comment '信息标题',
    ts int(11) NOT NULL DEFAULT '0',
    detail text,
    key(corpid)
)engine=myisam default charset=utf8 collate=utf8_general_ci;


