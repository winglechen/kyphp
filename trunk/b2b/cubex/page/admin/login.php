<?php
use Ky\Core\Core\Db;
use Ky\Core\Formater\Output;

session_start();

$sql  = "select * from admin_member where name='{$_POST['name']}' and password='{$_POST['password']}' ";
$data = Db::getRow($sql);
header("Content-type:text/html;charset=UTF-8;");
if(empty($data)){
    Output::jHeader('登陆失败，请重试！','login.php');
}else{
    $_SESSION['name'] = $data['name'];
    //Output::jHeader('登陆成功！','index.php');
    header('Location:index.php');
}
