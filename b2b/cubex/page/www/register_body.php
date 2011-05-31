
<link href="./res/yjy.css" rel="stylesheet" type="text/css">
<script language="JavaScript" type="text/JavaScript" src="./res/common.js"></script>
<script language="JavaScript" type="text/JavaScript" src="./res/validate.js"></script>
<style type="text/css">.inputlabelok{background:url(/res/img/chkok.gif) no-repeat 0px 0px; padding:2px 0 2px 24px; background-color:#F6F6F6;}.inputlabel{background:transparent; padding:2px 0 2px 24px;}</style>
<script language="JavaScript" type="text/JavaScript" src="./res/prototype.js"></script>

<style type="text/css">
<!--


.srcCon{height:49px;background:url(res/img/yjy_1.gif) repeat-x;border-bottom:1px solid #CBCBCB;border-left:1px solid #CBCBCB;border-right:1px solid #CBCBCB; padding:0 1px 1px 1px;}
.srcCon li{color:#CD0000; background:url(res/img/yjy_2.gif) no-repeat 3px 14px; padding:5px 0 0 30px; font-size:16px; font-weight:bold; line-height:43px; float:left; margin:0 0 0 10px; display:inline;}
.srcCon li.else{ background:url(res/img/yjy_3.gif) no-repeat 3px 14px; color:#646464;}








.hu12 {
    font-family: "宋体";
    font-size: 12px;
    color: #9A9A9A;
    text-decoration: none;
    border: 0px solid #EEF7FF;
    padding: 9px;
}
.infoshow {
    font-family: "宋体";
    font-size: 12px;
    color: #000000;
    text-decoration: none;
    background-color: #E6FFE6;
    border: 1px solid #000033;
    padding: 8px;
}




-->
</style>
<div class="wrapCnt" style="padding-top:0;">
<script type="text/javascript" language="JavaScript"><!--

var websiteUrl = "";

var isValidUserName=true;
var isValidEmail=true;
function CheckFormRegister()
{
    if(!Validation.validAll())
        return false;
    if(!isValidUserName)
    {
        $("username").focus();
        return false;
    }
    if(!isValidEmail)
    {
        $("email").focus();
        return false;
    }
    return true;
}

function checkUserName()
{
    $("username_info").innerHTML='';
    /*if(Validation.valid('username')) {
        var url ="/ajax.php";
        var params = 'op=checkusername&'+'username=' + $F('username');
        $("username_info").innerHTML='<image src="'+websiteUrl+'/resource/js/loading.gif">';    
        var ajax = new Ajax.Request(
            url,
            {method: 'get', parameters: params,
                onSuccess: Ajax.onSuccess,
                onFailure: reportError,
                onException: reportError,
                onComplete:doUserName
            }
        );
    }*/
}
function doUserName(request)
{
    json = eval(request.responseText);
    if (json)
        {$("username_info").innerHTML="<div class='wright'></div>";}
    else
        {$("username_info").innerHTML="<span class='h12'><br><image src='"+websiteUrl+"/res/img/chkerr.gif' align='middle' /><font color='red'>该用户登录名已注册,不可以使用</font></span>";}
    isValidUserName=json;
}
function checkEmail() {
    $("email_info").innerHTML='';
    if(Validation.valid('email')) {
        var url ="/ajax.php";
        var params = 'op=checkemail&'+'email=' + $F('email');
        $("email_err").innerHTML='<image src="'+websiteUrl+'/resource/js/loading.gif">';
        var ajax = new Ajax.Request(
            url,
            {method: 'get', parameters: params,
                onSuccess: Ajax.onSuccess,
                onFailure: reportError,
                onException: reportError,
                onComplete:doEmail
            }
        );
    }
}
function doEmail(request)
{
    json = eval(request.responseText);
    if (json)
        {$("email_info").innerHTML="<div class='wright'></div>";}
    else
        {$("email_info").innerHTML="<span class='h12'><br><image src='"+websiteUrl+"/res/img/chkerr.gif' align='middle' /><font color='red'>该email已注册,不可以使用</font></span>";}
    isValidUserName=json;
}
function checkCorpName() {
    $("corpname_info").innerHTML='';
    if(Validation.valid('corpname')) {
        var url ="/ajax.php";
        var params = 'op=checkcorpname&'+'corpname=' + encodeURI($F('corpname'));
        $("corpname_info").innerHTML='<image src="'+websiteUrl+'/resource/js/loading.gif">';
        var ajax = new Ajax.Request(
            url,
            {method: 'get', parameters: params,
                onSuccess: Ajax.onSuccess,
                onFailure: reportError,
                onException: reportError,
                onComplete:doCorpName
            }
        );
    }
}
function doCorpName(request)
{
    json = eval(request.responseText);
    var corpName = document.getElementById("corpname").value;   
    var formatUrl = document.getElementById("websiteurl").value;
    var corpUrl = formatUrl.replace("%s", corpName);
    var findPassUrl = 'http://my.cn.china.cn/admin.php?op=B2BForgetInfoShow&type=passwd';
    if (json)
        {$("corpname_info").innerHTML="<div class='wright'></div>";}
    else
        {$("corpname_info").innerHTML="<span class='h12'><br><image src='"+websiteUrl+"/res/img/chkerr.gif' align='middle' /><font color='red'>您输入的公司名称在‘中国供应商’网站已注册，如果您忘了密码，<a href='"+findPassUrl+"'>找回密码</a>，如有任何问题请拨打客服热线。</font></span>";}
    isValidUserName=json;
}
function getTip(EvtId)
{
    return $(EvtId+"_tip");
}
function refreshCaptcha()
{
    var seed = Math.round(Math.random()*10000);
    showCaptchaObj = document.getElementById("showCaptcha");
    showCaptchaObj.src='/captcha.php?seed='+seed;
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
function doSubmit(formId, doAction)
{
    var formObj = document.getElementById(formId);
    if( !Validation.validAll() )
        return false;
    if( !CheckFormRegister() )
        return false;
    formObj.target="";
    formObj.action = doAction;
    formObj.submit();
}
--></script>
 <form name="registerform" id="registerform" method="post" action="">
 	<input type="hidden" name="agentid" value="0">
    <input type="hidden" name="time" value="">
    <input type="hidden" name="auth" value="">
    <input type="hidden" name="allocby" value="0">
	
    <div class="yjy">
        <div class="title">
            <span><strong>登陆名和密码</strong></span>
            <p>打<span>*</span>号的为必须填项</p>
        </div>
		<table width="100%" border="0" cellspacing="0" cellpadding="0" style="border-bottom:1px solid #E7E7E7;">
          
        </table>
        <p>请认真、仔细的填写以下信息，严肃的商业信息有助于您获得别人的信任，结交潜在的商业伙伴，获取商业机会！</p>
        <!--注册信息 begin-->
        <table width="716" border="0" cellspacing="0" cellpadding="0" align="center">
          <tbody><tr>
            <th width="143"><span>*</span>会员登录名：</th>
            <td width="302" colspan="3"><input type="text" name="username" id="username" value="" size="50" class="putong"></td>
            <td width="263">
        	<span id="username_err"></span>
            <span id="username_info"></span></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td colspan="3">登录名可以是4-20英文字符或数字组成</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <th><span>*</span>密码：</th>
            <td colspan="3"><input name="password" id="password" type="password" class="putong" size="50"></td>
            <td><span id="password_err"></span>
			<span id="password_err"></span>
			<span id="password_info"></span>
			</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td colspan="3">密码长度6-20个英文字符和数字混合组成</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <th><span>*</span>确认密码：</th>
            <td colspan="3"><input type="password" name="passwordcheck" id="passwordcheck" class="putong" size="50"></td>
            <td><span id="passwordcheck_err"></span>
			<span id="passwordcheck_info"></span>
			</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td colspan="3">请再次输入密码</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <th><span>*</span>电子邮箱：</th>
            <td colspan="3"><input type="text" name="email" id="email" value="" class="putong" size="50"></td>
            <td><span id="email_err"></span>
            <span id="email_info"></span></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td colspan="3">非常重要！这是客户与您联系的首选方式，请务必填写真实，并确认是您最常用的电子邮件。没有电子邮件？推荐使用免费的<span><a href="http://mail.163.com/" target="_blank">网易163邮箱</a>、</span>
            <span><a href="http://mail.cn.yahoo.com/" target="_blank">雅虎邮箱</a>、</span>
            <span><a href="http://get.live.com/mail" target="_blank">HOTMAIL邮箱</a>、</span>
            <span><a href="http://mail.google.com/" target="_blank">Gmail邮箱</a>、</span>
            <span><a href="http://mail.21cn.com/" target="_blank">21cn邮箱</a>。</span></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <th><span>*</span>贵公司名称：</th>
            <td colspan="3"><input type="text" name="corpname" id="corpname" value="" class="putong" size="50"></td>
            <td>
            <span id="corpname_err"></span>
            <span id="corpname_info"></span>
			</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td colspan="3">*国内注册企业请用中文完整填写在工商局注册的全称。<br>
              如：中国互联网新闻中心。 无商号的个体经营者填写执照上的姓名，并标注个体经营。<span>如：张三（个体经营）</span></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <th><span>*</span>联系人姓名：</th>
            <td colspan="3"><input type="text" name="realname" id="realname" size="50" class="putong" value=""></td>
            <td><span id="realname_err"></span>
			<span id="realname_info"></span>
			</td>
          </tr>
          
            <tr>
            <th><span>*</span>联系电话：</th>
            <td>

            国家区码<input type="text" class="putong" name="phoneCountryCode" id="phoneCountryCode" value="86" size="5"></td>
            <td>地区区码
              <input type="text" class="putong" name="phoneRegionCode" id="phoneRegionCode" value="" size="8"></td>
            <td> 电话号码
              <input type="text" name="phone" id="phone" value="" class="putong" size="25"></td>
            <td> <span id="phoneCountryCode_err"></span>
                <span id="phoneRegionCode_err"></span>
                <span id="phone_err"></span>

			</td>
          </tr>
          <tr>
            <th>手机号码：</th>
            <td colspan="3"><input type="text" class="putong" name="mobile" id="mobile" value="" size="50"></td>
            <td><span id="mobile_err"></span>
			</td>
          </tr>
          
          <tr>
            <th>性别：</th>
            <td colspan="3"><p><label><input type="radio" name="sex" value="0" checked="checked">先生</label></p><p><label><input type="radio" name="sex" value="1">女士</label></p></td>
            
            <td>&nbsp;</td>
          </tr>
          <tr>
            <th>验证图片：
			 </th><th colspan="3">
			 	<div>
			 		<img id="showCaptcha" name="showCaptcha" src="./res/captcha.php">
			     <a href="javascript:refreshCaptcha();">看不清楚，换张图片</a>
				 </div>
		      </th>  
			<th>
			 <div id="verifystr_tip"></div>
			</th>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <th>验证码：</th>
            <td colspan="3"><input name="verifystr" id="verifystr" type="text" class="putong" size="50"></td>
            <td><span id="verifystr_err">
                        </span>
			<span id="verifystr_info"></span></td>
          </tr>
        </tbody></table>
        <!--注册信息 end-->
        
        <!--服务条款 begin-->
        <div class="bot">
            <a href="http://my.cn.china.cn/admin.php?op=B2BShowFWTK" target="_blank">点此阅读中国供应商服务条款</a><br>
            <input class="btn" type="button" name="button" id="button" value="同意服务条款，提交注册信息" onclick="doSubmit(&#39;registerform&#39;, &#39;admin.php?op=B2BRegister&#39;)">
        </div>
        <!--服务条款 end-->
		
		<script language="JavaScript" type="text/javascript">
        
	    Validation.register('username', '请填写用户名', 'noblank');
	    Validation.register('username','用户名必须在4-20字符之间','text',{max:20,min:4});
	    Validation.register('username','用户名不能是中文','nochinese');
	    Validation.register('password', '请填密码', 'noblank');
	    Validation.register('password','设置的密码中必须同时包含英文字母和数字！','englishandnumber');
	    Validation.register('password','密码必须是英文字母和数字混合组成！','englishornumber');
	    Validation.register('password','密码必须在6-20字符之间','text',{max:20,min:6});
	    Validation.register('passwordcheck', '请再次输入密码', 'noblank');
	    Validation.register('passwordcheck','两次输入密码要一致','sameas','password');
	    Validation.register('email', '请填写email', 'noblank');
	    Validation.register('email', 'E-mail地址格式有错误', 'email');
	    Validation.register('corpname', '请填写贵公司名称', 'noblank');
	    Validation.register('corpname', '不允许英文和数字结尾或者全为英文和数字','noendenglish');
	    Validation.register('corpname', '不允许的非法字符', 'specialcharacter');
	    Validation.register('corpname', '公司名称长度需在5到50个汉字之间', 'text',{max:50,min:5});
	    Validation.register('realname', '请填写联系人姓名', 'noblank');
	    Validation.register('verifystr', '请填写验证码', 'noblank');
	    
	    Validation.register('phone', '请输入电话号码', 'noblank');
		Validation.register('phone','请输入正确电话号码','number');
		Validation.register('phoneCountryCode','国家区码不能为空','noblank');
		Validation.register('phoneCountryCode','请输入正确国家区码','number');
		Validation.register('phoneRegionCode','地区区码不能为空','noblank');
		Validation.register('phoneRegionCode','请输入正确地区区码','number');
		Validation.register('mobile','请输入正确的手机号','mobile');
	    Validation.setOnblurvalidation();
	        
	    for (target in Validation.targets){
	        if (typeof(Validation.targets[target])=='function'){continue;} 
            Event.observe(target,"blur",function(e)
           {
                if(Event.element(e).id == 'realname' && Validation.valid(Event.element(e).id) == true)
		        {
		            $("realname_info").innerHTML = "<div class='wright'></div>";
		        } else if(Event.element(e).id == 'realname' && Validation.valid(Event.element(e).id) == false){
					$("realname_info").innerHTML = "";
				}
                if(Event.element(e).id == 'verifystr' && Validation.valid(Event.element(e).id) == true)
                {
                    $("verifystr_info").innerHTML = "<div class='wright'></div>";
                } else if(Event.element(e).id == 'verifystr' && Validation.valid(Event.element(e).id) == false) {
					 $("verifystr_info").innerHTML = "";
				}
                if(Event.element(e).id == 'passwordcheck' && Validation.valid(Event.element(e).id) == true)
                {
                    $("passwordcheck_info").innerHTML = "<div class='wright'></div>";
                } else if(Event.element(e).id == 'passwordcheck' && Validation.valid(Event.element(e).id) == false){
					$("passwordcheck_info").innerHTML = "";
				}
				
                if(Event.element(e).id == 'password' && Validation.valid(Event.element(e).id) == true)
                {
                    $("password_info").innerHTML = "<div class='wright'></div>";
                } else if(Event.element(e).id == 'password' && Validation.valid(Event.element(e).id) == false){
					$("password_info").innerHTML = "";
				}
			
		  });
	      Event.observe(target,"focus",function(e){
	        var tip = document.getElementById(Event.element(e).id);
			if (tip!=null){tip.className="jiaodian"};
	        });
	      Event.observe(target,"blur",function(e){
	        var tip = document.getElementById(Event.element(e).id);
            if (tip!=null){tip.className="putong"};    
	        });
	    }
	    Event.observe("username","blur",function(e){checkUserName();});
	    Event.observe("email","blur",function(e){checkEmail();});
	    Event.observe("corpname","blur",function(e){checkCorpName();});
	
	</script>
	    <input type="hidden" id="websiteurl" name="websiteurl" value="">
	    
		
    </div></form>
    <div style="clear:both"></div>
</div>
