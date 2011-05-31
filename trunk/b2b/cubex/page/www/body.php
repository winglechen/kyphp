<script language="javascript">
function changeTab(i)
{
	autokey = true;
	tab(i);
	j=i+1;
 	if(j%5==0)
 	j++;
}
function changeAutoKey()
{
	autokey = false;
}
function tab(n)
{
	m = n%5;
	for(var i=1; i<=4; i++)
	{
		if(i==m)
		{
			document.getElementById("tab_" + i).className = "checkcurrent";
			document.getElementById("tab_c_" + i).style.display = "block";
		}else{
		document.getElementById("tab_" + i).className = "";
		document.getElementById("tab_c_" + i).style.display = "none";
		}
	}

}
var j=1;
//setInterval('autoFocus()',2800);
var autokey = false;
function autoFocus() {
    if(!$('mqmp')) return false;
    if(autokey) return false;
     tab(j);
     j++;
     if(j==100)
     j=1;
     if(j%5==0)
     j++;
}
	
	
</script>







<!--广告 begin-->	


<div class="topAd">
<script type="text/javascript">   
var swf_width=960
var swf_height=32
var files='http://cn.china.cn/2011images/03/chengxinhuodong-1.jpg|http://cn.china.cn/2011images/109guangjiaohui/guangjiaohuitonglan.jpg|http://cn.china.cn/2011images/03/jiajuyongpintonglan.jpg|http://cn.china.cn/2010images/fangzhapiantixing.gif|http://cn.china.cn/2008images/zhaoshanghan.gif'
var links='http://cn.china.cn/huodong/chengxinxuanyan/index.html|http://guangjiaohui.china.cn/|http://cn.china.cn/huodong/jiajuyongpin/index.html|http://cn.china.cn/frame/d703046,0a24fe,d2050_7093.html|http://cn.china.cn/zhaoshang2010/index.html'
var texts=''
var config='0xffffff:文字颜色|3:文字位置|0xCC0000:文字背景颜色|20:文字背景透明度|0xffffff:按键文字颜色|0xCC0000:按键默认颜色|0x000033:按键当前颜色|4:自动播放时间(秒)|0:图片过渡效果|0:是否显示按钮|_blank:打开窗口'

document.write('<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" width="'+ swf_width +'" height="'+ swf_height +'">');
document.write('<param name="movie" value="http://cn.china.cn/2007images/images/focuspic1.swf"><param name="quality" value="high">');
document.write('<param name="menu" value="false"><param name=wmode value="opaque">');
document.write('<param name="FlashVars" value="bcastr_file='+files+'&bcastr_link='+links+'&bcastr_title='+texts+'&bcastr_config='+config+'">');
document.write('<embed src="http://cn.china.cn/2007images/images/focuspic1.swf" wmode="opaque" FlashVars="bcastr_file='+files+'&bcastr_link='+links+'&bcastr_title='+texts+'&bcastr_config='+config+'& menu="false" quality="high" width="'+ swf_width +'" height="'+ swf_height +'" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />'); document.write('</object>'); 
</script>
</div>
<!--广告 end-->



<div class="wrapCnt" style="padding-top:0;">
<div class="row2A">
<!--热门/活动 begin-->
<div class="tag1Top">
<a href="http://cn.china.cn/guojimaijia/index.html" target="_blank" id="totlemore">更多&gt;&gt;</a>
<ul class="tag1Tit">  
 <li class="btnOver" onclick="Tab(&#39;news001&#39;,&#39;newsCon2&#39;,this)">热门活动</li>
 <li class="btnOut" onclick="Tab(&#39;news001&#39;,&#39;newsCon3&#39;,this)">国际产品</li>
</ul>
</div>

<div style="clear:both;" id="news001">
<div class="divShow" id="newsCon2">
<div class="tag1Con">
<dl>
<dt><a href="http://www.eptee.com/cn/index/index.asp" target="_blank"><img src="./res/shhuanbaozhaneptee130x92.jpg" width="130" height="92" alt="亚洲环保展"></a></dt>
<dd><a href="http://www.eptee.com/cn/index/index.asp" target="_blank">亚洲环保展</a></dd>
</dl>
<ul>
<li>·<a onmousedown="qhstat_j2chan(&#39;deal&#39;,&#39;967004&#39;,&#39;d2050_7083&#39;)" id="utitle_967004" target="_blank" href="http://cn.china.cn/huodong/chengxinxuanyan/index.html?id=967004"><font color="red">诚信网商签字承诺倡议活动</font></a></li><li>·<a id="utitle_945512" target="_blank" href="http://guangjiaohui.china.cn/"><font color="red">2011年第109届广交会</font></a></li><li>·<a onmousedown="qhstat_j2chan(&#39;deal&#39;,&#39;976730&#39;,&#39;d2050_7083&#39;)" id="utitle_976730" target="_blank" href="http://cn.china.cn/huodong/yingxiao/index.html?id=976730"><font color="red">体验产品精准营销服务</font></a></li><li>·<a onmousedown="qhstat_j2chan(&#39;deal&#39;,&#39;981187&#39;,&#39;d2050_7083&#39;)" id="utitle_981187" target="_blank" href="http://cn.china.cn/shiguanhezuo/Indonesia.html?id=981187">中国供应商与印尼使馆共携手</a></li><li>·<a onmousedown="qhstat_j2chan(&#39;deal&#39;,&#39;981186&#39;,&#39;d2050_7083&#39;)" id="utitle_981186" target="_blank" href="http://cn.china.cn/shiguanhezuo/Ghana.html?id=981186">中国供应商结盟加纳驻华使馆</a></li><li>·<a onmousedown="qhstat_j2chan(&#39;deal&#39;,&#39;980351&#39;,&#39;d2050_7083&#39;)" id="utitle_980351" target="_blank" href="http://cn.china.cn/guojimaijia/croatiapurchase-6.html?id=980351">克罗地亚使馆求购LED显示器</a></li>
</ul>
<div class="clear"></div>
</div>
</div>

<div class="unShow" id="newsCon3">
<div class="tag1Con">
<dl>
<dt><a href="http://cn.china.cn/sell-in-china/index.html" target="_blank"><img src="./res/zhongguohezuohuoban.jpg"></a></dt> 
<dd><a href="http://cn.china.cn/sell-in-china/index.html" target="_blank"><font color="red">使馆推荐 优质产品<br>打开国际采购新渠道</font></a></dd>
</dl>
<ul>  
<li>·<a onmousedown="qhstat_j2chan(&#39;deal&#39;,&#39;972627&#39;,&#39;d2050_29773&#39;)" id="utitle_972627" target="_blank" href="http://cn.china.cn/guojimaijia/bangladeshselling-3.html?id=972627">孟加拉寻找中国蓖麻种子进</a></li><li>·<a onmousedown="qhstat_j2chan(&#39;deal&#39;,&#39;959671&#39;,&#39;d2050_29773&#39;)" id="utitle_959671" target="_blank" href="http://cn.china.cn/guojimaijia/bangladeshselling-2.html?id=959671">孟加拉寻找中国芝麻进口商</a></li><li>·<a onmousedown="qhstat_j2chan(&#39;deal&#39;,&#39;959670&#39;,&#39;d2050_29773&#39;)" id="utitle_959670" target="_blank" href="http://cn.china.cn/guojimaijia/hungaryselling-6.html?id=959670">匈牙利推荐净水技术和消防</a></li><li>·<a onmousedown="qhstat_j2chan(&#39;deal&#39;,&#39;914531&#39;,&#39;d2050_29773&#39;)" id="utitle_914531" target="_blank" href="http://cn.china.cn/guojimaijia/turkeyselling-5.html?id=914531">土耳其推荐橄榄油</a></li><li>·<a onmousedown="qhstat_j2chan(&#39;deal&#39;,&#39;935690&#39;,&#39;d2050_29773&#39;)" id="utitle_935690" target="_blank" href="http://cn.china.cn/guojimaijia/moroccoselling-1.html?id=935690">摩洛哥使馆推荐Halieutis</a></li><li>·<a onmousedown="qhstat_j2chan(&#39;deal&#39;,&#39;935687&#39;,&#39;d2050_29773&#39;)" id="utitle_935687" target="_blank" href="http://cn.china.cn/guojimaijia/ethiopiapurchaseselling-1.html?id=935687">埃塞俄比亚寻找投资机遇</a></li>
</ul>
<div class="clear"></div>
</div>
</div>
</div>

<!--热门/活动 end-->
<div class="rowLAd">
<script type="text/javascript">   
var swf_width=320
var swf_height=36
var files='http://cn.china.cn/2011images/04/helanshuizhansh320x36.jpg'
var links='https://bj.infosalons.com.cn/reg/aquatech11sh/registercn/register.aspx?excode=MED11Sh53&exh=826'
var texts=''
var config='0xffffff:文字颜色|3:文字位置|0xCC0000:文字背景颜色|20:文字背景透明度|0xffffff:按键文字颜色|0xCC0000:按键默认颜色|0x000033:按键当前颜色|4:自动播放时间(秒)|0:图片过渡效果|0:是否显示按钮|_blank:打开窗口'

document.write('<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" width="'+ swf_width +'" height="'+ swf_height +'">');
document.write('<param name="movie" value="http://cn.china.cn/2007images/images/focuspic1.swf"><param name="quality" value="high">');
document.write('<param name="menu" value="false"><param name=wmode value="opaque">');
document.write('<param name="FlashVars" value="bcastr_file='+files+'&bcastr_link='+links+'&bcastr_title='+texts+'&bcastr_config='+config+'">');
document.write('<embed src="http://cn.china.cn/2007images/images/focuspic1.swf" wmode="opaque" FlashVars="bcastr_file='+files+'&bcastr_link='+links+'&bcastr_title='+texts+'&bcastr_config='+config+'& menu="false" quality="high" width="'+ swf_width +'" height="'+ swf_height +'" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />'); document.write('</object>'); 
</script>
</div>
</div>
<div class="row2B">
<div class="ad1">
<script type="text/javascript">
var swf_width=368
var swf_height=150
var files='http://cn.china.cn/2011images/109guangjiaohui/guangjiaohuihuandeng.jpg|http://cn.china.cn/2011images/04/fluid2011368150.gif|http://cn.china.cn/2011images/01/xianjiudianzhan368150.jpg|http://cn.china.cn/2011images/01/2011bjhanjiezhan368150.jpg|http://cn.china.cn/2010images/09/gzjinyejinzhan368150.jpg|http://cn.china.cn/2011images/01/CPS11.jpg'
var links='http://guangjiaohui.china.cn/|http://www.fluid-sh.com/cn/index/index.asp|http://www.hosfair.com/xian/|http://www.beijing-essen-welding.com/|http://cn.china.cn/frame/d843153,975bf0,d3422_16599.html|http://ahweb.adsale.com.hk/t.aspx?uid=21&tname=2913'
var texts=''
var config='0xffffff:TextColor|3:TextLocation|0xCC0000:TextBackground|20:TextTransparency|0xffffff:ButtonTextColor|0xCC0000:ButtonDefaultColor|0x000033:CurrentButtonColor|8:AutoplayTime(s)|1:TranspositionEffect|1:DisplayButtons|_blank:OpenInNewWindow'

document.write('<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" width="'+ swf_width +'" height="'+ swf_height +'">');
document.write('<param name="movie" value="http://cn.china.cn/2007images/images/focuspic1.swf"><param name="quality" value="high">');
document.write('<param name="menu" value="false"><param name=wmode value="opaque">');
document.write('<param name="FlashVars" value="bcastr_file='+files+'&bcastr_link='+links+'&bcastr_title='+texts+'&bcastr_config='+config+'">');
document.write('<embed src="http://cn.china.cn/2007images/images/focuspic1.swf" wmode="opaque" FlashVars="bcastr_file='+files+'&bcastr_link='+links+'&bcastr_title='+texts+'&bcastr_config='+config+'& menu="false" quality="high" width="'+ swf_width +'" height="'+ swf_height +'" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />'); document.write('</object>'); 
</script>

</div>
<!--登录 begin-->
<div class="login">
    <div class="loginCon">
        <img src="./res/loginTL.jpg" width="6" height="60" alt="">
        <form id="login" name="login" method="get" action="">
            <ul>
                <li>用户名： 
                    <input type="text" name="username" class="fream2"> 
                    <input type="submit" name="submit" value="登 录" class="btn2" onclick="javascript:return check();">
                </li>
                <li>密&nbsp;&nbsp;码： 
                    <input type="password" name="passport" class="fream2"> 
                    &nbsp;<a href="http://my.cn.china.cn/admin.php?op=B2BForgetInfoShow&type=passwd">忘记密码</a>
                </li>
            </ul>
        </form>
        <img src="./res/loginTR.jpg" width="6" height="60" alt="">
    </div>
  <div class="btn">
        <p><a href="http://my.cn.china.cn/admin.php?op=B2BRegisterShow" target="_blank"><img src="./res/sign8.gif" width="13" height="13" align="absmiddle">注册</a>
<a href="http://my.cn.china.cn/admin.php?op=ApplyRegisterShow" target="_blank" style="width:138px;height:24px;padding-top:9px;background:url(http://cn.china.cn/v5shouye/images/btn3Bg1.jpg) no-repeat;display:block;color:#CD0000;font-weight:bold;float:left;margin-top: 7px;margin-right: 3px;margin-bottom: 0;margin-left: 4px;padding-left: 12px;"><img src="./res/sign9.gif" width="13" height="18" align="absmiddle" style="padding-left: 7px;">加入中国供应商</a></p>
 <p><a href="http://my.cn.china.cn/admin.php?op=CorpBaseInfoShow" target="_blank">发布信息</a><a href="http://cn.china.cn/hyfw/index.html" target="_blank">推广公司</a><a href="http://cn.china.cn/buy/index.html" target="_blank">寻找买家</a></p>
    </div>
    <div class="btnBot">
        <img src="./res/loginBL.gif" width="6" height="5" style="float: left">
        <img src="./res/loginBR.gif" width="6" height="5" style="float: right">
    </div>
</div>
<!--登录 end-->
<div class="clear"></div>
<!--供求信息 begin-->

<div class="info">
<ul class="infoTit" style="border-right: 1px solid #E0E0E0">
    <li><span class="green">最新供应228833条：</span></li>
    <li><span class="red">最新求购&nbsp;7697&nbsp;条：</span></li>
</ul>
<ul id="marqueeBox" class="infoCon" style="height: 36px; overflow-x: hidden; overflow-y: hidden; ">
    <li class="else"><span class="green">供</span> <a target="_blank" href="http://detail.cn.china.cn/provide/detail,1761642720.html">供应金鑫果汁机、冷饮机、</a></li><li class="green">20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [<a target="_blank" href="http://detail.cn.china.cn/provide/detail,1761642720.html" class="green">江苏 徐州</a>]</li>
