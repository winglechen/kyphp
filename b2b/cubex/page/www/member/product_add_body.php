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

<script type="text/javascript" src="http://my.cn.china.cn/resource/js/FCKeditor/ckeditor.js"></script> 
<script type="text/javascript" src="http://my.cn.china.cn/resource/js/FCKeditor/initCkEditor.js"></script>

<script language="javascript">
var langOfCk = 'zh-cn';

function unitChange()
{
    setUnit("price");       
    setUnit("minAmount");
    setUnit("totalAmount");
}
function setUnit(pre)
{
    var unitSpan = document.getElementById(pre + "Unit");
    if (!unitSpan) { return; }
    
    var unitObj = document.getElementById("measureUnit");
    if (!unitObj) { return; }

    if(unitObj.value!="")
    {
           unitSpan.innerHTML = unitObj.value;
    }
    else
    {
           unitSpan.innerHTML = "单位";
    }
}
function checkInput( )
{
	//检查内容长度
	var ckPassed = correct();
	if(!ckPassed)return false;

	var inputtext = ckPassed;
	var offerDetail = document.getElementById("introHidden");
	offerDetail.value = inputtext;

	var category3=document.getElementById("category3").value;
	var category2=document.getElementById("category2").value;
    if($("inSelect").style.display =="") 	
	{	if(category2=="" && category3=="")
		{
		    alert("请选择行业及产品门类目录");
			return false;
		}	
	}
	else
	{
		var  isIndusRadio = false;
		var indusRadioObj = document.getElementsByName("indusRadio");
		if(indusRadioObj)
		{
			for(var i = 0 ; i <indusRadioObj.length; i++)
    	{        
        if(indusRadioObj[i].checked)
        {
        	isIndusRadio = true;
        	break;
      	}
      }
		   if(!isIndusRadio)
		   {
		       alert("请选择行业及产品门类目录");
		       return false;
		   }
	 	}else
	 		{
	 			alert("请选择行业及产品门类目录");
	 			return false;
	 		}
	}
	return true;
}

function doSubmit(formId, doAction)
{
    var formObj = document.getElementById(formId);
    if (!checkInput(formObj))
        return false;
    if(!Validation.validAll())
        return false;

    formObj.target="";
    formObj.action = doAction;
    formObj.submit();
}
function doPreview(formId, doAction)
{
	var formObj = document.getElementById(formId);
	if(!Validation.validAll())	
		return false;
	if (!checkInput(formObj))
       	return false;
	formObj.target = "preview";
	formObj.action = doAction;
	var win = window.open("about:blank","preview","toolbar=yes,directories=no,status=yes,location=yes,menubar=yes,scrollbars=yes,resizable=yes,width=1000,height=600");
    win.focus();
    formObj.submit();
}
function displayNewGroup()
{
	var newGroupObj = $("newGroup");
	newGroupObj.show();
	var doNewGroupObj = $("doNewGroup");
	doNewGroupObj.hide();
	var cancelNewGroupObj = $("cancelNewGroup");
	cancelNewGroupObj.show();
	var newGroupNameObj = $("newGroupName");
	newGroupNameObj.focus();
	var selectGroups = $("selectGroup");
	selectGroups.disabled = true;
	
}
function hideNewGroup()
{
	var newGroupObj = $("newGroup");
	newGroupObj.hide();
	var doNewGroupObj = $("doNewGroup");
	doNewGroupObj.show();
	var cancelNewGroupObj = $("cancelNewGroup");
	cancelNewGroupObj.hide();
	var selectGroups = $("selectGroup");
	selectGroups.disabled = false;
}

function doOnBlur()
{
   var productV = $("productName").value;
   if(productV == "")
   {
     return false;   
   } 
   $("offerSubject").value = "供应"+productV;
   $("info_name").innerHTML = productV;
   var obji = document.getElementById("inCcontent");
   var objS = document.getElementById("inSelect");
   var indMRUObj = document.getElementById("indMRU");
   var indPathStrObj = document.getElementById("indPathStr");
   var indRecommendObj = document.getElementById("indRecommend");
   
   objS.style.display = "none";
   indMRUObj.style.display = "none";
   indPathStrObj.style.display = "none";
   indRecommendObj.style.display = '';
   obji.style.display = '';
   loadIndusrtyCate(productV, obji, objS,1);
}

function setSelect(selectObj)
{
	var selectValue = selectObj.options[selectObj.selectedIndex].text;
	var groupName = document.getElementById('newGroupName'); 
	if(selectValue != "选择供应组")
		groupName.value =  selectValue;
}

</script>





