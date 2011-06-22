<?php
use Ky\Core\Formater\Output;
use Ky\Model\Pages;
use Ky\Core\Core\Path;
use Ky\Core\Uid\Uid;


if(!empty($_POST)){
    
    Pages::update($_POST);
    
    Output::iframeCallback(200,'添加成功','index.php?p=admin/seo&pid='.$_POST['id']);
    //header('Location:index.php?p=admin/intro_list&cid='.$cid);
}else{
    Output::iframeCallback(300,'添加失败');
}


