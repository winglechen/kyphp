<?php

include "header.php";
use Ky\Model\Mnav2;
use Ky\Core\Core\Db;
use Ky\Core\Core\Form;


Form::init('member_nav2_list_search');
$_POST['corpid'] = $_SESSION['id'];

$condition = array(
    'title' => 'like',
    'corpid'      => 'eq',
);
$page = array(
    'url'           => 'index.php?p=www/member/website_nav2_list&page=',
    'curPage'       => $_POST['page'],
    'numPerPage'    => 10,
    'style'         => 'default',
);

$data = Mnav2::lists('id,name,url',$condition,$_POST,$page);


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



<div class="operationPage">
  <?php include "admin_nav.php"; ?>
  <div class="operationArea">
	<?php include "admin_menu.php"; ?>

	 	 	 	 <div class="management">
    <div class="switchTag">
    </div>
    <div class="tabswitchborder">
      <div class="searchproducts">
      </div>
      <div class="productdatablock">
        <form  onsubmit="return checkSubmit(this);"  id="listForm" name="listForm" method="post" action="">
        <input type="hidden" name="searchType" id="searchType" value="auditing">
          <div class="operating">
          
            
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tbody><tr>
                <td>
                                                                </td>
                <td align="right" class="shangxia"><table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tbody><tr>
		<td align="right" valign="middle">
				
	            </td>
	</tr>
</tbody></table></td>
              </tr>
                         </tbody></table>
            <table width="100%" border="0" cellspacing="0" cellpadding="0" class="pdata">
              <thead>
                <tr>
                  <td width="150">名称</td>
                  <td>链接</td>
                  <td width="200">操作</td>
                </tr>
              </thead>
              <tbody>
<?php
$row = null;
for($i=0,$len=count($data['data']); $i<$len; $i++){
    $row = $data['data'][$i];
    $url = $row['url'];
    $pid = 0;
    
    if(preg_match('/\?p\=page&id\=(\d*)/i',$url,$result)){
        $pid = $result[1];
    }
?>
<tr onmouseover="this.bgColor='#EFFFEE';" onmouseout="this.bgColor='#FFFFFF';" bgcolor="#FFFFFF">   
    <td align="left" valign="top" class="datadescription">
        <a href="index.php?p=www/member/website_nav2_add&id=<?php echo $row['id']; ?>"><?php echo $row['name']; ?></a>
    </td>
    <td align="left" valign="middle" class="dataexpire">
        <?php echo $row['url']; ?>
    </td>
    <td align="center" valign="middle" class="datamod">
        <table width="100%" border="0" cellspacing="3" cellpadding="0" class="modopration">
            <tbody>
                <tr>
                    <td  align="center">
                        <a href="index.php?p=www/member/website_nav2_add&id=<?php echo $row['id']; ?>">修改</a> | 
                        <a href="index.php?p=www/member/website_nav_del2&id=<?php echo $row['id']; ?>" onclick="return confirm('您确定要删除吗？');">删除</a>
                        <?php
                            if($pid != 0){
                                echo ' | <a href="/index.php?p=www/member/website_page_add&id=' . $pid . '" target="_blank" >编辑内容</a>';
                            }
                        ?>
                    </td>
                </tr>
            </tbody>
        </table>
    </td>
</tr>
<?php
}
?>
                </tbody>
            </table>
            <table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin-top:12px;" class="productDataBottom">
              <tbody>
              <tr>
                <td>
                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="pages">
	<tbody><tr>
		<td align="right" valign="middle" style="height:25px;padding-right:15px; border-bottom:1px solid #93CFFE; background-color:#CBE6FE;">
<?php
    echo $data['page'];
?>
        </td>
	</tr>
</tbody></table>                </td>
                </tr>
            </tbody></table>
                      </div>
        </form>
      </div>
      <div class="columnTips" style="margin:10px 2px;">
                  <strong>重要提示：</strong><br>
1、经常更新供应信息可以在搜索结果中排位更加靠前，建议您将最新的供应信息及时发布；<br>
2、请您尽可能完整填写各项目，以利于买家更好的了解您的产品。<br>
3、每条信息每天限重发一次，当天发布的信息，明天才可以重发。建议您定期修改信息内容，提高信息质量，信息质量越高，越能吸引买家。
	  </div>
    </div>
  </div>
<div style="clear:both; font-size:0px; line-height:0px; height:0px; background-color:#FFFFFF"></div>

		<div style="clear:both; font-size:0px; line-height:0px; height:0px; background-color:#FFFFFF"></div>
	</div>
</div>


<?php
include "footer.php";
?>				 
	
