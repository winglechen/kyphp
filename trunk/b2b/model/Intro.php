<?php
namespace Ky\Model;

use Ky\Core\Core\Db;

class Intro
{
    public static function add($data)
    {
        $sql = "insert into intro_news (". join(',',array_keys($data)) . ",ts) values(" . Db::addValues($data). ",".time().")";
        Db::query($sql);
    }

    public static function lists($where)
    {
    
    }

    public static function update($data)
    {
        $id = $data['id'];
        unset($data['id']);

        $sql = 'update intro_news set ' . Db::updateValues($data) . ' where id=' . $id;
        Db::query($sql);
    }

    public static function detail($id)
    {
        $sql = 'select * from intro_news where id='.$id;
        return Db::getRow($sql);
    }

    public static function delete($id)
    {
        $sql = "delete from intro_news where id=".$id;
        return Db::query($sql);
    }
}
