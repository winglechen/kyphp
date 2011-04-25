<?php
namespace Ky\Cubex\Controller;

class Simple
{
    public static function run($action)
    {
        $act = '';
       if(!isset($_GET['p'])){
            if(!$action){
                return false;
            }
            $act = $action;
       } else {
            $act = $_GET['p'];
      }
       require(CUBEX_PATH . 'page/' . rtrim($act) . '.php');
    }
}
