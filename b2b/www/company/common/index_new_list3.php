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
    'url'           => 'index.php?p=ndetail&page=',
    'curPage'       => $_POST['page'],
    'numPerPage'    => 4,
    'style'         => 'default',
);

$data = Mnew::lists('id,name,ts',$condition,$_POST,$page);


$row = null;
for($i=0,$len=count($data['data']); $i<$len; $i++){
    $row = $data['data'][$i];
?>

<li class="newslist"><a href="index.php?p=ndetail&id=<?php echo $row['id']; ?>" target="_self" class="newslist"   ><?php echo $row['name']; ?></a></li>

<?php
}
?>