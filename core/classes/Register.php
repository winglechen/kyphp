<?php
namespace Ky\Core;

use Ky\Core\Store\Gcache;

/**
 *  注册表类
 */
class Register
{
    public static function set($key,$value)
    {
        return Gcache::set($key,$value);
    }

    public static function get($key)
    {
        return Gcache::get($key);
    }

    public static function remove($key=null)
    {
        return Gcache::remove($key);
    }
}
