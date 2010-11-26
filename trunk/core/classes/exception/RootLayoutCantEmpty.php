<?php
namespace Ky\Core\Exception;

class RootLayoutCantEmpty extends \Exception
{
    public function __construct()
    {
        parent::__construct('根布局模板文件不能为空！');
    }
}
