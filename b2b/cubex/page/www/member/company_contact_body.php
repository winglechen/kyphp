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
<script language="javascript" src="./res/areas.js"></script>
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

	 
	 
	 
	 
	 
	 
	 <script>

corpId = "1684368535";

function getValues()
{
	var t_p = document.getElementById("t_province");
	var t_c = document.getElementById("t_city");
	var p = document.getElementById("province");
	var c = document.getElementById("capitalcity");
	t_p.value = p.value;
	t_c.value = c.value;
}
function doSubmit(formId, doAction)
{
    var formObj = document.getElementById(formId);
    getValues();
    if(!Validation.validAll())
        return false;
    if (document.getElementById("t_city").value=="00")
    {
	  	alert("请选择地区");
	  	return false;
	}
    formObj.target="";
    formObj.action = doAction;
    formObj.submit();
}  

function reportError(request, ex) 
{
	if (ex.name == "NS_ERROR_NOT_AVAILABLE")
	{
		//alert('请求未完成');
		return;
	}
	alert("执行请求过程中发生错误：\n\n  " + ex.message + "  \n\n请刷新页面重试。");
}

function robotBind()
{
	var msnObj = document.getElementById('msn');
	Validation.register('msn', '请填写正确的MSN','email');
	if(Validation.valid(msnObj.id) == true)
	{
		var url = "admin.php?op=ShowRobotBind&msn="+$F('msn');
		var win = window.open (url,'newwindow','height=500,width=700,top=0,left=0,toolbar=no,menubar=no,scrollbars=no, resizable=no,location=no, status=no'); 
	}
}
</script>


<div class="right">
 		<div class="postTips">联系方式 (带 <span>*</span> 为必填项) </div>
<form id="editForm" name="editForm" action="" method="post">
	<div class="formblock">
        <input type="hidden" name="modType" value="">
        <div class="formheader"><div class="headerTitle">联系方式</div></div>        
        <div class="formline">
          <div class="formlabel">业务联系人姓名：<span>*</span></div>
		  <div class="formcontent">
		    	<input name="name" id="name" type="text" value="陈思源">
                <span id="name_err"></span>
		</div>
        </div>
        <div class="formline">
          <div class="formlabel">性别：<span>*</span></div>
		  <div class="formcontent">
		  	      
		    	     <label><input type="radio" name="gender" value="0" checked="checked" id="gender">先生</label> 
