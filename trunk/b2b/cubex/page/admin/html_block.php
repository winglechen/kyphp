<?php
$path = __DIR__.'/../www/';
$file = $path . $_GET['f'] . '.php';

$content = file_get_contents($file);
?>
<div class="page">
    <div class="pageContent">
    <form action="index.php?p=admin/news_add_done" enctype="multipart/form-data" class="pageForm required-validate" onsubmit="return iframeCallback(this,navTabAjaxDone);" method="post">
        <div class="pageFormContent" layoutH="60">
            <div class="unit">
                <label>内容：</label>
                <textarea  name="content" rows="50" cols="125">
                        <?php echo $content; ?>
                </textarea>
                <input type="hidden" name="f" value="<?php echo $_GET['f']; ?>" />
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
