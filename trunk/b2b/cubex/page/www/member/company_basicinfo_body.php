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
		<!--基本信息-->
	<div class="formblock">
        <div class="formheader">
          <div class="headerTitle">基本信息(必填部分)</div>
        </div>
        <div class="formline">
          <div class="formlabel">公司名称：<span>*</span></div>
		  <div class="formcontent">
		   		 
				<input name="corpname" id="corpname" type="text" value="博爱人生网络有限公司" style="width:221px;">
				<span id="corpname_err"></span>
			  	<div class="note">请填写贵公司的中文全称，如：北京浩天有限责任公司。</div>
					  </div>
        </div>
        <div class="formline">
          <div class="formlabel">企业类型：<span>*</span></div>
		  <div class="formcontent">
		    			     
            	   <select name="corptype" id="corptype" separator=" ">
<option label="请选择" value="0">请选择</option>
<option label="个体经营" value="101">个体经营</option>
<option label="私营独资企业" value="201" selected="selected">私营独资企业</option>
<option label="私营合伙企业" value="202">私营合伙企业</option>
<option label="私营有限责任公司" value="203">私营有限责任公司</option>
<option label="私营股份有限公司" value="204">私营股份有限公司</option>
<option label="国有企业" value="205">国有企业</option>
<option label="集体企业" value="206">集体企业</option>
<option label="股份合作企业" value="207">股份合作企业</option>
<option label="联营企业" value="208">联营企业</option>
<option label="有限责任公司(国有独资)" value="209">有限责任公司(国有独资)</option>
<option label="其他有限责任公司" value="210">其他有限责任公司</option>
<option label="股份有限公司" value="211">股份有限公司</option>
<option label="其他内资企业" value="212">其他内资企业</option>
<option label="有限责任公司(中外合资)" value="213">有限责任公司(中外合资)</option>
<option label="三来一补" value="301">三来一补</option>
<option label="分支机构" value="302">分支机构</option>
<option label="合资经营企业(港或澳、台资)" value="401">合资经营企业(港或澳、台资)</option>
<option label="合作经营企业(港或澳、台资)" value="402">合作经营企业(港或澳、台资)</option>
<option label="港、澳、台商独资经营企业" value="403">港、澳、台商独资经营企业</option>
<option label="港、澳、台商投资股份有限公司" value="404">港、澳、台商投资股份有限公司</option>
<option label="中外合资经营企业" value="405">中外合资经营企业</option>
<option label="中外合作经营企业" value="406">中外合作经营企业</option>
<option label="外资企业" value="407">外资企业</option>
<option label="外商投资股份有限公司" value="408">外商投资股份有限公司</option>
<option label="政府机构" value="501">政府机构</option>
<option label="非盈利组织" value="502">非盈利组织</option>
<option label="其他" value="503">其他</option>
</select>

	       						<span id="corptype_err"></span>
						</div>
        </div> 
<!-- //TODO::whd 移走到公司详细信息中 -->
<!-- 
 -->
        <div class="formline">
          <div class="formlabel">公司简介：<span>*</span><br><span class="hui12">(50-1200 字)</span></div>
		  <div class="formcontent">
		  	<textarea name="corpintro" cols="60" rows="10" id="corpintro">博爱人生，勇者胜！博爱人生，勇者胜！博爱人生，勇者胜！博爱人生，勇者胜！博爱人生，勇者胜！博爱人生，勇者胜！博爱人生，勇者胜！博爱人生，勇者胜！</textarea>
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
	<!--行业信息-->
   	
