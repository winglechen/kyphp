<?php
//入口文件

error_reporting(1);
require(__DIR__ . '/../../lib/core/Dispatcher.php');

$config = array(
    'appname'               => 'company',
    'default_controller'    => 'Company',
    'default_action'        => 'index',
);
\Ky\Core\Core\Dispatcher::run(__DIR__.'/../../config/boot.php',$config);
