
use b2b;

create table company(
    id mediumint(8) unsigned not null auto_increment primary key,
    name varchar(50) not null default ''
)engine=innodb default charset=utf8 collate=utf8_general_ci;

create table category(
    id smallint(6) unsigned not null auto_increment primary key,
    name varchar(50) not null default ''
)engine=innodb default charset=utf8 collate=utf8_general_ci;

create table product(
    id mediumint(8) unsigned not null auto_increment primary key,
    company_id mediumint(8) unsigned not null default 0,
    category_id smallint(6) unsigned not null default 0,
    name varchar(100) not null default '',
    company_name varchar(50) not null default ''
)engine=innodb default charset=utf8 collate=utf8_general_ci;
