<?php
use Ky\Core\Formater\Output;
use Ky\Model\News;
use Ky\Core\Core\Path;
use Ky\Core\Core\Db;
use Ky\Core\Uid\Uid;

 
$validdate = strtotime($_POST['validdate']);
$ids       = $_POST['ids']

$sql = "update company set validdate = " . $validdate . ' where id in (' . $ids . ')';
Db::query($sql);

echo '审核成功';
exit;

//Output::iframeCallback(200,'添加成功','index.php?p=admin/news_list');
//header('Location:index.php?p=admin/intro_list&cid='.$cid);


