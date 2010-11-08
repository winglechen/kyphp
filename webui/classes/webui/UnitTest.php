<?php
namespace Ky\Webui;
use Ky\Core\ClassLoader;

require_once __DIR__ . '/../core/ClassLoader.php';
require_once 'PHPUnit/Framework/TestCase.php';

ClassLoader::init();
ClassLoader::register('ky\\core', __DIR__ . '/../core/');
ClassLoader::register('ky\\webui',__DIR__ );

class UnitTest extends \PHPUnit_Framework_TestCase{

}



