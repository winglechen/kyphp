<?php
use Ky\Model\Pages;
use Ky\Core\Core\Path;
use Ky\Core\Uid\Uid;

if(isset($_GET['id'])){
    $nid = $_GET['id'];
}else{
    $nid = 0;
}

if(0 !== $nid){
    $new = Pages::detail($nid);
}else{
    $new = array(
        'id'        => 0,
        'name'      => '',
        'title'     => '',
        'cid'       => 0,
        'pic'       => '',
        'detail'   => '',
    );
}
?>
<div class="page">
    <div class="pageContent">
    <form action="index.php?p=admin/pages_add_done" enctype="multipart/form-data" class="pageForm required-validate" onsubmit="return iframeCallback(this,navTabAjaxDone);" method="post">
        <div class="pageFormContent" layoutH="60">
            <div class="unit">
                <label>名称：</label>
                <input type="text" name="name" size="50" value="<?php echo $new['name']; ?>" />
            </div>
            <div class="unit">
                <label>介绍：</label>
                <textarea  name="detail" rows="4" cols="125"><?php echo $new['detail']; ?></textarea>
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
