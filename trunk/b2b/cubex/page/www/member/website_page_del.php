<?php
use Ky\Model\Mpage;
use Ky\Core\Formater\Output;
use Ky\Core\Core\Path;
use Ky\Core\Uid\Uid;


       
if(isset($_GET['id'])){
    Mpage::delete($_GET['id']);
}
    

header('Location:index.php?p=www/member/website_page_list');
