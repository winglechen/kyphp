<?php
use Ky\Model\Company;
use Ky\Model\Mset;

session_start();

if($_SESSION['checkNum'] != $_POST['checkNum']){
    header('Location:index.php?p=www/register');    
}

unset($_POST['checkNum']);
unset($_POST['passwordcheck']);
$password       = $_POST['password'];
$_POST['password'] = md5($_POST['password']);
$id = Company::add($_POST);

$_SESSION = $_POST;

$data = array(
    'username'  => $_POST['username'],
    'corpid'    => $id, 
);
$_SESSION['id'] = $id;
Mset::add($data);
$data = Company::login($_POST['username'],$password);
$_SESSION = $data;
header('Location:index.php?p=www/member/index'); 