<li class="else"><span class="red">求</span> <a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1532484839/t/a5f426554672ae3aaa389242e45dd2da/offerdetail.html">求购收购旧枕木、再用枕木</a></li><li class="red"> 20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  [<a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1532484839/t/a5f426554672ae3aaa389242e45dd2da/offerdetail.html" class="red">辽宁 鞍山</a>]</li>
<li class="else"><span class="green">供</span> <a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630651248.html">供应防静电电木板</a></li><li class="green">20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [<a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630651248.html" class="green">广东 东莞</a>]</li>
<li class="else"><span class="red">求</span> <a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1532451622/t/fafb08c9a04f13352e8711a9767b9058/offerdetail.html">求购旧枕木</a></li><li class="red"> 20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  [<a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1532451622/t/fafb08c9a04f13352e8711a9767b9058/offerdetail.html" class="red">辽宁 鞍山</a>]</li>
<li class="else"><span class="green">供</span> <a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630649690.html">供应棉布板/棒</a></li><li class="green">20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [<a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630649690.html" class="green">广东 东莞</a>]</li>
<li class="else"><span class="red">求</span> <a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1608498969/t/1661391fde02b4200a44a0f123d0eb2d/offerdetail.html">求购二手木工机械</a></li><li class="red"> 20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  [<a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1608498969/t/1661391fde02b4200a44a0f123d0eb2d/offerdetail.html" class="red">北京 通州</a>]</li>
<li class="else"><span class="green">供</span> <a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630647161.html">供应胶木板/棒</a></li><li class="green">20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [<a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630647161.html" class="green">广东 东莞</a>]</li>
<li class="else"><span class="red">求</span> <a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1608498966/t/2e24feb1d04cd3bc558eb12b17fabe47/offerdetail.html">求购二手木工机械</a></li><li class="red"> 20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  [<a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1608498966/t/2e24feb1d04cd3bc558eb12b17fabe47/offerdetail.html" class="red">北京 通州</a>]</li>
<li class="else"><span class="green">供</span> <a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630653980.html">供应进口防静电黑色电木板</a></li><li class="green">20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [<a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630653980.html" class="green">广东 东莞</a>]</li>
<li class="else"><span class="red">求</span> <a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1472811303/t/79fbe1fdf8293382b57b336b6e9eddb7/offerdetail.html">求购二手捷信液压云台</a></li><li class="red"> 20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  [<a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1472811303/t/79fbe1fdf8293382b57b336b6e9eddb7/offerdetail.html" class="red">广东 广州</a>]</li>
<li class="else"><span class="green">供</span> <a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630648522.html">供应酚醛树脂层压板/棒</a></li><li class="green">20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [<a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630648522.html" class="green">广东 东莞</a>]</li>
<li class="else"><span class="red">求</span> <a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1472811023/t/68456378eba05fa6d02e3cadb992c37f/offerdetail.html">求购二手编辑录放像机</a></li><li class="red"> 20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  [<a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1472811023/t/68456378eba05fa6d02e3cadb992c37f/offerdetail.html" class="red">广东 广州</a>]</li>
<li class="else"><span class="green">供</span> <a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630652736.html">供应防静电黑色电木板</a></li><li class="green">20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [<a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630652736.html" class="green">广东 东莞</a>]</li>
<li class="else"><span class="red">求</span> <a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1527664371/t/83985a04d0a3a995a0ed96cd7d41bedf/offerdetail.html">求购报废处理钛白粉</a></li><li class="red"> 20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  [<a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1527664371/t/83985a04d0a3a995a0ed96cd7d41bedf/offerdetail.html" class="red">河北 邯郸</a>]</li>
<li class="else"><span class="green">供</span> <a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630658463.html">供应防静电MC501CD</a></li><li class="green">20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [<a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630658463.html" class="green">广东 东莞</a>]</li>
<li class="else"><span class="red">求</span> <a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1527663993/t/6dd8adf9a231ae05fe42db1bc7e774ff/offerdetail.html">求购库存过期聚酰胺树脂树</a></li><li class="red"> 20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  [<a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1527663993/t/6dd8adf9a231ae05fe42db1bc7e774ff/offerdetail.html" class="red">河北 邯郸</a>]</li>
<li class="else"><span class="green">供</span> <a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630659655.html">供应防静电MC501CD</a></li><li class="green">20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [<a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630659655.html" class="green">广东 东莞</a>]</li>
<li class="else"><span class="red">求</span> <a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1527663978/t/c13e76c0676425f085a1e6f01e87f247/offerdetail.html">求购积压报废处理染料及颜</a></li><li class="red"> 20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  [<a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1527663978/t/c13e76c0676425f085a1e6f01e87f247/offerdetail.html" class="red">河北 邯郸</a>]</li>
<li class="else"><span class="green">供</span> <a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630654999.html">供应进口防静电电木板</a></li><li class="green">20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [<a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630654999.html" class="green">广东 东莞</a>]</li>
<li class="else"><span class="red">求</span> <a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1526128862/t/fbb7e30b6d0ec54cd9178c6852743974/offerdetail.html">求购废旧颜料</a></li><li class="red"> 20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  [<a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1526128862/t/fbb7e30b6d0ec54cd9178c6852743974/offerdetail.html" class="red">河北 邯郸</a>]</li>
<li class="else"><span class="green">供</span> <a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630657402.html">供应导电MC501CDR</a></li><li class="green">20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [<a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630657402.html" class="green">广东 东莞</a>]</li>
<li class="else"><span class="red">求</span> <a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1547314696/t/b5256ce88d69ff5fb4307143b4ee98b8/offerdetail.html">长期求购过期处理聚乙烯醇</a></li><li class="red"> 20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  [<a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1547314696/t/b5256ce88d69ff5fb4307143b4ee98b8/offerdetail.html" class="red">河北 邯郸</a>]</li>
<li class="else"><span class="green">供</span> <a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630655451.html">供应防静电尼龙板/棒</a></li><li class="green">20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [<a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630655451.html" class="green">广东 东莞</a>]</li>
<li class="else"><span class="red">求</span> <a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1529133757/t/c19af2394605e0a61dbd8610af6694de/offerdetail.html">求购废旧库存颜料</a></li><li class="red"> 20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  [<a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1529133757/t/c19af2394605e0a61dbd8610af6694de/offerdetail.html" class="red">河北 邯郸</a>]</li>
<li class="else"><span class="green">供</span> <a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630656150.html">供应防静电尼龙板|防静电</a></li><li class="green">20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [<a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630656150.html" class="green">广东 东莞</a>]</li>
<li class="else"><span class="red">求</span> <a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1528709612/t/e5de2126af7b08e9b758ec8c95d8f9bb/offerdetail.html">求购废旧处理活性艳蓝13</a></li><li class="red"> 20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  [<a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1528709612/t/e5de2126af7b08e9b758ec8c95d8f9bb/offerdetail.html" class="red">河北 邯郸</a>]</li>
<li class="else"><span class="green">供</span> <a target="_blank" href="http://detail.cn.china.cn/provide/detail,1761642693.html">河北友发钢管制造有限公司</a></li><li class="green">20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [<a target="_blank" href="http://detail.cn.china.cn/provide/detail,1761642693.html" class="green">河北 沧州</a>]</li>
<li class="else"><span class="red">求</span> <a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1528709552/t/c5f9d81ecc5b7d6a7bf9c6f1fcb71b77/offerdetail.html">求购积压库存聚乙烯醇13</a></li><li class="red"> 20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  [<a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1528709552/t/c5f9d81ecc5b7d6a7bf9c6f1fcb71b77/offerdetail.html" class="red">河北 邯郸</a>]</li>
<li class="else"><span class="green">供</span> <a target="_blank" href="http://detail.cn.china.cn/provide/detail,1404967530.html">供应【 双头绣花机 】</a></li><li class="green">20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [<a target="_blank" href="http://detail.cn.china.cn/provide/detail,1404967530.html" class="green">湖北 武汉</a>]</li>
<li class="else"><span class="red">求</span> <a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1522834837/t/424d7388cffea5069072adfa3a1b00df/offerdetail.html">求购库存染料及有机颜料</a></li><li class="red"> 20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  [<a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1522834837/t/424d7388cffea5069072adfa3a1b00df/offerdetail.html" class="red">河北 邯郸</a>]</li>
<li class="else"><span class="green">供</span> <a target="_blank" href="http://detail.cn.china.cn/provide/detail,1404966490.html">供应 【 单头绣花机 】</a></li><li class="green">20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [<a target="_blank" href="http://detail.cn.china.cn/provide/detail,1404966490.html" class="green">湖北 武汉</a>]</li>
<li class="else"><span class="red">求</span> <a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1503212204/t/64b19c98fd42747d07e9deb5ae7d408b/offerdetail.html">求购油墨油漆厂剩余颜料永</a></li><li class="red"> 20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  [<a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1503212204/t/64b19c98fd42747d07e9deb5ae7d408b/offerdetail.html" class="red">河北 邯郸</a>]</li>
<li class="else"><span class="green">供</span> <a target="_blank" href="http://detail.cn.china.cn/provide/detail,1404968140.html">供应【 双头成衣绣花机 </a></li><li class="green">20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [<a target="_blank" href="http://detail.cn.china.cn/provide/detail,1404968140.html" class="green">湖北 武汉</a>]</li>
<li class="else"><span class="red">求</span> <a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1399001540/t/422f9d311f846d809d50b5ac3ca01f4c/offerdetail.html">求购废旧染料</a></li><li class="red"> 20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  [<a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1399001540/t/422f9d311f846d809d50b5ac3ca01f4c/offerdetail.html" class="red">河北 邯郸</a>]</li>
<li class="else"><span class="green">供</span> <a target="_blank" href="http://detail.cn.china.cn/provide/detail,1404968620.html">供应【 双头帽绣绣花机 </a></li><li class="green">20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [<a target="_blank" href="http://detail.cn.china.cn/provide/detail,1404968620.html" class="green">湖北 武汉</a>]</li>
<li class="else"><span class="red">求</span> <a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1397313140/t/e0df0717b4f1fdd8de83e23907f82ab4/offerdetail.html">求购报废联苯胺黄</a></li><li class="red"> 20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  [<a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1397313140/t/e0df0717b4f1fdd8de83e23907f82ab4/offerdetail.html" class="red">河北 邯郸</a>]</li>
<li class="else"><span class="green">供</span> <a target="_blank" href="http://detail.cn.china.cn/provide/detail,1404968370.html">供应【 单头成衣绣花机 </a></li><li class="green">20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [<a target="_blank" href="http://detail.cn.china.cn/provide/detail,1404968370.html" class="green">湖北 武汉</a>]</li>
<li class="else"><span class="red">求</span> <a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1395941620/t/01ce73f6f24aa2127785068ef28ed234/offerdetail.html">求购废旧库存化工原料</a></li><li class="red"> 20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  [<a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1395941620/t/01ce73f6f24aa2127785068ef28ed234/offerdetail.html" class="red">河北 邯郸</a>]</li>
<li class="else"><span class="green">供</span> <a target="_blank" href="http://detail.cn.china.cn/provide/detail,1404968840.html">供应【 锁式毛巾绣绣花机</a></li><li class="green">20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [<a target="_blank" href="http://detail.cn.china.cn/provide/detail,1404968840.html" class="green">湖北 武汉</a>]</li>
<li class="else"><span class="red">求</span> <a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1395940880/t/a725f94e88cae553f27441f1435d106e/offerdetail.html">求购求购库存单质金属</a></li><li class="red"> 20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  [<a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1395940880/t/a725f94e88cae553f27441f1435d106e/offerdetail.html" class="red">河北 邯郸</a>]</li>
<li class="else"><span class="green">供</span> <a target="_blank" href="http://detail.cn.china.cn/provide/detail,1404968470.html">供应【 单头帽绣绣花机 </a></li><li class="green">20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [<a target="_blank" href="http://detail.cn.china.cn/provide/detail,1404968470.html" class="green">湖北 武汉</a>]</li>
<li class="else"><span class="red">求</span> <a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1394035280/t/2161e9cdea2bf860fe1068c0c66690e1/offerdetail.html">求购现金回收油墨厂库存颜</a></li><li class="red"> 20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  [<a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1394035280/t/2161e9cdea2bf860fe1068c0c66690e1/offerdetail.html" class="red">河北 邯郸</a>]</li>
<li class="else"><span class="green">供</span> <a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630669163.html">供应PPO板|PPO棒</a></li><li class="green">20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [<a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630669163.html" class="green">广东 东莞</a>]</li>
<li class="else"><span class="red">求</span> <a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1389761240/t/5bce2d99d51f724608e37a1b6acff497/offerdetail.html">求购现款回收各种库存染料</a></li><li class="red"> 20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  [<a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1389761240/t/5bce2d99d51f724608e37a1b6acff497/offerdetail.html" class="red">河北 邯郸</a>]</li>
<li class="else"><span class="green">供</span> <a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630669719.html">供应进口PPO板|进口P</a></li><li class="green">20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [<a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630669719.html" class="green">广东 东莞</a>]</li>
<li class="else"><span class="red">求</span> <a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1388435970/t/04b6f58db09693f1b80ab701aa5ed504/offerdetail.html">求购需求过期铜金粉钛白粉</a></li><li class="red"> 20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  [<a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1388435970/t/04b6f58db09693f1b80ab701aa5ed504/offerdetail.html" class="red">河北 邯郸</a>]</li>
<li class="else"><span class="green">供</span> <a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630670402.html">供应黑色PPO板|黑色P</a></li><li class="green">20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [<a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630670402.html" class="green">广东 东莞</a>]</li>
<li class="else"><span class="red">求</span> <a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1387718000/t/a4807f77078f444f675d4e089b54abf0/offerdetail.html">求购化工厂停产处理氯化亚</a></li><li class="red"> 20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  [<a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1387718000/t/a4807f77078f444f675d4e089b54abf0/offerdetail.html" class="red">河北 邯郸</a>]</li>
<li class="else"><span class="green">供</span> <a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630671058.html">供应聚苯醚板|聚苯醚棒</a></li><li class="green">20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [<a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630671058.html" class="green">广东 东莞</a>]</li>
<li class="else"><span class="red">求</span> <a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1387271540/t/207c3080ca5a8231ccf4059d77bdf66e/offerdetail.html">求购库存染料怎么办 金星</a></li><li class="red"> 20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  [<a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1387271540/t/207c3080ca5a8231ccf4059d77bdf66e/offerdetail.html" class="red">河北 邯郸</a>]</li>
<li class="else"><span class="green">供</span> <a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630668035.html">供应PPO板 聚苯醚</a></li><li class="green">20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [<a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630668035.html" class="green">广东 东莞</a>]</li>
<li class="else"><span class="red">求</span> <a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1761624193/t/fffe99ba129fc1b2f1112ec66ffeb2f8/offerdetail.html">求购塑料/金属转盘</a></li><li class="red"> 20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  [<a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1761624193/t/fffe99ba129fc1b2f1112ec66ffeb2f8/offerdetail.html" class="red">上海</a>]</li>
<li class="else"><span class="green">供</span> <a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630666132.html">供应米黄色防静电POM板</a></li><li class="green">20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [<a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630666132.html" class="green">广东 东莞</a>]</li>
<li class="else"><span class="red">求</span> <a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1761623889/t/d8c1d93ec78062cda19b0069b8875f49/offerdetail.html">求购椅面板</a></li><li class="red"> 20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  [<a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1761623889/t/d8c1d93ec78062cda19b0069b8875f49/offerdetail.html" class="red">河南</a>]</li>
<li class="else"><span class="green">供</span> <a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630661503.html">供应防静电POM板|防静</a></li><li class="green">20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [<a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630661503.html" class="green">广东 东莞</a>]</li>
<li class="else"><span class="red">求</span> <a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1761623532/t/d0fb2d440b5cab5e0f4c021f2c612a73/offerdetail.html">求购三边封制袋机、切纸机</a></li><li class="red"> 20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  [<a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1761623532/t/d0fb2d440b5cab5e0f4c021f2c612a73/offerdetail.html" class="red">江苏</a>]</li>
<li class="else"><span class="green">供</span> <a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630663543.html">供应防静电赛钢板|防静电</a></li><li class="green">20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [<a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630663543.html" class="green">广东 东莞</a>]</li>
<li class="else"><span class="red">求</span> <a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1761623217/t/0ee19b7d60b74d6ace6897b5544e24c1/offerdetail.html">求购不锈钢板0.62*1</a></li><li class="red"> 20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  [<a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1761623217/t/0ee19b7d60b74d6ace6897b5544e24c1/offerdetail.html" class="red">浙江</a>]</li>
<li class="else"><span class="green">供</span> <a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630664468.html">供应黑色防静电POM板|</a></li><li class="green">20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [<a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630664468.html" class="green">广东 东莞</a>]</li>
<li class="else"><span class="red">求</span> <a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1761622720/t/931e529d0b534528216d4202938b31ae/offerdetail.html">求购抽油烟机,燃气炉具,</a></li><li class="red"> 20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  [<a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1761622720/t/931e529d0b534528216d4202938b31ae/offerdetail.html" class="red">湖南</a>]</li>
<li class="else"><span class="green">供</span> <a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630672525.html">供应UPE超高分子量聚乙</a></li><li class="green">20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [<a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630672525.html" class="green">广东 东莞</a>]</li>
<li class="else"><span class="red">求</span> <a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1761622124/t/0870c0bfa5bec81c391b7bcfdd96bb9f/offerdetail.html">求购床垫</a></li><li class="red"> 20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  [<a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1761622124/t/0870c0bfa5bec81c391b7bcfdd96bb9f/offerdetail.html" class="red">广东</a>]</li>
<li class="else"><span class="green">供</span> <a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630682410.html">供应聚四氟乙烯板|聚四氟</a></li><li class="green">20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [<a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630682410.html" class="green">广东 东莞</a>]</li>
<li class="else"><span class="red">求</span> <a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1761606683/t/5d49a4980fbbc38d75098dbfad13cad5/offerdetail.html">求购30万大卡，0.5吨</a></li><li class="red"> 20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  [<a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1761606683/t/5d49a4980fbbc38d75098dbfad13cad5/offerdetail.html" class="red">福建</a>]</li>
<li class="else"><span class="green">供</span> <a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630683287.html">供应进口PTFE板|进口</a></li><li class="green">20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [<a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630683287.html" class="green">广东 东莞</a>]</li>
<li class="else"><span class="red">求</span> <a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1761606445/t/c9132d9fc02e7c79fc27f659d91374fb/offerdetail.html">求购打包机</a></li><li class="red"> 20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  [<a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1761606445/t/c9132d9fc02e7c79fc27f659d91374fb/offerdetail.html" class="red">广西</a>]</li>
<li class="else"><span class="green">供</span> <a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630684918.html">供应铁氟龙板|铁氟龙棒</a></li><li class="green">20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [<a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630684918.html" class="green">广东 东莞</a>]</li>
<li class="else"><span class="red">求</span> <a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1761606314/t/c4ccfc8410903bac019aded5f4c50405/offerdetail.html">紧急求购復膜机</a></li><li class="red"> 20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  [<a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1761606314/t/c4ccfc8410903bac019aded5f4c50405/offerdetail.html" class="red">广东</a>]</li>
<li class="else"><span class="green">供</span> <a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630675745.html">供应UPE板|UPE棒</a></li><li class="green">20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [<a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630675745.html" class="green">广东 东莞</a>]</li>
<li class="else"><span class="red">求</span> <a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1761605895/t/cd76ed173cf14d5efb8981408c3f9042/offerdetail.html">求购进口油缸</a></li><li class="red"> 20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  [<a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1761605895/t/cd76ed173cf14d5efb8981408c3f9042/offerdetail.html" class="red">上海</a>]</li>
<li class="else"><span class="green">供</span> <a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630681623.html">供应PTFE板|PTFE</a></li><li class="green">20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [<a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630681623.html" class="green">广东 东莞</a>]</li>
<li class="else"><span class="red">求</span> <a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1761605763/t/d610be1cc4bfb2f513a4311f6f6a9575/offerdetail.html">求购耳机</a></li><li class="red"> 20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  [<a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1761605763/t/d610be1cc4bfb2f513a4311f6f6a9575/offerdetail.html" class="red">广东</a>]</li>
<li class="else"><span class="green">供</span> <a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630685726.html">供应CPVC板|CPVC</a></li><li class="green">20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [<a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630685726.html" class="green">广东 东莞</a>]</li>
<li class="else"><span class="red">求</span> <a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1761605684/t/e4cfa3199543752fa6e43b145e7318a4/offerdetail.html">求购圆柱体海棉</a></li><li class="red"> 20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  [<a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1761605684/t/e4cfa3199543752fa6e43b145e7318a4/offerdetail.html" class="red">广东</a>]</li>
<li class="else"><span class="green">供</span> <a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630676892.html">供应进口UPE板|进口U</a></li><li class="green">20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [<a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630676892.html" class="green">广东 东莞</a>]</li>
<li class="else"><span class="red">求</span> <a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1761604587/t/355d433bcb81411dead6ab1974888a61/offerdetail.html">求购拉手</a></li><li class="red"> 20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  [<a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1761604587/t/355d433bcb81411dead6ab1974888a61/offerdetail.html" class="red"></a>]</li>
<li class="else"><span class="green">供</span> <a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630678816.html">供应白色UPE板|白色U</a></li><li class="green">20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [<a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630678816.html" class="green">广东 东莞</a>]</li>
<li class="else"><span class="red">求</span> <a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1761603589/t/fa17c776502dd3f537a444bcf070f14a/offerdetail.html">求购公园椅 休闲椅厂家</a></li><li class="red"> 20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  [<a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1761603589/t/fa17c776502dd3f537a444bcf070f14a/offerdetail.html" class="red">上海</a>]</li>
<li class="else"><span class="green">供</span> <a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630680072.html">供应PE-UHMW板|P</a></li><li class="green">20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [<a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630680072.html" class="green">广东 东莞</a>]</li>
<li class="else"><span class="red">求</span> <a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1761603310/t/603f8db5cc7402c1b71d04bcd78d8028/offerdetail.html">求购 家用跑步机</a></li><li class="red"> 20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  [<a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1761603310/t/603f8db5cc7402c1b71d04bcd78d8028/offerdetail.html" class="red">江苏</a>]</li>
<li class="else"><span class="green">供</span> <a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630680874.html">供应德国UPE板|德国U</a></li><li class="green">20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [<a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630680874.html" class="green">广东 东莞</a>]</li>
<li class="else"><span class="red">求</span> <a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1761602053/t/bc51c17fcfa4ac6f9cbf53c6408c5d4f/offerdetail.html">求购镀锌板（卷）</a></li><li class="red"> 20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  [<a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1761602053/t/bc51c17fcfa4ac6f9cbf53c6408c5d4f/offerdetail.html" class="red">河北</a>]</li>
<li class="else"><span class="green">供</span> <a target="_blank" href="http://detail.cn.china.cn/provide/detail,1361143480.html">供应河道清理加长臂</a></li><li class="green">20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [<a target="_blank" href="http://detail.cn.china.cn/provide/detail,1361143480.html" class="green">广东 东莞</a>]</li>
<li class="else"><span class="red">求</span> <a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1761589353/t/9b105c720a3a90a39695cd5c0668749f/offerdetail.html">求购 转向灯，角灯</a></li><li class="red"> 20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  [<a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1761589353/t/9b105c720a3a90a39695cd5c0668749f/offerdetail.html" class="red">广东</a>]</li>
<li class="else"><span class="green">供</span> <a target="_blank" href="http://detail.cn.china.cn/provide/detail,1761642639.html">东莞自动门、东莞自动门供</a></li><li class="green">20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [<a target="_blank" href="http://detail.cn.china.cn/provide/detail,1761642639.html" class="green">广东 广州</a>]</li>
<li class="else"><span class="red">求</span> <a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1761589314/t/5f9426e8747acf41c6afd66961ab5d37/offerdetail.html">求购蹲便器用的水箱</a></li><li class="red"> 20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  [<a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1761589314/t/5f9426e8747acf41c6afd66961ab5d37/offerdetail.html" class="red"></a>]</li>
<li class="else"><span class="green">供</span> <a target="_blank" href="http://detail.cn.china.cn/provide/detail,1725726781.html">工业用羊毛抛光球，毛毡抛</a></li><li class="green">20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [<a target="_blank" href="http://detail.cn.china.cn/provide/detail,1725726781.html" class="green">河北 邢台</a>]</li>
<li class="else"><span class="red">求</span> <a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1761589003/t/2ae083fb288f4387d34940e3cc677943/offerdetail.html">求购304角钢，扁钢</a></li><li class="red"> 20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  [<a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1761589003/t/2ae083fb288f4387d34940e3cc677943/offerdetail.html" class="red">江苏</a>]</li>
<li class="else"><span class="green">供</span> <a target="_blank" href="http://detail.cn.china.cn/provide/detail,1726558198.html">供应内燃机、压缩机用油棉</a></li><li class="green">20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [<a target="_blank" href="http://detail.cn.china.cn/provide/detail,1726558198.html" class="green">河北 邢台</a>]</li>
<li class="else"><span class="red">求</span> <a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1761588840/t/fc42015fb54705924ceddfb0815d65b7/offerdetail.html">求购名片式放大镜</a></li><li class="red"> 20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  [<a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1761588840/t/fc42015fb54705924ceddfb0815d65b7/offerdetail.html" class="red">江苏</a>]</li>
<li class="else"><span class="green">供</span> <a target="_blank" href="http://detail.cn.china.cn/provide/detail,1725721050.html">各种规格电器用毛毡轮，涤</a></li><li class="green">20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [<a target="_blank" href="http://detail.cn.china.cn/provide/detail,1725721050.html" class="green">河北 邢台</a>]</li>
<li class="else"><span class="red">求</span> <a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1761588795/t/cf3963c318447ad4446ba89e13f2995d/offerdetail.html">Buy buckwhea</a></li><li class="red"> 20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  [<a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1761588795/t/cf3963c318447ad4446ba89e13f2995d/offerdetail.html" class="red">China</a>]</li>
<li class="else"><span class="green">供</span> <a target="_blank" href="http://detail.cn.china.cn/provide/detail,1742701174.html">佳通毛毡供应抛光羊毛毡、</a></li><li class="green">20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [<a target="_blank" href="http://detail.cn.china.cn/provide/detail,1742701174.html" class="green">河北 邢台</a>]</li>
<li class="else"><span class="red">求</span> <a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1761588792/t/fa54f8e5a68156318fa9ba81b5622c4f/offerdetail.html">Buy Women's </a></li><li class="red"> 20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  [<a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1761588792/t/fa54f8e5a68156318fa9ba81b5622c4f/offerdetail.html" class="red">China</a>]</li>
<li class="else"><span class="green">供</span> <a target="_blank" href="http://detail.cn.china.cn/provide/detail,1742486238.html">【佳通毛毡】供应化纤毡、</a></li><li class="green">20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [<a target="_blank" href="http://detail.cn.china.cn/provide/detail,1742486238.html" class="green">河北 邢台</a>]</li>
<li class="else"><span class="red">求</span> <a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1761588789/t/1eab5c8b08f660cae0540f65b438fba1/offerdetail.html">Buy Candy</a></li><li class="red"> 20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  [<a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1761588789/t/1eab5c8b08f660cae0540f65b438fba1/offerdetail.html" class="red">China</a>]</li>
<li class="else"><span class="green">供</span> <a target="_blank" href="http://detail.cn.china.cn/provide/detail,1727348663.html">供应防寒毛毡，防护毡，阻</a></li><li class="green">20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [<a target="_blank" href="http://detail.cn.china.cn/provide/detail,1727348663.html" class="green">河北 邢台</a>]</li>
<li class="else"><span class="red">求</span> <a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1761588786/t/ddee581b256d60620cc7d53996cca085/offerdetail.html">Buy Canned F</a></li><li class="red"> 20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  [<a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1761588786/t/ddee581b256d60620cc7d53996cca085/offerdetail.html" class="red">China</a>]</li>
<li class="else"><span class="green">供</span> <a target="_blank" href="http://detail.cn.china.cn/provide/detail,1726565307.html">供应彩色毛毡，毛毡工艺品</a></li><li class="green">20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [<a target="_blank" href="http://detail.cn.china.cn/provide/detail,1726565307.html" class="green">河北 邢台</a>]</li>
<li class="else"><span class="red">求</span> <a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1761588783/t/997be1d82de9c6357360941de7e4c162/offerdetail.html">Buy Ladies' </a></li><li class="red"> 20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  [<a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1761588783/t/997be1d82de9c6357360941de7e4c162/offerdetail.html" class="red">China</a>]</li>

