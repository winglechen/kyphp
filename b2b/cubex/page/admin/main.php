<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=7" />
<title>kyphp后台管理系统</title>

<link href="res/dwz/themes/default/style.css" rel="stylesheet" type="text/css" />
<link href="res/dwz/themes/css/core.css" rel="stylesheet" type="text/css" />
<link href="res/uploadify/css/uploadify.css" rel="stylesheet" type="text/css" />
<!--[if IE]>
<link href="res/dwz/themes/css/ieHack.css" rel="stylesheet" type="text/css" />
<![endif]-->

<script src="res/dwz/javascripts/speedup.js" type="text/javascript"></script>
<script src="res/js/jquery-1.4.4.js" type="text/javascript"></script>
<script src="res/js/jquery.cookie.js" type="text/javascript"></script>
<script src="res/js/jquery.validate.js" type="text/javascript"></script>
<script src="res/js/jquery.bgiframe.js" type="text/javascript"></script>
<script src="res/xheditor/xheditor-zh-cn.min.js" type="text/javascript"></script>
<script src="res/uploadify/scripts/swfobject.js" type="text/javascript"></script>
<script src="res/uploadify/scripts/jquery.uploadify.v2.1.0.js" type="text/javascript"></script>

<script src="res/dwz/javascripts/dwz.core.js" type="text/javascript"></script>
<script src="res/dwz/javascripts/dwz.util.date.js" type="text/javascript"></script>
<script src="res/dwz/javascripts/dwz.validate.method.js" type="text/javascript"></script>
<script src="res/dwz/javascripts/dwz.regional.zh.js" type="text/javascript"></script>
<script src="res/dwz/javascripts/dwz.barDrag.js" type="text/javascript"></script>
<script src="res/dwz/javascripts/dwz.drag.js" type="text/javascript"></script>
<script src="res/dwz/javascripts/dwz.tree.js" type="text/javascript"></script>
<script src="res/dwz/javascripts/dwz.accordion.js" type="text/javascript"></script>
<script src="res/dwz/javascripts/dwz.ui.js" type="text/javascript"></script>
<script src="res/dwz/javascripts/dwz.theme.js" type="text/javascript"></script>
<script src="res/dwz/javascripts/dwz.switchEnv.js" type="text/javascript"></script>
<script src="res/dwz/javascripts/dwz.alertMsg.js" type="text/javascript"></script>
<script src="res/dwz/javascripts/dwz.contextmenu.js" type="text/javascript"></script>
<script src="res/dwz/javascripts/dwz.navTab.js" type="text/javascript"></script>
<script src="res/dwz/javascripts/dwz.tab.js" type="text/javascript"></script>
<script src="res/dwz/javascripts/dwz.resize.js" type="text/javascript"></script>
<script src="res/dwz/javascripts/dwz.jDialog.js" type="text/javascript"></script>
<script src="res/dwz/javascripts/dwz.dialogDrag.js" type="text/javascript"></script>
<script src="res/dwz/javascripts/dwz.cssTable.js" type="text/javascript"></script>
<script src="res/dwz/javascripts/dwz.stable.js" type="text/javascript"></script>
<script src="res/dwz/javascripts/dwz.taskBar.js" type="text/javascript"></script>
<script src="res/dwz/javascripts/dwz.ajax.js" type="text/javascript"></script>
<script src="res/dwz/javascripts/dwz.pagination.js" type="text/javascript"></script>
<script src="res/dwz/javascripts/dwz.database.js" type="text/javascript"></script>
<script src="res/dwz/javascripts/dwz.datepicker.js" type="text/javascript"></script>
<script src="res/dwz/javascripts/dwz.effects.js" type="text/javascript"></script>
<script src="res/dwz/javascripts/dwz.panel.js" type="text/javascript"></script>
<script src="res/dwz/javascripts/dwz.checkbox.js" type="text/javascript"></script>
<script src="res/dwz/javascripts/dwz.history.js" type="text/javascript"></script>
<script src="res/dwz/javascripts/dwz.combox.js" type="text/javascript"></script>

<!--
<script src="bin/dwz.min.js" type="text/javascript"></script>
-->
<script src="res/dwz/javascripts/dwz.regional.zh.js" type="text/javascript"></script>

