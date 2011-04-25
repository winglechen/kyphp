<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>kyphp后台管理系统</title>
<link href="res/dwz/themes/css/login.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<div id="login">
		<div id="login_header">
			<h1 class="login_logo">
				<a href="http://demo.dwzjs.com"><img src="res/dwz/themes/default/images/login_logo.gif" /></a>
			</h1>
			<div class="login_headerContent">
				<div class="navList">
					<ul>
						<li><a href="#">设为首页</a></li>
						<li><a href="http://82rs.com/">反馈</a></li>
						<li><a href="http://82rs.com/" target="_blank">帮助</a></li>
					</ul>
				</div>
				<h2 class="login_title"><img src="res/dwz/themes/default/images/login_title.png" /></h2>
			</div>
		</div>
		<div id="login_content">
			<div class="loginForm">
				<form action="index.php?p=admin/login" method="post">
					<p>
						<label>用户名：</label>
						<input type="text" size="20" name="name" class="login_input" />
					</p>
					<p>
						<label>密码：</label>
						<input type="password" size="20" name="password" class="login_input" />
					</p>
					<!--p>
						<label>验证码：</label>
						<input class="code" type="text" size="5" />
						<span><img src="res/dwz/themes/default/images/header_bg.png" alt="" width="75" height="24" /></span>
					</p-->
					<div class="login_bar">
						<input class="sub" type="submit" value=" " />
					</div>
				</form>
			</div>
			<div class="login_banner"><img src="res/dwz/themes/default/images/login_banner.jpg" /></div>
			<div class="login_main">
				<ul class="helpList">
					<li><a href="#">帮助帮助帮助帮助帮助</a></li>
					<li><a href="#">帮助帮助帮助帮助帮助</a></li>
					<li><a href="#">帮助帮助帮助帮助帮助</a></li>
					<li><a href="#">帮助帮助帮助帮助帮助</a></li>
					<li><a href="#">帮助帮助帮助帮助帮助</a></li>
				</ul>
				<div class="login_inner">
					<p>您可以使用 网易网盘 ，随时存，随地取</p>
					<p>您还可以使用 闪电邮 在桌面随时提醒邮件到达，快速收发邮件。</p>
					<p>在 百宝箱 里您可以查星座，订机票，看小说，学做菜…</p>
				</div>
			</div>
		</div>
		<div id="login_footer">
			Copyright &copy; 2009 www.phpky.com Inc. All Rights Reserved.
		</div>
	</div>
</body>
</html>