<ul id="marqueeBox" class="infoCon" style="height: 36px; overflow-x: hidden; overflow-y: hidden; ">
    <li class="else"><span class="green">供</span> <a target="_blank" href="http://detail.cn.china.cn/provide/detail,1761642720.html">供应金鑫果汁机、冷饮机、</a></li><li class="green">20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [<a target="_blank" href="http://detail.cn.china.cn/provide/detail,1761642720.html" class="green">江苏 徐州</a>]</li>
<li class="else"><span class="red">求</span> <a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1532484839/t/a5f426554672ae3aaa389242e45dd2da/offerdetail.html">求购收购旧枕木、再用枕木</a></li><li class="red"> 20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  [<a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1532484839/t/a5f426554672ae3aaa389242e45dd2da/offerdetail.html" class="red">辽宁 鞍山</a>]</li>
<li class="else"><span class="green">供</span> <a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630651248.html">供应防静电电木板</a></li><li class="green">20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [<a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630651248.html" class="green">广东 东莞</a>]</li>
<li class="else"><span class="red">求</span> <a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1532451622/t/fafb08c9a04f13352e8711a9767b9058/offerdetail.html">求购旧枕木</a></li><li class="red"> 20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  [<a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1532451622/t/fafb08c9a04f13352e8711a9767b9058/offerdetail.html" class="red">辽宁 鞍山</a>]</li>
<li class="else"><span class="green">供</span> <a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630649690.html">供应棉布板/棒</a></li><li class="green">20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [<a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630649690.html" class="green">广东 东莞</a>]</li>
<li class="else"><span class="red">求</span> <a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1608498969/t/1661391fde02b4200a44a0f123d0eb2d/offerdetail.html">求购二手木工机械</a></li><li class="red"> 20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  [<a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1608498969/t/1661391fde02b4200a44a0f123d0eb2d/offerdetail.html" class="red">北京 通州</a>]</li>
<li class="else"><span class="green">供</span> <a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630647161.html">供应胶木板/棒</a></li><li class="green">20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [<a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630647161.html" class="green">广东 东莞</a>]</li>
<li class="else"><span class="red">求</span> <a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1608498966/t/2e24feb1d04cd3bc558eb12b17fabe47/offerdetail.html">求购二手木工机械</a></li><li class="red"> 20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  [<a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1608498966/t/2e24feb1d04cd3bc558eb12b17fabe47/offerdetail.html" class="red">北京 通州</a>]</li>
<li class="else"><span class="green">供</span> <a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630653980.html">供应进口防静电黑色电木板</a></li><li class="green">20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [<a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630653980.html" class="green">广东 东莞</a>]</li>
<li class="else"><span class="red">求</span> <a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1472811303/t/79fbe1fdf8293382b57b336b6e9eddb7/offerdetail.html">求购二手捷信液压云台</a></li><li class="red"> 20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  [<a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1472811303/t/79fbe1fdf8293382b57b336b6e9eddb7/offerdetail.html" class="red">广东 广州</a>]</li>
<li class="else"><span class="green">供</span> <a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630648522.html">供应酚醛树脂层压板/棒</a></li><li class="green">20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [<a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630648522.html" class="green">广东 东莞</a>]</li>
<li class="else"><span class="red">求</span> <a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1472811023/t/68456378eba05fa6d02e3cadb992c37f/offerdetail.html">求购二手编辑录放像机</a></li><li class="red"> 20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  [<a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1472811023/t/68456378eba05fa6d02e3cadb992c37f/offerdetail.html" class="red">广东 广州</a>]</li>
<li class="else"><span class="green">供</span> <a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630652736.html">供应防静电黑色电木板</a></li><li class="green">20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [<a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630652736.html" class="green">广东 东莞</a>]</li>
<li class="else"><span class="red">求</span> <a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1527664371/t/83985a04d0a3a995a0ed96cd7d41bedf/offerdetail.html">求购报废处理钛白粉</a></li><li class="red"> 20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  [<a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1527664371/t/83985a04d0a3a995a0ed96cd7d41bedf/offerdetail.html" class="red">河北 邯郸</a>]</li>
<li class="else"><span class="green">供</span> <a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630658463.html">供应防静电MC501CD</a></li><li class="green">20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [<a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630658463.html" class="green">广东 东莞</a>]</li>
<li class="else"><span class="red">求</span> <a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1527663993/t/6dd8adf9a231ae05fe42db1bc7e774ff/offerdetail.html">求购库存过期聚酰胺树脂树</a></li><li class="red"> 20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  [<a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1527663993/t/6dd8adf9a231ae05fe42db1bc7e774ff/offerdetail.html" class="red">河北 邯郸</a>]</li>
<li class="else"><span class="green">供</span> <a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630659655.html">供应防静电MC501CD</a></li><li class="green">20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [<a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630659655.html" class="green">广东 东莞</a>]</li>
<li class="else"><span class="red">求</span> <a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1527663978/t/c13e76c0676425f085a1e6f01e87f247/offerdetail.html">求购积压报废处理染料及颜</a></li><li class="red"> 20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  [<a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1527663978/t/c13e76c0676425f085a1e6f01e87f247/offerdetail.html" class="red">河北 邯郸</a>]</li>
<li class="else"><span class="green">供</span> <a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630654999.html">供应进口防静电电木板</a></li><li class="green">20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [<a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630654999.html" class="green">广东 东莞</a>]</li>
<li class="else"><span class="red">求</span> <a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1526128862/t/fbb7e30b6d0ec54cd9178c6852743974/offerdetail.html">求购废旧颜料</a></li><li class="red"> 20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  [<a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1526128862/t/fbb7e30b6d0ec54cd9178c6852743974/offerdetail.html" class="red">河北 邯郸</a>]</li>
<li class="else"><span class="green">供</span> <a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630657402.html">供应导电MC501CDR</a></li><li class="green">20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [<a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630657402.html" class="green">广东 东莞</a>]</li>
<li class="else"><span class="red">求</span> <a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1547314696/t/b5256ce88d69ff5fb4307143b4ee98b8/offerdetail.html">长期求购过期处理聚乙烯醇</a></li><li class="red"> 20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  [<a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1547314696/t/b5256ce88d69ff5fb4307143b4ee98b8/offerdetail.html" class="red">河北 邯郸</a>]</li>
<li class="else"><span class="green">供</span> <a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630655451.html">供应防静电尼龙板/棒</a></li><li class="green">20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [<a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630655451.html" class="green">广东 东莞</a>]</li>
<li class="else"><span class="red">求</span> <a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1529133757/t/c19af2394605e0a61dbd8610af6694de/offerdetail.html">求购废旧库存颜料</a></li><li class="red"> 20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  [<a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1529133757/t/c19af2394605e0a61dbd8610af6694de/offerdetail.html" class="red">河北 邯郸</a>]</li>
<li class="else"><span class="green">供</span> <a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630656150.html">供应防静电尼龙板|防静电</a></li><li class="green">20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [<a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630656150.html" class="green">广东 东莞</a>]</li>
<li class="else"><span class="red">求</span> <a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1528709612/t/e5de2126af7b08e9b758ec8c95d8f9bb/offerdetail.html">求购废旧处理活性艳蓝13</a></li><li class="red"> 20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  [<a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1528709612/t/e5de2126af7b08e9b758ec8c95d8f9bb/offerdetail.html" class="red">河北 邯郸</a>]</li>
<li class="else"><span class="green">供</span> <a target="_blank" href="http://detail.cn.china.cn/provide/detail,1761642693.html">河北友发钢管制造有限公司</a></li><li class="green">20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [<a target="_blank" href="http://detail.cn.china.cn/provide/detail,1761642693.html" class="green">河北 沧州</a>]</li>
<li class="else"><span class="red">求</span> <a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1528709552/t/c5f9d81ecc5b7d6a7bf9c6f1fcb71b77/offerdetail.html">求购积压库存聚乙烯醇13</a></li><li class="red"> 20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  [<a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1528709552/t/c5f9d81ecc5b7d6a7bf9c6f1fcb71b77/offerdetail.html" class="red">河北 邯郸</a>]</li>
<li class="else"><span class="green">供</span> <a target="_blank" href="http://detail.cn.china.cn/provide/detail,1404967530.html">供应【 双头绣花机 】</a></li><li class="green">20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [<a target="_blank" href="http://detail.cn.china.cn/provide/detail,1404967530.html" class="green">湖北 武汉</a>]</li>
<li class="else"><span class="red">求</span> <a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1522834837/t/424d7388cffea5069072adfa3a1b00df/offerdetail.html">求购库存染料及有机颜料</a></li><li class="red"> 20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  [<a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1522834837/t/424d7388cffea5069072adfa3a1b00df/offerdetail.html" class="red">河北 邯郸</a>]</li>
<li class="else"><span class="green">供</span> <a target="_blank" href="http://detail.cn.china.cn/provide/detail,1404966490.html">供应 【 单头绣花机 】</a></li><li class="green">20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [<a target="_blank" href="http://detail.cn.china.cn/provide/detail,1404966490.html" class="green">湖北 武汉</a>]</li>
<li class="else"><span class="red">求</span> <a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1503212204/t/64b19c98fd42747d07e9deb5ae7d408b/offerdetail.html">求购油墨油漆厂剩余颜料永</a></li><li class="red"> 20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  [<a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1503212204/t/64b19c98fd42747d07e9deb5ae7d408b/offerdetail.html" class="red">河北 邯郸</a>]</li>
<li class="else"><span class="green">供</span> <a target="_blank" href="http://detail.cn.china.cn/provide/detail,1404968140.html">供应【 双头成衣绣花机 </a></li><li class="green">20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [<a target="_blank" href="http://detail.cn.china.cn/provide/detail,1404968140.html" class="green">湖北 武汉</a>]</li>
<li class="else"><span class="red">求</span> <a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1399001540/t/422f9d311f846d809d50b5ac3ca01f4c/offerdetail.html">求购废旧染料</a></li><li class="red"> 20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  [<a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1399001540/t/422f9d311f846d809d50b5ac3ca01f4c/offerdetail.html" class="red">河北 邯郸</a>]</li>
<li class="else"><span class="green">供</span> <a target="_blank" href="http://detail.cn.china.cn/provide/detail,1404968620.html">供应【 双头帽绣绣花机 </a></li><li class="green">20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [<a target="_blank" href="http://detail.cn.china.cn/provide/detail,1404968620.html" class="green">湖北 武汉</a>]</li>
<li class="else"><span class="red">求</span> <a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1397313140/t/e0df0717b4f1fdd8de83e23907f82ab4/offerdetail.html">求购报废联苯胺黄</a></li><li class="red"> 20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  [<a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1397313140/t/e0df0717b4f1fdd8de83e23907f82ab4/offerdetail.html" class="red">河北 邯郸</a>]</li>
<li class="else"><span class="green">供</span> <a target="_blank" href="http://detail.cn.china.cn/provide/detail,1404968370.html">供应【 单头成衣绣花机 </a></li><li class="green">20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [<a target="_blank" href="http://detail.cn.china.cn/provide/detail,1404968370.html" class="green">湖北 武汉</a>]</li>
<li class="else"><span class="red">求</span> <a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1395941620/t/01ce73f6f24aa2127785068ef28ed234/offerdetail.html">求购废旧库存化工原料</a></li><li class="red"> 20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  [<a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1395941620/t/01ce73f6f24aa2127785068ef28ed234/offerdetail.html" class="red">河北 邯郸</a>]</li>
<li class="else"><span class="green">供</span> <a target="_blank" href="http://detail.cn.china.cn/provide/detail,1404968840.html">供应【 锁式毛巾绣绣花机</a></li><li class="green">20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [<a target="_blank" href="http://detail.cn.china.cn/provide/detail,1404968840.html" class="green">湖北 武汉</a>]</li>
<li class="else"><span class="red">求</span> <a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1395940880/t/a725f94e88cae553f27441f1435d106e/offerdetail.html">求购求购库存单质金属</a></li><li class="red"> 20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  [<a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1395940880/t/a725f94e88cae553f27441f1435d106e/offerdetail.html" class="red">河北 邯郸</a>]</li>
<li class="else"><span class="green">供</span> <a target="_blank" href="http://detail.cn.china.cn/provide/detail,1404968470.html">供应【 单头帽绣绣花机 </a></li><li class="green">20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [<a target="_blank" href="http://detail.cn.china.cn/provide/detail,1404968470.html" class="green">湖北 武汉</a>]</li>
<li class="else"><span class="red">求</span> <a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1394035280/t/2161e9cdea2bf860fe1068c0c66690e1/offerdetail.html">求购现金回收油墨厂库存颜</a></li><li class="red"> 20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  [<a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1394035280/t/2161e9cdea2bf860fe1068c0c66690e1/offerdetail.html" class="red">河北 邯郸</a>]</li>
<li class="else"><span class="green">供</span> <a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630669163.html">供应PPO板|PPO棒</a></li><li class="green">20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [<a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630669163.html" class="green">广东 东莞</a>]</li>
<li class="else"><span class="red">求</span> <a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1389761240/t/5bce2d99d51f724608e37a1b6acff497/offerdetail.html">求购现款回收各种库存染料</a></li><li class="red"> 20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  [<a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1389761240/t/5bce2d99d51f724608e37a1b6acff497/offerdetail.html" class="red">河北 邯郸</a>]</li>
<li class="else"><span class="green">供</span> <a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630669719.html">供应进口PPO板|进口P</a></li><li class="green">20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [<a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630669719.html" class="green">广东 东莞</a>]</li>
<li class="else"><span class="red">求</span> <a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1388435970/t/04b6f58db09693f1b80ab701aa5ed504/offerdetail.html">求购需求过期铜金粉钛白粉</a></li><li class="red"> 20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  [<a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1388435970/t/04b6f58db09693f1b80ab701aa5ed504/offerdetail.html" class="red">河北 邯郸</a>]</li>
<li class="else"><span class="green">供</span> <a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630670402.html">供应黑色PPO板|黑色P</a></li><li class="green">20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [<a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630670402.html" class="green">广东 东莞</a>]</li>
<li class="else"><span class="red">求</span> <a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1387718000/t/a4807f77078f444f675d4e089b54abf0/offerdetail.html">求购化工厂停产处理氯化亚</a></li><li class="red"> 20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  [<a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1387718000/t/a4807f77078f444f675d4e089b54abf0/offerdetail.html" class="red">河北 邯郸</a>]</li>
<li class="else"><span class="green">供</span> <a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630671058.html">供应聚苯醚板|聚苯醚棒</a></li><li class="green">20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [<a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630671058.html" class="green">广东 东莞</a>]</li>
<li class="else"><span class="red">求</span> <a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1387271540/t/207c3080ca5a8231ccf4059d77bdf66e/offerdetail.html">求购库存染料怎么办 金星</a></li><li class="red"> 20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  [<a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1387271540/t/207c3080ca5a8231ccf4059d77bdf66e/offerdetail.html" class="red">河北 邯郸</a>]</li>
<li class="else"><span class="green">供</span> <a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630668035.html">供应PPO板 聚苯醚</a></li><li class="green">20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [<a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630668035.html" class="green">广东 东莞</a>]</li>
<li class="else"><span class="red">求</span> <a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1761624193/t/fffe99ba129fc1b2f1112ec66ffeb2f8/offerdetail.html">求购塑料/金属转盘</a></li><li class="red"> 20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  [<a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1761624193/t/fffe99ba129fc1b2f1112ec66ffeb2f8/offerdetail.html" class="red">上海</a>]</li>
<li class="else"><span class="green">供</span> <a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630666132.html">供应米黄色防静电POM板</a></li><li class="green">20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [<a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630666132.html" class="green">广东 东莞</a>]</li>
<li class="else"><span class="red">求</span> <a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1761623889/t/d8c1d93ec78062cda19b0069b8875f49/offerdetail.html">求购椅面板</a></li><li class="red"> 20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  [<a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1761623889/t/d8c1d93ec78062cda19b0069b8875f49/offerdetail.html" class="red">河南</a>]</li>
<li class="else"><span class="green">供</span> <a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630661503.html">供应防静电POM板|防静</a></li><li class="green">20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [<a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630661503.html" class="green">广东 东莞</a>]</li>
<li class="else"><span class="red">求</span> <a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1761623532/t/d0fb2d440b5cab5e0f4c021f2c612a73/offerdetail.html">求购三边封制袋机、切纸机</a></li><li class="red"> 20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  [<a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1761623532/t/d0fb2d440b5cab5e0f4c021f2c612a73/offerdetail.html" class="red">江苏</a>]</li>
<li class="else"><span class="green">供</span> <a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630663543.html">供应防静电赛钢板|防静电</a></li><li class="green">20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [<a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630663543.html" class="green">广东 东莞</a>]</li>
<li class="else"><span class="red">求</span> <a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1761623217/t/0ee19b7d60b74d6ace6897b5544e24c1/offerdetail.html">求购不锈钢板0.62*1</a></li><li class="red"> 20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  [<a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1761623217/t/0ee19b7d60b74d6ace6897b5544e24c1/offerdetail.html" class="red">浙江</a>]</li>
<li class="else"><span class="green">供</span> <a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630664468.html">供应黑色防静电POM板|</a></li><li class="green">20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [<a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630664468.html" class="green">广东 东莞</a>]</li>
<li class="else"><span class="red">求</span> <a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1761622720/t/931e529d0b534528216d4202938b31ae/offerdetail.html">求购抽油烟机,燃气炉具,</a></li><li class="red"> 20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  [<a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1761622720/t/931e529d0b534528216d4202938b31ae/offerdetail.html" class="red">湖南</a>]</li>
<li class="else"><span class="green">供</span> <a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630672525.html">供应UPE超高分子量聚乙</a></li><li class="green">20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [<a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630672525.html" class="green">广东 东莞</a>]</li>
<li class="else"><span class="red">求</span> <a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1761622124/t/0870c0bfa5bec81c391b7bcfdd96bb9f/offerdetail.html">求购床垫</a></li><li class="red"> 20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  [<a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1761622124/t/0870c0bfa5bec81c391b7bcfdd96bb9f/offerdetail.html" class="red">广东</a>]</li>
<li class="else"><span class="green">供</span> <a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630682410.html">供应聚四氟乙烯板|聚四氟</a></li><li class="green">20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [<a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630682410.html" class="green">广东 东莞</a>]</li>
<li class="else"><span class="red">求</span> <a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1761606683/t/5d49a4980fbbc38d75098dbfad13cad5/offerdetail.html">求购30万大卡，0.5吨</a></li><li class="red"> 20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  [<a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1761606683/t/5d49a4980fbbc38d75098dbfad13cad5/offerdetail.html" class="red">福建</a>]</li>
<li class="else"><span class="green">供</span> <a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630683287.html">供应进口PTFE板|进口</a></li><li class="green">20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [<a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630683287.html" class="green">广东 东莞</a>]</li>
<li class="else"><span class="red">求</span> <a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1761606445/t/c9132d9fc02e7c79fc27f659d91374fb/offerdetail.html">求购打包机</a></li><li class="red"> 20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  [<a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1761606445/t/c9132d9fc02e7c79fc27f659d91374fb/offerdetail.html" class="red">广西</a>]</li>
<li class="else"><span class="green">供</span> <a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630684918.html">供应铁氟龙板|铁氟龙棒</a></li><li class="green">20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [<a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630684918.html" class="green">广东 东莞</a>]</li>
<li class="else"><span class="red">求</span> <a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1761606314/t/c4ccfc8410903bac019aded5f4c50405/offerdetail.html">紧急求购復膜机</a></li><li class="red"> 20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  [<a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1761606314/t/c4ccfc8410903bac019aded5f4c50405/offerdetail.html" class="red">广东</a>]</li>
<li class="else"><span class="green">供</span> <a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630675745.html">供应UPE板|UPE棒</a></li><li class="green">20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [<a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630675745.html" class="green">广东 东莞</a>]</li>
<li class="else"><span class="red">求</span> <a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1761605895/t/cd76ed173cf14d5efb8981408c3f9042/offerdetail.html">求购进口油缸</a></li><li class="red"> 20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  [<a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1761605895/t/cd76ed173cf14d5efb8981408c3f9042/offerdetail.html" class="red">上海</a>]</li>
<li class="else"><span class="green">供</span> <a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630681623.html">供应PTFE板|PTFE</a></li><li class="green">20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [<a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630681623.html" class="green">广东 东莞</a>]</li>
<li class="else"><span class="red">求</span> <a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1761605763/t/d610be1cc4bfb2f513a4311f6f6a9575/offerdetail.html">求购耳机</a></li><li class="red"> 20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  [<a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1761605763/t/d610be1cc4bfb2f513a4311f6f6a9575/offerdetail.html" class="red">广东</a>]</li>
<li class="else"><span class="green">供</span> <a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630685726.html">供应CPVC板|CPVC</a></li><li class="green">20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [<a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630685726.html" class="green">广东 东莞</a>]</li>
<li class="else"><span class="red">求</span> <a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1761605684/t/e4cfa3199543752fa6e43b145e7318a4/offerdetail.html">求购圆柱体海棉</a></li><li class="red"> 20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  [<a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1761605684/t/e4cfa3199543752fa6e43b145e7318a4/offerdetail.html" class="red">广东</a>]</li>
<li class="else"><span class="green">供</span> <a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630676892.html">供应进口UPE板|进口U</a></li><li class="green">20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [<a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630676892.html" class="green">广东 东莞</a>]</li>
<li class="else"><span class="red">求</span> <a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1761604587/t/355d433bcb81411dead6ab1974888a61/offerdetail.html">求购拉手</a></li><li class="red"> 20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  [<a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1761604587/t/355d433bcb81411dead6ab1974888a61/offerdetail.html" class="red"></a>]</li>
<li class="else"><span class="green">供</span> <a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630678816.html">供应白色UPE板|白色U</a></li><li class="green">20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [<a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630678816.html" class="green">广东 东莞</a>]</li>
<li class="else"><span class="red">求</span> <a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1761603589/t/fa17c776502dd3f537a444bcf070f14a/offerdetail.html">求购公园椅 休闲椅厂家</a></li><li class="red"> 20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  [<a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1761603589/t/fa17c776502dd3f537a444bcf070f14a/offerdetail.html" class="red">上海</a>]</li>
<li class="else"><span class="green">供</span> <a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630680072.html">供应PE-UHMW板|P</a></li><li class="green">20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [<a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630680072.html" class="green">广东 东莞</a>]</li>
<li class="else"><span class="red">求</span> <a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1761603310/t/603f8db5cc7402c1b71d04bcd78d8028/offerdetail.html">求购 家用跑步机</a></li><li class="red"> 20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  [<a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1761603310/t/603f8db5cc7402c1b71d04bcd78d8028/offerdetail.html" class="red">江苏</a>]</li>
<li class="else"><span class="green">供</span> <a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630680874.html">供应德国UPE板|德国U</a></li><li class="green">20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [<a target="_blank" href="http://detail.cn.china.cn/provide/detail,1630680874.html" class="green">广东 东莞</a>]</li>
<li class="else"><span class="red">求</span> <a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1761602053/t/bc51c17fcfa4ac6f9cbf53c6408c5d4f/offerdetail.html">求购镀锌板（卷）</a></li><li class="red"> 20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  [<a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1761602053/t/bc51c17fcfa4ac6f9cbf53c6408c5d4f/offerdetail.html" class="red">河北</a>]</li>
<li class="else"><span class="green">供</span> <a target="_blank" href="http://detail.cn.china.cn/provide/detail,1361143480.html">供应河道清理加长臂</a></li><li class="green">20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [<a target="_blank" href="http://detail.cn.china.cn/provide/detail,1361143480.html" class="green">广东 东莞</a>]</li>
<li class="else"><span class="red">求</span> <a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1761589353/t/9b105c720a3a90a39695cd5c0668749f/offerdetail.html">求购 转向灯，角灯</a></li><li class="red"> 20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  [<a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1761589353/t/9b105c720a3a90a39695cd5c0668749f/offerdetail.html" class="red">广东</a>]</li>
<li class="else"><span class="green">供</span> <a target="_blank" href="http://detail.cn.china.cn/provide/detail,1761642639.html">东莞自动门、东莞自动门供</a></li><li class="green">20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [<a target="_blank" href="http://detail.cn.china.cn/provide/detail,1761642639.html" class="green">广东 广州</a>]</li>
<li class="else"><span class="red">求</span> <a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1761589314/t/5f9426e8747acf41c6afd66961ab5d37/offerdetail.html">求购蹲便器用的水箱</a></li><li class="red"> 20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  [<a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1761589314/t/5f9426e8747acf41c6afd66961ab5d37/offerdetail.html" class="red"></a>]</li>
<li class="else"><span class="green">供</span> <a target="_blank" href="http://detail.cn.china.cn/provide/detail,1725726781.html">工业用羊毛抛光球，毛毡抛</a></li><li class="green">20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [<a target="_blank" href="http://detail.cn.china.cn/provide/detail,1725726781.html" class="green">河北 邢台</a>]</li>
<li class="else"><span class="red">求</span> <a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1761589003/t/2ae083fb288f4387d34940e3cc677943/offerdetail.html">求购304角钢，扁钢</a></li><li class="red"> 20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  [<a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1761589003/t/2ae083fb288f4387d34940e3cc677943/offerdetail.html" class="red">江苏</a>]</li>
<li class="else"><span class="green">供</span> <a target="_blank" href="http://detail.cn.china.cn/provide/detail,1726558198.html">供应内燃机、压缩机用油棉</a></li><li class="green">20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [<a target="_blank" href="http://detail.cn.china.cn/provide/detail,1726558198.html" class="green">河北 邢台</a>]</li>
<li class="else"><span class="red">求</span> <a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1761588840/t/fc42015fb54705924ceddfb0815d65b7/offerdetail.html">求购名片式放大镜</a></li><li class="red"> 20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  [<a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1761588840/t/fc42015fb54705924ceddfb0815d65b7/offerdetail.html" class="red">江苏</a>]</li>
<li class="else"><span class="green">供</span> <a target="_blank" href="http://detail.cn.china.cn/provide/detail,1725721050.html">各种规格电器用毛毡轮，涤</a></li><li class="green">20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [<a target="_blank" href="http://detail.cn.china.cn/provide/detail,1725721050.html" class="green">河北 邢台</a>]</li>
<li class="else"><span class="red">求</span> <a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1761588795/t/cf3963c318447ad4446ba89e13f2995d/offerdetail.html">Buy buckwhea</a></li><li class="red"> 20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  [<a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1761588795/t/cf3963c318447ad4446ba89e13f2995d/offerdetail.html" class="red">China</a>]</li>
<li class="else"><span class="green">供</span> <a target="_blank" href="http://detail.cn.china.cn/provide/detail,1742701174.html">佳通毛毡供应抛光羊毛毡、</a></li><li class="green">20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [<a target="_blank" href="http://detail.cn.china.cn/provide/detail,1742701174.html" class="green">河北 邢台</a>]</li>
<li class="else"><span class="red">求</span> <a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1761588792/t/fa54f8e5a68156318fa9ba81b5622c4f/offerdetail.html">Buy Women's </a></li><li class="red"> 20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  [<a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1761588792/t/fa54f8e5a68156318fa9ba81b5622c4f/offerdetail.html" class="red">China</a>]</li>
<li class="else"><span class="green">供</span> <a target="_blank" href="http://detail.cn.china.cn/provide/detail,1742486238.html">【佳通毛毡】供应化纤毡、</a></li><li class="green">20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [<a target="_blank" href="http://detail.cn.china.cn/provide/detail,1742486238.html" class="green">河北 邢台</a>]</li>
<li class="else"><span class="red">求</span> <a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1761588789/t/1eab5c8b08f660cae0540f65b438fba1/offerdetail.html">Buy Candy</a></li><li class="red"> 20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  [<a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1761588789/t/1eab5c8b08f660cae0540f65b438fba1/offerdetail.html" class="red">China</a>]</li>
<li class="else"><span class="green">供</span> <a target="_blank" href="http://detail.cn.china.cn/provide/detail,1727348663.html">供应防寒毛毡，防护毡，阻</a></li><li class="green">20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [<a target="_blank" href="http://detail.cn.china.cn/provide/detail,1727348663.html" class="green">河北 邢台</a>]</li>
<li class="else"><span class="red">求</span> <a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1761588786/t/ddee581b256d60620cc7d53996cca085/offerdetail.html">Buy Canned F</a></li><li class="red"> 20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  [<a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1761588786/t/ddee581b256d60620cc7d53996cca085/offerdetail.html" class="red">China</a>]</li>
<li class="else"><span class="green">供</span> <a target="_blank" href="http://detail.cn.china.cn/provide/detail,1726565307.html">供应彩色毛毡，毛毡工艺品</a></li><li class="green">20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [<a target="_blank" href="http://detail.cn.china.cn/provide/detail,1726565307.html" class="green">河北 邢台</a>]</li>
<li class="else"><span class="red">求</span> <a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1761588783/t/997be1d82de9c6357360941de7e4c162/offerdetail.html">Buy Ladies' </a></li><li class="red"> 20:58</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  [<a target="_blank" href="http://detail.cn.china.cn/op/BuyInfoShow/buyInfoId/1761588783/t/997be1d82de9c6357360941de7e4c162/offerdetail.html" class="red">China</a>]</li>

