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
          <div class="formlabel">是否升级为收费会员：</div>
		  <div class="formcontent">
			<input type="checkbox" name="needUpgradeMember" id="needUpgradeMember" value="1" onclick="changeValidate()">
		  </div>
		</div>
				<div class="formline">
          <div class="formlabel">公司注册地址：<span id="d_registerPlace" style="display: none; ">*</span></div>
		  <div class="formcontent">
		  		  		<input id="registerPlace" name="registerPlace" type="text" value="" style="width:221px;">
                <span id="registerPlace_err"></span>
		  		  </div>
		</div>
        <div class="formline">
          <div class="formlabel">注册资本：<span id="d_capital" style="display: none; ">*</span></div>
		  <div class="formcontent">
		  		  		<select name="capitalUnit" id="capitalUnit" separator=" ">
<option label="人民币" value="1">人民币</option>
<option label="港币" value="2">港币</option>
<option label="欧元" value="3">欧元</option>
<option label="美元" value="4">美元</option>
<option label="日元" value="5">日元</option>
<option label="新加坡币" value="6">新加坡币</option>
<option label="英镑" value="7">英镑</option>
</select>

	           	<input id="capital" name="capital" type="text" value="" size="5" maxlength="16">万 (请根据营业执照如实填写)
	           	<span id="capital_err"></span>
		  		  </div>
		</div>
		<div class="formline">
          <div class="formlabel">公司成立时间：<span id="d_setupTime" style="display:none">*</span></div>
		  <div class="formcontent">
							<select name="setupTimeYear" id="setupTimeYear" onchange="selectSetupTime(this.options[this.selectedIndex].value, this) " separator=" ">
<option label="2011" value="2011">2011</option>
<option label="2010" value="2010">2010</option>
<option label="2009" value="2009">2009</option>
<option label="2008" value="2008">2008</option>
<option label="2007" value="2007">2007</option>
<option label="2006" value="2006">2006</option>
<option label="2005" value="2005">2005</option>
<option label="2004" value="2004">2004</option>
<option label="2003" value="2003">2003</option>
<option label="2002" value="2002">2002</option>
<option label="2001" value="2001">2001</option>
<option label="2000" value="2000">2000</option>
<option label="1999" value="1999">1999</option>
<option label="1998" value="1998">1998</option>
<option label="1997" value="1997">1997</option>
<option label="1996" value="1996">1996</option>
<option label="1995" value="1995">1995</option>
<option label="1994" value="1994">1994</option>
<option label="1993" value="1993">1993</option>
<option label="1992" value="1992">1992</option>
<option label="1991" value="1991">1991</option>
<option label="1990" value="1990">1990</option>
<option label="1989" value="1989">1989</option>
<option label="1988" value="1988">1988</option>
<option label="1987" value="1987">1987</option>
<option label="1986" value="1986">1986</option>
<option label="1985" value="1985">1985</option>
<option label="1984" value="1984">1984</option>
<option label="1983" value="1983">1983</option>
<option label="1982" value="1982">1982</option>
<option label="1981" value="1981">1981</option>
<option label="1980" value="1980">1980</option>
<option label="1979" value="1979">1979</option>
<option label="1978" value="1978">1978</option>
<option label="1977" value="1977">1977</option>
<option label="1976" value="1976">1976</option>
<option label="1975" value="1975">1975</option>
<option label="1974" value="1974">1974</option>
<option label="1973" value="1973">1973</option>
<option label="1972" value="1972">1972</option>
<option label="1971" value="1971">1971</option>
<option label="1970" value="1970">1970</option>
<option label="1969" value="1969">1969</option>
<option label="1968" value="1968">1968</option>
<option label="1967" value="1967">1967</option>
<option label="1966" value="1966">1966</option>
<option label="1965" value="1965">1965</option>
<option label="1964" value="1964">1964</option>
<option label="1963" value="1963">1963</option>
<option label="1962" value="1962">1962</option>
<option label="1961" value="1961">1961</option>
<option label="1960" value="1960">1960</option>
<option label="1959" value="1959">1959</option>
<option label="1958" value="1958">1958</option>
<option label="1957" value="1957">1957</option>
<option label="1956" value="1956">1956</option>
<option label="1955" value="1955">1955</option>
<option label="1954" value="1954">1954</option>
<option label="1953" value="1953">1953</option>
<option label="1952" value="1952">1952</option>
<option label="1951" value="1951">1951</option>
<option label="1950" value="1950">1950</option>
<option label="1949" value="1949">1949</option>
</select>
 
				<select name="setupTimeMonth" id="setupTimeMonth" onchange="selectSetupTime(this.options[this.selectedIndex].value, this)" separator=" ">
