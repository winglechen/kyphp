<?php
use Ky\Model\Company;

session_start();

$data = Company::login($_POST['username'],$_POST['password']);


if($data){
    $_SESSION = $data;
    header('Location:index.php?p=www/member/index'); 
}else{
    header("location:index.php?p=www/login");
}



