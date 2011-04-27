<?php
$dir    = __DIR__;


//path define
define('APP_PATH',                  $dir.'/../');
define('LIB_PATH',                  $dir.'/../lib/');
define('CONFIG_PATH',               $dir.'/../config/');
define('CUBEX_PATH',                $dir.'/../cubex/');
define('GLIDER_PATH',               $dir.'/../glider/');

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



