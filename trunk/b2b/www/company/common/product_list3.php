<?php
use Ky\Model\Product;
use Ky\Core\Core\Db;
use Ky\Core\Core\Form;

Form::init();
$_POST['corpid'] = $_SESSION['id'];

if(isset($_GET['category1'])){
    $_POST['category1']   = $_GET['category1'];    
}

$condition = array(
    'productName' => 'like',
    'corpid'      => 'eq',
    'category1'          => 'eq',
    'category2'          => 'eq',
    'category3'          => 'eq'
);
$page = array(
    'url'           => 'index.php?p=product&page=',
    'curPage'       => $_POST['page'],
    'numPerPage'    => 12,
    'style'         => 'company',
);

$data = Product::lists('id,pic,productName,brief,ts,checked',$condition,$_POST,$page);
$row = null;
for($i=0,$len=count($data['data']); $i<$len; $i++){
    $row = $data['data'][$i];
?>

<div class="productquery_dolphin">
    <div class="productquery_dolphin_top">
		<div class="fang" style="width:132px;height:132px">
		<div class="picFit" style="width:132px;height:132px">
		<a href="index.php?p=pdetail&id=<?php echo $row['id']; ?>" target="_self" ><img src="<?php echo $row['pic']; ?>" style="width:132px;height:132px" border="0" /></a>
		</div>
		</div>
	</div>
	<div class="productquery_dolphin_bottom" style="width:132px;line-height:20px;">
		<a href="index.php?p=pdetail&id=<?php echo $row['id']; ?> target="_self" class="prodtitle" style="line-height:20px;"  ><?php echo $row['productName']; ?></a>
	</div>
</div>





<?php
}
?>
