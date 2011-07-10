<a href="./index.php" target="_self" class="menumain">网站首页</a>
<a href="index.php?p=news" target="_self" class="menumain">新闻动态</a>
<a href="index.php?p=product" target="_self" class="menumain">产品系列</a>

<?php
use Ky\Model\Mnav;
$_POST['corpid'] = $_SESSION['id'];

$condition = array(
    'corpid'      => 'eq',
);


$data = Mnav::lists('id,name,url',$condition,$_POST);


$row = null;
for($i=0,$len=count($data['data']); $i<$len; $i++){
    $row = $data['data'][$i];
    echo '<a href="'.$row['url'].'" target="_self" class="menumain">'.$row['name'].'</a>';   
}
?>