<script type="text/javascript">
$(function(){
	DWZ.init("dwz.frag.xml", {
//		loginUrl:"loginsub.html", loginTitle:"登录",	// 弹出登录对话框
		loginUrl:"login.php",	// 跳到登录页面
		statusCode:{ok:200, error:300, timeout:301}, //【可选】
		pageInfo:{pageNum:"pageNum", numPerPage:"numPerPage", orderField:"orderField", orderDirection:"orderDirection"}, //【可选】
		debug:false,	// 调试模式 【true|false】
		callback:function(){
			initEnv();
			$("#themeList").theme({themeBase:"themes"});
		}
	});
});
</script>
</head>

<body scroll="no">
	<div id="layout">
		<div id="header">
			<div class="headerNav">
				<a class="logo" href="javascript:void(0);">标志</a>
				<ul class="nav">
					<!--<li id="switchEnvBox"><a href="javascript:">（<span>北京</span>）切换角色</a>
						<ul>
							<li><a href="sidebar_bj.html">北京</a></li>
							<li><a href="sidebar_sh.html">上海</a></li>
							<li><a href="sidebar_sh.html">南京</a></li>
							<li><a href="sidebar_sh.html">深圳</a></li>
							<li><a href="sidebar_sh.html">广州</a></li>
							<li><a href="sidebar_sh.html">天津</a></li>
							<li><a href="sidebar_sh.html">杭州</a></li>
						</ul>
					</li-->
					<li><a href="changepwd.html" target="dialog">设置</a></li>
					<li><a href="http://82rs.com" target="_blank">反馈</a></li>
					<li><a href="logout.php">退出</a></li>
				</ul>
				<!--<ul class="themeList" id="themeList">
					<li theme="default"><div class="selected">蓝色</div></li>
					<li theme="green"><div>绿色</div></li>
					<li theme="red"><div>红色</div></li>
					<li theme="purple"><div>紫色</div></li>
					<li theme="silver"><div>银色</div></li>
				</ul>-->
			</div>
		</div>

		<div id="leftside">
			<div id="sidebar_s">
				<div class="collapse">
					<div class="toggleCollapse"><div></div></div>
				</div>
			</div>
			<div id="sidebar">
				<div class="toggleCollapse"><h2>主菜单</h2><div>收缩</div></div>

				<div class="accordion" fillSpace="sidebar">
					<div class="accordionHeader">
						<h2><span>Folder</span>公司信息</h2>
					</div>
					<div class="accordionContent">
						<ul class="tree treeFolder">
                            <li><a href="" target="navTab" rel="main" >内容分类管理</a>
                                <ul></ul>
                            </li>

							<li><a href="javascript:void(0);" target="navTab">关于我们</a>
								<ul>
									<li><a href="" target="navTab" rel="main">浩铭简介</a></li>
									<li><a href="" target="navTab" rel="page1">浩铭文化</a></li>
									<li><a href="" target="navTab" rel="page2">浩铭之路</a></li>
								</ul>
							</li>
							
							<li><a>产品与解决方案</a>
								<ul>
									<li><a href="w_panel.html" target="navTab" rel="main">列表</a></li>
									<li><a href="w_tabs.html" target="navTab" rel="w_tabs">添加</a></li>
								</ul>
							</li>
                            
                            <li><a>体验与服务</a>
								<ul>
									<li><a href="w_panel.html" target="navTab" rel="main">列表</a></li>
									<li><a href="w_tabs.html" target="navTab" rel="w_tabs">添加</a></li>
								</ul>
							</li>

                            <li><a>渠道专区</a>
								<ul>
									<li><a href="w_panel.html" target="navTab" rel="main">列表</a></li>
									<li><a href="w_tabs.html" target="navTab" rel="w_tabs">添加</a></li>
								</ul>
							</li>
							<li><a>加入我们</a>
								<ul>
									<li><a href="w_panel.html" target="navTab" rel="main">列表</a></li>
									<li><a href="w_tabs.html" target="navTab" rel="w_tabs">添加</a></li>
								</ul>
							</li>
						</ul>
					</div>
					
				</div>

			</div>
		</div>
		<div id="container">
			<div id="navTab" class="tabsPage">
				<div class="tabsPageHeader">
					<div class="tabsPageHeaderContent"><!-- 显示左右控制时添加 class="tabsPageHeaderMargin" -->
						<ul class="navTab-tab">
							<li tabid="main" class="main"><a href="javascript:void(0)"><span><span class="home_icon">我的主页</span></span></a></li>
						</ul>
					</div>
					<div class="tabsLeft">left</div><!-- 禁用只需要添加一个样式 class="tabsLeft tabsLeftDisabled" -->
					<div class="tabsRight">right</div><!-- 禁用只需要添加一个样式 class="tabsRight tabsRightDisabled" -->
					<div class="tabsMore">more</div>
				</div>
				<ul class="tabsMoreList">
					<li><a href="javascript:void(0)">我的主页</a></li>
				</ul>
				<div class="navTab-panel tabsPageContent">
					<div class="page">
						<div class="accountInfo">
							<div class="alertInfo">
								<h2><a href="doc/dwz-user-guide.pdf" target="_blank">DWZ框架使用手册(PDF)</a></h2>
								<a href="doc/dwz-user-guide.swf" target="_blank">DWZ框架演示视频</a>
							</div>
							<div class="right">
								<p><a href="doc/dwz-user-guide.zip" target="_blank" style="line-height:19px">DWZ框架使用手册(CHM)</a></p>
								<p><a href="doc/dwz-ajax-develop.swf" target="_blank" style="line-height:19px">DWZ框架Ajax开发视频教材</a></p>
							</div>
							<p><span>DWZ富客户端框架</span></p>
							<p><a href="demo_page2.html" target="dialog">DWZ研发组</a></p>
						</div>
						<div class="pageFormContent" layoutH="80">
							<p>在线演示地址 http://demo.dwzjs.com</p>
							<p>DWZ框架使用手册 <a href="doc/dwz-user-guide.pdf" target="_blank">http://demo.dwzjs.com/doc/dwz-user-guide.pdf</a></p>
							<p>Ajax开发视频教材 <a href="doc/dwz-ajax-develop.swf" target="_blank">http://demo.dwzjs.com/doc/dwz-ajax-develop.swf</a></p>
							<p>DWZ框架演示视频 <a href="doc/dwz-user-guide.swf" target="_blank">http://demo.dwzjs.com/doc/dwz-user-guide.swf</a></p>

