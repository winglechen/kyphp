function trimString(str)
{
  var i,j;
  if(str == "") return "";
  for(i=0;i<str.length;i++)
    if(str.charAt(i) != ' ') break;
  if(i >= str.length) return "";

  for(j=str.length-1;j>=0;j--)
    if(str.charAt(j) != ' ') break;

  return str.substring(i,j+1);
}
function IsValidUserNameChar( str ) 
{       
	//init      
	var n = 0;      
	var flag = false;       
	var arrSpecialChar = new Array("!", "$", "(", ")", "*", "+", ",", "-", ".", ":", ";", "=", "@", "[", "]" , "^", "_", "`");              

	//init      
	str = trimString( str );                

	//check     
	for( i=0;i<str.length;i++ )     
	{           
		//check number          
		if( str.charAt(i)>="0" && str.charAt(i)<="9" )          
		{               
			n++;            
		}           

		//check A-Z a-z         
		if( (str.charAt(i)>="A" && str.charAt(i)<="Z") || 
			(str.charAt(i)>="a" && str.charAt(i)<="z") )          
		{               
			n++;            
		}           

		//check special char            
		for( j=0;j<arrSpecialChar.length;j++ )          
		{               
			if( str.charAt(i)==arrSpecialChar[j] )              
			{                   
				n++;                    
				break;              
			}           
		}       
	}               
	
	//return        
	if( n==str.length )     
	{           
		return true;        
	}       

	return false;   
}

 /**
     * 密码规则检查
     * return 0 - pass check
     * return 1 - oldpwd and newpwd is same
     * return 2 - length error
     * return 3 - lost number or letter
    **/
    function checkPwdRule( o, s )
    {/*{{{*/
        //-- init 1
        o = trimString(o);
        s = trimString(s);

        //-- comp password
        if( o == s )
        {
            return 1;
        }

        //-- init 2
        fn = fl = false;
        s = s.toUpperCase();
        
        //-- string length
        if( s.length < 6 || s.length > 20 )
        {
            return 2;
        }

        //-- number
        for( i=48; i<=57; i++ )
        {
            if( -1 != s.indexOf(String.fromCharCode(i)) )
            {
                fn = true;
                break;
            }
        }

        //-- letter
        for( i=65; i<=90; i++ )
        {
            if( -1 != s.indexOf(String.fromCharCode(i)) )
            {
                fl = true;
                break;
            }
        }

        if( fn && fl )
        {
            return 0;
        }
        
        return 3;
    }/*}}}*/


	function CtoH(value)
	{
		var str=value;
		var result="";
	   for (var i = 0; i < str.length; i++)
		{
		  if (str.charCodeAt(i)==12288)
			{
			result+= String.fromCharCode(str.charCodeAt(i)-12256);
			continue;
			}
		  if(str.charCodeAt(i)>65280 && str.charCodeAt(i)<65375)
		     result+= String.fromCharCode(str.charCodeAt(i)-65248);
			else 
			 result+= String.fromCharCode(str.charCodeAt(i));
		}
		return result;
	} 




