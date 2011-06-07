use b2b;
set names utf8;

drop table if exists member_category;
create table member_category(
    corpid mediumint(8) unsigned not null default 0 comment '公司id',
    cid mediumint(8) unsigned not null default 0,
    name varchar(50) not null default '',
    key(corpid)
)engine=myisam default charset=utf8 collate=utf8_general_ci;

drop table if exists member_new;
create table member_new(
    id mediumint(8) unsigned not null auto_increment primary key,
    corpid mediumint(8) unsigned not null default 0 comment '公司id',
    title varchar(100) not null default '',
    brief varchar(200) not null default '',
    detail text,
    key(corpid)
)engine=myisam default charset=utf8 collate=utf8_general_ci;

drop table if exists member_new_category;
create table member_new_category(
    corpid mediumint(8) unsigned not null default 0 comment '公司id',
    cid mediumint(8) unsigned not null default 0,
    name varchar(50) not null default '',
    key(corpid)
)engine=myisam default charset=utf8 collate=utf8_general_ci;



