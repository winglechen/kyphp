use b2b;
set names utf8;

drop table if exists company_setting;
create table company_setting(
    corpid mediumint(8) unsigned not null  primary key,
    `username` varchar(20) NOT NULL DEFAULT '' COMMENT '会员登录名',
    temp   tinyint(4) unsigned not null default 1,
    logo   varchar(200) not null default '',
    img varchar(200) not null default '',
    banner varchar(200) not null default '',
    unique key (username)
)engine=myisam default charset=utf8 collate=utf8_general_ci;