function Validationer()
{
	this.fun=null;
	this.isValid=true;
	this.isOnblurValidation=false;
	this.targets=new Array();
	this.createInfoTag=function(ctr){
		err=document.createElement("span");	
		ctr.parentNode.insertBefore(err,ctr.nextSibling);
		err.id=ctr.id+"_err";	 		
		return err;
	}	
	this.register=function(target,msg,funName,args){
		if (this.targets[target]==null){this.targets[target]=new Array();}
    var a=new Object();
    a.msg=msg;
    a.funName=funName.toLowerCase();
    a.args=args;
    this.targets[target].push(a);

	}
	this.unregister=function(target){
		this.targets[target]=new Array();
	}
	
	this.validMsg="";
	this.inValidControls=new Array();
	this.setHideStyle=function(ce){
		ce.style.display='none';	
	}
	this.setErrStyle=function(ce){
		ce.style.backgroundColor='#FFFF99';
		ce.style.backgroundRepeat='no-repeat';
		ce.style.backgroundPosition='left center';
		ce.style.padding='4px';
		ce.style.display='';
		ce.style.lineHeight= '150%';
		ce.style.fontSize='12px';
		ce.style.color="#000000";
	}
	this.resource = '/res';
	this.getResource=function(){
		return this.resource;
	}
	this.setResource=function(value){
		this.resource = value;
	}
	this.setInfoDisplay=function(info,validResult,target)
	{
		if (validResult==""){
			this.setHideStyle(info);
			info.innerHTML='';
		}
		else{
			this.setErrStyle(info);
			info.innerHTML='<br><image src="res/img/chkerr.gif" align=middle />'+validResult; 
		}
		this.setLabelDisplay(validResult,target);
	}
	this.setLabelDisplay=function(validResult,target)
	{
		if (target==null) return;
		var lbl=document.getElementById("lbl_"+target);
		if (lbl==null) return;
		if (validResult=="")
		{
			lbl.className = "inputlabelok";// 显示打勾
		}
		else
		{
			lbl.className = "inputlabel";// 隐藏打勾
		}
	}
	this.displayErr=function(){
	 	var isSetFocus=false;
 		for(ctr in this.inValidControls){	 			
 			if (typeof(ctr)=='function'){alert(ctr);} 
 			if(typeof(this.inValidControls[ctr])=='string'){
 			var c=document.getElementById(ctr);
 			var ce=document.getElementById(ctr+"_err")||this.createInfoTag(c);
 			ce.innerHTML=this.inValidControls[ctr];
      		this.setInfoDisplay(ce,this.inValidControls[ctr]);
 			if (!isSetFocus){c.focus();isSetFocus=true;}						
 			}
		}
	} 
	this.valid=function(target){
	 	var isValid=true;
	 	var validMsg="";
 		for( valid in this.targets[target]){
 			var a=this.targets[target][valid];
	 		if (typeof(a)=='function'){continue;} 
 			var t=document.getElementById(target);	 	
 			if(t==null){alert("网页上没有id="+target+"的控件");}
 			if(a.funName!='noblank'&&trimString(t.value)==''){
 					test=true;
 			}
 			else{
	 			if (this.fun[a.funName](trimString(t.value),a.args)==false){ 			
		 			isValid=false;
	 				validMsg+=a.msg+"\n";
	 			}
 			}
	 	}
		var te=document.getElementById(target+"_err");
		if(te==null){te=this.createInfoTag(t);}
    	this.setInfoDisplay(te,validMsg,target);
		return (""==validMsg);
  }  
   
	this.validAll=function(){
	 	this.isValid=true;
		this.inValidControls=new Array();
	 	this.validMsg="";
	 	for (target in this.targets){
		 	var test=true;
		 	if (typeof(this.targets[target])=='function'){continue;} 
	 		for( valid in this.targets[target]){
	 			var a=this.targets[target][valid];
		 		if (typeof(a)=='function'){continue;} 
	 			//alert(target+' '+valid+" "+a);
	 			var t=document.getElementById(target);
	 			if(t==null){
	 				t = document.getElementsByName(target);
	 				if(t!=null&& t.length!=null){
	 					t = t[0];
	 				}
	 			}
	 			if(t==null){alert("网页上没有id="+target+"的控件");}
	 			var te=document.getElementById(target+"_err");
	 			if(te==null){te=this.createInfoTag(t);}
	 			te.innerHTML=""; 	
	 			var tvalue=t.value;
	 			tvalue=trimString(t.value);
	 			if(a.funName!='noblank'&&tvalue==''){
	 					test=true;
	 			}
	 			else{
		 			if (this.fun[a.funName](tvalue,a.args)==false){ 			
			 			this.isValid=false;
			 			if (this.inValidControls[target]==undefined){this.inValidControls[target]="";}
  	 				this.inValidControls[target]+=a.msg+"\n";
  	 				this.validMsg+=a.msg+"\n";
		 			}
	 			}
	 		}
	 	}
	 	if (!this.isValid){ this.displayErr();}
		return this.isValid;
	 }
	this.setOnblurvalidation=function(){
		this.isOnblurValidation=true;
		for (target in this.targets){
			if (typeof(Validation.targets[target])=='function'){continue;}

			Event.observe(target,"blur",function(e){Validation.valid(Event.element(e).id);});
			Event.observe(target,"focus",function(e){
			  	var tip=$(Event.element(e).id+"_tip");
				if (tip!=null){tip.className="notice"};});
			Event.observe(target,"blur",function(e){
			  	var tip=$(Event.element(e).id+"_tip");
				if (tip!=null){tip.className=""};});
		}
	}
}

