<?php
namespace Ky\Core\Store;

/**
 *  eAccelerator Cache
 *
 */
class Ea
{
   public static function set($key, $value, $expire=0)
   {
        return $expire ? eaccelerator_put($key,$value,$expire) : eaccelerator_put($key,$value);
   }
   public static function get($key)
   {
        return eaccelerator_get($key);
   }
   public static function remove($key)
   {
        if($key){
        
        }else{
            self::clear();
        }
   }

   private static function clear()
   {
        $infos = eaccelertor_list_keys();
        if(is_array($infos)){
            foreach($infos as $info){
                if(!eaccelerator_rm($info)){
                    return false;
                }
            }
        }
        return true;
   }
}
