function statClkHandle(host,args,evt) 
{
    var e =(evt.target) ? evt.target : window.event.srcElement ;
    var ec = window.encodeURIComponent ? encodeURIComponent : escape;    
    var a = null;
     
    if ( e )
    {   
        if ( e.tagName.toLowerCase() == 'input')
        {
            if ( e.type.toLowerCase() == 'button' ) {
                if ( document.images ) {
                    oName = e.value;
                    logClick(2,host,args,oName);
                }
            }
        }
        else if ( e.tagName.toLowerCase() == 'a'  || e.tagName.toLowerCase() == 'img' || 
                  e.tagName.toLowerCase() == 'font' || e.tagName.toLowerCase() == 'b' ||
		  e.tagName.toLowerCase() == 'span' )
        {
            a = qhstat_geta( e );
            if ( a && a.tagName != null && a.tagName.toLowerCase() == 'a' )
            {
                if( document.images ){
                    url =ec(a).replace(/\+/g,"%2B");
                    logClick(1,host,args,url);
                }
                
            }
        }
    }
}
function logClick(type,host,args,dest)
{/*{{{*/
        rnd = Math.random( );
        srnd = rnd.toString( ).substr(2,4);
        new Image().src = "http://"+host+"/stat.gif?"+args+"&_u="+dest+"&_r=" + srnd +"&_t="+type;
}/*}}}*/

function qhstat_geta( e )
{/*{{{*/
    while ( e && e.tagName != null && e.tagName.toLowerCase() != "a" )
    {
        e = ( e.parentNode ) ? e.parentNode : e.parentElement;
    }
    return e;
}/*}}}*/

function writePvStatCode(host,statArgs)
{/*{{{*/

    rnd = Math.random( );
    srnd = rnd.toString( ).substr(2,4);
    new Image().src = "http://"+host+"/stat.gif?"+statArgs+"&r=" + srnd;
}/*}}}*/

function logClick2(type,host,args,dest)
{/*{{{*/
    httpReq = crtHttpReqest();
    if(httpReq != false )
    {

        rnd = Math.random( );
        srnd = rnd.toString( ).substr(2,4);
        url = "stat.gif?"+args+"&u="+dest+"&r=" + srnd+"&t="+type;
        try{
            httpReq.open("GET", url, true);
            httpReq.send(null);
        }
        catch(e)
        {
        }
    }
}/*}}}*/

function crtHttpReqest()
{/*{{{*/
    var xmlHttp = false;
    try 
    {
        xmlHttp = new ActiveXObject("Msxml2.XMLHTTP");
    } catch (e) 
    {
        try 
        {
            xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
        } catch (e2) {
            xmlHttp = false;
        }
    }

    if (!xmlHttp && typeof XMLHttpRequest != 'undefined') 
        xmlHttp = new XMLHttpRequest();
    return xmlHttp;
}/*}}}*/
