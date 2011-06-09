<?php 
namespace Ky\Cubex\Controller;


/**
 *  配置信息http接口
 */
class Company
{
    private static $act = '';
    public static function run($action)
    {
        self::prepare($action);
        self::dispatch();    
    }

    private static function prepare($action)
    {
        self::getAction($action);
        self::getCompanyNick();
    }

    private static function getCompanyNick()
    {
        $host = strtolower(trim($_SERVER['SERVER_NAME']));
        $nick = substr($host,0,strpos($host,"."));
        $_GET['nick'] = $nick;
    }
    
    private static function getAction($action)
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