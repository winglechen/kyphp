<?php
use Ky\Model\Mnav;
use Ky\Core\Formater\Output;
use Ky\Core\Core\Path;
use Ky\Core\Uid\Uid;


if(!empty($_POST)){    
    if(0 == $_POST['id']){
        if(0 == $_POST['urltype']){
            $data = array(
            'name'     => $_POST['name'],
            'url'      => $_POST['url'],
            );
        }elseif(1 == $_POST['urltype']) {
            $data = array(
                'name'     => $_POST['name'],
                'url'      => 'index.php?p=product&cid='.$_POST['pid'],
            );
        }elseif(2 == $_POST['urltype']) {
            $data = array(
                'name'     => $_POST['name'],
                'url'      => 'index.php?p=news&nid='.$_POST['pid'],
            );
        }elseif(3 == $_POST['urltype']) {
            $data = array(
                'name'     => $_POST['name'],
                'url'      => 'index.php?p=news&pid='.$_POST['pid'],
            );
        }
        Mnav::add($data);
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
