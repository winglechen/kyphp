<?php
//爬虫
//$base_url = 'http://demo.2799.cn/1295932382/';
//$file = 'index.php';
//$data = file_get_contents($file);
//$url_pattern = '/url\((.*?)\)/';
//preg_match_all($url_pattern,$data,$result);
//
//$dir = '';
//
//foreach($result[1] as $url){
//    if(strpos($url,'#default') !== false) continue;
//    mkdir(pathinfo($url,PATHINFO_DIRNAME),0777,true);
//    $date = file_get_contents($base_url . $url);
//    file_put_contents($url,$data);
//    echo $url . ' done <br />' ;
//}
ini_set("max_execution_time",60000000);
$Crawler = new Crawler();
$jobs    = array(
    array('http://demo.2799.cn/1294129129/','./temp1/','index.html'),
    array('http://demo.2799.cn/1294129129/news/class/','./temp1/news/class/','index.html'),
    array('http://demo.2799.cn/1294129129/product/class/','./temp1/product/class/','index.html'),

);
$Crawler->addJobs($jobs);
$Crawler->run();

class Crawler
{
    private $baseUrl = '';
    private $baseDir = '';
    private $mainFile= '';
    private $html    = '';
    
    private $css     = array();
    private $src     = array();
    private $urls    = array();
    private $jobs    = array();
    
    public function __construct()
    {
        $this->baseUrl = $url;
        $this->baseDir = $dir;
        $this->mainFile= $fileName;
    }  
    
    public function addJobs($jobs)
    {
        $this->jobs = $jobs ;  
    }
    
    public function run()
    {
        foreach($this->jobs as $job){
            $this->baseUrl = $job[0];
            $this->baseDir = $job[1];
            $this->mainFile= $job[2]; 
            $this->_run();
        }    
    }
    
    public function _run()
    {
        $this->saveMainPage();
        $this->parseMainPage();    
    }
    
    public function saveMainPage()
    {
        $this->html = file_get_contents($this->baseUrl);
        @mkdir($this->baseDir,0777,true);
        file_put_contents($this->baseDir.$this->mainFile,$this->html);
        echo 'main page done<br />';
    }
    
    public function parseMainPage()
    {
        $this->getCsses();
        $this->getSrc();
        $this->getUrls();    
    }
    
    private function getCsses()
    {
        $pattern = '/<link.*?href=[\'"](.*?)[\'"].*?>/';
        preg_match_all($pattern,$this->html,$result);
        $this->css = $result[1];
        $this->saveUrls($result[1],true);
    }
    
    private function saveUrls($urls,$css=false)
    {
        foreach($urls as $url){
            if(strpos($url,'#default') !== false) continue;
            if(file_exists($this->baseDir . $url)) continue;
            @mkdir(pathinfo($this->baseDir.$url,PATHINFO_DIRNAME),0777,true);
            $data = file_get_contents($this->baseUrl . $url);
            if($css === true){
                $this->parseCssFile($url,$data);    
            }
            file_put_contents($this->baseDir.$url,$data);
            echo $url . ' done <br />' ;
        }    
    }
    
    private function getSrc()
    {
        $pattern = '/src=[\'"](.*?)[\'"]/';
        preg_match_all($pattern,$this->html,$result);
        $this->src = $result[1];
        $this->saveUrls($result[1]);
    }
    
    private function getUrls()
    {
        $pattern = '/url\((.*?)\)/';
        preg_match_all($pattern,$this->html,$result);
        $this->urls = $result[1];
        $this->saveUrls($result[1]);
    }
    
    public function parseCssFile($url,$data)
    {
        $dir =  pathinfo($url,PATHINFO_DIRNAME); 
     
        $pattern = '/url\((.*?)\)/';
        preg_match_all($pattern,$data,$result);
        foreach($result[1] as $k => $v){
            $result[1][$k] = $dir . '/' . $v;    
        }
        $this->saveUrls($result[1]);
        
    }
}