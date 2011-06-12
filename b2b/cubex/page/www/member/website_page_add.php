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
use Ky\Model\Mpage;

if(isset($_GET['id'])){
   $form = Mpage::detail($_GET['id']);  
   $form['detail'] = stripslashes($form['detail']);  
}else{
   $form = array(
        'title' => '',
        'detail'      => '',
        'pic'         => '',
        'cid' => 0,
        'brief'            => '',
        'keyword'            => '',
        'title'            => '',
   );    
}

?>

	 	 	 	 
				 
				 
				 <div class="right">
  <form name="publishForm" id="publishForm" method="post" action="index.php?p=www/member/website_page_add_done"  enctype="multipart/form-data" >
	<input type="hidden" name="corpid" value="<?php echo $_SESSION['id']; ?>" />
<?php
    if(isset($_GET['id'])){
        echo '<input type="hidden" name="id" value="'.$_GET['id'].'" />';    
    }
?>
    <div class="formblock">
      <div class="formheader">
        <div class="headerTitle">自定义页面</div>
      </div>
      
       <div class="formline">
       <div class="formlabel"><span class="inputlabelok"></span>页面名称：<span>*</span></div>
       <div class="formcontent">
       <input name="name" id="name" value="<?php echo $form['name']; ?>" type="text" class="input220" >
       <span id="oproductName_err"></span>
       <div class="note"></div>
         </div>
        </div>


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


      <!--行业选择 end-->
<div class="formline">
  <div class="formlabel"><span id="lbl_offerSubject">&nbsp;</span>信息标题：<span>*</span></div>
  <div class="formcontent">
    <input name="title" id="title" value="<?php echo $form['title']; ?>" type="text" class="input220">
    <span id="offerSubject_err"></span>
    <div class="note">便于搜索引擎搜索</div>
  </div>
      </div>
      
      <div class="formline">
      <div class="formlabel"><span id="lbl_offerKeyword"></span>关键词：</div>
	   <div class="formcontent">
       	<input id="keyword" name="keyword" value="<?php echo $form['keyword']; ?>" type="text" class="input220">
        <div class="note">便于搜索引擎搜索</div>
	   </div>
    </div>
      
      
      <!--详细信息-->
      <div class="formline">
        <div class="formlabel"><span id="lbl_offerDetail">&nbsp;</span>详细说明：<span>*</span></div>
        <div class="formcontent">
		  <textarea cols="120" id="detail" name="detail" rows="20"><?php echo $form['detail']; ?></textarea>
<script language="javascript">
KE.show({id : 'detail'});
</script>
          <span id="offerDetail_err"></span>
          <div class="note">字数限制在10个字5000个字之间．<br>
           </div>
        </div>
      </div>
      <!--详细信息 end-->
      <div class="formline" id="expropTr" style=" display:none; ">
        <div class="formlabel">图片:</div>
        <div class="formcontent">
          <div id="loadIndicator" style="margin: 0px; padding: 0px; display: none;"><img src="./res/indicator.gif">正在加载产品描述……</div>
          <table id="expropTable" width="100%" cellspacing="5" cellpadding="0" border="0">
            <tbody>
            
                        </tbody>
          </table>
        </div>
      </div>

   
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
	
