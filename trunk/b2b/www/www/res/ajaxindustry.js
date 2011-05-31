var valueBean = new ValueBean();
function loadCategories()
{
    loadCategoriesToOptions(topCategories, document.getElementById("category1"));
}

function clearOptions(options)
{
	for (var i = options.length - 1; i >= 0; i--)
	{
		options[i] = null;
	}
}

function loadCategoriesToOptions(categories, category)
{
	if(valueBean.isAddAll == true)
	{
		category.options[0] = new Option("全部", "-1");
		for (var i = 1; i <= categories.length; i++)
		{
			category.options[i] = new Option(categories[i-1].name, categories[i-1].id);
		}
	}
	else
	{
		for (var i = 0; i < categories.length; i++)
		{
			category.options[i] = new Option(categories[i].name, categories[i].id);
		}
	}
	
}

function ValueBean()
{
	this.isAddAll = false;
}

function loadCategoriesToOptionsAddAll(categories, category)
{
	category.options[0] = new Option("全部", "-1");
	for (var i = 1; i <= categories.length; i++)
	{
		category.options[i] = new Option(categories[i-1].name, categories[i-1].id);
	}
}

function onChangeCategory1()
{
	var category1 = document.getElementById("category1");
	var category2 = document.getElementById("category2");
//alert(category1.options[category1.selectedIndex].text);
	try
	{
		if (category1.selectedIndex == -1)
		{	
			category1.options[0].selected = true;
		}
		clearOptions(category2.options);
		
		var url ="/ajax.php";
		var params = 'op=getindustries&'+'parentid=' + category1.options[category1.selectedIndex].value;
		var ajax = new Ajax.Request(
			url,
			{method: 'get', asynchronous: false, parameters: params,
				onSuccess: Ajax.onSuccess,
				onFailure: reportError,
				onException: reportError,
				onComplete: null
			} );
		doChangeCategory1(ajax.transport);
	}
	finally
	{
		category1.disabled = false;
	}
	//alert('onChangeCategory1');
}	

function doChangeCategory1(request)
{
    var category2 = document.getElementById("category2");
    json = eval(request.responseText);
    loadCategoriesToOptions(json, category2);
    onChangeCategory2();
}

function reportError(request, ex) 
{
	alert("执行请求过程中发生错误：\n\n  " + ex.message + "  \n\n请刷新页面重试。");
}

function onChangeCategory2()
{
	var category1 = document.getElementById("category1");
	var category2 = document.getElementById("category2");
	var category3 = document.getElementById("category3");
//	category1.disabled = true;
//	category2.disabled = true;
	try
	{
		if (category1.selectedIndex == -1) { return; }
		if (category2.selectedIndex == -1)
		{
			if (categoryId2 != null && categoryId2 != "")
			{
				selectCategory(category2, categoryId2);
				categoryId2 = null;
			}	
			else
				category2.options[0].selected = true;
		}
	
		clearOptions(category3.options);
		var url ="/ajax.php";
		var params = 'op=getindustries&'+'parentid=' + category2.options[category2.selectedIndex].value;
		var ajax = new Ajax.Request(
			url,
			{method: 'get', asynchronous: false, parameters: params,
				onSuccess: Ajax.onSuccess,
				onFailure: reportError,
				onException: reportError,
				onComplete: null
			} );
		doChangeCategory2(ajax.transport);
	}
	finally
	{
		category2.disabled = false;
		category1.disabled = false;
	}
	//alert('onChangeCategory2');
}

function doChangeCategory2(request)	
{
    var category2 = document.getElementById("category2");
	var category3 = document.getElementById("category3");
	var needExPropObj = document.getElementById("needExProp");
    json = eval(request.responseText);

	loadCategoriesToOptions(json, category3);
	if (category3.length > 0)
	{
		category3.disabled = false;
		onChangeCategory3();
	}
	else
	{
		showSelCategory();
		if(needExPropObj.value == 1)
		{
			requestExProps(category2.options[category2.selectedIndex].value);
		}
		else
			needExPropObj.value = 1;
	}
}

