<?php
use Ky\Model\Pages;
use Ky\Core\Core\Db;
$id = isset($_GET['id']) ? $_GET['id'] : 0;

$sql  = " select id,title from news where cid=1000000 " ;
$data = Db::getRows($sql);

if(0 == $id){
   $sql  = " select * from news where cid=1000000 limit 1" ;
}else{
   $sql  = "select * from news where id=".$id; 
}
$detail = Db::getRows($sql);



?>


<link href="./res/index.css" rel="stylesheet" type="text/css">

<div class="body">


<div class="left" style="text-align:left;">
<div class="lft-1">
<dl>
<dt>自助服务</dt>
<dd class="ddA">
    <p class="p1">
        <a href="./index.php?p=www/register" target="_blank">会员注册 </a>
    </p> 
    <p class="p2">
        <a href="./index.php?p=www/member/index" target="_blank">会员服务</a>
    </p> 
    <p class="p3">
        <a href="./index.php?p=www/member/product_add" target="_blank">发布信息</a>
    </p>
    <p class="p0">
        <a href="./index.php?p=www/member/company_main" target="_blank" >推广公司</a>
    </p>
</dd>
</dl>
</div>
<div class="lft-1">
<dl>
<dt>导航</dt>
<dd>

<table width="243" cellspacing="0">
<tbody>
   
<?php
foreach($data as $new){
    echo '
<tr>
<td class="td1" id="denglu"><a href="index.php?p=www/help&id='.$new['id'].'">'.$new['title'].'</a></td>
</tr>
';
}
?>

</tbody></table>
</dd>
</dl>
</div>
<div class="lft-1">
<dl>
<dt>联系我们</dt>
<dd class="dd">
    <b>中童网服务热线：</b>0701-6690666<br>    
    <b>传真号码：</b>0701-6690999<br>
    <b>服务邮箱：</b>service@ztb2b.com <br>   
</dd>  </dl>
</div>
</div>

<div class="right-A">
<div class="ri-top"><h2><span class="zuo">
    <?php if(!empty($detail) && isset($detail[0]) && !empty($detail[0]) ){echo $detail[0]['title'];} ?>
    </span><span class="you">
</span></h2>



<p class="pA" style="text-align:left;">  
<?php if(!empty($detail) && isset($detail[0]) && !empty($detail[0]) ){
$detail[0]['content'] = stripslashes(htmlspecialchars_decode($detail[0]['content']));
echo $detail[0]['content'];
} ?>

</p>
</div>
</div>
</div> 