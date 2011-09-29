<?php
use Ky\Model\Mset;
use Ky\Core\Formater\Output;
use Ky\Core\Core\Path;
use Ky\Core\Uid\Uid;

if(!empty($_POST)){    
    Mset::update($_POST);          
}

header('Location:index.php?p=www/member/website_setting_seo');
