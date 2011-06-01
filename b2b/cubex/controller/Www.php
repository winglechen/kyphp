<?php
namespace Ky\Cubex\Controller;

class Www
{
    private static $act = '';
    public static function run($action)
    {
        session_start();
        self::prepare($action);        
        self::dispatch();    
    }

    private static function parseEnv()
    {
        if(strpos(self::$act,'/member/')){
            $_GET['env'] = 'member';    
        }else{
            $_GET['env'] = 'www'; 
        }
    }
    
    private static function parseModule()
    {
        if('member' == $_GET['env']){
            if(strpos(self::$act,'/product')){
                $_GET['module'] = 'product';  
            }elseif(strpos(self::$act,'/company')){
                $_GET['module'] = 'company';  
            }elseif(strpos(self::$act,'/qiugou')){
                $_GET['module'] = 'qiugou';  
            }elseif(strpos(self::$act,'/inquire')){
                $_GET['module'] = 'inquire';  
            }elseif(strpos(self::$act,'/account')){
                $_GET['module'] = 'account';              
            }else{
               $_GET['module'] = 'www';  
            }   
        }
    }

    private static function parseUrl()
    {
        self::parseEnv();
        self::parseModule();      
        
    }
    
    private static function checkLogin()
    {
        if(isset($_SESSION['username'])){
            $_GET['login'] = true;    
        }else{
            $_GET['login'] = false;
        }
        
        if('member' == $_GET['env'] && !$_GET['login']){
            $_GET['env']    = 'www';
            $_GET['p'] = self::$act  = 'www/login';
        }
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
        
        self::parseUrl();
        self::checkLogin();
    
    }

    private static function dispatch()
    {
        require(CUBEX_PATH . 'page/' . rtrim(self::$act) . '.php');
    }

}
