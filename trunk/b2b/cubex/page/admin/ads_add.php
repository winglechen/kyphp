<?php
use Ky\Model\Ads;
use Ky\Model\Config;
use Ky\Core\Core\Path;
use Ky\Core\Uid\Uid;

if(isset($_GET['id'])){
    $nid = $_GET['id'];
}else{
    $nid = 0;
}

if(0 !== $nid){
    $new = Ads::detail($nid);
}else{
    $new = array(
        'id'        => 0,
        'name'      => '',
        'url'       => '',
        'cid'       => 0,
        'pic'       => '',
        'content'   => '',
    );
}
?>
<div class="page">
    <div class="pageContent">
    <form action="index.php?p=admin/ads_add_done" enctype="multipart/form-data" class="pageForm required-validate" onsubmit="return iframeCallback(this,navTabAjaxDone);" method="post">
        <div class="pageFormContent" layoutH="60">
            <div class="unit">
                <label>名称：</label>
                <input type="text" name="name" size="50" value="<?php echo $new['name']; ?>" />
            </div>
            <div class="unit">
                <label>链接：</label>
                <input type="text" name="url" size="50" value="<?php echo $new['url']; ?>" />
            </div>

            <div class="unit">
                <label>图片：</label>
                <input type="file" name="pic" /><br />
                <?php 
                if(!empty($new['pic'])){
                    echo '<img style="margin-left:120px;width:100px;height:100px;" src="'.$new['pic'].'" />'; 
                }
                ?>
            </div>
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