<option label="01" value="1">01</option>
<option label="02" value="2">02</option>
<option label="03" value="3">03</option>
<option label="04" value="4">04</option>
<option label="05" value="5">05</option>
<option label="06" value="6">06</option>
<option label="07" value="7">07</option>
<option label="08" value="8">08</option>
<option label="09" value="9">09</option>
<option label="10" value="10">10</option>
<option label="11" value="11">11</option>
<option label="12" value="12">12</option>
</select>
 
				<select name="setupTimeDay" id="setupTimeDay" onchange="selectSetupTime(this.options[this.selectedIndex].value, this)" separator=" ">
<option label="01" value="1">01</option>
<option label="02" value="2">02</option>
<option label="03" value="3">03</option>
<option label="04" value="4">04</option>
<option label="05" value="5">05</option>
<option label="06" value="6">06</option>
<option label="07" value="7">07</option>
<option label="08" value="8">08</option>
<option label="09" value="9">09</option>
<option label="10" value="10">10</option>
<option label="11" value="11">11</option>
<option label="12" value="12">12</option>
<option label="13" value="13">13</option>
<option label="14" value="14">14</option>
<option label="15" value="15">15</option>
<option label="16" value="16">16</option>
<option label="17" value="17">17</option>
<option label="18" value="18">18</option>
<option label="19" value="19">19</option>
<option label="20" value="20">20</option>
<option label="21" value="21">21</option>
<option label="22" value="22">22</option>
<option label="23" value="23">23</option>
<option label="24" value="24">24</option>
<option label="25" value="25">25</option>
<option label="26" value="26">26</option>
<option label="27" value="27">27</option>
<option label="28" value="28">28</option>
<option label="29" value="29">29</option>
<option label="30" value="30">30</option>
<option label="31" value="31">31</option>
</select>

				<input type="hidden" name="setupTime" id="setupTime" value="">
					  </div>
		</div>
		<div class="formline">
          <div class="formlabel">公司注册号：<span id="d_registerNumber" style="display: none; ">*</span></div>
		  <div class="formcontent">
		            	<input name="registerNumber" id="registerNumber" type="text" value="" maxlength="32" style="width:221px;">
          		  </div>
		</div>
		<div class="formline">
          <div class="formlabel">税务注册号：<span id="d_taxRegNo" style="display: none; ">*</span></div>
		  <div class="formcontent">
		            	<input name="taxRegNo" id="taxRegNo" type="text" value="" maxlength="25" style="width:221px;">
          		  </div>
		</div>
		<div class="formline">
          <div class="formlabel">营业期限：</div>
		  <div class="formcontent">
		            	<input name="manageTime" id="manageTime" type="text" value="" maxlength="32" style="width:221px;">
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
							<input name="registerOrgan" id="registerOrgan" type="text" value="" maxlength="32" style="width:221px;">
					  </div>
		</div>
		
		<div class="formline">
          <div class="formlabel">最近年检时间：<span id="d_checkTime" style="display:none">*</span></div>
		  <div class="formcontent">
							<select name="checkTime" id="checkTime" separator=" ">
