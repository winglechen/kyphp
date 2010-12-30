<?php
namespace Ky\Core\Store;
/**
 * Memcache Cache
 *
 *
 */
class Memcache
{
	/* {{{ 静态常量 */
	const MAX_KEY_LENGTH	= 200;

    const OPT_COMPRESSION = -1001;
    const OPT_PREFIX_KEY = -1002;
    const OPT_SERIALIZER = -1003;
    const HAVE_IGBINARY = 0;
    const HAVE_JSON = 1;
    const OPT_HASH = 2;
    const HASH_DEFAULT = 0;
    const HASH_MD5 = 1;
    const HASH_CRC = 2;
    const HASH_FNV1_64 = 3;
    const HASH_FNV1A_64 = 4;
    const HASH_FNV1_32 = 5;
    const HASH_FNV1A_32 = 6;
    const HASH_HSIEH = 7;
    const HASH_MURMUR = 8;
    const OPT_DISTRIBUTION = 9;
    const DISTRIBUTION_MODULA = 0;
    const DISTRIBUTION_CONSISTENT = 1;
    const OPT_LIBKETAMA_COMPATIBLE = 16;
    const OPT_BUFFER_WRITES = 10;
    const OPT_BINARY_PROTOCOL = 18;
    const OPT_NO_BLOCK = 0;
    const OPT_TCP_NODELAY = 1;
    const OPT_SOCKET_SEND_SIZE = 4;
    const OPT_SOCKET_RECV_SIZE = 5;
    const OPT_CONNECT_TIMEOUT = 14;
    const OPT_RETRY_TIMEOUT = 15;
    const OPT_SEND_TIMEOUT = 19;
    const OPT_RECV_TIMEOUT = 20;
    const OPT_POLL_TIMEOUT = 8;
    const OPT_CACHE_LOOKUPS = 6;
    const OPT_SERVER_FAILURE_LIMIT = 21;
    const RES_SUCCESS = 0;
    const RES_FAILURE = 1;
    const RES_HOST_LOOKUP_FAILURE = 2;
    const RES_UNKNOWN_READ_FAILURE = 7;
    const RES_PROTOCOL_ERROR = 8;
    const RES_CLIENT_ERROR = 9;
    const RES_SERVER_ERROR = 10;
    const RES_WRITE_FAILURE = 5;
    const RES_DATA_EXISTS = 12;
    const RES_NOTSTORED = 14;
    const RES_NOTFOUND = 16;
    const RES_PARTIAL_READ = 18;
    const RES_SOME_ERRORS = 19;
    const RES_NO_SERVERS = 20;
    const RES_END = 21;
    const RES_ERRNO = 26;
    const RES_BUFFERED = 32;
    const RES_TIMEOUT = 31;
    const RES_BAD_KEY_PROVIDED = 33;
    const RES_CONNECTION_SOCKET_CREATE_FAILURE = 11;
    const RES_PAYLOAD_FAILURE = -1001;
    const SERIALIZER_PHP = 1;
    const SERIALIZER_IGBINARY = 2;
    const SERIALIZER_JSON = 3;
    const GET_PRESERVE_ORDER = 1;

	/* }}} */

	/* {{{ 静态变量 */

    private static $dversion	= null;

    private static $timestamp   = null;

	/* }}} */

    /* {{{ 成员变量 */

    private $memObj;

    private $ini;

    private $log;

    private $casList;

    private $getWithPreserveOrder;

    private $useBufferWrite = true;

    private $iniFile;

	private $timer;

	/* }}} */

    /* {{{ public static void setDataVersion() */
    /**
     * 设置数据版本号
     *
     * @access public static
     * @return void
     */
	public static function setDataVersion($version = null)
	{
        self::$dversion = trim($version);
    }
    /* }}} */

    /* {{{ private static Mixture pack() */
    /**
     * 数据打包
     *
     * @access private static
     * @return Mixture
     */
    private static function pack($data, $expire)
    {
        $expire = (int)$expire;
        return array(
            'v' => self::$dversion,
            'e' => $expire < 1 ? -1 : self::$timestamp + $expire,
            'd' => $data,
        );
    }
    /* }}} */

    /* {{{ private static Mixture unpack() */
    /**
     * 数据解包
     *
     * @access private static
     * @return Mixture
     */
    private static function unpack($data)
    {
        if (!isset($data['e']) || !isset($data['d'])) {
            return null;
        }

        if ($data['e'] > 0 && $data['e'] < self::$timestamp) {
            return null;
        }

        if (!empty($data['v']) && $data['v'] != self::$dversion) {
            return null;
        }

        return $data['d'];
    }
    /* }}} */

    public function __construct($ini)
    {
        $this->iniFile = $ini;
        $this->ini = Factory::getIni($ini, true);
        $this->log = Factory::getLog($this->ini->log_url);
        $this->initMemcache();
        self::$timestamp = time();
    }

    private function initMemcache()
    {
        $this->memObj = new \Memcached();
        $this->setOptions();
        $this->addServers();
    }

