<?php
use Ky\Model\Company;
use Ky\Model\Mset;

session_start();

if($_SESSION['checkNum'] != $_POST['checkNum']){
    header('Location:index.php?p=www/register');    
}

unset($_POST['checkNum']);
unset($_POST['passwordcheck']);
$_POST['password'] = md5($_POST['password']);


$id = Company::add($_POST);
$_SESSION = $_POST;

$data = array(
    'username'  => $_POST['username'],
    'corpid'    => $id, 
);
Mset::add($data);
header('Location:index.php?p=www/member/index'); 