function onChangeCategory3()
{
	var category1 = document.getElementById("category1");
	var category2 = document.getElementById("category2");
	var category3 = document.getElementById("category3");
	var needExPropObj = document.getElementById("needExProp");
  
  	//category1.disabled = true;
	//category2.disabled = true;
  	try
  	{
		if (category1.selectedIndex == -1 || category2.selectedIndex == -1) {return;}
		if (category3.selectedIndex == -1)
		{
			if (categoryId3 != null && categoryId3 != "")
			{
				selectCategory(category3, categoryId3);
				categoryId3 = null;
			}
			else
				category3.options[0].selected = true;
		}
		
		showSelCategory();
		if(needExPropObj.value == 1)
		{
			requestExProps(category3.options[category3.selectedIndex].value);
		}
		else
			needExPropObj.value = 1;
	}
	finally
	{
		category2.disabled = false;
		category1.disabled = false;
	}
	//alert('onChangeCategory3');
}
function refreshIndustry()
{
	var category1 = document.getElementById("category1");
	var category2 = document.getElementById("category2");
	var category3 = document.getElementById("category3");
	category1.disabled = false;
	category2.disabled = false;
	category3.disabled = false;
}


function showSelCategory()
{
	var category1 = document.getElementById("category1");
	var category2 = document.getElementById("category2");
	var category3 = document.getElementById("category3");

	if (category1.selectedIndex == -1){ return; }

	var fullCategory = category1[category1.selectedIndex].text;
	var categoryId = category1[category1.selectedIndex].value;
	if (category2.selectedIndex > -1 && category2[category2.selectedIndex].value != -1)
	{
		fullCategory += " >> " + category2[category2.selectedIndex].text;
		categoryId = category2[category2.selectedIndex].value;
	}
	if (category3.selectedIndex > -1 && category3[category3.selectedIndex].value != -1)
	{
		fullCategory += " >> " + category3[category3.selectedIndex].text;
		categoryId = category3[category3.selectedIndex].value;
	}
	document.getElementById("fullCategory").innerHTML = fullCategory;
	document.getElementById("categoryId").value = categoryId;
	document.getElementById("selectedCate").value = categoryId;
	Validation.setLabelDisplay("", "fullCategory");
}

function requestExProps(id) 
{
    document.getElementById("categoryId").value = id;
	var ctype = document.getElementById("categoryType").value.toUpperCase();
	
	if (ctype != "SELL" && ctype != "PRODUCT" && ctype != "BUY") { return; }

	clearExProps();
	if(ctype == "SELL" || ctype=="PRODUCT")
	{
		requestSellExProps(id);
	}
	else if(ctype == "BUY")
	{
		requestBuyExProps();
	}
}

function clearExProps()
{
	var epTable = document.getElementById("expropTable");
    if (epTable == null) return;
	while(epTable.firstChild) 
	{
		 epTable.removeChild(epTable.firstChild);
	}
}

function requestBuyExProps() 
{
	var epTable = document.getElementById("expropTable");	
	var epTr = document.getElementById("expropTr");
	epTr.style.display = "";
	var propTitles = new Array("产品数量", "包装说明", "价格说明", "产品规格");
	var propNames = new Array("productAmount", "packReq", "priceReq", "productSpec");

	for(i = 0; i < propTitles.length; i++) 
	{
		tr = epTable.insertRow(i);
		td = document.createElement("td");
		td.setAttribute("width", "32%");
		td.setAttribute("align", "right");
		td.setAttribute("class", "h12");
		td.setAttribute("className", "h12");
		td.appendChild(document.createTextNode(propTitles[i] + "："));
		input = document.createElement("input");
		input.setAttribute("type", "hidden");
		input.setAttribute("name", "expropnames[" + i + "]");
		input.setAttribute("value", propTitles[i]);
		td.appendChild(input);
		tr.appendChild(td);
		td = document.createElement("td");
		td.setAttribute("class", "h12");
		input = document.createElement("input");
		input.setAttribute("type", "text");
		input.setAttribute("id", propNames[i]);
		input.setAttribute("name", "exprops[" + i + "]");
		input.setAttribute("style", "width:173px;height:21px");
		input.setAttribute("size", "23");
		input.setAttribute("maxlength", "80");
		td.appendChild(input);
		tr.appendChild(td);
	}
}