function ValidationFunction(){}

ValidationFunction.fun=[];

ValidationFunction.fun['number']=function(aValue,arg){
	var isnum=(aValue.search(/^\d+(\.\d+)?$/)!=-1);
	if(arg==undefined){arg={max:1.79E+308,min:0}}
	if (arg.min==undefined){
		arg.min=0;
	}
	if (arg.max==undefined){
		arg.max=1.79E+308;
	}
	if (isnum){
		var value=parseFloat(aValue);
		var max=parseFloat(arg.max);
		var min=parseFloat(arg.min);			
		if (value>max||aValue<min){
			return false;
		}
		else{
			return true;
		}
	}
	else{
		return false;
	}
}

ValidationFunction.fun['int']=function(aValue,arg){
	if (ValidationFunction.fun['number'](aValue,arg)){
		if(aValue.indexOf('.')!=-1){
		 	return  false;
		}
		else{
			return true;
		}
	}
	else{
		return false;
	}
}
ValidationFunction.fun['greater']=function(aValue,otherCtr){
	var other=document.getElementById(otherCtr);
	if (other==null){alert("网页上没有id="+otherCtr+"的控件")}   
    return (parseFloat(aValue)>=parseFloat(other.value));
}

ValidationFunction.fun['text']=function(aValue,arg){
	if (arg.min==null){
		arg.min=0;
	}
	
	if (aValue.length>arg.max||aValue.length<arg.min){
		return false;		
	}
	else{
		return true;
	}
}
ValidationFunction.fun['englishornumber']=function(aValue)
{
	var reg = /^[a-zA-Z0-9]+$/;
   	return (reg.test(aValue));
}

ValidationFunction.fun['englishandnumber']=function(aValue)
{
	if (checkPwdRule('', aValue)==3 )
	{
		return false;
	}
	else
	{
		return true;
	}
}


ValidationFunction.fun['password']=function(aValue,arg){
	if (ValidationFunction.fun['text'](aValue,arg)){
    	return (IsValidUserNameChar(aValue));
	}
	else{
		return false;
	}
}
ValidationFunction.fun['checkvalue']=function(aValue, arg){
	if (aValue==arg.value){
		return arg.result;
	}
	else{
		return !arg.result;
	}
}
ValidationFunction.fun['selectvalue']=function(aValue){
	if (aValue==0){
		return false;
	}
	else{
		return true;
	}
}

ValidationFunction.fun['noblank']=function (aValue){
	if (aValue=="") {
		return false;
	}
	else{
		return true;
	}
}


ValidationFunction.fun['nochinese']=function (aValue){

	var pattern = /[\u2500-\u9fa5]/;
	return !pattern.test(aValue);
	/*
    for(i=0; i<aValue.length;i++) 
    {
        if(aValue.charAt(i) > String.fromCharCode(0x7f))
        {
            return false ;
        }
    }        
	return true;
	*/
}

ValidationFunction.fun['noendenglish'] = function(aValue){
	aValue=qlib.local.cnUil.SBC2DBCNubmer(aValue);
    var pattern = /([a-zA-Z_-]+[0-9]+)|([a-zA-Z0-9]+)$/i;
    return !pattern.test(aValue);
}


