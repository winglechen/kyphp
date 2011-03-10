<?php
//默认值设置
$defaultValue = array(
    'product.name' => 'pname',
);
Form::setDefault($defaultValue);


//生成字段
Form::inputHeader();

$css    = 'class="noclass"';
$config = array();
echo Form::input('product.name',$config,$css);


Form::inputFooter();
?>

产品名称：<input type="text" name="product.name" value="" />
<input type="hidden" name="product.name" value="123" />
<input type="hidden" name="act" value="1" />


data ：<input type="text" name="d_product.name" value="" /> f11[] product_name_0
where：<input type="text" name="w_product.name" value="" /> w_f11[]
param：<input type="text" name="p_product.name" value="" /> p_d[]

