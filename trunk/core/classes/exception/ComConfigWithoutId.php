<?php
namespace Ky\Core\Exception;
class ComConfigWithoutId extends \Exception
{
    public function __construct($layout='',$config=array())
    {
        parent::__construct('the layout ' . $layout . ' has a com config do not has id defined ');
    }
}
