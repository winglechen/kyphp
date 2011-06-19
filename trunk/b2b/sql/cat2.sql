
use b2b;
set names utf8;



alter table category add position smallint(6) unsigned not null default 0;
alter table category add  `path` varchar(100) not null default '0';
alter table category change isEnd `slave` tinyint(4) unsigned NOT NULL default 0;



ALTER TABLE  `company` ADD  `checked` TINYINT( 4 ) UNSIGNED NULL ,
ADD  `rank` TINYINT( 4 ) UNSIGNED NOT NULL ,
ADD INDEX (  `checked` )

