<?php
namespace Ky\Core;

class Path
{
    private static $pathes = array();

    public static function register($key,$path,$isLocal=true)
    {
        //get realpath for local directory
        $realPath = ($isLocal) ? realpath($path) : $path;

        //add slash 
        if('/' != substr($realPath,-1)){
            $realPath .= '/';
        }

        self::$pathes[$key] = $realPath; 
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
