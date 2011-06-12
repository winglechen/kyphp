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
<script language="javascript" src="./res/areas.js"></script>

<style type="text/css">.inputlabelok{background:url(/res/img/chkok.gif) no-repeat 0px 0px; padding:2px 0 2px 24px; background-color:#F6F6F6;}.inputlabel{background:transparent; padding:2px 0 2px 24px;}</style>






<div class="operationPage">
  <?php include "admin_nav.php"; ?>
  <div class="operationArea">
	<?php include "admin_menu.php"; ?>

	 
	 
	 
	 
	 
	 



<div class="right">
 		<div class="postTips">联系方式 (带 <span>*</span> 为必填项) </div>
<form id="editForm" name="editForm" action="index.php?p=www/member/company_add" method="post">
	<div class="formblock">
        <div class="formheader"><div class="headerTitle">联系方式</div></div>        
        <div class="formline">
          <div class="formlabel">业务联系人姓名：<span>*</span></div>
		  <div class="formcontent">
		    	<input name="realname" id="realname" type="text" value="<?php echo $_SESSION['realname']; ?>">
                <span id="name_err"></span>
		</div>
        </div>
        <div class="formline">
          <div class="formlabel">性别：<span>*</span></div>
		  <div class="formcontent">
		  	      
		    	     <label><input type="radio" name="sex" value="先生" <?php if('先生' == $_SESSION['sex']) echo ' checked="checked"' ; ?> id="sex">先生</label> 
<label><input type="radio" name="sex" value="女士" <?php if('女士' == $_SESSION['sex']) echo ' checked="checked"' ; ?> id="sex">女士</label> 

		          		</div>
        </div>
        <div class="formline">
          <div class="formlabel">公司电话：<span>*</span></div>

		  <div class="formcontent">
		    	<input name="tel" id="tel" type="text" value="<?php echo $_SESSION['tel']; ?>">
                <span id="tel_err"></span>
		  </div>
        </div>
        <div class="formline">
          <div class="formlabel">传真：<span>*</span></div>
		  <div class="formcontent"> 
		    	<input name="fax" id="fax" type="text" value="<?php echo $_SESSION['fax']; ?>">
                <span id="fax_err"></span>
		 </div>
        </div>
        <div class="formline">
          <div class="formlabel">E-mail：<span>*</span></div>
		  <div class="formcontent">
		    	<input type="text" name="email" id="email" value="<?php echo $_SESSION['email']; ?>" style="width:221px;height:21px">
                <span id="email_err"></span>
		  </div>
        </div>
        <div class="formline">
          <div class="formlabel">所在地区：<span>*</span></div>
		  <div class="formcontent">
		    	<select id="province" style="width:74px;height:21px">
                       </select>
                        <select n id="capitalcity" style="width:74px;height:21px">
                       </select>
                        <select  id="city" style="width:74px;height:21px;display:none">
                        </select>
                        <input name="province" id="t_province" type="hidden" value="浙江">
                        <input name="city" id="t_city" type="hidden" value="杭州">
						
                  	<script language="javascript">
  					control=getAreaControl("province","capitalcity", "city");
  					var province = document.getElementById("t_province").value;
					var city = document.getElementById("t_city").value;
					if(province != "" && city != "")
					{
						control.setValue(province, city);
					}
					else
					{
						control.setValue('省份', '城市');
					}
					city=document.getElementById("t_city").value;
					citylist=document.getElementById("capitalcity");
					for(i=0; i<citylist.length; i++)
  					{
     					if(citylist[i].value==city)
	 					{
	    					citylist[i].selected=true;
	 					}
	 					else
	 					{
	    					citylist[i].selected=false;
	 					}
  					}
              		</script> 
				
		  </div>
        </div>
        
        <div class="formline">
          <div class="formlabel">公司地址：<span>*</span></div>
		  <div class="formcontent">
		    	<input type="text" name="address" id="address" value="<?php echo $_SESSION['address']; ?>" style="width:221px;height:21px">
                <span id="address_err"></span>
		  </div>
        </div>
        
        <div class="formline">
          <div class="formlabel">邮政编码：<span>*</span></div>
		  <div class="formcontent">
		    	<input type="text" name="zipCode" id="zipCode" value="<?php echo $_SESSION['zipCode']; ?>" style="width:221px;height:21px">
                <span id="postcode_err"></span>
		  </div>
        </div>
        
        <div class="formline">
          <div class="formlabel">部门：<span>	&nbsp;</span></div>
		  <div class="formcontent">
		    	<input type="text" name="dept" id="dept" value="<?php echo $_SESSION['dept']; ?>" style="width:221px;height:21px">
                <span id="department_err"></span>
		  </div>
        </div> 
        
        <div class="formline">
          <div class="formlabel">职位：<span>	&nbsp;</span></div>
		  <div class="formcontent">
		    	<input type="text" name="job" id="job" value="<?php echo $_SESSION['job']; ?>" style="width:221px;height:21px">
                <span id="title_err"></span>
		  </div>
        </div> 
        
        <div class="formline">
          <div class="formlabel">手机：<span>	&nbsp;</span></div>
		  <div class="formcontent">
		    	<input type="text" name="mobile" id="mobile" value="<?php echo $_SESSION['mobile']; ?>" style="width:221px;height:21px">&nbsp;提示:手机号码填写后将公布在商铺"联系方式"里面
                <span id="mobile_err"></span>
		  </div>
        </div> 
        
        
        <div class="formline">
          <div class="formlabel">公司网址：<span>	&nbsp;</span></div>
		  <div class="formcontent">
		    	<input name="website" id="website" type="text" value="<?php echo $_SESSION['website']; ?>" size="30" maxlength="200" style="width:221px;height:21px">
		    	提示：请填写完整的网址。例：http://www.hm6688.com
                <span id="homepage_err"></span>
		  </div>
        </div>  
     </div>
     <!--即时通讯-->
        <div class="formblock">
          <div class="formheader">
            <div class="headerTitle">即时通讯帐号</div>
          </div>
			<div>
            	<div style="width:auto;  color: #2A8703; background-color:#FDFFFC; padding:8px; margin:8px; line-height:150%; border:1px solid #B8EFB2"> 填写即时通讯帐号信息，客户可以直接在网站上和您直接在线沟通。</div>
          	</div>
          <div class="formline">
            <div class="formlabel">MSN：<span></span></div>
            <div class="formcontent" style="position:relative;">
              <input name="msn" type="text" value="<?php echo $_SESSION['msn']; ?>" id="msn" style="width:221px;">
          </div>
          </div>
           <div class="formline">
            <div class="formlabel">QQ：<span></span></div>
            <div class="formcontent">
              <input name="qq" type="text" value="<?php echo $_SESSION['qq']; ?>" id="qq" style="width:221px;">
           </div>
        </div>
        </div>
        <!--/即时通讯-->
    <div style="clear:both; font-size:0px; line-height:0px; height:0px; background-color:#FFFFFF"></div>
    <table style="margin-left:200px; margin-bottom:15px;">
      <tbody><tr>
        <td>
        <input type="hidden" name="id" value="<?php echo $_SESSION['id']; ?>" />
        <input type="submit"  class="bigbutton" value=" 修  改  " >
        </td>
      </tr>
    </tbody></table>

     </form>
</div>
		<div style="clear:both; font-size:0px; line-height:0px; height:0px; background-color:#FFFFFF"></div>
	
	</div>
				 			 
	<div style="clear:both; font-size:0px; line-height:0px; height:0px; background-color:#FFFFFF"></div>
	<div style="clear:both; font-size:0px; line-height:0px; height:0px; background-color:#FFFFFF"></div>

</div>
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
