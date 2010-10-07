<?php
namespace Ky\Core;

use Ky\Core\Exception;

class ClassLoader
{
	private static $rules;

	public static function splCallback($className)
	{
		$ordinaryClassName = $className;
		$className = preg_replace('/[^\w\\\\]/is','',$className);
		$className = str_replace('\\','/',$className);

		$pos  = strrpos($className,'/');
		$path = strtolower(substr($className,0,$pos));
		$name = substr($className,$pos + 1);

		foreach(self::$rules as $key => $dir){
			if(strpos($path,$key) === 0){
				$filePath = $dir . substr($path,strlen($key)) . '/'. $name . '.php';
				$realPath = realPath($filePath);

				if($realPath){
					require($realPath);
				}else{
					require_once(__DIR__ . '/exception/FileNotFound.php');
					throw new \Ky\Core\Exception\FileNotFound("$path/$name.php");
				}

				if(!class_exists($ordinaryClassName)){
					require_once(__DIR__.'/exception/ClassNotFound.php');
					throw new \Ky\Core\Exception\ClassNotFound($ordinaryClassName);
				}
				return;
			}
		}
		require_once(__DIR__.'/exception/ClassNotFound.php');
		throw new \Ky\Core\Exception\ClassNotFound($ordinaryClassName);

	}
	
	public static function register($pattern,$classDir)
	{
		$pattern = preg_replace('/[^\w\\\\]/is','',$pattern);
		$pattern = str_replace('\\','/', $pattern);
		$pattern = rtrim($pattern,'/');
		$pattern = strtolower($pattern);
		self::$rules[$pattern] = $classDir;
	}

	public static function unregister($pattern)
	{	
		$pattern = preg_replace('/[^\w\\\\]/is','',$pattern);
		$pattern = str_replace('\\','/', $pattern);
		$pattern = rtrim($pattern,'/');
		$pattern = strtolower($pattern);
		unset(self::$rules[$pattern]);
	}

	public static function init()
	{
		spl_autoload_register(array(__CLASS__, 'splCallback'));
	}
}
