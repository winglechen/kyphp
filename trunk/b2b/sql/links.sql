use b2b;
set names utf8;

create table links(
    id mediumint(8) unsigned not null auto_increment primary key,
    name varchar(50) not null default '',
    url varchar(200) not null default '',
    pic   varchar(200) not null default '',
    ts  int(11) unsigned not null default 0
)engine=myisam default charset=utf8 collate=utf8_general_ci;

create table ads(
    id mediumint(8) unsigned not null auto_increment primary key,
    name varchar(50) not null default '',
    url varchar(200) not null default '',
    pic   varchar(200) not null default '',
    ts  int(11) unsigned not null default 0
)engine=myisam default charset=utf8 collate=utf8_general_ci;


