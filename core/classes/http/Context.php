<?php
namespace Ky\Core\Http;

class Context
{

    /* {{{ 静态变量 */

    /**
     * @访问者IP地址缓存
     */
    private static $userip;

    /**
     * @当前访问的URL
     */
    private static $currentUrl;

    /* }}} */

    /* {{{ public static void cleanAllStatic() */
    /**
     * 清理所有静态缓存
     *
     * @access public static
     * @return void
     */
    public static function cleanAllStatic()
    {
        foreach ((array)get_class_vars(__CLASS__) AS $key => $val) {
            self::${$key}   = null;
        }
    }
    /* }}} */

    /* {{{ public static String userip() */
    /**
     * 获取访问者IP
     *
     * @access public static
     * @param  Boolean $int : default false
     * @return String
     */
    public static function userip($int = false)
    {
        if (empty(self::$userip)) {
            self::$userip	= self::_userip();
        }

        return $int ? sprintf('%u', ip2long(self::$userip)) : self::$userip;
    }
    /* }}} */

    /* {{{ private static String _userip() */
    /**
     * 读取访问者IP
     *
     * @access public static
     * @return String
     */
    private static function _userip()
    {
        $arrKey = array(
            'HTTP_X_FORWARDED_FOR',
            'HTTP_CLIENT_IP',
            'REMOTE_ADDR',
        );

        $strRet = 'unknown';
        foreach ($arrKey AS $strKey) {
            $strKey = trim($strKey);
            if (empty($_SERVER[$strKey])) {
                continue;
            }
            $strVal = trim($_SERVER[$strKey]);
            if (!empty($strVal) && strcasecmp($strVal, 'unknown') != 0) {
                $strRet = $strVal;
                break;
            }
        }
        $arrRet = array_filter(explode(',', $strRet), 'strlen');

        return array_shift($arrRet);
    }
    /* }}} */

    /* {{{ public static String currentUrl() */
    /**
     * 获取当前访问的URL
     *
     * @access public static
     * @return String
     */
    public static function currentUrl()
    {
        if (empty(self::$currentUrl)) {
            self::$currentUrl = self::_currentUrl();
        }

        return self::$currentUrl;
    }
    /* }}} */

    /* {{{ private static String _currentUrl() */
    /**
     * 计算当前访问的URL
     *
     * @access private static
     * @return String
     */
    private static function _currentUrl()
    {
        if (empty($_SERVER['SERVER_NAME'])) {
            $url = 'localhost';
        } else {
            $url = $_SERVER['SERVER_NAME'];
        }

        $tmp = empty($_SERVER['REQUEST_URI']) ? '' : $_SERVER['REQUEST_URI'];

        return sprintf('%s/%s', rtrim($url, '/'), ltrim($tmp, '/'));
    }
    /* }}} */

}

