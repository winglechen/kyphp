<style>
.search-nav li, .search-nav li a:hover, .search-nav li a.current, .txtbtn{ background:url(res/img/btn.gif) no-repeat; }
.search-nav li,.formbox, .Mod, .Mod li, .ModL, .ModR, .ModLL, .ModRR, .u3 li, .u4 li, .u5 li, .u6 li, .u7 li, .u8 li, .u9 a.left, .u13 li a.left, .u11 li { float:left; }
.search-bar { width:526px;float:right;}
.search-nav { height:29px; padding-left:12px;margin:0; position:relative; bottom:-2px; }
.search-nav li { background-position:0 -58px; color:#006699; font-weight:bold; margin-left:-1px; }
.search-nav li a { display:inline-block; width:70px; height:29px; line-height:29px; text-decoration:none; text-align:center; }
.search-nav li a:hover { font-size:14px; }
.sp_L, .sp_R{ background:url(res/img/ico.gif) no-repeat; }
.sp_L, .sp_R { width:2px; height:44px; float:left; display:block; background-position:0 -224px; }
.sp_R { float:right; background-position:0 -157px; }
.formbox { width:517px; height:38px; background:url(res/img/bg_formbox.gif) left center repeat-x; padding:6px 0 0 5px; }
.txtbox { width:386px; height:32px; line-height:32px; background:url(res/img/bg_txtbox.gif) no-repeat; color:#999; border:none; padding-left:10px; font-size:14px; vertical-align: middle;
    margin-top:-27px;}
.btnimg { margin-left:-8px; }
.txtbtn { background-position:0 -106px; display:block; border:none; width:41px; height:32px; text-align:center; line-height:32px; color:#006699; display:inline; cursor:pointer; }
.memo { text-align:right; color:#006699; line-height:22px; }


</style>
<div class="search-bar"> 
    <ul class="search-nav"> 
        <li><a href="javascript:tabChang(0)" target="_self" id="tag0" class="">找产品</a></li> 
        <li><a href="javascript:tabChang(1)" target="_self" id="tag1" class="">找公司</a></li> 
        <li><a href="javascript:tabChang(2)" target="_self" id="tag2" class="current">找商机</a></li> 
    </ul> 
    <div class="search-box"> 
        <span class="sp_L"></span>
        <span class="sp_R"></span> 
        <div class="formbox"> 
            <input type="text" class="txtbox" value="请输入关键字找产品"  name="keyWord" id="MainKey"> 
            <input type="image" src="res/img/btn_img.gif" class="btnimg" onclick="return SearchByMainKey();">          
            <input type="hidden" value="1" name="linkType" id="formtype"> 
        </div> 
   </div> 
</div>