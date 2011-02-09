<?php
namespace Ky\Core;
/**
 * cache操作接口
 *
 *
 **********************************************************
 * 实现基于命名的cache调用接口                            
 *      例：g_val   将存储于global变量中
 *          g_a_m_f 将存储于global,apc,memcache,file中
 *                  且读取顺序为依次读取
 *
 *  future features:
 *      1,数据压缩
 *      2,increase-descrease(记数器)
 *      3,数据版本号
 *      4,并发写保护
 **********************************************************
 */
class Cache
{
        private static config = array(
                'g' => 'gcache',
                'a' => 'apc',
                'e' => 'ea',
                'm' => 'memcache',
                'f' => 'file'
        );

        public static function set()
        {
        
        }

        public static function get()
        {
        
        }
        
        public static function getKey($prefix,$hint)
        {
        
        }
}
