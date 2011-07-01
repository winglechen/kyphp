<?php
use Ky\Model\Company;


$status = Company::emailValid($_GET['name']);

if($status){
    echo 0;
}else{
    echo 1;
}

exit;

