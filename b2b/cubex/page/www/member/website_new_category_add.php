<?php
include "header.php";
use Ky\Model\Config;
$data = Config::getOption('member_new_category','array',null,$_SESSION['id']);



?>
<style>
		  .tongzhi {
	padding-top: 0px;
	padding-right: 20px;
	padding-bottom: 0px;
	padding-left: 20px;		  
		  }
		  .tongzhi  li{
	padding:8px;
	border-bottom-style: solid;
	border-bottom-color: #CCCCCC;
	border-bottom-width: 1px;
		  }
			  .tongzhi li i {
			  color:#CCCCCC
		  
		  }	  
</style>

<script language="javascript" src="./res/validator.js"></script>
<script language="javascript" src="./editor/kindeditor-min.js"></script>
<style type="text/css">.inputlabelok{background:url(./res/img/chkok.gif) no-repeat 0px 0px; padding:2px 0 2px 24px; background-color:#F6F6F6;}.inputlabel{background:transparent; padding:2px 0 2px 24px;}</style>



<div class="operationPage">
  <?php include "admin_nav.php"; ?>
  <div class="operationArea">
	<?php include "admin_menu.php"; ?>

<?php
use Ky\Model\Product;

if(isset($_GET['id'])){
   $form = Config::getValue('member_new_category',$_GET['id'],$_SESSION['id']);  
}else{
   $form = array(
        'name' => '',
        'pid'  => $_SESSION['id'],
   );    
}

?>

	 	 	 	 
				 
				 
				 <div class="right">
  <form  onsubmit="return checkSubmit(this);"  name="publishForm" id="publishForm" method="post" action="index.php?p=www/member/website_new_category_add_done"  enctype="multipart/form-data" >
	<input type="hidden" name="pid" value="<?php echo $_SESSION['id']; ?>" />
<?php
    if(isset($_GET['id'])){
        echo '<input type="hidden" name="id" value="'.$_GET['id'].'" />';    
    }
?>
        <div class="postTips"><span>提示：</span></div>

   <div class="formblock">
      <div class="formheader">
            <div class="headerTitle">新闻分类添加</div>
      </div>
      
       <div class="formline">
            <div class="formlabel"><span class="inputlabelok"></span>分类名称：<span>*</span></div>
            <div class="formcontent">
                <input name="name" id="name" value="<?php echo $form['name']; ?>" type="text" class="input220" >
                <span id="oproductName_err"></span>
                <div class="note"></div>
            </div>
       </div>

    </div>

    <div style="clear:both; font-size:0px; line-height:0px; height:0px; background-color:#FFFFFF"></div>
    
    
    <table align="center">
      <tbody><tr>
        <td align="center">
          <input type="submit" value="完成,发布!" class="bigbutton" >
        </td>
      </tr>
    </tbody></table>
  </form>
</div>
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
<div style="clear:both; font-size:0px; line-height:0px; height:0px; background-color:#FFFFFF"></div>

		<div style="clear:both; font-size:0px; line-height:0px; height:0px; background-color:#FFFFFF"></div>
	</div>
</div>


<?php
include "footer.php";
?>				 
	