<option label="2011" value="2011">2011</option>
<option label="2010" value="2010">2010</option>
<option label="2009" value="2009">2009</option>
<option label="2008" value="2008">2008</option>
<option label="2007" value="2007">2007</option>
<option label="2006" value="2006">2006</option>
<option label="2005" value="2005">2005</option>
<option label="2004" value="2004">2004</option>
<option label="2003" value="2003">2003</option>
<option label="2002" value="2002">2002</option>
<option label="2001" value="2001">2001</option>
<option label="2000" value="2000">2000</option>
<option label="1999" value="1999">1999</option>
<option label="1998" value="1998">1998</option>
<option label="1997" value="1997">1997</option>
<option label="1996" value="1996">1996</option>
<option label="1995" value="1995">1995</option>
<option label="1994" value="1994">1994</option>
<option label="1993" value="1993">1993</option>
<option label="1992" value="1992">1992</option>
<option label="1991" value="1991">1991</option>
<option label="1990" value="1990">1990</option>
<option label="1989" value="1989">1989</option>
<option label="1988" value="1988">1988</option>
<option label="1987" value="1987">1987</option>
<option label="1986" value="1986">1986</option>
<option label="1985" value="1985">1985</option>
<option label="1984" value="1984">1984</option>
<option label="1983" value="1983">1983</option>
<option label="1982" value="1982">1982</option>
<option label="1981" value="1981">1981</option>
<option label="1980" value="1980">1980</option>
<option label="1979" value="1979">1979</option>
<option label="1978" value="1978">1978</option>
<option label="1977" value="1977">1977</option>
<option label="1976" value="1976">1976</option>
<option label="1975" value="1975">1975</option>
<option label="1974" value="1974">1974</option>
<option label="1973" value="1973">1973</option>
<option label="1972" value="1972">1972</option>
<option label="1971" value="1971">1971</option>
<option label="1970" value="1970">1970</option>
<option label="1969" value="1969">1969</option>
<option label="1968" value="1968">1968</option>
<option label="1967" value="1967">1967</option>
<option label="1966" value="1966">1966</option>
<option label="1965" value="1965">1965</option>
<option label="1964" value="1964">1964</option>
<option label="1963" value="1963">1963</option>
<option label="1962" value="1962">1962</option>
<option label="1961" value="1961">1961</option>
<option label="1960" value="1960">1960</option>
<option label="1959" value="1959">1959</option>
<option label="1958" value="1958">1958</option>
<option label="1957" value="1957">1957</option>
<option label="1956" value="1956">1956</option>
<option label="1955" value="1955">1955</option>
<option label="1954" value="1954">1954</option>
<option label="1953" value="1953">1953</option>
<option label="1952" value="1952">1952</option>
<option label="1951" value="1951">1951</option>
<option label="1950" value="1950">1950</option>
<option label="1949" value="1949">1949</option>
</select>

					  </div>
		</div>
		
		<div class="formline">
          <div class="formlabel">法定代表人/负责人：<span id="d_artificialPerson" style="display: none; ">*</span></div>
		  <div class="formcontent">
							<input name="artificialPerson" id="artificialPerson" type="text" value="" size="30" maxlength="32" style="width:221px;">
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
<option label="请选择" value="0" selected="selected">请选择</option>
<option label="5 - 10 人" value="1">5 - 10 人</option>
<option label="11 - 50 人" value="2">11 - 50 人</option>
<option label="51 - 100 人" value="3">51 - 100 人</option>
<option label="101 - 200 人" value="4">101 - 200 人</option>
<option label="201 - 300 人" value="5">201 - 300 人</option>
<option label="301 - 500 人" value="6">301 - 500 人</option>
<option label="501 - 1000 人" value="7">501 - 1000 人</option>
<option label="1000 人以上" value="8">1000 人以上</option>
</select>

		  </div>
		</div>
        
        <div class="formline">
          <div class="formlabel">经营模式：</div>
		  <div class="formcontent">
		  				<select name="manageMode" id="manageMode" separator=" ">
