<?php
use Ky\Model\Company;


$status = Company::usernameValid($_GET['name']);

if($status){
    echo 0;
}else{
    echo 1;
}

exit;

