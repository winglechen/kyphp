use b2b;
set names utf8;

drop table if exists member_category;
create table member_category(
    pid mediumint(8) unsigned not null default 0 comment '公司id',
    id mediumint(8) unsigned not null  ,
    name varchar(50) not null default '',
    level tinyint(4) unsigned not null default 0,
    unique key(pid,id)
)engine=myisam default charset=utf8 collate=utf8_general_ci;


