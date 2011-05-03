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
					<li><a href="http://hm6688.com" target="_blank">访问前台</a></li>
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
						<h2><span>Folder</span>b2b管理</h2>
					</div>
					<div class="accordionContent">
						<ul class="tree treeFolder">
                            <li><a>会员管理</a>
                                <ul>
                                    <li><a href="#" rel="w_panel" target="navTab" >卖家管理</a></li>
                                    <li><a href="#" rel="w_panel" target="navTab" >买家添加</a></li>
                                </ul>
                            </li>
                            <li><a>产品管理</a>
                                <ul>
                                    <li><a href="#" rel="w_panel" target="navTab" >产品管理</a></li>
                                    <li><a href="#" rel="w_panel" target="navTab" >求购管理</a></li>
                                    <li><a href="#" rel="w_panel" target="navTab" >库存管理</a></li>
                                </ul>
                            </li>
                            <li><a>产品分类</a>
                                <ul>
                                    <li><a href="#" rel="w_panel" target="navTab" >分类管理</a></li>
                                </ul>
                            </li>
                            <li><a>文章管理</a>
                                <ul>
                                    <li><a href="#" rel="w_panel" target="navTab" >分类管理</a></li>
                                    <li><a href="#" rel="w_panel" target="navTab" >文章管理</a></li>
                                    <li><a href="#" rel="w_panel" target="navTab" >文章添加</a></li>
                                </ul>
                            </li>
                        </ul>
				    </div>


                    <div class="accordionHeader">
						<h2><span>Folder</span>内容块管理</h2>
					</div>
					<div class="accordionContent">
						<ul class="tree treeFolder">
                            <li><a>页面管理</a>
                                <ul>
                                    <li><a href="#" rel="w_panel" target="navTab" >页面管理</a></li>
                                    <li><a href="#" rel="w_panel" target="navTab" >页面添加</a></li>
                                </ul>
                            </li>
                            <li><a>友情链接管理</a>
                                <ul>
                                    <li><a href="#" rel="w_panel" target="navTab" >友情链接列表</a></li>
                                    <li><a href="#" rel="w_panel" target="navTab" >友情链接添加</a></li>
                                </ul>
                            </li>
                            <li><a>广告管理</a>
                                <ul>
                                    <li><a href="#" rel="w_panel" target="navTab" >广告位管理</a></li>
                                    <li><a href="#" rel="w_panel" target="navTab" >广告位添加</a></li>
                                </ul>
                            </li>
                            <li><a>内容块管理</a>
                                <ul>
                                    <li><a href="#" rel="w_panel" target="navTab" >内容块管理</a></li>
                                    <li><a href="#" rel="w_panel" target="navTab" >内容块添加</a></li>
                                </ul>
                            </li>
                            <li><a>seo管理</a>
                                <ul>
                                    <li><a href="#" rel="w_panel" target="navTab" >seo管理</a></li>
                                </ul>
                            </li>

                        </ul>
				    </div>	
                    
					<div class="accordionHeader">
						<h2><span>Folder</span>公司信息</h2>
					</div>
					<div class="accordionContent">
						<ul class="tree treeFolder">
                            <li><a>内容分类管理</a>
                                <ul>
                                    <li><a href="tree/intro_tree.php" showInFrame="true" target="navTab" >分类管理</a></li>
                                </ul>
                            </li>
<?php
use Ky\Model\IntroCat;
$data = IntroCat::getChildren();
foreach($data as $cat){
?>
                            <li><a><?php echo $cat['name']; ?></a>
								<ul>
                                    <li><a href="index.php?p=admin/intro_list&cid=<?php echo $cat['Id']; ?>" target="navTab" rel="w_panel" >信息列表</a></li>
									<li><a href="index.php?p=admin/intro_add&cid=<?php echo $cat['Id']; ?>" target="navTab" rel="w_panel" >添加信息</a></li>
								</ul>
							</li>

<?php
}
?>
							
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

	<div id="footer">Copyright &copy; 2010 <a href="javascript:void(0);">phpky.com</a></div>

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
