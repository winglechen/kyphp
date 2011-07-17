<?php
use Ky\Core\Formater\Output;
use Ky\Model\Product;
use Ky\Core\Core\Path;
use Ky\Core\Core\Db;
use Ky\Core\Uid\Uid;

$ids = $_GET['id']; 
$bid = $_GET['bid']; 
$pid = $_GET['pid'];
$btype = $_GET['btype'];

addBlock($btype,$bid,$pid,$ids);

function addNews($bid,$pid,$ids)
{
    $url = 'http://www.ztb2b.com/index.php?p=www/new_detail&id=';
    $sql = 'insert into block(pageId,blockId,title,pic,brief,url,ts) select '. $pid . ',' . $bid . ',title,pic,brief,concat("'.$url.'",id),ts from news where id in('.$ids.')'; 
    Db::query($sql);  
}

function addBlock($type,$bid,$pid,$ids)
{
    $url = 'http://www.ztb2b.com/index.php?p=www/'.$type.'_detail&id=';
    $sql = 'insert into block(pageId,blockId,title,pic,brief,url,ts) select '. $pid . ',' . $bid . ',title,pic,brief,concat("'.$url.'",id),ts from '.$type.' where id in('.$ids.')'; 
    Db::query($sql);  
}


//Product::checked($ids);

Output::navTabCallback(200,'审核成功','index.php?p=admin/block_add&btype='.$btype.'&bid='.$bid);