function requestSellExProps(id) 
{
	if (id == null || id == "") { return; }

	var url ="/ajax.php";
	var params = 'op=getexprops&industryid=' + id;
	var ajax = new Ajax.Request(
		url,
		{method: 'get', asynchronous: false, parameters: params,
			onSuccess: Ajax.onSuccess,
			onFailure: reportError,
			onException: reportError,
			onComplete: null
		} );
	doSellExProps(ajax.transport);
}

function doSellExProps(request) 
{
	var props = eval(request.responseText);
    var epTable = document.getElementById("expropTable");	
	var epTr = document.getElementById("expropTr");
    
    if (epTable == null) return;

	if (props.length == 0)
	{
		epTr.style.display = "none";
		return;
	}
	else
	{
		epTr.style.display = "";
	}
	
	for(i = 0; i < props.length; i++) 
	{
		data = props[i];
		tr = epTable.insertRow(i);
		td = document.createElement("td");
		td.setAttribute("width", "32%");
		td.setAttribute("align", "right");
		td.setAttribute("class", "h12");
		td.setAttribute("className", "h12");
		td.appendChild(document.createTextNode(data.name + "："));
		input = document.createElement("input");
		input.setAttribute("type", "hidden");
		input.setAttribute("name", "expropnames[" + data.id + "]");
		input.setAttribute("value", data.name);
		td.appendChild(input);
		tr.appendChild(td);
		td = document.createElement("td");
		td.setAttribute("class", "h12");
		input = document.createElement("input");
		input.setAttribute("type", "text");
		input.setAttribute("id", "exprop_" + data.id);
		input.setAttribute("name", "exprops[" + data.id + "]");
		var defaultvalue = (data.defaultvalue == null) ? "" : data.defaultvalue;
		input.setAttribute("value", defaultvalue);
		input.setAttribute("style", "width:173px;height:21px");
		input.setAttribute("size", "23");
		input.setAttribute("maxlength", "80");
		td.appendChild(input);
		var unit = (data.unit == null) ? "" : data.unit;
		td.appendChild(document.createTextNode(unit));
		if (data.optional == "0")
		{
   			td.appendChild(document.createTextNode("(*)"));
		}
		tr.appendChild(td);
	}	
}

var industryDivObj = null;
var categoryId1,categoryId2,categoryId3;
var indudstryDiv = null;
var inselect = null;



function searchIndustryByKW(kw, obj)
{
    
	industryDivObj = obj;
	var url ="/ajax.php";
	//var params = 'op=searchindustrypaths&'+'keyword=' + encodeURIComponent(kw.toUpperCase());
	var params = 'op=getIndustryCatepaths&'+'keyword=' + encodeURIComponent(kw.toUpperCase());
	var ajax = new Ajax.Request(
		url,
		{method: 'get', asynchronous: false, parameters: params,
			onSuccess: Ajax.onSuccess,
			onFailure: reportError,
			onException: reportError,
			onComplete: doSearchIndustryByKW
		} );
}

