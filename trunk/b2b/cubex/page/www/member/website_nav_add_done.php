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
                'urltype'  => 0,
            );
        }elseif(1 == $_POST['urltype']) {
            $data = array(
                'name'     => $_POST['name'],
                'url'      => 'index.php?p=product&cid='.$_POST['pid'],
                'urltype'  => 1,
            );
        }elseif(2 == $_POST['urltype']) {
            $data = array(
                'name'     => $_POST['name'],
                'url'      => 'index.php?p=news&nid='.$_POST['pid'],
                'urltype'  => 2,
            );
        }elseif(3 == $_POST['urltype']) {
            $data = array(
                'name'     => $_POST['name'],
                'url'      => 'index.php?p=page&id='.$_POST['pid'],
                'urltype'  => 3,
            );
        }
       
        $data['corpid'] = $_SESSION['id'];
        Mnav::add($data);
    }else{
        $data = array(
            'id'    => $_POST['id'],
            'name'    => $_POST['name'],
            'url'    => $_POST['url'],
        );
        Mnav::update($data);
		echo mysql_error();
    }
    
}
header('Location:index.php?p=www/member/website_nav_list');
