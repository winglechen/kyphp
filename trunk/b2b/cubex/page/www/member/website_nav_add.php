<?php
include "header.php";
?>
<style>
		  .tongzhi {
	padding-top: 0px;
	padding-right: 20px;
	padding-bottom: 0px;
	padding-left: 20px;		  
		  }
		  .tongzhi  li{
	padding:8px;
	border-bottom-style: solid;
	border-bottom-color: #CCCCCC;
	border-bottom-width: 1px;
		  }
			  .tongzhi li i {
			  color:#CCCCCC
		  
		  }	  
</style>

<script language="javascript" src="./res/validator.js"></script>
<script language="javascript" src="./editor/kindeditor-min.js"></script>
<style type="text/css">.inputlabelok{background:url(./res/img/chkok.gif) no-repeat 0px 0px; padding:2px 0 2px 24px; background-color:#F6F6F6;}.inputlabel{background:transparent; padding:2px 0 2px 24px;}</style>



<div class="operationPage">
  <?php include "admin_nav.php"; ?>
  <div class="operationArea">
	<?php include "admin_menu.php"; ?>

<?php
use Ky\Model\Mnav;
use Ky\Model\Config;
use Ky\Model\Mpage;

if(isset($_GET['id'])){
   $form = Mnav::detail($_GET['id']);  
   $form['urltype'] = 0;
   $get = ture;
}else{
   $form = array(
        'name' => '',
        'url'      => '',
        'urltype'      => 0,
        'target'         => '',
        'cid' => 0,
        'brief'            => '',
        'keyword'            => '',
        'title'            => '',
   );    
   $get = false;
}


?>

	 	 	 	 
				 
				 
				 <div class="right">
  <form name="publishForm" id="publishForm" method="post" action="index.php?p=www/member/website_nav_add_done"  enctype="multipart/form-data" >
	<input type="hidden" name="corpid" value="<?php echo $_SESSION['id']; ?>" />
<?php
    if(isset($_GET['id'])){
        echo '<input type="hidden" name="id" value="'.$_GET['id'].'" />';    
    }
?>
    <div class="formblock">
      <div class="formheader">
        <div class="headerTitle">网站导航添加</div>
      </div>

     
      <div class="formline" style="display:<?php if(!$get) echo 'block'; else echo 'none'; ?>">
       <div class="formlabel"><span class="inputlabelok"></span>链接类型：<span>*</span></div>
       <div class="formcontent">
            <label><input type="radio" name="urltype" <?php if(0 == $form['urltype']) echo ' checked="checked" '; ?>  onclick="setUrlType(0);"  value="1">自定义</label>
            <label><input type="radio" name="urltype" <?php if(1 == $form['urltype']) echo ' checked="checked" '; ?>  onclick="setUrlType(1);"  value="2">产品分类</label>
            <label><input type="radio" name="urltype" <?php if(2 == $form['urltype']) echo ' checked="checked" '; ?>  onclick="setUrlType(2);" value="3">新闻分类</label>
            <label><input type="radio" name="urltype" <?php if(3 == $form['urltype']) echo ' checked="checked" '; ?>  onclick="setUrlType(3);" value="4">自定义页面</label>
       <span id="oproductName_err"></span>
       <div class="note"></div>
         </div>
        </div>


    <div id="self_define" style="display:none;" >
       <div class="formline">
       <div class="formlabel"><span class="inputlabelok"></span>链接名称：<span>*</span></div>
       <div class="formcontent">
       <input name="name" id="name" value="<?php echo $form['name']; ?>" type="text" class="input220" >
       <span id="oproductName_err"></span>
       <div class="note"></div>
         </div>
        </div>

     <div class="formline">
       <div class="formlabel"><span class="inputlabelok"></span>链接地址：<span>*</span></div>
       <div class="formcontent">
       <input name="url" id="url" value="<?php echo $form['url']; ?>" type="text" class="input220" >
       <span id="oproductName_err"></span>
       <div class="note"></div>
         </div>
        </div>
  </div>

  <div id="product_link" style="display:none;" >
    <div class="formline">
       <div class="formlabel"><span class="inputlabelok"></span>产品分类链接：<span>*</span></div>
       <div class="formcontent">
       <select name="cid">
<?php
    Config::getTree('member_category','option',null,$_SESSION['id']);
?>

       </select>
       <span id="oproductName_err"></span>
       <div class="note"></div>
         </div>
    </div>

  </div>
  
  <div id="news_link" style="display:none;" >
    <div class="formline">
       <div class="formlabel"><span class="inputlabelok"></span>新闻分类链接：<span>*</span></div>
       <div class="formcontent">
       <select name="nid">
<?php
    Config::getTree('member_new_category','option',null,$_SESSION['id']);
?>
       </select>
       <span id="oproductName_err"></span>
       <div class="note"></div>
         </div>
    </div>

  </div>

<div id="page_link" style="display:none;" >
    <div class="formline">
       <div class="formlabel"><span class="inputlabelok"></span>自定义页面链接：<span>*</span></div>
       <div class="formcontent">
       <select name="pid">
<?php
    Mpage::getOption();
?>

       </select>
       <span id="oproductName_err"></span>
       <div class="note"></div>
         </div>
    </div>

  </div>



<script language="javascript">
function setUrlType(num)
{
    var divs = ['self_define','product_link','news_link','page_link'];

    for(var i=0,len=divs.length; i<len; i++){
       $('#'+divs[i]).hide(); 
    }
    
    $('#' + divs[num]).show();

}
setUrlType(<?php echo $form['urltype']; ?>);
</script>
 



      <!--行业选择-->
      
      <style type="text/css">
#id_info {
	margin: 0pt;
	padding: 4px;
}
#inCcontent {
	border: 1px solid rgb(204, 204, 204);
	padding: 4px;
	overflow:auto;
	width: 430px;
	height: 200px;
	clear: both;
	font-size: 14px;
	font-weight: bold;
}
#inCcontent #industrylist {
	margin: 0pt;
	line-height: 200%;
}
#industrylist label {
	font-size: 12px;
	line-height: 200%;
	display:block;
	cursor: pointer;
}
#indRecommend {
	padding: 4px;
	clear: both;
	font-size: 12px;
	font-weight: bold;
}
</style>

   
    </div>
    
    <div style="clear:both; font-size:0px; line-height:0px; height:0px; background-color:#FFFFFF"></div>
    
    
    <table align="center">
      <tbody><tr>
        <td align="center">
          <input type="submit" value="完成,发布!" class="bigbutton" >
        </td>
      </tr>
    </tbody></table>
  </form>
</div>
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
<div style="clear:both; font-size:0px; line-height:0px; height:0px; background-color:#FFFFFF"></div>

		<div style="clear:both; font-size:0px; line-height:0px; height:0px; background-color:#FFFFFF"></div>
	</div>
</div>

<?php
include "footer.php";
?>				 
	
