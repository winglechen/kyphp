
<div class="dorpmenu_dolphin"><a href="./index.php" target="_self" class="dorpmenu_dolphin">网站首页</a></div>
<div class="dorpmenu_dolphin"><a href="index.php?p=news" target="_self" class="dorpmenu_dolphin">新闻动态</a></div>
<div class="dorpmenu_dolphin"><a href="index.php?p=product" target="_self" class="dorpmenu_dolphin">产品系列</a></div>

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
    echo '<div class="dorpmenu_dolphin"><a href="'.$row['url'].'" target="_self" class="dorpmenu_dolphin">'.$row['name'].'</a></div>';   
}
?>