<option label="生产型" value="1">生产型</option>
<option label="贸易型" value="2">贸易型</option>
<option label="服务型" value="3">服务型</option>
<option label="政府或其他机构" value="4">政府或其他机构</option>
<option label="生产+贸易型" value="5">生产+贸易型</option>
</select>

		  </div>
		</div>
        
        <!-- <div class="formline">
          <div class="formlabel">主营产品或服务：</div>
		  <div class="formcontent">
		  		  <input type="text" name="primaryWork_0" id="primaryWork_0" maxlength="10" size="10" value=""  />
                    <span id='primaryWork_0_err'></span> ；
                  <input type="text" name="primaryWork_1" id="primaryWork_1" maxlength="10" size="10" value=""  />
                    <span id='primaryWork_1_err'></span> ；
                  <input type="text" name="primaryWork_2" id="primaryWork_2" maxlength="10" size="10" value=""  />
                    <span id='primaryWork_2_err'></span> ；
                    <input type="text" name="primaryWork_3" id="primaryWork_3" maxlength="10" size="10" value=""  />
                    <span id='primaryWork_3_err'></span> ； 
                  <input type="text" name="primaryWork_4" id="primaryWork_4" maxlength="10" size="10" value=""  />
                    <span id='primaryWork_4_err'></span> ；
                  <input type="text" name="primaryWork_5" id="primaryWork_5" maxlength="10" size="10" value=""  />
                    <span id='primaryWork_5_err'></span> ；
                    <input type="text" name="primaryWork_6" id="primaryWork_6" maxlength="10" size="10" value=""  />
                    <span id='primaryWork_6_err'></span> ；
                  <input type="text" name="primaryWork_7" id="primaryWork_7" maxlength="10" size="10" value=""  />
                    <span id='primaryWork_7_err'></span> ；
                  <input type="text" name="primaryWork_8" id="primaryWork_8" maxlength="10" size="10" value=""  />
                    <span id='primaryWork_8_err'></span> ；
                    <input type="text" name="primaryWork_9" id="primaryWork_9" maxlength="10" size="10" value=""  />
                    <span id='primaryWork_9_err'></span> ；
                  <input type="text" name="primaryWork_10" id="primaryWork_10" maxlength="10" size="10" value=""  />
                    <span id='primaryWork_10_err'></span> ；
                  <input type="text" name="primaryWork_11" id="primaryWork_11" maxlength="10" size="10" value=""  />
                    <span id='primaryWork_11_err'></span> ；
                    <input type="text" name="primaryWork_12" id="primaryWork_12" maxlength="10" size="10" value=""  />
                    <span id='primaryWork_12_err'></span> ；
                  <input type="text" name="primaryWork_13" id="primaryWork_13" maxlength="10" size="10" value=""  />
                    <span id='primaryWork_13_err'></span> ；
                  <input type="text" name="primaryWork_14" id="primaryWork_14" maxlength="10" size="10" value=""  />
                    <span id='primaryWork_14_err'></span> ；
                    <input type="text" name="primaryWork_15" id="primaryWork_15" maxlength="10" size="10" value=""  />
                    <span id='primaryWork_15_err'></span> ；
                  <input type="text" name="primaryWork_16" id="primaryWork_16" maxlength="10" size="10" value=""  />
                    <span id='primaryWork_16_err'></span> ；
                  <input type="text" name="primaryWork_17" id="primaryWork_17" maxlength="10" size="10" value=""  />
                    <span id='primaryWork_17_err'></span> ；
                    <input type="text" name="primaryWork_18" id="primaryWork_18" maxlength="10" size="10" value=""  />
                    <span id='primaryWork_18_err'></span> ；
                  <input type="text" name="primaryWork_19" id="primaryWork_19" maxlength="10" size="10" value=""  />
                    <span id='primaryWork_19_err'></span> ；
                  <input type="hidden" name="primaryWork" id="primaryWork" />
                  <div class="note" style="padding-left:20px;">(每空限填<b>１种</b>产品名称,10个字以下,如：钮扣)</div>
		  </div>
		</div>-->
		<div class="formline">
          <div class="formlabel">品牌名称：</div>
		  <div class="formcontent">
		  	<input name="brand" id="brand" type="text" value="" maxlength="200" style="width:221px;">
		  </div>
		</div> 

		<div class="formline">
          <div class="formlabel">主要经营地点：</div>
		  <div class="formcontent">
		  	<input name="manageArea" id="manageArea" type="text" value="" style="width:221px;">
		  </div>
		</div>
		<div class="formline">
          <div class="formlabel">主要市场：
          	<br><span class="hui12">（请选最主要的三个）</span>
          </div>
		  <div class="formcontent">
		  	 <label><input type="checkbox" name="primaryMarket[]" value="0">大陆</label> 
