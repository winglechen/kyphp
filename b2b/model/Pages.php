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
    
    public static function options($value=0,$returnArray=false)
    {
        $sql  = 'select * from pages';
        $data = Db::getRows($sql); 

        if($returnArray) return $data;

        $ret = '<select name="cid">';
        for($i=0,$len=count($data); $i<$len; $i++){
            $ret .= "<option value='" . $data[$i]['id'] . "' ";
            if($value == $data[$i]['id']){
                $ret .= " selected ";
            }
            $ret .= " >" . $data[$i]['name'] . "</option>";
        }
        $ret .= '</select>';
        return $ret;
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
