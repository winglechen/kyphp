<?php
/**
 *  layout
 *
 */
namespace Ky\Webui;

class Layout
{
    private $_viewname  = '';
    private $_blockname = '';
    private $_comname   = '';

    private function __construct()
    {
        $this->_viewname = $viewname;
    }


    public static function display($viewname)
    {
        $layout = new self($viewname); 
        $layout->show();
    }

    private static function show()
    {
    
    }
    
    protected function _extends($layout)
    {
    
    }

    protected function _block($block_name,$config=null)
    {
        
    }

    protected function _endblock()
    {
    
    }

    protected function _com($com_name,$config)
    {
    
    }

    protected function _endcom()
    {
    
    }

    protected function _include($filename)
    {
    
    }
}
