<?php
namespace Ky\Core;

class Config
{
    private static $config = array();

    public static function loadIni($filename,$process_section=false,$scanner_mode=false)
    {
         return parse_ini_file($filename,$process_section,$scanner_mode);
    }
    
    public static function get($key)
    {
    
    }

    public static function set($key,$value)
    {
    
    }
}
