<?php
namespace Ky\Model;

use Ky\Core\Core\Db;
use Ky\Core\Core\Sql;

class Product
{
    private static $table = 'product';
    public static function add($data)
    {
        $sql = "insert into product (". join(',',array_keys($data)) . ",ts) values(" . Db::addValues($data). ",".time().")";
        Db::query($sql);
    }

    public static function lists($columns="*",$where=null,$data=array(),$page=false)
    {
        $sql  = 'select ' . $columns . ' from ' . self::$table . ' ' ;
        $sql .= Sql::where($where,$data);
         
        return Db::getRows($sql);       
    }
   
    public static function update($data)
    {
        $id = $data['id'];
        unset($data['id']);

        $sql = 'update product set ' . Db::updateValues($data) . ' where id=' . $id;
        Db::query($sql);
    }

    public static function detail($id)
    {
        $sql = 'select * from product where id='.$id;
        return Db::getRow($sql);
    }

    public static function delete($id)
    {
        $sql = "delete from product where id=".$id;
        return Db::query($sql);
    }
}
