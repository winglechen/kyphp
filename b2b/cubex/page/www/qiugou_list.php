<?php

include "header.php";
use Ky\Model\Qiugou;
use Ky\Model\Config;
use Ky\Core\Core\Db;
use Ky\Core\Core\Form;

if(isset($_GET['category1'])){
    $_POST['category1']  = $_GET['category1'];  
}else{
    $_POST['category1'] = null;
}

if(isset($_GET['category2'])){
    $_POST['category2']  = $_GET['category2'];  
}else{
    $_POST['category2'] = null;
}

if(isset($_GET['category3'])){
    $_POST['category3']  = $_GET['category3'];  
}else{
    $_POST['category3'] = null;
}

$category = Config::getOption('category','array',null,0);


Form::init();

//$_POST['checked'] = 1;

$condition = array(
    'productName' => 'like',
    'corpid'      => 'eq',
    'category1'   => 'eq',
    'category2'   => 'eq',
    'category3'   => 'eq',
    'checked'     => 'eq',
);
$page = array(
    'url'           => 'index.php?p=www/qiugou_list&page=',
    'curPage'       => $_POST['page'],
    'numPerPage'    => 10,
    'style'         => 'b2b',
);

$data = Qiugou::lists('*',$condition,$_POST,$page);


?>

<link href="./res/search.css" rel="stylesheet" type="text/css">



<div class="position">
<div class="jieguo">
共找到<span> <?php echo $data['conf']['nums']; ?> </span>条信息

</div>
     您所在的位置：<a href="http://cn.china.cn/">首页</a>
     &gt; <a href="index.php" target="_blank">求购信息</a>
           
    </div>

<div class="search_m">
<div class="left">
<!-- 筛选框  开始 >
<script language="javascript">
function combSearch(c,n){
	var url = location.protocol + '//' + location.host + location.pathname;
	var arg = location.search.substr(1).split('&');
	var f   = true;
	for (i=0;m=arg.length,i<m;i++){
		if ( arg[i].indexOf(n+"=")>-1 ){
			arg[i] = n+'=' + c;
			f = false;
			break;
		}
	}
	if ( f ){
		arg.push( n+'=' + c );
	}
	url += '?'+(arg+'').replace(/,/g,"&");
	window.open(url, "_blank",'');
}
</script>
<div class="xiangguan2"><span>您还可以找：</span><ul><li><a href="http://product.cn.china.cn/selling-leads/%B4%F7%B6%FB%CC%A8%CA%BD%BB%FA/" title="戴尔台式机" target="_blank"><b>戴尔台式机</b></a></li><li><a href="http://product.cn.china.cn/selling-leads/%CC%A8%CA%BD%BB%FA%C4%DA%B4%E6%CC%F5/" title="台式机内存条" target="_blank"><b>台式机内存条</b></a></li><li><a href="http://product.cn.china.cn/selling-leads/%CC%A8%CA%BD%BB%FA%C4%DA%B4%E6/" title="台式机内存" target="_blank"><b>台式机内存</b></a></li><li><a href="http://product.cn.china.cn/selling-leads/DELL%CC%A8%CA%BD%BB%FA/" title="DELL台式机" target="_blank"><b>DELL台式机</b></a></li><li><a href="http://product.cn.china.cn/selling-leads/%C1%AA%CF%EB%B5%E7%C4%D4%CC%A8%CA%BD%BB%FA/" title="联想电脑台式机" target="_blank"><b>联想电脑台式机</b></a></li></ul>
<div class="clear"></div>
</div>
<-- 筛选框  开始 >
<div class="sear_result">
<div class="sear_re_ti">筛选“<b>台式机</b>”搜索结果：</div>