<label><input type="checkbox" name="primaryMarket[]" value="1">港澳台地区</label> 
<label><input type="checkbox" name="primaryMarket[]" value="2">北美</label> 
<label><input type="checkbox" name="primaryMarket[]" value="3">南美</label> 
<label><input type="checkbox" name="primaryMarket[]" value="4">西欧</label> 
<label><input type="checkbox" name="primaryMarket[]" value="5">东欧</label> 
<label><input type="checkbox" name="primaryMarket[]" value="6">东亚</label> 
<label><input type="checkbox" name="primaryMarket[]" value="12">中亚</label> 
<label><input type="checkbox" name="primaryMarket[]" value="7">东南亚</label> 
<label><input type="checkbox" name="primaryMarket[]" value="8">中东</label> 
<label><input type="checkbox" name="primaryMarket[]" value="9">非洲</label> 
<label><input type="checkbox" name="primaryMarket[]" value="10">大洋洲</label> 
<label><input type="checkbox" name="primaryMarket[]" value="11">全球</label> 
<label for="TradeRegionOther"></label>
		  </div>
		</div>
		<div class="formline">
          <div class="formlabel">主要客户群：</div>
		  <div class="formcontent">
		  	<input name="primaryCustomers" id="primaryCustomers" type="text" value="" maxlength="64" style="width:221px;">		  	
		  	<div class="note" style="padding-left:20px;">如：超市、服装厂、印染厂</div>
		  </div>
		</div>
		<div class="formline">
          <div class="formlabel">年营业额：</div>
		  <div class="formcontent">
		  	<select name="turnover" id="turnover" separator=" ">
<option label="请选择" value="0" selected="selected">请选择</option>
<option label="人民币 10 万元/年以下" value="1">人民币 10 万元/年以下</option>
<option label="人民币 10 万元/年 - 30 万元/年" value="2">人民币 10 万元/年 - 30 万元/年</option>
<option label="人民币 30 万元/年 - 50 万元/年" value="3">人民币 30 万元/年 - 50 万元/年</option>
<option label="人民币 50 万元/年 - 100 万元/年" value="4">人民币 50 万元/年 - 100 万元/年</option>
<option label="人民币 100 万元/年 - 200 万元/年" value="5">人民币 100 万元/年 - 200 万元/年</option>
<option label="人民币 200 万元/年 - 300 万元/年" value="6">人民币 200 万元/年 - 300 万元/年</option>
<option label="人民币 300 万元/年 - 500 万元/年" value="7">人民币 300 万元/年 - 500 万元/年</option>
<option label="人民币 500 万元/年 - 700 万元/年" value="8">人民币 500 万元/年 - 700 万元/年</option>
<option label="人民币 700 万元/年 - 1000 万元/年" value="9">人民币 700 万元/年 - 1000 万元/年</option>
<option label="人民币 1000 万元/年 - 2000 万元/年" value="10">人民币 1000 万元/年 - 2000 万元/年</option>
<option label="人民币 2000 万元/年 - 3000 万元/年" value="11">人民币 2000 万元/年 - 3000 万元/年</option>
<option label="人民币 3000 万元/年 - 5000 万元/年" value="12">人民币 3000 万元/年 - 5000 万元/年</option>
<option label="人民币 5000 万元/年 - 1 亿元/年" value="13">人民币 5000 万元/年 - 1 亿元/年</option>
<option label="人民币 1 亿元/年以上" value="14">人民币 1 亿元/年以上</option>
</select>

		  </div>
		</div>	
        <div class="formline">
          <div class="formlabel">进出口情况</div>
		  <div class="formcontent">
		  年出口额：<select name="exportAmount" id="exportAmount" separator=" ">
