<?php
use Ky\Webui;
use Ky\Core\Path;
use Ky\Webui\UnitTest;
use Ky\Webui\Dispatcher;

require_once __DIR__ . '/../webui/UnitTest.php';

class DispatcherTest extends UnitTest
{
    private $dsp = null;

    public function setUp()
    {
        $_GET['controller'] = 'test';
        $this->dsp = new Dispatcher();
    }

    public function test_get_controller_without_router_ok()
    {
        $this->assertEquals('test',$this->dsp->controller,'without router dispatcher get controller fail ');
    }
    
    public function test_config_path_store_ok()
    {
        $path = realpath(__DIR__ . '/../../conf/') . '/';
        $this->assertEquals($path,Path::get('config'),'store config path fail');
    }

}
