<?php
namespace Ky\Core\Page;

/**
 *	b2b样式的分页
 */
class Company
{
	private static $config = array(
        'url'       => '#',
        'nums'      => 0,
        'numPerPage'=> 10,
        'pages'     => 0,
        'curPage'   => 1,
        'showPages' => '5',
    );

	public static function show($config)
	{
		 self::$config = array_merge(self::$config,$config); 	 
		 self::getPages();

		 return self::run();
	}

	private static function run()
	{
		$ret = '';

        $ret .= self::showNums();
        $ret .= '<div id="pages"><ul>';
        $ret .= self::firstPage();
		$ret .= self::prePage();
		//$ret .= self::showPages();
		$ret .= self::nextPage();
		$ret .= self::lastPage();
		$ret .= '</ul></div>';
		//$ret .= self::pagesAll();

		return $ret;
	}

    private static function showNums()
    {
        $ret = '<div id="pagesinfo">共'.self::$config['nums'].'条 每页'.self::$config['numPerPage'].'条 页次：'.self::$config['curPage'].'/'.self::$config['pages'].'</div>';
        
        return $ret;
    }

    private static function firstPage()
    {
        return self::formatLink('首&nbsp;&nbsp;页',1); 
    }
    
    private static function lastPage()
    {
        return self::formatLink('尾&nbsp;&nbsp;页',self::$config['pages']); 
    }

	private static function pagesAll()
	{
		return ' <span>共 <i>'.self::$config['pages'].'</i> 页</span>';
	}

	private static function showPages()
	{
		$ret = '';
		for($i=self::$config['curPage'] - 10, $end = self::$config['curPage'] + 10; $i< $end; $i++){
			 if($i<=0) continue;
			 if($i>self::$config['pages']) break;
			 if($i == $page_current){
				 $ret .=  self::formatLink($i,$i);
			 }else{
				 $ret .=  self::formatLink($i,$i);
			 }
		 }

		 return $ret;
	}

	private static function prePage()
    {
        if(0==self::$config['nums'] || 1 == self::$config['curPage']){
            return '<li class="pbutton">上一页</li>';
        }else{
            $prePage = self::$config['curPage'] - 1;
            return self::formatLink('上一页',$prePage);
        }
    }

    private static function nextPage()
    {
        if(0==self::$config['nums'] || self::$config['pages'] == self::$config['curPage']){
            return '<li class="pbutton">下一页</li>';
        }else{
            $prePage = self::$config['curPage'] + 1;
            return self::formatLink('下一页',$prePage);
        }
    
    }

	private static function getPages()
    {
        self::$config['pages'] = ceil(self::$config['nums']/self::$config['numPerPage']);
    }

	private static function formatLink($text,$page=1,$class='pbutton')
    {
		$url = self::$config['url'] . $page ;
		if($page == self::$config['curPage']){
			$url = 'javascript:void(0);';
		}
        return  ' <li class="pbutton"><a href="' . $url . '"  >' . $text . '</a></li> ';
    }
}