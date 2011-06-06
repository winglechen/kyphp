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
<style type="text/css">.inputlabelok{background:url(./res/img/chkok.gif) no-repeat 0px 0px; padding:2px 0 2px 24px; background-color:#F6F6F6;}.inputlabel{background:transparent; padding:2px 0 2px 24px;}</style>



<div class="operationPage">
  <?php include "admin_nav.php"; ?>
  <div class="operationArea">
	<?php include "admin_menu.php"; ?>

	 	 	 	 
				 
				 
				 <div class="right">
  <form name="publishForm" id="publishForm" method="post" action="index.php?p=www/member/product_add_done">
        <div class="postTips"><span>提示：</span>发布供应信息，让客户快速找到您。</div>
    <div class="formblock">
      <div class="formheader">
        <div class="headerTitle">基本信息</div>
      </div>
      
       <div class="formline">
       <div class="formlabel"><span class="inputlabelok"></span>产品名称：<span>*</span></div>
       <div class="formcontent">
       <input name="productName" id="productName" value="" type="text" class="input220" onblur="doOnBlur()">
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
echo Config::getTree('category','option',null,0);
?>	           
            </select>
            <select name="category2" onfocus="checkInput(this);" nextStep="category3"  dataUrl="index.php?c=conf&t=category&pid=" messageSpan="cat_err"  id="category2" size="8" style="width: 140px;height: 150px;" >
            </select>
            <select name="category3" onfocus="checkInput(this);" messageSpan="cat_err"  id="category3" size="8" style="width: 140px;height: 150px; " >
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
    <input name="offerSubject" id="offerSubject" value="" type="text" class="input220">
    <span id="offerSubject_err"></span>
    <div class="note">限50字以内，请务必填写准确，便于客户迅速找到您。<br>
      建议信息标题在标识产品分类的同时增加产品的具体信息，如型号、主要参数、行业用名。</div>
  </div>
      </div>
      
      <div class="formline">
      <div class="formlabel"><span id="lbl_offerKeyword"></span>关键词：</div>
	   <div class="formcontent">
       	<input id="keyword" name="keyword" value="" type="text" class="input220">
        <div class="note">为了让买家更精确的找到您，请填写产品名称的核心词、通称或别称。</div>
	   </div>
    </div>
      
      
      <!--详细信息-->
      <div class="formline">
        <div class="formlabel"><span id="lbl_offerDetail">&nbsp;</span>详细说明：<span>*</span></div>
        <div class="formcontent">
		  <textarea cols="80" id="offerDetailHidden" name="offerDetailHidden" rows="10" style="visibility: hidden; display: none; ">		  </textarea><span id="cke_offerDetailHidden" onmousedown="return false;" class="cke_skin_kama" dir="ltr" title="" lang="zh-cn" tabindex="0"><span class="cke_browser_webkit"><span class="cke_wrapper cke_ltr"><table class="cke_editor" border="0" cellspacing="0" cellpadding="0"><tbody><tr style="-webkit-user-select: none; "><td id="cke_top_offerDetailHidden" class="cke_top"><div class="cke_toolbox"><span id="cke_3" class="cke_toolbar"><span class="cke_toolbar_start"></span><span class="cke_toolgroup"><span class="cke_button"><a id="cke_4" class="cke_off cke_button_newpage" href="javascript:void('新建')" title="新建" tabindex="-1" hidefocus="true" onkeydown="return CKEDITOR.ui.button._.keydown(0, event);" onfocus="return CKEDITOR.ui.button._.focus(0, event);" onclick="CKEDITOR.tools.callFunction(3, this); return false;"><span class="cke_icon"></span><span class="cke_label">新建</span></a></span><span class="cke_button"><a id="cke_5" class="cke_off cke_button_preview" href="javascript:void('预览')" title="预览" tabindex="-1" hidefocus="true" onkeydown="return CKEDITOR.ui.button._.keydown(1, event);" onfocus="return CKEDITOR.ui.button._.focus(1, event);" onclick="CKEDITOR.tools.callFunction(4, this); return false;"><span class="cke_icon"></span><span class="cke_label">预览</span></a></span></span><span class="cke_separator"></span><span class="cke_toolgroup"><span class="cke_button"><a id="cke_6" class="cke_off cke_button_cut" href="javascript:void('剪切')" title="剪切" tabindex="-1" hidefocus="true" onkeydown="return CKEDITOR.ui.button._.keydown(2, event);" onfocus="return CKEDITOR.ui.button._.focus(2, event);" onclick="CKEDITOR.tools.callFunction(5, this); return false;"><span class="cke_icon"></span><span class="cke_label">剪切</span></a></span><span class="cke_button"><a id="cke_7" class="cke_off cke_button_copy" href="javascript:void('复制')" title="复制" tabindex="-1" hidefocus="true" onkeydown="return CKEDITOR.ui.button._.keydown(3, event);" onfocus="return CKEDITOR.ui.button._.focus(3, event);" onclick="CKEDITOR.tools.callFunction(6, this); return false;"><span class="cke_icon"></span><span class="cke_label">复制</span></a></span><span class="cke_button"><a id="cke_8" class="cke_off cke_button_paste" href="javascript:void('粘贴')" title="粘贴" tabindex="-1" hidefocus="true" onkeydown="return CKEDITOR.ui.button._.keydown(4, event);" onfocus="return CKEDITOR.ui.button._.focus(4, event);" onclick="CKEDITOR.tools.callFunction(7, this); return false;"><span class="cke_icon"></span><span class="cke_label">粘贴</span></a></span></span><span class="cke_separator"></span><span class="cke_toolgroup"><span class="cke_button"><a id="cke_9" class="cke_button_undo cke_disabled" href="javascript:void('撤消')" title="撤消" tabindex="-1" hidefocus="true" onkeydown="return CKEDITOR.ui.button._.keydown(5, event);" onfocus="return CKEDITOR.ui.button._.focus(5, event);" onclick="CKEDITOR.tools.callFunction(8, this); return false;"><span class="cke_icon"></span><span class="cke_label">撤消<span class="cke_accessibility">, 不可用</span></span></a></span><span class="cke_button"><a id="cke_10" class="cke_button_redo cke_disabled" href="javascript:void('重做')" title="重做" tabindex="-1" hidefocus="true" onkeydown="return CKEDITOR.ui.button._.keydown(6, event);" onfocus="return CKEDITOR.ui.button._.focus(6, event);" onclick="CKEDITOR.tools.callFunction(9, this); return false;"><span class="cke_icon"></span><span class="cke_label">重做<span class="cke_accessibility">, 不可用</span></span></a></span></span><span class="cke_separator"></span><span class="cke_toolgroup"><span class="cke_button"><a id="cke_11" class="cke_off cke_button_selectAll" href="javascript:void('全选')" title="全选" tabindex="-1" hidefocus="true" onkeydown="return CKEDITOR.ui.button._.keydown(7, event);" onfocus="return CKEDITOR.ui.button._.focus(7, event);" onclick="CKEDITOR.tools.callFunction(10, this); return false;"><span class="cke_icon"></span><span class="cke_label">全选</span></a></span><span class="cke_button"><a id="cke_12" class="cke_off cke_button_removeFormat" href="javascript:void('清除格式')" title="清除格式" tabindex="-1" hidefocus="true" onkeydown="return CKEDITOR.ui.button._.keydown(8, event);" onfocus="return CKEDITOR.ui.button._.focus(8, event);" onclick="CKEDITOR.tools.callFunction(11, this); return false;"><span class="cke_icon"></span><span class="cke_label">清除格式</span></a></span></span><span class="cke_separator"></span><span class="cke_toolgroup"><span class="cke_button"><a id="cke_13" class="cke_off cke_button_bold" href="javascript:void('加粗')" title="加粗" tabindex="-1" hidefocus="true" onkeydown="return CKEDITOR.ui.button._.keydown(9, event);" onfocus="return CKEDITOR.ui.button._.focus(9, event);" onclick="CKEDITOR.tools.callFunction(12, this); return false;"><span class="cke_icon"></span><span class="cke_label">加粗</span></a></span><span class="cke_button"><a id="cke_14" class="cke_off cke_button_italic" href="javascript:void('倾斜')" title="倾斜" tabindex="-1" hidefocus="true" onkeydown="return CKEDITOR.ui.button._.keydown(10, event);" onfocus="return CKEDITOR.ui.button._.focus(10, event);" onclick="CKEDITOR.tools.callFunction(13, this); return false;"><span class="cke_icon"></span><span class="cke_label">倾斜</span></a></span><span class="cke_button"><a id="cke_15" class="cke_off cke_button_underline" href="javascript:void('下划线')" title="下划线" tabindex="-1" hidefocus="true" onkeydown="return CKEDITOR.ui.button._.keydown(11, event);" onfocus="return CKEDITOR.ui.button._.focus(11, event);" onclick="CKEDITOR.tools.callFunction(14, this); return false;"><span class="cke_icon"></span><span class="cke_label">下划线</span></a></span><span class="cke_button"><a id="cke_16" class="cke_off cke_button_strike" href="javascript:void('删除线')" title="删除线" tabindex="-1" hidefocus="true" onkeydown="return CKEDITOR.ui.button._.keydown(12, event);" onfocus="return CKEDITOR.ui.button._.focus(12, event);" onclick="CKEDITOR.tools.callFunction(15, this); return false;"><span class="cke_icon"></span><span class="cke_label">删除线</span></a></span></span><span class="cke_separator"></span><span class="cke_toolgroup"><span class="cke_button"><a id="cke_17" class="cke_off cke_button_subscript" href="javascript:void('下标')" title="下标" tabindex="-1" hidefocus="true" onkeydown="return CKEDITOR.ui.button._.keydown(13, event);" onfocus="return CKEDITOR.ui.button._.focus(13, event);" onclick="CKEDITOR.tools.callFunction(16, this); return false;"><span class="cke_icon"></span><span class="cke_label">下标</span></a></span><span class="cke_button"><a id="cke_18" class="cke_off cke_button_superscript" href="javascript:void('上标')" title="上标" tabindex="-1" hidefocus="true" onkeydown="return CKEDITOR.ui.button._.keydown(14, event);" onfocus="return CKEDITOR.ui.button._.focus(14, event);" onclick="CKEDITOR.tools.callFunction(17, this); return false;"><span class="cke_icon"></span><span class="cke_label">上标</span></a></span></span><span class="cke_separator"></span><span class="cke_toolgroup"><span class="cke_button"><a id="cke_19" class="cke_off cke_button_link" href="javascript:void('插入/编辑超链接')" title="插入/编辑超链接" tabindex="-1" hidefocus="true" onkeydown="return CKEDITOR.ui.button._.keydown(15, event);" onfocus="return CKEDITOR.ui.button._.focus(15, event);" onclick="CKEDITOR.tools.callFunction(18, this); return false;"><span class="cke_icon"></span><span class="cke_label">插入/编辑超链接</span></a></span><span class="cke_button"><a id="cke_20" class="cke_off cke_button_specialchar" href="javascript:void('插入特殊符号')" title="插入特殊符号" tabindex="-1" hidefocus="true" onkeydown="return CKEDITOR.ui.button._.keydown(16, event);" onfocus="return CKEDITOR.ui.button._.focus(16, event);" onclick="CKEDITOR.tools.callFunction(19, this); return false;"><span class="cke_icon"></span><span class="cke_label">插入特殊符号</span></a></span></span><span class="cke_separator"></span><span class="cke_toolgroup"><span class="cke_button"><a id="cke_21" class="cke_off cke_button_textcolor" href="javascript:void('文本颜色')" title="文本颜色" tabindex="-1" hidefocus="true" onkeydown="return CKEDITOR.ui.button._.keydown(17, event);" onfocus="return CKEDITOR.ui.button._.focus(17, event);" onclick="CKEDITOR.tools.callFunction(20, this); return false;"><span class="cke_icon"></span><span class="cke_label">文本颜色</span><span class="cke_buttonarrow"></span></a></span></span><span class="cke_separator"></span><span class="cke_toolgroup"><span class="cke_button"><a id="cke_22" class="cke_off cke_button_maximize" href="javascript:void('全屏')" title="全屏" tabindex="-1" hidefocus="true" onkeydown="return CKEDITOR.ui.button._.keydown(18, event);" onfocus="return CKEDITOR.ui.button._.focus(18, event);" onclick="CKEDITOR.tools.callFunction(21, this); return false;"><span class="cke_icon"></span><span class="cke_label">全屏</span></a></span></span><span class="cke_toolbar_end"></span></span><div class="cke_break"></div><span id="cke_24" class="cke_toolbar"><span class="cke_toolbar_start"></span><span class="cke_rcombo"><span id="cke_25" class="cke_styles cke_off"><span class="cke_label">样式</span><a hidefocus="true" title="样式" tabindex="-1" href="javascript:void('样式')" onkeydown="CKEDITOR.tools.callFunction( 23, event, this );" onclick="CKEDITOR.tools.callFunction(22, this); return false;"><span><span class="cke_accessibility">样式 </span><span id="cke_25_text" class="cke_text cke_inline_label">样式</span></span><span class="cke_openbutton"></span></a></span></span><span class="cke_rcombo"><span id="cke_26" class="cke_format cke_off"><span class="cke_label">格式</span><a hidefocus="true" title="格式" tabindex="-1" href="javascript:void('格式')" onkeydown="CKEDITOR.tools.callFunction( 25, event, this );" onclick="CKEDITOR.tools.callFunction(24, this); return false;"><span><span class="cke_accessibility">格式 </span><span id="cke_26_text" class="cke_text cke_inline_label">格式</span></span><span class="cke_openbutton"></span></a></span></span><span class="cke_rcombo"><span id="cke_27" class="cke_font cke_off"><span class="cke_label">字体</span><a hidefocus="true" title="字体" tabindex="-1" href="javascript:void('字体')" onkeydown="CKEDITOR.tools.callFunction( 27, event, this );" onclick="CKEDITOR.tools.callFunction(26, this); return false;"><span><span class="cke_accessibility">字体 </span><span id="cke_27_text" class="cke_text cke_inline_label">字体</span></span><span class="cke_openbutton"></span></a></span></span><span class="cke_rcombo"><span id="cke_28" class="cke_fontSize cke_off"><span class="cke_label">大小</span><a hidefocus="true" title="大小" tabindex="-1" href="javascript:void('大小')" onkeydown="CKEDITOR.tools.callFunction( 29, event, this );" onclick="CKEDITOR.tools.callFunction(28, this); return false;"><span><span class="cke_accessibility">文字大小 </span><span id="cke_28_text" class="cke_text cke_inline_label">大小</span></span><span class="cke_openbutton"></span></a></span></span><span class="cke_toolbar_end"></span></span></div><a id="cke_29" class="cke_toolbox_collapser" onclick="CKEDITOR.tools.callFunction(30)"></a></td></tr><tr><td id="cke_contents_offerDetailHidden" class="cke_contents" style="height:200px"><iframe style="width:100%;height:100%" frameborder="0" tabindex="-1" allowtransparency="true" src="javascript:void(%20(%20function()%7Bdocument.open()%3Bdocument.write(%20window.parent%5B%20%22_cke_htmlToLoad_offerDetailHidden%22%20%5D%20)%3Bdocument.close()%3Bwindow.parent%5B%20%22_cke_htmlToLoad_offerDetailHidden%22%20%5D%20%3D%20null%3B%7D)()%20)" title="富文本编辑器, offerDetailHidden" name="富文本编辑器, offerDetailHidden"></iframe></td></tr><tr style="-webkit-user-select: none; "><td id="cke_bottom_offerDetailHidden" class="cke_bottom"><div id="cke_path_offerDetailHidden" class="cke_path"><span class="cke_empty">&nbsp;</span></div><div class="cke_resizer" title="拖拽以改变尺寸" onmousedown="CKEDITOR.tools.callFunction(2, event)"></div></td></tr></tbody></table><style>.cke_skin_kama{visibility:hidden;}</style></span></span></span>
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
  <input type="hidden" name="picIndex" id="picIndex" value="0">
  <tbody><tr>
    <td width="109" id="tdpic01"><img name="uploadImage0" id="uploadImage0" src="./res/no_pic.gif" width="100" height="100"></td>
    <td height="35" valign="top">
    <table border="0" cellspacing="0" cellpadding="0">
      <tbody><tr>
        <td>
          <input id="imageToUpload0" type="file" name="imageToUpload0" size="30" style="font-size: 9pt" onchange="ajaxFileUpload0();">
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
echo Config::getOption('units','option');
?>                    
</select>
</td>
              </tr>
              <tr>
                <td align="right">产品单价：</td>
                <td><input name="productPrice" id="productPrice" type="text" class="input173px" value="">
                  元/<span id="priceUnit"> 单位 </span> <span id="productPrice_err"> </span></td>
              </tr>
              <tr>
                <td align="right">最小起订量：</td>
                <td><input name="minAmount" id="minAmount" type="text" class="input173px" value="">
                  <span id="minAmountUnit"> 单位 </span> <span id="minAmount_err"></span> </td>
              </tr>
              <tr>
                <td align="right">供货总量：</td>
                <td><input name="totalAmount" id="totalAmount" type="text" class="input173px" value="">
                  <span id="totalAmountUnit"> 单位 </span> <span id="totalAmount_err"></span> </td>
              </tr>
              <tr>
                <td align="right">发货期限：</td>
                <td>自买家付款之日起
                  <input name="deliverDate" id="deliverDate" type="text" value="" size="2">
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