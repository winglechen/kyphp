<?php
namespace Ky\Core\Parser;

class Sql
{
    public static $instance = null;

    protected $sql      = '';
    protected $rw       = 'r';           //区分读写操作
    protected $fields   = array();       //多表多字段 join的处理
    protected $table    = array();
    protected $where    = array();
    protected $join     = array();

    public function init()
    {
        $this->sql      = '';
        $this->rw       = 'r';
        $this->fields   = array();
        $this->table    = array();
        $this->where    = array();
        $this->join     = array();
    }
    
    //singleton instance
    public static function getInstance()
    {
        if(null == static::$instance){
            $class = __CLASS__;
            static::$instance = new $class();
        }
        static::$instance->init();
    }
    
    //public static interface
    public static function select($type='mysql')
    {
        $Parser = __NAMESPACE__ . '\\' . ucfirst($type);
        self::$instance = $Parser::getInstance();
        
        return self::$instance;
    }
    public static function insert($type='mysql')
    {
        $Parser = __NAMESPACE__ . '\\' . ucfirst($type);
        self::$instance = $Parser::getInstance();
        
        return self::$instance;
    }
    public static function update($type='mysql')
    {
        $Parser = __NAMESPACE__ . '\\' . ucfirst($type);
        self::$instance = $Parser::getInstance();
        
        return self::$instance;
    
    }
    public static function delete($type='mysql')
    {
        $Parser = __NAMESPACE__ . '\\' . ucfirst($type);
        self::$instance = $Parser::getInstance();
        
        return self::$instance;
    }

    public static function get($table,$key){}
    public static function set($table,$key,$value){}

    //public interface
    public function table()
    {
        $this->table = func_get_args();
        return $this;
    }

    public function fields($fields="*")
    {
       $this->fields[] = $fields;
       return $this;
    }

    public function data($data)
    {
        $this->data = $data;
        return $this;
    }

    public function wheres($arr,$fields)
    {
    
    }

    public function where($where)
    {
        $this->where[] = $where;
        return $this;
    }

}
