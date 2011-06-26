<?php
use Ky\Model\Pages;
use Ky\Core\Core\Db;


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
$cid = 0;
if(!empty($_POST)){
    if(isset($_POST['cid']) && !empty($_POST['cid'])){
        $cid = $_POST['cid'];
        $sql .= ' and pageId='.$_POST['cid']; 
    }    
    if(isset($_POST['name'])){
        $sql .= " and name like '%{$_POST['title']}%' ";
    }
}

$sql_num = "select count(1) as num from blockpos where 1 " . $sql;
$tmp = Db::getRow($sql_num);
$current_page   = isset($_POST['pageNum']) ? $_POST['pageNum'] : 1;
$numPerPage     = 10;
$nums           = $tmp['num'];
$pages          = ceil($nums/$numPerPage);

$sql_data = " select * from blockpos where 1 " . $sql . " limit " . ($current_page - 1) * $numPerPage . "," . $numPerPage;

$data = Db::getRows($sql_data);
?>
<div class="page">
    <div class="pageHeader">
        <form onsubmit="return navTabSearch(this);" id="pagerForm" action="index.php?p=admin/blockpos_list" method="post">
        <input type="hidden" name="pageNum" value="1">
            <div class="searchBar">
                <table class="searchContent">
                    <tr>
                        <td>
                            分类：<?php echo Pages::options($cid); ?>
                        </td>
                        <td>
                            标题：<input type="text" name="名称" />
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
        <table class="list" width="98%" layoutH="45">
            <thead>
                <tr>
                    <th width="5%" style="text-align:center" >编号</th>
                    <th width="20%">页面</th>
                    <th width="30%" style="text-align:center" >名称</th>
                    <th width="10%" style="text-align:center" >类型</th>
                    <th width="30%" style="text-align:center" >操作</th>
                </tr>
            </thead>
            <tbody>

<?php
foreach($data as $new){
    echo '<tr>';
    echo '<td style="text-align:center" >'.$new['id'].'</td>';
    echo '<td>'.$new['pageName'].'</td>';
    echo '<td>'.$new['name'].'</td>';
    echo '<td>'.$new['blockType'].'</td>';
    echo '<td style="text-align:center" ><a href="index.php?p=admin/blockpos_add&id='.$new['id'].'" target="navTab" >编辑</a> | <a   href="index.php?p=admin/block_list&btype='.$new['blockType'].'&bid='.$new['id'].'" target="navTab"  >查看内容</a> | <a   href="index.php?p=admin/block_add&btype='.$new['blockType'].'&bid='.$new['id'].'" target="navTab"  >增加内容</a></td>';
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






























