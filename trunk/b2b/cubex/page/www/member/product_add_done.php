<?php
use Ky\Model\Company;
session_start();

if(!empty($_POST)){
    
    
    if(0 == $_POST['id']){
        Company::add($_POST);
    }else{
        Company::update($_POST);
        $_SESSION = $_SESSION + $_POST;
        $tmp = array_merge($_SESSION,$_POST);
        $_SESSION = $tmp;
       
    }
    
}

header('Location:index.php?p=www/member/company_main');