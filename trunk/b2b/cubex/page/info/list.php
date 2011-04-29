<div class="main1_right company_info">

<table width="100%">
<tbody><tr><td><h2 style="margin-top:10px;"><?php echo $_GET['pname']; ?></h2></td></tr>
<tr>
<td><table id="NewsListTable">
<tbody>
<?php
use Ky\Core\Core\Db;
use Ky\Core\Formater\Output;
$sql = "select count(1) as num from intro_news where cid=".$_GET['pid'];
$tmp = Db::getRow($sql);

$current_page   = isset($_GET['page']) ? $_GET['page'] : 1;
$numPerPage     = 10;
$nums           = $tmp['num'];
$pages          = ceil($nums/$numPerPage);

$sql = "select id,title,ts from intro_news where cid=".$_GET['pid']." order by id desc limit " . ($current_page - 1) * $numPerPage . "," . $numPerPage;
$data = Db::getRows($sql);

for($i=0,$len=count($data); $i<$len; $i++){
?>

<tr>
<td width="580px"><span style="font-family:Verdana;">»&nbsp;</span><a href="index.php?p=info/intro&cid=<?php echo $_GET['cid']; ?>&cname=<?php echo urlencode($_GET['cname']); ?>&pid=<?php echo $_GET['pid'];?>&pname=<?php echo urlencode($_GET['pname']); ?>&nid=<?php echo $data[$i]['id']; ?>"><?php echo $data[$i]['title']; ?></a></td>             
<td><?php echo date('Y-m-d',$data[$i]['ts']); ?> </td>
</tr>

<?php
}
?>

</tbody></table>

<table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tbody>
        <tr>
            <td align="right"> 
                总计 <span><strong><?php echo $nums; ?></strong></span> 条，
                分 <span><strong><?php echo $pages; ?></strong></span> 页显示，
                当前第<span><strong><?php echo $current_page; ?></strong></span>页&nbsp; 
                <a href="index.php?p=info/intro&cid=<?php echo $_GET['cid']; ?>&cname=<?php echo urlencode($_GET['cname']); ?>&pid=<?php echo $_GET['pid'];?>&pname=<?php echo urlencode($_GET['pname']); ?>&page=1">首页</a> 
                <?php if(1 != $current_page){
                    $pre = $current_page - 1;
                ?>
                <a href="index.php?p=info/intro&cid=<?php echo $_GET['cid']; ?>&cname=<?php echo urlencode($_GET['cname']); ?>&pid=<?php echo $_GET['pid'];?>&pname=<?php echo urlencode($_GET['pname']); ?>&page=<?php echo $pre; ?>">上一页</a> 
                <?php
                } 
                ?>
                <?php if($pages != $current_page){
                    $next = $current_page - 1;
                ?>
                <a href="index.php?p=info/intro&cid=<?php echo $_GET['cid']; ?>&cname=<?php echo urlencode($_GET['cname']); ?>&pid=<?php echo $_GET['pid'];?>&pname=<?php echo urlencode($_GET['pname']); ?>&page=<?php echo $next; ?>">上一页</a> 
                <?php
                } 
                ?>
                <a href="index.php?p=info/intro&cid=<?php echo $_GET['cid']; ?>&cname=<?php echo urlencode($_GET['cname']); ?>&pid=<?php echo $_GET['pid'];?>&pname=<?php echo urlencode($_GET['pname']); ?>&page=<?php echo $pages; ?>">末页</a> &nbsp;
            </td>
        </tr>
    </tbody>
</table>
</td>
</tr>
</tbody></table>
</div>
