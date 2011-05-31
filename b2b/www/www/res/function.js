var locale = new Locale();
locale.init('en_lang', 'en_UK');
//列表页 复选框
function doSelect(selectAllId1, selectAllId2, checkbox)
{
	var selectAllObj1 = document.getElementById(selectAllId1);
	var selectAllObj2 = document.getElementById(selectAllId2);
	selectAllObj2.checked = selectAllObj1.checked;
	if(selectAllObj1.checked)
		selectAll(checkbox);
	else
		deselectAll(checkbox);
}
function doSelectAllTop(selectAllId1, checkbox)
{
	var selectAllObj1 = document.getElementById(selectAllId1);
	if(selectAllObj1.checked)
		selectAll(checkbox);
	else
		deselectAll(checkbox);
}
function selectAll(checkbox)
{  
    var list = document.getElementsByName(checkbox);
    for (i=0;i<list.length;i++)
    {
	   list[i].checked=true;
	}
}
function isSelectedOne(checkbox)
{  
    var list = document.getElementsByName(checkbox);
    for( i=0; i<list.length; i++ )
    {
	   if( true == list[i].checked )
	       return true;
	}
	return false;
}
function messagebatdetail(frmId, authCode)
{
	if( true == isSelectedOne("ids[]") )
	{
		var form = document.getElementById(frmId);
		form.action = 'admin.php?op=MessageBatDetail&auth='+authCode;
		form.target = '_blank';
		form.submit();
		return true;
	}
	alert("请选择要发送询盘的项目！");
	return false;
}
function favoritebatdelete(frmId, authCode)
{
    if( true == isSelectedOne("ids[]") )
	{
		var form = document.getElementById(frmId);
		form.action = 'admin.php?op=FavoriteDelete&auth='+authCode;
        form.method='POST';
		form.submit();
		return true;
	}
	alert("请选择要删除的项目！");
	return false;
}
function intervese(checkbox)
{  
    var list = document.getElementsByName(checkbox);
    for (i=0;i<list.length;i++)
    {
	    list[i].checked=!list[i].checked;
	}
}
function deselectAll(checkbox)
{  
    var list = document.getElementsByName(checkbox);
    for (i=0;i<list.length;i++)
    {
	    list[i].checked=false;
	}
}
function doFormSubmit(formId, doAction)
{
	var formObj = document.getElementById(formId);
   	formObj.action = doAction;
   	formObj.submit();
}

//列表页 选择信息删除动作
function doDelete(formId, checkboxName, doAction)
{
    var count = 0;
    var list = document.getElementsByName(checkboxName);
    for(i=0; i<list.length; i++)
    {
	    if(list[i].checked == true && list[i].disabled == false)
	    	count++;
	}
    if((count > 0) == false)
    {
        alert("请选择需要删除的信息!");
        return false;
    }
    var confirmAlert = "您已选中 " + count + " 条信息,确定要删除吗?";
    if(confirm(confirmAlert))
    {
		doFormSubmit(formId, doAction);
  		return true;
    }
    else
    {
        return false;
    }
}
function doDeleteFriendLink(formId, friendLInkId, doAction)
{
    if(friendLInkId== false)
    {
        alert("请选择需要删除的信息!");
        return false;
    }
		doFormSubmit(formId, doAction);
  	return true;
}
//列表页 选择信息下线动作
function doOffline(formId, checkboxName, doAction)
{
	var count = 0;
    var list = document.getElementsByName(checkboxName);
    for (i=0; i<list.length; i++)
    {
	    if(list[i].checked == true && list[i].disabled == false)
	    	count++;
	}
    if((count > 0) == false)
    {
        alert("请选择需要下线的信息!");
        return false;
    }
    var confirmAlert = "您已选中 " + count + " 条信息,确定要下线吗?";
    if(confirm(confirmAlert))
    {
		doFormSubmit(formId, doAction);
  		return true;
    }
    else
    {
        return false;
    }
}
//列表页 选择信息重发动作
function doResend(formId, checkboxName, doAction)
{
	var count = 0;
    var list = document.getElementsByName(checkboxName);
    for (i=0; i<list.length; i++)
    {
	    if(list[i].checked == true && list[i].disabled == false)
	    	count++;
	}
    if((count > 0) == false)
    {
        alert("请选择需要重发的信息!");
        return false;
    }
    var confirmAlert = "您已选中 " + count + " 条信息,确定要重发吗?";
    if(confirm(confirmAlert))
    {
		doFormSubmit(formId, doAction);
  		return true;
    }
    else
    {
        return false;
    }
}
//列表页 选择信息上线动作
function doOnline(formId, checkboxName, doAction)
{
	var count = 0;
    var list = document.getElementsByName(checkboxName);
    for (i=0; i<list.length; i++)
    {
	    if(list[i].checked == true && list[i].disabled == false)
	    	count++;
	}
    if((count > 0) == false)
    {
        alert("请选择需要上线的信息!");
        return false;
    }
    var confirmAlert = "您已选中 " + count + " 条信息,确定要上线吗?";
    if(confirm(confirmAlert))
    {
		doFormSubmit(formId, doAction);
  		return true;
    }
    else
    {
        return false;
    }
}
//列表页 选择信息上线动作
function doOnlineFriendLink(formId, friendLInkId, doAction)
{
	var count = 0;
    if(friendLInkId=='')
    {
        alert("请选择需要上线的信息!");
        return false;
    }
		doFormSubmit(formId, doAction);
  	return true;

}
function doOfflineFriendLink(formId, friendLInkId, doAction)
{
	var count = 0;
    if(friendLInkId=='')
    {
        alert("请选择需要下线的信息!");
        return false;
    }
		doFormSubmit(formId, doAction);
  	return true;

}
function reportError(request, ex)
{
    alert(ex.message);
}
function favoriteEntity(name, entityid, type, industrychain)
{
    var url="/admin.php";
    var params = "op=FavoriteAddAjax&id="+entityid+"&type="+type+"&industryChain="+industrychain;
    var ajax = new Ajax.Request(
            url,
            {method: 'get', asynchronous: false, parameters: params,
                onSuccess:Ajax.onSuccess,
                onFailure:reportError,
                onException:reportError,
                onComplete: new Function("request", "return setFavoriteResult(request,'"+name+"')")
            } );
}
function setFavoriteResult(request, name)
{
	var objs = document.getElementsByName(name);
    for (i = 0; i < objs.length; i++)
    {
        objs[i].innerHTML = "已收藏";
    }
}
function reversePublicStatus(pMsgId, op, name)
{
    var url="/admin.php";
    var params = "op="+op+"&pMsgId="+pMsgId;
    var ajax = new Ajax.Request(
            url,
            {method: 'get', asynchronous: false, parameters: params,
                onSuccess:Ajax.onSuccess,
                onFailure:reportError,
                onException:reportError,
                onComplete: new Function("request", "return showReversePublicStatus('"+name+"')")
            } );
}
function showReversePublicStatus(name)
{
	var objs = document.getElementsByName(name);
	if( objs.length > 0 )
	{
    	if( "公开信息" == objs[0].innerHTML )
			statusNote = "取消公开";
        else
			statusNote = "公开信息";
	}
    for (i = 0; i < objs.length; i++)
    {
       	objs[i].innerHTML = statusNote;
    }
}


