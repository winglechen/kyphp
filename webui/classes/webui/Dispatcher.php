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
        self::initAutoLoad();
    
        //load global Config
        

        //router init and parse the url
    }

    public function initAutoLoad()
    {
        require_once __DIR__ . '/../core/ClassLoader.php';

        ClassLoader::init();
        ClassLoader::register('ky\\core', __DIR__ . '/../core/');
        ClassLoader::register('ky\\webui',__DIR__ );
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

