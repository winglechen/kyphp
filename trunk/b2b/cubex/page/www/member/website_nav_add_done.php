<?php
use Ky\Model\Mnav;
use Ky\Core\Formater\Output;
use Ky\Core\Core\Path;
use Ky\Core\Uid\Uid;


if(!empty($_POST)){    
    if(0 == $_POST['id']){
        
        Mnav::add($_POST);
    }else{
        $data = array(
            'id'    => $_POST['id'],
            'name'    => $_POST['name'],
            'url'    => $_POST['url'],
        );
        Mnav::update($_POST);       
    }
    
}

header('Location:index.php?p=www/member/website_page_list');
