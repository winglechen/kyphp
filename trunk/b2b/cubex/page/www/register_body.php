
<link href="./res/yjy.css" rel="stylesheet" type="text/css">


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





function refreshCaptcha()
{
    var seed = Math.round(Math.random()*10000);
    showCaptchaObj = document.getElementById("showCaptcha");
    showCaptchaObj.src='./res/pic.php?seed='+seed;
}

--></script>
 <form name="registerform" id="registerform" method="post" action="index.php?p=www/register_done">
	
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
            <td colspan="3"><input type="text" class="putong" name="tel" id="tel" value="" size="50"></td>
            <td><span id="mobile_err"></span>
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
            <td colspan="3"><p><label><input type="radio" name="sex" value="先生" checked="checked">先生</label></p><p><label><input type="radio" name="sex" value="女士">女士</label></p></td>
            
            <td>&nbsp;</td>
          </tr>
          <tr>
            <th>验证图片：
			 </th><th colspan="3">
			 	<input name="checkNum" id="verifystr" type="text" style="width:100px;float:left;height:19px;border: 1px #D5D5D5 solid;color: #646464;">
			 		<img id="showCaptcha" name="showCaptcha" src="./res/pic.php">
			     <a href="javascript:refreshCaptcha();">看不清楚，换张图片</a>
				 
		      </th>  
			<th>
			 <div id="verifystr_tip"></div>
			</th>
            <td>&nbsp;</td>
          </tr>
        </tbody></table>
        <!--注册信息 end-->
        
        <!--服务条款 begin-->
        <div class="bot">
              <input class="btn" type="submit"  id="button" value="同意服务条款，提交注册信息" >
        </div>
        <!--服务条款 end-->
	    
		
    </div></form>
    <div style="clear:both"></div>
</div>
