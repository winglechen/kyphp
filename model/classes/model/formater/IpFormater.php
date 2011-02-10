<?php
namespace Ky\Core\Formater;

class IpFormater implements Formater
{
    public static function input($str)
    {
        return ip2long($str);
    }

    public static function output($str)
    {
        return long2ip($str);
    }
}

