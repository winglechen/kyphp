use b2b;
set names utf8;

drop table if exists pages;
create table pages(
    id smallint(6) unsigned not null auto_increment primary key,
    name char(20) not null default '页面',
    nick char(20) not null default 'page',
    info char(50) not null default '',
    title varchar(100) not null default 'b2b',
    keyword varchar(100) not null default 'b2b',
    description varchar(100) not null default 'b2b',
    cache char(10) not null default 300,
    unique key(nick)
)engine=myisam default charset=utf8 collate=utf8_general_ci;


drop table if exists const;
create table const(
	name varchar(50) not null default 'const',
	k    varchar(50) not null default 'key',
	v    varchar(50) not null default 'value',
	primary key(k)
)engine=myisam default charset=utf8 collate=utf8_general_ci;

drop table if exists block;
create table block(
    pageId mediumint(8) unsigned not null default 0,
    blockId mediumint(8) unsigned not null default 0,
    contentId mediumint(8) unsigned not null default 0,
    title   varchar(100) not null default '',
    pic     varchar(100) not null default '',
    brief   varchar(200) not null default '',
    url     varchar(100) not null default '#',
    ts      int(11) unsigned not null default 0,
    key(pageId),
    key(blockId)
)engine=myisam default charset=utf8 collate=utf8_general_ci;

