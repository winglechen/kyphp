<?php
namespace Ky\Core\Core;

use Ky\Core\Core\Db;

class Sql
{
    public static function where($where,$data)
    {
        if(!$where) return ''; 
        $ret = ' where 1 ';
        
        foreach($where as $column => $con){
            if(isset($data[$column]) && !empty($data[$column])){
                $ret .= self::$con($column,$data[$column]); 
            }
        }
        return $ret;
    }
       
    public static function nq($column,$data)
    {
        return ' and ' . $column . ' <> ' . $data . ' ';
    }
    
    public static function eq($column,$data)
    {
        return ' and ' . $column . ' = ' . $data . ' ';
    }
    
    public static function in($column,$data)
    {
        return ' and ' . $column . ' in (' . Db::addValues($data) . ') ';
    }
    
    public static function gt($column,$data)
    {
        return ' and ' . $column . ' > ' . $data . ' ';
    }
    public static function lt($column,$data)
    {
        return ' and ' . $column . ' < ' . $data . ' ';
    }
    
    public static function ge($column,$data)
    {
        return ' and ' . $column . ' >= ' . $data . ' ';
    }
    
    public static function le($column,$data)
    {
        return ' and ' . $column . ' <= ' . $data . ' ';
    }
    public static function fulltext($column,$data)
    {
        return ' and ' . $column . ' <= ' . $data . ' ';
    }
    public static function like($column,$data)
    {
        return " and " . $column . " like '%" . $data . "%' ";
    }      
}