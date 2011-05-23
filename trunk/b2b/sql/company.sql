use b2b;
set names utf8;

create table product(
    id mediumint(8) unsigned not null auto_increment primary key comment '序号',
    corpid mediumint(8) unsigned not null default 0 comment '公司id',
    corpname varchar(100) not null default '' comment '公司名称',
    productName varchar(100) not null default '' comment '产品名称',
    detail text comment '详细说明',
    expire int(11) not null default 0 comment '信息有效期',
    pic varchar(100) not null default '' comment '上传图片',
    measureUnit  tinyint(4) not null default 0 comment '计量单位',
    productPrice  varchar(100) not null default '' comment '产品单价',
    minAmount  varchar(100) not null default '' comment '最小起订量',
    totalAmount  varchar(100) not null default '' comment '供货总量',
    deliverDate  varchar(100) not null default '' comment '发货期限',
    
    brief  varchar(100) not null default '' comment '简介',
    keyword varchar(100) not null default '' comment '关键词',
    title varchar(100) not null default '' comment '信息标题',
    
    category1 mediumint(8) unsigned not null default 0 comment '产品行业',
    category2 mediumint(8) unsigned not null default 0 comment '产品行业',
    category3 mediumint(8) unsigned not null default 0 comment '产品行业',
    
    key(corpid),
    key(expire),
    key(category1),
    key(category2),
    key(category3)
)engine=myisam default charset=utf8 collate=utf8_general_ci;

create table company(
    id mediumint(8) unsigned not null auto_increment primary key comment '序号',
    username varchar(20) not null default '' comment '会员登录名',
    password varchar(32) not null default '123456' comment '密码' ,
           
    corpname varchar(100) not null default '' comment '公司名称',
    corptype tinyint(4) not null default 0 comment '企业类型',
    corpintro varchar(200) not null default '' comment '公司简介',
    registerPlace varchar(100) not null default '' comment '公司注册地',
    capitial tinyint(4) unsigned not null default 0 comment '注册资本',
    capitalUnit varchar(40) not null default 0 comment '资本单位',
    categories varchar(100) unsigned not null default 0 comment '主营行业',
    
    logo varchar(100) not null default '' comment '企业logo',
    pic  varchar(100) not null default '' comment '公司图片',
    
    realman varchar(20) not null default '' comment '业务联系人',
    sex tinyint(4) not null default 0 comment '性别',
    tel varchar(20) not null default '' comment '公司电话',
    fax varchar(20) not null default '' comment '传真',
    email   varchar(100) not null default '' comment '电子邮箱',
    province mediumint(8) unsigned not null default 0 comment '省份',
    city mediumint(8) unsigned not null default 0 comment '城市',
    address varchar(100) not null default '' comment '公司地址',
    zipCode varchar(6) not null default '' comment '邮政编码',
    dept varchar(20) not null default '' comment '部门',
    job varchar(20) not null default '' comment '职位',
    mobile varchar(20) not null default '' comment '手机',
    website varchar(100) not null default '#' comment '公司网址',
    msn varchar(100) not null default '' comment 'msn',
    qq varchar(20) not null default '' comment 'qq',
    
    setupTime int(11) unsigned not null default 0 comment '公司成立时间',
    registerNumber varchar(50) not null default '' comment '公司注册号',
    taxRegNo varchar(50) not null default '' comment '税务注册号',
    manageTime varchar(50) not null default '' comment '营业期限',
    manageBound varchar(200) not null default '' comment '经营范围',
    registerOrgan varchar(40) not null default '' comment '登记机关',
    checkTime tinyint(4) not null default 0 comment '最近年检时间',
    artificialPerson varchar(10) not null default '' comment '法人',
    
    numberOfEmployee varchar(20) not null default '' comment '员工人数',
    manageMode varchar(20) not null default '' comment '经营模式',
    brand varchar(40) not null default '' comment '品牌名称',
    manageArea varchar(40) not null default '' comment '主要经营地点',
    primaryMarket varchar(200) not null default '' comment '主要市场',
    primaryCustomers varchar(40) not null default '' comment '主要客户群',
    turnover varchar(40) not null default '' comment '年营业额',
    exportAmount varchar(40) not null default '' comment '年出口额',
    importAmount varchar(40) not null default '' comment '年进口额',
    accountBank varchar(40) not null default '' comment '开户银行',
    account varchar(40) not null default '' comment '帐号',
       
    monthOutput varchar(40) not null default '' comment '月产量',
    workshopArea varchar(40) not null default '' comment '厂房面积',
    providerOEM varchar(40) not null default '' comment '是否提供OEM代加工？',
    authType varchar(100) not null default '' comment '管理体系认证',
    qualityControl varchar(40) not null default '' comment '质量控制',
   
    unique key(username)
)engine=myisam default charset=utf8 collate=utf8_general_ci; 