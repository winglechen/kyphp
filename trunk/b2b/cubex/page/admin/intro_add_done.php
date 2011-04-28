<?php

use Ky\Model\Intro;
use Ky\Model\IntroCat;
use Ky\Core\Core\Path;
use Ky\Core\Uid\Uid;


if(!empty($_POST)){
    $cid = $_POST['ccid'];
    unset($_POST['ccid']);
    $_POST['content'] = addslashes(htmlspecialchars($_POST['content']));

    var_dump($_FILES);
    //file upload
    move_uploaded_file($_FILES['pic']['tmp_name'],'t.jpg'); 
    exit;
    if(0 == $_POST['id']){
        Intro::add($_POST);
    }else{
        Intro::update($_POST);
    }
    header('Location:index.php?p=admin/intro_list&cid='.$cid);
}


