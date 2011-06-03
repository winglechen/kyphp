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

<script language="javascript" src="./res/common.js"></script>
<script language="javascript" src="./res/validate.js"></script>
<style type="text/css">.inputlabelok{background:url(/res/img/chkok.gif) no-repeat 0px 0px; padding:2px 0 2px 24px; background-color:#F6F6F6;}.inputlabel{background:transparent; padding:2px 0 2px 24px;}</style>
<script language="JavaScript" type="text/JavaScript" src="./res/prototype.js"></script>


<script language="javascript">
websiteUrl = "http://my.cn.china.cn";

var isValidEmail = true;
var isValidSubDomain = true;
function doSubmit(formId, doAction)
{
    var formObj = document.getElementById(formId);
    
    if (!checkInput())
        return false;
    if(!Validation.validAll())
        return false;
		
    formObj.target="";
    formObj.action = doAction;
    formObj.submit();
}
function checkInput()
{
	if(isValidSubDomain == false)
	{
		var subdomainObj = document.getElementById('corpSubdomain');
		subdomainObj.focus();
		return false;
	}
	if(isValidEmail == false)
	{
		var emailObj = document.getElementById('email');
		emailObj.focus();
		return false;
	}
	return true;
}

</script>

<div class="operationPage">
  <?php include "admin_nav.php"; ?>
  <div class="operationArea">
	<?php include "admin_menu.php"; ?>

	 	 	 	
	<div class="right">
		<div class="postTips">(带 <span>*</span> 为必填项)</div>
<form id="corpInfoForm" name="corpInfoForm" action="" method="post">
	<!--信用认证信息-->	
	<div class="formblock">
		<div class="formheader">
          <div class="headerTitle">信用认证信息<span class="hui12">（请申请信用认证的会员务必如实填写）</span></div>
        </div>
	<div class="formline">
          <div class="formlabel">公司注册地址：<span id="d_registerPlace" style="display: none; ">*</span></div>
		  <div class="formcontent">
		  		  		<input id="registerPlace" name="registerPlace" type="text" value="<?php echo $_SESSION['registerPlace']; ?>" style="width:221px;">
                <span id="registerPlace_err"></span>
		  		  </div>
		</div>
        <div class="formline">
          <div class="formlabel">注册资本：<span id="d_capital" style="display: none; ">*</span></div>
		  <div class="formcontent">
	           	<input id="capital" name="capital" type="text" value="<?php echo $_SESSION[""]; ?>" size="5" maxlength="16">万元 (请根据营业执照如实填写)
	           	<span id="capital_err"></span>
		  		  </div>
		</div>
		<div class="formline">
          <div class="formlabel">公司成立时间：<span id="d_setupTime" style="display:none">*</span></div>
		  <div class="formcontent">
				<input type="text" name="setupTime" id="setupTime" value="<?php echo $_SESSION[""]; ?>">
					  </div>
		</div>
		<div class="formline">
          <div class="formlabel">公司注册号：<span id="d_registerNumber" style="display: none; ">*</span></div>
		  <div class="formcontent">
		            	<input name="registerNumber" id="registerNumber" type="text" value="<?php echo $_SESSION[""]; ?>" maxlength="32" style="width:221px;">
          		  </div>
		</div>
		<div class="formline">
          <div class="formlabel">税务注册号：<span id="d_taxRegNo" style="display: none; ">*</span></div>
		  <div class="formcontent">
		            	<input name="taxRegNo" id="taxRegNo" type="text" value="<?php echo $_SESSION[""]; ?>" maxlength="25" style="width:221px;">
          		  </div>
		</div>
		<div class="formline">
          <div class="formlabel">营业期限：</div>
		  <div class="formcontent">
		            	<input name="manageTime" id="manageTime" type="text" value="<?php echo $_SESSION[""]; ?>" maxlength="32" style="width:221px;">
          		  </div>
		</div>
		<div class="formline">
          <div class="formlabel">经营范围：<span id="d_manageBound" style="display: none; ">*</span></div>
		  <div class="formcontent">
			<textarea name="manageBound" id="manageBound" cols="50" rows="5"></textarea>
					  </div>
		</div>
		<div class="formline">
          <div class="formlabel">登记机关：<span id="d_registerOrgan" style="display: none; ">*</span></div>
		  <div class="formcontent">
		<input name="registerOrgan" id="registerOrgan" type="text" value="<?php echo $_SESSION[""]; ?>" maxlength="32" style="width:221px;">
					  </div>
		</div>
		
		<div class="formline">
          <div class="formlabel">最近年检时间：<span id="d_checkTime" style="display:none">*</span></div>
		  <div class="formcontent">
		  </div>
		</div>
		
		<div class="formline">
          <div class="formlabel">法定代表人/负责人：<span id="d_artificialPerson" style="display: none; ">*</span></div>
		  <div class="formcontent">
			<input name="artificialPerson" id="artificialPerson" type="text" value="<?php echo $_SESSION[""]; ?>" size="30" maxlength="32" style="width:221px;">
					  </div>
		</div>		
	</div>
	<!--信用认证信息-->	

	<!--详细信息-->
	<div class="formblock">
		<div class="formheader">
          <div class="headerTitle">详细信息(选填部分)</div>
        </div>
        
        <div class="formline">
          <div class="formlabel">员工人数：</div>
		  <div class="formcontent">
		  	<select name="numberOfEmployee" id="numberOfEmployee" separator=" ">
			</select>

		  </div>
		</div>
        
        <div class="formline">
          <div class="formlabel">经营模式：</div>
		  <div class="formcontent">
		  	<select name="manageMode" id="manageMode" separator=" ">
			</select>

		  </div>
		</div>
        
     		<div class="formline">
          <div class="formlabel">品牌名称：</div>
		  <div class="formcontent">
		  	<input name="brand" id="brand" type="text" value="<?php echo $_SESSION["brand"]; ?>" maxlength="200" style="width:221px;">
		  </div>
		</div> 

		<div class="formline">
          <div class="formlabel">主要经营地点：</div>
		  <div class="formcontent">
		  	<input name="manageArea" id="manageArea" type="text" value="<?php echo $_SESSION["manageArea"]; ?>" style="width:221px;">
		  </div>
		</div>
		<div class="formline">
          <div class="formlabel">主要市场：
          	<br><span class="hui12">（请选最主要的三个）</span>
          </div>
		  <div class="formcontent">
		  	 <label><input type="checkbox" name="primaryMarket[]" value="0">大陆</label> 
		  </div>
		</div>
		<div class="formline">
          <div class="formlabel">主要客户群：</div>
		  <div class="formcontent">
		  	<input name="primaryCustomers" id="primaryCustomers" type="text" value="<?php echo $_SESSION["primaryCustomers"]; ?>" maxlength="64" style="width:221px;">		  	
		  	<div class="note" style="padding-left:20px;">如：超市、服装厂、印染厂</div>
		  </div>
		</div>
		<div class="formline">
          <div class="formlabel">年营业额：</div>
		  <div class="formcontent">
		  	<select name="turnover" id="turnover" separator=" ">
<option label="人民币 10 万元/年以下" value="1">人民币 10 万元/年以下</option>
</select>

		  </div>
		</div>	
        <div class="formline">
          <div class="formlabel">进出口情况</div>
		  <div class="formcontent">
		  年出口额：<select name="exportAmount" id="exportAmount" separator=" ">
<option label="人民币 10 万元/年以下" value="1">人民币 10 万元/年以下</option>
</select>

		  年进口额：<select name="importAmount" id="importAmount" separator=" ">
<option label="人民币 10 万元/年以下" value="1">人民币 10 万元/年以下</option>
</select>

          </div>
		</div>
       	<div class="formline">
          <div class="formlabel">银行帐号</div>
		  <div class="formcontent">
		  	开户银行：<input name="accountBank" id="accountBank" type="text" value="<?php echo $_SESSION["accountBank"]; ?>" style="width:150px;">
		  	帐号：<input name="account" id="account" type="text" value="<?php echo $_SESSION["accountt"]; ?>" style="width:221px;">
		  </div>
		</div>
	</div>
	<!--详细信息-->
	<!-- 生产信息 -->
	<div class="formblock">
		<div class="formheader">
	         <div class="headerTitle">生产信息(选填部分) </div>
	       </div>	
		<div class="formline">
	         <div class="formlabel">月产量：</div>
		  <div class="formcontent">
		  	<input name="monthOutput" id="monthOutput" type="text" value="<?php echo $_SESSION["monthOutput"]; ?>" style="width:100px;">
	           <select name="monthOutputUnit" id="monthOutputUnit" separator=" ">
<option label="台" value="1">台</option>
</select>

		  </div>
		</div>
		<div class="formline">
	         <div class="formlabel">厂房面积：</div>
		  <div class="formcontent">
		  		<input name="workshopArea" id="workshopArea" type="text" value="<?php echo $_SESSION["workshopArea"]; ?>" style="width:221px;">
	                  （平方米）
		  </div>
		</div>
		<div class="formline">
	         <div class="formlabel">是否提供OEM代加工？</div>
		  <div class="formcontent">
		  	<label><input type="radio" name="providerOEM" value="1">是</label> 
<label><input type="radio" name="providerOEM" value="0" checked="checked">否</label> 

		  </div>
		</div>
	       <div class="formline">
	         <div class="formlabel">管理体系认证：</div>
		  <div class="formcontent">
		  	<label><input type="checkbox" name="authType[]" value="ISO 9000">ISO 9000</label> 
	         </div>
		</div>		
		<div class="formline">
	         <div class="formlabel">质量控制：</div>
		  <div class="formcontent">	
 			  <label><input type="radio" name="qualityControl" value="1">内部</label> 
<label><input type="radio" name="qualityControl" value="2">第三方</label> 
<label><input type="radio" name="qualityControl" value="3" checked="checked">无</label> 

		  </div>
		</div>
	</div> 
	<!-- 生产信息 -->
    <!--提交按钮-->
<table width="100%"><tbody><tr><td align="center">
      <input type="button" class="bigbutton" value="提交公司详细信息" >
</td></tr></tbody></table>
    <!--/提交按钮-->
</form>
</div> 	 	 	 
				 
				 
				 
	</div>
				 			 
	<div style="clear:both; font-size:0px; line-height:0px; height:0px; background-color:#FFFFFF"></div>
	<div style="clear:both; font-size:0px; line-height:0px; height:0px; background-color:#FFFFFF"></div>

</div>
			 
