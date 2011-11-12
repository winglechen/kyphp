
<!--标准尾 begin-->
<div class="wrapCnt">

<ul class="link">
    <img src="./res/tit6L.jpg" width="2" height="34" alt="" style="float:left">
    <span>友情链接：
<?php
use Ky\Model\Links;
$links = Links::show();
for($i=0,$cnt=count($links); $i<$cnt; $i++){
    $links[$i] = '<a href="'.$links[$i]['url'].'" target="_blank">'.$links[$i]['name'].'</a>';    
}
echo join("&nbsp;|&nbsp;",$links);
?>
    </span>
    <img src="./res/tit6B.jpg" width="2" height="34" alt="" style="float:right">
</ul>

<!--ul class="about"><a href="http://cn.china.cn/aboutus/index.html" target="_blank">关于我们</a> | <a href="http://cn.china.cn/hyfw/index.html" target="_blank">会员服务</a> | <a href="http://cn.china.cn/ad/fuwu/index.html" target="_blank">广告服务</a> | <a href="http://cn.china.cn/zhaoshang2010/index.html" target="_blank">代理加盟</a> | <a href="http://cn.china.cn/zqsearch/index.html" target="_blank">授权服务中心</a> | <a href="http://my.cn.china.cn/index.php?op=whois" target="_blank">whois查询</a> | <a href="http://cn.china.cn/xyss/index.html" target="_blank">企业认证记录查询</a> | <a href="http://ru.china.cn/" target="_blank">Русский  Язык </a> | <a href="http://cn.china.cn/aboutus/lianxi/index.html" target="_blank">联系我们</a> | <a href="http://cn.china.cn/map/" target="_blank">网站地图</a> | <a href="http://cn.china.cn/friend/index.htm" target="_blank">友情链接</a></ul-->

<ul class="gsInfo">
<li>@2011 ztb2b.com 江西浩铭电子商务有限公司</li>
<li> 地址：江西省鹰潭市余江国际工业园区浩铭商业街</li>
<li>电话：：0701-6690666  传真：0701-6690999</li>
<li>增值电信业务经营许可证 赣B2-20110077</li>
</ul>
</div>
<!--标准尾 end-->

<script language="javascript">
    $('a').live('click',function(e){
        var url = $(this).attr('href');
        if(url.indexOf('http') != -1){
            e.preventDefault();
            return false;    
        }
    });   
</script>

</body></html>
