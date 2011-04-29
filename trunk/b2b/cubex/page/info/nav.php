<?php
use Ky\Core\Core\Db;

$cids = array();
$navData = array();
$map     = array();
foreach($navCat as $cat){
    $navData[$cat['Id']] = array();
    $map[$cat['Id']] = $cat['name'];
    $cids[] = $cat['Id'];
}
$sql = "select id,cid,title from intro_news where cid in(".join(',',$cids).") order by cid asc";
$navs = Db::getRows($sql);
foreach($navs as $nav){
    $navData[$nav['cid']][] = $nav;
}

echo '<ul>';
foreach($navData as $k => $v){
?>
      <li><a href="index.php?p=info/intro&cid=<?php echo $_GET['cid']; ?>&cname=<?php echo urlencode($_GET['cname']); ?>&pid=<?php echo $k;?>&pname=<?php echo urlencode($map[$k]); ?>" title="<?php echo $map[$k]; ?>"><?php echo $map[$k]; ?></a> </li>
          <div class="clear"></div>
          <div class="menu_left_1">
          <?php foreach($v as $d){ ?>
          <ul>
                <li><a href="index.php?p=info/intro&cid=<?php echo $_GET['cid']; ?>&cname=<?php echo urlencode($_GET['cname']); ?>&pid=<?php echo $k;?>&pname=<?php echo urlencode($map[$k]); ?>&nid=<?php echo $d['id'];  ?>" title="<?php echo $d['title'];  ?>"><?php echo $d['title'];  ?></a>
                </li>
          </ul>
          <?php } ?>
      </div>
<?php
}
?>
</ul>

