<?php
if('product' == $_GET['module']){
?>
    <div class="left">
      <div class="spacetop"></div>
      <div class="menu">      
        <ul class="">
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
        <!-- class=menuSelected -->       
        <ul class=""> 
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
          <a href="index.php?p=www/member/company_account">密码修改</a> 
        </ul>
      </div> 
</div>
<?php
}elseif('supply' == $_GET['module']){
?>
    <div class="left">
      <div class="spacetop"></div>
      <div class="menu">      
        <ul class="">
          <a href="index.php?p=www/member/supply_list">管理库存信息</a>
        </ul>
        <ul class="">
          <a href="index.php?p=www/member/supply_add">发布库存信息</a>
        </ul>  	                             
      </div>
    </div>

<?php
}elseif('qiugou' == $_GET['module']){
?>
    <div class="left">
      <div class="spacetop"></div>
      <div class="menu">      
        <ul class="">
          <a href="index.php?p=www/member/qiugou_list">管理求购信息</a>
        </ul>
        <ul class="">
          <a href="index.php?p=www/member/qiugou_add">发布求购信息</a>
        </ul>  	                             
      </div>
    </div>
        
<?php
}elseif('website' == $_GET['module']){
?>
    <div class="left">
      <div class="spacetop"></div>
      <div class="menu">      
        <ul class="">
          <a href="index.php?p=www/member/website_style">网站设置</a>
        </ul>
        <ul class="">
          <a href="index.php?p=www/member/website_setting_add">网站图片</a>
        </ul>
        <ul class="">
          <a href="index.php?p=www/member/website_footer">网站底部修改</a>
        </ul>
        <ul class="">
          <a href="index.php?p=www/member/website_nav_list">网站导航管理</a>
        </ul>
        <ul class="">
          <a href="index.php?p=www/member/website_nav_add">网站导航添加</a>
        </ul>
        <ul class="">
          <a href="index.php?p=www/member/website_nav2_list">网站底部链接</a>
        </ul>
        <ul class="">
          <a href="index.php?p=www/member/website_nav2_add">底部链接添加</a>
        </ul>
        <ul class="">
          <a href="index.php?p=www/member/website_page_list">公司自定义页面</a>
        </ul>
        <ul class="">
          <a href="index.php?p=www/member/website_page_add">自定义页面添加</a>
        </ul>
        <ul class="">
          <a href="index.php?p=www/member/website_new_category_list">公司新闻分类</a>
        </ul>  
        <ul class="">
          <a href="index.php?p=www/member/website_new_category_add">新闻分类添加</a>
        </ul> 
        <ul class="">
          <a href="index.php?p=www/member/website_new_list">公司新闻列表</a>
        </ul>
        <ul class="">
          <a href="index.php?p=www/member/website_new_add">公司新闻添加</a>
        </ul>	
                                     
      </div>
    </div>
<?php 
}else{
?>
    <div class="left">
      <div class="spacetop"></div>
      <div class="menu">      
        <ul class="">
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
