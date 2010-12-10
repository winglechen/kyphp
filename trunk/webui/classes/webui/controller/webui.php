<?php
/**
 *	The webui controller
 *
 */
namespace Ky\Webui\Controller;

class Webui
{
    public static function run()
    {
        echo 'I am the controller webui'; 
        
        $output = '';
        $suite  = null;
        $coms   = array();

        //get view
        $view = 'default.php';
        $layout = new Layout();
        $layout->parse($view);

        $suite = new Suite();
        $suite->initCom($layout->_coms);
        $suite->getData();
        $coms  = $suite->render();

        $layout->parseCom($coms);
        
        //do something else
        return $layout->_layout;
    }
}