<div class="sear_re_re">
<div class="leimu" id="leimu1"><h4>行业：</h4><ul><li><a href="http://product.cn.china.cn/selling-leads/%CC%A8%CA%BD%BB%FA-----239/">电脑软件</a><i>(966)</i></li><li><a href="http://product.cn.china.cn/selling-leads/%CC%A8%CA%BD%BB%FA-----2214/">安全防护</a><i>(29)</i></li><li><a href="http://product.cn.china.cn/selling-leads/%CC%A8%CA%BD%BB%FA-----231/">其他未分类</a><i>(28)</i></li><li><a href="http://product.cn.china.cn/selling-leads/%CC%A8%CA%BD%BB%FA-----1176/">家用电器</a><i>(12)</i></li><li><a href="http://product.cn.china.cn/selling-leads/%CC%A8%CA%BD%BB%FA-----2993/">机械及行业设备</a><i>(8)</i></li><li><a href="http://product.cn.china.cn/selling-leads/%CC%A8%CA%BD%BB%FA-----2381/">纸业</a><i>(6)</i></li><li><a href="http://product.cn.china.cn/selling-leads/%CC%A8%CA%BD%BB%FA-----1277/">建筑建材</a><i>(5)</i></li><li><a href="javascript:;" id="show" style="cursor:pointer">更多行业</a></li><li><a href="http://product.cn.china.cn/selling-leads/%CC%A8%CA%BD%BB%FA-----1/">办公文教</a><i>(5)</i></li><li><a href="http://product.cn.china.cn/selling-leads/%CC%A8%CA%BD%BB%FA-----3368/">仪器仪表</a><i>(4)</i></li><li><a href="http://product.cn.china.cn/selling-leads/%CC%A8%CA%BD%BB%FA-----4289/">商务服务</a><i>(4)</i></li><li><a href="http://product.cn.china.cn/selling-leads/%CC%A8%CA%BD%BB%FA-----5029/">环保</a><i>(3)</i></li><li><a href="http://product.cn.china.cn/selling-leads/%CC%A8%CA%BD%BB%FA-----372/">电工电气</a><i>(2)</i></li><li><a href="http://product.cn.china.cn/selling-leads/%CC%A8%CA%BD%BB%FA-----2442/">纺织皮革</a><i>(2)</i></li><li><a href="http://product.cn.china.cn/selling-leads/%CC%A8%CA%BD%BB%FA-----1970/">医药保养</a><i>(2)</i></li><li><a href="http://product.cn.china.cn/selling-leads/%CC%A8%CA%BD%BB%FA-----5055/">家居用品</a><i>(1)</i></li><li><a href="http://product.cn.china.cn/selling-leads/%CC%A8%CA%BD%BB%FA-----3967/">通讯产品</a><i>(1)</i></li><li><a href="http://product.cn.china.cn/selling-leads/%CC%A8%CA%BD%BB%FA-----3504/">交通运输</a><i>(1)</i></li><li><a href="http://product.cn.china.cn/selling-leads/%CC%A8%CA%BD%BB%FA-----1851/">食品饮料</a><i>(1)</i></li><li><a href="javascript:;" id="hidd1" style="cursor:pointer">精简模式</a></li><div class="clear"></div></ul><div class="clear"></div></div><div class="line"></div><div class="leimu" id="leimu2"><h4>省份：</h4><ul><li><a href="http://product.cn.china.cn/selling-leads/%CC%A8%CA%BD%BB%FA-20/">广东</a><i>(4534)</i></li><li><a href="http://product.cn.china.cn/selling-leads/%CC%A8%CA%BD%BB%FA-12/">浙江</a><i>(1549)</i></li><li><a href="http://product.cn.china.cn/selling-leads/%CC%A8%CA%BD%BB%FA-4/">上海</a><i>(1432)</i></li><li><a href="http://product.cn.china.cn/selling-leads/%CC%A8%CA%BD%BB%FA-1/">北京</a><i>(1359)</i></li><li><a href="http://product.cn.china.cn/selling-leads/%CC%A8%CA%BD%BB%FA-11/">江苏</a><i>(1220)</i></li><li><a href="http://product.cn.china.cn/selling-leads/%CC%A8%CA%BD%BB%FA-18/">湖北</a><i>(1018)</i></li><li><a href="http://product.cn.china.cn/selling-leads/%CC%A8%CA%BD%BB%FA-16/">山东</a><i>(528)</i></li><li><a href="javascript:;" id="show2" style="cursor:pointer">更多省份</a></li><li><a href="http://product.cn.china.cn/selling-leads/%CC%A8%CA%BD%BB%FA-17/">河南</a><i>(404)</i></li><li><a href="http://product.cn.china.cn/selling-leads/%CC%A8%CA%BD%BB%FA-24/">云南</a><i>(375)</i></li><li><a href="http://product.cn.china.cn/selling-leads/%CC%A8%CA%BD%BB%FA-5/">河北</a><i>(321)</i></li><li><a href="http://product.cn.china.cn/selling-leads/%CC%A8%CA%BD%BB%FA-13/">安徽</a><i>(267)</i></li><li><a href="http://product.cn.china.cn/selling-leads/%CC%A8%CA%BD%BB%FA-7/">辽宁</a><i>(224)</i></li><li><a href="http://product.cn.china.cn/selling-leads/%CC%A8%CA%BD%BB%FA-19/">湖南</a><i>(214)</i></li><li><a href="http://product.cn.china.cn/selling-leads/%CC%A8%CA%BD%BB%FA-2/">天津</a><i>(171)</i></li><li><a href="http://product.cn.china.cn/selling-leads/%CC%A8%CA%BD%BB%FA-14/">福建</a><i>(152)</i></li><li><a href="http://product.cn.china.cn/selling-leads/%CC%A8%CA%BD%BB%FA-25/">陕西</a><i>(142)</i></li><li><a href="http://product.cn.china.cn/selling-leads/%CC%A8%CA%BD%BB%FA-9/">黑龙江</a><i>(92)</i></li><li><a href="http://product.cn.china.cn/selling-leads/%CC%A8%CA%BD%BB%FA-22/">四川</a><i>(87)</i></li><li><a href="http://product.cn.china.cn/selling-leads/%CC%A8%CA%BD%BB%FA-8/">吉林</a><i>(36)</i></li><li><a href="http://product.cn.china.cn/selling-leads/%CC%A8%CA%BD%BB%FA-29/">广西</a><i>(27)</i></li><li><a href="http://product.cn.china.cn/selling-leads/%CC%A8%CA%BD%BB%FA-31/">新疆</a><i>(25)</i></li><li><a href="http://product.cn.china.cn/selling-leads/%CC%A8%CA%BD%BB%FA-3/">重庆</a><i>(23)</i></li><li><a href="http://product.cn.china.cn/selling-leads/%CC%A8%CA%BD%BB%FA-15/">江西</a><i>(17)</i></li><li><a href="http://product.cn.china.cn/selling-leads/%CC%A8%CA%BD%BB%FA-26/">甘肃</a><i>(14)</i></li><li><a href="http://product.cn.china.cn/selling-leads/%CC%A8%CA%BD%BB%FA-28/">内蒙古</a><i>(8)</i></li><li><a href="http://product.cn.china.cn/selling-leads/%CC%A8%CA%BD%BB%FA-21/">海南</a><i>(5)</i></li><li><a href="http://product.cn.china.cn/selling-leads/%CC%A8%CA%BD%BB%FA-6/">山西</a><i>(2)</i></li><li><a href="http://product.cn.china.cn/selling-leads/%CC%A8%CA%BD%BB%FA-33/">香港</a><i>(1)</i></li><li><a href="javascript:;" id="visib2" style="cursor:pointer">精简模式</a></li><div class="clear"></div></ul><div class="clear"></div></div><div class="line"></div><div class="leimu"><h4>经营模式：</h4><ul class="jing"><li><a href="http://product.cn.china.cn/selling-leads/%CC%A8%CA%BD%BB%FA--1/" rel="nofollow">生产型</a><i>(5213)</i></li><li><a href="http://product.cn.china.cn/selling-leads/%CC%A8%CA%BD%BB%FA--2/" rel="nofollow">贸易型</a><i>(1347)</i></li><li><a href="http://product.cn.china.cn/selling-leads/%CC%A8%CA%BD%BB%FA--3/" rel="nofollow">服务型</a><i>(123)</i></li><li><a href="http://product.cn.china.cn/selling-leads/%CC%A8%CA%BD%BB%FA--4/" rel="nofollow">政府或其他机构</a><i>(22)</i></li><li><a href="http://product.cn.china.cn/selling-leads/%CC%A8%CA%BD%BB%FA--5/" rel="nofollow">生产+贸易型</a><i>(200)</i></li><div class="clear"></div></ul><div class="clear"></div></div><div class="line"></div><div class="leimu" id="leimu3"><h4>材质：</h4><ul><li><a href="http://product.cn.china.cn/selling-leads/%CC%A8%CA%BD%BB%FA---%B2%BB%D0%E2%CC%FA/">不锈铁</a><i>(83)</i></li><li><a href="http://product.cn.china.cn/selling-leads/%CC%A8%CA%BD%BB%FA---%C2%C1%BA%CF%BD%F0/">铝合金</a><i>(75)</i></li><li><a href="http://product.cn.china.cn/selling-leads/%CC%A8%CA%BD%BB%FA---%BD%F5%C2%DA/">锦纶</a><i>(63)</i></li><li><a href="http://product.cn.china.cn/selling-leads/%CC%A8%CA%BD%BB%FA---%EE%D1/">钛</a><i>(30)</i></li><li><a href="http://product.cn.china.cn/selling-leads/%CC%A8%CA%BD%BB%FA---%C4%BE%D6%C6/">木制</a><i>(27)</i></li><li><a href="http://product.cn.china.cn/selling-leads/%CC%A8%CA%BD%BB%FA---%CB%DC%C1%CF/">塑料</a><i>(21)</i></li><li><a href="http://product.cn.china.cn/selling-leads/%CC%A8%CA%BD%BB%FA---%B2%A3%C1%A7%B8%D6/">玻璃钢</a><i>(18)</i></li><li><a href="javascript:;" id="show3" style="cursor:pointer">更多材质</a></li><li><a href="http://product.cn.china.cn/selling-leads/%CC%A8%CA%BD%BB%FA---%B2%BB%D0%E2%B8%D6/">不锈钢</a><i>(17)</i></li><li><a href="http://product.cn.china.cn/selling-leads/%CC%A8%CA%BD%BB%FA---pc/">pc</a><i>(14)</i></li><li><a href="http://product.cn.china.cn/selling-leads/%CC%A8%CA%BD%BB%FA---pe/">pe</a><i>(13)</i></li><li><a href="http://product.cn.china.cn/selling-leads/%CC%A8%CA%BD%BB%FA---%D0%BF%BA%CF%BD%F0/">锌合金</a><i>(13)</i></li><li><a href="http://product.cn.china.cn/selling-leads/%CC%A8%CA%BD%BB%FA---%CA%B5%C4%BE/">实木</a><i>(9)</i></li><li><a href="http://product.cn.china.cn/selling-leads/%CC%A8%CA%BD%BB%FA---301/">301</a><i>(8)</i></li><li><a href="http://product.cn.china.cn/selling-leads/%CC%A8%CA%BD%BB%FA---%CC%D8%B7%FA%C1%FA/">特氟龙</a><i>(8)</i></li><li><a href="http://product.cn.china.cn/selling-leads/%CC%A8%CA%BD%BB%FA---%CD%AD%BA%CF%BD%F0/">铜合金</a><i>(8)</i></li><li><a href="http://product.cn.china.cn/selling-leads/%CC%A8%CA%BD%BB%FA---%CF%F0%BD%BA/">橡胶</a><i>(8)</i></li><li><a href="http://product.cn.china.cn/selling-leads/%CC%A8%CA%BD%BB%FA---%CF%F0%C4%BE/">橡木</a><i>(8)</i></li><li><a href="http://product.cn.china.cn/selling-leads/%CC%A8%CA%BD%BB%FA---%CB%BF%B3%F1/">丝绸</a><i>(8)</i></li><li><a href="http://product.cn.china.cn/selling-leads/%CC%A8%CA%BD%BB%FA---%C2%C1%B2%AD/">铝箔</a><i>(7)</i></li><li><a href="http://product.cn.china.cn/selling-leads/%CC%A8%CA%BD%BB%FA---%D1%C7%C2%E9/">亚麻</a><i>(7)</i></li><li><a href="http://product.cn.china.cn/selling-leads/%CC%A8%CA%BD%BB%FA---pvg/">pvg</a><i>(7)</i></li><li><a href="http://product.cn.china.cn/selling-leads/%CC%A8%CA%BD%BB%FA---%C6%E1%C6%A4/">漆皮</a><i>(7)</i></li><li><a href="http://product.cn.china.cn/selling-leads/%CC%A8%CA%BD%BB%FA---%C4%CF%BA%AB%CB%BF/">南韩丝</a><i>(7)</i></li><li><a href="javascript:;" id="hidd3" style="cursor:pointer">精简模式</a></li><div class="clear"></div></ul><div class="clear"></div></div><div class="line"></div><div class="leimu" id="leimu4"><h4>规格：</h4><ul><li><a href="http://product.cn.china.cn/selling-leads/%CC%A8%CA%BD%BB%FA----%CB%FE%CA%BD/">塔式</a><i>(10770)</i></li><li><a href="http://product.cn.china.cn/selling-leads/%CC%A8%CA%BD%BB%FA----%CA%FA%BF%EE/">竖款</a><i>(312)</i></li><li><a href="http://product.cn.china.cn/selling-leads/%CC%A8%CA%BD%BB%FA----%B3%A8%BF%AA%CA%BD/">敞开式</a><i>(276)</i></li><li><a href="http://product.cn.china.cn/selling-leads/%CC%A8%CA%BD%BB%FA----%CF%E4%CA%BD/">箱式</a><i>(265)</i></li><li><a href="http://product.cn.china.cn/selling-leads/%CC%A8%CA%BD%BB%FA----%B5%E7%B4%C5%D5%F1%B6%AF%CA%BD/">电磁振动式</a><i>(167)</i></li><li><a href="http://product.cn.china.cn/selling-leads/%CC%A8%CA%BD%BB%FA----%B5%E3%B5%CE%CA%BD/">点滴式</a><i>(156)</i></li><div class="clear"></div></ul><div class="clear"></div></div></div>
</div>

