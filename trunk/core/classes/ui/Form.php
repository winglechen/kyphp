<?php
namespace Ky\Core\Ui;

class Form
{
    private static $config = array(
        'formId'        => 'phpky',
        'formAction'    => 'add',     // add | update |search
    ); 
    public static function config($config)
    {
    
    }
    
    public static function start($config=array())
    {
        !empty($config) && self::config($config);


    }

    public static function end()
    {
    
    }
        
    public static function input()
    {
    
    }

    public static function hidden()
    {
    
    }

    public static function label()
    {
    
    }

    public static function output()
    {
        return array(
            'param'=>array(
                'action' => 'add',

            ),
            'table1' => array(
                'data'=>array(),
                'where'=>array(),
            ),
            'table2' => array(
                'data'=>array(),
                'where'=>array(),
            ),
        );
    }

}

