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
          <div class="headerTitle">基本信息(必填部分)</div>
        </div>
        <div class="formline">
          <div class="formlabel">公司名称：<span>*</span></div>
		  <div class="formcontent">
		   		 
				<input   onfocus="checkInput(this);" required="true"   name="corpname" id="corpname" type="text" value="<?php echo $_SESSION['corpname']; ?>" style="width:221px;">
				<span id="corpname_err"></span>
			  	<div class="note">请填写贵公司的中文全称，如：北京浩天有限责任公司。</div>
					  </div>
        </div>
        <div class="formline">
          <div class="formlabel">企业类型：<span>*</span></div>
		  <div class="formcontent">
		    			     
            	   <select name="corptype" id="corptype" >
<?php
use Ky\Model\Config;
echo Config::getOption('corptype','option',$_SESSION['corptype']);
?>
		            </select>
		   <span id="corptype_err"></span>
						</div>
        </div> 
        <div class="formline">
          <div class="formlabel">公司简介：<span>*</span><br><span class="hui12">(50-1200 字)</span></div>
		  <div class="formcontent">
		  	<textarea   onfocus="checkInput(this);" required="true"  num="49-1200"  name="corpintro" cols="60" rows="10" id="corpintro"><?php echo $_SESSION['corpintro']; ?></textarea>
            <span id="corpintro_err"></span>
            <div class="note">
				<ul>
					<li class="hui12">公司介绍必须为中文内容，请不要用英文填写。</li>
					<li>请提供贵司的成立历史、主营产品、品牌、服务……等优势；如果填写单纯的产品介绍，将有可能无法通过审核。 </li>
					<li>此处不要出现任何联系方式。如：电话、传真、手机、电子邮箱等。</li>
				</ul>
           </div>
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
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