</ul></ul>
<script type="text/javascript">  
<!-- 
var scrollElem;
var stopscroll;
var stoptime;
var preTop;
var leftElem;
var currentTop;
var marqueesHeight;

function marque(id, height){
    try{
      marqueesHeight = height;
      stopscroll     = false;
      scrollElem = document.getElementById(id);
      with(scrollElem){
        style.height    = marqueesHeight;
        style.overflow  = 'hidden';
        noWrap          = true;
      }
      scrollElem.onmouseover = new Function('stopscroll = true');
      scrollElem.onmouseout  = new Function('stopscroll = false');
      preTop     = 0; 
      currentTop = 0; 
      stoptime   = 0;
      leftElem = document.getElementById(id);
      scrollElem.appendChild(leftElem.cloneNode(true));
          
      init_srolltext();
    }catch(e) {}
}
function init_srolltext(){
  scrollElem.scrollTop = 0;
  setInterval('scrollUp()', 25);
}
function scrollUp(){
  if(stopscroll) return;
  currentTop += 1;
  if(currentTop == marqueesHeight+1) {
    stoptime += 1;
    currentTop -= 1;
    if(stoptime == (marqueesHeight)*1) {//停顿时间
      currentTop = 0;
      stoptime = 0;
    }
  }else{
    preTop = scrollElem.scrollTop;
    scrollElem.scrollTop += 1;
    if(preTop == scrollElem.scrollTop){
      scrollElem.scrollTop = marqueesHeight;
      scrollElem.scrollTop += 1;
    }
  }
}
marque('marqueeBox', 36);
-->
</script> 
<ul class="infoBtn" style="border-left: 1px solid #E0E0E0">
    <li><a href="http://my.cn.china.cn/admin.php?op=SellInfoPublishShow" target="_blank">发布供应</a></li>
    <li><a href="http://my.cn.china.cn/admin.php?op=addBuyInfoAnonShow" target="_blank">发布求购</a></li>
</ul>
<div class="clear"></div>
</div>
<!--供求信息 end-->
</div>
<div class="clear"></div>
</div>
<!--热门活动/登录 end-->
<div class="wrapCnt">
<div class="rowL1">
<!--精品专题 begin-->
<div class="row1B" style="margin-top:0px;">
<p><label><a href="http://cn.china.cn/zuixinchanpin/" target="_blank">热门商机</a></label><img src="./res/tit7R.jpg" width="2" height="26" style="float:right"></p>
<div class="row1BCon">
  	<dl class="row1Bdl1">
            	<dt><a href="http://product.cn.china.cn/selling-leads/%CA%D6%B5%E7%CD%B2/?id=945765" target="_blank"><img src="./res/a077c6.jpg" alt="手电筒"></a></dt>
                <dd><a onmousedown="qhstat_j2chan(&#39;deal&#39;,&#39;945765&#39;,&#39;d2050_7089&#39;)" id="utitle_945765" target="_blank" href="http://product.cn.china.cn/selling-leads/%CA%D6%B5%E7%CD%B2/?id=945765">手电筒</a></dd>
            </dl>  	<dl class="row1Bdl1">
            	<dt><a href="http://product.cn.china.cn/selling-leads/%CA%B5%C4%BE%C3%C5/?id=945764" target="_blank"><img src="./res/7a855b.jpg" alt="实木门"></a></dt>
                <dd><a onmousedown="qhstat_j2chan(&#39;deal&#39;,&#39;945764&#39;,&#39;d2050_7089&#39;)" id="utitle_945764" target="_blank" href="http://product.cn.china.cn/selling-leads/%CA%B5%C4%BE%C3%C5/?id=945764">实木门</a></dd>
            </dl>  	<dl class="row1Bdl1">
            	<dt><a href="http://product.cn.china.cn/selling-leads/%B2%CA%B8%D6%B0%E5/?id=945763" target="_blank"><img src="./res/a142de.jpg" alt="彩钢板"></a></dt>
                <dd><a onmousedown="qhstat_j2chan(&#39;deal&#39;,&#39;945763&#39;,&#39;d2050_7089&#39;)" id="utitle_945763" target="_blank" href="http://product.cn.china.cn/selling-leads/%B2%CA%B8%D6%B0%E5/?id=945763">彩钢板</a></dd>
            </dl>  	<dl class="row1Bdl1">
            	<dt><a href="http://product.cn.china.cn/selling-leads/%BD%D3%CF%DF%B6%CB%D7%D3/?id=945755" target="_blank"><img src="./res/255c7d.jpg" alt="接线端子"></a></dt>
                <dd><a onmousedown="qhstat_j2chan(&#39;deal&#39;,&#39;945755&#39;,&#39;d2050_7089&#39;)" id="utitle_945755" target="_blank" href="http://product.cn.china.cn/selling-leads/%BD%D3%CF%DF%B6%CB%D7%D3/?id=945755">接线端子</a></dd>
            </dl>  
<div class="clear"></div>

