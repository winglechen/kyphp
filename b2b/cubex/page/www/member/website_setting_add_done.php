<?php
use Ky\Model\Mset;
use Ky\Core\Formater\Output;
use Ky\Core\Core\Path;
use Ky\Core\Uid\Uid;


if(!empty($_POST)){    
       
    if($_FILES['logo']['name']){
        $uid      = Uid::num();
        $ext      = Path::getFileExt($_FILES['logo']['name']);
        $hash     = $uid % 100;
        $fileName = IMG_PATH  . 'upload/' . $hash . '/' . $uid . '.' . $ext;
        move_uploaded_file($_FILES['logo']['tmp_name'],$fileName);
        $_POST['logo'] = IMG_HOST .'upload/' .  $hash . '/'  . $uid . '.' . $ext ;
    }
    
    if($_FILES['img']['name']){
        $uid      = Uid::num();
        $ext      = Path::getFileExt($_FILES['img']['name']);
        $hash     = $uid % 100;
        $fileName = IMG_PATH  . 'upload/' . $hash . '/' . $uid . '.' . $ext;
        move_uploaded_file($_FILES['img']['tmp_name'],$fileName);
        $_POST['img'] = IMG_HOST .'upload/' .  $hash . '/'  . $uid . '.' . $ext ;
    }
    
    if($_FILES['banner']['name']){
        $uid      = Uid::num();
        $ext      = Path::getFileExt($_FILES['banner']['name']);
        $hash     = $uid % 100;
        $fileName = IMG_PATH  . 'upload/' . $hash . '/' . $uid . '.' . $ext;
        move_uploaded_file($_FILES['banner']['tmp_name'],$fileName);
        $_POST['banner'] = IMG_HOST .'upload/' .  $hash . '/'  . $uid . '.' . $ext ;
    }

    Mset::update($_POST);          
    
    header('Location:index.php?p=www/member/website_setting_add');
}

