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







<div class="operationPage">
  <?php include "admin_nav.php"; ?>
  <div class="operationArea">
	<?php include "admin_menu.php"; ?>

	 	 	 	 <div class="management">
    <div class="switchTag">
    <ul class="">
		<a href="admin.php?op=SellInfoList&amp;searchType=online&amp;auth=adad359ab3bbd4093d728eb07a7c777d">上线(0)</a>
	</ul>
	<ul class="tagSelected">
		<a href="admin.php?op=SellInfoList&amp;searchType=auditing&amp;auth=adad359ab3bbd4093d728eb07a7c777d">审核中(1)</a>
	</ul>
	<ul class="">
		<a href="admin.php?op=SellInfoList&amp;searchType=refuse&amp;auth=adad359ab3bbd4093d728eb07a7c777d">审核拒绝(0)</a>
	</ul>
	<ul class="">
		<a href="admin.php?op=SellInfoList&amp;searchType=offline&amp;auth=adad359ab3bbd4093d728eb07a7c777d">下线(0)</a>
    </ul>
    </div>
    <div class="tabswitchborder">
      <div class="searchproducts">
        <form name="searchForm" id="searchForm" method="post" action="admin.php?op=SellInfoList&amp;auth=adad359ab3bbd4093d728eb07a7c777d">
          <label for="label">产品名称</label>
          <input type="text" name="caption" id="caption" value="" class="productSearchInput" onmousemove="this.focus();" style="height:19px;line-height:19px;">
          <select name="searchType" id="searchType" class="productSelect">
             <option value="online">上线</option>
             <option value="auditing" selected="">审核中</option>
             <option value="refuse">审核拒绝</option>
             <option value="offline">下线</option>
          </select>
          <input type="submit" name="Submit3" value="查 询">
        </form>
      </div>
      <div class="productdatablock">
        <form id="listForm" name="listForm" method="post" action="">
        <input type="hidden" name="searchType" id="searchType" value="auditing">
          <div class="operating">
          
            
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tbody><tr>
                <td>
                                                                &nbsp;&nbsp;&nbsp;共有 <span>0</span> 条商业信息已发布上网！ </td>
                <td align="right" class="shangxia"><table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tbody><tr>
		<td align="right" valign="middle">
				<span>上一页</span>
	    	    	第 1/1 页
	    	    <span>下一页</span>
	            </td>
	</tr>
</tbody></table></td>
              </tr>
                         </tbody></table>
            <table width="100%" border="0" cellspacing="0" cellpadding="0" class="pdata">
              <thead>
                <tr>
                  <td width="35">&nbsp;</td>
                  <td width="110">图片</td>
                  <td>标题</td>
                                    <td width="130">更新时间</td>
                                    <td width="115">操作</td>
                </tr>
              </thead>
              <tbody>
                                              <tr onmouseover="this.bgColor='#EFFFEE';" onmouseout="this.bgColor='#FFFFFF';" bgcolor="#FFFFFF">
                  <td align="center" valign="middle" class="dataselect">
<!---->
	                  	

</td>
                  <td align="center" valign="middle" class="datapic"><img src="http://img.cn.china.cn/1/0,0,379,68449,440,384,62b2b6fe.jpg" width="100" height="84"></td>
                  <td align="left" valign="top" class="datadescription"><div class="productdesc">
                    <div class="proctiontitle"><a href="admin.php?op=SellInfoShow&amp;sellInfoId=1685433139&amp;searchType=auditing&amp;auth=adad359ab3bbd4093d728eb07a7c777d" target="_blank">供应笔记本电脑</a></div>
                                      <div class="productiondetail">二手电脑出售，价格实惠，有意者请电话联系！</div>
                  </div></td>
                  <td align="center" valign="middle" class="dataexpire">
                                    2011-01-10
                  </td>
                  <td align="center" valign="middle" class="datamod"><table width="100%" border="0" cellspacing="3" cellpadding="0" class="modopration">
                                    	  <tbody><tr>
                      	<td align="center">审核中 <a href="admin.php?op=SellInfoUpdateShow&amp;sellInfoId=1685433139&amp;searchType=auditing&amp;auth=adad359ab3bbd4093d728eb07a7c777d">修改</a></td>
                      </tr>
                                    </tbody></table></td>
                </tr>
                             </tbody>
            </table>
            <table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin-top:12px;" class="productDataBottom">
              <tbody><tr>
                <td height="35">
                                                                </td></tr>
              <tr>
                <td>
                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="pages">
	<tbody><tr>
		<td align="right" valign="middle" style="padding-right:15px; border-bottom:1px solid #93CFFE; background-color:#CBE6FE;">
				<span>首&nbsp;&nbsp;页</span>
		<span>上一页</span>
	    	    	第 1/1 页
	    	    <span>下一页</span>
	    <span>末&nbsp;&nbsp;页</span>
	    		  <span id="gotopagespan">转到第 <select onchange="gotopage(this)"><option value="1" selected="">1</option></select>
				  <script>function gotopage(obj){window.location="admin.php?op=SellInfoList&searchType=auditing&caption=&auth=adad359ab3bbd4093d728eb07a7c777d&pagenum="+obj.options[obj.selectedIndex].value.toString()}</script> 页</span>
        </td>
	</tr>
</tbody></table>                </td>
                </tr>
            </tbody></table>
                      </div>
        </form>
      </div>
      <div class="columnTips" style="margin:10px 2px;">
                  <strong>重要提示：</strong><br>
1、经常更新供应信息可以在搜索结果中排位更加靠前，建议您将最新的供应信息及时发布；<br>
2、请您尽可能完整填写各项目，以利于买家更好的了解您的产品。<br>
3、每条信息每天限重发一次，当天发布的信息，明天才可以重发。建议您定期修改信息内容，提高信息质量，信息质量越高，越能吸引买家。
	  </div>
    </div>
  </div>
<div style="clear:both; font-size:0px; line-height:0px; height:0px; background-color:#FFFFFF"></div>

		<div style="clear:both; font-size:0px; line-height:0px; height:0px; background-color:#FFFFFF"></div>
	</div>
</div>