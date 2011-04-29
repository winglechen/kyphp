<?php
namespace Ky\Model;

use Ky\Core\Core\Db;

class IntroCat
{
    public static function getChildren($cid=0)
    {
        $sql = "select * from intro_elements where ownerEl=".$cid." order by position asc";
        return Db::getRows($sql);
    }
    
    public static function getCids($cid=0)
    {
        $data = self::getChildren($cid);
        $cid  = array();
        foreach($data as $cat){
            $cid[] = $cat['Id'];
        }

        return $cid;
    }

    public static function options($cid=0,$value=0)
    {
        $data = self::getChildren($cid); 

        $ret = '<select name="cid">';
        for($i=0,$len=count($data); $i<$len; $i++){
            $ret .= "<option value='" . $data[$i]['Id'] . "' ";
            if($value == $data[$i]['Id']){
                $ret .= " selected ";
            }
            $ret .= " >" . $data[$i]['name'] . "</option>";
        }
        $ret .= '</select>';
        return $ret;
    }
}

?>
