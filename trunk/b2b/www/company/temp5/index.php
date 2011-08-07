<?php include "header.php"; ?>
<script>
var PDV_PAGEID='1'; 
var PDV_RP=''; 
var PDV_COLTYPE='index'; 
var PDV_PAGENAME='index'; 
</script>



<div id='content' style='width:1002px;height:455px;background:url(temp5/effect/source/bg/cbg.jpg);margin:0px auto'>


<!-- 自选产品列表 -->

<div id='pdv_20949' class='pdv_class'  title='' style='width:728px;height:204px;top:200px;left:250px; z-index:3'>
<div id='spdv_20949' class='pdv_content' style='overflow:hidden;width:100%;height:100%'>
<div class="pdv_border" style="border:0px;height:100%;padding:0;margin:0;background:url(temp5/base/border/789/images/title.jpg) 0px 0px no-repeat;">
<div style="height:36px;border:0px;padding:0;margin:0;background:url(temp5/base/border/789/images/title.jpg) 0px 0px no-repeat;">
	<div style="float:right;width:48px;height:36px;background:url(temp5/base/border/789/images/title.jpg) -680px 0px no-repeat;"><a href="index.php?p=product" style="display:inline;"><img src="temp5/base/border/789/images/more.jpg" style="border:0px;padding-top:15px;" /></a></div>
</div>
<div style="margin:0px;padding:0px;">

<link href="temp5/product/templates/css/productlist_cyrano_lef.css" rel="stylesheet" type="text/css" />

<div class="productlist_cyrano_lef">
<div id="demo">
 <table align=left cellpadding=0 cellspace=0 border=0>
  	<tr>
		<td id="demo1" valign=top>
  			<table border=0 cellpadding=0 cellspacing=0>
  				<tr>

<?php include __DIR__.'/../common/index_product_list4.php'; ?>


				</tr>
  			</table>
 		</td>
		<td id="demo2" valign=top></td>
	</tr>
</table>

</div>
</div>


<script>
$(function() {
$().picFit("auto");
});
</script>

<script>
	var speed=20;
	var GD=document.getElementById('demo'); 
	var GD1=document.getElementById('demo1');
	var GD2=document.getElementById('demo2');
	GD2.innerHTML=GD1.innerHTML;
	function Marquee(){
		if(GD2.offsetWidth-GD.scrollLeft<=0){
			GD.scrollLeft-=GD1.offsetWidth;
		}else{
			GD.scrollLeft++;
		}
	}
	var MyMar=setInterval(Marquee,speed);
	GD.onmouseover=function() {clearInterval(MyMar);}
	GD.onmouseout=function() {MyMar=setInterval(Marquee,speed);}
</script>

</div>
</div>

</div>
</div>

<!-- 产品分类（列表） -->

<div id='pdv_22026' class='pdv_class'  title='' style='width:210px;height:267px;top:13px;left:9px; z-index:7'>
<div id='spdv_22026' class='pdv_content' style='overflow:visible;width:100%;'>
<div class="pdv_border" style="border:0px;height:100%;padding:0;margin:0;background:url(temp5/base/border/781/images/lbg.jpg) repeat-y;">
<div style="height:100%;background:url(temp5/base/border/781/images/rbg.jpg) right repeat-y;">
<div style="height:48px;border:0px;padding:0;margin:0;background:url(temp5/base/border/781/images/title.jpg) 0px 0px no-repeat;">
</div>
<div style="margin:0px;padding:0px;">

<link href="temp5/product/templates/css/productclass_dolphin.css" rel="stylesheet" type="text/css" />
<div class="productclass_dolphin">


<?php include __DIR__.'/../common/product_category.php'; ?>
 
</div>

</div>
</div>
</div>
<div style="margin-top:-15px;height:15px;line-height:15px;background:url(temp5/base/border/781/images/title.jpg) 0px -252px no-repeat">&nbsp;</div>
<div style="float:right;margin-top:-15px;width:10px;height:15px;line-height:15px;background:url(temp5/base/border/781/images/title.jpg) -200px -252px no-repeat">&nbsp;</div>

</div>
</div>

<!-- HTML编辑区 -->

<div id='pdv_22030' class='pdv_class'  title='公司简介' style='width:439px;height:220px;top:18px;left:251px; z-index:8'>
<div id='spdv_22030' class='pdv_content' style='overflow:hidden;width:100%;height:100%'>
<div class="pdv_border" style="border:0px;height:100%;padding:0;margin:0;background:url(temp5/base/border/783/images/title.jpg) 0px 0px no-repeat;">
<div style="height:25px;border:0px;padding:0;margin:0;background:url(temp5/base/border/783/images/title.jpg) 0px 0px no-repeat;">
	<div style="float:right;width:49px;height:25px;background:url(temp5/base/border/783/images/title.jpg) -390px 0px no-repeat;"><a href="#" style="display:inline;"><img src="temp5/base/border/783/images/more.jpg" style="border:0px;padding-top:13px;" /></a></div>
