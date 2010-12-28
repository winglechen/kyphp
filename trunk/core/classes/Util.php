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
}
