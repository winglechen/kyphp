<?php
require_once('Spider.php');
$urls = array(
        'http://www.hao123.com',
        'http://www.sina.com.cn',
        'http://www.sohu.com',
        'http://www.sohu.com',
        'http://www.ifeng.com',

        'http://www.cntv.cn/index.shtml',
        'http://www.4399.com/',
        'http://www.xinhuanet.com/',
        'http://www.people.com.cn/',
        'http://www.gov.cn/',

        /*
        'http://www.eastmoney.com/',
        'http://www.chinahr.com/',
        'http://www.zhcw.com/',
        'http://www.autohome.com.cn/',
        'http://www.pconline.com.cn/',

        'http://www.eastmoney.com/',
        'http://www.dianping.com/',
        'http://r.dangdang.com/',
        'http://www.taobao.com/',
        'http://www.anjuke.com/',
        */
);

$Spider = new Spider($urls);
$start = microtime(true);
$data = $Spider->run();
$end   = microtime(true);
$time  = $end - $start;
echo 'time spends: ' . $time . ' s';
$data = serialize($data);
echo "\n";
echo 'string length: ' . strlen($data);
echo "\n";
