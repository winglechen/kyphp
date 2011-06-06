<?php
if('product' == $_GET['module']){
?>
    <div class="left">
      <div class="spacetop"></div>
      <div class="menu">      
        <ul class="menuSelected">
          <a href="index.php?p=www/member/product_list">管理供应信息</a>
        </ul>
        <ul class="">
          <a href="index.php?p=www/member/product_add">发布供应信息</a>
        </ul>  	                             
      </div>
    </div>	
<?php
}elseif('company' == $_GET['module']){
?>
<div class="left"> 
      <div class="spacetop"></div> 
      <div class="menu"> 
        <ul class="menuSelected"> 
          <a href="index.php?p=www/member/company_main">公司信息首页</a> 
        </ul> 
             <ul class=""> 
          <a href="index.php?p=www/member/company_basicinfo">公司基本信息</a> 
        </ul> 
        <ul class=""> 
          <a href="index.php?p=www/member/company_detail">公司详细信息</a> 
        </ul> 
        <ul class=""> 
          <a href="index.php?p=www/member/company_contact">联系人信息</a> 
        </ul> 
        <ul class=""> 
          <a href="index.php?p=www/member/company_pic">公司图片</a> 
        </ul>   
      </div> 
</div>
<?php 
}else{
?>
    <div class="left">
      <div class="spacetop"></div>
      <div class="menu">      
        <ul class="menuSelected">
          <a href="index.php?p=www/member/product_list">列表</a>
        </ul>
        <ul class="">
          <a href="index.php?p=www/member/product_add">添加</a>
        </ul>  	                             
      </div>
    </div>	
<?php  
}
?>
