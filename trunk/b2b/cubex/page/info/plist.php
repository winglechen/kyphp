<div class="main1_right productlist">
<h2><?php echo $_GET['pname']; ?></h2>
<ul id="NewsListTable">

<?php
use Ky\Core\Core\Db;
use Ky\Core\Formater\Output;
$sql = "select * from intro_news where cid=".$_GET['pid']." order by id desc";
$data = Db::getRows($sql);

for($i=0,$len=count($data); $i<$len; $i++){
?>
    <li>
    <h3><?php echo $data[$i]['title']; ?></h3>
    <?php 
        if(!empty($data[$i]['pic'])){
            echo '<img class="pic" src="'.$data[$i]['pic'].'">';
        }
    ?>
    <p>
    <?php
        $content = htmlspecialchars_decode(stripslashes($data[$i]['content']));
        $content = strip_tags($content);
        $content = Output::cut($content,80,''); 
        echo $content;
    ?>
    </p>
    <a href="index.php?p=info/intro&cid=<?php echo $_GET['cid']; ?>&cname=<?php echo urlencode($_GET['cname']); ?>&pid=<?php echo $_GET['pid'];?>&pname=<?php echo urlencode($_GET['pname']); ?>&nid=<?php echo $data[$i]['id']; ?>" class="detail">查看详细&nbsp;&#187;</a>
    </li>
<?php } ?>
</ul>
</div>


