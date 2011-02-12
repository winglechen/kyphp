<?php
namespace Ky\Core\Parser;

class Url
{

    private $signMap = array("eq" => "=", "ne" => "<>",
        "lt" => "<", "gt" => ">", "le" => "<=",
        "ge" => ">=", "like" => "like",
        "in" => "in");

    private $ordinaryUrl;
    private $urlParts;
    public $type;
    public $resource;
    public $module;
    public $action;
    public $param;
    public $replace;
    public $order;
    public $limit;

    public $noTypeUrl;


    public function __construct($restUrl)
    {
        if ($restUrl[0] === "/"){
            $this->ordinaryUrl = ltrim($restUrl, '/');
        }else {
            $this->ordinaryUrl = $restUrl;
        }
        $this->parse();
    }

    //url逻辑映射
    private function parse()
    {
        $pos = strpos($this->ordinaryUrl, "?");

        if ($pos !== false) {
            $url = substr($this->ordinaryUrl, 0, $pos);
        }else {
            $url = $this->ordinaryUrl;
        }
        //解析xml,映射url
        $ar_url = explode("/", $url);

        $this->type = array_shift($ar_url);
        $this->noTypeUrl = implode('/', $ar_url);
        $this->resource = $this->replaceForbiddenSymbols(array_shift($ar_url));
        $this->module = $this->replaceForbiddenSymbols(array_shift($ar_url));
        $this->action = $this->replaceForbiddenSymbols(array_shift($ar_url));

        $this->param = array();
        for ($i=0, $size = sizeof($ar_url); $i<$size; $i++){

            $name = $ar_url[$i];
            if(!isset($ar_url[++$i])){
                break;
            }
            $value = $ar_url[$i];
            if ($name === "where"){
                //解析value中的计算符
                list($fieldName, $signAlias, $fieldValue) = explode(":",$value);

                if (isset($this->signMap[$signAlias])) {
                    $this->param[] = array($fieldName, $this->signMap[$signAlias], urldecode($fieldValue));
                }
            } elseif ($name === 'param') {
                list($paramName, $paramValue) = explode(':', urldecode($value));
                $this->replace[$paramName] = $paramValue;
            } elseif ($name === 'order') {
                list($orderName, $orderType) = explode(':', $value);
                $this->order[] = "$orderName " .strtoupper($orderType);
            } elseif ($name === 'limit'){
                $this->limit = (int) $value;
            }
        }
        if (!empty($this->order)) {
            $this->order = implode(', ', $this->order);
        }

    }

    private function replaceForbiddenSymbols($str) {
        return preg_replace('/[^\w]/is' , '' ,$str);
    }
}

