<?php
//入口文件
//require_once('../../cubex/page/admin/main.php');

require(__DIR__ . '/../../lib/core/Dispatcher.php');

$config = array(
    'appname'               => 'www',
    'default_controller'    => 'Www',
    'default_action'        => 'www/index',
);

\Ky\Core\Core\Dispatcher::run(__DIR__.'/../../config/boot.php',$config);
