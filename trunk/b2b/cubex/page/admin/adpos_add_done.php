<?php
use Ky\Core\Formater\Output;
use Ky\Model\Adpos;
use Ky\Core\Core\Path;
use Ky\Core\Uid\Uid;


if(!empty($_POST)){
    
    if(0 == $_POST['id']){
        Adpos::add($_POST);
    }else{
        Adpos::update($_POST);
    }
    
    Output::iframeCallback(200,'添加成功','index.php?p=admin/adpos_list');
    //header('Location:index.php?p=admin/intro_list&cid='.$cid);
}else{
    Output::iframeCallback(300,'添加失败');
}


