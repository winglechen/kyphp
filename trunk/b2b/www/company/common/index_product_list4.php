<?php
use Ky\Model\Product;
use Ky\Core\Core\Db;
use Ky\Core\Core\Form;

Form::init();
$_POST['corpid'] = $_SESSION['id'];

$condition = array(
    'productName' => 'like',
    'corpid'      => 'eq',
);
$page = array(
    'url'           => 'index.php?p=www/member/product_list&page=',
    'curPage'       => $_POST['page'],
    'numPerPage'    => 12,
    'style'         => 'default',
);

$data = Product::lists('id,pic,productName,brief,ts,checked',$condition,$_POST,$page);
$row = null;
for($i=0,$len=count($data['data']); $i<$len; $i++){
    $row = $data['data'][$i];
?>

<td>
	<div class="fang" style="width:162px;height:122px">
	<div class="picFit" style="width:162px;height:122px">
		<a href="index.php?p=pdetail&id=<?php echo $row['id']; ?>" target="_self" ><img src="<?php echo $row['pic']; ?>" style="width:162px;height:122px;" border="0" /></a>
	</div>
	</div>
	<div class="title" style="width:162px;">
		<a href="index.php?p=pdetail&id=<?php echo $row['id']; ?>" target="_self" class="title"   ><?php echo $row['productName']; ?></a>
	</div>
</td>


<?php
}
?>
