<?php
use Ky\Core\Formater\Output;
use Ky\Model\Blockpos;
use Ky\Core\Core\Path;
use Ky\Core\Uid\Uid;


if(!empty($_POST)){
    
       if(0 == $_POST['id']){
        Blockpos::add($_POST);
    }else{
        Blockpos::update($_POST);
    }
    
    Output::iframeCallback(200,'添加成功','index.php?p=admin/blockpos_list');
    //header('Location:index.php?p=admin/intro_list&cid='.$cid);
}else{
    Output::iframeCallback(300,'添加失败');
}


