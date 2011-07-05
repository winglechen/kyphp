<?php
use Ky\Model\Mnew;
use Ky\Core\Core\Db;
use Ky\Core\Core\Form;

Form::init();
$_POST['corpid'] = $_SESSION['id'];
if(isset($_GET['cid'])){
    $_POST['cid']   = $_GET['cid'];    
}

if(isset($_POST['cid']) && 0 == $_POST['cid']){
    unset($_POST['cid']);
}
$condition = array(
    'name' => 'like',
    'corpid'      => 'eq',
    'cid'       => 'eq',
);
$page = array(
    'url'           => 'index.php?p=news&page=',
    'curPage'       => $_POST['page'],
    'numPerPage'    => 10,
    'style'         => 'company',
);

$data = Mnew::lists('id,name,ts',$condition,$_POST,$page);


$row = null;
for($i=0,$len=count($data['data']); $i<$len; $i++){
    $row = $data['data'][$i];
?>
<li class="title">
	<div class="title"><a href="index.php?p=www/news_detail&id=<?php echo $row['id']; ?>" target="_blank"   ><?php echo $row['name']; ?></a></div>
	<div class="time"><?php echo date('Y-m-d',$row['ts']); ?></div>
</li>

<?php
}
?>