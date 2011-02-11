<?php
namespace Ky\Core;

//do class autoload
require_once __DIR__ .'/ClassLoader.php';

ClassLoader::init();
ClassLoader::register('ky\\core', __DIR__);
ClassLoader::register('ky\\Core\\Test', __DIR__ . '/../test/');

require_once 'PHPUnit/Framework/TestCase.php';

class UnitTest extends \PHPUnit_Framework_TestCase{

}
