<?php include __DIR__ . '/header.php';  ?>
<div class="body1">

<div class="banner1"><img src="./res/product_01.jpg" alt="<?php echo $_GET['cname']; ?>"></div>
<div class="banner1_bg"></div>
<!-- banner end -->

<?php
use Ky\Model\IntroCat;
$navCat = IntroCat::getChildren($_GET['cid']);

if(!isset($_GET['pid'])){
    $_GET['pid']    = isset($navCat[0]) ? $navCat[0]['Id'] : 0;
    $_GET['pname']  = isset($navCat[0]) ? $navCat[0]['name'] : '';
}
?>

<div class="title"><h2><?php echo $_GET['cname']; ?></h2><span>

您当前的位置：<a href="index.php">首页</a>   - <a href="index.php?p=info/intro&cid=<?php echo $_GET['cid']; ?>&cname=<?php echo urlencode($_GET['cname']) ; ?>"><?php echo $_GET['cname']; ?></a> - <?php echo $_GET['pname']; ?>
</span></div>


<div class="main1">
<div class="main1_left">
    <div id="ListTable" class="menu_left">
    <?php include __DIR__ . '/nav.php';  ?>
    </div>
</div>



<?php 
if(isset($_GET['nid'])){
    include __DIR__ . '/detail.php'; 
}else if(3 == $_GET['cid']){
    include __DIR__ . '/list.php'; 
}else{
    include __DIR__ . '/plist.php'; 
}
?>

<div class="clear"></div>
</div><!-- main end -->
<?php include __DIR__ . '/footer.php'; ?>
