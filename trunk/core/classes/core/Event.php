<?php
namespace Ky\Core\Core;

/**
 *  ui事件驱动管理
 */
class Event
{
    private $event  = array();
    private $group  = array();

    public function register($evt){}
    public function bind($evt,$func,$caller=null){}
    public function unbind($evt,$func){}

    /**
     *
     */
    public function fire($evt)
    {
    }

    public function group($evt,$group){}
    public function ungroup($evt,$group){}
}
