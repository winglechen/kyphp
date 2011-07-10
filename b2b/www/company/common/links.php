
<?php
use Ky\Model\Mnav2;
$_POST['corpid'] = $_SESSION['id'];

$condition = array(
    'corpid'      => 'eq',
);


$data = Mnav2::lists('id,name,url',$condition,$_POST);


$row = null;
for($i=0,$len=count($data['data']); $i<$len; $i++){
    $row = $data['data'][$i];
    echo '<a href="'.$row['url'].'" target="_self" >'.$row['name'].'</a>|';   
}
?>