<script language="JavaScript" type="text/javascript">
<!--//
function doAddIndustry()
{
	var industrysObj = document.getElementById('categories');
	var dspIndustryObj = document.getElementById('displayIndustryPaths');
	var fcObj = document.getElementById("fullCategory");
	var industryIdObj = document.getElementById("categoryId");
	var industryId = industryIdObj.value;
	var industrysStr = industrysObj.value;
	var industrys = industrysStr.split(",");
	if(industrys.length > 8)
	{
		alert("行业最多可以选择8个");
		return false;
	}
	else
	{
		var canAdd = true;
		for(i=0; i<industrys.length; i++)
		{
			if(industrys[i] == industryId)
			{
				canAdd = false;
			}
		}
		if(canAdd)
		{
			var pathStr = (fcObj.textContent==undefined)?fcObj.innerText:fcObj.textContent;
			var dspIndustryStr = "<p id="+industryIdObj.value+">"+pathStr+"(<a href='javascript:void(0);' onclick='doDeleteIndustry("+industryIdObj.value+")'>删除</a>)</p>&nbsp;&nbsp;&nbsp;";
			dspIndustryObj.innerHTML = dspIndustryObj.innerHTML+dspIndustryStr;
			industrysStr += industryId+",";
			industrysObj.value = industrysStr;
		}
	}
}
function contains(str, kw)
{
	var regEx = new RegExp(kw);
	return regEx.test(str);
}
function doDeleteIndustry(id)
{
	var dspIndustryObj = document.getElementById('displayIndustryPaths');
	var dspIndustryStr = dspIndustryObj.innerHTML;
	var splitDspIndustrys = dspIndustryStr.split("&nbsp;&nbsp;&nbsp;");
	var dspIndustryStr = "";
	for(i=0; i<splitDspIndustrys.length; i++)
	{
		if(splitDspIndustrys[i] != "")
		{
			if(contains(splitDspIndustrys[i], id) == false)
			{
				dspIndustryStr += splitDspIndustrys[i]+"&nbsp;&nbsp;&nbsp;";
			}
		}
	}
	dspIndustryObj.innerHTML = dspIndustryStr;
	resetIndustrys(id);
}
function resetIndustrys(id)
{
	var dspIndustryObj = document.getElementById('displayIndustryPaths');
	var dspIndustryStr = dspIndustryObj.innerHTML;
	var industrysObj = document.getElementById('categories');
	var orgIndustrysStr = industrysObj.value;
	var industrys = orgIndustrysStr.split(",");
	var industrysStr = "";
	for(i=0; i<industrys.length; i++)
	{
		if(industrys[i] != "" && industrys[i] != id && contains(dspIndustryStr, industrys[i]))
		{
			industrysStr += industrys[i]+",";
		}
	}
	industrysObj.value = industrysStr;
}
//-->
</script>

 <div class="formblock">
      <div class="formline">
        <div class="formlabel">公司主营行业：<span>*</span></div>
        <div class="formcontent">
          <!-- 显示选择的行业 -->
          <span id="categories_err"></span>
          <div id="displayIndustryPaths">
          
           	           	           	<p id="276">电脑、软件&gt;&gt;笔记本电脑(<a href="javascript:void(0);" onclick="doDeleteIndustry(&quot;276&quot;)">删除</a>)</p>&nbsp;&nbsp;&nbsp;
	                                </div>
          <p>&nbsp;</p>
          <p>您最多可选择<font color="ff6600"><b>8</b></font>个行业。</p>
          <!--行业选择控件-->
          <script language="JavaScript" type="text/JavaScript" src="./res/prototype(1).js"></script>
<script language="JavaScript" type="text/JavaScript" src="./res/window.js"></script>
<script language="JavaScript" type="text/JavaScript" src="./res/application.js"></script>
<script language="JavaScript" type="text/JavaScript" src="./res/effects.js"></script>
<script language="JavaScript" type="text/JavaScript" src="./res/ajaxindustry.js"></script>
<link href="./res/popdiv.css" rel="stylesheet" type="text/css">

<script language="javascript">  
  function industryMRUChange()
  {
    $("industryMRU").blur();
    var industryPath = $("industryMRU").value;
    if (industryPath != "")
    {
        var industries = industryPath.split(",");
        if (industries.length > 2)
            tId = industries[2];
        else
           tId = null;
        selectIndustryPath(industries[0], industries[1], tId)
    }   
  } 
  function searchIndustry()
  {
        var kwObj = document.getElementById("industryKW");
        var industryDivObj = document.getElementById("industryDiv");
        var kw = kwObj.value;
        if(kw == '')
        {
            alert('请输入行业关键词！');
        }
        else
        {
            searchIndustryByKW(kw, industryDivObj);
        }
  }
</script>

