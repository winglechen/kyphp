use b2b;
set names utf8;

CREATE TABLE IF NOT EXISTS `authtype` (
  `id` tinyint(4) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `authtype`
--

INSERT INTO `authtype` (`id`, `name`) VALUES
(1, 'ISO 9000'),
(2, 'ISO 9001'),
(3, 'ISO 9002'),
(4, 'ISO 9003'),
(5, 'ISO 9004'),
(6, 'ISO 14000');

-- --------------------------------------------------------

--
-- 表的结构 `capitalunit`
--

CREATE TABLE IF NOT EXISTS `capitalunit` (
  `id` tinyint(4) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `capitalunit`
--

INSERT INTO `capitalunit` (`id`, `name`) VALUES
(1, '人民币'),
(2, '港币'),
(3, '欧元'),
(4, '美元'),
(5, '日元'),
(6, '新加坡币'),
(7, '英镑');

-- --------------------------------------------------------

--
-- 表的结构 `corptype`
--

CREATE TABLE IF NOT EXISTS `corptype` (
  `id` tinyint(4) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=28 ;

--
-- 转存表中的数据 `corptype`
--

INSERT INTO `corptype` (`id`, `name`) VALUES
(1, '个体经营'),
(2, '私营独资企业'),
(3, '私营合伙企业'),
(4, '私营有限责任公司'),
(5, '私营股份有限公司'),
(6, '国有企业'),
(7, '集体企业'),
(8, '股份合作企业'),
(9, '联营企业'),
(10, '有限责任公司(国有独资)'),
(11, '其他有限责任公司'),
(12, '股份有限公司'),
(13, '其他内资企业'),
(14, '有限责任公司(中外合资)'),
(15, '三来一补'),
(16, '分支机构'),
(17, '合资经营企业(港或澳、台资)'),
(18, '合作经营企业(港或澳、台资)'),
(19, '港、澳、台商独资经营企业'),
(20, '港、澳、台商投资股份有限公司'),
(21, '中外合资经营企业'),
(22, '中外合作经营企业'),
(23, '外资企业'),
(24, '外商投资股份有限公司'),
(25, '政府机构'),
(26, '非盈利组织'),
(27, '其他');

-- --------------------------------------------------------

--
-- 表的结构 `managemode`
--

CREATE TABLE IF NOT EXISTS `managemode` (
  `id` tinyint(4) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `managemode`
--

INSERT INTO `managemode` (`id`, `name`) VALUES
(1, '生产型'),
(2, '贸易型'),
(3, '服务型'),
(4, '政府或其他机构'),
(5, '生产+贸易型');

-- --------------------------------------------------------

--
-- 表的结构 `marketarea`
--

CREATE TABLE IF NOT EXISTS `marketarea` (
  `id` tinyint(4) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- 转存表中的数据 `marketarea`
--

INSERT INTO `marketarea` (`id`, `name`) VALUES
(1, '大陆'),
(2, '港澳台地区'),
(3, '北美'),
(4, '南美'),
(5, '西欧'),
(6, '东欧'),
(7, '东亚'),
(8, '中亚'),
(9, '东南亚'),
(10, '中东'),
(11, '非洲'),
(12, '大洋洲'),
(13, '全球');

-- --------------------------------------------------------

--
-- 表的结构 `staffnum`
--

CREATE TABLE IF NOT EXISTS `staffnum` (
  `id` tinyint(4) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `staffnum`
--

INSERT INTO `staffnum` (`id`, `name`) VALUES
(1, '5 - 10 人'),
(2, '11 - 50 人'),
(3, '51 - 100 人'),
(4, '101 - 200 人'),
(5, '201 - 300 人'),
(6, '301 - 500 人'),
(7, '501 - 1000 人'),
(8, '1000 人以上');

-- --------------------------------------------------------

--
-- 表的结构 `turnover`
--

CREATE TABLE IF NOT EXISTS `turnover` (
  `id` tinyint(4) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- 转存表中的数据 `turnover`
--

INSERT INTO `turnover` (`id`, `name`) VALUES
(1, '人民币 10 万元/年以下'),
(2, '人民币 10 万元/年 - 30 万元/年'),
(3, '人民币 30 万元/年 - 50 万元/年'),
(4, '人民币 50 万元/年 - 100 万元/年'),
(5, '人民币 100 万元/年 - 200 万元/年'),
(6, '人民币 200 万元/年 - 300 万元/年'),
(7, '人民币 300 万元/年 - 500 万元/年'),
(8, '人民币 500 万元/年 - 700 万元/年'),
(9, '人民币 700 万元/年 - 1000 万元/年'),
(10, '人民币 1000 万元/年 - 2000 万元/年'),
(11, '人民币 2000 万元/年 - 3000 万元/年'),
(12, '人民币 3000 万元/年 - 5000 万元/年'),
(13, '人民币 5000 万元/年 - 1 亿元/年'),
(14, '人民币 1 亿元/年以上');

-- --------------------------------------------------------

--
-- 表的结构 `units`
--

CREATE TABLE IF NOT EXISTS `units` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=59 ;

--
-- 转存表中的数据 `units`
--

INSERT INTO `units` (`id`, `name`) VALUES
(1, '台'),
(2, '粒'),
(3, '座'),
(4, '辆'),
(5, '只'),
(6, '支'),
(7, '枝'),
(8, '架'),
(9, '头'),
(10, '张'),
(11, '块'),
(12, '片'),
(13, '匹'),
(14, '件'),
(15, '根'),
(16, '条'),
(17, '把'),
(18, '卷'),
(19, '副'),
(20, '幅'),
(21, '双'),
(22, '一打'),
(23, '份'),
(24, '套'),
(25, '棵'),
(26, '箱'),
(27, '袋'),
(28, '盒'),
(29, '包'),
(30, '捆'),
(31, '筐'),
(32, '瓶（罐）'),
(33, '毫米'),
(34, '厘米'),
(35, '米'),
(36, '千米'),
(37, '英寸'),
(38, '英尺'),
(39, '加仑 (英)'),
(40, '加仑 (美)'),
(41, '克'),
(42, '千克'),
(43, '磅'),
(44, '公吨'),
(45, '吨 (英)'),
(46, '吨 (美)'),
(47, '毫升'),
(48, '公升'),
(49, '盎司'),
(50, '夸脱'),
(51, '品脱 (英)'),
(52, '品脱 (美)'),
(53, '码'),
(54, '平方英尺'),
(55, '平方英寸'),
(56, '平方米'),
(57, '平方码'),
(58, '立方米');