<div class="divider"></div>
<h2>常见问题及解决:</h2>
<pre style="margin:5px;line-height:1.4em">
Error loading XML document: dwz.frag.xml
直接用IE打开index.html弹出一个对话框：Error loading XML document: dwz.frag.xml
原因：没有加载成功dwz.frag.xml。IE ajax laod本地文件有限制, 是ie安全级别的问题, 不是框架的问题。
解决方法：用firefox打开或部署到apache下。

IIS不能使用Ajax解决方案
IIS下firebug调试报错ajax 405 Method Not Allowed。
Http 405原因是IIS不允许ajax访问*.htm或是*.html后缀的网页，这是IIS的问题，不是框架bug。
</pre>

<div class="divider"></div>
<h2>有偿服务请联系:</h2>
<p style="color:red">support@dwzjs.com</p>
						</div>

					</div>
				</div>
			</div>
		</div>

		<div id="taskbar" style="left:0px; display:none;">
			<div class="taskbarContent">
				<ul></ul>
			</div>
			<div class="taskbarLeft taskbarLeftDisabled" style="display:none;">taskbarLeft</div>
			<div class="taskbarRight" style="display:none;">taskbarRight</div>
		</div>
		<div id="splitBar"></div>
		<div id="splitBarProxy"></div>
	</div>

	<div id="footer">Copyright &copy; 2010 <a href="demo_page2.html" target="dialog">DWZ研发组</a></div>

<!--拖动效果-->
	<div class="resizable"></div>
<!--阴影-->
	<div class="shadow" style="width:508px; top:148px; left:296px;">
		<div class="shadow_h">
			<div class="shadow_h_l"></div>
			<div class="shadow_h_r"></div>
			<div class="shadow_h_c"></div>
		</div>
		<div class="shadow_c">
			<div class="shadow_c_l" style="height:296px;"></div>
			<div class="shadow_c_r" style="height:296px;"></div>
			<div class="shadow_c_c" style="height:296px;"></div>
		</div>
		<div class="shadow_f">
			<div class="shadow_f_l"></div>
			<div class="shadow_f_r"></div>
			<div class="shadow_f_c"></div>
		</div>
	</div>
	<!--遮盖屏幕-->
	<div id="alertBackground" class="alertBackground"></div>
	<div id="dialogBackground" class="dialogBackground"></div>

	<div id='background' class='background'></div>
	<div id='progressBar' class='progressBar'>数据加载中，请稍等...</div>

</body>
</html>
