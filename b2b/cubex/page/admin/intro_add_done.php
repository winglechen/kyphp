<?php
use Ky\Core\Formater\Output;
use Ky\Model\Intro;
use Ky\Model\IntroCat;
use Ky\Core\Core\Path;
use Ky\Core\Uid\Uid;


if(!empty($_POST)){
    $cid = $_POST['ccid'];
    unset($_POST['ccid']);
    $_POST['content'] = addslashes(htmlspecialchars($_POST['content']));
    
    if($_FILES['pic']['name']){
        $uid      = Uid::num();
        $ext      = Path::getFileExt($_FILES['pic']['name']);
        $fileName = IMG_PATH  . 'upload/' . $uid . '.' . $ext;
        move_uploaded_file($_FILES['pic']['tmp_name'],$fileName);
        $_POST['pic'] = IMG_HOST .'upload/' . $uid . '.' . $ext ;
    }

    if(0 == $_POST['id']){
        Intro::add($_POST);
    }else{
        Intro::update($_POST);
    }
    
    Output::iframeCallback(200,'添加成功','index.php?p=admin/intro_list&cid='.$cid);
    //header('Location:index.php?p=admin/intro_list&cid='.$cid);
}else{
    Output::iframeCallback(300,'添加失败');
}


