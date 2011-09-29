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
<!--div class="productquery_dolphin">
    <div class="productquery_dolphin_top">
		<div class="fang" style="width:162px;height:122px">
		<div class="picFit" style="width:162px;height:122px">
		<a href="temp5/product/html/?3.html" target="_self" ><img src="temp5/product/pics/20100420/1271741726.jpg" style="width:162px;height:122px" border="0" /></a>
		</div>
		</div>
	</div>
	<div class="productquery_dolphin_bottom">
		<a href="temp5/product/html/?3.html" target="_self" class="prodtitle"   >交直流工具</a>
	</div>
</div-->

<div class="productquery_dolphin">
    <div class="productquery_dolphin_top">
		<div class="fang" style="width:162px;height:122px">
		<div class="picFit" style="width:162px;height:122px">
		<a href="index.php?p=pdetail&id=<?php echo $row['id']; ?>" ><img src="<?php echo $row['pic']; ?>" style="width:162px;height:122px" border="0" /></a>
		</div>
		</div>
	</div>
	<div class="productquery_dolphin_bottom" style="width:162px;overflow:hidden;">
		<a href="index.php?p=pdetail&id=<?php echo $row['id']; ?>" class="prodtitle"   ><?php echo $row['productName']; ?></a>
	</div>
</div>

<?php
}
?>
