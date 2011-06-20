<?php
use Ky\Model\Product;
use Ky\Model\Company;

$form = Product::detail($_GET['id']);  
$form['detail'] = stripslashes($form['detail']);  

$company = Company::detail($form['corpid']);

?>


<link href="./res/indextopfoot.css" rel="stylesheet" type="text/css">
<link href="./res/product.css" rel="stylesheet" type="text/css">

<div class="subnav" id="google1">
	<ul class="snavlist clearfix">
			<li>您的位置：</li>
	   <li><a href="index.php" target="_blank">首页</a></li>				 
	   <li>&gt;</li> 
	   <li><b class="normal"><?php echo $form['productName']; ?></b></li>
  </ul>
</div>
<!--Top end--><script>

function popWindow(url)
{
	var win = window.open(url,"preview","toolbar=no,directories=no,status=no,location=no,menubar=no,scrollbars=no,resizable=no,width=530,height=350");
    win.focus();
}

</script>
<!--Left begin-->
<div class="w_960">
<div class="w960h44">
<h1 class="viptit">
	<strong class="keywords fl tl"><?php echo $form['productName']; ?></strong>
</h1>
<b class="vipinf fr">会员信息</b>
</div>
    <div class="viparea clearfix tl">
	     <div class="product fl">
		      <dl class="prolistinf clearfix">
			        <dt class="fl">
					      <div class="div_img" style="text-align:center;">
					      														      	<a href="<?php echo $form['pic']; ?>" target="_blank">
					      		<img src="<?php echo $form['pic']; ?>" width="120" height="96" alt="<?php echo $form['productName']; ?>" align="middle"></a></div>
					      <ul class="proconductioin top10">
						        <li><b class="normal"><?php echo $form['productName']; ?></b></li>
						  </ul>
					      
					
					</dt>
			        <dd class="fl">
					   <ul class="formpro">
					     <li><span>当 前 价:</span> <?php echo $form['productPrice']; ?></li>
							 <li><span>发 货 期:</span> <?php echo $form['deliverDate']; ?></li>
							 <li><span>最小起订:</span> <?php echo $form['minAmount']; ?></li>
							 <li><span>供货总量:</span> <?php echo $form['totalAmount']; ?></li>
							 <li><span>所 在 地:</span> <?php echo $form['province'] . ' ' .$form['city']; ?></li>																																												         
							 <!--li class="top15"><a href="http://cnvestar.cn.china.cn/op/MessageAnonPublishShow/infoId/1376812390/type/4/index.htm" target="_blank" rel="nofollow"><img src="./res/leavewords.gif" alt="点击此处给厂家留言询价，让厂家主动联系您！"></a><img src="./res/line.gif">
					         <a href="http://detail.cn.china.cn/provide/detail,1376812390.html#" onclick="show(&#39;534542959&#39;,&#39;1376812390&#39;,&#39;4&#39;);return false;"><img src="./res/qqtalk.gif" alt="点击此处添加厂家QQ好友，在线联系更便捷！"></a>
					         						         	</li-->
					   </ul>
					
					
					</dd>
					<div style="clear:both;"></div>
					
			  </dl>
								
			        
										</div>
			
				<div class="entervip fr">
		     <div class="sqtop"></div>
		     <div class="scontent">
		     	<div class="topbom20">
		     		        <img src="./res/member17.jpg">
	        	        </div>
	        
			     <ul class="companyinf">
				       <li><a href="http://cnvestar.cn.china.cn/" target="_blank" class="redb14"><?php echo $form['corpname']; ?></a></li>
				       <li><span>联系人：</span><?php echo $company['realman']; ?></li>
				       <li><span>经营模式：</span><?php echo $company['manageMode']; ?></li>				   				     
					   <li><span>公司地址：</span><?php echo $company['address']; ?></li>
				       <li class="top10"><a href="http://<?php echo $company['username']; ?>.haomingchina.com/" target="_blank" ><img src="./res/companysite.gif"></a>
				       	<a href="http://<?php echo $company['username']; ?>.haomingchina.com/" target="_blank" ><img src="./res/contact.gif"></a></li>
				 </ul>
			 
			 </div>
		     <div class="sqbom"></div>
		 
		 </div>
	
	</div>
	 <h3 class="conductcon top27 al"><img src="./res/linel.gif" class="line">产品详细说明</h3>
 	<div class="prolr clearfix">
         <div class="xq_jieshao fl al" id="google2">
            	        <h2 class="theme"><?php echo $form['productPrice']; ?></h2>
            			<?php echo $form['detail']; ?>	  	
          </div>
	</div>

