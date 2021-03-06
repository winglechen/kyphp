<?php
namespace Ky\Cubex\Controller;

class Intro
{
    private static $act = '';
    public static function run($action)
    {
        self::prepare($action);
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

}
