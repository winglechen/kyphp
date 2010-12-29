<?php
namespace Ky\Core\Http;

class Http
{
    const MAX_THREADS       = 50;
    const HOST_THREADS      = 15;
    const KEEP_ALIVE        = 300;
    const CONNECT_TIMEOUT   = 10;
    const WRITE_TIMEOUT     = 10;
    const READ_TIMEOUT      = 600;
    const USER_AGEND        = 'Kyphp Spider 1.0';

    private $handle     = null;
    private $urls       = array();
    private $results    = array();
    private $offset     = 0;
    private $isRun      = null;
    private $map        = array();

    public function __construct()
    {
        $this->handle   = curl_multi_init();
        $this->urls     = array();
        $this->map      = array();
        $this->offset   = 0;
    }

    public function addUrl($url,$method="GET",$data=null)
    {
        $this->urls[] = array(
            'url'   => trim($url),
            'type'  => strtoupper($method),
            'data'  => $data
        ); 
    }

    public function crawl()
    {
        foreach($this->urls as $url){
            $curl = $this->getCurl($url['type'],$url['url'],$url['data']);
            $this->map[$curl] = $url['url'];
            curl_multi_add_handle($this->handle,$curl);
        }
        do {
            usleep(1);
            $this->status = curl_multi_exec($this->handle, $this->isrun);
        } while ($this->status == CURLM_CALL_MULTI_PERFORM);
        
        while ($done = curl_multi_info_read($this->handle)) {
            $this->store($done['handle'], $done['result']);
        }
        return $this->result;
    }
    private function store($handle,$done=CURLE_OK)
    {
        $key    = $this->map[$handle];
        $data   = curl_multi_getcontent($handle);
        if($done != CURLE_OK || empty(strlen($data))){
            $this->result[$key] = '';
        }else{
            $this->result[$key] = $data;
        }

        curl_multi_remove_handle($this->handle,$handle);
        curl_close($handle);
    }

    private function getCurl($method, $url, $data=null)
    {
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_FAILONERROR,     true);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION,  true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER,  true);
        curl_setopt($curl, CURLOPT_BUFFERSIZE,      8192);
        curl_setopt($curl, CURLOPT_CONNECTTIMEOUT,  self::CONNECT_TIMEOUT);
        curl_setopt($curl, CURLOPT_MAXREDIRS,       3);
        curl_setopt($curl, CURLOPT_TIMEOUT,         self::READ_TIMEOUT);
        curl_setopt($curl, CURLOPT_ENCODING,        'gzip,deflate');
        curl_setopt($curl, CURLOPT_USERAGENT,       self::USER_AGENT);
        curl_setopt($curl, CURLOPT_HTTPHEADER,  array(
            'Connection: Keep-Alive',
            sprintf('Keep-Alive: %d', self::KEEP_ALIVE)
        ));

        $method = strtoupper(trim($method));
        switch ($method) {
        case 'POST':
            curl_setopt($curl, CURLOPT_POST,   true);
            break;

        case 'GET':
            break;

        default:
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST,  $method);
            break;
        }
        if (!empty($data)) {
            $data   = http_build_query($data);
            curl_setopt($curl, CURLOPT_POSTFIELDS,  $data);
            $size   = strlen($data);
        } else {
            $size   = 0;
        }
        curl_setopt($curl, CURLOPT_HTTPHEADER,  array(
            'Content-Length: ' . $size
        ));

        return $curl;
    }

    public static host($url)
    {
        return parse_url($url,PHP_URL_HOST);
    }
}
