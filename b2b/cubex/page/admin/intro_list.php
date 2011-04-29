<?php
use Ky\Model\Intro;
use Ky\Model\IntroCat;
use Ky\Core\Core\Db;

$cids = IntroCat::getCids($_GET['cid']);

$data = array();
$sql = " select id,title,ts from intro_news where 1 " ;
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
$data = Db::getRows($sql);
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
            <span>共23条</span>
            </div>

            <div class="pagination" targetType="navTab" totalCount="200" numPerPage="2" pageNumShown="3" currentPage="2"></div>
        </div>
    </div>
</div>
