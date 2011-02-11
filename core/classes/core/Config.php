<?php
namespace Ky\Core;

class Config
{
    private static $config = array();

    public static function loadIni($filename,$process_section=false,$scanner_mode=false)
    {
        //get file name
        $name = Path::getFileName($filename);
        $filename = realpath($filename);
        self::$config[$name] = parse_ini_file($filename,$process_section,$scanner_mode);
    }
    
    public static function get($key)
    {
        $keys = explode('/',$key);
        $result = null;
        for($i=0,$cnt=count($keys); $i<$cnt; $i++){
            if($i==0 && isset(self::$config[$keys[0]])){
                $result = self::$config[$keys[0]];
            }elseif(!empty($keys[$i]) && isset($result[$keys[$i]])){
                $result = $result[$keys[$i]];
            }else{
                $result = null;
                break;
            }
        }
        return $result;
    }

    public static function set($key,$value)
    {
    
    }
}
