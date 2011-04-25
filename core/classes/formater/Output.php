<?php
namespace Ky\Core\Formater;

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
    public static function jHeader($msg,$url)
    {
        echo '<script language="javascript">';
        echo 'alert("'.$msg.'");';
        echo 'window.location.href="'.$url.'"';
        echo '</script>';

        exit;
    }
}
