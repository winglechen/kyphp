<?php
use Ky\Model\Config;
if(!isset($cat)){   
    $cat =  Config::getOption('member_new_category','array',null,$_SESSION['id']);    
}

for($i=0,$cnt=count($cat); $i<$cnt; $i++){
   echo '<a href="index.php?p=news&cid='.$cat[$i]['id'].'" target="_self" class="newsclass_dolphin">'.$cat[$i]['name'].'</a>';   
}
?>
 

