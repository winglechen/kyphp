/**
 *validator 2.0 
 *
 *@author 陈思源
 *
 *注意：
 *      框架应用了jquery的ajax调用（若在验证中使用ajax请预先加载jquery库）
 *
 *
 *
 *
 *
 */

function in_array(val, arr)
{
     if(!arr || !arr.length || arr.length <=0 ) return false;  
     
     for(var i = 0; i < arr.length; i++)
     {
      if(val == arr[i]) return true;
     }
     
     return false;
}

function trim(str) 
{
	if(typeof(str) == 'string') {
		return str.replace(/^\s|\s*$/g,"");
	} else {
		return str;
	}
}

function getFileExt(fileNames)
{
	if(fileNames.lastIndexOf(".") == -1) {
		return '';	
	} else {
		return fileNames.substr(fileNames.lastIndexOf(".")+1,fileNames.length);	
	}
}

var validator = {
    check       : ['required','dataType','repeat','num','range','ajax','reg'/*,'ext'*/],
    orgin       : ['readOnly'],
    jsFunc      : ['next','nextStep','dataUrl'],
    phpFunc     : ['pid','default','option'],
    
 
    //必填项检测
    required    : function(obj){
        if(obj.getAttribute('required') == null) return false;

        var inputNum = this.getInputNum(obj);

        if(inputNum > 0){
            return false;
        }
        
        var err      = (obj.getAttribute('required_err') != null) ? obj.getAttribute('required_err') : null;
            
        if(err == null) {
            err      = (obj.getAttribute('err') != null) ? obj.getAttribute('err') : null;
        }
        
        if(err == null) {
            err      = (obj.getAttribute('label') != null) ? obj.getAttribute('label') : (obj.getAttribute('lang') == null || obj.getAttribute('lang') == '' ) ? '该项':'This Item ';
            if(obj.getAttribute('lang') == null || obj.getAttribute('lang') == '' ) {
                err = err + '不能为空';    
            } else {
                err = err + ' can\'t be null';    
            }  
        }
        
        return err;
    },
    
    //数据模型检测
    dataType    : function(obj){
        if(obj.getAttribute('dataType') == null) return false;
        var types = {
                email       : /([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)/,
                chinese     : /^[\u0391-\uFFE5]+$/,
                dateType    : /^\d{4}-\d{2}-\d{2}$/,
                int         : /^\d+$/,
                userName    : /^[a-zA-Z][a-zA-Z0-9]+$/,
                password    : /^[a-zA-Z0-9]+$/,
				float		: /^\d\.\d*$/,
                mobile      : /^1[3|8|5]\d{9}$/,
				phone		: /^((\(\d{2,3}\))|(\d{3}\-))?(\(0\d{2,3}\)|0\d{2,3}-)?[1-9]\d{6,7}(\-\d{1,4})?$/,
				url		    : /^http:\/\/[A-Za-z0-9]+\.[A-Za-z0-9]+[\/=\?%\-&_~`@[\]\':+!]*([^<>\"\"])*$/,
				zip			: /^[1-9]\d{5}$/,
				qq			: /^[1-9]\d{4,8}$/,
				double		: /^[-\+]?\d+(\.\d+)?$/,
				english		: /^[A-Za-z]+$/,
			    unsafe		: /^(([A-Z]*|[a-z]*|\d*|[-_\~!@#\$%\^&\*\.\(\)\[\]\{\}<>\?\\\/\'\"]*)|.{0,5})$|\s/,  
                schoolno    : /^[A-Za-z0-9]{5,15}$/,
                encn        : /^[0-9a-zA-Z\u0391-\uFFE5]{1,30}$/,
                price       : /^\d+.\d{1,2}$|^\d+$/
            };
            
        var dataType = obj.getAttribute('dataType');

         //如果数据模型存在，刚进行判断
         if(dataType in types){
            if(types[dataType].test(obj.value)) return false;
         }
         
        var err      = (obj.getAttribute('dataType_err') != null) ? obj.getAttribute('dataType_err') : null;
            
        if(err == null) {
            err      = (obj.getAttribute('err') != null) ? obj.getAttribute('err') : null;
        }
        
        if(err == null) {
            err      = (obj.getAttribute('label') != null) ? obj.getAttribute('label') : (obj.getAttribute('lang') == null || obj.getAttribute('lang') == '' ) ? '该项':'This Item';
            if(obj.getAttribute('lang') == null || obj.getAttribute('lang') == '' ) {
                err = err + '输入格式不正确';    
            } else {
                err = err + ' is not validated';    
            }  
        }
        return err;
        
    },
    
    //正则表达式
    reg         : function(obj){
        if(obj.getAttribute('reg') == null) return false;
        var reg = obj.getAttribute('reg');
              
         //正则判断
         if(reg.test(obj.value)) return false;
         
        var err      = (obj.getAttribute('reg_err') != null) ? obj.getAttribute('reg_err') : null;
            
        if(err == null) {
            err      = (obj.getAttribute('err') != null) ? obj.getAttribute('err') : null;
        }
        
        if(err == null) {
            err      = (obj.getAttribute('label') != null) ? obj.getAttribute('label') : (obj.getAttribute('lang') == null || obj.getAttribute('lang') == '' ) ? '该项':'This Item';
            if(obj.getAttribute('lang') == null || obj.getAttribute('lang') == '' ) {
                err = err + '输入格式不正确';    
            } else {
                err = err + ' is not validated';    
            }  
        }
        return err;
    },
    
    //所填内容数量测试
    num         : function(obj){
        if(obj.getAttribute('num') == null) return false;
        var inputNum = this.getInputNum(obj);
        var num      = obj.getAttribute('num');
        var num= num;
		var num_small  = -1;
        var num_big    = -1;
        
        if(num.indexOf('-') != -1) {
           var nums     = num.split('-');
           num_small = (nums[0] != '') ? nums[0] : 0;
           num_big   = (nums[1] != '') ? nums[1] : 0;     
        } 

        //=
        if(num_big == -1){
            if(inputNum == num_small) return false;
        //最小值   
        } else if(num_small == 0) {
            if(inputNum < num_big) return false;
        //最大值     
        } else if(num_big == 0) {
            if(inputNum > num_small) return false;
        //between
        } else{
            if(inputNum > num_small && inputNum < num_big) return false;
        } 
        
      
        
        var err      = (obj.getAttribute('num_err') != null) ? obj.getAttribute('num_err') : null;
            
        if(err == null) {
            err      = (obj.getAttribute('err') != null) ? obj.getAttribute('err') : null;
        }
        
        if(err == null) {
            err      = (obj.getAttribute('label') != null) ? obj.getAttribute('label') : (obj.getAttribute('lang') == null || obj.getAttribute('lang') == '' ) ? '该项':'This Item ';
            if(obj.getAttribute('lang') == null || obj.getAttribute('lang') == '' ) {
                err = err + '格式错误';    
            } else {
                err = err + ' is not validated';    
            }  
        }
        
        return err;
    },
    
    //text类型独享验证
    range       : function(obj){
        if(obj.getAttribute('range') == null) return false;
        var inputText = trim(obj.value);
        var num      = obj.getAttribute('range');
        var num_small= num;
        var num_big  = -1;
        
        if(num.indexOf('-') != -1) {
           var nums     = num.split('-');
           num_small = (nums[0] != '') ? nums[0] : 0;
           num_big   = (nums[1] != '') ? nums[1] : 0;     
        } 
        
        //=
        if(num_big == -1){
            if(inputText == num_small) return false;
        //最小值   
        } else if(num_small == 0) {
            if(inputText > num_small) return false;
        //最大值     
        } else if(num_big == 0) {
            if(inputText < num_small) return false;
        //between
        } else{
            if(inputText > num_small && inputText < num_big) return false;
        } 
         
        
        var err      = (obj.getAttribute('dataType_err') != null) ? obj.getAttribute('dataType_err') : null;
            
        if(err == null) {
            err      = (obj.getAttribute('err') != null) ? obj.getAttribute('err') : null;
        }
        
        if(err == null) {
            err      = (obj.getAttribute('label') != null) ? obj.getAttribute('label') : (obj.getAttribute('lang') == null || obj.getAttribute('lang') == '' ) ? '该项':'This Item ';
            if(obj.getAttribute('lang') == null || obj.getAttribute('lang') == '' ) {
                err = err + '格式错误';    
            } else {
                err = err + ' is not validated';    
            }  
        }
        return err;
    },
    
    //ajax验证
    ajax        : function(obj){
        if(obj.getAttribute('ajax') == null) return false;
        
        var result = $.ajax({
                    		url:obj.getAttribute('ajax')+encodeURI(trim(obj.value)),
                    		async:false
                        }).responseText;
						
		if(result == 1){
			return false;
		}else{
			var err      = (obj.getAttribute('ajax_err') != null) ? obj.getAttribute('ajax_err') : null;
            
	        if(err == null) {
	            err      = (obj.getAttribute('err') != null) ? obj.getAttribute('err') : null;
	        }
	        
	        if(err == null) {
	            err      = (obj.getAttribute('label') != null) ? obj.getAttribute('label') : (obj.getAttribute('lang') == null || obj.getAttribute('lang') == '' ) ? '该项':'This Item ';
	            if(obj.getAttribute('lang') == null || obj.getAttribute('lang') == '' ) {
	                err = err + '格式错误';    
	            } else {
	                err = err + ' is not validated';    
	            }  
	        }
			return err;
		}				
		
    },
    
    //文件后缀名验证
    ext         : function(obj){
        return false;
    },
    
    //重复验证
    repeat      : function(obj){
        if(obj.getAttribute('repeat') == null) return false;
        
        var repeatObject = trim(document.getElementById(obj.getAttribute('repeat')).value);
        var repeatValue  = trim(obj.value);
        
        if(repeatObject == repeatValue) return false;
        
        var err      = (obj.getAttribute('repeat_err') != null) ? obj.getAttribute('repeat_err') : null;
            
        if(err == null) {
            err      = (obj.getAttribute('err') != null) ? obj.getAttribute('err') : null;
        }
        
        if(err == null) {
            err      = (obj.getAttribute('label') != null) ? obj.getAttribute('label') : (obj.getAttribute('lang') == null || obj.getAttribute('lang') == '' ) ? '该项':'Items ';
            if(obj.getAttribute('lang') == null || obj.getAttribute('lang') == '' ) {
                err = err + '与原始项不匹配';    
            } else {
                err = err + ' do not match';    
            }  
        }
        
        return err;
    },
    
    //提示下一项
    next        : function(obj){
        if(obj.getAttribute('next') == null) return ;
        document.getElementById(obj.getAttribute('next')).focus();
    },
    
    //联动菜单下一项
    nextStep    : function(obj){
        if(obj.getAttribute('nextStep') == null) return ;
        var nextItem = document.getElementById(obj.getAttribute('nextStep'));
	    var pid      = obj.options[obj.selectedIndex].value;
	  
	    
	    //清空下一级选项
	    var len = 0;
	    if(nextItem.length > 0 && (nextItem.options[0].value == '' || nextItem.options[0].value == -1) ) len = 1;
	    nextItem.length=len;
	    
	    if(nextItem.getAttribute('nextStep')){
	        var root = document.getElementById(nextItem.getAttribute('nextStep')); 
	        root.length = 0;  
	    }
	    
	    if(pid == '' || pid == -1) return ;
	    //填充选项
	    var result = $.ajax({
                    		url:obj.getAttribute('dataUrl')+pid,
                    		async:false
                        }).responseText;              
        var results = eval("(" + result + ")");
        for(key in results){
            var oOption = new Option(results[key]['name'],results[key]['id']);
            nextItem.options[nextItem.length] = oOption;
        }
    },
    
    //获取输入内容的数量
    getInputNum : function(obj){
        if(obj.tagName && obj.tagName.toLowerCase() == 'select'){
            return this.selectNum(obj);
        }
        if(obj.tagName && obj.tagName.toLowerCase() == 'textarea'){
            return trim(obj.value).length;
        } 
            
        switch(obj.type.toLowerCase()){
            case 'text':
                return trim(obj.value).length;
                break;
			case 'password':
                return trim(obj.value).length;
                break;
            case 'checkbox':
                return this.checkboxNum(obj);
                break;
            case 'radio':
                return this.checkboxNum(obj);
                break;
        }
    },
    
    //多选单选框数目统计
    checkboxNum : function(obj){
        var num = 0;
        var inputName = obj.name;
        var items = document.getElementsByName(inputName);
        
        for(var i=0; i<items.length; i++) {
			if(items[i].checked == true) {
				num++;	
			}	
		}
		
		return num;
    },
    
    //下拉框数目统计
    selectNum   : function(obj){
        var num = 0;
		for(var i=0; i<obj.length; i++) {
			if(obj.options[i].selected == true && obj.options[i].value != '' && obj.options[i].value != -1){
				num++;
			}
		}
		return num;
    }
    
};


/**
 *显示匹配结果
 *
 */
function showMessage(obj,msg,styleType){
    //样式设定
	var classHint  = (obj.getAttribute('classHint')  != null) ? obj.getAttribute('classHint')  : 'hint';
	var classErr   = (obj.getAttribute('classErr') != null)   ? obj.getAttribute('classErr')   : 'no';
	var classRight = (obj.getAttribute('classRight') != null) ? obj.getAttribute('classRight') : 'yes';
	var showStyle = '';
	switch(styleType){
	    case 'hint':
	        showStyle = classHint;
	        break;
	    case 'wrong':
	        showStyle = classErr;
	        break;
	    case 'right':
	        showStyle = classRight;
	        break;    
	}
	
	var messageSpanId = (obj.getAttribute('messageSpan')  != null) ? obj.getAttribute('messageSpan')  : 'hint_' + obj.name;

    if(document.getElementById(messageSpanId)) {
		var	sp =  document.getElementById(messageSpanId);	
	} else {
		var sp = document.createElement('SPAN');
		obj.parentNode.appendChild(sp);
		sp.id  = messageSpanId;
	}
	
	sp.setAttribute('class',showStyle);
	sp.setAttribute('className',showStyle);
	sp.innerHTML = '<span style="color:red;" >'+msg+'</span>';
	
}

/**
 *检测，返回匹配或错误信息
 *
 */
function validate(obj){
    for(check in validator.check){
		if(obj.tagName &&  obj.tagName.toLowerCase() == 'input' && obj.getAttribute('required') == null && trim(obj.value) == '') return false;
		
        var err = validator[validator.check[check]](obj);
        if(err !== false) {
           return err;    
        }    
    }
    
    return false;
}

//checkInput 事件由onfocus事件触发
function checkInput(obj){	

	//显示提示信息
    if(obj.getAttribute('hint') != null) showMessage(obj,obj.getAttribute('hint'),'hint');

    //onblur事件添加
    obj.onblur = function(){   
        //validation检测
	    var msg = validate(this);
		
		

    	//检测信息提示
    	if(msg !== false){
            showMessage(this,msg,'wrong'); 
    	}else{
    	   var rightMsg = (this.getAttribute('right') != null ) ? this.getAttribute('right') : '';
            showMessage(this,rightMsg,'right'); 
    	}
    	 	
	    //2下一级聚焦 
	    if(this.getAttribute('next') != null) {
	       validator.next(this);
	    }  		    
    };
	

	//select
	obj.onchange = function(){
	    //是否有下一部行为
	    //1多级select联动
	    if(this.getAttribute('nextStep') != null) {
	       validator.nextStep(this); 
	    }
				
	}
}

//提交验证
function checkSubmit(obj,classHint,classWrong,classRight){
    //样式设定
	classHint  = (classHint  != null) ? classHint  : 'hint';
	classWrong = (classWrong != null) ? classWrong : 'no';
	classRight = (classRight != null) ? classRight : 'yes';
	
    //验证
    var state       = 0;
    var firstErrObj = null;
    var firstErr    = '';

    for(var i=0,cnt=obj.length; i<cnt; i++){
        var msg = validate(obj[i]);
         
        if(msg != false){
    	    showMessage(obj[i],msg,'wrong'); 
    	    if(firstErrObj == null) {
    	       firstErrObj = obj[i];
    	       firstErr    = msg; 
    	    }
    	    state = 1;	
        }
    }

    if(state == 1){
        firstErrObj.focus();
        showMessage(firstErrObj,firstErr,'wrong');
        return false;  
    }
    
    return true;
}

function setDefault()
{
    
}

//全选
function selChk(obj,name){
	var selectAll   =  document.getElementsByName(obj.name);
	var items		=  document.getElementsByName(name);
	var status      =  false;

	if (obj.checked == true){
		status = true;
	}else{
		status = false;
	}
	for(var i=0, cnt=selectAll.length; i<cnt; i++){
		selectAll[i].checked=status;
	}
	for(var i=0, cnt=items.length; i<cnt; i++){
		items[i].checked=status;
	}
}

//全选后又取消选择某一个或几个的处理（就是取消全选框的选中状态）
function notSelChk(){
	var selecta = document.getElementById("ridall");
	if(selecta.checked == true){
		selecta.checked = false;
	}
}

//添加简历到人才库 处理
function addposijs(obj){
	var temp="";
	var formid = document.getElementById( "pid");
	for(var i=0;i<formid.rid.length;i++)
	{
		if(formid.rid[i].checked)
		temp += temp == '' ? formid.rid[i].value : ","+formid.rid[i].value;
	}
	
	if(temp=='') {
		alert('请选择至少一封简历操作');
		return;	
	}
	
	var $obj = $(obj);
	var position = $obj.position();
	var objDiv=document.getElementById( "addp");
	$("#picinfo").val(temp);
	objDiv.style.left = (position.left) + 'px';
	objDiv.style.top = (position.top - 200) + 'px';
	objDiv.style.display = "";

}

//添加简历到人才库 处理配套AJAX返回值处理
function addpos(){
	$.ajax({
		type:'POST',
		url:'/resumesearch/addresume/utime/'+new Date().getTime(),
		data:$("#add").serialize(),
		success:function(msg){
		alert(msg);
		}
	});

	var objDiv=document.getElementById( "addp");
	objDiv.style.display = "none";
}


//关闭、取消层
function closediv(cdiv){
	
	var objDiv=document.getElementById(cdiv);
	objDiv.style.display = "none";
}

function postform(){

	document.reForm.submit();
	
}


function checkValid(frmID,classHint,classWrong,classRight)
{
    var frm = document.getElementById(frmID);
    
    for(var i=0,cnt=frm.length; i<cnt; i++){
        frm[i].onfocus=function(){
            checkInput(this);    
        };   
    }
    
	var submitFunc = frm.getAttribute('onsubmit');
    frm.onsubmit=function(){
		valid = checkSubmit(this,classHint,classWrong,classRight); 
        //if(submitFunc != null) valid =  eval(submitFunc()) | eval(submitFunc);
        if(valid == false) return false;
          
        this.submit();
    };
}


