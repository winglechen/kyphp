<?php
namespace Ky\Model;

/**
 *  model 接口类
 */
class Model
{
    /**
     * singleton interface
     */
    protected static $instance      = null;
    public static function instance()
    {
        if(null == static::$instance){
            $c = __CLASS__;
            static::$instance = new $c();
        }

        return static::$instance;
    }

    /**
     *  grud operations
     */
    public function lists(){}
    public function detail(){}
    public function add(){}
    public function modify(){}
    public function delete(){}


    /**
     *  generate unique id
     */
    public function uid(){}

}
