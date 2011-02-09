<?php
namespace Ky\Core\Store;
/**
 * file Cache
 *
 *
 */
class File
{
    private static $dir     = '/tmp/kycache';
    private static $level   = 2;
    private static $expire  = 300;
    private static $suffix  = '.kc';
    private static $init    = false;
    
    public static function init()
    {
        self::$init = true;
        $mode = octdec(0755);

        if(!is_dir(self::$dir)){
            mkdir(self::$dir,$mode,true);
        }

        if(1 == self::$level){
            return;
        }
        
        for($i=0; $i<16; $i++){
            for($j=0; $j<16; $j++){
                $dir = self::$dir . decbin($i) . '/' . decbin($j) . '/';
                mkdir($dir,$mode);
                if(self::$level > 2){
                    for($k=0; $k<16; $k++){
                        for($l=0; $l<16; $l++){
                            $dir .= decbin($k) . '/' . decbin($l) . '/';
                            mkdir($dir,$mode);
                        }
                    }
                }
            }
        }
    }

    public static function setCachePath($dir)
    {
        self::$dir = rtrim($dir,'/') . '/';
    }

    public static function setDirectoryLevel($level)
    {
        self::$level = $level;
    }

    public static function get($key)
    {
        $key = self::getPath($key);

        //check the data expire
        if(time() > filemtime($key)){
            return null;
        }
        return file_get_contents($key);
    }

    private static function getPath($key)
    {
        $dir = '';
        switch(self::$level){
        case 1:
            return self::$dir . $key . self::$suffix;
        case 2:
            $md5    = md5($key);
            $hash   = substr($md5,0,2);
            return self::$dir . '/' . $hash . '/' . $key . self::$suffix;
        case 3:
            $md5    = md5($key);
            $hash   = substr($md5,0,2) . '/' . substr($md5,2,2);
            return self::$dir . '/' . $hash . '/' . $key . self::$suffix;
        default:
            return self::$dir . $key . self::$suffix;
        }
    }
    public static function set($key,$value,$expire=300)
    {
        $mtime = time() + (int)$expire;
        $key = self::getPath($key);
        file_put_contents($key,$value);
        touch($key,$mtime);
    }
}
