<?php
/* vim: set expandtab tabstop=4 shiftwidth=4 foldmethod=marker: */
namespace Ky\Core;

class Timer
{

	/* {{{ 静态变量 */

	private static $opened	= false;

	private static $timer	= array();

	/* }}} */

	/* {{{ public static void init() */
	/**
	 * 初始化计时器
	 *
	 * @access public static
	 * @param Boolean $open
	 * @return void
	 */
	public static function init($open)
	{
		self::$opened	= (bool)$open;
	}
	/* }}} */

	/* {{{ public static void start() */
	/**
	 * 开始计时
	 *
	 * @access public static
	 * @param String $key
	 * @return void
	 */
	public static function start($key)
	{
		if (self::$opened) {
			self::$timer[self::normarlize($key)] = microtime(true);
		}
	}
	/* }}} */

	/* {{{ public static Mixture elapsed() */
	/**
	 * 获取耗时
	 *
	 * @access public static
	 * @param  String $key
	 * @return Mixture
	 */
	public static function stop($key)
	{
		$key = self::normarlize($key);
		if (empty(self::$timer[$key])) {
			return null;
		}

		$beg = self::$timer[$key];
		unset(self::$timer[$key]);

		return number_format(microtime(true) - $beg, 6);
	}
	/* }}} */

	/* {{{ private static string normarlize() */
	/**
	 * KEY归一化
	 *
	 * @access private static
	 * @param string $key
	 * @return string
	 */
	private static function normarlize($key)
	{
		return strtolower(trim($key));
	}
	/* }}} */

}

