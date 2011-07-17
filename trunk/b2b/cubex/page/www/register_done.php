<?php
use Ky\Model\Company;
use Ky\Model\Mset;
use Ky\Model\Mnav;
use Ky\Model\Mpage;
use Ky\Core\Core\Db;

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



$sql = "insert into company_page(corpid,name,detail) values
	(".$id.",'公司荣誉','公司荣誉'),"
   ."(".$id.",'加入我们','加入我们'),"
   ."(".$id.",'发展历程','发展历程')";
Db::query($sql);

$sql = "select * from company_page where corpid=".$id;
$pages = Db::getRows($sql);


$host = 'http://'.$_POST['username'].'.ztb2b.com/index.php';
$sql1 = "insert into company_nav(corpid,name,url) values";
$sql2 = "insert into company_nav2(corpid,name,url) values";



foreach($pages as $page){
	$sql1 .= "(".$id.",'".$page['name']."','".$host.'?p=page&id='.$page['id']."'),";
	$sql2 .= "(".$id.",'".$page['name']."','".$host.'?p=page&id='.$page['id']."'),";
}

$sql1 .= "(".$id.",'关于我们','".$host."?p=about'),";
$sql1 .= "(".$id.",'联系我们','".$host."?p=contact')";


$sql2 .= "(".$id.",'关于我们','".$host."?p=about'),";
$sql2 .= "(".$id.",'联系我们','".$host."?p=contact')";




Db::query($sql1);
Db::query($sql2);

header('Location:index.php?p=www/member/index'); 
