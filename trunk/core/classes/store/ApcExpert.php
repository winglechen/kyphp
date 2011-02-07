<?php
namespace Ky\Core\Store;
/**
 * Apc Cache
 *
 *
 */
class Apc
{
    const EXPIRE_TIME = 14400; //seconds
	const SIZE_NEED_COMPRESS = 4096; //bytes

	/* {{{ 静态变量 */

    private static $dversion	= null;

    private static $timestamp   = null;

	private static $serializeFunction = 'igbinary_serialize';

	private static $unserializeFunction = 'igbinary_unserialize';

	/* }}} */

	private $useCompress = false;

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

	public function __construct($useCompress = null)
	{
		$this->setUseCompress($useCompress);
	}

	public function setUseCompress($useCompress = null)
	{
		$this->useCompress = (bool) $useCompress;
	}

	public function set($key, $value = null, $expire = null)
	{
		if (null === $expire) {
			$expire = self::EXPIRE_TIME;
		}

		return apc_store($key, $this->pack($value, $expire), $expire);
	}

	private function pack($data, $expire)
	{
        $expire = (int)$expire;
		$data	= array(
            'v' => self::$dversion,
            'e' => $expire < 1 ? -1 : self::$timestamp + $expire,
            'd' => $data,
		);

		if ($this->useCompress) {
			$method = self::$serializeFunction;
			$data = $method($data);
			if (strlen($data) >= self::SIZE_NEED_COMPRESS) {
				$data = 'C' . gzcompress($data);
			} else {
				$data = 'N' . $data;
			}
		}

		return $data;
	}

	private function unpack($data)
	{
		if ($this->useCompress) {
			$method = self::$unserializeFunction;
			if ($data[0] === 'C') {
				$data = $method(gzuncompress(substr($data, 1)));
			} else {
				$data = $method(substr($data, 1));
			}
		}

		$data	= (array)$data;
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

	public function get($key)
	{
		$data = apc_fetch($key);
		if ($data === false) {
			return null;
		} else {
			return $this->unpack($data);
		}
	}

	public function delete($key)
	{
		return apc_delete($key);
	}

	public function increase($key, $value = 1)
	{
		$old	= (int)$this->get($key);
		$new	= $old + $value;
		return $this->set($key, $new) ? $new : $old;
	}

	public function decrease($key, $value = 1)
	{
		return $this->increase($key, 0 - $value);
	}

	public function makeSureToCleanAllCache()
	{
		return apc_clear_cache('user');
	}

	public function cacheShell($readCallback, $key, $expire = null) {
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

	public function cacheMultiShell($callback, $key, $expire = null)
	{
		$data	= array();
		$diff	= array();
		foreach ((array)$key AS $idx) {
			$data[$idx]	= $this->get($idx);
			if (empty($data[$idx])) {
				$diff[]	= $idx;
			}
		}

		if (!empty($diff)) {
			foreach ((array)$callback($diff) AS $idx => $val) {
				if (empty($val)) {
					continue;
				}
				$data[$idx]	= $val;
				$this->set($idx, $val);
			}
		}

		return $data;
	}

	public function cacheSingleShell($callback, $key, $expire = null)
	{
		return $this->cacheShell($callback, $key, $expire);
	}
        
}
