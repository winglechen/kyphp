<?php 
namespace Ky\Cubex\Controller;

use Ky\Model\Mset;


/**
 *  配置信息http接口
 */
class Company
{
    private static $act = '';
    public static function run($action)
    {
        session_start();
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
        self::getCompanySetting();
    }

    private static function getCompanySetting()
    {
        $data = Mset::detailByNick($_GET['nick']); 
        $_SESSION['id']         = $data['corpid'];
        $_SESSION['setting']    = $data;
        $_GET['corpid']         = $data['corpid'];
        $_GET['temp']           = $data['temp'];
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
        $act = 'temp' . $_GET['temp'] . '/' . self::$act;

        require(APP_PATH . 'www/company/' . rtrim($act) . '.php');
    }

}
