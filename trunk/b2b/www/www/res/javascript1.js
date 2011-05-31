function searchInfo(){
	var keyw = $("#k").val();
	var url = $("#domain").val();
	if(keyw==''){
		alert("请输入关键词");
		$("#k").focus();
		return false;
	}
	var mode = $("#inputs").val();
	
	if (mode == 1 || mode == 5){
		url += "/selling-leads";
	}else if (mode == 2 || mode == 6){
		url += "/buying-leads";
	}else if (mode == 0 || mode == 4){
		url += "/suppliers";
	}
    url += '/' + UrlEncode(keyw) + '/';
	window.open(url,'_blank','');
}

function subSearch(e){
	var key = navigator.userAgent.indexOf("Firefox")!=-1?e.which:event.keyCode;
	if (key==13) searchInfo();
}

function setSearchType(type,obj){
	$("#inputs").val(type);
	$("div.titlealink2 > a").removeClass("hoveron");
	$(obj).addClass("hoveron");
}
detailRootUrl ="http://detail.cn.china.cn";

var activex = ((navigator.userAgent.indexOf('Win')  != -1) && (navigator.userAgent.indexOf('MSIE') != -1) && (parseInt(navigator.appVersion) >= 4 ));
var boolFal = false;
function oopsPopup(url)
{
    if(activex)
	    var windowName = "oops";
	var popW = 540, popH = 305;
	var scrollB = 'no';
	w = screen.availWidth;
	h = screen.availHeight;
	var leftPos = (w-popW)/2, topPos = (h-popH)/2;
	oopswindow = window.open(url,windowName,'width=' + popW + ',height=' + popH + ',scrollbars=' + scrollB + ',screenx=' + leftPos +',screeny=' +topPos +',top=' +topPos +',left=' +leftPos);
}

function IsInstallQQ(){
    var xmlhttp;
   try{
    if (window.ActiveXObject){        
         var xmlhttp=new ActiveXObject("TimwpDll.TimwpCheck");   
         return true;      
       } else {       
         return 0;
        }   
       }catch(e){
         return false;
       }
    return false;  
}
function show(uin,corpid,typeid){

 boolFal = IsInstallQQ();
if(boolFal== true || boolFal == 0){ 
     try{
          location.href="tencent://message/?uin="+uin+"&Site=http://cn.china.cn/&Menu=yes";
        }catch(e){
            oopsPopup(detailRootUrl+"/index.php?op=ShowCorpImError&entityId="+corpid+"&entityType="+typeid+"&tmMsn=0");
        }
    } else{
       oopsPopup(detailRootUrl+"/index.php?op=ShowCorpImError&entityId="+corpid+"&entityType="+typeid+"&tmMsn=0");
      //alert('由于firefox无法检测到您的QQ客户端是否安装,请您最好先在本地安装ＱＱ,以便您和商家联系')
      //location.href="tencent://message/?uin="+uin+"&Site=wfew&Menu=yes";
       
    }
    
}