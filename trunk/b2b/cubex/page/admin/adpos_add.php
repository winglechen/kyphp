<?php
use Ky\Model\Adpos;
use Ky\Model\Config;
use Ky\Core\Core\Path;
use Ky\Core\Uid\Uid;

if(isset($_GET['id'])){
    $nid = $_GET['id'];
}else{
    $nid = 0;
}

if(0 !== $nid){
    $new = Adpos::detail($nid);
}else{
    $new = array(
        'id'        => 0,
        'name'     => '',
        'cid'       => 0,
        'pic'       => '',
        'detail'   => '',
    );
}
?>
<div class="page">
    <div class="pageContent">
    <form action="index.php?p=admin/adpos_add_done" enctype="multipart/form-data" class="pageForm required-validate" onsubmit="return iframeCallback(this,navTabAjaxDone);" method="post">
        <div class="pageFormContent" layoutH="60">
<?php
    if(isset($_GET['pid'])){
?>

            <div class="unit">
                <label>页面：</label>
                <?php echo $_GET['pname']; ?>
                <input type="hidden" name="pageId" value="<?php echo $_GET['pid']; ?>" />
                <input type="hidden" name="pageName" value="<?php echo $_GET['pname']; ?>" />
            </div>

<?php
}
?>
            <div class="unit">
                <label>名称：</label>
                <input type="text" name="name" size="50" value="<?php echo $new['name']; ?>" />
            </div>
            <div class="unit">
                <label>内容：</label>
                <textarea name="detail" rows="22" cols="125">
                        <?php echo $new['detail']; ?>
                </textarea>
                <input type="hidden" name="id" value="<?php echo $new['id']; ?>" />
            </div>

                        <!--div class="divider"></div-->
        </div>


        <div class="formBar">
            <ul>
                <li><div class="buttonActive"><div class="buttonContent"><button type="submit">保存</button></div></div></li>
            </ul>
        </div>
    </form>
    </div>
</div>
