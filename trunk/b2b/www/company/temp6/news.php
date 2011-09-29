<?php include "header.php"; ?>
<script>
var PDV_PAGEID='2'; 
var PDV_RP='temp6/'; 
var PDV_COLTYPE='news'; 
var PDV_PAGENAME='query'; 
</script>

<div id='content' style='width:1002px;height:541px;background:url(temp6/effect/source/bg/cbg.jpg) repeat-y;margin:0px auto'>


<!-- 图片/FLASH -->

<div id='pdv_18640' class='pdv_class'  title='' style='width:1002px;height:443px;top:0px;left:0px; z-index:1'>
<div id='spdv_18640' class='pdv_content' style='overflow:hidden;width:100%;height:100%'>
<div class="pdv_border" style="margin:0;padding:0;height:100%;border:0px  solid;background:;">
	<div style="height:25px;margin:1px;display:none;background:;">
		<div style="float:left;margin-left:12px;line-height:25px;font-weight:bold;color:">
		
		</div>
		<div style="float:right;margin-right:10px;display:none">
		<a href="-1" style="line-height:25px;color:">更多</a>
		</div>
	</div>
<div style="padding:0px">


<img src="temp6/diy/pics/20100804/1280891300.jpg" border="0" width="100%" />

</div>
</div>

</div>
</div>

<!-- 文章一级分类 -->

<div id='pdv_18645' class='pdv_class'  title='' style='width:193px;height:175px;top:35px;left:35px; z-index:9'>
<div id='spdv_18645' class='pdv_content' style='overflow:visible;width:100%;'>
<div class="pdv_border" style="border:0px;height:100%;padding:0;margin:0;">
<div style="height:24px;border:0px;padding:0;margin:0;background:url(temp6/base/border/780/images/title.jpg) 0px 0px no-repeat;">
</div>
<div style="margin:0px;padding:0px;">

<link href="temp6/news/templates/css/newsclass_dolphin.css" rel="stylesheet" type="text/css" />
<div class="newsclass_dolphin">

<?php include __DIR__.'/../common/new_category.php'; ?>
</div>

</div>
</div>

</div>
</div>

<!-- 当前位置提示条 -->

<div id='pdv_18646' class='pdv_class'  title='当前位置' style='width:691px;height:30px;top:32px;left:273px; z-index:10'>
<div id='spdv_18646' class='pdv_content' style='overflow:hidden;width:100%;height:100%'>
<div class="pdv_border" style="border:0px;height:100%;padding:0;margin:0;background:url(temp6/base/border/788/images/title.jpg) 0px 0px no-repeat">
 
<link href="temp6/news/templates/css/nav.css" rel="stylesheet" type="text/css" />
<div id="nav">
您现在的位置：<a href="index.php">首页/a> 
 
&gt; <a href="#" >新闻中心</a> 

</div>

</div>

</div>
</div>

<!-- 文章翻页检索 -->

<div id='pdv_18647' class='pdv_class'  title='文章检索' style='width:680px;height:450px;top:91px;left:275px; z-index:11'>
<div id='spdv_18647' class='pdv_content' style='overflow:visible;width:100%;'>
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

<link href="temp6/news/templates/css/newsquery.css" rel="stylesheet" type="text/css" />
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
