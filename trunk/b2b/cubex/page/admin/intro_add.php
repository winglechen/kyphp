<?php
    if(!empty($_POST)){
        header('Location:index.php?p=admin/intro_list');
    }
?>
<div class="page">
    <div class="pageContent">
    <form action="index.php?p=admin/intro_add" class="pageForm required-validate"  onsubmit="return navTabSearch(this);" method="post">
        <div class="pageFormContent" layoutH="65">
            
            <div class="unit">
                <label>标题：</label>
                <input type="text" name="title" />
            </div>
            <div class="unit">
                <label>图片：</label>
                <input type="file" name="pic" />
            </div>

            <div class="unit">
                <label>内容：</label>
                <textarea class="editor" name="description" rows="15" cols="120"
                        upLinkUrl="upload.php" upLinkExt="zip,rar,txt" 
                        upImgUrl="upload.php" upImgExt="jpg,jpeg,gif,png" 
                        upFlashUrl="upload.php" upFlashExt="swf"
                        upMediaUrl="upload.php" upMediaExt:"avi">
                </textarea>
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
