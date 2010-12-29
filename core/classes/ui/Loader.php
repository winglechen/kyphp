<?php
namespace Ky\Core\Ui;

/**
 *  前端 js,css Loader
 */
class Loader
{
    private $js     = array();
    private $css    = array();

    /**
     *  load resoures
     *
     *@var file string filename with path
     *@var mode string (sync | async | inline)
     *@var type string (css | js | img)
     *
     */
    public static function load($file,$mode="sync",$type)
    {
    
    }

    public static function loadJs($file,$mode)
    {
        return self::load($file,$mode,'js');
    }

    public static function loadCss($file,$mode)
    {
        return self::load($file,$mode,'css');
    }

    private static function getFileType($file)
    {
    
    }

}

