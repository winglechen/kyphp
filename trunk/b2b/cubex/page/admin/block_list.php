<?php
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



$sql .= ' and blockId='.$_GET['cid']; 


$sql_num = "select count(1) as num from block where 1 " . $sql;
$tmp = Db::getRow($sql_num);
$current_page   = isset($_POST['pageNum']) ? $_POST['pageNum'] : 1;
$numPerPage     = 10;
$nums           = $tmp['num'];
$pages          = ceil($nums/$numPerPage);

$sql_data = " select blockId,pic,title,url from block where 1 " . $sql . " limit " . ($current_page - 1) * $numPerPage . "," . $numPerPage;
$data = Db::getRows($sql_data);
?>
<div class="page">
    <!--div class="pageHeader">
        <form onsubmit="return navTabSearch(this);" id="pagerForm" action="index.php?p=admin/block_list" method="post">
        <input type="hidden" name="pageNum" value="1">
            <div class="searchBar">
                <table class="searchContent">
                    <tr>
                        <td>
                            名称：<input type="text" name="title" />
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
                </div>
            </div>
        </form>
    </div-->
    <div class="pageContent">


        <table class="list" width="98%" layoutH="116">
            <thead>
                <tr>
                    <th width="20px;" style="text-align:center" ><input type="checkbox" class="checkboxCtrl" group="rowid[]" ></th>
                    <th width="120px" style="text-align:center;">图片</th>
                    <th width="400px">名称</th>
                    <th width="" style="text-align:left" >链接</th>
                    <th width="100px" style="text-align:center" >操作</th>
                </tr>
            </thead>
            <tbody>

<?php

foreach($data as $new){
    echo '<tr>';
    echo '<td style="text-align:center" ><input type="checkbox" name="rowid[]" value="'.$new['id'].'" /></td>';
    echo '<td style="text-align:center" >';
    if(!empty($new['pic'])){
        echo '<img width="100px" height="100px" src="' .$new['pic']. '" />';
    }
    echo'</td>';
    echo '<td>'.$new['title'].'</td>';
    echo '<td>'.$new['url'].'</td>';
    echo '<td style="text-align:center" ><a   href="index.php?p=admin/block_del&cid='.$_GET['cid'].'&id='.$new['id'].'" target="navTab" onclick="return confirm(\'您确定要删除这条信息吗？\');" >删除</a></td>';
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
