function getCookie(ckey)
{
	var search = ckey + "=";
	var start = document.cookie.indexOf(search);
	if (start != -1)
	{
		start += search.length ;
		end = document.cookie.indexOf(";", start) ;
		if (end == -1)
			end = document.cookie.length;
		return unescape(document.cookie.substring(start, end));
	}
	else
	{
		return "";
	}
}
function Locale()
{
	this.isEnUk = false;
	this.init = function(ckey, enValue)
	{
		var cvalue = getCookie(ckey);
		if(cvalue == enValue)
			this.isEnUk = true;
	}
	this.getMessage = function(cnMsg, enMsg)
	{
		//if(this.isEnUk)
		//	return enMsg;
		//else
			return cnMsg;
	}
}

function trimString(str)
{
  var i,j;

  if(str == null || str == "") return "";

  for(i=0;i<str.length;i++)
    if(str.charAt(i) != ' ') break;
  if(i >= str.length) return "";

  for(j=str.length-1;j>=0;j--)
    if(str.charAt(j) != ' ') break;

  return str.substring(i,j+1);
}
String.prototype.trim = function() {
	return (this.replace(/^[\s\xA0]+/, "").replace(/[\s\xA0]+$/, ""));
}
String.prototype.equalsIgnoreCase = function(arg)
{               
	return (this.toLowerCase() == arg.toLowerCase());
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


function isValidEmailAddress(strEmail)
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

function checktel( str )
{    
    var reg = /^[0-9\(\)\-\s]+$/;    
    return (reg.test(str));
}


//boby.onload事件处理器
function onload_func()
{
   	//func1();
	  //func2();
}


String.prototype.Trim = function() 
{ 
return this.replace(/(^\s*)|(\s*$)/g, ""); 
} 

String.prototype.LTrim = function() 
{ 
return this.replace(/(^\s*)/g, ""); 
} 

String.prototype.RTrim = function() 
{ 
return this.replace(/(\s*$)/g, ""); 
} 




//core
qlib=window.qlib||{};
qlib.namespace=function(ns){
	if(!ns||!ns.length){return null;}
	var nslist=ns.split(".");
	var result=qlib;
	for(var i=(nslist[0]=="qlib")?1:0;i<nslist.length;++i){
		result[nslist[i]]=result[nslist[i]]||{};
		result=result[nslist[i]];
	}
	return result;
};

//qlib.ui
qlib.namespace('ui');

qlib.ui.tableUil={
	tableSelFun:function (e){
		var elm=Event.element(e);
		if (elm.checked==true)
		{
			var trs=elm.parentNode.parentNode.parentNode.rows;
			for (var i=0;i<trs.length; i++){
				Element.removeClassName(trs[i],'two');
			};
			Element.addClassName(elm.parentNode.parentNode,'two');
		}
		else
		{
			Element.removeClassName(elm.parentNode.parentNode,'two');
		}
	} 
};

qlib.ui.formUil={
	/**
	* 返回一组radio是否有一个被选中
	* @param {String} radio的name
	* @type Boolean
	*/
	radiosHaveChecked:function(elmName){
		var radios=document.getElementsByName(elmName);
		if (null==radios) return null;
		for(var i=0;i<radios.length;++i){
			if(radios[i].checked==true){
				return true;
			}	
		} 
		return false;
	},
	foucsHightLight:function(){
		var els=$$('input').concat($$('select'),$$('textarea'));
		els.each(
			function(el){
				if('SELECT'==el.tagName||'TEXTAREA'==el.tagName
				   ||(('INPUT'==el.tagName)&&('radio'==el.type||'text'==el.type))){
					Event.observe(el,"blur",
						function(e){
							Element.removeClassName(Event.element(e),'foucs');
						}
					);
					Event.observe(el,"focus",
						function(e){
							Element.addClassName(Event.element(e),'foucs');
							//Position.clone(Event.element(e),$('tip'));
							
						}
					);
				}
			}
		);
	}
};

qlib.ui.elementUil={
	getInnerText:function (elm){
		return (elm.textContent==undefined)?elm.innerText:elm.textContent;		
	}
};

//qlib.local
qlib.namespace('local');

qlib.local.cnUil={
	SBC2DBCNubmer:function (str){
		var values=[['０','0'],['１','1'],['２','2'],['３','3'],['４','4'],['５','5'],
		['６','6'],['７','7'],['８','8'],['９','9'],['。','.'],['．','.']];
		for(var i=0;i<values.length;++i){
 			while(str.indexOf(values[i][0])!=-1){str=str.replace(values[i][0],values[i][1]);}
		}
		return str;
	} 
};

