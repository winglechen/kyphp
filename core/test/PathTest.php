<?php
use Ky\Core;
use Ky\Core\UnitTest;
use Ky\Core\Path;

require_once __DIR__ . '/../classes/UnitTest.php';

class PathTest extends UnitTest
{
    public function test_path_register_local_path_and_get_ok()
    {
        $test_dir = __DIR__;
        $real_dir = realpath(__DIR__) . '/';
        Path::register('test',$test_dir);
        $this->assertEquals($real_dir,Path::get('test'),'local path register fail');
    }

    public function test_path_register_url_path_and_get_ok()
    {
        $test_dir = "http://82rs.com";
        $real_dir = "http://82rs.com/";
        Path::register('url',$test_dir,false);
        $this->assertEquals($real_dir,Path::get('url'),'url path register fail');
    }

    public function test_get_filename_ok()
    {
        $file = '/usr/local/test.php';
        $filename = 'test';
        $this->assertEquals($filename,Path::getFileName($file),'path tools get file name fail');
    }
}

