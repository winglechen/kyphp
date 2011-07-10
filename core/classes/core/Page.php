<?php
namespace Ky\Core\Core;

class Page
{
    private static $config = array(
        'url'       => '#',
        'nums'      => 0,
        'numPerPage'=> 10,
        'pages'     => 0,
        'curPage'   => 1,
        'style'     => 'default',
    );
    public static function show($config)
    {
        self::$config = array_merge(self::$config,$config); 
        
        $style = strtolower(self::$config['style']) . 'Page';
        return self::$style();
    } 
    
    private static function googlePage()
    {
        return \Ky\Core\Page\Google::show(self::$config);
    } 
    
    private static function b2bPage()
    {
        return \Ky\Core\Page\B2b::show(self::$config);
    } 

    private static function companyPage()
    {
        return \Ky\Core\Page\Company::show(self::$config);
    }
    
    private static function defaultPage()
    {
        $ret = '';
        self::getPages();

        $ret .= self::showNums();
        $ret .= self::firstPage();
        $ret .= self::prePage();
        $ret .= self::curPage();
        $ret .= self::nextPage();
        $ret .= self::lastPage();

        return $ret;
    }

    private static function showNums()
    {
        return '<span style="float:left;margin-left:10px;">结果数：<strong>'.self::$config['nums'].'</strong></span>';
    }

    private static function firstPage()
    {
        return self::formatLink('首&nbsp;&nbsp;页',1); 
    }

    private static function prePage()
    {
        if(0==self::$config['nums'] || 1 == self::$config['curPage']){
            return ' <span>上一页</span> ';
        }else{
            $prePage = self::$config['curPage'] - 1;
            return self::formatLink('上一页',$prePage);
        }
    }

    private static function nextPage()
    {
        if(0==self::$config['nums'] || self::$config['pages'] == self::$config['curPage']){
            return ' <span>下一页</span> ';
        }else{
            $prePage = self::$config['curPage'] + 1;
            return self::formatLink('下一页',$prePage);
        }
    
    }

    private static function curPage()
    {
        return ' <span>' .self::$config['curPage'] . '/' . self::$config['pages']  . ' </span> '; 
    }
 
    private static function lastPage()
    {
        return self::formatLink('末&nbsp;&nbsp;页',self::$config['pages']); 
    }   

    private static function formatLink($text,$page=1)
    {
        return  ' <a href="' . self::$config['url'] . $page . '" >' . $text . '</a> ';
    }

    private static function getPages()
    {
        self::$config['pages'] = ceil(self::$config['nums']/self::$config['numPerPage']);
    }

}
