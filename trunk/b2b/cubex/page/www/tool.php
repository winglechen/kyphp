<?php
//工具类
use Ky\Core\Core\Db;

$data = file_get_contents(__DIR__.'/category_block.php');


$sql = "select * from category";
$cats = Db::getRows($sql);

foreach($cats as $cat){
    $data = str_replace('http://product.cn.china.cn/provide/list/'.$cat['id'].'.html','index.php?p=www/list&category'.$cat['level'].'='.$cat['id'],$data);
}

file_put_contents(__DIR__.'/category_block.php',$data);

echo 'done';