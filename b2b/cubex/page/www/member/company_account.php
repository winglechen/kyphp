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



<style type="text/css">.inputlabelok{background:url(/res/img/chkok.gif) no-repeat 0px 0px; padding:2px 0 2px 24px; background-color:#F6F6F6;}.inputlabel{background:transparent; padding:2px 0 2px 24px;}</style>






<div class="operationPage">
  <?php include "admin_nav.php"; ?>
  <div class="operationArea">
	<?php include "admin_menu.php"; ?>

	 <div class="right">

					<div class="postTips">(带 <span>*</span> 为必填项)</div>
<form  onsubmit="return checkSubmit(this);"  id="corpInfoForm" name="corpInfoForm" action="index.php?p=www/member/company_add" method="post">
		<!--基本信息-->
	<div class="formblock">
        <div class="formheader">
          <div class="headerTitle">会员密码(必填部分)</div>
        </div>
        <div class="formline">
          <div class="formlabel">会员密码：<span>*</span></div>
		  <div class="formcontent">
		   		 
				<input name="password" id="password" type="password" value="" style="width:221px;">
				<span id="corpname_err"></span>
			  	<div class="note"></div>
					  </div>
        </div>


	</div>
	<!--基本信息-->

	    <!--提交按钮-->
<table width="100%"><tbody><tr><td align="center">
      <input type="hidden" name="id" value="<?php echo $_SESSION['id']; ?>" />
      <input type="submit" class="bigbutton" value="提交公司基本信息" >
</td></tr></tbody></table>
    <!--/提交按钮-->
</form>
</div>

		<div style="clear:both; font-size:0px; line-height:0px; height:0px; background-color:#FFFFFF"></div>	 	 	
	 	 	 	 
				 
				 
				 
	</div>
				 			 
	<div style="clear:both; font-size:0px; line-height:0px; height:0px; background-color:#FFFFFF"></div>
	<div style="clear:both; font-size:0px; line-height:0px; height:0px; background-color:#FFFFFF"></div>

</div>
				 
				 
<?php
include "footer.php";
?>				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