///////////////////////////////////////////////////////////////////////
function upInfo(selectId)
{
   	var selectObj = document.getElementById(selectId);
    var i = selectObj.selectedIndex;
   	if(selectObj.length <= 0)
   	{
   		alert(locale.getMessage("没有信息可以移动", "no infos movable"));
   		return;
   	}
    if(i < 0)
    {
		alert(locale.getMessage("请选中需要移动的信息", "Please select the infos to move"));
		return;
    }
	if(i == 0)
		return;
	var options = selectObj.options;
	var oOption = document.createElement("OPTION");
	oOption.text = options[i].text;
	oOption.value = options[i].value;
	selectObj.remove(i);
	options.add(oOption, i-1);
	setIndex(options);
	options[i-1].selected = true;
}
function downInfo(selectId)
{
   	var selectObj = document.getElementById(selectId);
    var i = selectObj.selectedIndex;
   	if(selectObj.length <= 0)
   	{
   		alert(locale.getMessage("没有信息可以移动", "no infos movable"));
   		return;
   	}
	if(i < 0)
	{
		alert(locale.getMessage("请选中需要移动的信息", "Please select the infos to move"));
		return;
	}
	var options = selectObj.options;
	if(i == options.length - 1)
		return;
	var oOption = document.createElement("OPTION");
	oOption.text = options[i].text;
	oOption.value = options[i].value;
	selectObj.remove(i);
	options.add(oOption, i+1);
	setIndex(options);
	options[i+1].selected = true;
}
function moveInfo(selectId, moveToNumId)
{
	var moveToNumObj = document.getElementById(moveToNumId);
	if(trimString(moveToNumObj.value) == "")
	{
		alert(locale.getMessage("请填写信息需要移至的位置", "Please specify the place move to"));
		moveToNum.focus();
		return;
	}
	for(var n = 0; n < moveToNumObj.value.toString().length; n++)
	{
		if(moveToNumObj.value.toString().substring(n, n+1) < "0" || moveToNumObj.value.toString().substring(n,n+1) > "9")
		{
			alert(locale.getMessage("必须填写数字", "Please input numbers"));
			moveToNumObj.focus();
		    return;
		}
	}
	var moveToNum = moveToNumObj.value - 1;
   	var selectObj = document.getElementById(selectId);
    var i = selectObj.selectedIndex;
   	if(selectObj.length <= 0)
   	{
   		alert(locale.getMessage("没有信息可以移动", "no infos movable"));
   		return;
   	}
	if(i < 0)
	{
		alert(locale.getMessage("请选中需要移动的信息", "Please select the infos to move"));
		return;
	}
	var options = selectObj.options;
	if(i == moveToNum || moveToNum < 0 || moveToNum >= options.length)
	{
		alert(locale.getMessage("请填写正确的位置", "Please specify the available place."));
		return;
	}
	var oOption = document.createElement("OPTION");
	oOption.text = options[i].text;
	oOption.value = options[i].value;
	selectObj.remove(i);
	options.add(oOption, moveToNum);
	setIndex(options);
	options[moveToNum].selected = true;
}
function setIndex(options)
{
	for(var i = 0; i < options.length; ++i)
	{
		options[i].text = (i+1) + options[i].text.substring(options[i].text.indexOf('.'));
	}
}
function removeInfo(selectId, imageDivId)
{
	var selectObj = document.getElementById(selectId);
	var showImageDivObj = document.getElementById(imageDivId);
	var i = selectObj.selectedIndex;
	if(selectObj.length <= 0)
	{
		alert(locale.getMessage("没有信息可以移除", "no infos removable"));
		return;
	}
	if(i < 0) 
	{
		alert(locale.getMessage("请选中需要移除的信息", "Please select the infos to remove"));
		return;
	}
	selectObj.remove(i);
	showImageDivObj.innerHTML = "";
}
function getSelectedInfoIds(selectId)
{
	var selectedObj = document.getElementById(selectId);
   	var selectIds = "";
   	for(var i=0; i<selectedObj.length; i++)
   	{
   		if(i==0)
   			selectIds = selectedObj.options[i].value;
   		else
   			selectIds += "," + selectedObj.options[i].value;
   	}
   	return selectIds;
}
