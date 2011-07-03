<?php
use Ky\Model\Mnew;
use Ky\Core\Core\Db;
use Ky\Core\Core\Form;

Form::init();
$_POST['corpid'] = $_SESSION['id'];

$condition = array(
    'title' => 'like',
    'corpid'      => 'eq',
);
$page = array(
    'url'           => 'index.php?p=news&page=',
    'curPage'       => $_POST['page'],
    'numPerPage'    => 10,
    'style'         => 'default',
);

$data = Mnew::lists('id,name,ts',$condition,$_POST,$page);


$row = null;
for($i=0,$len=count($data['data']); $i<$len; $i++){
    $row = $data['data'][$i];
?>
<li class="title">
	<div class="title"><a href="http://www.haomingchina.com/index.php?p=www/news_detail&id=<?php echo $row['id']; ?>" target="_blank"   ><?php echo $row['name']; ?></a></div>
	<div class="time"><?php echo date('Y-m-d',$row['ts']); ?></div>
</li>

<?php
}
?>