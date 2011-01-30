<?php
namespace Ky\Core;

class Output
{
    public static function textarea($string)
    {
        return nl2br(str_replace(' ', '&nbsp;',htmlspecialchars($string)));
    }
    public static function javascript($string)
    {
        return addslashes(str_replace(array("\r","\n"),array("",""),$string));
    }
}
