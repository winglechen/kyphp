<?php
use Ky\Model\Qiugou;
use Ky\Core\Formater\Output;
use Ky\Core\Core\Path;
use Ky\Core\Uid\Uid;


if(!empty($_POST)){    
    $_POST['brief']  = Output::cut(strip_tags($_POST['detail']),100,'');
    $_POST['detail'] = addslashes(htmlspecialchars($_POST['detail']));
       
    if($_FILES['pic']['name']){
        echo 'upload pic';
        $uid      = Uid::num();
        $ext      = Path::getFileExt($_FILES['pic']['name']);
        $hash     = $uid % 100;
        $fileName = IMG_PATH  . 'upload/' . $hash . '/' . $uid . '.' . $ext;
        move_uploaded_file($_FILES['pic']['tmp_name'],$fileName);
        echo $fileName;
        $_POST['pic'] = IMG_HOST .'upload/' .  $hash . '/'  . $uid . '.' . $ext ;
    }
      
    if(0 == $_POST['id']){
        Qiugou::add($_POST);
    }else{
        Qiugou::update($_POST);       
    }
    
}

header('Location:index.php?p=www/member/qiugou_list');