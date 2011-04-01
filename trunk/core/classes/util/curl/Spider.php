<?php
class Spider
{
    private $urls   = array();
    private $offset = 0;
    private $handle = null;
    private $pool   = array();

    public function __construct($urls=null)
    {
        if($urls) $this->urls = $urls;
    }

    public function run($threads=1)
    {
        if($threads < 1) return array();

        if(1 == $threads){
            return $this->crawl();
        }
        
        return $this->crawlMulti($threads);
    }

    public function addUrl($url)
    {
        $this->urls[] = $url;
    }

    private function crawl()
    {
       if(empty($this->urls)) return array();

       foreach($this->urls as $url){
            $this->_crawl($url);
       }
       return $this->result;
    }

    private function _crawl($url)
    {
        $curl = $this->getCurl($url);
        $this->result[$url]  = curl_exec($curl);
        curl_close($curl);
    }

    private function crawlMulti($threads)
    {
       if(empty($this->urls)) return array(); 
       $this->handle = curl_multi_init();

       for($i=0,$len=count($this->urls); $i<$len; $i++){
            $curl = $this->getCurl($this->urls[$i]);
            curl_multi_add_handle($this->handle,$curl);
            $this->pool[$this->urls[$i]] = $curl;
       }
        
        $running = null;
        do{
            curl_multi_exec($this->handle,$running);
        }while($running > 0);


        foreach($this->pool as $url => $curl){
            $this->result[$url] = curl_multi_getcontent($curl);
        }

        curl_multi_close($this->handle);

        return $this->result;
    }

    private function getCurl($url)
    {
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_FAILONERROR,     true);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION,  true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER,  true);
        curl_setopt($curl, CURLOPT_BUFFERSIZE,      8192);
        curl_setopt($curl, CURLOPT_CONNECTTIMEOUT,  300);
        curl_setopt($curl, CURLOPT_MAXREDIRS,       3);
        curl_setopt($curl, CURLOPT_TIMEOUT,         600);
        curl_setopt($curl, CURLOPT_ENCODING,        'gzip,deflate');

        return $curl;
    }
}
