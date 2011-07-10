<?php
use Ky\Model\Product;
use Ky\Core\Core\Db;
use Ky\Core\Core\Form;

Form::init();
$_POST['corpid'] = $_SESSION['id'];

if(isset($_GET['category1'])){
    $_POST['category1']   = $_GET['category1'];    
}

if(isset($_GET['category2'])){
    $_POST['category2']   = $_GET['category2'];    
}
if(isset($_GET['category3'])){
    $_POST['category3']   = $_GET['category3'];    
}

if(isset($_POST['cid'])){

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
		<div class="fang" style="width:225px;height:150px">
		<div class="picFit" style="width:225px;height:150px">
		<a href="http://www.haomingchina.com/index.php?p=www/detail&id=<?php echo $row['id']; ?>" target="_blank" ><img src="<?php echo $row['pic']; ?>" style="width:225px;height:150px" border="0" /></a>
		</div>
		</div>
	</div>
	<div class="productquery_dolphin_bottom" style="width:225px;overflow:hidden;">
		<a href="http://www.haomingchina.com/index.php?p=www/detail&id=<?php echo $row['id']; ?>" target="_blank" class="prodtitle"   ><?php echo $row['productName']; ?></a>
	</div>
</div>

<?php
}
?>