<div class="row1BCon2">
<ul class="row1BInfo">
<li>[<a href="http://cn.china.cn/jianzhu/index.html" target="_blank">建材</a>] <a onmousedown="qhstat_j2chan(&#39;deal&#39;,&#39;930613&#39;,&#39;d2050_7090&#39;)" id="utitle_930613" target="_blank" href="http://product.cn.china.cn/selling-leads/%BE%F8%D4%B5%CC%D7%B9%DC/?id=930613">绝缘套管 品质卓越价格优惠</a> </li><li>[<a href="http://cn.china.cn/fangzhi/index.html" target="_blank">纺织</a>] <a onmousedown="qhstat_j2chan(&#39;deal&#39;,&#39;930612&#39;,&#39;d2050_7090&#39;)" id="utitle_930612" target="_blank" href="http://product.cn.china.cn/selling-leads/%D5%EB%D6%AF%C3%E6%C1%CF/?id=930612">针织面料 产品齐全市场热销</a> </li><li>[<a href="http://cn.china.cn/yundong/index.html" target="_blank">运动</a>] <a onmousedown="qhstat_j2chan(&#39;deal&#39;,&#39;930611&#39;,&#39;d2050_7090&#39;)" id="utitle_930611" target="_blank" href="http://product.cn.china.cn/selling-leads/%BB%AC%D1%A9%D3%C3%C6%B7/?id=930611">滑雪用品 超酷运动冬日流行</a> </li><li>[<a href="http://cn.china.cn/baozhuang/index.html" target="_blank">包装</a>] <a onmousedown="qhstat_j2chan(&#39;deal&#39;,&#39;930610&#39;,&#39;d2050_7090&#39;)" id="utitle_930610" target="_blank" href="http://product.cn.china.cn/selling-leads/%B0%FC%D7%B0%D6%C6%C6%B7/?id=930610">包装制品 款式多样倍受欢迎</a> </li><li>[<a href="http://cn.china.cn/zhaoming/index.html" target="_blank">照明</a>] <a onmousedown="qhstat_j2chan(&#39;deal&#39;,&#39;930609&#39;,&#39;d2050_7090&#39;)" id="utitle_930609" target="_blank" href="http://product.cn.china.cn/selling-leads/%B2%CA%C9%AB%B5%C6%C5%DD/?id=930609">彩色灯泡 节能高效质量可靠</a> </li><li>[<a href="http://cn.china.cn/qipei/index.html" target="_blank">汽配</a>] <a onmousedown="qhstat_j2chan(&#39;deal&#39;,&#39;930608&#39;,&#39;d2050_7090&#39;)" id="utitle_930608" target="_blank" href="http://product.cn.china.cn/selling-leads/%B0%B2%C8%AB%C6%F8%C4%D2/?id=930608">安全气囊 安全用品汽车必备</a> </li><li>[<a href="http://cn.china.cn/jixie/index.html" target="_blank">机械</a>] <a onmousedown="qhstat_j2chan(&#39;deal&#39;,&#39;930607&#39;,&#39;d2050_7090&#39;)" id="utitle_930607" target="_blank" href="http://product.cn.china.cn/selling-leads/%C3%DC%B7%E2%B5%E6%C6%AC/?id=930607">密封垫片 需求紧迫供不应求</a> </li><li>[<a href="http://cn.china.cn/hezuo/index.html" target="_blank">合作</a>] <a onmousedown="qhstat_j2chan(&#39;deal&#39;,&#39;909736&#39;,&#39;d2050_7090&#39;)" id="utitle_909736" target="_blank" href="http://product.cn.china.cn/selling-leads/%B7%FE%D7%B0%BA%CF%D7%F7/?id=909736">服装合作 顺应潮流前景优越</a> </li>  
</ul>

<dl class="row1BImg">
<a href="http://product.cn.china.cn/selling-leads/%C5%DC%B2%BD%BB%FA/?id=945826" target="_blank"><img src="./res/957d8e.jpg" alt="跑步机"></a><br><a onmousedown="qhstat_j2chan(&#39;deal&#39;,&#39;945826&#39;,&#39;d2050_7091&#39;)" id="utitle_945826" target="_blank" href="http://product.cn.china.cn/selling-leads/%C5%DC%B2%BD%BB%FA/?id=945826">跑步机</a><a href="http://product.cn.china.cn/selling-leads/%CA%B3%D3%C3%D3%CD/?id=945825" target="_blank"><img src="./res/d95695.jpg" alt="食用油"></a><br><a onmousedown="qhstat_j2chan(&#39;deal&#39;,&#39;945825&#39;,&#39;d2050_7091&#39;)" id="utitle_945825" target="_blank" href="http://product.cn.china.cn/selling-leads/%CA%B3%D3%C3%D3%CD/?id=945825">食用油</a>  
</dl>
                <div class="clear"></div>
            </div>
          </div>          
        </div>
<!--精品专题 end-->
<!--左侧广告 begin-->
<div class="rowLAd"><a href="http://cn.china.cn/huodong/chengxinxuanyan/index.html" target="_blank"><img src="./res/2011chengxin.gif" width="320" height="70"></a></div>
<!--左侧广告 end-->

<!--商业资讯 begin-->
<div class="row1C">
<h1><img src="./res/tit4L.jpg" width="2" height="26" style="float:left">
<label><a href="http://cn.china.cn/zixun/" target="_blank">商业资讯</a></label>
<ul class="row1Cul1">
<img src="./res/tit8L.jpg" width="5" height="21" style="float:left">
<span><a href="http://cn.china.cn/jixie/index.html" target="_blank">机械</a> | <a href="http://cn.china.cn/huagong/index.html" target="_blank">化工</a> | <a href="http://cn.china.cn/fuzhuang/index.html" target="_blank">服装</a> | <a href="http://cn.china.cn/wujin/index.html" target="_blank">五金</a> | <a href="http://cn.china.cn/jiadian/index.html" target="_blank">家电</a></span>
<img src="./res/tit8R.jpg" width="5" height="21" style="float:right">
</ul>
<img src="./res/tit4R.jpg" width="2" height="26" style="float:right"></h1>

<div class="row1BCon">
<h2><a href="http://cn.china.cn/zixun/" target="_blank" class="red2">焦点聚焦</a><img src="./res/dotLine3.gif" width="213" height="11"></h2>
<ul class="row1Bul2">
<h3>&nbsp;<a id="utitle_982261" target="_blank" href="http://cn.china.cn/article/d982261,e00d1a,d2050_7092.html">中国企业信用缺失导致每年损失达6000亿元</a></h3>                                       
<li>·<a id="utitle_982267" target="_blank" href="http://cn.china.cn/frame/d982267,e6fc19,d2050_7093.html">PMI环比回落折射中国经济双重压力</a> </li><li>·<a id="utitle_982266" target="_blank" href="http://cn.china.cn/frame/d982266,d12a87,d2050_7093.html">加息！加息！全球抗通胀</a> </li><li>·<a id="utitle_982265" target="_blank" href="http://cn.china.cn/frame/d982265,ab5e42,d2050_7093.html">国家统计局报告：中国制造业经济增速有所放缓</a> </li><li>·<a id="utitle_982264" target="_blank" href="http://cn.china.cn/frame/d982264,c923db,d2050_7093.html">经济转型期待跨越“三道坎”</a> </li><li>·<a id="utitle_982263" target="_blank" href="http://cn.china.cn/frame/d982263,4e7557,d2050_7093.html">中药“入欧”大门未关严 药企需用政策保住市场</a> </li><li>·<a id="utitle_982262" target="_blank" href="http://cn.china.cn/frame/d982262,056d2a,d2050_7093.html">4月份中国非制造业收费价格指数显著上升</a> </li><li>·<a id="utitle_982260" target="_blank" href="http://cn.china.cn/frame/d982260,3f8719,d2050_7093.html">4月PMI相继下滑 中国增势放缓影响美国经济复苏</a> </li><li>·<a id="utitle_982259" target="_blank" href="http://cn.china.cn/frame/d982259,5ed4f1,d2050_7093.html">新增外汇占款料保持高位 本月可能再调存准率</a> </li><li>·<a id="utitle_982258" target="_blank" href="http://cn.china.cn/frame/d982258,361d83,d2050_7093.html">央行：将用利率等手段抑通胀预期</a> </li><li>·<a id="utitle_981713" target="_blank" href="http://cn.china.cn/frame/d981713,5f0580,d2050_7093.html">机构称新一轮经济周期渐行渐明</a> </li><li>·<a id="utitle_981712" target="_blank" href="http://cn.china.cn/frame/d981712,649997,d2050_7093.html">机构掘金中国转型投资机遇</a> </li><li>·<a id="utitle_981711" target="_blank" href="http://cn.china.cn/frame/d981711,d8deae,d2050_7093.html">把握非公经济新形势 探索建设特色商会</a> </li>  
</ul>
                       

                </div>
      </div>
<!--商业资讯 end-->



<!--左侧广告 begin-->		
<div class="rowLAd"><a href="http://www.ievechina.com/" target="_blank"><img src="./res/2011diandongche32078.jpg"></a></div>
<!--左侧广告 end-->
<!--成功故事 begin-->
<div class="row1B">
       	  <p><label><a href="http://cn.china.cn/chenggonggushi/index.html" target="_blank">成功故事</a></label>
       	    <span style=" padding-left:0; width:auto"><a href="mailto:marketing@mail.china.cn">我要投稿</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://cn.china.cn/chenggonggushi/index.html" target="_blank">更多</a>&gt;&gt;</span><img src="./res/tit7R.jpg" width="2" height="26" style="float:right"></p>
<div class="row1BCon">
<dl class="row1Bdl">
                <span><a href="http://cn.china.cn/article/d973918,fdd5a4,d2050_7097.html" target="_blank"><img src="./res/52ad90.jpg" alt="十天见效果 我的成功你也能复制"></a></span>
                <dt><a title="十天见效果 我的成功你也能复制" id="utitle_973918" target="_blank" href="http://cn.china.cn/article/d973918,fdd5a4,d2050_7097.html">十天见效果 我的成功你也能复</a></dt>
                <dd>
义乌泰和包装有限公司成立于2003年，公司总投资1000万美金，..<a href="http://cn.china.cn/article/d973918,fdd5a4,d2050_7097.html" target="_blank" class="red2">[详细]</a></dd>
</dl>
<div class="clear"></div>
<ul class="row1Bul clearfix hei42">
<li><a title="中国供应商，我的成功有你相助" id="utitle_969666" target="_blank" href="http://cn.china.cn/article/d969666,357bab,d2050_7098.html">中国供应商，我的成功..</a></li><li><a title="言成阀门：致力成为一流的大口径阀门制造商" id="utitle_942169" target="_blank" href="http://cn.china.cn/article/d942169,2189fc,d2050_7098.html">言成阀门：致力成为一..</a></li><li><a title="守着经营的道儿，迈开腾飞的腿" id="utitle_932556" target="_blank" href="http://cn.china.cn/article/d932556,49a291,d2050_7098.html">守着经营的道儿，迈开..</a></li><li><a title="续缘2014 我的故事讲给你听" id="utitle_930604" target="_blank" href="http://cn.china.cn/article/d930604,95fdb4,d2050_7098.html">续缘2014 我的故事讲给.</a></li>
<li><a title="中国供应商，我的成功有你相助" id="utitle_969666" target="_blank" href="http://cn.china.cn/article/d969666,357bab,d2050_7098.html">中国供应商，我的成功..</a></li><li><a title="言成阀门：致力成为一流的大口径阀门制造商" id="utitle_942169" target="_blank" href="http://cn.china.cn/article/d942169,2189fc,d2050_7098.html">言成阀门：致力成为一..</a></li><li><a title="守着经营的道儿，迈开腾飞的腿" id="utitle_932556" target="_blank" href="http://cn.china.cn/article/d932556,49a291,d2050_7098.html">守着经营的道儿，迈开..</a></li><li><a title="续缘2014 我的故事讲给你听" id="utitle_930604" target="_blank" href="http://cn.china.cn/article/d930604,95fdb4,d2050_7098.html">续缘2014 我的故事讲给.</a></li>
<li><a title="中国供应商，我的成功有你相助" id="utitle_969666" target="_blank" href="http://cn.china.cn/article/d969666,357bab,d2050_7098.html">中国供应商，我的成功..</a></li><li><a title="言成阀门：致力成为一流的大口径阀门制造商" id="utitle_942169" target="_blank" href="http://cn.china.cn/article/d942169,2189fc,d2050_7098.html">言成阀门：致力成为一..</a></li><li><a title="守着经营的道儿，迈开腾飞的腿" id="utitle_932556" target="_blank" href="http://cn.china.cn/article/d932556,49a291,d2050_7098.html">守着经营的道儿，迈开..</a></li><li><a title="续缘2014 我的故事讲给你听" id="utitle_930604" target="_blank" href="http://cn.china.cn/article/d930604,95fdb4,d2050_7098.html">续缘2014 我的故事讲给.</a></li>
<li><a title="中国供应商，我的成功有你相助" id="utitle_969666" target="_blank" href="http://cn.china.cn/article/d969666,357bab,d2050_7098.html">中国供应商，我的成功..</a></li><li><a title="言成阀门：致力成为一流的大口径阀门制造商" id="utitle_942169" target="_blank" href="http://cn.china.cn/article/d942169,2189fc,d2050_7098.html">言成阀门：致力成为一..</a></li><li><a title="守着经营的道儿，迈开腾飞的腿" id="utitle_932556" target="_blank" href="http://cn.china.cn/article/d932556,49a291,d2050_7098.html">守着经营的道儿，迈开..</a></li><li><a title="续缘2014 我的故事讲给你听" id="utitle_930604" target="_blank" href="http://cn.china.cn/article/d930604,95fdb4,d2050_7098.html">续缘2014 我的故事讲给.</a></li>
</ul>
<div class="clear"></div>
          </div>
        </div>
<!--成功故事 end-->
   <div class="rowLAd"><a href="http://cn.china.cn/haiwaizhan2011/index.html" target="_blank"><img src="./res/2011haiwai32046.jpg"></a></div> 
<!--外贸专区 begin-->
<div class="row1B">
<p><label><a href="http://cn.china.cn/wmzq/index.html" target="_blank">外贸专区</a></label><span><a href="http://cn.china.cn/wmzq/index.html" target="_blank">更多</a>&gt;&gt;</span><img src="./res/tit7R.jpg" width="2" height="26" style="float:right"></p>
<div class="row1BCon">
<dl class="row1Bdl">
                <span><a href="http://cn.china.cn/frame/d982270,aba150,d2050_11383.html" target="_blank"><img src="./res/e474a8.jpg" alt="销售员要在6个方面都勤劳"></a></span>
                <dt><a id="utitle_982270" target="_blank" href="http://cn.china.cn/frame/d982270,aba150,d2050_11383.html">销售员要在6个方面都勤劳</a></dt>
                <dd>
因春晚红起来的小沈阳有句口头禅：这是为什么呢？这句话让我..<a href="http://cn.china.cn/frame/d982270,aba150,d2050_11383.html" target="_blank" class="red2">[详细]</a></dd>
</dl>    
              <div class="clear"></div>
<ul class="row1Bul clearfix hei42">
<li><a href="http://fanyingfu.china.cn/" target="_blank">最全反应釜产品信息库</a></li>
<li><a href="http://www.scobc.cn/" target="_blank">上合中国实业家委员会</a></li>
<li><a href="http://cn.china.cn/hyfw/xywm/index.html" target="_blank">帮你成功拿下海外商机</a></li>
<li><a href="http://my.cn.china.cn/admin.php?op=EmergentBuyInfoList" target="_blank">关注内贸市场生意火爆</a></li>
<li><a href="http://fanyingfu.china.cn/" target="_blank">最全反应釜产品信息库</a></li>
<li><a href="http://www.scobc.cn/" target="_blank" >上合中国实业家委员会</a></li>
<li><a href="http://cn.china.cn/hyfw/xywm/index.html" target="_blank">帮你成功拿下海外商机</a></li>
<li><a href="http://my.cn.china.cn/admin.php?op=EmergentBuyInfoList" target="_blank">关注内贸市场生意火爆</a></li>
<li><a href="http://fanyingfu.china.cn/" target="_blank">最全反应釜产品信息库</a></li>
<li><a href="http://www.scobc.cn/" target="_blank" >上合中国实业家委员会</a></li>
<li><a href="http://cn.china.cn/hyfw/xywm/index.html" target="_blank">帮你成功拿下海外商机</a></li>
<li><a href="http://my.cn.china.cn/admin.php?op=EmergentBuyInfoList" target="_blank">关注内贸市场生意火爆</a></li>
<li><a href="http://fanyingfu.china.cn/" target="_blank">最全反应釜产品信息库</a></li>
<li><a href="http://www.scobc.cn/" target="_blank" >上合中国实业家委员会</a></li>
<li><a href="http://cn.china.cn/hyfw/xywm/index.html" target="_blank">帮你成功拿下海外商机</a></li>
<li><a href="http://my.cn.china.cn/admin.php?op=EmergentBuyInfoList" target="_blank">关注内贸市场生意火爆</a></li>
<li><a href="http://cn.china.cn/hyfw/xywm/index.html" target="_blank">帮你成功拿下海外商机</a></li>
<li><a href="http://my.cn.china.cn/admin.php?op=EmergentBuyInfoList" target="_blank">关注内贸市场生意火爆</a></li>
</ul>
              <div class="clear"></div>
          </div>
        </div>
<!--外贸专区 end-->
<!--左侧广告 begin-->
<div class="rowLAd"><a href="http://www.dragon-guide.net/" target="_blank"><img src="./res/dragonguide32070.gif"></a></div>
<!--左侧广告 end-->
<!--企业top10 begin-->

