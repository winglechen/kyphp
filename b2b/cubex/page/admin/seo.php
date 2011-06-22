<?php
use Ky\Model\Pages;
use Ky\Core\Core\Path;
use Ky\Core\Uid\Uid;

if(isset($_GET['pid'])){
    $nid = $_GET['pid'];
}else{
    $nid = 0;
}

if(0 !== $nid){
    $new = Pages::detail($nid);
}else{
    $new = array(
        'id'        => 0,
        'title'     => '',
        'keyword'     => '',
        'description'     => '',
        'cache'       => 0,
        'pic'       => '',
        'content'   => '',
    );
}
?>
<div class="page">
    <div class="pageContent">
    <form action="index.php?p=admin/seo_done" enctype="multipart/form-data" class="pageForm required-validate" onsubmit="return iframeCallback(this,navTabAjaxDone);" method="post">
        <div class="pageFormContent" layoutH="60">
            <div class="unit">
                <label>页面标题：</label>
                <input type="text" name="title" size="50" value="<?php echo $new['title']; ?>" />
            </div>
            <div class="unit">
                <label>页面缓存时间：</label>
                <input type="text" name="cache" size="20" value="<?php echo $new['cache']; ?>" />秒
            </div>

            <div class="unit">
                <label>页面关键词：</label>
                <textarea  name="keyword" rows="4" cols="125"><?php echo $new['keyword']; ?></textarea>
                <input type="hidden" name="id" value="<?php echo $new['id']; ?>" />
            </div>
            <div class="unit">
                <label>页面介绍：</label>
                <textarea  name="description" rows="4" cols="125"><?php echo $new['description']; ?></textarea>
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