<div class="operationPage">
  <?php include "admin_nav.php"; ?>
  <div class="operationArea">
	<?php include "admin_menu.php"; ?>

	 	 	 	 
				 
				 
				 <div class="right">
  <form name="publishForm" id="publishForm" method="post" action="">
  	<input type="hidden" name="sellInfoId" value="">
    <input type="hidden" name="tradeLeadType" value="0">
    <input type="hidden" name="quantity" value="0">
    <input type="hidden" name="packaging" value="">
    <input type="hidden" name="modelNO" value="">
    <input type="hidden" name="placeOfOrigin" value="">
    <input type="hidden" name="brandName" value="">
    <input type="hidden" name="currency" value="">
    <input type="hidden" name="priceTerms" value="">
    <input type="hidden" name="otherPriceTerms" value="">
    <input type="hidden" name="paymentTerms" value="">
    <input type="hidden" name="paymentRemark" value="">
    <input type="hidden" name="port" value="">
    <input type="hidden" name="quality" value="">
    <input type="hidden" id="introHidden" name="offerDetail" value="">
        <div class="postTips"><span>提示：</span>发布供应信息，让客户快速找到您。</div>
    <div class="formblock">
      <div class="formheader">
        <div class="headerTitle">基本信息</div>
      </div>
      
       <div class="formline">
       <div class="formlabel"><span class="inputlabelok"></span>产品名称：<span>*</span></div>
       <div class="formcontent">
       <input name="productName" id="productName" value="" type="text" class="input220" onblur="doOnBlur()">
       <span id="oproductName_err"></span>
       <div class="note">产品名称中请勿出现规格、型号、品牌等内容.</div>
         </div>
        </div>

<div class="formline">
      <div class="formlabel"><span id="lbl_offerKeyword"></span>关键词：</div>
	   <div class="formcontent">
       	<input id="keyword1" name="keyword1" value="" type="text" size="8" class="">
        <input id="keyword2" name="keyword2" value="" type="text" size="8" class="">
        <input id="keyword3" name="keyword3" value="" type="text" size="8" class=""><br>
        <div class="note">为了让买家更精确的找到您，请填写产品名称的核心词、通称或别称。</div>
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

      <div class="formline">
        <div class="formlabel"><span id="lbl_fullCategory">&nbsp;</span>产品行业：<span>*</span></div>                
        <div class="formcontent">
         <div align="center" id="id_info" style="display:none">以下是根据您填写的产品名称<span id="info_name" style="color:red"></span>推荐给你的行业类别</div>                        
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
  
 function  hideEle()
  {
        $("inSelect").style.display = "";
        $("inCcontent").style.display = "none";
		$("id_info").style.display = "none";
       	var indMRUObj = document.getElementById("indMRU");
        indMRUObj.style.display = "";
        var indPathStrObj = document.getElementById("indPathStr");
        indPathStrObj.style.display = "";
        var indRecommendObj = document.getElementById("indRecommend");
        indRecommendObj.style.display = "none";
        var cateObj = document.getElementById('cateShow');
        cateObj.style.display = "none";
  }
  
</script>


<div id="inSelect" style="display:&#39;&#39;">
<select name="select" id="category1" size="8" style="width: 140px;height: 150px;" onchange="onChangeCategory1()"><option value="1">办公、文教</option><option value="239">电脑、软件</option><option value="372">电工电气</option><option value="629">化工</option><option value="1176">家用电器</option><option value="1277">建筑、建材</option><option value="1536">能源</option><option value="1590">农业</option><option value="1851">食品、饮料</option><option value="1970">医药、保养</option><option value="2056">印刷</option><option value="2149">加工</option><option value="2214">安全、防护</option><option value="2300">包装</option><option value="2381">纸业</option><option value="2442">纺织、皮革</option><option value="2623">服装</option><option value="2738">服饰</option><option value="2993">机械及行业设备</option><option value="3186">精细化学品</option><option value="3368">仪器仪表</option><option value="3504">交通运输</option><option value="3615">礼品、工艺品、饰品</option><option value="3816">汽摩及配件</option><option value="3967">通讯产品</option><option value="4058">玩具</option><option value="4157">冶金矿产</option><option value="4289">商务服务</option><option value="4378">二手设备转让</option><option value="4386">库存积压</option><option value="4396">照明工业</option><option value="4493">电子元器件</option><option value="4673">传媒</option><option value="4759">五金、工具</option><option value="5029">环保</option><option value="5055">家居用品</option><option value="5202">运动、休闲</option><option value="231">其他未分类</option></select>
<select name="select" id="category2" size="8" style="width: 140px;height: 150px;" onchange="onChangeCategory2()"></select>
<select name="select" id="category3" size="8" style="width: 140px;height: 150px; " onchange="onChangeCategory3()"></select>
</div>
<div id="inCcontent" style="display:none">
</div>
<script language="javascript"> loadCategories();</script>
<input type="hidden" name="categoryName" id="categoryName" value="">
<input type="hidden" name="categoryId" id="categoryId" value="">
<input type="hidden" id="selectedCate" name="selectedCate" value="">
<input type="hidden" name="popDivId" id="popDivId">
<div id="industryDiv" style="display:none"></div>
<div id="indRecommend" style="display:none; clear:both; padding:4px; font-size:10px; font-weight:bold"> <a href="http://my.cn.china.cn/admin.php?op=SellInfoPublishShow&auth=adad359ab3bbd4093d728eb07a7c777d#" onclick="hideEle()">推荐的行业没有合适的,我要重选行业。</a></div> 
<div id="indPathStr" style="clear:both; padding:4px; font-size:14px; font-weight:bold">您选择的行业类别是：<span id="fullCategory"></span></div>
<div id="indMRU" class="prompt" style="margin-bottom:10px;margin-top:20px;">
<table width="100%" cellspacing="5" cellpadding="0" border="0">
<tbody>
	
		<tr>
	  <td colspan="2"><strong>行业选择辅助工具</strong></td>
	  </tr>
	<tr>
	  <td>您常用的行业</td>
        <td><select name="industryMRU" id="industryMRU" onchange="industryMRUChange();" onmousewheel="return false;" style="width:350px;height:21px">
