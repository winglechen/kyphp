<?php
use Ky\Model\Config;
$cat =  Config::getOption('member_category','array',null,$_SESSION['id']);

?>

<?php
for($i=0,$cnt=count($cat); $i<$cnt; $i++){
   echo '<a href="index.php?p=product&cid='.$cat[$i]['id'].'" target="_self" class="productclass_dolphin">'.$cat[$i]['name'].'</a>';   
}
?>
 
