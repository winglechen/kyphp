use b2b;
set names utf8;

create table admin_member(
    id smallint(6) unsigned not null auto_increment primary key,
    name varchar(30) not null default '',
    password varchar(32) not null default '123456',
    key(name,password)
)engine=myisam default charset=utf8 collate=utf8_general_ci;


insert into admin_member(name,password) values('admin','admin');
