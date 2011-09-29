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
use Ky\Model\Mset;

$form = Mset::detail();  

if(empty($form)){
   $form = array(
        'img' => '',
        'logo'      => '',
        'img'         => '',
        'cid' => 0,
        'brief'            => '',
        'keyword'            => '',
        'title'            => '',
        'description'   => '',
        'footer'    => '',
   );    
}

?>

	 	 	 	 
				 
				 
				 <div class="right">
  <form  onsubmit="return checkSubmit(this);"  name="publishForm" id="publishForm" method="post" action="index.php?p=www/member/website_setting_seo_done"  enctype="multipart/form-data" >
	<input type="hidden" name="corpid" value="<?php echo $_SESSION['id']; ?>" />
	<input type="hidden" name="username" value="<?php echo $_SESSION['username']; ?>" />

    <div class="formblock">
      <div class="formheader">
        <div class="headerTitle">公司SEO管理</div>
      </div>
      
      <div class="formline">
       <div class="formlabel"><span class="inputlabelok"></span>网站标题：<span>*</span></div>
       <div class="formcontent">
       <input name="title" id="title" value="<?php echo $form['title']; ?>" type="text" class="input220" >
       <span id="oproductName_err"></span>
       <div class="note"></div>
         </div>
        </div>

    <div class="formline">
       <div class="formlabel"><span class="inputlabelok"></span>网站关键词：<span>*</span></div>
       <div class="formcontent">
       <input name="keyword" id="keyword" value="<?php echo $form['keyword']; ?>" type="text" class="input220" >
       <span id="oproductName_err"></span>
       <div class="note"></div>
         </div>
        </div>


    <div class="formline">
       <div class="formlabel"><span class="inputlabelok"></span>网站描述：<span>*</span></div>
       <div class="formcontent">
        <textarea cols="120" name="description" rows="10"><?php echo $form['description']; ?></textarea> 
       <span id="oproductName_err"></span>
       <div class="note"></div>
         </div>
        </div>

 
    <div class="formline">
       <div class="formlabel"><span class="inputlabelok"></span>网站底部：<span>*</span></div>
       <div class="formcontent">
        <textarea cols="120" name="footer" rows="10"><?php echo $form['footer']; ?></textarea> 
       <span id="oproductName_err"></span>
       <div class="note"></div>
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
	
