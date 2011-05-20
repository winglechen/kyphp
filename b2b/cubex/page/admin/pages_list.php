<?php
use Ky\Model\Intro;
use Ky\Model\IntroCat;
use Ky\Core\Core\Db;

$cids = IntroCat::getCids($_GET['cid']);

$data = array();
$sql = "" ;

if(!empty($_POST)){
    $_SESSION['form']    = $_POST;
    $_SESSION['formurl'] = $_SERVER['REQUEST_URI']; 
}elseif(isset($_SESSION['form']) && !empty($_SESSION['form'])){
    if(isset($_SESSION['formurl']) && $_SERVER['REQUEST_URI'] == $_SESSION['formurl']){
        $_POST = $_SESSION['form']; 
    }else{
        $_SESSION['form']    = array();
    }
}


if(!empty($_POST)){
    if(isset($_POST['cid'])){
        $sql .= ' and cid='.$_POST['cid']; 
    }else{
        $sql .= " and cid in(" . join(',',$cids) . ") ";
    }
    
    if(isset($_POST['title'])){
        $sql .= " and title like '%{$_POST['title']}%' ";
    }
}else{
    $sql .= " and cid in(" . join(',',$cids) . ")";
}


$sql_num = "select count(1) as num from intro_news where 1 " . $sql;
$tmp = Db::getRow($sql_num);
$current_page   = isset($_POST['pageNum']) ? $_POST['pageNum'] : 1;
$numPerPage     = 10;
$nums           = $tmp['num'];
$pages          = ceil($nums/$numPerPage);

$sql_data = " select id,title,ts from intro_news where 1 " . $sql . " limit " . ($current_page - 1) * $numPerPage . "," . $numPerPage;

$data = Db::getRows($sql_data);

?>
<div class="page">
    <div class="pageHeader">
        <form onsubmit="return navTabSearch(this);" id="pagerForm" action="index.php?p=admin/intro_list&cid=<?php echo $_GET['cid']; ?>" method="post">
        <input type="hidden" name="pageNum" value="1">
            <div class="searchBar">
                <table class="searchContent">
                    <tr>
                        <td>
                            分类：<?php echo IntroCat::options($_GET['cid']); ?>
                        </td>
                        <td>
                            标题：<input type="text" name="title" />
                        </td>
                        <td>
                            <div class="buttonActive"><div class="buttonContent"><button type="submit">检索</button></div></div>
                        </td>
                    </tr>
                </table>
                <!--div class="subBar">
                    <ul>
                        <li><div class="buttonActive"><div class="buttonContent"><button type="submit">检索</button></div></div></li>
                    </ul>
                </div-->
            </div>
        </form>
    </div>
    <div class="pageContent">
        <table class="list" width="98%" layoutH="116">
            <thead>
                <tr>
                    <th width="5%" style="text-align:center" >编号</th>
                    <th width="60%">标题</th>
                    <th width="15%" style="text-align:center" >添加时间</th>
                    <th width="20" style="text-align:center" >操作</th>
                </tr>
            </thead>
            <tbody>

<?php
foreach($data as $new){
    echo '<tr>';
    echo '<td style="text-align:center" >'.$new['id'].'</td>';
    echo '<td>'.$new['title'].'</td>';
    echo '<td style="text-align:center" >'.date('Y-m-d',$new['ts']).'</td>';
    echo '<td style="text-align:center" ><a href="index.php?p=admin/intro_add&cid='.$_GET['cid'].'&id='.$new['id'].'" target="navTab" >编辑</a> | <a   href="index.php?p=admin/intro_del&cid='.$_GET['cid'].'&id='.$new['id'].'" target="navTab" onclick="return confirm(\'您确定要删除这条信息吗？\');" >删除</a></td>';
    echo '</tr>';
}
?>
            </tbody>
        </table>

        <div class="panelBar">
            <div class="pages">
            <span>共<?php echo $nums; ?>条</span>
            </div>

            <div class="pagination" targetType="navTab" totalCount="<?php echo $nums; ?>" numPerPage="<?php echo $numPerPage; ?>" pageNumShown="3" currentPage="<?php echo $current_page; ?>"></div>
        </div>
    </div>
</div>