<label><input type="radio" name="gender" value="1" id="gender">女士</label> 

		          		</div>
        </div>
        <div class="formline">
          <div class="formlabel">公司电话：<span>*</span></div>

		  <div class="formcontent">国家区码 地区区码 电话号码 分机号码<br>
		        <input name="phoneCountryCode" id="phoneCountryCode" type="text" value="86" size="4" style="height:21px;width:40px">
		        <input name="phoneRegionCode" id="phoneRegionCode" type="text" value="0571" size="4" style="height:21px;width:40px">  
                <input name="phone" id="phone" type="text" value="8632669" size="20" style="height:21px;width:98px">
				- <input name="phoneExtCode" id="phoneExtCode" type="text" value="" size="4" style="height:21px;width:40px">
                <span id="phoneCountryCode_err"></span>
                <span id="phoneRegionCode_err"></span>
                <span id="phone_err"></span>
                <span id="phoneExtCode_err"></span>
		  </div>
        </div>
        <div class="formline">
          <div class="formlabel">传真：<span>*</span></div>
		  <div class="formcontent">国家区码 地区区码 传真 分机号码<br>
                <input name="faxCountryCode" id="faxCountryCode" type="text" value="86" size="4" style="height:21px;width:40px">                
                <input name="faxRegionCode" id="faxRegionCode" type="text" value="0571" size="4" style="height:21px;width:40px">
                <input name="fax" id="fax" type="text" value="8632669" size="20" style="height:21px;width:98px">
                - <input name="faxExtCode" id="faxExtCode" type="text" value="" size="4" style="height:21px;width:40px">
                <span id="faxCountryCode_err"></span>
                <span id="faxRegionCode_err"></span> 
                <span id="fax_err"></span>
                <span id="faxExtCode_err"></span>
		 </div>
        </div>
        <div class="formline">
          <div class="formlabel">E-mail：<span>*</span></div>
		  <div class="formcontent">
		    	<input type="text" name="email" id="email" value="winglechen@yahoo.com.cn" style="width:221px;height:21px">
                <span id="email_err"></span>
		  </div>
        </div>
        <div class="formline">
          <div class="formlabel">所在地区：<span>*</span></div>
		  <div class="formcontent">
		    	<select name="tt_province" id="province" style="width:74px;height:21px">
                        
                      <option value="0">省份</option><option value="云南">云南</option><option value="浙江">浙江</option><option value="新疆">新疆</option><option value="西藏">西藏</option><option value="重庆">重庆</option><option value="天津">天津</option><option value="四川">四川</option><option value="陕西">陕西</option><option value="山东">山东</option><option value="山西">山西</option><option value="广东">广东</option><option value="上海">上海</option><option value="青海">青海</option><option value="宁夏">宁夏</option><option value="内蒙古">内蒙古</option><option value="辽宁">辽宁</option><option value="江西">江西</option><option value="江苏">江苏</option><option value="吉林">吉林</option><option value="湖南">湖南</option><option value="湖北">湖北</option><option value="黑龙江">黑龙江</option><option value="河南">河南</option><option value="河北">河北</option><option value="海南">海南</option><option value="贵州">贵州</option><option value="广西">广西</option><option value="甘肃">甘肃</option><option value="福建">福建</option><option value="北京">北京</option><option value="安徽">安徽</option><option value="香港">香港</option><option value="澳门">澳门</option><option value="台湾">台湾</option></select>
                        <select name="tt_city" id="capitalcity" style="width:74px;height:21px">
                          
                        <option value="丽水">丽水</option><option value="台州">台州</option><option value="舟山">舟山</option><option value="衢州">衢州</option><option value="金华">金华</option><option value="绍兴">绍兴</option><option value="湖州">湖州</option><option value="嘉兴">嘉兴</option><option value="温州">温州</option><option value="宁波">宁波</option><option value="杭州">杭州</option></select>
                        <select name="select" id="city" style="width:74px;height:21px;display:none">
                          
                        <option value="淳安县">淳安县</option><option value="桐庐县">桐庐县</option><option value="临安市">临安市</option><option value="富阳市">富阳市</option><option value="建德市">建德市</option><option value="杭州市">杭州市</option></select>
                        <input name="t_province" id="t_province" type="hidden" value="浙江">
                        <input name="t_city" id="t_city" type="hidden" value="杭州">
						
                  	<script language="javascript">
  					control=getAreaControl("province","capitalcity", "city");
  					var province = document.getElementById("t_province").value;
					var city = document.getElementById("t_city").value;
					if(province != "" && city != "")
					{
						control.setValue(province, city);
					}
					else
					{
						control.setValue('省份', '城市');
					}
					city=document.getElementById("t_city").value;
					citylist=document.getElementById("capitalcity");
					for(i=0; i<citylist.length; i++)
  					{
     					if(citylist[i].value==city)
	 					{
	    					citylist[i].selected=true;
	 					}
	 					else
	 					{
	    					citylist[i].selected=false;
	 					}
  					}
              		</script> 
				
		  </div>
        </div>
        
        <div class="formline">
          <div class="formlabel">公司地址：<span>*</span></div>
		  <div class="formcontent">
		    	<input type="text" name="address" id="address" value="杭州" style="width:221px;height:21px">
                <span id="address_err"></span>
		  </div>
        </div>
        
        <div class="formline">
          <div class="formlabel">邮政编码：<span>*</span></div>
		  <div class="formcontent">
		    	<input type="text" name="postcode" id="postcode" value="310000" style="width:221px;height:21px">
                <span id="postcode_err"></span>
		  </div>
        </div>
        
        <div class="formline">
          <div class="formlabel">部门：<span>	&nbsp;</span></div>
		  <div class="formcontent">
		    	<input type="text" name="department" id="department" value="" style="width:221px;height:21px">
                <span id="department_err"></span>
		  </div>
        </div> 
        
        <div class="formline">
          <div class="formlabel">职位：<span>	&nbsp;</span></div>
		  <div class="formcontent">
		    	<input type="text" name="title" id="title" value="" style="width:221px;height:21px">
                <span id="title_err"></span>
		  </div>
        </div> 
        
        <div class="formline">
          <div class="formlabel">手机：<span>	&nbsp;</span></div>
		  <div class="formcontent">
		    	<input type="text" name="mobile" id="mobile" value="13989484420" style="width:221px;height:21px">&nbsp;提示:手机号码填写后将公布在商铺"联系方式"里面
                <span id="mobile_err"></span>
		  </div>
        </div> 
        
         <div class="formline">
          <div class="formlabel">其他联系电话：<span>	&nbsp;</span></div>
		  <div class="formcontent">
		    	<input type="text" name="otherPhone" id="otherPhone" value="" style="width:221px;height:21px">
                <span id="otherPhone_err"></span>
		  </div>
        </div>
        
        <div class="formline">
          <div class="formlabel">公司网址：<span>	&nbsp;</span></div>
		  <div class="formcontent">
		    	<input name="homepage" id="homepage" type="text" value="http://" size="30" maxlength="200" style="width:221px;height:21px">
		    	提示：请填写完整的网址。例：http://www.china.cn
                <span id="homepage_err"></span>
		  </div>
        </div>  
     </div>
     <!--即时通讯-->
        <div class="formblock">
          <div class="formheader">
            <div class="headerTitle">即时通讯帐号</div>
          </div>
			<div>
            	<div style="width:auto;  color: #2A8703; background-color:#FDFFFC; padding:8px; margin:8px; line-height:150%; border:1px solid #B8EFB2"> 填写即时通讯帐号信息，客户可以直接在网站上和您直接在线沟通。</div>
          	</div>
          <div class="formline">
            <div class="formlabel">MSN：<span></span></div>
            <div class="formcontent" style="position:relative;">
              <input name="msn" type="text" value="  " id="msn" style="width:221px;">
              <a href="http://my.cn.china.cn/admin.php?op=UpdateContactInfoShow&auth=adad359ab3bbd4093d728eb07a7c777d###" onclick="robotBind()">新功能：使用MSN接收商机通知。 </a>
              <!--<div style="position:absolute; width:212px; height:35px; left: 235px; top: -3px; color: #2A8703; background-color:#FDFFFC; padding:8px; margin:8px; line-height:150%; border:1px solid #B8EFB2"">
              	填写即时通讯帐号信息，客户可以直接在网站上和您直接在线沟通。</div>-->
          </div>
          </div>
           <div class="formline">
            <div class="formlabel">QQ：<span></span></div>
            <div class="formcontent">
              <input name="qq" type="text" value="" id="qq" style="width:221px;">
           </div>
        </div>
        </div>
        <!--/即时通讯-->
    <div style="clear:both; font-size:0px; line-height:0px; height:0px; background-color:#FFFFFF"></div>
    <table style="margin-left:200px; margin-bottom:15px;">
      <tbody><tr>
        <td>
        <input type="button" name="modifyContact" class="bigbutton" value=" 修  改  " onclick="doSubmit(&#39;editForm&#39;, &#39;admin.php?op=UpdateContactInfo&amp;auth=adad359ab3bbd4093d728eb07a7c777d&#39;)">
        </td>
      </tr>
    </tbody></table>
    

