<?php
use Ky\Core;
use Ky\Core\UnitTest;
use Ky\Core\Page;

require_once __DIR__ . '/../classes/UnitTest.php';

class PageTest extends UnitTest
{
    public function test_default_style_work_fine()
    {
        $pageExpect = <<< EOD
<a href="#">首&nbsp;&nbsp;页</a>
<<< EOD;
    }
}
