<script language="javascript" src="temp1/product/js/selectbox.js"></script>
<div class="productsearchformzone">
<form id="productsearchform" method="get" action="temp1/product/class/index.php">
  
   <div class="productsearchform">
    <select name="catid" id="catid" class="box" style="display:none; background:#ffffff; width:132px; height:19px;">
      <option value="0" >请选择分类</option>
      
	  <option value='74'>实木系列橱柜</option><option value='115'>精品展示系列</option><option value='116'>烤漆系列橱柜</option><option value='121'>模压系列橱柜</option><option value='122'>面板和配件</option>
    
    </select> 
	<script>
	makeSelectBox('catid','temp1/');
	</script>
  </div>
    <div class="productsearchformleft">
    <input name="key" type="text" id="productsearchform_key" value="" style="width:81px;" class="inputtext">
  </div>
  <div class="productsearchform2">
  <input name="imageField" id="button" type="image" src="temp1/product/templates/images/searchr.jpg" >
  </div>
</form>
</div>