function doSearchIndustryByKW(request)
{
	var json = eval(request.responseText);
	
	var strHtml_1 = "&nbsp;&nbsp;<a href=\"#\" onclick=\"setBoxSelectd(%s1, %s2, %s3);closeDiv();\"><font size=\"2\" color=\"blue\">%s4>>%s5>>%s6</font></a>";
	var strHtml_2 = "&nbsp;&nbsp;<a href=\"#\" onclick=\"setBoxSelectd(%s1, %s2, '');closeDiv();\"><font  size=\"2\" color=\"blue\">%s3>>%s4</font></a>";

	var strHtml = "<div id=\"industrylist\" align=\"left\"><br><br>";
	if (json.length > 0)
	{
		for (var i = 0; i < json.length; i++)
		{
			var path = json[i];					
			var strRow = "";
			if (path.length == 3) 
			{
				strRow = strHtml_1.replace("%s1", path[0].id)
						.replace("%s2", path[1].id)
						.replace("%s3", path[2].id)
						.replace("%s4", path[0].name)
						.replace("%s5", path[1].name)
						.replace("%s6", path[2].name);
			}
			else if (path.length == 2)
			{
				strRow = strHtml_2.replace("%s1", path[0].id)
						.replace("%s2", path[1].id)
						.replace("%s3", path[0].name)
						.replace("%s4", path[1].name);
			}
			strHtml += strRow + "<br><br>";
		}
	}
	else
	{
		strHtml += "<font size=\"3\" color=\"red\">对不起，没有找到相匹配的行业分类！</font>";
	}
	strHtml += "</div>";
	industryDivObj.innerHTML = strHtml;
	
	showPopup("行业及产品门类");
}

function showPopup(ptitle)
{
    var popDivIdObj = document.getElementById("popDivId");
    var pwidth = "400";
    var pheight = "240";
    win = new Window(Application.getNewId(), {className: "dialog",  width:pwidth, height:pheight, 
    zIndex: 100, resizable: true, title:ptitle, showEffect:Element.show, hideEffect: Element.hide, draggable:true})
    win.getContent().innerHTML= document.getElementById("industryDiv").innerHTML;
        
    popDivIdObj.value = win.getId();
    //win.setStatusBar("");
    win.showCenter(1); 
}

function setBoxSelectd(fId, sId, tId)
{
	selectIndustryPath(fId, sId, tId);
}

function selectIndustryPath(fId, sId, tId)
{
	categoryId1 = fId;
	categoryId2 = sId;
	categoryId3 = tId;
	var category1 = document.getElementById("category1");
	var category2 = document.getElementById("category2");
	var category3 = document.getElementById("category3");
	
	selectCategory(category1, categoryId1);
	onChangeCategory1();
}

function selectCategory(category, categoryId)
{
	for(var i = 0; i<category.length; i++)
	{
		if(categoryId == category[i].value)
		{
			category[i].selected = true;
		}
	}
}

function closeDiv()
{
	var popDivIdObj = document.getElementById("popDivId");
	Windows.close(null, popDivIdObj.value);
}

function autoLoadCategoryByDefault(default_lev1_category, default_lev2_category, default_lev3_category)
{
    if (default_lev1_category != "")
	    selectIndustryPath(default_lev1_category, default_lev2_category, default_lev3_category);
}

/**************** category data ****************/

function include(filename)
{
	var thisname = "ajaxindustry.js";
	var scripts = document.getElementsByTagName("script");
	for (i = 0; i < scripts.length; i++) 
	{
		if (scripts[i].src.match(thisname))
		{
			filename = scripts[i].src.replace(thisname, filename);
			break;
		}
  	}
    document.write('<script');
    document.write(' language="javascript"');
    document.write(' type="text/javascript"');
    document.write(' src="' + filename + '">');
    document.write('</' + 'script>');
}

function Category(id, name)
{
	this.id = id;
	this.name = name;
}

function C(id, name)
{
	return new Category(id, name);
}
var topCategories=[C("1", "办公、文教"),C("239", "电脑、软件"),C("372", "电工电气"),C("629", "化工"),C("1176", "家用电器"),C("1277", "建筑、建材"),C("1536", "能源"),C("1590", "农业"),C("1851", "食品、饮料"),C("1970", "医药、保养"),C("2056", "印刷"),C("2149", "加工"),C("2214", "安全、防护"),C("2300", "包装"),C("2381", "纸业"),C("2442", "纺织、皮革"),C("2623", "服装"),C("2738", "服饰"),C("2993", "机械及行业设备"),C("3186", "精细化学品"),C("3368", "仪器仪表"),C("3504", "交通运输"),C("3615", "礼品、工艺品、饰品"),C("3816", "汽摩及配件"),C("3967", "通讯产品"),C("4058", "玩具"),C("4157", "冶金矿产"),C("4289", "商务服务"),C("4378", "二手设备转让"),C("4386", "库存积压"),C("4396", "照明工业"),C("4493", "电子元器件"),C("4673", "传媒"),C("4759", "五金、工具"),C("5029", "环保"),C("5055", "家居用品"),C("5202", "运动、休闲"),C("231", "其他未分类")];



