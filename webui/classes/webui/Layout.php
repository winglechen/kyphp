<?php
/**
 *  layout
 *
 */
namespace Ky\Webui;

class Layout
{
    private $_viewname  = '';
    private $_blockname = '';
    private $_comname   = '';

    private function __construct()
    {
        $this->_viewname = $viewname;
    }


    public static function display($viewname)
    {
        $layout = new self($viewname); 
        $layout->show();
    }

    /**
     *  调用接口
     *
     *
     */
    private static function show()
    {
    
    }
   
    /**
     *  布局继承
     *
     *@var layout string 布局文件名称
     */
    protected function _extends($layout)
    {
    
    }

    /**
     * 占位符操作
     *
     *@var block_name string 区块名称
     */
    protected function _place($block_name)
    {
    
    }

    /**
     *  区块布局/区块内容填充
     *
     *@var block_name string 区块名称
     */
    protected function _block($block_name)
    {
        
    }

    /**
     *  结束区块内容填充
     *
     *@var block_name string 区块名称
     */
    protected function _endblock($block_name)
    {
    
    }

    /**
     *  内容组件占位符
     *
     *@var com_name string 组件名称
     *@var config   array  组件配置数组
     */
    protected function _com($com_name,$config)
    {
    
    }

    /**
     *  继承布局加载
     *
     *@var filename string 文件名
     */
    protected function _include($filename)
    {
    
    }
}
