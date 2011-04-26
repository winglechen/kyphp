 CREATE TABLE  `tree_elements` (
 `Id` int(10) unsigned NOT NULL auto_increment,
 `name` varchar(45) NOT NULL,
 `position` int(10) unsigned NOT NULL default '0',
 `ownerEl` int(10) unsigned NOT NULL default '0' COMMENT 'parent',
 `slave` binary(1) NOT NULL default '0',
 PRIMARY KEY  (`Id`)
 ) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;