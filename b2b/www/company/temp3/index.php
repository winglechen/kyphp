<?php include 'header.php'; ?>
<script>
var PDV_PAGEID='1'; 
var PDV_RP=''; 
var PDV_COLTYPE='index'; 
var PDV_PAGENAME='index'; 
</script>


<div id='content' style='width:1002px;height:426px;background:#ffffff;margin:0px auto'>


<!-- 图片/FLASH -->

<div id='pdv_13907' class='pdv_class'  title='' style='width:1002px;height:12px;top:0px;left:0px; z-index:2'>
<div id='spdv_13907' class='pdv_content' style='overflow:hidden;width:100%;height:100%'>
<div class="pdv_border" style="margin:0;padding:0;height:100%;border:0px  solid;background:;">
	<div style="height:25px;margin:1px;display:none;background:;">
		<div style="float:left;margin-left:12px;line-height:25px;font-weight:bold;color:">
		
		</div>
		<div style="float:right;margin-right:10px;display:none">
		<a href="temp3/-1" style="line-height:25px;color:">更多</a>
		</div>
	</div>
<div style="padding:0px">


<img src="temp3/diy/pics/20100927/1285551387.jpg" border="0" width="100%" />

</div>
</div>

</div>
</div>

<!-- HTML编辑区 -->

<div id='pdv_12539' class='pdv_class'  title='公司简介' style='width:320px;height:190px;top:35px;left:286px; z-index:7'>
<div id='spdv_12539' class='pdv_content' style='overflow:hidden;width:100%;height:100%'>
<div class="pdv_border" style="border:0px;height:100%;padding:0;margin:0;background:url(temp3/base/border/779/images/title.jpg) 0px 0px no-repeat">
<div style="height:44px;border:0px;padding:0;margin:0;background:url(temp3/base/border/779/images/title.jpg) 0px 0px no-repeat">
	<div style="float:right;width:33px;height:33px;background:url(temp3/base/border/779/images/title.jpg) -967px 0px no-repeat;"><a href="temp3/page/html/company.php" style="display:inline;"><img src="temp3/base/border/779/images/more.jpg" style="border:0px;padding-top:6px;"></a></div>
</div>
<div style="margin:0px;padding:0px">
<div style="PADDING-RIGHT: 2px"><img style="PADDING-LEFT: 10px; FLOAT: right" border=0 alt="" src="temp3/index/pics/20110113/201101131294883143531.jpg" /><font style="LINE-HEIGHT: 22px; FONT-FAMILY: Verdana,Arial,Helvetica,sans-serif; COLOR: #2e2e2e; FONT-SIZE: 12px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?php echo $_SESSION['data']['corpintro']; ?></font></div>
</div>
</div>

</div>
</div>

<!-- 自选产品列表 -->

<div id='pdv_10809' class='pdv_class'  title='' style='width:722px;height:144px;top:282px;left:265px; z-index:8'>
<div id='spdv_10809' class='pdv_content' style='overflow:hidden;width:100%;height:100%'>
<div class="pdv_border" style="margin:0;padding:0;height:100%;border:0px  solid;background:;">
	<div style="height:25px;margin:1px;display:none;background:;">
		<div style="float:left;margin-left:12px;line-height:25px;font-weight:bold;color:">
		
		</div>
		<div style="float:right;margin-right:10px;display:inline">
		<a href="index.php?p=product" style="line-height:25px;color:">更多</a>
		</div>
	</div>
<div style="padding:0px">

<link href="temp3/product/templates/css/productlist_roll.css" type="text/css" rel="stylesheet">
<script src="temp3/product/js/productlist_roll.js" type="text/javascript"></script>
<div  class="productlistx">
	<div class="rollproductlists">
		<div class="blkproductlistx">
			<div class="LeftButton" id="LeftArr1"></div>
			<div class="Cont" id="ISL_Cont_11" style="overflow:hidden;">

					<?php include __DIR__.'/../common/index_product_list2.php'; ?>

			</div>
			<div class="RightButton" id="RightArr1"></div>
<script language="javascript" type="text/javascript">
<!--//--><![CDATA[//><!--
var scrollPic_03 = new ScrollPic();
scrollPic_03.scrollContId   = "ISL_Cont_11"; //内容容器ID
scrollPic_03.arrLeftId      = "LeftArr1";//左箭头ID
scrollPic_03.arrRightId     = "RightArr1"; //右箭头ID

