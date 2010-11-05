<?php
namespace Ky\Core;

class ConfigLoader
{
        public static function loadIni($filename,$process_mode=false,$scanner_mode=false)
        {
                return parse_ini_file($filename,$process_section,$scannermode);
        }
        
}
