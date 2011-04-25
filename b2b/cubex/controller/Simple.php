<?php
namespace Ky\Cubex\Controller;

class Simple
{
    private static $act = '';
    public static function run($action)
    {
        self::prepare($action);
        if('admin/login' !== self::$act){
            self::checkLogin();
        }
        self::dispatch();    
    }

    private static function prepare($action)
    {
        $act = '';
        if(!isset($_GET['p'])){
            if(!$action){
                die('wrong parameter');
            }
            $act = $action;
        } else {
            $act = $_GET['p'];
        }

        self::$act = $act;
    
    }

    private static function dispatch()
    {
        
        require(CUBEX_PATH . 'page/' . rtrim(self::$act) . '.php');
    }

    private static function checkLogin()
    {
        session_start();
        if(!isset($_SESSION['name']) || empty($_SESSION['name']) ){
            header('Location:login.php');
            exit;
        }
    }
}