<option label="" value=""></option>
<option label="电脑、软件 &gt; 笔记本电脑" value="239,276">电脑、软件 &gt; 笔记本电脑</option>
</select>
</td>
    </tr>
        <tr>
      <td>行业查找</td>
        <td><input type="text" class="input173px" id="industryKW" name="industryKW">
        <input type="button" onclick="searchIndustry()" value="查询" name="searchCategory" id="searchCategory"></td>
    </tr>
    </tbody>
</table>
</div>		  <p></p><div id="cateShow" style="display:none;clear:both;padding:10px 0 10px; font-size:14px;font-weight:bold">您选择的行业类别是：<span id="selectIndustry" style="display:&#39;&#39;"></span></div><p></p>
          <input type="hidden" value="SELL" name="categoryType" id="categoryType">
          <input type="hidden" value="1" name="needExProp" id="needExProp">
          <script language="javascript">
                    var default_lev1_category="";//当前产品所属的一级分类
                    var default_lev2_category="";//当前产品所属的二级分类
                    var default_lev3_category="";//当前产品所属的三级分类                             
                    autoLoadCategoryByDefault(default_lev1_category,default_lev2_category,default_lev3_category);
          </script>
        </div>
      </div>
      <!--行业选择 end-->
<div class="formline">
  <div class="formlabel"><span id="lbl_offerSubject">&nbsp;</span>信息标题：<span>*</span></div>
  <div class="formcontent">
    <input name="offerSubject" id="offerSubject" value="" type="text" class="input220">
    <span id="offerSubject_err"></span>
    <div class="note">限50字以内，请务必填写准确，便于客户迅速找到您。<br>
      建议信息标题在标识产品分类的同时增加产品的具体信息，如型号、主要参数、行业用名。</div>
  </div>
      </div>
      
		<div class="formline">
        <div class="formlabel"><span id="lbl_offerSubject">&nbsp;</span>供应分组：</div>
        <div class="formcontent">
          <select name="selectGroup" id="selectGroup" onchange="setSelect(this)">
	           <option value="">选择供应组</option>
	     	        
          </select>
          <span id="doNewGroup" style="display:&quot;&quot;" '=""><a href="javascript:displayNewGroup();">没有合适的供应组，我要新建一个。</a></span> <span id="cancelNewGroup" style="display:none"><a id="cancelNewGroup" href="javascript:hideNewGroup();">取消新建供应组</a></span>
          <div id="newGroup" style="display:none"> 供应组名称:
			<input type="text" name="newGroupName" id="newGroupName" maxlength="50" value="" size="25" class="grayTabInput">
            (2-50 个字符)<br>
            供应组描述:
            <textarea name="newGroupDesc" id="newGroupDesc" cols="45" rows="8"></textarea>
            <br>
            <div class="note">最多200个字符</div>
          </div>
          <div class="note">新增产品时，将产品加入供应组。</div>
        </div>
      </div>
      
      <!--详细信息-->
      <div class="formline">
        <div class="formlabel"><span id="lbl_offerDetail">&nbsp;</span>详细说明：<span>*</span></div>
        <div class="formcontent">
		  <textarea cols="80" id="offerDetailHidden" name="offerDetailHidden" rows="10" style="visibility: hidden; display: none; ">		  </textarea><span id="cke_offerDetailHidden" onmousedown="return false;" class="cke_skin_kama" dir="ltr" title="" lang="zh-cn" tabindex="0"><span class="cke_browser_webkit"><span class="cke_wrapper cke_ltr"><table class="cke_editor" border="0" cellspacing="0" cellpadding="0"><tbody><tr style="-webkit-user-select: none; "><td id="cke_top_offerDetailHidden" class="cke_top"><div class="cke_toolbox"><span id="cke_3" class="cke_toolbar"><span class="cke_toolbar_start"></span><span class="cke_toolgroup"><span class="cke_button"><a id="cke_4" class="cke_off cke_button_newpage" href="javascript:void('新建')" title="新建" tabindex="-1" hidefocus="true" onkeydown="return CKEDITOR.ui.button._.keydown(0, event);" onfocus="return CKEDITOR.ui.button._.focus(0, event);" onclick="CKEDITOR.tools.callFunction(3, this); return false;"><span class="cke_icon"></span><span class="cke_label">新建</span></a></span><span class="cke_button"><a id="cke_5" class="cke_off cke_button_preview" href="javascript:void('预览')" title="预览" tabindex="-1" hidefocus="true" onkeydown="return CKEDITOR.ui.button._.keydown(1, event);" onfocus="return CKEDITOR.ui.button._.focus(1, event);" onclick="CKEDITOR.tools.callFunction(4, this); return false;"><span class="cke_icon"></span><span class="cke_label">预览</span></a></span></span><span class="cke_separator"></span><span class="cke_toolgroup"><span class="cke_button"><a id="cke_6" class="cke_off cke_button_cut" href="javascript:void('剪切')" title="剪切" tabindex="-1" hidefocus="true" onkeydown="return CKEDITOR.ui.button._.keydown(2, event);" onfocus="return CKEDITOR.ui.button._.focus(2, event);" onclick="CKEDITOR.tools.callFunction(5, this); return false;"><span class="cke_icon"></span><span class="cke_label">剪切</span></a></span><span class="cke_button"><a id="cke_7" class="cke_off cke_button_copy" href="javascript:void('复制')" title="复制" tabindex="-1" hidefocus="true" onkeydown="return CKEDITOR.ui.button._.keydown(3, event);" onfocus="return CKEDITOR.ui.button._.focus(3, event);" onclick="CKEDITOR.tools.callFunction(6, this); return false;"><span class="cke_icon"></span><span class="cke_label">复制</span></a></span><span class="cke_button"><a id="cke_8" class="cke_off cke_button_paste" href="javascript:void('粘贴')" title="粘贴" tabindex="-1" hidefocus="true" onkeydown="return CKEDITOR.ui.button._.keydown(4, event);" onfocus="return CKEDITOR.ui.button._.focus(4, event);" onclick="CKEDITOR.tools.callFunction(7, this); return false;"><span class="cke_icon"></span><span class="cke_label">粘贴</span></a></span></span><span class="cke_separator"></span><span class="cke_toolgroup"><span class="cke_button"><a id="cke_9" class="cke_button_undo cke_disabled" href="javascript:void('撤消')" title="撤消" tabindex="-1" hidefocus="true" onkeydown="return CKEDITOR.ui.button._.keydown(5, event);" onfocus="return CKEDITOR.ui.button._.focus(5, event);" onclick="CKEDITOR.tools.callFunction(8, this); return false;"><span class="cke_icon"></span><span class="cke_label">撤消<span class="cke_accessibility">, 不可用</span></span></a></span><span class="cke_button"><a id="cke_10" class="cke_button_redo cke_disabled" href="javascript:void('重做')" title="重做" tabindex="-1" hidefocus="true" onkeydown="return CKEDITOR.ui.button._.keydown(6, event);" onfocus="return CKEDITOR.ui.button._.focus(6, event);" onclick="CKEDITOR.tools.callFunction(9, this); return false;"><span class="cke_icon"></span><span class="cke_label">重做<span class="cke_accessibility">, 不可用</span></span></a></span></span><span class="cke_separator"></span><span class="cke_toolgroup"><span class="cke_button"><a id="cke_11" class="cke_off cke_button_selectAll" href="javascript:void('全选')" title="全选" tabindex="-1" hidefocus="true" onkeydown="return CKEDITOR.ui.button._.keydown(7, event);" onfocus="return CKEDITOR.ui.button._.focus(7, event);" onclick="CKEDITOR.tools.callFunction(10, this); return false;"><span class="cke_icon"></span><span class="cke_label">全选</span></a></span><span class="cke_button"><a id="cke_12" class="cke_off cke_button_removeFormat" href="javascript:void('清除格式')" title="清除格式" tabindex="-1" hidefocus="true" onkeydown="return CKEDITOR.ui.button._.keydown(8, event);" onfocus="return CKEDITOR.ui.button._.focus(8, event);" onclick="CKEDITOR.tools.callFunction(11, this); return false;"><span class="cke_icon"></span><span class="cke_label">清除格式</span></a></span></span><span class="cke_separator"></span><span class="cke_toolgroup"><span class="cke_button"><a id="cke_13" class="cke_off cke_button_bold" href="javascript:void('加粗')" title="加粗" tabindex="-1" hidefocus="true" onkeydown="return CKEDITOR.ui.button._.keydown(9, event);" onfocus="return CKEDITOR.ui.button._.focus(9, event);" onclick="CKEDITOR.tools.callFunction(12, this); return false;"><span class="cke_icon"></span><span class="cke_label">加粗</span></a></span><span class="cke_button"><a id="cke_14" class="cke_off cke_button_italic" href="javascript:void('倾斜')" title="倾斜" tabindex="-1" hidefocus="true" onkeydown="return CKEDITOR.ui.button._.keydown(10, event);" onfocus="return CKEDITOR.ui.button._.focus(10, event);" onclick="CKEDITOR.tools.callFunction(13, this); return false;"><span class="cke_icon"></span><span class="cke_label">倾斜</span></a></span><span class="cke_button"><a id="cke_15" class="cke_off cke_button_underline" href="javascript:void('下划线')" title="下划线" tabindex="-1" hidefocus="true" onkeydown="return CKEDITOR.ui.button._.keydown(11, event);" onfocus="return CKEDITOR.ui.button._.focus(11, event);" onclick="CKEDITOR.tools.callFunction(14, this); return false;"><span class="cke_icon"></span><span class="cke_label">下划线</span></a></span><span class="cke_button"><a id="cke_16" class="cke_off cke_button_strike" href="javascript:void('删除线')" title="删除线" tabindex="-1" hidefocus="true" onkeydown="return CKEDITOR.ui.button._.keydown(12, event);" onfocus="return CKEDITOR.ui.button._.focus(12, event);" onclick="CKEDITOR.tools.callFunction(15, this); return false;"><span class="cke_icon"></span><span class="cke_label">删除线</span></a></span></span><span class="cke_separator"></span><span class="cke_toolgroup"><span class="cke_button"><a id="cke_17" class="cke_off cke_button_subscript" href="javascript:void('下标')" title="下标" tabindex="-1" hidefocus="true" onkeydown="return CKEDITOR.ui.button._.keydown(13, event);" onfocus="return CKEDITOR.ui.button._.focus(13, event);" onclick="CKEDITOR.tools.callFunction(16, this); return false;"><span class="cke_icon"></span><span class="cke_label">下标</span></a></span><span class="cke_button"><a id="cke_18" class="cke_off cke_button_superscript" href="javascript:void('上标')" title="上标" tabindex="-1" hidefocus="true" onkeydown="return CKEDITOR.ui.button._.keydown(14, event);" onfocus="return CKEDITOR.ui.button._.focus(14, event);" onclick="CKEDITOR.tools.callFunction(17, this); return false;"><span class="cke_icon"></span><span class="cke_label">上标</span></a></span></span><span class="cke_separator"></span><span class="cke_toolgroup"><span class="cke_button"><a id="cke_19" class="cke_off cke_button_link" href="javascript:void('插入/编辑超链接')" title="插入/编辑超链接" tabindex="-1" hidefocus="true" onkeydown="return CKEDITOR.ui.button._.keydown(15, event);" onfocus="return CKEDITOR.ui.button._.focus(15, event);" onclick="CKEDITOR.tools.callFunction(18, this); return false;"><span class="cke_icon"></span><span class="cke_label">插入/编辑超链接</span></a></span><span class="cke_button"><a id="cke_20" class="cke_off cke_button_specialchar" href="javascript:void('插入特殊符号')" title="插入特殊符号" tabindex="-1" hidefocus="true" onkeydown="return CKEDITOR.ui.button._.keydown(16, event);" onfocus="return CKEDITOR.ui.button._.focus(16, event);" onclick="CKEDITOR.tools.callFunction(19, this); return false;"><span class="cke_icon"></span><span class="cke_label">插入特殊符号</span></a></span></span><span class="cke_separator"></span><span class="cke_toolgroup"><span class="cke_button"><a id="cke_21" class="cke_off cke_button_textcolor" href="javascript:void('文本颜色')" title="文本颜色" tabindex="-1" hidefocus="true" onkeydown="return CKEDITOR.ui.button._.keydown(17, event);" onfocus="return CKEDITOR.ui.button._.focus(17, event);" onclick="CKEDITOR.tools.callFunction(20, this); return false;"><span class="cke_icon"></span><span class="cke_label">文本颜色</span><span class="cke_buttonarrow"></span></a></span></span><span class="cke_separator"></span><span class="cke_toolgroup"><span class="cke_button"><a id="cke_22" class="cke_off cke_button_maximize" href="javascript:void('全屏')" title="全屏" tabindex="-1" hidefocus="true" onkeydown="return CKEDITOR.ui.button._.keydown(18, event);" onfocus="return CKEDITOR.ui.button._.focus(18, event);" onclick="CKEDITOR.tools.callFunction(21, this); return false;"><span class="cke_icon"></span><span class="cke_label">全屏</span></a></span></span><span class="cke_toolbar_end"></span></span><div class="cke_break"></div><span id="cke_24" class="cke_toolbar"><span class="cke_toolbar_start"></span><span class="cke_rcombo"><span id="cke_25" class="cke_styles cke_off"><span class="cke_label">样式</span><a hidefocus="true" title="样式" tabindex="-1" href="javascript:void('样式')" onkeydown="CKEDITOR.tools.callFunction( 23, event, this );" onclick="CKEDITOR.tools.callFunction(22, this); return false;"><span><span class="cke_accessibility">样式 </span><span id="cke_25_text" class="cke_text cke_inline_label">样式</span></span><span class="cke_openbutton"></span></a></span></span><span class="cke_rcombo"><span id="cke_26" class="cke_format cke_off"><span class="cke_label">格式</span><a hidefocus="true" title="格式" tabindex="-1" href="javascript:void('格式')" onkeydown="CKEDITOR.tools.callFunction( 25, event, this );" onclick="CKEDITOR.tools.callFunction(24, this); return false;"><span><span class="cke_accessibility">格式 </span><span id="cke_26_text" class="cke_text cke_inline_label">格式</span></span><span class="cke_openbutton"></span></a></span></span><span class="cke_rcombo"><span id="cke_27" class="cke_font cke_off"><span class="cke_label">字体</span><a hidefocus="true" title="字体" tabindex="-1" href="javascript:void('字体')" onkeydown="CKEDITOR.tools.callFunction( 27, event, this );" onclick="CKEDITOR.tools.callFunction(26, this); return false;"><span><span class="cke_accessibility">字体 </span><span id="cke_27_text" class="cke_text cke_inline_label">字体</span></span><span class="cke_openbutton"></span></a></span></span><span class="cke_rcombo"><span id="cke_28" class="cke_fontSize cke_off"><span class="cke_label">大小</span><a hidefocus="true" title="大小" tabindex="-1" href="javascript:void('大小')" onkeydown="CKEDITOR.tools.callFunction( 29, event, this );" onclick="CKEDITOR.tools.callFunction(28, this); return false;"><span><span class="cke_accessibility">文字大小 </span><span id="cke_28_text" class="cke_text cke_inline_label">大小</span></span><span class="cke_openbutton"></span></a></span></span><span class="cke_toolbar_end"></span></span></div><a id="cke_29" class="cke_toolbox_collapser" onclick="CKEDITOR.tools.callFunction(30)"></a></td></tr><tr><td id="cke_contents_offerDetailHidden" class="cke_contents" style="height:200px"><iframe style="width:100%;height:100%" frameborder="0" tabindex="-1" allowtransparency="true" src="javascript:void(%20(%20function()%7Bdocument.open()%3Bdocument.write(%20window.parent%5B%20%22_cke_htmlToLoad_offerDetailHidden%22%20%5D%20)%3Bdocument.close()%3Bwindow.parent%5B%20%22_cke_htmlToLoad_offerDetailHidden%22%20%5D%20%3D%20null%3B%7D)()%20)" title="富文本编辑器, offerDetailHidden" name="富文本编辑器, offerDetailHidden"></iframe></td></tr><tr style="-webkit-user-select: none; "><td id="cke_bottom_offerDetailHidden" class="cke_bottom"><div id="cke_path_offerDetailHidden" class="cke_path"><span class="cke_empty">&nbsp;</span></div><div class="cke_resizer" title="拖拽以改变尺寸" onmousedown="CKEDITOR.tools.callFunction(2, event)"></div></td></tr></tbody></table><style>.cke_skin_kama{visibility:hidden;}</style></span></span></span>
          <span id="offerDetail_err"></span>
          <div class="note">字数限制在10个字5000个字之间．<br>
            但不要出现任何联系信息。如：电话、传真、手机、电子邮箱等。<br>
            i.详细说明应以中文提供仅针对当前产品的文字<br>
            ii.	建议将产品的主要特征与参数、型号等信息置于详细说明的开始位置 </div>
        </div>
      </div>
      <!--详细信息 end-->
      <div class="formline" id="expropTr" style=" display:none; ">
        <div class="formlabel">产品描述:</div>
        <div class="formcontent">
          <div id="loadIndicator" style="margin: 0px; padding: 0px; display: none;"><img src="./res/indicator.gif">正在加载产品描述……</div>
          <table id="expropTable" width="100%" cellspacing="5" cellpadding="0" border="0">
            <tbody>
            
                        </tbody>
          </table>
        </div>
      </div>
      
      <div class="formline">
        <div class="formlabel"><span class="inputlabelok"></span>信息有效期：<span>*</span></div>
        <div id="expireDiv" class="formcontent">
          <label>
          <input type="radio" name="offerExpire" value="10">
          10天</label>
          <label>
          <input type="radio" name="offerExpire" value="20">
          20天</label>
          <label>
          <input type="radio" name="offerExpire" value="30">
          1个月</label>
          <label>
          <input type="radio" name="offerExpire" value="90" checked="">
          3个月</label>
        </div>
      </div>
      <div class="formline">
        <div class="formlabel"><span class="inputlabelok"></span>自动重发<span>*</span></div>
        <div id="expireDiv" class="formcontent">
          <input type="radio" name="retread" value="1" checked="">
          <label for="radio">是</label>
          <input type="radio" name="retread" value="0">
          <label for="radio">否</label>
          <div class="note">选择自动重发，信息将在过期后自动重新上线。</div>
        </div>
      </div>
      <div class="formline">
        <div class="formlabel">上传图片：</div>
        <div class="formcontent"> <script type="text/javascript" src="./res/jquery.js"></script>
