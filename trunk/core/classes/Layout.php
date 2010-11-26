<?php
/**
 *  layout
 *
 */
namespace Ky\Core;
use Ky\Core\Exception;

/**
 * Layout.php
 *
 *  功能：只负责页面布局
 *
 *  注：
 *      1,根布局文件不能为空
 *      2,子布局文件不能为输出
 */
class Layout
{
    private $_dir       = '';
    private $_layout    = '';
    private $_stasks    = array();
    private $_blocks    = array();    
    private $_viewname  = '';
    private $_blockname = '';
    private $_comname   = '';

    private function __construct($viewname)
    {
        $this->_viewname = $this->_dir . $viewname;
    }

    public function setDir($dir)
    {
        if(empty($dir)) return '';

        $this->_dir = ('/' == substr($dir,-1)) ? $dir : $dir . '/';
    }


    public static function display($viewname)
    {
        $layout = new self($viewname); 
        $layout->parse();

        return $layout->_layout;
    }

    /**
     *  调用接口
     *
     *
     */
    private function parse()
    {
        //include主文件 and get the base layout
        ob_start();
        $this->_include($this->_viewname);

        //parse the layout

        //return the com config
    }
   
    /**
     *  布局继承
     *
     *@var layout string 布局文件名称
     */
    protected function _extends($layout)
    {
        $file = $this->_dir . $layout;
        $this->_include($file);
    }

    /**
     * 占位符操作
     *
     *@var block_name string 区块名称
     */
    protected function _place($block_name)
    {
    
    }

    protected function _layout($block_name)
    {

    }

    protected function _endlayout($block_name=null)
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
    protected function _endblock($block_name=null)
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
        //路径处理
        $realPath = realPath($filename);
        if($realPath){
            include $filename;
        }else{
            throw new \Ky\Core\Exception\FileNotFound($filename);
        }

        if(empty($this->_layout)){
            $this->_layout = ob_get_clean();

            //如果主模板为空则抛出异常
            if(empty($this->_layout)){
                throw new \Ky\Core\Exception\RootLayoutCantEmpty(); 
            }
        }
    }
}
