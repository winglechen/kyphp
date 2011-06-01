<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>b2b电子商务</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link href="./res/topfot555.css" rel="stylesheet" type="text/css">
<link href="./res/index555.css" rel="stylesheet" type="text/css">

<script src="./res/tag.js" language="javascript"></script>
<script src="./res/layer.js" language="javascript"></script>
<script language="javascript" type="text/javascript" src="./res/jquery.js"></script>
<script language="javascript">
function changeTab(i)
{
	autokey = true;
	tab(i);
	j=i+1;
 	if(j%5==0)
 	j++;
}
function changeAutoKey()
{
	autokey = false;
}
function tab(n)
{
	m = n%5;
	for(var i=1; i<=4; i++)
	{
		if(i==m)
		{
			document.getElementById("tab_" + i).className = "checkcurrent";
			document.getElementById("tab_c_" + i).style.display = "block";
		}else{
		document.getElementById("tab_" + i).className = "";
		document.getElementById("tab_c_" + i).style.display = "none";
		}
	}

}
var j=1;
//setInterval('autoFocus()',2800);
var autokey = false;
function autoFocus() {
    if(!$('mqmp')) return false;
    if(autokey) return false;
     tab(j);
     j++;
     if(j==100)
     j=1;
     if(j%5==0)
     j++;
}
	
	
</script>
</head>
<body>

<?php
include "header_nav.php";
include "header_logo.php";
include "register_nav.php";
include "register_body.php";
include "footer.php";

?>