<?php
use Ky\Model\Company;

$form = Company::detail($_GET['id']);
?>

<div class="accountInfo">
	<p><span>DWZ富客户端框架 </span></p>
	<p><a href="demo_page2.html" target="dialog">DWZ小组</a></p>
</div>

<link href="./res/css/erm_op.css" rel="stylesheet" type="text/css">
<div class="page">
   <div class="pageContent" layoutH="0"> 
    <div class="formblock">
      <div class="formheader">
        <div class="headerTitle">公司基本信息</div>
      </div>
      <div class="formline">
        <div class="formlabel">公司名称：</div>
        <div class="formcontent"><?php echo $form['corpname']; ?>&nbsp;</div>
      </div>
      <div class="formline">
        <div class="formlabel">企业类型：</div>
        <div class="formcontent"><?php echo $form['corptype']; ?>&nbsp;
         </div>
      </div>
      <div class="formline">
        <div class="formlabel">公司注册地址：</div>
        <div class="formcontent"><?php echo $form['registerPlace']; ?>&nbsp;</div>
      </div>
      <div class="formline">
        <div class="formlabel">注册资本：</div>
        <div class="formcontent"><?php echo $form['capital']; ?>万&nbsp;
        </div>
      </div>
      <div class="formline">
        <div class="formlabel">公司简介:</div>
        <div class="formcontent"><?php echo $form['corpintro']; ?>&nbsp;</div>
      </div>
      <div class="formline">
        <div class="formlabel"></div>
        <div class="formcontent"></div>
      </div>
    </div>
    <!--/公司基本信息-->
    <!--公司图片信息>
    <div class="formblock">
      <div class="formheader">
        <div class="headerTitle">公司图片（<a href="">修改</a>）</div>
      </div>
      <div class="formline">
        <div>
          <table width="100%" border="0" cellspacing="8">
            <tbody><tr>
              <td align="right"><strong>logo图片</strong></td>
              <td><img name="uploadImage0" id="uploadImage0" src="./res/css//no_pic.gif" width="100" height="100"></td>
              <td align="right"><strong>公司图片</strong></td>
              <td><img name="uploadImage0" id="uploadImage" src="./res/css//no_pic.gif" width="100" height="100"></td>
            </tr>
          </tbody></table>
        </div>
      </div>
    </div>
    <--/公司图片信息-->
    <!--联系人信息-->
    <div class="formblock">
      <div class="formheader"><div class="headerTitle">联系方式</div>
      </div>        
        <div class="formline">
          <div class="formlabel">业务联系人姓名：</div>
		  <div class="formcontent"><?php echo $form['realname']; ?>&nbsp;</div>
        </div>
        <div class="formline">
          <div class="formlabel">性别：</div>
		  <div class="formcontent">
	    	<label><?php echo $form['sex']; ?>&nbsp;</label> 
		  </div>
        </div>
        <div class="formline">
          <div class="formlabel">公司电话：</div>
		  <div class="formcontent"><?php echo $form['tel']; ?>&nbsp;</div>
        </div>
        <div class="formline">
          <div class="formlabel">传真：</div>
		  <div class="formcontent"><?php echo $form['fax']; ?>&nbsp;</div>
        </div>
        <div class="formline">
          <div class="formlabel">E-mail：</div>
		  <div class="formcontent"><?php echo $form['email']; ?>&nbsp;</div>
        </div>
        <div class="formline">
          <div class="formlabel">所在地区：</div>
		  <div class="formcontent"><?php echo $form['province'].'&nbsp;&nbsp;' .$form['city']; ?>&nbsp;</div>
        </div>
        
        <div class="formline">
          <div class="formlabel">公司地址：</div>
		  <div class="formcontent"><?php echo $form['address']; ?>&nbsp;</div>
        </div>
        
        <div class="formline">
          <div class="formlabel">邮政编码：</div>
		  <div class="formcontent"><?php echo $form['zipCode']; ?>&nbsp;</div>
        </div>
        
        <div class="formline">
          <div class="formlabel">部门：</div>
		  <div class="formcontent"><?php echo $form['dept']; ?>&nbsp;</div>
        </div> 
        
        <div class="formline">
          <div class="formlabel">职位：</div>
		  <div class="formcontent"><?php echo $form['job']; ?>&nbsp;</div>
        </div> 
        
        <div class="formline">
          <div class="formlabel">手机：</div>
		  <div class="formcontent"><?php echo $form['mobile']; ?>&nbsp;</div>
        </div> 
        
        <div class="formline">
          <div class="formlabel">公司网址：</div>
		  <div class="formcontent">
		  <a href="<?php echo $form['website']; ?>" target="_blank" ref="nofollow" style="text-decoration:underline;" rel="nofollow"><?php echo $form['website']; ?></a>&nbsp;
		  </div>
        </div>  
                <div class="formline">
          <div class="formlabel">msn：</div>
		  <div class="formcontent"><?php echo $form['msn']; ?>&nbsp;</div>
        </div> 
                <div class="formline">
          <div class="formlabel">QQ：</div>
		  <div class="formcontent"><?php echo $form['qq']; ?>&nbsp;</div>
        </div> 
        <div class="formline">
        <div class="formlabel"></div>
        <div class="formcontent"></div>
      </div>
     </div>
    <!--/联系人信息-->
    <!--信用认证信息-->
    <div class="formblock">
      <div class="formheader">
        <div class="headerTitle">信用认证信息</div>
      </div>
      <div class="formline">
        <div class="formlabel">公司成立时间：<span id="d_setupTime" style="display:none">*</span></div>
        <div class="formcontent"><span><?php echo $form['setupTime']; ?>&nbsp;</span> </div>
      </div>
      <div class="formline">
        <div class="formlabel">公司注册号：<span id="d_registerNumber" style="display:none">*</span></div>
        <div class="formcontent">
        	<?php echo $form['registerNumber']; ?>&nbsp;
        </div>
      </div>
      <div class="formline">
        <div class="formlabel">税务注册号：<span id="d_taxRegNo" style="display:none">*</span></div>
        <div class="formcontent">
          <?php echo $form['taxRegNo']; ?>&nbsp;
        </div>
      </div>
      <div class="formline">
        <div class="formlabel">营业期限：</div>
        <div class="formcontent">
          <?php echo $form['manageTime']; ?>&nbsp;
		</div>
      </div>
      <div class="formline">
        <div class="formlabel">经营范围：<span id="d_manageBound" style="display:none">*</span></div>
        <div class="formcontent">
          <?php echo $form['manageBound']; ?>&nbsp;
		</div>
      </div>
      <div class="formline">
        <div class="formlabel">登记机关：<span id="d_registerOrgan" style="display:none">*</span></div>
        <div class="formcontent">
          <?php echo $form['egisterOrgan']; ?>&nbsp;
		</div>
      </div>
      <div class="formline">
        <div class="formlabel">最近年检时间：<span id="d_checkTime" style="display:none">*</span></div>
        <div class="formcontent">
        	<?php echo $form['checkTime']; ?>&nbsp;
		</div>
      </div>
      <div class="formline">
        <div class="formlabel">法定代表人/负责人：<span id="d_artificialPerson" style="display:none">*</span></div>
        <div class="formcontent">
        	<?php echo $form['artificialPerson']; ?>&nbsp;
		</div>
      </div>
      <div class="formline">
        <div class="formlabel"></div>
        <div class="formcontent"></div>
      </div>
    </div>
    <!--/信用认证信息-->
    <!--详细信息-->
    <div class="formblock">
      <div class="formheader">
        <div class="headerTitle">详细信息)</div>
      </div>
      <div class="formline">
        <div class="formlabel">员工人数：<span id="d_numberOfEmployee" style="display:none">*</span></div>
        <div class="formcontent">
		                  <?php echo $form['numberOfEmployee']; ?>&nbsp;
                </div>
      </div>
      <div class="formline">
        <div class="formlabel">经营模式：<span id="d_manageMode" style="display:none">*</span></div>
        <div class="formcontent">
		                  <?php echo $form['manageMode']; ?>&nbsp;
        		</div>
      </div>
      <div class="formline"></div>
      <div class="formline">
        <div class="formlabel">品牌名称：<span id="d_brand" style="display:none">*</span></div>
        <div class="formcontent"><?php echo $form['brand']; ?>&nbsp;</div>
      </div>
      <div class="formline">
        <div class="formlabel">主要经营地点：<span id="d_manageArea" style="display:none">*</span></div>
        <div class="formcontent"><?php echo $form['manageArea']; ?>&nbsp;</div>
      </div>
      <!--div class="formline">
        <div class="formlabel">主要市场：</div>
        <div class="formcontent">
					&nbsp;
		        </div>
      </div-->
      <div class="formline">
        <div class="formlabel">主要客户群：<span id="d_primaryCustomers" style="display:none">*</span></div>
        <div class="formcontent"><?php echo $form['primaryCustomers']; ?>&nbsp;</div>
      </div>
      <div class="formline">
        <div class="formlabel">年营业额：<span id="d_turnover" style="display:none">*</span></div>
        <div class="formcontent">
							<?php echo $form['turnover']; ?>&nbsp;
				</div>
      </div>
      <div class="formline">
        <div class="formlabel">进出口情况 <span id="d_exportAmount" style="display:none">*</span></div>
        <div class="formcontent"> 年出口额：
                          <?php echo $form['exportAmount']; ?>&nbsp;
        <br>
          年进口额：
		                  <?php echo $form['importAmount']; ?>&nbsp;
        		</div>
      </div>
      <div class="formline">
        <div class="formlabel">银行帐号 <span id="d_accountBank" style="display:none">*</span></div>
        <div class="formcontent"> 
          开户银行：<?php echo $form['accountBank']; ?>&nbsp;<br>
          帐号：<?php echo $form['account']; ?>&nbsp;
        </div>
      </div>
      <div class="formline">
        <div class="formlabel"></div>
        <div class="formcontent"></div>
      </div>
    </div>
    <!--详细信息-->
    <!-- 生产信息 >
    <div class="formblock">
      <div class="formheader">
        <div class="headerTitle">生产信息(<a href="index.php?p=www/member/company_detail">修改</a>)</div>
      </div>
      <div class="formline">
        <div class="formlabel">月产量：<span id="d_monthOutputUnit" style="display:none">*</span></div>
        <div class="formcontent">
         
                          &nbsp;
                </div>
      </div>
      <div class="formline">
        <div class="formlabel">厂房面积：<span id="d_workshopArea" style="display:none">*</span></div>
        <div class="formcontent">&nbsp;</div>
      </div>
      <div class="formline">
        <div class="formlabel">提供OEM代加工<span id="d_providerOEM" style="display:none">*</span>：</div>
        <div class="formcontent">
			                  否
			        </div>
      </div>
      <div class="formline">
        <div class="formlabel">管理体系认证：<span id="d_authType" style="display:none">*</span></div>
        <div class="formcontent">
        	  &nbsp;
        </div>
      </div>
      <div class="formline">
        <div class="formlabel">质量控制：<span id="d_qualityControl" style="display:none">*</span></div>
        <div class="formcontent">
        					无
		        </div>
      </div>
      <div class="formline">
        <div class="formlabel"></div>
        <div class="formcontent"><a href="index.php?p=www/member/company_detail">修改生产信息</a></div>
      </div>
    </div>
    <生产信息-->

    <div style="clear:both; font-size:0px; line-height:0px; height:0px; background-color:#FFFFFF"></div>
  </div>
			
				 
	</div>
				 			 
	<div style="clear:both; font-size:0px; line-height:0px; height:0px; background-color:#FFFFFF"></div>

</div>
</div>