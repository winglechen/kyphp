<?php
use Ky\Core\Formater\Output;
use Ky\Model\Product;
use Ky\Core\Core\Path;
use Ky\Core\Uid\Uid;

$ids = $_GET['id']; 

Product::unchecked($ids);

Output::navTabCallback(200,'审核成功','index.php?p=admin/product_check');


