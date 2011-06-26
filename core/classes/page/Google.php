<?php
namespace Ky\Core\Page;

/**
 *	google样式的分页
 */
class Google
{
	private static $config = array(
        'url'       => '#',
        'nums'      => 0,
        'numPerPage'=> 10,
        'pages'     => 0,
        'curPage'   => 1,
        'showPages' => '5',
    );

	public static function show($config)
	{
		 self::$config = array_merge(self::$config,$config); 
		 return 'google page';
	}
}