<script type="text/javascript" src="./res/ajaxfileupload.js"></script>

<script type="text/javascript">
jQuery.noConflict();
function 

ajaxFileUpload0()

{

	var $j = jQuery;
	$j("#loading")
	.ajaxStart(function(){
		$j(this).show();
	})
	.ajaxComplete(function(){
		$j(this).hide();
	});
	$j.ajaxFileUpload
	(
		{

			url:'/ajax.php?op=uploadFile&canWatertMarker='+document.getElementById("watermarker").checked+'&fileFieldName=imageToUpload&picIndex=0',
			secureuri:false,
			fileElementId:'imageToUpload0',

			dataType: 'json',
			success: function (data, status)
			{
				if(typeof(data.error) != 'undefined')
				{
					if(data.error != '')
					{
						alert(data.error);
					}
					else
					{

						document.getElementById("uploadImage0").src = data.imgUrl;

					}
				}
			},
			error: function (data, status, e)
			{
				alert("请上传合法图片");
			}
		}
	)
	return false;
}
</script>



<img id="loading" src="./res/loading.gif" style="display:none;">
<table cellspacing="0" cellpadding="0" width="100%" border="0">
  <input type="hidden" name="picIndex" id="picIndex" value="0">
  <tbody><tr>
    <td width="109" id="tdpic01"><img name="uploadImage0" id="uploadImage0" src="./res/no_pic.gif" width="100" height="100"></td>
    <td height="35" valign="top">
    <table border="0" cellspacing="0" cellpadding="0">
      <tbody><tr>
        <td>
          <input id="imageToUpload0" type="file" name="imageToUpload0" size="30" style="font-size: 9pt" onchange="ajaxFileUpload0();">
          <!-- <input type="button" name="upload" value="上传" style="font-size: 9pt" onclick="return ajaxFileUpload0();">	 -->
        </td>
      </tr>
    </tbody></table>
    <table border="0" cellspacing="0" cellpadding="0">
      <tbody><tr>
        <td height="25"><input name="watermarker" id="watermarker" type="checkbox" checked=""></td>
        <td>图片加水印以防盗用</td>
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


          <div class="note"> i.	图片比例为1：1时会让页面看起来更整洁。<br>
            ii.	大于300 X 300像素的产品图片有利于让访客更轻松方便的了解你的产品<br>
            iii.	保持全站风格统一的产品图片可以让访客对您的网站更加印象深刻 </div>
        </div>
      </div>
    </div>
    <div class="formblock">
      <div class="formheader">
        <div class="headerTitle">交易条件</div>
      </div>
      <div class="formline">
        <div class="formlabel">交易条件：</div>
        <div class="formcontent">
          <div class="prompt">明码标价的信息更受买家青睐，建议您填全交易条件，吸引买家。</div>
          <br>
          <table width="100%" cellspacing="5" cellpadding="0" border="0">
            <tbody>
              <tr>
                <td width="140" align="right">计量单位：</td>
                <td><select name="measureUnit" id="measureUnit" onchange="unitChange()">
