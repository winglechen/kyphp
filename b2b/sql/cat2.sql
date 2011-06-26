
use b2b;
set names utf8;



alter table category add position smallint(6) unsigned not null default 0;
alter table category add  `path` varchar(100) not null default '0';
alter table category change isEnd `slave` tinyint(4) unsigned NOT NULL default 0;



ALTER TABLE  `company` ADD  `checked` TINYINT( 4 ) UNSIGNED NULL ,
ADD  `rank` TINYINT( 4 ) UNSIGNED NOT NULL ,
ADD INDEX (  `checked` )


update category set path=concat('0,',pid) where level = 2;

update category c1,category c2 set c1.path = concat(c2.path,',',c2.id) where c1.level=3 and c1.pid = c2.id;