ValidationFunction.fun['specialcharacter'] = function(aValue){
    aValue=CtoH(aValue);
    var pattern = /[\u0030-\u0039]/;
	var result0 = pattern.test(aValue);
	
	var pattern = /[\u0041-\u005A]/;
	var result1 = pattern.test(aValue);
	
	var pattern = /[\u0061-\u007A]/;
	var result2 = pattern.test(aValue);
	
	//pattern = /[\u3400-\u9FBB]/;
	//result3 = pattern.test(aValue);
	
	var result3 = aValue.match(/[^\u3400-\u9FBB]/g);
	var pattern = /[\s*\(\)\s*\{\}\[\]]/;
	var results4 = pattern.test(aValue);

	if(result0 || result1 || result2 || result3 == null || results4)
	{
		return true;
	}
    return false;
}



ValidationFunction.fun['email']=function (strEmail)
{
  var i, strDomain, cChar;
  var nDotCount=0;
  var bFindAlpha=false;
  var bLastIsDot=false;
  var strValid="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789_-.";

  if(strEmail=="") return false;
  i=strEmail.indexOf("@");
  if(i==-1 || i==0 || i==strEmail.length-1) return false;
  strDomain = strEmail.substring(i+1,strEmail.length);

  if(strDomain.indexOf("@")!=-1) return false;
  if(strDomain.charAt(0)==".") return false;
  if(strDomain.charAt(strDomain.length-1)==".") return false;

  for(i=0;i<strDomain.length;i++) {
    cChar = strDomain.charAt(i);
    if(strValid.indexOf(cChar)==-1) return false;
    if(cChar==".") {
      if(bLastIsDot) return false;
      bLastIsDot=true;
      nDotCount++;
    }else bLastIsDot=false;
    if( (("a"<=cChar) && (cChar<="z")) || (("A"<=cChar)&&(cChar<="Z")) )
      bFindAlpha=true;
  }

  if(bFindAlpha && (0==nDotCount)) return false;
  return true;
}

ValidationFunction.fun['phone']= function ( str ){    
    var reg = /^[0-9\(\)\-\s]+$/;    
    return (reg.test(str));
}	

ValidationFunction.fun['mobile']= function ( str ){    
 		var reg =  /^1[358]\d{9}$/;    
    return (reg.test(str));
}
ValidationFunction.fun['homepage']= function ( str ){    
    return (str.toLowerCase().substr(0, 7)=='http://'||str.toLowerCase().substr(0, 8)=='https://');
}
ValidationFunction.fun['sameas']= function ( aValue,otherCtr ){    
 		var other=document.getElementById(otherCtr);
 		if (other==null){alert("网页上没有id="+otherCtr+"的控件")}   
    return (trimString(other.value)==aValue);
}
	
ValidationFunction.fun['samekind']= function ( aValue,otherCtrs){
 			var cont=(aValue.length>0);
		for(var i=0 ;i<otherCtrs.length;i++){		
 			var other=document.getElementById(otherCtrs[i]);
			if (other==null){alert("网页上没有id="+otherCtrs[i]+"的控件")}   
	    	if((trimString(other.value)>0)!=cont){return false;}
		}
		return true;
}
ValidationFunction.fun['int_cn']=function(aValue,arg){
	aValue=qlib.local.cnUil.SBC2DBCNubmer(aValue);
	return ValidationFunction.fun['int'](aValue,arg);
}

ValidationFunction.fun['number_cn']=function(aValue,arg){
	aValue=qlib.local.cnUil.SBC2DBCNubmer(aValue);
	return ValidationFunction.fun['number'](aValue,arg);
}
ValidationFunction.fun['greater_cn']=function(aValue,otherCtr){
	var other=document.getElementById(otherCtr);
	if (other==null){alert("网页上没有id="+otherCtr+"的控件")}   
    return (parseFloat(qlib.local.cnUil.SBC2DBCNubmer(aValue))>=parseFloat(qlib.local.cnUil.SBC2DBCNubmer(other.value)));
}

var Validation=new Validationer();
Validation.fun=ValidationFunction.fun;

document.write("<style type='text/css'>");
document.write(".inputlabelok{background:url(/resource/js/chkok.gif) no-repeat 0px 0px; padding:2px 0 2px 24px; background-color:#F6F6F6;}");
document.write(".inputlabel{background:transparent; padding:2px 0 2px 24px;}");
document.write("</style>");
