<script language="javascript" src="common/selectbox.js"></script>
<div class="newssearchformzone">
<form id="newssearchform" method="get" action="temp1/news/class/index.php">
  <div class="newssearchform">
    <select name="catid" id="catid" class="box" style="display:none; background:#ffffff; width:132px; height:19px;">
      <option value="0" >请选择分类</option>
	  <option value='86'>公司动态</option><option value='99'>行业新闻</option><option value='105'>橱柜指南</option>
    </select> 
	<script>
	makeSelectBox('catid','temp1/');
	</script>
  </div>
	<div class="newssearchformleft">
    <input name="key" type="text" id="newssearchform_key" value="" style="width:81px;" class="inputtext">
  </div>
  <div class="newssearchform2">
  <input name="imageField" id="button" type="image" src="temp1/news/templates/images/searchr.jpg" >
  </div>
</form>
</div>
