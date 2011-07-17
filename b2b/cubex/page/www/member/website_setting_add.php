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
   );    
}

?>

	 	 	 	 
				 
				 
				 <div class="right">
  <form  onsubmit="return checkSubmit(this);"  name="publishForm" id="publishForm" method="post" action="index.php?p=www/member/website_setting_add_done"  enctype="multipart/form-data" >
	<input type="hidden" name="corpid" value="<?php echo $_SESSION['id']; ?>" />
	<input type="hidden" name="username" value="<?php echo $_SESSION['username']; ?>" />
<?php
    if(isset($_GET['id'])){
        echo '<input type="hidden" name="id" value="'.$_GET['id'].'" />';    
    }
?>
    <div class="formblock">
      <div class="formheader">
        <div class="headerTitle">公司图片</div>
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

      <div class="formline">
        <div class="formlabel">公司logo：</div>
        <div class="formcontent"> 
<table cellspacing="0" cellpadding="0" width="100%" border="0">
  <tbody><tr>
    <td width="309" id="tdpic01">
<?php
    if(!empty($form['logo'])){
        echo '<img src="'.$form['logo'].'" width="100" height="100">';    
    }
?>
        
    </td>
    <td height="35" valign="top">
    <table border="0" cellspacing="0" cellpadding="0">
      <tbody><tr>
        <td>
          <input id="logo" type="file" name="logo" size="30" style="font-size: 9pt" >
        </td>
      </tr>
    </tbody></table>
    <table border="0" cellspacing="0" cellpadding="0">
      <tbody><tr>
        <td style="color:#FF0000"><span id="errorMsg"></span></td>
      </tr>
    </tbody></table>
    <table border="0" cellspacing="0" cellpadding="0">
      <tbody><tr>
        <td style="color:#FF00FF">说明：上传图片限500k以内jpg、png格式图片</td>
      </tr>
    </tbody></table>
    </td>
  </tr>
</tbody></table>

          <div class="note">  </div>
        </div>
      </div>
      
      <div class="formline">
        <div class="formlabel">公司图片：</div>
        <div class="formcontent"> 
<table cellspacing="0" cellpadding="0" width="100%" border="0">
  <tbody><tr>
    <td width="309" id="tdpic01">
<?php
    if(!empty($form['img'])){
        echo '<img src="'.$form['img'].'" width="100" height="100">';    
    }
?>
        
    </td>
    <td height="35" valign="top">
    <table border="0" cellspacing="0" cellpadding="0">
      <tbody><tr>
        <td>
          <input id="img" type="file" name="img" size="30" style="font-size: 9pt" >
        </td>
      </tr>
    </tbody></table>
    <table border="0" cellspacing="0" cellpadding="0">
      <tbody><tr>
        <td style="color:#FF0000"><span id="errorMsg"></span></td>
      </tr>
    </tbody></table>
    <table border="0" cellspacing="0" cellpadding="0">
      <tbody><tr>
        <td style="color:#FF00FF">说明：上传图片限500k以内jpg、png格式图片</td>
      </tr>
    </tbody></table>
    </td>
  </tr>
</tbody></table>

          <div class="note"> </div>
        </div>
      </div>
      
      <div class="formline">
        <div class="formlabel">网站banner：</div>
        <div class="formcontent"> 
<table cellspacing="0" cellpadding="0" width="100%" border="0">
  <tbody><tr>
    <td width="309" id="tdpic01">
<?php
    if(!empty($form['banner'])){
        echo '<img src="'.$form['banner'].'" width="300" height="50">';    
    }
?>
        
    </td>
    <td height="35" valign="top">
    <table border="0" cellspacing="0" cellpadding="0">
      <tbody><tr>
        <td>
          <input id="banner" type="file" name="banner" size="30" style="font-size: 9pt" >
        </td>
      </tr>
    </tbody></table>
    <table border="0" cellspacing="0" cellpadding="0">
      <tbody><tr>
        <td style="color:#FF0000"><span id="errorMsg"></span></td>
      </tr>
    </tbody></table>
    <table border="0" cellspacing="0" cellpadding="0">
      <tbody><tr>
        <td style="color:#FF00FF">说明：上传图片限500k以内jpg、png格式图片</td>
      </tr>
    </tbody></table>
    </td>
  </tr>
</tbody></table>

          <div class="note">  </div>
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
	
