<?php
namespace Ky\Model;

use Ky\Core\Core\Db;
use Ky\Core\Core\Sql;
use Ky\Core\Core\Page;

class Supply
{
    private static $table = 'supply';
    public static function add($data)
    {
        $sql = "insert into supply (". join(',',array_keys($data)) . ",ts) values(" . Db::addValues($data). ",".time().")";
        Db::query($sql);
    }
    
    public static function lists($columns="*",$where=null,$data=array(),$page=false)
    {
        $sql  = 'select ' . $columns . ' from ' . self::$table . ' ' ;
        $where  = Sql::where($where,$data);
        
        $page = self::page($where,$page);    
         
        $sql .= $where . ' ' . $page['sql'];
        $data = Db::getRows($sql);       

        return array(
            'data'  => $data,
            'page'  => $page['data'],
        );
    }
    
    private static function page($where,$page)
    {
        if(!$page) return array(
            'sql'   => '',
            'data'  => ''
        );
        
        $sql = ' limit ' . ($page['curPage'] - 1)*$page['numPerPage'] . ',' . $page['numPerPage'];

        $page['nums'] = self::getQueryNums($where); 
        $page = Page::show($page);

        return array(
            'sql'   => $sql,
            'data'  => $page
        );
    }

    public static function getQueryNums($where)
    {
        $sql    = 'select count(1) as num from ' . self::$table . ' ' . $where;
        $data   = Db::getRow($sql);
        return $data['num'];
    }
    
    public static function update($data)
    {
        $id = $data['id'];
        unset($data['id']);
    
        $sql = 'update supply set ' . Db::updateValues($data) . ' where id=' . $id;
        Db::query($sql);
    }
    
    public static function detail($id)
    {
        $sql = 'select * from supply where id='.$id;
        return Db::getRow($sql);
    }
    
    public static function delete($id)
    {
        $sql = "delete from supply where id=".$id;
        return Db::query($sql);
    }
}