<br /><br /><br />


 
<!--div class="hyclass">
  <div class="yetitle al">行业分类</div>
<div class="somelink al">
   <a href="http://product.cn.china.cn/kw/1.html" target="_blank">办公、文教</a>
   <a href="http://product.cn.china.cn/kw/239.html" target="_blank">电脑、软件</a>
   <a href="http://product.cn.china.cn/kw/372.html" target="_blank">电工电气</a>
   <a href="http://product.cn.china.cn/kw/1176.html" target="_blank">家用电器</a>
   <a href="http://product.cn.china.cn/kw/1277.html" target="_blank">建筑、建材</a>
   <a href="http://product.cn.china.cn/kw/1536.html" target="_blank">能源</a>
   <a href="http://product.cn.china.cn/kw/1590.html" target="_blank">农业</a>
   <a href="http://product.cn.china.cn/kw/1851.html" target="_blank">食品、饮料</a>
   <a href="http://product.cn.china.cn/kw/1970.html" target="_blank">医药、保养</a>
   <a href="http://product.cn.china.cn/kw/2056.html" target="_blank">印刷</a>
   <a href="http://product.cn.china.cn/kw/2149.html" target="_blank">加工</a>
   <a href="http://product.cn.china.cn/kw/2300.html" target="_blank">包装</a>
   <a href="http://product.cn.china.cn/kw/2214.html" target="_blank">安全、防护</a>
   <a href="http://product.cn.china.cn/kw/2381.html" target="_blank">纸业</a>
   <a href="http://product.cn.china.cn/kw/2442.html" target="_blank">纺织、皮革</a>
   <a href="http://product.cn.china.cn/kw/2623.html" target="_blank">服装</a>
   <a href="http://product.cn.china.cn/kw/2738.html" target="_blank">服饰</a>
   <a href="http://product.cn.china.cn/kw/2993.html" target="_blank">机械及行业设备</a>
   <a href="http://product.cn.china.cn/kw/3186.html" target="_blank">精细化学品</a>
   <a href="http://product.cn.china.cn/kw/3368.html" target="_blank">仪器仪表</a>
   <a href="http://product.cn.china.cn/kw/3504.html" target="_blank">交通运输</a>
   <a href="http://product.cn.china.cn/kw/3615.html" target="_blank">礼品、工艺品、饰品</a>
   <a href="http://product.cn.china.cn/kw/3816.html" target="_blank">汽摩及配件</a>
   <a href="http://product.cn.china.cn/kw/3967.html" target="_blank">通讯产品</a>
   <a href="http://product.cn.china.cn/kw/4058.html" target="_blank">玩具</a>
   <a href="http://product.cn.china.cn/kw/4157.html" target="_blank">冶金矿产</a>
   <a href="http://product.cn.china.cn/kw/4289.html" target="_blank">商务服务</a>
   <a href="http://product.cn.china.cn/kw/4378.html" target="_blank">二手设备转让</a>
   <a href="http://product.cn.china.cn/kw/4386.html" target="_blank">库存积压</a>
   <a href="http://product.cn.china.cn/kw/4396.html" target="_blank">照明工业</a>
   <a href="http://product.cn.china.cn/kw/4493.html" target="_blank">电子元器件</a>
   <a href="http://product.cn.china.cn/kw/4673.html" target="_blank">传媒</a>
   <a href="http://product.cn.china.cn/kw/4759.html" target="_blank">五金、工具</a>
   <a href="http://product.cn.china.cn/kw/5029.html" target="_blank">环保</a>
   <a href="http://product.cn.china.cn/kw/5055.html" target="_blank">家居用品</a>
   <a href="http://product.cn.china.cn/kw/5202.html" target="_blank">运动、休闲</a>
   <a href="http://product.cn.china.cn/kw/629.html" target="_blank">化工</a>
</div>
</div-->

