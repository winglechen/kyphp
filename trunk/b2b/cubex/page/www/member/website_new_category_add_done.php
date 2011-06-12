<?php
use Ky\Model\Config;

if(!empty($_POST)){ 
    if(0 == $_POST['id']){
        Config::add('member_new_category',$_POST);
    }else{
        Config::update('member_new_category',$_POST);       
    }
    
}

header('Location:index.php?p=www/member/website_new_category_list');