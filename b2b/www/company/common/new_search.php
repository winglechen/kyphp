<?php
use Ky\Model\Config;
$cat =  Config::getOption('member_new_category','array',null,$_SESSION['id']);

?>

<script language="javascript" src="common/selectbox.js"></script>
<div class="newssearchformzone">
<form id="newssearchform" method="post" action="index.php?p=news">
  <div class="newssearchform">
    <select name="cid" id="catid" class="box" style="display:none; background:#ffffff; width:132px; height:19px;">
      <option value="0" >请选择分类</option>
<?php

for($i=0,$cnt=count($cat); $i<$cnt; $i++){
   echo '<option value="'.$cat[$i]['id'].'" >'.$cat[$i]['name'].'</option>';   
}
?>

    </select> 
	<script>
	makeSelectBox('catid','temp1/');
	</script>
  </div>
	<div class="newssearchformleft">
    <input name="name" type="text" id="newssearchform_key" value="" style="width:81px;" class="inputtext">
  </div>
  <div class="newssearchform2">
  <input  id="button" type="image" src="temp1/news/templates/images/searchr.jpg" >
  </div>
</form>
</div>