    private function setOptions()
    {
        $this->memObj->setOption(self::OPT_COMPRESSION, true);
        // 使用serialize函数进行序列化
        $this->memObj->setOption(self::OPT_SERIALIZER, self::SERIALIZER_IGBINARY);
        $this->memObj->setOption(self::OPT_PREFIX_KEY, $this->ini->key_prefix);
        $this->memObj->setOption(self::OPT_HASH, self::HASH_MD5);
        $this->memObj->setOption(self::OPT_DISTRIBUTION, self::DISTRIBUTION_CONSISTENT);
        //启用写入缓存，当析构时触发写入操作
        $this->setBufferWrite($this->ini->buffer_writes);
        //使用二进制协议
        $this->memObj->setOption(self::OPT_BINARY_PROTOCOL, $this->ini->binary_protocol);
        // 连接超时
        $this->memObj->setOption(self::OPT_CONNECT_TIMEOUT, $this->ini->timeout['conn']);
        // 写入超时
        $this->memObj->setOption(self::OPT_SEND_TIMEOUT, $this->ini->timeout['write']);
        // 读取超时
        $this->memObj->setOption(self::OPT_POLL_TIMEOUT, $this->ini->timeout['read']);
        // multiget时对未取到的cache项返NULL
        $this->getWithPreserveOrder = (bool) $this->ini->preserve_order;
    }

    private function warning($msg)
    {
        \Edp\Core\Factory::setMcacheBlackHole($this->iniFile);
        $this->log->warning('MEMCACHE_ERROR', $msg);
    }

    private function beginTimer()
    {
        if (!empty($this->ini->info_log)) {
            $this->timer = microtime(true);
        }
    }

    private function getElapsed()
    {
        if (!empty($this->ini->info_log)) {
            $tm = microtime(true) - $this->timer;
            $this->timer = null;
            return number_format($tm, 6);
        } else {
            return null;
        }
    }

    private static function formatKey($key) {
        if (@iconv('utf-8', 'utf-8//ignore', $key) == $key) {
            return $key;
        } else {
            return 'B:'. bin2hex($key);
        }
    }


    private function addServers()
    {
        $serverList = array();
        foreach ($this->ini->servers as $server) {
            $server = explode(':', $server);
            $serverList[] = array($server[0], $server[1], 1);
        }
        $this->memObj->addServers($serverList);
    }

    public function setByCas($cas, $key, $value, $expire)
    {
        $ret = $this->memObj->cas(self::keycompress($cas), $key, $value, $expire);
        return ($ret == self::RES_DATA_EXISTS) ? true : false;
    }

    public function multiSet($keys, $values = null, $expire = null)
    {
        if (!empty($values) && is_array($values)) {
            return $this->multiSetWithTwoArgs($keys, $values, $expire);
        } else {
            return $this->multiSetWithAssocArray($keys, $values);
        }
    }

    public function multiGet($keys)
	{
		$keys	= (array)$keys;
		if (empty($keys)) {
			return array();
		}
		$newkey	= array_map(array(__CLASS__, 'keycompress'), $keys);
		$keymap	= array_combine($keys, $newkey);
		$values	= $this->multiGetWithArray($newkey);

		$return	= array();
		foreach ($keymap AS $i => $n) {
			$return[$i]	= isset($values[$n]) ? $values[$n] : null;
		}

		return $return;
    }

    private function multiGetWithArray($keys)
    {
        $cas = null;
        $this->beginTimer();
        $value = $this->memObj->getMulti($keys, $cas, $this->ini->preserve_order ? self::GET_PRESERVE_ORDER : null);
        $elapsed = $this->getElapsed();
        $ret = array_fill_keys($keys, null);
        $num = 0;

        if (empty($value)) {
            return $ret;
        }

        foreach ($value as $key => $val) {
            if (isset($val)) {
                $ret[$key] = self::unpack($val);
                ++$num;
            }
        }
        foreach ($cas as $key => $cas) {
            if (isset($cas)) {
                $this->casList[$key] = $cas;
            }
        }

        $err = $this->memObj->getResultCode();
        switch ($err) {
            case self::RES_SUCCESS:
            case self::RES_NOTFOUND:
                // write a info log
                if (isset($elapsed)) {
                    $this->log->info('MULTI_GET_OK', array('expire' => $elapsed, 'keynum' => sizeof($keys), 'resnum' => $num));
                }
                return $ret;
            default:
                \Edp\Core\Factory::setMcacheBlackHole($this->iniFile);
                $this->log->warning('MULTI_GET_ERROR', array(
                	'key' => self::formatKey($key), 'code' => $err,
                	'msg' => $this->memObj->getResultMessage()));
                return false;
        }
    }

    private function multiSetWithAssocArray($data, $expire = null)
    {
        foreach ($data as $key => $value) {
            $this->set($key, $value, $expire);
        }
        $err = $this->memObj->getResultCode();
        switch ($err) {
            case self::RES_SUCCESS:
            case self::RES_DATA_EXISTS:
                return true;
            default:
                \Edp\Core\Factory::setMcacheBlackHole($this->iniFile);
                return false;
        }
    }

