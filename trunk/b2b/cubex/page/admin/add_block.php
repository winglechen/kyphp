<?php
use Ky\Core\Formater\Output;
use Ky\Model\Product;
use Ky\Core\Core\Path;
use Ky\Core\Core\Db;
use Ky\Core\Uid\Uid;

$ids = $_GET['id']; 
$bid = $_GET['bid']; 
$pid = $_GET['pid'];
$act = 'add'.ucwords($_GET['btype']);

$act($bid,$pid,$ids);

function addNews($bid,$pid,$ids)
{
    $url = 'http://www.haomingchina.com/index.php?p=';
    $sql = 'insert into block(pageId,blockId,title,pic,brief,url,ts) select '. $pid . ',' . $bid . ',title,pic,brief,concat("'.$url.'",id),ts from news where id in('.$ids.')'; 
    Db::query($sql);  
}

//Product::checked($ids);

//Output::navTabCallback(200,'审核成功','index.php?p=admin/product_check');


