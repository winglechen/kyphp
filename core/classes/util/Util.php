<?php
namespace Ky\Core;

class Util
{
	public static function term($msg = null) {
		if ($msg) {
			echo $msg;
		}
		if (function_exists('fastcgi_finish_request')) {
			fastcgi_finish_request();
		}
		exit;
	} 
    private static function base64encode($str)
    {
        $str = base64_encode($str);
        $str = str_replace(array('+','/','='),array('-','_',''),$str);
        return $str;
    }

    private static function base64decode($str)
    {
        $str = str_replace(array('-','_'),array('+','/'),$str);
        $mod4 = strlen($str) % 4;
        if ($mod4) {
            $str .= substr('====', $mod4);
        }
        return base64_decode($str);
    }

}
