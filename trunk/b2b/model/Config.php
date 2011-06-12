<?php
namespace Ky\Model;

use Ky\Core\Core\Db;

/**
 *  配置管理类
 */
class Config
{
    private static $config = array();
    /**
     *  
     *@var tableName
     *@var option : array | json | option | checkbox | radio
     *@var pid 
     *@var default 
     */
    public static function getOption($tableName,$option='array',$default=null,$pid=-1)
    {
        $data = self::getTableData($tableName,$pid);
        
        return self::format($data,$option,$default);
    }
    
    public static function getTree($tableName,$option='array',$default=null,$pid=-1)
    {
        $data = self::getTableData($tableName,$pid);
        
        return self::_formatSingleOption($data,$default);
    }
    
    public static function getValue($tableName,$value,$pid=-1)
    {
        $data = self::getOption($tableName,'array',null,$pid);
        foreach($data as $row){
            if($value == $row['id']){
                return $row;    
            }    
        }
        
        return array();
    }
    
    public static function add($table,$data)
    {
        $sql = "insert into " .$table." (". join(',',array_keys($data)) . ") values(" . Db::addValues($data). " ) ";
        Db::query($sql);
    }
    
    public static function update($table,$data)
    {
        $id = $data['id'];
        unset($data['id']);
    
        $sql = 'update ' .$table. ' set ' . Db::updateValues($data) . ' where id=' . $id;
        Db::query($sql);
    }
    
    private static function format($data,$option,$default)
    {
        $option = strtolower($option);
        if('array' == $option) return $data;
        switch($option){
            case 'array':
                return $data;
                break;
            case 'json':
                return self::formatJson($data,$default);
                break;
            case 'option':
                return self::formatOption($data,$default);
                break;
            default:
                return '';    
        }
    }
    
    private static function formatJson($data,$default)
    {
        return json_encode($data);
    }
    
    private static function formatOption($data,$default)
    {
        if(is_array($default)){
            return self::formatMultiOption($data,$default);    
        }else{
            return self::formatSingleOption($data,$default);    
        }
    }
    
    private static function formatMultiOption($data,$default)
    {
        $ret = '';
        $default = array_flip($default);
        
        foreach($data as $option){
            $ret .= '<option value="' .$option['name']. '"';
            if(isset($default[$option['name']])){
                $ret .= ' selected="selected" ';   
            } 
            $ret .= ' >'.$option['name'].'</option>';
        }
        
        return $ret;
    }
    
    private static function formatSingleOption($data,$default)
    {
        $ret = '';
        foreach($data as $option){
            $ret .= '<option value="' .$option['name']. '"';
            if($default == $option['name']){
                $ret .= ' selected="selected" ' ;   
            } 
            $ret .= ' >'.$option['name'].'</option>' ;  
        }
        
        return $ret;
    }
    
    private static function _formatSingleOption($data,$default)
    {
        $ret = '';
        foreach($data as $option){
            $ret .= '<option value="' .$option['id']. '"';
            if($default == $option['id']){
                $ret .= ' selected="selected" ' ;   
            } 
            $ret .= ' >'.$option['name'].'</option>' ;  
        }
        
        return $ret;
    }
    
    private static function formatCheckbox($data,$default)
    {
        $ret = '';
        
        if(!is_array($default)){
            $default = array($default);       
        }        
        $default = array_flip($default);
        
        foreach($data as $option){
            $ret .= '<input type="checkbox" value="' .$data['name']. '"';
            if(isset($default[$data['name']])){
                $ret .= ' selected="selected" ' ;   
            } 
            $ret .= ' >'.$data['name'].'</option>' ;  
        }
        
        return $ret;
    }
    
    private static function formatRadio($data,$default)
    {
        $ret = '';
    }
    
    private static function getTableData($tableName,$pid=-1)
    {
        $data = array();
        if(array_key_exists($tableName,self::$config)) {
            if(-1 == $pid){
                $data = self::$config[$tableName];
            }else{
                if(isset(self::$config[$tableName][$pid])){
                    $data =  self::$config[$tableName][$pid];   
                }
            }  
        }
        
        if(empty($data)){
            $data = self::getFromDb($tableName,$pid);
        }
        
        return $data;
    }
    
    private static function getFromDb($tableName,$pid=-1)
    {
        $sql = 'select * from ' . $tableName;
        
        if(-1 != $pid){
            $sql .= ' where pid=' . $pid; 
            if(!isset(self::$config[$tableName])){
                self::$config[$tableName] = array();    
            }
            self::$config[$tableName][$pid] = Db::getRows($sql);  
            return self::$config[$tableName][$pid];
        }else{
           self::$config[$tableName] = Db::getRows($sql);
           return self::$config[$tableName]; 
        }    
    }
} 