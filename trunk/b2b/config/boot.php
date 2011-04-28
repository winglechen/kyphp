<?php
$dir    = __DIR__;


//path define
define('APP_PATH',                  $dir.'/../');
define('LIB_PATH',                  $dir.'/../lib/');
define('CONFIG_PATH',               $dir.'/../config/');
define('CUBEX_PATH',                $dir.'/../cubex/');
define('GLIDER_PATH',               $dir.'/../glider/');
define('IMG_HOST',                  'http://192.168.158.129/frame/kyphp/b2b/www/html/upload/');
define('IMG_PATH',                  $dir.'/../www/html/upload/');

return array(
    'namespace'    => array(
        'ky\\core'      => LIB_PATH,
        'ky\\cubex'     => CUBEX_PATH,
        'ky\\glider'    => GLIDER_PATH,
        'ky\\model'     => APP_PATH . 'model',
    ),
    'config'        => array(
        'db'            => 'db.ini',
    ),        

);