<-- 筛选框  结束 -->
 
<div class="clear"></div>
<script>
function popWindow(url)
{
	var win = window.open(url,"preview","toolbar=no,directories=no,status=no,location=no,menubar=no,scrollbars=no,resizable=no,width=530,height=350");
    win.focus();
}
</script>

<div class="result">
<!--div class="fabuqiugou"><a href="http://my.cn.china.cn/admin.php?op=addBuyInfoAnonShow" rel="nofollow">没我想要的，点此<u>发布求购信息</u>，让供应商来找我！</a></div-->
<form id="batchLeaveMsgFrm" name="batchLeaveMsgFrm" action="" method="post">
<input type="hidden" name="leaveMsgType" id="leaveMsgType" value="4">


 <div class="res_top"><span class="pic">图片</span><span class="com_info">供应信息/公司</span><span class="num">
 <a href="" title="" rel="nofollow">		
 	 信用指数 </a></span><span class="link_msg">联系信息</span>
 <div class="clear"></div>
 </div>
   <div class="tiao3"></div>
		
<?php
$row = null;
for($i=0,$len=count($data['data']); $i<$len; $i++){
    $row = $data['data'][$i];
?>

<div class="result_list ">
 <span class="kuang">
 <input name="ids[]" type="checkbox" value="1376812390" onclick="showBatchLeaveMsg(this, &#39;leaveMsg0&#39;)">
 </span>
 <div id="leaveMsg0" name="leaveMsg0" style="display:none" class="piliang">
 <input name="" type="button" onclick="javascript:return batchLeaveMsg(&#39;batchLeaveMsgFrm&#39;, &#39;leaveMsgType&#39;, &#39;&#39;);" class="liuyan">
 </div>
                    
 <table class="pic_cont" border="0" cellspacing="0"><tbody><tr><td>
   <a href="index.php?p=www/detail&id=<?php echo $row['id']; ?>" target="_blank"><img src="<?php echo $row['pic']; ?>" alt="供应肯辛通台式机电脑锁K64163" width="100" height="100"></a></td></tr>
 </tbody></table>
 <div class="res_cominfo">
 <h3><a href="index.php?p=www/detail&id=<?php echo $row['id']; ?>" target="_blank"><?php echo $row['productName']; ?></a><?php echo date('Y-m-d',$row['ts']); ?></h3>
 <p>              
  <?php echo $row['brief']; ?> 
<span class="com_name">
<div class="biao">
                               
                </div> 

<a title="信息发布者" href="index.php?p=www/com_detail&id=<?php echo $row['corpid']; ?>" target="_blank"><?php echo $row['corpname']; ?></a>

                           <?php echo $row['province'] . '  ' .$row['city'];  ?>   </span>
</div>
 <div class="zhishu">
                                <a href="" target="_blank" title="" rel="nofollow"> 
                <strong>183</strong></a> 
                                </div>
<div class="lian">

<div class="lianxitr"><a href="" rel="nofollow" target="_blank" title="点此向卖家了解更详尽信息，如：产品价格、规格型号、起订量、包装方式等。" class="chakan">点此询价</a></div>
</div>
  <div class="clear"></div>
</div>
  <div class="tiao3"></div>
 
<?php
}
?>		


 
				</form>
	</div>



