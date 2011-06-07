<?php
namespace Ky\Model;

use Ky\Core\Core\Db;

class Product
{
    public static function add($data)
    {
        $sql = "insert into product (". join(',',array_keys($data)) . ",ts) values(" . Db::addValues($data). ",".time().")";
        Db::query($sql);
    }

    public static function lists($where)
    {
    
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
