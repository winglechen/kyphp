
<script language="javascript" src="common/selectbox.js"></script>
<div class="productsearchformzone">
<form id="productsearchform" method="post" action="index.php?p=product">
  
   <div class="productsearchform">
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
    <div class="productsearchformleft">
    <input name="productName" type="text" id="productsearchform_key" value="" style="width:81px;" class="inputtext">
  </div>
  <div class="productsearchform2">
  <input  id="button" type="image" src="temp1/product/templates/images/searchr.jpg" >
  </div>
</form>
</div>