<span class="piliudi"><a href="" onclick="" class="pi" rel="nofollow">批量留言</a>  <a href="javascript:clearAll()">清空全部选择</a> </span>
<div class="fabuqiugou quan "><a href="" rel="nofollow">没我想要的，点此<u>发布求购信息</u>，让供应商来找我！</a></div>

<!--div class="seoBar">
<a href="http://product.cn.china.cn/buying-leads/%CC%A8%CA%BD%BB%FA/" target="_blank">查看“<font color="red">台式机</font>”求购信息</a> | 
<a href="http://product.cn.china.cn/suppliers/%CC%A8%CA%BD%BB%FA/" target="_blank">查看“<font color="red">台式机</font>”公司信息</a> 
</div-->

<!--div class="xiangguan2 grayBorder"><span>相关搜索：</span><ul><li><a href="http://product.cn.china.cn/selling-leads/%B4%F7%B6%FB%CC%A8%CA%BD%BB%FA/" title="戴尔台式机" target="_blank">戴尔台式机</a></li><li><a href="http://product.cn.china.cn/selling-leads/%CC%A8%CA%BD%BB%FA%C4%DA%B4%E6%CC%F5/" title="台式机内存条" target="_blank">台式机内存条</a></li><li><a href="http://product.cn.china.cn/selling-leads/%CC%A8%CA%BD%BB%FA%C4%DA%B4%E6/" title="台式机内存" target="_blank">台式机内存</a></li><li><a href="http://product.cn.china.cn/selling-leads/DELL%CC%A8%CA%BD%BB%FA/" title="DELL台式机" target="_blank">DELL台式机</a></li><li><a href="http://product.cn.china.cn/selling-leads/%C1%AA%CF%EB%B5%E7%C4%D4%CC%A8%CA%BD%BB%FA/" title="联想电脑台式机" target="_blank">联想电脑台式机</a></li><li><a href="http://product.cn.china.cn/selling-leads/%C1%AA%CF%EB%CC%A8%CA%BD%BB%FA/" title="联想台式机" target="_blank">联想台式机</a></li><li><a href="http://product.cn.china.cn/selling-leads/%B1%CA%BC%C7%B1%BE%B5%E7%C4%D4/" title="笔记本电脑" target="_blank">笔记本电脑</a></li><li><a href="http://product.cn.china.cn/selling-leads/%D3%B2%C5%CC%CC%A8%CA%BD%BB%FA/" title="硬盘台式机" target="_blank">硬盘台式机</a></li><li><a href="http://product.cn.china.cn/selling-leads/%CC%A8%CA%BD%B5%E7%C4%D4/" title="台式电脑" target="_blank">台式电脑</a></li><li><a href="http://product.cn.china.cn/selling-leads/%B5%E7%C4%D4%CC%A8%CA%BD%BB%FA/" title="电脑台式机" target="_blank">电脑台式机</a></li></ul>
<div class="clear"></div>
</div-->



