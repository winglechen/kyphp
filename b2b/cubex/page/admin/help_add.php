<?php
use Ky\Model\News;
use Ky\Model\Config;
use Ky\Core\Core\Path;
use Ky\Core\Uid\Uid;

if(isset($_GET['id'])){
    $nid = $_GET['id'];
}else{
    $nid = 0;
}

if(0 !== $nid){
    $new = News::detail($nid);
    $new['content'] = stripslashes($new['content']);
}else{
    $new = array(
        'id'        => 0,
        'title'     => '',
        'cid'       => 0,
        'pic'       => '',
        'content'   => '',
    );
}
?>
<div class="page">
    <div class="pageContent">
    <form action="index.php?p=admin/help_add_done" enctype="multipart/form-data" class="pageForm required-validate" onsubmit="return iframeCallback(this,navTabAjaxDone);" method="post">
        <div class="pageFormContent" layoutH="60">
            <!--div class="unit">
                <label>分类：</label>
                <select name="cid">
                <?php echo Config::getTree('ncategory','option',$new['cid'],0); ?>
                </select>
                
            </div-->
            <div class="unit">
                <label>标题：</label>
                <input type="text" name="title" size="50" value="<?php echo $new['title']; ?>" />
            </div>
            <!--div class="unit">
                <label>图片：</label>
                <input type="file" name="pic" /><br />
                <?php 
                if(!empty($new['pic'])){
                    echo '<img style="margin-left:120px;width:100px;height:100px;" src="'.$new['pic'].'" />'; 
                }
                ?>
            </div-->

            <div class="unit">
                <label>内容：</label>
                <textarea class="editor" name="content" rows="22" cols="125"
                        upLinkUrl="upload.php" upLinkExt="zip,rar,txt" 
                        upImgUrl="upload.php" upImgExt="jpg,jpeg,gif,png" 
                        upFlashUrl="upload.php" upFlashExt="swf"
                        upMediaUrl="upload.php" upMediaExt:"avi">
                        <?php echo $new['content']; ?>
                </textarea>
                <input type="hidden" name="cid" value="1000000" />
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
