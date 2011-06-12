<?php
use Ky\Model\Mpage;
use Ky\Core\Formater\Output;
use Ky\Core\Core\Path;
use Ky\Core\Uid\Uid;


if(!empty($_POST)){    
    $_POST['brief']  = Output::cut(strip_tags($_POST['detail']),100,'');
    $_POST['detail'] = addslashes(htmlspecialchars($_POST['detail']));
       

    if(0 == $_POST['id']){
        Mpage::add($_POST);
    }else{
        Mpage::update($_POST);       
    }
    
}

header('Location:index.php?p=www/member/website_page_list');