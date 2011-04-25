<?php
/**
 *	Dispatcher.php
 *
 */
namespace Ky\Core\Core;

use \Ky\Core\Core\ClassLoader;
use \Ky\Core\Core\Config;
use \Ky\Core\Core\Path;

class Dispatcher
{
    public $controller   = '';
    private $config      = array();

    private function parseUrl()
    {
        $this->controller = isset($_GET['c']) ? ucfirst($_GET['c']) : 'Ui';
    }

    private function prepare($config)
    {
        $this->parseUrl();
        $this->config = array(
            'namespace'     => array(),
            'config'        => array(),
        );

        if(!$config) return false;

        if(isset($config['namespace']) && !empty($config['namespace'])){
            $this->config['namespace'] = $config['namespace'];
        }
        if(isset($config['config']) && !empty($config['config'])){
            $this->config['config'] = $config['config'];
        }

    }

    public function __construct($config)
    {
        $this->prepare($config);
        
        //autoload init
        $this->initAutoLoad();
   
        //init pathes
        //$this->initPath();

        //load global Config
        $this->initConfig(); 

        //router init and parse the url
        //$this->initRouter();
    }

    private function initAutoLoad()
    {
        require_once __DIR__ . '/ClassLoader.php';

        ClassLoader::init();
        foreach($this->config['namespace'] as $n => $path){
            ClassLoader::register($n, $path);
        }
    }

    private function initPath()
    {
        Path::register('config',__DIR__ . '/../../conf/');    
    }
    private function initConfig()
    {
        foreach($this->config['config'] as $key => $path){
            Config::loadIni(CONFIG_PATH . $path,true); 
        }
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

    public static function run($ini)
    {
        $config = require($ini);
        $dsp = new self($config);
        $dsp->dispatch();
    }
    private function dispatch()
    {
        $controller = "Ky\\Cubex\\Controller\\" . $this->controller; 
        $controller::run(); 
    }
}

