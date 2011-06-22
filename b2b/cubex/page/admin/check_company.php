<h2 class="contentTitle">会员审核</h2>

<div class="pageFormContent" >
    <form action="index.php?p=admin/check_company_done"  class="pageForm required-validate"  method="post">
    <p>
        <label>会员有效期至：</label>
        <input type="text" name="validdate" class="date" readonly="true"/>
        <a class="inputDateButton" href="#">选择</a>
        <span class="info"></span>
        <input type="hidden" name="id" value="<?php echo $_GET['ids']; ?>" />
        <br />
        <div class="buttonActive"><div class="buttonContent"><button type="submit"><---------------开通-------------></button></div></div>
    </p>
    </form>
</div>
