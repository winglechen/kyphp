<?php
/**
 *	Dispatcher.php
 *
 */
namespace KY\Webui;

use \Ky\Core\ClassLoader;
use \Ky\Core\Config;
use \Ky\Core\Path;

class Dispatcher
{
    public $controller = '';

    public function __construct()
    {
        //autoload init
        $this->initAutoLoad();
   
        //init pathes
        $this->initPath();

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

    private function initPath()
    {
        Path::register('config',__DIR__ . '/../../conf/');    
    }
    private function initConfig()
    {
        $general_ini = Path::get('config') . 'general.ini';
        Config::loadIni($general_ini,true); 
    }

    private function initRouter()
    {
        //get controller
        $useRouter = Config::get('general/router');
        if(!$useRouter){
            $this->controller = isset($_GET['controller']) ? $_GET['controller'] : 'webui';
        }else{
            $this->controller = 'webui';
        }
    }

    public static function run()
    {
        $dsp = new self();
        $dsp->dispatch();
    }
    private function dispatch()
    {
        $controller = "Ky\\Webui\\Controller\\" . $this->controller; 
        $controller::run(); 
    }
}

