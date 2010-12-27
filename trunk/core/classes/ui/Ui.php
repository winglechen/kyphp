<?php
namespace Ky\Core\Ui;

class Ui
{
    public function __construct()
    {
    
    }

    public static function display($view)
    {
        $Layout = new Layout($view);
        $Layout->parse();

        $comConf= $Layout->getComConfig();
        $Suite  = new Suite($comConf);
        $coms   = $Suite->$render();

        $output = $Layout->parseCom();


    }
}
