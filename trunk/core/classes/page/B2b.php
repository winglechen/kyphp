<?php
namespace Ky\Core\Page;

/**
 *	b2b样式的分页
 */
class B2b
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

		$ret .= self::prePage();
		$ret .= self::showPages();
		$ret .= self::nextPage();
		$ret .= self::pagesAll();

		return $ret;
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
				 $ret .=  self::formatLink($i,$i,'searchDataPagesSelected');
			 }else{
				 $ret .=  self::formatLink($i,$i);
			 }
		 }

		 return $ret;
	}

	private static function prePage()
    {
        if(0==self::$config['nums'] || 1 == self::$config['curPage']){
            return '';
        }else{
            $prePage = self::$config['curPage'] - 1;
            return self::formatLink('上一页',$prePage,'searchDataPagesNextLast');
        }
    }

    private static function nextPage()
    {
        if(0==self::$config['nums'] || self::$config['pages'] == self::$config['curPage']){
            return '';
        }else{
            $prePage = self::$config['curPage'] + 1;
            return self::formatLink('下一页',$prePage,'searchDataPagesNextLast');
        }
    
    }

	private static function getPages()
    {
        self::$config['pages'] = ceil(self::$config['nums']/self::$config['numPerPage']);
    }

	private static function formatLink($text,$page=1,$class='')
    {
		$url = self::$config['url'] . $page ;
		if($page == self::$config['curPage']){
			$url = 'javascript:void(0);';
		}
        return  ' <a href="' . $url . '" class="'.$class.'" >' . $text . '</a> ';
    }
}