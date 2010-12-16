<?php
namespace Ky\Core\Test;

use Ky\Core;
use Ky\Core\Ui;
use KY\Core\Ui\Layout;
use Ky\Core\UnitTest;

require_once __DIR__ . '/../classes/UnitTest.php';

class SuiteTest extends UnitTest
{
    private $output         = '';
    private $layout         = null;
    private $suite          = null;
    private $coms           = array();
    protected function setUp()
    {
        parent::setUp();
        $this->coms = array();
    }

    protected function tearDown()
    {
    
    }

    public function test_should_invoke_com()
    {
    
    }

    public function test_should_throw_class_not_found_exception_when_com_class_is_wrong()
    {
    
    }

    public function test_should_getUrl_Data_work()
    {
    
    }
    
    public function test_should_invoke_com_callback_work()
    {
    
    }

    public function test_should_parse_layout_ok()
    {
    
    }
}
