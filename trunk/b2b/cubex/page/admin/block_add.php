<?php
$type = strtolower($_GET['btype']);
$path = $type.'_block.php';
require($path);

