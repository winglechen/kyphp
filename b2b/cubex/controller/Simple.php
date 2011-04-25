<?php
namespace Ky\Cubex\Controller;

class Simple
{
    public static function run()
    {
       if(!isset($_GET['p'])) return false;
       require(CUBEX_PATH . 'page/' . rtrim($_GET['p'],'/') . '.php');
    }
}
