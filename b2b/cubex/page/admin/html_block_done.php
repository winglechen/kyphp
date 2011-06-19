<?php
$path = __DIR__.'/../www/';



if(!empty($_POST)){
    $file = $path . $_POST['f'] . '.php';

    file_put_contents($file,$_POST['content']);
    
    Output::iframeCallback(200,'添加成功','index.php?p=admin/html_block');
    //header('Location:index.php?p=admin/intro_list&cid='.$cid);
}else{
    Output::iframeCallback(300,'添加失败');
}


