<?php
//入口文件

require(__DIR__ . '/../../lib/core/Dispatcher.php');

$config = array(
    'appname'               => 'company',
    'default_controller'    => 'Company',
    'default_action'        => 'company/index',
);
\Ky\Core\Core\Dispatcher::run(__DIR__.'/../../config/boot.php',$config);
