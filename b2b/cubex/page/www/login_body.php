
<link href="./res/denglu.css" rel="stylesheet" type="text/css">

<div class="main">
<div class="left">
    <div class="pic_one"><img src="./res/zhu.jpg" width="471" height="141"></div>
    <div class="wenzi"><b>注册完成后，您就可以免费获取以下功能：</b>
    <span><img src="./res/lis1.jpg" width="35" height="35">独立域名商铺，让千万买家主动找到您！</span>
    <span><img src="./res/lis2.jpg" width="35" height="35">发布供求信息，网上买卖简单快捷!</span>
    <span><img src="./res/lis3.jpg" width="35" height="35">广泛结交商友，开拓新的商业关系！</span>
    <span><img src="./res/lis4.jpg" width="35" height="35">获取最新商机，赚钱先人一步！</span>
    </div>
</div>
<div class="right"><b>已经是会员，请马上登录:</b>
               
<form name="loginForm" id="loginForm" method="post" action="http://my.cn.china.cn/admin.php">
<table style="margin-top:10px" width="319" height="79" cellspacing="0">
              <tbody><tr>
                <td width="81" height="27">用户名：</td>
                <td width="134"><input type="text" id="userName" name="userName" size="15" maxlength="20" value="" tabindex="1"></td>
                <td width="96"><a href="http://my.cn.china.cn/admin.php?op=B2BForgetInfoShow&type=passwd">忘了登录名？

</a></td>
              </tr>
              <tr>
                <td height="29">密码：</td>
                <td><input type="password" name="userPassword" size="15" tabindex="2" onkeydown="keySubmit(event)"></td>
                <td><a href="http://my.cn.china.cn/admin.php?op=B2BForgetInfoShow&type=passwd">忘了密码？</a></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                    <td><a href="http://my.cn.china.cn/admin.php?op=LoginShow&destUrl=#" onclick="javascript: fSubmit();" class="subbtn">登 录</a></td>
                    <input type="hidden" name="op" value="B2BLogin">
			<input type="hidden" name="destUrl" value="">
              </tr>
         </tbody></table>
         </form>
         <div class="tiao"></div>
<b>还不是会员，马上注册:</b>
<a href="http://my.cn.china.cn/admin.php?op=B2BRegisterShow" class="btn4"><img src="./res/btn.gif" width="122" height="37"></a>
</div>
<div class="clear"></div>
</div>