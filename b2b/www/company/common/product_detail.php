<?php
use Ky\Model\Product;

$data = Product::detail($_GET['id']);

echo htmlspecialchars_decode(stripslashes($data['detail']));
