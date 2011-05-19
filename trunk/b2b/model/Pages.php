<?php
namespace Ky\Model;

use Ky\Core\Core\Db;

class Pages
{
    public static function add($data)
    {
        $sql = "insert into pages (". join(',',array_keys($data)) . ",ts) values(" . Db::addValues($data). ",".time().")";
        Db::query($sql);
    }

    public static function lists($where)
    {
    
    }

    public static function update($data)
    {
        $id = $data['id'];
        unset($data['id']);

        $sql = 'update pages set ' . Db::updateValues($data) . ' where id=' . $id;
        Db::query($sql);
    }

    public static function detail($id)
    {
        $sql = 'select * from pages where id='.$id;
        return Db::getRow($sql);
    }

    public static function delete($id)
    {
        $sql = "delete from pages where id=".$id;
        return Db::query($sql);
    }
}
