<?php
$data = '';
$files = array(
    'erm.css',
    'erm_op_old.css',
    'erm_old.css',
    'erm_op.css',
    'popdiv.css',
    'erm_new.css',
);

foreach($files as $file){
    $data .= file_get_contents($file);    
}

$pattern = '/url\((.*?)\)/';
preg_match_all($pattern,$data,$matches);
//var_dump($matches[1]);

foreach($matches[1] as $url){
    if(strpos($url,'http') === false){
        echo 'http://my.cn.china.cn/resource/images/admin/' . $url .'<br />';    
    }    
}