</div>
<div style="margin:0px;padding:0px;">
<div style="PADDING-LEFT: 4px; PADDING-RIGHT: 7px; PADDING-TOP: 20px"><img style="PADDING-RIGHT: 8px; FLOAT: left" border=0 alt="" src="temp5/index/pics/20101230/201012301293690998359.jpg" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
<div style="LINE-HEIGHT: 22px; PADDING-LEFT: 8px; FONT-FAMILY: Verdana,Arial,Helvetica,sans-serif; COLOR: #696969; FONT-SIZE: 12px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
    <?php echo $_SESSION['data']['corpintro']; ?>    
</div></div>
</div>
</div>

</div>
</div>

<!-- HTML编辑区 -->

<div id='pdv_23323' class='pdv_class'  title='自定内容' style='width:210px;height:165px;top:290px;left:9px; z-index:14'>
<div id='spdv_23323' class='pdv_content' style='overflow:visible;width:100%;'>
<div class="pdv_border" style="border:0px;height:100%;padding:0;margin:0;background:url(temp5/base/border/788/images/lbg.jpg) repeat-y;">
<div style="height:100%;background:url(temp5/base/border/788/images/rbg.jpg) right repeat-y;">
<div style="height:48px;border:0px;padding:0;margin:0;background:url(temp5/base/border/788/images/title.jpg) 0px 0px no-repeat;">
</div>
<div style="margin:0px;padding:0px;">
<div style="PADDING-BOTTOM: 27px; PADDING-LEFT: 22px; PADDING-RIGHT: 0px; FONT: 12px/18px simsun; COLOR: #5c5c5c; PADDING-TOP: 18px">
    <?php include __DIR__.'/../common/company_contact.php'; ?>
</div>
</div>
</div>
</div>
<div style="margin-top:-15px;height:15px;line-height:15px;background:url(temp5/base/border/788/images/title.jpg) 0px -252px no-repeat">&nbsp;</div>
<div style="float:right;margin-top:-15px;width:10px;height:15px;line-height:15px;background:url(temp5/base/border/788/images/title.jpg) -200px -252px no-repeat">&nbsp;</div>

</div>
</div>

<!-- 文章图片+标题+摘要 -->

<div id='pdv_23324' class='pdv_class'  title='图片新闻' style='width:252px;height:80px;top:70px;left:725px; z-index:15'>
<div id='spdv_23324' class='pdv_content' style='overflow:hidden;width:100%;height:100%'>
<div class="pdv_border" style="margin:0;padding:0;height:100%;border:0px  solid;background:;">
	<div style="height:25px;margin:1px;display:none;background:;">
		<div style="float:left;margin-left:12px;line-height:25px;font-weight:bold;color:">
		图片新闻
		</div>
	</div>
<div style="padding:0px">

<link href="temp5/news/templates/css/newspicmemo.css" rel="stylesheet" type="text/css" />
<!--ul class="newspicmemo">

<li>

<div class="picFit" style="width:92px;height:58px">
<a href="temp5/news/html/?410.html" target="_self" ><img src="temp5/news/pics/20101230/1293674976.jpg" border="0" style="width:92px;height:58px" /></a>
</div>
<div class="tm">
<a href="temp5/news/html/?410.html" target="_self" class="title"   >召开2010年度经济</a>
<div class="memo">
召开2010年度经济工作会议暨企业文化头脑风暴会
</div>
</div>

</li>

</ul>
<script>
$(function() {
$().picFit("fill");
});
</script-->


</div>
</div>

</div>
</div>

<!-- 空白边框 -->

<div id='pdv_23325' class='pdv_class'  title='' style='width:268px;height:39px;top:17px;left:712px; z-index:16'>
<div id='spdv_23325' class='pdv_content' style='overflow:hidden;width:100%;height:100%'>
<div class="pdv_border" style="border:0px;height:100%;padding:0;margin:0;background:url(temp5/base/border/785/images/title.jpg) 0px 0px no-repeat;">
<div style="height:36px;border:0px;padding:0;margin:0;background:url(temp5/base/border/785/images/title.jpg) 0px 0px no-repeat;">
	<div style="float:right;width:49px;height:36px;background:url(temp5/base/border/785/images/title.jpg) -219px 0px no-repeat;"><a href="temp5/news/class/" style="display:inline;"><img src="temp5/base/border/785/images/more.jpg" style="border:0px;padding-top:14px;" /></a></div>
</div>
<div style="margin:0px;padding:0px;">
&nbsp;
</div>
</div>

</div>
</div>

<!-- 文章列表 -->

<div id='pdv_23326' class='pdv_class'  title='' style='width:252px;height:88px;top:64px;left:727px; z-index:17'>
<div id='spdv_23326' class='pdv_content' style='overflow:hidden;width:100%;height:100%'>
<div class="pdv_border" style="margin:0;padding:0;height:100%;border:0px  solid;background:;">
	<div style="height:25px;margin:1px;display:none;background:;">
		<div style="float:left;margin-left:12px;line-height:25px;font-weight:bold;color:">
		
		</div>
		<div style="float:right;margin-right:10px;display:inline">
		<a href="temp5/news/class/" style="line-height:25px;color:">更多</a>
		</div>
	</div>
<div style="padding:0px">

<link href="temp5/news/templates/css/newslist.css" rel="stylesheet" type="text/css" />
<ul class="newslist">
<?php include __DIR__.'/../common/index_new_list.php'; ?>
</ul>

</div>
</div>

</div>
</div>
</div>
<?php include "footer.php"; ?>
