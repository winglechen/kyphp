<?php
namespace Ky\Core;
class Log
{

    private $url;

    private $path;

    private $logLevel;

    private $useBuffer;

    private $bufferData;

	private $blackholeUsed;

	const DEBUG		= 1;
    const INFO		= 2;
    const NOTICE	= 4;
    const WARNING	= 8;
	const ERROR		= 16;
    const BUFFER_SIZE = 4096;

    public function __construct($logUrl)
    {
        $this->url = $logUrl;
        $conf = parse_url($logUrl);
        $logLevels = explode('.', $conf['host']);
        if (in_array('debug', $logLevels)) {
            $this->logLevel += self::DEBUG;
        }
        if (in_array('info', $logLevels)) {
            $this->logLevel += self::INFO;
        }
        if (in_array('notice', $logLevels)) {
            $this->logLevel += self::NOTICE;
        }
        if (in_array('warning', $logLevels)) {
            $this->logLevel += self::WARNING;
        }
        if (in_array('error', $logLevels)) {
            $this->logLevel += self::ERROR;
        }
        $this->path = $conf['path'];
        $this->useBuffer = empty($conf['query']) || strpos($conf['query'], 'disableBuffer') === false;
    }

	public function debug($name, $data = null, $token = null)
	{
        if ($this->logLevel & self::DEBUG) {
            $this->insert('DEBUG', $name, $data, $token);
        }
	}

    public function info($name, $data = null, $token = null)
    {
        if ($this->logLevel & self::INFO) {
            $this->insert('INFO', $name, $data, $token);
        }
    }

    public function notice($name, $data = null, $token = null)
    {
        if ($this->logLevel & self::NOTICE) {
            $this->insert('NOTICE', $name, $data, $token);
        }
    }

    public function warning($name, $data = null, $token = null)
    {
        if ($this->logLevel & self::WARNING) {
            $this->insert('WARNING', $name, $data, $token);
        }
    }

    public function error($name, $data = null, $token = null)
    {
        if ($this->logLevel & self::ERROR) {
            $this->insert('ERROR', $name, $data, $token);
        }
    }

    private function insert($logLevel, $name, $data, $token)
    {
        empty($token) && $token = '-';
        empty($data) && $data = '-';
        (is_array($data) || is_object($data)) && $data = json_encode($data);
        $this->bufferData .= sprintf("%s\t%s\t%s\t%s\t%s\n", date('Y-m-d H:i:s'), $logLevel, $name, $token, $data);
        if (!$this->useBuffer || (strlen($this->bufferData) >= self::BUFFER_SIZE)) {
            $this->write();
        }
    }

    private function write()
    {
        if (!empty($this->bufferData) && !$this->blackholeUsed) {
            if (!@file_put_contents($this->path, $this->bufferData, FILE_APPEND)) {
                Factory::setLogBlackHole($this->url);
                $this->blackholeUsed = true;
            }
            $this->bufferData = '';
        }
    }

    public function __destruct()
    {
        $this->write();
    }

    public function __toString()
    {
        return "Core.Log[$this->url]";
    }
}

