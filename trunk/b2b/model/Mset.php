<?php
namespace Ky\Model;

use Ky\Core\Core\Db;
use Ky\Core\Core\Sql;
use Ky\Core\Core\Page;

class Mset
{
    private static $table = 'company_setting';
    private static $data  = array();
    public static function add($data)
    {
        $sql = "insert into company_setting (". join(',',array_keys($data)) . ") values(" . Db::addValues($data). ")";
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
        //@self::add($data);
        $sql = 'update company_setting set ' . Db::updateValues($data) . ' where corpid='.$_SESSION['id'] ;
        Db::query($sql);
    }
    
    public static function detail()
    {
        if(!empty(self::$data)){
            return self::$data;
        }
        $sql = 'select * from company_setting where corpid='.$_SESSION['id'];
        self::$data = @Db::getRow($sql);

        return  self::$data;
    }
    
    public static function detailByNick($nick)
    {
        if(!empty(self::$data)){
            return self::$data;
        }
        $sql = "select * from company_setting where username='".$nick."'";
        self::$data = @Db::getRow($sql);

        return  self::$data;
    }
    
    public static function delete($id)
    {
        $sql = "delete from company_setting where id=".$id;
        return Db::query($sql);
    }
}