<option label="请选择" value="0" selected="selected">请选择</option>
<option label="人民币 10 万元/年以下" value="1">人民币 10 万元/年以下</option>
<option label="人民币 10 万元/年 - 30 万元/年" value="2">人民币 10 万元/年 - 30 万元/年</option>
<option label="人民币 30 万元/年 - 50 万元/年" value="3">人民币 30 万元/年 - 50 万元/年</option>
<option label="人民币 50 万元/年 - 100 万元/年" value="4">人民币 50 万元/年 - 100 万元/年</option>
<option label="人民币 100 万元/年 - 200 万元/年" value="5">人民币 100 万元/年 - 200 万元/年</option>
<option label="人民币 200 万元/年 - 300 万元/年" value="6">人民币 200 万元/年 - 300 万元/年</option>
<option label="人民币 300 万元/年 - 500 万元/年" value="7">人民币 300 万元/年 - 500 万元/年</option>
<option label="人民币 500 万元/年 - 700 万元/年" value="8">人民币 500 万元/年 - 700 万元/年</option>
<option label="人民币 700 万元/年 - 1000 万元/年" value="9">人民币 700 万元/年 - 1000 万元/年</option>
<option label="人民币 1000 万元/年 - 2000 万元/年" value="10">人民币 1000 万元/年 - 2000 万元/年</option>
<option label="人民币 2000 万元/年 - 3000 万元/年" value="11">人民币 2000 万元/年 - 3000 万元/年</option>
<option label="人民币 3000 万元/年 - 5000 万元/年" value="12">人民币 3000 万元/年 - 5000 万元/年</option>
<option label="人民币 5000 万元/年 - 1 亿元/年" value="13">人民币 5000 万元/年 - 1 亿元/年</option>
<option label="人民币 1 亿元/年以上" value="14">人民币 1 亿元/年以上</option>
</select>

		  年进口额：<select name="importAmount" id="importAmount" separator=" ">
<option label="请选择" value="0" selected="selected">请选择</option>
<option label="人民币 10 万元/年以下" value="1">人民币 10 万元/年以下</option>
<option label="人民币 10 万元/年 - 30 万元/年" value="2">人民币 10 万元/年 - 30 万元/年</option>
<option label="人民币 30 万元/年 - 50 万元/年" value="3">人民币 30 万元/年 - 50 万元/年</option>
<option label="人民币 50 万元/年 - 100 万元/年" value="4">人民币 50 万元/年 - 100 万元/年</option>
<option label="人民币 100 万元/年 - 200 万元/年" value="5">人民币 100 万元/年 - 200 万元/年</option>
<option label="人民币 200 万元/年 - 300 万元/年" value="6">人民币 200 万元/年 - 300 万元/年</option>
<option label="人民币 300 万元/年 - 500 万元/年" value="7">人民币 300 万元/年 - 500 万元/年</option>
<option label="人民币 500 万元/年 - 700 万元/年" value="8">人民币 500 万元/年 - 700 万元/年</option>
<option label="人民币 700 万元/年 - 1000 万元/年" value="9">人民币 700 万元/年 - 1000 万元/年</option>
<option label="人民币 1000 万元/年 - 2000 万元/年" value="10">人民币 1000 万元/年 - 2000 万元/年</option>
<option label="人民币 2000 万元/年 - 3000 万元/年" value="11">人民币 2000 万元/年 - 3000 万元/年</option>
<option label="人民币 3000 万元/年 - 5000 万元/年" value="12">人民币 3000 万元/年 - 5000 万元/年</option>
<option label="人民币 5000 万元/年 - 1 亿元/年" value="13">人民币 5000 万元/年 - 1 亿元/年</option>
<option label="人民币 1 亿元/年以上" value="14">人民币 1 亿元/年以上</option>
</select>

          </div>
		</div>
       	<div class="formline">
          <div class="formlabel">银行帐号</div>
		  <div class="formcontent">
		  	开户银行：<input name="accountBank" id="accountBank" type="text" value="" style="width:150px;">
		  	帐号：<input name="account" id="account" type="text" value="" style="width:221px;">
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
		  	<input name="monthOutput" id="monthOutput" type="text" value="" style="width:100px;">
	           <select name="monthOutputUnit" id="monthOutputUnit" separator=" ">
