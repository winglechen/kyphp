//编辑器的初始化在这

	var editor; //编辑器的句柄
	
	var cnPatterns = [
	/(<title>[^\u3021-\u9fa5]*)([\u3021-\u9fa5]+)([^<]*<\/title>)/gi,//<title>chinese</title>
	/(<[^<>\u3021-\u9fa5]+)([\u3021-\u9fa5]+)([^>]*>)/gi,//<chinese>
	/(\{[^\u3021-\u9fa5]+)([\u3021-\u9fa5]+)([^}]*\})/gi,//{chinese}
	/(<xml>[^\u3021-\u9fa5]*)([\u3021-\u9fa5]+)([^\u3021-\u9fa5]*<\/xml>)/gi,//<xml>chinese</xml>
	/()(<link[^>]*\/?>)()/gi,//<link> to ''
	/()(<meta[^>]*\/?>)()/gi,//<meta> to ''
	];
	
	function StringBuffer(){
        this._strings_ = new Array;
    }
    String.prototype.replaceAll = function(s1, s2){
        return this.replace(new RegExp(s1, "g"), s2);
    }
    

    
    StringBuffer.prototype.append = function(str){
        this._strings_.push(str);
    };
    
    StringBuffer.prototype.toString = function(str){
        return this._strings_.join("");
    };
    
    
    function meizz(str){
        var tmp = '';
        for (var i = 0, j = str.length; i < j; i++) {
            tmp += String.fromCharCode(str.charCodeAt(i) + 65248);
        }
        return tmp;
    }
    
    function unmeizz(str){
        var tmp = new StringBuffer();
        for (var i = 0, j = str.length; i < j; i++) {
            if (str.charCodeAt(i) > 65248) {
                tmp.append(String.fromCharCode(str.charCodeAt(i) - 65248));
            }
            else 
                tmp.append(str.charAt(i));
            
        }
        return tmp.toString();
    }
    
    
    
    function replaceSign1(str){
        /*
         句号（。）对应键位[ . ]
         逗号（，）对应键位[ , ]
         分号（；）对应键位[ ; ]
         顿号（、）对应键位[ \ ]
         冒号（：）对应键位[ : ]
         问号（？）对应键位[ ? ]
         感叹号（！）对应键位[ ! ]
         双引号（“”）对应键位[ " ] 注：自动配对
         单引号（‘’）对应键位[ ' ] 注：自动配对
         左书名号（《〈）对应键位[〈 ] 注：自动嵌套
         右书名号（》〉）对应键位[ 〉] 注：自动嵌套
         省略号（……）对应键位[ ^ ] 注：双符处理
         破折号（—— ）对应键位[ _ ] 注：双符处理
         间隔号（•）对应键位[ @ ]
         连接号（— ）对应键位[＆]
         人民币符号（￥）对应键位[ $ ]
         */
        var xtmp = str.split("");
        var sign = {
            '。': '\.',
            '，': '\,',
            '；': '\;',
            '、': '\,',
            '：': '\:',
            '？': '\?',
            '！': '\!',
            '“': '\"',
            '”': '\”',
            '‘': '\‘',
            '’': '\’',
            '《': '\(',
            '〈': '\(',
            '》': '\)',
            '〉': '\)',
            '……': '...',
            '——': '\-',
            '•': '\@',
            '—': '\&',
            '￥': '\$'
        };
        for (var i = 0, j = xtmp.length; i < j; i++) {
            var c = xtmp[i];
			var s = sign[c];
			if(s) xtmp[i] = s;
        }
        return xtmp.join('');
    }
    
    
    function checkHanzi(str){
        for (var i = 0; i < str.length; i++) {
            if (str.charCodeAt(i) >= 0x4e00 && str.charCodeAt(i) <= 0x9fa5) 
                return (i);
        }
        
        return -1;
    }
    
    
    
    function changeEnter(lang){
        // If we already have an editor, let's destroy it first.
        if (editor) 
            editor.destroy(true);
        
        // Create the editor again, with the appropriate settings.
        editor = CKEDITOR.replace('offerDetailHidden', {
            language: lang, //en english zh-cn chinese
            enterMode: 2,
            shiftEnterMode: 1,
			toolbar : [ [ 'NewPage','Preview','-','Cut','Copy','Paste', '-', 'Undo','Redo','-','SelectAll','RemoveFormat','-','Bold', 'Italic', 'Underline', 'Strike','-','Subscript','Superscript','-','Link','SpecialChar','-','','TextColor','-','Maximize'],'/',['Styles','Format','Font','FontSize' ] ]
        });
    }
    
    function markStr(str, i){
        var str1 = str.substr(0, i - 1);
        var str2 = str.substr(i + 1, str.length);
        
        var tmp = new Array;
        tmp.push(str1);
        tmp.push("<big><b>");
        tmp.push(str.charAt(i));
        tmp.push("</b></big>");
        tmp.push(str2);
        
        return tmp.join("");
    }
    
    function correct(){
        var str = editor.getData();
		if(str.length<10||str.length>50000)
		{
			alert("详细描述限制在10个字到5000字之间");
			return false;
		}

        return str;
    }
	//把源代码标签里的中文替换成空
	function clearCn(str)
	{
		for(var i=0,j=str.length;i<j;i++)
		{
			str = str.replace(cnPatterns[i],'$1$3');
		}
		return str
	}
    
    window.onload = function(){

        changeEnter(langOfCk);

    }