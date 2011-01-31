<?php

//input format
$Model = new Model();

//style 1
$where = array(
    array('feild1','eq|lt|le|gt|ge|','value1','int|char'),
    array('feild2','eq|lt|le|gt|ge|','value2','int|char'),
);
$Model->list($where);


//style 2
$sql    = "select * from table where field1 > :feild2 and ... ";
$Model->list($sql,$data);

//style 3
