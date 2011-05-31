// JavaScript Document
    jQuery.noConflict();
    jQuery(document).ready(function($){
	
	// 2010-6-14 by hyde
	$("#show").click(function (){
		$("#leimu1").css('height','100%');
		$(this).hide();
		$("#hidd1").show();
	});
	$("#hidd1").click(function (){
		$("#leimu1").css('height','40px');
		$("#show").show();
		$(this).hide();
	});
	
	$("#show2").click(function (){
		$("#leimu2").css('height','100%');
		$(this).hide();
		$("#visib2").show();
	});
	$("#visib2").click(function (){
		$("#leimu2").css('height','40px');
		$("#show2").show();
		$(this).hide();
	});
	
	$("#show3").click(function (){
		$("#leimu3").css('height','100%');
		$(this).hide();
		$("#hidd3").show();
	});
	$("#hidd3").click(function (){
		$("#leimu3").css('height','40px');
		$("#show3").show();
		$(this).hide();
	});
	
	$("#show4").click(function (){
		$("#leimu4").css('height','100%');
		$(this).hide();
		$("#hidd4").show();
	});
	$("#hidd4").click(function (){
		$("#leimu4").css('height','40px');
		$("#show4").show();
		$(this).hide();
	});

}); 
	
function clearAll(){
	var obj = document.getElementsByName('ids[]');
	for ( var i=0; i<obj.length; i++ ){
		obj[i].checked = false;
	}
}

function subSearch(e,type){
	var key = navigator.userAgent.indexOf("Firefox")!=-1?e.which:event.keyCode;
	if (key==13){
		searchInfo(type,'');
	}
}

function batchLeaveMsg(frmId, leaveMsgTypeId, buyinfoId) {
    if (true == isSelectedOne("ids[]")) {
        var selectedIds = getSelectedInfoIds("ids[]");
        var leaveMsgTypeObj = document.getElementById(leaveMsgTypeId);
        var leaveMsgType = leaveMsgTypeObj.value;
        var form = document.getElementById(frmId);
        if (buyinfoId != null && buyinfoId != '') {
            form.action = 'http://my.cn.china.cn/admin.php?op=MessageAnonBatDetail&selectedIds=' + selectedIds + '&leaveMsgType=' + leaveMsgType + '&buyinfoid=' + buyinfoId;
        } else
        {
            form.action = 'http://my.cn.china.cn/admin.php?op=MessageBatDetail&selectedIds=' + selectedIds + '&leaveMsgType=' + leaveMsgType;
        }
        form.target = '_blank';
        form.submit();
        return true;
    }
    alert("请选择要发送留言的项目！");
    return false;
}
function isSelectedOne(checkbox) {
    var list = document.getElementsByName(checkbox);
    for (i = 0; i < list.length; i++) {
        if (true == list[i].checked) return true;
    }
    return false;
}
function getSelectedInfoIds(checkbox) {
    var list = document.getElementsByName(checkbox);
    selectIds = '';
    for (i = 0; i < list.length; i++) {
        if (true == list[i].checked) {
            if (selectIds.length == 0) selectIds = list[i].value;
            else
            selectIds += "," + list[i].value;
        }
    }
    return selectIds;
}
function showBatchLeaveMsg(checkboxObj, spanId) {
    for (i = 0; i < 30; i++) {
        var hiddenSpanId = "leaveMsg" + i;
        var hiddenSpanObj = document.getElementById(hiddenSpanId);
        if (hiddenSpanObj) hiddenSpanObj.style.display = "none";
    }
    if (checkboxObj.checked) {
        var spanObj = document.getElementById(spanId);
        spanObj.style.display = "";
    } else
    {
        var list = document.getElementsByName("ids[]");
        for (i = 0; i < list.length; i++) {
            if (list[i].checked) {
                var showSpanId = "leaveMsg" + i;
                var showSpanObj = document.getElementById(showSpanId);
                showSpanObj.style.display = "";
                return;
            }
        }
    }
}