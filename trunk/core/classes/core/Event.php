<?php
namespace Ky\Core\Core;

/**
 *  ui事件驱动管理
 */
class Event
{
    private static $event  = array();
    private static $group  = array();

    public static function register($evtName)
    {
        if(!isset(self::$event[$evtName])){
            self::$event[$evtName] = array();
        }
    }

    public static function unregister($evtName)
    {
        if(isset(self::$event[$evtName])){
            unset(self::$event[$evtName]);
        }
    }

    public static function bind($evtName,$action,$caller=null,$param=null)
    {
        self::register($evtName);
        $evt = array(
            'action'    => $action,
            'caller'    => $caller,
            'bind'      => $param
        );
        self::$event[$evtName][] = $evt;
    }

    public static function unbind($evtName,$action,$caller=null)
    {
        if(!isset(self::$event[$evtName])){
            return false;
        }
        foreach(self::$event[$evtName] as $key => $evt){
            if($evt['caller'] == $caller && $evt['action'] == $action){
                unset(self::$event[$evtName][$key]);
                return true;
            }
        }
        return false;
    }

    public static function fire($evtName,$param=null)
    {
        if( !isset(self::$event[$evtName]) || empty(self::$event[$evtName]) ){
            return ;
        }

        foreach(self::$event[$evtName] as $evt){
            $param = array(
                'bind' => $evt['bind'],
                'fire' => $param,
            );
            if(null !== $evt['caller']){
                if(is_object($evt['caller'])){
                    $evt['caller']->$evt['action']($param);
                }else{
                    $evt['caller']::$evt['action']($param);
                }
            }else{
                $evt['action']($param);
            }
        }

        //fire the group event
    }

    public static function group($evtName,$group)
    {
        if(!isset(self::$group[$group])){
            self::$group[$group];
        } 
    }

    public static function ungroup($evt,$group)
    {
    }
}
