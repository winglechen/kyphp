use b2b;
set names utf8;

drop table if exists member_category;
create table member_category(
    pid mediumint(8) unsigned not null default 0 comment '公司id',
    id mediumint(8) unsigned not null  auto_increment primary key,
    name varchar(50) not null default '',
    key(pid)
)engine=myisam default charset=utf8 collate=utf8_general_ci;

drop table if exists member_new;
create table member_new(
    id mediumint(8) unsigned not null auto_increment primary key,
    corpid mediumint(8) unsigned not null default 0 comment '公司id',
    cid mediumint(8) unsigned not null default 0,
    pic varchar(100) not null default '' comment '上传图片',
    name varchar(100) not null default '',
    brief varchar(200) not null default '',
    keyword varchar(100) not null default '' comment '关键词',
    title varchar(100) not null default '' comment '信息标题',
    ts int(11) NOT NULL DEFAULT '0',
    detail text,
    key(corpid)
)engine=myisam default charset=utf8 collate=utf8_general_ci;

drop table if exists member_new_category;
create table member_new_category(
    pid mediumint(8) unsigned not null default 0 comment '公司id',
    id mediumint(8) unsigned not null  auto_increment primary key,
    name varchar(50) not null default '',
    key(pid)
)engine=myisam default charset=utf8 collate=utf8_general_ci;



