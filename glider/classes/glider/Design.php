<?php

$url = '/path/to/the/action/param/.../where/param:eq:2/';

//post
$_POST['data'] = array(
    
);

$urlType = array(
    'param',
    'where',
    'data',
    'path',
    'limit',
    'orderby',
);


$fields = array(
    'table1' => array('field1','field2'),
    'table2' => array('field1','field2'),
);
$fileds = array(
    'table1.field1','table1.filed2','..'
);

$data = $_GET + $_POST;
$where = array(
    'table1.field1' => array('value','condition')
);

$result = Db::select($fields,$where);

$result = Db::insert();

$result = Db::update($data,$where);

$result = Db::delete($where);
