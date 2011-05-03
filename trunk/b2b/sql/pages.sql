use b2b;
set names utf8;


create table pages(
    id smallint(6) unsigned not null auto_increment primary key,
    name char(20) not null default '页面',
    nick char(20) not null default 'page',
    detail char(50) not null default '',
    unique key(nick)
)engine=myisam default charset=utf8 collate=utf8_general_ci;

create table seo(
    id mediumint(8) unsigned not null auto_increment primary key,
    pageId smallint(6) unsigned not null default 0,
    title varchar(100),
    keyword varchar(100),
    description varchar(200),
    key(pageId)
)engine=myisam default charset=utf8 collate=utf8_general_ci;

create table ad(
    id mediumint(8) unsigned not null auto_increment primary key,
    positionId smallint(6) unsigned not null default 0,
    pic varchar(100),
    key(positionId)
)engine=myisam default charset=utf8 collate=utf8_general_ci;

create table ad_position(
    id mediumint(8) unsigned not null auto_increment primary key,
    pageId smallint(6) unsigned not null default 0,
    nick char(20) not null default 'adp',
    title char(50),
    unique key(nick),
    key(pageId)
)engine=myisam default charset=utf8 collate=utf8_general_ci;


create table block(
    id mediumint(8) unsigned not null auto_increment primary key,
    pageId smallint(6) unsigned not null default 0,
    pic char(100) not null default '',
    nick char(20) not null default 'adp',
    title char(50),
    unique key(nick),
    key(pageId)
)engine=myisam default charset=utf8 collate=utf8_general_ci;


create table block_content(
    blockId mediumint(8) unsigned not null default 0,
    contentId mediumint(8) unsigned not null default 0,
    title   varchar(100) not null default '',
    pic     varchar(100) not null default '',
    brief   varchar(200) not null default '',
    ts      int(11) unsigned not null default 0,
    key(blockId)
)engine=myisam default charset=utf8 collate=utf8_general_ci;
