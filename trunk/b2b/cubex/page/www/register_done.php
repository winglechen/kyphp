<?php
use Ky\Model\Company;

session_start();

if($_SESSION['checkNum'] != $_POST['checkNum']){
    header('Location:index.php?p=www/register');    
}

unset($_POST['checkNum']);
unset($_POST['passwordcheck']);
$_POST['password'] = md5($_POST['password']);


Company::add($_POST);
$_SESSION = $_POST;
header('Location:index.php?p=www/member/index'); 
