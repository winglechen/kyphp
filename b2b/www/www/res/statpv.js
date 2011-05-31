var _DM=new Array();
_DM[0] = "qihoo.com";
_DM[1] = "qikoo.com";
_DM[2] = "china.cn";
_DM[3] = "msn.com.cn";
_DM[4] = "zhonghuaworld.com";
var _QM=new Array();
_QM[0]='pvstat.qihoo.com';
_QM[1]='pvstat.qikoo.com';
_QM[2]='pvstat.china.cn';
_QM[3]='pvstat.qihoo.com';
_QM[4]='pvstat.qihoo.com';
var _QH='pvstat.qihoo.com';

function statPV()
{
	var _REG=/http%3A\/\/([^\/]*)\/.*/ig;
	var _URI=_LC.replace(_REG,"$1");

	var i=-1;
	while(++i<_DM.length) {
		nIdx=_URI.indexOf(_DM[i]);
		if (nIdx >= 0) {
			_QF=true;
			_QD=_QM[i];
			break;
		} else {
			_QF=false;
		}
	}

	if (_QF==true) {
			_PR='<img style="display:none;" src="';
			_PR=_PR+'http://'+_QD+'/stat.gif?'+_AG;
			_PR=_PR+'" width="1" height="1" />';
	} else {
			_PR='<img style="display:none;" src="';
			_PR=_PR+'http://'+_QH+'/coopana.gif?_lc='+_LC+"&"+_AG;	
			_PR=_PR+'" width="1" height="1" />';
	}
	document.write(_PR);
}
statPV();
