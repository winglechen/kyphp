<?php
namespace Ky\Core;

/**
 *  注册表类
 */
class Register
{
    private $data   = array();

    public static function set($key,$value)
    {
        self::$data[$key] = $value;
    }

    public static function get($key)
    {
        if(isset(self::$data[$key])){
            return self::$data[$key];
        }

        return null;

    }

    public static function clear($key=null)
    {
        if($key == null){
            self::$data = array();
        }else{
            if(isset(self::$data[$key])){
                unset(self::$data[$key]);
            }
        }
    }
}
