<?php include "header.php" ?>
<script>
var PDV_PAGEID='2'; 
var PDV_RP='temp1/'; 
var PDV_COLTYPE='news'; 
var PDV_PAGENAME='query'; 
</script>

<div id='content' style='width:1002px;height:540px;background:url(temp1/effect/source/bg/cbg.jpg) #ffffff;margin:0px auto'>


<!-- 文章搜索表单 -->

<div id='pdv_14813' class='pdv_class'  title='' style='width:207px;height:170px;top:99px;left:0px; z-index:10'>
<div id='spdv_14813' class='pdv_content' style='overflow:visible;width:100%;'>
<div class="pdv_border" style="border:0px;height:100%;padding:0;margin:0;">
    <div style="height:49px;border:0px;padding:0;margin:0;background:url(temp1/base/border/784/images/title.jpg) 0px 0px no-repeat;">
    	<div style="float:right;width:5px;height:49px;background:url(temp1/base/border/784/images/title.jpg) -995px 0px no-repeat;"></div>
    </div>
    <div style="margin:0px;padding:0px;">
    <link href="temp1/news/templates/css/news_search_dolphin.css" rel="stylesheet" type="text/css" />
    
    <?php
        include __DIR__ . '/../common/new_search.php';
    ?>
    
    
    
    </div>
</div>

</div>
</div>

<!-- 文章翻页检索 -->

<div id='pdv_14815' class='pdv_class'  title='文章检索' style='width:704px;height:450px;top:88px;left:250px; z-index:11'>
<div id='spdv_14815' class='pdv_content' style='overflow:visible;width:100%;'>
<div class="pdv_border" style="margin:0;padding:0;height:100%;border:0px  solid;background:;">
	<div style="height:25px;margin:1px;display:none;background:;">
		<div style="float:left;margin-left:6px;line-height:25px;font-weight:bold;color:">
		文章检索
		</div>
		<div style="float:right;margin-right:10px;display:none">
		<a href="-1" style="line-height:25px;color:">更多</a>
		</div>
	</div>
<div style="padding:0px">

<link href="temp1/news/templates/css/newsquery.css" rel="stylesheet" type="text/css" />
<div id="newsquery">
 
<?php include __DIR__.'/../common/company_contact.php'; ?>


</div>



</div>
</div>

</div>
</div>

<!-- 当前位置提示条 -->

<div id='pdv_14814' class='pdv_class'  title='当前位置' style='width:794px;height:50px;top:0px;left:208px; z-index:12'>
<div id='spdv_14814' class='pdv_content' style='overflow:hidden;width:100%;height:100%'>
<div class="pdv_border" style="border:0px;background:url(temp1/base/border/788/images/title.jpg) no-repeat;padding:0px;margin:0px;height:100%;">
 
<link href="temp1/news/templates/css/nav.css" rel="stylesheet" type="text/css" />
<div id="nav">
您现在的位置：<a href="index.php">首页</a> 
 
&gt; <a href="#" >联系我们</a> 

</div>

</div>

</div>
</div>

<!-- 文章逐级分类 -->

<div id='pdv_15232' class='pdv_class'  title='' style='width:207px;height:169px;top:0px;left:0px; z-index:13'>
<div id='spdv_15232' class='pdv_content' style='overflow:visible;width:100%;'>
<div class="pdv_border" style="border:0px;height:100%;padding:0;margin:0;">
<div style="height:49px;border:0px;padding:0;margin:0;background:url(temp1/base/border/785/images/title.jpg) 0px 0px no-repeat;">
	<div style="float:right;width:5px;height:49px;background:url(temp1/base/border/785/images/title.jpg) -995px 0px no-repeat;"></div>
</div>
<div style="margin:0px;padding:0px;">

<link href="temp1/news/templates/css/newsclass_dolphin.css" rel="stylesheet" type="text/css" />
<div class="newsclass_dolphin">


<?php include __DIR__.'/../common/new_category.php'; ?>

</div>

</div>
</div>

</div>
</div>
</div>


<?php include "footer.php" ?>
