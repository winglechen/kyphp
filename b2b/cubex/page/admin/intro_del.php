<?php
use Ky\Model\Intro;
use Ky\Core\Formater\Output;

$cid = $_GET['cid'];
$id = $_GET['id'];

Intro::delete($id);

//Output::iframeCallback(200,'添加成功','index.php?p=admin/intro_list&cid='.$cid);
header('Location:index.php?p=admin/intro_list&cid='.$cid);

