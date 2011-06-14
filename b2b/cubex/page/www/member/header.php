<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>首页-中国供应商</title>

<link href="./res/erm.css" rel="stylesheet" type="text/css">
<link href="./res/erm_old.css" rel="stylesheet" type="text/css">
<link href="./res/erm_new.css" rel="stylesheet" type="text/css">
<link href="./res/erm_op.css" rel="stylesheet" type="text/css">
<link href="./res/erm_op_old.css" rel="stylesheet" type="text/css">
<link href="./res/popdiv.css" rel="stylesheet" type="text/css">
<link href="./res/contents.css" rel="stylesheet" type="text/css">

<script language="javascript" src="./res/common.js"></script>
<script language="javascript" src="./res/jquery.js"></script>
<script language="javascript" src="./res/function.js"></script>
</head>
<body>
<!-- head start -->
<!--头部浮动-->


<!--title-->
<div class="erm_header_back">
<div class="erm_header_textleft">企业管理系统</div>
<div class="erm_header_textright"><strong><?php echo $_SESSION['username']; ?>，您好！</strong><span>
<a href="index.php?p=www/logout">退出</a></span>
</div>
    <div style=" margin:5px 0 0 0; width:940px; float:left; text-align:center;">
          <table align="center" cellpadding="0" cellspacing="0" style="margin:0 auto">
                <tbody><tr align="center">
                  <td class="erm_headertltleleft">&nbsp;</td>
                  <td valign="top" class="erm_headertltlemid"><span><?php echo $_SESSION['corpname']; ?></span></td>
                  <td class="erm_headertltleright">&nbsp;</td>
                </tr>
              </tbody>
          </table>
    </div>
     <div>
        <span class="erm_header_storetext" style=" float:left; text-align:right; width:930px;">我的商铺：<a href="http://<?php echo $_SESSION['username'] ?>.haomingchina.com" target="_blank">http://<?php echo $_SESSION['username'] ?>.haomingchina.com</a></span>
     </div>
     <div style="clear:both"></div>
</div>
<!--title end-->
 






    <div class="mainNav">
        <div class="erm_nav">
        <ul>
                <!--li style="background: none;"><span>首&nbsp;&nbsp;页</span></li-->
                <li style="background: none;"><a href="index.php?p=www/member/index">首&nbsp;&nbsp;页</a></li>
                <li><a href="index.php?p=www/member/product_list">我的供应</a></li>
                <li><a href="index.php?p=www/member/supply_list">我的库存</a></li>
                <li><a href="index.php?p=www/member/qiugou_list">我的求购</a></li>                
                <!--li><a href="#">询盘信息</a></li-->                    
                <li><a href="index.php?p=www/member/company_main">公司信息</a></li>
                <li><a href="index.php?p=www/member/website_style">自助建站</a></li>
        </ul>
        </div>
        <div class="clear_line"></div>
    </div>
</div>

