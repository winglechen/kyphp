<?php


for($i=0,$cnt=count($cat); $i<$cnt; $i++){
   echo '<a href="index.php?p=news&cid='.$cat[$i]['id'].'" target="_self" class="newsclass_dolphin">'.$cat[$i]['name'].'</a>';   
}
?>
 