<select name="select" id="category1" size="8" style="width: 140px;height: 150px;" onchange="onChangeCategory1()"><option value="1">办公、文教</option><option value="239">电脑、软件</option><option value="372">电工电气</option><option value="629">化工</option><option value="1176">家用电器</option><option value="1277">建筑、建材</option><option value="1536">能源</option><option value="1590">农业</option><option value="1851">食品、饮料</option><option value="1970">医药、保养</option><option value="2056">印刷</option><option value="2149">加工</option><option value="2214">安全、防护</option><option value="2300">包装</option><option value="2381">纸业</option><option value="2442">纺织、皮革</option><option value="2623">服装</option><option value="2738">服饰</option><option value="2993">机械及行业设备</option><option value="3186">精细化学品</option><option value="3368">仪器仪表</option><option value="3504">交通运输</option><option value="3615">礼品、工艺品、饰品</option><option value="3816">汽摩及配件</option><option value="3967">通讯产品</option><option value="4058">玩具</option><option value="4157">冶金矿产</option><option value="4289">商务服务</option><option value="4378">二手设备转让</option><option value="4386">库存积压</option><option value="4396">照明工业</option><option value="4493">电子元器件</option><option value="4673">传媒</option><option value="4759">五金、工具</option><option value="5029">环保</option><option value="5055">家居用品</option><option value="5202">运动、休闲</option><option value="231">其他未分类</option></select>
<select name="select" id="category2" size="8" style="width: 140px;height: 150px;" onchange="onChangeCategory2()"></select>
<select name="select" id="category3" size="8" style="width: 140px;height: 150px; " onchange="onChangeCategory3()"></select><br>
<script language="javascript"> loadCategories();</script>

<input type="hidden" name="categoryName" id="categoryName" value="">
<input type="hidden" name="categoryId" id="categoryId" value="">
<input type="hidden" id="selectedCate" name="selectedCate" value="">
<input type="hidden" name="popDivId" id="popDivId">
<div id="industryDiv" style="display:none"></div> 

<div style="clear:both; padding:4px; font-size:14px; font-weight:bold">您选择的行业类目是：<span id="fullCategory"></span></div>
<div class="prompt" style="margin-bottom: 10px;">
<table width="100%" cellspacing="5" cellpadding="0" border="0">
<tbody>
	    <tr>
      <td>行业查找</td>
        <td><input type="text" class="input173px" id="industryKW" name="industryKW">
        <input type="button" onclick="searchIndustry()" value="查询" name="searchCategory" id="searchCategory"></td>
    </tr>
    </tbody>
</table>
</div>          <!--/行业选择控件-->
          <input type="button" name="industryBt" value=" 设为主营行业 " onclick="doAddIndustry();">
          <input type="hidden" id="categories" name="categories" value="276,">
          <input type="hidden" value="0" name="needExProp" id="needExProp">
          <input type="hidden" name="categoryType" id="categoryType" value="PRODUCT">
        </div>
      </div>
    </div>

<script language="JavaScript" type="text/javascript">
<!--//
resetIndustrys('');
Validation.register('categories','请选择公司主营行业','noblank');
//-->
</script>
	<!--行业信息-->
	    <!--提交按钮-->
<table width="100%"><tbody><tr><td align="center">
      <input type="button" class="bigbutton" value="提交公司基本信息" onclick="return doSubmit(&#39;corpInfoForm&#39;, &#39;admin.php?op=CorpBaseInfoSubmit&amp;auth=adad359ab3bbd4093d728eb07a7c777d&#39;)">
</td></tr></tbody></table>
    <!--/提交按钮-->
</form>
</div>
<script language="JavaScript" type="text/javascript">
<!--
	
	Validation.register('corpname','公司名称不能为空','noblank');	
	Validation.register('corpname','公司名称长度不能超过100','text',{max:100,min:1});
    Validation.register('corpname', '不允许英文和数字结尾或者全为英文和数字','noendenglish');
    Validation.register('corpname', '不允许的非法字符', 'specialcharacter');
    Validation.register('corpname', '公司名称不能小于5个', 'text',{min:5});
	Validation.register('corptype','请选企业类型','noblank');
	Validation.register('corptype','请选企业类型','SelectValue');
	

	
	Validation.register('corpintro','请填写简介','noblank');
	Validation.register('corpintro','简介字数在50-1200之间','text',{max:1200,min:50});
	
-->
</script>


		<div style="clear:both; font-size:0px; line-height:0px; height:0px; background-color:#FFFFFF"></div>	 	 	
	 	 	 	 
				 
				 
				 
	</div>
				 			 
	<div style="clear:both; font-size:0px; line-height:0px; height:0px; background-color:#FFFFFF"></div>
	<div style="clear:both; font-size:0px; line-height:0px; height:0px; background-color:#FFFFFF"></div>

</div>
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
