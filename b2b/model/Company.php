<?php
namespace Ky\Model;

use Ky\Core\Core\Db;

class Company
{
    public static function add($data)
    {
        $sql = "insert into company (". join(',',array_keys($data)) . ",ts) values(" . Db::addValues($data). ",".time().")";
        Db::query($sql);
    }

    public static function lists($where)
    {
    
    }
    
    public static function login($username,$password)
    {
        $password = md5($password);
        
        $fields = "*";
        $sql    = "select ".$fields." from company where username='{$username}' and password='{$password}'";

        return Db::getRow($sql);
    }

    public static function update($data)
    {
        $id = $data['id'];
        unset($data['id']);

        $sql = 'update company set ' . Db::updateValues($data) . ' where id=' . $id;
        Db::query($sql);
    }

    public static function detail($id)
    {
        $sql = 'select * from company where id='.$id;
        return Db::getRow($sql);
    }

    public static function delete($id)
    {
        $sql = "delete from company where id=".$id;
        return Db::query($sql);
    }
}
