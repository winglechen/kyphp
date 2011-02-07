<?php
namespace Ky\Core\Parser;

class Xml
{

    public static function parseFile($xmlFile)
    {
        if(empty($xmlFile)) {
            throw new \Edp\Core\Exception\XmlParseException(null, 'file');
        }
        $old = libxml_use_internal_errors();
        libxml_use_internal_errors(true);
        $ret = simplexml_load_file($xmlFile);
        if ($ret === false) {
            $err = libxml_get_last_error();
            libxml_clear_errors();
            throw new \Edp\Core\Exception\XmlParseException($xmlFile, 'file', $err->code, $err->message);
        }
        libxml_use_internal_errors($old);
        return $ret;
    }
    public static function parseStr($str){
        $str = trim($str);
        if (empty($str)) {
            throw new \Edp\Core\Exception\XmlParseException(null, 'string');
        }
        $old = libxml_use_internal_errors();
        libxml_use_internal_errors(true);
        try{
            $ret = new \SimpleXmlElement($str);
        } catch (\Exception $e){
            libxml_clear_errors();
            throw new \Edp\Core\Exception\XmlParseException('', 'string', $e->getCode(), $e->getMessage());
        }
        libxml_use_internal_errors($old);
        return $ret;
    }
}
