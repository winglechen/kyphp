<div class="main1_right company_info">
<div id="PrintTable" style="margin-top:20px;">
<?php
use Ky\Model\Intro;
$data = Intro::detail($_GET['nid']);
?>


<?php if(1 != $_GET['cid']){ ?>
<h5 align="center" style="font-size:18px;"><?php echo $data['title']; ?></h5>
<span style=" margin:auto;"></span>
<hr size="1" color="#E1E1E1" style="color:#CCCCCC; margin-top:-10px;">
<?php } ?>

<?php echo htmlspecialchars_decode(stripslashes($data['content'])); ?>

<table width="100%" border="0" cellpadding="0" cellspacing="0"><tbody><tr><td align="left"> </td></tr></tbody></table>
</div>
<div class="clear"></div>
</div>
