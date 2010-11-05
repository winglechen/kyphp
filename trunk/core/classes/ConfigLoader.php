<?php
namespace Ky\Core;

class ConfigLoader
{
        public static function loadIni($filename,$process_section=false,$scanner_mode=false)
        {
                return parse_ini_file($filename,$process_section,$scanner_mode);
        }
        
}
