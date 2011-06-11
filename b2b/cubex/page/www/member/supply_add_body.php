<style>
		  .tongzhi {
	padding-top: 0px;
	padding-right: 20px;
	padding-bottom: 0px;
	padding-left: 20px;		  
		  }
		  .tongzhi  li{
	padding:8px;
	border-bottom-style: solid;
	border-bottom-color: #CCCCCC;
	border-bottom-width: 1px;
		  }
			  .tongzhi li i {
			  color:#CCCCCC
		  
		  }	  
</style>

<script language="javascript" src="./res/validator.js"></script>
<script language="javascript" src="./editor/kindeditor-min.js"></script>
<style type="text/css">.inputlabelok{background:url(./res/img/chkok.gif) no-repeat 0px 0px; padding:2px 0 2px 24px; background-color:#F6F6F6;}.inputlabel{background:transparent; padding:2px 0 2px 24px;}</style>



<div class="operationPage">
  <?php include "admin_nav.php"; ?>
  <div class="operationArea">
	<?php include "admin_menu.php"; ?>

<?php
use Ky\Model\Supply;

if(isset($_GET['id'])){
   $form = Supply::detail($_GET['id']);  
   $form['detail'] = stripslashes($form['detail']);  
}else{
   $form = array(
        'productName' => '',
        'detail'      => '',
        'expire'      => 0,
        'pic'         => '',
        'measureUnit' => '',
        'productPrice'            => '',
        'minAmount'            => '',
        'totalAmount'            => '',
        'deliverDate'            => '',
        'brief'            => '',
        'keyword'            => '',
        'title'            => '',
        
        'category1'    => 0,
        'category2'    => 0,
        'category3'    => 0,
        'province'     => '',
        'city'         => '',
   );    
}

?>

	 	 	 	 
				 
				 
				 <div class="right">
  <form name="publishForm" id="publishForm" method="post" action="index.php?p=www/member/product_add_done"  enctype="multipart/form-data" >
	<input type="hidden" name="corpid" value="<?php echo $_SESSION['id']; ?>" />
	<input type="hidden" name="corpname" value="<?php echo $_SESSION['corpname']; ?>" />
	<input type="hidden" name="province" value="<?php echo $_SESSION['province']; ?>" />
	<input type="hidden" name="city" value="<?php echo $_SESSION['city']; ?>" />
<?php
    if(isset($_GET['id'])){
        echo '<input type="hidden" name="id" value="'.$_GET['id'].'" />';    
    }
?>
        <div class="postTips"><span>提示：</span>发布供应信息，让客户快速找到您。</div>
    <div class="formblock">
      <div class="formheader">
        <div class="headerTitle">基本信息</div>
      </div>
      
       <div class="formline">
       <div class="formlabel"><span class="inputlabelok"></span>产品名称：<span>*</span></div>
       <div class="formcontent">
       <input name="productName" id="productName" value="<?php echo $form['productName']; ?>" type="text" class="input220" >
       <span id="oproductName_err"></span>
       <div class="note">产品名称中请勿出现规格、型号、品牌等内容.</div>
         </div>
        </div>


      <!--行业选择-->
      
      <style type="text/css">
#id_info {
	margin: 0pt;
	padding: 4px;
}
#inCcontent {
	border: 1px solid rgb(204, 204, 204);
	padding: 4px;
	overflow:auto;
	width: 430px;
	height: 200px;
	clear: both;
	font-size: 14px;
	font-weight: bold;
}
#inCcontent #industrylist {
	margin: 0pt;
	line-height: 200%;
}
#industrylist label {
	font-size: 12px;
	line-height: 200%;
	display:block;
	cursor: pointer;
}
#indRecommend {
	padding: 4px;
	clear: both;
	font-size: 12px;
	font-weight: bold;
}
</style>

      <div class="formline">
        <div class="formlabel"><span id="lbl_fullCategory">&nbsp;</span>产品行业：<span>*</span></div>                
        <div class="formcontent">
             <div align="center" id="id_info" style="display:none">以下是根据您填写的产品名称<span id="info_name" style="color:red"></span>推荐给你的行业类别</div>                            
            <div id="inSelect" style="display:&#39;&#39;">
            <select name="category1" onfocus="checkInput(this);" nextStep="category2" next="category2" dataUrl="index.php?c=conf&t=category&pid=" messageSpan="cat_err" id="category1" size="8" style="width: 140px;height: 150px;" >
<?php
use Ky\Model\Config;
echo Config::getTree('category','option',$form['category1'],0);
?>	           
            </select>
            <select name="category2" onfocus="checkInput(this);" nextStep="category3"  dataUrl="index.php?c=conf&t=category&pid=" messageSpan="cat_err"  id="category2" size="8" style="width: 140px;height: 150px;" >
<?php
if(!empty($form['category1']))
    echo Config::getTree('category','option',$form['category2'],$form['category1']);
?>          
            </select>
            <select name="category3" onfocus="checkInput(this);" messageSpan="cat_err"  id="category3" size="8" style="width: 140px;height: 150px; " >
<?php
if(!empty($form['category1']) && !empty($form['category2']))
    echo Config::getTree('category','option',$form['category3'],$form['category2']);
?>            
             </select>
            </div>
            <br />
            <span id="cat_err"></span>
         </div>
      </div>
      <!--行业选择 end-->