function loadIndusrtyCate(keyword, objDiv, inSelect,type)
{
    objDiv.innerHTML = "<img src='/resource/js/loading.gif'>";
    indudstryDiv = objDiv;
    inselect = inSelect;
    var url ="/ajax.php";
    var params = 'op=getIndustryCatepaths&'+'keyword=' + encodeURIComponent(keyword.toUpperCase())+'&type='+type;
    var ajax = new Ajax.Request(
        url,
        {method: 'get', asynchronous: false, parameters: params,
        //    onSuccess: Ajax.onSuccess,
            onSuccess: function(){ $("id_info").style.display = '';},
            onFailure: function(){$("id_info").style.display = 'none';},
            onException: reportError,
            onComplete: doSearchIndustrySuc
        } );    
}


function doSearchIndustrySuc(request)
{    
    var json = eval(request.responseText);
    var strHtml_1 = "<label onclick=\"showIndustry(%s3,document.publishForm.indusRadio)\"><input type=\"radio\" name=\"indusRadio\" id=\"indusRadio\" value=\"%s3\"><span id='%s3'>%s4>>%s5>>%s6</span></label>";
    var strHtml_2 = "<label onclick=\"showIndustry(%s2,document.publishForm.indusRadio)\"><input type=\"radio\" name=\"indusRadio\" id=\"indusRadio\" value=\"%s2\"><span id='%s2'>%s3>>%s4</span></label>";
    var strHtml = "<div id=\"industrylist\" align=\"left\">";
    if (json.length > 0)
    {
        for (var i = 0; i < json.length; i++)
        {
            var path = json[i];
                            
            var strRow = "";
            if (path.length == 3) 
            {
                strRow = strHtml_1
                        .replace("%s2", path[1].id)
                        .replace("%s3", path[2].id)
                        .replace("%s3", path[2].id)
                        .replace("%s3", path[2].id)
                        .replace("%s4", path[0].name)
                        .replace("%s5", path[1].name)
                        .replace("%s6", path[2].name);
            }
            else if (path.length == 2)
            {
                strRow = strHtml_2
                         .replace("%s2", path[1].id)
                         .replace("%s2", path[1].id)
                         .replace("%s2", path[1].id)
                         .replace("%s3", path[0].name)
                         .replace("%s4", path[1].name);                
            }
            strHtml += strRow ;
        }
        strHtml += "<label><input type=\"radio\" name=\"indusRadio\" id=\"indusRadio\" style=\"display:none\"></label>"; ;
    }
    else
    {
        inselect.style.display = "";
        indudstryDiv.style.display = "none";
        $("id_info").style.display = "none";
        var indMRUObj = document.getElementById("indMRU");
        indMRUObj.style.display = "";
        var indPathStrObj = document.getElementById("indPathStr");
        indPathStrObj.style.display = "";
        var indRecommendObj = document.getElementById("indRecommend");
        indRecommendObj.style.display = "none";
		$("id_info").style.display = 'none';
    }
    strHtml += "</div>";         
    indudstryDiv.innerHTML = strHtml;    
}

function showIndustry(id, raidoCheck)
{
   for(var i = 0 ; i < raidoCheck.length; i++)
    {        
    	
        if(raidoCheck[i].value == id)
        {
           raidoCheck[i].checked = true;
           requestExProps(id);
           var infoObj =  document.getElementById(id);
           var cateObj = document.getElementById('cateShow');
           var selectedInudstry = document.getElementById('selectIndustry');
           cateObj.style.display = "";
           selectedInudstry.innerHTML = infoObj.innerHTML;
        }
    }
}


