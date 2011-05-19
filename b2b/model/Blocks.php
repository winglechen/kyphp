<?php
namespace Ky\Model;

use Ky\Core\Core\Db;

class Block 
{
    public static function add($data)
    {
        $sql = "insert into block (". join(',',array_keys($data)) . ",ts) values(" . Db::addValues($data). ",".time().")";
        Db::query($sql);
    }

    public static function lists($where)
    {
    
    }

    public static function update($data)
    {
        $id = $data['id'];
        unset($data['id']);

        $sql = 'update block set ' . Db::updateValues($data) . ' where id=' . $id;
        Db::query($sql);
    }

    public static function detail($id)
    {
        $sql = 'select * from block where id='.$id;
        return Db::getRow($sql);
    }

    public static function listByBlock($bid)
    {
	$sql = 'select * from block where blockId='.$bid;
        return Db::getRows($sql);
    }

    public static function listByPage($pid)
    {
	$sql = 'select * from block where pageId='.$pid;
        return Db::getRows($sql);

    }

    public static function delete($id)
    {
        $sql = "delete from block where id=".$id;
        return Db::query($sql);
    }
}
