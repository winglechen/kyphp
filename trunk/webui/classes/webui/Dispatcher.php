<?php
/**
 *	Dispatcher.php
 *
 */
namespace KY\Webui;

use \Ky\Core\ClassLoader;
use \Ky\Core\ConfigLoader;

class Dispatcher
{
    public function __construct()
    {
        //autoload init
        $this->initAutoLoad();
    
        //load global Config
        $this->initConfig(); 

        //router init and parse the url
        $this->initRouter();
    }

    private function initAutoLoad()
    {
        require_once __DIR__ . '/../core/ClassLoader.php';

        ClassLoader::init();
        ClassLoader::register('ky\\core', __DIR__ . '/../core/');
        ClassLoader::register('ky\\webui',__DIR__ );
    }

    private function initConfig()
    {
    
    }

    private function initRouter()
    {
        //get controller

        //parse url
    }

    public static function run()
    {
        $dsp = new self();
        $dsp->dispatch();
    }
    private function dispatch()
    {
    
    }
}

