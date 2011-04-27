<?php
namespace Ky\Core\Uid;

class Uid
{
    private static $generator   = null;
    /**
     *  生成uid的工厂方法
     */
    public static function generate($type)
    {
    
    }
    
    public static function regenerate($uid,$type)
    {
    
    }

    public static function num()
    {
        $time = explode(' ', microtime());
        $id = $time[1] . sprintf('%06u', substr($time[0], 2, 6));
        $id .= substr(sprintf('%010u', mt_rand()), 0, 4);
        return $id;
    }
}
