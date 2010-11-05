<?php
namespace Ky\Core;

class Path
{
        private static $pathes = array();

        public static register($key,$path)
        {
                self::$pathes[$key] = $path; 
        }

        public static get($key)
        {
                return isset(self::$pathes[$key]) ? self::$pathes[$key] : '';
        }
}
