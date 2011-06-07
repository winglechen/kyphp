<?php
//入口文件

var_dump($_SERVER);
require(__DIR__ . '/../../lib/core/Dispatcher.php');

$config = array(
    'appname'               => 'company',
    'default_controller'    => 'company',
    'default_action'        => 'company/index',
);

\Ky\Core\Core\Dispatcher::run(__DIR__.'/../../config/boot.php',$config);
