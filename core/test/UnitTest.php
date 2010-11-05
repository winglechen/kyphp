<?php
namespace Ky\Core;

//do class autoload
require_once __DIR__ . '/ClassLoader.php';
ClassLoader::init();
ClassLoader::register::('ky\\core', __DIR__);

require_once 'PHPUNIT/Framework/TestCase.php';

class UnitTest extends \PHPUnit_Framework_TestCase{

}