<div class="formline">
  <div class="formlabel"><span id="lbl_offerSubject">&nbsp;</span>信息标题：<span>*</span></div>
  <div class="formcontent">
    <input name="title" id="title" value="<?php echo $form['title']; ?>" type="text" class="input220">
    <span id="offerSubject_err"></span>
    <div class="note">限50字以内，请务必填写准确，便于客户迅速找到您。<br>
      建议信息标题在标识产品分类的同时增加产品的具体信息，如型号、主要参数、行业用名。</div>
  </div>
      </div>
      
      <div class="formline">
      <div class="formlabel"><span id="lbl_offerKeyword"></span>关键词：</div>
	   <div class="formcontent">
       	<input id="keyword" name="keyword" value="<?php echo $form['keyword']; ?>" type="text" class="input220">
        <div class="note">为了让买家更精确的找到您，请填写产品名称的核心词、通称或别称。</div>
	   </div>
    </div>
      
      
      <!--详细信息-->
      <div class="formline">
        <div class="formlabel"><span id="lbl_offerDetail">&nbsp;</span>详细说明：<span>*</span></div>
        <div class="formcontent">
		  <textarea cols="120" id="detail" name="detail" rows="20"><?php echo $form['detail']; ?></textarea>
<script language="javascript">
KE.show({id : 'detail'});
</script>
          <span id="offerDetail_err"></span>
          <div class="note">字数限制在10个字5000个字之间．<br>
            但不要出现任何联系信息。如：电话、传真、手机、电子邮箱等。<br>
            i.详细说明应以中文提供仅针对当前产品的文字<br>
            ii.	建议将产品的主要特征与参数、型号等信息置于详细说明的开始位置 </div>
        </div>
      </div>
      <!--详细信息 end-->
      <div class="formline" id="expropTr" style=" display:none; ">
        <div class="formlabel">产品描述:</div>
        <div class="formcontent">
          <div id="loadIndicator" style="margin: 0px; padding: 0px; display: none;"><img src="./res/indicator.gif">正在加载产品描述……</div>
          <table id="expropTable" width="100%" cellspacing="5" cellpadding="0" border="0">
            <tbody>
            
                        </tbody>
          </table>
        </div>
      </div>

      <div class="formline">
        <div class="formlabel">上传图片：</div>
        <div class="formcontent"> 
<table cellspacing="0" cellpadding="0" width="100%" border="0">
  <tbody><tr>
    <td width="109" id="tdpic01">
<?php
    if(!empty($form['pic'])){
        echo '<img src="'.$form['pic'].'" width="100" height="100">';    
    }
?>
        
    </td>
    <td height="35" valign="top">
    <table border="0" cellspacing="0" cellpadding="0">
      <tbody><tr>
        <td>
          <input id="pic" type="file" name="pic" size="30" style="font-size: 9pt" >
        </td>
      </tr>
    </tbody></table>
    <table border="0" cellspacing="0" cellpadding="0">
      <tbody><tr>
        <td style="color:#FF0000"><span id="errorMsg"></span></td>
      </tr>
    </tbody></table>
    <table border="0" cellspacing="0" cellpadding="0">
      <tbody><tr>
        <td style="color:#FF00FF">说明：上传图片限500k以内jpg、png格式图片</td>
      </tr>
    </tbody></table>
    </td>
  </tr>
</tbody></table>


          <div class="note"> i.	图片比例为1：1时会让页面看起来更整洁。<br>
            ii.	大于300 X 300像素的产品图片有利于让访客更轻松方便的了解你的产品<br>
            iii.	保持全站风格统一的产品图片可以让访客对您的网站更加印象深刻 </div>
        </div>
      </div>
    </div>
    <div class="formblock">
      <div class="formheader">
        <div class="headerTitle">交易条件</div>
      </div>
      <div class="formline">
        <div class="formlabel">交易条件：</div>
        <div class="formcontent">
          <div class="prompt">明码标价的信息更受买家青睐，建议您填全交易条件，吸引买家。</div>
          <br>
          <table width="100%" cellspacing="5" cellpadding="0" border="0">
            <tbody>
              <tr>
                <td width="140" align="right">计量单位：</td>
                <td><select name="measureUnit" id="measureUnit">
<?php
echo Config::getOption('units','option',$form['measureUnit']);
?>                    
</select>
</td>
              </tr>
              <tr>
                <td align="right">产品单价：</td>
                <td><input name="productPrice" id="productPrice" type="text" class="input173px" value="<?php echo $form['productPrice']; ?>">
                  元/<span id="priceUnit"> 单位 </span> <span id="productPrice_err"> </span></td>
              </tr>
              <tr>
                <td align="right">最小起订量：</td>
                <td><input name="minAmount" id="minAmount" type="text" class="input173px" value="<?php echo $form['minAmount']; ?>">
                  <span id="minAmountUnit"> 单位 </span> <span id="minAmount_err"></span> </td>
              </tr>
              <tr>
                <td align="right">供货总量：</td>
                <td><input name="totalAmount" id="totalAmount" type="text" class="input173px" value="<?php echo $form['totalAmount']; ?>">
                  <span id="totalAmountUnit"> 单位 </span> <span id="totalAmount_err"></span> </td>
              </tr>
              <tr>
                <td align="right">发货期限：</td>
                <td>自买家付款之日起
                  <input name="deliverDate" id="deliverDate" type="text" value="<?php echo $form['deliverDate']; ?>" size="2">
                  天内发货</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div style="clear:both; font-size:0px; line-height:0px; height:0px; background-color:#FFFFFF"></div>
    
    
    <table align="center">
      <tbody><tr>
        <td align="center">
          <input type="submit" value="完成,发布!" class="bigbutton" >
        </td>
      </tr>
    </tbody></table>
  </form>
</div>
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
<div style="clear:both; font-size:0px; line-height:0px; height:0px; background-color:#FFFFFF"></div>

		<div style="clear:both; font-size:0px; line-height:0px; height:0px; background-color:#FFFFFF"></div>
	</div>
</div>