<div class="row1B">
    <p><label>企业top10</label><img src="./res/tit7R.jpg" alt="" width="2" height="26" style="float: right"></p>
    <div class="row1BCon" style="padding-top: 5px; _padding-top: 4px; background: none">
        <div class="tag2Top">
        <ul class="tag2Tit">
            <li class="btnOver" onclick="Tab(&#39;news002&#39;,&#39;newsCon1&#39;,this)">信用指数</li>
            <li class="btnOut" onclick="Tab(&#39;news002&#39;,&#39;newsCon2&#39;,this)">活跃指数</li>
            <li class="btnOut" onclick="Tab(&#39;news002&#39;,&#39;newsCon3&#39;,this)">最新名企</li>
        </ul>
        </div>
        <div style="clear: both;" id="news002">
            <div class="divShow" id="newsCon1">
            <table width="320" border="0" cellpadding="0" cellspacing="0" class="tab3">
                <thead>
                    <tr>
                        <th width="255">公司名称</th>
                        <th width="66">信用指数</th>
                    </tr>
                </thead>
                <tbody>
                <tr>
                        <td class="tab3Td1">
                            <a href="http://lmlq.cn.china.cn/" target="_blank">河南黎明重工科技股份有限公司</a>
                        </td>
                        <td class="red2">402</td>
                    </tr><tr>
                        <td class="tab3Td1">
                            <a href="http://fschangshun.cn.china.cn/" target="_blank">佛山市顺德区乐从镇长顺贸易有限公司</a>
                        </td>
                        <td class="red2">372</td>
                    </tr><tr>
                        <td class="tab3Td1">
                            <a href="http://shengmahome.cn.china.cn/" target="_blank">佛山市金钰轩家具有限公司</a>
                        </td>
                        <td class="red2">368</td>
                    </tr><tr>
                        <td class="tab3Td1">
                            <a href="http://huataitelan.cn.china.cn/" target="_blank">河南华泰特种电缆有限公司</a>
                        </td>
                        <td class="red2">354</td>
                    </tr><tr>
                        <td class="tab3Td1">
                            <a href="http://jinshuicable.cn.china.cn/" target="_blank">郑州锦水实业有限公司</a>
                        </td>
                        <td class="red2">348</td>
                    </tr><tr>
                        <td class="tab3Td1">
                            <a href="http://shsbjq.cn.china.cn/" target="_blank">上海世邦机器有限公司</a>
                        </td>
                        <td class="red2">340</td>
                    </tr><tr>
                        <td class="tab3Td1">
                            <a href="http://haokun.cn.china.cn/" target="_blank">青岛昊坤重型机械技术有限公司</a>
                        </td>
                        <td class="red2">338</td>
                    </tr><tr>
                        <td class="tab3Td1">
                            <a href="http://bjyimo.cn.china.cn/" target="_blank">北京医模科技有限公司</a>
                        </td>
                        <td class="red2">322</td>
                    </tr><tr>
                        <td class="tab3Td1">
                            <a href="http://bjszdmh.cn.china.cn/" target="_blank">北京神州都美华商贸有限公司(国珍专</a>
                        </td>
                        <td class="red2">318</td>
                    </tr><tr>
                        <td class="tab3Td1">
                            <a href="http://zsdemei.cn.china.cn/" target="_blank">中山德美运动制品有限公司</a>
                        </td>
                        <td class="red2">318</td>
                    </tr>
                </tbody>
            </table>
            </div>
            <div class="unShow" id="newsCon2">
            <table width="320" border="0" cellpadding="0" cellspacing="0" class="tab3">
                <thead>
                    <tr>
                        <th width="255">公司名称</th>
                    </tr>
                </thead>
                <tbody>
                <tr>
                        <td class="tab3Td1">
                            <a href="http://kangchenguang.cn.china.cn/" target="_blank">天津市辰光化工涂料有限公司</a>
                        </td>
                    </tr><tr>
                        <td class="tab3Td1">
                            <a href="http://tjmingyue.cn.china.cn/" target="_blank">天津市铭越涂料有限公司</a>
                        </td>
                    </tr><tr>
                        <td class="tab3Td1">
                            <a href="http://fengleigroup.cn.china.cn/" target="_blank">上海风雷阀门制造有限公司</a>
                        </td>
                    </tr><tr>
                        <td class="tab3Td1">
                            <a href="http://shaphbkj.cn.china.cn/" target="_blank">上海爱朴环保科技有限公司</a>
                        </td>
                    </tr><tr>
                        <td class="tab3Td1">
                            <a href="http://fsshuangqian.cn.china.cn/" target="_blank">佛山市顺德区双钱塑料制品有限公司</a>
                        </td>
                    </tr><tr>
                        <td class="tab3Td1">
                            <a href="http://dgrongshengfa.cn.china.cn/" target="_blank">东莞市大朗荣盛发精密自动车床零件加</a>
                        </td>
                    </tr><tr>
                        <td class="tab3Td1">
                            <a href="http://cixisbl.cn.china.cn/" target="_blank">慈溪市观海卫盛不落电器厂</a>
                        </td>
                    </tr><tr>
                        <td class="tab3Td1">
                            <a href="http://sdhswl.cn.china.cn/" target="_blank">宁津县恒松网链厂</a>
                        </td>
                    </tr><tr>
                        <td class="tab3Td1">
                            <a href="http://kangshida1.cn.china.cn/" target="_blank">天津市康仕达化工涂料有限公司</a>
                        </td>
                    </tr><tr>
                        <td class="tab3Td1">
                            <a href="http://leimengmo.cn.china.cn/" target="_blank">郑州市鑫源机械制造有限公司</a>
                        </td>
                    </tr>
                </tbody>
            </table>
            </div>
            <div class="unShow" id="newsCon3">
            <table width="320" border="0" cellpadding="0" cellspacing="0" class="tab3">
                <thead>
                    <tr>
                        <th width="255">公司名称</th>
                        <th width="66"></th>
                    </tr>
                </thead>
 <tbody>
<tr>
                        <td class="tab3Td1">
                            <a href="http://jinshuicable.cn.china.cn/" target="_blank">郑州锦水实业有限公司</a>
                        </td>
                        <td>
                            <a href="http://jinshuicable.cn.china.cn/" target="_blank">
                            <img src="./res/h-logo-x.gif" width="55" height="17"></a>
                        </td>
                    </tr>
                </tbody>

                <tbody>
                <tr>
                        <td class="tab3Td1">
                            <a href="http://zhenqiwei.cn.china.cn/" target="_blank">广州市珍奇味食品有限公司</a>
                        </td>
                        <td>
                            <a href="http://zhenqiwei.cn.china.cn/" target="_blank">
                            <img src="./res/h-logo-x.gif" width="55" height="17"></a>
                        </td>
                    </tr><tr>
                        <td class="tab3Td1">
                            <a href="http://sddhtj.cn.china.cn/" target="_blank">山东大汉建设机械有限公司</a>
                        </td>
                        <td>
                            <a href="http://sddhtj.cn.china.cn/" target="_blank">
                            <img src="./res/h-logo-x.gif" width="55" height="17"></a>
                        </td>
                    </tr><tr>
                        <td class="tab3Td1">
                            <a href="http://tjyrtjzc.cn.china.cn/" target="_blank">天津市宇瑞通捷动力机械设备销售有限</a>
                        </td>
                        <td>
                            <a href="http://tjyrtjzc.cn.china.cn/" target="_blank">
                            <img src="./res/h-logo-x.gif" width="55" height="17"></a>
                        </td>
                    </tr><tr>
                        <td class="tab3Td1">
                            <a href="http://yuanyangty.cn.china.cn/" target="_blank">中山市东凤镇远洋体育塑胶材料厂</a>
                        </td>
                        <td>
                            <a href="http://yuanyangty.cn.china.cn/" target="_blank">
                            <img src="./res/h-logo-x.gif" width="55" height="17"></a>
                        </td>
                    </tr><tr>
                        <td class="tab3Td1">
                            <a href="http://yiduchuwei.cn.china.cn/" target="_blank">中山市壹度集成厨卫电器有限公司</a>
                        </td>
                        <td>
                            <a href="http://yiduchuwei.cn.china.cn/" target="_blank">
                            <img src="./res/h-logo-x.gif" width="55" height="17"></a>
                        </td>
                    </tr><tr>
                        <td class="tab3Td1">
                            <a href="http://xjckgy.cn.china.cn/" target="_blank">新疆川康管业有限公司</a>
                        </td>
                        <td>
                            <a href="http://xjckgy.cn.china.cn/" target="_blank">
                            <img src="./res/h-logo-x.gif" width="55" height="17"></a>
                        </td>
                    </tr><tr>
                        <td class="tab3Td1">
                            <a href="http://dgupal.cn.china.cn/" target="_blank">东莞市悠派户外用品制造有限公司</a>
                        </td>
                        <td>
                            <a href="http://dgupal.cn.china.cn/" target="_blank">
                            <img src="./res/h-logo-x.gif" width="55" height="17"></a>
                        </td>
                    </tr><tr>
                        <td class="tab3Td1">
                            <a href="http://haijiangfilterpress.cn.china.cn/" target="_blank">衡水海江压滤机集团有限公司</a>
                        </td>
                        <td>
                            <a href="http://haijiangfilterpress.cn.china.cn/" target="_blank">
                            <img src="./res/h-logo-x.gif" width="55" height="17"></a>
                        </td>
                    </tr><tr>
                        <td class="tab3Td1">
                            <a href="http://kefidsh.cn.china.cn/" target="_blank">郑州科菲达机器有限公司</a>
                        </td>
                        <td>
                            <a href="http://kefidsh.cn.china.cn/" target="_blank">
                            <img src="./res/h-logo-x.gif" width="55" height="17"></a>
                        </td>
                    </tr>
                </tbody>
            </table>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>
<!--企业top10 end-->
</div>
<div class="rowR1">
<!--行业市场 begin-->
<div class="row3C" style="margin-top:0;">
<p>
<label><a class="titleA" href="http://product.cn.china.cn/" target="_blank">行业市场</a></label>
</p>			


<div class="row3CCon">
<h1>
<label><img src="./res/sign15.gif" width="27" height="28" align="absmiddle" class="titImg"><span class="red4">特别推荐</span></label>
<div class="clear"></div>
</h1>

<div class="tua"><ul>
 <li><a href="http://product.cn.china.cn/selling-leads/%C5%A6%BF%DB/" target="_blank"><img src="./res/1b0032.jpg" alt="纽扣"></a><a href="http://product.cn.china.cn/selling-leads/%C5%A6%BF%DB/" target="_blank">纽扣</a></li> <li><a href="http://product.cn.china.cn/selling-leads/%CD%DF%C0%E3%D6%BD%CF%E4/" target="_blank"><img src="./res/4f83ac.jpg" alt="瓦楞纸箱"></a><a href="http://product.cn.china.cn/selling-leads/%CD%DF%C0%E3%D6%BD%CF%E4/" target="_blank">瓦楞纸箱</a></li> <li><a href="http://product.cn.china.cn/selling-leads/%B1%A3%CE%C2%B2%C4%C1%CF/" target="_blank"><img src="./res/334016.jpg" alt="保温材料"></a><a href="http://product.cn.china.cn/selling-leads/%B1%A3%CE%C2%B2%C4%C1%CF/" target="_blank">保温材料</a></li> <li><a href="http://product.cn.china.cn/selling-leads/%B8%D6%D6%C6%C9%A2%C8%C8%C6%F7/" target="_blank"><img src="./res/0feae9.jpg" alt="钢制散热器"></a><a href="http://product.cn.china.cn/selling-leads/%B8%D6%D6%C6%C9%A2%C8%C8%C6%F7/" target="_blank">钢制散热器</a></li> <li><a href="http://product.cn.china.cn/selling-leads/%B9%E2%D1%A7%BE%B5%C6%AC/" target="_blank"><img src="./res/7a8c38.jpg" alt="光学镜片"></a><a href="http://product.cn.china.cn/selling-leads/%B9%E2%D1%A7%BE%B5%C6%AC/" target="_blank">光学镜片</a></li> <li><a href="http://product.cn.china.cn/selling-leads/%D2%BA%D1%B9%B4%B8/" target="_blank"><img src="./res/8e6c48.jpg" alt="液压锤"></a><a href="http://product.cn.china.cn/selling-leads/%D2%BA%D1%B9%B4%B8/" target="_blank">液压锤</a></li>
</ul></div>

<h1><label><img src="./res/sign12.gif" width="27" height="28" align="absmiddle" class="titImg"><span class="red4">工 业 品</span></label>
<a href="http://my.cn.china.cn/admin.php?op=SellInfoPublishShow" target="_blank"><img src="./res/btn1.gif" width="83" height="22"></a><div class="clear"></div></h1>

<ul>
<h2><a href="http://cn.china.cn/jixie/index.html" target="_blank" class="red2">机械及行业设备</a> 
<a href="http://cn.china.cn/jixie/jichuang/index.html" target="_blank">热门产品</a> 
<a href="http://famen.china.cn/" target="_blank" class="red2">阀门</a></h2>
                
<li><a href="http://product.cn.china.cn/selling-leads/%BB%FA%B4%B2/" target="_blank">机床</a> | 
<a href="http://product.cn.china.cn/selling-leads/%B4%AB%B6%AF%BC%FE/" target="_blank">传动件</a> | 
<a href="http://product.cn.china.cn/selling-leads/%B7%A2%B5%E7%BB%FA/" target="_blank">发电机</a> | 
<a href="http://product.cn.china.cn/selling-leads/%C5%A9%D2%B5%BB%FA%D0%B5/" target="_blank">农业机械</a> | 
<a href="http://product.cn.china.cn/selling-leads/%B5%E7%B6%AF%BB%FA/" target="_blank">电动机</a> </li>
                
<li> <a href="http://product.cn.china.cn/selling-leads/%B1%C3" target="_blank" class="red2">泵</a> | 
<a href="http://product.cn.china.cn/selling-leads/%CF%F0%BD%BA%BB%FA%D0%B5/" target="_blank">橡胶机械</a> | 
<a href="http://product.cn.china.cn/selling-leads/%B8%C9%D4%EF%C9%E8%B1%B8/" target="_blank">干燥设备</a> | 
<a href="http://product.cn.china.cn/selling-leads/%CB%DC%C1%CF%BB%FA%D0%B5/" target="_blank">塑料机械</a> | 
<span class="red2"><a href="http://cn.china.cn/jixie/index.html" target="_blank" class="red2">更多</a>&gt;&gt;</span></li>
</ul>

<ul>
<h2><a href="http://cn.china.cn/dianzi/index.html" target="_blank" class="red2">电子元器件</a> 
<a href="http://product.cn.china.cn/provide/list/4549.html" target="_blank">集成电路</a> 
<a href="http://product.cn.china.cn/provide/list/4517.html" target="_blank">电容器</a></h2>
                
<li><a href="http://product.cn.china.cn/provide/list/4494.html" target="_blank" class="red2">二极管</a> | 
<a href="http://product.cn.china.cn/provide/list/4505.html" target="_blank">三极管</a> | 
<a href="http://product.cn.china.cn/provide/list/4609.html" target="_blank">显示器</a> | 
<a href="http://product.cn.china.cn/provide/list/4530.html" target="_blank">电阻器</a> | 
<a href="http://product.cn.china.cn/provide/list/4538.html" target="_blank">电位器</a> </li>
                
<li><a href="http://product.cn.china.cn/provide/list/532.html" target="_blank">传感器</a> | 
<a href="http://product.cn.china.cn/provide/list/184.html" target="_blank">光器件</a> | 
<a href="http://product.cn.china.cn/provide/list/1574.html" target="_blank">变压器</a> | 
<a href="http://product.cn.china.cn/provide/list/561.html" target="_blank">连接器</a> | 
<span class="red2"><a href="http://cn.china.cn/dianzi/index.html" target="_blank" class="red2">更多</a>&gt;&gt;</span></li>
</ul>

<ol>            	
<h2><a href="http://cn.china.cn/yiqi/index.html" target="_blank" class="red2">仪器、仪表</a> 
<a href="http://product.cn.china.cn/provide/list/3392.html" target="_blank">分析仪器</a> 
<a href="http://product.cn.china.cn/provide/list/3374.html" target="_blank">试验机</a></h2>
                
<li><a href="http://product.cn.china.cn/provide/list/183.html" target="_blank">光学仪器</a> | 
<a href="http://product.cn.china.cn/provide/list/3430.html" target="_blank">温度仪表</a> | 
<a href="http://product.cn.china.cn/provide/list/3438.html" target="_blank" class="red2">压力仪表</a> | 
<a href="http://product.cn.china.cn/provide/list/3445.html" target="_blank">流量仪表</a></li>
                
<li><a href="http://product.cn.china.cn/provide/list/539.html" target="_blank">电工仪器</a> | 
<a href="http://product.cn.china.cn/provide/list/3369.html" target="_blank">量仪</a> | 
<a href="http://product.cn.china.cn/provide/list/3475.html" target="_blank">电测仪器</a> |  
<a href="http://product.cn.china.cn/provide/list/3422.html" target="_blank">量具</a> | 
<span class="red2"><a href="http://cn.china.cn/yiqi/index.html" target="_blank" class="red2">更多</a>&gt;&gt;</span></li>
</ol>

<ol>            	
<h2><a href="http://cn.china.cn/diangong/index.html" target="_blank" class="red2">电工电气</a> 
<a href="http://product.cn.china.cn/provide/list/422.html" target="_blank">发电机</a> 
<a href="http://product.cn.china.cn/provide/list/507.html" target="_blank">电热设备</a> 
<a href="http://product.cn.china.cn/provide/list/373.html" target="_blank">开关</a> </h2>
                
<li><a href="http://product.cn.china.cn/provide/list/402.html" target="_blank" class="red2">低压电器</a> | 
<a href="http://product.cn.china.cn/provide/list/455.html" target="_blank">电线电缆</a> | 
<a href="http://product.cn.china.cn/provide/list/489.html" target="_blank">充电器</a> | 
<a href="http://product.cn.china.cn/provide/list/414.html" target="_blank">高压电器</a> </li>                
<li><a href="http://product.cn.china.cn/provide/list/475.html" target="_blank">电池</a> | 
<a href="http://product.cn.china.cn/provide/list/5495.html" target="_blank">电源</a> | 
<a href="http://product.cn.china.cn/provide/list/470.html" target="_blank">插头</a> | 
<a href="http://product.cn.china.cn/provide/list/529.html" target="_blank">工控系统</a> | 
<span class="red2"><a href="http://cn.china.cn/diangong/index.html" target="_blank" class="red2">更多</a>&gt;&gt;</span></li>         	
</ol>

<ul>
<h2><a href="http://cn.china.cn/wujin/index.html" target="_blank" class="red2">五金工具</a> 
<a href="http://product.cn.china.cn/provide/list/4769.html" target="_blank">弹簧</a> 
<a href="http://product.cn.china.cn/provide/list/4833.html" target="_blank">气动元件</a> 
<a href="http://product.cn.china.cn/provide/list/4790.html" target="_blank">密封件</a></h2>
                
<li><a href="http://product.cn.china.cn/provide/list/4778.html" target="_blank">紧固件</a> | 
<a href="http://product.cn.china.cn/provide/list/4811.html" target="_blank">刀具、夹具</a> | 
<a href="http://product.cn.china.cn/provide/list/1341.html" target="_blank">门窗五金</a> | 
<a href="http://product.cn.china.cn/provide/list/1417.html" target="_blank">水暖五金</a> </li>
                
<li><a href="http://product.cn.china.cn/provide/list/4926.html" target="_blank" class="red2">扳手</a>| 
<a href="http://product.cn.china.cn/provide/list/4880.html" target="_blank">磨具</a> | 
<a href="http://product.cn.china.cn/provide/list/4865.html" target="_blank">五金配件</a> | 
<a href="http://product.cn.china.cn/provide/list/1355.html" target="_blank">锁具</a> | 
<span class="red2"><a href="http://cn.china.cn/wujin/index.html" target="_blank" class="red2">更多</a>&gt;&gt;</span></li>
</ul>

<ul>
<h2><a href="http://cn.china.cn/baozhuang/index.html" target="_blank" class="red2">包装</a> 
<a href="http://cn.china.cn/yinshua/index.html" target="_blank">印刷</a> 
<a href="http://cn.china.cn/zhiye/index.html" target="_blank" class="red2">纸业</a> 
<a href="http://cn.china.cn/huanbao/index.html" target="_blank" class="red2">环保</a> 
<a href="http://cn.china.cn/ershou/index.html" target="_blank">二手设备</a></h2>
                
<li><a href="http://product.cn.china.cn/provide/list/882.html" target="_blank" class="red2">过滤材料</a> | 
<a href="http://product.cn.china.cn/provide/list/2344.html" target="_blank">包装用纸</a> | 
<a href="http://product.cn.china.cn/provide/list/2080.html" target="_blank">印刷加工</a> | 
<a href="http://product.cn.china.cn/provide/list/168.html" target="_blank">办公用纸</a> </li>
                
<li><a href="http://product.cn.china.cn/provide/list/943.html" target="_blank">空气净化</a> | 
<a href="http://product.cn.china.cn/provide/list/5030.html" target="_blank">原水处理</a> | 
<a href="http://product.cn.china.cn/provide/list/986.html" target="_blank">化工废料</a> | 
<span class="red2"><a href="http://cn.china.cn/baozhuang/index.html" target="_blank" class="red2">更多</a>&gt;&gt;</span></li>
</ul>

<ol>          	
<h2><a href="http://cn.china.cn/anfang/index.html" target="_blank">安全、防护</a> 
<a href="http://product.cn.china.cn/provide/list/1448.html" target="_blank">监控器材</a> 
<a href="http://product.cn.china.cn/provide/list/2282.html" target="_blank">运动护具</a></h2>
                
<li><a href="http://product.cn.china.cn/provide/list/1446.html" target="_blank">消防设备</a> | 
<a href="http://product.cn.china.cn/provide/list/1511.html" target="_blank">作业保护</a> | 
<a href="http://product.cn.china.cn/provide/list/2238.html" target="_blank" class="red2">交通设备</a> | 
<a href="http://product.cn.china.cn/provide/list/2255.html" target="_blank">安检设备</a> </li>
                
<li><a href="http://product.cn.china.cn/provide/list/2275.html" target="_blank">智能卡</a> | 
<a href="http://product.cn.china.cn/provide/list/1449.html" target="_blank">报警器材</a> | 
<a href="http://product.cn.china.cn/provide/list/2294.html" target="_blank">防身用具</a> | 
<span class="red2"><a href="http://cn.china.cn/anfang/index.html" target="_blank" class="red2">更多</a>&gt;&gt;</span></li>
</ol>

<ol>           	
<h2><a href="http://cn.china.cn/qipei/index.html" target="_blank" class="red2">汽摩及配件</a> 
<a href="http://product.cn.china.cn/provide/list/3858.html" target="_blank">转向系统</a> 
<a href="http://product.cn.china.cn/provide/list/3839.html" target="_blank">传动系统</a></h2>
                
<li><a href="http://product.cn.china.cn/provide/list/3851.html" target="_blank" class="red2">制动系统</a> | 
<a href="http://product.cn.china.cn/provide/list/3865.html" target="_blank">燃油系统</a> | 
<a href="http://product.cn.china.cn/provide/list/3526.html" target="_blank">商用车</a> | 
<a href="http://product.cn.china.cn/provide/list/3532.html" target="_blank">其他专用汽车</a></li>
                
<li><a href="http://product.cn.china.cn/provide/list/3545.html" target="_blank">摩托车</a> | 
<a href="http://product.cn.china.cn/provide/list/3886.html" target="_blank">汽车影音</a> | 
<a href="http://product.cn.china.cn/provide/list/3920.html" target="_blank">汽车通讯</a> | 
<span class="red2"><a href="http://cn.china.cn/qipei/index.html" target="_blank" class="red2">更多</a>&gt;&gt;</span></li>
</ol>

<ul>           	
<h2><a href="http://cn.china.cn/yunshu/index.html" target="_blank" class="red2">交通运输</a> 
<a href="http://product.cn.china.cn/provide/list/3505.html" target="_blank">非机动车</a> 
<a href="http://product.cn.china.cn/provide/list/3551.html" target="_blank">船舶</a>  
<a href="http://product.cn.china.cn/provide/list/3588.html" target="_blank">辅助器材</a></h2>
                
<li><a href="http://product.cn.china.cn/provide/list/3563.html" target="_blank" class="red2">搬运设备</a> | 
<a href="http://product.cn.china.cn/provide/list/3552.html" target="_blank">船舶配件</a> | 
<a href="http://product.cn.china.cn/provide/list/3570.html" target="_blank">装卸设备</a> | 
<a href="http://product.cn.china.cn/provide/list/3575.html" target="_blank">输送设备</a></li>
                
<li><a href="http://product.cn.china.cn/provide/list/3582.html" target="_blank">集装设备</a> | 
<a href="http://product.cn.china.cn/provide/list/3578.html" target="_blank">仓储设备</a> | 
<a href="http://product.cn.china.cn/provide/list/3511.html" target="_blank">非机动车配件</a> | 
<span class="red2"><a href="http://cn.china.cn/yunshu/index.html" target="_blank" class="red2">更多</a>&gt;&gt;</span></li>
</ul>

<ul>          	
<h2><a href="http://cn.china.cn/zhaoming/index.html" target="_blank">照明</a> 
<a href="http://product.cn.china.cn/provide/list/4397.html" target="_blank">白炽灯</a> 
<a href="http://product.cn.china.cn/provide/list/4408.html" target="_blank">气体放电灯</a> 
<a href="http://product.cn.china.cn/provide/list/4422.html" target="_blank">冷光源</a></h2>
                
<li><a href="http://product.cn.china.cn/provide/list/4448.html" target="_blank">室外灯具</a> | 
<a href="http://product.cn.china.cn/provide/list/1462.html" target="_blank">室内灯具</a> | 
<a href="http://product.cn.china.cn/provide/list/4426.html" target="_blank">灯具配件</a> | 
<a href="http://product.cn.china.cn/provide/list/4442.html" target="_blank">电光材料</a> </li>
                
<li><a href="http://product.cn.china.cn/provide/list/4482.html" target="_blank">手电筒</a> | 
<a href="http://product.cn.china.cn/provide/list/4460.html" target="_blank" class="red2">专用灯具</a> | 
<a href="http://product.cn.china.cn/provide/list/4476.html" target="_blank">指示灯</a> | 
<a href="http://product.cn.china.cn/provide/list/3869.html" target="_blank">车灯</a> | 
<span class="red2"><a href="http://cn.china.cn/zhaoming/index.html" target="_blank" class="red2">更多</a>&gt;&gt;</span></li>
</ul>

<div class="clear"></div>
<h1 style="border-bottom:1px dashed #91003D;"><label><img src="./res/sign13.gif" width="28" height="28" align="absmiddle" class="titImg"><span class="red3">消 费 品</span></label>
<a href="http://my.cn.china.cn/admin.php?op=SellInfoPublishShow" target="_blank"><img src="./res/btn2.gif" width="83" height="22"></a><div class="clear"></div></h1>

<ol>            	
<h2><a href="http://cn.china.cn/lipin/index.html" target="_blank" class="red">礼品、工艺品、饰品</a> 
<a href="http://cn.china.cn/bangong/index.html" target="_blank">办公、文教</a></h2>
                
<li><a href="http://product.cn.china.cn/provide/list/3616.html" target="_blank" class="red2">珠宝首饰</a> | 
<a href="http://product.cn.china.cn/provide/list/3755.html" target="_blank">陶瓷工艺品</a> | 
<a href="http://product.cn.china.cn/provide/list/3642.html" target="_blank">节庆用品</a> | 
<a href="http://product.cn.china.cn/provide/list/3626.html" target="_blank">摆挂件饰品</a></li> 
              
<li><a href="http://product.cn.china.cn/provide/list/14.html" target="_blank">薄、本、册</a> | 
<a href="http://product.cn.china.cn/provide/list/2.html" target="_blank">文具</a> | 
<a href="http://product.cn.china.cn/provide/list/134.html" target="_blank">办公设备</a> | 
<a href="http://product.cn.china.cn/provide/list/210.html" target="_blank">相机</a> | 
<span class="red"><a href="http://cn.china.cn/lipin/index.html" target="_blank" class="red">更多</a>&gt;&gt;</span></li>
</ol>

<ol>
<h2><a href="http://cn.china.cn/fuzhuang/index.html" target="_blank" class="red">服装、服饰</a> 
<a href="http://product.cn.china.cn/provide/list/2624.html" target="_blank">女上装</a> 
<a href="http://product.cn.china.cn/provide/list/2681.html" target="_blank">男上装</a> 
<a href="http://product.cn.china.cn/provide/list/2745.html" target="_blank">休闲鞋</a></h2>
                
<li><a href="http://product.cn.china.cn/provide/list/2854.html" target="_blank">围巾</a> | 
<a href="http://product.cn.china.cn/provide/list/2719.html" target="_blank" class="red">运动服</a> | 
<a href="http://product.cn.china.cn/provide/list/2962.html" target="_blank">腰带</a> | 
<a href="http://product.cn.china.cn/provide/list/2656.html" target="_blank">女士内衣</a> | 
<a href="http://product.cn.china.cn/provide/list/2649.html" target="_blank">女裤</a> | 
<a href="http://product.cn.china.cn/provide/list/2699.html" target="_blank">男裤</a></li>
                
<li><a href="http://product.cn.china.cn/provide/list/2670.html" target="_blank">儿童服装</a> | 
<a href="http://product.cn.china.cn/provide/list/2971.html" target="_blank">时尚配饰</a> | 
<a href="http://product.cn.china.cn/provide/list/2673.html" target="_blank">服装辅料</a> | 
<a href="http://product.cn.china.cn/provide/list/2602.html" target="_blank">女包</a> | 
<span class="red"><a href="http://cn.china.cn/fuzhuang/index.html" target="_blank" class="red">更多</a>&gt;&gt;</span></li>	
</ol>

<ul>            	
<h2><a href="http://cn.china.cn/yundong/index.html" target="_blank" class="red">运动、休闲</a> 
<a href="http://product.cn.china.cn/provide/list/5270.html" target="_blank">户外用品</a> 
<a href="http://product.cn.china.cn/selling-leads/%BE%C6%B5%EA%D3%C3%C6%B7/" target="_blank">酒店用品</a></h2>
                
<li><a href="http://product.cn.china.cn/provide/list/5255.html" target="_blank" class="red">健身器材</a> | 
<a href="http://product.cn.china.cn/provide/list/5302.html" target="_blank">宠物用品</a> | 
<a href="http://product.cn.china.cn/provide/list/2753.html" target="_blank">运动鞋</a> | 
<a href="http://product.cn.china.cn/provide/list/3715.html" target="_blank">乐器</a> | 
<a href="http://product.cn.china.cn/provide/list/3707.html" target="_blank">纪念品</a></li>
                
<li><a href="http://product.cn.china.cn/provide/list/5171.html" target="_blank">休闲家具</a> | 
<a href="http://product.cn.china.cn/provide/list/5283.html" target="_blank">烧烤用具</a> | 
<a href="http://product.cn.china.cn/provide/list/5561.html" target="_blank">麻将桌</a> | 
<a href="http://product.cn.china.cn/provide/list/5219.html" target="_blank">台球</a> | 
<span class="red"><a href="http://cn.china.cn/yundong/index.html" target="_blank" class="red">更多</a>&gt;&gt;</span></li>
</ul>

<ul>            	
<h2><a href="http://cn.china.cn/tongxun/index.html" target="_blank" class="red">通讯产品</a> 
<a href="http://cn.china.cn/chuanmei/index.html" target="_blank">传媒、广电</a> 
<a href="http://product.cn.china.cn/provide/list/4026.html" target="_blank">传输设备</a></h2>
                
<li><a href="http://product.cn.china.cn/provide/list/3982.html" target="_blank">手机</a> | 
<a href="http://product.cn.china.cn/provide/list/3997.html" target="_blank" class="red">手机配件</a> | 
<a href="http://product.cn.china.cn/provide/list/145.html" target="_blank">固定电话</a> | 
<a href="http://product.cn.china.cn/provide/list/3630.html" target="_blank">手机饰品</a> | 
<a href="http://product.cn.china.cn/provide/list/615.html" target="_blank">天线</a></li>
                
<li><a href="http://product.cn.china.cn/provide/list/4696.html" target="_blank">展览器材</a> | 
<a href="http://product.cn.china.cn/provide/list/197.html" target="_blank">摄影器材</a> | 
<a href="http://product.cn.china.cn/provide/list/4686.html" target="_blank">音像制品</a> | 
<a href="http://product.cn.china.cn/provide/list/4674.html" target="_blank">书籍</a> | 
<span class="red"><a href="http://cn.china.cn/tongxun/index.html" target="_blank" class="red">更多</a>&gt;&gt;</span></li>
</ul>

<ol>    	
<h2><a href="http://cn.china.cn/jiadian/index.html" target="_blank">家用电器</a> 
<a href="http://cn.china.cn/shuma/index.html" target="_blank" class="red">电脑、数码</a> 
<a href="http://product.cn.china.cn/provide/list/1186.html" target="_blank">电视</a> 
<a href="http://product.cn.china.cn/provide/list/280.html" target="_blank">网络设备</a></h2>
                
<li><a href="http://product.cn.china.cn/provide/list/1186.html" target="_blank" class="red">电视机</a> | 
<a href="http://product.cn.china.cn/provide/list/1234.html" target="_blank">热水器</a> | 
<a href="http://product.cn.china.cn/provide/list/257.html" target="_blank">显示屏</a> | 
<a href="http://product.cn.china.cn/provide/list/137.html" target="_blank">打印机</a> | 
<a href="http://product.cn.china.cn/provide/list/314.html" target="_blank">移动存储</a></li>
                
<li><a href="http://product.cn.china.cn/provide/list/1209.html" target="_blank">空调</a> | 
<a href="http://product.cn.china.cn/provide/list/1239.html" target="_blank">洗衣机</a> | 
<a href="http://product.cn.china.cn/provide/list/1178.html" target="_blank">碟机</a> | 
<a href="http://product.cn.china.cn/provide/list/1252.html" target="_blank">冰箱、冷柜</a> | 
<span class="red"><a href="http://cn.china.cn/jiadian/index.html" target="_blank" class="red">更多</a>&gt;&gt;</span></li>
</ol>

<ol>
<h2><a href="http://cn.china.cn/wanju/index.html" target="_blank" class="red">玩具</a> 
<a href="http://product.cn.china.cn/provide/list/4059.html" target="_blank">填充、毛绒玩具</a> 
<a href="http://product.cn.china.cn/provide/list/5557.html" target="_blank">塑胶玩具</a></h2>
                
<li><a href="http://product.cn.china.cn/provide/list/4081.html" target="_blank">娃娃</a> | 
<a href="http://product.cn.china.cn/provide/list/4088.html" target="_blank" class="red">交通玩具</a> | 
<a href="http://product.cn.china.cn/provide/list/4118.html" target="_blank">模仿玩具</a> | <a href="http://product.cn.china.cn/provide/list/4139.html" target="_blank">游艺设施</a> | </li>
                
<li><a href="http://product.cn.china.cn/provide/list/4131.html" target="_blank">玩具配件</a> | 
<a href="http://product.cn.china.cn/provide/list/3709.html" target="_blank">模型玩具</a> | 
<a href="http://product.cn.china.cn/provide/list/4099.html" target="_blank">充气玩具</a> | 
<a href="http://product.cn.china.cn/provide/list/4107.html" target="_blank">益智</a> | 
<span class="red"><a href="http://cn.china.cn/wanju/index.html" class="red">更多</a>&gt;&gt;</span></li>

</ol>

<ul>
<h2><a href="http://cn.china.cn/jiaju/index.html" target="_blank" class="red">家具、家居用品</a> 
<a href="http://product.cn.china.cn/provide/list/2592.html" target="_blank">箱包、袋、皮具</a></h2>
                
<li><a href="http://product.cn.china.cn/provide/list/5088.html" target="_blank">灶具</a> | 
<a href="http://product.cn.china.cn/provide/list/5079.html" target="_blank">炊具</a> | 
<a href="http://product.cn.china.cn/provide/list/5102.html" target="_blank">清洁用具</a> | 
<a href="http://product.cn.china.cn/provide/list/5119.html" target="_blank">保温容器</a> | 
<a href="http://product.cn.china.cn/provide/list/156.html" target="_blank">办公家具</a></li>
                
<li><a href="http://product.cn.china.cn/provide/list/1462.html" target="_blank">灯具</a> | 
<a href="http://product.cn.china.cn/provide/list/5178.html" target="_blank">酒店家具</a> | 
<a href="http://product.cn.china.cn/provide/list/5093.html" target="_blank">护理用具</a> | 
<a href="http://product.cn.china.cn/provide/list/3665.html" target="_blank">钟表</a> | 
<span class="red"><a href="http://cn.china.cn/jiaju/index.html" target="_blank" class="red">更多</a>&gt;&gt;</span></li>
</ul>

<ul>
<h2><a href="http://cn.china.cn/shipin/index.html" target="_blank">食品、饮料</a> 
<a href="http://product.cn.china.cn/provide/list/1724.html" target="_blank">肉类</a> 
<a href="http://product.cn.china.cn/provide/list/1859.html" target="_blank">酒类</a>  
<a href="http://product.cn.china.cn/selling-leads?type=1&op=DirectGoToCorp&k=%BC%D3%C3%CB" target="_blank">创业加盟</a> </h2>

<li><a href="http://product.cn.china.cn/provide/list/1894.html" target="_blank">保健食品</a> | 
<a href="http://product.cn.china.cn/provide/list/1679.html" target="_blank" class="red">茶叶</a> | 
<a href="http://product.cn.china.cn/provide/list/1878.html" target="_blank">冲饮品</a> | 
<a href="http://product.cn.china.cn/provide/list/1637.html" target="_blank">食用菌</a> | 
<a href="http://product.cn.china.cn/provide/list/1940.html" target="_blank">食品加工</a></li>

<li><a href="http://product.cn.china.cn/provide/list/1924.html" target="_blank">罐头食品</a> | 
<a href="http://product.cn.china.cn/provide/list/1952.html" target="_blank">食品添加剂</a> | 
<a href="http://product.cn.china.cn/provide/list/1917.html" target="_blank">方便休闲食品</a> | 
<span class="red"><a href="http://cn.china.cn/shipin/index.html" target="_blank" class="red">更多</a>&gt;&gt;</span></li>
</ul>

<div class="clear"></div>
<h1 style="border-bottom:1px dashed #86A758;"><label><img src="./res/sign14.gif" width="35" height="27" align="absmiddle" class="titImg"><span class="green">原 材 料</span></label>
<a href="http://my.cn.china.cn/admin.php?op=SellInfoPublishShow" target="_blank"><img src="./res/btn3.gif" width="83" height="22"></a><div class="clear"></div></h1>

<ol>
<h2><a href="http://cn.china.cn/huagong/index.html" target="_blank" class="green">化工</a> 
<a href="http://cn.china.cn/huagong/shusongshebei-1/index.html" target="_blank">热门产品</a> 
<a href="http://product.cn.china.cn/provide/list/796.html" target="_blank">合成树脂</a> 
<a href="http://product.cn.china.cn/provide/list/809.html" target="_blank">纤维</a></h2>

<li><a href="http://product.cn.china.cn/provide/list/737.html" class="green" target="_blank">烃类</a> | 
<a href="http://product.cn.china.cn/provide/list/757.html" target="_blank">羧酸</a> | 
<a href="http://product.cn.china.cn/provide/list/684.html" target="_blank">无机碱</a> | 
<a href="http://product.cn.china.cn/provide/list/630.html" target="_blank">单质</a> | 
<a href="http://product.cn.china.cn/provide/list/655.html" target="_blank">氧化物</a> | 
<a href="http://product.cn.china.cn/provide/list/673.html" target="_blank">无机酸</a></li>

<li><a href="http://product.cn.china.cn/provide/list/758.html" target="_blank">羧酸衍生物</a> | 
<a href="http://product.cn.china.cn/provide/list/1988.html" target="_blank">化工中间体</a> | 
<a href="http://product.cn.china.cn/provide/list/694.html" target="_blank">无机盐</a> | 
<span class="green"><a href="http://cn.china.cn/huagong/index.html" class="green" target="_blank">更多</a>&gt;&gt;</span></li>
</ol> 
            
<ol>
<h2><a href="http://cn.china.cn/jingxihuaxue/index.html" target="_blank">精细化学品</a> 
<a href="http://product.cn.china.cn/provide/list/3187.html" target="_blank">皮肤品</a> 
<a href="http://product.cn.china.cn/provide/list/2821.html" target="_blank">胶粘剂</a> 
<a href="http://product.cn.china.cn/provide/list/3295.html" target="_blank">涂料</a></h2>
               
<li><a href="http://product.cn.china.cn/provide/list/3202.html" target="_blank">毛发用品</a> | 
<a href="http://product.cn.china.cn/provide/list/3234.html" class="green" target="_blank">清洗用品</a> | 
<a href="http://product.cn.china.cn/provide/list/2503.html" target="_blank">染料</a> | 
<a href="http://product.cn.china.cn/provide/list/2072.html" target="_blank">油墨</a> | 
<a href="http://product.cn.china.cn/provide/list/3348.html" target="_blank">香料</a></li>

<li><a href="http://product.cn.china.cn/provide/list/3318.html" target="_blank">吸附剂</a> | 
<a href="http://product.cn.china.cn/provide/list/3227.html" target="_blank">芳香化学品</a> | 
<a href="http://product.cn.china.cn/provide/list/1798.html" target="_blank">农药制剂</a> |  
<span class="green"><a href="http://cn.china.cn/jingxihuaxue/index.html" class="green" target="_blank">更多</a>&gt;&gt;</span></li>
</ol>

<ul>   
<h2><a href="http://cn.china.cn/xiangsu/index.html" target="_blank">橡塑</a> 
<a href="http://product.cn.china.cn/provide/list/1003.html" target="_blank">通用塑料</a> 
<a href="http://product.cn.china.cn/provide/list/1101.html" target="_blank">合成橡胶</a> 
<a href="http://product.cn.china.cn/provide/list/1058.html" target="_blank">塑料袋</a> 
</h2>              
<li><a href="http://product.cn.china.cn/provide/list/1065.html" class="green" target="_blank">塑料工艺</a> | 
<a href="http://product.cn.china.cn/provide/list/1071.html" target="_blank">塑料建材</a> | 
<a href="http://product.cn.china.cn/provide/list/1010.html" target="_blank">工程塑料</a> | 
<a href="http://product.cn.china.cn/provide/list/1045.html" target="_blank">塑料管</a> | 
<a href="http://product.cn.china.cn/provide/list/1113.html" target="_blank">轮胎</a> 
</li>               
<li><a href="http://product.cn.china.cn/provide/list/1121.html" target="_blank">橡胶管</a> | 
<a href="http://product.cn.china.cn/provide/list/1024.html" target="_blank">特种塑料</a> | 
<a href="http://product.cn.china.cn/provide/list/1096.html" target="_blank">天然胶</a> | 
<a href="http://product.cn.china.cn/provide/list/1025.html" target="_blank">再生塑料</a> | 
<span class="green"><a href="http://cn.china.cn/xiangsu/index.html" class="green" target="_blank">更多</a>&gt;&gt;</span></li>
</ul>

<ul>
<h2><a href="http://cn.china.cn/yejin/index.html" target="_blank" class="green">冶金、矿产</a> 
<a href="http://product.cn.china.cn/provide/list/4238.html" target="_blank">不锈钢材</a> 
<a href="http://product.cn.china.cn/provide/list/4250.html" target="_blank">磁性材料</a></h2>

<li><a href="http://product.cn.china.cn/provide/list/5593.html" target="_blank">优特钢</a> | 
<a href="http://product.cn.china.cn/provide/list/4265.html" class="green" target="_blank">金属粉末</a> | 
<a href="http://product.cn.china.cn/provide/list/4170.html" target="_blank">稀土</a> | 
<a href="http://product.cn.china.cn/provide/list/4176.html" target="_blank">有色金属合金</a> | 
<a href="http://product.cn.china.cn/provide/list/4245.html" target="_blank">炉料</a> </li>

<li><a href="http://product.cn.china.cn/provide/list/5567.html" target="_blank">建筑钢材</a> | 
<a href="http://product.cn.china.cn/provide/list/4205.html" target="_blank">非金属制品</a> | 
<a href="http://product.cn.china.cn/provide/list/4258.html" target="_blank">金属网</a> | 
<span class="green"><a href="http://cn.china.cn/yejin/index.html" class="green" target="_blank">更多</a>&gt;&gt;</span></li>
</ul>

<ol>
<h2><a href="http://cn.china.cn/fangzhi/index.html" target="_blank" class="green">纺织、皮革</a> 
<a href="http://product.cn.china.cn/provide/list/2482.html" target="_blank">针织</a> 
<a href="http://product.cn.china.cn/provide/list/2673.html" target="_blank">服装</a> 
<a href="http://product.cn.china.cn/provide/list/2521.html" target="_blank">床上用品</a></h2>   
             
<li><a href="http://product.cn.china.cn/provide/list/2567.html" class="green" target="_blank">皮革</a> | 
<a href="http://product.cn.china.cn/provide/list/2454.html" target="_blank">棉类面料</a> | 
<a href="http://product.cn.china.cn/provide/list/2462.html" target="_blank">毛纺</a> | 
<a href="http://product.cn.china.cn/provide/list/2500.html" target="_blank">纺织</a> | 
<a href="http://product.cn.china.cn/provide/list/2548.html" target="_blank">毯子</a> | 
<a href="http://product.cn.china.cn/provide/list/2553.html" target="_blank">毛巾</a></li>
                
<li><a href="http://product.cn.china.cn/provide/list/2445.html" target="_blank">纱线</a> | 
<a href="http://product.cn.china.cn/provide/list/2239.html" target="_blank">反光材料</a> | 
<a href="http://product.cn.china.cn/provide/list/809.html" target="_blank">化纤</a> | 
<a href="http://product.cn.china.cn/provide/list/2577.html" target="_blank">合成革</a> | 
<span class="green"><a href="http://cn.china.cn/fangzhi/index.html" class="green" target="_blank">更多</a>&gt;&gt;</span></li>
</ol>

<ol>
<h2><a href="http://cn.china.cn/jianzhu/index.html" target="_blank">建筑、建材</a> 
<a href="http://cn.china.cn/jianzhu/jixieshebei/index.html" target="_blank">热门产品</a> 
<a href="http://guancai.china.cn/" target="_blank" class="green">管材</a></h2>
              
<li><a href="http://product.cn.china.cn/provide/list/1278.html" target="_blank">建筑涂料</a> | 
<a href="http://product.cn.china.cn/provide/list/1284.html" class="green" target="_blank">陶瓷</a> | 
<a href="http://product.cn.china.cn/provide/list/1317.html" target="_blank">装饰板</a> | 
<a href="http://product.cn.china.cn/provide/list/1445.html" target="_blank">楼宇设施</a> | 
<a href="http://product.cn.china.cn/provide/list/496.html" target="_blank">绝缘材料</a></li>

<li><a href="http://product.cn.china.cn/provide/list/1383.html" target="_blank">金属建材</a> | 
<a href="http://product.cn.china.cn/provide/list/1310.html" target="_blank">木质材料</a> | 
<a href="http://product.cn.china.cn/provide/list/1455.html" target="_blank">管道</a> | 
<a href="http://product.cn.china.cn/provide/list/1432.html" target="_blank">卫浴五金</a> | 
<span class="green"> <a href="http://cn.china.cn/jianzhu/index.html" class="green" target="_blank">更多</a>&gt;&gt;</span></li>
</ol>

<ul>
<h2><a href="http://cn.china.cn/nongye/index.html" target="_blank">农业</a> 
<a href="http://product.cn.china.cn/provide/list/1591.html" target="_blank">粮食</a> 
<a href="http://product.cn.china.cn/provide/list/1620.html" target="_blank">新鲜蔬菜</a> 
<a href="http://product.cn.china.cn/provide/list/1689.html" target="_blank">牲畜</a> 
<a href="http://product.cn.china.cn/provide/list/1656.html" target="_blank">水果</a></h2>    
           
<li><a href="http://product.cn.china.cn/provide/list/1613.html" class="green" target="_blank">食用油</a> | 
<a href="http://product.cn.china.cn/provide/list/1606.html" target="_blank">果仁</a> | 
<a href="http://product.cn.china.cn/provide/list/1756.html" target="_blank">花卉</a> | 
<a href="http://product.cn.china.cn/provide/list/1745.html" target="_blank">苗木</a> | 
<a href="http://product.cn.china.cn/provide/list/1777.html" target="_blank">种子种苗</a> | 
<a href="http://product.cn.china.cn/provide/list/1782.html" target="_blank">饲料</a></li>             
<li><a href="http://product.cn.china.cn/provide/list/1599.html" target="_blank">米面</a> | 
<a href="http://product.cn.china.cn/provide/list/1695.html" target="_blank">禽类</a> | 
<a href="http://product.cn.china.cn/provide/list/1803.html" target="_blank">化肥</a> | 
<a href="http://product.cn.china.cn/provide/list/1711.html" target="_blank">水产品</a> | 
<a href="http://product.cn.china.cn/provide/list/1671.html" target="_blank">坚果</a> | 
<span class="green"><a href="http://cn.china.cn/nongye/index.html" class="green" target="_blank">更多</a>&gt;&gt;</span></li>
</ul>

<ul>
<h2><a href="http://cn.china.cn/nengyuan/index.html" target="_blank">能源</a> 
<a href="http://cn.china.cn/yiyao/index.html" target="_blank" class="green">医药、保养</a> 
<a href="http://product.cn.china.cn/provide/list/1545.html" target="_blank">润滑油</a> 
<a href="http://product.cn.china.cn/provide/list/1537.html" target="_blank">石油燃料</a></h2> 
               
<li><a href="http://product.cn.china.cn/provide/list/1568.html" class="green" target="_blank">太阳能</a> | 
<a href="http://product.cn.china.cn/provide/list/1391.html" target="_blank">沥青</a> | 
<a href="http://product.cn.china.cn/provide/list/1583.html" class="green" target="_blank">节能设备</a> | 
<a href="http://product.cn.china.cn/provide/list/2015.html" target="_blank">医疗设备</a> | 
<a href="http://product.cn.china.cn/provide/list/1993.html" target="_blank">保健用品</a></li>  
            
<li><a href="http://product.cn.china.cn/provide/list/1563.html" target="_blank">煤制品</a> | 
<a href="http://product.cn.china.cn/provide/list/2008.html" target="_blank">医用材料</a> | 
<a href="http://product.cn.china.cn/provide/list/1989.html" target="_blank">原料药</a> | 
<a href="http://product.cn.china.cn/provide/list/1863.html" target="_blank">保健酒</a> | 
<span class="green"><a href="http://cn.china.cn/yejin/index.html" target="_blank" class="green">更多</a>&gt;&gt;</span></li>
</ul>

<div class="clear"></div>
<h1 style="border-bottom:1px dashed #9F6060;"><label><img src="./res/sign15.gif" width="35" height="22" align="absmiddle" class="titImg"><span class="red5">商业服务</span></label>
<a href="http://my.cn.china.cn/admin.php?op=SellInfoPublishShow" target="_blank"><img src="./res/btn4.gif" width="83" height="22"></a><div class="clear"></div></h1>

<ol>
<h2><a href="http://cn.china.cn/shangwu/index.html" target="_blank">商务服务</a>
<a href="http://cn.china.cn/hezuo/index.html" class="red5" target="_blank">项目合作</a> 
<a href="http://product.cn.china.cn/provide/list/4366.html" target="_blank">商展、会议</a></h2>
                
<li><a href="http://product.cn.china.cn/provide/list/4334.html" class="red5" target="_blank">教育、培训</a> | 
<a href="http://product.cn.china.cn/provide/list/4296.html" target="_blank">创意设计</a> | 
<a href="http://product.cn.china.cn/provide/list/4328.html" target="_blank">招聘</a> | 
<a href="http://product.cn.china.cn/provide/list/4372.html" target="_blank">广告服务</a></li>
                
<li><a href="http://product.cn.china.cn/provide/list/3593.html" target="_blank">物流服务</a> | 
<a href="http://product.cn.china.cn/provide/list/4290.html" target="_blank">公关服务</a> | 
<a href="http://product.cn.china.cn/provide/list/4356.html" target="_blank">咨询、策划</a>| 
<span class="red5"><a href="http://cn.china.cn/shangwu/index.html" class="red5" target="_blank">更多</a>&gt;&gt;</span></li>
</ol>

<ol>
<h2><a href="http://cn.china.cn/daili/index.html" target="_blank">代理</a> 
<a href="http://product.cn.china.cn/provide/list/2991.html" target="_blank">服饰代理</a> 
<a href="http://product.cn.china.cn/provide/list/3966.html" target="_blank">汽摩及配件代理</a> </h2>
                
<li><a href="http://product.cn.china.cn/provide/list/625.html" target="_blank">电工电气代理</a> | 
<a href="http://product.cn.china.cn/provide/list/1964.html" class="red5" target="_blank">食品饮料代理</a> | 
<a href="http://product.cn.china.cn/provide/list/996.html" target="_blank">化工原料代理</a></li>
                
<li><a href="http://product.cn.china.cn/provide/list/5201.html" target="_blank">家居代理</a> | 
<a href="http://product.cn.china.cn/provide/list/1534.html" target="_blank">装饰建材代理</a> | 
<a href="http://product.cn.china.cn/provide/list/2055.html" target="_blank">保健品代理</a> | 
<span class="red5"><a href="http://cn.china.cn/daili/index.html" class="red5" target="_blank">更多</a>&gt;&gt;</span></li>
</ol>

<ul>
<h2><a href="http://cn.china.cn/jiagong/index.html" target="_blank">加工</a> 
<a href="http://product.cn.china.cn/provide/list/2185.html" target="_blank">电子加工</a> 
<a href="http://product.cn.china.cn/provide/list/2192.html" target="_blank">金属加工</a> 
<a href="http://product.cn.china.cn/provide/list/2203.html" target="_blank">纺织加工</a> </h2>
                
<li><a href="http://product.cn.china.cn/provide/list/2090.html" class="red5" target="_blank">商业印刷</a> |
<a href="http://product.cn.china.cn/provide/list/2166.html">玩具加工</a> | 
<a href="http://product.cn.china.cn/provide/list/1087.html" target="_blank">塑料加工</a> | 
<a href="http://product.cn.china.cn/provide/list/1144.html" target="_blank">橡胶加工</a></li>
                
<li><a href="http://product.cn.china.cn/provide/list/2182.html" target="_blank">喷涂加工</a> | 
<a href="http://product.cn.china.cn/provide/list/2156.html" target="_blank">机械零部件加工</a> | 
<a href="http://product.cn.china.cn/provide/list/2178.html" target="_blank">五金加工</a> | 
<span class="red5"><a href="http://cn.china.cn/jiagong/index.html" class="red5" target="_blank">更多</a>&gt;&gt;</span></li>
</ul>

<ul>
<h2><a href="http://cn.china.cn/kucun/index.html" class="red5" target="_blank">库存</a> 
<a href="http://product.cn.china.cn/provide/list/4387.html" target="_blank">库存五金、工具</a> 
<a href="http://product.cn.china.cn/provide/list/3183.html" target="_blank">库存设备</a> 
</h2>

<li><a href="http://product.cn.china.cn/provide/list/1530.html" target="_blank">库存建材</a> | 
<a href="http://product.cn.china.cn/provide/list/4388.html" class="red5" target="_blank">库存电子元器件</a> | 
<a href="http://product.cn.china.cn/provide/list/2619.html" target="_blank">库存皮革</a> | 
<a href="http://product.cn.china.cn/provide/list/4391.html" target="_blank">库存图书</a> </li>
                
<li><a href="http://product.cn.china.cn/provide/list/2981.html" target="_blank">库存服饰</a> | 
<a href="http://product.cn.china.cn/provide/list/2618.html" target="_blank">库存纺织品</a> | 
<a href="http://product.cn.china.cn/provide/list/3357.html" target="_blank">库存化学品</a> |  
<span class="red5"><a href="http://cn.china.cn/kucun/index.html" class="red5" target="_blank">更多</a>&gt;&gt;</span></li>
</ul>

<div class="clear"></div>
<h1 style="border-bottom:1px dashed #9F6060;"><label><img src="./res/product0211.jpg" width="35" height="22" align="absmiddle" class="titImg"><span class="red5">热门产品搜索</span></label>
<a href="http://my.cn.china.cn/admin.php?op=SellInfoPublishShow" target="_blank"><img src="./res/btn4.gif" width="83" height="22"></a><div class="clear"></div></h1>

<ol>
<h2><a href="http://cn.china.cn/yinshua/youmo/index.html" target="_blank">油墨</a> 
<a href="http://cn.china.cn/nongye/nongzuowu/index.html" class="red5" target="_blank">农作物</a> 
<a href="http://cn.china.cn/yejinkuangchan/yousejinshu/index.html" class="red5" target="_blank">有色金属</a> 
<a href="http://cn.china.cn/yundongxiuxianhangyechanpinku/jixianyundong/index.html" target="_blank">极限运动</a></h2>
   
<li><a href="http://cn.china.cn/yejinkuangchan/xitujinshu/index.html" class="red5" target="_blank">稀土金属</a>  | 
<a href="http://cn.china.cn/yejinkuangchan/gangcai/index.html" target="_blank">钢材</a>  | 
<a href="http://cn.china.cn/zhaominghangyechanpinku/qitifangdiandeng/index.html" target="_blank">气体放电灯</a>  | 
<a href="http://cn.china.cn/yundongxiuxianhangyechanpinku/chongwuyongpin/index.html" target="_blank">宠物用品</a></li>
 
<li><a href="http://cn.china.cn/nongye/shucai/index.html" class="red5" target="_blank">蔬菜</a> | 
<a href="http://cn.china.cn/yinshua/fangweijishuchanpin/index.html" target="_blank">防伪技术产品</a> | 
<a href="http://cn.china.cn/baozhuang/baozhuangxiangmu/index.html" class="red5" target="_blank">包装辅料</a> | 
<a href="http://cn.china.cn/yejinkuangchan/kuangwuzhipin/index.html" target="_blank">矿物制品</a> </li>
</ol>

<ol>
<h2><a href="http://cn.china.cn/yinshua/yinqianchulishebei/index.html" class="red5" target="_blank">印前处理设备</a>    
<a href="http://cn.china.cn/zhaominghangyechanpinku/shiwaizhaomingdengju/index.html" target="_blank">室外照明灯具</a></h2>
               
<li><a href="http://cn.china.cn/diannaoruanjian/shumachanpin/index.html" class="red5" target="_blank">数码产品</a> | 
<a href="http://cn.china.cn/zhaominghangyechanpinku/zhuanyongdengju/index.html" class="red5" target="_blank">专用灯具</a> | 
<a href="http://cn.china.cn/yejinkuangchan/zhuzaojirechulishebei/%20index.html" target="_blank">铸造及热处理设备</a> | 
<a href="http://cn.china.cn/nongye/shuichanpin/index.html" target="_blank">水产品</a></li>
    
<li><a href="http://cn.china.cn/yundongxiuxian/qipai/index.html" class="red5" target="_blank">棋牌</a> | 
<a href="http://cn.china.cn/yinshua/fangzhileiyinshua/index.html" target="_blank">纺织类印刷</a> | 
<a href="http://cn.china.cn/yundongxiuxian/shuishangyundong/index.html" target="_blank">水上运动用品</a> | 
<a href="http://cn.china.cn/yundongxiuxian/chuidiaoyongpin/index.html" class="red5" target="_blank">垂钓用品</a> 
</li></ol>

<ul>
<h2><a href="http://cn.china.cn/yundongxiuxianhangyechanpinku/huwaiyongpin/index.html" class="red5" target="_blank">户外用品</a> 
<a href="http://cn.china.cn/zhaoming/lengguangyuan/index.html" target="_blank">冷光源</a>
<a href="http://cn.china.cn/yundongxiuxian/tiyuyundongpeitao/index.html" class="red5" target="_blank">体育运动配套产品</a> </h2>
                
<li><a href="http://cn.china.cn/fuzhuang/nvshangzhuang-1/index.html" target="_blank">女上装</a> |
<a href="http://cn.china.cn/yinshua/suliaoleiyinshuatj/index.html" target="_blank">塑料类印刷</a> | 
<a href="http://cn.china.cn/nongye/zhiwu/index.html" class="red5" target="_blank">植物</a> | 
<a href="http://cn.china.cn/yejinkuangchan/cixingcailiao/index.html" target="_blank">磁性材料</a></li>

<li><a href="http://cn.china.cn/yundongxiuxianhangyechanpinku/jiudianyongpin/index.html" target="_blank">酒店用品</a> | 
<a href="http://cn.china.cn/yinshua/zhileiyinshuatj/index.html" target="_blank">纸类印刷</a> | 
<a href="http://cn.china.cn/fangzhipige/gongjuxiang/index.html" class="red5" target="_blank">工具箱</a> | 
<a href="http://cn.china.cn/zhaoming/baichideng/index.html" target="_blank">白炽灯</a></li> 
</ul>

<ul>
<h2><a href="http://product.cn.china.cn/kw/1176.html" target="_blank">家用电器</a> 
<a href="http://product.cn.china.cn/kw/5029.html" class="red5" target="_blank">环保</a>
<a href="http://product.cn.china.cn/kw/4396.html" target="_blank">照明工业</a> 
<a href="http://product.cn.china.cn/kw/1590.html" class="red5" target="_blank">农业</a> </h2>
                
<li><a href="http://cn.china.cn/yundongxiuxian/gaoerfuyongpin/index.html" target="_blank">高尔夫用品</a> | 
<a href="http://cn.china.cn/fuzhuang/nanshishangzhuang/index.html" target="_blank">男上装</a> |  
<a href="http://cn.china.cn/jiajuyongpin/chaju/index.html" class="red5" target="_blank">茶具</a> | 
<a href="http://product.cn.china.cn/kw/4759.html" target="_blank">五金工具</a></li>
                
<li><a href="http://cn.china.cn/yejinkuangchan/jinshufenmo/index.html" target="_blank">金属粉末</a> | 
<a href="http://cn.china.cn/yundongxiuxianhangyechanpinku/jianshenqicai/index.html" class="red5" target="_blank">健身器材</a> | 
<a href="http://cn.china.cn/zhaoming/dengjupeifujiantj/index.html" target="_blank">灯具配附件</a> | 
<a href="http://cn.china.cn/fuzhuang/nanshineiyi/index.html" target="_blank">男士内衣</a></li>
</ul>
<div class="clear"></div>
</div>            
</div>
<!--行业市场 end-->

</div>
<div class="clear"></div>
</div>
