<?php
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
        //$this->layout = new Layout();
        //$this->output = $this->layout->_layout;
        //$this->coms   = $this->layout->_coms;

        //$this->suite  = new Suite();
    }

    protected function tearDown()
    {
    
    }

    public static function test_should_invoke_com()
    {
    
    }
}