scrollPic_03.frameWidth     = 688;//显示框宽度
scrollPic_03.pageWidth      = 172; //翻页宽度

scrollPic_03.speed          = 10; //移动速度(单位毫秒，越小越快)
scrollPic_03.space          = 10; //每次移动像素(单位px，越大越快)
scrollPic_03.autoPlay       = true; //自动播放
scrollPic_03.autoPlayTime   = 3; //自动播放间隔时间(秒)

scrollPic_03.initialize(); //初始化
							
		//--><!]]>
</script>
		</div>
	</div>
</div>
<script>
$(function() {
$().picFit("auto");
});
</script>

</div>
</div>

</div>
</div>

<!-- 产品分类（列表） -->

<div id='pdv_13908' class='pdv_class'  title='' style='width:253px;height:348px;top:12px;left:0px; z-index:10'>
<div id='spdv_13908' class='pdv_content' style='overflow:visible;width:100%;'>
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

<!-- 图片/FLASH -->

<div id='pdv_13909' class='pdv_class'  title='' style='width:226px;height:49px;top:370px;left:12px; z-index:11'>
<div id='spdv_13909' class='pdv_content' style='overflow:hidden;width:100%;height:100%'>
<div class="pdv_border" style="margin:0;padding:0;height:100%;border:0px  solid;background:;">
	<div style="height:25px;margin:1px;display:none;background:;">
		<div style="float:left;margin-left:12px;line-height:25px;font-weight:bold;color:">
		
		</div>
		<div style="float:right;margin-right:10px;display:none">
		<a href="temp3/-1" style="line-height:25px;color:">更多</a>
		</div>
	</div>
<div style="padding:0px">


<a href=""><img src="temp3/diy/pics/20100927/1285552645.jpg" border="0" width="100%" /></a>

</div>
</div>

</div>
</div>

<!-- 文章列表 -->

<div id='pdv_14393' class='pdv_class'  title='' style='width:322px;height:200px;top:34px;left:644px; z-index:15'>
<div id='spdv_14393' class='pdv_content' style='overflow:hidden;width:100%;height:100%'>
<div class="pdv_border" style="border:0px;height:100%;padding:0;margin:0;background:url(temp3/base/border/778/images/title.jpg) 0px 0px no-repeat">
<div style="height:36px;border:0px;padding:0;margin:0;background:url(temp3/base/border/778/images/title.jpg) 0px 0px no-repeat">
	<div style="float:right;width:33px;height:36px;background:url(temp3/base/border/778/images/title.jpg) -967px 0px no-repeat;"><a href="index.php?p=news" style="display:inline;"><img src="temp3/base/border/778/images/more.jpg" style="border:0px;padding-top:6px;"></a></div>
</div>
<div style="margin:0px;padding:0px">

<link href="temp3/news/templates/css/newslist_time.css" rel="stylesheet" type="text/css" />
<ul class="newslist_time">

<?php include __DIR__.'/../common/index_new_list2.php'; ?>

</ul>

</div>
</div>

</div>
</div>

<!-- 空白边框 -->

<div id='pdv_14394' class='pdv_class'  title='' style='width:682px;height:40px;top:239px;left:286px; z-index:16'>
<div id='spdv_14394' class='pdv_content' style='overflow:hidden;width:100%;height:100%'>
<div class="pdv_border" style="border:0px;height:100%;padding:0;margin:0;background:url(temp3/base/border/777/images/title.jpg) 0px 0px no-repeat">
<div style="height:44px;border:0px;padding:0;margin:0;background:url(temp3/base/border/777/images/title.jpg) 0px 0px no-repeat">
	<div style="float:right;width:33px;height:33px;background:url(temp3/base/border/777/images/title.jpg) -967px 0px no-repeat;"><a href="index.php?p=product" style="display:inline;"><img src="temp3/base/border/777/images/more.jpg" style="border:0px;padding-top:6px;"></a></div>
</div>
<div style="margin:0px;padding:0px">
&nbsp;
</div>
</div>

</div>
</div>
</div>

<?php include "footer.php"; ?>
