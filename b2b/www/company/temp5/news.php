
<?php include "header.php"; ?>
<script>
var PDV_PAGEID='2'; 
var PDV_RP='temp5/'; 
var PDV_COLTYPE='news'; 
var PDV_PAGENAME='query'; 
</script>

<div id='content' style='width:1002px;height:582px;background:url(temp5/effect/source/bg/cbg.jpg);margin:0px auto'>


<!-- 产品分类（列表） -->

<div id='pdv_23531' class='pdv_class'  title='' style='width:210px;height:267px;top:13px;left:9px; z-index:6'>
<div id='spdv_23531' class='pdv_content' style='overflow:visible;width:100%;'>
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

<!-- 产品搜索表单 -->

<div id='pdv_23529' class='pdv_class'  title='产品搜索' style='width:210px;height:174px;top:290px;left:9px; z-index:12'>
<div id='spdv_23529' class='pdv_content' style='overflow:visible;width:100%;'>
<div class="pdv_border" style="border:0px;height:100%;padding:0;margin:0;background:url(temp5/base/border/787/images/lbg.jpg) repeat-y;">
<div style="height:100%;background:url(temp5/base/border/787/images/rbg.jpg) right repeat-y;">
<div style="height:48px;border:0px;padding:0;margin:0;background:url(temp5/base/border/787/images/title.jpg) 0px 0px no-repeat;">
</div>
<div style="margin:0px;padding:0px;">
<link href="temp1/product/templates/css/product_searchform_dolphin.css" rel="stylesheet" type="text/css" />

<?php
    include __DIR__ . '/../common/product_search.php';
?>

</div>
</div>
</div>
<div style="margin-top:-15px;height:15px;line-height:15px;background:url(temp5/base/border/787/images/title.jpg) 0px -252px no-repeat">&nbsp;</div>
<div style="float:right;margin-top:-15px;width:10px;height:15px;line-height:15px;background:url(temp5/base/border/787/images/title.jpg) -200px -252px no-repeat">&nbsp;</div>

</div>
</div>

<!-- 当前位置提示条 -->

<div id='pdv_23541' class='pdv_class'  title='新闻检索' style='width:730px;height:36px;top:13px;left:250px; z-index:13'>
<div id='spdv_23541' class='pdv_content' style='overflow:hidden;width:100%;height:100%'>
<div class="pdv_border" style="border:0px;height:100%;padding:0;margin:0;background:url(temp5/base/border/792/images/title.jpg) 0px 0px no-repeat">
	<div style="float:left;font:14px/32px Simsun;color:#000;padding-left:47px;">新闻检索</div>
 
<link href="temp5/news/templates/css/nav.css" rel="stylesheet" type="text/css" />
<div id="nav">
您现在的位置：<a href="index.php">首页</a> 
 
&gt; 新闻中心 

</div>
<div class="img"></div>

</div>

</div>
</div>

<!-- 文章翻页检索 -->

<div id='pdv_23540' class='pdv_class'  title='文章检索' style='width:698px;height:500px;top:80px;left:263px; z-index:14'>
<div id='spdv_23540' class='pdv_content' style='overflow:visible;width:100%;'>
<div class="pdv_border" style="margin:0;padding:0;height:100%;border:0px  solid;background:;">
	<div style="height:25px;margin:1px;display:none;background:;">
		<div style="float:left;margin-left:12px;line-height:25px;font-weight:bold;color:">
		文章检索
		</div>
		<div style="float:right;margin-right:10px;display:none">
		<a href="-1" style="line-height:25px;color:">更多</a>
		</div>
	</div>
<div style="padding:0px">

<link href="temp5/news/templates/css/newsquery.css" rel="stylesheet" type="text/css" />
<div id="newsquery">
<ul id="queryul">
<?php include __DIR__.'/../common/new_list.php'; ?>
</ul>
</div>

<div id="showpages">
<?php echo $data['page']; ?>
</div>


</div>
</div>

</div>
</div>
</div>

<?php include "footer.php"; ?>
