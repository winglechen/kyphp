<?php

namespace Ky\Core\Core;

class Form
{
    /**
     *  
     */
    public static function init($namespace=null)
    {
        //session_start();
        $page = isset($_POST['page']) ? $_POST['page'] : 'page';
        if(!empty($_POST)){
            $_POST[$page] = 1;
            $_SESSION['form']    = $_POST;
        }elseif(isset($_SESSION['form']) ){
            $_POST = $_SESSION['form']; 
            $_POST[$page] = isset($_GET[$page]) ? $_GET[$page] : 1;
        }

        if($namespace){
            return self::post($namespace);
        }
    }

    public static function post($namespace)
    {
       if(!isset($_POST['namespace']) || $namespace != $_POST['namespace']){
            $_POST = array();
       } 

       return $_POST;
    }
}
