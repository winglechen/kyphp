use b2b;
set names utf8;
alter table company_setting add title varchar(100) not null default '',add description varchar(255) not null default '',add keyword varchar(100) not null default '';
