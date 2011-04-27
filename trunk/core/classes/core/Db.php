<?php
namespace Ky\Core\Core;

use Ky\Core\Store\PdoMysql;

class Db
{
    private static $link = false;

    private static function connect()
    {
        $config = Config::get('db');
        if(!$config){
            die('can\'t get db config data');
        }
        self::$link = mysql_connect($config['hostname'],$config['username'],$config['password']);
        mysql_select_db($config['database'],self::$link);
        mysql_query('set names utf8',self::$link);
    }

    public static function query($sql)
    {
        if(false === self::$link) self::connect();

        return mysql_query($sql,self::$link);
    }

    public static function getRow($sql)
    {
        if(false === self::$link) self::connect();
        
        $query = self::query($sql);
        return mysql_fetch_assoc($query);
    }

    public static function getRows($sql)
    {
        if(false === self::$link) self::connect();
    
        $query = self::query($sql);
        $row   = array();
        while($row[] = mysql_fetch_assoc($query)) ;
        array_pop($row);

        return $row;
    }

    public static function addValues($data)
    {
       $ret  = "'";
       $ret .= join("','",array_values($data));
       $ret .= "'";
       return $ret;
    }

    public static function updateValues($data)
    {
        $ret = "";
        foreach($data as $k => $v){
            $ret .= " set " . $k . "='" . $v . "',";
        }
        $ret = rtrim($ret,';');

        return $ret;
    }
}
