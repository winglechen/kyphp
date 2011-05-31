function Tab(objID,objShowID,obj){
	var parentObj=obj.parentNode;  
	var liArr= parentObj.getElementsByTagName("li");	
	if(liArr.length<=0)return; 
			for(var i=0;i<liArr.length;i++)
			{
				if(liArr[i]==obj)
				{	liArr[i].className="btnOver";
					 
				}
				else	
				{
					 
					liArr[i].className="btnOut"; 	
				}
			}
		 var pObj= document.getElementById(objID);
		 var objArr=pObj.childNodes;
		 for(var i=0;i<objArr.length;i++)
		{  
			if(objArr[i].id==objShowID)
			{
				objArr[i].className="divShow"; 
			}
			else
			{
				objArr[i].className="unShow";
			}
		}
}
