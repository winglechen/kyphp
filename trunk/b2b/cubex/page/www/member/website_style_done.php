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
$msg = 'ģ�����óɹ�';
Output::jHeader($msg,$url);
