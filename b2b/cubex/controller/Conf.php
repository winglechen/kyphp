<?php 
namespace Ky\Cubex\Controller;

use Ky\Model\Config;

/**
 *  配置信息http接口
 */
class Conf
{
    public static function run($action)
    {
         $tableName = $_GET['t'];
         $pid       = isset($_GET['pid']) ? $_GET['pid'] : -1;
         $option    = 'json'; 
         echo Config::getOption($tableName,$option,null,$pid);
         exit;  
    }
}