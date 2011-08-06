<?php
use Ky\Model\Product;

$data = Product::detail($_GET['id']);

echo $data['detail'];
