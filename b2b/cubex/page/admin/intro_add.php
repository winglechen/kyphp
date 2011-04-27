<?php
use Ky\Model\Intro;
use Ky\Model\IntroCat;
use Ky\Core\Core\Path;
use Ky\Core\Uid\Uid;

if(!empty($_POST)){
    $cid = $_POST['ccid'];
    unset($_POST['ccid']);
    $_POST['content'] = addslashes(htmlspecialchars($_POST['content']));

    //file upload
    
    exit;
    if(0 == $_POST['id']){
        Intro::add($_POST);
    }else{
        Intro::update($_POST);
    }
    header('Location:index.php?p=admin/intro_list&cid='.$cid);
}

if(isset($_GET['id'])){
    $nid = $_GET['id'];
}else{
    $nid = 0;
}

if(0 !== $nid){
    $new = Intro::detail($nid);
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
    <form action="index.php?p=admin/intro_add" enctype="multipart/form-data" class="pageForm required-validate"  onsubmit="return navTabSearch(this);" method="post">
        <div class="pageFormContent" layoutH="60">
            <div class="unit">
                <label>分类：</label>
                <?php echo IntroCat::options($_GET['cid'],$new['cid']); ?>
            </div>
            <div class="unit">
                <label>标题：</label>
                <input type="text" name="title" size="50" value="<?php echo $new['title']; ?>" />
            </div>
            <div class="unit">
                <label>图片：</label>
                <input type="file" name="pic" >
            </div>

            <div class="unit">
                <label>内容：</label>
                <textarea class="editor" name="content" rows="22" cols="125"
                        upLinkUrl="upload.php" upLinkExt="zip,rar,txt" 
                        upImgUrl="upload.php" upImgExt="jpg,jpeg,gif,png" 
                        upFlashUrl="upload.php" upFlashExt="swf"
                        upMediaUrl="upload.php" upMediaExt:"avi">
                        <?php echo $new['content']; ?>
                </textarea>
                <input type="hidden" name="id" value="<?php echo $new['id']; ?>" />
                <input type="hidden" name="ccid" value="<?php echo $_GET['cid']; ?>" />
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
