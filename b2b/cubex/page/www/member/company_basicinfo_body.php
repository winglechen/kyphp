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



<style type="text/css">.inputlabelok{background:url(/res/img/chkok.gif) no-repeat 0px 0px; padding:2px 0 2px 24px; background-color:#F6F6F6;}.inputlabel{background:transparent; padding:2px 0 2px 24px;}</style>






<div class="operationPage">
  <?php include "admin_nav.php"; ?>
  <div class="operationArea">
	<?php include "admin_menu.php"; ?>

	 <div class="right">

					<div class="postTips">(带 <span>*</span> 为必填项)</div>
<form id="corpInfoForm" name="corpInfoForm" action="" method="post">
		<!--基本信息-->
	<div class="formblock">
        <div class="formheader">
          <div class="headerTitle">基本信息(必填部分)</div>
        </div>
        <div class="formline">
          <div class="formlabel">公司名称：<span>*</span></div>
		  <div class="formcontent">
		   		 
				<input name="corpname" id="corpname" type="text" value="<?php echo $_SESSION['corpname']; ?>" style="width:221px;">
				<span id="corpname_err"></span>
			  	<div class="note">请填写贵公司的中文全称，如：北京浩天有限责任公司。</div>
					  </div>
        </div>
        <div class="formline">
          <div class="formlabel">企业类型：<span>*</span></div>
		  <div class="formcontent">
		    			     
            	   <select name="corptype" id="corptype">
		   </select>
		   <span id="corptype_err"></span>
						</div>
        </div> 
        <div class="formline">
          <div class="formlabel">公司简介：<span>*</span><br><span class="hui12">(50-1200 字)</span></div>
		  <div class="formcontent">
		  	<textarea name="corpintro" cols="60" rows="10" id="corpintro"><?php echo $_SESSION['corpintro']; ?></textarea>
            <span id="corpintro_err"></span>
            <div class="note">
				<ul>
					<li class="hui12">公司介绍必须为中文内容，请不要用英文填写。</li>
					<li>请提供贵司的成立历史、主营产品、品牌、服务……等优势；如果填写单纯的产品介绍，将有可能无法通过审核。 </li>
					<li>此处不要出现任何联系方式。如：电话、传真、手机、电子邮箱等。</li>
				</ul>
           </div>
		  </div>
		</div>
	</div>
	<!--基本信息-->
	<!--行业信息-->

 <div class="formblock">
      <div class="formline">
        <div class="formlabel">公司主营行业：<span>*</span></div>
        <div class="formcontent">
          <!-- 显示选择的行业 -->
          <span id="categories_err"></span>
          <div id="displayIndustryPaths">
          
           	           	           	<p id="276">电脑、软件&gt;&gt;笔记本电脑(<a href="javascript:void(0);" onclick="doDeleteIndustry(&quot;276&quot;)">删除</a>)</p>&nbsp;&nbsp;&nbsp;
	                                </div>
          <p>&nbsp;</p>
          <p>您最多可选择<font color="ff6600"><b>8</b></font>个行业。</p>
          <!--行业选择控件-->
          <script language="JavaScript" type="text/JavaScript" src="./res/prototype(1).js"></script>
<script language="JavaScript" type="text/JavaScript" src="./res/window.js"></script>
<script language="JavaScript" type="text/JavaScript" src="./res/application.js"></script>
<script language="JavaScript" type="text/JavaScript" src="./res/effects.js"></script>
<script language="JavaScript" type="text/JavaScript" src="./res/ajaxindustry.js"></script>
<link href="./res/popdiv.css" rel="stylesheet" type="text/css">


<select name="select" id="category1" size="8" style="width: 140px;height: 150px;" onchange="onChangeCategory1()"></select>
<select name="select" id="category2" size="8" style="width: 140px;height: 150px;" onchange="onChangeCategory2()"></select>
<select name="select" id="category3" size="8" style="width: 140px;height: 150px; " onchange="onChangeCategory3()"></select><br>

<div id="industryDiv" style="display:none"></div> 

<div style="clear:both; padding:4px; font-size:14px; font-weight:bold">您选择的行业类目是：<span id="fullCategory"></span></div>
<!--div class="prompt" style="margin-bottom: 10px;">
<table width="100%" cellspacing="5" cellpadding="0" border="0">
<tbody>
	    <tr>
      <td>行业查找</td>
        <td><input type="text" class="input173px" id="industryKW" name="industryKW">
        <input type="button" onclick="searchIndustry()" value="查询" name="searchCategory" id="searchCategory"></td>
    </tr>
    </tbody>
</table>
</div-->          <!--/行业选择控件-->
          <input type="button" name="industryBt" value=" 设为主营行业 " onclick="doAddIndustry();">
        </div>
      </div>
    </div>

<script language="JavaScript" type="text/javascript">
<!--//
resetIndustrys('');
Validation.register('categories','请选择公司主营行业','noblank');
//-->
</script>
	<!--行业信息-->
	    <!--提交按钮-->
<table width="100%"><tbody><tr><td align="center">
      <input type="button" class="bigbutton" value="提交公司基本信息" onclick="return doSubmit(&#39;corpInfoForm&#39;, &#39;admin.php?op=CorpBaseInfoSubmit&amp;auth=adad359ab3bbd4093d728eb07a7c777d&#39;)">
</td></tr></tbody></table>
    <!--/提交按钮-->
</form>
</div>

		<div style="clear:both; font-size:0px; line-height:0px; height:0px; background-color:#FFFFFF"></div>	 	 	
	 	 	 	 
				 
				 
				 
	</div>
				 			 
	<div style="clear:both; font-size:0px; line-height:0px; height:0px; background-color:#FFFFFF"></div>
	<div style="clear:both; font-size:0px; line-height:0px; height:0px; background-color:#FFFFFF"></div>

</div>
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
