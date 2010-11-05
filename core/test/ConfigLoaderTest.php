<?php
use Ky\Core;
use Ky\Core\ConfigLoader;
use Ky\Core\UnitTest;

require_once __DIR__ . '/../classes/UnitTest.php';

class ConfigLoaderTest extends Ky\Core\UnitTest
{
        private $testIni;
        protected function setUp()
        {
                parent::setUp();
                $this->testIni = __DIR__ . '/data/test.ini';
        }

        protected function tearDown()
        {
                parent::teardown();
        }

        public function test_show_get_test_ini_file_ok()
        {
                $data = ConfigLoader::loadIni($this->testIni,true);

                //test cases
                $this->assertEquals(1,$data['first_section']['one'],'parse test ini fail.');

        }
}