<option label="请选择" value="">请选择</option>
<option label="台" value="台">台</option>
<option label="粒" value="粒">粒</option>
<option label="座" value="座">座</option>
<option label="辆" value="辆">辆</option>
<option label="只" value="只">只</option>
<option label="支" value="支">支</option>
<option label="枝" value="枝">枝</option>
<option label="架" value="架">架</option>
<option label="头" value="头">头</option>
<option label="张" value="张">张</option>
<option label="块" value="块">块</option>
<option label="片" value="片">片</option>
<option label="匹" value="匹">匹</option>
<option label="件" value="件">件</option>
<option label="根" value="根">根</option>
<option label="条" value="条">条</option>
<option label="把" value="把">把</option>
<option label="卷" value="卷">卷</option>
<option label="副" value="副">副</option>
<option label="幅" value="幅">幅</option>
<option label="双" value="双">双</option>
<option label="一打" value="一打">一打</option>
<option label="份" value="份">份</option>
<option label="套" value="套">套</option>
<option label="棵" value="棵">棵</option>
<option label="箱" value="箱">箱</option>
<option label="袋" value="袋">袋</option>
<option label="盒" value="盒">盒</option>
<option label="包" value="包">包</option>
<option label="捆" value="捆">捆</option>
<option label="筐" value="筐">筐</option>
<option label="瓶（罐）" value="瓶（罐）">瓶（罐）</option>
<option label="毫米" value="毫米">毫米</option>
<option label="厘米" value="厘米">厘米</option>
<option label="米" value="米">米</option>
<option label="千米" value="千米">千米</option>
<option label="英寸" value="英寸">英寸</option>
<option label="英尺" value="英尺">英尺</option>
<option label="加仑 (英)" value="加仑 (英)">加仑 (英)</option>
<option label="加仑 (美)" value="加仑 (美)">加仑 (美)</option>
<option label="克" value="克">克</option>
<option label="千克" value="千克">千克</option>
<option label="磅" value="磅">磅</option>
<option label="公吨" value="公吨">公吨</option>
<option label="吨 (英)" value="吨 (英)">吨 (英)</option>
<option label="吨 (美)" value="吨 (美)">吨 (美)</option>
<option label="毫升" value="毫升">毫升</option>
<option label="公升" value="公升">公升</option>
<option label="盎司" value="盎司">盎司</option>
<option label="夸脱" value="夸脱">夸脱</option>
<option label="品脱 (英)" value="品脱 (英)">品脱 (英)</option>
<option label="品脱 (美)" value="品脱 (美)">品脱 (美)</option>
<option label="码" value="码">码</option>
<option label="平方英尺" value="平方英尺">平方英尺</option>
<option label="平方英寸" value="平方英寸">平方英寸</option>
<option label="平方米" value="平方米">平方米</option>
<option label="平方码" value="平方码">平方码</option>
<option label="立方米" value="立方米">立方米</option>
</select>
</td>
              </tr>
              <tr>
                <td align="right">产品单价：</td>
                <td><input name="productPrice" id="productPrice" type="text" class="input173px" value="">
                  元/<span id="priceUnit"> 单位 </span> <span id="productPrice_err"> </span></td>
              </tr>
              <tr>
                <td align="right">最小起订量：</td>
                <td><input name="minAmount" id="minAmount" type="text" class="input173px" value="">
                  <span id="minAmountUnit"> 单位 </span> <span id="minAmount_err"></span> </td>
              </tr>
              <tr>
                <td align="right">供货总量：</td>
                <td><input name="totalAmount" id="totalAmount" type="text" class="input173px" value="">
                  <span id="totalAmountUnit"> 单位 </span> <span id="totalAmount_err"></span> </td>
              </tr>
              <tr>
                <td align="right">发货期限：</td>
                <td>自买家付款之日起
                  <input name="deliverDate" id="deliverDate" type="text" value="" size="2">
                  天内发货</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div style="clear:both; font-size:0px; line-height:0px; height:0px; background-color:#FFFFFF"></div>
    
    <script language="JavaScript" type="text/javascript"> 
            Validation.register('offerSubject','请填信息标题','noblank');
            Validation.register('offerSubject','信息标题请在50个字以内','text',{max:50});
            Validation.register('productPrice','(请填写数字)','number_cn');
            Validation.register('minAmount','请填写数字','number_cn');
            Validation.register('totalAmount','请填写数字','number_cn');
            Validation.register('totalAmount','(最小起订量大于供货总量)<br>','greater_cn','minAmount');
            Validation.register('productName','产品名称不能为空','noblank');            
            Validation.register('deliverDate','请填写数字','number_cn');
            Validation.register('deliverDate', '请填写有效的发货期限(1-100)天', 'number_cn',{max:100,min:1});
            Validation.setOnblurvalidation();
      </script>
    
    <table align="center">
      <tbody><tr>
        <td align="center"><input type="button" class="bigbutton" value="预览此商机信息" onclick="doPreview(&#39;publishForm&#39;, &#39;admin.php?op=SellInfoPreview&amp;auth=adad359ab3bbd4093d728eb07a7c777d&#39;);">
          <input type="button" value="完成,发布!" class="bigbutton" onclick="doSubmit(&#39;publishForm&#39;, &#39;admin.php?op=SellInfoPublish&amp;auth=adad359ab3bbd4093d728eb07a7c777d&#39;);">
        </td>
      </tr>
    </tbody></table>
  </form>
</div>
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
<div style="clear:both; font-size:0px; line-height:0px; height:0px; background-color:#FFFFFF"></div>

		<div style="clear:both; font-size:0px; line-height:0px; height:0px; background-color:#FFFFFF"></div>
	</div>
</div>