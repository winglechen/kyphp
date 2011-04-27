<?php
namespace Ky\model;

use Ky\Core\Core\Db;

class IntroCat
{
    public static function options($cid=0,$value=0)
    {
        $sql = "select * from intro_elements where ownerEl=".$cid;
        $data = Db::getRows($sql);

        $ret = '';
        for($i=0,$len=count($data); $i<$len; $i++){
            $ret .= "<option value='" . $data['Id'] . "' ";
            if($value == $data['Id']){
                $ret .= " selected ";
            }
            $ret .= " >" . $data['name'] . "</option>";
        }

        return $ret;
    }
}

?>
