<?php
namespace Ky\Core\Db;

class Db
{
    private $sql    = array();
    private $model  = null;
    private $joining= false;

    public static $instance = null;
    public static function getInstance()
    {
        if(null == self::$instance){
            $class = __CLASS__;
            self::$instance = new $class();
        }
        return self::$instance->init();
    }
    
    public static function instance($table)
    {
        $obj = self::getInstance();
        return $obj->table($table);
    }

    public static function insert($table)
    {
        $obj = self::instance($table);
        return $obj->action('insert');
    }

    public static function select($table)
    {
        $obj = self::instance($table);
        return $obj->action('insert');
    }

    public static function update($table)
    {
        $obj = self::instance($table);
        return $obj->action('update');
    }

    public static function delete($table)
    {
        $obj = self::instance($table);
        return $obj->action('delete');
    }

    private function init()
    {
        $this->sql      = array();
        $this->model    = null;
        $this->joining  = false;

        return $this;
    }

    public function table($table)
    {
        if(!$table) return $this;
        $this->sql['table'] = $table;
        return $this;
    }

    public function action($action='select')
    {
        $this->sql['action'] = $action;
        return $this;
    }


    public function where($where)
    {
    
    }

    public function data($data)
    {
    
    }

    public function join($table,$where,$type='inner')
    {
    
    }

    public function orderBy($order)
    {
    
    }

    public function groupBy($group)
    {
    
    }

    /**
     *  limit 操作
     *
     *@var $start   int 
     *@var $num     int 获取数量
     *@var $relNum  int 实际获取数量
     */
    public function limit($start,$num,$relNum)
    {
    
    }

    public function execute($filter=null,$type='row')
    {
        //
    }
}