<div class="fanye" id="fanye">
<?php
echo $data['page'];
?>

<div class="clear"></div>
</div>

</div>
<div class="right">



<div class="guanggao"> 



<!-- 临时添加ad -->
</div>


<div class="guanggao2">

</div>






<div class="chazhao">
<strong>点击以下行业查找信息</strong>
<ul>
<?php
    foreach($category as $cat){
       echo '<li><a target="_blank" href="index.php?p=www/qiugou_list&category1='.$cat['id'].'">'.$cat['name'].'</a></li>';
    }
?>
</ul>
	<div class="clear"></div>
</div>

<!--div class="chazhao">
<strong>最新发布供应</strong>
<div class="NewEntitytiao grepbg">1. <a href="http://detail.cn.china.cn/provide/detail,1765587784.html" target="_blank">防爆对旋风机 对旋局..</a></div>
<div class="NewEntitytiao">2. <a href="http://detail.cn.china.cn/provide/detail,1765587817.html" target="_blank">广西玻璃钢化粪池|广..</a></div>
<div class="NewEntitytiao grepbg">3. <a href="http://detail.cn.china.cn/provide/detail,1765587759.html" target="_blank">特价供应正品高尔夫套..</a></div>
<div class="NewEntitytiao">4. <a href="http://detail.cn.china.cn/provide/detail,1765587753.html" target="_blank">山东五莲鲁兴石材巨石..</a></div>
<div class="NewEntitytiao grepbg">5. <a href="http://detail.cn.china.cn/provide/detail,1765587750.html" target="_blank">供应洗涤设备</a></div>
<div class="NewEntitytiao">6. <a href="http://detail.cn.china.cn/provide/detail,1765587717.html" target="_blank">供应海安物流公司|海..</a></div>
<div class="NewEntitytiao grepbg">7. <a href="http://detail.cn.china.cn/provide/detail,1765582300.html" target="_blank">青岛产立柱式EVA橡塑..</a></div>
<div class="NewEntitytiao">8. <a href="http://detail.cn.china.cn/provide/detail,1765587643.html" target="_blank">石材加工机械 异形石..</a></div>
<div class="NewEntitytiao grepbg">9. <a href="http://detail.cn.china.cn/provide/detail,1765578789.html" target="_blank">半自动接木机厂家直销</a></div>
<div>10. <a href="http://detail.cn.china.cn/provide/detail,1765578387.html" target="_blank">钢铁市场，钢材市场价..</a></div>
</div-->


<div style="margin-top:10px; text-align:center;">    
</div>

</div>
</div>
<div class="clear"></div>



  
 


<!-- friend link -->
   
<?php include "footer.php"; ?>