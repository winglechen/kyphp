<?php
namespace Ky\Core\Store;

/**
 *  apc cache
 *
 */
class Apc
{
    public static function set($key, $value, $expire=0)
    {
        return apc_store($key, $value, $expire); 
    }

    public static function get($key)
    {
        return apc_fetch($key);
    }

    public static function remove($key=null)
    {
        if($key){
            apc_delete($key);
        }else{
            apc_clear_cache();
        }
    }
}
