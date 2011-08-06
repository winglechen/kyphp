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


<div class="box">
	<div class="fang" style="width:225px;height:150px">
		<div class="picFit" style="width:225px;height:150px">
		<a href="http://www.ztb2b.com/index.php?p=www/detail&id=<?php echo $row['id']; ?>" target="_self"><img height="150px" src="<?php echo $row['pic']; ?>" width="225px" border="0"></a>
		</div>
	</div>
</div>

<?php
}
?>
