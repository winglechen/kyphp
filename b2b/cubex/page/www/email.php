<?php
use Ky\Model\Company;


$status = Company::emailValid($_GET['email']);

if($status){
    echo 0;
}else{
    echo 1;
}

exit;

