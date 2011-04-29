<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>浩铭集团------中小企业信息化服务商</title>
    <meta content="IE=EmulateIE7" http-equiv="X-UA-Compatible">
    <meta name="description" content="浩铭">
    <meta name="keywords" content="浩铭, mainone">
    <meta name="robots" content="all">
    
    <link rel="stylesheet" type="text/css" href="./res/style3.css">
</head>
<body>

<div class="menu">
  <ul>
    <li>全国代理加盟热线：<span style="color: #FF9900; font-weight:700; font-family: Verdana; padding-right:20px;">18858839893</span></li>
    <li id="menu_line"></li>
    <li><a href="index.php">首　　页</a></li>
<?php
use Ky\Model\IntroCat;
$data = IntroCat::getChildren();

$initCid = false;
foreach($data as $cat){
    if(false === $initCid && !isset($_GET['cid'])){
        $_GET['cid']    = $cat['Id'];
        $_GET['cname']  = $cat['name'];
    }
?>
    <li id="menu_line"></li>
    <li><a href="index.php?p=info/intro&cid=<?php echo $cat['Id']; ?>&cname=<?php echo urlencode($cat['name']) ; ?>"><?php echo $cat['name']; ?></a></li>
<?php
}
?>
     </ul> 
</div>
<div class="menu_1">





<div  id="Layer7" style="visibility: hidden; position:relative; left:578px; top:-530px; *left:588px; *top:42px; _left:588px; _top:43px;">
</div>

</div>
<div class="header">
<div class="logo"></div>
<div class="quicklink">

<div class="branch"><span>全国服务网络</span></div> 

</div>
</div><!-- header end -->

