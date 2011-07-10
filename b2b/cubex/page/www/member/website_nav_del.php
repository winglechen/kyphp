<?php
use Ky\Model\Mnav;
use Ky\Core\Formater\Output;
use Ky\Core\Core\Path;
use Ky\Core\Uid\Uid;

Mnav::delete($_GET['id']);

header('Location:index.php?p=www/member/website_nav_list');
