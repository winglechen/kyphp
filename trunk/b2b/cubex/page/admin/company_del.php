<?php
use Ky\Model\Company;
use Ky\Core\Formater\Output;

$id = $_GET['id'];

Company::delete($id);

//Output::iframeCallback(200,'添加成功','index.php?p=admin/intro_list&cid='.$cid);
header('Location:index.php?p=admin/company_list');

