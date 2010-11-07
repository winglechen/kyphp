<?php
namespace Ky\Core;

class Path
{
    private static $pathes = array();

    public static function register($key,$path)
    {
        self::$pathes[$key] = $path; 
    }

    public static function get($key)
    {
        return isset(self::$pathes[$key]) ? self::$pathes[$key] : '';
    }

    public static function getFileName($path)
    {
        $info = pathinfo($path);
        return basename($info['basename'],'.'.$info['extension']);
    }

    public static function getFileExt($path)
    {
        return pathinfo($path,PATHINFO_EXTENSION);
    }

    public static function getFileInfo($path)
    {
        return pathinfo($path);
    }
}
