use b2b;
set names utf8;

drop table if exists news;
CREATE TABLE `news` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL DEFAULT '',
  `pic` varchar(100) NOT NULL DEFAULT '',
  brief varchar(200) not null default '',
  `ts` int(11) unsigned NOT NULL DEFAULT '0',
  `content` text,
  `cid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;


