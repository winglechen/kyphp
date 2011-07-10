
<?php include 'header.php'; ?>
<script>
var PDV_PAGEID='275'; 
var PDV_RP='temp3/'; 
var PDV_COLTYPE='product'; 
var PDV_PAGENAME='query'; 
</script>

<div id='content' style='width:1002px;height:477px;background:#ffffff;margin:0px auto'>


<!-- 图片/FLASH -->

<div id='pdv_14547' class='pdv_class'  title='' style='width:1002px;height:12px;top:0px;left:0px; z-index:2'>
<div id='spdv_14547' class='pdv_content' style='overflow:hidden;width:100%;height:100%'>
<div class="pdv_border" style="margin:0;padding:0;height:100%;border:0px  solid;background:;">
	<div style="height:25px;margin:1px;display:none;background:;">
		<div style="float:left;margin-left:12px;line-height:25px;font-weight:bold;color:">
		
		</div>
		<div style="float:right;margin-right:10px;display:none">
		<a href="-1" style="line-height:25px;color:">更多</a>
		</div>
	</div>
<div style="padding:0px">


<img src="temp3/diy/pics/20100927/1285551387.jpg" border="0" width="100%" />

</div>
</div>

</div>
</div>

<!-- 产品分类（列表） -->

<div id='pdv_14545' class='pdv_class'  title='' style='width:253px;height:348px;top:12px;left:0px; z-index:8'>
<div id='spdv_14545' class='pdv_content' style='overflow:visible;width:100%;'>
<div class="pdv_border" style="border:0px;height:100%;padding:0;margin:0;">
<div style="height:100%;background:url(temp3/base/border/776/images/rbg.jpg) right repeat-y">
<div style="height:44px;border:0px;padding:0;margin:0;background:url(temp3/base/border/776/images/title.jpg) 0px 0px no-repeat">
</div>
<div style="margin:0px;padding:0px">

<link href="temp3/product/templates/css/productclass_dolphin.css" rel="stylesheet" type="text/css" />
<div class="productclass_dolphin">



<?php include __DIR__.'/../common/product_category.php'; ?>
 
</div>

</div>
</div>
</div>
<div style="margin-top:-9px;height:9px;line-height:9px;background:url(temp3/base/border/776/images/title.jpg) 0px -341px no-repeat">&nbsp;</div>
<div style="float:right;margin-top:-9px;width:10px;height:9px;line-height:9px;background:url(temp3/base/border/776/images/title.jpg) -243px -341px no-repeat">&nbsp;</div>

</div>
</div>

<!-- 产品检索搜索 -->

<div id='pdv_14552' class='pdv_class'  title='产品检索' style='width:696px;height:388px;top:89px;left:282px; z-index:12'>
<div id='spdv_14552' class='pdv_content' style='overflow:visible;width:100%;'>
<div class="pdv_border" style="margin:0;padding:0;height:100%;border:0px  solid;background:;">
	<div style="height:25px;margin:1px;display:none;background:;">
		<div style="float:left;margin-left:12px;line-height:25px;font-weight:bold;color:">
		产品检索
		</div>
		<div style="float:right;margin-right:10px;display:none">
		<a href="-1" style="line-height:25px;color:">更多</a>
		</div>
	</div>
<div style="padding:0px">

<link href="temp3/product/templates/css/productquery_dolphin.css" rel="stylesheet" type="text/css" />


<?php include __DIR__.'/../common/product_list2.php'; ?>

<script>
$(function() {
$().picFit("auto");
});
</script>
<div id="showpages" >
	  <?php echo $data['page']; ?>
 </div>

</div>
</div>

</div>
</div>

<!-- 当前位置提示条 -->

<div id='pdv_14551' class='pdv_class'  title='当前位置' style='width:756px;height:44px;top:12px;left:246px; z-index:13'>
<div id='spdv_14551' class='pdv_content' style='overflow:hidden;width:100%;height:100%'>
<div class="pdv_border" style="border:0px;background:url(temp3/base/border/788/images/title.jpg) no-repeat;padding:0px;margin:0px;height:100%;">
	<div style="float:right;height:100%;width:18px;background:url(temp3/base/border/788/images/title.jpg) -982px 0px no-repeat;"></div>
 
<link href="temp3/product/templates/css/nav.css" rel="stylesheet" type="text/css" />
<div id="nav">
您现在的位置：<a href="index.php">首页</a> 
 
&gt; <a href="temp3/product/" >产品展示</a> 

</div>

</div>

</div>
</div>
</div>

<?php include "footer.php"; ?>
