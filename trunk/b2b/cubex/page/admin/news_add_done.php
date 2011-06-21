<?php
use Ky\Core\Formater\Output;
use Ky\Model\News;
use Ky\Core\Core\Path;
use Ky\Core\Uid\Uid;


if(!empty($_POST)){
    $_POST['brief']  = Output::cut(strip_tags($_POST['content']),100,'');
    $_POST['content'] = addslashes(htmlspecialchars($_POST['content']));
    
    if($_FILES['pic']['name']){
        $uid      = Uid::num();
        $ext      = Path::getFileExt($_FILES['pic']['name']);
        $fileName = IMG_PATH . $uid . '.' . $ext;
        move_uploaded_file($_FILES['pic']['tmp_name'],$fileName);
        $_POST['pic'] = IMG_HOST . $uid . '.' . $ext ;
    }

    if(0 == $_POST['id']){
        News::add($_POST);
    }else{
        News::update($_POST);
    }
    
    Output::iframeCallback(200,'添加成功','index.php?p=admin/news_list');
    //header('Location:index.php?p=admin/intro_list&cid='.$cid);
}else{
    Output::iframeCallback(300,'添加失败');
}


