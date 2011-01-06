<?php
namespace Ky\Core\Ui;
use Ky\Core\Exception;

class Com
{
    protected $id           = '';
    protected $loadEvent    = 'alone';      // alone | suite
    protected $loadType     = 'sync';       // async | sync
    protected $resources    = array();
    protected $config       = array();
    protected $tmpUrl       = array();

    /**
     * 组件注册 onlyForSuite
     *
     *@return object eventHandler
     */
    protected function reg()
    {
        $this->load();
        $this->rewriteUrl();
        $obj = $this;
        return array(
            'url'       => $this->tmpUrl,
            'callback'  => function() use($obj){
                $obj->callback($data);
            }
        );
    }

    /**
     * url rewrite onlyForSuite
     *
     *@return urls
     */
    protected function rewriteUrl()
    {
        $this->tmpUrl = array();
    }

    /**
     * suite回调函数 onlyForSuite
     *
     *@return string  com innerhtml
     */
    protected function callback()
    {
    
    }

    /**
     * 加载事件 所有组件都有的方法
     *
     */
    protected function load()
    {
    
    }
}