<option label="台" value="1">台</option>
<option label="粒" value="2">粒</option>
<option label="座" value="3">座</option>
<option label="辆" value="4">辆</option>
<option label="只" value="5">只</option>
<option label="支" value="6">支</option>
<option label="枝" value="7">枝</option>
<option label="架" value="8">架</option>
<option label="头" value="9">头</option>
<option label="张" value="10">张</option>
<option label="块" value="11">块</option>
<option label="片" value="12">片</option>
<option label="匹" value="13">匹</option>
<option label="件" value="14">件</option>
<option label="根" value="15">根</option>
<option label="条" value="16">条</option>
<option label="把" value="17">把</option>
<option label="卷" value="18">卷</option>
<option label="副" value="19">副</option>
<option label="幅" value="20">幅</option>
<option label="双" value="21">双</option>
<option label="一打" value="22">一打</option>
<option label="份" value="23">份</option>
<option label="套" value="24">套</option>
<option label="棵" value="25">棵</option>
<option label="箱" value="26">箱</option>
<option label="袋" value="27">袋</option>
<option label="盒" value="28">盒</option>
<option label="包" value="29">包</option>
<option label="捆" value="30">捆</option>
<option label="筐" value="31">筐</option>
<option label="瓶（罐）" value="32">瓶（罐）</option>
<option label="毫米" value="33">毫米</option>
<option label="厘米" value="34">厘米</option>
<option label="米" value="35">米</option>
<option label="千米" value="36">千米</option>
<option label="英寸" value="37">英寸</option>
<option label="英尺" value="38">英尺</option>
<option label="加仑 (英)" value="39">加仑 (英)</option>
<option label="加仑 (美)" value="40">加仑 (美)</option>
<option label="克" value="41">克</option>
<option label="千克" value="42">千克</option>
<option label="磅" value="43">磅</option>
<option label="公吨" value="44">公吨</option>
<option label="吨 (英)" value="45">吨 (英)</option>
<option label="吨 (美)" value="46">吨 (美)</option>
<option label="毫升" value="47">毫升</option>
<option label="公升" value="48">公升</option>
<option label="盎司" value="49">盎司</option>
<option label="夸脱" value="50">夸脱</option>
<option label="品脱 (英)" value="51">品脱 (英)</option>
<option label="品脱 (美)" value="52">品脱 (美)</option>
<option label="码" value="53">码</option>
<option label="平方英尺" value="54">平方英尺</option>
<option label="平方英寸" value="55">平方英寸</option>
<option label="平方米" value="56">平方米</option>
<option label="平方码" value="57">平方码</option>
<option label="立方米" value="58">立方米</option>
</select>

		  </div>
		</div>
		<div class="formline">
	         <div class="formlabel">厂房面积：</div>
		  <div class="formcontent">
		  		<input name="workshopArea" id="workshopArea" type="text" value="" style="width:221px;">
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
<label><input type="checkbox" name="authType[]" value="ISO 9001">ISO 9001</label> 
<label><input type="checkbox" name="authType[]" value="ISO 9002">ISO 9002</label> 
<label><input type="checkbox" name="authType[]" value="ISO 9003">ISO 9003</label> 
<label><input type="checkbox" name="authType[]" value="ISO 9004">ISO 9004</label> 
<label><input type="checkbox" name="authType[]" value="ISO 14000">ISO 14000</label> 

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
      <input type="button" class="bigbutton" value="提交公司详细信息" onclick="return doSubmit(&#39;corpInfoForm&#39;, &#39;admin.php?op=CorpDetailInfoSubmit&amp;auth=adad359ab3bbd4093d728eb07a7c777d&#39;)">
</td></tr></tbody></table>
    <!--/提交按钮-->
</form>
</div> 	 	 	 
				 
				 
				 
	</div>
				 			 
	<div style="clear:both; font-size:0px; line-height:0px; height:0px; background-color:#FFFFFF"></div>
	<div style="clear:both; font-size:0px; line-height:0px; height:0px; background-color:#FFFFFF"></div>

</div>
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
