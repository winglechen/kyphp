
<!--顶部导航 begin-->
<div class="topNav"><label><img src="./res/sign2.gif" width="11" height="11"><a href="./res/res.htm" title="设为主页" onclick="this.style.behavior='url(#default#homepage)';this.setHomePage('http://ztb2b.com');return(false);">设为主页</a> <img src="./res/sign3.gif" width="14" height="12"><a href="javascript:window.external.AddFavorite('http://ztb2b.com','B2B电子商务网上贸易平台')" title="添加收藏">添加收藏</a> &nbsp;&nbsp;&nbsp;&nbsp;<strong style="color:#D9231D;">服务电话：0701-6690666</strong></label>
<?php
if(isset($_SESSION['username']) && !empty($_SESSION['username'])){
    echo '您好，<strong>'. $_SESSION['username'] . '</strong> ！ <a href="index.php?p=www/member/index">管理中心</a> | <a href="index.php?p=www/help">帮助</a> |  <a href="index.php?p=www/logout">退出</a>';    
}else{
?>
<a href="index.php?p=www/register" title="" >注册</a> | <a href="index.php?p=www/login" title="" >登陆</a> | <a href="index.php?p=www/help">帮助</a>
<?php
}
?>
</div>
<!--顶部导航 end-->

