use b2b;
set names utf8;

create table intro_news(
    id mediumint(8) unsigned not null auto_increment primary key,
    cid smallint(6) unsigned not null default 0,
    title varchar(50) not null default '',
    pic   varchar(100) not null default '',
    ts  int(11) unsigned not null default 0,
    content text
)engine=myisam default charset=utf8 collate=utf8_general_ci;

create table intro_jobs(
    id mediumint(8) unsigned not null auto_increment primary key,
    title varchar(50) not null default '',
    ts  int(11) unsigned not null default 0,
    content text
)engine=myisam default charset=utf8 collate=utf8_general_ci;

CREATE TABLE  `intro_elements` (
 `Id` int(10) unsigned NOT NULL auto_increment,
 `name` varchar(45) NOT NULL,
 `position` int(10) unsigned NOT NULL default '0',
 `ownerEl` int(10) unsigned NOT NULL default '0' COMMENT 'parent',
 `slave` binary(1) NOT NULL default '0',
 PRIMARY KEY  (`Id`)
 ) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;