<script language="JavaScript" type="text/javascript">
<!--
Validation.register('name', '联系人不能为空', 'noblank');
Validation.register('name','联系人长度不能超过100','text',{max:100,min:0});

Validation.register('phone', '请输入电话号码', 'noblank');
Validation.register('phone','请输入正确电话号码','number');
Validation.register('phoneCountryCode','国家区码不能为空','noblank');
Validation.register('phoneCountryCode','请输入正确国家区码','number');
Validation.register('phoneRegionCode','地区区码不能为空','noblank');
Validation.register('phoneRegionCode','请输入正确地区区码','number');
Validation.register('phoneExtCode','请输入正确分机号码','number');

Validation.register('faxCountryCode','国家区码不能为空','noblank');
Validation.register('faxCountryCode','请输入正确国家区码','number');
Validation.register('faxRegionCode','地区区码不能为空','noblank');
Validation.register('faxRegionCode','请输入正确地区区码','number');
Validation.register('fax', '请输入传真', 'noblank');
Validation.register('fax','请输入正确传真号码','number');
Validation.register('faxExtCode','请输入正确传真分机号码','number');

Validation.register('otherPhone','请输入正确电话号码','phone');
Validation.register('email', '请输入email', 'noblank');
Validation.register('email', '请输入正确的email', 'email');
Validation.register('address', '请输入地址', 'noblank');
Validation.register('postcode', '请输入邮编', 'noblank');
Validation.register('postcode','请输入正确邮编','phone');
Validation.register('mobile','请输入正确的手机号','mobile');

Validation.register('msn', '请填写正确的MSN','email');
Validation.register('qq', '请填写正确的QQ','number');
--></script>


     </form>
</div>
		<div style="clear:both; font-size:0px; line-height:0px; height:0px; background-color:#FFFFFF"></div>
	
	 	 	 	 
				 
				 
				 
	</div>
				 			 
	<div style="clear:both; font-size:0px; line-height:0px; height:0px; background-color:#FFFFFF"></div>
	<div style="clear:both; font-size:0px; line-height:0px; height:0px; background-color:#FFFFFF"></div>

</div>
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
