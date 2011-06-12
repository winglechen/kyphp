<?php
use Ky\Model\Mset;
use Ky\Core\Formater\Output;
use Ky\Core\Core\Path;
use Ky\Core\Uid\Uid;

$data = array(
    'corpid'    => $_SESSION['id'],
    'temp'      => $_GET['s'],
);
  
       
Mset::update($data);          

$url = 'index.php?p=www/member/website_style';
$msg = '模板设置成功';
Output::jHeader($msg,$url);