    private function multiSetWithTwoArgs($keys, $values, $expire = null)
    {
        foreach ($keys as $key => $cacheKey) {
            $this->set($cacheKey, $values[$key], $expire);
        }
        $err = $this->memObj->getResultCode();
        switch ($err) {
            case self::RES_SUCCESS:
            case self::RES_DATA_EXISTS:
                return true;
            default:
                \Edp\Core\Factory::setMcacheBlackHole($this->iniFile);
                return false;
        }
    }
    public function set($key, $value, $expire = null)
    {
        if (null === $expire) {
            $expire = $this->ini->expire;
		}

        $key = self::keycompress($key);
        $value  = self::pack($value, $expire);

        $cas = isset($this->casList[$key]) ? $this->casList[$key] : null;
        $this->beginTimer();
        if (isset($cas)) {
            $this->memObj->cas($cas, $key, $value, $expire);
        } else {
            $this->memObj->add($key, $value, $expire);
        }
        $elapsed = $this->getElapsed();
        $err = $this->memObj->getResultCode();
        switch ($err) {
            case self::RES_SUCCESS:
                if (isset($elapsed)) {
                    $this->log->info('SET_OK', array('key' => self::formatKey($key), 'elapsed' => $elapsed));
                }
                return true;
            case self::RES_DATA_EXISTS:
                $this->log->notice('SET_FAIL', array('key' => self::formatKey($key)));
                return false;
            default:
                \Edp\Core\Factory::setMcacheBlackHole($this->iniFile);
                $this->log->warning('SET_ERROR', array(
                	'key' => self::formatKey($key), 'code' => $err,
                	'msg' => $this->memObj->getResultMessage()));
                return false;
        }
    }

    public function get($key)
    {
		$key = self::keycompress($key);
        !isset($this->casList[$key]) && $this->casList[$key] = null;
        $this->beginTimer();
        $value = $this->memObj->get($key, null, $this->casList[$key]);
        $elapsed = $this->getElapsed();
        $err = $this->memObj->getResultCode();
        switch ($err) {
            case self::RES_SUCCESS:
                if (isset($elapsed)) {
                    $this->log->info('GET_OK', array('key' => self::formatKey($key), 'elapsed' => $elapsed));
                }
                return self::unpack($value);
            case self::RES_NOTFOUND:
                $this->log->notice('GET_FAIL', array('key' => self::formatKey($key)));
                return null;
            default:
                \Edp\Core\Factory::setMcacheBlackHole($this->iniFile);
                $this->log->warning('GET_ERROR', array(
                	'key' => self::formatKey($key), 'code' => $err,
                	'msg' => $this->memObj->getResultMessage()));
                return false;
        }
    }

    public function setBufferWrite($enable = true)
    {
        $enable = (bool) $enable;
        $this->memObj->setOption(self::OPT_BUFFER_WRITES, $enable);
        $this->useBufferWrite = $enable;
	}

    public function makeSureToCleanAllData()
    {
        $this->memObj->flush();
    }

    public function delete($key)
    {
		$key = self::keycompress($key);
        $this->beginTimer();
        $this->memObj->delete($key);
        $elapsed = $this->getElapsed();
        $err = $this->memObj->getResultCode();
        switch ($err) {
            case self::RES_SUCCESS:
                if (isset($elapsed)) {
                    $this->log->info('DEL_OK', array('key' => self::formatKey($key), 'elapsed' => $elapsed));
                }
                return true;
            case self::RES_NOTFOUND:
                $this->log->notice('DEL_FAIL', array('key' => ($key)));
                return true;
            default:
                \Edp\Core\Factory::setMcacheBlackHole($this->iniFile);
                $this->log->warning('DEL_ERROR', array(
                	'key' => ($key), 'code' => $err,
                	'msg' => $this->memObj->getResultMessage()));
                return false;
        }
	}

	public function cacheMultiShell($callback, $key, $expire = null)
	{
		$multi	= is_array($key) ? true : false;
		if ($multi) {
			$data = $this->multiGet($key);
		} else {
			$data = array($key => $this->get($key));
		}

		$diff	= array_keys(array_diff_key(
			array_flip($multi ? $key : array($key)),
			empty($data) ? array() : array_filter($data)
		));


		if (!empty($diff) && $append = call_user_func($callback, $diff)) {
			$this->multiSet(array_keys($append), array_values($append), $expire);
			$data = array_merge($data, (array)$append);
		}

		return $multi ? $data : reset($data);
	}


	public function cacheShell($callback, $key, $expire = null) {
		return $this->cacheMultiShell($callback, $key, $expire);
	}


	public function cacheSingleShell($readCallback, $key, $expire = null) {
		$data = $this->get($key);
		if (empty($data)) {
			$data = $readCallback();
			if (empty($data)) {
				return null;
			}
			$this->set($key, $data, $expire);
		}
		return $data;
	}

	public static function keycompress($key)
	{
		$key	= trim($key);
		if (strlen($key) >= self::MAX_KEY_LENGTH) {
			$key	= sprintf('COMPRESS{%s}', base64_encode(md5($key, true)));
		}

		return $key;
	}

 
}
